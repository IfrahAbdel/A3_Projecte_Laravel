<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Address;
use App\Models\Category;
use App\Models\Image;
use App\Models\Marca;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        
        Image::factory()->create([
            'url' => 'assets/img/avaters/defaultProfile.jpg',
        ]);
        //marcas

        Marca::factory()->create([
            'name' => 'marca 1'
        ]);
        Marca::factory()->create([
            'name' => 'marca 2'
        ]);
        Marca::factory()->create([
            'name' => 'marca 3'
        ]);
        
        // Categories
       
        // Category::factory()->create([
        //     'name' => 'test',
        //     'description' => 'just to avoid errors',
        // ]);
        Image::factory()->create([
            'url' => 'assets\img\Catygories\electronic.jpg',
        ]);
        Image::factory()->create([
            'url' => 'assets/img/Catygories/tools.jpg',
        ]);
        Image::factory()->create([
            'url' => 'assets/img/Catygories/Toys.jpg',
        ]);
        Category::factory()->create([
            'name' => 'Electronics',
            'description' => 'Electronics',
            'image_id' => 2
        ]);
        Category::factory()->create([
            'name' => 'Tools',
            'description' => 'Tools',
            'image_id' => 3
        ]);
        Category::factory()->create([
            'name' => 'Toys',
            'description' => 'Toys',
            'image_id' => 4
        ]);
        // Products   
        Image::factory()->create([
            'url' => 'assets/img/products/product-img-3.jpg',
        ]);
        Image::factory()->create([
            'url' => 'assets/img/products/product-img-4.jpg',
        ]);
        Image::factory()->create([
            'url' => 'assets/img/products/product-img-5.jpg',
        ]);
        Image::factory()->create([
            'url' => 'assets/img/products/product-img-6.jpg',
        ]);
        // Product::factory()->create([
        //     'id' => 0,
        //     'name' => 'test',
        //     'description' => 'just to avoid errors',
        //     'category_id' => 0,
        //     'price' => 0,
        //     'marca_id' => 0,
        //     'stock' => 0,
        //     'discount' => 0,
        //     'image_id' => 5
        // ]);
        
        Product::factory()->create([
            'name' => 'backpack',
            'description' => 'backpack',
            'category_id' => 1,
            'price' => 10,
            'marca_id' => 1,
            'stock' => 10,
            'discount' => 0,
            'image_id' => 5
        ]);
        Product::factory()->create([
            'name' => 'headphones',
            'description' => 'headphones',
            'category_id' => 1,
            'price' => 10,
            'marca_id' => 1,
            'stock' => 10,
            'discount' => 0,
            'image_id' => 6
        ]);
        Product::factory()->create([
            'name' => 'laptop',
            'description' => 'laptop',
            'category_id' => 2,
            'price' => 10,
            'marca_id' => 1,
            'stock' => 10,
            'discount' => 0,
            'image_id' => 7
        ]);
        Product::factory()->create([
            'name' => 'phone',
            'description' => 'phone ', 
            'category_id' => 3,
            'price' => 10,
            'marca_id' => 2,
            'stock' => 10,
            'discount' => 0,
            'image_id' => 8
        ]);
        
       
        \App\Models\User::factory()->create([
            'name' => 'abdel',
            'email' => 'abdel@abdel.com',
            'username' => 'abdel',
            'role' => 'admin',
            'password' => Hash::make('abdel123'),
            'image_id' => 1
        ]);
        Address::factory()->create([
            'country' => 'Espanya',
            'city' => 'Barcelona',
            'postal_code' => '08001',
            'street' => 'Carrer de la Placa',
            'floor' => '2',
            'door' => '2',
            'user_id' => 1
        ]
        );
    }
}
