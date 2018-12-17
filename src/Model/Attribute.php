<?php


namespace IntegraCommerce\Model;

use IntegraCommerce\Classes\Collection;
use IntegraCommerce\Classes\ModelBase;

class Attribute extends ModelBase
{
    public static $attributeMap = array(
        "Name" => "string",
    );

    /**
     * @var string
     */
    protected $name;

    public function __construct(\StdClass $data)
    {
        $this->name = $data->Name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}