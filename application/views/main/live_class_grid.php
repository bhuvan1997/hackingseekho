<!DOCTYPE html>
<html lang="en">

<?php include('header.php'); ?>

<body>

    <div class="main-wrapper">

        <?php include('navbar.php'); ?>


        <div class="breadcrumb-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-12 col-12">
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url('Home'); ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Classes</li>
                            </ol>
                        </nav>
                        <h2 class="breadcrumb-title">All Class</h2>
                    </div>
                </div>
            </div>
        </div>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-md-12">
                        <div class="row blog-grid-row">
                            <?php foreach ($class_d as $value) { ?>

                                <div class="col-md-6 col-sm-12">
                                    <div class="blog grid-blog">
                                        <div class="blog-image">
                                            <a href="<?php echo base_url('Class-Detail/' . $value->id); ?>"><img class="img-fluid" src="<?php echo base_url('assets/frontend/assets/img/blog/blog-01.jpg'); ?>" alt="Post Image"></a>
                                        </div>
                                        <div class="blog-content">
                                            <ul class="entry-meta meta-item">
                                                <li>
                                                    <div class="post-author">
                                                        <a href="#"><img src="<?php echo base_url('assets/uploads/' . $value->user_img) ?>" alt="Post Author"> <span><?php echo $value->name; ?></span></a>
                                                    </div>
                                                </li>
                                                <?php
                                                $c_date = $value->c_date;
                                                $substr = substr($c_date, 0, 10);
                                                $date = new DateTime($substr);
                                                ?>
                                                <li><i class="far fa-clock"></i> </i><?php echo $date->format('d M Y'); ?></li>
                                            </ul>
                                            <h3 class="blog-title"><a href="<?php echo base_url('Class-Detail/' . $value->id); ?>"><?php echo $value->batch_name; ?></a></h3>
                                            <p class="mb-0"><?php echo $value->batch_desc; ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="blog-pagination">
                                    <nav>
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-double-left"></i></a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>


        <?php include('footer.php'); ?>

    </div>


    <?php include('script.php'); ?>


</body>

</html>