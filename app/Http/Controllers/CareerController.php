<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Auth;
use Illuminate\Http\Request;

class CareerController extends Controller
{


    // Admin Controller
    public function all()
    {
        $results = Career::activeAll();
        return response()->json($results, 200);
    }

    public function index()
    {
        if (Auth::user()->is_admin) {
            return view('admin.career.list');
        }
    }
    public function create()
    {
        if (Auth::user()->is_admin) {
            return view('admin.career.new');
        }
    }

    public function store(Request $request)
    {
        if (Auth::user()->is_admin) {
            $request->validate([
                'title' => 'required|string|max:255',
                'slug' => 'required|string|max:255',
                'content' => 'required|string',
                'is_active' => 'required|boolean',
            ]);

            $career = new Career();
            $career->title = $request->title;
            $career->slug = $request->slug;
            $career->content = $request->content;
            $career->is_active = $request->is_active;
            $career->save();

            // Redirect or return a response
            return redirect()->route('career.index')->with('success', 'Post created successfully.');
        }
    }

    public function edit(Career $career)
    {

        if (Auth::user()->is_admin) {
            if ($career) {
                return view('admin.career.edit', ['career' => $career]);
            } else {
                abort(404);
            }
        }
    }

    public function update(Request $request, Career $career)
    {
        if (Auth::user()->is_admin) {


            $career->title = $request->title;
            $career->slug = $request->slug;
            $career->content = $request->content;
            $career->is_active = $request->is_active;
            $career->save();

            return redirect()->route('career.index')->with('success', 'Post created successfully.');
        }
    }
    public function destroy($career)
    {
        Career::whereId($career)->update(['is_active' => false]);

        return response()->json('Done', 200);
    }

}
