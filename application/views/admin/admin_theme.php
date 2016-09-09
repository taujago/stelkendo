<?php

$userdata = $this->session->userdata('admin_login');

$menu = '';
$subMenu1 = '';
$menu = array('Kendaraan Baru');
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
 <!-- Bootstrap 3.3.5 -->
 <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
 <!-- Font Awesome -->
 <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css'); ?>">
 <!-- Ionicons -->
 <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
 <!-- Theme style -->
 <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css'); ?>">

 <link rel="stylesheet" href="<?php echo base_url('assets/plugins/select2/select2.min.css'); ?>">

 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrapValidator.min.css">

    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/skins/_all-skins.min.css'); ?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->


        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-dialog.min.css">
        <!-- jQuery 2.1.4 -->
        <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
        <!-- mask -->
        <script src="<?php echo base_url(); ?>assets/plugins/input-mask/jquery.inputmask.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>
        <!-- SlimScroll -->
        <script src="<?php echo base_url('assets/plugins/slimScroll/jquery.slimscroll.min.js'); ?>"></script>
        <!-- FastClick -->
        <script src="<?php echo base_url('assets/plugins/fastclick/fastclick.min.js'); ?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url('assets/dist/js/app.min.js'); ?>"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url('assets/dist/js/demo.js'); ?>"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrapValidator.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap-dialog.min.js"></script>
<!-- biru #f6f6f6 -->
<link rel="stylesheet" href="assets/vendor/jqwidgets/jqwidgets/styles/jqx.base.css" type="text/css" />
<script type="text/javascript" src="assets/vendor/jqwidgets/jqwidgets/jqxcore.js"></script>
<script type="text/javascript" src="assets/vendor/jqwidgets/jqwidgets/jqxdata.js"></script>
<script type="text/javascript" src="assets/vendor/jqwidgets/jqwidgets/jqx-all.js"></script>
<style media="screen">

      .nav-tabs > li.rounded.active > a,
      .nav-tabs > li.rounded.active > a:hover,
      .nav-tabs > li.rounded.active > a:focus
      {
          background-color:#b6b6b7; //
          font-weight:bolder;
          border-top-left-radius:10px;
          border-top-right-radius:10px;
          color:black;
          border-color:black;
      }
      .nav-tabs > li.rounded > a
      {
          background-color:#3c8dbc;  //biru
          border-top-left-radius:10px;
          border-top-right-radius:10px;
          color:white;
          border-color:black;
      }

        hr {
        -moz-border-bottom-colors: none;
        -moz-border-image: none;
        -moz-border-left-colors: none;
        -moz-border-right-colors: none;
        -moz-border-top-colors: none;
        border-color: black -moz-use-text-color black;
        border-style: solid none;
        border-width: 1px 0;
        margin: 10px 0;
      }
      /*body { font-size: 16px; }*/
      /*@import url('http://twitter.github.com/bootstrap/assets/css/bootstrap.css');*/

      html,body{height:100%;}

      .container {
          height:100%;
      }

      .fill{
          width:100%;
          height:100%;
          min-height:100%;
          background-color:#990000;
          padding:10px;
          color:#efefef;
      }
</style>

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
  <a href="#"><span><?php echo $menu[0]; ?></span> <i class="fa fa fa-edit pull-right"></i></a>
  <ul class="treeview-menu"  id ="id_child_menu">
    <!-- script tampil side bar , nama href sesuai dengan nama menu di aplikasi desktop(huruf kecil semua dengan penambahan
     penambahan index menu sesuai abjad misal menu 1 dengan submenu Pendaftaran bbn 1 = a_pendaftaranbbn1) -->
    <!-- dekalrasi $menu dan subMenu dalam bentuk array  -->
    <?php

