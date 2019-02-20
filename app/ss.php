<?php

namespace App;
$sses = App\ss::all();

    foreach ($sses as $ss) {
        echo $ss->name;
    }

use Illuminate\Database\Eloquent\Model;

class ss extends Model
{
   //
}
