<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
  //
  public function showFormLogin()
  {
      return view('auth.login');
  }


//   public function showFormLoginAdmin()
//   {
//       return view('auth.loginadmin');
//   }


  public function login(Request $request)
  {
      $user = $request->validate([
          'email' => ['required', 'string', 'email', 'max:255'],
          'password' => ['required', 'string']
      ]);



      if (Auth::attempt($user)) {
          return redirect()->intended('/');
      }


      return redirect()->back()->withErrors([
          'email' => 'Thông tin người dùng không đúng'
      ]);
  }


  public function showFormRegister()
  {
      return view('auth.register');
  }


  public function register(Request $request)
  {
      $data = $request->validate([
          'name' => 'required|string|max:255',
          'email' => 'required|string|email|max:255',
          'password' => 'required|string|min:8',

      ]);

      $user = User::query()->create($data);
      Auth::login($user);

      return redirect()->intended('login');
  }

  public function logout()
  {
      Auth::logout();
      return redirect('/login');
  }
}
