

import Vue from 'vue'
import axios from 'axios'
import UserRegister from './components/UserRegister.vue'
import MainCategoriesProducts from './components/MainCategoriesProducts.vue'
import SidebarOptions from './components/SidebarOptions.vue'

window.bus = new Vue();

var app = new Vue({
  el: '#app',
  components: {
    UserRegister,
    MainCategoriesProducts,
    SidebarOptions

  },
  data: {

    Spinner: false
  }

  
})





/************* REGISTER AND LOGIN *****************/
window.$ = window.jQuery = require('jquery');
$(function() {

    $('#login-form-link').click(function(e) {
    	$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});

$(document).ready(function(){
    var pathArray = window.location.pathname.split( '/' );
    var segment_1 = pathArray[1];
   
   if (segment_1 == 'register') {

        $("#register-form-link").trigger("click");
   }
   else{
        $('#login-form-link').trigger("click");
   }

    
});

/*********** END REGISTER AND LOGIN ******************/
