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

//var apiPath = "http://localhost:3000/";
var apiPath = "http://oncall.localhost/";

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
      },
      removeBlock: function(block_identifier){
        alert(this.block_identifier);
        axios.delete(apiPath+"blocks", {
        block_identifier:this.block_identifier
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
    siteOptions: [
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

      }).then(
        this.$swal("Good job!", "You clicked the button!", "success"))
      }
    }
}),

new Vue({
 el: '#claim-list',
  data: {
    claimOptions: [
    ]
  },created(){
    axios.get(apiPath+"master_claims")
    .then(response => {this.claimOptions = response.data})
  }, computed: {
    accepted: function() {
      return this.claimOptions.filter(function(i) {
        //console.log(i)
        return i.payment_approved === 'true'
      })
    },
    rejected: function() {
      return this.claimOptions.filter(function(i) {
        //console.log(i)
        return i.payment_approved == 'false' ||i.payment_approved == 'FALSE'
      })
    }
  }
}),

new Vue({
 el: '#xDayRule',
  data: {
    rules: [
    ],
    days: ''

  },
  created(){
    axios.get(apiPath+"rules")
    .then(response => {this.rules = response.data});
  },
  methods:{
      updateDays: function() {
        axios.put(apiPath+"rules/1",{
          type:'xdays',
          days: this.days
        });

        }
  }
}),

new Vue({
  el: '#earning-codes',
  data: {
    options:[]
  },created(){
    axios.get(apiPath+"funding_codes")
    .then(response => {this.options = response.data})
  }
}),