$tempLink1 = 'a_';
for ($i = 0; $i < count($subMenu1); $i++) {
    $tempLink = '';
    $tempLink2 = $subMenu1[$i];
    $tempLink2 = str_ireplace(' ', '', $tempLink2);
    $tempLink2 = strtolower($tempLink2);
    $tempLink = base_url('index.php/'.$tempLink1 . $tempLink2);
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
  <section class="page-content">
<?php
   echo $content;
      ?>
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->





<!-- start javascript -->
<script>
/**
 * This javascript contains fuctions
 * @Vikram
 */
//this will hold currently focused tab
var currentTab;
//initilize tabs
$(function () {
//alert('ready');
    //when ever any tab is clicked this method will be call
    $("#idTabKendaraanBaru").on("click", "a", function (e) {
      e.preventDefault();
      $(this).tab('show');
      $currentTab = $(this);
    });


    function getEventTarget(e) {
      e = e || window.event;
      return e.target || e.srcElement;
    }

    var ul = document.getElementById('id_child_menu');
    ul.onclick = function(event) {
      event.preventDefault();
      var target = getEventTarget(event);
               alert(target.href);
               registerComposeButtonEvent(target);
               registerCloseEvent();


    };


//this method will demonstrate how to add tab dynamically

function registerComposeButtonEvent(target) {
  var tabId= target.innerHTML;
tabId=tabId.replace(/ /g,"_"); // ganti spasi menjadi underscore
//alert(tabId);
// tambah dynamic tab dan konten tab .append(html kode);
$('.nav-tabs').append('<li class="rounded" ><a href="#' + tabId + '"><button class="close closeTab" type="button" >×</button>'+target.innerHTML+'</a></li>');
$('.tab-content').append('<div class="tab-pane " id="' + tabId + '"></div>');
//send
var status=craeteNewTabAndLoadUrl("", target.href, "#" + tabId);
  //alert("status="+status);
//if(status=="ok"){
  $(this).tab('show');
showTab(tabId);
registerCloseEvent();
//}else{}

}

//this method will register event on close icon on the tab..
function registerCloseEvent() {

  $(".closeTab").click(function () {
        //there are multiple elements which has .closeTab icon so close the tab whose close icon is clicked
        var tabContentId = $(this).parent().attr("href");
        $(this).parent().parent().remove(); //remove li of tab
        $('#idTabKendaraanBaru a:last').tab('show'); // Select first tab
        $(tabContentId).remove(); //remove respective tab content

      });

}

//shows the tab with passed content div id..paramter tabid indicates the div where the content resides
function showTab(tabId) {
  $('#idTabKendaraanBaru a[href="#' + tabId + '"]').tab('show');

}
//return current active tab
function getCurrentTab() {
  return currentTab;
}

//This function will create a new tab here and it will load the url content in tab content div.
function craeteNewTabAndLoadUrl(parms, url, loadDivSelector) {
var msg="";
  $("" + loadDivSelector).load(url, function (response, status, xhr) {
      //alert(msg);
     if(status == "success"){
        msg="ok";
    }
    else if (status == "error" || status == "error") {
       msg = "Error :";
      $("" + loadDivSelector).html(msg + xhr.status + " " + xhr.statusText);
      $("" + loadDivSelector).html("Load Ajax Content Here...");
    }

  });

return msg; // return value untuk action open new tab

}

//this will return element from current tab
//example : if there are two tabs having  textarea with same id or same class name then when $("#someId") whill return both the text area from both tabs
//to take care this situation we need get the element from current tab.
function getElement(selector) {
  var tabContentId = $currentTab.attr("href");
  return $("" + tabContentId).find("" + selector);

}


function removeCurrentTab() {
  var tabContentId = $currentTab.attr("href");
    $currentTab.parent().remove(); //remove li of tab
    $('#idTabKendaraanBaru a:last').tab('show'); // Select first tab
    $(tabContentId).remove(); //remove respective tab content
  }

  // $('#idCollapsePendaftaranBBN1_2').on('show.bs.collapse', function () {
        //call a service here

          //  });
   }); // end jquery on_load

</script>
