<?php


namespace App\Services\Interfaces;

use App\Results\Result;

interface IProductManager
{
    public function registerProduct($data): Result;
    public function listProduct(): Result;
}
