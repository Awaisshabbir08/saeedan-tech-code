<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function createSeller(Request $request)
    {
        $seller = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'seller',
        ]);
        return response()->json(['message' => 'Seller created successfully', 'seller' => $seller], 201);
    }


    public function createBuyer(Request $request)
    {
        $buyer = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'buyer',
        ]);

        return response()->json(['message' => 'Buyer created successfully', 'buyer' => $buyer], 201);
    }
}
