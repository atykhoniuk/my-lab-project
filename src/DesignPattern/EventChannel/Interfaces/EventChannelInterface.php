<?php declare(strict_types=1);

namespace App\DesignPattern\EventChannel\Interfaces;

interface EventChannelInterface
{

    public function publish(string $topic, string $data);

    public function subscribe(string $topic,SubscriberInterface $subscriber);

}