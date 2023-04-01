<?php

namespace App\Http\Controllers;

use Architecture\Application\ProductInputDTO;
use Architecture\Application\ProductService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(
        protected ProductService $productService
    ) {
    }

    public function create(Request $request)
    {
        try {
            $productDTO = new ProductInputDTO(...$request->all([
                'name',
                'description',
                'price'
            ]));

            $this->productService->create($productDTO);

            return new JsonResponse('', 201);
        } catch (\Exception $exception) {
            return new JsonResponse('Error on save product', 500);
        }
    }
}
