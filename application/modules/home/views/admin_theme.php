<?php

$userdata = $this->session->userdata('admin_login');

$menu     = '';
$subMenu1 = '';
$menu     = array('Kendaraan Baru');
$subMenu1 = array('Pendaftaran BBN 1', 'Registrasi BBN 1', 'Monitor Print Kartu Induk BBN 1', 'Print Tanda Terima BBN 1', 'Verifikasi BBN 1', 'Penulisan BBN 1', 'Penyerahan BPKB BBN 1', 'Laporan BBN 1', 'Cetak Legalitas BBN 1');

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <?php
  $this->load->view('index_css');
  ?>

</head>
<body class="hold-transition skin-blue sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">

    <header class="main-header">

      <!-- Logo -->
      <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b>LTE</span>
      </a>

      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

      </nav>
    </header>


    <aside class="main-sidebar">

      <section class="sidebar">

        <ul class="sidebar-menu" >
          <li class="header">Navigasi</li>
          <li class="active"><a href="#"><span>Dashboard</span></a></li>
          <li class=" treeview">
            <a href="#">
                     <i class="fa fa-edit"></i> <span></span>
                     <span class="pull-right-container"><?php echo $menu[0]; ?>
                       <i class="fa fa-angle-left pull-right"></i>
                     </span>
                   </a>
                   <ul class="treeview-menu"  id ="id_child_menu">
              <!-- script tampil side bar , nama href sesuai dengan nama menu di aplikasi desktop(huruf kecil semua dengan penambahan
              penambahan index menu sesuai abjad misal menu 1 dengan submenu Pendaftaran bbn 1 = a_pendaftaranbbn1) -->
              <!-- dekalrasi $menu dan subMenu dalam bentuk array  -->
              <?php

              $tempLink1 = 'a_';
              for ($i = 0; $i < count($subMenu1); $i++) {
                $tempLink  = '';
                $tempLink2 = $subMenu1[$i];
                $tempLink2 = str_ireplace(' ', '', $tempLink2);
                $tempLink2 = strtolower($tempLink2);
                $tempLink  = base_url('index.php/' . $tempLink1 . $tempLink2);
                // $tempLink3 = '#';
                // echo li untuk event klik id_child_menu
                echo "<li id='$tempLink'><a href='$tempLink'>$subMenu1[$i]</a></li>";
              }
              ?>

            </ul>
          </li>
        </ul><!-- /.sidebar-menu -->
      </section>
      <!-- /.sidebar -->
    </aside>



    <link rel="stylesheet" href=""<?php echo base_url('assets/css/ionicons201.min.css'); ?>"">
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          <?php echo $title; ?>
          <small><?php echo $subtitle; ?></small>
        </h1>
      </section>

      <!-- Main content -->
      <div class="content body">
        <?php
        echo $content;
        ?>
      </div><!-- /.content-wrapper -->
    </div>
    <?php
    $this->load->view('index_js');
    ?>
  </body>
