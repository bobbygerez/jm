<template>
	<table class="table table-hover user-table">
    <thead>
      <tr>
      	
        <th>Branch Name</th>
        <th>Telephone</th>
        <th>Mobile</th>
        <th>Merchant Name</th>
        <th>Website</th>
        <th>Email</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

      <tr v-for="branch in branches.data">
      	 <td>{{ branch.branch_name }}</td>
      	 <td>{{ branch.phone_no }}</td>
      	 <td>{{ branch.mobile_no }}</td>
      	 <td>{{ branch.merchant.name }}</td>
      	 <td>{{ branch.merchant.website }}</td>
      </tr>
    </tbody>
  </table>
</template>
<script type="text/javascript">

import axios from 'axios'

export default{

	data(){

		return {
			page: 1,
			per_page: 10,
			windowLocation: window.location.origin + '/'
		}
	},
	created(){

		this.getBranches()

	},
	computed: {
		branches(){

			return this.$store.getters.branches
		}
	},
	methods: {

		getBranches(){
			var store = this.$store
			axios.get( this.windowLocation + 'api/branches?page=' + this.page + '&per_page=' + this.per_page)
				.then(function(response){
					store.commit('branches', response.data.branches);
				})
				.catch(function(){

				})
		}
	}
}
</script>

<style type="text/css" scoped>
  tr:hover{
    cursor: auto;
  }
</style>