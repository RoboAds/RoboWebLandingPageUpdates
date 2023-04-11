<?php

namespace App\Http\Controllers;

use App\Mail\OTPMail;
use App\Mail\OTPVerifiedMail;
use App\Mail\RentInquiry;
use App\Models\Coupon;
use App\Models\Event;
use App\Models\Robot;
use App\Models\User;
use App\Models\VisitorMedia;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class RobotController extends Controller
{
    //

    public function rentRobot(){
        $title='Rent Robot';
        return view('pages.rentRobot',compact('title'));
    }

    public function buyRobot(){
        dd('buy roboy');
    }
    public function advertisement(){
        dd('advertisement');
    }
    public function sendOtp(Request $request){

     $user= User::where('email',$request->email)->first();

     if ($user !=null){
         return \response()->json (0);
     }
     else{
         $robot = new User();
         $robot->email = $request->email;
         $robot->otp = random_int(100000, 999999);

         $robot->otp = $robot->otp;
         $robot->name = 'User';
         $robot->password = 'password';
         $robot->save();

         Mail::to($request->email)->send(new OTPMail($robot));
         return \response()->json (1);
     }
    }

    public function verifyOtp(Request $request){
            $otp = User::where(['email'=>$request->email,'otp'=>$request->otp])->first();


            $pass= Str::random(10);
            if ($otp !=null){
                $otp->name = $request->company_name;
                $otp->password = Hash::make($pass);
                $otp->otp = 0;
                $otp->save();
                $otp->pass = $pass;

                $event = new Event();
                $event->venue = $request->venue;
                $event->event_name = $request->event_name;
                $event->contact_person = $request->contact_person;
                $event->contact_number = $request->contact_number;
                $event->robot_number = $request->robot_number;
                $event->date_range = $request->date_range;
                $event->user_id = $otp->id;
                $event->save();
                Mail::to($otp->email)->send(new OTPVerifiedMail($otp));
                return response()->json(1);
            }
            else{
                return  response()->json(0);
            }
    }

    public function rentRobotStepOneGet($id){

        $robot = Robot::find($id);

        $title='Rent Robot';
        return view('pages.rentRobot',compact('title','robot'));
    }

    public function rentRobotStepOne(Request $request){

        $request->session()->forget('event');
        $validatedData = $request->validate([
            'datetimes' => 'required',
            'event_name' => 'required',
            'number_of_robots' => 'required',
            'venue' => 'required',
            'robot_id'=>'required'
        ]);

        $event = new Event();
        $event->event_name = $request->event_name;
        $event->date_range = $request->datetimes;
        $event->robot_number = $request->robot_number;
        $event->venue = $request->event_name;
        $event->robot_id = $request->robot_id;

        $request->session()->put('event', $event);
        return redirect()->route('rentRobot.step.two');
    }

    public function rentRobotStepTwo(Request $request)
    {
        $event =  $request->session()->get('event');
        if ($request->session()->has('event')) {
            $title = 'Rent Robot Step Two';
            return view('pages.create-step-two',compact('event','title'));
        } else {
            dd('Nothing to show in this session');
        }


    }

    public function rentRobotStepTwoPost(Request $request)
    {
        $validatedData = $request->validate([
            'company_name' => 'unique:users,name|required',
            'contact_person' => 'required',
            'contact_number' => 'required',
            'email' => 'unique:users,email|required',
        ]);


        $event = $request->session()->get('event');

        if ($event!=null){
            $event->name = $request->company_name;
            $event->email = $request->email;
            $event->contact_person = $request->contact_person;
            $event->contact_number = $request->contact_number;

            $otp = random_int(100000, 999999);

            $event->otp = $otp;
            Mail::to($request->email)->send(new OTPMail($event));

            $request->session()->put('event', $event);
            return redirect()->route('rentRobot.step.three');
        }

    }

    public function rentRobotStepThree(Request $request)
    {

        $event = $request->session()->get('event');
        $title = 'Rent Robot Step Three';
        return view('pages.create-step-three',compact('event','title'));


    }

    public function rentRobotStepThreePost(Request $request)
    {
        if (User::where('email',$request->email)->first() !=null){
           return back()->with('error','You are already registered with us. Please login or if you forgot password, please reset your password');
        }
        else{
            $event = $request->session()->get('event');
            if ($event!=null){
                if ($event->otp != $request->otp){
                    return back()->with('error','OTP invalid');
                }
                else{

                    $pass= Str::random(10);
                    $user = new User();
                    $user->name = $event->name;
                    $user->email = $event->email;
                    $user->password = Hash::make($pass);
                    $user->save();

                    $e = new Event();
                    $e->event_name = $event->event_name;
                    $e->user_id = $user->id;
                    $e->robot_number = $event->robot_number;
                    $e->venue = $event->event_name;
                    $e->contact_person = $event->contact_person;
                    $e->contact_number = $event->contact_number;
                    $e->date_range = $event->date_range;
                    $e->robot_id = $event->robot_id;
                    $e->save();

                    $main_user = User::where('email',$event->email)->with('events')->first();

                    Auth::loginUsingId($user->id);

                    $request->session()->forget('event');
                    return redirect()->route('rentRobot.step.four.post');
                }
            }
        }
    }

    public function rentRobotStepFour(Request $request)
    {
        $auth = Auth::user();
     if ($auth !=null){
         $user  = User::where('id',Auth::id())->with('events')->first();
         $event = Event::where('user_id',$user->id)->latest()->first();
         $title = 'Rent Robot Step Four';
         return view('pages.create-step-four',compact('user','title','event'));
     }
     else{
         return redirect('/');
     }


    }


    public function mediasUpload(Request $request)
    {
        $auth = Auth::user();
        $media = new VisitorMedia();
        if ($request->hasFile('file')) {

            $newfilename = Carbon::now()->format('d-m-y-h-i-s') . '-' . str_replace(' ', '_', $request->file('file')->getClientOriginalName());
            $image = $request->file('file');
            $imagePath = 'Robo-' . $newfilename;
            $image->storeAs('roboads_website/posts/',$imagePath,'s3');

            $media_size = $request->file('file')->getSize();
            $media->media_url = 'https://faceaqses.s3.amazonaws.com/roboads_website/posts/' . $imagePath;
            $media->media_name = ucwords(str_replace('.', '', $request->file('file')->getClientOriginalName()));
            $media->user_id = Auth::id();
            $media->media_size = $media_size;
            $media->upload_id = $request->media_unique_playlist_id;
            $media->event_id = $request->event_id;
            $media->media_type = 'vedio';
            $media->save();
            return response()->json(['status' => 1, 'file_id' => $media->id]);

        }
    }

    public function rentRobotStepFourPost(Request $request){
        $medias = VisitorMedia::where(['user_id'=>$request->auth_id,'upload_id'=>$request->time_id,'event_id'=>$request->event_id])->get();
        $event_id = $request->event_id;
        $user_id = $request->auth_id;
        $upload_id = $request->time_id;
        $title = 'Rent Robot Step Five';
        return view('pages.create-step-five',compact('medias','user_id','event_id','title','upload_id'));

    }

    public function getRobotDetails(Request $request){
      $robot = Robot::find($request->robot_id);
      if ($robot !=null){
          return response()->json(['status'=>1,'message'=>$robot]);
      }
      else{
          return response()->json(['status'=>0,'message'=>'no robot found']);
      }
    }

    public function robotAddOn(Request  $request){
        $tele = new Event();
        if ($request->has('telepresence')){
            $tele->telepresence = $request->telepresence;
        }
        if ($request->has('editing')){
            $tele->editing = $request->editing;
        }
        $event = Event::where(['id'=>$request->event_id])->with(['medias','robot','user'])->first();
        $title = 'Billing';
        return view('pages.create-step-six',compact('event','title','tele'));

    }

    public function couponRedeem(Request $request){
        $coupon = Coupon::where('coupon',$request->discount)->first();
        if ($coupon !=null){
            return response()->json(['status'=>1,'value'=>$coupon]);
        }
        else{
            return response()->json(['status'=>0,'value'=>$coupon]);
        }
    }

    public function checkForEmailExist(Request $request){
       $user = User::where('email',$request->email)->first();
       if ($user !=null){
           return response()->json(0);
       }
       else{
           return response()->json(1);
       }
    }

    public function checkForCompanyExist(Request $request){
        $user = User::where('name',$request->company_name)->first();
        if ($user !=null){
            return response()->json(0);
        }
        else{
            return response()->json(1);
        }
    }

}
