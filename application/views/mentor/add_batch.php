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
                            <span style="font-size: 20px;"><b>ADD BATCH</b></span>
                            <a href="<?php echo base_url('mentor/Batch'); ?>" class="btn btn-primary btn-sm" style="border-radius: 7px;;">Back </a>
                        </div>

                        <div class="card-body">

                            <form action="<?php echo base_url('mentor/Add_Batch'); ?>" method="post">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="" style="font-weight: 600;">Batch Name</label><br>
                                        <input type="text" class="form-control form-control-sm" name="batch_name" placeholder="Batch Name" style="height: 36px;">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="" style="font-weight: 600;">Batch Type</label><br>
                                        <input type="text" class="form-control form-control-sm" name="batch_type" placeholder="Batch Type" style="height: 36px;" value="Online" disabled>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="" style="font-weight: 600;">Batch Topic</label><br>
                                        <input type="text" class="form-control form-control-sm" name="batch_topic" placeholder="Batch Topic" style="height: 36px;">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="" style="font-weight: 600;">Batch Description</label><br>
                                        <textarea class="form-control" name="batch_desc" cols="30" rows="5" placeholder="Batch Description"></textarea>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="" style="font-weight: 600;">Start DateTime</label><br>
                                        <input type="text" class="form-control form-control-sm" name="start_date" id="start_date" placeholder="Select Start DateTime" style="height: 36px;" autocomplete="off">
                                        <input type="hidden" id="dateStart" name="date_start">
                                        <input type="hidden" id="full_start" name="full_start">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="" style="font-weight: 600;">Duration</label><br>
                                        <div class="input-group clockpicker" data-autoclose="true">
                                            <input type="text" class="form-control form-control-sm" name="duration" id="duration" placeholder="Choose time (hh:mm)" autocomplete="off" style="height: 36px;">
                                            <span class="input-group-addon">
                                                <span class="btn" style="background:#e9ecef; height:36px;"><box-icon name='time-five'></box-icon></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="" style="font-weight: 600;">End DateTime</label><br>
                                        <input type="text" class="form-control form-control-sm" name="end_date" id="end_date" style="height: 36px;">
                                    </div>

                                </div>

                                <div style="text-align: end;">
                                    <button type="submit" class="btn btn-primary mr-2 btn-sm" name="submit" style="border-radius: 7px;;">Submit</button>
                                </div>
                            </form>

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
        $('#start_date').datetimepicker({
            dateFormat: 'yy-mm-dd',
            timeFormat: 'hh:mm:ss',
            step: 5
        });

        $('#start_date').on('change', function() {
            let start_date = $(this).val();
            // alert(start_date);
            start_date = start_date.replaceAll("/", "-");
            $('#dateStart').val(start_date);

            let dateStart = $('#dateStart').val();
            $('#full_start').val(dateStart+":00")
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.clockpicker').clockpicker();
        });
    </script>

    <script>
        $(document).ready(function() {

            $('#duration').on('blur', function() {

                let end = $('#end_date').val();
                let start_date = $('#start_date').val();
                let duration = $(this).val();
                // if (start_date == '' || expectTime == '') {
                //     alert("Please Select Date First...");
                // } else {
                // console.log(start_date);

                let date = new Date(start_date);
                // console.log(date);

                var hms = duration + ":00"; // your input string
                var a = hms.split(':'); // split it at the colons

                var seconds = (+a[0]) * 60 * 60 + (+a[1]) * 60 + (+a[2]);
                console.log(seconds);

                var d = Date.parse(date) / 1000;
                var timeStamp = d + seconds;
                console.log(timeStamp);

                var dte = new Date(timeStamp * 1000);

                var months = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'];
                var year = dte.getFullYear();
                var month = months[dte.getMonth()];
                var dates = dte.getDate();
                var hour = dte.getHours();
                var min = dte.getMinutes();
                var sec = dte.getSeconds();
                var times = year + '-' + month + '-' + dates + ' ' + hour + ':' + min;

                $('#end_date').val(times);

                // }

            })
        });
    </script>


    <!-- SCRIPT END -->
</body>

</html>