new Vue({
  el: '#stipends_form',
  data: {
    stipends: {
      block: '1',
      blockOptions: [],
      newBlock:'',
      serviceName: '',
      siteName:'',
      claimType: '',
      claimDate:'',
      createdDate:'',
      payment_approved:'true',
      user_id: '1',
      reason:''

    },
    totals: {
      checkNBlockRuleActualList: [],
      checkNBlockRuleMaxValue:[],
      checkInHospitalClaimRuleActualList:[],
      checkInHospitalClaimRuleMaxValue:''

    },
    serviceOptions: [],
    earningOptions:[],
    claimTypeOptions:[],
    earningOptions:[],
    siteOptions:[],
    master:[],
    message:'',
    minimumDays:[]



  },

  created(){
    $('.alert-success').hide();
    $('.alert-warning').hide();
    axios.get(apiPath+"rules?id=1").then(response => {this.minimumDays = response.data});
    axios.get(apiPath+"blocks")
    .then(response => {this.stipends.blockOptions = response.data});
    axios.get(apiPath+"mtd_services")
    .then(response => {this.serviceOptions = response.data});
    axios.get(apiPath+"claim_type")
    .then(response => {this.claimTypeOptions = response.data});
    axios.get(apiPath+"mtd_sites")
    .then(response => {this.siteOptions = response.data});


    axios.get(apiPath+"funding_codes?block_id="+this.stipends.block+"&claim_type_id="+this.stipends.claimType)
    .then(response => {this.earningOptions = response.data});
    axios.get(apiPath+"master_claims")
    .then(response => {this.master = response.data});

    axios.get(apiPath+"master_claims?block_id="+this.stipends.block+"&service_id="+this.stipends.serviceName+"&site_id="+this.stipends.siteName).then(response => {this.totals.checkNBlockRuleActualList = response.data});
    axios.get(apiPath+"mtd_services?service_identifier="+this.stipends.serviceName).then(response => {this.totals.checkNBlockRuleMaxValue = response.data});
    axios.get(apiPath+"master_claims?block_id="+this.stipends.block+"&user_id="+this.stipends.user_id).then(response => {this.totals.checkInHospitalClaimRuleActualList = response.data});


  },
  mounted(){

    this.dateLimit();


  },
  methods:{

    addStipends: function() {

      this.saveData();
      this.checkNBlockRule();
      this.checkInHospitalClaimRule();
      axios.post(apiPath+"master_claims", {
        user_id: this.stipends.user_id,
        claim_date: this.stipends.claimDate,
        block_id: this.stipends.block,
        service_id: this.stipends.serviceName,
        site_id: this.stipends.siteName,
        claim_type_id: this.stipends.claimType,
        payment_approved: this.stipends.payment_approved,
        created_date: new Date(),
        reason: this.stipends.reason
      })

    },
    saveData: function(){
      //$('.alert-success').show();
      console.log(this.stipends.payment_approved);
       axios.get(apiPath+"master_claims?block_id="+this.stipends.block+"&service_id="+this.stipends.serviceName+"&site_id="+this.stipends.siteName).then(response => {this.totals.checkNBlockRuleActualList = response.data});
       axios.get(apiPath+"mtd_services?service_identifier="+this.stipends.serviceName).then(response => {this.totals.checkNBlockRuleMaxValue = response.data});
       axios.get(apiPath+"master_claims?block_id="+this.stipends.block+"&user_id="+this.stipends.user_id).then(response => {this.totals.checkInHospitalClaimRuleActualList = response.data});
       var value;
       for (value of this.totals.checkNBlockRuleMaxValue){

       }
    },
    dateLimit: function(){
      var minDays;
      var minimumDays = this.minimumDays



      console.log(minimumDays);
      $('.datepicker').datepicker({
          dateFormat: 'dd/mm/yy',
          maxDate: 0,
          minDate:-6

      });


    },
    checkNBlockRule: function(){

      var actualValue = this.totals.checkNBlockRuleActualList.length;
      var maxValue = this.totals.checkNBlockRuleMaxValue.service_resident_count;

      if ((actualValue+1) > maxValue){
        $('.alert-warning').show();
        console.log(this.stipends.payment_approved);
        this.stipends.reason = "The total number of on-call claims for one service at one site for one block exceeds the Max value";
        this.message = "Your claim has been sent and will be reviewed shorty.";
      }
    },

    checkInHospitalClaimRule: function(){

      var InHospitalClaimTotal = this.totals.checkInHospitalClaimRuleActualList.length;
      //axios.get(apiPath+"mtd_services?block_id="+this.stipends.block).then(response => {this.checkInHospitalClaimRuleMaxValue = response.data});
      var inHospitalMaxValue = 7;
      var outHospitalMaxValue = 10;

      if(this.stipends.claimType != 1){
         if(InHospitalClaimTotal+1 > outHospitalMaxValue){
            $('.alert-warning').show();
            this.stipends.reason = "Resident has made too many out-of-hospital claims";
              this.message = "Your claim has been sent and will be reviewed shorty.";
         }
      } else {
          if(InHospitalClaimTotal+1 > inHospitalMaxValue){
            $('.alert-warning').show();
            this.stipends.reason = "Resident has made too many in-hospital claims";
              this.message = "Your claim has been sent and will be reviewed shorty.";
          }
      }
    }
  }, computed:{
      codeChange: function(){
        axios.get(apiPath+"funding_codes?block_id="+this.stipends.block+"&claim_type_id="+this.stipends.claimType)
        .then(response => {this.earningOptions = response.data})
      }


}
}),
Vue.component('demo-grid', {
  template: '#grid-template',
  props: {
    data: Array,
    columns: Array,
    filterKey: String
  },
  data: function () {
    var sortOrders = {}
    this.columns.forEach(function (key) {
      sortOrders[key] = 1
    })
    return {
      sortKey: '',
      sortOrders: sortOrders
    }
  },
  computed: {
    filteredData: function () {
      var sortKey = this.sortKey
      var filterKey = this.filterKey && this.filterKey.toLowerCase()
      var order = this.sortOrders[sortKey] || 1
      var data = this.data
      if (filterKey) {
        data = data.filter(function (row) {
          return Object.keys(row).some(function (key) {
            return String(row[key]).toLowerCase().indexOf(filterKey) > -1
          })
        })
      }
      if (sortKey) {
        data = data.slice().sort(function (a, b) {
          a = a[sortKey]
          b = b[sortKey]
          return (a === b ? 0 : a > b ? 1 : -1) * order
        })
      }
      return data
    }
  },
  filters: {
    capitalize: function (str) {
      return str.charAt(0).toUpperCase() + str.slice(1)
    }
  },
  methods: {
    sortBy: function (key) {
      this.sortKey = key
      this.sortOrders[key] = this.sortOrders[key] * -1
    }
  }
})

// bootstrap the demo
var demo = new Vue({
  el: '#demo',
  data: {
    searchQuery: '',
    gridColumns: ['id', 'payment_approved', 'created_date'],
    gridData: [

    ]
  },created(){
    axios.get(apiPath+"master_claims")
    .then(response => {this.gridData = response.data})
  },
  computed:{
    clickClaims:function(){
      this.searchQuery = "";

    },
    clickApproved:function(){
      this.searchQuery = "true";
  },
  clickDeclined:function(){
    this.searchQuery = "false";
}
}
})
