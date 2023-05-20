<!DOCTYPE html>
<html lang="en">

<?php include('header.php'); ?>

<body>

    <div class="main-wrapper">

        <?php include('navbar.php'); ?>


        <div class="breadcrumb-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-8 col-12">
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Mentor List</li>
                            </ol>
                        </nav>
                        <h2 class="breadcrumb-title">Mentor List</h2>
                    </div>
                    <div class="col-md-4 col-12">
                        <form class="search-form custom-search-form">
                            <div class="input-group">
                                <input type="text" placeholder="Search Mentees..." class="form-control">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="row row-grid">
                            <?php foreach ($all_mentor as $value) { ?>
                                
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="card widget-profile user-widget-profile">
                                    <div class="card-body">
                                        <div class="pro-widget-content">
                                            <div class="profile-info-widget">
                                                <a href="<?php echo base_url('Mentor-Profile/'.$value->id); ?>" class="booking-user-img">
                                                    <img src="<?php echo base_url('assets/uploads/'.$value->user_img); ?>" alt="User Image">
                                                </a>
                                                <div class="profile-det-info">
                                                    <h3><a href="<?php echo base_url('Mentor-Profile/'.$value->id); ?>"><?php echo $value->name; ?></a></h3>
                                                    <div class="mentee-details">
                                                        <h5><b>Mentor ID :</b> <?php echo $value->id; ?></h5>
                                                        <h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> <?php echo $value->city.", ".$value->state.", ".$value->country; ?></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mentee-info">
                                            <ul>
                                                <li>Phone <span>+1 952 001 8563</span></li>
                                                <li>Age <span>38 Years, Male</span></li>
                                                <li>Blood Group <span>AB+</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php } ?>
                        </div>
                        <div class="blog-pagination mt-4">
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


        <?php include('footer.php'); ?>

    </div>


    <?php include('script.php'); ?>
</body>

</html>