<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            /* Light background color */
            font-family: 'Poppins', sans-serif;
        }

        .signup-container {
            margin-top: 100px;
        }

        .signup-card {
            padding: 30px;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center signup-container">
            <div class="col-md-4">
                <div class="signup-card">
                    <h3 class="text-center">Signup</h3>
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
                    <form method="POST" action="{{ route('storeSignup') }}">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" required>
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                        @csrf
                        <button class="btn btn-primary w-100">Submit</button>
                        <p class="my-2">have accound ? <a href="{{ route('signin') }}">Signin</a><span class="mx-2">Or</span><a class="text-danger" href=" {{ route('home') }}">Cancel</a></p>
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