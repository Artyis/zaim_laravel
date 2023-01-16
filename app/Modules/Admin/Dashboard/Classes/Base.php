<?php

namespace App\Modules\Admin\Dashboard\Classes;
use Illuminate\Support\Arr;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

/**
 *
 */
class Base extends Controller
{
  protected $template;
  protected $user;
  protected $content;
  protected $vars;
  public function __construct()
  {
    $this->template= 'Admin::Dashboard.index';
    $this->middleware(function ($req, $next) {
      $this->user=Auth::user();
      return $next($req);
    });
  }
  protected function renderOutput(){
    $this->vars =Arr::add($this->vars, 'content',$this->content);
    return view($this->template)->with($this->vars);
  }
  private function getMenu (){

  }
}
