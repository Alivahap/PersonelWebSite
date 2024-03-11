<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ana Sayfa</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

@include('partials.header')

<section id="search" class="bg-light py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form class="form-inline">
                    <div class="input-group w-100">
                        <input type="text" class="form-control border-primary rounded-pill py-3 px-4" placeholder="Ara" aria-label="Search" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary rounded-pill px-4" type="button" id="button-addon2">Ara</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<section id="videos" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Videolar</h2>
        
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/400x225" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Video Başlığı 1</h5>
                        <p class="card-text">Video açıklaması veya kısa bilgi.</p>
                        <a href="#" class="btn btn-primary">Videoyu İzle</a>
                    </div>
                </div>
            </div>
            <!-- Diğer videoların kartları -->
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/400x225" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Video Başlığı 2</h5>
                        <p class="card-text">Video açıklaması veya kısa bilgi.</p>
                        <a href="#" class="btn btn-primary">Videoyu İzle</a>
                    </div>
                </div>
            </div>
            <!-- Diğer videoların kartları -->
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/400x225" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Video Başlığı 2</h5>
                        <p class="card-text">Video açıklaması veya kısa bilgi.</p>
                        <a href="#" class="btn btn-primary">Videoyu İzle</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/400x225" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Video Başlığı 1</h5>
                        <p class="card-text">Video açıklaması veya kısa bilgi.</p>
                        <a href="#" class="btn btn-primary">Videoyu İzle</a>
                    </div>
                </div>
            </div>
            <!-- Diğer videoların kartları -->
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/400x225" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Video Başlığı 2</h5>
                        <p class="card-text">Video açıklaması veya kısa bilgi.</p>
                        <a href="#" class="btn btn-primary">Videoyu İzle</a>
                    </div>
                </div>
            </div>
            <!-- Diğer videoların kartları -->
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/400x225" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Video Başlığı 2</h5>
                        <p class="card-text">Video açıklaması veya kısa bilgi.</p>
                        <a href="#" class="btn btn-primary">Videoyu İzle</a>
                    </div>
                </div>
            </div>
        </div>




    </div>
</section>



<section id="services" class="bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-4">Uygulama Geliştirme Hizmetlerimiz</h2>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="https://via.placeholder.com/300" alt="Web Uygulama Geliştirme">
                    <div class="card-body">
                        <h3 class="card-title">Web Uygulama Geliştirme</h3>
                        <p class="card-text">Modern ve kullanıcı dostu web uygulamaları geliştiriyoruz.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="https://via.placeholder.com/300" alt="Mobil Uygulama Geliştirme">
                    <div class="card-body">
                        <h3 class="card-title">Mobil Uygulama Geliştirme</h3>
                        <p class="card-text">Android ve iOS platformları için mobil uygulamalar geliştiriyoruz.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="https://via.placeholder.com/300" alt="E-ticaret Uygulama Geliştirme">
                    <div class="card-body">
                        <h3 class="card-title">E-ticaret Uygulama Geliştirme</h3>
                        <p class="card-text">Online satış için özel e-ticaret platformları geliştiriyoruz.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="overview" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <h2 class="mb-4">Genel Bakış</h2>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="text-center">
                            <i class="fas fa-cogs fa-3x mb-3 text-primary"></i>
                            <h3>Kapsamlı Çözümler</h3>
                            <p>Şirketinizin tüm ihtiyaçlarına yönelik kapsamlı ve özelleştirilmiş çözümler sunuyoruz.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="text-center">
                            <i class="fas fa-code fa-3x mb-3 text-primary"></i>
                            <h3>Güncel Yazılım Teknolojileri</h3>
                            <p>En son teknolojileri kullanarak yenilikçi ve güncel çözümler sunuyoruz.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="text-center">
                            <i class="fas fa-handshake fa-3x mb-3 text-primary"></i>
                            <h3>Proaktif Yaklaşım</h3>
                            <p>Sorunları önceden belirleyerek proaktif bir yaklaşımla çözümler sunuyoruz.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="text-center">
                            <i class="fas fa-headset fa-3x mb-3 text-primary"></i>
                            <h3>Profesyonel Destek</h3>
                            <p>Profesyonel ve etkin destek ekibimizle 7/24 hizmetinizdeyiz.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://via.placeholder.com/600x400" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/600x400" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/600x400" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>






@include('partials.footer')

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
