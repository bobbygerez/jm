

import Vue from 'vue'
import axios from 'axios'
import UserRegister from './components/UserRegister.vue'
import MainCategoriesProducts from './components/MainCategoriesProducts.vue'
import SidebarOptions from './components/SidebarOptions.vue'
import modal from 'vue-strap/src/modal'
import alert from 'vue-strap/src/alert'

axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.bus = new Vue();

var app = new Vue({
  el: '#app',
  components: {
    UserRegister,
    MainCategoriesProducts,
    SidebarOptions,
    modal,
    alert

  },
  data: {

    Spinner: false,
    loginShow: false,
    messages: {},
    showAlertLogin: false,
    email: '',
    password: ''
  },

  methods: {

    showLogin: function(){
      this.loginShow = true
    },
    LoginMethod: function(){

      var vm = this
      axios.post('login',{
          email: vm.email,
          password: vm.password
      })
        .then(function(response){
            Vue.set(vm.$data, 'messages', response.data)

        })
        .catch(function(response){
           Vue.set(vm.$data, 'messages', response)
        });
    }
  }

  
})


