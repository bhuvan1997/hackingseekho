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
                            <span style="font-size: 20px;"><b>NOTES</b></span>
                        </div>

                        <div class="card-body">
                            <table class="table table-responsive" id="example" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th class="col-md-1" style="text-align: center;">#</th>
                                        <th class="col-md-1" style="text-align: center;">Batch Name</th>
                                        <th class="col-md-1" style="text-align: center;">Notes</th>
                                    </tr>
                                </thead>
                                <tbody style="text-align: center;">
                                    <?php $id = 1;
                                    foreach ($notes as $value) { ?>

                                        <tr>
                                            <td><?php echo $id; ?></td>
                                            <td><?php echo $value->btch_n; ?></td>
                                            <td style="text-align: center;"><a href="#" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#viewModal<?php echo $value->id; ?>" style="border-radius:7px">View</a>
                                                <div class="modal fade" id="viewModal<?php echo $value->id; ?>" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="viewModalLabel">Shared Notes</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">

                                                                <div class="card-body" style="padding: 0px;">

                                                                    <div class="row">
                                                                        <?php
                                                                        $substr = substr($value->attachments, -4);
                                                                        if ($substr == '.pdf') {
                                                                        ?>

                                                                            <div class="col-md-4">
                                                                                <img src="<?php echo base_url('assets/pdf_img.png'); ?>" alt="" srcset="" style="width: 100px; border-radius: 0%; height: 100px;">
                                                                                <br>
                                                                                <a href="<?php echo base_url('assets/notes/' . $value->attachments); ?>" class="btn btn-sm btn-primary" download>Download</a>
                                                                            </div>
                                                                        <?php } else { ?>
                                                                            <div class="col-md-4">
                                                                                <img src="<?php echo base_url('assets/notes/' . $value->attachments); ?>" alt="" srcset="" style="width: 100px; border-radius: 0%; height: 100px;">
                                                                                <br>
                                                                                <a href="<?php echo base_url('assets/notes/' . $value->attachments); ?>" class="btn btn-sm btn-primary" download>Download</a>
                                                                            </div>
                                                                        <?php } ?>
                                                                    </div>


                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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