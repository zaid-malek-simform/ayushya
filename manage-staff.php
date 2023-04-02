<!DOCTYPE html>
<html>

<?php 
    session_start();
    if (!isset($_SESSION['email']) || !isset($_SESSION['role']) || $_SESSION['role']!='admin') {
        header('Location: login.php');
    }
	require ("head.php");
?>

<body>
    <!-- Pre Loader -->
    <div class="loading">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
    <!--/Pre Loader -->
    <div class="wrapper">
        <!-- Sidebar -->
        <?php 
	        include_once ("admin-nav.html");
        ?>
        <!-- /Sidebar -->
        <!-- Page Content -->
        <div id="content">
            <!-- Top Navigation -->
                
            <?php 
	            include_once ("top-nav.php");
            ?>
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
                            <div class="newstaff">
                                <div id="testmodal" class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">&times;</button>
                                                <!-- <h4 class="modal-title">Confirmation</h4> -->
                                            </div>
                                            <div class="modal-body">
                                                <form action="add-staff.php" method="Post">
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <label for="staff_name">Name</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Staff name" id="staff_name" name="name" required>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label for="phone">Phone</label>
                                                            <input type="number" name="contact" placeholder="Phone" class="form-control"
                                                                id="phone" min="6000000000" max="9999999999" required>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label for="email">Email</label>
                                                            <input type="email" placeholder="Email" name="email" class="form-control"
                                                                id="Email" required>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label for="Password">Password</label>
                                                            <input type="Password" class="form-control" name="pass" id="Password" placeholder="Password" required>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label for="staff_type">Role</label>
                                                            <input type="radio" name="role" id="staff_typeD" value="doctor" required> Doctor
                                                            <input type="radio" name="role" id="staff_typeR" value="receptionist"> Receptionist
                                                        </div>
                                                    </div>      
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default"
                                                    data-dismiss="modal">Close</button>
                                                <input type="submit" class="btn btn-primary" name="addstaff" value="Save changes">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="updstaff">
                                <div id="updmodal" class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">&times;</button>
                                                <!-- <h4 class="modal-title">Confirmation</h4> -->
                                            </div>
                                            <div class="modal-body">
                                                <form action="update-staff.php" method="Post">
                                                    <div class="form-row">
                                                        <input type="hidden" id="id" name="id">
                                                        <div class="form-group col-md-12">
                                                            <label for="ustaff_name">Name</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Staff name" id="ustaff_name" name="name" required>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label for="uphone">Phone</label>
                                                            <input type="number" name="contact" placeholder="Phone" class="form-control"
                                                                id="uphone" min="6000000000" max="9999999999" required>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label for="uemail">Email</label>
                                                            <input type="email" placeholder="Email" name="email" class="form-control"
                                                                id="uemail" required>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label for="uPassword">Password</label>
                                                            <input type="Password" class="form-control" name="pass" id="uPassword" placeholder="Can't change password here" readonly>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label for="ustaff_type">Role</label>
                                                            <input type="radio" name="role" id="ustaff_typeD" value="doctor" required> Doctor
                                                            <input type="radio" name="role" id="ustaff_typeR" value="receptionist"> Receptionist
                                                        </div>
                                                    </div>      
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default"
                                                    data-dismiss="modal">Close</button>
                                                <input type="submit" class="btn btn-primary" name="addstaff" value="Update changes">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="element" class="addstaff btn btn-info btn-lg btn btn-default show-modal">Add
                                Staff
                            </div>
                            <div class="table-responsive mb-3">
                                <table id="tableId" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <!-- <th>Staff ID</th> -->
                                            <th>Sr No.</th>
                                            <th>Name</th>
                                            <th>Role</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include 'connection.php';

                                        $query = "select *from user where role != 'admin'";
                                        $result = $conn->query($query);
                                        $c = 1;
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td>" . $c . "</td>";
                                            echo "<td>" . $row['name'] . "</td>";
                                            echo "<td>" . $row['role'] . "</td>";
                                            echo "<td>" . $row['email'] . "</td>";
                                            echo "<td>" . $row['phone'] . "</td>";
                                            echo "<td><button type='button' id='{$row['id']}' class='btn btn-default btn btn-primary mt-3 mb-0 ] btnupd'><span class='ti-pencil' onclick=></span> Edit</button>";
                                            echo "<button type='button' class='btn btn-danger ml-3 mt-3 mb-0 btndel'><span class='ti-trash'></span> Delete</button></td>";
                                            echo "</tr>";

                                            $c++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
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
                                            <a class="page-link" href="#"><span class="ti-align-justify"></span>
                                                Excel</a>
                                        </li>`
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
    $(document).ready(function () {
        var show_btn = $('.show-modal');
        // var show_btn = $('.show-modal');
        //$("#testmodal").modal('show');

        show_btn.click(function () {
            $("#testmodal").modal('show');
        })
    });

    
</script>

</html>