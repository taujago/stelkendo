<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content" style="MIN-WIDTH:700PX;    overflow:auto;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove"></span></button>
    <!-- <a href="#" data-dismiss="modal" class="btn btn btn-default"></a> -->
                <h4 class="modal-title">Format Huruf</h4>
            </div><div class="container"></div>
            <div class="modal-body">
                <!--start modal add new   -->
                        <!--start-->
                        <form class="form-horizontal" id="font_format">
                        <div class="row ">
                            <div class="col-md-12">
                                
                                    
                                    <div class="form-group">
                                        <label class="control-label       col-sm-3" for="">Jenis Font :</label>
                                        <div class="col-sm-6">
                                            <?php
                                            echo form_dropdown("jenis_font", $font_arr, '', 'class="form-control col-md-7 col-xs-12 input-style" id="jenis_font" style="min-width: 200px;"');
                                            ?>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="control-label       col-sm-3" for="pwd">Ukuran Huruf</label>
                                        <div class="col-sm-6">
                                            <input type="text" id="ukurun_font" name="ukurun_font" class="form-control col-md-7 col-xs-12 input-style" placeholder="Ukuran Huruf">
                                        </div>
                                    </div>
                                
                                <hr>
                            </div>


                        </div>
                        <div class="row center-block">
                            <div class="col-md-4">
                            </div>

                            <div class="col-md-6">
                                <button type="button" class="btn btn-primary" style="min-width:80px;" id="print">
                                    <i class="fa fa-print"> </i> Cetak
                                </button>
                                <button type="button" class="btn btn-danger " style="min-width:80px;" data-dismiss="modal" aria-hidden="true">
                                    <i class="fa fa-danger"> </i> Batal
                                </button>
                                <!-- <button type="button" class="btn btn-default " style="min-width:80px;">
                                    <i class="fa fa-print"> </i> Export PDF
                                </button> -->
                            </div>
                            
                        </div>
                        <!--end-->
                        </form>
                </div>
            <!-- <div class="modal-footer">
                <a href="#" data-dismiss="modal" class="btn btn btn-default">Close</a>
                <a href="#" class="btn btn-primary">Save changes</a>
            </div> -->
        </div>
    </div>
</div>


