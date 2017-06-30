<template>
<div class="google-maps">
  <gmap-map
    :center="center"
    :zoom="zoom"
    style="width: 700px; height: 400px"
    :resize-bus="customBus"
  >
    <gmap-marker
      :position="markers.position"
      :title="merchant.name"
      :clickable="true"
      :draggable="true"
      @dragend="dragend($event.latLng)"
      :center="center"
      @click="gmapMakerClick"
    >
        <gmap-info-window 
      
      :content="merhcantInfo"
      :opened="infoWinOpen"
      @closeclick="infoWinOpen=false"
      >

      </gmap-info-window>


    </gmap-marker>
  
  </gmap-map>
</div>
</template>

<script>
  /////////////////////////////////////////
  // New in 0.4.0
  import * as VueGoogleMaps from 'vue2-google-maps';
  import Vue from 'vue';

  Vue.use(VueGoogleMaps, {
    load: {
      key: 'AIzaSyBVrbXla_-auHKFSjrpcbp1STuQ18JFb78',
      v: '3.28',
      // libraries: 'places', //// If you need to use place input
    }
  });

  export default {
    data () {
      return {
        center: {lat: 14.115286, lng: 120.962112},
        markers: {
          position: {lat: 14.115286, lng: 120.962112},
          title: "<a href='" + window.location.origin +"/dashboard/458047219#/'>Sample 1</a>"
        }

        ,
         customBus: new Vue(),
        infoWinOpen: true,
        zoom: 7

      }
    },
    computed: {

        merhcantInfo(){

            return "<strong>" + this.merchant.name + "</strong><br /><a href='"+ this.merchant.website +"'>" + this.merchant.website + "</a><br />" + this.merchant.phone_no + "<br />" + this.merchant.mobile_no
        },
        merchant(){

            return this.$store.getters.merchant
        },
        lat(){

          if(this.merchant.address != null){
            return parseFloat(this.merchant.address.lat)
          }
          return parseFloat(14.115286)
        },
        lng(){

          if(this.merchant.address != null){
            return parseFloat(this.merchant.address.long)
          }
          return parseFloat(120.962112)
        }
    },
    created(){
      bus.$on('updateBus', () => {
          this.updateBus()
          this.updateMarker()
          this.zoom = 6

      });
    },
    methods: {
      updateMarker(){

        var latLng = {lat: this.lat, lng: this.lng}
         this.markers.position = latLng
         this.center = latLng
         this.$store.commit('coordinates', latLng)
         
      },
      gmapMakerClick(){
        this.infoWinOpen = true
      },
      dragend(latLng){
        this.$store.commit('coordinates', { lat: latLng.lat(), long: latLng.lng() });
      },
      updateBus() {
        this.customBus.$emit('resize');
      }
    }
  }
</script>

<style type="text/css">
  
    .google-maps {
        position: relative;
        padding-bottom: 5%; // This is the aspect ratio
        height: 0;
        overflow: hidden;
        margin-left: 7%;
    }
    .google-maps iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100% !important;
        height: 100% !important;
    }
</style>
