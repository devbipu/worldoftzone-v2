<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Portfolios extends Controller
{

    public static function the_portfolio(){
        $portfolio = array(
            
            //////////////////////////////////////////////////////////////////
                //Website
            //////////////////////////////////////////////////////////////////
            array(
                'id' => 'website',
                'category' => 'website-development',
                'name' => 'Aura Osiguranje',
                'photo' => 'auraosiguranje.svg',
                'class' => '',
                'url' => 'https://auraosiguranje.com/',
            ),
            array(
                'id' => 'website',
                'category' => 'website-development',
                'name' => 'Asbah World',
                'photo' => 'asbah-world.png',
                'class' => 'black',
                'url' => 'https://asbahworld.com/home/',
            ),
            array(
                'id' => 'website',
                'category' => 'website-development',
                'name' => 'Influence',
                'photo' => 'influence.png',
                'url' => 'https://www.influence.co.nz/',
            ),
            array(
                'id' => 'website',
                'category' => 'website-development',
                'name' => 'Ogonito',
                'photo' => 'ogonito.png',
                'url' => 'https://ogonito.com/',
            ),
            array(
                'id' => 'website',
                'category' => 'website-development',
                'name' => 'Time Sigma',
                'photo' => 'time-sigma.png',
                'url' => 'http://65.0.196.46/',
            ),
            array(
                'id' => 'website',
                'category' => 'website-development',
                'name' => 'Dental Laboratory',
                'photo' => 'amgdevsite.png',
                'class' => 'black',
                'url' => 'http://gcd.amgdevsite.com/',
            ),
            array(
                'id' => 'website',
                'category' => 'website-development',
                'name' => 'Grow Zello',
                'photo' => 'growzello.png',
                'class' => '',
                'url' => 'https://growzello.com/',
            ),
            
            
            // convert websites
            array(
                'id' => 'website',
                'category' => 'convert-website',
                'name' => 'Alvin Foo SEO',
                'photo' => 'alvinfooseo.png',
                'url' => 'https://alvinfooseo.com/',
            ),
            array(
                'id' => 'website',
                'category' => 'convert-website',
                'name' => 'My Pure Essential Oils',
                'photo' => 'mypureessentialoils.png',
                'url' => 'https://www.mypureessentialoils.com/',
            ),
            array(
                'id' => 'website',
                'category' => 'convert-website',
                'name' => 'Amio',
                'photo' => 'amio.png',
                'url' => 'https://amio.xyz/',
            ), 
            array(
                'id' => 'website',
                'category' => 'convert-website',
                'name' => 'Graval Group',
                'photo' => 'gravalgroup.png',
                'url' => 'https://gravalgroup.com/',
            ), 
            
            array(
                'id' => 'website',
                'category' => 'convert-website',
                'name' => 'D&S Dental',
                'photo' => 'dns-dental.png',
                'url' => 'https://dns.amgdevsite.com/',
            ), 
            
            
            //theme development customization
            array(
                'id' => 'website',
                'category' => 'theme-development-customization',
                'name' => 'Magicevery Where INC',
                'photo' => 'magiceverywhereinc.gif',
                'url' => 'https://magiceverywhereinc.com/',
            ),
            array(
                'id' => 'website',
                'category' => 'theme-development-customization',
                'name' => 'FX Made',
                'photo' => 'fxmade.png',
                'class' => 'black',
                'url' => 'https://fxmade.com/',
            ),
            array(
                'id' => 'website',
                'category' => 'theme-development-customization',
                'name' => 'Genesis Ventures',
                'photo' => 'genesis-ventures.png',
                'class' => 'black',
                'url' => 'https://demo-creativewebsitestudios.com/genesis-ventures/',
            ),
            array(
                'id' => 'website',
                'category' => 'theme-development-customization',
                'name' => 'Nano Forex Corp',
                'photo' => 'nanoforexcorp.png',
                'url' => 'https://www.nanoforexcorp.com/',
            ),
            array(
                'id' => 'website',
                'category' => 'theme-development-customization',
                'name' => 'Express Air Freight',
                'photo' => 'expressairfreight.png',
                'class' => 'black',
                'url' => 'https://expressairfreight.com/',
            ),
            array(
                'id' => 'website',
                'category' => 'theme-development-customization',
                'name' => 'Sensor Medica',
                'photo' => 'sensormedicausa.png',
                'class' => 'black',
                'url' => 'https://www.sensormedica.com/it/',
            ),
            array(
                'id' => 'website',
                'category' => 'theme-development-customization',
                'name' => 'Taamirorient',
                'photo' => 'taamirorient.png',
                'url' => 'https://taamirorient.com/',
            ),
            
            
            //fix website error
            array(
                'id' => 'website',
                'category' => 'fix-website-error',
                'name' => 'Isola Serena',
                'photo' => 'isolaserena.png',
                'class' => '',
                'url' => 'https://www.isolaserena.com/',
            ),
            array(
                'id' => 'website',
                'category' => 'fix-website-error',
                'name' => 'Max Clix',
                'photo' => 'maxclix.webp',
                'url' => 'https://www.maxclix.com/',
            ),
            array(
                'id' => 'website',
                'category' => 'fix-website-error',
                'name' => 'M Florist',
                'photo' => 'mflorist.png',
                'url' => 'https://mflorist.hk/',
            ),
            array(
                'id' => 'website',
                'category' => 'fix-website-error',
                'name' => 'HNO Medicinum',
                'photo' => 'medicinum.png',
                'url' => 'https://www.hno-medicinum.de/',
            ),
            array(
                'id' => 'website',
                'category' => 'fix-website-error',
                'name' => 'Blood Health Watch',
                'photo' => 'bloodhealthwatch.png',
                'class' => '',
                'url' => 'https://bloodhealthwatch.com/',
            ),
            array(
                'id' => 'website',
                'category' => 'fix-website-error',
                'name' => 'Eme FX',
                'photo' => 'emefx.png',
                'class' => '',
                'url' => 'https://emefx.com/',
            ),
            
            //////////////////////////////////////////////////////////////////
                //Virtual Assistant
            //////////////////////////////////////////////////////////////////
            /*array(
                'id' => 'virtual-assistant',
                'category' => 'data-entry-online-offline',
                'name' => 'Data Entry Online Offline',
                'photo' => 'portfolio1.jpg',
                'url' => '#',
            ), */
                
        );
        
        return $portfolio;
    }
    
}