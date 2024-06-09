<?php

namespace App\Listeners;

use App\Events\Invoice;
use App\Models\User_Info;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class InvoiceSend
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
    public function handle(Invoice $event): void
    {
        $trans = DB::table('carts')->where('transaction_id',$event->trans)->first();

        $total = DB::table('carts')
            ->where('transaction_id', $event->trans)->sum('price');
//        dd($cart->id);

        $admin = DB::table('users')->where('role', 'Admins')->get();

        $users = DB::table('users')->where('id', $trans->user_id)->first();

//        dd($users->email);
        $info = DB::table('user__infos')->where('email',$users->email)->first();

        $now = Carbon::now('Asia/Dhaka')->format('F j, Y');

        $carts = DB::table('carts')->where('transaction_id',$event->trans)
            ->select('carts.*','products.*')
            ->join('products','carts.product_id','=','products.id')
            ->get();

        Mail::send('email-invoice', ['users' => $users,'info'=>$info,'cata'=>$carts,'now'=>$now, 'total'=>$total,'admin' => null, 'carts' => $trans], function ($message) use ($users,$now,$info,$carts, $trans,$total) {
            $message->to($users->email);
            $message->subject('Your Invoice');
        });
    }
}
