<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deal;
use App\Models\User;

class DealController extends Controller
{

    public function createDeal(Request $request)
    {
        $deal = Deal::create($request->all());

        return response()->json(['message' => 'Deal created successfully', 'deal' => $deal], 201);
    }

    public function getSellerDeals($sellerId)
    {
        $deals = Deal::where('seller_id', $sellerId)->get();
        return response()->json(['deals' => $deals]);
    }

    public function getBuyerDeals($buyerId)
    {
        $deals = Deal::where('buyer_id', $buyerId)->get();
        return response()->json(['deals' => $deals]);
    }

}
