<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portföy</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

@include('partials.header')

<section class="portfolio">
    <div class="container">
        <h2 class="text-center mb-5">Portföy</h2>
        <div id="portfolioCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#portfolioCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#portfolioCarousel" data-slide-to="1"></li>
                <!-- Diğer portföy öğeleri için slide indicator'leri buraya eklenebilir -->
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('img/portfolyo/gencticaret/GencTicaret.png')}}" class="d-block w-100" alt="Proje 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="background-color:DodgerBlue;">Genc Ticaret Projem</h5>
                        <p style="background-color:DodgerBlue;">N11, HepsiBurada Tarzı geliştirmiş olduğum</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/portfolyo/gencticaret/GencTicaret2.png')}}" class="d-block w-100" alt="Proje 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="background-color:DodgerBlue;">Genç Ticaret Admin Paneli </h5>
                        <p style="background-color:DodgerBlue; ">Admin Paneli</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/portfolyo/dernek/anasayfa1.png')}}" class="d-block w-100" alt="Proje 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="background-color:DodgerBlue;">Dernek Sitesi </h5>
                        <p style="background-color:DodgerBlue; ">1. Görsel</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/portfolyo/dernek/anasayfa2.png')}}" class="d-block w-100" alt="Proje 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="background-color:DodgerBlue;">Dernek Sitesi </h5>
                        <p style="background-color:DodgerBlue; ">2. Görsel</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/portfolyo/personelwebsite/1.png')}}" class="d-block w-100" alt="Proje 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="background-color:DodgerBlue;">Kişisel Web Sitesi </h5>
                        <p style="background-color:DodgerBlue; ">Eski Kişisel Web Sitem</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/portfolyo/personelwebsite/2.png')}}" class="d-block w-100" alt="Proje 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="background-color:DodgerBlue;">Kişisel Web Sitesi </h5>
                        <p style="background-color:DodgerBlue; ">Eski Kişisel Web Sitem Çözümlerim Bölümü</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/portfolyo/projearkadasim/1.png')}}" class="d-block w-100" alt="Proje 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="background-color:DodgerBlue;">Proje Arkadaşım </h5>
                        <p style="background-color:DodgerBlue; "></p>
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


@include('partials.footer')
<script>
    $(document).ready(function(){
        $('.carousel-item img').on('click', function(){
            var src = $(this).attr('src');
            $('#modalImage').attr('src', src);
            $('#projectModal').modal('show');
        });
    });
</script>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
