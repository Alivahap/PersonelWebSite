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
                    <img class="card-img-top" width="300" height="200" src="{{ asset($service->service_path) }}" alt="Web Uygulama Geliştirme">
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