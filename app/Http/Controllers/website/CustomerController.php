<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Session;

class CustomerController extends Controller
{
    private $customer;


    public function store(Request $request)
    {

        $this->customer = Customer::newCustomer($request);

        Session::put('customer_id',$this->customer->id);
        Session::put('customer_name',$this->customer->name);

        return redirect('/');
    }

    public function customerLoginCheck(Request $request){
        $this->customer = Customer::where('email',$request->username)
            ->orWhere('phone',$request->username)
            ->first();
        if ($this->customer){
            if (password_verify($request->password,$this->customer->password)){

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
