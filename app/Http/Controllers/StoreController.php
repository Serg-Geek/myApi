<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function show()
    {
         $store = [
            'name' => "Магазин Уютный уголок",
            'address' => "ул. Центральная, д. 15, г. Порт",
            'working_hours' => "Пн-Пт: 9:00-20:00, Сб-Вс: 10:00-18:00",
            'phone' => "+351 123 456 789",
            'email' => "info@cozycorner.com",
            'website' => "https://www.cozycorner.com",
            'description' => "Магазин товаров для дома и уюта.",
            'social_media' => [
                'instagram' => "https://www.instagram.com/cozycorner",
                'facebook' => "https://www.facebook.com/cozycorner"
            ]
        ];
        return response()->json($store);
    }
}
