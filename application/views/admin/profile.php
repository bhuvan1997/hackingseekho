<!DOCTYPE html>
<html lang="en">

<!-- HEADER START -->
<?php include('header.php'); ?>
<!-- HEADER END -->
<style>
    .checked {
        color: orange;
    }
</style>

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
                            <span style="font-size: 20px;"><b>PROFILE</b></span>
                        </div>

                        <?php foreach ($user_detail as $value) { ?>
                            <div class="card-body" style="margin: auto;">


                                <!-- Detail -->
                                <div class="card" style="margin: 12px;">
                                    <div class="card-body">
                                        <?php 
                                            $fname = substr($value->name,0,1);

                                        ?>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="row" style="display: inline-flex;align-items: center;">
                                                    <div class="col-md-6">
                                                        <div style="width: 100px; height: 100px; line-height: 100px; border-radius: 50%; font-size: 50px; color: #fff; text-align: center; background: #007bffab;">
                                                            <?php echo $fname; ?>
                                                        </div>
                                                        <div>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                        </div>
                                                        <div>
                                                            <span><i class="fa-solid fa-location-dot"></i>&nbsp;<?php echo $value->city; ?>, <?php echo $value->state; ?>, <?php echo $value->country; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div style="text-transform: uppercase;">
                                                            <b><?php echo $value->name; ?></b>
                                                        </div>
                                                        <div>
                                                            <?php echo $value->highest_degree; ?>
                                                        </div>
                                                        <div>
                                                            Contact Me
                                                        </div>
                                                        <div class="row">
                                                            <a href="#" class="col-md-2" style="background: #54a6ff; display: inline-table; border-radius: 50%; height: 37px; line-height: 34px; margin:4px;width: 37px;">

                                                                <span style="color: #fff;"><i class="fa-solid fa-comments"></i></span>

                                                            </a>
                                                            <a href="#" class="col-md-2" style="background: #54a6ff; display: inline-table; border-radius: 50%; height: 37px; line-height: 34px; margin:4px;width: 37px;">

                                                                <span style="color: #fff;"><i class="fa-solid fa-envelope"></i></span>

                                                            </a>
                                                            <a href="#" class="col-md-2" style="background: #54a6ff; display: inline-table; border-radius: 50%; height: 37px; line-height: 34px; margin:4px;width: 37px;">

                                                                <span style="color: #fff;"><i class="fa-solid fa-phone"></i></span>

                                                            </a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row" style="display: inline-flex;align-items: center;">
                                                   
                                                        <div>
                                                            <img src="<?php echo base_url('assets/uploads/'.$value->user_img); ?>" alt="" style="border-radius: 50%; width: 150px;">
                                                        </div>
                                                       
                                                    
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- About Me -->
                                <div class="card" style="margin: 12px;">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4>About Me</h4>
                                                <center>
                                                    <hr>
                                                </center>
                                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti nisi sit voluptate cumque modi velit soluta debitis itaque commodi, repudiandae animi eos maiores suscipit illo? Laudantium error similique itaque commodi expedita, sunt voluptate exercitationem ea voluptates nesciunt numquam quasi dolores rerum excepturi adipisci cupiditate fugiat vero minus, dolor, ipsam labore tempore. Quos ab eos reiciendis qui unde sunt, repellat repudiandae! Culpa, asperiores obcaecati. Tempore, minus! Veniam illum aliquam magni eos, officia cupiditate ipsum corporis iure dolorum! Rem asperiores sed optio consequatur laborum delectus eveniet, saepe expedita unde, praesentium, recusandae placeat odit magni voluptates commodi minima fugiat sequi provident iure magnam!</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!-- Personal detail -->
                                <div class="card" style="margin: 12px;">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4>Personal Details</h4>
                                                <center>
                                                    <hr>
                                                </center>
                                                <div class="row" style="text-align: center;">

                                                    <div class="col-md-4">
                                                        <p>Gender</p>
                                                        <p><b><?php echo $value->gender; ?></b></p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p>Father's Name</p>
                                                        <p><b><?php echo $value->father_name; ?></b></p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p>D.O.B</p>
                                                        <p><b><?php echo $value->date_of_birth; ?></b></p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!-- Qualification -->
                                <div class="card" style="margin: 12px;">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4>Qualification</h4>
                                                <center>
                                                    <hr>
                                                </center>
                                                <?php $yearPass = substr($value->year_passing,0,4) ?>
                                                <div class="row" style="text-align: center;">

                                                    <div class="col-md-4">
                                                        <p>Type of Degree</p>
                                                        <p><b><?php echo $value->highest_degree; ?></b></p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p>Year of Passing</p>
                                                        <p><b><?php echo $yearPass; ?></b></p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p>Percentage</p>
                                                        <p><b><?php echo $value->percentage; ?>&nbsp;%</b></p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p>Passing University</p>
                                                        <p><b><?php echo $value->university; ?></b></p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!-- Location -->
                                <div class="card" style="margin: 12px;">
                                    <div class="card-body">

                                    <div class="row">
                                            <div class="col-md-12">
                                                <h4>Residential Address</h4>
                                                <center>
                                                    <hr>
                                                </center>
                                                <div class="row" style="text-align: center;">

                                                    <div class="col-md-4">
                                                        <p>Address</p>
                                                        <p><b><?php echo $value->address; ?></b></p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p>City</p>
                                                        <p><b><?php echo $value->city; ?></b></p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p>State</p>
                                                        <p><b><?php echo $value->state; ?></b></p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p>Country</p>
                                                        <p><b><?php echo $value->country; ?></b></p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p>Postal Code</p>
                                                        <p><b><?php echo $value->pincode; ?></b></p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                            </div>

                        <?php } ?>


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