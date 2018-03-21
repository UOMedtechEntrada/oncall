<!doctype html>

<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}"/>
        <meta name="csrf-token" content="{{ csrf_token() }}"/>
        <title>On-Call Demand</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.3/chosen.css">
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


      <div class="container" id="stipends_form">
        <div class="alert alert-warning ">
          @{{ message }}
        </div>
        <div class="alert alert-success ">
          Your form has been successfully submitted
        </div>
      <form v-on:submit.prevent="addStipends" method="POST" >

        <div class="form-group"> <!-- Name field -->
          <label class="control-label " for="name">Resident Name / Nom du résident</label>
          <input class="form-control" id="name" name="name" type="text" value ="Chantal Michaud" readonly/>
        </div>

        <!-- <div class="form-group"> <!-- Email field -->
          <!-- <label class="control-label requiredField" for="submission-date">Claim Submission Date / Date de la demande<span class="asteriskField">*</span></label>
           <input class="form-control" value ="today()" v-model="stipendsInfo.created_date" id="submission-date" name="submission-date" type="date"/>
        </div> -->

        <div class="form-group" > <!-- Subject field -->
          <label class="control-label " for="block-number">Block Number / Numéro de bloc</label>
          <!--<input class="form-control" id="block-number" name="block-number" type="select"/>-->
          <select v-model="stipends.block" name="block_number" id="block-number" v-on:change="codeChange()" class="chosen-select">
              <option v-for="option in stipends.options" v-bind:value="option.block_number">
                @{{ option.block_identifier }}
              </option>
          </select>
        <!--  <span>Selected: @{{ stipends.block }}</span>-->

        </div>

        <div class="form-group" > <!-- Message field -->
          <label class="control-label " for="service-name">MTD Service Name / Nom du service</label>
          <select v-model="stipends.serviceName" id="service-name" class="chosen-select">
              <option v-for="option in serviceOptions" v-bind:value="option.service_identifier">
                @{{ option.service_name }}
              </option>

          </select>
          <!--<span>Selected: @{{ stipends.serviceName}}</span>-->
        </div>

        <div class="form-group" > <!-- Message field -->
          <label class="control-label " for="site-name">MTD Site Name / Nom du site</label>
          <select v-model="stipends.siteName" id="site-name" class="chosen-select">
              <option v-for="option in siteOptions" v-bind:value="option.id">
              @{{ option.name }}
              </option>
          </select>
        <!--  <span>Selected: @{{ stipends.siteName }}</span> -->
        </div>
        <div class="form-group"> <!-- Message field -->
          <label class="control-label " for="claim-date">Claim Date / Date de réclamation</label>
          <input class="datepicker" v-model="stipends.claimDate" id="claim-date"  name="claim-date" type="text"></input>
        </div>
        <div class="form-group" > <!-- Message field -->
          <label class="control-label " for="claim-type">Claim Type / Type de réclamation</label>
          <select v-model="stipends.claimType"  id="claim-type" v-on:change="codeChange" class="chosen-select">
              <option v-for="option in claimTypeOptions" v-bind:value="option.id">
                @{{ option.name }}
              </option>
          </select>
        <!--  <span>Selected: @{{ stipends.claimType }}</span> -->
        </div>
        <!-- <div class="form-group" id="selected-earning-code"> <!-- Message field -->
          <!-- <label class="control-label " for="earing-code">Earning Code / Code de rénumération</label>
          <input class="form-control"  name="earning-code" v-for="option in earningOptions" type="text" readonly v-bind:value="option.funding_identifier"></input>
        </div> -->

        <div class="form-group">
          <button class="btn btn-primary " onclick=""  name="submit" type="submit">Submit</button>
        </div>
        <div v-for="day in minimumDays" >@{{day.days}}</div>
      </form>
    </div>
    <script>
           window.Laravel = <?php echo json_encode([
               'csrfToken' => csrf_token(),
                    ]); ?>
          </script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.3/chosen.jquery.js"></script>

    <script src="{{URL::asset('js/app.js')}}"></script>
    <!--<script src="{{URL::asset('js/bootstrap.js')}}"></script>-->

<script>
  $(document).ready(function () {

           $(".chosen-select").chosen();


       });

</script>
    </body>
</html>
