<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOMeta;

use URL;
error_reporting(0);

class seoController extends Controller
{
    
    public static function setSeo($data = array()){
        
        //'title' => true, 
        //'description' => false,
        //'canonical' => true,
        //'image' => true,
        
        //SEOMeta
        if($data['title']){ SEOMeta::setTitle($data['title']); }
        //if($data['description']){ SEOMeta::setDescription($data['description']); }
        if($data['canonical']){ SEOMeta::setCanonical($data['canonical']); }
        
        //OpenGraph
        if($data['title']){ OpenGraph::setTitle($data['title']); }
        //if($data['description']){ OpenGraph::setDescription($data['description']); }
        if($data['canonical']){ OpenGraph::setUrl($data['canonical']); }
        
        
        //JsonLd
        if($data['title']){ JsonLd::setTitle($data['title']); }
        //if($data['description']){ JsonLd::setDescription($data['description']); }
        if($data['image']){ JsonLd::addImage($data['image']); }
        
        
    }
    //seo_home
    public static function seo_home(){
        
        $title = "Home";
        $url = URL::current();
        $desc = "Website Design and Development, Software Development, Graphic Design agency with Quality and Commitment Service.";
        $img = URL::to('/') . "/assets/img/favicon.jpg";
        
        $data = ['title' => $title, 'description' => $desc, 'canonical' => $url, 'image' => $img];
        self::setSeo($data);
        
    }

//=================================================================================
        //About WSZ
//=================================================================================
    //seo_about
    public static function seo_about(){
        
        $title = "About";
        $url = URL::current();
        $desc= "WorldSoftZone is a reliable IT service partner, which works as a web development organization, and as a virtual assistant together";
        $img = URL::to('/') . "/assets/img/favicon.jpg";
        
        $data = ['title' => $title, 'description' => $desc, 'canonical' => $url, 'image' => $img];
        self::setSeo($data);
        
    }
    
    //seo_why_choose_us
    public static function seo_why_choose_us(){
        
        $title = "Why Choose Us";
        $url = URL::current();
        $desc= "We are focus on your project and want to satisfy you. We're not top company but wanted recognized as one of the top web design companies in the area.";
        $img = URL::to('/') . "/assets/img/favicon.jpg";
        
        $data = ['title' => $title, 'description' => $desc, 'canonical' => $url, 'image' => $img];
        self::setSeo($data);
    }
    
    //seo_dedicated_team
    public static function seo_dedicated_team(){
        $title = "Dedicated Team";
        $url = URL::current();
        //$desc= "";
        $img = URL::to('/') . "/assets/img/favicon.jpg";
        
        $data = ['title' => $title, 'description' => false, 'canonical' => $url, 'image' => $img];
        self::setSeo($data);
    }
    
