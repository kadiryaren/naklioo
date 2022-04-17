@foreach ($load as $ilan)
   <a href="{{route('ilan.show',$ilan->id)}}" style="text-decoration:none;color:black;">>
   <div class="bg-light mt-2 border" data-aos="flip-up">
        <div class="row g-0">
            <div class="col-12 col-md-3 col-lg-2">
            @foreach($ilan->photos as $photo) 
                <img src="{{url('/storage/'.$photo->fotograf)}}" class="d-block w-100">
            @endforeach
            </div>
            <div class="col-12 col-md-9 col-lg-10">
                <div class="row g-0">
                    <div class="col-12 p-1 bg-secondary text-light text-center">
                        {{$ilan->ilan_basligi}}
                    </div>
                    <div class="col-12 text-center p-1">
                        <div class="row">
                            <div class="col-4">
                                <span class="d-none d-sm-inline">Nereden/ Nereye
                                </span>
                                <i class="bi bi-arrow-left-right"></i>
                            </div>
                            <div class="col-1 col-sm-2">
                                <span class="d-none d-sm-inline">Kapak </span>
                                <i class="bi bi-boxes"></i>
                            </div>
                            <div class="col-4 col-sm-3">
                                <span class="d-none d-sm-inline">Ürün Çeşidi </span>
                                <i class="bi bi-truck"></i>
                            </div>
                            <div class="col-3">
                                <span class="d-none d-sm-inline">Araç Çeşidi</span>
                                <i class="bi bi-gear"></i>
                            </div>
                            <div class="col-12">
                                <hr class="m-0">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center py-4">
                        <div class="row g-0">
                            <div class="col-4">
                                {{$ilan->nereden}}/ {{$ilan->nereye}}
                            </div>
                            <div class="col-1">
                            {{$ilan->kapak}}
                            </div>
                            <div class="col-4">
                            {{$ilan->ürün_cesit}}
                            </div>
                            <div class="col-3">
                            {{$ilan->arac}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center bg-secondary text-light p-1">
                <span class="d-none d-sm-inline">İlan Tarihi:</span>
                <span class="d-sm-none">İ.T:</span>
                <span>{{$ilan->created_at}}</span>
                <span class="d-none d-sm-inline">/ Yola Çıkış Tarihi:</span>
                <span class="d-sm-none">Ç.T:</span>
                <span>{{$ilan->tarih}}</span>
            </div>
        </div>
    </div>
   </a>
@endforeach