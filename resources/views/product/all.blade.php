<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Products</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <style>
    .margin {
            margin-left: 25px;
            display: inline-block;
            }
    </style>
</head>
<body>
    <div class="container">
        <h1>All Products.</h1>
        <table class="table table-bordered" id="xyz">
            <thead>
                <th>ID</th>
                <th>Product</th>
                <th>Price</th>
                <th>Category</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
                @if($products)
                    @foreach($products as $p)
                        <tr>
                            <td>{{ $p->id}}</td>
                            <td>{{ $p->product}}</td>
                            <td>{{ $p->price}}</td>
                            <td>{{ $p->category}}</td>
                            <td><button class="btn btn-success">Edit</button></td>
                            <td><button class="btn btn-danger">Delete</button></td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
    <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous">
     </script>
    <script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $("#xyz").DataTable({
                "columnDefs": [ {
                "targets": [4,5],
                "orderable": false
                }],

                dom: 'l<".margin" B>frtip',
                    buttons: [
                    {
                            extend: 'pdf',
                            exportOptions: {
                        columns: [ 0, 1, 3 ]}
                    },

                    {
                            extend: 'csv',
                            exportOptions: {
                        columns: [ 0, 1, 3 ]}
                    },

                    {
                            extend: 'excel',
                            exportOptions: {
                        columns: [ 0, 1, 3 ]}
                    },
                    {
                            extend: 'copy',
                            exportOptions: {
                        columns: [ 0, 1, 3 ]}
                    }
                ]
            });
        });
    </script>
</body>
</html>