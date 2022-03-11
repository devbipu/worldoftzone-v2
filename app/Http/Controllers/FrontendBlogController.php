<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\JsonLd;
use DB;
error_reporting(0);

class FrontendBlogController extends Controller
{

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
        
        seoController::seo_blog();
        $get_data = self::the_query($request)->paginate(20);
        $get_total = self::the_query($request)->count();
        return view('frontend.blog', compact('get_data', 'get_total'));
    }
    
    //single
    public function single(Request $request, $id)
    {
        $table = "posts";
        $get_data = DB::table($table)->where('post_slug', $id)->first();
        
        
        //Start SEO
            SEOMeta::setTitle($get_data->post_title);
            SEOMeta::setDescription($get_data->meta_description);
            SEOMeta::addMeta('article:published_time', date('Y-m-d:H:i:s', strtotime($get_data->created_at)), 'property');
            SEOMeta::addKeyword(explode(',', $get_data->tags)); 

            OpenGraph::setTitle($get_data->post_title);
            OpenGraph::setDescription($get_data->meta_description);
            OpenGraph::setUrl(url('/')."/". $get_data->post_slug);
            OpenGraph::addProperty('type', 'article');
            OpenGraph::addProperty('locale', 'pt-br');
            OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
            OpenGraph::addImage($get_data->post_image);
            
            JsonLd::setTitle($get_data->post_title);
            JsonLd::setDescription($get_data->meta_description);
            JsonLd::setType('Article');
            JsonLd::addImage(url('/'.$get_data->post_image));
        //End SEO
        
        return view('frontend.single-blog', compact('get_data'));
    }
    
}