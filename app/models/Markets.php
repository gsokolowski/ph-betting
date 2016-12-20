<?php

class Markets extends \Phalcon\Mvc\Model
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
    public $type_id;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $fr_id;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $name;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $url;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $date;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $time;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $betTillDate;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $betTillTime;

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
     * @Column(type="string", length=1, nullable=true)
     */
    public $placeAvailable;

    /**
     *
     * @var string
     * @Column(type="string", length=1, nullable=true)
     */
    public $forcastAvailable;

    /**
     *
     * @var string
     * @Column(type="string", length=1, nullable=true)
     */
    public $tricastAvailable;

    /**
     *
     * @var string
     * @Column(type="string", length=1, nullable=true)
     */
    public $eachwayAvailable;

    /**
     *
     * @var string
     * @Column(type="string", length=1, nullable=true)
     */
    public $cashoutAvailable;

    /**
     *
     * @var string
     * @Column(type="string", length=1, nullable=true)
     */
    public $startingPriceAvailable;

    /**
     *
     * @var string
     * @Column(type="string", length=1, nullable=true)
     */
    public $livePriceAvailable;

    /**
     *
     * @var string
     * @Column(type="string", length=1, nullable=true)
     */
    public $guarenteedPriceAvailable;

    /**
     *
     * @var string
     * @Column(type="string", length=1, nullable=true)
     */
    public $firstPriceAvailable;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'markets';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Markets[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Markets
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
