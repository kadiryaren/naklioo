<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nakliye Proje</title>
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}">
    <!--Main CSS-->
    <link rel="stylesheet" href="{{ asset("css/main.css") }}">
    <!--Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!--Aos CSS-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>

    <!--Preloader-->
    <div class="loader-wrapper">
        <div class="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <!--Top Banner-->
            <div class="col-12 text-center p-0 d-none d-lg-block">
                <img src="https://via.placeholder.com/2048x256" class="img-fluid">
            </div>
            <!--Navbar-->
            <div class="col-12 p-0">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-4">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">NAKLİYE PROJESİ</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <form class="d-flex my-4 my-lg-0">
                                <input class="form-control me-2 bg-dark text-light" type="search" placeholder="Arama" aria-label="Search">
                                <button class="btn btn-lg btn-secondary" type="submit"><i
                                        class="bi bi-search"></i></button>
                            </form>
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-house"></i>
                                        Ana Sayfa</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('login')}}"><i class="bi bi-person-fill"></i> Giriş Yap</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('register')}}"><i class="bi bi-person-heart"></i> Kayıt Ol</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('ilan.create')}}"><i class="bi bi-file-earmark-plus"></i> İlan Ver</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!--Left Banner-->
            <div class="col-lg-2 d-none d-lg-block  p-0">
                <img id="left-banner" src="https://via.placeholder.com/256x1024" class="img-fluid sticky-top w-100" style="z-index: -1">
            </div>
            <!--Main-->
            <div class="col-lg-8">
                <div class="row g-4">
                    <!--Mobile Filter Window-->
                    <div class="col-12 d-block d-lg-none">
                        <div class="d-grid gap-2 my-2">
                            <button class="btn btn-secondary btn-lg" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"><i
                                    class="bi bi-gear"></i> Filtre
                                Seçenekleri</button>
                        </div>
                    </div>
                    <!--Desktop Filter Section-->
                    <div class="col-lg-2 bg-secondary text-light d-none d-lg-block">
                        <form class="row g-2 my-2">
                            <div class="col-12">
                                <h2>Filtre</h2>
                            </div>
                            <div class="col-12">
                                <label for="inputKelime" class="form-label">Kelime</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-12">
                                <label for="inputUrunCesidi" class="form-label">Ürün Çeşidi</label>
                                <select class="form-control" id="inputUrunCesidi">
                                    <option>Deneme</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="inputNereden" class="form-label">Nereden</label>
                                <select class="form-control" id="inputNereden">
                                    <option>Deneme</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="inputNereye" class="form-label">Nereye</label>
                                <select class="form-control" id="inputNereye">
                                    <option>Deneme</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="inputUlke" class="form-label">Ülke</label>
                                <select class="form-control" id="inputUlke">
                                    <option>Deneme</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="inputKapak" class="form-label">Kaç Kapak</label>
                                <input type="number" class="form-control" id="inputKapak">
                            </div>
                            <div class="col-12">
                                <label for="inputTarih" class="form-label">Tarih</label>
                                <input type="date" class="form-control" id="inputTarih">
                            </div>
                            <div class="col-12">
                                <label for="inputSaat" class="form-label">Saat</label>
                                <input type="time" class="form-control" id="inputSaat">
                            </div>
                            <div class="col-12">
                                <label for="inputTon" class="form-label">Ağırlık (Ton)</label>
                                <input type="number" class="form-control" id="inputTon">
                            </div>
                            <div class="col-12">
                                <label for="inputUst" class="form-label">Araç Üstü</label>
                                <select class="form-control" id="inputUst">
                                    <option value="acik">Açik</option>
                                    <option value="kapali">Kapalı</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="inputCesit" class="form-label">Araç Çeşidi</label>
                                <select class="form-control" id="inputCesit">
                                    <option value="acik">Asansörlü</option>
                                    <option value="kapali">Şoklu</option>
                                    <option value="kapali">Tır</option>
                                    <option value="kapali">Kamyon</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="inputFiyatMin" class="form-label">Min. Fiyat</label>
                                <input type="number" class="form-control">
                            </div>
                            <div class="col-12">
                                <label for="inputFiyatMax" class="form-label">Max. Fiyat</label>
                                <input type="number" class="form-control">
                            </div>
                            <div class="col-12">
                                <div class="g-2 d-grid">
                                    <input class="btn btn-light" type="submit" value="Filtrele">
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--Prdocuts-->
                    <div class="col-lg-10">
                        <div class="row g-2 my-2">
                            <div class="col-12">
                                <h2>İlanlar</h2>
                            </div>
                            <div class="col-12">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Tümü</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Nakliyeci</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Yük Sahibi</button>
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
                </div>
            </div>
            <!--Right Banner-->
            <div class="col-lg-2 d-none d-lg-block p-0">
                <img src="https://via.placeholder.com/256x1024" class="img-fluid sticky-top w-100" style="z-index: -1">
            </div>
            <!--Footer-->
            <div class="col-12 text-center p-4 text-light bg-dark">
                <div class="row g-2">
                    <div class="col-sm-4">
                        Nakliye Projesi © 2022
                    </div>
                    <div class="col-sm-4">
                        <i class="bi bi-facebook"></i>
                        <i class="bi bi-instagram"></i>
                        <i class="bi bi-whatsapp"></i>
                    </div>
                    <div class="col-sm-4">
                        Email: info@nakliyeprojesi.com
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Filter Options-->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Filtre Seçenekleri</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <form class="row g-2 my-2">
                <div class="col-12">
                    <label for="inputKelime" class="form-label">Kelime</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-12">
                    <label for="inputUrunCesidi" class="form-label">Ürün Çeşidi</label>
                    <select class="form-control" id="inputUrunCesidi">
                        <option>Deneme</option>
                    </select>
                </div>
                <div class="col-12">
                    <label for="inputNereden" class="form-label">Nereden</label>
                    <select class="form-control" id="inputNereden">
                        <option>Deneme</option>
                    </select>
                </div>
                <div class="col-12">
                    <label for="inputNereye" class="form-label">Nereye</label>
                    <select class="form-control" id="inputNereye">
                        <option>Deneme</option>
                    </select>
                </div>
                <div class="col-12">
                    <label for="inputUlke" class="form-label">Ülke</label>
                    <select class="form-control" id="inputUlke">
                        <option>Deneme</option>
                    </select>
                </div>
                <div class="col-12">
                    <label for="inputKapak" class="form-label">Kaç Kapak</label>
                    <input type="number" class="form-control" id="inputKapak">
                </div>
                <div class="col-12">
                    <label for="inputTarih" class="form-label">Tarih</label>
                    <input type="date" class="form-control" id="inputTarih">
                </div>
                <div class="col-12">
                    <label for="inputSaat" class="form-label">Saat</label>
                    <input type="time" class="form-control" id="inputSaat">
                </div>
                <div class="col-12">
                    <label for="inputTon" class="form-label">Ağırlık (Ton)</label>
                    <input type="number" class="form-control" id="inputTon">
                </div>
                <div class="col-12">
                    <label for="inputUst" class="form-label">Araç Üstü</label>
                    <select class="form-control" id="inputUst">
                        <option value="acik">Açik</option>
                        <option value="kapali">Kapalı</option>
                    </select>
                </div>
                <div class="col-12">
                    <label for="inputCesit" class="form-label">Araç Çeşidi</label>
                    <select class="form-control" id="inputCesit">
                        <option value="acik">Asansörlü</option>
                        <option value="kapali">Şoklu</option>
                        <option value="kapali">Tır</option>
                        <option value="kapali">Kamyon</option>
                    </select>
                </div>
                <div class="col-12">
                    <label for="inputFiyatMin" class="form-label">Min. Fiyat</label>
                    <input type="number" class="form-control">
                </div>
                <div class="col-12">
                    <label for="inputFiyatMax" class="form-label">Max. Fiyat</label>
                    <input type="number" class="form-control">
                </div>
                <div class="col-12">
                    <div class="g-2 d-grid">
                        <input class="btn btn-dark" type="submit" value="Filtrele">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!--AOS JS-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!--Bootstrap JS-->
    <script src="{{ asset("js/bootstrap.bundle.min.js") }}"></script>
    <!--Main JS-->
    <script src="{{ asset("js/main.js") }}"></script>
</body>

</html>