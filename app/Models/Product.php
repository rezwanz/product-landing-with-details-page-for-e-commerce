<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    private static $products = [];

    public static function allProducts()
    {
        self::$products = [
            0 => [
                'id' => 1,
                'name' => 'Blue Suit',
                'image' => 'assets/img/1.jpg',
                'price' => '8500',
                'short_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'long_description' => 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            ],
            1 => [
                'id' => 2,
                'name' => 'Brown Suit',
                'image' => 'assets/img/2.jpg',
                'price' => '15000',
                'short_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'long_description' => 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            ],
            2 => [
                'id' => 3,
                'name' => 'Ash Suit',
                'image' => 'assets/img/3.jpg',
                'price' => '9500',
                'short_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'long_description' => 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            ],
            3 => [
                'id' => 4,
                'name' => 'Green Coat',
                'image' => 'assets/img/4.jpg',
                'price' => '5000',
                'short_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'long_description' => 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            ],
            4 => [
                'id' => 5,
                'name' => 'Sweater',
                'image' => 'assets/img/5.jpg',
                'price' => '4500',
                'short_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'long_description' => 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            ],
            5 => [
                'id' => 6,
                'name' => 'Long Coat',
                'image' => 'assets/img/6.jpg',
                'price' => '9000',
                'short_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'long_description' => 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            ],
            6 => [
                'id' => 7,
                'name' => 'White Shari',
                'image' => 'assets/img/7.jpg',
                'price' => '20000',
                'short_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'long_description' => 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            ],
            7 => [
                'id' => 8,
                'name' => 'Red Shari',
                'image' => 'assets/img/8.jpg',
                'price' => '18000',
                'short_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'long_description' => 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            ],
            8 => [
                'id' => 9,
                'name' => 'Black Shari',
                'image' => 'assets/img/9.jpg',
                'price' => '25000',
                'short_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'long_description' => 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            ],
        ];
        return self::$products;
    }
}
