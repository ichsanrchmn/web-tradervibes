@extends('layouts.main')
<main id="main">
@include('partials.breadcrumbs')

<section id="why-us" class="why-us section-bg">
  <div class="container-fluid" data-aos="fade-up">
    <div class="row">
      <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch order-2 order-lg-1">
        <div class="content">
          <h3><strong>Edukasi Trading Forex</strong> dengan sistem terpadu</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic natus alias cumque inventore molestiae? Quae assumenda incidunt minima officiis eaque?</p>
        </div>

        <div class="accordion-list">
          <ul>
            <li>
              <a data-bs-toggle="collapse" data-bs-target="#accordion-list-1" class="collapsed"><span>1. </span>Diskusi bersama mentor profesional <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-1" class="collapse" data-bs-parent=".accordion-list">
                <p>TraderVibes mendedikasikan semuanya untuk mendukung trader menghasilkan income secara konsisten. Dengan kepercayaan dari total member 10.000 orang</p>
              </div>
            </li>

            <li>
              <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>2. </span>Mentoring menggunakan teknik andalan <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                <p>Lebih fleksibel. Tanpa syarat deposit di broker, trader sudah bisa memilih tools yang disukai untuk mendukung transaksi market harian.</p>
              </div>
            </li>

            <li>
              <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"
                ><span>3. </span>Diarahkan hingga menjadi trader handal <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i
              ></a>
              <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                <p>
                  Sesuaikan style tradingmu dengan beragam tools pendukung yang lengkap di marketplace trading TraderVibes, demi mencapai profit impian
                </p>
              </div>
            </li>

            <li>
              <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"
                ><span>4. </span>Komunitas Edukasi <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i
              ></a>
              <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                <p>
                  Sesuaikan style tradingmu dengan beragam tools pendukung yang lengkap di marketplace trading TraderVibes, demi mencapai profit impian
                </p>
              </div>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style="background-image: url('/img/edukasi/edukasi3.png')" data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
    </div>
  </div>
{{-- End of Content --}}

  <div class="container-fluid mt-3" data-aos="fade-up">
    <div class="row justify-content-center">
      <div class="col-lg-9 d-flex flex-column justify-content-center">
        <div class="content">
          <h3 class="text-center">Siap menjadi <strong>Trader Pro</strong> bersama <strong>TraderVibes</strong></h3>
          <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic natus alias cumque inventore molestiae? Quae assumcentera incidunt minima officiis eaque?</p>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-2 d-flex justify-content-center">
        <a href="" class="btn btn-warning text-center text-white fw-semibold">Gabung Sekarang</a>
      </div>
    </div>
  </div>
  {{-- End of Content --}}
</section>
</main>