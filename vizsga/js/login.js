// Belépés előhozása
$("#btn_belep, #kep_belep").click(function(){
	$("#login-form").css("opacity","1");
	$("#login-form").css("visibility","visible");
	
});

// belépés elrejtése
$("#close_login_button").click(function(){
	$("#login-form").css("opacity","0");
	$("#login-form").css("visibility","hidden");
	
});

//ha máshova katt elrejtése
var body = document.getElementById('index_body');
var except = document.getElementById('login-form');

body.addEventListener("click", function () {
	
   if(window.getComputedStyle(except).visibility === "visible")
   {
       $("#login-form").css("opacity","0");
	   $("#login-form").css("visibility","hidden");
   }
	
   
}, false);



except.addEventListener("click", function(event){event.stopPropagation()}, false);
