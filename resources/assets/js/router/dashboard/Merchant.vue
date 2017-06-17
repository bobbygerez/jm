<template>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="row">
            <div class="header">
              <div class="col-lg-12">
                <div class="col-lg-6">
                 <div style="margin-top: 25px;">
                      <autocomplete
                      placeholder="Search merchant name..."
                      :url="merchantUrl"
                      anchor="name"
                      :on-select="getData"
                      :on-input="onInput"
                      
                      >
                    </autocomplete>
                  </div>
                </div>
                  <div class="content table-responsive table-full-width">
                  <table class="table table-hover user-table">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Telephone</th>
                        <th>Mobile</th>
                        <th>Website</th>
                        <th>Email</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr v-for="mer in merchants">
                          <td>
                          {{ mer.name }}</td>
                          <td>{{ mer.phone_no }}</td>
                          <td>{{ mer.mobile_no }}</td>
                          <td>{{ mer.website }}</td>
                          <td>{{ mer.email }}</td>
                          
                          <td>
                            <a href="/" style="font-size:20px;" class="text-info" @click="viewBranches($event, mer.id)" title="Branches"><i class="fa fa-list-ul" aria-hidden="true"></i></a>
                            <a href="/" style="font-size:20px;" class="text-success" title="Edit"><span class="fa fa-edit"></span></a>
                            <a href="/" style="font-size:20px;" class="text-danger" title="Delete"><span class="fa fa-trash"></span></a>
                          </td>
                        </tr>
                    </tbody>
                  </table>
                  <sidebar :show="showSidebar" placement="right" header="All Branches" :width="width" @close="showSidebar = false" @open="showSidebar = true">
                    <table class="table table-hover user-table">
                      <thead>
                        <tr>
                            <th>Name</th>
                            <th>Telephone</th>
                            <th>Email</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="branch in branches">
                            <td>{{ branch.name }}</td>
                            <td>{{ branch.phone_no }}</td>
                            <td>{{ branch.email }}</td>
                            
                        </tr>
                      </tbody>
                    </table>
                  </sidebar>
                  </div>
              </div>
            </div><!--header end -->
          </div>


        </div>
      </div>
    </div>
     <modal v-model="showViewBranch" effect="fade" large width="40%" >
      <!-- custom header -->
      <div slot="modal-header" class="modal-header">
        <h4 class="modal-title text-center">All Branches</h4>

      </div>

      <div class="modal-body"> 
        

      </div>

      <div slot="modal-footer" class="modal-footer">
        <div class="pull-right" style="margin-right: 50px;">
          <button type="button" class="btn btn-default btn-fill">Exit</button>
          <button type="button" class="btn btn-info btn-fill">Save</button>
        </div>
      </div>
  </modal>
  
  </div>
</template>

<script type="text/javascript">
import axios from 'axios'
import modal from 'vue-strap/src/modal'
import sidebar from 'vue-strap/src/aside'
import Autocomplete from 'vue2-autocomplete-js'
export default{

  data(){

    return {

        windowLocation: window.location.origin + '/',
        showViewBranch: false,
        showSidebar: false,
        width: 500,
        merchantUrl:  window.location.origin + '/api/merchant-search'
    }
  },
  components: {
    modal,
    sidebar,
    Autocomplete
  },
  created(){
    this.$store.commit('title', 'All Merchants');
    this.index();
  },
  computed: {
      merchants(){
        return this.$store.getters.merchants
      },
      branches(){

        return this.$store.getters.branches
      }
  },

  methods: {
      getData(){

      },
      onInput(){

      },
      index(){
        var store = this.$store;
        axios.get(this.windowLocation + '/api/merchant')
        .then(function(response){
            store.commit('merchants', response.data.merchants);
        })
        .catch()
      },
      viewBranches(e, merchantId){

        e.preventDefault()
        var store = this.$store
        axios.post(this.windowLocation + 'api/merchant-branches',{

            merchantId: merchantId
        }).then(function(response){

            store.commit('branches', response.data.branches);
        })

        .catch(function(response){

        })
        this.showSidebar = true

      }
  }
}

</script>
<style type="text/css" scoped>
  tr:hover{
    cursor: auto;
  }
</style>

