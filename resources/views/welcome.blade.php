<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SPK - Semen</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    {{-- <link href="{{ asset('Arsha/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link href="{{ asset('Arsha/assets/img/favicon.png') }}" rel="icon"> --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('imagessite.webmanifest') }}">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('Arsha/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('Arsha/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Arsha/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('Arsha/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Arsha/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Arsha/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('Arsha/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet"> --}}
    <!-- Template Main CSS File -->
    <link href="{{ asset('Arsha/assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="#">SPK-SEMEN</a></h1>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#daftar-produk">Produk</a></li>
                    <li><a class="nav-link scrollto" href="#Halaman-Rekomendasi">Rekomendasi</a></li>
                    <li><a class="nav-link scrollto" href="#Hasil-Rekomendasi">Hasil Rekomendasi</a></li>
                    <li><a class="nav-link scrollto" href="#skills">Tentang</a></li>
                    <li><a class="getstarted scrollto" href="{{ route('login') }}">Login as Admin</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Sistem Pendukung Keputusan</h1>
                    <h2>Metode Simple Additive Weighting</h2>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('Arsha/assets/img/hero-img.png') }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container">

                <div class="row" data-aos="zoom-in">

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('Arsha/assets/img/clients/umn.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('Arsha/assets/img/clients/laravel_logo_icon.png') }}" class="img-fluid"
                            alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('Arsha/assets/img/clients/pusathosting-logo-2016.png') }}" class="img-fluid"
                            alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('Arsha/assets/img/clients/visual_studio_code.png') }}" class="img-fluid"
                            alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('Arsha/assets/img/clients/overleaf.png') }}" class="img-fluid"
                            alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('Arsha/assets/img/clients/GitHub-logo.png') }}" class="img-fluid"
                            alt="">
                    </div>

                </div>

            </div>
        </section><!-- End Cliens Section -->

        <!-- ======= Daftar Produk Section ======= -->
        <section id="daftar-produk" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Daftar Produk</h2>
                </div>

                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>Gambar</th>
                            <th>Harga</th>
                            <th>Tekstur</th>
                            <th>Waktu Pengerasan</th>
                            <th>Warna</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($SemenList as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->nama_semen }}</td>
                                <td><img src="{{ asset("gambar-semen/{$data->gambar_semen}") }}" width="50">
                                </td>
                                <td>{{ $data->harga_semen }}</td>
                                <td>{{ $data->tekstur_semen }}</td>
                                <td>{{ $data->waktu_semen }}</td>
                                <td>{{ $data->warna_semen }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

        </section><!-- End About Us Section -->

        <!-- ======= Halaman Rekomendasi Default ======= -->
        <section id="Rekomendasi-Default" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Halaman Lihat Rekomendasi</h2>
                </div>

                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama Kriteria</th>
                            <th>Attribut</th>
                            <th>Bobot</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($KriteriaList as $row)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $row->nama_kriteria }}</td>
                                <td>{{ $row->attribut }}</td>
                                <td>{{ $row->bobot }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
        </section><!-- Halaman Rekomendasi Default -->

        <!-- ======= Halaman Rekomendasi Section ======= -->
        <section id="Halaman-Rekomendasi" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Input Rekomendasi</h2>
                </div>

                @foreach ($KriteriaList as $kriteria)
                    <form action="{{ route('kriteria.update', $kriteria->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama">Nama Kriteria {{ $kriteria->nama_kriteria }} </label>
                            <input type="text" class="form-control" name="nama_kriteria"
                                value="{{ $kriteria->nama_kriteria }}">

                            @error('nama_kriteria')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama">Attribut Kriteria {{ $kriteria->nama_kriteria }}</label>
                            <select name="attribut" id="attribut" class="form-control" required>
                                <option {{ $kriteria->attribut == 'Benefit' ? 'selected' : '' }}>Benefit
                                </option>
                                <option {{ $kriteria->attribut == 'Cost' ? 'selected' : '' }}>Cost</option>
                            </select>

                            @error('attribut')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama">Bobot Kriteria {{ $kriteria->nama_kriteria }}</label>
                            <select name="bobot" id="bobot" class="form-control" required>
                                <option value="5" {{ $kriteria->bobot == '5' ? 'selected' : '' }}>Sangat
                                    Penting
                                </option>
                                <option value="4" {{ $kriteria->bobot == '4' ? 'selected' : '' }}>Penting
                                </option>
                                <option value="3" {{ $kriteria->bobot == '3' ? 'selected' : '' }}>Netral
                                </option>
                                <option value="2" {{ $kriteria->bobot == '2' ? 'selected' : '' }}>Tidak Penting
                                </option>
                                <option value="1" {{ $kriteria->bobot == '1' ? 'selected' : '' }}>Sangat Tidak
                                    Penting
                                </option>
                            </select>

                            @error('bobot')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button class="btn btn-sm btn-primary">Simpan</button>
                    </form>
                @endforeach
            </div>
        </section><!-- Halaman Rekomendasi Section -->

        <!-- ======= Halaman Hasil Section ======= -->
        <section id="Hasil-Rekomendasi" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Hasil Penilaian</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-6">
                        <p>
                            Langkah dalam menentukan hasil penilaian dalam Simple Additive Weighting.
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Langkah 1 : Buat matriks keputusan yang berisi
                                semua
                                alternatif yang akan dievaluasi dan nilai-nilai kriteria yang sesuai untuk setiap
                                alternatif.</li>
                            <li><i class="ri-check-double-line"></i> Langkah 2 : Normalisasikan matriks keputusan
                                dengan mengubah
                                nilai-nilai dalam matriks menjadi skala relatif antara 0 dan 1. Hal ini dapat dilakukan
                                dengan menggunakan teknik normalisasi seperti Min-Max atau Skala Preferensi.</li>
                            <li><i class="ri-check-double-line"></i> Langkah 3 : Urutkan alternatif berdasarkan nilai
                                total dari
                                yang tertinggi hingga terendah. Alternatif dengan nilai total tertinggi akan dianggap
                                sebagai pilihan terbaik berdasarkan kriteria yang telah ditentukan.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>
                            Itulah langkah-langkah dalam penggunaan algoritma Simple Additive Weighting. Hasilnya dapat
                            langsung dilihat melalui link ini.
                        </p>
                        <a href="{{ route('perhitungan.index') }}" class="btn-learn-more">Lihat Hasil Rekomendasi</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= End Halaman Hasil Section ======= -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{ asset('Arsha/assets/img/Giovanni.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                        <h3>Tentang Saya</h3>
                        <p class="fst-italic">
                            Giovanni Kurniawan - 00000028665
                        </p>
                        <p>
                            Saya adalah seorang profesional yang berpengalaman dan berdedikasi dalam industri ini. Saya
                            memiliki pengetahuan yang mendalam dan keterampilan yang kuat dalam bidang ini, dan saya
                            selalu siap untuk menghadapi tantangan baru.
                        </p>

                        <div class="skills-content">

                            <div class="progress">
                                <span class="skill">HTML <i class="val">100%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">CSS <i class="val">90%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">JavaScript <i class="val">75%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="75"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Photoshop <i class="val">55%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="55"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End Skills Section -->


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
            </div>
        </div>

        <div class="container text-center footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Giovanni Kurniawan-00000028665</span></strong>. All Rights Reserved 2023
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('Arsha/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('Arsha/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Arsha/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('Arsha/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('Arsha/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('Arsha/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('Arsha/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('Arsha/assets/js/main.js') }}"></script>

</body>

</html>
