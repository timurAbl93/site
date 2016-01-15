<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model {

    protected $fillable = array('image', 'path');

    //получаем изображения из бд
    public static function getImages() {

        return Images::all();
    }

    public static function deleteImagesByID($id) {

        Images::where('id', '=', $id)->delete();
    }

    public static function createImages($image) {

        Images::create(['image' => $image->getClientOriginalName()]);
        $image->move('images/slider', $image->getClientOriginalName());
    }

}
