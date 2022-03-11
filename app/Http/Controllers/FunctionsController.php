<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use URL;
error_reporting(0);
class FunctionsController extends Controller
{
    
    public static function get_ipaddr(){
        //whether ip is from share internet
        if (!empty($_SERVER['HTTP_CLIENT_IP']))   
          {
            $ip_address = $_SERVER['HTTP_CLIENT_IP'];
          }
        //whether ip is from proxy
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
          {
            $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
          }
        //whether ip is from remote address
        else
          {
            $ip_address = $_SERVER['REMOTE_ADDR'];
          }
        return $ip_address;
    }
    
    //client comunicate emails
    public static function get_emails($email){
        $emails = array(
            'info' => 'info@worldsoftzone.com', 
            'support' => 'support@worldsoftzone.com', 
            'contact' => 'contact@worldsoftzone.com', 
        );
        
        return $emails[$email];
    }
    
    public static function get_a_quote($service_name = '', $new_tab = false){
        $home_path = URL::to('/');
        if($new_tab){
            $target = "_blank";
        }else{
            $target = "_self";
        }
        $url = "{$home_path}/quote?service={$service_name}";
        $button = '<a target="'.$target.'" class="btn btn-2" href="'.$url.'" rel="psd">
                            <span class="text">Get a Quote</span> 
                            <span class="icon"><img src="'.$home_path.'/assets/img/btn-next.png" alt="btn-next"></span>
                        </a>';
        return $button;
    }
    
    //the file update and get file name
	public static function get_file($request, $file_name){
    	if ($request->$file_name) {
	    	//uploaded path
	        $the_path = "uploads/".date('Y')."/".date('m');

	    	$get_file = $request->file($file_name);
	        $get_file_name = $get_file->getClientOriginalName();
	        $get_unique_file = rand(10, 99999).$get_file_name;
	 		$get_file->move($the_path, $get_unique_file);
	        $the_file = "$the_path/$get_unique_file";
	        return $the_file;
    	}else{
    		return '';
    	}

	}
    
    public static function get_service($single = false){
        $service = array(
            //website development
            'wordpress' => "WordPress",
            'shopify' => "Shopify",
            'wix' => "WIX",
            'squarespace' => "Squarespace",
            'laravel' => "Laravel",
            'codeigniter' => "Codeigniter",
            'yii2' => "YII2",
            'reactjs' => "ReactJS",
            
            //theme development & customization 
            'wordpress-them' => 'WordPress Theme Development & Customization',
            'squarespace-them' => 'Squarespace Theme Development & Customization',
            'shopify-them' => 'Shopify Theme Development & Customization',
            'wix-them' => 'WIX Theme Development & Customization',
            
            //error fix
            'fix-website-error' => 'Error Fixing',
            
            //convert websites
            'canva' => 'Canva to Website',
            'clone' => 'Clone to Website',
            'figma' => 'Figma to Website',
            'html' => 'HTML to Website',
            'pdf' => 'PDF to Website',
            'psd' => 'PSD to Website',
            'xd' => 'XD to Website',
            
            
            //speed optimization
            'search-optimization' => 'Search Optimization',
            'speed-optimization' => 'Speed Optimization',
            'page-optimization' => 'Page Optimization',
            'website-optimization' => 'Website Optimization',
            'ecommerce-optimization' => 'eCommerce Optimization',
            
            //virtual assistant
            'data-entry' => "Data Entry Online & Offline",
            'website-dev-maintenance' => "Website Dev And Maintenance",
            'digital-marketing' => "Digital Marketing",
            'seo' => "SEO (Search Engine Optimization)",
            
            //software
            'sales-inventory-system' => "Sales & Inventory System",
            'accounting-erp-solution' => "Accounting ERP Solution",
            'education-management-system' => "Education Management System",
            'health-management-system' => "Customize Software",
            
            //mobile App
            'android-app-development' => "Android App Development",
            'ios-app-development' => "iOS App",
            'react-native-development' => "React Native Development",
            
            
            //Graphic Design
            'branding-design' => "Branding Design",
            'motion-graphic' => "Motion Graphic",
            'print-design' => "Print Design",
            'publishing-design' => "Publishing Design",
            'ui-ux-design' => "UI-UX Design",
            
            
        );
        if($single){
            return $service[$single];
        }
        return $service;
    }
    
    
    //get_categories
    public static function get_categories(){
        return [
            
            'WEBSITE' => [
                    'Website Development',
                    'Convert Website',
                    'Theme Development & Customization',
                    'Fix Website Error',
                    'Speed Optimization',
                ],
        
            'VIRTUAL ASSISTANT' => [
                    'Data Entry Online Offline',
                    'Website Dev and Maintenance',
                    'Digital Marketing',
                    'SEO (Search Engine Optimization)',
                ],
                
            'SOFTWARE' => [
                    'Sales & Inventory System',
                    'Accounting ERP Solution',
                    'Education Management System',
                    'Health Management System',
                    'Customize Software',
                ],
                
            'MOBILE APP' => [
                    'Android App Development',
                    'IOS App Development',
                ],
                
            'GRAPHIC DESIGN' => [
                    'Motion Graphic',
                    'UI UX Design',
                    'Branding Design',
                    'Print Design',
                    'Publishing Design',
                ],
                
        ];
    }
    
    
    
