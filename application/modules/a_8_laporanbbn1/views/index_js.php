
<script src="<?php echo base_url('assets/js/dinamic_tab.js'); ?>"></script>


<script type="text/javascript">
$(document).ready(function () {
  //Datemask dd/mm/yyyy
  //  $("[data-mask]").inputmask();
  // $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
  //Date picker

  // $(".tanggal").datepicker().on('changeDate', function(ev){                 
  //            $('.tanggal').datepicker('hide');
  //       });
  $('.tanggal').daterangepicker();



  }); //end documnet loaded
  </script>

  <script type="text/javascript">
$(document).ready(function () {

           // create jqxtabs.
          //  $('#jqxtabs').jqxTabs({width: '90%' ,theme: 'bootstrap'});
          //  $('#jqxtabs').bind('selected', function (event) {
          //      var item = event.args.item;
          //      var title = $('#jqxtabs').jqxTabs('getTitleAt', item);
          //     // alert(title);
          //  });


  //Datemask dd/mm/yyyy
  //  $("[data-mask]").inputmask();
  // $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
  //Date picker

  /*start table proses*/

  var getAdapterPBB1 = function () { // dapatkan data dari url
    // prepare the data
    var source =
    {
      datatype: "json",
      datafields: [
        { name: 'no_bpkb'},
        { name: 'tnkb'},
        { name: 'no_rangka'},
        { name :'jenis_nama'},
        { name: 'wilayah_nama'},
        { name: 'waktu_entri'},
      ],
      id: 'id',
      url:'assets/ikut_test.json',
      updaterow: function (rowid, rowdata, commit) {
        // synchronize with the server - send update command
        // call commit with parameter true if the synchronization with the server is successful
        // and with parameter false if the synchronization failed.
        commit(true);
      }
    };
    var dataAdapter = new $.jqx.dataAdapter(source);
    return dataAdapter;
  }

  $('#idBtnTampilDataPBB1').click(function(){ // event tampil
//    alert('tampil');

    $(".laporan").jqxGrid({ source: getAdapterPBB1() });
    $('.laporan').jqxGrid('updatebounddata');
    $(".laporan").jqxGrid({ showfilterrow: true });
  });
$('#idBtnPBB1Export').click(function(event) {
  /* Act on the event */
//  alert('export');
  $(".laporan").jqxGrid('exportdata', 'csv', 'jqxGrid');
});

  var dataAdapter ;// start inisialisai tabel
  var cellsrenderer = function (row, columnfield, value, defaulthtml, columnproperties, rowdata) {
    if (value < 20) {
      return '<span style="margin: 6px; float: ' + columnproperties.cellsalign + '; color: #ff0000;">' + value + '</span>';
    }
    else {
      return '<span style="margin: 6px; float: ' + columnproperties.cellsalign + '; color: #008000;">' + value + '</span>';
    }
  }

  var buttonrenderer = function (row, columnfield, value, defaulthtml, columnproperties, rowdata) {
    return '<button id=\"\"  onClick=\"btnPBBAddTable(this,'+row+')\" class=\"btn btnPBBedit1 btn-primary\">EDIT 1</button><button id=\"btn2\" style=\"margin-left:10px;\"  class=\"btn btn-primary\" onclick=\"btnPBBDelTable(this,'+row+')\">HAPUS</button>';
  };

  $(".laporan").jqxGrid(
    {
      width: "99%",
      height: "99%",
      //  source: dataAdapter,
      source: getAdapterPBB1() ,
      sortable: true,
      filtermode: 'excel',
      filterable: true,
      sortable: true,
      groupable: false,
      showfilterrow: true,
      autoshowfiltericon: true,
      pageable: true,
      theme: 'bootstrap',
      columns: [
        { text: 'No BPKB', datafield: 'no_bpkb' },
        { text: 'TNKB&nbsp;', datafield: 'tnkb' },
        { text: 'No Rangka', datafield: 'no_rangka'},
        { text: 'Jenis Nama', datafield: 'jenis_nama'},
        { text: 'Wilayah Nama', datafield: 'wilayah_nama'},
        { text: 'Waktu Entri', datafield: 'waktu_entri'},
      ],ready: function()
      {

      },
    });

    $(".laporan").on("bindingcomplete", function (event) {
    });
    /* end table proses*/

    /* end table proses*/








 





  }); //end documnet loaded
  </script>
