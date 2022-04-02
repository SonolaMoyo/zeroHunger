<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('home') }}">Zero Hunger</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                @auth
                <li class="nav-item">
                    <a href="{{route('products')}}" class="nav-link">Products</a>
                </li>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="post" class="nav-link">
                        @csrf
                    <button type="submit" >Logout</button>
                    </form>
                </li>
                @endauth
                @guest
                <li class="nav-item">
                    <a href="{{route('preregister')}}" class="nav-link">Register</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('login')}}" class="nav-link">Sign In</a>
                </li>
                @endguest
            </ul>
        </div>
    </nav>

    <div id= "products" class="container mt-5">
        <div class="product-container row row-cols-1 row-cols-md-1 g-2">
            <div class="col">
                <div class="card h-100" style="width: 15rem;">
                    <img src="img/Gino-Tomato-Paste-800g-Tin.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Tomato Paste</h5>
                        <p class="card-text">Quality Gino Tomato Paste</p>
                        <p class="card-text">Price: N400</p>
                        <button type="button" class="btn btn-outline-secondary">Buy Now</button>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Expires in 6 months</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" style="width: 15rem;">
                    <img src="img/Gino-Tomato-Paste-800g-Tin.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Tomato Paste</h5>
                        <p class="card-text">Quality Gino Tomato Paste</p>
                        <p class="card-text">Price: N400</p>
                        <button type="button" class="btn btn-outline-secondary">Buy Now</button>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Expires in 6 months</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" style="width: 15rem;">
                    <img src="{{ asset('img/Gino-Tomato-Paste-800g-Tin.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Tomato Paste</h5>
                        <p class="card-text">Quality Gino Tomato Paste</p>
                        <p class="card-text">Price: N400</p>
                        <button type="button" class="btn btn-outline-secondary">Buy Now</button>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Expires in 6 months</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" style="width: 15rem;">
                    <img src="img/Gino-Tomato-Paste-800g-Tin.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Tomato Paste</h5>
                        <p class="card-text">Quality Gino Tomato Paste</p>
                        <p class="card-text">Price: N400</p>
                        <button type="button" class="btn btn-outline-secondary">Buy Now</button>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Expires in 6 months</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" style="width: 15rem;">
                    <img src="img/Gino-Tomato-Paste-800g-Tin.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Tomato Paste</h5>
                        <p class="card-text">Quality Gino Tomato Paste</p>
                        <p class="card-text">Price: N400</p>
                        <button type="button" class="btn btn-outline-secondary">Buy Now</button>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Expires in 6 months</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" style="width: 15rem;">
                    <img src="img/Gino-Tomato-Paste-800g-Tin.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Tomato Paste</h5>
                        <p class="card-text">Quality Gino Tomato Paste</p>
                        <p class="card-text">Price: N400</p>
                        <button type="button" class="btn btn-outline-secondary">Buy Now</button>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Expires in 6 months</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" style="width: 15rem;">
                    <img src="img/Gino-Tomato-Paste-800g-Tin.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Tomato Paste</h5>
                        <p class="card-text">Quality Gino Tomato Paste</p>
                        <p class="card-text">Price: N400</p>
                        <button type="button" class="btn btn-outline-secondary">Buy Now</button>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Expires in 6 months</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" style="width: 15rem;">
                    <img src="img/Gino-Tomato-Paste-800g-Tin.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Tomato Paste</h5>
                        <p class="card-text">Quality Gino Tomato Paste</p>
                        <p class="card-text">Price: N400</p>
                        <button type="button" class="btn btn-outline-secondary">Buy Now</button>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Expires in 6 months</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" style="width: 15rem;">
                    <img src="img/Gino-Tomato-Paste-800g-Tin.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Tomato Paste</h5>
                        <p class="card-text">Quality Gino Tomato Paste</p>
                        <p class="card-text">Price: N400</p>
                        <button type="button" class="btn btn-outline-secondary">Buy Now</button>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Expires in 6 months</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" style="width: 15rem;">
                    <img src="img/Gino-Tomato-Paste-800g-Tin.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Tomato Paste</h5>
                        <p class="card-text">Quality Gino Tomato Paste</p>
                        <p class="card-text">Price: N400</p>
                        <button type="button" class="btn btn-outline-secondary">Buy Now</button>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Expires in 6 months</small>
                    </div>
                </div>
            </div>
        </div>
        
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        <script src="index.js"></script>
</body>

</html>