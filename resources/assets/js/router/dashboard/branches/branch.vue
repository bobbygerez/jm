<template>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="row">
            <div class="header">
              <div class="col-lg-12">
                  <div class="content table-responsive table-full-width">
                    
                    <branch-table></branch-table>
                  </div>
              </div>
            </div><!--header end -->
          </div>

          

        </div>
      </div>

    </div>

  </div>
</template>

<script type="text/javascript">
  import branchTable from '../branches/branchTable.vue'

  export default {

    components: {
      branchTable
    },
    created(){
        this.$store.commit('title', 'All Branches');
    }
  }
</script>



