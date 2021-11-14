<!doctype html>
<html lang="en">

<head>
    <title>Perpustakaan</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href=" {{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="login-container container">
        <div class="row">
          <div class="col-xs-1-12">
            <div class="card">
              <div class="card-body d-flex flex-column justify-content-center align-items-center">
                <h3 class="card-title">Register</h3>
                <div class ="w-50 p-2">
                    <form method="POST" action="{{ url('daftar') }}">
                        @csrf
                        <div class="row clearfix mb-2">
                            <div class="col-md-2">Nama</div>
                            
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="nama" placeholder="Nama" value="{{old('nama')}}"> 
                                @foreach($errors->get('nama') as $msg)
                                    <p class="text-danger">{{ $msg }}</p>
                                @endforeach
                            </div>
                        </div>
                        <div class="row clearfix mb-2">
                            <div class="col-md-2">Email</div>
                            
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="email" placeholder="Email" value="{{old('email')}}"> 
                                @foreach($errors->get('email') as $msg)
                                    <p class="text-danger">{{ $msg }}</p>
                                @endforeach
                            </div>
                        </div>
                        <div class="row clearfix mb-2">
                            <div class="col-md-2">Password</div>
                            
                            <div class="col-md-10">
                                <input class="form-control" type="password" name="password" placeholder="Password" value=""> 
                                @foreach($errors->get('password') as $msg)
                                    <p class="text-danger">{{ $msg }}</p>
                                @endforeach
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-around align-items-center">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>