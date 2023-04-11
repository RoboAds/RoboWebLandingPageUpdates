<?php

namespace App\Http\Controllers;

use App\Mail\BuyRobotMail;
use App\Mail\mailToRoboads;
use App\Mail\RentInquiry;
use App\Mail\VisitorMail;
use App\Models\Post;
use App\Models\Posttags;
use App\Models\Tag;
use App\Models\WebsiteVisitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Artisan;

class PageController extends Controller
{
    //
    public function index(){
        $title = 'Home';
        return view('pages.home',compact('title'));
    }

    public function products(){
        $title = 'Products';
        return view('pages.products',compact('title'));
    }
    public function raTwoHundred(){
        $title = 'RA-200';
        return view('pages.ra-200',compact('title'));
    }

    public function about(){
        $title = 'About';
        return view('pages.about',compact('title'));
    }

    public function contact(){
        $title = 'Contact';
        return view('pages.contact',compact('title'));
    }
    public function solutions_advertising(){
        $title = 'Advertising';
        return view('pages.solutions_advertising',compact('title'));
    }
    public function solutions_telepresense(){

        $title = 'Solutions';
        return view('pages.solutions_telepresense',compact('title'));
    }
    public function solutions_ai(){

        $title = 'Solutions';
        return view('pages.solutions_ai',compact('title'));
    }
    public function solutions_customisations(){
        $title = 'Solutions';
        return view('pages.solutions_customisations',compact('title'));
    }

    public function gallary(){
        $title = 'Gallery';
        return view('pages.gallary',compact('title'));
    }

    public function become_a_partner(){
        $title = 'Become a Partner';
        return view('pages.become_a_partner',compact('title'));
    }

     public function newsBlogs(){
        $posts = Post::with(['user','tags'])->paginate(10);
        $title = 'New and Blogs';
         $postsInRandom = Post::with(['user','tags'])->inRandomOrder()->get();
        return view('pages.newsBlogs',compact('title','posts','postsInRandom'));
     }

    public function single_post($id,$slug){

        $post = Post::where('id',$id)->with('tags')->first();

        $posts = Post::with(['user','tags'])->paginate(10);

        $postsInRandom = Post::with(['user','tags'])->inRandomOrder()->get();

        $title = 'New and Blogs';
        return view('pages.single_post',compact('title','post','posts','postsInRandom'));
    }

     public function newsBlogs_2(){
        $title = 'New and Blogs';
        return view('pages.newsBlogs_2',compact('title'));
     }

       public function getDownload()
     {
       $filepath = asset('assets/brocher/RA-200_Data_Sheet_EN.pdf');
       return response()->download($filepath);
     }

    public function getDownloadAr() //26/4/22
    {
        $filepath = asset('assets/brocher/RA-200_Data_Sheet_AR.pdf');
        return response()->download($filepath);
    }

    public function robotInquiry(Request $request){
     /*   if($request['g-recaptcha-response']==null){
           return \response()->json(['post_response'=>'Captcha is not valid!','class'=>'recaptcha-error']);
        }*/
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

       Mail::to('pritam@roboads.com')->send(new RentInquiry($robot));
        return \response()->json (['post_response'=>'Thank you so much for contacting us. We will get back to you soon. ','class'=>'success-message']);
    }

      public function buyRobot(Request $request){
     /*    if($request['g-recaptcha-response']==null){
         return \response()->json(['recaptcha-error'=>'Captcha is not valid!','class'=>'recaptcha-error']);
        }*/
        $robot = [];
        $robot['name'] = $request->name;
        $robot['country'] = $request->country;
        $robot['mobile'] = $request->mobile;

        $robot['email'] = $request->email;
        if ($request->company !=null){
            $robot['company'] = $request->company;
        }

        $robot['message'] = $request->message;

        Mail::to('pritam@roboads.com')->cc('sanyal@roboads.com')->send(new BuyRobotMail($robot));
       return \response()->json(['post_response'=>'Thank you so much for contacting us. We will get back to you soon. ','class'=>'success-message']);
    }


    public function clientDetailsSubmit(Request $request){

 /*   Mail::to($request->email)->send(new VisitorMail($request->all()));
        return redirect()->back()->with(['success'=>'Thank you so much for contacting us. We will get back to you soon. ','class'=>'success']);
*/
        $website = new WebsiteVisitor();
        $website->name=$request->name;
        $website->email= $request->email;
        $website->custom_message = $request->message;
        $website->mobile = $request->mobile;
        $website->message_page = $request->message_page;
        $website->save();

        Mail::to('faysal@roboads.com')->cc('info@roboads.com')->send(new mailToRoboads($website));
        return redirect()->back()->with('success','Thank you for contacting. We will get back to you soon.');
}

public function getPostsWithTags($id,$slug){
   $posts = Post::with(['postsTags'=>function($q) use ($id){
       $q->where('tag_id',$id);
   }])->with('tags')->paginate(10);
    $title= 'Posts';

    $postsInRandom = Post::with(['user','tags'])->inRandomOrder()->get();

   return view('pages.newsBlogs',compact('posts','title','postsInRandom'));
}
}
