<script type="text/javascript">
import Vue from 'vue'
import Vuex from 'vuex'

import { mutations } from './mutations.vue'
import { actions } from './actions.vue'

Vue.use(Vuex)
export const store = new Vuex.Store({
	state: {

		mapZoom: 6,
		placeCountry: '',
		placeCity: '',
		placeAddress: '',
		title: '',
		users: {
			data: [],
			last_page: 0
		},
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
		regions: {},
		provinces: {},
		cities: {},
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
        mainFunctions: {},
        policies: {},
        userPolicies: {
        	
        },
        merchants: {
        	last_page: 0
        },
        merchant: {
        	trade: {
        		name: '',
        		for_franchise: 0
        	},
        	franchisee: {
        		trade: {
        			name: ''
        		}
        	},
        	address: {
        		lat: 0,
        		long: 0,
        		street: '',
        		country: {
        			name: ''
        		},
        		province: {
        			name: ''
        		},
        		city: {

        			name: ''
        		}
        	}
        },
        regMessage: '',
        myAccount: 'My Account',
        registeredBy: {},
        ownershipType: {},
        coordinates: { lat: '', long: '' }

	},

	mutations,
	actions,
	getters: {

		
		mapZoom(){

			return store.state.mapZoom
		},
		placeCountry(){
			return store.state.placeCountry
		},
		placeCity(){
			return store.state.placeCity
		},
		placeAddress(){
			return store.state.placeAddress
		},
		coordinates(){

			return store.state.coordinates
		},
		ownershipType(){

			return store.state.ownershipType
		},
		registeredBy(){

			return store.state.registeredBy
		},
		myAccount(){

			return store.state.myAccount
		},
		regMessage(){

			return store.state.regMessage
		},
		merchant(){

			return store.state.merchant
		},
		merchants(){
			return store.state.merchants
		},
		userPolicies(){

			return store.state.userPolicies
		},
		policies(){

			return store.state.policies
		},

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
	    cities(){

	    	return store.state.cities
	    },
	    provinces(){

	    	return store.state.provinces
	    },
	    regions(){

	    	return store.state.regions
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
	    },
	    users(){

	    	return store.state.users
	    }
	}
	
	
})


</script>
