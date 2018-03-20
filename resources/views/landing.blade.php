<!doctype html>

<html lang="{{ app()->getLocale() }}">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>On-Call Demand</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    </head>
    <body class="landing-page">
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
      <div class="container-fluid white-band" >
        <div class="welcome">
          
        </div>

    </div>
      <div class="container-fluid white-band" >
        <div class="landing-buttons">
          <i class="fas fa-stethoscope fa-4x" aria-hidden="true"></i>
          <h3>Resident On Call Stipend Claim Form / Formulaire de réclamations on-call</h3>
        </div>
        <div class="landing-buttons">
          <i class="fas fa-check fa-4x" aria-hidden="true"></i>
          <h3>Resident On Call Stipend Claim Form / Formulaire de réclamations on-call</h3>
        </div>

    </div>
        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('js/stipendsform.js')}}"></script>
        <script src="{{asset('js/bootstrap.js')}}"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>



    </body>
</html>
