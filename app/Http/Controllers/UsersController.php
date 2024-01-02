<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function store(Request $request)
    {
        // 
    }

    public function index()
    {
        $rows = User::all();
        return view('users.index', compact('rows'));
    }


    public function show(string $id)
        {
        }

        /**
         * Show the form for editing the specified resource.
         */
        public function edit(string $id)
        {
            $row = User::find($id);
            return view('users.edit', compact('row'));
        }

        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, string $id)
        {
            // 
        }

        /**
         * Remove the specified resource from storage.
         */
        public function destroy(string $id)
        {
            $row = User::findOrFail($id);

            $row->delete();

            return redirect('users');
        }
}