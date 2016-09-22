<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="<?php echo base_url('assets/plugins/daterangepicker/daterangepicker-bs3.css'); ?>">
<script src="<?php echo base_url('assets/js/dinamic_tab.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/daterangepicker/daterangepicker.js'); ?>"></script>

<div class="container-fluid" style="background-color: rgb(255, 255, 255);">
	<div class="row">
  		<h3>Penyerahan BPKB </h3>
  		<hr />
	</div>
	<div class="row">
		<form class="form-horizontal">
			<div class="col-md-6">
      			<div class="form-group">
       				<label class="control-label col-sm-3" for="tanggal">Tgl. Entri</label>
        			<div class="col-sm-7">
          				<input type="text" id="tgl_entri" name="tgl_entri" class="form-control tanggal" placeholder="Jarak Tanggal">
        			</div>
      			</div>
    		</div>
    		<div class="col-md-6">
      			<div class="form-group">
       				<label class="control-label col-sm-12" for="tanggal">Monitoring-- Tgl BPKB; Pendaftaran-- Tgl Pendaftaran; Entri-- Tgl Entri; Verifikasi-- Tgl Verifikasi; Cetak-- Tgl Cetak BPKB</label>
      			</div>
    		</div>
		</form>
		<hr />		
	</div>

	<div class="row">
	
	<div class="col-md-12">
      <div class="box">
        <div class="box-body">
        <label class="col-md-12" style="text-align: center;"><h3>Monitoring Tanggal 31/08/2016 s/d 31/08/2016</h3></label>
        <div class="col-md-12">
        <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>53</h3>
                  <p style="font-size: 20px;">Daftar</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
              </div>
            </div>
        <div class="col-md-3 col-xs-6">
        	<div class="small-box bg-orange">
        		<div class="inner">
        			<h3>66</h3>
        			<p style="font-size: 20px;">Entri</p>
        		</div>
        		<div class="icon">
                  <i class="ion ion-archive"></i>
                </div>
        	</div>
        </div>
        <div class="col-md-3 col-xs-6">
        	<div class="small-box bg-blue">
        		<div class="inner">
        			<h3>53</h3>
        			<p style="font-size: 20px;">Verifikasi</p>
        		</div>
        		<div class="icon">
                  <i class="ion ion-ios-pricetags"></i>
                </div>
        	</div>
        </div>
        <div class="col-md-3 col-xs-6">
        	<div class="small-box bg-red">
        		<div class="inner">
        			<h3>53</h3>
        			<p style="font-size: 20px;">Print</p>
        		</div>
        		<div class="icon">
                  <i class="ion ion-ios-printer"></i>
                </div>
        	</div>
        </div>
        <div class="col-md-3 col-xs-6">
        	<div class="small-box bg-purple">
        		<div class="inner">
        			<h3>0</h3>
        			<p style="font-size: 20px;">Penyerahan</p>
        		</div>
        		<div class="icon">
                  <i class="ion ion-android-share-alt"></i>
                </div>
        	</div>
        </div>
        </div>
        </div>
      </div>
    </div>
	</div>
<div class="row">
<div class="col-md-12">
    <div class="box">
        <div class="box-header with-border">
          Detail Data Entri Terakhir
          <div class="box-tools pull-right">
            <button class="btn btn-primary col-md-2 form-control"><i class="fa fa-refresh"></i></button>
          </div>
        </div>
        <div class="box-body">
        <div class="laporan" id=""  style="position: relative;">
    <!-- table -->
    </div>
          <hr />

          <br>&nbsp;
          <br>&nbsp;
          <br>&nbsp;
          <br>&nbsp;
          <br>&nbsp;
          <br>&nbsp;
          <br>&nbsp;
          <br>&nbsp;
          <br>&nbsp;
          <br>&nbsp;
          <br>&nbsp;
          <br>&nbsp;
          <br>&nbsp;
          <br>&nbsp;
          <br>&nbsp;
          <br>&nbsp;
          <br>&nbsp;
          <br>&nbsp;
          <br>&nbsp;
          <br>&nbsp;


        </div>
      </div>
  </div>
	</div>

	


	 <?php
      $this->load->view("index_js");
      ?>
</div>