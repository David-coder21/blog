
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Vuex from 'Vuex';
Vue.use(Vuex);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 //Vuex

 const store = new Vuex.Store({
   state:{
     item:{}
   },
   mutations:{
     setItem(state,obj){
       state.item = obj;
     }
   }
 });



const app = new Vue({
    el: '#app',
    store,
    mounted: function(){
      console.log("ok");
      document.getElementById('app').style.display = "block";
    }
});
