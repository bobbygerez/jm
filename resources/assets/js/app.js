

import Vue from 'vue'
import axios from 'axios'

var app = new Vue({
  el: '#app',
  data: {
  	rangeProduct: [
  		{ value : 50 , class: 'amount'},
  		{ value : 2000, class: 'amount2'}
  	],
  	merchantCategories: {},
  	products: {},
  	provinces : {},
	province : '',
	cities: {},
	city: '',
	barangays: {},
	brgy: '',
	cityInvisible: true,
	brgyInvisible: true,
	mainCategoryId: '',
	merchantCategoryId: '',
	merchantSubId: '',
	products: {},
	query: {
		page: 1,
		from: '',
		to: '',
		per_page: 20,
		direction: 'asc',
	},
	sortBy: ['desc', 'asc']
	,
	price_start: '',
	price_end: '',
	showNumberProducts: [10,15,20,25,30],
	windowLocation: window.location.origin + '/',

  },

  
  created(){

			this.fetchedProductData()
			this.fetchedProvinceData()

		},
		methods: {
			replaceHypen: function( string ){

				return string.replace('-', ' ')
			},
			elementClick: function(e){

				alert(e.target)
			},

			isActive: function(num){

				if(this.query.page == num)
					alert(num)
			},
			changePage: function(num){

				this.query.page = num;
				this.fetchedProductData()
			},
			next(){

				if(this.products.next_page_url){

					this.query.page++
					this.fetchedProductData()

				}
			},
			prev(){

				if(this.products.prev_page_url){
					this.query.page--
					this.fetchedProductData()
				}
			},

			fetchedProvinceData(){
				var vm = this
				axios.get(window.location.origin + '/api/provinces')
				.then(function(response){

					Vue.set(vm.$data, 'provinces', response.data.provinces)
				})
				.catch( function(response){

					console.log(response)
				})


			},

			fetchedProductData(){
				var vm = this
				var pathArray = window.location.pathname.split( '/' );
					 
					switch (pathArray.length-2){
						case 2:
							this.mainCategoryId = pathArray[pathArray.length - 1]
							break

						case 3:
							this.merchantCategoryId = pathArray[pathArray.length - 1]
							break

						case 4:
							this.merchantSubId = pathArray[pathArray.length - 1]
							break
					}


				axios.get( this.windowLocation + '/api/products' + `?mainCategoryId=${this.mainCategoryId}&merchantCategoryId=${this.merchantCategoryId}&merchantSubId=${this.merchantSubId}&provCode=${this.province}&citymunCode=${this.city}&brgyCode=${this.brgy}&per_page=${this.query.per_page}&page=${this.query.page}&sortBy=${this.query.direction}&priceStart=${this.price_start}&priceEnd=${this.price_end}`)
					.then(function(response){
						
						Vue.set(vm.$data, 'merchantCategories', response.data.merchantCategories);
						Vue.set(vm.$data, 'products', response.data.products) 
					})
					.catch(function(response){
						console.log(response)
					})
			}

		},


		watch: {

			rangeProduct : {
				handler: function(val, oldVal){

					alert('somethingchange')
				},
				deep: true
			},
			query: {

				handler: function(val, oldVal){

					this.fetchedProductData()
				},

				deep: true

			},

			province: function(){

				var vm = this

				if(this.province != '')
					this.cityInvisible = false

				else
					this.cityInvisible = true
					this.brgyInvisible = true

				if(this.province != '')
					axios.get(window.location.origin + '/api/cities/' + this.province)
					.then(function(response){

						Vue.set(vm.$data, 'cities', response.data.cities);
					})
					.catch( function(response){

						console.log(response)
					})

				
			},

			city: function(){

				if(this.city != '')
					this.brgyInvisible = false
				else
					this.brgyInvisible = true
				var vm = this
				axios.get(window.location.origin + '/api/barangays/' + this.city)
				.then(function(response){

					Vue.set(vm.$data, 'barangays', response.data.barangays)
				})
				.catch( function(response){

					console.log(response)
				})

				this.fetchedProductData()
			},

			brgy: function(){

				this.fetchedProductData()
			}


		}
})
