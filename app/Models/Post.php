<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    private static $posts, $postImgUrl;

    public static function saveInfo($request){

        if ($request->image){
            $postImgUrl   = getImageUrl($request->image, 'admin/upload/post-images/');
        }
        self::$posts                           = new Post();
        self::$posts->id                       = $request->id;
        self::$posts->header1                  = $request->header1;
        self::$posts->description	           = $request->description;
        self::$posts->image                    = $postImgUrl;
        self::$posts->caption	               = $request->caption;
        self::$posts->header2	               = $request->header2;
        self::$posts->description2		       = $request->description2;
        self::$posts->title			           = $request->title;
        self::$posts->short_description	       = $request->short_description;
        self::$posts->header3		           = $request->header3;
        self::$posts->long_description		   = $request->long_description;
        self::$posts->save();
    }
}
