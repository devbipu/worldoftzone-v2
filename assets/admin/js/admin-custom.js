$(document).ready(function(){

})


var dt = new Date();
var currentHour = dt.getHours()
if(currentHour > 6 && currentHour < 11){
	document.querySelector(".welcome-text span").innerHTML = "Good Morning,";
}else if(currentHour >= 11 && currentHour <= 6 ){
	document.querySelector(".welcome-text span").innerHTML ="Good afternoon,";
}else if(currentHour >= 18 && currentHour <= 22 ){
	document.querySelector(".welcome-text span").innerHTML = "Good Evening,";
}else{
	document.querySelector(".welcome-text span").innerHTML = "Good night,";
}

var uid = document.querySelector('.nav li.nav-item');

uid.classList.remove("active");