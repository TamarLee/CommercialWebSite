<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/*use Illuminate\Database\Eloquent\SoftDeletes;*/
use App\Product;



class Product extends Model
{
	/*use SoftDeletes;*/

	/*protected $dates = ['deleted_at'];*/
	protected $guarded = ['created_at', 'deleted_at'];

	/*public function scopePopular($query){
		return $query->where('rating', '>', 4);
		Product::withoutGlobalScope(AgeScore2::class);
	}

	public function reviews(){
		return $this->hasMany('App\review');
	}*/
    
}
