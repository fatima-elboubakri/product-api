<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;

class CreateProduct extends Command
{
    protected $signature = 'product:create';
    protected $description = 'Create a new product';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $name = $this->ask('What is the product name?');
        $description = $this->ask('What is the product description?');
        $price = $this->ask('What is the product price?');

        $product = new Product;
        $product->name = $name;
        $product->description = $description;
        $product->price = $price;

        $product->save();

        $this->info("Product {$product->name} was created successfully!");
    }
}
