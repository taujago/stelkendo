

<script type="text/javascript">
$(document).ready(function () {
  //Selected event


$('#idSubTabsRegistrasiBBN1').jqxTabs({
  width: 'auto',  height: 'auto',animationType:'fade'
});
$('#idTabsREgistrasi').jqxTabs({
  width: 'auto',  height: 'auto',animationType:'fade'
});
$('#idTabsREgistrasi').on('tabclick', function (event)
{
  var clickedItem = event.args.item;
// passing "cells" to the 'updatebounddata' method will refresh only the cells values when the new rows count is equal to the previous rows count.
// $("#idTabelRBBN1ListData").jqxGrid('updatebounddata', 'cells');
  // alert(clickedItem);
  // if(clickedItem==1)
  // {
  //
  // }
});




  /*start table proses*/
  var cellsrenderer = function (row, columnfield, value, defaulthtml, columnproperties, rowdata) {
    if (value < 20) {
      return '<span style="margin: 6px; float: ' + columnproperties.cellsalign + '; color: #ff0000;">' + value + '</span>';
    }
    else {
      return '<span style="margin: 6px; float: ' + columnproperties.cellsalign + '; color: #008000;">' + value + '</span>';
    }
  }

  var buttonrenderer = function (row, columnfield, value, defaulthtml, columnproperties, rowdata) {

    return '<a  class=\"btn btn-primary\" onclick=\"edit('+row+')\">EDIT </a><a style=\"margin-left:10px;\"  class=\"btn btn-primary\" onclick=\"hapus('+row+')\">HAPUS</a>';

  };

  var getAdapterPBB1 = function () { // dapatkan data dari url
    // prepare the data
    var source =
    {
      datatype: "json",
      datafields: [
        { name: 'no_bpkb', type: 'string'},
        { name: 'no_rek_bpkb', type: 'string'},
        { name: 'tgl_bpkb', type: 'string'},
        {name :'no_rangka', type: 'string'},
        { name: 'no_mesin', type: 'string'},
        { name: 'no_polisi', type: 'string'},
        { name: 'merk', type: 'string'},
        { name: 'model', type: 'string'},
        { name: 'jenis', type: 'string'},
        { name: 'jmlh_roda', type: 'string'},
        { name: 'warna_tnkb', type: 'string'},
        { name: 'no_faktur', type: 'string'},
        { name: 'nama_pemilik', type: 'string'},
        { name: 'nama_pemohon', type: 'string'},
        { name: 'operator', type: 'string'},
        { name: 'wilayah', type: 'string'}

      ],
      id: 'id',
      url:'assets/registrasi_list_data.json',
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
$("#idTabelRBBN1ListData").jqxGrid(
  {
    width: "980px",
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
     columnsresize: true,
    columns: [
      {text: 'No BPKB', datafield: 'no_bpkb'},
      {text:'no_rek_bpkb' ,datafield: 'no_rek_bpkb'},
      {text:'tgl_bpkb' , datafield: 'tgl_bpkb'},
      {text:'no_rangka ' , datafield :'no_rangka'},
      {text:'no_mesin' , datafield: 'no_mesin'},
      {text:'no_polisi ' , datafield: 'no_polisi'},
      {text:'merk ' , datafield: 'merk'},
      {text:'model ' , datafield: 'model'},
      {text:'jenis ' , datafield: 'jenis'},
      {text:'jmlh_roda ' , datafield: 'jmlh_roda'},
      {text:'warna_tnkb ' , datafield: 'warna_tnkb'},
      {text:'no_faktur ' , datafield: 'no_faktur'},
      {text:'nama_pemilik ' , datafield: 'nama_pemilik'},
            {text:'operator ' , datafield: 'operator'},
      {text:'wilayah ' , datafield: 'wilayah'},
      // { text: 'Actions', cellsrenderer: buttonrenderer,width: 150}

      {text:'No. Reg. BPKB' ,datafield: 'no_rek_bpkb'},
      {text:'Tgl. BPKB' , datafield: 'tgl_bpkb'},
      {text:'No. Rangka ' , datafield :'no_rangka'},
      {text:'No. Mesin' , datafield: 'no_mesin'},
      {text:'No. Polisi ' , datafield: 'no_polisi'},
      {text:'Merk ' , datafield: 'merk'},
      {text:'Model ' , datafield: 'model'},
      {text:'Jenis ' , datafield: 'jenis'},
      {text:'Jumlah Roda ' , datafield: 'jmlh_roda'},
      {text:'Warna TNKB ' , datafield: 'warna_tnkb'},
      {text:'No. Faktur ' , datafield: 'no_faktur'},
      {text:'Nama Pemilik ' , datafield: 'nama_pemilik'},
            {text:'Operator ' , datafield: 'operator'},
      {text:'Wilayah ' , datafield: 'wilayah'},
      { text: 'Action', cellsrenderer: buttonrenderer,width: 150}

      // { text: 'Actions', cellsrenderer: buttonrenderer,width: 150},
    ],ready: function()
    {
    //  alert('TABLE READY');

         $('#idTabelRBBN1ListData').jqxGrid('autoresizecolumns');
         $('#idTabelRBBN1ListData').on('filter', function () {
             alert("The Grid has been filtered");
                      $('#idTabelRBBN1ListData').jqxGrid('autoresizecolumns');
         });
    },
  });


  // create context MenuKlikKanan
           var contextMenuKlikKanan = $("#MenuKlikKanan").jqxMenu({ width: 200, height: 58, autoOpenPopup: false, mode: 'popup'});

           $("#idTabelRBBN1ListData").on('contextMenuKlikKanan', function () {
               return false;
           });
var editrow = -1;

          // handle context MenuKlikKanan clicks.
           $("#MenuKlikKanan").on('itemclick', function (event) {
               var args = event.args;
               var rowindex = $("#idTabelRBBN1ListData").jqxGrid('getselectedrowindex');
               if ($.trim($(args).text()) == "Edit Selected Row") {
                   // editrow = rowindex;
                   var dataRecord = $("#idTabelRBBN1ListData").jqxGrid('getrowdata', rowindex);

                   $("#no_bpkb").val(dataRecord.no_bpkb);
                   $("#no_rek_bpkb").val(dataRecord.no_rek_bpkb);
                   $("#tgl_bpkb").val(dataRecord.tgl_bpkb);
                   $("#no_rangka").val(dataRecord.no_rangka);
                   $("#no_mesin").val(dataRecord.no_mesin);
                   $("#no_polisi").val(dataRecord.no_polisi);

                   var offset = $("#idTabelRBBN1ListData").offset();

                  //  $("#popupWindow").jqxWindow({ position: { x: parseInt(offset.left) + 60, y: parseInt(offset.top) + 60} });
                   //
                   //get the clicked row's data and initialize the input fields.
                  var dataRecord = $("#idTabelRBBN1ListData").jqxGrid('getrowdata', editrow);
                    // add value
                    console.log(dataRecord);
                    $("#IdKbRbb1TxtNoBpkb").val(dataRecord.no_bpkb);
                    $("#IdKbRbb1TxtNoRekBPKB").val(dataRecord.no_rek_bpkb);
                    $("#IdKbRbb1TanggalBpkb").val(dataRecord.tgl_bpkb);
                    $("#IdKbRbb1TxtNoRangka").val(dataRecord.no_rangka);
                    $("#IdKbRbb1TxtNoBpkb").val(dataRecord.no_mesin);
                    $("#IdKbRbb1TxtNoBpkb").val(dataRecord.no_polisi);
                    $("#IdKbRbb1SelectMerk").value=dataRecord.merk;
                    $("#IdKbRbb1SelectModel").value=dataRecord.model;
                    $("#IdKbRbb1SelectJenis").val(dataRecord.jenis);
                    $("#IdKbRbb1TxtNoBpkb").val(dataRecord.jmlh_roda);
                    $("#IdKbRbb1TxtNoBpkb").val(dataRecord.warna_tnkb);
                    $("#IdKbRbb1TxtNoBpkb").val(dataRecord.nama_pemilik);
                    $("#IdKbRbb1TxtWilayah").val(dataRecord.wilayah);
                    $("#IdKbRbb1TxtNoBpkb").val(dataRecord.operator);

                    //show tabs
                   $('#idTabsREgistrasi').jqxTabs('select', 0);// pilih index tab pertama

                   $('#idTabsREgistrasi').jqxTabs('select', 0);




                  //  $("#popupWindow").jqxWindow({ position: { x: parseInt(offset.left) + 60, y: parseInt(offset.top) + 60} });
                   //
                  //  // get the clicked row's data and initialize the input fields.

                  //  $("#lastName").val(dataRecord.lastname);
                  //  $("#product").val(dataRecord.productname);
                  //  $("#quantity").jqxNumberInput({ decimal: dataRecord.quantity });
                  //  $("#price").jqxNumberInput({ decimal: dataRecord.price });
                   //
                  //  // show the popup window.
                  //  $("#popupWindow").jqxWindow('show');
               }
               else {
                   var rowid = $("#idTabelRBBN1ListData").jqxGrid('getrowid', rowindex);


          BootstrapDialog.show({
            message : 'ANDA AKAN MENGHAPUS DATA DENGAN ID = '+rowid+'. ANDA YAKIN  ?  ',
            title: 'KONFIRMASI HAPUS DATA',
            draggable: true,
            buttons : [
              {
                label : 'YA',
                cssClass : 'btn-primary',
                hotkey: 13,
                action : function(dialogItself){

                  dialogItself.close();
                  $('#myPleaseWait').modal('show');
                  $("#idTabelRBBN1ListData").jqxGrid('deleterow', rowid);
                  $('#myPleaseWait').modal('hide');

                }
              },
              {
                label : 'TIDAK',
                cssClass : 'btn-danger',
                action: function(dialogItself){
                    dialogItself.close();
                }
              }
            ]
          });

               }
           });

           $("#idTabelRBBN1ListData").on('rowclick', function (event) {
               if (event.args.rightclick) {

                   $("#idTabelRBBN1ListData").jqxGrid('selectrow', event.args.rowindex);
                   var scrollTop = $(window).scrollTop();
                   var scrollLeft = $(window).scrollLeft();
                   contextMenuKlikKanan.jqxMenu('open', parseInt(event.args.originalEvent.clientX) + 5 + scrollLeft, parseInt(event.args.originalEvent.clientY) + 5 + scrollTop);

                   return false;
               }
           });



  }); //end documnet loaded


  </script>
