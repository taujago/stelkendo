<script src="<?php echo base_url('assets/js/dinamic_tab.js'); ?>"></script>

<script type="text/javascript">
$(document).ready(function () {
  //Datemask dd/mm/yyyy
  //  $("[data-mask]").inputmask();
  // $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
  //Date picker

  $(".tanggal").datepicker().on('changeDate', function(ev){                 
             $('.tanggal').datepicker('hide');
        });






  }); //end documnet loaded
  </script>
