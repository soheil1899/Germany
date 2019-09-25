<?php
/**
 * Created by PhpStorm.
 * User: Afrang
 * Date: 2/17/2019
 * Time: 11:51 AM
 */

namespace App\Http\Controllers\Website;
use App\articles;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SendSms;
use App\Mail\OrderShipped;
use App\ModelLearning\v_professor;
use App\setting;
use App\User;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Validator;

class PagesController extends Controller
{
    use general;
    public function __construct()
    {
//        $this->middleware('LoginCheck')->only('home');

    }

    function index(){
//        $setting=$this->getsetting();
//        $header=(object) array();
//        $header->title=$setting->websitename;
//        $header->keywords=$setting->keywords;
//        $header->description=$setting->description;
//        $header->image='/media/Layout/'.$setting->logo;



        return view('website.pages.index');
    }



    public function getmysetting()
    {
        $setting = $this->getsetting();
        return $setting;
    }


//    public function sendrequest(Request $request)
//    {
//        if($request->title == 'message') {
//            $request->validate([
//                'name' => 'required',
//                'email' => 'required | email',
//                'phone' => 'required | min:10',
//                'mymessage' => 'required',
//            ]);
//        }else if($request->title == 'order'){
//            $request->validate([
//                'name' => 'required',
//                'request' => 'required',
//                'location' => 'required',
//                'email' => 'required | email',
//                'phone' => 'required | min:10',
//                'description' => 'required',
//            ]);
//        }
//       return [Mail::to('info@afrang.dev')->send(new OrderShipped($request->all())), true];
//
//    }

}
