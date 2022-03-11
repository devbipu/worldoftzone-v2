<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use URL;
error_reporting(0);

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public static function the_query($request){
		$post_title = $request->get('s', null);
    	$table = "posts";
    	$query = DB::table($table);
    	$query = is_null($post_title) ? $query : $query->where('post_title', 'LIKE', "%$post_title%");
    	return $query->orderBy('created_at', 'desc');
    }

    //index
    public function index(Request $request)
    {
        
        $get_data = self::the_query($request)->paginate(20);
        $get_total = self::the_query($request)->count();
        return view('backend.post.index', compact('get_data', 'get_total'));
    }

    //create
    public function create()
    {
        return view('backend.post.create');
    }
    
    //save
    public function save(Request $request)
    {
        
        $table = "posts";
    	$url = URL::previous();

    	$validator = Validator::make($request->all(), [
		    'post_title' 		=> 'required|min:2|max:255',
		    'post_description' 	=> "required",
		    'meta_description' 	=> "required|min:20|max:155",
		    'post_image' 		=> "nullable|image|mimes:jpeg,png,jpg,gif|max:3000",
		]);
		

		if($validator->fails()){
		    return redirect($url)->withErrors($validator)->withInput();
		}
		
		//get data by existing slug
		$get_old = DB::table($table)->where("post_slug", str_slug($request->post_title))->first();

		if($get_old->post_slug){
			$post_slug = $get_old->post_slug."-".rand(111111,999999);
		}else{
			$post_slug = str_slug($request->post_title);
		}
		
		$photo = FunctionsController::get_file($request, 'post_image');
		
		$saveData = array(
			'post_title' 		=> $request->post_title,
			'post_slug' 		=> $post_slug,
			'post_description' 	=> $request->post_description,
			'meta_description' 	=> $request->meta_description,
			'post_image' 		=> $photo,
			'tags' 		        => $request->tags,
		);

		$result = DB::table($table)->insert($saveData);
		if($result){
			return redirect($url)->with('success_msg', "Data has been saved.");
		}else{
			return redirect($url)->withInput()->with('error_msg', "Something worng!");
		}
		
    }
    
    
    
    //create
    public function edit($id)
    {
        $table = "posts";
        $get_data = DB::table($table)->where('id', $id)->first();
        return view('backend.post.edit', compact('get_data'));
    }
    
    //update
    public function update(Request $request, $id)
    {
        
        $table = "posts";
    	$url = URL::previous();

    	$validator = Validator::make($request->all(), [
		    'post_title' 		=> 'required|min:2|max:255',
		    'post_description' 	=> "required",
		    'meta_description' 	=> "required|min:20|max:155",
		    'post_image' 		=> "nullable|image|mimes:jpeg,png,jpg,gif|max:3000",
		]);
		

		if($validator->fails()){
		    return redirect($url)->withErrors($validator)->withInput();
		}
		
		//get data by existing slug
		$get_old = DB::table($table)->where("id", "!=", $id)->where("post_slug", str_slug($request->post_title))->first();

		if($get_old->post_slug){
			$post_slug = $get_old->post_slug."-".rand(111111,999999);
		}else{
			$post_slug = str_slug($request->post_title);
		}
		
		$get_img = DB::table($table)->where('id', $id)->first();

        //post_image 
      	if ($request->post_image) {
            //unlink old post_image
            if (file_exists($get_img->post_image) && !empty($get_img->post_image)) {
                unlink($get_img->post_image);
            }
            $photo = FunctionsController::get_file($request, 'post_image');
        }else{
            $photo = $get_img->post_image;
        }
		
		$saveData = array(
			'post_title' 		=> $request->post_title,
			'post_slug' 		=> $post_slug,
			'post_description' 	=> $request->post_description,
			'meta_description' 	=> $request->meta_description,
			'post_image' 		=> $photo,
			'tags' 		        => $request->tags,
			'updated_at' 		=> date("Y-m-d H:i:s"),
		);

		$result = DB::table($table)->where('id', $id)->update($saveData);
		if($result){
			return redirect($url)->with('success_msg', "Data has been Updated.");
		}else{
			return redirect($url)->withInput()->with('error_msg', "Something worng!");
		}
		
    }
    
    
    //remove
    public function remove($id){
    	$table = "posts";
    	$url = URL::previous();

    	//get old data
    	$get_old = DB::table($table)->where('id', $id)->first();

        $delete = DB::table($table)->where('id', $id)->delete();
        
		if ($delete) {
            //unlink file after delete
            if (file_exists($get_old->post_image) && !empty($get_old->post_image)) {
                unlink($get_old->post_image);
            }
	    	return redirect($url)->with('success_msg', "Data has been removed");
	    }else{
	    	return redirect($url)->with('error_msg', "Something worng!");
	    }

    }
    
    
}
