<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use URL;
class FrontendController extends Controller
{


    //menu
    public function menu(){
    	return view('menu');
    }

    //home
    public function home(){
        
        seoController::seo_home();
        
    	return view('frontend.home');
    }
    //about
    public function about(){
        
        seoController::seo_about();
        
    	return view('frontend.about');
    }
    //why_choose_us
    public function why_choose_us(){
        
        seoController::seo_why_choose_us();
        
    	return view('frontend.why-choose-us');
    }
    //dedicated_team
    public function dedicated_team(){
        
        seoController::seo_dedicated_team();
        
        $get_team = Teams::the_team();
    	return view('frontend.dedicated-team', compact('get_team'));
    }
    //portfolio
    public function portfolio(){
        
        seoController::seo_portfolio();
        
        $get_portfolio = Portfolios::the_portfolio();
    	return view('frontend.portfolio', compact('get_portfolio'));
    }


    //web_services
    public function web_services(){
        
        seoController::seo_web_services();
        
    	return view('frontend.web-services.all');
    }
    //website_development
    public function website_development(){
        
        seoController::seo_website_development();
        
    	return view('frontend.web-services.website-development');
    }
    //convert_website
    public function convert_website(){
        
        seoController::seo_convert_website();
        
    	return view('frontend.web-services.convert-website');
    }
    //theme_development_customization
    public function theme_development_customization(){
        
        seoController::seo_theme_development_customization();
        
    	return view('frontend.web-services.theme-development-customization');
    }
    //fix_website_error
    public function fix_website_error(){
        
        seoController::seo_fix_website_error();
        
    	return view('frontend.web-services.fix-website-error');
    }
    //speed_optimization
    public function speed_optimization(){
        
        seoController::seo_speed_optimization();
        
    	return view('frontend.web-services.speed-optimization');
    }
    
    //get_website_development_details with ajax
    public function get_website_development_details($id){
        if($id){
            return view('frontend.web-services.web-development.' . $id);
        }
    }
    //get_convert_website_details with ajax
    public function get_convert_website_details($id){
        if($id){
            return view('frontend.web-services.convert-website.' . $id);
        }
    }
    

    //virtual_assistant
    public function virtual_assistant(){
        
        seoController::seo_virtual_assistant();
        
    	return view('frontend.virtual-assistant.all');
    }
    //this functions off because the page one page
    /*//data_entry_online_offline
    public function data_entry_online_offline(){
    	return view('frontend.virtual-assistant.data-entry-online-offline');
    }
    //website_dev_and_maintenance
    public function website_dev_and_maintenance(){
    	return view('frontend.virtual-assistant.website-dev-and-maintenance');
    }
    //digital_marketing
    public function digital_marketing(){
    	return view('frontend.virtual-assistant.digital-marketing');
    }
    //seo
    public function seo(){
    	return view('frontend.virtual-assistant.seo');
    }*/



    //software
    public function software(){
        
        seoController::seo_software();
        
    	return view('frontend.software.all');
    }
    //sales_inventory_system
    public function sales_inventory_system(){
        
        seoController::seo_sales_inventory_system();
        
    	return view('frontend.software.sales-inventory-system');
    }
    //accounting_erp_solution
    public function accounting_erp_solution(){
        
        seoController::seo_accounting_erp_solution();
        
    	return view('frontend.software.accounting-erp-solution');
    }
    //education_management_system
    public function education_management_system(){
        
        seoController::seo_education_management_system();
        
    	return view('frontend.software.education-management-system');
    }
    //health_management_system
    public function health_management_system(){
        
        seoController::seo_health_management_system();
        
    	return view('frontend.software.health-management-system');
    }
    //customize_software
    public function customize_software(){
        
        seoController::seo_customize_software();
        
    	return view('frontend.software.customize-software');
    }


    //mobile_app
    public function mobile_app(){
        
        seoController::seo_mobile_app();
        
    	return view('frontend.mobile-app.all');
    }
    //android_app_development
    public function android_app_development(){
        
        seoController::seo_android_app_development();
        
    	return view('frontend.mobile-app.android-app-development');
    }
    //ios_app_development
    public function ios_app_development(){
        
        seoController::seo_ios_app_development();
        
    	return view('frontend.mobile-app.ios-app-development');
    }
    //react_native_app_development
    public function react_native_app_development(){
        
        seoController::seo_react_native_app_development();
        
    	return view('frontend.mobile-app.react-native');
    }



    //graphic_deisgn
    public function graphic_deisgn(){
        
        seoController::seo_graphic_deisgn();
        
    	return view('frontend.graphic-deisgn.all');
    }
    //motion_graphic
    public function motion_graphic(){
        
        seoController::seo_motion_graphic();
        
    	return view('frontend.graphic-deisgn.motion-graphic');
    }
    //ui_ux_design
    public function ui_ux_design(){
        
        seoController::seo_ui_ux_design();
        
    	return view('frontend.graphic-deisgn.ui-ux-design');
    }
    //branding_design
    public function branding_design(){
        
        seoController::seo_branding_design();
        
    	return view('frontend.graphic-deisgn.branding-design');
    }
    //print_design
    public function print_design(){
        
        seoController::seo_print_design();
        
    	return view('frontend.graphic-deisgn.print-design');
    }
    //publishing_design
    public function publishing_design(){
        
        seoController::seo_publishing_design();
        
    	return view('frontend.graphic-deisgn.publishing-design');
    }



    //contact
    public function contact(){
        
        seoController::seo_contact();
        
    	return view('frontend.contact');
    }

    public function contact_details($id){
    	if($id){
            return view('frontend.inc.contact.' . $id);
        }
    }

    public static function get_a_quote($url = 'javascript:void(0)', $new_tab = false){
        $home_path = URL::to('/');
        if($new_tab){
            $target = "_blank";
        }else{
            $target = "_self";
        }
        $button = '<a target="'.$target.'" class="btn btn-2" href="'.$url.'" rel="psd">
                            <span class="text">Get a Quote</span> 
                            <span class="icon"><img src="'.$home_path.'/assets/img/btn-next.png" alt="btn-next"></span>
                        </a>';
        return $button;
    }


}
