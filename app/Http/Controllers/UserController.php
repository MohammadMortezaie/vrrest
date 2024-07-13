<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        if (Auth::user()->is_admin) {
            return view('admin.users.list');
        } else {
            abort(404);
        }
    }

    public function all(Request $request)
    {
        $results = User::activeAll(true);

        return response()->json($results, 200);
    }

    public function update(Request $request, $useradmin)
    {
        if (Auth::user()->is_admin) {
            User::whereId($useradmin)->update([
                'is_admin' => $request->is_admin,
                'is_active' => $request->is_active,
            ]);

            return response()->json('Done', 200);
        }
    }
}
