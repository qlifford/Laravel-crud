<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

            {{-- bootstrap --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <title>Crud</title>
</head>
<body>   
        
        <div class="container" style="margin-top: 20px;">
            <div class="row">
                <div class="col-md-12">
                    <h1>Update {{$data->name}}'s Record</h1>

                    @if (Session::has('message'))                  
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('message') }}
                        </div>
                    @endif
                    <div class="">
                        <form action="{{url('update_student')}}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$data->id}}">
                            <div class="md-3">
                                <label class="form-label">Name : </label>
                                <input name="name" type="text" value="{{$data->name}}" class="form-control">
                                @error('name')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>                                    
                                @enderror
                            </div>
                            <div class="md-3">
                                <label class="form-label">Email : </label>
                                <input name="email" value="{{$data->email}}}" type="text" class="form-control">
                                @error('email')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>                                    
                                @enderror
                            </div>
                            <div class="md-3">
                                <label class="form-label">Phone No. : </label>
                                <input name="phone" value="{{$data->phone}}" type="text" class="form-control">
                                @error('phone')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>                                    
                                @enderror
                            </div>
                            <div class="md-3">
                                <label class="form-label">Address : </label>
                                <textarea name="address" value="" type="text" class="form-control">{{$data->address}}</textarea>
                                @error('address')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>                                    
                                @enderror
                            </div>
                            <br>

                            <button type="submit" class="btn btn-primary btn-sm">Update</button>
                    
                            <a href="{{url('students')}}" class="btn btn-danger btn-sm">back</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>