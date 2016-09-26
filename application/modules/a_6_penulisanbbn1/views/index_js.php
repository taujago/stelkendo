<script src="<?php echo base_url('assets/js/dinamic_tab.js'); ?>"></script>
<script type="text/javascript">
$(document).ready(function () {
  // $(".idKbPbbn1TxtTanggalPenulisan").datepicker().on('changeDate', function(ev){
  //            $('.idKbPbbn1TxtTanggalPenulisan').datepicker('hide');
  //       });
        $(".tanggal").datepicker().on('changeDate', function(ev){
                   $('.tanggal').datepicker('hide');
              });

  // create jqxtabs.
  $('#idSubTabsPenulisanBBN1').jqxTabs({width: '99%' ,theme: 'bootstrap'});
  // $('#idSubTabsRegistrasiBBN1').bind('selected', function (event) {
  //     var item = event.args.item;
  //     var title = $('#idTabsVeriBBN1').jqxTabs('getTitleAt', item);
  //   //  alert(title);
  // });





  }); //end documnet loaded
  </script>
