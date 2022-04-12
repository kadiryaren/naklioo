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
                <label for="inputTarih" class="form-label">Yola Çıkış Tarihi</label>
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
                <label for="inputUst" class="form-label">Kasa Tipi</label>
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
                <div class="g-2 d-grid">
                    <input class="btn btn-light" type="submit" value="Filtrele">
                </div>
            </div>
        </form>
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
                    <label for="inputTarih" class="form-label">Yola Ç. Tarihi</label>
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
                    <label for="inputUst" class="form-label">Kasa Tipi</label>
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
                    <div class="g-2 d-grid">
                        <input class="btn btn-dark" type="submit" value="Filtrele">
                    </div>
                </div>
            </form>
        </div>
    </div>
