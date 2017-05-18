<template>
	<div>
	 	<alert v-model="showRegisterAlert" placement="top" duration="5000" :type="responsetype" width="400px" dismissable>
          <span :class="responseClass"></span>
          <strong>{{ responseHeader }}</strong>
          <br />
          <p v-for="(v, k) in messages" style="margin-left: 10px;">{{ messages[k][0] }}</p>
        </alert>
		<div class="form-group">
			<input name="firstname" v-model="firstname" v-validate:name.initial="'required|alpha_spaces'" :class="{'input': true, 'is-danger': errors.has('firstname') }" type="text" placeholder="Firstname" class="form-control" >
			<i v-show="errors.has('firstname')" class="fa fa-warning text-danger"></i>
			<span v-cloak v-show="errors.has('firstname')" class="help text-danger">{{ errors.first('firstname') }}</span>
		</div>
		<div class="form-group">
			<p class="control has-icon has-icon-right">
				<input name="lastname" v-model="lastname" v-validate:name.initial="'required|alpha_spaces'" :class="{'input': true, 'is-danger': errors.has('lastname') }" type="text" placeholder="lastname" class="form-control" >
				<i v-show="errors.has('lastname')" class="fa fa-warning text-danger"></i>
				<span v-cloak v-show="errors.has('lastname')" class="help text-danger">{{ errors.first('lastname') }}</span>
			</p>
		</div>
		<div class="form-group">
			<p class="control has-icon has-icon-right">
				<input name="email" v-model="email" v-validate:name.initial="'required|email'" :class="{'input': true, 'is-danger': errors.has('email') }" type="text" placeholder="Email" class="form-control" >
				<i v-show="errors.has('email')" class="fa fa-warning text-danger"></i>
				<span v-cloak v-show="errors.has('email')" class="help text-danger">{{ errors.first('email') }}</span>
			</p>
		</div>
									  

		<div class="form-group">
			<input v-validate data-vv-rules="required|min:6|confirmed:confirm_password" name="password" type="password" class="form-control" placeholder="Password" v-model="password">
		</div>
		<div class="form-group">
			<input name="confirm_password" type="password" class="form-control" placeholder="Confirm Password" >
		<i v-show="fields.failed('password')" class="fa fa-warning text-danger"></i>
		<span v-cloak v-show="fields.failed('password')" class="help text-danger">{{ errors.first('password') }}</span>
		</div>
									

		<div class="g-recaptcha" :data-sitekey="sitekey"></div> 

	</div>
</template>

<script>

	import Vue from 'vue'
	import VeeValidate from 'vee-validate';
	import axios from 'axios'
	import alert from 'vue-strap/src/alert'
	import lodash from 'lodash'
	Vue.use(VeeValidate);

	export default{

		props: ['sitekey', 'source'],
		components:{

			alert
		},
		data() {

			return {

				email: '',
		        firstname: '',
		        lastname: '',
		        password: '',
		        confirm_password: '',
		        rcapt_id: 0,
		        g_recaptcha_response: '',
		        showRegisterAlert: false,
		        messages: {},
		        responseHeader: '',
		        responseClass: '',
		        responsetype: ''
			}
			
		},

		created(){
			bus.$on('check-register-form', data => { this.validateBeforeSubmit() })
			if (window.grecaptcha) {
		    this.rcapt_id = grecaptcha.render( $('.g-recaptcha')[0], { sitekey : this.sitekey });
		  }
		},
		  methods: {
	        validateBeforeSubmit() {
	        	var vm = this
	        	this.g_recaptcha_response = grecaptcha.getResponse(this.rcapt_id);
				
	            this.$validator.validateAll().then(() => {
	                 // document.querySelector('#register-form').submit();
	                 axios.post(`${this.source}`, {
	                 	email: this.email,
	                 	firstname: this.firstname,
	                 	lastname: this.lastname,
	                 	password: this.password,
	                 	password_confirmation: this.password,
	                 	gRecaptchReponse: this.g_recaptcha_response
	                 })
	                 .then(function(response){
	                 	
	                 	Vue.set(vm.$data, 'messages', response.data.messages)

	                 	if ( response.data.error ) {
	                 		Vue.set(vm.$data, 'showRegisterAlert', true)
		                 	Vue.set(vm.$data, 'responsetype', 'danger')
		                 	Vue.set(vm.$data, 'responseClass', 'fa fa-warning')
		                 	Vue.set(vm.$data, 'responseHeader', 'Registration Error')
	                 	}
	                 	else {
	           
		                 	bus.$emit('register-show')
		                 	
	                 	}

	                 	
	                 

	                 })
	                 .catch(function(response){

	                 })

	            }).catch(() => {
	                // eslint-disable-next-line
	            });
	        }
	    }
	}
</script>