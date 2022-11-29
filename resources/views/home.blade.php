@extends('layouts.main')

<section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-3 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Trade With Your Vibes!</h1>
          <p>Marketplace trading forex pertama di Indonesia, dengan beragam pilihan layanan yang mengutamakan rasa aman dan nyaman demi mencapai profit impian</p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="/register" class="btn-get-started scrollto">Mulai Sekarang</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="/img/hero-img.png" class="img-fluid animated" alt="" />
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">
    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in">
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="/img/clients/client-1.png" class="img-fluid" alt="" />
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="/img/clients/client-2.png" class="img-fluid" alt="" />
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="/img/clients/client-3.png" class="img-fluid" alt="" />
          </div>
        </div>
      </div>
    </section>
    <!-- End Clients Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Tentang Kami</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>TraderVibes merupakan marketplace khusus trading forex pertama di Indonesia yang dibentuk secara independen tanpa terikat pada broker tertentu.</p>
            <ul>
              <li><i class="ri-task-fill"></i> 10.000 Member Aktif</li>
              <li><i class="ri-task-fill"></i> Bebas Broker</li>
              <li><i class="ri-task-fill"></i> Fasilitas dan Produk Trading Terlengkap</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Menyediakan berbagai fasilitas dan produk pendukung untuk para trader khususnya di Indonesia dalam memperoleh profit yang konsisten di market forex. Salah satunya adalah edukasi, signal, berbagai tools & indikator jitu, dan
              juga sistem automasi seperti produk Expert Advisor.<br /><br />
              Komitmen jangka panjang Trader Vibes adalah untuk menciptakan peluang pertumbuhan koneksi trader Indonesia yang luas dan sepanjang masa, baik untuk kolaborator kami, seorang Edukator, Analis Independen. Dan yang paling
              penting, audiens kami dari level pemula hingga professional.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    {{-- <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch order-2 order-lg-1">
            <div class="content">
              <h3>Wujudkan sekarang! <strong>Passive income dengan profit konsisten</strong></h3>
              <p>Apa yang trader cari, kami punya segalanya! Sesuaikan style trading anda bersama layanan dan produk yang telah dirasakan manfaatnya secara langsung oleh puluhan ribu trader di Indonesia</p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-1" class="collapsed"><span>1. </span>10.000 Member aktif <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse" data-bs-parent=".accordion-list">
                    <p>TraderVibes mendedikasikan semuanya untuk mendukung trader menghasilkan income secara konsisten. Dengan kepercayaan dari total member 10.000 orang</p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>2. </span>Broker Bebas <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>Lebih fleksibel. Tanpa syarat deposit di broker, trader sudah bisa memilih tools yang disukai untuk mendukung transaksi market harian.</p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"
                    ><span>3. </span>Fasilitas dan produk trading terlengkap <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i
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

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style="background-image: url('/img/why-us.png')" data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>
      </div>
    </section> --}}
    <!-- End Why Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Services</h2>
          <p>
            Adanya perkembangan teknologi dan informasi yang cepat, membentuk banyak kelompok trader yang memiliki keunikan tersendiri. Untuk itu, TraderVibes hadir sebagai penyedia layanan trading forex untuk membantu menghasilkan trader
            berkualitas yang berstandar global.
          </p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-chart"></i></div>
              <h4><span>Lorem Ipsum</span></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><span>Sed ut perspici</span></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><span>Magni Dolores</span></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-support"></i></div>
              <h4><span>Nemo Enim</span></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Call To Action</h3>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>
      </div>
    </section>
    <!-- End Cta Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Team</h2>
          <p>
            Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste
            officiis commodi quidem hic quas.
          </p>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="member d-flex align-items-start" data-aos="zoom-in">
              <div class="pic"><img src="/img/team/team-1.jpg" class="img-fluid" alt="" /></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                <div class="social">
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start" data-aos="zoom-in">
              <div class="pic"><img src="/img/team/team-2.jpg" class="img-fluid" alt="" /></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                <div class="social">
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in">
              <div class="pic"><img src="/img/team/team-3.jpg" class="img-fluid" alt="" /></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                <div class="social">
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in">
              <div class="pic"><img src="/img/team/team-4.jpg" class="img-fluid" alt="" /></div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                <div class="social">
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Pricing</h2>
          <p>
            Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste
            officiis commodi quidem hic quas.
          </p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3>Free Plan</h3>
              <h4><sup>$</sup>0<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
                <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h3>Business Plan</h3>
              <h4><sup>$</sup>29<span>per month</span></h4>
              <ul>
                <li><i class="ri-check-line"></i> Quam adipiscing vitae proin</li>
                <li><i class="ri-check-line"></i> Nec feugiat nisl pretium</li>
                <li><i class="ri-check-line"></i> Nulla at volutpat diam uteera</li>
                <li><i class="ri-check-line"></i> Pharetra massa massa ultricies</li>
                <li><i class="ri-check-line"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>Developer Plan</h3>
              <h4><sup>$</sup>49<span>per month</span></h4>
              <ul>
                <li><i class="ri-check-line"></i> Quam adipiscing vitae proin</li>
                <li><i class="ri-check-line"></i> Nec feugiat nisl pretium</li>
                <li><i class="ri-check-line"></i> Nulla at volutpat diam uteera</li>
                <li><i class="ri-check-line"></i> Pharetra massa massa ultricies</li>
                <li><i class="ri-check-line"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Pricing Section -->
  </main>
  <!-- End #main -->