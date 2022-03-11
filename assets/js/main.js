 (function(){
     const menu = document.querySelector(".menu");
 const preventAncor = document.querySelectorAll(".menu-item-has-children a");
 const menuMain = menu.querySelector(".menu-main");
 const goBack = menu.querySelector(".go-back");
 const menuTrigger = document.querySelector(".mobile-menu-trigger");
 const closeMenu = menu.querySelector(".mobile-menu-close");
 let subMenu;
 

 menuMain.addEventListener("click", (e) =>{
 	if(!menu.classList.contains("active")){
 		return;
 	}
   if(e.target.closest(".menu-item-has-children")){
   	 const hasChildren = e.target.closest(".menu-item-has-children");
      showSubMenu(hasChildren);
   }
 });
 goBack.addEventListener("click",() =>{
 	 hideSubMenu();
 })
 menuTrigger.addEventListener("click",() =>{
 	 toggleMenu();
 })
 closeMenu.addEventListener("click",() =>{
 	 toggleMenu();
 })
 document.querySelector(".menu-overlay").addEventListener("click",() =>{
 	toggleMenu();
 })
 function toggleMenu(){
 	menu.classList.toggle("active");
 	const result = document.querySelector("nav")
 	
 	document.querySelector(".menu-overlay").classList.toggle("active");
 	//disable body scroling
 	document.querySelector("body").classList.toggle("disable");
 	
 }
 function showSubMenu(hasChildren){
    subMenu = hasChildren.querySelector(".sub-menu");
    subMenu.classList.add("active");
    subMenu.style.animation = "slideLeft 0.5s ease forwards";
    const menuTitle = hasChildren.querySelector("i").parentNode.childNodes[0].textContent;
    menu.querySelector(".current-menu-title").innerHTML=menuTitle;
    menu.querySelector(".mobile-menu-head").classList.add("active");
    menu.querySelector(".menu-main").classList.add("active");
 }

 function  hideSubMenu(){  
    setTimeout(() =>{
        subMenu.style.animation = "slideRight 0.5s ease forwards";
        subMenu.classList.remove("active");	
    },300); 
    menu.querySelector(".current-menu-title").innerHTML="";
    menu.querySelector(".mobile-menu-head").classList.remove("active");
    menu.querySelector(".menu-main").classList.remove("active");
 }
 
 window.onresize = function(){
 	if(this.innerWidth >991){
 		if(menu.classList.contains("active")){
 			toggleMenu();
 		}

 	}
 }
 
 })()
 
 const headerLogo = document.querySelector(".home .logo img");
 
 window.onscroll = function() {myFunction()};
    var header = document.getElementById("amar_menu");
    var sticky = header.offsetTop;
    const logo = document.querySelector(".logo img");

        function myFunction() {
        if (window.pageYOffset >= 10) {
            header.classList.add("sticky");
            logo.src = "https://worldsoftzone.com/assets/img/sticky-logo.png";
        } else {
            header.classList.remove("sticky");
            logo.src = "https://worldsoftzone.com/assets/img/logo-white.png";
        }
    }
 
$(".btn_close_sub_menu").click(function(){
    //$(".sub-menu").css("animation","slideRight 0.5s ease forwards");
    setTimeout(() =>{
        $(".sub-menu").removeClass("active");
    },100);
})
 
 
 
 /*=== end menu code ==*/



$(document).ready(function(){

    $(".box.website_preview").mouseenter(function(){
        /*setTimeout(function(){
            $(".box.website_preview").addClass('active');
        }, 100)*/
        setTimeout(function(){
            $(".box.website_preview .mobile").addClass('active');
        }, 300)
        setTimeout(function(){
            $(".box.website_preview .quote_box").addClass('active');
        }, 500)
        
    })
    
    $(".box.website_preview").mouseleave(function(){
        /*setTimeout(function(){
            $(".box.website_preview").removeClass('active');
        }, 100)*/
        setTimeout(function(){
            $(".box.website_preview .mobile").removeClass('active');
        }, 300)
        setTimeout(function(){
            $(".box.website_preview .quote_box").removeClass('active');
        }, 500)
    })
    
    $("header .menu ul > li.has-dropdown").click(function(){
        $(this).find('.mega-menu').addClass("active");
        $(this).find('.sub-menu').addClass("active");
        $(".close-menu").addClass("sub");
    })
    
    $(document).on("click", ".close-menu.sub", function(){
        $(this).removeClass("sub");
        $('.mega-menu, .sub-menu').removeClass("active");
    })
    
    $(".mega-menu").click(function(e){
        e.stopPropagation();
    })
    
    $(".btn-menu").click(function(){
        $("header > .container-fluid > .row .col-2 ul.text-upper").addClass("active");
        $("body").addClass("disable");
    })
    $(document).on("click", ".close-menu:not(.sub)", function(){
        $("header > .container-fluid > .row .col-2 ul.text-upper").removeClass("active");
        $("body").removeClass("disable");
    })
    

})


