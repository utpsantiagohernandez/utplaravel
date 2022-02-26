@extends('layout')

@section('title','Clientes')

@section('content')

<div class="container my-4">
    <div class="row">
        <aside class="col-sm-3">
           <div class="card p-3 h-100">
                <nav class="nav flex-column nav-pills"> 
                    <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true" href="#v-pills-home">Mi cuenta</a> 
                    <a class="nav-link" d="v-pills-orders-tab" data-bs-toggle="pill" data-bs-target="#v-pills-orders" type="button" role="tab" aria-controls="v-pills-orders" aria-selected="false"   href="#v-pills-orders">Mis pedidos</a> 
                    <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false" href="#v-pills-profile">Mi perfil</a>                    
                </nav>
            </div> 
        </aside>
        <div class="col-sm-9">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <article class="card">
                        <div class="card-body">
                            <div class="itemside align-items-center">
                                <div class="aside"> 
                                    <img src="/img/avatar.jpg" class="icon-md img-avatar"> 
                                </div>
                                <div class="info">
                                    <h6 class="title">Mr. Jackson Mike</h6>
                                    <p>
                                        <span class="fw-bold">Correo:</span> myusername@gmail.com 
                                        <i class="dot"></i> 
                                        <span class="fw-bold">Teléfono:</span> 99991395052 
                                        <a href="#" class="px-2"><i class="fas fa-pen"></i></a> 
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
                                        Calle 48 No 524 por 53 y esquina departamento 7 Fraccionamiento la Ciudadela CP 97314
                                    </article>
                                </div> <!-- col.// -->
                                <div class="col-md-6">
                                    <article class="box"> 
                                        <b class="mx-1 text-muted">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </b> 
                                        Calle 66 S/N Colonia las Tres cruces 
                                    </article>
                                </div> <!-- col.// -->
                            </div> <!-- row.// --> 
                            <a href="#" class="btn btn-outline-primary"> 
                                <i class="me-2 fa fa-plus"></i> Agregar nueva dirección
                            </a>
                        </div> <!-- card-body .// -->
                    </article> 
                </div>
                <div class="tab-pane fade" id="v-pills-orders" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <article class="card">
                        <div class="card-body">
                            <header class="d-md-flex">
                                <div class="flex-grow-1">
                                    <h6 class="mb-0"> Número de orden: 1032 <i class="dot"></i><span class="fw-bold text-danger"> Pediente </span> </h6>
                                    <span>Fecha: 25 de febrero 2022</span>
                                </div>
                                <div> 
                                    <a href="#" class="btn btn-sm btn-outline-danger">Cancelar orden</a> 
                                </div>
                            </header>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="mb-0 text-muted">Contacto</p>
                                    <p class="m-0"> 
                                        Alex Donald <br> Teléfono: 109-295-9131 <br> Correo: info@mywebsite.com 
                                    </p>
                                </div> <!-- col.// -->
                                <div class="col-md-4 border-start">
                                    <p class="mb-0 text-muted">Dirección de envío</p>
                                    <p class="m-0"> 
                                        United States <br> 600 Markley Street, Suite 170777 Port Reading, NJ 07064 
                                    </p>
                                </div> <!-- col.// -->
                                <div class="col-md-4 border-start">
                                    <p class="mb-0 text-muted">Pago</p>
                                    <p class="m-0"> 
                                        <span class="text-success"> Visa **** 0932 </span> <br> Tarifa de envío: $12 <br> Total: $150.90 
                                    </p>
                                </div> <!-- col.// -->
                            </div> <!-- row.// -->
                            <hr>
                            <ul class="row">
                                <li class="col-lg-4 col-md-6">
                                    <div class="itemside mb-3">
                                        <div class="aside"> 
                                            <img  src="/img/6.jpg" class="img-sm rounded border"> 
                                        </div>
                                        <div class="info">
                                            <p class="title">Apple SmartWatch Series 4 Space Gray</p> 
                                            <p class="text-muted"> 2x = $137.00 </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-lg-4 col-md-6">
                                    <div class="itemside mb-3">
                                        <div class="aside"> 
                                            <img width="72" height="72" src="/img/7.jpg" class="img-sm rounded border"> 
                                        </div>
                                        <div class="info">
                                            <p class="title">Gaming Headset with mic</p> 
                                            <p class="text-muted"> 2x = $339.90 </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-lg-4 col-md-6">
                                    <div class="itemside mb-3">
                                        <div class="aside"> 
                                            <img width="72" height="72" src="/img/8.jpg" class="img-sm rounded border"> 
                                        </div>
                                        <div class="info">
                                            <p class="title">Backpack for hiking</p> 
                                            <p class="text-muted"> 2x = $339.90 </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- card-body .// -->
                        <hr>
                        <div class="card-body">
                            <header class="d-md-flex">
                                <div class="flex-grow-1">
                                    <h6 class="mb-0"> Número de orden: 1031 <i class="dot"></i><span class="fw-bold text-success"> Enviado </span> </h6>
                                    <span>Fecha: 25 de febrero 2022</span>
                                </div>
                            </header>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="mb-0 text-muted">Contacto</p>
                                    <p class="m-0"> 
                                        Alex Donald <br> Teléfono: 109-295-9131 <br> Correo: info@mywebsite.com 
                                    </p>
                                </div> <!-- col.// -->
                                <div class="col-md-4 border-start">
                                    <p class="mb-0 text-muted">Dirección de envío</p>
                                    <p class="m-0"> 
                                        United States <br> 600 Markley Street, Suite 170777 Port Reading, NJ 07064 
                                    </p>
                                </div> <!-- col.// -->
                                <div class="col-md-4 border-start">
                                    <p class="mb-0 text-muted">Pago</p>
                                    <p class="m-0"> 
                                        <span class="text-success"> Visa **** 0932 </span> <br> Tarifa de envío: $12 <br> Total: $150.90 
                                    </p>
                                </div> <!-- col.// -->
                            </div> <!-- row.// -->
                            <hr>
                            <ul class="row">
                                <li class="col-lg-4 col-md-6">
                                    <div class="itemside mb-3">
                                        <div class="aside"> 
                                            <img  src="/img/9.jpg" class="img-sm rounded border"> 
                                        </div>
                                        <div class="info">
                                            <p class="title">Jeans shorts for men - XL</p> 
                                            <p class="text-muted"> 2x = $339.90 </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-lg-4 col-md-6">
                                    <div class="itemside mb-3">
                                        <div class="aside"> 
                                            <img width="72" height="72" src="/img/12.jpg" class="img-sm rounded border"> 
                                        </div>
                                        <div class="info">
                                            <p class="title">T-shirts blue colors - SM</p> 
                                            <p class="text-muted"> 2x = $53.00 </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- card-body .// -->
                    </article>
                </div>                
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <article class="card">
                        <div class="card-body">
                            <form>
                                <div class="row gx-3">
                                    <div class="col-12 mb-3"> 
                                        <label class="form-label">Nombres</label> 
                                        <input type="text" class="form-control" value="" > 
                                    </div> <!-- col .// -->
                                    <div class="col-12 mb-3"> 
                                        <label class="form-label">Apellidos</label> 
                                        <input type="text" class="form-control" value="" > 
                                    </div> <!-- col .// -->
                                    <div  class="col-12 mb-3">
                                        <label class="form-label">Correo electrónico</label> 
                                        <input type="email" class="form-control" value="" > 
                                    </div>
                                    <div class="col-lg-6 col-md-6 mb-3"> 
                                        <label class="form-label">Teléfono</label> 
                                        <input type="tel" class="form-control" value=""> 
                                    </div><!-- col .// -->
                                    <div class="col-lg-6 col-6 mb-3"> 
                                        <label class="form-label">Cumpleaños</label> 
                                        <input type="date" class="form-control"> 
                                    </div> <!-- col .// -->
                                </div> <!-- row.// -->
                                <br> 
                                <button type="submit" class="btn btn-warning btn-lg">Guardar cambios</button>
                            </form>
                            <hr class="my-4">
                            <div class="row" style="max-width:920px">
                                <div class="col-md">
                                    <article class="box mb-3 bg-light"> 
                                        <a class="btn float-end btn-outline-primary btn-sm" href="#">Cambiar</a>
                                        <p class="title mb-0">Contraseña</p> 
                                        <small class="text-muted d-block" style="width:70%">
                                            Puede cambiar su contraseña haciendo clic o presionar aquí
                                        </small>
                                    </article>
                                </div> <!-- col.// -->
                                <div class="col-md">
                                    <article class="box mb-3 bg-light"> 
                                        <a class="btn float-end btn-outline-danger btn-sm" href="#">Desactivar</a>
                                        <p class="title mb-0">Desactivar cuenta</p> 
                                        <small class="text-muted d-block" style="width:70%">
                                            Tu cuenta la desactivas, pero no te preocuopes no se elimina.
                                        </small>
                                    </article>
                                </div> <!-- col.// -->
                            </div> <!-- row.// -->
                        </div> <!-- card-body .// -->
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection