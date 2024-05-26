<!DOCTYPE html>
<html lang="en">
<?php include "includes/header.php"; 
include "includes/conn.php"
?>
<?php
$id=intval($_GET['id']);
if(isset($_POST['update'])){ 
    $id=$_GET['id'];
    $order_no=$_POST['order_no'];
    $title=$_POST['title'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $bid_date=$_POST['bid_date'];
    $status=$_POST['status'];
    $sql=mysqli_query($conn,"update bids set order_no='$order_no',title='$title',email='$email',phone='$phone', bid_date='$bid_date', status='$status' where id='$id'");
if($sql)
{
echo "<script>alert('Patient info updated Successfully');</script>";
header('location:bids.php');
    }}      
?>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
<?php include "includes/sidebar.php" ?>


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
<?php include "includes/navbar.php" ?>

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                       
                    </div>
<!-- Begin Page Content -->
<div class="container-fluid">

<div class="container-fluid container-fullw bg-white">
<div class="row">
    <div class="col-md-12">
        <h5 style="color: green; font-size:18px; ">
        <div class="row margin-top-30">
            <div class="col-lg-8 col-md-12">
                <div class="panel panel-white">
                    <div class="panel-heading">
                        <h5 class="panel-title">Edit Doctor info</h5>
                    </div>
                    <div class="panel-body">
        <?php $sql=mysqli_query($conn,"select * from bids where id='$id'");
        while($data=mysqli_fetch_array($sql)){?>

                        <form role="form" name="adddoc" method="post" onSubmit="return valid();">
                            <div class="form-group">
                                <label for="DoctorSpecialization">
                                    Doctor Specialization
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="doctorname">Order No</label>
                                <input type="number" name="order_no" class="form-control" value="<?php echo ($data['order_no']);?>" >
                            </div>
                            <div class="form-group">
                                <label for="doctorname">Title</label>
                                <input type="text" name="title" class="form-control" value="<?php echo ($data['title']);?>" >
                            </div>
                            <div class="form-group">
                                <label for="doctorname">Email</label>
                                <input type="enail" name="email" class="form-control" value="<?php echo ($data['email']);?>" >
                            </div>
                            <div class="form-group">
                                <label for="doctorname"> Phone</label>
                                <input type="number" name="phone" class="form-control" value="<?php echo ($data['phone']);?>" >
                            </div>
                            <div class="form-group">
                                <label for="doctorname">Bid Date</label>
                                <input type="date" name="bid_date" class="form-control" value="<?php echo ($data['bid_date']);?>" >
                            </div>
                            <div class="form-group col-6">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control" required>
                                <option value="">Select</option>
                                <option value="Assigned">Assigned</option>
                                <option value="Dispute">Dispute</option>
                                <option value="Revision">Revision</option>
                                <option value="Editing">Editing</option>
                                <option value="Completed">Completed</option>
                                <option value="Rejected">Rejected</option>
                                <option value="Paid">Paid</option>
                            </select>
                            </div>
                            <?php } ?>
                            
                            
                            <button type="submit" name="update" class="btn btn-o btn-primary">
                                Update
                            </button>
                        </form>
                    </div>
                </div>
            </div>
                
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>