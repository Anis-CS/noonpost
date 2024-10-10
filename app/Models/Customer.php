<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    private static $customer, $customerImgUrl;

    public static function newCustomer($request)
    {

        if ($request->image)
        {
            if (file_exists(self::$customer->image))
            {
                unlink(self::$customer->image);
            }
            $customerImgUrl    = getImageUrl($request->image, 'admin/upload/customer-images/');
        }
        else
        {
            $customerImgUrl    = " ";
        }

        self::$customer         = new Customer();
        self::$customer->name   = $request->name;
        self::$customer->phone  = $request->phone;
        self::$customer->email  = $request->email;
        if ($request->password)
        {
            self::$customer->password   = bcrypt($request->password);
        }
        else
        {
            self::$customer->password   = bcrypt($request->phone);
        }
        self::$customer->date_of_birth  = $request->date_of_birth;
        self::$customer->gender         = $request->gender;
        self::$customer->address        = $request->address;
        self::$customer->image          = self::$customerImgUrl;
        self::$customer->save();
        return self::$customer;
    }
    public static function checkStatus($id)
    {
        self::$customer    = Customer::find($id);
        if (self::$customer->status == 1){
            self::$customer->status = 0;
        }else{
            self::$customer->status = 1;
        }
        self::$customer->save();
    }
    public static function loginCheck($request)
    {
        self::$customer = Customer::where('email',$request->user_name)
            ->orWhere('phone',$request->user_name)->first();
        if (self::$customer)
        {
            if (password_verify($request->password,self::$customer->password))
            {
                Session::put('customer_id', self::$customer->id);
                Session::put('customer_name', self::$customer->name);
            }
            else
            {
                return back()->with('message','Please use valid password');
            }
            return back()->with('message','Login Successfully');
        }
        else
        {
            return back()->with('message','Please use valid email or phone number');
        }
    }

    public static function updateProfile($request, $id)
    {
        self::$customer     = Customer::find($id);
        if ($request->image)
        {
            if (file_exists(self::$customer->image))
            {
                unlink(self::$customer->image);
            }
            $customerImgUrl    = getImageUrl($request->image, 'admin/upload/customer-images/');
        }
        else
        {
            $customerImgUrl    = self::$customer->image;
        }

        self::$customer->name           = $request->name;
        self::$customer->phone          = $request->phone;
        self::$customer->email          = $request->email;
        self::$customer->date_of_birth  = $request->date_of_birth;
        self::$customer->gender         = $request->gender;
        self::$customer->address        = $request->address;
        self::$customer->image          = self::$imageUrl;
        self::$customer->save();
    }



}
