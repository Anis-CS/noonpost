<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;
    private static $category;

    public static function saveInfo($request,$id=null)
    {
        if ($id !=null)
        {
            self::$category = BlogCategory::find($id);
        }
        else
        {
            self::$category = new BlogCategory();
        }
        return self::saveBasicInfo(self::$category, $request);

    }

    private static function saveBasicInfo($category, $request)
    {
        $category->name                        = $request->name;
        $category->description                 = $request->description;
        $category->save();
        return $category;
    }
    public static function checkStatus($id)
    {
        self::$category    = BlogCategory::find($id);
        if (self::$category->status == 1){
            self::$category->status = 0;
        }else{
            self::$category->status = 1;
        }
        self::$category->save();
    }
    public static function  deleteCategory($id)
    {
        self::$category = BlogCategory::find($id);
        self::$category->delete();
    }
}
