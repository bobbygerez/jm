

import Vue from 'vue'

import DataViewer from './components/DataViewerMainCategories.vue'
import ProductDataViewer from './components/ProductDataViewer.vue'
var app = new Vue({
  el: '#app',
  components: {
    DataViewer,
    ProductDataViewer
  }
})