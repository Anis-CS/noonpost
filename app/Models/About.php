<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    public static $abouts,$aboutImgUrl;

    public static function saveInfo($request){
        self::$abouts = new About();
        if ($request->image)
        {
            if (file_exists(self::$abouts->image))
            {
                unlink(self::$abouts->image);
            }
            self::$aboutImgUrl    = getImageUrl($request->image, 'admin/upload/about-images/');
        }
        self::$abouts->id                       = $request->id;
        self::$abouts->image                    = self::$aboutImgUrl;
        self::$abouts->long_description         = $request->long_description;
        self::$abouts->title                    = $request->title;
        self::$abouts->short_description        = $request->short_description;
        self::$abouts->save();
    }

    public static function updatedData($request, $id){
        self::$abouts = About::find($id);
        if ($request->image)
        {
            if (file_exists(self::$abouts->image))
            {
                unlink(self::$abouts->image);
            }
            self::$aboutImgUrl    = getImageUrl($request->image, 'admin/upload/about-images/');
        }
        else
        {
            self::$aboutImgUrl    = self::$abouts->image;
        }
        self::$abouts->image                    = self::$aboutImgUrl;
        self::$abouts->long_description         = $request->long_description;
        self::$abouts->title                    = $request->title;
        self::$abouts->short_description        = $request->short_description;
        self::$abouts->save();
    }
}
