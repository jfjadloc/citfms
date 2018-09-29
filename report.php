<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Report - CIT Facilities Monitorting System</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .nav>li>a:focus, .nav>li>a:hover {
            color:maroon;
            background-color: rgb(255,236,128);
        }
        .nav .open>a, .nav .open>a:focus, .nav .open>a:hover {
            background-color: rgb(255,236,128);
            border-color: #337ab7;
        }
        .nav>li>a{
            color:gold;
        }
    </style>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; background-color: maroon;">
            <div class="navbar-header">
                <a class="navbar-brand" style="color: gold;" href="index.php">CIT Facilities Monitoring System</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper" style="margin: 0 0 0 0">
                <div class="col-lg-12" style="margin-top: 20px">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Head Department Report
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Reporting Department</label>
                                            <select class="form-control">
                                                <option>College of Computer Studies</option>
                                                <option>College of Arts & Sciences</option>
                                                <option>College of Commerce</option>
                                                <option>College of Engineering & Architecture</option>
                                                <option>College of Nursing</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Building Name</label>
                                            <input name="custID" required class="form-control" placeholder="Enter Building Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Room Name/Number</label>
                                            <input name="custName" required class="form-control" placeholder="Enter Room Name/Number">
                                        </div>
                                        <div class="form-group">
                                            <label>Type of Appliance</label>
                                            <input name="custAdd" required class="form-control" placeholder="Enter Type of Appliance">
                                        </div>
                                        <div class="form-group">
                                            <label>Status of Appliance</label>
                                            <select class="form-control">
                                                <option>Operational</option>
                                                <option>Defective Parts</option>
                                                <option>Not Working</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>More Details</label>
                                            <textarea class="form-control" rows="2"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-outline btn-success" style="float: right">Submit Button</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
