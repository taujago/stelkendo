<style type="text/css">


</style>

<script type="text/javascript">
  $(document).ready(function () {
    $("#tablePemohonPendaftaranBaru").bind('rowselect', function (event) {
      var selectedRowIndex = event.args.rowindex;
      var rowindexes = $('#tablePemohonPendaftaranBaru').jqxGrid('getselectedrowindexes');
      var selectedRowData = $('#tablePemohonPendaftaranBaru').jqxGrid('getrowdata', rowindexes[selectedRowIndex]);
  // console.log(rowindexes);
  var rowID = $('#tablePemohonPendaftaranBaru').jqxGrid('getrowid', rowindexes);
     // get row Data by ID.
     var data = $('#tablePemohonPendaftaranBaru').jqxGrid('getrowdatabyid', rowID-1);
     console.log(data);
   // console.log(event.args.getrowdata(selectedRowIndex));
 });
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
        url:'<?php echo site_url("a_pemohonbaru/getTablePemohon"); ?>'
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

       width: '100%',
       source: dataAdapter,
       pageable: true,
  // columnsresize: true,
  // pageable: true,
  autoheight: true,
  sortable: true,
  // altrows: true,
  enabletooltips: true,
  ready: function () {
    // $('#tablePemohonPendaftaranBaru').jqxGrid('autoresizecolumns');
  },
  columns: [
  { text: 'PEMOHON ID', datafield: 'PEMOHON_ID' },
  { text: 'PEMOHON REG', datafield: 'PEMOHON_REG' },
  { text: 'PEMOHON NAMA', datafield: 'PEMOHON_NAMA'},
  { text: 'COMPANY ID', datafield: 'COMPANY_ID'},
  { text: 'COMPANY NAMA', datafield: 'COMPANY_NAMA'},
  { text: 'BANK NAMA', datafield: 'BANK_NAMA'},
  { text: 'PEMOHON REK', datafield: 'PEMOHON_REK'},
  { text: 'PEMOHON TELP', datafield: 'PEMOHON_TELP'},
  { text: 'PEMOHON HP', datafield: 'PEMOHON_HP'},
  { text: 'PEMOHON ALAMAT', datafield: 'PEMOHON_ALAMAT'},
  { text: 'TGL DAFTAR', datafield: 'TGL_DAFTAR'},
  { text: 'STATUS', datafield: 'STATUS'},
  { text: 'PEMOHON JENIS', datafield: 'PEMOHON_JENIS'},
  ]
});

// $("#tablePemohonPendaftaranBaru").jqxGrid('autoresizecolumns');
//

}); //end documnet loaded
</script>
