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
        $chart->dataset('Vendite', 'line', $ordini->values())->backgroundColor('rgba(150,103,224,0.5)');


        $totalOrder = Order::where('price', '209.35')->pluck('price');

        $totalChart = new OrdiniChart;
        $totalChart->labels($totalOrder->keys());
        $totalChart->dataset('Scontrino mensile', 'bar', $totalOrder->values())->backgroundColor('green');

        $avgOrder = Order::orderBy('price')->pluck('price');
        $avgPlates = Plate::where('restaurant_id', '1')->pluck('name');

        $avgChart = new OrdiniChart;
        $avgChart->labels($avgPlates->keys());
        $avgChart->dataset('Piatti popolari', 'polarArea', $avgOrder->values())->backgroundColor('fillPattern');
        

        return view('admin.home', compact('chart', 'totalChart', 'avgChart'));
    }
}

