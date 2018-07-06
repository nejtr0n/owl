<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 06.07.18
 * Time: 15:29
 */

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::paginate(15);

        return view("user.index", [
            "users" => $users,
        ]);
    }

    public function edit(User $user)
    {
        return view("user.edit", [
            "user" => $user,
        ]);
    }

    public function store(Request $request)
    {
        $this->validator($request->all())->validate();

        $user = User::create($request->all());

        flash('User successfully created!');
        return redirect(route("admin.user.edit", $user));
    }

    /**
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function delete(User $user)
    {
        $user->delete();
        flash('User successfully removed!')->info();
        return redirect(route("admin.user.index"));
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }
}