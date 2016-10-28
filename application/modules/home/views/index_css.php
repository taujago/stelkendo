<!-- Bootstrap 3.3.5 -->
<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css'); ?>">
<!-- Ionicons -->
<!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
<!-- Theme style -->

<link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/plugins/select2/select2.min.css');?>">
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
<!-- bootstrap datepicker -->

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datepicker/datepicker3.css">
<link rel="stylesheet" href="assets/vendor/jqwidgets/jqwidgets/styles/jqx.base.css" type="text/css" />
<!-- <link rel="stylesheet" href="assets/vendor/jqwidgets/jqwidgets/styles/jqx.bootstrap.custom3pilar.css" media="screen" title="no title"> -->
<!--  querybuilder-->
<!-- <link href="http://querybuilder.js.org/dist/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet">
<link href="http://querybuilder.js.org/dist/seiyria-bootstrap-slider/dist/css/bootstrap-slider.min.css" rel="stylesheet">
<link href="http://querybuilder.js.org/dist/selectize/dist/css/selectize.bootstrap3.css" rel="stylesheet">
<link href="http://querybuilder.js.org/dist/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<link href="http://querybuilder.js.org/dist/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet"> -->
<link href="https://cdn.jsdelivr.net/jquery.query-builder/2.3.3/css/query-builder.default.min.css" rel="stylesheet">
<!--  -->

<!-- biru #f6f6f6 -->

<style media="screen">

/*.nav-tabs > li.rounded.active > a,
.nav-tabs > li.rounded.active > a:hover,
.nav-tabs > li.rounded.active > a:focus
{
background-color:#3c8dbc;
font-weight:bolder;
border-top-left-radius:10px;
border-top-right-radius:10px;
color:black;
border-color:black;
}
.nav-tabs > li.rounded > a
{
background-color:#b6b6b7;  //biru
border-top-left-radius:10px;
border-top-right-radius:10px;
color:white;
border-color:black;
}
*/
/*.nav-tabs > li.active > a,
.nav-tabs > li.active > a:focus
{
background-color:#b6b6b7;
font-weight:bolder;
border-color: blue;
border-top-left-radius:10px;
border-top-right-radius:10px;
color:black;
border-color:black;
}
.nav-tabs > li > a
{
background-color:#b6b6b7;  //biru
border-top-left-radius:10px;
border-top-right-radius:10px;
color:white;
border-color: blue;
border-color:black;
}*/

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
/*
html,body{height:100%;}

.container {
height:100%;
}*/

/*.fill{
width:100%;
height:100%;
min-height:100%;
background-color:#990000;
padding:10px;
color:#efefef;
}*/

/* Layout issue https://github.com/almasaeed2010/AdminLTE/issues/597*/
.wrapper {
  /*min-height: 100%;
  position: relative;
  overflow: hidden;*/
  width: 100%;
  min-height: 100%;
  height: auto !important;
  position: absolute;
}

.nav-pills>li>a {
  border-radius: 0;
  font-style: oblique;
  font-family: monospace;
  font-size: 15px;
  border-top: 3px solid #1a2226;
  border-bottom: 4px solid #3c8dbc;   /* biru admin lte */
  /*color: #444;*/
}
.nav nav-pills{
  border-top: 3px solid #1a2226;
  border-bottom: 4px solid #1a2226;   /* biru admin lte */
}

.btn-round {
  width: 20px;
  height: 20px;
  border-radius: 50%;
}

.btn-round.btn-lg {
  width: 48px;
  height: 48px;
}

.btn-round.btn-sm {
  width: 34px;
  height: 34px;
}

.btn-round.btn-xs {
  width: 15px;
  height: 15px;
}

/*.nav-tabs-custom>.nav-tabs {
margin: 0;
border-bottom-color: black !important;
border-top-right-radius: 5px !important;
border-top-left-radius: 5px !important;
}*/

.nav-pills>li+li {
  margin-left: 5px;
  margin-bottom: 5px;
}
/* Extra Small Devices, Phones */
@media only screen and (min-width : 480px) {

}

/* Small Devices, Tablets */
@media only screen and (min-width : 768px) {

}

/* Medium Devices, Desktops */
@media only screen and (min-width : 992px) {

}

/* CSS used here will be applied after bootstrap.css */
.modal-header-success {
  color:#fff;
  padding:9px 15px;
  border-bottom:1px solid #eee;
  background-color: #5cb85c;
  -webkit-border-top-left-radius: 5px;
  -webkit-border-top-right-radius: 5px;
  -moz-border-radius-topleft: 5px;
  -moz-border-radius-topright: 5px;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}
.modal-header-warning {
  color:#fff;
  padding:9px 15px;
  border-bottom:1px solid #eee;
  background-color: #f0ad4e;
  -webkit-border-top-left-radius: 5px;
  -webkit-border-top-right-radius: 5px;
  -moz-border-radius-topleft: 5px;
  -moz-border-radius-topright: 5px;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}
.modal-header-danger {
  color:#fff;
  padding:9px 15px;
  border-bottom:1px solid #eee;
  background-color: #d9534f;
  -webkit-border-top-left-radius: 5px;
  -webkit-border-top-right-radius: 5px;
  -moz-border-radius-topleft: 5px;
  -moz-border-radius-topright: 5px;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}
.modal-header-info {
  color:#fff;
  padding:9px 15px;
  border-bottom:1px solid #eee;
  background-color: #5bc0de;
  -webkit-border-top-left-radius: 5px;
  -webkit-border-top-right-radius: 5px;
  -moz-border-radius-topleft: 5px;
  -moz-border-radius-topright: 5px;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}
.modal-header-primary {
  color:#fff;
  padding:9px 15px;
  border-bottom:1px solid #eee;
  background-color: #428bca;
  -webkit-border-top-left-radius: 5px;
  -webkit-border-top-right-radius: 5px;
  -moz-border-radius-topleft: 5px;
  -moz-border-radius-topright: 5px;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}


</style>
<style media="screen">
.datepicker {
  z-index: 100000 !important;
  display: block;
}
</style>
