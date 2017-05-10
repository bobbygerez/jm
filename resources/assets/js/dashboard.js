import Vue from 'vue'
import VeeValidate from 'vee-validate';
import UserDataViewer from './components/UserDataViewer.vue'
import modal from 'vue-strap/src/modal'
import axios from 'axios'
import alert from 'vue-strap/src/alert'
import dropdown from 'vue-strap/src/dropdown'
 window.bus = new Vue()

var app = new Vue({

	el: '#app',
	components: {

		UserDataViewer,
		modal,
		alert,
		dropdown
		
	},
	data: {

		show: false,
		checkedRoles: [],	
		myUser: {

			user: {},
			roles: {}
		},
		message: '',
		showTop: false
	},

	methods: {

		saveMethod: function(){

			var vm = this
			axios.put('admin/' + this.myUser.user.id,{

				firstname: this.myUser.user.firstname,
				lastname: this.myUser.user.lastname,
				email: this.myUser.user.email,
				roles: this.checkedRoles

			})
			.then(function(response){

				Vue.set(vm.$data, 'message', response.data.message)
				Vue.set(vm.$data, 'showTop', true)

			})

			.catch(function(response){

			})

			bus.$emit('updated-users')
		},
		confirmDelete: function(){
			var vm = this
			axios.delete('admin/'+ this.myUser.user.id)
				.then(function(response){
					vm.message = response.data.message
					Vue.set(vm.$data, 'showTop', true)
				})
				.catch(function(response){

				})
			bus.$emit('updated-users')
		},
		showModal: function(data){
			var vm = this
			this.show = true
			
			this.myUser = data

			this.checkedRoles = []

			for ( var role in this.myUser.user.roles){

				this.checkedRoles.push(this.myUser.user.roles[role].id)
			}

		}

	},
	watch: {

		 'myUser.roles': function(oldVal, newVal){

			
		}
	}
});