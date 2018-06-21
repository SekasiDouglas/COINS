<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Opportunity extends Model
{
    protected $table = 'opportunities';
    protected $guarded = [];
    public function latestOmnumber(){
    	$last = DB::table('opportunities')->latest('id')->first();
    	return $last;
    }
    public function project(){
    	return $this->hasOne(App\Project::class);
    }
    
}
