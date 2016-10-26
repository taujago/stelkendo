
  <div class="container-fluid">
      <div class="row">
        <div class="btn-group btn-group-justified">
        <!-- <a class="btn btn-primary"  data-toggle="collapse" href="#collapse1"><span class="glyphicon glyphicon-filter"></span>Filter Table</a> -->
        <a class="btn btn-primary" href="#"><span class="glyphicon glyphicon-print"></span>Cetak</a>
        <a class="btn btn-primary" href="#"><span class="glyphicon glyphicon-export"></span>Export CSV</a>
        <ul class="btn btn-primary" data-toggle="modal" href="#myModal"><span class="glyphicon glyphicon-plus"></span> Buat Baru</ul>
        </div>
      </div>
  <div class="row">

 <!-- collapse filter -->
<div class="panel-group">
   <div class="panel panel-primary">

     <div id="collapse1" class="panel-collapse collapse">
       <div class="panel-body">
<!--  -->
<section class="bs-docs-section clearfix">
     <!-- <h1 id="basic" class="page-header">
       Basic
     </h1>

     <p>This demo shows the basic features of the QueryBuilder. Click one of the blue buttons to trigger the validation and
       display the output.</p> -->

       <!-- <a href="" class="btn btn-default"><b>&lt;/&gt;</b> See source</a> -->


       <div class="col-md-12 col-lg-10 col-lg-offset-1">
         <div id="builder-basic"></div>
         <div class="btn-group">
           <button class="btn btn-warning reset" data-target="basic">Reset</button>
           <button class="btn btn-success set-json" data-target="basic">Set rules</button>
           <button class="btn btn-primary parse-json" data-target="basic">Get rules</button>
         </div>
       </div>
     </section>

<!--  -->
       </div>
     </div>
   </div>
 </div> <!-- end collapse filter -->

</div>

<div class="row">

  <!-- <div  id="idTabelPendaftarabBBN1"  style="position: relative;"> -->
  <div  id="idTabelPendaftarabBBN1">
    <!-- table -->

  </div>
  </div>
  </div>

  <div class="modal fade bs-example-modal-sm" id="myPleaseWait" tabindex="-1"
      role="dialog" aria-hidden="true" data-backdrop="static">
      <div class="modal-dialog modal-sm">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title">
                      <span class="glyphicon glyphicon-time">
                      </span> Sedang memproses. Harap Tunggu...
                   </h4>
              </div>
              <div class="modal-body">
                  <div class="progress">
                      <div class="progress-bar progress-bar-info
                      progress-bar-striped active"
                      style="width: 100%">
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
<?php
$this->load->view("modal_kb_pbb_add_view");
$this->load->view("modal_kb_pbb_edit_view");
$this->load->view("modal_pemohon_baru_index");
$this->load->view("index_js");
?>
<div id='MenuKlikKananPendaftaran'>
 <ul>
     <li>Edit Selected Row</li>
     <li>Delete Selected Row</li>
 </ul>
</div>
