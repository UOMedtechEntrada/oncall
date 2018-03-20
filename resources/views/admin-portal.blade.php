<!doctype html>

<html lang="{{ app()->getLocale() }}">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>On-Call Demand</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          <a class="navbar-brand" href="#" alt="Faculty of medicine"> <img id="uottawa-logo" src="https://med.uottawa.ca/sites/all/themes/custom/uottawa_zen_assets/global_header/images/uOttawa-logo.png"></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

      <div class="container" id="admin-container">
        <div class="row" id="claim-list" style="backgound-color:#fff;">
          <div class="col-md-4">
            <div class="call-to-action" style="background-color: rgb(48, 48, 48)">
              <div><p class="text-center number">@{{claimOptions.length}}</p>
                  <p class="text-center text"> <span class="glyphicon glyphicon-th-list"></span>Claims</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" >
            <div class="call-to-action" style="background-color: rgb(67, 67, 67)"><p class="text-center number">@{{accepted.length}}</p>
                <p class="text-center text"><span class="glyphicon glyphicon-ok"></span> Approved</p></div>
          </div>
          <div class="col-md-4">
            <div class="call-to-action" style="background-color: rgb(100, 100, 100)"><p class="text-center number">@{{rejected.length}}</p>
            <p class="text-center text"><span class="glyphicon glyphicon-remove"></span> Rejected</p></div>
          </div>
        </div>
      <!--  <ul class="list-group">
    <li class="list-group-item" v-for="option in options">@{{option.number}}</li>


  </ul>-->

<div class="row" style="background:#fff; padding:10px; margin-top:3rem ">
  <h3> Claims </h3>
  <script type="text/x-template" id="grid-template">
    <table>
      <thead>
        <tr>
          <th v-for="key in columns"
            @click="sortBy(key)"
            :class="{ active: sortKey == key }">
            @{{ key | capitalize }}
            <span class="arrow" :class="sortOrders[key] > 0 ? 'asc' : 'dsc'">
            </span>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="entry in filteredData">
          <td v-for="key in columns">
            @{{entry[key]}}
          </td>
        </tr>
      </tbody>
    </table>
  </script>

  <!-- demo root element -->
  <div id="demo">
      <form id="search" style="float:left; margin:10px;">
        Search 
        <input name="query" v-model="searchQuery">
      </form> 
      <button style="float:left; margin-left:20px;"  class="btn btn-primary"> Print </button>
      <button style="float:left; margin-left:20px; " class="btn btn-primary"> Send </button>
    <demo-grid
      :data="gridData"
      :columns="gridColumns"
      :filter-key="searchQuery">
    </demo-grid>
  </div>

</div>


      <!-- <div class="row" style="margin-top:2rem;" >
        <div class="col-md-4" style="background-color:#fff; padding:1rem;">
        <h3>
          Blocks
        </h3>
        <div class="card-body" id="block-number">
          <ul class="list-group" >
            <li class="list-group-item" v-for="option in stipends.options">@{{ option.block_identifier }} <button style="float:right;" > Remove</button></li>
            <li>  <input v-model="stipends.newBlock"></input> </li>
          </ul>
          <a href="#" v-on:click="addBlock" class="btn btn-primary">Add</a>
        </div>
      </div>
      </div>
      <div class="card" >
        <div class="card-header">
          Claim Types
        </div>
        <div class="card-body" id="claim-type">
          <ul class="list-group" >
            <li class="list-group-item" v-for="option in options">@{{ option.name }}</li>
            <li>  <input v-model="stipends.newClaim"></input> </li>

          </ul>

          <a href="#" class="btn btn-primary" v-on:click="addClaim">Add</a>
        </div>
      </div>
      <div class="card" >
        <div class="card-header">
          Funding Codes
        </div>
        <div class="card-body">
          <ul class="list-group" id="earning-codes">
            <li class="list-group-item" v-for="option in options">@{{ option.funding_identifier }}</li>
          </ul>
          <a href="#" class="btn btn-primary">Add</a>
        </div>
      </div>
      <div class="card" >
        <div class="card-header">
          MTD-Services
        </div>
        <div class="card-body">
          <ul class="list-group" id="service-name">
            <li class="list-group-item" v-for="option in options">@{{ option.service_name }} </li>
          </ul>
          <a href="#" class="btn btn-primary">Add</a>
        </div>
      </div>
      <div class="card" >
        <div class="card-header">
          Days for rule
        </div>
        <div class="card-body">
          <div>
            <input type="number" value="90" size="3"></input> Days
          </div>
          <a href="#" class="btn btn-primary">Change</a>
        </div>
      </div> -->

  <div class="row"  style="backgound-color:#fff;margin-top:2rem;">
    <div class="col-md-4">
      <div class="call-to-action" style="background-color: #8f001a">
        <div >
          <p class="text-center text"  > <span class="glyphicon glyphicon-th-large"></span></p>
            <p class="text-center text"> Blocks</p>
        </div>
      </div>
    </div>
    <div class="col-md-4" >
      <div class="call-to-action" style="background-color: #8f001a">
          <p class="text-center text"><span class="glyphicon glyphicon-ok"></span> Claim Type </p></div>
    </div>
    <div class="col-md-4">
      <div class="call-to-action" style="background-color:#8f001a">
      <p class="text-center text"><span class="glyphicon glyphicon-remove"></span> Funding </p></div>
    </div>
  </div>



  <div class="row"  style="backgound-color:#fff; margin-top:2rem;">
    <div class="col-md-4">
      <div class="call-to-action" style="background-color: #8f001a">
        <div>
            <p class="text-center text"> <span class="glyphicon glyphicon-th-list"></span>Services</p>
        </div>
      </div>
    </div>

    <div class="col-md-4" id ="xDayRule">
      <div class="call-to-action" style="background-color: #8f001a" ><input v-for="rule in rules"  style="width:100%; background:none; "  v-model="days" v-bind:value="rule.days" enabled ="false" class="text-center number"></input>
      <p class="text-center text"><span class="glyphicon glyphicon-remove"></span> Day Rule </p></div>
        <a href="#" v-on:click="updateDays" class="btn btn-primary">Add</a>
    </div>
  </div>



  </div>

        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('js/stipendsform.js')}}"></script>
        <script src="{{asset('js/bootstrap.js')}}"></script>


    </body>
</html>
