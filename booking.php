<?php
    require_once "DBManager.php";

    const TITLE = "title";
    const CITY = "city";
    const ADDRESS = "address";
    const TIME_START = "time_start";
    const TIME_END = "time_end";
    const PRICE = "price";
    const NUMBER = "number";
    const CONTENT = "introduction";

    isset($_GET["event_id"]) or die("Unexpected parameter");
    $event_id = $_GET["event_id"];
    $conn = DBManager::getInstance()->getConnection();
    $sql = "select * from Event where id = $event_id";
    $result = $conn->query($sql) or die("No event found");
    $result->num_rows > 0 or die("No event found");
    $row = $result->fetch_assoc();
    $dateTime = $row[TIME_START];
    $startDate = date("Y-m-d", strtotime($dateTime));
    $startTime = date("H:i:s", strtotime($dateTime));
    $dateTime = $row[TIME_END];
    $endTime = date("H:i:s", strtotime($dateTime));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="plugin/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/booking.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-fixed-top navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container">
    <div class="main-container">
        <h1 class="title">Event Detail</h1>
        <hr/>
        <div class="col-md-4 left-container" style="padding-left: 0px;">
            <div class="panel panel-default">
                <div class="panel-heading" style="font-size: 20px;">Basic Information</div>
                <div class="panel-body">
                    <ul style="list-style-type: none;font-size: 20px">
                        <li>Event: <?php echo $row[TITLE] ?></li>
                        <li>City: <?php echo $row[CITY] ?></li>
                        <li>Location: <?php echo $row[ADDRESS] ?></li>
                        <li>Number: <?php echo $row[NUMBER] ?></li>
                        <li>Date: <?php echo $startDate ?></li>
                        <li>Time: <?php echo $startTime . " - " . $endTime ?></li>
                        <li>Price: <?php echo "$" . $row[PRICE] ?></li>
                    </ul>
                </div>
            </div>
            <button class="btn btn-primary btn-lg" style="width: 100%;">
                Book Now
            </button>
        </div>
        <div class="right-container col-md-8">
            <img src="img/fullimage1.jpg">
            <div class="detail">
                <p>
                <?php
                    echo $row[CONTENT];
                ?>
                </p>
            </div>

        </div>
    </div>
</div>

<div style="padding-left: 80px;padding-right: 80px;">
    <hr/>
</div>

<footer>
    <ul class="share-group">
        <li>item1</li>
        <li>item2</li>
        <li>item3</li>
        <li>item4</li>
        <li>item5</li>
    </ul>
    <div class="copy">
        &copy;Contact Information: <a href="mailto:tammytangg@gmail.com">tammytangg@gmail.com</a>
    </div>
</footer>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="plugin/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script>
    $(function(){
        $('.carousel').carousel();
    });
</script>
</body>
</html>