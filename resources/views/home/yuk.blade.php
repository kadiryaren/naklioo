@foreach ($load as $ilan)
    <div class="bg-light mt-2 border" data-aos="flip-up">
        <div class="row g-0">
            <div class="col-12 col-md-3 col-lg-2">
                <img src="https://via.placeholder.com/512x512" class="img-fluid w-100 h-100">
            </div>
            <div class="col-12 col-md-9 col-lg-10">
                <div class="row g-0">
                    <div class="col-12 p-1 bg-secondary text-light text-center">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, adipisci!
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
                                İstabul/ İzmir
                            </div>
                            <div class="col-1">
                                6
                            </div>
                            <div class="col-4">
                                Asansörlü
                            </div>
                            <div class="col-3">
                                Tır
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center bg-secondary text-light p-1">
                <span class="d-none d-sm-inline">İlan Tarihi:</span>
                <span class="d-sm-none">İ.T:</span>
                <span>02.04.22</span>
                <span class="d-none d-sm-inline">/ Yola Çıkış Tarihi:</span>
                <span class="d-sm-none">Ç.T:</span>
                <span>09.06.22</span>
            </div>
        </div>
    </div>
@endforeach