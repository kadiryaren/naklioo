<div id="formBireysel">
        <form method="POST" action="{{route('register')}}"class="row g-2">
        @csrf
        <input type="hidden" name="role" value="Bireysel">
            <div class="col-6">
                <label for="inputBireyAd" class="form-label">Ad</label>
                <input type="text" class="form-control" id="inputBireyAd" name="name"required>
            </div>
            <div class="col-6">
                <label for="inputBireySoyad" class="form-label">Soyad</label>
                <input type="text" class="form-control" id="inputBireySoyad" name="lastName" required>
            </div>
            <div class="col-12">
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
                <select class="form-control" id="inputBireyIl" name="il"required>
                    <option>Denizli</option>
                </select>
            </div>
            <div class="col-4">
                <label for="inputBireyIlce" class="form-label">İlçe</label>
                <select class="form-control" id="inputBireyIlce" name="ilce" required>
                    <option>Pamukkale</option>
                </select>
            </div>
            <div class="col-4">
                <label for="inpuBireyMahalle" class="form-label">Mahalle</label>
                <select class="form-control" id="inpuBireyMahalle" name="mahalle" required>
                    <option>Kınıklı</option>
                </select>
            </div>
            <div class="col-12">
                <label for="inputBireyAdres" class="form-label">Adres</label>
                <input type="text" class="form-control" id="inputBireyAdres" name="adres"required>
            </div>
            <div class="col-12">
                <label class="form-check-label" for="inputBireySozlesme"><span><a
                            href="#">Sözleşme</a></span>'yi okudum onaylıyorum.</label>
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