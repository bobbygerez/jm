<template>
	<div class="container-fluid">
		 <div class="row">
            <div class="col-md-12">
                <div class="card">
                   <table class="table table-hover user-table">
                         <thead>
                            <th>Name</th>
                            <th>Access Rights</th>
                          </thead>
                          <tbody>
                          <tr v-for="role in roles" @click="modalShow">
                            <td>{{ role.name }}</td>
                            <td><span v-for="accessRight in role.access_rights">{{ accessRight.name }}, </span></td>
                          </tr>
                      </tbody>
                   </table>
                </div>
            </div>


        </div>

        <modal v-model="show" effect="fade" large>
          <!-- custom header -->
          <div slot="modal-header" class="modal-header">
            <h4 class="modal-title">asdf</h4>
            
          </div>

          <div class="modal-body"> </div>
            
            
           
          <!-- custom buttons -->
          <div slot="modal-footer" class="modal-footer">
            

          </div>
       </modal>

	</div>
</template>

<script type="text/javascript">

import axios from 'axios'
import modal from 'vue-strap/src/modal' 
export default{

    components: {

        modal
    },
    data(){

        return {

            windowLocation: window.location.origin + '/',
            show: false
        }
    },
    created(){

        this.fetchRoles()
        this.$store.commit('title', 'Group Rights')
    },
    computed: {
        
        roles(){

            return this.$store.getters.roles
        } 
    },
    methods: {

        fetchRoles(){

            var store = this.$store

            axios.get(`${this.windowLocation}api/role`)
                .then(function(response){

                    store.commit('roles', response.data.roles)

                })
                .catch(function(response){

                })
        },
        modalShow(){
            
            this.show = true
        }
    }
}

</script>