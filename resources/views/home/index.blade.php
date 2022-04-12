 @extends('layouts.bar')
 @section('content')
     <div class="col-lg-8">
         <div class="row g-4">
             @include('home.filter')
             <!--Products-->
             <div class="col-lg-10">
                 <div class="row g-2 my-2">
                     <div class="col-12">
                         <h2>İlanlar</h2>
                     </div>
                     <div class="col-12">
                         <ul class="nav nav-tabs" id="myTab" role="tablist">
                             <li class="nav-item" role="presentation">
                                 <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                     type="button" role="tab" aria-controls="home" aria-selected="true">Nakliyeci</button>
                             </li>
                             <li class="nav-item" role="presentation">
                                 <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                     data-bs-target="#contact" type="button" role="tab" aria-controls="contact"
                                     aria-selected="false">Yük Sahibi</button>
                             </li>
                         </ul>

                         <div class="tab-content" id="myTabContent">

                             <!--Products: Nakliyeci -->
                             <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                 @include('home.nakliye')
                             </div>

                             <!--Products: Yük Sahibi-->
                             <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                 @include('home.yuk')
                             </div>
                             <!--Pagination-->
                             <div class="d-flex justify-content-center mt-4">
                                 <nav aria-label="sayfalar">
                                     <ul class="pagination">
                                         <li class="page-item">
                                             <a class="page-link" href="#" aria-label="Previous">
                                                 <span aria-hidden="true">&laquo;</span>
                                             </a>
                                         </li>
                                         <li class="page-item"><a class="page-link" href="#">1</a></li>
                                         <li class="page-item"><a class="page-link" href="#">2</a></li>
                                         <li class="page-item"><a class="page-link" href="#">3</a></li>
                                         <li class="page-item">
                                             <a class="page-link" href="#" aria-label="Next">
                                                 <span aria-hidden="true">&raquo;</span>
                                             </a>
                                         </li>
                                     </ul>
                                 </nav>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 @endsection
