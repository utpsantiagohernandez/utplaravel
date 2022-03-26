@extends('layout')

@section('title','Clientes')

@section('content')

<div class="container my-4">
    <div class="row">
        <aside class="col-sm-3">
            <div class="card p-3 h-100">
                <nav class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link" href="{{ route('clients.show', auth()->user()->id) }}">Mi perfil</a>
                    <a class="nav-link active" href="{{ route('directions.show', $client->id) }}">Mi cuenta</a>
                    <a class="nav-link" id="v-pills-orders-tab" data-bs-toggle="pill" data-bs-target="#v-pills-orders"
                        type="button" role="tab" aria-controls="v-pills-orders" aria-selected="false"
                        href="#v-pills-orders">Mis pedidos</a>
                </nav>
            </div>
        </aside>
        <div class="col-sm-9">
            <div class="tab-content">
                <div class="tab-pane fade show active">
                    <article class="card">
                        <div class="card-body">
                            <div class="itemside align-items-center">
                                <div class="aside">
                                    <img src="/img/avatar.jpg" class="icon-md img-avatar">
                                </div>
                                <div class="info">
                                    <h6 class="title">{{ $client->name." ". $client->lastname }}</h6>
                                    <p>
                                        <span class="fw-bold">Correo:</span> {{ $client->email }}
                                        <i class="dot"></i>
                                        <span class="fw-bold">Teléfono:</span> {{ $client->phone ?? ' ' }}
                                        <a class="px-2" href="{{ route('clients.show', auth()->user()->id) }}"><i
                                                class="fas fa-pen"></i></a>
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <p class="text-muted">Direcciones de entrega</p>
                            <div class="row g-2 mb-3">
                                <div class="col-md-6">
                                    <article class="box">
                                        <b class="mx-1 text-muted">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </b>
                                        Calle 48 No 524 por 53 y esquina departamento 7 Fraccionamiento la Ciudadela CP
                                        97314
                                    </article>
                                </div> <!-- col.// -->
                                <div class="col-md-6">
                                    <article class="box">
                                        <b class="mx-1 text-muted">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </b>
                                        Calle 66 S/N Colonia las Tres cruces, Maxcanú, Yucatán, México
                                    </article>
                                </div> <!-- col.// -->
                            </div> <!-- row.// -->
                            <a href="#" class="btn btn-outline-primary"  data-bs-toggle="collapse" data-bs-target="#collapseDirection" aria-expanded="false" aria-controls="collapseDirection">
                                <i class="me-2 fa fa-plus"></i> Agregar nueva dirección
                            </a>
                            <div class="collapse @if ($errors->any()) show @endif  my-4" id="collapseDirection">
                                @if (session('saveOK'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>Éxito!</strong> {{ session('saveOK') }} 
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif

                                @php($update=false)
                                    @foreach($client->direcciones as $direccion)
                                        @if($client->id == $direccion->id_client)
                                            @php($update=true)
                                        @endif
                                    @endforeach
                                
                                @if($update)
                                    <form method="POST" action="{{ route('directions.update',$client->id) }}">
                                    @method('PATCH')
                                @else
                                    <form method="POST" action="{{ route('directions.store') }}">
                                @endif
                                    @csrf
                                    <div class="row gx-3">
                                        <input type="hidden" class="form-control" name="id_client" value="{{ $client->id }}" > 
                                        <div class="col-12 mb-3"> 
                                            <label class="form-label">Dirección</label> 
                                            <input type="text" class="form-control  @error('address') is-invalid @enderror"  name="address" value="{{ old('address') }}" > 
                                            @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div> 
                                        <div class="col-6 mb-3"> 
                                            <label class="form-label">Colonia</label> 
                                            <input type="text" class="form-control @error('colony') is-invalid @enderror" name="colony" value="{{ old('colony') }}" > 
                                            @error('colony')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div> 
                                        <div  class="col-6 mb-3">
                                            <label class="form-label">Código Postal</label> 
                                            <input type="text" class="form-control @error('zipcode') is-invalid @enderror" name="zipcode" value="{{ old('zipcode') }}" > 
                                            @error('zipcode')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                    </div>
                                    <br> 
                                    <button type="submit" class="btn btn-warning btn-lg">Guardar cambios</button>
                                </form>
                            </div>
                        </div> <!-- card-body .// -->
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection