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
                        <?php echo !empty($statusMsg) ? '<p class="status-msg">' . $statusMsg . '</p>' : ''; ?>
                        <div class="card-header" style="background: #dee2e673; color: #000;display: flex; align-items: center; justify-content: space-between;">
                            <span style="font-size: 20px;"><b>NOTES FOR ENROLLED STUDENTS</b></span>
                            <a href="#" class="btn btn-sm btn-primary" style="border-radius:7px" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD</a>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Attachments</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">

                                            <div class="card-body" style="padding: 0px;">

                                                <div class="row">

                                                    <form class="form" action="<?php echo base_url('mentor/dashboard/upload_file'); ?>" method="POST" enctype="multipart/form-data">
                                                        <div class="col-md-12">
                                                            <label for=""><b>Batch</b></label>
                                                            <select class="form-select form-select-sm" name="enroll_Id" id="">
                                                                <option value="">Select Batch</option>
                                                                <?php foreach ($btch_name as $value) { ?>
                                                                    <option value="<?php echo $value->id; ?>"><?php echo $value->batch_name; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div> <br>
                                                        <div class="col-md-12">
                                                            <label for=""><b>Choose Attachments</b></label>
                                                            <input type="file" class="form-control" name="files_notes" style="height: 34px;">
                                                        </div>
                                                        <div style="text-align: end; margin-top: 15px;" id="btn_report">

                                                            <button type="submit" class="btn btn-sm btn-primary" name="upload_attch" style="border-radius:7px">Upload</button>
                                                        </div>
                                                    </form>

                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="card-body">
                            <table class="table table-responsive" id="example" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th class="col-md-1" style="text-align: center;">#</th>
                                        <th class="col-md-1" style="text-align: center;">Batch Name</th>
                                        <th class="col-md-1" style="text-align: center;">Attachments View</th>
                                        <th class="col-md-1" style="text-align: center;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $id = 1;
                                    foreach ($btch_dtl as $row) { ?>

                                        <tr>
                                            <td style="text-align: center;"><?php echo $id; ?></td>
                                            <td style="text-align: center;"><?php echo $row->btch_n; ?></td>
                                            <td style="text-align: center;"><a href="#" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#viewModal<?php echo $row->id; ?>" style="border-radius:7px">View</a>
                                                <div class="modal fade" id="viewModal<?php echo $row->id; ?>" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="viewModalLabel">Attachments</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">

                                                                <div class="card-body" style="padding: 0px;">

                                                                    <div class="row">
                                                                        <?php
                                                                        $substr = substr($row->attachments, -4);
                                                                        if ($substr == '.pdf') {
                                                                        ?>

                                                                            <div class="col-md-4">
                                                                                <img src="<?php echo base_url('assets/pdf_img.png'); ?>" alt="" srcset="" style="width: 100px; border-radius: 0%; height: 100px;">
                                                                                <br>
                                                                                <a href="<?php echo base_url('assets/notes/' . $row->attachments); ?>" class="btn btn-sm btn-primary" download>Download</a>
                                                                            </div>
                                                                        <?php } else { ?>
                                                                            <div class="col-md-4">
                                                                                <img src="<?php echo base_url('assets/notes/' . $row->attachments); ?>" alt="" srcset="" style="width: 100px; border-radius: 0%; height: 100px;">
                                                                                <br>
                                                                                <a href="<?php echo base_url('assets/notes/' . $row->attachments); ?>" class="btn btn-sm btn-primary" download>Download</a>
                                                                            </div>
                                                                        <?php } ?>
                                                                    </div>


                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                            <td style="text-align: center;">
                                                <a href="#" class="btn btn-sm btn-primary" style="border-radius:7px">Edit</a>
                                                <a href="<?php echo base_url('mentor/dashboard/delete_attachment/' . $row->id); ?>" class="btn btn-sm btn-danger" style="border-radius:7px" onclick="return confirm('Are you sure you want to delete this File ?')">Delete</a>
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