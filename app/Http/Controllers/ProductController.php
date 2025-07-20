<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\ProductRepositoryInterface;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        return response()->json($this->productRepository->getAll());
    }

    public function productDetail($id)
    {
        return response()->json($this->productRepository->getById($id));
    }

    public function addAndUpdateProduct(Request $request, $id = null)
    {
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name'        => 'required|string',
            'price'       => 'required|numeric',
            'stock'       => 'required|integer',
        ]);

        $product = $this->productRepository->create($validated, $id);
        
        $responseData = [
            'success' => true,
            'message' => $id ? 'Product updated successfully.' : 'Product created successfully.',
            'data'    => $product
        ];

        return response()->json($responseData, $id ? 200 : 201);
    }

    public function deleteProduct($id)
    {
        $this->productRepository->delete($id);
        return response()->json(['message' => 'Product deleted successfully.']);
    }
}