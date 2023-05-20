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
                            <span style="font-size: 20px;"><b>MENTOR's BATCH</b></span>
                            <a href="<?php echo base_url('mentor/Add_Batch'); ?>" class="btn btn-primary btn-sm" style="border-radius: 7px;;">Add Batch</a>
                        </div>

                        <div class="card-body">
                            <table class="table table-responsive" id="example" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th class="col-md-1" style="text-align: center;">#</th>
                                        <th class="col-md-1" style="text-align: center;">Batch Name</th>
                                        <th class="col-md-1" style="text-align: center;">Batch Type</th>
                                        <th class="col-md-1" style="text-align: center;">Batch Topic</th>
                                        <th class="col-md-1" style="text-align: center;">Batch Description</th>
                                        <th class="col-md-1" style="text-align: center;">Start DateTime</th>
                                        <th class="col-md-1" style="text-align: center;">End DateTime</th>
                                        <th class="col-md-1" style="text-align: center;">Duration</th>
                                        <th class="col-md-1" style="text-align: center;">Zoom Meeting URL</th>
                                        <th class="col-md-1" style="text-align: center;">Action</th>
                                        <!-- <th class="col-md-1" style="text-align: center;">Edit</th>
                                        <th class="col-md-1" style="text-align: center;">Delete</th> -->
                                    </tr>
                                </thead>
                                <tbody style="text-align: center;">
                                    <?php $id = 1;
                                    foreach ($batch_detail as $value) { ?>

                                        <tr>
                                            <td><?php echo $id; ?></td>
                                            <td><?php echo $value->batch_name; ?></td>
                                            <td><?php echo $value->batch_type; ?></td>
                                            <td><?php echo $value->batch_topic; ?></td>
                                            <td><textarea cols="50" rows="3"><?php echo $value->batch_desc; ?></textarea></td>
                                            <td><?php echo $value->start_date; ?></td>
                                            <td><?php echo $value->end_date; ?></td>
                                            <td><?php echo $value->duration; ?></td>
                                            <td><a href="<?php echo $value->zoom_link; ?>" class="bt btn-sm btn-primary" target="_blank" style="text-decoration: none;">Zoom Meeting Link</a></td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-info" style="border-radius: 7px;;"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="#" class="btn btn-sm btn-danger" style="border-radius: 7px;;"><i class="fa-solid fa-trash"></i></a>
                                            </td>
                                        </tr>

                                    <?php $id++;
                                    } ?>
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