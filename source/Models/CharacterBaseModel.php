<?php namespace FreedomCore\TrinityCore\Character\Models;

use Config;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CharacterBaseModel
 * @package FreedomCore\TrinityCore\Character\Models
 */
abstract class CharacterBaseModel extends Model
{

    /**
     * Connection name
     * @var string
     */
    protected $connection = 'character';

    /**
     * Table name
     * @var string
     */
    protected $table;

    /**
     * Table primary key
     * @var string
     */
    protected $primaryKey;

    /**
     * Does that table supposed auto-increment
     * @var string
     */
    public $incrementing = false;

    /**
     * Doest that table includes timestamps generated
     * by Laravel
     * @var bool
     */
    public $timestamps = false;

    /**
     * Columns which are allowed to be mass assigned
     * @var array
     */
    protected $fillable = [];

    /**
     * Cast value to specified data type.
     * @var array
     */
    protected $casts = [];

    /**
     * Key for configuration file containing database
     * connection settings.
     * @var string
     */
    private $configurationKey = 'character.connections.character';

    /**
     * CharacterBaseModel constructor.
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->getDatabaseConnection();
    }

    /**
     * Fake ID incrementation
     * @return int
     */
    public function scopeIncrementID()
    {
        if ($this->primaryKey) {
            return $this->max($this->primaryKey) + 1;
        } else {
            throw new \RuntimeException('Primary key is not set!');
        }
    }

    /**
     * Get Database Connection Settings
     */
    protected function getDatabaseConnection()
    {
        $existingConnections = Config::get('database.connections');
        if (!array_key_exists('character', $existingConnections)) {
            Config::set('database.connections.character', Config::get($this->configurationKey));
        }
    }
}
