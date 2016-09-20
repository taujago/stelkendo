<script src="<?php echo base_url('assets/js/dinamic_tab.js'); ?>"></script>

<script type="text/javascript">
$(document).ready(function () {

           // create jqxtabs.
           $('#jqxtabs').jqxTabs({width: '90%' ,theme: 'bootstrap'});
           $('#jqxtabs').bind('selected', function (event) {
               var item = event.args.item;
               var title = $('#jqxtabs').jqxTabs('getTitleAt', item);
              // alert(title);
           });


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
        { name: 'no_rangka'},
        { name: 'no_faktur'},
        {name :'barkode'},
        { name: 'pemohon'},
        { name: 'diplomat'},
      ],
      id: 'id',
      url:'assets/tes1.json',
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

    $("#idTabelPendaftarabBBN1").jqxGrid({ source: getAdapterPBB1() });
    $('#idTabelPendaftarabBBN1').jqxGrid('updatebounddata');
    $("#idTabelPendaftarabBBN1").jqxGrid({ showfilterrow: true });
  });
$('#idBtnPBB1Export').click(function(event) {
  /* Act on the event */
//  alert('export');
  $("#idTabelPendaftarabBBN1").jqxGrid('exportdata', 'csv', 'jqxGrid');
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

  $("#idTabelPendaftarabBBN1").jqxGrid(
    {
      width: "99%",
      height: "99%",
      //  source: dataAdapter,
      source: getAdapterPBB1() ,
      sortable: true,
      filtermode: 'excel',
      filterable: true,
      sortable: true,
      groupable: true,
      showfilterrow: true,
      autoshowfiltericon: true,
      pageable: true,
      theme: 'bootstrap',
      columns: [
        { text: 'No BPKB', datafield: 'no_bpkb' },
        { text: 'No Rangka', datafield: 'no_rangka' },
        { text: 'No Faktor', datafield: 'no_faktur'},
        { text: 'Barkode', datafield: 'barkode'},
        { text: 'Pemohon', datafield: 'pemohon'},
        { text: 'Diplomat', datafield: 'diplomat'},
        { text: 'Actions', cellsrenderer: buttonrenderer,width: 150},
      ],ready: function()
      {

      },
    });

    $("#idTabelPendaftarabBBN1").on("bindingcomplete", function (event) {
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

    // $('#idPendaftaranBBNPerusahaan').click(function(){
    //   console.log(target.href);
    // });




    $('input[name="idJenisPemohonBBN1"]').click(function(){

      $.ajax({
        url : '<?php echo site_url("general/get_pemohon_dropdown"); ?>/'+$(this).val(),
        async: true,
        success : function(htmldata) {
          $("#PEMOHON_ID").html(htmldata);
          hidePleaseWait();
        },
        beforeSend: function( xhr ) {
          showPleaseWait();
        }

      });
    });


$('.main-header .sidebar-toggle').click(function(event) {
  /* Act on the event */
  event.preventDefault();
//  alert('reload');
  $("#idTabelPendaftarabBBN1").jqxGrid(
    {
      width: "99%",
      height: "95%",
      //  source: dataAdapter,
      source: getAdapterPBB1() ,
      sortable: true,
      filtermode: 'excel',
      filterable: true,
      sortable: true,
      groupable: true,
      showfilterrow: true,
      autoshowfiltericon: true,
      pageable: true,

      columns: [
        { text: 'No BPKB', datafield: 'no_bpkb' },
        { text: 'No Rangka', datafield: 'no_rangka' },
        { text: 'No Faktor', datafield: 'no_faktur'},
        { text: 'Barkode', datafield: 'barkode'},
        { text: 'Pemohon', datafield: 'pemohon'},
        { text: 'Diplomat', datafield: 'diplomat'},
        { text: 'Actions', cellsrenderer: buttonrenderer,width: 150},
      ],ready: function()
      {

      },
    });
});



  }); //end documnet loaded
  </script>





























  <!-- js pemohon baru -->
  <style type="text/css">


  </style>

  <script type="text/javascript">
    $(document).ready(function () {
   //    $("#idTablePendaftarabBBN1Pemohon").bind('rowselect', function (event) {
   //      var selectedRowIndex = event.args.rowindex;
   //      var rowindexes = $('#idTablePendaftarabBBN1Pemohon').jqxGrid('getselectedrowindexes');
   //      var selectedRowData = $('#idTablePendaftarabBBN1Pemohon').jqxGrid('getrowdata', rowindexes[selectedRowIndex]);
   //  // console.log(rowindexes);
   //  var rowID = $('#idTablePendaftarabBBN1Pemohon').jqxGrid('getrowid', rowindexes);
   //     // get row Data by ID.
   //     var data = $('#idTablePendaftarabBBN1Pemohon').jqxGrid('getrowdatabyid', rowID-1);
   //     console.log(data);
   //   // console.log(event.args.getrowdata(selectedRowIndex));
   // });
        //  init table
        var data =
        {
          datatype: "json",
          datafields: [
          { name: 'PEMOHON_ID'},
          { name: 'PEMOHON_REG'},
          { name: 'PEMOHON_NAMA'},
          { name: 'COMPANY_ID'},
          { name: 'COMPANY_NAMA'},
          { name: 'BANK_NAMA'},
          { name: 'PEMOHON_REK'},
          { name: 'PEMOHON_TELP'},
          { name: 'PEMOHON_HP'},
          { name: 'PEMOHON_ALAMAT'},
          { name: 'TGL_DAFTAR'},
          { name: 'STATUS'},
          { name: 'PEMOHON_JENIS'},

          ],
          url:'<?php echo site_url("a_1_1_pemohonbaru/getTablePemohon"); ?>'
        };
        var dataAdapter = new $.jqx.dataAdapter(data, {
          downloadComplete(edata, textStatus, jqXHR){
            hidePleaseWait();
          },
          beforeSend(jqXHR, settings){
            showPleaseWait();
          }


        } );

        $("#idTablePendaftarabBBN1Pemohon").jqxGrid(
        {


    width: '100%',
               height: '100%',
               source: dataAdapter,
               showfilterrow: true,
               filterable: true,
               selectionmode: '',
               pageable: true,
               enabletooltips: true,
               columnsresize: true,
               selectionmode:'singlerow',

    ready: function () {
      // $('#idTablePendaftarabBBN1Pemohon').jqxGrid('autoresizecolumns');
     $('#idTablePendaftarabBBN1Pemohon').on('rowselect', function (event) {

            var data = $('#idTablePendaftarabBBN1Pemohon').jqxGrid('getrowdata',event.args.rowindex);
  //  alert(data.COMPANY_NAMA);
  //  console.log(data.COMPANY_NAMA);
      });
    },

    columns: [
    { text: 'PEMOHON ID', datafield: 'PEMOHON_ID', width: '100px'  },
    { text: 'PEMOHON REG', datafield: 'PEMOHON_REG',width: '130px' },
    { text: 'PEMOHON NAMA', datafield: 'PEMOHON_NAMA',width: '200px'},
    { text: 'COMPANY ID', datafield: 'COMPANY_ID',width: '100px'},
    { text: 'COMPANY NAMA', datafield: 'COMPANY_NAMA',width: '200px'},
    { text: 'BANK NAMA', datafield: 'BANK_NAMA',width: '200px'},
    { text: 'PEMOHON REK', datafield: 'PEMOHON_REK',width: '200px'},
    { text: 'PEMOHON TELP', datafield: 'PEMOHON_TELP',width: '200px'},
    { text: 'PEMOHON HP', datafield: 'PEMOHON_HP',width: '200px'},
    { text: 'PEMOHON ALAMAT', datafield: 'PEMOHON_ALAMAT',width: '300px'},
    { text: 'TGL DAFTAR', datafield: 'TGL_DAFTAR',width: '100px'},
    { text: 'STATUS', datafield: 'STATUS',width: '90px'},
    { text: 'PEMOHON JENIS', datafield: 'PEMOHON_JENIS',width: '200px'},
    ]
  });


  }); //end documnet loaded
  </script>
