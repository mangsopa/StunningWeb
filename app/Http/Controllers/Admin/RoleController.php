<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRoleRequest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $roles = Role::query()
            ->when(!blank($request->search), function ($query) use ($request) {
                return $query
                    ->where('name', 'like', '%' . $request->search . '%')
                    ->orWhere('guard_name', 'like', '%' . $request->search . '%');
            })
            ->with('permissions', function ($query) {
                return $query->select('id', 'name');
            })
            ->orderBy('name')
            ->paginate(10);
        $permissions = Permission::orderBy('name')->get();
        return view('admin.roles.index', compact('roles', 'permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(StoreRoleRequest $request)
    {
        return Role::create($request->validated())
            ->givePermissionTo(!blank($request->permissions) ? $request->permissions : [])
            ? back()->with('success', 'Role has been created successfully!')
            : back()->with('failed', 'Role was not created successfully!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreRoleRequest $request, Role $role)
    {
        return $role->update($request->validated())
            && $role->syncPermissions(!blank($request->permissions) ? $request->permissions : [])
            ? back()->with('success', 'Role has been updated successfully!')
            : back()->with('failed', 'Role was not updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Temukan peran berdasarkan ID
        $role = Role::find($id);
    
        // Periksa apakah peran ditemukan
        if ($role) {
            // Hapus peran
            $role->delete();
    
            // Jika penghapusan berhasil, kembalikan respons yang sesuai
            return response()->json(['message' => 'Role deleted successfully'], 200);
        } else {
            // Jika peran tidak ditemukan, kembalikan respons yang sesuai
            return response()->json(['error' => 'Role not found'], 404);
        }
    }
}
