<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Brand;
use App\Models\BrandProduct;
use App\Models\Order;
use App\Models\User;
use App\Http\Controllers\GeneralController;

class HomeController extends GeneralController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['products']  = BrandProduct::get()->count();
        $data['customers'] = User::get()->count();
        $data['orders']    = Order::get()->count();
        $data['brands']    = Brand::get()->count();
        $newest_customers  = User::orderBy('created_at', 'desc')->take(5)->get();
        $newest_orders     = Order::with('user')->orderBy('created_at')->take(5)->get();
        return view('home',compact('data','newest_customers', 'newest_orders'));
    }
}
