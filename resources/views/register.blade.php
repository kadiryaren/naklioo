<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nakliye Proje - Kayıt Ol</title>
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
                                    <a class="nav-link" href="/register"><i class="bi bi-file-earmark-plus"></i> İlan Ver</a>
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
                <div class="row g-2">
                    <div class="col-12">
                        <h2><i class="bi bi-pencil-square"></i> Kayıt Ol</h2>
                    </div>
                    <div class="col-12 my-2">
                        <label for="inputTur" class="form-label">Hesap Türü</label>
                        <select id="inputTur" class="form-control">
                            <option value="bireysel">Bireysel</option>
                            <option value="firma">Firma</option>
                        </select>
                    </div>
                </div>
                <div id="formFirma" class="d-none">
                    <form method="POST" action="{{route('register')}}"class="row g-2">
                    @csrf    
                    <div class="col-6">
                            <label for="inputFirmaAdi" class="form-label">Firma Adi</label>
                            <input type="text" class="form-control" id="inputFirmaAdi" name="name" required>
                        </div>
                        <div class="col-6">
                            <label for="inputFirmaAdi" class="form-label">Rol</label>
                            <input type="text" class="form-control" id="inputFirmaRole" name="role" required>
                        </div>
                        <div class="col-6">
                            <label for="inputFirmaNick" class="form-label">Kullanıcı Adı</label>
                            <input type="text" class="form-control" id="inputFirmaNick" name="username" required>
                        </div>
                        <div class="col-12">
                            <label for="inputFirmaEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputFirmaEmail" name="email" required>
                        </div>
                        <div class="col-6">
                            <label for="inputFirmaSifre" class="form-label">Şifre</label>
                            <input type="password" class="form-control" id="inputFirmaSifre" name="password"required>
                        </div>
                        <div class="col-6">
                            <label for="inputFirmaSifreTekrar" class="form-label">Şifre Tekrar</label>
                            <input type="password" class="form-control" id="inputFirmaSifreTekrar" name="password_check" required>
                        </div>
                        <div class="col-12">
                            <label for="inputFirmaTel" class="form-label">Telefon Numarası</label>
                            <input id="inputFirmaTel" type="text" class="form-control" name="phone">
                        </div>
                        <div class="col-12">
                            <label for="inputFirmaVergiNo" class="form-label">Vergi Numarası</label>
                            <input id="inputFirmaVergiNo" type="text" class="form-control" name="vergi_no">
                        </div>
                        <div class="col-4">
                            <label for="inputFirmaIl" class="form-label">İl</label>
                            <select class="form-control" id="inputFirmaIl" required>
                                <option>Denizli</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <label for="inputFirmaIlce" class="form-label">İlçe</label>
                            <select class="form-control" id="inputFirmaIlce" required>
                                <option>Pamukkale</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <label for="inpuFirmatMahalle" class="form-label">Mahalle</label>
                            <select class="form-control" id="inpuFirmatMahalle" required>
                                <option>Kınıklı</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="inputFirmaAdres" class="form-label">Adres</label>
                            <input type="text" class="form-control" id="inputFirmaAdres" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="inputFirmaSehirler">Hizmet Verilen Şehirler</label>
                            <select id="inputFirmaSehirler" class="form-control">
                                <option value="Denizli">Denizli</option>
                                <option value="İzmir">İzmir</option>
                                <option value="İstanbul">İstanbul</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <div class="d-grid g-2">
                                <span id="btnEkle" class="btn btn-primary">Ekle</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-grid g-2">
                                <span id="btnCikar" class="btn btn-danger">Çıkar</span>
                            </div>
                        </div>
                        <div class="col-12">
                            <input id="inputFirmaEklenen" type="text" class="form-control" readonly>
                        </div>
                        <div class="col-12">
                            <label class="form-check-label" for="inputSozlesme"><span><a href="#">Sözleşme</a></span>'yi okudum onaylıyorum.</label>
                            <input type="checkbox" class="form-check-input" id="inputSozlesme" required>
                        </div>
                        <div class="col-12">
                            <div class="d-grid g-2">
                                <input type="submit" value="Kayıt Ol" class="btn btn-secondary">
                            </div>
                        </div>
                    </form>
                </div>
                <div id="formBireysel" class="d-none">
                    <form method="POST" action="{{route('register')}}" class="row g-2">
                    @csrf    
                    <div class="col-6">
                            <label for="inputBireyAd" class="form-label">Ad</label>
                            <input type="text" class="form-control" id="inputBireyAd" name="name" required>
                        </div>
                        <div class="col-6">
                            <label for="inputBireyAd" class="form-label">Rol</label>
                            <input type="text" class="form-control" id="inputBireyRole" name="role" required>
                        </div>
                        <div class="col-6">
                            <label for="inputBireyNick" class="form-label">Kullanıcı Adı</label>
                            <input type="text" class="form-control" id="inputBireyNick" name="username" required>
                        </div>
                        <div class="col-12">
                            <label for="inputBireyEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputBireyEmail" name="email" required>
                        </div>
                        <div class="col-6">
                            <label for="inputBireySifre" class="form-label">Şifre</label>
                            <input type="password" class="form-control" id="inputBireySifre" name="password" required>
                        </div>
                        <div class="col-6">
                            <label for="inputBireySifreTekrar" class="form-label">Şifre Tekrar</label>
                            <input type="password" class="form-control" id="inputBireySifreTekrar" name="password_confirmation" required>
                        </div>
                        <div class="col-12">
                            <label for="inputBireyTel" class="form-label">Telefon Numarası</label>
                            <input id="inputBireyTel" type="text" class="form-control" name="phone">
                        </div>
                        <div class="col-4">
                            <label for="inputFirmaIl" class="form-label">İl</label>
                            <select class="form-control" id="inputBireyIl" required>
                                <option>Denizli</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <label for="inputBireyIlce" class="form-label">İlçe</label>
                            <select class="form-control" id="inputBireyIlce" required>
                                <option>Pamukkale</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <label for="inpuBireyMahalle" class="form-label">Mahalle</label>
                            <select class="form-control" id="inpuBireyMahalle" required>
                                <option>Kınıklı</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="inputBireyAdres" class="form-label">Adres</label>
                            <input type="text" class="form-control" id="inputBireyAdres" required>
                        </div>
                        <div class="col-12">
                            <label class="form-check-label" for="inputBireySozlesme"><span><a href="#">Sözleşme</a></span>'yi okudum onaylıyorum.</label>
                            <input type="checkbox" class="form-check-input" id="inputBireySozlesme" required>
                        </div>
                        <div class="col-12">
                            <div class="d-grid g-2">
                                <input type="submit" value="Kayıt Ol" class="btn btn-secondary">
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

    <script>
        const btnAdd = document.getElementById('btnEkle')
        const btnRemove = document.getElementById('btnCikar')
        const inputFirmaSehirler = document.getElementById('inputFirmaSehirler')
        const inputFirmaEklenen = document.getElementById('inputFirmaEklenen')

        const inputTur = document.getElementById('inputTur')
        const formFirma = document.getElementById('formFirma')
        const formBireysel = document.getElementById('formBireysel')

        btnAdd.addEventListener('click', function() {
            if (inputFirmaEklenen.value.search(inputFirmaSehirler.value) == -1) {
                if (inputFirmaEklenen.value == "") {
                    inputFirmaEklenen.value += inputFirmaSehirler.value
                } else {
                    inputFirmaEklenen.value += ', ' + inputFirmaSehirler.value
                }
            }
        })

        btnRemove.addEventListener('click', function() {
            if (inputFirmaEklenen.value.search(inputFirmaSehirler.value + ', ') != -1) {
                inputFirmaEklenen.value = inputFirmaEklenen.value.replace(inputFirmaSehirler.value + ', ', '')
            } else if (inputFirmaEklenen.value.search(inputFirmaSehirler.value) != -1) {
                inputFirmaEklenen.value = inputFirmaEklenen.value.replace(inputFirmaSehirler.value, '')
            }
        })

        inputTur.addEventListener("change", function() {
            formBireysel.classList.remove("d-block")
            formBireysel.classList.remove("d-none")
            formFirma.classList.remove("d-block")
            formFirma.classList.remove("d-none")
            if (inputTur.value == 'firma') {
                formFirma.classList.add("d-block")
                formBireysel.classList.add("d-none")
            } else {
                formBireysel.classList.add("d-block")
                formFirma.classList.add("d-none")
            }
        })
    </script>

    <!--AOS JS-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!--Bootstrap JS-->
    <script src="{{ asset("js/bootstrap.bundle.min.js") }}"></script>
    <!--Main JS-->
    <script src="{{ asset("js/main.js") }}"></script>
</body>

</html>