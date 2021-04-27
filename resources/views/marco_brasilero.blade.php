@extends('welcome')


@section('titulo','PRODUCTOS BRASILEROS')

@section('contenido')
    <div class="tab-content" id="myTabContent">
        <!-- Start Single Tab -->
        <div class="tab-pane fade show active" id="man" role="tabpanel">
            <div class="tab-single">
                <div class="row">
    @foreach($productoB as $productoBs)
                    <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="https://farmaciauniversal.com/assets/sources/05043-vitamina-b12.jpg" alt="#">
                                    <img class="hover-img" src="https://terbol.com.bo/wp-content/uploads/2020/03/vitamina-c-500mg-1.jpg" alt="#">
                                </a>
                                <div class="button-head">
                                    <div class="product-action">
                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Caracteristicas</span></a>
                                        <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Añadir A Lista De Deseo</span></a>
                                    </div>
                                    <div class="product-action-2">
                                        <a title="COMPRAR" href="#">Comprar</a>
                                        <a onclick="descripcion('{{$productoBs}}')" title="DESCRIPCION">| Descripcion</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html">{{$productoBs->Descripcion}}</a></h3>
                                <div class="product-price">
                                    <span> Bs. {{$productoBs->Precio}}</span>
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