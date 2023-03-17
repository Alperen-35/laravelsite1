@extends('front.layouts.master')
@section('content')
  <div class="col-md-4 offset-md-4 rounded shadow mb-5 " style="margin-top:200px;">
    <h2 class="text-center text-primary p-3">Üye Giriş</h2>
    @if ($errors->any())
    <div class="alert alert-danger" role="alert">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>
    @endif
    <form action="{{route('registerPost')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Adınız Soyadınız</label>
            <input type="name" class="form-control" id="name" name="name" placeholder="Adınız Soyadınız" required>
          </div>
        <div class="form-group">
          <label for="exampleInputEmail1">E-Posta Adresiniz</label>
          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="E-Posta Adresiniz" required>
        </div>
        <div class="form-group">
          <label for="password">Şifreniz</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Şifreniz" required>
        </div>
        <div class="form-group">
            <label for="password">Şifreniz</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Şifrenizi tekrar giriniz" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block btn-sm">Kayıt Ol</button>
        <br>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center">
                <a class="text-info p-3" href="{{url('login')}}">Giriş Yap</a>
            </div>
        </div>
        <br>
      </form>
  </div>
@endsection
