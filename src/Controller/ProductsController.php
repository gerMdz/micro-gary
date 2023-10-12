<?php

namespace App\Controller;

use App\DTO\LowestPriceEnquiry;
use App\Filter\PromocionFilterInterface;
use App\Service\Serializer\DTOSerializer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductsController extends AbstractController
{
    #[Route('/products', name: 'app_products')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ProductsController.php',
        ]);
    }

    #[Route('/products/{id}/menor-precio', name: 'app_products_menor-precio', methods: 'POST')]
    public function menorPrecio(Request $request, int $id, DTOSerializer $serializer, PromocionFilterInterface $promocionFilter): Response
    {

        if ($request->headers->has('force_fail')) {
            return new JsonResponse([
                'error' => 'Menor precio. Mensaje de fallo'
            ], $request->headers->get('force_fail'));
        }

        /** @var LowestPriceEnquiry $menorPrecioConsulta */
        $menorPrecioConsulta = $serializer->deserialize($request->getContent(), LowestPriceEnquiry::class, 'json');

        $modificaConsulta = $promocionFilter->aplicado($menorPrecioConsulta);


        $responseContent = $serializer->serialize($modificaConsulta, 'json');

        return new Response($responseContent, 200);


    }


    #[Route('/products/{id}/promociones', name: 'app_products_promociones', methods: 'GET')]
    public function promociones()
    {

    }
}
