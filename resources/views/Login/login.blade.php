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
            <div class="col-sm-4">
                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if(session()->has('LoginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('LoginError') }}
                        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <h3 class="card-title">Login</h3>
                        <div class="w-50 p-2">
                            <form action="/doLogin" method="post">
                                @csrf
                                <div class="row clearfix mb-2">
                                    <div class="col-md-2">Email</div>

                                    <div class="col-md-10">
                                        <input class="form-control @error('email') is-invalid @enderror" type="text" name="email" placeholder="Email" value="{{old('email')}}">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <!-- @foreach($errors->get('email') as $msg)
                                    <p class="text-danger">{{ $msg }}</p>
                                @endforeach -->
                                    </div>
                                </div>
                                <div class="row clearfix mb-2">
                                    <div class="col-md-2">Password</div>

                                    <div class="col-md-10">
                                        <input class="form-control" type="password" name="nama" placeholder="Password" value="">
                                        <!-- @foreach($errors->get('password') as $msg)
                                    <p class="text-danger">{{ $msg }}</p>
                                @endforeach -->
                                    </div>
                                </div>
                                <div class="d-flex flex-row justify-content-around align-items-center">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                    <a href="/register" class="btn btn-info">Register</a>
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