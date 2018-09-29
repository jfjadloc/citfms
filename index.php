<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard - CIT Facilities Monitorting System</title>

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
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="logout.php">
                        <i class="fa fa-user fa-fw"></i>&nbsp;&nbsp;&nbsp;Logout
                    </a>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper" style="margin: 0 0 0 0">
            <div class="row">
                <div class="col-lg-12" style="margin-bottom: 20px">
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default" style="border: 0px;">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div style="float:left; display: inline-block;">
                            <select name="cID" class="form-control" style="width: 200px">
                                <option>Aircon</option>
                                <option>Electric Fan</option>
                                <option>Electrical Circuit</option>
                            </select>
                            <button type="button" class="btn btn-outline btn-success" style="margin-bottom: 20px; margin-top: 10px">Add</button>
                            </div>
                            <button type="button" class="btn btn-outline btn-info" style="margin-bottom: 20px; float: right;">Print Report</button>
                            <button type="button" class="btn btn-outline btn-success" style="margin-bottom: 20px; margin-right: 10px; float: right;">View Reports</button>
                            <table width="100%" class="table table-striped table-bordered table-hover" style="margin-top: 20px;">
                                <thead>
                                    <tr>
                                        <th>Date Checked</th>
                                        <th>Location</th>
                                        <th>Status</th>
                                        <th>Brand Type</th>
                                        <th>Number of Units</th>
                                        <th>Warranty</th>
                                        <th style="width: 130px">Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td style="width:auto;text-align:center;"><center><button type="button" class="btn btn-link" data-toggle="modal" data-target="#myModal"style="float:right;margin: 0px 5px 0px 10px; padding:0px;">Update</button>
                                        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#myModal"style="float:right;margin: 0px 0px 5px 0px; padding:0px;">Delete</button></center>
                                        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#myModal"style="float:right;margin: 0px 15px 0px 0px; padding:0px;">View Details</button></center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td style="width:auto;text-align:center;"><center><button type="button" class="btn btn-link" data-toggle="modal" data-target="#myModal"style="float:right;margin: 0px 5px 0px 10px; padding:0px;">Update</button>
                                        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#myModal"style="float:right;margin: 0px 0px 5px 0px; padding:0px;">Delete</button></center>
                                        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#myModal"style="float:right;margin: 0px 15px 0px 0px; padding:0px;">View Details</button></center>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                             <div class="modal fade" id="deleteOrder" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Delete?</h4>
                                        </div>
                                        <form role="form" method="POST" action="delOrder.php">
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Add</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                            <!-- /.add order -->
                             <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Add Order</h4>
                                        </div>
                                        <form role="form" method="POST" action="addOrder.php">
                                            <div class="modal-body">
                                                    <div class="form-group">
                                                        <label>Customer ID</label>
                                                        <select name="cID" class="form-control">
                                                            <?php
                                                                $sql= "SELECT * FROM customer";
                                                                $result=$conn->query($sql);
                                                                while($row=$result->fetch_array(MYSQLI_ASSOC)){
                                                                    echo "<option value=".$row['customerID']. '-' .$row['customerID'].">".$row['customerID']."</option>";
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Order Slip ID</label>
                                                        <input class="form-control" name="oSID" required placeholder="Enter Customer's Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Order Receiving Date</label>
                                                        <input type="Date" class="form-control" name="oRDate" required placeholder="Enter Customer's Address">
                                                    </div>
                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Add</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
           
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

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>