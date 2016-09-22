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
        { name: 'id'},
        { name: 'no_bpkb'},
        { name: 'tgl_bpkb'},
        { name: 'tnkb'},
        { name :'merk'},
        { name: 'tipe'},
        { name: 'jenis_nama'},
        { name: 'nama_pemilik'},
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

    $(".penyerahanbpkb").jqxGrid({ source: getAdapterPBB1() });
    $('.penyerahanbpkb').jqxGrid('updatebounddata');
    $(".penyerahanbpkb").jqxGrid({ showfilterrow: true });
  });
$('#idBtnPBB1Export').click(function(event) {
  /* Act on the event */
//  alert('export');
  $(".penyerahanbpkb").jqxGrid('exportdata', 'csv', 'jqxGrid');
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

  // var buttonrenderer = function (row, columnfield, value, defaulthtml, columnproperties, rowdata) {
  //   return '<button id=\"\"  onClick=\"btnPBBAddTable(this,'+row+')\" class=\"btn btnPBBedit1 btn-primary\">EDIT 1</button><button id=\"btn2\" style=\"margin-left:10px;\"  class=\"btn btn-primary\" onclick=\"btnPBBDelTable(this,'+row+')\">HAPUS</button>';
  // };

  $(".penyerahanbpkb").jqxGrid(
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
        { text: 'No', datafield: 'id',width: 50 },
        { text: 'No BPKB', datafield: 'no_bpkb',width: 100 },
        { text: 'Tgl. BPKB', datafield: 'tgl_bpkb', width: 100 },
        { text: 'No Polisi', datafield: 'tnkb', width: 100},
        { text: 'Merk', datafield: 'merk', width: 100},
        { text: 'Tipe', datafield: 'tipe', width: 150},
        { text: 'Jenis Nama', datafield: 'jenis_nama', width: 150},
        { text: 'Nama Pemilik', datafield: 'nama_pemilik', width: 150},
      ],ready: function()
      {

      },
    });

    $(".idTabellaporanbbn1").on("bindingcomplete", function (event) {
    });
    /* end table proses*/

    /* end table proses*/

    $('#idBtnTambahPemohonBBN1').click(function(){
      var url='index.php/a_1_1_pemohonbaru';
      var target={'href':url,'innerHTML':'Pemohon Baru'};
      console.log(target.href);
      registerComposeButtonEvent(target);
      registerCloseEvent();
    });






 





  }); //end documnet loaded
  </script>