

import Vue from 'vue'
import axios from 'axios'
import UserRegister from './components/UserRegister.vue'
import MainCategoriesProducts from './components/MainCategoriesProducts.vue'
import SidebarOptions from './components/SidebarOptions.vue'

import alert from 'vue-strap/src/alert'
import VeeValidate from 'vee-validate';
import JuanFooter from './router/home/Footer.vue'
import MainContent from './router/home/MainContent.vue'
import HeaderBottom from './router/home/HeaderBottom.vue'
import HeaderTop from './router/home/HeaderTop.vue'
import HeaderMid from './router/home/HeaderMid.vue'
import MenuPrimary from './router/home/MenuPrimary.vue'
import Banner from './router/home/Banner.vue'
import {store} from './store/store.vue'

Vue.use(VeeValidate);

axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.bus = new Vue();

var app = new Vue({
  el: '#app',
  store,
  components: {
    UserRegister,
    MainCategoriesProducts,
    SidebarOptions,
    alert,
    JuanFooter,
    MainContent,
    HeaderBottom,
    HeaderMid,
    MenuPrimary,
    Banner,
    HeaderTop

  },
  data: {

    Spinner: false,
    loginShow: false,
    registerSuccess: false,
    messages: {},
    errorHeader: '',
    showAlertLogin: false,
    email: '',
    password: '',
    showAlertLoginSuccess: false,
    welcomeName: false,
    user: {},
    registerShow: false,
    alertType: 'danger'

  },
  created(){
    bus.$on('register-show', data => { 
      this.registerShow = false 
      this.registerSuccess = true

    })
  },
  methods: {

    forgotPassword: function(e){
      e.preventDefault()

      if ( this.validateEmail() ){
        this.alertType = 'success'
        this.errorHeader = 'Password Reset Success'
        this.messages = {messages: { messages: 'An email has been sent. Please click the link!'}}
        this.showAlertLogin = true
      }

      else{
        this.alertType = 'danger'
        this.errorHeader = 'Forgot Password Error'
        this.messages = {messages: { messages: 'Please enter a valid email!'}}
        this.showAlertLogin = true
      }
          
    },
    showLogin: function(e){
      this.loginShow = true
      this.registerShow = false
      e.preventDefault()
    },
    LoginMethod: function(){

      var vm = this
      axios.post('login',{
          email: vm.email,
          password: vm.password
      })
        .then(function(response){
            Vue.set(vm.$data, 'messages', response.data)
            Vue.set(vm.$data, 'user', response.data.user)

            if(response.data.error){
              vm.alertType = 'danger'
              vm.errorHeader = 'Login Error'
              vm.showAlertLogin = true
            }
            else{
              vm.loginShow = false
              vm.email = ''
              vm.password = ''
              vm.showAlertLoginSuccess = true
              vm.welcomeName = true
            }
            

        })
        .catch(function(response){
           Vue.set(vm.$data, 'messages', response)
        });
    }
  }

  
})


