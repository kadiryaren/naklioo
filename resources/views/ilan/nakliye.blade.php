@extends('layouts.bar')
@section('content')
<div class="col-lg-8 p-4">
<div id="formNakliyeci" >
    <form class="row g-2" method="POST" action="{{route('ilan.store')}}" enctype="multipart/form-data" >
    @csrf    
    <input type="hidden" name="ilan_türü" value="firma">
    <div class="col-12">
            <label for="inputNakBaslik" class="form-label">İlan Başlığı</label>
            <input type="text" class="form-control" id="inputNakBaslik" name="ilan_basligi" required>
        </div>
        <div class="col-12">
            <label for="inputNakUrunCesidi" class="form-label">Araç Çeşidi</label>
            <select class="form-control" id="inputNakUrunCesidi" name="arac" required>
                <option>Asansör</option>
                <option>Şoklu Tır</option>
                <option>Kamyon</option>
                <option>Tır</option>
            </select>
        </div>
        <div class="col-12">
            <label for="inputNakSehirler" class="form-label">Yük Alabileceğiniz Şehirler</label>
            <ul class="list-group" style="max-height: 128px; overflow-y: scroll; overflow-y: scroll;">
                <li class="list-group-item">
                    <input class="form-check-input me-1 yas" type="checkbox" value="İzmir"> İzmir
                </li>
                <li class="list-group-item">
                    <input class="form-check-input me-1 yas" type="checkbox" value="Denizli"> Denizli
                </li>
                <li class="list-group-item">
                    <input class="form-check-input me-1 yas" type="checkbox" value="Balıkesir"> Balıkesir
                </li>
                <li class="list-group-item">
                    <input class="form-check-input me-1 yas" type="checkbox" value="Manisa"> Manisa
                </li>
                <li class="list-group-item">
                    <input class="form-check-input me-1 yas" type="checkbox" value="Aydın"> Aydın
                </li>
            </ul>
            <!--Yük Alabileceğiniz Şehirler Listesi-->
            <input type="text" id="inputYasList" hidden>
        </div>
        <div class="col-12">
            <label for="inputNakEk" class="form-label">Ek Yük Alınılacaksa Yükün Adı</label>
            <input type="text" class="form-control" id="inputNakEk" name="ekyük" required>
        </div>
        <div class="col-6">
            <label for="inputNakNereden" class="form-label">Nereden</label>
            <select class="form-control" id="inputNakNereden" name="nereden" required>
                <option>Denizli</option>
            </select>
        </div>
        <div class="col-6">
            <label for="inputNakNereye" class="form-label">Nereye</label>
            <select class="form-control" id="inputNakNereye" name="nereye" required>
                <option>Pamukkale</option>
            </select>
        </div>
        <div class="col-12">
            <label for="inputNakTarih" class="form-label" name="tarih">Yola Çıkma Tarih Saat</label>
            <input type="datetime-local" class="form-control" id="inputNakTarih" name="tarih" >
        </div>
        <div class="col-4">
            <label for="inputNakKapak" class="form-label">Kaç Kapak Boş</label>
            <input type="number" class="form-control" id="inputNakKapak" name="kapak">
        </div>
        <div class="col-4">
            <label for="inputNakTon" class="form-label">Alabileceğiniz Yük(Ton)</label>
            <input type="number" class="form-control" id="inputYukTon" name="miktar">
        </div>
        <div class="col-4">
            <label for="inputNakFiyat" class="form-label">Fiyat</label>
            <input type="number" class="form-control" id="inputNakFiyat" name="fiyat">
        </div>
        <div class="col-12">
            <label for="inputNakYukCesit" class="form-label">Alabileceğiniz Yük Çeşidi</label>
            <ul class="list-group" style="max-height: 128px; overflow-y: scroll; overflow-y: scroll;">
                <li class="list-group-item">
                    <input class="form-check-input me-1 ayc" type="checkbox" value="Hepsi"> Hepsi
                </li>
                <li class="list-group-item">
                    <input class="form-check-input me-1 ayc" type="checkbox" value="Tarım"> Tarım
                </li>
                <li class="list-group-item">
                    <input class="form-check-input me-1 ayc" type="checkbox" value="Text"> Test
                </li>
                <li class="list-group-item">
                    <input class="form-check-input me-1 ayc" type="checkbox" value="Deneme"> Deneme
                </li>
            </ul>
            <!--Alabileceğiniz Yük Çeşidi Listesi-->
            <input type="text" id="inputAycList" hidden>
        </div>
        <div class="col-12">
            <label for="inputNakTelefon" class="form-label">Telefon</label>
            <input type="text" class="form-control" id="inputNakTelefon" required>
        </div>
        <div class="col-12">
            <label for="inputNakFoto" class="form-label">Fotoğraflar</label>
            <input class="form-control" type="file" id="inputNakFoto" name="image[]" multiple>
        </div>
        <div class="col-12">
            <label for="inputNakAciklama" class="form-label">Ek Açıklama</label>
            <textarea id="inputNakAciklama" class="form-control" rows="5" name="aciklama"></textarea>
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
