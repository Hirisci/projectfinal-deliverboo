<?php

namespace App\Http\Controllers\Admin;

use App\Plate;
use App\Order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Charts\OrdiniChart;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $ordini = Order::orderBy('created_at')->pluck('price', 'created_at');

        $chart = new OrdiniChart;
        $chart->labels($ordini->keys());
        $chart->dataset('Vendite', 'line', $ordini->values())->options([
            'backgroundColor' => '#9667E0',
        ]);

        return view('admin.home', compact('chart'));
    }
}

