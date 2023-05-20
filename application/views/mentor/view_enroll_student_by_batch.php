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
                            <span style="font-size: 20px;"><b>ENROLLED STUDENTS</b></span>
                        </div>

                        <div class="card-body">
                            <table class="table table-responsive" id="example" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th class="col-md-1" style="text-align: center;">#</th>
                                        <th class="col-md-1" style="text-align: center;">Batch Name</th>
                                        <th class="col-md-1" style="text-align: center;">Student Name</th>
                                        <th class="col-md-1" style="text-align: center;">Batch View</th>
                                        <th class="col-md-1" style="text-align: center;">Status</th>
                                        <th class="col-md-1" style="text-align: center;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $id = 1;
                                    foreach ($enrolled_std as $value) { ?>
                                        <tr>
                                            <td style="text-align: center;"><?php echo $id; ?></td>
                                            <td style="text-align: center;"><?php echo $value->batch_name; ?></td>
                                            <td style="text-align: center;"><?php echo $value->name; ?></td>
                                            <td style="text-align: center;"><a href="#" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $value->id; ?>" style="border-radius:7px">View</a>
                                                <div class="modal fade" id="exampleModal<?php echo $value->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Batch Details</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">

                                                                <div class="card-body" style="padding: 0px;">

                                                                    <div class="card" style="margin:10px;">
                                                                        <div class="card-body">
                                                                            <h4>Student Detail</h4>
                                                                            <center>
                                                                                <hr>
                                                                            </center>
                                                                            <div class="row">

                                                                                <div class="col-md-4">
                                                                                    <p><b>Student Name</b></p>
                                                                                    <p><?php echo $value->name; ?></p>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <p><b>Father's Name</b></p>
                                                                                    <p><?php echo $value->father_name; ?></p>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <p><b>Gender</b></p>
                                                                                    <p><?php echo $value->gender; ?></p>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <p><b>Address</b></p>
                                                                                    <p><?php echo $value->city; ?>,<?php echo $value->state; ?></p>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <p><b>Qualification</b></p>
                                                                                    <p><?php echo $value->highest_degree; ?></p>
                                                                                </div><?php $year = substr($value->year_passing, 0, 4) ?>
                                                                                <div class="col-md-4">
                                                                                    <p><b>Year of Passing</b></p>
                                                                                    <p><?php echo $year; ?></p>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="card" style="margin: 10px;">
                                                                        <div class="card-body">
                                                                            <h4>Batch Detail</h4>
                                                                            <center>
                                                                                <hr>
                                                                            </center>
                                                                            <div class="row">

                                                                                <div class="col-md-4">
                                                                                    <p><b>Batch Name</b></p>
                                                                                    <p><?php echo $value->batch_name; ?></p>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <p><b>Batch Type</b></p>
                                                                                    <p><?php echo $value->batch_type; ?></p>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <p><b>Batch Topic</b></p>
                                                                                    <p><?php echo $value->batch_topic; ?></p>
                                                                                </div>
                                                                                <?php $sdate = substr($value->start_date, 0, 10);
                                                                                $f_sdate = new DateTime($sdate);
                                                                                ?>
                                                                                <div class="col-md-4">
                                                                                    <p><b>Start Date</b></p>
                                                                                    <p><?php echo $f_sdate->format('d M Y'); ?></p>
                                                                                </div>
                                                                                <?php $edate = substr($value->end_date, 0, 10);
                                                                                $f_edate = new DateTime($edate);
                                                                                ?>
                                                                                <div class="col-md-4">
                                                                                    <p><b>End Date</b></p>
                                                                                    <p><?php echo $f_edate->format('d M Y'); ?></p>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <p><b>Batch Duration</b></p>
                                                                                    <p><?php echo $value->duration; ?></p>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="card" style="margin:10px;">
                                                                        <div class="card-body">
                                                                            <h4>Take Action if necessary</h4>
                                                                            <center>
                                                                                <hr>
                                                                            </center>
                                                                            <div class="row">

                                                                                <div class="col-md-12">
                                                                                    <form class="form-inline" action="" method="POST">
                                                                                        <label for=""><b>Report a student ?</b></label> &nbsp;&nbsp;&nbsp;
                                                                                        <select name="" id="report_option" class="form-contol form-select-sm" style="width: 40%; height: 34px;">
                                                                                            <option value="">Select Option</option>
                                                                                            <option value="0">No</option>
                                                                                            <option value="1">Yes</option>
                                                                                        </select>

                                                                                    </form>
                                                                                </div><br>
                                                                                <form class="form" action="" method="POST">
                                                                                    <div class="col-md-12" style="display: none;" id="reason">

                                                                                        <label for=""><b>Reason to report</b></label>
                                                                                        <textarea name="" class="form-control" id="" cols="30" rows="3" placeholder="Reason"></textarea>


                                                                                    </div>
                                                                                    <div style="text-align: end; margin-top: 15px; display:none;" id="btn_report">

                                                                                        <button type="button" class="btn btn-sm btn-primary" style="border-radius:7px">Report</button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                            <td style="text-align: center;">
                                                <?php if ($value->status == 0) { ?>
                                                    <span class="badge badge-danger">Expired</span>
                                                <?php } elseif ($value->status == 1) { ?>
                                                    <span class="badge badge-warning">Upcomming</span>
                                                <?php } elseif ($value->status == 2) { ?>
                                                    <span class="badge badge-success">Completed</span>
                                                <?php } ?>
                                            </td>
                                            <td style="text-align: center;">
                                                <a href="#" class="btn btn-sm btn-primary" style="border-radius:7px">Edit</a>
                                                <a href="#" class="btn btn-sm btn-danger" style="border-radius:7px">Delete</a>
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

            $('#report_option').on('change', function() {
                let report_option = $(this).val();
                if (report_option == 0 || report_option == '') {
                    $('#reason').hide();
                    $('#btn_report').hide();
                } else {
                    $('#reason').show();
                    $('#btn_report').show();
                }
            });
        });
    </script>
    <!-- SCRIPT END -->
</body>

</html>