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
                 <div class="col-lg-6">
                    <div class="pull-right">
                      <paginate
                      :page-count="merchants.last_page"
                      :containerClass="'pagination'"
                      :click-handler="clickHandler"
                      :prev-text="'Prev'"
                      :next-text="'Next'"
                      :container-class="'className'">
                    </paginate>
                  </div>
                </div>
                  <div class="content table-responsive table-full-width">
                  <table class="table table-hover user-table">
                    <caption>
                      <p class="text-center">Page {{ merchants.current_page }} of {{ merchants.last_page }} <br /> Display {{ merchants.from }} to {{ merchants.to }} out of {{ merchants.total }}</p>
                    </caption>
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Telephone</th>
                        <th>Mobile</th>
                        <th>Website</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th style="width: 100px;">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr v-for="mer in merchants.data">
                          <td>
                          {{ mer.name }}</td>
                          <td>{{ mer.phone_no }}</td>
                          <td>{{ mer.mobile_no }}</td>
                          <td>{{ mer.website }}</td>
                          <td>{{ mer.email }}</td>
                          <td v-if="mer.status"><span class="label label-success"> <i class="fa fa-check"> </i></span></td>
                          <td v-else><span class="label label-danger"> <i class="fa fa-times"> </i></span></td>
                          <td>
                            <a href="/" style="font-size:20px;" class="text-info" @click="viewBranches($event, mer.id)" title="Branches"><i class="fa fa-list-ul" aria-hidden="true"></i></a>
                            <a href="/" style="font-size:20px;" class="text-success" title="Edit" @click="editBranch($event, mer.id)"><span class="fa fa-edit"></span></a>
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
                      <tbody v-if="branches != null">
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
  <modal v-model="editMerchantModal" effect="fade" large >
      <!-- custom header -->
      <div slot="modal-header" class="modal-header">
        <h4 class="modal-title text-center">{{ merchant.name }}</h4>

      </div>

      <div class="modal-body"> 
        <div class="row">
          <tabs v-model="activeTab" nav-style="tabs" justified>
            <tab header="Company Informations">
              <form>
              <div class="col-md-6">
                  <div class="form-group">
                      <label>Merchant Id No:</label>
                      <input type="text" class="form-control border-input" v-model="merchant.merchant_id">
                  </div>
                  <div class="form-group">
                      <label>Name:</label>
                      <input type="text" class="form-control border-input" v-model="merchant.name">
                  </div>
                  <div class="form-group">
                      <label>Website:</label>
                      <input type="text" class="form-control border-input" v-model="merchant.website">
                  </div>
                  <div class="form-group">
                      <label>Email:</label>
                      <input type="text" class="form-control border-input" v-model="merchant.email">
                  </div>
                  <div class="form-group">
                      <label>Phone:</label>
                      <input type="text" class="form-control border-input" v-model="merchant.phone_no">
                  </div>
                  <div class="form-group">
                      <label>Mobile:</label>
                      <input type="text" class="form-control border-input" v-model="merchant.mobile_no">
                  </div>
                  <div class="form-group">
                      <label>Contact Person:</label>
                      <input type="text" class="form-control border-input" v-model="merchant.contact_person">
                  </div>

                  
                    
              </div>
              <div class="col-md-6">
                  
                  
                   <div class="form-group">

                      <label>Trade Type</label>
                      <br />
                      <label class="radio-inline">
                        <input type="radio" v-model="forFranchise" value="0" @click="removeError()"> Franchisee
                      </label>
                      <label class="radio-inline">
                        <input type="radio"  v-model="forFranchise" value="1" @click="checkTradeName()"> Franchisor
                      </label>
                      <label class="radio-inline">
                        <input type="radio"  v-model="forFranchise" value="2" @click="checkTradeName()"> None
                      </label> 

                      <transition name="fade">
                        <input type="text" class="form-control border-input" v-model="tradeName" v-if="forFranchise == 1" placeholder="Enter Trade Name" @blur="checkTradeName" :class="{ error : tradeNameError}">
                        
                      </transition>

                      <transition name="fade">
                        <v-select :on-change="consoleCallback" value="id" label="name" v-model="vSelected" :options="vOptions" v-if="forFranchise == '0'"></v-select>
                      </transition>

                      <transition name="fade">
                        <span class="spanError" v-if="tradeNameError">The trade name had already been taken.</span>
                      </transition>
                      
                  </div>
                  <div class="form-group">
                      <label>Regulatory Agency Registration:</label>
                      <select class="form-control border-input" v-model="merchant.registered_by_id">
                          <option value="">Select Agency</option>
                          <option v-for="reg in registeredBy" :value="reg.id"> {{ reg.name }}</option>
                      </select>

                  </div>
                   <div class="form-group">
                      <label>Business/Industry Type:</label>
                      <select class="form-control border-input">
                          <option value="">Select Type</option>
                          <option> To Be filled up</option>
                      </select>

                  </div>
                   <div class="form-group">
                      <label>Ownership Type:</label>
                      <select class="form-control border-input" v-model="merchant.ownership_type_id">
                          <option value="">Select Ownership Type</option>
                          <option v-for="ownership in getOwnershipType" :value="ownership.id"> {{ ownership.name }}</option>
                      </select>

                  </div>
                  <div class="form-group">
                      <label>Registration No:</label>
                      <input type="text" class="form-control border-input" v-model="merchant.registration_no">
                  </div>
                  <div class="form-group">
                      <label>Date Registered:</label>
                      <input type="date" class="form-control border-input" v-model="merchant.date_registered">
                  </div>
                  <div class="form-group">
                    <button type="button" class="btn btn-default btn-fill" @click="editMerchantModal = false">Exit</button>
                    <button type="button" class="btn btn-info btn-fill" @click="saveMerchant">Save</button>
                  </div>
              </div>
              
              </form>
              
            </tab>
            <tab header="Contract Informations">
              ...
            </tab>
            <tab header="Miscellaneous Data" >
              ...
            </tab>
    
          </tabs>
        </div>
        <alert v-model="alertDanger" placement="top" type="danger" width="400px" dismissable  duration="4000">
          <span class="icon-info-circled alert-icon-float-left"></span>
            <strong><i class="fa fa-warning"></i> Merchant update unsuccessful! </strong>
            <ul>
              <li v-for="val in alertMessage">{{ val[0] }}</li>
            </ul>
        </alert>
        <alert v-model="alertSuccess" placement="top" type="success" width="70%" dismissable  duration="4000">
          <span class="fa fa-check-circle alert-icon-float-left"></span>
          <strong> Updated Successfully! </strong>
          <p>Merchant {{ merchant.name }} was successfully updated.</p>
        </alert>
      </div>

      <div slot="modal-footer" class="modal-footer">
        
      </div>
  </modal>
    
  </div>
