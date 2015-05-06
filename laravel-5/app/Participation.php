<?php namespace App;

use Illuminate\Database\Eloquent\Model;
class Participation extends Model {

    protected $fillable = array('race_id', 'year','user_id','raceNumber','chipNumber','time','paid','wiredTransfer','signedUpOnline');

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function race(){
        return $this->belongsTo('App\Race');
    }
}
