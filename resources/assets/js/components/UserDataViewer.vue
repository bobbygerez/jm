<template>
  <div>
      <div class="header">
          <div class="form-group">
              <div class="col-md-4">
               <input type="text" class="form-control border-input" placeholder="Search Lastname, Firstname, Email" v-model="string" >
               </div>
               <div class="col-md-4">
                <select class="form-control border-input" v-model="roleId">
                    <option value="">Select Roles By Group</option>
                    <option v-for="role in roles"  :value="role.id"> {{ role.name }}</option>
                </select>
               </div>
          </div>
      </div>

        <div class="content table-responsive table-full-width">
        <br />
        <table class="table table-hover user-table">
            <thead>
              <th>Id</th>
              <th>Email</th>
              <th>Roles</th>
              <th>Status</th>
              
            </thead>
            <tbody>
                <tr v-for="user in users" @click="userTable(user.id)">
                  <td>{{ user.lastname }}, {{ user.firstname}}</td>
                  <td>{{ user.email }}</td>
                  <td>
                    <span v-for="role in user.roles">
                      {{ role.name }}
                    </span>
                  </td>
                  <td>
                    <span v-if="user.status === 1" class="label label-success">Active</span>
                    <span v-if="user.status === 0" class="label label-danger">Inactive</span>
                  </td>
                  <td>
                    
                  </td>
                </tr>
              
            </tbody>
        </table>
            
        </div>  
    </div>

</template>

<script>

import Vue from 'vue'
import axios from 'axios'
import lodash from 'lodash'


export default{
  props: ['source', 'mymodal', 'userid'],
  data(){

      return {
        query: {},
        users: {},
        columns: {},
        string: '',
        userId: '',
        myUser: {},
        roles: {},
        roleId: ''
      }

          
  },

  created(){

    this.fetchUserData()
    bus.$on('updated-users', data => {this.fetchUserData()})


  },

  methods: {
   
    fetchUserData() {
        var vm = this
        axios.get(`${this.source}?&string=${this.string}&roleId=${this.roleId}`)
          .then(function(response) {
            
            Vue.set(vm.$data, 'users', response.data.users);
            Vue.set(vm.$data, 'roles', response.data.roles);
            
          })
          .catch(function(response) {
          })
        },
    userTable: function(userId){

      var vm = this
      this.userId = userId
     

      axios.get(`${this.userid}?&userId=${this.userId}`)
        .then(function(response){
          
           vm.myUser = response.data
        
        })
        .catch(function(response){

        })


    }
  },

  watch: {

    string: _.debounce(function(){

      this.fetchUserData()

    }, 500),

    myUser: function(){

       this.$emit('mymodal', this.myUser)
    },

    roleId: _.debounce(function(){

      this.fetchUserData()
    }, 500)
  }
}
</script>