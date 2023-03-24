<!DOCTYPE html>
<html>


<!-- Mirrored from www.konnectplugins.com/proclinic/Vertical/patients.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2023 05:55:51 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ProClinic-Bootstrap4 Hospital Admin</title>
    <!-- Fav  Icon Link -->
    <link rel="shortcut icon" type="image/png" href="images/fav.png">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- themify icons CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Animations CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/red.css" id="style_theme">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- morris charts -->
    <link rel="stylesheet" href="charts/css/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="css/jquery-jvectormap.css">
    <link rel="stylesheet" href="datatable/dataTables.bootstrap4.min.css">

    <script src="js/modernizr.min.js"></script>
</head>

<body>
    <!-- Pre Loader -->
    <div class="loading">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
    <!--/Pre Loader -->
    <!-- Color Changer -->
    <div class="theme-settings" id="switcher">
        <span class="theme-color theme-default theme-active" data-color="green"></span>
        <span class="theme-color theme-blue" data-color="blue"></span>
        <span class="theme-color theme-red" data-color="red"></span>
        <span class="theme-color theme-violet" data-color="violet"></span>
        <span class="theme-color theme-yellow" data-color="yellow"></span>
    </div>
    <!-- /Color Changer -->
    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar" class="proclinic-bg">
            <div class="sidebar-header">
                <a href="admin.php"><img src="images/logo.png" class="logo" alt="logo"></a>
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="manage-staff.php">
                        <span class="ti-user"></span> Manage Staff
                    </a>
                </li>
                <li>
                    <a href="manage-payment.php">
                        <span class="ti-money"></span> Manage Payments
                    </a>
                </li>
            </ul>
            <div class="nav-help animated fadeIn">
                <h5><span class="ti-comments"></span> Need Help</h5>
                <h6>
                    <span class="ti-mobile"></span> +91-9879228567
                </h6>
                <h6>
                    <span class="ti-email"></span> support@ayushya.co.in
                </h6>
                <p class="copyright-text">Copy rights &copy; 2023</p>
            </div>
        </nav>
        <!-- /Sidebar -->
        <!-- Page Content -->
        <div id="content">
            <!-- Top Navigation -->
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="responsive-logo">
                        <a href="index.html"><img src="images/logo-dark.png" class="logo" alt="logo"></a>
                    </div>
                    <ul class="nav">
                        <li class="nav-item">
                            <span class="ti-menu" id="sidebarCollapse"></span>
                        </li>
                        <li class="nav-item">
                            <span title="Fullscreen" class="ti-fullscreen fullscreen"></span>
                        </li>
                        <li class="nav-item">
                            <div class="modal fade proclinic-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lorvens">
                                    <div class="modal-content proclinic-box-shadow2">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Search Patient/Doctor:</h5>
                                            <span class="ti-close" data-dismiss="modal" aria-label="Close">
                                            </span>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="search-term" placeholder="Type text here">
                                                    <button type="button" class="btn btn-lorvens proclinic-bg">
                                                        <span class="ti-location-arrow"></span> Search</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="ti-announcement"></span>
                            </a>
                            <div class="dropdown-menu proclinic-box-shadow2 notifications animated flipInY">
                                <h5>Notifications</h5>
                                <a class="dropdown-item" href="#">
                                    <span class="ti-wheelchair"></span> New Staff Added</a>
                                <a class="dropdown-item" href="#">
                                    <span class="ti-money"></span> Staff payment done</a>
                                <a class="dropdown-item" href="#">
                                    <span class="ti-time"></span>Staff Appointment booked</a>
                                <a class="dropdown-item" href="#">
                                    <span class="ti-wheelchair"></span> New Staff Added</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="ti-user"></span>
                            </a>
                            <div class="dropdown-menu proclinic-box-shadow2 profile animated flipInY">
                                <h5>John Willing</h5>
                                <a class="dropdown-item" href="#">
                                    <span class="ti-settings"></span> Settings</a>
                                <a class="dropdown-item" href="#">
                                    <span class="ti-help-alt"></span> Help</a>
                                <a class="dropdown-item" href="#">
                                    <span class="ti-power-off"></span> Logout</a>
                            </div>
                        </li>
                    </ul>

                </div>
            </nav>
            <!-- /Top Navigation -->
            <!-- Breadcrumb -->
            <!-- Page Title -->
            <div class="row no-margin-padding">
                <div class="col-md-6">
                    <h3 class="block-title">Manage Staff</h3>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <span class="ti-home"></span>
                            </a>
                        </li>
                        <li class="breadcrumb-item"> Manage Staff</li>
                        <li class="breadcrumb-item active">All Staff</li>
                    </ol>
                </div>
            </div>
            <!-- /Page Title -->

            <!-- /Breadcrumb -->
            <!-- Main Content -->
            <div class="container-fluid">

                <div class="row">
                    <!-- Widget Item -->
                    <div class="col-md-12">
                        <div class="widget-area-2 proclinic-box-shadow">
                            <h3 class="widget-title">Staff Details</h3>
                            <!-- <button class="addstaff btn btn-info btn-lg"" data-toggle=" modal" data-target="#myModal">Add Staff</button> -->
                            <div id="testmodal" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <!-- <h4 class="modal-title">Confirmation</h4> -->
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="patient-name">Name</label>
                                                        <input type="text" class="form-control" placeholder="Patient name" id="patient-name">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="gender">Role</label>
                                                        <select class="form-control" id="gender">
                                                            <option>Doctor</option>
                                                            <option>Receptionist</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="phone">Phone</label>
                                                        <input type="text" placeholder="Phone" class="form-control" id="phone">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="email">Email</label>
                                                        <input type="email" placeholder="email" class="form-control" id="Email">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="exampleFormControlTextarea1">Address</label>
                                                        <textarea placeholder="Address" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="file">File</label>
                                                        <input type="file" class="form-control" id="file">
                                                    </div>

                                                    <div class="form-check col-md-12 mb-2">
                                                        <div class="text-left">
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="ex-check-2">
                                                                <label class="custom-control-label" for="ex-check-2">Please Confirm</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="testmodal-1" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title">Confirmation</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Do you want to save changes you made to document before closing?</p>
                                            <p class="text-warning"><small>If you don't save, your changes will be lost.</small></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="element" class="addstaff btn btn-info btn-lg btn btn-default show-modal">Add Staff</div>
                            <!-- <div class="btn btn-default key-disable">show modal whith keyboard disabled</div> -->




                            <div class="table-responsive mb-3">
                                <table id="tableId" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <!-- <th>Staff ID</th> -->
                                            <th>Sr No.</th>
                                            <th>Name</th>
                                            <th>Role</th>
                                            <th>Phone Number</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>Prem Mehta</td>
                                            <td>Super Admin</td>
                                            <td>333-444-7777</td>
                                            <td class="edit">
                                                <button type="button" class="btn btn-primary mt-3 mb-0"><span class="ti-pencil-alt"></span> EDIT</button>
                                                <button type="button" class="btn btn-danger mt-3 mb-0 addstaff btn btn-info btn-lg"><span class="ti-trash"></span> DELETE</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>02</td>
                                            <td>Manoj Kumar</td>
                                            <td>Doctor</td>
                                            <td>333-444-7777</td>
                                            <td class="edit">
                                                <button type="button" class="btn btn-primary mt-3 mb-0"><span class="ti-pencil-alt"></span> EDIT</button>
                                                <button type="button" class="btn btn-danger mt-3 mb-0"><span class="ti-trash"></span> DELETE</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>03</td>
                                            <td>Riya </td>
                                            <td>Doctor</td>
                                            <td>333-444-7777</td>
                                            <td class="edit">
                                                <div id="testmodal" class="modal fade">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                <!-- <h4 class="modal-title">Confirmation</h4> -->
                                                            </div>
                                                            <div class="modal-body">
                                                                <form>
                                                                    <div class="form-row">
                                                                        <div class="form-group col-md-6">
                                                                            <label for="patient-name">Name</label>
                                                                            <input type="text" class="form-control" placeholder="Patient name" id="patient-name">
                                                                        </div>
                                                                        <div class="form-group col-md-6">
                                                                            <label for="gender">Role</label>
                                                                            <select class="form-control" id="gender">
                                                                                <option>Doctor</option>
                                                                                <option>Receptionist</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group col-md-6">
                                                                            <label for="phone">Phone</label>
                                                                            <input type="text" placeholder="Phone" class="form-control" id="phone">
                                                                        </div>
                                                                        <div class="form-group col-md-6">
                                                                            <label for="email">Email</label>
                                                                            <input type="email" placeholder="email" class="form-control" id="Email">
                                                                        </div>
                                                                        <div class="form-group col-md-12">
                                                                            <label for="exampleFormControlTextarea1">Address</label>
                                                                            <textarea placeholder="Address" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                                        </div>
                                                                        <div class="form-group col-md-12">
                                                                            <label for="file">File</label>
                                                                            <input type="file" class="form-control" id="file">
                                                                        </div>

                                                                        <div class="form-check col-md-12 mb-2">
                                                                            <div class="text-left">
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input class="custom-control-input" type="checkbox" id="ex-check-2">
                                                                                    <label class="custom-control-label" for="ex-check-2">Please Confirm</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="testmodal-1" class="modal fade">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                <h4 class="modal-title">Confirmation</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Do you want to save changes you made to document before closing?</p>
                                                                <p class="text-warning"><small>If you don't save, your changes will be lost.</small></p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="element" class="btn btn-default btn btn-primary mt-3 mb-0 show-modal">Edit Staff</div>
                                                <button type="button" class="btn btn-danger mt-3 mb-0"></span> DELETE</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>04</td>
                                            <td>Paul</td>
                                            <td>Receptionist</td>
                                            <td>333-444-7777</td>
                                            <td class="edit">
                                                <button type="button" class="btn btn-primary mt-3 mb-0"><span class="ti-pencil-alt"></span> EDIT</button>
                                                <button type="button" class="btn btn-danger mt-3 mb-0"><span class="ti-trash"></span> DELETE</button>
                                            </td>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!--Export links-->
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center export-pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#"><span class="ti-download"></span> csv</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"><span class="ti-printer"></span> print</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"><span class="ti-file"></span> PDF</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"><span class="ti-align-justify"></span> Excel</a>
                                        </li>
                                    </ul>
                                </nav>
                                <!-- /Export links-->
                            </div>
                        </div>
                    </div>
                    <!-- /Widget Item -->
                </div>
            </div>
            <!-- /Main Content -->
        </div>
        <!-- /Page Content -->
    </div>
    <!-- Back to Top -->
    <a id="back-to-top" href="#" class="back-to-top">
        <span class="ti-angle-up"></span>
    </a>
    <!-- /Back to Top -->
    <!-- Jquery Library-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Popper Library-->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap Library-->
    <script src="js/bootstrap.min.js"></script>

    <!-- Datatable  -->
    <script src="datatable/jquery.dataTables.min.js"></script>
    <script src="datatable/dataTables.bootstrap4.min.js"></script>

    <!-- Custom Script-->
    <script src="js/custom.js"></script>
    <script src="js/custom-datatables.js"></script>
</body>


<!-- Mirrored from www.konnectplugins.com/proclinic/Vertical/patients.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2023 05:55:51 GMT -->
<script>
    $(document).ready(function() {
        var show_btn = $('.show-modal');
        var show_btn = $('.show-modal');
        //$("#testmodal").modal('show');

        show_btn.click(function() {
            $("#testmodal").modal('show');
        })
    });

    $(function() {
        $('#element').on('click', function(e) {
            Custombox.open({
                target: '#testmodal-1',
                effect: 'fadein'
            });
            e.preventDefault();
        });
    });
</script>

</html>