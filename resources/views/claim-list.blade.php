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
      <div class="container" id="claim-list">
      
        <ul class="list-group">
    <li class="list-group-item" v-for="option in claimOptions">@{{option.id}}</li>
  </ul>
    </div>
        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('js/stipendsform.js')}}"></script>
        <script src="{{asset('js/bootstrap.js')}}"></script>


    </body>
</html>
