<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class MarketsMigration_102
 */
class MarketsMigration_102 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('markets', [
                'columns' => [
                    new Column(
                        'id',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'unsigned' => true,
                            'notNull' => true,
                            'autoIncrement' => true,
                            'size' => 11,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'category_id',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'size' => 11,
                            'after' => 'id'
                        ]
                    ),
                    new Column(
                        'fr_id',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'size' => 11,
                            'after' => 'category_id'
                        ]
                    ),
                    new Column(
                        'name',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 255,
                            'after' => 'fr_id'
                        ]
                    ),
                    new Column(
                        'url',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "",
                            'size' => 255,
                            'after' => 'name'
                        ]
                    ),
                    new Column(
                        'date',
                        [
                            'type' => Column::TYPE_DATE,
                            'size' => 1,
                            'after' => 'url'
                        ]
                    ),
                    new Column(
                        'time',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 1,
                            'after' => 'date'
                        ]
                    ),
                    new Column(
                        'betTillDate',
                        [
                            'type' => Column::TYPE_DATE,
                            'size' => 1,
                            'after' => 'time'
                        ]
                    ),
                    new Column(
                        'betTillTime',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 1,
                            'after' => 'betTillDate'
                        ]
                    ),
                    new Column(
                        'lastUpdateDate',
                        [
                            'type' => Column::TYPE_DATE,
                            'size' => 1,
                            'after' => 'betTillTime'
                        ]
                    ),
                    new Column(
                        'lastUpdateTime',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 1,
                            'after' => 'lastUpdateDate'
                        ]
                    ),
                    new Column(
                        'placeAvailable',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'size' => 1,
                            'after' => 'lastUpdateTime'
                        ]
                    ),
                    new Column(
                        'forcastAvailable',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'size' => 1,
                            'after' => 'placeAvailable'
                        ]
                    ),
                    new Column(
                        'tricastAvailable',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'size' => 1,
                            'after' => 'forcastAvailable'
                        ]
                    ),
                    new Column(
                        'eachwayAvailable',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'size' => 1,
                            'after' => 'tricastAvailable'
                        ]
                    ),
                    new Column(
                        'cashoutAvailable',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'size' => 1,
                            'after' => 'eachwayAvailable'
                        ]
                    ),
                    new Column(
                        'startingPriceAvailable',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'size' => 1,
                            'after' => 'cashoutAvailable'
                        ]
                    ),
                    new Column(
                        'livePriceAvailable',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'size' => 1,
                            'after' => 'startingPriceAvailable'
                        ]
                    ),
                    new Column(
                        'guarenteedPriceAvailable',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'size' => 1,
                            'after' => 'livePriceAvailable'
                        ]
                    ),
                    new Column(
                        'firstPriceAvailable',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'size' => 1,
                            'after' => 'guarenteedPriceAvailable'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('PRIMARY', ['id'], 'PRIMARY')
                ],
                'options' => [
                    'TABLE_TYPE' => 'BASE TABLE',
                    'AUTO_INCREMENT' => '2',
                    'ENGINE' => 'InnoDB',
                    'TABLE_COLLATION' => 'utf8_general_ci'
                ],
            ]
        );
    }

    /**
     * Run the migrations
     *
     * @return void
     */
    public function up()
    {

    }

    /**
     * Reverse the migrations
     *
     * @return void
     */
    public function down()
    {

    }

}
