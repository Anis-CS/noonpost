<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Session;

class CustomerController extends Controller
{
    private $customer,$otp;


    public function store(Request $request)
    {
        // Request validation
        $request->validate([
            "name"=>"required | string",
            "email"=>"required | email | string | unique:customers",
            "phone"=>"required | integer | unique:customers",
            "password"=>"required",
        ],
            [
                "name.required" => "The name field is required.",
                "email.required" => "We need to know your email address!",
                "email.email" => "Please provide a valid email address.",
                "email.unique" => "This email address is already registered.",
                "phone.required" => "Please provide a phone number.",
                "phone.unique" => "This Phone Number is already registered.",
                "password.required" => "A password is required.",
            ]);
        $this->customer = Customer::newCustomer($request);

        Session::put('customer_id', $this->customer->id);
        Session::put('customer_name', $this->customer->name);

        return redirect('/');
    }

    public function customerLoginCheck(Request $request){
        $this->customer = Customer::where('email', $request->username)
            ->orWhere('phone',$request->username)
            ->first();
        if ($this->customer){
            if (password_verify($request->password, $this->customer->password)){

                Session::put('customer_id', $this->customer->id);
                Session::put('customer_name', $this->customer->name);
                return redirect('/')->with('message','logIn successfully');

            }else{
                return back()->with('message','Please use valid password');
            }
        }else{
            return back()->with('message','Please use valid email or phone number');
        }

    }


    public function customerDashboard()
    {
        return view('website.customer.dashboard');
    }

    public function customerProfile()
    {
        return view('website.customer.profile', ['customer'=>Customer::find(Session::get('customer_id')),]);
    }

    public function customerUpdateProfile(Request $request, $id)
    {
        Customer::updateProfile($request, $id);
        return back()->with('message','Profile info Update.');
    }




    public function customerChangePassword()
    {
        return view('website.customer.change-password');
    }

    public function logout()
    {
        Session::forget('customer_id');
        Session::forget('customer_name');

        return redirect('/');

    }
}
