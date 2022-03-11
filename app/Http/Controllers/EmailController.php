<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Validator;
// use URL;
// use Mail;
// error_reporting(0);
// class EmailController extends Controller
// {
    
//     public function send_info(Request $request){
        
//         $validator = Validator::make($request->all(), [
// 		    'recaptcha' => 'required|captcha',
// 		]);
// 		if($validator->fails()){
// 		    return "error";
// 		}
        
//         $name = $request->get('name');
//         $email = $request->get('email');
//         $country = $request->get('country');
//         $message = $request->get('message');
//         if($name == '' || $email == '' || $country == ''){
//             return "error";
//         }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
//             return "error";
//         }else{
            
//             $data = array(
//                 'name'=> $name,
//                 'email'=> $email,
//                 'country'=> $country,
//                 'message'=> $message,
//             );
            
//             Mail::send('frontend.mail.send-info', ['the_data' =>  $data], function($message) use ($data) {
//                  $message->to('info@worldsoftzone.com', 'Worldsoftzone')->subject('WSZ Customer Info');
//                  $message->from($data['email'], $data['name']);
//             });
            
//         }
        
        
//     }
    
    
//     public function send_support(Request $request){
//         $validator = Validator::make($request->all(), [
// 		    'recaptcha' => 'required|captcha',
// 		]);
// 		if($validator->fails()){
// 		    return "error";
// 		}
        
//         $service_name = $request->get('service_name');
//         $message = $request->get('message');
//         $name = $request->get('name');
//         $email = $request->get('email');
//         $contact = $request->get('contact');
        
//         if($service_name == '' || $name == '' || $email == ''){
//             return "error";
//         }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
//             return "error";
//         }else{
            
//             $data = array(
//                 'service_name'=> $service_name,
//                 'message'=> $message,
//                 'name'=> $name,
//                 'email'=> $email,
//                 'contact'=> $contact,
//             );
            
//             Mail::send('frontend.mail.send-support', ['the_data' =>  $data], function($message) use ($data) {
//                  $message->to('support@worldsoftzone.com', 'Worldsoftzone')->subject('WSZ Customer Support');
//                  $message->from($data['email'], $data['name']);
//             });
            
//         }
        
        
//     }
    
//     public function send_contact(Request $request){
//         $validator = Validator::make($request->all(), [
// 		    'recaptcha' => 'required|captcha',
// 		]);
// 		if($validator->fails()){
// 		    return "error";
// 		}
        
//         $name = $request->get('name');
//         $email = $request->get('email');
//         $subject = $request->get('subject');
//         $message = $request->get('message');
        
//         if($name == '' || $email == '' || $subject == '' || $message == ''){
//             return "error";
//         }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
//             return "error";
//         }else{
            
//             $data = array(
//                 'name'=> $name,
//                 'email'=> $email,
//                 'subject'=> $subject,
//                 'message'=> $message,
//             );
            
//             Mail::send('frontend.mail.send-contact', ['the_data' =>  $data], function($message) use ($data) {
//                  $message->to('contact@worldsoftzone.com', 'Worldsoftzone')->subject('WSZ Customer Contact');
//                  $message->from($data['email'], $data['name']);
//             });
            
//         }
        
        
//     }
    
    
//     public function send_basic_project(Request $request){
        
//         $validator = Validator::make($request->all(), [
// 		    'recaptcha' => 'required|captcha',
// 		]);
// 		if($validator->fails()){
// 		    return "error";
// 		}
        
//         $service_type = $request->get('service_type');
//         $name = $request->get('name');
//         $email = $request->get('email');
//         $project_name = $request->get('project_name');
//         $project_details = $request->get('project_details');
        
//         if($service_type == '' || $name == '' || $email == '' || $project_name == '' || $project_details == ''){
//             return "error";
//         }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
//             return "error";
//         }else{
            
//             $data = array(
//                 'service_type'=> $service_type,
//                 'name'=> $name,
//                 'email'=> $email,
//                 'project_name'=> $project_name,
//                 'project_details'=> $project_details,
//             );
            
//             Mail::send('frontend.mail.send-basic-project', ['the_data' =>  $data], function($message) use ($data) {
//                  $message->to('contact@worldsoftzone.com', 'Worldsoftzone')->subject('WSZ Project Contact');
//                  $message->from($data['email'], $data['name']);
//             });
            
//         }
        
        
//     }
    
    
//     public function send_adv_project(Request $request){
        
//         $validator = Validator::make($request->all(), [
// 		    'recaptcha' => 'required|captcha',
// 		]);
// 		if($validator->fails()){
// 		    return "error";
// 		}
		
//         $name = $request->get('name');
//         $email = $request->get('email');
//         $contact = $request->get('contact');
//         $country = $request->get('country');
//         $service_type = $request->get('service_type');
//         $project_name = $request->get('project_name');
//         $project_details = $request->get('project_details');
        
        
        
//         if(FunctionsController::get_service($service_type)){
//             $service_type = FunctionsController::get_service($service_type);
//         }else{
//             return "error";
//         }
        
//         if($name == '' || $email == '' || $country == '' || $service_type == '' || $project_name == ''){
//             return "error";
//         }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
//             return "error";
//         }else{
            
//             $data = array(
//                 'name'=> $name,
//                 'email'=> $email,
//                 'contact'=> $contact,
//                 'country'=> $country,
//                 'service_type'=> $service_type,
//                 'project_name'=> $project_name,
//                 'project_details'=> $project_details,
//             );
            
//             Mail::send('frontend.mail.send-adv-project', ['the_data' =>  $data], function($message) use ($data) {
//                  $message->to('contact@worldsoftzone.com', 'Worldsoftzone')->subject('WSZ Project Contact');
//                  $message->from($data['email'], $data['name']);
//             });
            
//         }
        
        
//     }
    
       
// }
