<template>
	<div class="header-mid">
            <div class="container">
                <div class="header-mid-left">
                    <p class="wellcome-to">Wellcome to Super Market</p>
                    <p class="register-or-login" v-show="register">
                        <a href="#" class="register" @click="registerUser('Register as User', 1)">Register as User</a>
                        or
                        <a href="#" class="login" @click="registerUser('Sell on Juan Merkado', 2)">Sell on Juan Merkado</a>
                    </p>
                    <p class="register-or-login" v-show="showUser">
                        <a href="#" class="register">Show User if Login</a>
                    </p>
                </div>
                <div class="header-mid-right">
                    <div class="header-mid-right-content">
                        <a href="#">
                            <i class="flaticon-user-outline"></i>
                            My Account
                        </a>
                    </div>
                    <div class="header-mid-right-content">
                        <a href="#">
                            <i class="flaticon-like"></i>
                            My Wishlist
                        </a>
                    </div>
                    <div class="header-mid-right-content">
                        <a href="#">
                            <i class="flaticon-check-square"></i>
                            Check Out
                        </a>
                    </div>
                    <div class="header-mid-right-content country-select-menu">
                        <div class="country-select">
                            <div class="country select">
                                <img src="assets/images/flag.jpg" alt="flag" width="24" height="17">
                                English
                            </div>
                            <div class="country-dropdown">
                                <div class="country">
                                    <img src="assets/images/flag2.jpg" alt="flag" width="24" height="17">
                                    Hungary
                                </div>
                                <div class="country">
                                    <img src="assets/images/flag3.jpg" alt="flag" width="24" height="17">
                                    German
                                </div>
                                <div class="country">
                                    <img src="assets/images/flag4.jpg" alt="flag" width="24" height="17">
                                    French
                                </div>
                                <div class="country">
                                    <img src="assets/images/flag5.jpg" alt="flag" width="24" height="17">
                                    Canada
                                </div>
                                <div class="country">
                                    <img src="assets/images/flag6.jpg" alt="flag" width="24" height="17">
                                    Australia
                                </div>
                            </div>
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </div>

                    </div>
                    <div class="header-mid-right-content money-select-menu">
                        <div class="money-select">
                            <div class="money select">
                                USD
                            </div>
                            <div class="money-dropdown">
                                <div class="money">
                                    EGP
                                </div>
                                <div class="money">
                                    EURO
                                </div>
                                <div class="money">
                                    USD
                                </div>

                            </div>
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <modal v-model="registerModal" effect="fade" large width="40%" >
            	<!-- custom header -->
            	<div slot="modal-header" class="modal-header">
            		<h2 class="modal-title text-center"> {{ title }}</h2>

            	</div>

            	<div class="modal-body"> 

            		<user-register :sitekey="sitekey" :source="windowLocation + registerIn" :company-show="companyShow"></user-register>
            	</div>

            	<div slot="modal-footer" class="modal-footer">
            		<div class="pull-right" style="margin-right: 50px;">
            			<button type="button" class="btn btn-default btn-fill" @click="registerModal = false">Exit</button>
            			<button type="button" class="btn btn-info btn-fill" @click="validateBeforeSubmit">Register Now</button>
            		</div>
            	</div>
            </modal>
        </div>
        
</template>

<script type="text/javascript">

	import Vue from 'vue'
	import axios from 'axios'
	import modal from 'vue-strap/src/modal'
	import UserRegister from '../../components/UserRegister'
	import VeeValidate from 'vee-validate'

	Vue.use(VeeValidate)

	export default{

		data(){

			return {

				windowLocation: window.location.origin + '/',
                registerIn: '',
				register: true,
				showUser: false,
				registerModal: false,
				title: '',
				sitekey: '',
                companyShow: false
			}
		},
		components: {
			modal,
			UserRegister
		},
		created(){

			this.sitekey = SiteKey.googleSiteKey
			this.authenticated();
		},
		methods: {

			authenticated(){

				axios.post(this.windowLocation + 'api/authenticated')
				.then(function(response){

					if(response.data.success !== false){


					}
				})
				.catch(function(response){

				})
			},
			registerUser(title, id){

				this.title = title;
				this.registerModal = true

				if (id === 1) {
					
                    this.companyShow = false
                    this.registerIn = 'register'

				}
				else {
					
                    this.companyShow = true
                    this.registerIn = 'api/register-user-merchant'
				}

			},
            validateBeforeSubmit: function(){
              bus.$emit('check-register-form')
            }
		}
	}
</script>