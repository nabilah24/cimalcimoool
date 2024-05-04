<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect,Response;

class CartController extends Controller
{
    public function index()
    {
        $menus = Menu::all();

        return view('weUtama.menu', compact('menus'));
    }

    public function menuCart()
    {
        return view('weUtama.cart');
    }

    public function addMenutoCart($id)
    {
        $menu = Menu::findOrFail($id);
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'nama_item' => $menu->nama_item,
                'quantity' => 1,
                'harga' => $menu->harga,
                'gambar' => $menu->gambar,
            ];
        }
        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Item has been added to cart!');
    }

    public function updateCart(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Item added to cart.');
        }
    }

    // public function billShow()
    // {
    //     // Di sini Anda dapat menambahkan logika untuk mengambil data pemesanan dari database
    //    $orders = Order::all();

    //     // Kemudian, Anda dapat mengirimkan data tersebut ke halaman bill
    //     return view('weUtama.bill-show', [
    //         'orders' => $orders,
    //     ]);
    // }

    public function billShow()
    {
      $data['orders'] = DB::table('orders')->get();
       return view("Bill",$data);
    }

    public function getPrice()
    {
        $getPrice = $_GET['id'];
        $price  = DB::table('orders')->where('id', $getPrice)->get();
        return Response::json($price);
    }

    public function deleteProduct(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Item successfully deleted.');
        }
    }
}
