<?php

namespace App\Http\Controllers;

use App\Events\Invoice;
use App\Events\Product;
use App\Models\Category;
use App\Models\Products;
use App\Models\Subcategory;
use App\Models\User;
use App\Models\User_Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use function PHPUnit\Framework\isEmpty;


class Categories extends Controller
{
    public function index($id)
    {
        $user = User::find($id);
        $category = Category::all();
        return view('Category.category',['id'=>$user,'all'=>$category]);
    }

    public function categoryInsert(Request $request)
    {
        $valid = $request->validate([
            'category' => 'required|string|max:20'
        ]);

        $category = $valid['category'];

        Category::create([
            'category_name' => $category
        ]);

        return redirect()->back();
    }
    public function updateIndex($id)
    {
        $user = User::find($id);
        $category = Category::all();
        return view('Category.category-update',['id'=>$user,'all'=>$category]);
    }

    public function categoryUpdate(Request $request)
    {
        $valid = $request->validate([
            'category' => 'required|string|max:20'
        ]);

        $category = $valid['category'];

        Category::where('id',$request->input('id'))->update([
            'category_name' => $category
        ]);

        return redirect()->back();
    }

    public function deleteCategory(Request $request)
    {
        Category::where('id',$request->input('id'))->delete();

        return redirect()->back();
    }

    public function subcategoryIndex($id)
    {
        $user = User::find($id);
        $category = Category::all();
        $subcategory = Subcategory::all();
        return view('Sub-Category.sub-category',['id'=>$user,'all'=>$category,'sub'=>$subcategory]);
    }

    public function subcategoryInsert(Request $request)
    {
        $valid = $request->validate([
            'sub-category' => 'required|string|max:20'
        ]);

        $subcategory = $valid['sub-category'];

        Subcategory::create([
            'sub_category' => $subcategory,
            'category' => $request->input('category')
        ]);

        return redirect()->back();
    }

    public function subcategoryUpdate($id)
    {
        $user = User::find($id);
        $subcategory = Subcategory::all();
        $category = Category::all();
        return view('Sub-Category.sub-category-update',['id'=>$user,'sub'=>$subcategory,'all'=>$category]);
    }

    public function subcategory(Request $request)
    {
        $valid = $request->validate([
            'sub-category' => 'required|string|max:20'
        ]);

        $subcategory = $valid['sub-category'];

        Subcategory::where('id',$request->input('id'))->update([
            'sub_category' => $subcategory,
            'category' => $request->input('category')
        ]);

        return redirect()->back();
    }

    public function deleteSubCategory(Request $request)
    {
        Subcategory::where('id',$request->input('id'))->delete();

        return redirect()->back();
    }

    public function productsIndex($id)
    {
        $user = User::find($id);
        $category = Category::all();
        $subcategory = Subcategory::all();
        $product = Products::all();
        $total=Products::count();
        return view('Products.addProducts',['id'=>$user,'product'=>$product,'all'=>$category,'sub'=>$subcategory,'totals'=>$total]);
    }


    public function productInsert(Request $request)
    {
        $valid = $request->validate([
        'product_name'=> 'required|string',
        'description'=> 'required|string',
        'price'=> 'required|integer',
        'stock'=> 'required|integer',
        'image' => 'required|image|mimes:jpeg,png,gif,webp,jpg|max:2048',

        ]);

        $name = $valid['product_name'];
        $description = $valid['description'];
        $price = $valid['price'];
        $stock = $valid['stock'];
        $img = $request->file('image');

        if($img){
            $originalname = $img->getClientOriginalName();
            $path = $img->storeAs('public/products', $originalname);
            $path = str_replace('public/', '', $path);
            $path2 = $img->storeAs('products', $originalname, 'shared');

            $user = Products::create([
                'product_name' => $name,
                'description' => $description,
                'price' => $price,
                'stock' => $stock,
                'image' => $path,
                'category'=> $request->input('category'),
                'sub_category'=> $request->input('sub-category'),
            ]);
            
            

        }
        return redirect()->back();
    }


    public function productsUpdate($id,$product)
    {
        $user = User::find($id);
        $prod = Products::find($product);
        $category = Category::all();
        $subcategory = Subcategory::all();
        return view('Products.editProducts',['id'=>$user,'product'=>$prod,'all'=>$category,'sub'=>$subcategory]);
    }

    public function productUpdat(Request $request)
    {
        $img = $request->file('image');

        if($img){
            $originalname = $img->getClientOriginalName();
            $path = $img->storeAs('public/products', $originalname);
            $path = str_replace('public/', '', $path);
            $path2 = $img->storeAs('products', $originalname, 'shared');

            Products::where('id',$request->input('id'))->update([

                'image' => $path,

            ]);

            return redirect()->back();
        }

        if (is_null($request->input('discount')) && $request->input('discount') !== ''){
            Products::where('id',$request->input('id'))->update([

                'product_name' => $request->input('product_name'),
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'stock' => $request->input('stock'),
                'category'=> $request->input('category'),
                'sub_category'=> $request->input('sub-category'),

            ]);

            return redirect()->back();
        }
        else{
            Products::where('id',$request->input('id'))->update([

                'product_name' => $request->input('product_name'),
                'description' => $request->input('description'),
                'price' => $request->input('discountPrice'),
                'discount' => $request->input('discount'),
                'previous_price' => $request->input('price'),
                'stock' => $request->input('stock'),
                'category'=> $request->input('category'),
                'sub_category'=> $request->input('sub-category'),

            ]);

            return redirect()->back();
        }

    }

    public function deleteProduct(Request $request)
    {
        Products::where('id',$request->input('id'))->delete();

        return redirect()->back();
    }

