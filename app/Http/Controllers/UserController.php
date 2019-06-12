<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
  public function store(request $request){
    $userName=$request->input('userName');
    $userPassword=$request->input('userPassword');
    $userEmail=$request->input('userEmail');
    $userRole=$request->input('userRole');

    echo DB::insert('insert into users(id,userName,userPassword,userEmail,userRole) VALUES(?,?,?,?,?)', [null,$userName,$userPassword,$userEmail,$userRole]);
    return redirect('/login');
  }

    public function logs(request $request){
      $userName=$request->input('userName');
      $userPassword=$request->input('userPassword');

      $data = DB::select('select id from users where userName=? and userPassword=?', [$userName, $userPassword]);

      if (count($data)){
        return redirect('/beers');
      } else {
        echo "<script type='text/javascript'>alert('fel uppgifter')</script>";
        echo "<a href='/login'>Försök igen</a>";
      }
    }
}

 ?>
