<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index()
    {
        $product = DB::table('product')->get();

        return view('client.products', ['product' => $product]);
    }

    public function cart()
    {
        return view('client.cart');
    }

    public function addToCart($id)
    {
       $product = DB::table('product')->where('idProduct',$id)->first();


        if(!$product) {

            abort(404);

        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {
            $cart = [
                    $id => [
                        "name" => $product->namaProduct,
                        "quantity" => 1,
                        "price" => $product->hargaProduct,
                        "photo" => $product->imageProduct,
                        "weight" => $product->beratProduct,
                        "description" => $product->deskripsiProduct
                    ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->namaProduct,
            "quantity" => 1,
            "price" => $product->hargaProduct,
            "photo" => $product->imageProduct,
            "weight" => $product->beratProduct,
            "description" => $product->deskripsiProduct
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
        }
    }

    public function invoice()
    {
        $cart = session()->get('cart');

        return view('client.invoice');
    }

        public function details($id)
    {
        $product = DB::table('product')->where('idProduct',$id)->get();

        return view('client.details', ['product' => $product]);
    }

        public function detail($id)
    {
        $cart = session()->get('cart');
        $customer = DB::table('customer')->where('idCustomer',$id)->get();

        return view('client.invoice', ['customer' => $customer]);
    }

    public function order()
    {
        $cart = session()->get('cart');

        return view('client.order');
    }

    public function orderadd(Request $request)
    {
        $id = DB::table('customer')->insertGetId([
            'namaCustomer' => $request->nama_customer,
            'wilayahCustomer' => $request->wilayah_customer,
            'alamatCustomer' => $request->alamat,
            'teleponCustomer' => $request->telepon,
            'emailCustomer' => $request->email
        ]);
        
        return redirect()->action('CartController@detail', ['id' => $id]
);
    }
}
