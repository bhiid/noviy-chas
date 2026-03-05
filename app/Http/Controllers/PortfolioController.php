<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;

class PortfolioController extends Controller
{
    public function index()
    {
        $items = Portfolio::all();
        return view('portfolio.index', compact('items'));
    }

    public function show(Portfolio $portfolio)
    {
        return view('portfolio.show', ['item' => $portfolio]);
    }
}