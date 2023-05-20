<!DOCTYPE html>
<html lang="en">

<!-- HEADER START -->
<?php include('header.php'); ?>
<!-- HEADER END -->

<body>
    <div class="container-scroller">

        <!-- NAVBAR START -->
        <?php include('navbar.php'); ?>
        <!-- NAVBAR END -->

        <div class="container-fluid page-body-wrapper">

            <!-- SIDEBAR START -->
            <?php include('sidebar.php'); ?>
            <!-- SIDEBAR END -->

            <div class="main-panel">
                <div class="content-wrapper">

                    <div class="card" style="border-radius: 0;">
                        <div class="card-header" style="background: #dee2e673; color: #000;display: flex; align-items: center; justify-content: space-between;">
                            <span style="font-size: 20px;"><b>ASSIGNMENT/HOMEWORK SUBMISSION</b></span>
                            <a href="<?php echo base_url('admin/View-Assignment'); ?>" class="btn btn-primary">Back</a>
                        </div>
                        <form action="#" method="post" enctype="multipart/form-data">
                            <input type="hidden" value="<?php echo $_SESSION['loggedId']; ?>" name="mentorId">
                            
                                <div class="card-body">

                                    <div class="row">
                                        
                                        <div class="form-group col-md-12">
                                            <label for="" style="font-weight: 600;">Enrolled Mentor</label><br>
                                            <select class="form-select form-control-sm" name="enrolled_mentor" style="color: black; height:36px;">
                                                <option value="">Select Mentor</option>
                                                <option value="">Mukesh</option>
                                                <option value="">Rakesh</option>
                                            </select>
                                        </div>

                                    </div>
                                    
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="" style="font-weight: 600;">Upload Homework</label><br>
                                            <input type="file" class="form-control form-control-sm" style="background: white;height: 0px;" name="homework">
                                        </div>

                                    </div>
                                   
                                    <div style="text-align: end;">
                                        <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                                    </div>

                                </div>
                         
                        </form>
                    </div>

                </div>
                <!-- content-wrapper ends -->

                <!-- FOOTER START -->
                <?php include('footer.php'); ?>
                <!-- FOOTER END -->

                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- SCRIPT START -->
    <?php include('script.php'); ?>
    <script>
        $("#welcome_msg").fadeOut(20000);
    </script>

    <!-- SCRIPT END -->
</body>

</html>