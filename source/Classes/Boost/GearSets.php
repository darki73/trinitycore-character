<?php namespace FreedomCore\TrinityCore\Character\Classes\Boost;

use FreedomCore\TrinityCore\Character\Models\Character;
use FreedomCore\TrinityCore\Character\Models\CharacterInventory;
use FreedomCore\TrinityCore\Character\Models\ItemInstance;

/**
 * Class GearSets
 * @package FreedomCore\TrinityCore\Character\Classes\Boost
 */
class GearSets
{

    /**
     * Link for WoWDB item finder
     * @var string
     */
    protected $wowDBSerachLink = 'http://www.wowdb.com/items?filter-ilvl-min=%s&filter-ilvl-max=%s&filter-reqlvl-min=%s&filter-reqlvl-max=%s&filter-af=%s&filter-af-spec=%s&filter-quality=4&filter-slot=%s&sort=-level';

    /**
     * Relation between coded slots and WoWDB Slots
     * @var array
     */
    protected $wowDBSlots = [
        0   =>  2,  // Head
        1   =>  4,  // Neck
        2   =>  8,  // Shoulders
        4   =>  32,  // Chest
        5   =>  64,  // Waist
        6   =>  128,  // Legs
        7   =>  256,  // Feet
        8   =>  512,  // Wrists
        9   =>  1024,  // Hands
        10  =>  2048,  // Finger 1
        11  =>  2048,  // Finger 2
        12  =>  4096,  // Trinket 1
        13  =>  4096,  // Trinket 2
        14  =>  65536,  // Back
    ];

    /**
     * Available Classes
     * @var array
     */
    protected $classes = [
        1   =>  'warrior',
        2   =>  'paladin',
        3   =>  'hunter',
        4   =>  'rogue',
        5   =>  'priest',
        6   =>  'deathKnight',
        7   =>  'shaman',
        8   =>  'mage',
        9   =>  'warlock',
        10  =>  'monk',
        11  =>  'druid'
    ];

    /**
     * Gear Levels by Boost Level
     * @var array
     */
    protected $gearLevels = [
        90  =>  483,
        100 =>  640
    ];

