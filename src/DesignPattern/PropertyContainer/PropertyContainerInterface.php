<?php declare(strict_types=1);


namespace App\DesignPattern\PropertyContainer;


interface PropertyContainerInterface
{
    function addProperty(string $propertyName,string $value);

    function getProperty(string $propertyName);

    function deleteProperty(string $propertyName);

    function setProperty(string $propertyName,string $value);
}