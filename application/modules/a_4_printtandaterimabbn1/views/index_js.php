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


 $('#idPendaftaranBBNPerusahaan').click(function(){
      console.log(target.href);
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
        { name: 'nama_pemilik'},
        { name :'waktu_entri'}
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

    $(".Tabel1").jqxGrid({ source: getAdapterPBB1() });
    $('.Tabel1').jqxGrid('updatebounddata');
    $(".Tabel1").jqxGrid({ showfilterrow: true });
    $(".Tabel2").jqxGrid({ source: getAdapterPBB1() });
    $('.Tabel2').jqxGrid('updatebounddata');
    $(".Tabel2").jqxGrid({ showfilterrow: true });
  });
$('#idBtnPBB1Export').click(function(event) {
  /* Act on the event */
//  alert('export');
  $(".Tabel1").jqxGrid('exportdata', 'csv', 'jqxGrid');
  $(".Tabel2").jqxGrid('exportdata', 'csv', 'jqxGrid');
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
    return ' &nbsp;<i class="fa fa-file"> </i> 0';
  };

  $(".Tabel1").jqxGrid(
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
        { text: 'No', datafield: 'id', width: 50 },
        { text: '##', cellsrenderer: buttonrenderer,width: 30 },
        { text: 'No BPKB', datafield: 'no_bpkb',width: 150 },
        { text: 'Nama Pemilik', datafield: 'nama_pemilik', width: 180},
        { text: 'Tanggal', datafield: 'waktu_entri',width: 150},
      ],ready: function()
      {

      },
    });

    $(".Tabel1").on("bindingcomplete", function (event) {
    });
    /* end table proses*/

    /* end table proses*/

     $(".Tabel2").jqxGrid(
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
        { text: 'No', datafield: 'id', width: 50 },
        { text: '##', cellsrenderer: buttonrenderer,width: 30 },
        { text: 'No BPKB', datafield: 'no_bpkb',width: 150 },
        { text: 'Nama Pemilik', datafield: 'nama_pemilik', width: 180},
        { text: 'Tanggal', datafield: 'waktu_entri',width: 150},
      ],ready: function()
      {

      },
    });

    $(".Tabel2").on("bindingcomplete", function (event) {
    });





 





  }); //end documnet loaded
  </script>