    public function mostSelling($id)
    {
        $user = User::find($id);
        $most = DB::table('carts')
            ->join('products', 'carts.product_id', '=', 'products.id')
            ->select('products.product_name', 'carts.product_id', DB::raw('SUM(carts.quantity) as total_sold'))
            ->groupBy('carts.product_id', 'products.product_name')
            ->orderByDesc('total_sold')
            ->where('status','Delivered')
            ->get();

        return view('Products.most-selling',['id'=>$user,'carts'=>$most]);
    }

    public function lessSelling($id)
    {
        $user = User::find($id);
        $most = DB::table('carts')
            ->join('products', 'carts.product_id', '=', 'products.id')
            ->select('products.product_name', 'carts.product_id', DB::raw('SUM(carts.quantity) as total_sold'))
            ->groupBy('carts.product_id', 'products.product_name')
            ->orderByDesc('total_sold')
            ->where('status','Delivered')
            ->get();
        return view('Products.less-selling',['id'=>$user,'carts'=>$most]);
    }

    public function pendingOrders($id)
    {
        $user = User::find($id);

        $orders = DB::table('carts')
            ->join('users', 'carts.user_id', '=', 'users.id')
            ->join('products', 'carts.product_id', '=', 'products.id')
            ->select('carts.*', 'users.name as user_name', 'products.product_name as product_name')
            ->where('status','Processing')
            ->get();

        return view('Orders.pending-orders',['id'=>$user,'orders'=>$orders]);
    }

    public function ontheways($id)
    {
        $user = User::find($id);
        $orders = DB::table('carts')
            ->join('users', 'carts.user_id', '=', 'users.id')
            ->join('products', 'carts.product_id', '=', 'products.id')
            ->select('carts.*', 'users.name as user_name', 'products.product_name as product_name')
            ->where('status','On The Way')
            ->get();

        return view('Orders.ontheway',['id'=>$user,'orders'=>$orders]);
    }
    public function updatePendingOrders(Request $request)
    {
        $trans = $request->input('transaction_id');
        $productId = $request->input('id');


        DB::table('carts')
            ->where('id', $productId)
            ->update([
                'delivery_date' => $request->input('date'),
                'status' => 'On The Way'
            ]);

        Products::where('id',$request->input('proid'))
            ->decrement('stock', $request->input('quantity'));
        $stock = $request->input('proid');

        $check = Products::where('id',$request->input('proid'))->first();
        if($check->stock <= 10) {
               event(new Product($stock));
        }

        $allProductsOnTheWay = DB::table('carts')
            ->where('transaction_id', $trans)
            ->where('order_no',$request->input('orderids'))
            ->where('status', '!=', 'On The Way')
            ->doesntExist();


        if ($allProductsOnTheWay) {


            event(new Invoice($trans));

            return redirect()->route('invoice',['invoice'=>$request->input('orderids'),
                'id'=>$request->input('user')]);


//            $invoice = \request('invoice');
//
//
//            $carts = DB::table('carts')->where('order_no',$invoice)
//                ->select('carts.*','products.*')
//                ->join('products','carts.product_id','=','products.id')
//                ->get();
//
//            $cat = DB::table('carts')->where('order_no',$invoice)
//                ->select('carts.*','products.*')
//                ->join('products','carts.product_id','=','products.id')
//                ->first();
//
//            $userInfo = User_Info::where('email',$user->email)->first();
//            return view('user.invoice',['invoice'=>$invoice,'carts'=>$carts,'id'=>$user,'info'=>$userInfo,'cat'=>$cat]);
        }

        return redirect()->back();
    }

    public function invoice($id)
    {
        $user = User::find($id);
        $invoice = \request('invoice');

        $carts = DB::table('carts')->where('order_no',$invoice)
                ->select('carts.*','products.*')
                ->join('products','carts.product_id','=','products.id')
                ->get();

            $cat = DB::table('carts')->where('order_no',$invoice)
                ->select('carts.*','products.*')
                ->join('products','carts.product_id','=','products.id')
                ->first();

            $userInfo = DB::table('carts')->where('order_no',$invoice)
                ->select('carts.*','users.*','user__infos.*')
                ->join('users','carts.user_id','=','users.id')
                ->join('user__infos','users.email','=','user__infos.email')
                ->first();
        return view('invoice',['invoice'=>$invoice,'carts'=>$carts,'id'=>$user,'info'=>$userInfo,'cat'=>$cat]);
    }


    public function updateStatus(Request $request)
    {
        // Get the IDs of selected orders
        $orderIds = $request->input('checkbox');

        // Update the status for each selected order
        foreach ($orderIds as $orderId) {
            DB::table('carts')
                ->where('id', $orderId)
                ->update(['status' => 'Delivered']);
        }

        // Return a JSON response indicating success
        return response()->json(['message' => 'Orders status updated successfully']);
    }

    public function deliveredOrders($id)
    {
        $user = User::find($id);
        $cart = DB::table('carts')
            ->join('products', 'carts.product_id', '=', 'products.id')
            ->where('status','Delivered')->get();
        return view('Orders.delivered-orders',['id'=>$user,'delivered'=>$cart]);
    }

    public function users($id)
    {
        $user = User::find($id);
        $all = DB::table('user__infos')->get();
        $count = User::where('role','Users')->count();
        return view('Orders.users',['id'=>$user,'all'=>$all,'count'=>$count]);
    }

    public function allcategory($id)
    {
        $user = User::find($id);
        return view('Discount.all-categoriers',['id'=>$user]);
    }

    public function allsubcategory($id)
    {
        $user = User::find($id);
        return view('Discount.all-subcategories',['id'=>$user]);
    }
}
