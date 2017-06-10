<script type="text/javascript">

import AccessRights from './AccessRights.vue'
import Positions from './Positions.vue'
import users from './users.vue'
import Products from './Products.vue'
import UserProfile from './UserProfile.vue'

	export const routes = [
	  { path: '/access-rights', component: AccessRights},
	  { path: '/positions', component: Positions },
	  { path: '/users', component: users },
	  { path: '/products', component: Products },
	  { path: '/user-profile', component: UserProfile}

	]
</script>