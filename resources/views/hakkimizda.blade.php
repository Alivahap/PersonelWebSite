<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hakkımızda</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
@include('partials.header')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="text-center">
                <img src="{{ asset('img/API.jpeg') }}" alt="Your Name" class="profile-img mb-4">
                <h1 class="mb-3">Adınız Soyadınız</h1>
                <p class="lead">Buraya kendinizle ilgili kısa bir biyografi yazabilirsiniz.</p>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="https://twitter.com/your_username" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.linkedin.com/in/your_username" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                    <li class="list-inline-item"><a href="https://github.com/your_username" target="_blank"><i class="fab fa-github"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>








@include('partials.footer')
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
