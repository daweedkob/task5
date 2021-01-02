<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded = [];
    public $timestamps = True;
    public $table = 'companies';

    public function employee(){
        return $this->hasmany(Employee::class,'company_id','id');
    }
}
