<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Post;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'servicesCount' => Service::count(),
            'portfolioCount' => Portfolio::count(),
            'postsCount' => Post::count(),
        ]);
    }
}