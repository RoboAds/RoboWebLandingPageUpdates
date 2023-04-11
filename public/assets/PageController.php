<?php

namespace App\Http\Controllers;

use App\Mail\BuyRobotMail;
use App\Mail\RentInquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function index(){
 $exitCode = Artisan::call('route:clear');
     return 'Routes cache cleared';
    }

    public function raTwoHundred(){
        dd('sgsdfg');
          $title = 'RA-200';
        return view('pages.ra-200',compact('title'));
    }

    public function products(){
        $title = 'Products';
        return view('pages.products',compact('title'));
    }

    public function about(){
        $title = 'About';
        return view('pages.about',compact('title'));
    }

    public function contact(){
        $title = 'Contact';
        return view('pages.contact',compact('title'));
    }
    public function solutions(){
        $title = 'Solutions';
        return view('pages.solutions',compact('title'));
    }

    public function gallary(){
        $title = 'Gallery';
        return view('pages.gallary',compact('title'));
    }

public function getDownload()
{

    //PDF file is stored under project/public/download/info.pdf


  $filepath = public_path('assets/brocher/RA-200_Data_Sheet_AR.pdf');
        return Response::download($filepath); 
}


    public function robotInquiry(Request $request){
        if($request['g-recaptcha-response']==null){
            return redirect()->back()->withInput()->with('recaptcha-error', 'Captcha is not valid!');
        }
        $robot = [];
        $robot['name'] = $request->name;
        $robot['country'] = $request->country;
        $robot['mobile'] = $request->mobile;

        $robot['email'] = $request->email;
        if ($request->company !=null){
            $robot['company'] = $request->company;
        }
        if ($request->event_name!=null){
            $robot['event_name'] = $request->event_name;
        }
        if ($request->start_date !=null){
            $robot['start_date'] = $request->start_date;
        }
        if ($request->end_date !=null){
            $robot['end_date'] = $request->end_date;
        }
        $robot['message'] = $request->message;

        Mail::to('info@roboads.com')->cc('faysal@roboads.com')->send(new RentInquiry($robot));
        return redirect()->back()->with(['success'=>'Thank you so much for contacting us. We will get back to you soon. ','class'=>'success']);
    }
    public function buyRobot(Request $request){
        if($request['g-recaptcha-response']==null){
            return redirect()->back()->withInput()->with('recaptcha-error', 'Captcha is not valid!');
        }
        $robot = [];
        $robot['name'] = $request->name;
        $robot['country'] = $request->country;
        $robot['mobile'] = $request->mobile;

        $robot['email'] = $request->email;
        if ($request->company !=null){
            $robot['company'] = $request->company;
        }

        $robot['message'] = $request->message;

        Mail::to('info@roboads.com')->cc('faysal@roboads.com')->send(new BuyRobotMail($robot));
        return redirect()->back()->with(['success'=>'Thank you so much for contacting us. We will get back to you soon. ','class'=>'success']);
    }
}
