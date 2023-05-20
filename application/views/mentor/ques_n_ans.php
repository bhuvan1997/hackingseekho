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
                <?php if (isset($_SESSION['form_empty'])) { ?>
              <div class="alert alert-danger"><?php echo $_SESSION['form_empty']; ?></div>
            <?php } ?>
                    <div class="card" style="border-radius: 0;">
                        <div class="card-header" style="background: #dee2e673; color: #000;">
                            <span style="font-size: 20px;"><b>QnA</b></span>
                        </div>
                        <form action="<?php echo base_url('mentor/dashboard/ques_process'); ?>" method="post">
                            <input type="hidden" value="<?php echo $_SESSION['loggedId']; ?>" name="mentorId">
                            <?php foreach ($qna_answer as $value) { ?>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleFormControlSelect1"><b>Q1.</b>&nbsp;<b>Which of the following domains are you experienced in?</b></label>
                                            <select class="form-select form-select-sm" id="ques1" name="ques1" style="height: 36px;">
                                                <option value="">Select</option>
                                                <option value="Product" <?php if ($value->ques1 == 'Product') {
                                                                            echo "selected";
                                                                        }
                                                                        ?>>Product</option>
                                                <option value="Marketing" <?php if ($value->ques1 == 'Marketing') {
                                                                                echo "selected";
                                                                            }
                                                                            ?>>Marketing</option>
                                                <option value="Hacking" <?php if ($value->ques1 == 'Hacking') {
                                                                            echo "selected";
                                                                        }
                                                                        ?>>Hacking</option>
                                            </select>
                                            <span class="text-danger" id="dom_exp" style="display: none;">
                                                <p>Please Select option from the list.</p>
                                            </span>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label><b>Q2.</b>&nbsp;<b>Companies that you have worked at:</b></label>
                                            <input type="text" class="form-control form-control-sm" name="ques2" id="ques2" style="height: 36px;" value="<?php echo $value->ques2; ?>" placeholder="Companies that you have worked at:">
                                            <span class="text-danger" id="com_work" style="display: none;">
                                                <p>This field should be filled.</p>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for=""><b>Q3.</b>&nbsp;<b>How many years of experience do you have?</b></label>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="ques3" id="" <?php if ($value->ques3 == "0-2 Years") {
                                                                                                                        echo "checked";
                                                                                                                    } ?> value="0-2 Years">
                                                    0-2 Years
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="ques3" id="" <?php if ($value->ques3 == "3-5 Years") {
                                                                                                                        echo "checked";
                                                                                                                    } ?> value="3-5 Years">
                                                    3-5 Years
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="ques3" id="" <?php if ($value->ques3 == "5-10 Years") {
                                                                                                                        echo "checked";
                                                                                                                    } ?> value="5-10 Years">
                                                    5-10 Years
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="ques3" id="" <?php if ($value->ques3 == "10+ Years") {
                                                                                                                        echo "checked";
                                                                                                                    } ?> value="10+ Years">
                                                    10+ Years
                                                </label>
                                            </div>
                                            <span class="text-danger" id="yr_exp" style="display: none;">
                                                <p>Choose this radio button</p>
                                            </span>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for=""><b>Q4.</b>&nbsp;<b>Do you have prior teaching or mentoring experience?</b></label>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="ques4" id="" <?php if ($value->ques4 == "Yes") {
                                                                                                                        echo "checked";
                                                                                                                    } ?> value="Yes">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="ques4" id="" <?php if ($value->ques4 == "No") {
                                                                                                                        echo "checked";
                                                                                                                    } ?> value="No">
                                                    No
                                                </label>
                                            </div>
                                            <span class="text-danger" id="teach_exp" style="display: none;">
                                                <p>Choose this radio button</p>
                                            </span>
                                        </div>
                                    </div>
                                    <?php $engagement = explode(",", $value->ques5); ?>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for=""><b>Q5.</b>&nbsp;<b>What kind of engagement would you be interested in? (You may choose more than one)</b></label>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="ques5[]" value="1v1 Mentorship ( 1hr / month )" <?php if (in_array("1v1 Mentorship ( 1hr / month )", $engagement)) { ?> checked="checked" <?php } ?>>
                                                    1v1 Mentorship ( 1hr / month )
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="ques5[]" value="Guest Sessions ( 1-2 hrs/month )" <?php if (in_array("Guest Sessions ( 1-2 hrs/month )", $engagement)) { ?> checked="checked" <?php } ?>>
                                                    Guest Sessions ( 1-2 hrs/month )
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="ques5[]" value="One-time Effort ( 2-4 hours )" <?php if (in_array("One-time Effort ( 2-4 hours )", $engagement)) { ?> checked="checked" <?php } ?>>
                                                    One-time Effort ( 2-4 hours )
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="ques5[]" value="1/2 Day Workshop ( 5hrs/month )" <?php if (in_array("1/2 Day Workshop ( 5hrs/month )", $engagement)) { ?> checked="checked" <?php } ?>>
                                                    1/2 Day Workshop ( 5hrs/month )
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="ques5[]" value="4/8/12 Week Cohort Based Course ( 10hrs/ month )" <?php if (in_array("4/8/12 Week Cohort Based Course ( 10hrs/ month )", $engagement)) { ?> checked="checked" <?php } ?>>
                                                    4/8/12 Week Cohort Based Course ( 10hrs/ month )
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="ques5[]" value="I have other ideas" <?php if (in_array("I have other ideas", $engagement)) { ?> checked="checked" <?php } ?>>
                                                    I have other ideas
                                                </label>
                                            </div>
                                            <span class="text-danger" id="checkbox1_error" style="display: none;">
                                                <p>Please Check at least one checkbox</p>
                                            </span>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label><b>Q6.</b>&nbsp;<b>What topic do you want to teach?</b></label>
                                            <input type="text" class="form-control form-control-sm" placeholder="What topic do you want to teach?" id="ques6" name="ques6" style="height: 36px;" value="<?php echo $value->ques6; ?>">
                                            <span class="text-danger" id="topic_teach" style="display: none;">
                                                <p>This field should be filled.</p>
                                            </span>
                                        </div>
                                    </div>
                                    <?php $motivation = explode(",", $value->ques7); ?>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for=""><b>Q7.</b>&nbsp;<b>What's is your biggest motivation for teaching at GrowthSchool?</b></label>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input check" name="ques7[]" value="Giving back to the community" <?php if (in_array("Giving back to the community", $motivation)) { ?> checked="checked" <?php } ?>>
                                                    Giving back to the community
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input check" name="ques7[]" value="Building A Personal Brand" <?php if (in_array("Building A Personal Brand", $motivation)) { ?> checked="checked" <?php } ?>>
                                                    Building A Personal Brand
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input check" name="ques7[]" value="To Make Passive Income" <?php if (in_array("To Make Passive Income", $motivation)) { ?> checked="checked" <?php } ?>>
                                                    To Make Passive Income
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input check" name="ques7[]" value="I Enjoy Teaching" <?php if (in_array("I Enjoy Teaching", $motivation)) { ?> checked="checked" <?php } ?>>
                                                    I Enjoy Teaching
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input check" name="ques7[]" value="I want Self-Improvement/ I want to Stay updated" <?php if (in_array("I want Self-Improvement/ I want to Stay updated", $motivation)) { ?> checked="checked" <?php } ?>>
                                                    I want Self-Improvement/ I want to Stay updated
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input check" name="ques7[]" value="Others" <?php if (in_array("Others", $motivation)) { ?> checked="checked" <?php } ?>>
                                                    Others
                                                </label>
                                            </div>
                                            <span class="text-danger" id="checkbox2_error" style="display: none;">
                                                <p>Please Check at least one checkbox</p>
                                            </span>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for=""><b>Q8.</b>&nbsp;<b>How many followers do you have on your social media cumulatively?</b></label>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="ques8" id="" <?php if ($value->ques8 == "Less than 2000 followers") {
                                                                                                                        echo "checked";
                                                                                                                    } ?> value="Less than 2000 followers">
                                                    Less than 2000 followers
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="ques8" id="" <?php if ($value->ques8 == "2000-10,000 followers") {
                                                                                                                        echo "checked";
                                                                                                                    } ?> value="2000-10,000 followers">
                                                    2000-10,000 followers
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="ques8" id="" <?php if ($value->ques8 == "10,000-50,000 followers") {
                                                                                                                        echo "checked";
                                                                                                                    } ?> value="10,000-50,000 followers">
                                                    10,000-50,000 followers
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="ques8" id="" <?php if ($value->ques8 == "More than 50,000 followers") {
                                                                                                                        echo "checked";
                                                                                                                    } ?> value="More than 50,000 followers">
                                                    More than 50,000 followers
                                                </label>
                                            </div>
                                            <span class="text-danger" id="soc_foll" style="display: none;">
                                                <p>Choose this radio button</p>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label><b>Q9.</b>&nbsp;<b>Link to your LinkedIn profile</b></label>
                                            <input type="text" class="form-control form-control-sm" name="ques9" id="ques9" placeholder="Link to your LinkedIn profile" style="height: 36px;" value="<?php echo $value->ques9; ?>">
                                            <span class="text-danger" id="linked_pro" style="display: none;">
                                                <p>This field should be filled.</p>
                                            </span>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label><b>Q10.</b>&nbsp;<b>Link to your Twitter profile</b></label>
                                            <input type="text" class="form-control form-control-sm" name="ques10" id="ques10" placeholder="Link to your Twitter profile" style="height: 36px;" value="<?php echo $value->ques10; ?>">
                                            <span class="text-danger" id="twitter_pro" style="display: none;">
                                                <p>This field should be filled.</p>
                                            </span>
                                        </div>
                                    </div>


                                    <div style="text-align: end;">
                                        <button type="submit" class="btn btn-primary mr-2 btn-sm" name="submit" id="submit" style="border-radius:7px;">Submit</button>
                                        <button class="btn btn-danger btn-sm" style="border-radius:7px;">Reset</button>
                                    </div>

                                </div>
                            <?php } ?>
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
        $(document).ready(function() {
            $('#submit').on('click', function() {

                // Question1
                let ques1 = $('#ques1').val();
                if (ques1 == '' || ques1 == null) {
                    $('#dom_exp').show();
                    return false;
                } else {
                    $('#dom_exp').hide();
                    // return true;
                }

                // Question2
                let ques2 = $('#ques2').val();
                if (ques2 == '' || ques2 == null) {
                    $('#com_work').show();
                    return false;
                } else {
                    $('#com_work').hide();
                    // return true;
                }

                // Question3
                if ($('input[name="ques3"]:checked').length === 0) {
                    $('#yr_exp').show();
                    return false;
                }
                else
                {
                    $('#yr_exp').hide();
                }

                // Question4
                if ($('input[name="ques4"]:checked').length === 0) {
                    $('#teach_exp').show();
                    return false;
                }
                else
                {
                    $('#teach_exp').hide();
                }

                // Question5
                var engagement = document.getElementsByName("ques5[]");

                var checkedengagement = 0

                for (var i = 0; i < engagement.length; i++) {
                    if (engagement[i].checked) {
                        checkedengagement++;
                    }
                }


                if (checkedengagement == 0) {
                    $('#checkbox1_error').show();
                    return false;
                }
                $('#checkbox1_error').hide();

                // Question6
                let ques6 = $('#ques6').val();
                if (ques6 == '' || ques6 == null) {
                    $('#topic_teach').show();
                    return false;
                } else {
                    $('#topic_teach').hide();
                    // return true;
                }

                // Question7
                var motivation = document.getElementsByName("ques7[]");

                var checkedmotivation = 0

                for (var i = 0; i < motivation.length; i++) {
                    if (motivation[i].checked) {
                        checkedmotivation++;
                    }
                }


                if (checkedmotivation == 0) {
                    $('#checkbox2_error').show();
                    return false;
                }
                // return true;
                $('#checkbox2_error').hide();

                // Question8
                if ($('input[name="ques8"]:checked').length === 0) {
                    $('#soc_foll').show();
                    return false;
                }
                else
                {
                    $('#soc_foll').hide();
                }

                // Question9
                let ques9 = $('#ques9').val();
                if (ques9 == '' || ques9 == null) {
                    $('#linked_pro').show();
                    return false;
                } else {
                    $('#linked_pro').hide();
                    // return true;
                }

                // Question6
                let ques10 = $('#ques10').val();
                if (ques10 == '' || ques10 == null) {
                    $('#twitter_pro').show();
                    return false;
                } else {
                    $('#twitter_pro').hide();
                    // return true;
                }


            });
        });
    </script>

    <!-- SCRIPT END -->
</body>

</html>