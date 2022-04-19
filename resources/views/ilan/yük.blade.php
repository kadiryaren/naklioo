@extends('layouts.bar')
@section('content')
<div class="col-lg-8 p-4">
<div id="formYukSahibi">
    <form class="row g-2" method="POST" action="{{route('ilan.store')}}" enctype="multipart/form-data" >
        @csrf
            <input type="hidden" name="ilan_türü" value="bireysel">
        <div class="col-12">
            <label for="inputYukUrunCesidi" class="form-label">Ürün Çeşidi</label>
            <select class="form-control" id="inputYukUrunCesidi" name="ürün_cesit"required>
                <option>Tarım</option>
                <option>Fabrika</option>
                <option>Hayvan</option>
                <option>Sıvı</option>
                <option>Sıvı</option>
                <option>Sıvı</option>
            </select>
        </div>
        <div class="col-12">
            <label for="inputYukAd" class="form-label">Ürünün Tam Olarak Adını Yazınız</label>
            <input type="text" class="form-control" id="inputYukAd" name="ürün"required>
        </div>
        <div class="col-12">
            <label for="inputYukBaslik" class="form-label">İlan Başlığı</label>
            <input type="text" class="form-control" id="inputYukBaslik" name="ilan_basligi"required>
        </div>
        <div class="col-6">
            <label for="inputYukNereden" class="form-label">Nereden</label>
            <select class="form-control" id="inputYukNereden" name="nereden"required>
                <option>Denizli</option>
            </select>
        </div>
        <div class="col-6">
            <label for="inputYukNereye" class="form-label">Nereye</label>
            <select class="form-control" id="inputYukNereye" name="nereye" required>
                <option>Pamukkale</option>
            </select>
        </div>
        <div class="col-6">
            <label for="inputYukCesit" class="form-label">İstediğiniz Araç Çeşidi</label>
            <select class="form-control" id="inputYukCesit" name="arac" required>
                <option>Farketmez</option>
                <option>Asansörlü</option>
                <option>Şoklu</option>
                <option>Kamyon</option>
                <option>Tır</option>
            </select>
        </div>
        <div class="col-6">
            <label for="inputYukUst" class="form-label">Kasa Tipi</label>
            <select class="form-control" id="inputYukUst" name="kasa" required>
                <option>Açık</option>
                <option>Kapalı</option>
            </select>
        </div>
        <div class="col-4">
            <label for="inputYukFiyat" class="form-label">Aklınızdaki Fiyat</label>
            <input type="number" class="form-control" name="fiyat" id="inputYukFiyat">
        </div>
        <div class="col-4">
            <label for="inputYukTon" class="form-label">Kaç Ton</label>
            <input type="number" class="form-control" id="inputYukTon"name="miktar">
        </div>
        <div class="col-4">
            <label for="inputYukKapak" class="form-label">Kaç Kapak</label>
            <input type="number" class="form-control" id="inputYukKapak" name="kapak">
        </div>
        <div class="col-12">
            <label for="inputYukTarih" class="form-label">Yükün Gideceği Tarih Saat</label>
            <input type="datetime-local" class="form-control" id="inputTarih" name="tarih">
        </div>
        <div class="col-12">
            <label for="inputYukTelefon" class="form-label">Telefon</label>
            <input type="text" class="form-control" id="inputYukTelefon" name="telefon" required>
        </div>
        <div class="col-12">
            <label for="inputYukFoto" class="form-label">Fotoğraflar</label>
            <input type="file" class="form-control" type="file" id="inputYukFoto" name="image[]" multiple>
        </div>
        <div class="col-12">
            <label for="inputYukAciklama" class="form-label">Ek Açıklama</label>
            <textarea id="inputYukAciklama" class="form-control" rows="5" name="aciklama" ></textarea>
        </div>
        <div class="col-12">
            <div class="d-grid g-2">
                <input type="submit" value="İlan Ekle" class="btn btn-secondary">
            </div>
        </div>
    </form>
</div>
</div>
@endsection