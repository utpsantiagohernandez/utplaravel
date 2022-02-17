@extends('layout')

@section('title','Contacto')

@section('content')

<div class="container">
    <div class="col-lg-6 mx-auto">
        <h1 class="mb-4">Contacto</h1>
        
        <form method="POST" action="{{ route('contact') }}">
           @csrf
           
            <div class="mb-3">
                <label for="nombre" class="form-label etiquetas">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}">
                {!! $errors->first('nombre', '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    :message<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>') !!}
            </div>
            
            <div class="mb-3">
                <label for="correo" class="form-label etiquetas">Correo electrónico</label>
                <input type="email" class="form-control" id="correo" name="correo" value="{{ old('correo') }}">
                {!! $errors->first('correo', '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    :message<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>') !!}
            </div>
            
            <div class="mb-3">
                <label for="asunto" class="form-label etiquetas">Asunto</label>
                <input type="text" class="form-control" id="asunto" name="asunto" value="{{ old('asunto') }}">
                {!! $errors->first('asunto', '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    :message<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>') !!}
            </div>

            <div class="mb-3">
                <label for="mensaje" class="form-label etiquetas">Mensaje</label>
                <textarea class="form-control" id="mensaje" name="mensaje" id="" cols="5" rows="3">{{ old('mensaje') }}</textarea>
                {!! $errors->first('mensaje', '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    :message<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>') !!}
            </div>
            
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
            
        </form>
    </div>
</div>

@endsection