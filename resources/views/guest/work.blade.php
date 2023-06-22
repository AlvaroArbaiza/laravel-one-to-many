@extends('layouts.project')

@section('title')
    Laravel | Work
@endsection

@section('content')

<div class="container mt-5">

    {{-- work --}}
    <div class="row row-gap-5">

        <h2 class="text-uppercase text-center text-white mb-5 fw-bold">work</h2>

        @foreach ($projects as $element)      
            <div class="col-6">

                {{-- card --}}
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">

                    {{-- card-body --}}
                    <div class="card-body">

                        {{-- title --}}
                        <a href="{{ route('projects.show', $element['id'] ) }}">
                            <h5 class="card-title">
                                {{ $element['title'] }}
                            </h5>
                        </a>

                        {{-- cliente --}}
                        <h6 class="card-subtitle mb-2">
                            <span class="text-body-secondary">Cliente: </span>
                            {{ $element['customer'] }}
                        </h6>

                        {{-- tipologia di cliente --}}
                        <h6 class="card-subtitle mb-2">
                            <span class="text-body-secondary">Settore: </span>
                            {{ $element['type_customer'] }}
                        </h6>

                        {{-- prezzo del progetto --}}
                        <h6 class="card-subtitle mb-2">
                            <span class="text-body-secondary">Costo: </span>
                            <span>€</span>
                            {{ $element['price'] }}
                        </h6>

                        {{-- data creazione --}}
                        <h6 class="card-subtitle mb-2">
                            <span class="text-body-secondary">Data: </span>
                            {{ $element['created'] }}
                        </h6>

                        <p class="card-text">{{ $element['description'] }}</p>                        
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection