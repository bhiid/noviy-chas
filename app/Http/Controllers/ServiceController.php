<?php

namespace App\Http\Controllers;

use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('services.index', compact('services'));
    }

    public function show(Service $service)
    {
        return view('services.show', compact('service'));
    }
    public function store(Request $request)
{
    $service = new Service();
    $service->title = $request->title;
    $service->description = $request->description;
    $service->price = $request->price;
    $service->image = $request->image;
    $service->save();

    return redirect()->route('admin.services.index');
}
}