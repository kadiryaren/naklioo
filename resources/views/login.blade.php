@extends('layouts.bar')
@section('content')
 <!--Main-->
            <div class="col-lg-8 p-4">
                <div class="d-flex justify-content-center mt-4" style="margin-bottom: 300px">
                    <form method="POST" action="{{route('login')}}" class="row g-2" style="max-width: 512px">
                    @csrf    
                    <div class="col-12">
                            <h2><i class="bi bi-door-open"></i> Giriş Yap</h2>
                        </div>
                        <div class="col-12">
                            <label for="inputEmail" class="form-label">Email</label>
                            <input type="email" id="inputEmail" class="form-control" name="email" required>
                        </div>
                        <div class="col-12">
                            <label for="inputSifre" class="form-label">Şifre</label>
                            <input type="password" class="form-control" id="inputSifre" name="password" required>
                        </div>
                        <div class="col-12">
                            <div class="d-grid g-2">
                                <input type="submit" value="Giriş Yap" class="btn btn-secondary btn-lg">
                                <a href="{{route('register')}}" class="btn btn-outline-secondary mt-2">Kayıt Ol</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
@endsection