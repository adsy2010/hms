<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use Inertia\Inertia;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Settings/Roles/Index', [
            'roles' => Role::query()->withCount('users')->paginate(3)
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        return Inertia::render('Settings/Roles/Show', [
            'role' => $role->load(['users', 'users.person'])
        ]);
    }
}
