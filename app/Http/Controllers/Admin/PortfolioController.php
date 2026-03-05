<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $items = Portfolio::all();
        return view('admin.portfolio.index', compact('items'));
    }

    public function create()
    {
        return view('admin.portfolio.create');
    }

    public function store(Request $request)
    {
        Portfolio::create($request->only('title', 'description', 'image'));
        return redirect()->route('admin.portfolio.index');
    }

    public function show(Portfolio $portfolio)
    {
        return view('admin.portfolio.show', ['item' => $portfolio]);
    }

    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolio.edit', ['item' => $portfolio]);
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $portfolio->update($request->only('title', 'description', 'image'));
        return redirect()->route('admin.portfolio.index');
    }

    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();
        return redirect()->route('admin.portfolio.index');
    }
}