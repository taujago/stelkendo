<!-- jQuery 2.1.4 -->
<script src="assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
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
<!-- bootstrap datepicker -->
<script src="<?php echo base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="assets/vendor/jqwidgets/jqwidgets/jqxcore.js"></script>
<script type="text/javascript" src="assets/vendor/jqwidgets/jqwidgets/jqxdata.js"></script>

<script src="<?php echo base_url(); ?>assets/vendor/jqwidgets/jqwidgets/jqxbuttons.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jqwidgets/jqwidgets/jqxscrollbar.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jqwidgets/jqwidgets/jqxmenu.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jqwidgets/jqwidgets/jqxgrid.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jqwidgets/jqwidgets/jqxgrid.pager.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jqwidgets/jqwidgets/jqxgrid.grouping.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jqwidgets/jqwidgets/jqxgrid.sort.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jqwidgets/jqwidgets/jqxgrid.edit.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jqwidgets/jqwidgets/jqxdropdownlist.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jqwidgets/jqwidgets/jqxgrid.selection.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jqwidgets/jqwidgets/jqxlistbox.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jqwidgets/jqwidgets/jqxgrid.columnsresize.js"></script>
<script src="<?php echo base_url(); ?>assets/js/modal-loading.js"></script>

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
    tabId=target.innerHTML.replace(/ /g,"_"); // ganti spasi menjadi underscore
    if($("#" + tabId).length == 0) {
      //it doesn't exist
      registerComposeButtonEvent(target);
      registerCloseEvent();
    }else{
      //alert('id exist');
        showTab(tabId);
    }

  };


  //this method will demonstrate how to add tab dynamically

  function registerComposeButtonEvent(target) {
    var tabId= target.innerHTML;
    tabId=tabId.replace(/ /g,"_"); // ganti spasi menjadi underscore

    // tambah dynamic tab dan konten tab .append(html kode);
    $('.nav-pills').append('<li class="" ><a href="#' + tabId + '"><button class="close closeTab btn-danger btn-round" type="button">x</button></button>'+target.innerHTML+'</a></li>');
    $('.tab-content').append('<div class="tab-pane" style="background-color: rgb(255, 255, 255);" id="' + tabId + '"></div>');
    //send
    var status=craeteNewTabAndLoadUrl("", target.href, "#" + tabId);

    $(this).tab('show');
    showTab(tabId);
    registerCloseEvent();


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

  $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});


}); // end jquery on_load

</script>
