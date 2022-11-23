@extends('layouts.main')
@section('container')
    
    <section class="inner-page min-vh-100 d-flex flex-column align-items-center justify-content-center pb-2">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
            <div class="d-flex justify-content-center py-4">
              <a href="" class="logo d-flex align-items-center w-auto">
                <img src="/img/logo-footer.png" alt="signUpTraderVibes" class="d-none d-lg-block" />
              </a>
            </div>
            <div class="card mb-3 mt-4">
              <div class="card-body">
                <div class="pt-4 pb-2">
                  <h5 class="card-title text-center pb-0 fs-4">Form Registrasi</h5>
                  <p class="text-center small">Isi semua bidang yang tertera</p>
                </div>
                <form action="/register" class="row g-3" method="post">
                    @csrf
                  <div class="col-12">
                    <label for="name" class="mb-2">Nama</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nama Lengkap" autofocus required value="{{ old('name') }}" />
                    @error('name')
                        <div class="invalid-feedback">
                        {{ $message }}
                        </div>
                    @enderror
                  </div>
                  <div class="col-12">
                    <label for="email" class="my-2">Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="nama@contoh.com" required value="{{ old('email') }}" />
                    @error('email')
                        <div class="invalid-feedback">
                        {{ $message }}
                        </div>
                    @enderror
                  </div>
                  <div class="col-12">
                    <label for="username" class="my-2">Username</label>
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" required value="{{ old('username') }}" />
                    @error('username')
                        <div class="invalid-feedback">
                        {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <div class="col-12">
                        <label for="password" class="my-2">Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required />
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary btn-lg w-100 mt-3" type="submit">Daftar</button>
                    </div>
                    <div class="col-12">
                        <small class="d-block text-center mt-3">Sudah memiliki akun? <a href="/login">Masuk</a></small>
                    </div>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
