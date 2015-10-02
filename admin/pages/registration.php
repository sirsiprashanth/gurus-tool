<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Register Here:</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="database_connection_test.php" method="post">
                            <fieldset>
                            	<div class="form-group">
                                    <input class="form-control" placeholder="Company Name" name="company_name" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="CIN" name="cin" type="text" >
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Number of Units/Branches" name="number_of_branches" type="text" >
                                </div>
                                
                                <hr />
                                <div class="form-group">
                                    <input class="form-control" placeholder="Name of POC" name="name_of_poc" type="text" >
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Designation of POC" name="designation_of_poc" type="text" >
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Contact no of POC" name="contact_no_of_poc" type="text" >
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail of POC" name="email_of_poc" type="email">
                                </div>
                                
                                <hr />
                                <div class="form-group">
                                    <input class="form-control" placeholder="Name of POC (escalation)" name="name_of_poc_escalation" type="text" >
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Designation of POC (escalation)" name="designation_of_poc_escalation" type="text" >
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Contact no of POC (escalation)" name="contact_no_of_poc_escalation" type="text" >
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail of POC (escalation)" name="email_of_poc_escalation" type="email">
                                </div>
                                
                                <hr />
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Address of Unit1" rows="5" name="address_of_unit1" type="text" ></textarea>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Name of POC (unit1)" name="name_of_poc_unit1" type="text" >
                                </div>                                
                                <div class="form-group">
                                    <input class="form-control" placeholder="Contact no of POC (unit1)" name="contact_no_of_poc_unit1" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail of POC (unit1)" name="email_of_poc_unit1" type="email">
                                </div>
                                
                                <hr />
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Address of Unit2" rows="5" name="address_of_unit2" type="text" ></textarea>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Name of POC (unit2)" name="name_of_poc_unit2" type="text" >
                                </div>                                
                                <div class="form-group">
                                    <input class="form-control" placeholder="Contact no of POC (unit2)" name="contact_no_of_poc_unit2" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail of POC (unit2)" name="email_of_poc_unit2" type="email">
                                </div>
                                
                                <hr/>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username (email)" name="username" type="email">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>                                
                                <div class="checkbox">
                                    <label>
                                        <input name="send_registrationinfo_toclient" type="checkbox" value="send_copy_toclient">Send a copy to the Client
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit">
                                <a href="index.html" class="btn btn-lg btn-success btn-block">Register</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
