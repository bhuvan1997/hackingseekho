<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('mentor/Home'); ?>">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('mentor/QnA'); ?>">
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">QnA</span>
            </a>
          </li>
          <?php if($count_qna == 1 && $status_user == 1) { ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('mentor/Profile'); ?>">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Profile</span>
            </a>
          </li>
          <?php //} else if($count_qna == 1 && $status_user == 1) { ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('mentor/Batch'); ?>">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Batch</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('mentor/View_Enrolled'); ?>">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Enroll By Batch</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('mentor/Shared_Notes'); ?>">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Shared Notes</span>
            </a>
          </li>
          <?php } ?>
          
        </ul>
      </nav>