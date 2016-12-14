<?php

class Participants extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $market_id;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $name;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $fr_id;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    public $odds;

    /**
     *
     * @var double
     * @Column(type="double", length=10, nullable=true)
     */
    public $oddsDecimal;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $lastUpdateDate;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $lastUpdateTime;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    public $handicap;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'participants';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Participants[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Participants
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
