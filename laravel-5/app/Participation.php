<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Participation extends Model {

    protected $fillable = array('races_id', 'year','users_id','raceNumber','chipNumber','time','paid','wiredTransfer','signedUpOnline');

    public function __Construct(){}

    public function user(){
        return $this->belongsTo('User')->withTimestamps();
    }

    public function race(){
        return $this->belongsTo('Race')->withTimestamps();
    }

}
