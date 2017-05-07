import Vue from 'vue'
import VeeValidate from 'vee-validate';
import UserDataViewer from './components/UserDataViewer.vue'
import modal from 'vue-strap/src/modal'
import axios from 'axios'

var app = new Vue({

	el: '#app',
	components: {

		UserDataViewer,
		modal,
		
	},
	data: {

		show: false,
		checkedRoles: [],	
		myUser: {

			user: {},
			roles: {}
		}
	},

	methods: {

		saveMethod: function(){

			axios.put('admin/' + this.myUser.user.id,{

				firstname: this.myUser.user.firstname,
				lastname: this.myUser.user.lastname,
				email: this.myUser.user.email,
				roles: this.checkedRoles

			})
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