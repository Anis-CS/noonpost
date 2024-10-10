<?php

namespace App\Models;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Carousel extends Model
{
    use HasFactory;
    private static $carousel;

    public static function saveInfo($request)
    {
        foreach ($request as $item)
        {
            self::$carousel =   new Carousel();
            self::$carousel->blog_id    = $item;
            self::$carousel->save();
        }
    }

    public static function UpdateCarousel($request,$id)
    {
        self::$carousel             = Carousel::find($id);
        self::$carousel->blog_id    = $request->blog_id;
        self::$carousel->save();
    }
    public static function checkStatus($id)
    {
        self::$carousel    = Carousel::find($id);
        if (self::$carousel->status == 1){
            self::$carousel->status = 0;
        }else{
            self::$carousel->status = 1;
        }
        self::$carousel->save();
    }

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
