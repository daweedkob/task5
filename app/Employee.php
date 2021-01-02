<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $guarded = [];
    public $timestamps = true;
    public $table = 'employees';

    public function company(){
        return $this->belongsTo(Company::class,'company_id','id');
    }
}
