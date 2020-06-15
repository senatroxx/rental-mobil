@extends('layouts.app')

@section('content')
<!--== SlideshowBg Area Start ==-->
<section id="slideslow-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="slideshowcontent">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <h1>SEWA MOBIL SEKARANG JUGA!</h1>
                                <p>We are here to deliver on the trust you place in us.<br>Be well. Be Safe.</p>
                                
                                <a href="{{ route('booking.create') }}" class="btn btn-outline-warning mt-5 btn-lg">Sewa mobil sekarang juga!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== SlideshowBg Area End ==-->

    <!--== About Us Area Start ==-->
    <section id="about-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>About us</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>That wonderful feeling – you start the engine and your adventure begins…</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <!-- About Content Start -->
                <div class="col-lg-6">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="about-content">
                                <p>Di Rental Mobil, semua yang kami lakukan adalah memberi Anda kebebasan untuk menemukan lebih banyak. Kami akan memindahkan gunung untuk menemukan Anda mobil sewaan yang tepat, dan memberikan Anda pengalaman yang lancar dan tanpa kerumitan dari awal hingga selesai. Di sini Anda dapat mengetahui lebih lanjut tentang cara kami bekerja.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About Content End -->

                <!-- About Video Start -->
                <div class="col-lg-6">
                    <div class="about-image">
                        <img src="{{ asset('img/home-2-about.png') }}" alt="JSOFT">
                    </div>
                </div>
                <!-- About Video End -->
            </div>

            <!-- About Fretutes Start -->
            <div class="about-feature-area">
                <div class="row">
                    <!-- Single Fretutes Start -->
                    <div class="col-lg-4">
                        <div class="about-feature-item active">
                            <h3>Kami tahu layanan yang Anda terima penting</h3>
                            <p>Jadi kami menggunakan ulasan nyata, feedback pelanggan asli dan pengalaman kami sendiri untuk memandu Anda melalui opsi terbaik Anda.</p>
                        </div>
                    </div>
                    <!-- Single Fretutes End -->

                    <!-- Single Fretutes Start -->
                    <div class="col-lg-4">
                        <div class="about-feature-item">
                            <h3>Dan kami tetap bersama Anda setiap langkah</h3>
                            <p>Tim pelanggan kami ada di sini untuk mendukung Anda melalui perjalanan Anda, di mana pun dan kapan pun Anda membutuhkan bantuan ekstra.</p>
                        </div>
                    </div>
                    <!-- Single Fretutes End -->

                    <!-- Single Fretutes Start -->
                    <div class="col-lg-4">
                        <div class="about-feature-item">
                            <h3>Kami bekerja dengan perusahaan penyewaan mobil di seluruh dunia</h3>
                            <p>Dari nama rumah tangga hingga spesialis lokal kecil - untuk membawakan Anda mobil, pilihan, dan penawaran yang membuat perbedaan bagi perjalanan Anda.</p>
                        </div>
                    </div>
                    <!-- Single Fretutes End -->
                </div>
            </div>
            <!-- About Fretutes End -->
        </div>
    </section>
    <!--== About Us Area End ==-->

    <!--== Partner Area Start ==-->
    <div id="partner-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="partner-content-wrap">
                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="{{ asset('img/partner/partner-logo-1.png') }}" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="{{ asset('img/partner/partner-logo-2.png') }}" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="{{ asset('img/partner/partner-logo-3.png') }}" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="{{ asset('img/partner/partner-logo-4.png') }}" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="{{ asset('img/partner/partner-logo-5.png') }}" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="{{ asset('img/partner/partner-logo-1.png') }}" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="{{ asset('img/partner/partner-logo-4.png') }}" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== Partner Area End ==-->

    <!--== Services Area Start ==-->
    <section id="service-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Our Services</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

			<!-- Service Content Start -->
			<div class="row">
				<div class="col-lg-11 m-auto text-center">
					<div class="service-container-wrap">
						<!-- Single Service Start -->
						<div class="service-item">
							<i class="fa fa-taxi"></i>
							<h3>RENTAL CAR</h3>
							<p>Menyewakan Mobil</p>
						</div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						<div class="service-item">
							<i class="fa fa-cog"></i>
							<h3>CAR REPAIR</h3>
							<p>Mobil selalu dicek terlebih dahulu sebelum disewakan.</p>
						</div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						<div class="service-item">
							<i class="fa fa-map-marker"></i>
							<h3>TAXI SERVICE</h3>
							<p>Bisa antar jemput.</p>
						</div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						<div class="service-item">
							<i class="fa fa-life-ring"></i>
							<h3>LIFE INSURANCE</h3>
							<p>Mendapatkan Asuransi</p>
						</div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						<div class="service-item">
							<i class="fa fa-bath"></i>
							<h3>CAR WASH</h3>
							<p>Mobil selalu dibersihkan setiap harinya.</p>
						</div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						<div class="service-item">
							<i class="fa fa-phone"></i>
							<h3>CONSULTATION</h3>
							<p>Bisa konsultasi setiap saat.</p>
						</div>
						<!-- Single Service End -->
					</div>
				</div>
			</div>
			<!-- Service Content End -->
        </div>
    </section>
    <!--== Services Area End ==-->

    <!--== Fun Fact Area Start ==-->
    <section id="funfact-area" class="overlay section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 col-md-12 m-auto">
                    <div class="funfact-content-wrap">
                        <div class="row">
                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-smile-o"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter">{{ $countUser }}</span>+</p>
                                        <h4>HAPPY CLIENTS</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->

                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-car"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter">{{ $countMobil }}</span>+</p>
                                        <h4>CARS IN STOCK</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->

                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-bank"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter">50</span>+</p>
                                        <h4>office in cities</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Fun Fact Area End ==-->

    <!--== Choose Car Area Start ==-->
    <section id="choose-car" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Our Car</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <!-- Choose Area Content Start -->
                <div class="col-lg-12">
                    <div class="choose-ur-cars">
                        <div class="row">
                            <div class="col-lg-3">
                                <!-- Choose Filtering Menu Start -->
                                <div class="home2-car-filter">
                                    <a href="#" data-filter="*" class="active">all</a>
                                    @foreach($jenisMobil as $jm)
                                    <a href="#" data-filter="{{ '.'.$jm->nama_jenis }}">{{ $jm->nama_jenis }}</a>
                                    @endforeach
                                </div>
                                <!-- Choose Filtering Menu End -->
                            </div>

                            <div class="col-lg-9">
                                <!-- Choose Cars Content-wrap -->
                                <div class="row popular-car-gird">

                                    <!-- Single Popular Car Start -->
                                    @foreach($mobil as $mb)
                                    <div class="col-lg-6 col-md-6 {{ $mb->nama_jenis }}">
                                        <div class="single-popular-car">
                                            <div class="p-car-thumbnails">
                                                <a class="car-hover" href="{{ asset('img/car/'.$mb->gambar) }}">
                                                    <img src="{{ asset('img/car/'.$mb->gambar) }}" alt="JSOFT">
                                                </a>
                                            </div>

                                            <div class="p-car-content">
                                                <h3>
                                                    <a href="#">{{ $mb->namaMobil }}</a>
                                                    @php $hasil_rupiah = "Rp. " . number_format($mb->biaya,0,',','.'); @endphp
                                                    <span class="price"><i class="fa fa-tag"></i> {{ $hasil_rupiah.'/hari' }}</span>
                                                </h3>

                                                <h5>{{ $mb->nama_jenis }}</h5>

                                                <div class="p-car-feature">
                                                    <a href="#">{{ $mb->tahun }}</a>
                                                    <a href="#">{{ $mb->transmisi }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- Single Popular Car End -->
                                </div>
                                <!-- Choose Cars Content-wrap -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Choose Area Content End -->
            </div>
        </div>
    </section>
    <!--== Choose Car Area End ==-->

    <!--== Team Area Start ==-->
    <section id="team-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Our Creative Persons</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet elit.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="team-content">
                        <div class="row">
                            <!-- Team Tab Menu start -->
                            <div class="col-lg-4">
                                <div class="team-tab-menu">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="tab_item_1" data-toggle="tab" href="#team_member_1" role="tab" aria-selected="true">
                                                <div class="team-mem-icon">
                                                    <img src="{{ asset('img/team/team-mem-thumb-1.jpg') }}" alt="JSOFT">
                                                </div>
                                                <h5>Athhar Kautsar</h5>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Team Tab Menu End -->

                            <!-- Team Tab Content start -->
                            <div class="col-lg-8">
                                <div class="tab-content" id="myTabContent">
                                    <!-- Single Team  start -->
                                    <div class="tab-pane fade show active" id="team_member_1" role="tabpanel" aria-labelledby="tab_item_1">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="team-member-pro-pic">
                                                    <img src="{{ asset('img/team/team-mem-1.jpg') }}" alt="JSOFT">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="team-member-info text-center">
                                                    <h4>Athhar Kautsar</h4>
                                                    <h5>Developer</h5>
                                                    <span class="quote-icon"><i class="fa fa-quote-left"></i></span>
                                                    <p>You don’t need anybody to tell you who you are or what you are. You are what you are!
                                                    <footer class="blockquote-footer">John Lennon</footer>
                                                    </p>
                                                    <div class="team-social-icon">
                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Team  End -->
                                </div>
                            </div>
                            <!-- Team Tab Content End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Team Area End ==-->
@endsection
