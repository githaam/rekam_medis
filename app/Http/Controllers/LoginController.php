<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Login; // INGET DIGANTI

class LoginController extends Controller // INGET DIGANTI
{
  public function index()
  {
    $logins = Login::all();

    return view('data_login/index', ['logins' => $logins]);
  }

   public function create()
  {
    $values = ['admin','operator','dokter'];

    return view('data_login/create', ['values' => $values]);
  }

  public function store(Request $request)
  {
    $this -> validate($request, [
      'username' => 'required|min:5',
      'password' => 'required|min:5|confirmed',
      'password_confirmation' => 'required|min:5|same:password',
      'level' => 'required',
    ],[
      'username.required' => 'Username diperlukan.',
      'username.min' => 'Username minimal 5 karakter.',
      'password.required' => 'Password diperlukan.',
      'password.min' => 'Password minimal 5 karakter.',
      'password.confirmed' => 'Password tidak sesuai.',
      'password_confirmation.required' => 'Harap masukkan konfirmasi password.',
      'password_confirmation.min' => 'Minimal 5 karakter.',
      'password_confirmation.same' => 'Konfirmasi password tidak sesuai',
      'level.numeric' => 'Level diperlukan.',
    ]);

    // $validate = $request -> validate();

    $login = new Login;
    $login -> username = $request -> username;
    $login -> password = $request -> password;
    $login -> level = $request -> level;
    $login -> save();

    return redirect('/data_login');
  }

  public function show($kd_user)
  {
    $login = Login::find($kd_user);

    if(!$login)
      abort(404);

    return view('data_login/single', ['login' => $login]);
  }

  public function edit($kd_user)
  {
    $values = ['admin','operator','dokter'];
    $login = Login::find($kd_user);

    if(!$login)
      abort(404);

    return view('data_login/update', ['login' => $login,'values' => $values]);
  }

  public function update(Request $request, $kd_user)
  {
    

    $login = Login::find($kd_user);
    if ($request -> password === $login -> password)
    {
      // dd([$request -> password, $login -> password]);
      return redirect()->to('/data_login/'.$kd_user.'/edit')->with('passwordError','Password lama tidak sesuai.');
    } else {

      $this -> validate($request, [
        'password' => 'required|min:5',
        'nPassword' => 'required|min:5|confirmed|different:password',
        'nPassword_confirmation' => 'required|min:5|same:nPassword'
      ],[
        'password.required' => 'Password diperlukan.',
        'password.min' => 'Password minimal 5 karakter.',
        'nPassword.required' => 'Password diperlukan.',
        'nPassword.min' => 'Password minimal 5 karakter.',
        'nPassword.confirmed' => 'Password baru tidak sesuai.',
        'nPassword.different' => 'Password baru tidak boleh sama dengan password lama',
        'nPassword_confirmation.same' => 'Password baru tidak sesuai.',
        'nPassword_confirmation.required' => 'Harap masukkan konfirmasi password baru.',
        'nPassword_confirmation.min' => 'Password minimal 5 karakter.',
      ]);

      $login -> password = $request -> nPassword;
      $login -> save();
    }
    
    return redirect('data_login/');
  }

  public function delete($kd_user)
  {
    $login = Login::find($kd_user);
    $login -> delete();
    return redirect('data_login/');
  }
}
