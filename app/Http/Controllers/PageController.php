<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use URL;
error_reporting(0);

class PageController extends Controller
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
    
    
    //index
    public function index(){
        $get_data = self::get_pages();
        return view('backend.page.index', compact('get_data'));
    }
    
    public static function get_pages(){
        $pages = [
                [
                   'name' => 'Home',
                   'url' => "/"
                ],
                [
                   'name' => 'About WorldSoftZone',
                   'url' => "/about"
                ],
                [
                   'name' => 'Why You Choose Us',
                   'url' => "/why-choose-us"
                ],
                [
                   'name' => 'Our Dedicated Team',
                   'url' => "/dedicated-team"
                ],
                [
                   'name' => 'Portfolio',
                   'url' => "/portfolio"
                ],
                [
                   'name' => 'Website',
                   'url' => "/web-services"
                ],
                [
                   'name' => 'Website Development',
                   'url' => "/web-services/website-development"
                ],
                [
                   'name' => 'Convert website',
                   'url' => "/web-services/convert-website"
                ],
                [
                   'name' => 'Theme Development & Customization',
                   'url' => "/web-services/theme-development-customization"
                ],
                [
                   'name' => 'Fix Website Error',
                   'url' => "/web-services/fix-website-error"
                ],
                [
                   'name' => 'Speed Optimization',
                   'url' => "/web-services/speed-optimization"
                ],
                [
                   'name' => 'Virtual Assistant',
                   'url' => "/virtual-assistant"
                ],
                [
                   'name' => 'Software',
                   'url' => "/software"
                ],
                [
                   'name' => 'Sales & Inventory System',
                   'url' => "/software/sales-inventory-system"
                ],
                [
                   'name' => 'Accounting ERP Solution',
                   'url' => "/software/accounting-erp-solution"
                ],
                [
                   'name' => 'Education Management System',
                   'url' => "/software/education-management-system"
                ],
                [
                   'name' => 'Health Management System',
                   'url' => "/software/health-management-system"
                ],
                [
                   'name' => 'Customize Software',
                   'url' => "/software/customize-software"
                ],
                [
                   'name' => 'Mobile App',
                   'url' => "/mobile-app"
                ],
                [
                   'name' => 'Android App Development',
                   'url' => "/mobile-app/android-app-development"
                ],
                [
                   'name' => 'IOS App Development',
                   'url' => "/mobile-app/ios-app-development"
                ],
                [
                   'name' => 'React Native',
                   'url' => "/mobile-app/react-native"
                ],
                [
                   'name' => 'Graphic Design',
                   'url' => "/graphic-deisgn"
                ],
                [
                   'name' => 'Motion Graphic',
                   'url' => "/graphic-deisgn/motion-graphic"
                ],
                [
                   'name' => 'UI UX Design',
                   'url' => "/graphic-deisgn/ui-ux-design"
                ],
                [
                   'name' => 'Branding Design',
                   'url' => "/graphic-deisgn/branding-design"
                ],
                [
                   'name' => 'Print Design',
                   'url' => "/graphic-deisgn/print-design"
                ],
                [
                   'name' => 'Publishing Design',
                   'url' => "/graphic-deisgn/publishing-design"
                ],
                [
                   'name' => 'Blog',
                   'url' => "/blog"
                ],
                [
                   'name' => 'Contact',
                   'url' => "/contact"
                ],
            ];
        return $pages;
    }
    
}






















