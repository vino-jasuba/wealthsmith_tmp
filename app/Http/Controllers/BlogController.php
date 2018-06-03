<?php

namespace App\Http\Controllers;

use App\Mail\SubscriptionCreated;
use App\Providers\WealthSmithClient;
use Illuminate\Http\Request;
use App\Post;
use App\Tender;
use App\Publication;
use App\User;
use Illuminate\Support\Facades\Mail;
use Response;
use ZipArchive;
use Redirect;
use Image;
use Zipper;
use DB;
use File;
use Illuminate\Support\Facades\Input;
use App\Comment;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostFormRequest;

class BlogController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {   
        return View('administrator.index')
            ->with('posts', Post::orderBy('created_at', 'desc')->paginate(3));

    }

    public function page()
    {
        return View('pages.blog')
            ->with('posts', Post::where('active','1')->orderBy('created_at', 'desc')->paginate(5));
    }

    public function homepage()
    {
        return View('pages.home')
            ->with('posts', Post::where('active','1')->orderBy('created_at', 'desc')->paginate(3));

    }

    public function about()
    {
        return View('pages.about')
            ->with('posts', Post::where('active','1')->orderBy('created_at', 'desc')->paginate(3));

    }

    public function services()
    {
        return View('pages.services')
            ->with('posts', Post::where('active','1')->orderBy('created_at', 'desc')->paginate(3));

    }

    public function testimonials()
    {
        return View('pages.testimonials')
            ->with('posts', Post::where('active','1')->orderBy('created_at', 'desc')->paginate(3));

    }

    public function contact()
    {
        return View('pages.contact')
            ->with('posts', Post::where('active','1')->orderBy('created_at', 'desc')->paginate(3));

    }

    // public function publications()
    // {
        
    //     $publications = Publication::paginate(3);
    //     $title = 'Latest Publications';
    //     return view('pages.publications', compact('publications'));
    // }

    // public function tender()
    // {
    //     $tenders = Tender::paginate(3);
    //     $title = 'Latest Tenders';
    //     return view('pages.tenders', compact('tenders'));

        
    // }

    // public function all_tenders(Request $request)
    // {
    //     //
    //     return View('posts.show_tender')
    //         ->with('tenders', Tender::orderBy('created_at', 'desc')->paginate(3));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        // 
        if($request->user()->can_post())
        {   

            return view('posts.create');
        }   
        else 
        {
            return redirect('/')->withErrors('You have not sufficient permissions for writing post');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(PostFormRequest $request)
    {
        $post = new Post();
        $post->title = $request->get('title');
        $post->image = $request->get('image');
        $post->body = $request->get('body');
        $post->slug = str_slug($post->title);
        
        $duplicate = Post::where('slug',$post->slug)->first();
        if($duplicate)
        {
            return redirect('new-post')->withErrors('Title already exists.')->withInput();
        }   
        
        $post->author_id = $request->user()->id;
        if($request->has('save'))
        {
            $post->active = 0;
            \Session::flash('flash_message','Post Saved as Draft.');            
        }           
        else 
        {
            $post->active = 1;
            \Session::flash('flash_message','Post Published Successfully.');    
        }


                    
        $image = $request->file('image');
        $filename = $image->getClientOriginalName();
        $filename = preg_replace("/[^a-zA-Z0-9_.]/", "", $filename);
        Image::make($image->getRealPath())->resize(360, 250)->save('uploads/blog/thumbnail_images/' . $filename);
        $post->image = $filename;

        Image::make($image->getRealPath())->resize(600, 400)->save('uploads/blog/normal_images/' . $filename);
        $post->image = $filename;

        $post->save();
        \Session::flash('flash_message','Post Saved Successfully.');
        return redirect('/my-all-posts');

        

        // return redirect('edit/'.$post->slug)->withMessage($message);
  }


 
    // public function create_tender(Request $request)
    // {
    //     // 
    //     if($request->user()->can_post())
    //     {   

    //         return view('posts.tender');
    //     }   
    //     else 
    //     {
    //         return redirect('/')->withErrors('You have not sufficient permissions for writing post');
    //     }
    // }


   
    // public function store_tender(Request $request)
    // {
    //     $tender = new Tender();
    //     $tender->title = $request->get('title');

    //     $file = Input::file('filename');
    //     $file_name = $file->getClientOriginalName();
    //     $file_size = round($file->getSize() / 1024);
    //     $file_ex = $file->getClientOriginalExtension();
    //     $file_mime = $file->getMimeType();

    //     if (!in_array($file_ex, array('zip', 'rar', 'tar'))) return Redirect::to('/')->withErrors('Invalid image extension we just allow ZIP, RAR, TAR');

    //      $newname = $file_name;
    //      $file->move(public_path(). '/public/uploads/tenders', $newname);        
    //       $tender->filename = $file_name;
    //       $tender->mime = $file_mime;


    //     $tender->save();
    //     \Session::flash('flash_message','Tender Posted Successfully.');
    //     return back();
    // }


    // public function download_tender($newname){
    //   $path = public_path()."/uploads/tenders/".$newname;
    //   return Response::download($path, $newname);
    // }


    // public function destroy_tender(Request $request, $id)
    // {
    //     //
    //     $tender = Tender::find($id);
    //     $tender->delete();

    //     \Session::flash('flash_message','Tender Deleted Successfully.');
    //     return redirect('/all-tenders');
    // }


  
    // public function create_publication(Request $request)
    // {
    //     // 
    //     if($request->user()->can_post())
    //     {   

    //         return view('posts.publications');
    //     }   
    //     else 
    //     {
    //         return redirect('/')->withErrors('You have not sufficient permissions for writing post');
    //     }
    // }



    // public function store_publication(Request $request) {

    //   $publications = new Publication();

    //   $file = Input::file('filename');
    //   $file_name = $file->getClientOriginalName();
    //   $file_size = round($file->getSize() / 1024);
    //   $file_ex = $file->getClientOriginalExtension();
    //   $file_mime = $file->getMimeType();

    //   if (!in_array($file_ex, array('pdf', 'doc', 'docx'))) return Redirect::to('/')->withErrors('Invalid image extension we just allow ZIP, RAR, TAR');

    //    $newname = $file_name;
    //    $file->move(base_path(). '/public/uploads/publications', $newname);        
    //    $publications->filename = $file_name;
    //    $publications->mime = $file_mime;


    //   $publications->save();
    //   \Session::flash('flash_message','Publication Posted Successfully.');
    //   return back();
      
    // }


    // public function download_publication($newname){
    //   $path = public_path()."/uploads/publications/".$newname;
    //   return Response::download($path, $newname);
    // }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($slug)
    {
        $post = Post::where('slug',$slug)->first();

        if($post)
        {
            if($post->active == false)
                return redirect('/admin-dash')->withErrors('requested page not found');   
        }
        else 
        {
            return redirect('/admin-dash')->withErrors('requested page not found');
        }
        return view('pages.post', compact('post'));
    }


    /**
     * Display the specified resource in the BACKEND.
     *
     * @param  int  $id
     * @return Response
     */
    public function show_backend($slug)
    {
        $post = Post::where('slug',$slug)->first();

        if($post)
        {
            if($post->active == false)
                return view('posts.show', compact('post'));   
        }
        else 
        {
            return redirect('/admin-dash')->withErrors('requested page not found');
        }
        return view('posts.show', compact('post'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($slug){
            //get post data by id
            $post = Post::findorFail($slug);
            
            //load form view
            return view('posts.edit', compact('post'));
        }

    
    public function update(Request $request)
      {
        //
        $post_id = $request->input('post_id');
        $post = Post::find($post_id);
        if($post && ($post->author_id == $request->user()->id || $request->user()->is_admin()))
        {
          $title = $request->input('title');
          $slug = str_slug($title);
          $duplicate = Post::where('slug',$slug)->first();
          if($duplicate)
          {
            if($duplicate->id != $post_id)
            {
              return redirect('edit/'.$post->slug)->withErrors('Title already exists.')->withInput();
            }
            else 
            {
              $post->slug = $slug;
            }
          }
          $post->title = $title;
          $post->body = $request->input('body');
          if($request->has('save'))
          {
            $post->active = 0;
            \Session::flash('flash_message','Post Saved Successfully.');    
            $landing = '/my-all-posts';
          }            
          else {
            $post->active = 1;
            \Session::flash('flash_message','Post Updated Successfully.');  
            $landing = '/my-all-posts';
          }
          $post->save();
               return redirect($landing);
        }
        else
        {
          return redirect('/my-all-posts')->withErrors('you have not sufficient permissions');
        }
      }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request, $id)
    {
        //
        $post = Post::find($id);
        if($post && ($post->author_id == $request->user()->id || $request->user()->is_admin()))
        {
            $post->delete();
            $data['message'] = 'Post deleted Successfully';
        }
        else 
        {
            $data['errors'] = 'Invalid Operation. You have not sufficient permissions';
        }

        \Session::flash('flash_message','Post Deleted Successfully.');
        return redirect('/my-all-posts')->with($data);
    }

    /**
     *  Let's just download the one brochure we have now
     */
    public function download()
    {
        return response()->file('storage/brochure.pdf');
    }


    public function subscribe(Request $request)
    {
        $this->validate($request, [
            'subscription_email' => 'required|email'
        ]);

        $user = new WealthSmithClient('name', $request->input('email'));

        Mail::to($user)->send(new SubscriptionCreated('Subscription created'));

        return response()->json(['message' => 'Subscription created']);
    }

    public function message(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'name' => 'required',
            'message' => 'required'
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        $user = new WealthSmithClient($name, $email);

        Mail::to($user)->send(new SubscriptionCreated($message));

        return response()->json(['message' => 'Comments received']);
    }
}
