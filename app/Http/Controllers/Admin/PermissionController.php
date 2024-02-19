<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePermissionRequest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $permissions = Permission::query()
            ->when(!blank($request->search), function ($query) use ($request) {
                return $query
                    ->where('name', 'like', '%' . $request->search . '%')
                    ->orWhere('guard_name', 'like', '%' . $request->search . '%');
            })
            ->with('roles', function ($query) {
                return $query->select('id', 'name');
            })
            ->orderBy('name')
            ->paginate(10);
        $roles = Role::orderBy('name')->get();
        return view('admin.permissions.index', compact('permissions', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePermissionRequest $request)
    {
        return Permission::create($request->validated())
        ?->assignRole(!blank($request->roles) ? $request->roles : array())
        ? back()->with('success', 'Permission has been created successfully!')
        : back()->with('failed', 'Permission was not created successfully!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePermissionRequest $request, Permission $permission)
    {
        return $permission->update($request->validate())
        && $permission->syncPermissions(!blank($request->roles) ? $request->roles : [])
        ? back()->with('success', 'Role has been updated successfully!')
        : back()->with('failed', 'Role was not updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Temukan peran berdasarkan ID
        $permission = Permission::find($id);
    
        // Periksa apakah peran ditemukan
        if ($permission) {
            // Hapus peran
            $permission->delete();
    
            // Jika penghapusan berhasil, kembalikan respons yang sesuai
            return response()->json(['message' => 'Permission deleted successfully'], 200);
        } else {
            // Jika peran tidak ditemukan, kembalikan respons yang sesuai
            return response()->json(['error' => 'Permission not found'], 404);
        }
    }
}
