<?php declare(strict_types=1);


namespace App\DesignPattern\EventChannel;


use App\DesignPattern\EventChannel\Interfaces\EventChannelInterface;
use App\DesignPattern\EventChannel\Interfaces\SubscriberInterface;

class EventChannel implements EventChannelInterface
{

     private array $topics = [];

     public function subscribe(string $topic, SubscriberInterface $subscriber)
     {

         $this->topics[$topic][] = $subscriber;

     }

     public function publish(string $topic, string $data)
     {

         foreach ($this->topics[$topic] as $subscriber)
         {

             $subscriber->notify($data);

         }

     }

}