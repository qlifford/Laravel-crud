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
    @include('sweetalert::alert')

        
        <div class="container" style="margin-top: 20px;">
            <div class="row">
                <div class="col-md-12">
                    <h1>Add Student</h1>

                    @if (Session::has('message'))                  
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('message') }}
                        </div>
                    @endif
                    <div class="">
                        <form action="{{url('save_student')}}" method="POST">
                            @csrf
                            <div class="md-3">
                                <label class="form-label">Name : </label>
                                <input name="name" type="text" value="{{old('name')}}" class="form-control">
                                @error('name')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>                                    
                                @enderror
                            </div>
                            <div class="md-3">
                                <label class="form-label">Email : </label>
                                <input name="email" value="{{old('email')}}" type="text" class="form-control">
                                @error('email')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>                                    
                                @enderror
                            </div>
                            <div class="md-3">
                                <label class="form-label">Phone No. : </label>
                                <input name="phone" value="{{old('phone')}}" type="text" class="form-control">
                                @error('phone')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>                                    
                                @enderror
                            </div>
                            <div class="md-3">
                                <label class="form-label">Address : </label>
                                <textarea name="address" value="{{old('address')}}" type="text" class="form-control"></textarea>
                                @error('address')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>                                    
                                @enderror
                            </div>
                            <br>

                            <button type="submit" class="btn btn-primary btn-sm">Add</button>
                    
                            <a href="{{url('students')}}" class="btn btn-danger btn-sm">View student list</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>