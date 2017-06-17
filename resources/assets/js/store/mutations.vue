<script type="text/javascript">
	export const mutations = {
		regMessage(state, regMessage){
			state.regMessage = regMessage
		},
		merchant(state, merchant){
			state.merchant = merchant
		},
		merchants(state, merchants){
			state.merchants = merchants
		},
		clearUserPolicies(state){
			state.userPolicies = []
		},
		userPolicies(state, userPolicies){
			state.userPolicies = userPolicies
		},
		policies(state, policies){
			state.policies =  policies
		},
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
	}
</script>