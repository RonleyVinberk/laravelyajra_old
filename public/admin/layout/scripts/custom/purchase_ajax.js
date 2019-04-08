var template = Handlebars.compile($("#pembelian_detail").html());

var table = $('#pembelian_table').DataTable({
    processing: true,
    serverSide: true,
    responsive: true,
    ajax: {
        "url": "http://127.0.0.1:8000/transactions/purchases"
    },
    columns: [
        {
            "data": null,
            "className": 'details-control',
            "orderable": false,
            "searchable": false,
            "defaultContent": ''
        },
        {data: 'barang_name', name: 'barangs.barang_name'},
        {data: 'keterangan_permintaan', name: 'keterangan_permintaan'},
    ]
});

$('#pembelian_table tbody').on('click', 'td.details-control', function () {
    var tr = $(this).closest('tr');
    var row = table.row( tr );

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