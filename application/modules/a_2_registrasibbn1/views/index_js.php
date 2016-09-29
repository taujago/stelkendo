<script src="<?php echo base_url('assets/js/dinamic_tab.js'); ?>"></script>



<script type="text/javascript">
$(document).ready(function () {
$('#idSubTabsRegistrasiBBN1').jqxTabs({
  width: 'auto',  height: 'auto',animationType:'fade'
});
$('#idTabsREgistrasi').jqxTabs({
  width: 'auto',  height: 'auto',animationType:'fade'
});

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
  return '<button id=\"tes11\"  onClick=\"btnPBBAddTable(this,'+row+')\" class=\"btn btnPBBedit1 btn-primary\">EDIT 1</button><button id=\"btn2\" style=\"margin-left:10px;\"  class=\"btn btn-primary\" onclick=\"btnPBBDelTable(this,'+row+')\">HAPUS</button>';
};


$("#idTabelRBBN1ListData").jqxGrid(
  {
    width: "95%",
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
    theme: 'bootstrap',
    columns: [
      { text: 'No BPKB', datafield: 'no_bpkb' },
      { text: 'No Rangka', datafield: 'no_rangka' },
      { text: 'No Faktor', datafield: 'no_faktur'},
      { text: 'Barkode', datafield: 'barkode'},
      { text: 'Pemohon', datafield: 'pemohon'},
      { text: 'Diplomat', datafield: 'diplomat'},
      // { text: 'Actions', cellsrenderer: buttonrenderer,width: 150},
    ],ready: function()
    {
    // function  btnPBBAddTable(e,row){
    //
    //    alert(row);
    //  }
    },
  });

  $("#idTabelRBBN1ListData").on("bindingcomplete", function (event) {
  });


  }); //end documnet loaded


  </script>
