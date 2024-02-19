<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMenuGroupRequest;
use App\Models\MenuGroup;
use App\Services\MenuGroupService;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class MenuGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $menuGroups = MenuGroup::query()
        ->when(!blank($request->search), function ($query) use ($request) {
            return $query
                ->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('permission_name', 'like', '%' . $request->search . '%');
        })
        ->orderBy('name')
        ->paginate(10);
    $permissions = Permission::orderBy('name')->get();

    return view('admin.menus.index', compact('menuGroups', 'permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(StoreMenuGroupRequest $request, MenuGroupService $menuGroupService)
     {
         return $menuGroupService->create($request)
             ? back()->with('success', 'Menu group has been created successfully!')
             : back()->with('failed', 'Menu group was not created successfully!');
     }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreMenuGroupRequest $request, MenuGroup $menu, MenuGroupService $menuGroupService)
    {
        return $menuGroupService->update($request, $menu)
        ? back()->with('success', 'Menu group has been updated successfully!')
        : back()->with('failed', 'Menu group was not updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $menuGroup = MenuGroup::find($id);
    
        // Periksa apakah peran ditemukan
        if ($menuGroup) {
            // Hapus peran
            $menuGroup->delete();
    
            // Jika penghapusan berhasil, kembalikan respons yang sesuai
            return response()->json(['message' => 'Menu deleted successfully'], 200);
        } else {
            // Jika peran tidak ditemukan, kembalikan respons yang sesuai
            return response()->json(['error' => 'Menu not found'], 404);
        }
    }
}
