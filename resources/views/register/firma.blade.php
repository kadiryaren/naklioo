<div id="formFirma" class="d-none">
        <form method="POST" action="{{route('register')}}"class="row g-2">
            @csrf
            <input type="hidden" name="role" value="Firma">
            <div class="col-6">
                <label for="inputFirmaAdi" class="form-label">Firma Adi</label>
                <input type="text" class="form-control" id="inputFirmaAdi"  name="name" required>
            </div>
            <div class="col-6">
                <label for="inputFirmaNick" class="form-label">Kullanıcı Adı</label>
                <input type="text" class="form-control" id="inputFirmaNick" name="username"required>
            </div>
            <div class="col-12">
                <label for="inputFirmaEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputFirmaEmail" name="email"required>
            </div>
            <div class="col-6">
                <label for="inputFirmaSifre" class="form-label">Şifre</label>
                <input type="password" class="form-control" id="inputFirmaSifre" name="password"required>
            </div>
            <div class="col-6">
                <label for="inputFirmaSifreTekrar" class="form-label">Şifre Tekrar</label>
                <input type="password" class="form-control" id="inputFirmaSifreTekrar" name="password_confirmation"required>
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
                <select class="form-control" id="inputFirmaIl" name="il"required>
                    <option>Denizli</option>
                </select>
            </div>
            <div class="col-4">
                <label for="inputFirmaIlce" class="form-label">İlçe</label>
                <select class="form-control" id="inputFirmaIlce" name="ilce"required>
                    <option>Pamukkale</option>
                </select>
            </div>
            <div class="col-4">
                <label for="inpuFirmatMahalle" class="form-label">Mahalle</label>
                <select class="form-control" id="inpuFirmatMahalle" name="mahalle"required>
                    <option>Kınıklı</option>
                </select>
            </div>
            <div class="col-12">
                <label for="inputFirmaAdres" class="form-label">Adres</label>
                <input type="text" class="form-control" id="inputFirmaAdres" name="adres" required>
            </div>
            <div class="col-12">
                <label for="inputFirmaSehirler" class="form-label">Hizmet Verilen Şehirler</label>
                <ul class="list-group" style="max-height: 128px; overflow-y: scroll; overflow-y: scroll;">
                    <li class="list-group-item">
                        <input class="form-check-input me-1 hvs" type="checkbox" value="İzmir" id="izmir">
                        İzmir
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input me-1 hvs" type="checkbox" value="Denizli"> Denizli
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input me-1 hvs" type="checkbox" value="Balıkesir"> Balıkesir
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input me-1 hvs" type="checkbox" value="Manisa"> Manisa
                    </li>
                    <li class="list-group-item ">
                        <input class="form-check-input me-1 hvs" type="checkbox" value="Aydın"> Aydın
                    </li>
                </ul>
            </div>
            <div class="col-12">
                <label class="form-check-label" for="inputSozlesme"><span><a href="#">Sözleşme</a></span>'yi
                    okudum onaylıyorum.</label>
                <input type="checkbox" class="form-check-input" id="inputSozlesme" required>
                <!--Hizmet Verilen Şehirler Listesi-->
                <input id="inputHvsList" type="text" hidden name="iller">
            </div>
            <div class="col-12">
                <div class="d-grid g-2">
                    <input type="submit" value="Kayıt Ol" class="btn btn-secondary">
                </div>
            </div>
        </form>
    </div>