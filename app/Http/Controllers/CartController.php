<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect, Response;

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
        if (!$menu) {
            abort(404);
        }
        $cart = session()->get('cart');
        // if cart is empty then this the first product
        if (!$cart) {
            $cart = [
                $id => [
                    'nama_item' => $menu->nama_item,
                    'quantity' => 1,
                    'harga' => $menu->harga,
                    'gambar' => $menu->gambar,
                ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if item already exists in cart, increment its quantity
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            // if item not exist in cart then add to cart with quantity = 1
            $cart[$id] = [
                'nama_item' => $menu->nama_item,
                'quantity' => 1,
                'harga' => $menu->harga,
                'gambar' => $menu->gambar,
            ];
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    // $cart = session()->get('cart', []);
    // if (isset($cart[$id])) {
    //     $cart[$id]['quantity']++;
    // } else {
    //     $cart[$id] = [
    //         'nama_item' => $menu->nama_item,
    //         'quantity' => 1,
    //         'harga' => $menu->harga,
    //         'gambar' => $menu->gambar,
    //     ];
    // }
    // session()->put('cart', $cart);

    // return redirect()->back()->with('success', 'Item has been added to cart!');

    public function updateCart(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
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
    public function checkout(Request $request)
    {
        $data['orders'] = DB::table('orders')->get();
        return view("Bill", $data);
        // Proses penyimpanan data ke database
        // Misalnya:
        $order = new Order();
        $order->user_id = auth()->user()->id; // Sesuaikan dengan user yang login
        $order->save();

        // Setelah menyimpan ke database, kosongkan session cart
        session()->forget('cart');

        return redirect()->route('billshow');
    }

    public function billshow()
    {
        // Ambil semua data pesanan dari database untuk ditampilkan pada halaman billshow
        $orders = Order::all();

        // Kemudian kembalikan data pesanan ke halaman billshow
        return view('weUtama.bill-show', compact('orders'));
    }

    // public function billShow()
    // {
    //   $data['orders'] = DB::table('orders')->get();
    //    return view("Bill",$data);
    // }

    // public function getPrice()
    // {
    //     $getPrice = $_GET['id'];
    //     $price  = DB::table('orders')->where('id', $getPrice)->get();
    //     return Response::json($price);
    // }

    public function destroy($id)
    {
        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
            session()->flash('success', 'Product removed successfully');
        }

        return redirect()->back();
    }
}
