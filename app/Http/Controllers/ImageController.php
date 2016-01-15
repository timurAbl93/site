<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Images;
use App\Slider;
use Illuminate\Support\Facades\Validator;

class ImageController extends Controller {

    public function create() {
        return view('admin/imageForm');
    }

    public function uploadImages() {
        $rules = ['file' => 'image'];

        if (Input::hasFile('file')) {
            $image = Input::file('file');
            $validation = Validator::make([$image], [$rules]);

            //если файл картинка
            if ($validation->passes()) {

                //Добавление названия картинки в БД и перенос картинки в папку
                Images::createImages($image);
                return redirect('dachboard/gallery');
            } else {

                return redirect()->back()->withInput();
            }
        } else {

            return redirect()->back();
        }
    }

    //галерея
    public function showGallery() {

        $images = Images::getImages();
        return view('admin.gallery', ['images' => $images]);
    }

    //удаление изображений
    public function deleteImages($id) {

        Images::deleteImagesByID($id);
        return redirect()->back();
    }

    //Добавлене картинки в слайдер
    public static function slider($im) {

        Slider::createSlider($im);
        return redirect()->back();
    }

}
