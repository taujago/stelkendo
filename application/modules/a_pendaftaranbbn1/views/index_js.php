<script type="text/javascript">
    $(document).ready(function () {
      alert("loaded");
            var data =
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
                url:'assets/tes1.json'
            };
  var dataAdapter = new $.jqx.dataAdapter(data);
            $("#jqxgrid").jqxGrid(
            {
              width: "99%",
                      height: "99%",
                      source: dataAdapter,
                      // theme: theme,
                      pageable: true,
                      autoheight: false,
                      sortable: true,
                      altrows: true,
                      enabletooltips: true,
                      editable: true,
                      selectionmode: 'multiplecellsadvanced',
              groupable: true,
              columns: [
              { text: 'No BPKB', datafield: 'no_bpkb' },
              { text: 'No Rangka', datafield: 'no_rangka' },
              { text: 'No Faktor', datafield: 'no_faktur'},
                { text: 'Barkode', datafield: 'barkode'},
              { text: 'Pemohon', datafield: 'pemohon'},
              { text: 'Diplomat', datafield: 'diplomat'}
              ],
              groups: ['diplomat']
            });
});
</script>
