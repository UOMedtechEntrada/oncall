import Vue from 'vue';

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);

import App from './App.vue';
import Example from './components/Example.vue';

const routes = [
  {
      name: 'Example',
      path: '/',
      component: Example
  }
];

var apiPath = "http://localhost:3000/";


new Vue({
  el: '#block-number',
  data: {
    stipends: {
      block: '1',
      options: [],
      newBlock:''
    }
  },created(){
    axios.get(apiPath+"blocks")
    .then(response => {this.stipends.options = response.data})
  }
  , methods:{
      addBlock: function(){
        axios.post(apiPath+"blocks", {
        block_identifier:this.stipends.newBlock

        })
      }
    }
}),
new Vue({
  el: '#service-name',
  data: {
    stipends: {
      serviceName: 'AANE',
    },
    options: []
  },created(){
    axios.get(apiPath+"mtd_services")
    .then(response => {this.options = response.data})
  }

}),
new Vue({
  el: '#site-name',
  data: {
    stipends: {
      siteName: 'TOH',

    },
    options: [
      { text: 'Ottawa General Hospital', value: 'TOH' },
      { text: 'Children Hospital of Eastern Ontario', value: 'Cheo' },
      { text: 'Montfort', value: 'MFT' }
    ]
  }
}),
new Vue({
  el: '#claim-type',
  data: {
    stipends:{
      claimType: '1',
      newClaim:''
    },options: [
    ]
  },created(){
    axios.get(apiPath+"claim_type")
    .then(response => {this.options = response.data})
  }, methods:{
      addClaim: function(){
        axios.post(apiPath+"claim_type", {
        name:this.stipends.newClaim

        })
      }
    }
}),
new Vue({
 el: '#claim-list',
  data: {
    options: [
    ]
  },created(){
    axios.get(apiPath+"master_claims")
    .then(response => {this.options = response.data})
  }
}),
new Vue({
  el: '#selected-earning-code',
  data: {
    options:[]
  },created(){
    axios.get(apiPath+"funding_codes?block_id=1&claim_type_id=4")
    .then(response => {this.options = response.data})
  }
}),
new Vue({
  el: '#stipends_form',
  methods:{
    addStipends: function() {
      axios.post(apiPath+"master_claims", {
        user_id: '1',
        //claim_date: this.stipendsInfo.claim_date,
        block_id: this.stipends.block,
        service_id: this.stipends.serviceName,
        site_id: this.stipends.siteName,
        claim_type_id: this.stipends.claimType,
        payment_approved: "true"
        //created_date: ""

      })
      }
  }
});

new Vue({
  el: '#earning-codes',
  data: {
    options:[]
  },created(){
    axios.get(apiPath+"funding_codes")
    .then(response => {this.options = response.data})
  }
}),
