<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nakliye Proje - Giriş Yap</title>
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
                                <button class="btn btn-lg btn-secondary" type="submit"><i class="bi bi-search"></i></button>
                            </form>
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="/"><i class="bi bi-house"></i> Ana Sayfa</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/login"><i class="bi bi-person-fill"></i> Giriş Yap</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/register"><i class="bi bi-person-heart"></i> Kayıt Ol</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/login"><i class="bi bi-file-earmark-plus"></i> İlan Ver</a>
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
            <div class="col-lg-8 p-4">
                <div class="d-flex justify-content-center mt-4" style="margin-bottom: 300px">
                    <form method="POST" action="{{route('login')}}" class="row g-2" style="max-width: 512px">
                    @csrf    
                    <div class="col-12">
                            <h2><i class="bi bi-door-open"></i> Giriş Yap</h2>
                        </div>
                        <div class="col-12">
                            <label for="inputEmail" class="form-label">Email</label>
                            <input type="email" id="inputEmail" class="form-control" name="email" required>
                        </div>
                        <div class="col-12">
                            <label for="inputSifre" class="form-label">Şifre</label>
                            <input type="password" class="form-control" id="inputSifre" name="password" required>
                        </div>
                        <div class="col-12">
                            <div class="d-grid g-2">
                                <input type="submit" value="Giriş Yap" class="btn btn-secondary btn-lg">
                                <a href="#" class="btn btn-outline-secondary mt-2">Kayıt Ol</a>
                            </div>
                        </div>
                    </form>
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
            <div>
                <form class="row g-2">
                    <div class="col-12">
                        <label for="inputKelime" class="form-label">Kelime</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="inputFiyatMin" class="form-label">Min. Fiyat</label>
                        <input type="number" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="inputFiyatMax" class="form-label">Max. Fiyat</label>
                        <input type="number" class="form-control">
                    </div>
                    <div class="col-12">
                        <label for="inputIl" class="form-label">İl</label>
                        <select class="form-control" id="inputIl">
              <option>Denizli</option>
            </select>
                    </div>
                    <div class="col-12">
                        <label for="inputIlce" class="form-label">İlçe</label>
                        <select class="form-control" id="inputIlce">
              <option>Pamukkale</option>
            </select>
                    </div>
                    <div class="col-12">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="inputOzellik">
                            <label class="form-check-label" for="inputOzellik">Özellik</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="g-2 d-grid">
                            <input class="btn btn-dark" type="submit" value="Filtrele">
                        </div>
                    </div>
                </form>
            </div>
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