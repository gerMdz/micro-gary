<?php

namespace App\Controller;

use App\DTO\LowestPriceEnquiry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

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
    public function menorPrecio(Request $request, int $id, SerializerInterface $serializer): JsonResponse
    {

        if($request->headers->has('force_fail')){
            return new JsonResponse([
                'error' => 'Menor precio. Mensaje de fallo'
            ], $request->headers->get('force_fail'));
        }
        $menorPrecioConsulta = $serializer->deserialize($request->getContent(), LowestPriceEnquiry::class, 'json');

        return new JsonResponse([
            "quantity" => 4,
            "request_location" => "AR",
            "voucher_code" => "OU812",
            "request_date" => "2023-05-08",
            "product_id" => $id,
            'price' => 100,
            'descuento_price' => 50,
            'promo_id' => 3,
            'promo_name' => 'Lunes free'
        ], 200);
    }


    #[Route('/products/{id}/promociones', name: 'app_products_promociones', methods: 'GET')]
    public function promociones()
    {

    }
}
