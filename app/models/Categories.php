<?php

class Categories extends \Phalcon\Mvc\Model
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
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    public $type;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
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
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $parent_id;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'categories';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Categories[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Categories
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
