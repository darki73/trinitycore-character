<?php namespace FreedomCore\TrinityCore\Character\Commands;

use FreedomCore\TrinityCore\Character\Classes\Boost\GearSets;
use Illuminate\Console\Command;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Output\ConsoleOutput;

/**
 * Class LoadGearSets
 * @package FreedomCore\TrinityCore\Character\Commands
 */
class LoadGearSets extends Command
{

    /**
     * The name and signature of the console command.
     * @var string
     */
    protected $signature = 'character:gearsets';

    /**
     * The console command description.
     * @var string
     */
    protected $description = 'Load gear sets data for character boost';

    /**
     * Create a new command instance.
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     * @return mixed
     */
    public function handle()
    {
        $saveFolder = str_replace('Commands', 'Data', __DIR__) . DIRECTORY_SEPARATOR;
        $fileName = 'gearingStrategy.json';
        $gearSets = new GearSets();
        $links = [];
        foreach ($gearSets->getLevelsRelation() as $levelID => $level) {
            foreach ($gearSets->getClasses() as $classID => $className) {
                $links[$className][$levelID] = $this->getWoWDBClassLink($gearSets, $classID, $levelID);
            }
        }
        $totalItems = count($links, COUNT_RECURSIVE);
        $progress = new ProgressBar(new ConsoleOutput(), $totalItems);
        $data = [];
        $unexpected = false;
        foreach ($links as $class => $levelData) {
            foreach ($levelData as $level => $specData) {
                foreach ($specData as $spec => $slotData) {
                    foreach ($slotData as $slot => $link) {
                        try {
                            $data[$class][$level][$spec][$slot] = $this->crawlGearPiece($link);
                            $progress->advance();
                        } catch (\Exception $exception) {
                            $unexpected = [
                                'message'       =>  'Error occurred during the processing!',
                                'link'          =>  $link,
                                'parameters'    =>  [
                                    'class'     =>  $class,
                                    'level'     =>  $level,
                                    'slot'      =>  $slot
                                ]
                            ];
                            break 4;
                        }
                    }
                }
            }
        }
        $progress->finish();
        $fp = fopen($saveFolder . $fileName, 'w');
        fwrite($fp, json_encode($data));
        fclose($fp);
        if ($unexpected !== false) {
            $this->info(PHP_EOL . 'There was an error during the processing. Here is the last error:');
            dd($unexpected);
        } else {
            $this->info(PHP_EOL . 'Successfully fetched all required data!');
        }
        return true;
    }

    /**
     * Get links to wowdb items finder to manually add items
     * to the gear set for each class
     * @param GearSets $gearSets
     * @param int $classID
     * @param int $levelID
     * @return array
     */
    public function getWoWDBClassLink(GearSets $gearSets, int $classID, int $levelID)
    {
        $wowDBGearLinks = [];
        $dataForLevel = $gearSets->getClassDataByLevel($classID, $levelID);
        $gearLevel = $gearSets->gearLevels($levelID);
        foreach ($dataForLevel as $specID => $slots) {
            foreach ($slots as $slotID => $itemID) {
                $wowDBGearLinks[$specID][] = sprintf($gearSets->getWebsiteSearchLink(), $gearLevel, $gearLevel, $levelID, $levelID, $classID, $specID, $gearSets->getWebsiteSlots($slotID));
            }
        }
        return $wowDBGearLinks;
    }

    /**
     * Crawl single gear piece
     * @param string $link
     * @return int
     */
    public function crawlGearPiece(string $link) : int
    {
        $content = file_get_contents($link);
        $crawler = new \Symfony\Component\DomCrawler\Crawler();
        $crawler->addHtmlContent($content);
        $links = $crawler->filter('a.listing-icon')->each(function (\Symfony\Component\DomCrawler\Crawler $node, $index) {
            $icon = $this->getTextBetween($node->html(), '<img class="icon-36 " src="', '" width="36" height="36"');
            $link = $this->getTextBetween($node->parents()->html(), '<a class="listing-icon" href="', '">');
            $valid = strstr($icon, 'panda') ? true : false;
            return [
                'icon'  =>  $icon,
                'link'  =>  $link,
                'valid' =>  $valid
            ];
        });
        $itemID = 0;
        foreach ($links as $data) {
            if ($data['valid']) {
                $itemID = intval($this->getTextBetween($data['link'], 'http://www.wowdb.com/items/', '-'));
                break;
            }
        }
        if ($itemID === 0) {
            try {
                $itemID = intval($this->getTextBetween($links[0]['link'], 'http://www.wowdb.com/items/', '-'));
            } catch (\Exception $exception) {
                dd(['link' => $link, 'data' => $links]);
            }
        }
        if ($itemID === 0) {
            throw new \RuntimeException('Item ID should not be equal to 0.' . PHP_EOL . 'Error occurred on link: ' . $link);
        }
        return $itemID;
    }

    /**
     * Get text between two substrings
     * @param $string
     * @param $start
     * @param $end
     * @see https://stackoverflow.com/a/9826656/2057806
     * @author Alejandro Iglesias
     * @return bool|string
     */
    private function getTextBetween($string, $start, $end)
    {
        $string = ' ' . $string;
        $ini = strpos($string, $start);
        if ($ini == 0) {
            return '';
        }
        $ini += strlen($start);
        $len = strpos($string, $end, $ini) - $ini;
        return substr($string, $ini, $len);
    }
}
