<!doctype html>
<html lang="{{ config('app.locale') }}" ng-app="teste" id="teste">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

     <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>

    <script type="text/javascript" src="js/moment.js"></script>

    <script type="text/javascript" src="js/TesteController.js"></script>
    <script type="text/javascript" src="js/service/CourseService.js"></script>
    <script type="text/javascript" src="js/filter/customDate.js"></script>
    <style type="text/css">
        

        .details {
          position: relative;
          top: -100px;
        }

        .details .card-title {
          padding-bottom: 20px;
        }

        .details .nav-content {
          height: 216px;
        }

        .details .list li {
          vertical-align:middle;
          display: flex;
        }

        .details .list li i{
          margin-right: 15px;
          margin-bottom: 10px;
        }
        .details .list li img {
          margin-right: 20px;
          width: 32px;
          height: 32px;
        }

        .text-grey {
          color: black;
        }

        nav .input-field {
          border-radius: 10px;
          margin-top: 10px;
        }

        nav .input-field input.search {
          margin-bottom: 0px;
        }

        nav .input-field i {
          margin-top: -10px;
        }


      </style>
  </head>
  <body ng-controller="TesteController" id="TesteController">
    
    <div ng-show="details">
      <nav>
        <div class="nav-wrapper light-blue">
          <a href="#" class="brand-logo left">Cursos</a>

          <div class="row">
            
            <a class="right" href="javascript:void(0)" ng-show="!showSearch" ng-click="showSearch = true">
                <i class="material-icons left">search</i>
              </a>

            <div class="col offset-l4 l4 s8 offset-s4">
                <div class="input-field blue" ng-show="isDesktop || showSearch">
                  <input id="search" type="search" class="search" required ng-model="textSearch" placeholder="Pesquisa" ng-blur="showSearch = isMobile? false : true">
                  <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                  <i class="material-icons" ng-show="isDesktop">close</i>
                </div>
            </div>
          </div>        

        </div>
      </nav>

        <div class="container">

          <div class="row">
            
            <div class="col s12 m4" ng-repeat="item in listCourses | filter:textSearch">
              
              <div class="card white-grey lighten-4">
                
                <div class="card-content">
                  <small>{{ item.category }}</small>
                  <p><br>
                    <a href="" ng-click="viewDetails(item)" class="text-grey">
                      {{ item.title }}
                    </a>
                  </p>
                  <small>{{ item.address.city }}</small>
                </div>
            
                <div class="card-action">
                  <span class="">{{ item.start | customDate }}<i class="material-icons right">today</i></span>
                </div>

              </div>
            </div>

          </div>

        </div>
    </div>

    <div ng-show="!details">
      <nav class="nav-extended">
        <div class="nav-wrapper light-blue darken-2">
          


          <div class="nav-content">
            <ul class="left hide-on-med-and-down">
              <li>
                <a class="" href="javascript:void(0)" ng-click="details = true">
                  <i class="material-icons left">arrow_back</i>
                </a>
              </li>
            </ul>

            <br> <br> <br> <br>
            <br> <br> <br> <br>
            <br> <br> <br> <br>
          </div>

        </div>
      </nav>

      <div class="container details">


        <div class="row">
          <div class="col s12 m12">
            
            <div class="card white-grey lighten-4">
              
              <div class="card-content">
                <span class="card-title">{{ itemDetail.title }}</span>
                <p class="text-grey">
                  {{ itemDetail.description }}
                </p>


                <div class="list">
                  <ul>
                    <li> <i class="material-icons">today</i> {{ itemDetail.start | customDate }} </li>
                    <li> <i class="material-icons">query_builder</i> De 14:30 as 16:00 - 1:30h </li>
                    <li> <i class="material-icons">room</i> <a target="_new" href="http://maps.google.com"> {{ itemDetail.address.street }}, {{ itemDetail.address.number }}, {{ itemDetail.address.neighborhood }} - {{ itemDetail.address.city }} </a></li>
                    <li> <i class="material-icons">send</i> R$ {{ itemDetail.price }} </li>
                    <li> <i class="material-icons">label</i> {{ itemDetail.category }} </li>
                    <li> <img src="{{ itemDetail.consultant.avatar }}" alt="" class="circle"> {{ itemDetail.consultant.name }} </li>
                  </ul>
                </div>

                <div class="row">
                  <div class="col m5"></div>
                  <a class="waves-effect waves-light btn orange accent-3">INSCRIÇÃO</a>
                </div>

            </div>
          </div>

        </div>
      </div>
    </div>

  </body>
</html>
