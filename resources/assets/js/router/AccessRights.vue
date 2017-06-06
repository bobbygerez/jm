<template>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="row">
            <div class="header">
              <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-4">
                      
                    <autocomplete
                     placeholder="Search Firstname/Lastname"
                    :url="userPopUp"
                    anchor="user"
                    :on-select="getData"
                    >
                  </autocomplete>
                    </div>
                     
                </div>

                <table class="table table-hover user-table">
                <caption class="text-center" v-if="caption"><h3>{{ firstname }} {{ lastname }} </h3><p>{{ email }} </p></caption>
                    <thead>
                      <tr>
                        <th>Menu and Functions</th>
                        <th>Add</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        <th>Override/Approve</th>
                        <th>View</th>
                        <th>Print</th>
                        <th>Publish</th>
                      </tr>
                    </thead>
                    <tbody v-for="mainFunction in mainFunctions">

                      <tr>
                          <td>{{ mainFunction.name }}</td>
                      </tr>
                      <tr v-for="sub in mainFunction.sub_functions">
                          <td><span>{{ sub.name }}</span></td>
                      
                      </tr>

                    </tbody>
                  </table>
              </div>
            </div><!--header end -->
          </div>

          

        </div>
      </div>


    </div>

 
  </div>
</template>

<script type="text/javascript">

require('vue2-autocomplete-js/dist/style/vue2-autocomplete.css')

import axios from 'axios'
import lodash from 'lodash'
import Autocomplete from 'vue2-autocomplete-js'

export default{

    components: {

        Autocomplete 
      },

    data(){

        return {

            userPopUp: window.location.origin + '/api/user-pop',
            windowLocation: window.location.origin + '/',
            firstname: '',
            lastname: '',
            email: '',
            caption: false
        }
        
    },

    created(){

        this.$store.commit('title', 'Access Rights')
        this.fetchMainFunctions();
    },
    computed: {
        usersMatch(){

            return this.$store.getters.usersMatch
        },
        mainFunctions(){

            return this.$store.getters.mainFunctions
        }


    },
    methods: {
        getData(obj){
            axios.get(this.windowLocation + 'api/policy')
            this.firstname = obj.firstname + ', '
            this.lastname = obj.lastname
            this.email = obj.email
            this.caption = true
        },
        fetchMainFunctions(){

            var store = this.$store

            axios.get(this.windowLocation + 'api/main_functions')
            .then( function(response){

                store.commit('mainFunctions', response.data.mainFunctions);

            })
            .catch()
        }
    }
  
}

</script>

<style type="text/css" scoped>


    tr td span{

         margin-left: 20px;
    }

    tr td span span{

         margin-left: 20px;
    }

   
</style>
