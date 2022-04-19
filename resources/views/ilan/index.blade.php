@extends('layouts.bar')
@section('content')
<div class="col-lg-8 p-4">
    <h1>İlan Türü seçin</h1>
    <a href="{{route('ilan.tur','nakliye')}}"> <button>Nakliye</button></a>
    <a href="{{route('ilan.tur','bireysel')}}"><button>Yük</button></a>               
</div>
@endsection