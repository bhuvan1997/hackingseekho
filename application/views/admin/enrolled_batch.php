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
                        <div class="card-header" style="background: #dee2e673; color: #000;display: flex; align-items: center; justify-content: space-between;">
                            <span style="font-size: 20px;"><b>ENROLLED BATCH</b></span>
                        </div>

                        <div class="card-body">
                            <table class="table table-responsive" id="example" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th class="col-md-1" style="text-align: center;">#</th>
                                        <th class="col-md-1" style="text-align: center;">View Batch</th>
                                        <th class="col-md-1" style="text-align: center;">Live Class URL</th>
                                        <th class="col-md-1" style="text-align: center;">Status</th>
                                        <th class="col-md-1" style="text-align: center;">Rating</th>
                                    </tr>
                                </thead>
                                <tbody style="text-align: center;">
                                    <?php $id=1; foreach ($enrolled as $value) { 
                                    ?>

                                    <tr>
                                        <td><?php echo $id; ?></td>
                                        <td style="text-align: center;"><a href="#" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $value->bid; ?>" style="border-radius:7px">View</a>
                                            <div class="modal fade" id="exampleModal<?php echo $value->bid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Batch Details</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            
                                                            <div class="card-body" style="padding: 0px;">



                                                                <div class="row">

                                                                    <div class="col-md-4">
                                                                        <p><b>Mentor Name</b></p>
                                                                        <p><?php echo $value->name; ?></p>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <p><b>Batch Name</b></p>
                                                                        <p>#<?php echo $value->batch_name; ?></p>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <p><b>Batch Type</b></p>
                                                                        <p><?php echo $value->batch_type; ?></p>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <p><b>Batch Topic</b></p>
                                                                        <p><?php echo $value->batch_topic; ?></p>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <p><b>Start Date</b></p>
                                                                        <p><?php echo $value->start_date; ?></p>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <p><b>End Date</b></p>
                                                                        <p><?php echo $value->end_date; ?></p>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <p><b>Batch Duration</b></p>
                                                                        <p><?php echo $value->duration; ?></p>
                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><a href="<?php echo $value->zoom_link; ?>"><?php echo $value->zoom_link; ?></a></td>
                                        <td>
                                            <?php if($value->status == 0) { ?>
                                                <span>Expired</span>
                                            <?php } elseif($value->status == 1) { ?>
                                                <span>Upcomming</span>
                                            <?php } elseif($value->status == 2) { ?>
                                                <span>Completed</span>
                                            <?php } ?>
                                        </td>
                                        <td><span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </td>
                                    </tr>

                                    <?php $id++; } 
                                    ?>
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