@extends('layouts.project')

@section('title')
    Laravel | projects
@endsection

@section('content')
    <div class="container my-5">

        @if( Session::has('success') ) 
            <div class="alert alert-success">
                {!! Session::get('success') !!} 
            </div>
        @endif

        {{-- projects - projects --}}
        <div class="row row-gap-5">

            @foreach ($projects as $element)        
            
           
                <div class="col-6">

                    {{-- card --}}
                    <div class="card">
                        
                        <img src="{{ asset('storage/' . $element->image) }}" class="card-img-top" alt="...">

                        {{-- card-body --}}
                        <div class="card-body">

                            {{-- title --}}
                            <a href="{{ route('projects.show', $element ) }}">
                                <h5 class="card-title">
                                    {{ $element['title'] }}
                                </h5>
                            </a>

                            {{-- slug --}}
                            <h6 class="card-subtitle mb-2">
                                <span class="text-body-secondary">Slug Titolo: </span>
                                {{ $element['slug'] }}
                            </h6>

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

                            {{-- edit --}}
                            {{-- passo l'elemento intero come parametro alla funzione di edit --}}
                            <a href="{{ route('projects.edit', $element ) }}" class="btn btn-info">Modifica</a>
        
                            {{-- delete --}}
                            <form action="{{ route('projects.destroy', $element['id']) }}" method="POST">
        
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="delete btn btn-danger"
                                    onclick="return confirm('Sicuro di volere eliminare questo elemento?')"    
                                >Cancella</button>
                            </form>
                            
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- add new project --}}
        <div class="row mt-5">
            <div class="d-flex justify-content-center">
                <a href="{{ route('projects.create') }}" class="text-decoration-none">
                    <span class="text-white fw-bold fs-1 border border-3 border-light text-uppercase p-2">aggiungi nuovo progetto</span>
                </a>
            </div>
        </div>
    </div>
    
@endsection