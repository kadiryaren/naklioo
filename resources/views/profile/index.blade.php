@extends('layouts.bar')
@section('content')
   <div class="col-lg-8 p-4">
        <div class="row g-2">
            <div class="col-12">
                <h2 class="my-4">Profil</h2>
            </div>
            <div class="col-sm-4 text-center">
                <img src="https://via.placeholder.com/256x256" class="img-fluid rounded-pill">
            </div>
            <div class="col-sm-8 text-center">
                <div class="row g-2">
                    <div class="col-12">
                        <h3>{{ $user->name }}</h3>
                    </div>
                    <div class="col-12">
                        {{$user->aciklama}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 my-4">
                <h3>Bilgiler</h3>
                <div>Telefon Numarası: <a href="tel:{{$user->phone}}">{{$user->phone}}</a></div>
                <div>Email: <a href="mailto:abc@test.com">{{$user->email}}</a></div>
                <div>Fiyat: <span class="text-primary">100 - 200</span></div>
            </div>
            <div class="col-lg-8 text-lg-end my-4">
                <h3>Hizmet Verilen Şehirler</h3>
                <div class="text-primary">
                    İzmir
                </div>
                <div class="text-primary">
                    Ankara
                </div>
                <div class="text-primary">
                    Denizli
                </div>
            </div>
            <div class="col-12">
                <h2>İlanlar</h2>
            </div>
            <div class="col-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                            type="button" role="tab" aria-controls="home" aria-selected="true">Tümü</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                            type="button" role="tab" aria-controls="profile" aria-selected="false">Nakliyeci</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                            type="button" role="tab" aria-controls="contact" aria-selected="false">Yük Sahibi</button>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    <!--Products: Tümü-->
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="bg-light mt-2 border" data-aos="flip-up">
                            <div class="row g-0">
                                <div class="col-12 col-md-3 col-lg-2">
                                    <img src="https://via.placeholder.com/512x512" class="img-fluid w-100 h-100">
                                </div>
                                <div class="col-12 col-md-9 col-lg-10">
                                    <div class="row g-0">
                                        <div class="col-12 p-1 bg-secondary text-light text-center">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, adipisci!
                                        </div>
                                        <div class="col-12 text-center p-1">
                                            <div class="row">
                                                <div class="col-6">
                                                    <span class="d-none d-sm-inline">Nereden/ Nereye
                                                    </span>
                                                    <i class="bi bi-arrow-left-right"></i>
                                                </div>
                                                <div class="col-6">
                                                    <span class="d-none d-sm-inline">Fiyat </span>
                                                    <i class="bi bi-tag"></i>
                                                </div>
                                                <div class="col-12">
                                                    <hr class="m-0">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center py-4">
                                            <div class="row g-0">
                                                <div class="col-6">
                                                    İstabul/ İzmir
                                                </div>
                                                <div class="col-6">
                                                    1120₺
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 text-center bg-secondary text-light p-1">
                                    <span class="d-none d-sm-inline">İlan Tarihi:</span>
                                    <span class="d-sm-none">İ.T:</span>
                                    <span>02.04.22</span>
                                    <span class="d-none d-sm-inline">/ Çıkış Tarihi:</span>
                                    <span class="d-sm-none">Ç.T:</span>
                                    <span>09.06.22</span>
                                </div>
                            </div>
                        </div>
                        //
                        <div class="bg-light mt-2 border" data-aos="flip-up">
                            <div class="row g-0">
                                <div class="col-12 col-md-3 col-lg-2">
                                    <img src="https://via.placeholder.com/512x512" class="img-fluid w-100 h-100">
                                </div>
                                <div class="col-12 col-md-9 col-lg-10">
                                    <div class="row g-0">
                                        <div class="col-12 p-1 bg-secondary text-light text-center">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, adipisci!
                                        </div>
                                        <div class="col-12 text-center p-1">
                                            <div class="row">
                                                <div class="col-4">
                                                    <span class="d-none d-sm-inline">Nereden/ Nereye
                                                    </span>
                                                    <i class="bi bi-arrow-left-right"></i>
                                                </div>
                                                <div class="col-1 col-sm-2">
                                                    <span class="d-none d-sm-inline">Kapak </span>
                                                    <i class="bi bi-boxes"></i>
                                                </div>
                                                <div class="col-4 col-sm-3">
                                                    <span class="d-none d-sm-inline">Ürün Çeşidi </span>
                                                    <i class="bi bi-truck"></i>
                                                </div>
                                                <div class="col-3">
                                                    <span class="d-none d-sm-inline">Fiyat </span>
                                                    <i class="bi bi-tag"></i>
                                                </div>
                                                <div class="col-12">
                                                    <hr class="m-0">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center py-4">
                                            <div class="row g-0">
                                                <div class="col-4">
                                                    İstabul/ İzmir
                                                </div>
                                                <div class="col-1">
                                                    6
                                                </div>
                                                <div class="col-4">
                                                    Asansörlü
                                                </div>
                                                <div class="col-3">
                                                    1120₺
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 text-center bg-secondary text-light p-1">
                                    <span class="d-none d-sm-inline">İlan Tarihi:</span>
                                    <span class="d-sm-none">İ.T:</span>
                                    <span>02.04.22</span>
                                    <span class="d-none d-sm-inline">/ Çıkış Tarihi:</span>
                                    <span class="d-sm-none">Ç.T:</span>
                                    <span>09.06.22</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Products: Nakliyeci-->
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="bg-light mt-2 border" data-aos="flip-up">
                            <div class="row g-0">
                                <div class="col-12 col-md-3 col-lg-2">
                                    <img src="https://via.placeholder.com/512x512" class="img-fluid w-100 h-100">
                                </div>
                                <div class="col-12 col-md-9 col-lg-10">
                                    <div class="row g-0">
                                        <div class="col-12 p-1 bg-secondary text-light text-center">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, adipisci!
                                        </div>
                                        <div class="col-12 text-center p-1">
                                            <div class="row">
                                                <div class="col-6">
                                                    <span class="d-none d-sm-inline">Nereden/ Nereye
                                                    </span>
                                                    <i class="bi bi-arrow-left-right"></i>
                                                </div>
                                                <div class="col-6">
                                                    <span class="d-none d-sm-inline">Fiyat </span>
                                                    <i class="bi bi-tag"></i>
                                                </div>
                                                <div class="col-12">
                                                    <hr class="m-0">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center py-4">
                                            <div class="row g-0">
                                                <div class="col-6">
                                                    İstabul/ İzmir
                                                </div>
                                                <div class="col-6">
                                                    1120₺
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 text-center bg-secondary text-light p-1">
                                    <span class="d-none d-sm-inline">İlan Tarihi:</span>
                                    <span class="d-sm-none">İ.T:</span>
                                    <span>02.04.22</span>
                                    <span class="d-none d-sm-inline">/ Çıkış Tarihi:</span>
                                    <span class="d-sm-none">Ç.T:</span>
                                    <span>09.06.22</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Products: Yük Sahibi-->
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="bg-light mt-2 border" data-aos="flip-up">
                            <div class="row g-0">
                                <div class="col-12 col-md-3 col-lg-2">
                                    <img src="https://via.placeholder.com/512x512" class="img-fluid w-100 h-100">
                                </div>
                                <div class="col-12 col-md-9 col-lg-10">
                                    <div class="row g-0">
                                        <div class="col-12 p-1 bg-secondary text-light text-center">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, adipisci!
                                        </div>
                                        <div class="col-12 text-center p-1">
                                            <div class="row">
                                                <div class="col-4">
                                                    <span class="d-none d-sm-inline">Nereden/ Nereye
                                                    </span>
                                                    <i class="bi bi-arrow-left-right"></i>
                                                </div>
                                                <div class="col-1 col-sm-2">
                                                    <span class="d-none d-sm-inline">Kapak </span>
                                                    <i class="bi bi-boxes"></i>
                                                </div>
                                                <div class="col-4 col-sm-3">
                                                    <span class="d-none d-sm-inline">Ürün Çeşidi </span>
                                                    <i class="bi bi-truck"></i>
                                                </div>
                                                <div class="col-3">
                                                    <span class="d-none d-sm-inline">Fiyat </span>
                                                    <i class="bi bi-tag"></i>
                                                </div>
                                                <div class="col-12">
                                                    <hr class="m-0">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center py-4">
                                            <div class="row g-0">
                                                <div class="col-4">
                                                    İstabul/ İzmir
                                                </div>
                                                <div class="col-1">
                                                    6
                                                </div>
                                                <div class="col-4">
                                                    Asansörlü
                                                </div>
                                                <div class="col-3">
                                                    1120₺
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 text-center bg-secondary text-light p-1">
                                    <span class="d-none d-sm-inline">İlan Tarihi:</span>
                                    <span class="d-sm-none">İ.T:</span>
                                    <span>02.04.22</span>
                                    <span class="d-none d-sm-inline">/ Çıkış Tarihi:</span>
                                    <span class="d-sm-none">Ç.T:</span>
                                    <span>09.06.22</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Pagination-->
                    <div class="d-flex justify-content-center mt-4">
                        <nav aria-label="sayfalar">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>  
@endsection
