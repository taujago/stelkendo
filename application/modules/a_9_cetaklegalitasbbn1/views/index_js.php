<script src="<?php echo base_url('assets/js/dinamic_tab.js'); ?>"></script>
<script type="text/javascript">
$(document).ready(function () {

  // create jqxtabs.
  $('#idTabsVeriBBN1').jqxTabs({width: '90%' ,theme: 'bootstrap'});
  $('#idTabsVeriBBN1').bind('selected', function (event) {
      var item = event.args.item;
      var title = $('#idTabsVeriBBN1').jqxTabs('getTitleAt', item);
    //  alert(title);
  });





  }); //end documnet loaded
  </script>
