<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
            {{-- bootstrap --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <title>Crud</title>
</head>
<body>   
            
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
                                @foreach ($data as $data)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->email}}</td>
                                    <td>{{$data->phone}}</td>
                                    <td>{{$data->address}}</td>
                                    <td>
                                        <a href="{{url('edit_student/'.$data->id)}}" style="color: blue">Edit</a>
                                        |
                                        <a href="{{url('delete_student/'.$data->id)}}" style="color: red">Delete</a>
                                    </td>
                                </tr>
                                    
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
</body>
</html>