<?php declare(strict_types=1);


namespace App\DesignPattern\PropertyContainer;


class PropertyContainer implements PropertyContainerInterface
{
    private $propertyContainer=[];

    function addProperty(string $propertyName,string $value)
    {
        $this->propertyContainer[$propertyName] = $value;
    }

    function getProperty(string $propertyName)
    {
        return $this->propertyContainer[$propertyName] ?? null;
    }

    function deleteProperty(string $propertyName)
    {
        unset($this->propertyContainer[$propertyName]);
    }

    function setProperty(string $propertyName,string $value)
    {
        if (!isset($this->propertyContainer[$propertyName]))
        {
            throw new \Exception("Property [{$propertyName}] not found");
        }

        $this->propertyContainer[$propertyName]=$value;
    }
}