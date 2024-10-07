<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    private static $author;

    public static function saveInfo($request, $id=null)
    {
        if ($id !=null)
        {
            self::$author   = Author::find($id);
        }
        else
        {
            self::$author   = new Author();
        }
        if ($request->image)
        {
            if (file_exists(self::$author->image))
            {
                unlink(self::$author->image);
            }
            $authorUrl    = getImageUrl($request->image, 'admin/upload/author-images/');
        }
        else
        {
            $authorUrl    = self::$author->image;
        }
        self::$author->name =$request->name;
        self::$author->email =$request->email;
        self::$author->number =$request->number;
        self::$author->description =$request->description;
        self::$author->image =  $authorUrl;
        self::$author->facebook_url =$request->facebook_url;
        self::$author->instagram_url =$request->instagram_url;
        self::$author->x_url =$request->x_url;
        self::$author->youtube_url =$request->youtube_url;
        self::$author->save();
        return self::$author;
    }
    public static function statusCheck($id){
        self::$author   =   Author::find($id);
        if (self::$author->status==1){
            self::$author->status=0;
        }
        else{
            self::$author->status=1;
        }
        self::$author->save();
    }

    public static function authorDelete($id)
    {
        self::$author   = Author::find($id);
        if (self::$author->image){
            if (file_exists(self::$author->image))
            {
                unlink(self::$author->image);
            }
        }
        self::$author->delete();
    }
}
