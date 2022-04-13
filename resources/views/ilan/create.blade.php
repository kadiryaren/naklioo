@extends('layouts.bar')
@section('content')
<!--Main-->
<div class="col-lg-8 p-4">
                <div class="row g-2">
                    <div class="col-12">
                        <div class="d-grid g-2 mb-4">
                            <a href="index.html" class="btn btn-light text-start"><i class="bi bi-caret-left-fill"></i> Geri</a>
                        </div>
                    </div>
                    <div class="col-12">
                        <h2><i class="bi bi-pencil-square"></i> İlan Ekle</h2>
                    </div>
                    
                </div>
                @if($user->role == "Firma")
                    @include('ilan.nakliye')
                @else
                    @include('ilan.yük')
                @endif
</div>
@endsection