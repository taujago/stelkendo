<script src="<?php echo base_url('assets/js/dinamic_tab.js'); ?>"></script>

<script type="text/javascript">
$(document).ready(function () {
  //Datemask dd/mm/yyyy
  //  $("[data-mask]").inputmask();
  // $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
  //Date picker
  $('#idTanggalBBN1').datepicker({
    autoclose: true
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


  $('#idBtnTampilDataPBB1').click(function(){ // event tampil
    alert('tampil');

    $("#idTabelPendaftarabBBN1").jqxGrid({ source: getAdapterPBB1() });
    $('#idTabelPendaftarabBBN1').jqxGrid('updatebounddata');
  });

  var dataAdapter ;// inisialisai tabel
  $("#idTabelPendaftarabBBN1").jqxGrid(
    {
      width: "99%",
      height: "99%",
      source: dataAdapter,
      pageable: true,
      autoheight: false,
      sortable: true,
      // altrows: true,
      // enabletooltips: true,
      // editable: true,
      selectionmode: 'multiplecellsadvanced',
      groupable: true,
      columns: [
        { text: 'No BPKB', datafield: 'no_bpkb' },
        { text: 'No Rangka', datafield: 'no_rangka' },
        { text: 'No Faktor', datafield: 'no_faktur'},
        { text: 'Barkode', datafield: 'barkode'},
        { text: 'Pemohon', datafield: 'pemohon'},
        { text: 'Diplomat', datafield: 'diplomat'}
      ]
    });

    /* end table proses*/

    $('#idBtnTambahPemohonBBN1').click(function(){
      var url='index.php/a_pemohonbaru';
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
          showPleaseWait()
        }

      });
    });


$('.main-header .sidebar-toggle').click(function(event) {
  /* Act on the event */
  event.preventDefault();
  alert('tes');
});




  }); //end documnet loaded
  </script>
