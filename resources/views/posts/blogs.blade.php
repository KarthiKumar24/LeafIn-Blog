<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <title>LeafIn-Home</title>
    <link rel="icon" type="image/x-icon" href="/images/leave-in-Logo.ico">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('css/responsive.css' )}}" />
    <link rel="stylesheet" href="{{asset('css/headerfooter.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
    <nav class="nav-bar">
        <input type="checkbox" id="check">
        <label for="check" id="checkbtn"><i class="fa fa-bars"></i></label>
        <label class="logo">
            <img src="./Images/leave in Logo.png" alt="">LeafIn
        </label>
        <ul class="leaf-nav">
            <li><a href="{{ route('posts.index') }}">Home</a></li>
            <li><a class="nav-active" href="{{ route('blog.index') }}">Blogs</a></li>
            <li><a href="contact.html">Contact</a></li>
            <button class="nav-btn-container"><a class="btn-log" href="login.html">Login</a></button>
        </ul>

        <button class="nav-btn-container"><a class="btn-log" href="{{ route('posts.create') }}">Create BLog</a></button>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container mt-5">
        <div class="row">
            @foreach ($posts as $post)
            <div class="col-sm col-lg-12 g-5">
                <div class="card w-50 d-flex">
                    <div class="card-header">
                        <h5 class="card-title">{{ $post->title }}</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ $post->body }}</p>
                    </div>
                    <div class="card-footer w-100">
                        <div class="row w-50 p-0 m-0">
                            <div class="col-sm">
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-success btn-sm">Edit</a>
                            </div>
                            <div class="col-sm">
                                <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>