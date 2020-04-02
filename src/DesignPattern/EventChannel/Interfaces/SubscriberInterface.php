<?php declare(strict_types=1);


namespace App\DesignPattern\EventChannel\Interfaces;


interface SubscriberInterface
{

    public function notify(string $data);

}