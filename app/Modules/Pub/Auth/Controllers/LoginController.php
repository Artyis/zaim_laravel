<?php

namespace App\Modules\Pub\Auth\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
 use AuthenticatesUsers;
  protected $redirectTo= '/admin/dashboards';

  public function __contsruct() {
    $this->middleware ('guest')->except ('logout');
  }
  /**
  * @return \Illuminate\View\View
  */
  public function showLoginForm() {
    $title =__('Login');

    return view('Pub::Auth.login');
  }

}
