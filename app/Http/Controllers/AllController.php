<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function home()
    {
        return view('weUtama.home');
    }

    public function about()
    {
        return view('weUtama.about');
    }

    public function menu()
    {
        // Fetch menus from the database
        $menus = Menu::all(); // Assuming you want to fetch all menus

        // Pass menus and users data to the view
        return view('weUtama.menu', compact('menus'));
    }

    public function contact()
    {
        return view('weUtama.contact');
    }

    public function adminMenu()
    {
        return view('admin.menu.adminMenu');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function user()
    {
        return view('admin.user.user');
    }

    public function tables()
    {
        // Fetch menus from the database
        $menus = Menu::all(); // Assuming you want to fetch all menus

        // Fetch users from the database
        $users = User::all(); // Assuming you want to fetch all users

        // Pass menus and users data to the view
        return view('admin.tables', compact('users', 'menus'));
    }

    public function maps()
    {
        return view('admin.maps');
    }

    public function profile()
    {
        $user = user::all();

        return view('weUtama.profile', compact('user'));
    }

    public function userProfile()
    {
        // Fetch users from the database
        $user = User::all(); // Assuming you want to fetch all users

        // Pass menus and users data to the view
        return view('admin.user.userProfile', compact('user'));
    }

    public function getUsersCount()
    {
        try {
            // Query untuk mengambil jumlah user dari tabel "users"
            $userCount = DB::table('users')->count();

            // Kemudian lewatkan $userCount ke view
            return view('admin.dashboard', ['userCount' => $userCount]);
        } catch (\Exception $e) {
            // Tangani kesalahan jika terjadi
            return back()->withError('Failed to fetch user count.')->withInput();
        }
    }

}
