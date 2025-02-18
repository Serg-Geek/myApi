<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class Rollcontroller extends Controller
{
   public function index()
   {
        $dices = [
            'd4' => rand(1, 4),
            'd6' => rand(1, 6),
            'd8' => rand(1, 8),
            'd10' => rand(1, 10),
            'd12' => rand(1, 12),
            'd20' => rand(1, 20),
            'd100' => rand(1, 100),
        ];
       return         response()->json([
              'dices' => $dices,
           'message' => 'Hello World'
       ]);
   }
}
