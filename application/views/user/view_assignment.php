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
                            <span style="font-size: 20px;"><b>VIEW ASSIGNMENTS</b></span>
                            <a href="<?php echo base_url('user/Add-Assignment'); ?>" class="btn btn-primary">Add Assignment</a>
                        </div>

                        <div class="card-body">
                            <table class="table table-responsive" id="example" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th class="col-md-1" style="text-align: center;">#</th>
                                        <th class="col-md-1" style="text-align: center;">Checker</th>
                                        <th class="col-md-1" style="text-align: center;">Assignment File</th>
                                        <th class="col-md-1" style="text-align: center;">File Extension</th>
                                        <th class="col-md-1" style="text-align: center;">Edit</th>
                                        <th class="col-md-1" style="text-align: center;">Delete</th>
                                    </tr>
                                </thead>
                                <tbody style="text-align: center;">
                                <?php //$id=1; foreach ($batch_detail as $value) { ?>
                                    
                                    <tr>
                                        <td>1</td>
                                        <td>Mr.Rajpal</td>
                                        <td><img src="<?php echo base_url('assets/images/logo.svg'); ?>" alt="" style="width: 100px;"></td>
                                        <td>.svg</td>
                                        <td><a href="#" class="btn btn-info">Edit</a></td>
                                        <td><a href="#" class="btn btn-danger">Delete</a></td>
                                    </tr>

                                    <?php //$id++; } ?>
                                </tbody>
                            </table>


                        </div>
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
        $(document).ready(function() {
            var table = $('#example').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'colvis']
            });

            table.buttons().container()
                .appendTo('#example_wrapper .col-md-6:eq(0)');

        });
    </script>
    <!-- SCRIPT END -->
</body>

</html>