@extends('layouts.main')

<main id="main">
    <section class="inner-page min-vh-100 d-flex flex-column align-items-center justify-content-center pb-2">
      <div class="container">
        <div class="row d-flex flex-column align-items-center justify-content-center">
          <div class="col-lg-4 col-md-6">
            
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
      
            @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('loginError') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
          </div>
      </div>
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
            <div class="d-flex justify-content-center py-4">
              <a href="" class="logo d-flex align-items-center w-auto">
                <img src="/img/logo-footer.png" alt="loginTraderVibes" class="d-none d-lg-block" />
              </a>
            </div>
            <div class="card mb-3 mt-4">
              <div class="card-body">
                <div class="pt-4 pb-2">
                  <h5 class="card-title text-center pb-0 fs-4">Masuk ke Akun Anda</h5>
                  <p class="text-center small">Masukkan email dan password untuk masuk</p>
                </div>
                <form action="/login" class="row g-3" method="post">
                    @csrf
                  <div class="col-12">
                      <label for="email" class="mb-2">Email</label>
                      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="nama@contoh.com" autofocus required value="{{ old('email') }}" />
                      @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="col-12">
                        <label for="password" class="my-2">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required />
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary w-100 mt-3" type="submit">Masuk</button>
                    </div>
                    <div class="col-12">
                        <small class="d-block text-center mt-3">Belum memiliki akun? <a href="/register">Daftar</a></small>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>