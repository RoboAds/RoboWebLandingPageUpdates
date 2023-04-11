<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Posttags;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class PostController extends Controller
{
    public function createBlogPost(Request $request){


        if ($request->hasFile('userFile'))
        {
            $request->validate([
                'userFile' => 'required|max:10000|mimes:jpeg,png,jpg',
            ]);
            $newfilename =Carbon::now() -> format('d-m-y-h-i-s').'-'. $request->file('userFile')->getClientOriginalName();
            $image = $request->file('userFile');
            $imagePath = $newfilename;
            $image->storeAs('roboads_website/posts/',$imagePath,'s3');

            $title = $request->input('title');
            $desc = $request->input('post');
            $post=new Post();
            $post->desc=$desc;
            $post->slug=Str::slug($title,'-','');
            $post->name=$title;
            $post->modified_filename = $newfilename;
            $post->original_filename=$newfilename;
            $post->user_id=Auth::user()->id;
            $post->save();
            $requestTags = explode(',', $request->postTags);
            foreach($requestTags as $key => $tagItem){
                $postTag = new Posttags();
                $getTags = Tag::where('tag_name',$tagItem)->first();
                if ($getTags != null){
                    $postTag->tag_id = $getTags->id;
                    $postTag->post_id = $post->id;
                 $postTag->save();
                }
                else{
                    $insertTags = new Tag();
                    $insertTags->tag_name = $tagItem;
                    $insertTags->save();
                    $postTag->tag_id = $insertTags->id;
                    $postTag->post_id = $post->id;
                    $postTag->save();
                }
            }
            return  redirect()->back()->with('success','Post successfully uploaded');
        }
        else
        {
            $title = $request->input('title');
            $desc = $request->input('post');
            $post=new Post();
            $post->desc=$desc;
            $post->name=$title;
            $post->user_id=Auth::user()->id;
            $post->save();
            $requestTags = explode(',', $request->postTags);
            foreach($requestTags as $key => $tagItem){
                $postTag = new Posttags();
                $getTags = Tag::where('tag_name',$tagItem)->first();
                if ($getTags != null){
                    $postTag->tag_id = $getTags->id;
                    $postTag->post_id = $post->id;
                    $postTag->save();
                }
                else{
                    $insertTags = new Tag();
                    $insertTags->tag_name = $tagItem;
                    $insertTags->save();
                    $postTag->tag_id = $insertTags->id;
                    $postTag->post_id = $post->id;
                    $postTag->save();
                }
            }

            return  redirect()->back()->with('success','Post successfully uploaded');
        }
    }



}
