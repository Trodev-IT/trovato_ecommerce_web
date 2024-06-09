<?php

namespace App\Listeners;

use App\Events\Product;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ProductStock
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(Product $event): void
    {
        $stock = DB::table('products')->where('id',$event->stock)->first();


//        dd($stock);




        $admin = User::where('role','Admins')->get();
        foreach ($admin as $admins)
        {
            Mail::send('alert-message', ['stock' => $stock,'admin' => $admins], function ($message) use ($stock, $admins) {
                $message->to($admins->email);
                $message->subject('Low Stock');
            });
        }
    }
}
