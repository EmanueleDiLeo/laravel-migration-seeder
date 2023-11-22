<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Styles -->
    @vite('resources/js/app.js')
</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-4"> Treni </h1>
        <div class="row">
            @foreach ($trains as $train)
                <div class="col-4 h-100 mb-4">
                    <div class="card"">
                        {{-- <img src="..." class="card-img-top" alt="..."> --}}
                        <div class="card-body">
                        <h5 class="card-title">Nome agenzia: {{$train->agency}}</h5>
                        <p class="card-text">Data partenza: {{$train->departure_date}} <br> Data arrivo: {{$train->arrival_date}}</p>
                        <p class="card-text">stazione di partenza: {{$train->departure_station}} <br> stazione di arrivo: {{$train->arrival_station}}</p>
                        <p class="card-text">codice treno: {{$train->train_code}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</body>
</html>
