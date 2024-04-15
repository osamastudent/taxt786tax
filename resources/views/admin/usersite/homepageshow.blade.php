<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- jquery cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
<link href="https://cdn.datatables.net/v/dt/dt-1.13.8/datatables.min.css" rel="stylesheet">
 

    <title>Home Page</title>

</head>

<body>
    @extends('admin.masterfile')
    @section('content')
    <div style="width: 100%; overflow-x: auto;">
    <table id="example" class="display " style="width:100%">
        <thead>
            <tr>
            
            <th>Index</th>
            <th>Heading One</th>
            <th>Actions</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($data as $values)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$values->sec_one_h_one}}</td>
                <!-- <td><a href="{{ 'home-page-update/' . $values->id }}">Update</a></td> -->
                <td><a href="{{ route('homePageUpdate', ['id' => $values->id]) }}"><i class="fas fs-6 fa-fw fa-edit"></i>Update</a> &nbsp;/
                &nbsp; <a href="{{ route('homePageDeleteRecord', ['id' => $values->id]) }}"><i class="fas fa-fw fa-trash"></i>Delete</a></td>

                

            </tr>
            @endforeach

        </tfoot>
    </table>
    @if(session('deleteSuccess'))
<div class="alert">{{session('deleteSuccess')}}</div>
    @endif
    </div>
<script>

$(document).ready(function(){
    new DataTable('#example');
});
</script>

<script src="https://cdn.datatables.net/v/dt/dt-1.13.8/datatables.min.js"></script>

@endsection
</body>

</html>






