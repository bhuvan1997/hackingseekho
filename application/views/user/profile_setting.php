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
                        <div class="card-header" style="background: #dee2e673; color: #000;">
                            <span style="font-size: 20px;"><b>PROFILE SETTING</b></span>
                        </div>
                        <form action="<?php echo base_url('user/dashboard/update_profile'); ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" value="<?php echo $_SESSION['loggedId']; ?>" name="mentorId">
                            <?php foreach ($user_detail as $value) {
                            ?>

                                <div class="card-body">

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="" style="font-weight: 600;">Profile Image</label><br>
                                            <img src="<?php echo base_url('assets/uploads/' . $value->user_img); ?>" alt="" style="width: 100px;border: 1px dotted;">
                                        </div>
                                        <div class="form-group col-md-6">

                                        </div>

                                    </div>
                                    <div style="background: #dee2e673;border-radius: 5px;">
                                        <p>
                                            <center><span class="badge" style="padding: 7px;background: #282f3abf;">GENERAL DETAILS</span></center>
                                        </p>
                                    </div><br>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="" style="font-weight: 600;">Name</label><br>
                                            <input type="text" class="form-control form-control-sm" name="name" style="height: 36px;" value="<?php echo $value->name; ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="" style="font-weight: 600;">Email</label><br>
                                            <input type="email" class="form-control form-control-sm" name="email" style="height: 36px;" value="<?php echo $value->email; ?>" disabled>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="" style="font-weight: 600;">Phone Number</label><br>
                                            <input type="text" class="form-control form-control-sm" name="phone" style="height: 36px;" value="<?php echo $value->phone; ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="" style="font-weight: 600;">Date Of Birth</label><br>
                                            <input type="date" class="form-control form-control-sm" name="date_of_birth" style="height: 36px;" value="<?php echo $value->date_of_birth; ?>">
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="" style="font-weight: 600;">Father's Name</label><br>
                                            <input type="text" class="form-control form-control-sm" name="father_name" style="height: 36px;" value="<?php echo $value->father_name; ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="" style="font-weight: 600;">Gender</label><br>
                                            <select class="form-select form-control-sm" name="gender" style="color: black; height:36px;">
                                                <option value="">Select Gender</option>
                                                <option value="Male" <?php if ($value->gender == 'Male') {
                                                                                    echo "selected";
                                                                                }
                                                                                ?>>Male</option>
                                                <option value="Female" <?php if ($value->gender == 'Female') {
                                                                                    echo "selected";
                                                                                }
                                                                                ?>>Female</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div style="background: #dee2e673;border-radius: 5px;">
                                        <p>
                                            <center><span class="badge" style="padding: 7px;background: #282f3abf;">RESIDENTIAL/PERMANENT ADDRESS</span></center>
                                        </p>
                                    </div><br>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="" style="font-weight: 600;">Street Address</label><br>
                                            <input type="text" class="form-control form-control-sm" name="address" style="height: 36px;" value="<?php echo $value->address; ?>">
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="" style="font-weight: 600;">City</label><br>
                                            <select class="form-select form-select-sm" name="city" style="color: black; height:36px;">
                                                <option value="">Select City</option>
                                                <?php foreach ($city as $c) {
                                                    
                                                    if($value->city == $c->district_name)
                                                    {
                                                        $selected = "selected";
                                                    }
                                                    else
                                                    {
                                                        $selected = "";
                                                    }
                                                    echo "<option value='" . $c->district_name . "' " . $selected . ">" . $c->district_name . "</option>";

                                                ?>

                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="" style="font-weight: 600;">State</label><br>
                                            <select class="form-select form-select-sm" name="state" style="color: black; height:36px;">
                                                <option value="">Select State</option>
                                                <?php foreach ($state as $s) { 
                                                if($value->state == $s->state_name)
                                                {
                                                    $selected = "selected";
                                                }
                                                else
                                                {
                                                    $selected = "";
                                                }
                                                echo "<option value='" . $s->state_name . "' " . $selected . ">" . $s->state_name . "</option>";
                                            ?>

                                                <?php } ?>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="" style="font-weight: 600;">Country</label><br>
                                            <select class="form-select form-select-sm" name="country" style="color: black; height:36px;">
                                                <option value="">Select Country</option>
                                                <option value="India" <?php if ($value->country == 'India') {
                                                                                    echo "selected";
                                                                                }
                                                                                ?>>India</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="" style="font-weight: 600;">Postal/Zip Code</label><br>
                                            <input type="text" class="form-control form-control-sm" name="pincode" style="height: 36px;" value="<?php echo $value->pincode; ?>">
                                        </div>

                                    </div>
                                    <div style="background: #dee2e673;border-radius: 5px;">
                                        <p>
                                            <center><span class="badge" style="padding: 7px;background: #282f3abf;">ACADEMIC QUALIFICATIONS</span></center>
                                        </p>
                                    </div><br>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="" style="font-weight: 600;">Highest Graduation Degree</label><br>
                                            <input type="text" class="form-control form-control-sm" name="highest_degree" style="height: 36px;" value="<?php echo $value->highest_degree; ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="" style="font-weight: 600;">Passing University</label><br>
                                            <input type="text" class="form-control form-control-sm" name="university" style="height: 36px;" value="<?php echo $value->university; ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="" style="font-weight: 600;">Year Of Passing</label><br>
                                            <input type="date" class="form-control form-control-sm" name="year_passing" style="height: 36px;" value="<?php echo $value->year_passing; ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="" style="font-weight: 600;">Percentage(%)</label><br>
                                            <input type="text" class="form-control form-control-sm" name="percentage" style="height: 36px;" value="<?php echo $value->percentage; ?>">
                                        </div>

                                    </div>
                                    
                                    <div style="background: #dee2e673;border-radius: 5px;">
                                        <p>
                                            <center><span class="badge" style="padding: 7px;background: #282f3abf;">UPLOAD</span></center>
                                        </p>
                                    </div><br>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="" style="font-weight: 600;">Change Profile Photo</label><br>
                                            <input type="file" class="form-control form-control-sm" style="background: white;height: 0px;" name="user_img">
                                        </div>

                                    </div>
                                   
                                    <div style="text-align: end;">
                                        <button type="submit" class="btn btn-primary mr-2" name="update">Update</button>
                                    </div>

                                </div>
                            <?php }
                            ?>
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