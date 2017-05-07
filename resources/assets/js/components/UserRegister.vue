<template>
	<div>
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
			<input v-validate data-vv-rules="required|min:6|confirmed:password_confirmation" name="password" type="password" class="form-control" placeholder="Password" >
		</div>
		<div class="form-group">
			<input name="password_confirmation" type="password" class="form-control" placeholder="Confirm Password" >
		<i v-show="fields.failed('password')" class="fa fa-warning text-danger"></i>
		<span v-cloak v-show="fields.failed('password')" class="help text-danger">{{ errors.first('password') }}</span>
		</div>
									

		<div class="g-recaptcha" :data-sitekey="sitekey"></div> 

		 <br />
		<div class="form-group">
			<div class="row">
					<div class="col-sm-6 col-sm-offset-3">
						<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now" @click="validateBeforeSubmit">
					</div>
			</div>
		</div>
	</div>
</template>

<script>

	import Vue from 'vue'
	import VeeValidate from 'vee-validate';
	Vue.use(VeeValidate);

	export default{

		props: ['sitekey'],
		data() {

			return {

				email: '',
		        firstname: '',
		        lastname: '',
		        password: '',
		        confirm_password: ''
			}
			
		},
		  methods: {
	        validateBeforeSubmit() {
	            this.$validator.validateAll().then(() => {
	                  document.querySelector('#register-form').submit();
	            }).catch(() => {
	                // eslint-disable-next-line
	            });
	        }
	    }
	}
</script>