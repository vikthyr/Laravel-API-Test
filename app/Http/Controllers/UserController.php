<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function listAllAction()
    {
        return response()->json(User::all());
    }

    public function newUsersAction(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'users' => 'required|array',
            'users.*.name' => 'required|max:255',
            'users.*.email' => 'required|email|unique:users,email',
            'users.*.password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $users = [];
        foreach($request->users as $user){
            $users[] = User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => bcrypt($user['password']),
            ]);
        }

        return response()->json($users, 200);
    }

    public function getByIdAction($id)
    {
        $user = User::find($id);

        if(!$user){
            return response()->json(['message' => 'User not found'], 404);
        }

        return response()->json($user);
    }

    public function updateAction(Request $request, $id)
    {
        $user = User::find($id);

        if(!$user){
            return response()->json(['message' => 'User not found'], 404);
        }

        $user->update($request->all());
        return response()->json($user, 200);
    }

    public function deleteAction($id){
        $user = User::find($id);

        if(!$user){
            return response()->json(['message' => 'User not found'], 404);
        }

        $user->delete();
        return response()->json([
            'message' => 'User deleted successfully',
            'user' => $user
        ], 200);
    }
}