<template>
	<div class="container-fluid">
		 <div class="row">
            <div class="col-md-12">
                <div class="card">
                   <table class="table table-hover user-table">
                         <thead>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Created At</th>
                          </thead>
                          <tbody>
                          
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
  data() {

      return {

          show: false,
          windowLocation: window.location.origin + '/'
      }
  },
  created(){

      this.$store.commit('title', 'All Products')
      this.fetchProducts()
  },

  methods: {
    fetchProducts(){

      axios.get(`${this.windowLocation}/api/product_branch_manager`)
      
    }
  }
  
}

</script>