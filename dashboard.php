<?php
  session_start();
  include "lib/koneksi.php";

  if (!isset($_SESSION['namauser'])) {
    ?>
      <script language="javascript">
        alert('Login First')
        document.location='index.php';
      </script>
    <?php
  } else {
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>MCDM - MOORA</title>

  <!-- Favicons -->
  <link href="img/favicon-32x32.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>
  <!-- Data table source -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<!-- end of header -->

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="#" class="logo"><b>MCDM<span> MOORA</span></b></a>
      <!--logo end-->
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="logout.php">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <?php
            if($_SESSION['namauser']=='leader'){
        ?>
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="dashboard.php?module=home"><img src="img/Logo.png" class="img-circle" width="80"></a></p>
          <h5 class="centered">Leader</h5>
          <li class="mt">
            <a class="" href="dashboard.php?module=home">
              <i class="fa fa-home"></i>
              <span>Home</span>
              </a>
          </li>
          <li class="">
            <a class="" href="dashboard.php?module=list_hasil">
              <i class="fa fa-list"></i>
              <span>Hasil</span>
              </a>
          </li>
        </ul>
        <?php
            }else{
        ?>
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="dashboard.php?module=home"><img src="img/admin.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">Admin</h5>
          <li class="mt">
            <a class="" href="dashboard.php?module=home">
              <i class="fa fa-home"></i>
              <span>Home</span>
              </a>
          </li>
          <li class="">
            <a class="" href="dashboard.php?module=list_kriteria">
              <i class="fa fa-file"></i>
              <span>Kriteria</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Logam</span>
              </a>
            <ul class="sub">
              <li><a href="dashboard.php?module=list_logam">List Logam</a></li>
              <li><a href="dashboard.php?module=tambah_logam">Tambah Logam</a></li>
              <li><a href="dashboard.php?module=hapus_semua_logam">Hapus Data Logam</a></li>
            </ul>
          </li>
          <li class="">
            <a class="" href="dashboard.php?module=list_hasil">
              <i class="fa fa-list"></i>
              <span>Hasil</span>
              </a>
          </li>
          <li class="">
            <a class="" href="dashboard.php?module=hitung">
              <i class="fa fa-calculator"></i>
              <span>Hitung</span>
              </a>
          </li>
        </ul>
        <?php
            }
        ?>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12 main-chart" style="padding-left: 50px;padding-right: 50px;">
            <!--CUSTOM CHART START -->
            <div class="border-head">
              <h3>MDCM - MOORA</h3>
            </div>
            <?php

            if ($_GET['module'] == 'home') {
                include "pages/home/home.php";
            } elseif ($_GET['module'] == 'list_kriteria') {
                include "pages/kriteria/list_kriteria.php";
            } elseif ($_GET['module'] == 'tambah_kriteria') {
                include "pages/kriteria/tambah_kriteria.php";
            } elseif ($_GET['module'] == 'update_kriteria') {
                include "pages/kriteria/update_kriteria.php";
            } elseif ($_GET['module'] == 'list_logam') {
                include "pages/logam/list_logam.php";
            } elseif ($_GET['module'] == 'tambah_logam') {
                include "pages/logam/tambah_logam.php";
            } elseif ($_GET['module'] == 'update_logam') {
              include "pages/logam/update_logam.php";
            }elseif ($_GET['module'] == 'hapus_logam') {
              include "pages/logam/aksi_hapus.php";
            }elseif ($_GET['module'] == 'hapus_semua_logam') {
              include "pages/logam/aksi_hapus_semua.php";
            }elseif ($_GET['module'] == 'list_hasil') {
              include "pages/hasil/list_hasil.php";
            }elseif ($_GET['module'] == 'hitung') {
              include "pages/hasil/hitung.php";
            }elseif ($_GET['module'] == 'list_detail_logam') {
              include "pages/hasil/list_logam.php";
            }elseif ($_GET['module'] == 'hapus_hasil') {
              include "pages/hasil/aksi_hapus.php";
            }elseif ($_GET['module'] == 'hapus_hasil_logam') {
              include "pages/hasil/aksi_hapus_hasil_logam.php";
            }

            //default
             else {
                 include "pages/home/home.php";
            }
            ?>
          </div>
          <!-- /col-lg-9 END SECTION MIDDLE -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <!--main content end-->


    <!--footer start-->
    <footer class="site-footer" style="margin-top: 40vh;">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>MDCM - MOORA</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Distributed by <a href="" target="_blank">Haggai</a>
        </div>
        <a href="dashboard.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>
  <!-- data table source -->
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
  <script type="text/javascript">
    $(document).ready( function () {
    $('#myDataTables').DataTable();
      } );
  </script>
  <!-- other script -->
<!--   <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to Dashio!',
        // (string | mandatory) the text inside the notification
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
        // (string | optional) the image to display on the left
        image: 'img/ui-sam.jpg',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script> -->
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
</body>

</html>
<?php
  }
?>
