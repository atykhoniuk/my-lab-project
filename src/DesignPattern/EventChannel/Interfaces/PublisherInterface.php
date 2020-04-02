<?php declare(strict_types=1);


namespace App\DesignPattern\EventChannel\Interfaces;


interface PublisherInterface
{

    public function publish(string $data);

}