<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Blog extends Model
{
    use HasFactory;
    private static $blog, $blogUrl;

    public static function saveInfo($request, $id=null)
    {
        if ($id !=null)
        {
            self::$blog = Blog::find($id);
        }
        else
        {
            self::$blog = new Blog();
        }
        if ($request->image)
        {
            if (file_exists(self::$blog->image))
            {
                unlink(self::$blog->image);
            }
            $blogImgUrl    = getImageUrl($request->image, 'admin/upload/blog-images/');
        }
        else
        {
            $blogImgUrl    = self::$blog->image;
        }

        self::$blog->category_id               = $request->category_id;
        self::$blog->title                     = $request->title;
        self::$blog->short_description         = $request->short_description;
        self::$blog->long_description          = $request->long_description;
        self::$blog->image                     = $blogImgUrl;
        self::$blog->author_id                 = $request->author_id;
        self::$blog->audio_url                 = $request->audio_url;
        self::$blog->video_url                 = $request->video_url;
        self::$blog->save();
        return self::$blog;
    }
    public static function checkStatus($id)
    {
        self::$blog    = Blog::find($id);
        if (self::$blog->status == 1){
            self::$blog->status = 0;
        }else{
            self::$blog->status = 1;
        }
        self::$blog->save();
    }
    public static function  deleteBlog($id)
    {
        self::$blog = Blog::find($id);
        if (self::$blog->image){
            if (file_exists(self::$blog->image))
            {
                unlink(self::$blog->image);
            }
        }
        self::$blog->delete();
    }

    public function category(){
        return $this->belongsTo(BlogCategory::class);
    }
    public function author(){
        return $this->belongsTo(Author::class);
    }
}
