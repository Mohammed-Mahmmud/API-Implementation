<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Note extends Model
{
    use HasFactory;

public function user()
{
    return $this->belongsTo('App\Models\User');
}


public function employee()
{
    return $this->belongsTo('App\Models\Employee');
}
public function company()
{
    return $this->belongsTo('App\Models\Company');
}


}
