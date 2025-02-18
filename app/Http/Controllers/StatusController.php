<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        $status = [
            'status' => 'active',
        ];
        return response()->json($status);
    }
}
