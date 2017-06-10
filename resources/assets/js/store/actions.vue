<script type="text/javascript">

	export const actions = {

		checkedRoles(state, roleIds){

			for (var i = 0; i < roleIds.length; i++) {
				state.commit('checkedRoles', roleIds[i])
			}
		}
	}
</script>