<!DOCTYPE html>
<html lang="zxx">

<?php include('header.php'); ?>

<body>

    <div class="main-wrapper">

        <?php include('navbar.php'); ?>

        <?php foreach ($class_det as $value) { ?>
            <div class="breadcrumb-bar">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-12 col-12">
                            <nav aria-label="breadcrumb" class="page-breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('Home'); ?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Class Detail</li>
                                </ol>
                            </nav>
                            <h2 class="breadcrumb-title"><?php echo $value->batch_name; ?></h2>
                        </div>
                    </div>
                </div>
            </div>


            <div class="content">
                <div class="container-fluid">
                    <div class="row">


                        <div class="blog blog-single-post">
                            <div class="blog-image">
                                <a href="javascript:void(0);"><img alt="" src="<?php echo base_url('assets/frontend/assets/img/blog/blog-01.jpg') ?>" class="img-fluid"></a>
                            </div>
                            <h3 class="blog-title"><?php echo $value->batch_name; ?></h3>
                            <div class="blog-info clearfix">
                                <div class="post-left">
                                    <ul>
                                        <li>
                                            <div class="post-author">
                                                <a href="profile.html"><img src="<?php echo base_url('assets/uploads/' . $value->user_img) ?>" alt="Post Author"> <span><?php echo $value->name; ?></span></a>
                                            </div>
                                        </li>
                                        <?php
                                        $c_date = $value->c_date;
                                        $substr = substr($c_date, 0, 10);
                                        $date = new DateTime($substr);
                                        ?>
                                        <li><i class="far fa-calendar"></i><?php echo $date->format('d M Y'); ?></li>
                                        <!-- <li><i class="far fa-comments"></i>12 Comments</li> -->
                                        <!-- <li><i class="fa fa-tags"></i>HTML</li> -->
                                        <?php if(isset($_SESSION['loggedId'])) { ?>
                                        <?php foreach ($class_d_book as $row) { ?>
                                            <?php if (($row->batch_id == $value->id) && ($row->user_id == $_SESSION['loggedId'])) { ?>
                                                <a href="" class="badge badge-danger" id="booked">Booked</a>
                                            <?php } elseif (($row->batch_id != $value->id) && ($row->user_id != $_SESSION['loggedId'])) { ?>
                                                <a href="" class="badge badge-primary" id="book_now">Book Now</a>
                                            <?php } ?>

                                        <?php } ?>
                                      
                                                <?php } else { ?>
                                                    <a href="" class="badge badge-primary">Book Now</a>
                                                    <?php } ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-content">
                                <p><?php echo $value->batch_desc; ?></p>
                            </div>
                            <br><br>
                            <div style="float: right;">
                            
                                <?php if (!isset($_SESSION['username'])) { ?>
                                    <a href="<?php echo base_url('user/Signin'); ?>" class="btn btn-primary btn_book">Book Class</a>
                                <?php } else { ?>
                                    <a href="<?php echo base_url('class_enroll/' . $value->id); ?>" class="btn btn-primary btn_book">Book Class</a>
                                <?php } ?>
                                
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        <?php } ?>

        <?php include('footer.php'); ?>

    </div>


    <?php include('script.php'); ?>

    <script>
        $(document).ready(function(){
            let booked = $('#booked').text();
            let book_now = $('#book_now').text();
            
            if(booked == 'Booked')
            {
                $('.btn_book').hide();
            }
            else if(book_now == 'Book Now')
            {
                $('.btn_book').show();
            }
        });
    </script>

</body>

</html>