<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Solution Challage: Zero Hunger</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css">
</head>

<body class="bg-gray-100">
    <nav class="p-6 bg-white flex justify-between">
        <ul class="flex items-center">
            <li>
                <a href="{{route('home')}}" class="p-3">Say N2H</a>
            </li>
            <li>
                <a href="{{ route('products') }}" class="p-3">Products</a>
            </li>
        </ul>

        <ul class="flex items-center">
            @auth
            <li>
                <a href="" class="p-3">Your Name</a>
            </li>
            <li>
                <a href="" class="p-3">Logout</a>
            </li>
            @endauth

            @guest
            <li>
                <a href="{{ route('login') }}" class="p-3">Login</a>
            </li>
            <li>
                <a href="{{ route('preregister') }}" class="p-3">Register</a>
            </li>
            @endguest

        </ul>
    </nav>


    Register as a Company

    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded=lg">
            <form action="{{ route('companyregister') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="companyname">Company Name</label>
                    <input type="text" class="form-control" name="companyname" id="companyname" placeholder="Company Name" value="{{ old('companyname') }}">

                    @error('companyname')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="name">Full name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" value="{{ old('name') }}">

                    @error('name')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="producttype">Product Type</label>
                    <input type="text" class="form-control" name="producttype" id="producttype" placeholder="Enter Company's Product Type" value="{{ old('producttype') }}">

                    @error('producttype')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email" value="{{ old('email') }}">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>

                    @error('email')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Choose a Password">

                    @error('password')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Password again</label>
                    <input type="password" class="form-control" id="password_confirmation" placeholder="Repeat your password" name="password_confirmation">

                    @error('password_confirmation')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>

</body>

</html>