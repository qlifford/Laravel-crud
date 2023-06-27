<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
            {{-- bootstrap --}}

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        {{-- sweet alert --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <title>Crud</title>
</head>
<body>   
    @include('sweetalert::alert')

            
<div class="container" style="margin-top: 20px;">
    <div class="row">
        <div class="col-md-12">
            <h1>Student list</h1>
            <div class="">
                <a href="{{url('add_student')}}" style="float: right;" class="btn btn-warning">Add Student</a>
            </div>

            
            @if (Session::has('message'))                  
            <div class="alert alert-danger" role="alert">
                {{ Session::get('message') }}
            </div>
            @endif

            @if (count($data) > 0)               
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($data as $item)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->address}}</td>
                        <td>
                            <a href="{{url('edit_student/'.$item->id)}}" style="color: blue">Edit</a>
                            |
                            <a onclick="confirmation(event)" href="{{url('delete_student/'.$item->id)}}" style="color: red">Delete</a>
                        </td>
                    </tr>
                        
                    @endforeach
                </tbody>
            </table>
            @else
                <div style="padding-top: 100px"><h2 class="text-center" style="color: red;">No records to show !</h2></div>
            @endif
        </div>
    </div>
</div>
<script>
    function confirmation(ev){
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');
        console.log(urlToRedirect);
        swal({
            title: "Are you sure you want to remove this item?",
            text: "You will not be able to revert this action",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willCancel) => {
            if (willCancel) {

                window.location.href = urlToRedirect;
            }
        });
    }
</script>

</body>
</html>