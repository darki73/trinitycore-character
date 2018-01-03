<?php

use FreedomCore\TrinityCore\Console\Client as SOAPClient;
use FreedomCore\TrinityCore\Support\DB2Reader;
use FreedomCore\TrinityCore\Character\Character;

$client = new SOAPClient('2#1', 'soapPassword');
$reader = new DB2Reader(true);
$reader->openFile('ItemSparse'); // This step is mandatory, otherwise you will get RuntimeException!

$character = new Character('Charactername', $reader);

$boost = $character->boost($client);
$boost->setMessageTitle('Character boost message title');
$boost->setMessageBody('Character boost message body');
$boost->boostTo(100)->withSpec(3); // Boosting druid to level 100 with guardian spec selected
$status = $boost->boost(); // True if success, false if error occurred