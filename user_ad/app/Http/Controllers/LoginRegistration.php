<?php

namespace App\Http\Controllers;


use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class LoginRegistration extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function registration()
    {
        return view('register');
    }

    public function createRegistration(Request $request)
    {
        $valid = $request->validate([
            'username'=> 'string|required|max:50',
            'email'=> 'email|required|max:50',

        ]);

        $username = $request['username'];
        $email = $request['email'];
        $password = $request['password'];

        $hash = Hash::make($password);

        $user = User::create([
            'name' => $username,
            'email' => $email,
            'password' => $hash,
            'role'=>'Admins'
        ]);
        $credentials = $request->only('email','password');
        if (Auth::attempt($credentials)){
            $user = Auth::user(); // Get the authenticated user
            if ($user->role === 'Admins') { // Assuming role is stored as a property on the user model
                return redirect()->route('welcome', ['id' => $user->id]);
            }
        }
        else{
            return redirect()->back()->with('error','Invalid Credentials');
        }
    }

    public function checkEmailAvailability(Request $request)
    {
        $check = User::where('email', $request->input('email'))
            ->exists();

        return response()->json(['available' => !$check]);
    }


    public function welcome($id)
    {
        $currentMonth = Carbon::now()->format('m');
        $user = User::find($id);
        $today = Carbon::today();
        $income = DB::table('carts')->where('status','On The Way')->where('payment','cod')->sum('price');
        $bKash = DB::table('carts')->where('status','On The Way')->whereDay('created_at',$today)->where('payment','bKash')->sum('price');
        $nagad = DB::table('carts')->where('status','On The Way')->whereDay('created_at',$today)->where('payment','nagad')->sum('price');
        $rocket = DB::table('carts')->where('status','On The Way')->whereDay('created_at',$today)->where('payment','rocket')->sum('price');
        $cod = DB::table('carts')->where('status','Delivered')->whereDay('delivery_date',$today)->where('payment','cod')->sum('price');

        $most = DB::table('carts')
            ->join('products', 'carts.product_id', '=', 'products.id')
            ->select('products.product_name','products.image', 'carts.product_id', DB::raw('SUM(carts.quantity) as total_sold'))
            ->groupBy('carts.product_id', 'products.product_name','products.image')
            ->orderByDesc('total_sold')
            ->where('status','Delivered')
            ->get();

        $total = DB::table('carts')->where('status','On The Way')
            ->select('payment',DB::raw('SUM(price) as total_amount'))
            ->groupBy('payment')->get();

        $totalIncome = DB::table('carts')->where('status','Delivered')->whereMonth('delivery_date',$currentMonth)
            ->sum('price');

        $monthlyIncomes = [];
        for ($i = 1; $i <= 12; $i++) { // Assuming 7 months data is available
            $monthlyIncomes[] = DB::table('carts')->where('status','Delivered')->whereMonth('delivery_date', $i)->sum('price');
        }
        $maxIncome = DB::table('carts')->where('status','Delivered')->whereMonth('delivery_date',$currentMonth)->max('price');
        $totalSales = DB::table('carts')->where('status','Delivered')->whereMonth('delivery_date',$currentMonth)->count();
        $totalOrders = DB::table('carts')->where('status','Processing')->whereMonth('created_at',$currentMonth)->count();
//        dd($most);
        $today = Carbon::today();
        $todayOrder = DB::table('carts')->where('status','Processing')->whereDay('created_at',$today)->count();
        $todayOrderPrice = DB::table('carts')->where('status','Processing')->whereDay('created_at',$today)->sum('price');
        return view('welcome',['id'=>$user,'total'=>$bKash,
            'nagad'=>$nagad,'rocket'=>$rocket,
            'most'=>$most, 'totals' => $total,
            'totalSales' => $totalSales,'totalOrders'=>$totalOrders,
            'totalIncome'=>$totalIncome,'monthlyIncomes'=>$monthlyIncomes,
            'maxIncome'=>$maxIncome,'todayOrder'=>$todayOrder,
            'todayPrice'=>$todayOrderPrice,'cod'=>$cod,
            'cash'=>$income]);
    }

    public function logged(Request $request)
    {
        $credentials = $request->only('email','password');
        $remember = $request->input('remember');

        if (Auth::attempt($credentials)){

            if(isset($remember) && !empty($remember)){
                $expiration_time = time() + (15 * 24 * 3600); // 15 days in seconds
                setcookie('email', $credentials['email'], $expiration_time);
                setcookie('password', $credentials['password'], $expiration_time);
            }

            else{
                setcookie('email','');
                setcookie('password','');
            }

            $user = Auth::user(); // Get the authenticated user
            if ($user->role === 'Admins') { // Assuming role is stored as a property on the user model
                return redirect()->route('welcome', ['id' => $user->id]);
            }
        }
        else{
            return redirect()->back()->with('error','Invalid Credentials');
        }

    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }

    public function forget_password()
    {
        return view('auth.forget-password');
    }

    public function showResetForm(Request $request, $token)
    {
        $email = $request->email;
        return view('auth.reset')->with(
            ['token' => $token, 'email' => $email]
        );
    }

}
