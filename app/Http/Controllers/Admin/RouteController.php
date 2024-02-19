<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRouteRequest;
use App\Models\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route as FacadesRoute;
use App\Services\RouteService;
use Spatie\Permission\Models\Permission;

class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $routes = Route::query()
            ->when(!blank($request->search), function ($query) use ($request) {
                return $query
                    ->where('route', 'like', '%' . $request->search . '%')
                    ->orWhere('permission_name', 'like', '%' . $request->search . '%');
            })
            ->orderBy('route')
            ->paginate(10);
        $facadesRoutes = FacadesRoute::getRoutes();
        $permissions = Permission::orderBy('name')->get();

        return view('admin.routes.index', compact('routes', 'permissions', 'facadesRoutes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRouteRequest $request, RouteService $routeService)
    {
        return $routeService->create($request)
            ? back()->with('success', 'Route has been created successfully!')
            : back()->with('failed', 'Route was not created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('route.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('route.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreRouteRequest $request, Route $route, RouteService $routeService)
    {
        return $routeService->update($request, $route)
            ? back()->with('success', 'Route has been updated successfully!')
            : back()->with('failed', 'Route was not updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Route $route)
    {
        return $route->delete()
            ? back()->with('success', 'Route has been deleted successfully!')
            : back()->with('failed', 'Route was not deleted successfully!');
    }
}