    public static function country_list(){
            $array = array(
                 array(
                      "id"   => 1,
                      "name" => "Afghanistan",
                      "code" => 0,
                ),
                array(
                      "id"   => 2,
                      "name" => "Albania",
                      "code" => 0, 
                ),
                array(
                      "id"   => 3,
                      "name" => "American Samoa", 
                      "code" => 0,
                ),
                array(
                      "id"   => 4,
                      "name" => "Andorra", 
                      "code" => 0,
                ),
                array(
                      "id"   => 5,
                      "name" => "Angola", 
                      "code" => 0,
                ),
                array(
                      "id"   => 6,
                      "name" => "Anguilla", 
                      "code" => 0,
                ),
                array(
                      "id"   => 7,
                      "name" => "Antarctica", 
                      "code" => 0,
                ),
                array(
                      "id"   => 8,
                      "name" => "Antigua and Barbuda", 
                      "code" => 0,
                ),
                array(
                      "id"   => 9,
                      "name" => "Argentina", 
                      "code" => 0,
                ),
                array(
                      "id"   => 10,
                      "name" => "Armenia", 
                      "code" => 0,
                ),
                array(
                      "id"   => 11,
                      "name" => "Aruba", 
                      "code" => 0,
                ),
                array(
                      "id"   => 12,
                      "name" => "Australia", 
                      "code" => 0,
                ),
                array(
                      "id"   => 13,
                      "name" => "Austria", 
                      "code" => 0,
                ),
                array(
                      "id"   => 14,
                      "name" => "Azerbaijan", 
                      "code" => 0,
                ),
                array(
                      "id"   => 15,
                      "name" => "Bahamas", 
                      "code" => 0,
                ),
                array(
                      "id"   => 16,
                      "name" => "Bahrain", 
                      "code" => 0,
                ),
                array(
                      "id"   => 17,
                      "name" => "Bangladesh", 
                      "code" => 0,
                ),
                array(
                      "id"   => 18,
                      "name" => "Barbados", 
                      "code" => 0,
                ),
                array(
                      "id"   => 19,
                      "name" => "Belarus", 
                      "code" => 0,
                ),
                array(
                      "id"   => 20,
                      "name" => "Belgium", 
                      "code" => 0,
                ),
                array(
                      "id"   => 21,
                      "name" => "Belize", 
                      "code" => 0,
                ),
                array(
                      "id"   => 22,
                      "name" => "Benin", 
                      "code" => 0,
                ),
                array(
                      "id"   => 23,
                      "name" => "Bermuda", 
                      "code" => 0,
                ),
                array(
                      "id"   => 24,
                      "name" => "Bhutan", 
                      "code" => 0,
                ),
                array(
                      "id"   => 25,
                      "name" => "Bolivia", 
                      "code" => 0,
                ),
                array(
                      "id"   => 26,
                      "name" => "Bosnia and Herzegovina", 
                      "code" => 0,
                ),
                array(
                      "id"   => 27,
                      "name" => "Botswana", 
                      "code" => 0,
                ),
                array(
                      "id"   => 28,
                      "name" => "Bouvet Island", 
                      "code" => 0,
                ),
                array(
                      "id"   => 29,
                      "name" => "Brazil", 
                      "code" => 0,
                ),
                array(
                      "id"   => 30,
                      "name" => "British Indian Ocean Territory", 
                      "code" => 0,
                ),
                array(
                      "id"   => 31,
                      "name" => "Brunei Darussalam", 
                      "code" => 0,
                ),
                array(
                      "id"   => 32,
                      "name" => "Bulgaria", 
                      "code" => 0,
                ),
                array(
                      "id"   => 33,
                      "name" => "Burkina Faso", 
                      "code" => 0,
                ),
                array(
                      "id"   => 34,
                      "name" => "Burundi", 
                      "code" => 0,
                ),
                array(
                      "id"   => 35,
                      "name" => "Cambodia", 
                      "code" => 0,
                ),
                array(
                      "id"   => 36,
                      "name" => "Cameroon", 
                      "code" => 0,
                ),
                array(
                      "id"   => 37,
                      "name" => "Canada", 
                      "code" => 0,
                ),
                array(
                      "id"   => 38,
                      "name" => "Cape Verde", 
                      "code" => 0,
                ),
                array(
                      "id"   => 39,
                      "name" => "Cayman Islands", 
                      "code" => 0,
                ),
                array(
                      "id"   => 40,
                      "name" => "Central African Republic", 
                      "code" => 0,
                ),
                array(
                      "id"   => 41,
                      "name" => "Chad", 
                      "code" => 0,
                ),
                array(
                      "id"   => 42,
                      "name" => "Chile", 
                      "code" => 0,
                ),
                array(
                      "id"   => 43,
                      "name" => "China", 
                      "code" => 0,
                ),
                array(
                      "id"   => 44,
                      "name" => "Christmas Island", 
                      "code" => 0,
                ),
                array(
                      "id"   => 45,
                      "name" => "Cocos (Keeling) Islands", 
                      "code" => 0,
                ),
                array(
                      "id"   => 46,
                      "name" => "Colombia", 
                      "code" => 0,
                ),
                array(
                      "id"   => 47,
                      "name" => "Comoros", 
                      "code" => 0,
                ),
                array(
                      "id"   => 48,
                      "name" => "Congo", 
                      "code" => 0,
                ),
                array(
                      "id"   => 49,
                      "name" => "Congo, The Democratic Republic of The", 
                      "code" => 0,
                ),
                array(
                      "id"   => 50,
                      "name" => "Cook Islands", 
                      "code" => 0,
                ),
                array(
                      "id"   => 51,
                      "name" => "Costa Rica", 
                      "code" => 0,
                ),
                array(
                      "id"   => 52,
                      "name" => "Cote D'ivoire", 
                      "code" => 0,
                ),
                array(
                      "id"   => 53,
                      "name" => "Croatia", 
                      "code" => 0,
                ),
                array(
                      "id"   => 54,
                      "name" => "Cuba", 
                      "code" => 0,
                ),
                array(
                      "id"   => 55,
                      "name" => "Cyprus", 
                      "code" => 0,
                ),
                array(
                      "id"   => 56,
                      "name" => "Czech Republic", 
                      "code" => 0,
                ),
                array(
                      "id"   => 57,
                      "name" => "Denmark", 
                      "code" => 0,
                ),
                array(
                      "id"   => 58,
                      "name" => "Djibouti", 
                      "code" => 0,
                ),
                array(
                      "id"   => 59,
                      "name" => "Dominica", 
                      "code" => 0,
                ),
                array(
                      "id"   => 60,
                      "name" => "Dominican Republic", 
                      "code" => 0,
                ),
                array(
                      "id"   => 6,
                      "name" => "Ecuador", 
                      "code" => 0,
                ),
                array(
                      "id"   => 61,
                      "name" => "Egypt", 
                      "code" => 0,
                ),
                array(
                      "id"   => 62,
                      "name" => "El Salvador", 
                      "code" => 0,
                ),
                array(
                      "id"   => 63,
                      "name" => "Equatorial Guinea", 
                      "code" => 0,
                ),
                array(
                      "id"   => 64,
                      "name" => "Eritrea", 
                      "code" => 0,
                ),
                array(
                      "id"   => 65,
                      "name" => "Estonia", 
                      "code" => 0,
                ),
                array(
                      "id"   => 66,
                      "name" => "Ethiopia", 
                      "code" => 0,
                ),
                array(
                      "id"   => 67,
                      "name" => "Falkland Islands (Malvinas)", 
                      "code" => 0,
                ),
                array(
                      "id"   => 68,
                      "name" => "Faroe Islands", 
                      "code" => 0,
                ),
                array(
                      "id"   => 69,
                      "name" => "Fiji", 
                      "code" => 0,
                ),
                array(
                      "id"   => 70,
                      "name" => "Finland", 
                      "code" => 0,
                ),
                array(
                      "id"   => 71,
                      "name" => "France", 
                      "code" => 0,
                ),
                array(
                      "id"   => 72,
                      "name" => "French Guiana", 
                      "code" => 0,
                ),
                array(
                      "id"   => 73,
                      "name" => "French Polynesia", 
                      "code" => 0,
                ),
                array(
                      "id"   => 74,
                      "name" => "French Southern Territories", 
                      "code" => 0,
                ),
                array(
                      "id"   => 75,
                      "name" => "Gabon", 
                      "code" => 0,
                ),
                array(
                      "id"   => 76,
                      "name" => "Gambia", 
                      "code" => 0,
                ),
                array(
                      "id"   => 77,
                      "name" => "Georgia", 
                      "code" => 0,
                ),
                array(
                      "id"   => 78,
                      "name" => "Germany", 
                      "code" => 0,
                ),
                array(
                      "id"   => 79,
                      "name" => "Ghana", 
                      "code" => 0,
                ),
                array(
                      "id"   => 80,
                      "name" => "Gibraltar", 
                      "code" => 0,
                ),
                array(
                      "id"   => 81,
                      "name" => "Greece", 
                      "code" => 0,
                ),
                array(
                      "id"   => 82,
                      "name" => "Greenland", 
                      "code" => 0,
                ),
                array(
                      "id"   => 83,
                      "name" => "Grenada", 
                      "code" => 0,
                ),
                array(
                      "id"   => 84,
                      "name" => "Guadeloupe", 
                      "code" => 0,
                ),
                array(
                      "id"   => 85,
                      "name" => "Guam", 
                      "code" => 0,
                ),
                array(
                      "id"   => 86,
                      "name" => "Guatemala", 
                      "code" => 0,
                ),
                array(
                      "id"   => 87,
                      "name" => "Guinea", 
                      "code" => 0,
                ),
                array(
                      "id"   => 88,
                      "name" => "Guinea-bissau", 
                      "code" => 0,
                ),
                array(
                      "id"   => 89,
                      "name" => "Guyana", 
                      "code" => 0,
                ),
                array(
                      "id"   => 90,
                      "name" => "Haiti", 
                      "code" => 0,
                ),
                array(
                      "id"   => 91,
                      "name" => "Heard Island and Mcdonald Islands", 
                      "code" => 0,
                ),
                array(
                      "id"   => 92,
                      "name" => "Holy See (Vatican City State)", 
                      "code" => 0,
                ),
                array(
                      "id"   => 93,
                      "name" => "Honduras", 
                      "code" => 0,
                ),
                array(
                      "id"   => 94,
                      "name" => "Hong Kong", 
                      "code" => 0,
                ),
                array(
                      "id"   => 95,
                      "name" => "Hungary", 
                      "code" => 0,
                ),
                array(
                      "id"   => 96,
                      "name" => "Iceland", 
                      "code" => 0,
                ),
                array(
                      "id"   => 97,
                      "name" => "India", 
                      "code" => 0,
                ),
                array(
                      "id"   => 98,
                      "name" => "Indonesia", 
                      "code" => 0,
                ),
                array(
                      "id"   => 99,
                      "name" => "Iran, Islamic Republic of", 
                      "code" => 0,
                ),
                array(
                      "id"   => 100,
                      "name" => "Iraq", 
                      "code" => 0,
                ),
                array(
                      "id"   => 101,
                      "name" => "Ireland", 
                      "code" => 0,
                ),
                array(
                      "id"   => 102,
                      "name" => "Israel", 
                      "code" => 0,
                ),
                array(
                      "id"   => 103,
                      "name" => "Italy", 
                      "code" => 0,
                ),
                array(
                      "id"   => 104,
                      "name" => "Jamaica", 
                      "code" => 0,
                ),
                array(
                      "id"   => 105,
                      "name" => "Japan", 
                      "code" => 0,
                ),
                array(
                      "id"   => 106,
                      "name" => "Jordan", 
                      "code" => 0,
                ),
                array(
                      "id"   => 107,
                      "name" => "Kazakhstan", 
                      "code" => 0,
                ),
                array(
                      "id"   => 108,
                      "name" => "Kenya", 
                      "code" => 0,
                ),
                array(
                      "id"   => 109,
                      "name" => "Kiribati", 
                      "code" => 0,
                ),
                array(
                      "id"   => 110,
                      "name" => "Korea, Democratic People's Republic of", 
                      "code" => 0,
                ),
                array(
                      "id"   => 111,
                      "name" => "Korea, Republic of", 
                      "code" => 0,
                ),
                array(
                      "id"   => 112,
                      "name" => "Kuwait", 
                      "code" => 0,
                ),
                array(
                      "id"   => 113,
                      "name" => "Kyrgyzstan", 
                      "code" => 0,
                ),
                array(
                      "id"   => 114,
                      "name" => "Lao People's Democratic Republic", 
                      "code" => 0,
                ),
                array(
                      "id"   => 115,
                      "name" => "Latvia", 
                      "code" => 0,
                ),
                array(
                      "id"   => 116,
                      "name" => "Lebanon", 
                      "code" => 0,
                ),
                array(
                      "id"   => 117,
                      "name" => "Lesotho", 
                      "code" => 0,
                ),
                array(
                      "id"   => 118,
                      "name" => "Liberia", 
                      "code" => 0,
                ),
                array(
                      "id"   => 119,
                      "name" => "Libyan Arab Jamahiriya", 
                      "code" => 0,
                ),
                array(
                      "id"   => 120,
                      "name" => "Liechtenstein", 
                      "code" => 0,
                ),
                array(
                      "id"   => 121,
                      "name" => "Lithuania", 
                      "code" => 0,
                ),
                array(
                      "id"   => 122,
                      "name" => "Luxembourg", 
                      "code" => 0,
                ),
                array(
                      "id"   => 123,
                      "name" => "Macao", 
                      "code" => 0,
                ),
                array(
                      "id"   => 124,
                      "name" => "Macedonia, The Former Yugoslav Republic of", 
                      "code" => 0,
                ),
                array(
                      "id"   => 125,
                      "name" => "Madagascar", 
                      "code" => 0,
                ),
                array(
                      "id"   => 126,
                      "name" => "Malawi", 
                      "code" => 0,
                ),
                array(
                      "id"   => 127,
                      "name" => "Malaysia", 
                      "code" => 0,
                ),
                array(
                      "id"   => 128,
                      "name" => "Maldives", 
                      "code" => 0,
                ),
                array(
                      "id"   => 129,
                      "name" => "Mali", 
                      "code" => 0,
                ),
                array(
                      "id"   => 130,
                      "name" => "Malta", 
                      "code" => 0,
                ),
                array(
                      "id"   => 131,
                      "name" => "Marshall Islands", 
                      "code" => 0,
                ),
                array(
                      "id"   => 132,
                      "name" => "Martinique", 
                      "code" => 0,
                ),
                array(
                      "id"   => 133,
                      "name" => "Mauritania", 
                      "code" => 0,
                ),
                array(
                      "id"   => 134,
                      "name" => "Mauritius", 
                      "code" => 0,
                ),
                array(
                      "id"   => 135,
                      "name" => "Mayotte", 
                      "code" => 0,
                ),
                array(
                      "id"   => 136,
                      "name" => "Mexico", 
                      "code" => 0,
                ),
                array(
                      "id"   => 137,
                      "name" => "Micronesia, Federated States of", 
                      "code" => 0,
                ),
                array(
                      "id"   => 138,
                      "name" => "Moldova, Republic of", 
                      "code" => 0,
                ),
                array(
                      "id"   => 139,
                      "name" => "Monaco", 
                      "code" => 0,
                ),
                array(
                      "id"   => 140,
                      "name" => "Mongolia", 
                      "code" => 0,
                ),
                array(
                      "id"   => 141,
                      "name" => "Montserrat", 
                      "code" => 0,
                ),
                array(
                      "id"   => 142,
                      "name" => "Morocco", 
                      "code" => 0,
                ),
                array(
                      "id"   => 143,
                      "name" => "Mozambique", 
                      "code" => 0,
                ),
                array(
                      "id"   => 144,
                      "name" => "Myanmar", 
                      "code" => 0,
                ),
                array(
                      "id"   => 145,
                      "name" => "Namibia", 
                      "code" => 0,
                ),
                array(
                      "id"   => 146,
                      "name" => "Nauru", 
                      "code" => 0,
                ),
                array(
                      "id"   => 147,
                      "name" => "Nepal", 
                      "code" => 0,
                ),
                array(
                      "id"   => 148,
                      "name" => "Netherlands", 
                      "code" => 0,
                ),
                array(
                      "id"   => 149,
                      "name" => "Netherlands Antilles", 
                      "code" => 0,
                ),
                array(
                      "id"   => 150,
                      "name" => "New Caledonia", 
                      "code" => 0,
                ),
                array(
                      "id"   => 151,
                      "name" => "New Zealand", 
                      "code" => 0,
                ),
                array(
                      "id"   => 152,
                      "name" => "Nicaragua", 
                      "code" => 0,
                ),
                array(
                      "id"   => 153,
                      "name" => "Niger", 
                      "code" => 0,
                ),
                array(
                      "id"   => 154,
                      "name" => "Nigeria", 
                      "code" => 0,
                ),
                array(
                      "id"   => 155,
                      "name" => "Niue", 
                      "code" => 0,
                ),
                array(
                      "id"   => 156,
                      "name" => "Norfolk Island", 
                      "code" => 0,
                ),
                array(
                      "id"   => 157,
                      "name" => "Northern Mariana Islands", 
                      "code" => 0,
                ),
                array(
                      "id"   => 158,
                      "name" => "Norway", 
                      "code" => 0,
                ),
                array(
                      "id"   => 159,
                      "name" => "Oman", 
                      "code" => 0,
                ),
                array(
                      "id"   => 160,
                      "name" => "Pakistan", 
                      "code" => 0,
                ),
                array(
                      "id"   => 161,
                      "name" => "Palestinian Territory, Occupied", 
                      "code" => 0,
                ),
                array(
                      "id"   => 162,
                      "name" => "Panama", 
                      "code" => 0,
                ),
                array(
                      "id"   => 163,
                      "name" => "Papua New Guinea", 
                      "code" => 0,
                ),
                array(
                      "id"   => 164,
                      "name" => "Paraguay", 
                      "code" => 0,
                ),
                array(
                      "id"   => 165,
                      "name" => "Peru", 
                      "code" => 0,
                ),
                array(
                      "id"   => 166,
                      "name" => "Philippines", 
                      "code" => 0,
                ),
                array(
                      "id"   => 167,
                      "name" => "Pitcairn",
                      "code" => 0,
                ),
                array(
                      "id"   => 168,
                      "name" => "Poland",
                      "code" => 0,
                ),
                array(
                      "id"   => 169,
                      "name" => "Portugal",
                      "code" => 0,
                ),
                array(
                      "id"   => 170,
                      "name" => "Puerto Rico",
                      "code" => 0,
                ),
                array(
                      "id"   => 171,
                      "name" => "Qatar",
                      "code" => 0,
                ),
                array(
                      "id"   => 172,
                      "name" => "Reunion",
                      "code" => 0,
                ),
                array(
                      "id"   => 173,
                      "name" => "Romania",
                      "code" => 0,
                ),
                array(
                      "id"   => 174,
                      "name" => "Russian Federation", 
                      "code" => 0,
                ),
                array(
                      "id"   => 175,
                      "name" => "Rwanda", 
                      "code" => 0,
                ),
                array(
                      "id"   => 176,
                      "name" => "Saint Helena", 
                      "code" => 0,
                ),
                array(
                      "id"   => 177,
                      "name" => "Saint Kitts and Nevis", 
                      "code" => 0,
                ),
                array(
                      "id"   => 178,
                      "name" => "Saint Lucia", 
                      "code" => 0,
                ),
                array(
                      "id"   => 179,
                      "name" => "Saint Pierre and Miquelon", 
                      "code" => 0,
                ),
                array(
                      "id"   => 180,
                      "name" => "Saint Vincent and The Grenadines", 
                      "code" => 0,
                ),
                array(
                      "id"   => 181,
                      "name" => "Samoa", 
                      "code" => 0,
                ),
                array(
                      "id"   => 182,
                      "name" => "San Marino",
                      "code" => 0,
                ),
                array(
                      "id"   => 183,
                      "name" => "Sao Tome and Principe",
                      "code" => 0,
                ),
                array(
                      "id"   => 184,
                      "name" => "Saudi Arabia",
                      "code" => 0,
                ),
                array(
                      "id"   => 185,
                      "name" => "Senegal",
                      "code" => 0,
                ),
                array(
                      "id"   => 186,
                      "name" => "Serbia and Montenegro",
                      "code" => 0,
                ),
                array(
                      "id"   => 187,
                      "name" => "Seychelles",
                      "code" => 0,
                ),
                array(
                      "id"   => 188,
                      "name" => "Sierra Leone",
                      "code" => 0,
                ),
                array(
                      "id"   => 189,
                      "name" => "Singapore",
                      "code" => 0,
                ),
                array(
                      "id"   => 190,
                      "name" => "Slovakia",
                      "code" => 0,
                ),
                array(
                      "id"   => 191,
                      "name" => "Slovenia",
                      "code" => 0,
                ),
                array(
                      "id"   => 192,
                      "name" => "Solomon Islands",
                      "code" => 0,
                ),
                array(
                      "id"   => 193,
                      "name" => "Somalia",
                      "code" => 0,
                ),
                array(
                      "id"   => 194,
                      "name" => "South Africa",
                      "code" => 0,
                ),
                array(
                      "id"   => 195,
                      "name" => "South Georgia and The South Sandwich Islands",
                      "code" => 0,
                ),
                array(
                      "id"   => 196,
                      "name" => "Spain",
                      "code" => 0,
                ),
                array(
                      "id"   => 197,
                      "name" => "Sri Lanka",
                      "code" => 0,
                ),
                array(
                      "id"   => 198,
                      "name" => "Sudan",
                      "code" => 0,
                ),
                array(
                      "id"   => 199,
                      "name" => "Suriname",
                      "code" => 0,
                ),
                array(
                      "id"   => 200,
                      "name" => "Svalbard and Jan Mayen",
                      "code" => 0,
                ),
                array(
                      "id"   => 201,
                      "name" => "Swaziland",
                      "code" => 0,
                ),
                array(
                      "id"   => 202,
                      "name" => "Sweden",
                      "code" => 0,
                ),
                array(
                      "id"   => 203,
                      "name" => "Switzerland",
                      "code" => 0,
                ),
                array(
                      "id"   => 204,
                      "name" => "Syrian Arab Republic",
                      "code" => 0,
                ),
                array(
                      "id"   => 205,
                      "name" => "Taiwan, Province of China",
                      "code" => 0,
                ),
                array(
                      "id"   => 206,
                      "name" => "Tajikistan",
                      "code" => 0,
                ),
                array(
                      "id"   => 207,
                      "name" => "Tanzania, United Republic of",
                      "code" => 0,
                ),
                array(
                      "id"   => 208,
                      "name" => "Thailand",
                      "code" => 0,
                ),
                array(
                      "id"   => 209,
                      "name" => "Timor-leste",
                      "code" => 0,
                ),
                array(
                      "id"   => 210,
                      "name" => "Togo",
                      "code" => 0,
                ),
                array(
                      "id"   => 211,
                      "name" => "Tokelau",
                      "code" => 0,
                ),
                array(
                      "id"   => 212,
                      "name" => "Tonga",
                      "code" => 0,
                ),
                array(
                      "id"   => 213,
                      "name" => "Trinidad and Tobago",
                      "code" => 0,
                ),
                array(
                      "id"   => 214,
                      "name" => "Tunisia",
                      "code" => 0,
                ),
                array(
                      "id"   => 215,
                      "name" => "Turkey",
                      "code" => 0,
                ),
                array(
                      "id"   => 216,
                      "name" => "Turkmenistan",
                      "code" => 0,
                ),
                array(
                      "id"   => 217,
                      "name" => "Turks and Caicos Islands",
                      "code" => 0,
                ),
                array(
                      "id"   => 218,
                      "name" => "Tuvalu",
                      "code" => 0,
                ),
                array(
                      "id"   => 219,
                      "name" => "Uganda",
                      "code" => 0,
                ),
                array(
                      "id"   => 220,
                      "name" => "Ukraine",
                      "code" => 0,
                ),
                array(
                      "id"   => 221,
                      "name" => "United Arab Emirates",
                      "code" => 0,
                ),
                array(
                      "id"   => 222,
                      "name" => "United Kingdom",
                      "code" => 0,
                ),
                array(
                      "id"   => 223,
                      "name" => "United States",
                      "code" => 0,
                ),
                array(
                      "id"   => 224,
                      "name" => "United States Minor Outlying Islands",
                      "code" => 0,
                ),
                array(
                      "id"   => 225,
                      "name" => "Uruguay",
                      "code" => 0,
                ),
                array(
                      "id"   => 226,
                      "name" => "Uzbekistan",
                      "code" => 0,
                ),
                array(
                      "id"   => 227,
                      "name" => "Vanuatu",
                      "code" => 0,
                ),
                array(
                      "id"   => 228,
                      "name" => "Venezuela",
                      "code" => 0,
                ),
                array(
                      "id"   => 229,
                      "name" => "Viet Nam",
                      "code" => 0,
                ),
                array(
                      "id"   => 230,
                      "name" => "Virgin Islands, British",
                      "code" => 0,
                ),
                array(
                      "id"   => 231,
                      "name" => "Virgin Islands, U.S",
                      "code" => 0,
                ),
                array(
                      "id"   => 232,
                      "name" => "Wallis and Futuna",
                      "code" => 0,
                ),
                array(
                      "id"   => 233,
                      "name" => "Western Sahara",
                      "code" => 0,
                ),
                array(
                      "id"   => 234,
                      "name" => "Yemen",
                      "code" => 0,
                ),
                array(
                      "id"   => 235,
                      "name" => "Zambia",
                      "code" => 0,
                ),
    
                array(
                      "id"   => 236,
                      "name" => "Zimbabwe",
                      "code" => 0,
                )
          );
        return $array;
    }
        
        
        
        
}
