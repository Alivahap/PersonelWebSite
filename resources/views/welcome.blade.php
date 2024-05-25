<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ana Sayfa</title>
    
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

@include('partials.header')
<section class="portfolio">
    <div class="container">
        
        <div id="portfolioCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#portfolioCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#portfolioCarousel" data-slide-to="1"></li>
                <!-- Diğer portföy öğeleri için slide indicator'leri buraya eklenebilir -->
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('img/slider/1.jpg')}}" width="600" height="400" class="d-block w-100" alt="Proje 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="background-color:DodgerBlue;">PHP Dersleri veriyorum</h5>
                        <p style="background-color:DodgerBlue;">Ders içeriği PHP, HTML, CSS, Bootstrapt</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/slider/2.jpg')}}" class="d-block w-100" width="600" height="400" alt="Proje 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="background-color:DodgerBlue;">Web sitesi geliştiriyorum </h5>
                        <p style="background-color:DodgerBlue; ">Dernekler, Kişisel Siteler ve E-Ticaret Siteleri gibi web siteleri kodluyorum.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/slider/3.jpg')}}" class="d-block w-100" width="600" height="400" alt="Proje 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="background-color:DodgerBlue;">API Oluşturuyorum. </h5>
                        <p style="background-color:DodgerBlue; ">Yazılımlarınızın performansını arttırma, yazılımızı genişletmek için size özel API'lar kodlayabilirim.</p>
                    </div>
                </div>
                <!-- Diğer portföy öğeleri için carousel item'leri buraya eklenebilir -->
            </div>
            <a class="carousel-control-prev" href="#portfolioCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Önceki</span>
            </a>
            <a class="carousel-control-next" href="#portfolioCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">İleri</span>
            </a>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="projectModal" tabindex="-1" role="dialog" aria-labelledby="projectModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="projectModalLabel">Proje Detayı</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img id="modalImage" src="" class="img-fluid" alt="Proje Detayı">
            </div>
        </div>
    </div>
</div>

<section id="videos" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Videolarım</h2>
        
        <div class="row">
            @foreach($videos as $index => $video)
                @if($index % 3 == 0)
        </div>
        <div class="row">
                @endif
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <div class="card-body">   
                        <h5 class="card-title">{{ $video->yotube_title  }}</h5>
                        <div class="embed-responsive embed-responsive-16by9">    
                            <iframe class="embed-responsive-item" src="{{$video->yotube_link}}" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


<section id="services" class="bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-4">Uygulama Geliştirme Hizmetlerimiz</h2>
        <div class="row">
        @foreach($services as $index => $service)
                @if($index % 3 == 0)
                </div>
           <div class="row">
                @endif

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top profile-img" width="300" height="200" src="{{ asset($service->service_path) }}" alt="Web Uygulama Geliştirme">
                    <div class="card-body">
                        <h3 class="card-title">{{$service->service_title}}</h3>
                        <p class="card-text">{{$service->service_description}}</p>
                    </div>
                </div>
            </div>
         @endforeach
        </div>
    </div>
</section>




@include('partials.footer')

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
