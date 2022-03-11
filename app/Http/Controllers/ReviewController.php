<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use URL;
error_reporting(0);

class ReviewController extends Controller
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
		$client_name = $request->get('s', null);
    	$table = "reviews";
    	$query = DB::table($table);
    	$query = is_null($client_name) ? $query : $query->where('client_name', 'LIKE', "%$client_name%");
    	return $query->orderBy('created_at', 'desc');
    }

    //index
    public function index(Request $request)
    {
        $get_data = self::the_query($request)->paginate(20);
        $get_total = self::the_query($request)->count();
        return view('backend.reviews.index', compact('get_data', 'get_total'));
    }
    
    //create
    public function edit($id)
    {
        $table = "reviews";
        $get_data = DB::table($table)->where('id', $id)->first();
        return view('backend.reviews.edit', compact('get_data'));
    }
    
    //update
    public function update(Request $request, $id)
    {
        $table = "reviews";
    	$url = URL::previous();

    	$validator = Validator::make($request->all(), [
		    'client_name' 		=> 'required|min:2|max:255',
		    'review_description' 	=> "required",
		]);

		if($validator->fails()){
		    return redirect($url)->withErrors($validator)->withInput();
		}
		
		$saveData = array(
			'client_name' 		    => $request->client_name,
			'review_description' 	=> $request->review_description,
			'status' 	            => $request->status,
			'updated_at' 		    => date("Y-m-d H:i:s"),
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
    	$table = "reviews";
    	$url = URL::previous();
        $delete = DB::table($table)->where('id', $id)->delete();
        
		if ($delete) {
	    	return redirect($url)->with('success_msg', "Data has been removed");
	    }else{
	    	return redirect($url)->with('error_msg', "Something worng!");
	    }

    }
    
    
}
