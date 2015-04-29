<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

	protected $fillable = array('name','firstname','clubD','email','isMale','dateOfBirth',
                                'address','zipCode','city','valNr','shoeBrand');

    public function participations(){
        return $this->hasMany('Participation');
    }

}
