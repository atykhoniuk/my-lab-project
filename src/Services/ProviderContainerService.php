<?php


namespace App\Services;


use App\Entity\User;

class ProviderContainerService
{
    public function getNewUser()
    {
        $user = new User();

        $user->setEmail('grizzzaa@gmail.com');

        $user->setPassword('123123');

        $user->setName('Vitaliy');

        $user->addProperty('daily attendance','10');

        return $user;
    }
}