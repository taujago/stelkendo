<style type="text/css">


</style>

<script type="text/javascript">
  $(document).ready(function () {
 //    $("#tablePemohonPendaftaranBaru").bind('rowselect', function (event) {
 //      var selectedRowIndex = event.args.rowindex;
 //      var rowindexes = $('#tablePemohonPendaftaranBaru').jqxGrid('getselectedrowindexes');
 //      var selectedRowData = $('#tablePemohonPendaftaranBaru').jqxGrid('getrowdata', rowindexes[selectedRowIndex]);
 //  // console.log(rowindexes);
 //  var rowID = $('#tablePemohonPendaftaranBaru').jqxGrid('getrowid', rowindexes);
 //     // get row Data by ID.
 //     var data = $('#tablePemohonPendaftaranBaru').jqxGrid('getrowdatabyid', rowID-1);
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

      $("#tablePemohonPendaftaranBaru").jqxGrid(
      {

  //      width: '100%',
  //      source: dataAdapter,
  //      pageable: true,
  // // columnsresize: true,
  // // pageable: true,
  // autoheight: true,
  // sortable: true,
  // // altrows: true,
  // enabletooltips: true,
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
    // $('#tablePemohonPendaftaranBaru').jqxGrid('autoresizecolumns');
   $('#tablePemohonPendaftaranBaru').on('rowselect', function (event) {

          var data = $('#tablePemohonPendaftaranBaru').jqxGrid('getrowdata',event.args.rowindex);
  alert(data.COMPANY_NAMA);
  console.log(data.COMPANY_NAMA);
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
