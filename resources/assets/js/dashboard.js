import Vue from 'vue'
import VeeValidate from 'vee-validate';
import UserDataViewer from './components/UserDataViewer.vue'
import modal from 'vue-strap/src/modal'
import axios from 'axios'



import {store} from './store/store'
import AccessRights from './router/AccessRights.vue'
import users from './router/users.vue'
import Products from './router/Products.vue'
import UserProfile from './router/UserProfile.vue'

import VueRouter from 'vue-router'


  
Vue.use(VueRouter)


const routes = [
  { path: '/rights', component: AccessRights },
  { path: '/users', component: users },
  { path: '/products', component: Products },
  { path: '/user-profile', component: UserProfile}

]

const router = new VueRouter({
  routes // short for routes: routes
})

window.bus = new Vue()

var app = new Vue({
	router,
	store,
	components: {

		modal,
		UserDataViewer
	},
	data: {

		isActive: false
	},
	computed: {

		title(){

			return this.$store.getters.title
		}

	}
		
}).$mount('#app')