<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function adduser(Request $request)
    {
        
        $user = new user();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();
        return redirect()->route('show_all_user') ->with('success','user aded successfully');
        // return response()->json(['message' => 'User created successfully'], 201);
        }


    /**
     * Display the specified resource.
     */
    public function show_all_user()
    {
        $users = User::all();
        return view('alluser', compact('users'));
    }
    public function edituserform(string $id)
        {
        $user = User::find($id);
        return view('edituserform', compact('user'));
    }

    public function adduserform(){
        return view('adduserform');
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $request->validate([
        //     'title' => 'required|max:255',
        //     'content' => 'required',
        //   ]);
        //   $post = Post::find($id);
        //   $post->update($request->all());
        //   return redirect()->route('viewpost')
        //     ->with('success', 'Post updated successfully.');


            $request->validate([
                'name' => 'required|max:255',
                'email' => 'required|email',
                'password' => 'required',
            ]);
            $user = User::find($id);
            $user->update($request->all());
            // $user->password = bcrypt($request->input('new_password'));
            // $user->save();
            return redirect()->route('show_all_user')->with('success', 'User updated successfully');
                
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){
    
        $user = User::find($id);
        $user->delete();
        return redirect()->route('show_all_user')->with('success', 'User deleted successfully');
        
    }

}