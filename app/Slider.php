<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model {

    protected $fillable = array('image');
    
    public static function createSlider($im){
        
        Slider::create(['image' => $im]);
    }

}
