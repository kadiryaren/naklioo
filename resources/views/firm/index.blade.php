@extends('layouts.bar')
@section('content')
<div class="col-lg-8 mb-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="d-grid g-2 mt-2">
                <a href="index.html" class="btn btn-light text-start"><i class="bi bi-caret-left-fill"></i> Geri</a>
            </div>
        </div>
        <div class="col-12 p-4">
            <h2><i class="bi bi-building"></i> Firmalarımız</h2>
        </div>
        
        @foreach($companies as $comp)
        <div class="col-lg-6">
            <div class="bg-light border">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <img src="./assets/img/p3.jpg" class="img-fluid h-100 w-100">
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
        @endforeach
    </div>
</div>
@endsection