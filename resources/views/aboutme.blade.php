<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hakkımda</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="{{ asset('css/profile-styles.css') }}" rel="stylesheet">
    
</head>
<body>
@include('partials.header')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="text-center">
                <img src="{{ asset('img/alivahapaydin.jpg') }}" alt="Your Name" class="profile-img-circle mb-4">
                <h1 class="mb-3">Kimim</h1>
                <p class="lead">Merhaba, ben Ali Vahap Aydın. Selçuk Üniversitesi Bilgisayar Mühendisliği mezunum. Eğitim hayatım boyunca oldukça farklı projelerde çalıştım. Yapay zeka, FBGA, WEB geliştirme, Mobil geliştirme, Robotik kodlama vs.. Her yazılım teknolojisinden bir şeyler kaptım. Bu da benim bakış açımı oldukça geliştirdi. Şuan 2 yılı aşkın süredir Web Geliştirme üzerinde çalışıyorum. </p>
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
