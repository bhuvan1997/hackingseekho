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
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Mentor Profile</li>
                            </ol>
                        </nav>
                        <h2 class="breadcrumb-title">Mentor Profile</h2>
                    </div>
                </div>
            </div>
        </div>

<?php foreach ($mentor_pro as $value) { ?>
  
        <div class="content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
    
                        <div class="card">
                            <div class="card-body">
                                <div class="mentor-widget">
                                    <div class="user-info-left align-items-center">
                                        <div class="mentor-img d-flex flex-wrap justify-content-center">
                                            <?php $sing_name = substr($value->name, 0,1); ?>
                                            <div class="pro-avatar"><?php echo ucfirst($sing_name); ?></div>
                                            <div class="rating text-center">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="mentor-details m-0">
                                                <p class="user-location m-0"><i class="fas fa-map-marker-alt"></i><?php echo $value->city.','.$value->state; ?></p>
                                            </div>
                                        </div>
                                        <div class="user-info-cont">
                                            <h4 class="usr-name"><?php echo $value->name; ?></h4>
                                            <p class="mentor-type"><?php echo $value->highest_degree; ?></p>
                                            <div class="mentor-action">
                                                <p class="mentor-type social-title">Contact Me</p>
                                                <a href="javascript:void(0)" class="btn-blue">
                                                    <i class="fas fa-comments"></i>
                                                </a>
                                                <a href="chat.html" class="btn-blue">
                                                    <i class="fas fa-envelope"></i>
                                                </a>
                                                <a href="javascript:void(0)" class="btn-blue" data-toggle="modal"
                                                    data-target="#voice_call">
                                                    <i class="fas fa-phone-alt"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="user-info-right d-flex align-items-end flex-wrap">
                                        <div class="hireme-btn text-center">
                                        <img src="<?php echo base_url('assets/uploads/' . $value->user_img) ?>" alt style="height: 200px; width:200px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-body custom-border-card pb-0">

                                <div class="widget about-widget custom-about mb-0">
                                    <h4 class="widget-title">About Me</h4>
                                    <hr>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen
                                        book. It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining essentially unchanged.</p>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                                        in a piece of classical Latin literature from 45 BC, making it over 2000 years
                                        old.</p>
                                </div>

                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body custom-border-card pb-0">

                                <div class="widget education-widget mb-0">
                                    <h4 class="widget-title">Personal Details</h4>
                                    <hr>
                                    <div class="experience-box">
                                        <ul class="experience-list profile-custom-list">
                                            <li>
                                                <div class="experience-content">
                                                    <div class="timeline-content">
                                                        <span>Gender</span>
                                                        <div class="row-result"><?php echo $value->gender; ?></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="experience-content">
                                                    <div class="timeline-content">
                                                        <span>Date of Birth</span>
                                                        <div class="row-result"><?php echo $value->date_of_birth; ?></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="experience-content">
                                                    <div class="timeline-content">
                                                        <span>Where did you hear about us?</span>
                                                        <div class="row-result">Through web search</div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body custom-border-card pb-0">

                                <div class="widget experience-widget mb-0">
                                    <h4 class="widget-title">Qualification</h4>
                                    <hr>
                                    <div class="experience-box">
                                        <ul class="experience-list profile-custom-list">
                                            
                                            <li>
                                                <div class="experience-content">
                                                    <div class="timeline-content">
                                                        <span>Graduate College</span>
                                                        <div class="row-result"><?php echo $value->university; ?></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="experience-content">
                                                    <div class="timeline-content">
                                                        <span>Type of Degree</span>
                                                        <div class="row-result"><?php echo $value->highest_degree; ?></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="experience-content">
                                                    <div class="timeline-content">
                                                        <span>Year Of Passing</span>
                                                        <?php $date = substr($value->year_passing, 0, 4); ?>
                                                        <div class="row-result"><?php echo $date; ?></div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body pb-1 custom-border-card">

                                <div class="widget awards-widget m-0">
                                    <h4 class="widget-title">Location</h4>
                                    <hr>
                                    <div class="experience-box">
                                        <ul class="experience-list profile-custom-list">
                                            <li>
                                                <div class="experience-content">
                                                    <div class="timeline-content">
                                                        <span>Address</span>
                                                        <div class="row-result"><?php echo $value->address; ?></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="experience-content">
                                                    <div class="timeline-content">
                                                        <span>Country</span>
                                                        <div class="row-result"><?php echo $value->country; ?></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="experience-content">
                                                    <div class="timeline-content">
                                                        <span>City</span>
                                                        <div class="row-result"><?php echo $value->city; ?></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="experience-content">
                                                    <div class="timeline-content">
                                                        <span>State</span>
                                                        <div class="row-result"><?php echo $value->state; ?></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="experience-content">
                                                    <div class="timeline-content">
                                                        <span>Postal Code</span>
                                                        <div class="row-result"><?php echo $value->pincode; ?></div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <?php  } ?>


        <?php include('footer.php'); ?>

    </div>


    <div class="modal fade call-modal" id="voice_call">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">

                    <div class="call-box incoming-box">
                        <div class="call-wrapper">
                            <div class="call-inner">
                                <div class="call-user">
                                    <img alt="User Image" src="assets/img/user/user.jpg" class="call-avatar">
                                    <h4>Jonathan Doe</h4>
                                    <span>Connecting...</span>
                                </div>
                                <div class="call-items">
                                    <a href="javascript:void(0);" class="btn call-item call-end" data-dismiss="modal"
                                        aria-label="Close"><i class="material-icons">call_end</i></a>
                                    <a href="voice-call.html" class="btn call-item call-start"><i
                                            class="material-icons">call</i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="modal fade call-modal" id="video_call">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">

                    <div class="call-box incoming-box">
                        <div class="call-wrapper">
                            <div class="call-inner">
                                <div class="call-user">
                                    <img class="call-avatar" src="assets/img/user/user.jpg" alt="User Image">
                                    <h4>Dr. Darren Elder</h4>
                                    <span>Calling ...</span>
                                </div>
                                <div class="call-items">
                                    <a href="javascript:void(0);" class="btn call-item call-end" data-dismiss="modal"
                                        aria-label="Close"><i class="material-icons">call_end</i></a>
                                    <a href="video-call.html" class="btn call-item call-start"><i
                                            class="material-icons">videocam</i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


   <?php include('script.php'); ?>
</body>

</html>