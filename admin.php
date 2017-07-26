<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <style>
        div.container {
            color: black;
        }

        div.navigation {
            margin-bottom: 70px;
        }

        body {
            margin-top: 20%;
        }
    </style>
    <title>Sign In</title>
</head>
<body style="background-color:#6E6E6E;">
<div class="container">
    <form class="well form-horizontal" action="login.php" method="post" id="contact_form">
        <fieldset>
            <legend>Sign In</legend>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label">E-Mail</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input name="email" placeholder="E-Mail Address" class="form-control" type="text" autofocus>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Password</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input name="password" placeholder="Password" class="form-control" type="password">
                    </div>
                </div>
            </div>
            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-lg btn-block btn-primary">Send
                    </button>
                </div>
            </div>

        </fieldset>
    </form>
</div>
</div>

</body>
