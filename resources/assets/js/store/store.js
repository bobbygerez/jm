import Vue from 'vue'
import Vuex from 'vuex'


import mutations from './mutations'

Vue.use(Vuex)
export const store = new Vuex.Store({
	state: {

		title: '',
		users: {},
		user: {
				id: 0,
				personal_data:{
					lastname: '',
					firstname: ''
				},
				status: '',
				roles: {
				},
				contact_data: {

					messenger_acct: ''
				}
			},
		chunkRoles: {},
		roles: {},
		maritalStatus: {},
		checkedRoles: [],
		countries: {},
		branches: {},
		products: {
			last_page: 0
		},

		product: {
			id: 0,
			unit_id: '',
			name: '',
			discount: '',
			discount2: '',
			user: {

				personal_data: {
					firstname: '',
					lastname: ''
				}
			},
			quantities: [

				{qty: 0}
			]
				
			
		},
		units: {},
		userModal: false,
        alertMessage: '',
        status: [{name: 'Active' , value: 1}, {name: 'Inactive', value: 0}],
        heirarchy: 0,
        positions: {

        	name: '',
        	desc: '',
        	created_at: ''
        },
        position: {
        	name: '',
        	desc: '',
        	created_at: ''
        },
        roles:{},
        currentRoles: {},
        usersMatch: [

                {user: 'aaa', id: 0},
            ],
        mainFunctions: {}

	},

	mutations: {
		mainFunctions(state, mainFunctions){

			state.mainFunctions = mainFunctions
		},
		currentRoles(state, currentRoles){
			state.currentRoles = currentRoles
		},
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
		},
		branches(state, payload){
			state.branches = payload
		},
		products(state, payload){
			state.products = payload
		},
		product(state, payload){
			state.product = payload
		},
		units(state, units){

			state.units = units
		},
		alertMessage(state, alertMessage){

			state.alertMessage = alertMessage
		},
		heirarchy(state, heirarchy){
			state.heirarchy = heirarchy
		},
		positions(state, positions){

			state.positions = positions
		},
		position(state, position){

			state.position = position
		},
		usersMatch(state, usersMatch){
			state.usersMatch = usersMatch
		}
	},

	getters: {

		mainFunctions(){

			return store.state.mainFunctions
		},
		usersMatch(){

			return store.state.usersMatch
		},

		currentRoles(){

			return store.state.currentRoles
		},
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
	    },
	    branches(){

	    	return store.state.branches
	    },
	    products(){

	    	return store.state.products
	    },
	    product(){
	    	return store.state.product
	    },

	    
	    units(){

	    	return store.state.units
	    },
	    alertMessage(){

	    	return store.state.alertMessage
	    },
	    status(){

	    	return store.state.status
	    },
	    heirarchy(){

	    	return store.state.heirarchy
	    },
	    positions(){

	    	return store.state.positions
	    },
	    position(){

	    	return store.state.position
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