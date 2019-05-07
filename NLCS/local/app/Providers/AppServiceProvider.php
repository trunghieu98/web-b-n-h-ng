<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\loaisanpham;
use App\Cart;
use Session;
use App\Http\Request;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    { }


    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('header', function ($view) {
            $loai_sp = loaisanpham::all();
            $view->with('loai_sp', $loai_sp);
        });

        view()->composer('header', function ($view) {
            if (Session('cart')) {

                $oldCart = Session::get('cart');  //lay gio hang hien tai
                $cart = new Cart($oldCart); // kt cos gh k

                $view->with([
                    'cart' => Session::get('cart'), 'product_cart' => $cart->items,
                    'totalPrice' => $cart->totalPrice,
                    'totalQty' => $cart->totalQty
                ]);
            }
        });
        view()->composer('menuleft',function($view){
            $loai_sp=loaisanpham::all();
            $view->with('loai_sp',$loai_sp);
        });
    }
}
