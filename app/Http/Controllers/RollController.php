<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;



class RollController extends Controller
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
  
   public function external()
   {    
        $baseUrl = 'https://api.unsplash.com';
        $key = 'EV19Pz0Td-YpIRDO1Te72KRXyCHxgsc0oOTj5-_pmkg';
        $path = '/photos/random';

        $response = Http::withHeaders([
            'Authorization' => 'Client-ID ' . $key,
        ])->get($baseUrl . $path, );

        if ($response->status() == 401) {
            
            return response()->json( ['message' => 'oy-yo']);
    }
        return response()->json($response->json());
        
        
   }
}
