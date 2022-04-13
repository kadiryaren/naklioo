@extends('layouts.bar')
@section('content')
<!--Main-->
<div class="col-lg-8">
    <div class="row">
        <div class="col-12">
            <div class="d-grid g-2 mb-4 mt-2">
                <a href="index.html" class="btn btn-light text-start"><i class="bi bi-caret-left-fill"></i> Geri</a>
            </div>
        </div>
        <div class="col-12">
            <h2 class="fs-5">{{$ilan->ilan_basligi}}</h2>
            <div class="text-secondary mb-2">{{$ilan->created_at}}</div>
            <hr>
        </div>
        <div class="col-lg-6">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    @foreach($ilan->photos as $photo)
                    <div class="carousel-item active">
                        <a data-fslightbox="gallery" href="./assets/img/p1.jpg">
                            <img src="{{asset('/storage'.$photo->fotograf)}}" class="d-block w-100">
                        </a>
                    </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Önceki</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Sonraki</span>
                </button>
            </div>
        </div>
        <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="row g-4">
                <div class="col-12 fs-5 text-center text-primary">
                    <span>{{$ilan->nereden}}</span><i class="bi bi-arrow-left-right"></i><span>{{$ilan->nereye}}</span>
                </div>
                <div class="col-12">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <td>Araç Çeşidi:</td>
                                <td>{{$ilan->arac}}</td>
                            </tr>
                            <tr>
                                <td>Kasa Tipi:</td>
                                <td>{{$ilan->kasa}}</td>
                            </tr>
                            <tr>
                                <td>İçinde Bulunan Yük:</td>
                                <td>{{$ilan->ürün}}</td>
                            </tr>
                            <tr>
                                <td>Yola Çıkılacak Tarih:</td>
                                <td>{{$ilan->tarih}}</td>
                            </tr>
                            <tr>
                                <td>Kapak:</td>
                                <td>{{$ilan->kapak}}</td>
                            </tr>
                            <tr>
                                <td>Ton:</td>
                                <td>{{$ilan->miktar}}</td>
                            </tr>
                            <tr>
                                <td>Fiyat:</td>
                                <td>{{$ilan->fiyat}}</td>
                            </tr>
                            <tr>
                                <td>Alabileceği Yük Çeşidi:</td>
                                <td>{{$ilan->ürün_cesit}}</td>
                            </tr>
                            <tr>
                                <td>Telefon Numarası:</td>
                                <td>{{$ilan->telefon}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="my-4">
                <div class="fs-5"><i class="bi bi-chat-left"></i> Ek Açıklama</div>
                <hr>
                <div>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum quaerat deserunt natus numquam dolorem debitis cum, odit, iusto, nesciunt provident beatae officia corrupti quasi sit!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection