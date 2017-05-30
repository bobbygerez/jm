export default {

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
	    }

	}