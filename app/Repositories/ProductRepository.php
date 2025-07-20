<?php

namespace App\Repositories;

use App\Models\Product;
use App\Repositories\Interfaces\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{
    public function getAll()
    {
        return Product::with('category')->get();
    }

    public function getById($id)
    {
        return Product::with('category')->findOrFail($id);
    }

    public function create(array $data, $id = null)
    {
        if ($id) {
            $product = Product::findOrFail($id);
            $product->update($data);
            return $product;
        } else {
            return Product::create($data);
        }
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return true;
    }
}