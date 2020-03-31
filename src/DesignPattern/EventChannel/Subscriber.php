<?php declare(strict_types=1);


namespace App\DesignPattern\EventChannel;


use App\DesignPattern\EventChannel\Interfaces\SubscriberInterface;

class Subscriber implements SubscriberInterface
{

    private string $name;

    public function __construct(string $name)
    {
        $this->name=$name;
    }

    public function notify(string $data)
    {

    }



}