    //seo_portfolio
    public static function seo_portfolio(){
        $title = "Client Portfolio";
        $url = URL::current();
        //$desc= "";
        $img = URL::to('/') . "/assets/img/favicon.jpg";
        
        $data = ['title' => $title, 'description' => false, 'canonical' => $url, 'image' => $img];
        self::setSeo($data);
    }
    
//=================================================================================
        //Web Services
//=================================================================================
    //seo_web_services
    public static function seo_web_services(){
        $title = "Web Services";
        $url = URL::current();
        $desc= "we believe on our service quality and commitment";
        $img = URL::to('/') . "/assets/img/favicon.jpg";
        
        $data = ['title' => $title, 'description' => $desc, 'canonical' => $url, 'image' => $img];
        self::setSeo($data);
    }
    //seo_website_development
    public static function seo_website_development(){
        $title = "Website Development";
        $url = URL::current();
        //$desc= "";
        $img = URL::to('/') . "/assets/img/favicon.jpg";
        
        $data = ['title' => $title, 'description' => false, 'canonical' => $url, 'image' => $img];
        self::setSeo($data);
    }
    //seo_convert_website
    public static function seo_convert_website(){
        $title = "Convert Website";
        $url = URL::current();
        //$desc= "";
        $img = URL::to('/') . "/assets/img/favicon.jpg";
        
        $data = ['title' => $title, 'description' => false, 'canonical' => $url, 'image' => $img];
        self::setSeo($data);
    }
    //seo_theme_development_customization
    public static function seo_theme_development_customization(){
        $title = "Theme Development And Customization";
        $url = URL::current();
        //$desc= "";
        $img = URL::to('/') . "/assets/img/favicon.jpg";
        
        $data = ['title' => $title, 'description' => false, 'canonical' => $url, 'image' => $img];
        self::setSeo($data);
    }
    //seo_fix_website_error
    public static function seo_fix_website_error(){
        $title = "Fixing Website Error";
        $url = URL::current();
        //$desc= "";
        $img = URL::to('/') . "/assets/img/favicon.jpg";
        
        $data = ['title' => $title, 'description' => false, 'canonical' => $url, 'image' => $img];
        self::setSeo($data);
    }
    //seo_speed_optimization
    public static function seo_speed_optimization(){
        $title = "Speed Optimization";
        $url = URL::current();
        //$desc= "";
        $img = URL::to('/') . "/assets/img/favicon.jpg";
        
        $data = ['title' => $title, 'description' => false, 'canonical' => $url, 'image' => $img];
        self::setSeo($data);
    }
    
    
//=================================================================================
        //Virtual Assistant
//=================================================================================
    //seo_virtual_assistant
    public static function seo_virtual_assistant(){
        $title = "Virtual Assistant";
        $url = URL::current();
        //$desc= "";
        $img = URL::to('/') . "/assets/img/favicon.jpg";
        
        $data = ['title' => $title, 'description' => false, 'canonical' => $url, 'image' => $img];
        self::setSeo($data);
    }
    
    
//=================================================================================
        //Software
//=================================================================================
    //seo_software
    public static function seo_software(){
        $title = "Software";
        $url = URL::current();
        $desc= "Use Software in Business Eliminate Human Error";
        $img = URL::to('/') . "/assets/img/favicon.jpg";
        
        $data = ['title' => $title, 'description' => $desc, 'canonical' => $url, 'image' => $img];
        self::setSeo($data);
    }
    //seo_sales_inventory_system
    public static function seo_sales_inventory_system(){
        $title = "Sales Inventory System";
        $url = URL::current();
        $desc= "Our Inventory Management System is an application software that records and processes Stock Management, accounting transactions within functional modules.";
        $img = URL::to('/') . "/assets/img/favicon.jpg";
        
        $data = ['title' => $title, 'description' => $desc, 'canonical' => $url, 'image' => $img];
        self::setSeo($data);
    }
    //seo_accounting_erp_solution
    public static function seo_accounting_erp_solution(){
        $title = "Accounting ERP Solution";
        $url = URL::current();
        $desc= "A successful ERP implementation requires solid accounting software functionality";
        $img = URL::to('/') . "/assets/img/favicon.jpg";
        
        $data = ['title' => $title, 'description' => $desc, 'canonical' => $url, 'image' => $img];
        self::setSeo($data);
    }
    //seo_education_management_system
    public static function seo_education_management_system(){
        $title = "Education Management System";
        $url = URL::current();
        $desc= "Education Management Systems, Inc. is an educational organization and management solution unique opportunities";
        $img = URL::to('/') . "/assets/img/favicon.jpg";
        
        $data = ['title' => $title, 'description' => $desc, 'canonical' => $url, 'image' => $img];
        self::setSeo($data);
    }
    //seo_health_management_system
    public static function seo_health_management_system(){
        $title = "Health Management System";
        $url = URL::current();
        $desc= "Qualified staff forms only one part of a successful health facility, while well-established management makes the other part.";
        $img = URL::to('/') . "/assets/img/favicon.jpg";
        
        $data = ['title' => $title, 'description' => $desc, 'canonical' => $url, 'image' => $img];
        self::setSeo($data);
    }
    //seo_customize_software
    public static function seo_customize_software(){
        $title = "Customize Software";
        $url = URL::current();
        $desc= "The working environment in the entire world is changing fast. The world is shifting from the traditional style of working environment to more sophisticated";
        $img = URL::to('/') . "/assets/img/favicon.jpg";
        
        $data = ['title' => $title, 'description' => $desc, 'canonical' => $url, 'image' => $img];
        self::setSeo($data);
    }
    
    
//=================================================================================
        //Mobile App
//=================================================================================
    //seo_mobile_app
    public static function seo_mobile_app(){
        $title = "Mobile App";
        $url = URL::current();
        $desc= "Create Mobile App Better Customer Connection";
        $img = URL::to('/') . "/assets/img/favicon.jpg";
        
        $data = ['title' => $title, 'description' => $desc, 'canonical' => $url, 'image' => $img];
        self::setSeo($data);
    }
    //seo_android_app_development
    public static function seo_android_app_development(){
        $title = "Android App Development";
        $url = URL::current();
        $desc= "User Registration System including social logins, Custom App according to client requirements, App submission to Playstore or, App of your business";
        $img = URL::to('/') . "/assets/img/favicon.jpg";
        
        $data = ['title' => $title, 'description' => $desc, 'canonical' => $url, 'image' => $img];
        self::setSeo($data);
    }
    //seo_ios_app_development
    public static function seo_ios_app_development(){
        $title = "ISO App Development";
        $url = URL::current();
        $desc= "User Registration System including social logins, Custom App according to client requirements, App submission to PlayStore, AppStore, App of your business";
        $img = URL::to('/') . "/assets/img/favicon.jpg";
        
        $data = ['title' => $title, 'description' => $desc, 'canonical' => $url, 'image' => $img];
        self::setSeo($data);
    }
    //seo_react_native_app_development
    public static function seo_react_native_app_development(){
        $title = "React Native";
        $url = URL::current();
        $desc= "User Registration System including social logins, Custom App according to client requirements, App submission to PlayStore, AppStore, App of your business";
        $img = URL::to('/') . "/assets/img/favicon.jpg";
        
        $data = ['title' => $title, 'description' => $desc, 'canonical' => $url, 'image' => $img];
        self::setSeo($data);
    }
    
    
    
    
//=================================================================================
        //Graphic Deisgn
//=================================================================================
    //seo_graphic_deisgn
    public static function seo_graphic_deisgn(){
        $title = "Graphic Deisgn";
        $url = URL::current();
        //$desc= "";
        $img = URL::to('/') . "/assets/img/favicon.jpg";
        
        $data = ['title' => $title, 'description' => false, 'canonical' => $url, 'image' => $img];
        self::setSeo($data);
    }
    //seo_motion_graphic
    public static function seo_motion_graphic(){
        $title = "Motion Graphic";
        $url = URL::current();
        $desc= "A healthy content strategy includes a mix of content, including articles, infographics, e-books, and more";
        $img = URL::to('/') . "/assets/img/favicon.jpg";
        
        $data = ['title' => $title, 'description' => $desc, 'canonical' => $url, 'image' => $img];
        self::setSeo($data);
    }
    //seo_ui_ux_design
    public static function seo_ui_ux_design(){
        $title = "UI UX Design";
        $url = URL::current();
        $desc= "Creating a user-friendly interface design requires a lot of moving parts, but some are more important than others";
        $img = URL::to('/') . "/assets/img/favicon.jpg";
        
        $data = ['title' => $title, 'description' => $desc, 'canonical' => $url, 'image' => $img];
        self::setSeo($data);
    }
    //seo_branding_design
    public static function seo_branding_design(){
        $title = "Branding Design";
        $url = URL::current();
        $desc= "Branding design helps your audience recognize your company, products, and content. Probably the most well-known advantage of branding is how it helps you";
        $img = URL::to('/') . "/assets/img/favicon.jpg";
        
        $data = ['title' => $title, 'description' => $desc, 'canonical' => $url, 'image' => $img];
        self::setSeo($data);
    }
    //seo_print_design
    public static function seo_print_design(){
        $title = "Print Design";
        $url = URL::current();
        $desc= "Along with a solid online presence, print marketing design can be essential to your business’ success";
        $img = URL::to('/') . "/assets/img/favicon.jpg";
        
        $data = ['title' => $title, 'description' => $desc, 'canonical' => $url, 'image' => $img];
        self::setSeo($data);
    }
    //seo_publishing_design
    public static function seo_publishing_design(){
        $title = "Publishing Design";
        $url = URL::current();
        $desc= "The price of hiring WSZ graphical team may put you off, but it is worth investing in a good one. Before dismissing any idea and marching off to design";
        $img = URL::to('/') . "/assets/img/favicon.jpg";
        
        $data = ['title' => $title, 'description' => $desc, 'canonical' => $url, 'image' => $img];
        self::setSeo($data);
    }
    
    
//=================================================================================
        //Contact
//=================================================================================
    //seo_contact
    public static function seo_contact(){
        $title = "Contact";
        $url = URL::current();
        $desc= "The price of hiring WSZ graphical team may put you off, but it is worth investing in a good one. Before dismissing any idea and marching off to design";
        $img = URL::to('/') . "/assets/img/favicon.jpg";
        
        $data = ['title' => $title, 'description' => $desc, 'canonical' => $url, 'image' => $img];
        self::setSeo($data);
    }
    
//=================================================================================
        //BLog
//=================================================================================
    //seo_blog
    public static function seo_blog(){
        $title = "Blog";
        $url = URL::current();
        $desc= "The price of hiring WSZ graphical team may put you off, but it is worth investing in a good one. Before dismissing any idea and marching off to design";
        $img = URL::to('/') . "/assets/img/favicon.jpg";
        
        $data = ['title' => $title, 'description' => $desc, 'canonical' => $url, 'image' => $img];
        self::setSeo($data);
    }
    
    
//=================================================================================
        //Reviews
//=================================================================================
    //seo_review
    public static function seo_review(){
        $title = "Reviews";
        $url = URL::current();
        $desc= "The price of hiring WSZ graphical team may put you off, but it is worth investing in a good one. Before dismissing any idea and marching off to design";
        $img = URL::to('/') . "/assets/img/favicon.jpg";
        
        $data = ['title' => $title, 'description' => $desc, 'canonical' => $url, 'image' => $img];
        self::setSeo($data);
    }
    
    
    
    

}