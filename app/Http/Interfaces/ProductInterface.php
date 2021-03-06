<?php
namespace App\Http\Interfaces;

interface ProductInterface
{

    public function products();

    public function productsForUser($request);

    public function deleteproduct($request);

    public function addproduct($request);

    public function updateproductByAdmin($request);
}
