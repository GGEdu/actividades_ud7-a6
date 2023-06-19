<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\API;

class ApiController extends Controller
{
    public function index()
    {
        return response()->json(['message' => 'APIs retrieved successfully'], 200);
    }
    
    public function store(Request $request)
    {
        return response()->json(['message' => 'API created successfully'], 200);
    }

    public function show(API $api)
    {
        return response()->json(['message' => 'API retrieved successfully'], 200);
    }

    public function update(Request $request, API $api)
    {
        return response()->json(['message' => 'API updated successfully'], 200);
    }

    public function destroy(API $api)
    {
        return response()->json(['message' => 'API deleted successfully'], 200);
    }
}

