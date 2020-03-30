<?php declare(strict_types=1);


namespace App\Controller;

use App\Services\ProviderContainerService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class PropertyContainerController
 * @Route("/property")
 */
class PropertyContainerController extends AbstractController
{
    /**
     * @param ProviderContainerService $service
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     * @Route("/user")
     */
    public function getUserWithNewProperty(ProviderContainerService $service)
    {

        return $this->json($service->getNewUser());

    }

}