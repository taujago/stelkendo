<script src="<?php echo base_url('assets/js/dinamic_tab.js'); ?>"></script>

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





  <script>
//http://querybuilder.js.org/assets/demo-basic.js
  $(document).ready(function() {
    var rules_basic = {
  condition: 'AND',
  rules: [{
    id: 'price',
    operator: 'less',
    value: 10.25
  }, {
    condition: 'OR',
    rules: [{
      id: 'category',
      operator: 'equal',
      value: 2
    }, {
      id: 'category',
      operator: 'equal',
      value: 1
    }]
  }]
};

$('#builder-basic').queryBuilder({

  plugins: ['bt-tooltip-errors'],
  lang_code:'in',
  filters: [{
    id: 'name',
    label: 'Name',
    type: 'string'
  }, {
    id: 'category',
    label: 'Category',
    type: 'integer',
    input: 'select',
    values: {
      1: 'Books',
      2: 'Movies',
      3: 'Music',
      4: 'Tools',
      5: 'Goodies',
      6: 'Clothes'
    },
    operators: ['equal', 'not_equal', 'in', 'not_in', 'is_null', 'is_not_null']
  }, {
    id: 'in_stock',
    label: 'In stock',
    type: 'integer',
    input: 'radio',
    values: {
      1: 'Yes',
      0: 'No'
    },
    operators: ['equal']
  }, {
    id: 'price',
    label: 'Price',
    type: 'double',
    validation: {
      min: 0,
      step: 0.01
    }
  }, {
    id: 'id',
    label: 'Identifier',
    type: 'string',
    placeholder: '____-____-____',
    operators: ['equal', 'not_equal'],
    validation: {
      format: /^.{4}-.{4}-.{4}$/
    }
  }],

  rules: rules_basic
});

$('#btn-reset').on('click', function() {
  $('#builder-basic').queryBuilder('reset');
});

$('#btn-set').on('click', function() {
  $('#builder-basic').queryBuilder('setRules', rules_basic);
});

$('#btn-get').on('click', function() {
  var result = $('#builder-basic').queryBuilder('getRules');

  if (!$.isEmptyObject(result)) {
    alert(JSON.stringify(result, null, 2));
  }
});
  });
</script>