</template>

<script type="text/javascript">
import axios from 'axios'
import modal from 'vue-strap/src/modal'
import sidebar from 'vue-strap/src/aside'
import Autocomplete from 'vue2-autocomplete-js'
import Paginate from 'vuejs-paginate'
import tabs from 'vue-strap/src/tabs'
import tab from 'vue-strap/src/tab' 
import vSelect from 'vue-select'
import alert from 'vue-strap/src/alert'
export default{

  data(){

    return {

        windowLocation: window.location.origin + '/',
        showViewBranch: false,
        showSidebar: false,
        width: 500,
        merchantUrl:  window.location.origin + '/api/merchant-search',
        page: 1,
        per_page: 20,
        editMerchantModal: false,
        activeTab: 0,
        vSelected: '',
        vFranchisor: [],
        vOptions:[],
        updatedTradeName: '',
        tradeNameError: false,
        alertDanger: false
    }
  },
  components: {
    modal,
    sidebar,
    Autocomplete,
    Paginate, tabs, tab, vSelect, alert
  },
  created(){
    this.$store.commit('title', 'All Merchants');
    this.index();
    this.getRegisteredBy();
    this.ownershipType();
    this.getFranchisor();

  },
  computed: {

      alertMessage(){
        return this.$store.getters.alertMessage
      },
      forFranchise: {
        get(){

          if (this.merchant.trade != null){

            return this.merchant.trade.for_franchise
          }
          else{

            return 2
          }

        },
        set(value){

          this.$store.commit('forFranchise', value);
        }
      },
      tradeName: {

        get(){
          if (this.merchant.trade != null){

            return this.merchant.trade.name
         }
         else {

            return ''
         }
       },
        set(value){

          this.$store.commit('tradeName', value)
        }
         

      },
      tradeId(){
        if (this.merchant.trade != null){

            return this.merchant.trade.id
         }
      },

      merchant() {

        return this.$store.getters.merchant
        
      },
      merchants(){
        return this.$store.getters.merchants
      },
      branches(){

        return this.$store.getters.branches
      },
      getOwnershipType(){
        return this.$store.getters.ownershipType
      },
      registeredBy(){

        return this.$store.getters.registeredBy
      }
  },

  methods: {

      ownershipType(){

        var store = this.$store
          axios.get(this.windowLocation + 'api/ownership_type')
            .then(function(response){
                store.commit('ownershipType', response.data.ownershipType);
            })
            .catch(function(response){

            })
      },
      getRegisteredBy(){

          var store = this.$store
          axios.get(this.windowLocation + 'api/registered_by')
            .then(function(response){
                store.commit('registeredBy', response.data.registeredBy);
            })
            .catch(function(response){

            })

      },
      getData(obj){
        var store = this.$store;
        this.page = 1
        this.per_page = 1
        axios.post(this.windowLocation + 'api/merchants-search', {

          id: obj.id,
          page: 1,
          per_page: 1
          
        })
        .then(function(response){

            store.commit('merchants', response.data.merchants);

          })
          .catch(function(response){

          })

      },
      onInput(data){
          this.page = 1
          this.per_page = 40
          if (data==='') {

            this.index()
          }
          
      },
      index(){
        var store = this.$store;
        axios.get(this.windowLocation + 'api/merchant?page=' + this.page + '&per_page=' + this.per_page)
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

      },
      clickHandler(pageNum){

       this.page = pageNum
      },
      editBranch(e, merchantId){

        var store = this.$store;
        var vm = this;
        this.forFranchise = [];
        e.preventDefault();
        axios.get(this.windowLocation + 'api/merchant/' + merchantId + '/edit')
        .then(function(response){
            store.commit('merchant', response.data.merchant);
            vm.forFranchise.push(response.data.merchant.trade.for_franchise);
        })
        .catch(function(response){

        })
        this.editMerchantModal = true

      },
      checkTradeName(){

          var vm = this;
          axios.post(this.windowLocation + 'api/trade-check-unique-name',{
              id: this.tradeId,
              name: this.tradeName
          }).then(function(response){
              if(response.data.success){
                vm.tradeNameError = false
              }
              else{
                vm.tradeNameError = true
              }
          }).catch(function(){

          })
      },
      removeError(){
        this.tradeNameError = false
      },
      checkForFranchise(){

        axios.post(this.windowLocation + 'api/merchant-check-for-franchise',{
            id: this.merchant.id,
            forFranchise: this.forFranchise
        });
      },
      getFranchisor(){
        var vm = this

        axios.post(this.windowLocation + 'api/merchant-franchisor')
        .then(function(response){
            vm.vOptions = response.data
        })
        .catch(function(response){

        })
      },
      consoleCallback(val) {

        this.vFranchisor = [{
          trade_id: val.id,
          name: val.name
        }]
        
      },
      saveMerchant(){

        var store = this.$store;
        var vm = this;
        axios.put(this.windowLocation + 'api/merchant/' + this.merchant.id,{
          id: this.merchant.id,
          merchant_id: this.merchant.merchant_id,
          name: this.merchant.name,
          website: this.merchant.website,
          email: this.merchant.email,
          phone_no: this.merchant.phone_no,
          contact_person: this.merchant.contact_person,
          mobile_no: this.merchant.mobile_no,
          for_franchise: this.forFranchise,
          tradeName: this.tradeName,
          registered_by_id: this.merchant.registered_by_id,
          ownership_type_id: this.merchant.ownership_type_id,
          registration_no: this.merchant.registration_no,
          date_registered: this.merchant.date_registered

        }).then(function(response){
            store.commit('merchant', response.data.merchant);
        })
        .catch(function(error){
            store.commit('alertMessage', error.response.data);
            vm.alertDanger = true;
        });

      }
  },
  watch: {

      page(){

          this.index()
      },
      merchant: {
        handler(after, before){

          var store = this.$store
          store.commit('merchant', after);

        },
        deep: true
      }
  }
}

</script>
<style type="text/css" scoped>
  tr:hover{
    cursor: auto;
  }
  .error {

      border: 2px solid #a94442;
  }
  .spanError{

     color: #a94442;
  }
 .alert-icon-float-left {
  font-size:40px;
  float:left;
  margin: 5px;
  margin-right:20px;
  color: #403D39;
  
}
</style>

