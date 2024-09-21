<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Posts</title>
    <!-- <link rel="stylesheet" href="{{asset('css/style.css')}}" /> -->

</head>

<div class="container h-100 mt-5">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
            <h3>Add a Post</h3>
            <form action="{{ route('posts.store') }}" method="post">
                @csrf
                <!-- <input type="file" name="imagePath">
                <button type="submit">Upload</button> -->
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea class="form-control" id="body" name="body" rows="3" required></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-success">Create Post</button>
            </form>
        </div>
    </div>
</div>

</html>
<!-- Blogs Start -->
<!-- <section class="">
    <div class="container py-4">
        <div class="text-center mx-auto mb-5 " style="max-width: 600px;">
            <p class="d-inline-block clr-secondary text-primary  py-1 px-4">Blogs</p>
            <h1 class="text-uppercase">Check out blogs</h1>
        </div>
        <article class="postcard dark green">
            <a class="postcard__img_link" href="#">
                <img class="postcard__img" src="./img/podcast.jpg" alt="Image Title" />
            </a>
            <div class="postcard__text">
                <h1 class="postcard__title green"><a href="#"> Beard Grooming 101: Tips for a Sharp, Well-Kept
                        Beard</a></h1>
                <div class="postcard__subtitle small">
                    <time datetime="2024-09-15 12:00:00">
                        <i class="fas fa-calendar-alt mr-2"></i>Sun, Aug 18th 2024
                    </time>
                </div>
                <div class="postcard__preview-txt">A well-groomed beard is a powerful statement of style and
                    masculinity. This blog provides essential tips for beard care, from selecting the right beard
                    shape to using oils and balms for maintenance. We also highlight the importance of regular trims
                    to keep your beard looking its best. Our barbers offer personalized beard grooming services,
                    ensuring each client leaves with a beard that complements their facial structure and personal
                    style.

                </div>
                <ul class="postcard__tagbox">
                    <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
                    <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                    <li class="tag__item play green">
                        <a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
                    </li>
                </ul>
            </div>
        </article>
    </div>
</section> -->