<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Purchase;
use App\Models\Dish;
use App\Models\Ingredient;
use App\Jobs\MarketApiRequest;
use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $orders = Order::orderBy('id', 'DESC')->get();
        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $response = [];
        for ($i = 0; $i < $request->number; $i++) {
            $dish = Dish::inRandomOrder()->first();
            $order = Order::create(['dish_id' => $dish->id]);
            MarketApiRequest::dispatch($order);
 
            array_push($response, $dish->name);
        }

        $data = ['response' => $response, 'number' => $request->number];
        return response()->json($data);
    }
}
