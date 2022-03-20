let table;
/* || Integrated table functionality designed by DataTables */
$(document).ready(function (){
  table = $('#table_id').DataTable({
     responsive: true,
    "table-layout": 'fixed',
    "bAutoWidth": false,
    "paging"   : false,
    "info"     : false,
    "searching" : false
    });
});

/* Adds the searching function by targeting the implemented search bar. Searches by the rows inside the table body */
$(document).ready(function (){
    $("#datatables-search").on("keyup", function (){
        let value = $(this).val().toLowerCase();
        $("#table_id tbody tr").filter(function (){
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});