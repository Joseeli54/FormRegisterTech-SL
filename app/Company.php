<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
     //definiendo que tabla se refierfe este modelo
	protected $table = 'companies';
	//definiendo el nombre del codigo de este modelo
    protected $primaryKey = "id";

	protected $fillable = ['id','user_id', 'name', 'phone' ,'email','findout','revenueve','team','obstacle','business']; 

}