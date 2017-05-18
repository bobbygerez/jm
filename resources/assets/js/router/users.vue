<template>
	<div class="container-fluid">
		 <div class="row">
            <div class="col-md-12">
                <div class="card">
                    
                </div>
            </div>

         <user-data-viewer>

         </user-data-viewer>
                   
        </div>

	</div>
</template>

<script type="text/javascript">

import UserDataViewer from '.././components/UserDataViewer.vue'
export default {
    components: {
        UserDataViewer
    },
	data(){

		return {

            show: false,
            activeTab: 0,
            selectedMaritalStatus: '',
            status: [{name: 'Active' , value: 1}, {name: 'Inactive', value: 0}],
            message: '',
            activeTab: 1,
            checked: true,
            largeModal: false,
            windowLocation: window.location.origin + '/',
            confirmDeleteUser: true
			
		}
	},
    
    created(){

        this.$store.commit('title', 'All Users')
    }
}


</script>