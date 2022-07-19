<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Http;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Order;
use App\Models\Purchase;

class MarketApiRequest implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $order;
    public function __construct(Order $order)
    {
        //
        $this->order = $order;
    }


    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $ingredients = $this->order->dish->ingredients;

        foreach ($ingredients as $ingredient) {
            if ($ingredient->pivot->quantity > $ingredient->quantity) {

                $product = strtolower($ingredient->name);

                while ($ingredient->pivot->quantity > $ingredient->quantity) {
                    $api_response = Http::get("https://recruitment.alegra.com/api/farmers-market/buy?ingredient=$product");
                    if ($api_response['quantitySold'] != 0) {
                        $ingredient->quantity += $api_response['quantitySold'];
                        $ingredient->save();
                        Purchase::create(['ingredient_id' => $ingredient->id, 'quantity' => $api_response['quantitySold']]);
                    }
                } 
            }
            $ingredient->quantity -= $ingredient->pivot->quantity;
            $ingredient->save();
        }

        $this->order->update(['state' => "1"]);
    }
}
