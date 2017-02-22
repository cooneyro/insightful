<!DOCTYPE html>

<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width,initial-scale =1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="Dashboard.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


    <script src="../assets/js/Overview.js"></script>

</head>

<body>
<!-- <div class="page-header">
     <h1> Insightful </h1>

   </div> -->

<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header ">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Insightful</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Home<span class="sr-only">(current)</span></a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false"> Campaigns <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Campaign 1</a></li>
                        <li><a href="#">Campain 2</a></li>

                        <li role="separator" class="divider"></li>
                        <li><a href="#"> New Campaign</a></li>
                        <!-- <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li> -->
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div><!-- /.navbar-collapse -->


    </div>

</nav>


<div class="row ">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="jumbotron">
            <h1>Dashboard</h1>
            <h3> An overview of your business's performance</h3>
            </br>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10">
            <div class="well" id="well1">

                <h1>Campaign Overview</h1>

            </div>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row">
        <br>
        <div class="col-lg-10">
            <h3>Overall Satisfaction:</h3>
            <br>
            <div class="progress">
                <div class="progress-bar progress-bar-success" style="width: 65%">

                    65%

                    <span class="sr-only">65% Complete (success)</span>
                </div>
                <div class="progress-bar progress-bar-danger" style="width: 35%">
                    35%
                    <span class="sr-only">35% Complete (danger)</span>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- <div class=row>
    <div class="col-xs-10 col-xs-offset-1">
        <div id="bar_chart">
        </div>
    </div>
</div>

<div class=row>
    <div class="col-xs-10 col-xs-offset-1">
        <div id="pie_chart">
        </div>
    </div>
</div> !-->


<div class=" container-fluid">
    <div class="row">
        <div class="col-lg-8">
            <h3>Specific Areas:</h3>
            <br>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Rooms</h3>
                </div>
                <div class="panel-body">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                             aria-valuemax="100" style="width: 60%;">
                            60%
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<div class=" container-fluid">
    <div class="row">
        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"> Staff</h3>
                </div>
                <div class="panel-body">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                             aria-valuemax="100" style="width: 60%;">
                            60%
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<div class=" container-fluid">
    <div class="row">
        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"> Food</h3>
                </div>
                <div class="panel-body">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                             aria-valuemax="100" style="width: 60%;">
                            60%
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <div class="well" id="well1">
                <h1>Trend of Satisfaction</h1>
            </div>
        </div>
    </div>
</div>


<div class="col-xs-10 col-xs-offset-1">
    <div id="curve_chart"></div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>


</body>


</html>