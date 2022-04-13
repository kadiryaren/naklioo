@extends('layouts.bar')
@section('content')
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
    <div>
    <div>
    @include('register.bireysel')
    @include('register.firma')
    </div>
    <div class="d-grid g-2 my-2">
        <a href="javascript:history.back()" class="btn btn-secondary"><i class="bi bi-caret-left-fill"></i> Geri</a>
    </div>
    </div>
    
<script>
        const inputTur = document.getElementById('inputTur')
        const formFirma = document.getElementById('formFirma')
        const formBireysel = document.getElementById('formBireysel')
        
        inputTur.value = "bireysel"

        inputTur.addEventListener("change", function() {
            formBireysel.classList.toggle("d-none")
            formFirma.classList.toggle("d-none")

            
        })
    </script>
@endsection