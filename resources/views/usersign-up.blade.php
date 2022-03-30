<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Say N2H</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a class="navbar-brand" href="{{route('home')}}">Zero Hunger</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ route('products') }}" class="nav-link">Products</a>
                </li>
                @auth
                <li class="nav-item">
                    <a href="" class="nav-link">Your Name</a>
                </li>
                @endauth
                @guest
                <li class="nav-item">
                    <a href="{{ route('login' ) }}" class="nav-link">Sign In</a>
                </li>
                @endguest
            </ul>
        </div>

    </nav>

    <div class="container sign-up d-flex justify-content-center">
        <div class="card">
            <div class="card-body p-5">
                <div class="card-title h4 text-center">Sign Up</div>
                <form action="{{ route('userregister') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="full-name" class="form-label">Full name</label>
                        <input type="text" class="form-control" id="full-name" placeholder="Full Name" name="name" value="{{ old('name') }}">
                        @error('name')
                        <div class="">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Username" name="username" value="{{ old('username') }}">
                        @error('username')
                        <div class="">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
                        @error('email')
                <div class="">
                    {{$message}}
                </div>
                @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                        @error('password')
                <div class="">
                    {{$message}}
                </div>
                @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password_confirmation">
                        @error('password_confirmation')
                    <div class="">
                        {{$message}}
                    </div>
                    @enderror
                    </div>
                    <button class="btn btn-secondary" type="submit">Register</button>
                </form>
            </div>
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="index.js"></script>
</body>

</html>