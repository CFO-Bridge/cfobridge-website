<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CFO Bridge</title>
  <!-- plugins:css -->
  <link rel="shortcut icon" href="<?= base_url() ?>assets/images/cropped-favicon-180x180.png" type="image/x-icon" />
  <link rel="stylesheet" href="<?= base_url() ?>backend/assets/vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>backend/assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?= base_url() ?>backend/assets/vendors/css/vendor.bundle.addons.css">
 <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css"> -->
 <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
 

  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url() ?>backend/assets/css/style.css">
  <link rel="stylesheet" href="<?= base_url() ?>backend/assets/vendors/summernote/dist/summernote-bs4.css">
  <!-- endinject -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script>
    var site_url = "<?= base_url() ?>";
  </script>
</head>
<body>

<?php
// Enable all error reporting
error_reporting(E_ALL);

// Display errors on the page
ini_set('display_errors', 1);

// Optional: Display startup errors
ini_set('display_startup_errors', 1);
?>

  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="javascript:void(0)"><img src="<?= base_url('assets/images/logo.svg') ?>" style="height:58px;" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="fas fa-bars"></span>
        </button>
        <ul class="navbar-nav">
          <li class="nav-item nav-search d-md-flex">
            <div class="nav-link">
              <a href="javascript:void(0)" class="clear-cache">Clear Cache</a>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <i class="fa fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a href="javascript:void(0)" class="dropdown-item" id="password-setting">
                <i class="fas fa-cog text-primary"></i>
                Settings
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?= base_url('admin/logout') ?>">
                <i class="fas fa-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          <!--  <li class="nav-item nav-settings d-none d-lg-block">
            <a class="nav-link" href="#">
              <i class="fas fa-ellipsis-h"></i>
            </a>
          </li> -->
        </ul>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-name">
                <p class="name">
                  Welcome Admin
                </p>
                <!--  <p class="designation">
                  Super Admin
                </p> -->
              </div>
            </div>
          </li>
          <!--  <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin') ?>">
              <i class="fa fa-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/blogslist') ?>">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Manage Post</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/eventslist') ?>">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Manage Events</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/testimonialslist') ?>">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Manage Testimonials</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/imageslist') ?>">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Manage Media</span>
            </a>
          </li>
         <!--  <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/logolist') ?>">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Manage Logos</span>
            </a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/gallerylist') ?>">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Manage Gallery</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/jobslist') ?>">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Manage Jobs</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/counterslist') ?>">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Manage Counters</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/teammemberslist') ?>">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Manage Team</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/industrylist') ?>">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Manage Industries</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/jobenquirylist') ?>">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Jobs Enquiry</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/allcontactslist') ?>">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">All Enquiries</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/contactslist') ?>">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Contact Enquiry</span>
            </a>
          </li>
         
           <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/ftoolcontactslist') ?>">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Finance Tool Enquiry</span>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/downloadformenq') ?>">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Download Form Enquiry</span>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/landingenquiry') ?>">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Landing Page Enquiry</span>
            </a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/downloadfileslist') ?>">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Manage Downloads</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link collapsed" data-toggle="collapse" href="#manage-location" aria-expanded="false" aria-controls="page-layouts">
              <i class="fab fa-trello menu-icon"></i>
              <span class="menu-title">Manage Locations</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="manage-location">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/addlocation') ?>">Add Location</a></li>
                <li class="nav-item d-lg-block"> <a class="nav-link" href="<?= base_url('admin/locationlist') ?>">List Location</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link collapsed" data-toggle="collapse" href="#manage-services" aria-expanded="false" aria-controls="page-layouts">
              <i class="fab fa-trello menu-icon"></i>
              <span class="menu-title">Manage Services</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="manage-services">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/parentservice') ?>">Parent Service</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/newaddservice') ?>">Add Service</a></li>
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="<?= base_url('admin/servicelist') ?>">List Services</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/exservicelist') ?>">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Manage Accounts Service</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link collapsed" data-toggle="collapse" href="#manage-category" aria-expanded="false" aria-controls="page-layouts">
              <i class="fab fa-trello menu-icon"></i>
              <span class="menu-title">Manage Category</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="manage-category">
              <ul class="nav flex-column sub-menu">
                <!-- <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/categorylist/1') ?>">Blog Category</a></li>
                 <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/categorylist/2') ?>">Product Category</a></li>
  -->
  <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/categorylist/3') ?>">Client Category</a></li>
  <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/topiclist/3') ?>">Topic Category</a></li>
  <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/subcategorylist') ?>">Client Sub Category</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/clientlist') ?>">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Manage Client</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/clientlistNew') ?>">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Manage Client New</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link collapsed" data-toggle="collapse" href="#manage-home" aria-expanded="false" aria-controls="page-layouts">
              <i class="fab fa-trello menu-icon"></i>
              <span class="menu-title">Manage Home</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="manage-home">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/homebannerlist') ?>">Manage Banners</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/homefaq') ?>">Manage FAQs</a></li>
               </ul>
            </div>
          </li>
         <!--  <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/homebannerlist') ?>">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Manage Home Banner</span>
            </a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/header_footer_data') ?>">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Manage Script</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/downloadfileslistTest') ?>">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Test</span>
            </a>
          </li>
        </ul>
      </nav>