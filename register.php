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
    <link href="css/register.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<?php
$logged_flag=false;
session_start();
//如果用户未登录，即未设置$_SESSION['user_id']时，执行以下代码
if(isset($_SESSION['user_id'])){
    $logged_flag=true;
}
?>

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
                <li class="active"><a href="#">Event<span class="sr-only">(current)</span></a></li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" data-toggle="modal" data-target="#myModal">
                        <?php
                        if($logged_flag){
                            echo 'My Page';
                        }else{
                            echo 'Log In';
                        }
                        ?>
                    </a>
                </li>
                <li><a href="#">
                        <?php
                        if($logged_flag){
                            echo 'Log Out';
                        }else{
                            echo 'Sign Up';
                        }
                        ?>
                    </a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container">
    <div class="main-container">
        <h1 class="title">Sign Up</h1>
        <hr/>
        <div class="col-md-2"></div>
        <div class="col-md-8" style="padding-left: 0px;">
            <div class="panel panel-default">
                <div class="panel-heading" style="font-size: 20px;">Please enter your information</div>
                <div class="panel-body">
                    <form action="register_after.php" method="post">
                        <div class="form-group">
                            <label for="inputEmail">Email:</label>
                            <input name="email" type="email" class="form-control" id="inputEmail" placeholder="user@email.com">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Password:</label>
                            <input name="password" type="password" class="form-control" id="inputPassword" placeholder="password">
                        </div>

                        <div class="form-group">
                            <label for="inputFullName">Full Name:</label>
                            <input  name="name" type="text" class="form-control" id="inputFullName" placeholder="full name">
                        </div>

                        <div class="form-group">
                            <label for="inputAddress">Address:</label>
                            <input name="address" type="text" class="form-control" id="inputAddress" placeholder="address">
                        </div>
                        <div class="form-group">
                            <label for="inputPhone">Phone:</label>
                            <input name="phone" type="text" class="form-control" id="inputPhone" placeholder="phone number">
                        </div>
                        <div class="form-group">
                            <label for="inputBirthday">Birthday:</label>
                            <input name="birthday" type="text" class="form-control" id="inputBirthday" placeholder="YYYYMMDD">
                        </div>


                        <label class="radio-inline">
                            <input type="radio" name="sex" id="inlineRadio1" value="0">Male
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="sex" id="inlineRadio2" value="1">Female
                        </label>
                        <br/><br/>
                        <button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
                        <button id="btn-confirm" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal-scan">Confirm</button>
                        <button type="button" class="btn btn-default btn-lg">Back</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">

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

<form id="getState" action="https://sapi.mysign.sdnp.ntt.ocn.ne.jp/pki/state" method="post">
    <!--    <input type="hidden" name="scope" value="openid"/>-->
    <!--    <input type="hidden" name="response_type" value="code"/>-->
    <input type="hidden" name="client_id" value="JS3001"/>
    <input type="hidden" name="service_id" value="S001"/>
    <!--    <input type="hidden" name="redirect_uri" value="https://153.149.165.198/rp/register"/>-->
    <!--    <input type="hidden" name="signature_data_type" value="text"/>-->
    <!--    <input type="hidden" name="signature_data_source" value="param"/>-->
    <!--    <input type="hidden" name="signature_data" value="test"/>-->

</form>

<!-- 模态框（Modal） -->
<div class="modal fade" id="modal-scan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Please scan your my number card and enter the password</h4>
            </div>
            <div class="modal-body">
                <div style="text-align: center;">
                    <img src="img/cardscan.jpg"">
                </div>
                <form>
                    <div class="form-group">
                        <label for="inputPassword">Password:</label>
                        <input type="password" class="form-control" id="inputPassword" placeholder="password">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="btn-modal-confirm" type="button" class="btn btn-primary btn-lg" data-dismiss="modal">Confirm</button>
                <button type="button" class="btn btn-default btn-lg" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>

<input type="hidden" id="hasConfirmed" value="0"/>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="plugin/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

<script>
    $(function() {
        $("#btn-confirm").click(function () {
//            $('#getState').submit();


        });

        $("#btn-modal-confirm").click(function () {
            $('#inputFullName').val('田中　祐樹');
            $('#inputAddress').val('滋賀県大津市松が丘6-1-1');
            $('#inputBirthday').val('19930601');
            $('#inputSex').val('123');
            $('#inlineRadio1').attr("checked",true);

        });

    });
</script>
</body>
</html>