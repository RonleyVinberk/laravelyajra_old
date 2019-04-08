$(document).ready(function(){
    $('#item_cat_table').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        ajax: {
            "url": "http://127.0.0.1:8000/masterdata/itemcategories"
        },
        columns: [
            {data: 'category_barang_name', name: 'category_barang_name'},
        ]
    });
});