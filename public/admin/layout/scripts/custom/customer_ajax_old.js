var template = Handlebars.compile($("#details-template").html());
    
var table = $('#customer_table').DataTable({
    processing: true,
    serverSide: true,
    responsive: true,
    ajax: {
        "url": "http://127.0.0.1:8000/masterdata/customers"
    },
    columns: [
        {
            "data": null,
            "className": 'details-control',
            "orderable": false,
            "searchable": false,
            "defaultContent": ''
        },
        {data: 'name', name: 'name'},
        {data: 'email', name: 'email'},
        {data: 'status', name: 'status'},
    ]
});

$('#customer_table tbody').on('click', 'td.details-control', function () {
    var tr = $(this).closest('tr');
    var row = table.row( tr );
    var tableId = 'posts-' + row.data().id;

    if ( row.child.isShown() ) {
        // This row is already open - close it
        row.child.hide();
        tr.removeClass('shown');
    }
    else {
        // Open this row
        row.child( template(row.data()) ).show();
        tr.addClass('shown');
    }
});

function initTable(tableId, data) {
    $('#' + tableId).DataTable({
        processing: true,
        serverSide: true,
        ajax: data.details_url,
        columns: [
            {data: 'nomor_tel', name: 'nomor_tel'},
            {data: 'alamat', name: 'alamat'}
        ]
    })
}