<!DOCTYPE html>
<html lang="en">

<?php include('header.php'); ?>

<body class="body-home-one">

    <div class="main-wrapper">

        <?php include('navbar.php'); ?>


        <section class=" home-slide-two home-slide-search d-flex align-items-center">
            <div class="container">
                <div class="row ">
                    <div class="col-md-6 ">
                        <div class="home-slide-face aos" data-aos="fade-up">
                            <div class="hometwo-slide-text">
                                <a href="dashboard.html" class="btn bg-stop-learn">Never Stop Learning</a>
                                <h1>Online Courses <br>to Learn</h1>
                                <p>Own your future learning new skills online</p>
                            </div>

                            <div class="search-box ">
                                <form action="<?php echo base_url('Search'); ?>">
                                    <div class="form-group search-info location-search ">
                                        <input type="text" class="form-control text-truncate" placeholder=" Search School, Online educational centers, etc">
                                        <a href="<?php echo base_url('Search'); ?>" class="btn bg-search search-btn align-items-center d-flex justify-content-center"><i class="fa fa-search" aria-hidden="true"></i></a>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="object-slide-img aos " data-aos="fade-up">
                            <img src="<?php echo base_url(''); ?>assets/frontend/assets/img/object-three.png" alt>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="most-popular most-popular-two">
            <div class="container">
                <div class="section-top-head">
                    <div class="section-header aos " data-aos="fade-up">
                        <h2>Most Populer Categories</h2>
                        <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan bibendum gravida maecenas augue elementum et neque. Suspendisse imperdiet.</p>
                    </div>
                    <div class="section-btn align-items-center aos " data-aos="fade-up">
                        <a href="<?php echo base_url('Search'); ?>" class="btn btn-primary">See All Categories</a>
                    </div>
                </div>
                <div class="popular-categories aos " data-aos="fade-up">
                    <div class="row">
                        <div class="col-lg-2 col-md-4">
                            <a href="<?php echo base_url('Search'); ?>">
                                <div class="sub-categories bg-design align-items-center">
                                    <div class="categories-img d-flex justify-content-center align-items-center">
                                        <img src="<?php echo base_url(''); ?>assets/frontend/assets/img/categories/cate-1.svg" alt>
                                    </div>
                                    <div class="categories-text text-center">
                                        <h4>Design</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <a href="<?php echo base_url('Search'); ?>">
                                <div class="sub-categories bg-development align-items-center">
                                    <div class="categories-img d-flex justify-content-center align-items-center">
                                        <img src="<?php echo base_url(''); ?>assets/frontend/assets/img/categories/cate-2.svg" alt>
                                    </div>
                                    <div class="categories-text text-center">
                                        <h4>Development</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <a href="<?php echo base_url('Search'); ?>">
                                <div class="sub-categories bg-software align-items-center">
                                    <div class="categories-img d-flex justify-content-center align-items-center">
                                        <img src="<?php echo base_url(''); ?>assets/frontend/assets/img/categories/cate-3.svg" alt>
                                    </div>
                                    <div class="categories-text text-center">
                                        <h4>IT & Software</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <a href="<?php echo base_url('Search'); ?>">
                                <div class="sub-categories bg-business align-items-center">
                                    <div class="categories-img d-flex justify-content-center align-items-center">
                                        <img src="<?php echo base_url(''); ?>assets/frontend/assets/img/categories/cate-4.svg" alt>
                                    </div>
                                    <div class="categories-text text-center">
                                        <h4>Business</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <a href="<?php echo base_url('Search'); ?>">
                                <div class="sub-categories bg-marketing align-items-center">
                                    <div class="categories-img d-flex justify-content-center align-items-center">
                                        <img src="<?php echo base_url(''); ?>assets/frontend/assets/img/categories/cate-5.svg" alt>
                                    </div>
                                    <div class="categories-text text-center">
                                        <h4>Marketing</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <a href="<?php echo base_url('Search'); ?>">
                                <div class="sub-categories bg-photography align-items-center">
                                    <div class="categories-img d-flex justify-content-center align-items-center">
                                        <img src="<?php echo base_url(''); ?>assets/frontend/assets/img/categories/cate-6.svg" alt>
                                    </div>
                                    <div class="categories-text text-center">
                                        <h4>Photography</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section trending-courses trending-courses-two" style="background: white;">
            <div class="container">
                <div class="section-top-head">
                    <div class="section-header aos " data-aos="fade-up">
                        <h2>Live Classes</h2>
                        <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan bibendum gravida maecenas augue elementum et neque. Suspendisse imperdiet.</p>
                    </div>
                    <div class="section-btn align-items-center aos " data-aos="fade-up">
                        <a href="<?php echo base_url('All-Classes'); ?>" class="btn btn-primary">View All</a>
                    </div>
                </div>
                <div class="course-two-all aos " data-aos="fade-up">
                    <div class="row">
                        <?php foreach ($class_d as $value) { ?>

                            <div class="col-lg-4 col-md-6">
                                <div class="course-box">
                                    <div class="product">
                                        <div class="product-img">
                                            <a href="<?php echo base_url('Class-Detail/' . $value->id); ?>">
                                                <img class="img-fluid" alt src="<?php echo base_url(''); ?>assets/frontend/assets/img/trend-img.png" width="600" height="300">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <div class="course-info d-flex align-items-center">
                                                <div class="rating rating-star">
                                                    <i class="fas fa-star filled"></i>
                                                    <span class="d-inline-block average-rating rate-point ">4.4<span class="rate-star-point">(15)</span></span>
                                                </div>
                                                <div class="course-view">
                                                    <i class="fas fa-file-alt file-pink"></i>
                                                    <div class="course-point">
                                                        <span>85</span>
                                                    </div>
                                                </div>
                                                <div class="course-view">
                                                    <i class="fas fa-user-graduate"></i>
                                                    <div class="graduate-point">
                                                        <span>85</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="display: flex; align-items: center; justify-content: space-between;">
                                                <h3 class="title">

                                                    <a href="<?php echo base_url('Class-Detail/' . $value->id); ?>"><?php echo $value->batch_name; ?></a>

                                                </h3>
                                                <?php if(isset($_SESSION['loggedId'])) { ?>
                                                <?php foreach ($class_d_book as $row) { ?>
                                                    <?php if (($row->batch_id == $value->id) && ($row->user_id == $_SESSION['loggedId'])) { ?>
                                                        <a href="" class="badge badge-danger">Booked</a>
                                                    <?php } elseif (($row->batch_id != $value->id) && ($row->user_id != $_SESSION['loggedId'])) { ?>
                                                        <a href="" class="badge badge-primary">Book Now</a>
                                                    <?php } ?>

                                                <?php } ?>
                                                <?php } else { ?>
                                                    <a href="" class="badge badge-primary">Book Now</a>
                                                    <?php } ?>
                                            </div>
                                            <div class="rating rating-star rating-two align-items-center">
                                                <div class="rating-img">
                                                    <img src="<?php echo base_url('assets/uploads/' . $value->user_img) ?>" alt>
                                                </div>
                                                <h5><?php echo $value->name; ?></h5>
                                                <div class="course-price">
                                                    <h4><span>$99.00</span>$200</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="section trending-courses trending-courses-two">
            <div class="container">
                <div class="section-top-head">
                    <div class="section-header aos " data-aos="fade-up">
                        <h2>Most Trending Courses</h2>
                        <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan bibendum gravida maecenas augue elementum et neque. Suspendisse imperdiet.</p>
                    </div>
                    <div class="section-btn align-items-center aos " data-aos="fade-up">
                        <a href="<?php echo base_url('Search'); ?>" class="btn btn-primary">View All</a>
                    </div>
                </div>
                <div class="course-two-all aos " data-aos="fade-up">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="course-box">
                                <div class="product">
                                    <div class="product-img">
                                        <a href="<?php echo base_url('Search'); ?>">
                                            <img class="img-fluid" alt src="<?php echo base_url(''); ?>assets/frontend/assets/img/trend-img.png" width="600" height="300">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="course-info d-flex align-items-center">
                                            <div class="rating rating-star">
                                                <i class="fas fa-star filled"></i>
                                                <span class="d-inline-block average-rating rate-point ">4.4<span class="rate-star-point">(15)</span></span>
                                            </div>
                                            <div class="course-view">
                                                <i class="fas fa-file-alt file-pink"></i>
                                                <div class="course-point">
                                                    <span>85</span>
                                                </div>
                                            </div>
                                            <div class="course-view">
                                                <i class="fas fa-user-graduate"></i>
                                                <div class="graduate-point">
                                                    <span>85</span>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="title">
                                            <?php if (!isset($_SESSION['username'])) { ?>
                                                <a href="<?php echo base_url('user/Signin'); ?>">Hacking</a>
                                            <?php } else { ?>
                                                <a href="<?php echo base_url('user/Profile'); ?>">Hacking</a>
                                            <?php } ?>
                                        </h3>
                                        <div class="rating rating-star rating-two align-items-center">
                                            <div class="rating-img">
                                                <img src="<?php echo base_url(''); ?>assets/frontend/assets/img/user/user2.jpg" alt>
                                            </div>
                                            <h5>Nicole Brown</h5>
                                            <div class="course-price">
                                                <h4><span>$99.00</span>$200</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="course-box">
                                <div class="product">
                                    <div class="product-img">
                                        <a href="<?php echo base_url('Search'); ?>">
                                            <img class="img-fluid" alt src="<?php echo base_url(''); ?>assets/frontend/assets/img/trend-img1.png" width="600" height="300">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="course-info d-flex align-items-center">
                                            <div class="rating rating-star">
                                                <i class="fas fa-star filled"></i>
                                                <span class="d-inline-block average-rating rate-point ">4.1<span class="rate-star-point">(15)</span></span>
                                            </div>
                                            <div class="course-view">
                                                <i class="fas fa-file-alt file-pink"></i>
                                                <div class="course-point">
                                                    <span>70</span>
                                                </div>
                                            </div>
                                            <div class="course-view">
                                                <i class="fas fa-user-graduate"></i>
                                                <div class="graduate-point">
                                                    <span>70</span>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="title"><a href="<?php echo base_url('Search'); ?>">Photography Crash Course for Photographer</a></h3>
                                        <div class="rating rating-star rating-two align-items-center">
                                            <div class="rating-img">
                                                <img src="<?php echo base_url(''); ?>assets/frontend/assets/img/user/user3.jpg" alt>
                                            </div>
                                            <h5>Chalmers</h5>
                                            <div class="course-price">
                                                <h4><span>$99.00</span>$400</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="course-box">
                                <div class="product">
                                    <div class="product-img">
                                        <a href="<?php echo base_url('Search'); ?>">
                                            <img class="img-fluid" alt src="<?php echo base_url(''); ?>assets/frontend/assets/img/trend-img2.png" width="600" height="300">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="course-info d-flex align-items-center">
                                            <div class="rating rating-star">
                                                <i class="fas fa-star filled"></i>
                                                <span class="d-inline-block average-rating rate-point ">4.5<span class="rate-star-point">(15)</span></span>
                                            </div>
                                            <div class="course-view">
                                                <i class="fas fa-file-alt file-pink"></i>
                                                <div class="course-point">
                                                    <span>95</span>
                                                </div>
                                            </div>
                                            <div class="course-view">
                                                <i class="fas fa-user-graduate"></i>
                                                <div class="graduate-point">
                                                    <span>95</span>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="title"><a href="<?php echo base_url('Search'); ?>">React – The Complete Guide (React Router)</a></h3>
                                        <div class="rating rating-star rating-two align-items-center">
                                            <div class="rating-img">
                                                <img src="<?php echo base_url(''); ?>assets/frontend/assets/img/user/user4.jpg" alt>
                                            </div>
                                            <h5>Pennebaker</h5>
                                            <div class="course-price">
                                                <h4><span>$99.00</span>$600</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="course-box">
                                <div class="product">
                                    <div class="product-img">
                                        <a href="<?php echo base_url('Search'); ?>">
                                            <img class="img-fluid" alt src="<?php echo base_url(''); ?>assets/frontend/assets/img/trend-img3.png" width="600" height="300">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="course-info d-flex align-items-center">
                                            <div class="rating rating-star">
                                                <i class="fas fa-star filled"></i>
                                                <span class="d-inline-block average-rating rate-point ">4.3<span class="rate-star-point">(15)</span></span>
                                            </div>
                                            <div class="course-view">
                                                <i class="fas fa-file-alt file-pink"></i>
                                                <div class="course-point">
                                                    <span>80</span>
                                                </div>
                                            </div>
                                            <div class="course-view">
                                                <i class="fas fa-user-graduate"></i>
                                                <div class="graduate-point">
                                                    <span>80</span>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="title"><a href="<?php echo base_url('Search'); ?>">Email & Affiliate Marketing Mastermind</a></h3>
                                        <div class="rating rating-star rating-two align-items-center">
                                            <div class="rating-img">
                                                <img src="<?php echo base_url(''); ?>assets/frontend/assets/img/user/user5.jpg" alt>
                                            </div>
                                            <h5>Bryan Eadie</h5>
                                            <div class="course-price">
                                                <h4><span>$99.00</span>$400</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="course-box">
                                <div class="product">
                                    <div class="product-img">
                                        <a href="<?php echo base_url('Search'); ?>">
                                            <img class="img-fluid" alt src="<?php echo base_url(''); ?>assets/frontend/assets/img/trend-img4.png" width="600" height="300">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="course-info d-flex align-items-center">
                                            <div class="rating rating-star">
                                                <i class="fas fa-star filled"></i>
                                                <span class="d-inline-block average-rating rate-point ">4.4<span class="rate-star-point">(15)</span></span>
                                            </div>
                                            <div class="course-view">
                                                <i class="fas fa-file-alt file-pink"></i>
                                                <div class="course-point">
                                                    <span>75</span>
                                                </div>
                                            </div>
                                            <div class="course-view">
                                                <i class="fas fa-user-graduate"></i>
                                                <div class="graduate-point">
                                                    <span>75</span>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="title"><a href="<?php echo base_url('Search'); ?>">Java (Beginner) Programming Tutorials</a></h3>
                                        <div class="rating rating-star rating-two align-items-center">
                                            <div class="rating-img">
                                                <img src="<?php echo base_url(''); ?>assets/frontend/assets/img/user/user6.jpg" alt>
                                            </div>
                                            <h5>Angel Watson</h5>
                                            <div class="course-price">
                                                <h4><span>$99.00</span>$300</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="course-box">
                                <div class="product">
                                    <div class="product-img">
                                        <a href="<?php echo base_url('Search'); ?>">
                                            <img class="img-fluid" alt src="<?php echo base_url(''); ?>assets/frontend/assets/img/trend-img5.png" width="600" height="300">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="course-info d-flex align-items-center">
                                            <div class="rating rating-star">
                                                <i class="fas fa-star filled"></i>
                                                <span class="d-inline-block average-rating rate-point ">4.2<span class="rate-star-point">(15)</span></span>
                                            </div>
                                            <div class="course-view">
                                                <i class="fas fa-file-alt file-pink"></i>
                                                <div class="course-point">
                                                    <span>90</span>
                                                </div>
                                            </div>
                                            <div class="course-view">
                                                <i class="fas fa-user-graduate"></i>
                                                <div class="graduate-point">
                                                    <span>90</span>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="title"><a href="<?php echo base_url('Search'); ?>">Php (Beginner) Programming Tutorials</a></h3>
                                        <div class="rating rating-star rating-two align-items-center">
                                            <div class="rating-img">
                                                <img src="<?php echo base_url(''); ?>assets/frontend/assets/img/user/user2.jpg" alt>
                                            </div>
                                            <h5>James Collins</h5>
                                            <div class="course-price">
                                                <h4><span>$99.00</span>$100</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="rating-instructor same-dots">
            <div class="container">
                <div class="section-top-head">
                    <div class="section-header aos " data-aos="fade-up">
                        <h2>Top Rating Instructor</h2>
                        <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan bibendum gravida maecenas augue elementum et neque. Suspendisse imperdiet.</p>
                    </div>
                    <div class="section-btn align-items-center aos " data-aos="fade-up">
                        <a href="<?php echo base_url('All-Mentor'); ?>" class="btn btn-primary">View All</a>
                    </div>
                </div>
                <div class="owl-carousel mentoring-course  rating-instructor-slide owl-theme aos " data-aos="fade-up">
                    <?php foreach ($mentors as $value) { ?>
                        
                    <div class="large-team">
                        <div class="student-img">
                            <a href="<?php echo base_url('Mentor-Profile/'.$value->id); ?>"><img src="<?php echo base_url('assets/uploads/'.$value->user_img); ?>" alt style="height:200px"></a>
                        </div>
                        <div class="team-name ">
                            <h4>
                                <a href="<?php echo base_url('Mentor-Profile/'.$value->id); ?>"><?php echo $value->name; ?></a>
                            </h4>
                            <span class="designation">CyberSecurity</span>
                        </div>
                    </div>
                    <?php } ?>
                    
                </div>
            </div>
        </section>


        <section class="trending-courses trending-courses-two popular-course-two same-dots ">
            <div class="container">
                <div class="section-top-head">
                    <div class="section-header aos " data-aos="fade-up">
                        <h2>Most Popular Courses</h2>
                        <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan bibendum gravida maecenas augue elementum et neque. Suspendisse imperdiet.</p>
                    </div>
                    <div class="section-btn align-items-center aos " data-aos="fade-up">
                        <a href="<?php echo base_url('Search'); ?>" class="btn btn-primary">View All</a>
                    </div>
                </div>
                <div class="owl-carousel popular-course-slide-two owl-theme aos " data-aos="fade-up">
                    <div class="course-box">
                        <div class="product">
                            <div class="product-img">
                                <a href="<?php echo base_url('Search'); ?>">
                                    <img class="img-fluid" alt src="<?php echo base_url(''); ?>assets/frontend/assets/img/trend-img.png" width="600" height="300">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="course-info d-flex align-items-center">
                                    <div class="rating rating-star">
                                        <i class="fas fa-star filled"></i>
                                        <span class="d-inline-block average-rating rate-point ">4.6<span class="rate-star-point">(15)</span></span>
                                    </div>
                                    <div class="course-view">
                                        <i class="fas fa-file-alt file-pink"></i>
                                        <div class="course-point">
                                            <span>85</span>
                                        </div>
                                    </div>
                                    <div class="course-view">
                                        <i class="fas fa-user-graduate"></i>
                                        <div class="graduate-point">
                                            <span>95</span>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="title"><a href="<?php echo base_url('Search'); ?>">Information About UI/UX Design Degree</a></h3>
                                <div class="rating rating-star rating-two align-items-center">
                                    <div class="rating-img">
                                        <img src="<?php echo base_url(''); ?>assets/frontend/assets/img/user/user2.jpg" alt>
                                    </div>
                                    <h5>Nicole Brown</h5>
                                    <div class="course-price">
                                        <h4><span>$99.00</span>$700</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-box">
                        <div class="product">
                            <div class="product-img">
                                <a href="<?php echo base_url('Search'); ?>">
                                    <img class="img-fluid" alt src="<?php echo base_url(''); ?>assets/frontend/assets/img/trend-img1.png" width="600" height="300">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="course-info d-flex align-items-center">
                                    <div class="rating rating-star">
                                        <i class="fas fa-star filled"></i>
                                        <span class="d-inline-block average-rating rate-point ">4.4<span class="rate-star-point">(15)</span></span>
                                    </div>
                                    <div class="course-view">
                                        <i class="fas fa-file-alt file-pink"></i>
                                        <div class="course-point">
                                            <span>85</span>
                                        </div>
                                    </div>
                                    <div class="course-view">
                                        <i class="fas fa-user-graduate"></i>
                                        <div class="graduate-point">
                                            <span>85</span>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="title"><a href="<?php echo base_url('Search'); ?>">Photography Crash Course for Photographer</a></h3>
                                <div class="rating rating-star rating-two align-items-center">
                                    <div class="rating-img">
                                        <img src="<?php echo base_url(''); ?>assets/frontend/assets/img/user/user3.jpg" alt>
                                    </div>
                                    <h5>Paul Dotson</h5>
                                    <div class="course-price">
                                        <h4><span>$99.00</span>$200</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-box">
                        <div class="product">
                            <div class="product-img">
                                <a href="<?php echo base_url('Search'); ?>">
                                    <img class="img-fluid" alt src="<?php echo base_url(''); ?>assets/frontend/assets/img/trend-img2.png" width="600" height="300">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="course-info d-flex align-items-center">
                                    <div class="rating rating-star">
                                        <i class="fas fa-star filled"></i>
                                        <span class="d-inline-block average-rating rate-point ">4.2<span class="rate-star-point">(15)</span></span>
                                    </div>
                                    <div class="course-view">
                                        <i class="fas fa-file-alt file-pink"></i>
                                        <div class="course-point">
                                            <span>85</span>
                                        </div>
                                    </div>
                                    <div class="course-view">
                                        <i class="fas fa-user-graduate"></i>
                                        <div class="graduate-point">
                                            <span>75</span>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="title"><a href="<?php echo base_url('Search'); ?>">React – The Complete Guide (React Router)</a></h3>
                                <div class="rating rating-star rating-two align-items-center">
                                    <div class="rating-img">
                                        <img src="<?php echo base_url(''); ?>assets/frontend/assets/img/user/user5.jpg" alt>
                                    </div>
                                    <h5>McFarland</h5>
                                    <div class="course-price">
                                        <h4><span>$99.00</span>$400</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-box">
                        <div class="product">
                            <div class="product-img">
                                <a href="<?php echo base_url('Search'); ?>">
                                    <img class="img-fluid" alt src="<?php echo base_url(''); ?>assets/frontend/assets/img/trend-img3.png" width="600" height="300">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="course-info d-flex align-items-center">
                                    <div class="rating rating-star">
                                        <i class="fas fa-star filled"></i>
                                        <span class="d-inline-block average-rating rate-point ">3.4<span class="rate-star-point">(15)</span></span>
                                    </div>
                                    <div class="course-view">
                                        <i class="fas fa-file-alt file-pink"></i>
                                        <div class="course-point">
                                            <span>65</span>
                                        </div>
                                    </div>
                                    <div class="course-view">
                                        <i class="fas fa-user-graduate"></i>
                                        <div class="graduate-point">
                                            <span>85</span>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="title"><a href="<?php echo base_url('Search'); ?>">Java (Beginner) Programming Tutorials</a></h3>
                                <div class="rating rating-star rating-two align-items-center">
                                    <div class="rating-img">
                                        <img src="<?php echo base_url(''); ?>assets/frontend/assets/img/user/user8.jpg" alt>
                                    </div>
                                    <h5>Michael Johnson</h5>
                                    <div class="course-price">
                                        <h4><span>$99.00</span>$100</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-box">
                        <div class="product">
                            <div class="product-img">
                                <a href="<?php echo base_url('Search'); ?>">
                                    <img class="img-fluid" alt src="<?php echo base_url(''); ?>assets/frontend/assets/img/trend-img4.png" width="600" height="300">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="course-info d-flex align-items-center">
                                    <div class="rating rating-star">
                                        <i class="fas fa-star filled"></i>
                                        <span class="d-inline-block average-rating rate-point ">4.3<span class="rate-star-point">(15)</span></span>
                                    </div>
                                    <div class="course-view">
                                        <i class="fas fa-file-alt file-pink"></i>
                                        <div class="course-point">
                                            <span>85</span>
                                        </div>
                                    </div>
                                    <div class="course-view">
                                        <i class="fas fa-user-graduate"></i>
                                        <div class="graduate-point">
                                            <span>90</span>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="title"><a href="<?php echo base_url('Search'); ?>">Information About UI/UX Design Degree</a></h3>
                                <div class="rating rating-star rating-two align-items-center">
                                    <div class="rating-img">
                                        <img src="<?php echo base_url(''); ?>assets/frontend/assets/img/user/user9.jpg" alt>
                                    </div>
                                    <h5>Kurt Jones</h5>
                                    <div class="course-price">
                                        <h4><span>$99.00</span>$500</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-box">
                        <div class="product">
                            <div class="product-img">
                                <a href="<?php echo base_url('Search'); ?>">
                                    <img class="img-fluid" alt src="<?php echo base_url(''); ?>assets/frontend/assets/img/trend-img5.png" width="600" height="300">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="course-info d-flex align-items-center">
                                    <div class="rating rating-star">
                                        <i class="fas fa-star filled"></i>
                                        <span class="d-inline-block average-rating rate-point ">4.4<span class="rate-star-point">(15)</span></span>
                                    </div>
                                    <div class="course-view">
                                        <i class="fas fa-file-alt file-pink"></i>
                                        <div class="course-point">
                                            <span>80</span>
                                        </div>
                                    </div>
                                    <div class="course-view">
                                        <i class="fas fa-user-graduate"></i>
                                        <div class="graduate-point">
                                            <span>80</span>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="title"><a href="<?php echo base_url('Search'); ?>">Php (Beginner) Programming Tutorials</a></h3>
                                <div class="rating rating-star rating-two align-items-center">
                                    <div class="rating-img">
                                        <img src="<?php echo base_url(''); ?>assets/frontend/assets/img/user/user2.jpg" alt>
                                    </div>
                                    <h5>Jerry Bleau</h5>
                                    <div class="course-price">
                                        <h4><span>$99.00</span>$400</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-box">
                        <div class="product">
                            <div class="product-img">
                                <a href="<?php echo base_url('Search'); ?>">
                                    <img class="img-fluid" alt src="<?php echo base_url(''); ?>assets/frontend/assets/img/trend-img.png" width="600" height="300">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="course-info d-flex align-items-center">
                                    <div class="rating rating-star">
                                        <i class="fas fa-star filled"></i>
                                        <span class="d-inline-block average-rating rate-point ">4.4<span class="rate-star-point">(15)</span></span>
                                    </div>
                                    <div class="course-view">
                                        <i class="fas fa-file-alt file-pink"></i>
                                        <div class="course-point">
                                            <span>85</span>
                                        </div>
                                    </div>
                                    <div class="course-view">
                                        <i class="fas fa-user-graduate"></i>
                                        <div class="graduate-point">
                                            <span>85</span>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="title"><a href="<?php echo base_url('Search'); ?>">Information About UI/UX Design Degree</a></h3>
                                <div class="rating rating-star rating-two align-items-center">
                                    <div class="rating-img">
                                        <img src="<?php echo base_url(''); ?>assets/frontend/assets/img/user/user5.jpg" alt>
                                    </div>
                                    <h5>James Nuno</h5>
                                    <div class="course-price">
                                        <h4><span>$99.00</span>$200</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-box">
                        <div class="product">
                            <div class="product-img">
                                <a href="<?php echo base_url('Search'); ?>">
                                    <img class="img-fluid" alt src="<?php echo base_url(''); ?>assets/frontend/assets/img/trend-img2.png" width="600" height="300">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="course-info d-flex align-items-center">
                                    <div class="rating rating-star">
                                        <i class="fas fa-star filled"></i>
                                        <span class="d-inline-block average-rating rate-point ">4.5<span class="rate-star-point">(15)</span></span>
                                    </div>
                                    <div class="course-view">
                                        <i class="fas fa-file-alt file-pink"></i>
                                        <div class="course-point">
                                            <span>90</span>
                                        </div>
                                    </div>
                                    <div class="course-view">
                                        <i class="fas fa-user-graduate"></i>
                                        <div class="graduate-point">
                                            <span>90</span>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="title"><a href="<?php echo base_url('Search'); ?>">Email & Affiliate Marketing Mastermind</a></h3>
                                <div class="rating rating-star rating-two align-items-center">
                                    <div class="rating-img">
                                        <img src="<?php echo base_url(''); ?>assets/frontend/assets/img/user/user8.jpg" alt>
                                    </div>
                                    <h5>Nicole Brown</h5>
                                    <div class="course-price">
                                        <h4><span>$99.00</span>$600</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-box">
                        <div class="product">
                            <div class="product-img">
                                <a href="<?php echo base_url('Search'); ?>">
                                    <img class="img-fluid" alt src="<?php echo base_url(''); ?>assets/frontend/assets/img/trend-img3.png" width="600" height="300">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="course-info d-flex align-items-center">
                                    <div class="rating rating-star">
                                        <i class="fas fa-star filled"></i>
                                        <span class="d-inline-block average-rating rate-point ">4.1<span class="rate-star-point">(15)</span></span>
                                    </div>
                                    <div class="course-view">
                                        <i class="fas fa-file-alt file-pink"></i>
                                        <div class="course-point">
                                            <span>75</span>
                                        </div>
                                    </div>
                                    <div class="course-view">
                                        <i class="fas fa-user-graduate"></i>
                                        <div class="graduate-point">
                                            <span>75</span>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="title"><a href="<?php echo base_url('Search'); ?>">Information About UI/UX Design Degree</a></h3>
                                <div class="rating rating-star rating-two align-items-center">
                                    <div class="rating-img">
                                        <img src="<?php echo base_url(''); ?>assets/frontend/assets/img/user/user11.jpg" alt>
                                    </div>
                                    <h5>James Nuno</h5>
                                    <div class="course-price">
                                        <h4><span>$99.00</span>$300</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-box">
                        <div class="product">
                            <div class="product-img">
                                <a href="<?php echo base_url('Search'); ?>">
                                    <img class="img-fluid" alt src="<?php echo base_url(''); ?>assets/frontend/assets/img/trend-img1.png" width="600" height="300">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="course-info d-flex align-items-center">
                                    <div class="rating rating-star">
                                        <i class="fas fa-star filled"></i>
                                        <span class="d-inline-block average-rating rate-point ">3.4<span class="rate-star-point">(15)</span></span>
                                    </div>
                                    <div class="course-view">
                                        <i class="fas fa-file-alt file-pink"></i>
                                        <div class="course-point">
                                            <span>65</span>
                                        </div>
                                    </div>
                                    <div class="course-view">
                                        <i class="fas fa-user-graduate"></i>
                                        <div class="graduate-point">
                                            <span>65</span>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="title"><a href="<?php echo base_url('Search'); ?>">Node (Beginner) Programming Tutorials</a></h3>
                                <div class="rating rating-star rating-two align-items-center">
                                    <div class="rating-img">
                                        <img src="<?php echo base_url(''); ?>assets/frontend/assets/img/user/user7.jpg" alt>
                                    </div>
                                    <h5>Omar Branch</h5>
                                    <div class="course-price">
                                        <h4><span>$99.00</span>$100</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="blog-home-two">
            <div class="container">
                <div class="section-top-head">
                    <div class="section-header aos " data-aos="fade-up">
                        <h2>From the Blog</h2>
                        <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan bibendum gravida maecenas augue elementum et neque. Suspendisse imperdiet.</p>
                    </div>
                    <div class="section-btn align-items-center aos " data-aos="fade-up">
                        <a href="blog-details.html" class="btn btn-primary">View All</a>
                    </div>
                </div>
                <div class="blog-two-all aos " data-aos="fade-up">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-view">
                                <div class="blog-view-img">
                                    <a href="blog-details.html"><img src="<?php echo base_url(''); ?>assets/frontend/assets/img/blog/blog-11.png" alt></a>
                                </div>
                                <div class="blog-view-list d-flex">
                                    <p>05 May, 2021</p>
                                    <div class="blog-admin-view">
                                        <p>Written by <span>Admin</span></p>
                                    </div>
                                </div>
                                <div class="blog-bottom-head">
                                    <h4>
                                        <a href="blog-details.html">How to become a best sale marketer in a month!</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-view">
                                <div class="blog-view-img">
                                    <a href="blog-details.html"><img src="<?php echo base_url(''); ?>assets/frontend/assets/img/blog/blog-12.png" alt></a>
                                </div>
                                <div class="blog-view-list d-flex">
                                    <p>08 jun, 2022</p>
                                    <div class="blog-admin-view">
                                        <p>Written by <span>Admin</span></p>
                                    </div>
                                </div>
                                <div class="blog-bottom-head">
                                    <h4>
                                        <a href="blog-details.html">Guide to Using the Right Your DevOps Tools 2021</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-view">
                                <div class="blog-view-img">
                                    <a href="blog-details.html"><img src="<?php echo base_url(''); ?>assets/frontend/assets/img/blog/blog-13.png" alt></a>
                                </div>
                                <div class="blog-view-list d-flex">
                                    <p>10 De, 2021</p>
                                    <div class="blog-admin-view">
                                        <p>Written by <span>Admin</span></p>
                                    </div>
                                </div>
                                <div class="blog-bottom-head">
                                    <h4>
                                        <a href="blog-details.html">The Right DevOps Tools 2021 Your Guide to Using</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="testimonial-two">
            <div class="container">
                <div class="section-header text-center aos " data-aos="fade-up">
                    <h2>Here is what our Clients are saying About us</h2>
                </div>
                <div class=" slider say-about slider-for aos " data-aos="fade-up">
                    <div>
                        <div class="testimonial-all d-flex justify-content-center">
                            <div class="testimonial-two-head text-center">
                                <h3>It was a very good experience 1</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus nibh mauris, nec turpis orci lectus maecenas. Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacus arcu. Faucibus venenatis felis id augue sit cursus pellentesque enim arcu. Elementum felis magna pretium in tincidunt. Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacus arcu. urpis orci lectus maecenas. Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacus arcu. Faucibus venenatis felis id augue sit cursus pellentesque enim arcu</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="testimonial-all d-flex justify-content-center">
                            <div class="testimonial-two-head text-center">
                                <h3>Donec a sem pharetra</h3>
                                <p>Donec a sem pharetra, ultricies ipsum id, hendrerit metus. Proin libero dui, scelerisque nec purus ac, malesuada fermentum elit. Nunc pellentesque blandit gravida. Nullam convallis, magna eu vulputate fermentum, nulla risus dignissim mi, eu pulvinar sem ex vel nulla. In est sapien, pellentesque sit amet faucibus eu, egestas in mauris. Sed vestibulum sapien arcu, id consequat tellus commodo fermentum. Donec eu tincidunt nunc, vitae rhoncus elit. Aenean varius enim arcu, a sollicitudin libero lacinia quis. Maecenas interdum sapien ante</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="testimonial-all d-flex justify-content-center">
                            <div class="testimonial-two-head text-center">
                                <h3>It was a very good experience 3</h3>
                                <p>Proin ligula tortor, semper non purus a, efficitur placerat mi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi tempor efficitur sem et convallis. Donec vitae tristique mauris. Vivamus ac ornare dui, non varius ex.In est sapien, pellentesque sit amet faucibus eu, egestas in mauris. Sed vestibulum sapien arcu, id consequat tellus commodo fermentum. Donec eu tincidunt nunc, vitae rhoncus elit. Aenean varius enim arcu, a sollicitudin libero lacinia quis.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="testimonial-all d-flex justify-content-center">
                            <div class="testimonial-two-head text-center">
                                <h3>Nullam vestibulum consectetur</h3>
                                <p>Suspendisse auctor aliquam turpis, id luctus enim rutrum id. Nullam vestibulum consectetur nisl, ut tincidunt justo facilisis eu. Vestibulum dignissim magna id neque aliquam, ut dapibus tellus ornare. Praesent id rhoncus ex. Proin sit amet pulvinar neque. Sed accumsan euismod sapien vel eleifend. Praesent sit amet congue tortor. Nulla eleifend condimentum pretium.In est sapien, pellentesque sit amet faucibus eu, egestas in mauris. Sed vestibulum sapien arcu, id consequat tellus commodo fermentum. Donec eu tincidunt nunc, vitae rhoncus elit. Aenean varius enim arcu, a sollicitudin libero lacinia quis.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="testimonial-all d-flex justify-content-center">
                            <div class="testimonial-two-head text-center">
                                <h3>Lorem ipsum dolor sit amet</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vulputate congue rutrum. Fusce suscipit tortor ex, et sodales leo aliquam ut. Suspendisse fermentum est vel augue egestas, et fringilla mauris varius. Pellentesque in pharetra dui. Sed commodo nulla nec rhoncus elementum.In est sapien, pellentesque sit amet faucibus eu, egestas in mauris. Sed vestibulum sapien arcu, id consequat tellus commodo fermentum. Donec eu tincidunt nunc, vitae rhoncus elit. Aenean varius enim arcu, a sollicitudin libero lacinia quis.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="testimonial-all d-flex justify-content-center">
                            <div class="testimonial-two-head text-center">
                                <h3>Suspendisse auctor aliquam</h3>
                                <p>Suspendisse auctor aliquam turpis, id luctus enim rutrum id. Nullam vestibulum consectetur nisl, ut tincidunt justo facilisis eu. Vestibulum dignissim magna id neque aliquam, ut dapibus tellus ornare. Praesent id rhoncus ex. Proin sit amet pulvinar neque. Sed accumsan euismod sapien vel eleifend. Praesent sit amet congue tortor. Nulla eleifend condimentum pretium.In est sapien, pellentesque sit amet faucibus eu, egestas in mauris. Sed vestibulum sapien arcu, id consequat tellus commodo fermentum. Donec eu tincidunt nunc, vitae rhoncus elit. Aenean varius enim arcu, a sollicitudin libero lacinia quis.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" slider client-img slider-nav aos " data-aos="fade-up">
                    <div class="testimonial-thumb">
                        <img src="<?php echo base_url(''); ?>assets/frontend/assets/img/user/user1.jpg" alt>
                        <div class="say-client text-center">
                            <h4 class="say-client-name">Tom</h4>
                        </div>
                    </div>
                    <div class="testimonial-thumb">
                        <img src="<?php echo base_url(''); ?>assets/frontend/assets/img/user/user2.jpg" alt>
                        <div class="say-client text-center">
                            <h4 class="say-client-name">Nicole </h4>
                        </div>
                    </div>
                    <div class="testimonial-thumb">
                        <img src="<?php echo base_url(''); ?>assets/frontend/assets/img/user/user3.jpg" alt>
                        <div class="say-client text-center">
                            <h4 class="say-client-name">James </h4>
                        </div>
                    </div>
                    <div class="testimonial-thumb">
                        <img src="<?php echo base_url(''); ?>assets/frontend/assets/img/user/user4.jpg" alt>
                        <div class="say-client text-center">
                            <h4 class="say-client-name">Omar </h4>
                        </div>
                    </div>
                    <div class="testimonial-thumb">
                        <img src="<?php echo base_url(''); ?>assets/frontend/assets/img/user/user5.jpg" alt>
                        <div class="say-client text-center">
                            <h4 class="say-client-name">Paul </h4>
                        </div>
                    </div>
                    <div class="testimonial-thumb">
                        <img src="<?php echo base_url(''); ?>assets/frontend/assets/img/user/user6.jpg" alt>
                        <div class="say-client text-center">
                            <h4 class="say-client-name">Nicole</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="new-course new-course-join">
            <div class="container">
                <div class="new-course-background">
                    <div class="row">
                        <div class="col-lg-7 col-md-6 d-flex align-items-center">
                            <div class="every-new-course aos " data-aos="fade-up">
                                <div class="new-course-text">
                                    <h1>Want to share your knowledge? Join usa Mentor</h1>
                                    <p class="page-sub-text ">High-definition video is video of higher resolution and quality than standard-definition. While there is no standardized meaning for high-definition, generally any video.</p>
                                </div>
                                <div class="join-more-two">
                                    <a href="<?php echo base_url('Search'); ?>" class="btn btn-primary">Find More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 d-flex align-items-end">
                            <div class="new-course-img aos " data-aos="fade-up">
                                <img src="<?php echo base_url(''); ?>assets/frontend/assets/img/join-2.png" alt="new course">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include('footer.php'); ?>

    </div>


    <?php include('script.php'); ?>


</body>

</html>