<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Teams extends Controller
{
    
    //Developer
    //Graphic Designer
    //Degital Marketing
    //Administrative
    //Accounts & Finance
    //Support

    public static function the_team(){
        $team = array(
            
            //////////////////////////////////////////////////////////////////
                //Developer
            //////////////////////////////////////////////////////////////////
            array(
                'id' => 'developer',
                'name' => 'Naimur Rahman',
                'designation' => 'Team Leader',
                'photo' => 'naim.jpg',
                'url' => 'javascript:void(0)',
                'order' => 2,
            ),
            array(
                'id' => 'developer',
                'name' => 'Biplob Shaha',
                'designation' => 'Senior Developer',
                'photo' => 'biplob.jpg',
                'url' => 'javascript:void(0)',
                'order' => 3,
            ),
            array(
                'id' => 'developer',
                'name' => 'Mohammad Sujon',
                'designation' => 'Senior Developer',
                'photo' => 'sujon.jpg',
                'url' => 'javascript:void(0)',
                'order' => 4,
            ),
            array(
                'id' => 'developer',
                'name' => 'Minhaj Uddin',
                'designation' => 'Senior Developer',
                'photo' => 'minhaj.png',
                'url' => 'javascript:void(0)',
                'order' => 5,
            ),
            array(
                'id' => 'developer',
                'name' => 'Mahbubur Rahman Ripon',
                'designation' => 'Developer',
                'photo' => 'ripon.png',
                'url' => 'javascript:void(0)',
                'order' => 6,
            ),
            array(
                'id' => 'developer',
                'name' => 'Shafee',
                'designation' => 'Junior Developer',
                'photo' => 'shafee.png',
                'url' => 'javascript:void(0)',
                'order' => 7,
            ),
            
            //////////////////////////////////////////////////////////////////
                //Graphic Designer
            //////////////////////////////////////////////////////////////////
            array(
                'id' => 'graphic-designer',
                'name' => 'Amit Shadukha',
                'designation' => 'Graphic Designer',
                'photo' => 'amit.jpg',
                'url' => 'javascript:void(0)',
                'order' => 8,
            ),
            
            //////////////////////////////////////////////////////////////////
                //Degital Marketing
            //////////////////////////////////////////////////////////////////
            /*array(
                'id' => 'degital-marketing',
                'name' => 'Ripon',
                'designation' => 'Developer & Degital Marketing',
                'photo' => 'ripon.png',
                'url' => 'javascript:void(0)',
                'order' => 6,
                'class' => 'hide_on_home',
            ),*/
            
            //////////////////////////////////////////////////////////////////
                //Administrative
            //////////////////////////////////////////////////////////////////
            array(
                'id' => 'administrative',
                'name' => 'Suvo',
                'designation' => 'Administrative Officer',
                'photo' => 'suvo.jpg',
                'url' => 'javascript:void(0)',
                'order' => 9,
            ),
            
            //////////////////////////////////////////////////////////////////
                //Accounts & Finance
            //////////////////////////////////////////////////////////////////
            array(
                'id' => 'accounts-finance',
                'name' => 'Md. Asaduzzaman',
                'designation' => 'CEO',
                'photo' => 'asad.jpg',
                'url' => 'javascript:void(0)',
                'order' => 1,
            ),
            
            
            
            //////////////////////////////////////////////////////////////////
                //Product Designer 
            //////////////////////////////////////////////////////////////////
            
            array(
                'id' => 'product-designer',
                'name' => 'Dayo Samuel',
                'designation' => 'Product Designer and Virtual Assistant',
                'photo' => 'Dayo Samuel.jpeg',
                'url' => 'javascript:void(0)',
                'order' => 3.1,
            ),
            
            
            //////////////////////////////////////////////////////////////////
                //Support
            //////////////////////////////////////////////////////////////////
            /*array(
                'id' => 'support',
                'name' => 'Developer & Biplob',
                'designation' => 'Developer & Support',
                'photo' => 'biplob.jpg',
                'url' => 'javascript:void(0)',
                'order' => 3,
                'class' => 'hide_on_home',
            ),*/
                
        );
        
        return $team;
    }
    
}