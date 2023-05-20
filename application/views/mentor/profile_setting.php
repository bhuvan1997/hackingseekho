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
                        <form action="<?php echo base_url('mentor/dashboard/update_profile'); ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" value="<?php echo $_SESSION['loggedId']; ?>" name="mentorId">

                            <input type="hidden" name="status" value="" id="stts">
                            <?php foreach ($user_detail as $value) {
                            ?>

                                <div class="card-body">

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="" style="font-weight: 600;">Profile Image</label><br>
                                            <img src="<?php echo base_url('assets/uploads/' . $value->user_img); ?>" alt="" style="width: 150px; height:150px; border: 1px dotted;">
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
                                            <input type="text" class="form-control form-control-sm" name="name" id="name" style="height: 36px;" value="<?php echo $value->name; ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="" style="font-weight: 600;">Email</label><br>
                                            <input type="email" class="form-control form-control-sm" name="email" style="height: 36px;" value="<?php echo $value->email; ?>" disabled>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="" style="font-weight: 600;">Phone Number</label><br>
                                            <input type="text" class="form-control form-control-sm" name="phone" id="phone" style="height: 36px;" value="<?php echo $value->phone; ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="" style="font-weight: 600;">Date Of Birth</label><br>
                                            <input type="date" class="form-control form-control-sm" name="date_of_birth" id="dob" style="height: 36px;" value="<?php echo $value->date_of_birth; ?>">
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="" style="font-weight: 600;">Father's Name</label><br>
                                            <input type="text" class="form-control form-control-sm" name="father_name" id="fname" style="height: 36px;" value="<?php echo $value->father_name; ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="" style="font-weight: 600;">Gender</label><br>
                                            <select class="form-select form-control-sm" name="gender" id="gender" style="color: black; height:36px;">
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
                                            <input type="text" class="form-control form-control-sm" name="address" id="address" style="height: 36px;" value="<?php echo $value->address; ?>">
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="" style="font-weight: 600;">City</label><br>
                                            <select class="form-select form-select-sm" name="city" id="city" style="color: black; height:36px;">
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
                                            <select class="form-select form-select-sm" name="state" id="state" style="color: black; height:36px;">
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
                                            <select class="form-select form-select-sm" name="country" id="country" style="color: black; height:36px;">
                                                <option value="">Select Country</option>
                                                <option value="India" <?php if ($value->country == 'India') {
                                                                                    echo "selected";
                                                                                }
                                                                                ?>>India</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="" style="font-weight: 600;">Postal/Zip Code</label><br>
                                            <input type="text" class="form-control form-control-sm" name="pincode" id="pincode" style="height: 36px;" value="<?php echo $value->pincode; ?>">
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
                                            <input type="text" class="form-control form-control-sm" name="highest_degree" id="highest_degree" style="height: 36px;" value="<?php echo $value->highest_degree; ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="" style="font-weight: 600;">Passing University</label><br>
                                            <input type="text" class="form-control form-control-sm" name="university" id="university" style="height: 36px;" value="<?php echo $value->university; ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="" style="font-weight: 600;">Year Of Passing</label><br>
                                            <input type="date" class="form-control form-control-sm" name="year_passing" id="year_passing" style="height: 36px;" value="<?php echo $value->year_passing; ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="" style="font-weight: 600;">Percentage(%)</label><br>
                                            <input type="text" class="form-control form-control-sm" name="percentage" id="percentage" style="height: 36px;" value="<?php echo $value->percentage; ?>">
                                        </div>

                                    </div>
                                    
                                    <div style="background: #dee2e673;border-radius: 5px;">
                                        <p>
                                            <center><span class="badge" style="padding: 7px;background: #282f3abf;">UPLOAD</span></center>
                                        </p>
                                    </div><br>
                                    <input type="hidden" id="id_proof" value="<?php echo $value->id_proof; ?>">
                                    <input type="hidden" id="mat_cer" value="<?php echo $value->sclDoc_img; ?>">
                                    <input type="hidden" id="grad_img" value="<?php echo $value->grad_img; ?>">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="" style="font-weight: 600;">Change Profile Photo</label><br>
                                            <input type="file" class="form-control form-control-sm" style="background: white;height: 0px;" name="user_img">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="" style="font-weight: 600;">ID Proof</label><br>
                                            <input type="file" class="form-control form-control-sm" style="background: white;height: 0px;" name="id_proof">
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="" style="font-weight: 600;">10+2 Certificate</label><br>
                                            <input type="file" class="form-control form-control-sm" style="background: white;height: 0px;" name="10_2_img">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="" style="font-weight: 600;">Highest Graduation Certificate</label><br>
                                            <input type="file" class="form-control form-control-sm" style="background: white;height: 0px;" id="grad_img" name="grad_img">
                                        </div>

                                    </div>

                                    <div style="background: #dee2e673;border-radius: 5px;">
                                        <p>
                                            <center><span class="badge" style="padding: 7px;background: #282f3abf;">UPLOADED DOCS</span></center>
                                        </p>
                                    </div><br>
                                    <div>
                                        <a href="<?php echo base_url('assets/uploads/'.$value->user_img); ?>" class="btn btn-primary btn-sm" target="_blank">User Photo</a>

                                        <a href="<?php echo base_url('assets/uploads/'.$value->id_proof); ?>" class="btn btn-primary btn-sm" target="_blank">ID Proof</a>
                                        
                                        <a href="<?php echo base_url('assets/uploads/'.$value->sclDoc_img); ?>" class="btn btn-primary btn-sm" target="_blank">10 + 2 Doc</a>

                                        <a href="<?php echo base_url('assets/uploads/'.$value->grad_img); ?>" class="btn btn-primary btn-sm" target="_blank">Gradudation Doc</a>
                                    </div>
                                    


                                    <div style="text-align: end;">
                                        <button type="submit" class="btn btn-primary mr-2" name="update" id="update">Update</button>
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

    <script>
        $(document).ready(function(){
            $('#update').on('click', function(){
                let name = $('#name').val();
                let phone = $('#phone').val();
                let dob = $('#dob').val();
                let fname = $('#fname').val();
                let gender = $('#gender').val();
                let address = $('#address').val();
                let city = $('#city').val();
                let state = $('#state').val();
                let country = $('#country').val();
                let pincode = $('#pincode').val();
                let highest_degree = $('#highest_degree').val();
                let university = $('#university').val();
                let year_passing = $('#year_passing').val();
                let percentage = $('#percentage').val();
                let id_proof = $('#id_proof').val();
                let mat_cer = $('#mat_cer').val();
                let grad_img = $('#grad_img').val();

                if(name == '' || phone == '' || dob == '' || fname == '' || gender == '' || address == '' || city == '' || state == '' || country == '' || pincode == '' || highest_degree == '' || university == '' || year_passing == '' || percentage == '' || id_proof == '' || mat_cer == '' || grad_img == '')
                {
                    $('#stts').val('0');

                }
                else
                {
                    $('#stts').val('1');
                }
                
            });
        });
    </script>

    <!-- SCRIPT END -->
</body>

</html>