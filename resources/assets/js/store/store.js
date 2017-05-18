import Vue from 'vue'
import Vuex from 'vuex'


import mutations from './mutations'

Vue.use(Vuex)
export const store = new Vuex.Store({
	state: {

		title: '',
		users: {},
		user: {
				personal_data:{
					lastname: '',
					firstname: ''
				}
			},
		chunkRoles: {},
		roles: {},
		maritalStatus: {},
		checkedRoles: [],
		countries: {},
		userModal: false
	},

	mutations: {
		user(state, payload){
			state.user = payload
		},
		users(state, payload){
			state.users = payload
		},
		roles(state, payload){
			state.roles = payload
		},
		chunkRoles(state, payload){
			state.chunkRoles = payload
		},
		maritalStatus(state, payload){
			state.maritalStatus = payload
		},
		clearRoles(state){
			state.checkedRoles = []
		},
		checkedRoles(state, roleId){
			
			state.checkedRoles.push(roleId)
		},
		countries(state, payload){
			state.countries = payload
		},
		title(state, payload){
			state.title = payload
		}
	},

	getters: {

		user(){

			return store.state.user
		},

		roles(){

			return store.state.roles
		},

		chunkRoles(){

			return store.state.chunkRoles
		},
	    
	    maritalStatus(){

	        return store.state.maritalStatus
	    },

	    checkedRoles(){

	    	return store.state.checkedRoles
	    },

	    countries(){

	    	return store.state.countries
	    },
	    title(){

	    	return store.state.title
	    }

	},
	actions: {

		checkedRoles(state, roleIds){

			for (var i = 0; i < roleIds.length; i++) {
				state.commit('checkedRoles', roleIds[i])
			}
		}
	}
})