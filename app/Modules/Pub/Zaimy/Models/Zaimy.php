<?php

namespace App\Modules\Pub\Zaimy\Models;
use App\Modules\Pub\Mfo\Models\Mfo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zaimy extends Model
{
  public function getAllMfo(){
    return Mfo::get();
  }

  public function getRandom()
    {
      return Zaimy::inRandomOrder()->limit(15)->get(); 
    }
}
