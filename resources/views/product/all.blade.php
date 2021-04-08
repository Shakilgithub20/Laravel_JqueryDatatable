<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Product</title>
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
            integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h2>All Products</h2>
    <table class="table table-bordered" id="xyz">
    <thead>
    <th>ID</th>
    <th>Product</th>
    <th>price</th>
    <th>Category</th>
    <th>Edit</th>
    <th>Delete</th>
    </thead>
    <tbody>
            @if($products)
            @foreach($products as $p)
    <tr>
    <td> {{ $p->id }}</td>
    <td> {{ $p->product}}</td>
    <td> {{ $p->price}}</td>
    <td> {{ $p->category}}</td>
    <td> <button type="button" class="btn btn-primary">Edit</button></td>
    <td> <button type="button" class="btn btn-danger">Delete</button></td>
    </tr>
             @endforeach
             @endif
    </tbody>
    </table>
    </div>
    
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.colVis.min.js"></script>
  

    <script>
    $(document).ready( function ()
     {
    $('#xyz').DataTable({
        
        
        dom: 'lBfrtip',
        
        buttons: [
           
            {
                extend: 'copyHtml5',
                exportOptions: {
                    modifier: {
                        page: 'current'
                    },
                    columns: [ 0, 1, 2, 3 ]
                }
            },
            {
                extend: 'excelHtml5',
                exportOptions: {
                    modifier: {
                        page: 'current'
                    },
                    columns: [ 0, 1, 2, 3 ]
                }
            },
            
            {
                extend: 'pdfHtml5',
                exportOptions: {
                    modifier: {
                        page: 'current'
                    },
                    columns: [ 0, 1, 2, 3 ]
                    

                }
            },
            
           
            'colvis'
        ],
        
              
           // pagingType : "full_numbers",
          
        columnDefs: [
    {bSortable: false, targets: [4,5]} 
  ],
  
  
});

} );
    </script>

    
    
</body>
</html>