    /**
     * Gear set for boosted Warrior
     * @var array
     */
    protected $warriorGear = [
        90  =>  [
            1   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            2   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            3   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ]
        ],
        100 =>  [
            1   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            2   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            3   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ]
        ]
    ];

    /**
     * Gear set for boosted Paladin
     * @var array
     */
    protected $paladinGear = [
        90  =>  [
            1   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            2   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            3   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ]
        ],
        100 =>  [
            1   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            2   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            3   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ]
        ]
    ];

    /**
     * Gear set for boosted Hunter
     * @var array
     */
    protected $hunterGear = [
        90  =>  [
            1   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            2   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            3   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ]
        ],
        100 =>  [
            1   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            2   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            3   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ]
        ]
    ];

    /**
     * Gear set for boosted Rogue
     * @var array
     */
    protected $rogueGear = [
        90  =>  [
            1   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            2   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            3   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ]
        ],
        100 =>  [
            1   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            2   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            3   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ]
        ]
    ];

    /**
     * Gear set for boosted Priest
     * @var array
     */
    protected $priestGear = [
        90  =>  [
            1   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            2   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            3   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ]
        ],
        100 =>  [
            1   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            2   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            3   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ]
        ]
    ];

    /**
     * Gear set for boosted Death Knight
     * @var array
     */
    protected $deathKnightGear = [
        90  =>  [
            1   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            2   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            3   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ]
        ],
        100 =>  [
            1   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            2   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            3   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ]
        ]
    ];

    /**
     * Gear set for boosted Shaman
     * @var array
     */
    protected $shamanGear = [
        90  =>  [
            1   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            2   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            3   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ]
        ],
        100 =>  [
            1   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            2   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            3   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ]
        ]
    ];

    /**
     * Gear set for boosted Mage
     * @var array
     */
    protected $mageGear = [
        90  =>  [
            1   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            2   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            3   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ]
        ],
        100 =>  [
            1   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            2   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            3   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ]
        ]
    ];

    /**
     * Gear set for boosted Warlock
     * @var array
     */
    protected $warlockGear = [
        90  =>  [
            1   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            2   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            3   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ]
        ],
        100 =>  [
            1   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            2   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            3   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ]
        ]
    ];

    /**
     * Gear set for boosted Monk
     * @var array
     */
    protected $monkGear = [
        90  =>  [
            1   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            2   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            3   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ]
        ],
        100 =>  [
            1   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            2   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            3   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ]
        ]
    ];

    /**
     * Gear set for boosted Druid
     * @var array
     */
    protected $druidGear = [
        90  =>  [
            1   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            2   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            3   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            4   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ]
        ],
        100 =>  [
            1   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            2   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            3   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ],
            4   =>  [
                0   =>  0,  // Head
                1   =>  0,  // Neck
                2   =>  0,  // Shoulders
                4   =>  0,  // Chest
                5   =>  0,  // Waist
                6   =>  0,  // Legs
                7   =>  0,  // Feet
                8   =>  0,  // Wrists
                9   =>  0,  // Hands
                10  =>  0,  // Finger 1
                11  =>  0,  // Finger 2
                12  =>  0,  // Trinket 1
                13  =>  0,  // Trinket 2
                14  =>  0,  // Back
            ]
        ]
    ];

    /**
     * Indicates whether the gearing strategy has been loaded
     * @var bool
     */
    protected $strategyLoaded = false;

    /**
     * GearSets constructor.
     */
    public function __construct()
    {
        $saveFolder = str_replace('Classes\\Boost', 'Data', __DIR__) . DIRECTORY_SEPARATOR;
        $fileName = 'gearingStrategy.json';
        if (file_exists($saveFolder . $fileName)) {
            $data = json_decode(file_get_contents($saveFolder . $fileName), true);
            foreach ($data as $class => $information) {
                $variableName = $class . 'Gear';
                $this->$variableName = $information;
            }
            $this->strategyLoaded = true;
        }
    }

    /**
     * Check if gearing strategy loaded
     */
    public function isGearingStrategyLoaded() {
        if (!$this->strategyLoaded) {
            throw new \RuntimeException('Gearing strategy is not loaded!');
        }
    }


    /**
     * Get list of all available classes
     * @return array
     */
    public function getClasses() : array
    {
        return $this->classes;
    }

    /**
     * Get ilvl for specified level
     * @param int $levelID
     * @return int
     */
    public function gearLevels(int $levelID) : int
    {
        return $this->gearLevels[$levelID];
    }

    /**
     * Get relation between game and website slot
     * @param int $slotID
     * @return int
     */
    public function getWebsiteSlots(int $slotID) : int
    {
        return $this->wowDBSlots[$slotID];
    }

    /**
     * Get WoWDB Search Link
     * @return string
     */
    public function getWebsiteSearchLink() : string
    {
        return $this->wowDBSerachLink;
    }

    /**
     * Get gear ilvl relation for level
     * @return array
     */
    public function getLevelsRelation() : array
    {
        return $this->gearLevels;
    }

    /**
     * Convert class id to class name
     * @param int $classID
     * @return string
     */
    public function classIndexToName(int $classID) : string
    {
        return $this->classes[$classID];
    }

    /**
     * Convert class name to class variable
     * @param string $className
     * @param string $whichVariable
     * @return string
     */
    public function classNameToVariable(string $className, string $whichVariable = 'Gear') : string
    {
        return $className . $whichVariable;
    }

    /**
     * Get class data
     * @param string $variableName
     * @return array
     */
    public function getClassVariableData(string $variableName) : array
    {
        return $this->$variableName;
    }

    /**
     * Get class data by name
     * @param int $classID
     * @param int $levelID
     * @param string $whichVariable
     * @return array
     */
    public function getClassDataByLevel(int $classID, int $levelID, string $whichVariable = 'Gear') : array
    {
        $classData = $this->getClassVariableData($this->classNameToVariable($this->classIndexToName($classID), $whichVariable));
        return $classData[$levelID];
    }
}
