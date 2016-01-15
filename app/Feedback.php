<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model {

    protected $fillable = array(
                                'email','userName','description','jobs'
                           );
    
    public static function addApplication($data){
            
            Feedback::create($data);
            
        } 

}
