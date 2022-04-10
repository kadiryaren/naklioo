<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nakliye Proje - Firmalarımız</title>
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
                                    <a class="nav-link" href="#"><i class="bi bi-person-fill"></i> Giriş Yap</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="bi bi-person-heart"></i> Kayıt Ol</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="bi bi-file-earmark-plus"></i> İlan Ver</a>
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
            <div class="col-lg-8 mb-4">
                <div class="row g-4">
                    <div class="col-12 p-4">
                        <h2><i class="bi bi-building"></i> Firmalarımız</h2>
                    </div>
                    <div class="col-lg-6">
                        <div class="bg-light border">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <img src="https://via.placeholder.com/512x512" class="img-fluid h-100 w-100">
                                </div>
                                <div class="col-12 col-md-8">
                                    <div class="p-2">
                                        <div class="text-center">Lorem ipsum dolor sit amet.</div>
                                        <hr class="mb-1">
                                        <div>Telefon: <a href="tel:1111">0 (555) 322 1234</a></div>
                                        <hr class="mb-1">
                                        <div>Fiyatlandırma: 500-600</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bg-light border">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <img src="https://via.placeholder.com/512x512" class="img-fluid h-100 w-100">
                                </div>
                                <div class="col-12 col-md-8">
                                    <div class="p-2">
                                        <div class="text-center">Lorem ipsum dolor sit amet.</div>
                                        <hr class="mb-1">
                                        <div>Telefon: <a href="tel:1111">0 (555) 322 1234</a></div>
                                        <hr class="mb-1">
                                        <div>Fiyatlandırma: 500-600</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bg-light border">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <img src="https://via.placeholder.com/512x512" class="img-fluid h-100 w-100">
                                </div>
                                <div class="col-12 col-md-8">
                                    <div class="p-2">
                                        <div class="text-center">Lorem ipsum dolor sit amet.</div>
                                        <hr class="mb-1">
                                        <div>Telefon: <a href="tel:1111">0 (555) 322 1234</a></div>
                                        <hr class="mb-1">
                                        <div>Fiyatlandırma: 500-600</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bg-light border">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <img src="https://via.placeholder.com/512x512" class="img-fluid h-100 w-100">
                                </div>
                                <div class="col-12 col-md-8">
                                    <div class="p-2">
                                        <div class="text-center">Lorem ipsum dolor sit amet.</div>
                                        <hr class="mb-1">
                                        <div>Telefon: <a href="tel:1111">0 (555) 322 1234</a></div>
                                        <hr class="mb-1">
                                        <div>Fiyatlandırma: 500-600</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bg-light border">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <img src="https://via.placeholder.com/512x512" class="img-fluid h-100 w-100">
                                </div>
                                <div class="col-12 col-md-8">
                                    <div class="p-2">
                                        <div class="text-center">Lorem ipsum dolor sit amet.</div>
                                        <hr class="mb-1">
                                        <div>Telefon: <a href="tel:1111">0 (555) 322 1234</a></div>
                                        <hr class="mb-1">
                                        <div>Fiyatlandırma: 500-600</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bg-light border">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <img src="https://via.placeholder.com/512x512" class="img-fluid h-100 w-100">
                                </div>
                                <div class="col-12 col-md-8">
                                    <div class="p-2">
                                        <div class="text-center">Lorem ipsum dolor sit amet.</div>
                                        <hr class="mb-1">
                                        <div>Telefon: <a href="tel:1111">0 (555) 322 1234</a></div>
                                        <hr class="mb-1">
                                        <div>Fiyatlandırma: 500-600</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
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