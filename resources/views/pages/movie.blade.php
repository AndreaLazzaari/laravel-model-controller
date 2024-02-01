@extends('layout.app')


@section('main-content')

<h1>
    Lista Film:
</h1>
<section>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="">
                    @foreach ($movie as $movie)
                        
                        <div class="card me-3" style="width: 18rem;" >
                            <div class="card-body">
                            <h4 class="card-title">{{$movie->title}}</h4>
                            </div>
                            <ul class="list-group list-group-flush">
                            <li class="list-group-item">Lingua originale: {{ $movie->nationality }}</li>
                            <li class="list-group-item">Data di uscita: {{ $movie->date }}</li>
                            <li class="list-group-item">Voto della critica: {{ $movie->vote }}</li>
                            </ul>
                        </div>
            
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
    
@endsection