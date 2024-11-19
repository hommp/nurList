<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            /* Light background color */
            font-family: 'Poppins', sans-serif;
        }

        .signin-container {
            margin-top: 100px;
        }

        .signin-card {
            padding: 30px;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center signin-container">
            <div class="col-md-4">
                <div class="signin-card">
                    <h3 class="text-center">Signin</h3>
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{session('success') }}
                    </div>
                    @endif
                    @if($errors->any())
                    @foreach ($errors->all() as $err)
                    <div class="alert alert-danger">
                        {{ $err }}
                    </div>
                    @endforeach
                    @endif
                    <form method="POST" action="{{ route('storeSignin') }}">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" required>
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                        @csrf
                        <button class="btn btn-primary w-100">Submit</button>
                        <p class="my-2">dont have accound ? <a href="{{ route('signup') }}">signup</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>