<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\JsonLd;
use Illuminate\Support\Facades\Validator;
use DB;
error_reporting(0);

class FrontendReviewController extends Controller
{

    public static function the_query($request){
		$_title = $request->get('s', null);
    	$table = "posts";
    	$query = DB::table($table);
    	$query = is_null($post_title) ? $query : $query->where('post_title', 'LIKE', "%$post_title%");
    	return $query->orderBy('created_at', 'desc');
    }

    //index
    public function index(Request $request)
    {
        seoController::seo_review();
        
        $table = "reviews";
        $get_data = DB::table($table)->where('status', 1)->paginate(20);
        return view('frontend.reviews', compact('get_data'));
        
    }
    
    
    //send_review
    public function send_review(Request $request){
        
        $validator = Validator::make($request->all(), [
		    'recaptcha' => 'required|captcha',
		]);
		

		if($validator->fails()){
		    return "error";
		}
		
        $clientIP = FunctionsController::get_ipaddr();
        
        $table = "reviews";
        $name = $request->get('name');
        $rate = $request->get('rate');
        $review = $request->get('review');
        if($name == '' || $rate == '' || $review == ''){
            return "error";
        }else{
            
            $data = array(
                'client_name'=> $name,
                'rate'=> $rate,
                'review_description'=> $review,
                'ip_addr'=> $clientIP,
            );
            
            $result = DB::table($table)->insert($data);
            if($result){
                echo "success";
            }else{
                echo "error";
            }
        }
        
    }
    
    
}