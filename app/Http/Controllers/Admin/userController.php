<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;


class userController extends Controller
{
    public function index(Request $request)
    {
        $users = $request->user();

        $userr = User::latest()->paginate(20);
        return view('admin.users.index' , compact('userr','users'));
    }

    public function edit(User $user)
    {
        $roles = Role::all();
        $permissions = Permission::all();
        return view('admin.users.edit' , compact('user' , 'roles' , 'permissions'));

    }

    public function update(Request $request , User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        try {
            DB::beginTransaction();

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        $user->syncRoles($request->role);

        $permissions = $request->except('_token' , 'name' , 'role' , 'email', '_method');
        $user->syncPermissions($permissions);

        DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            alert()->error('مشکل در ویرایش نقش', $ex->getMessage())->persistent('حله');
            return redirect()->back();
        }

        alert()->success(' کاربر مورد نظر ویرایش شد', 'باتشکر');
        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();

        alert()->success('کاربر مورد نظر حذف شد', 'باتشکر');
        return redirect()->route('users.index');
    }
}
