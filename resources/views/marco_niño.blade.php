@extends('welcome')


@section('titulo','PRODUCTOS NIÑOS')

@section('contenido')
    <div class="tab-content" id="myTabContent">
        <!-- Start Single Tab -->
        <div class="tab-pane fade show active" id="man" role="tabpanel">
            <div class="tab-single">
                <div class="row">
    @foreach($productoN as $productoNs)
                    <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                        <div class="single-product">
                            <div class="product-img">
                            <a>
                                <img class="default-img" src="images\one\{{$productoNs->Imagen}}">
                                @if ($productoNs->Imagen2 === null)
                                @else
                                <img class="hover-img" src="images\one\{{$productoNs->Imagen2}}">
                                @endif
                            </a>
                                <div class="button-head">
                                    <div class="product-action">
                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Caracteristicas</span></a>
                                        <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Añadir A Lista De Deseo</span></a>
                                    </div>
                                    <div class="product-action-2">
                                        <a title="COMPRAR" href="#">Comprar</a>
                                        <a onclick="descripcion('{{$productoNs}}')" title="DESCRIPCION">| Descripcion</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html">{{$productoNs->Nombre}}</a></h3>
                                <div class="product-price">
                                    <span> Bs. {{$productoNs->Precio}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
    @endforeach	
                </div>
            </div>
        </div>
    </div>
@endsection