<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('partials/head.php') ?>
</head>

<body id="page-top">
	<div id="wrapper">
		<!-- load sidebar -->
		<?php $this->load->view('partials/sidebar.php') ?>

		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content" data-url="<?= base_url('pembeli') ?>">
				<!-- load Topbar -->
				<?php $this->load->view('partials/topbar.php') ?>

				<div class="container-fluid">
				<div class="clearfix">
					<div class="float-left">
						<h1 class="h3 m-0 text-gray-800"><?= $title ?></h1>
					</div>
				</div>
				<hr>
				<?php if ($this->session->flashdata('success')) : ?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<?= $this->session->flashdata('success') ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php elseif($this->session->flashdata('error')) : ?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<?= $this->session->flashdata('error') ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php endif ?>
				<div class="row">

		           
                


    <main id="main">

    <section id="hero" class="hero d-flex align-items-center section-bg">
        <div class="container">
            <div class="row justify-content-between gy-5">
                <div
                    class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                    <h2 data-aos="fade-up">TEMANI HARI MU DENGAN<br>SEDUHAN TEH BERKUALITAS</h2>
                    <p data-aos="fade-up" data-aos-delay="100">a Cup of Tisane, Makes Everything Better.
                        P-IRT and Halal MUI approved. </p>
                    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        
                    </div>
                </div>
                <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                    <img src="assets/img/Tea.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
                </div>
            </div>
        </div>
    </section><!-- End Hero Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>About Us</h2>
                    <p>Learn More <span>About Us</span></p>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/bg.jpg) ;"
                        data-aos="fade-up" data-aos-delay="150">
                        <div class="call-us position-absolute">
                            <h4>Ikuti Perjalanan kami</h4>
                            <p>@Seduh.tisane</p>
                        </div>
                    </div>
                    <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
                        <div class="content ps-0 ps-lg-5">
                            <p class="fst-italic">
                                SEDUH adalah Perusahaan Teh & Tisane Indonesia, yang menawarkan berbagai macam teh,
                                berbagai jenis tisane, dan aksesoris terkait. Kami menggunakan bahan-bahan berkualitas
                                baik yang dikemas dengan hati-hati.
                            <ul>
                                <li><i class="bi bi-check2-all"></i> Campuran
                                    khas 100% alami.</li>
                                <li><i class="bi bi-check2-all"></i> tanpa bahan pengawet
                                    atau bahan buatan</li>
                                <li><i class="bi bi-check2-all"></i> P-IRT and Halal MUI approved.</li>
                            </ul>
                            <p>
                                Campuran
                                khas kami 100% alami dan dibuat dengan tangan tanpa bahan pengawet
                                atau bahan buatan untuk memastikan setiap cangkir menghadirkan pengalaman minum yang
                                luar biasa, dan memberikan gaya hidup yang lebih baik.
                            </p>

                          
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->





        <!-- ======= Menu Section ======= -->
        <section id="menu" class="menu">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Our Product</h2>
                    <p>Check Our <span>Seduh Product</span></p>
                </div>

                <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
                            <h4>Premium Tea Bag</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
                            <h4>Tea Blinde series</h4>
                        </a><!-- End tab nav item -->

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
                            <h4>Lunch</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
                            <h4>Dinner</h4>
                        </a>
                    </li><!-- End tab nav item -->

                </ul>

                <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

                    <div class="tab-pane fade active show" id="menu-starters">

                        <div class="tab-header text-center">
                            <p>Menu</p>
                            <h3>Premium Tea</h3>
                        </div>

                        <div class="row gy-5">

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/PremiumTea1.jpeg" class="glightbox"><img
                                        src="assets/img/menu/PremiumTea1.jpeg" class="menu-img img-fluid" alt=""></a>
                                <h4>Blue Jasmine</h4>
                                <p class="ingredients">
                                    (Green Tea + Jasmine + Blue Pea Flower)
                                </p>
                                <a href="<?php echo site_url('transaksi'); ?>" type="button"
                                    class="btn btn-primary btn-lg">Rp149.000</a>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/PremiumTea2.jpeg" class="glightbox"><img
                                        src="assets/img/menu/PremiumTea2.jpeg" class="menu-img img-fluid" alt=""></a>
                                <h4>Beryful</h4>
                                <p class="ingredients">
                                    (Black tea + Roselle + Rosehip + Elderberry + Flavour)
                                </p>
                                <a href="<?php echo site_url('transaksi'); ?>" type="button"
                                    class="btn btn-primary btn-lg">Rp187.500</a>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/PremiumTea3.jpeg" class="glightbox"><img
                                        src="assets/img/menu/PremiumTea3.jpeg" class="menu-img img-fluid" alt=""></a>
                                <h4>Zesty Ginger</h4>
                                <p class="ingredients">
                                    (Organic Black Tea + Lemongrass + Ginger)
                                </p>
                                <a href="<?php echo site_url('transaksi'); ?>" type="button"
                                    class="btn btn-primary btn-lg">Rp.149.000</a>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/PremiumTea4.jpeg" class="glightbox"><img
                                        src="assets/img/menu/PremiumTea4.jpeg" class="menu-img img-fluid" alt=""></a>
                                <h4>Sunset Breeze</h4>
                                <p class="ingredients">
                                    (Green Tea + Chamomile + Peppermint + Safflower)
                                </p>
                                <a href="<?php echo site_url('transaksi'); ?>" type="button"
                                    class="btn btn-primary btn-lg">Rp187.500</a>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/PremiumTea5.jpeg" class="glightbox"><img
                                        src="assets/img/menu/PremiumTea5.jpeg" class="menu-img img-fluid" alt=""></a>
                                <h4>Rosy Moonlight</h4>
                                <p class="ingredients">
                                    (Silver Needle White Tea + Rose + Jasmine)
                                </p>
                                <a href="<?php echo site_url('transaksi'); ?>" type="button"
                                    class="btn btn-primary btn-lg">Rp187.500</a>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/PremiumTeea6.jpeg" class="glightbox"><img
                                        src="assets/img/menu/PremiumTea6.jpeg" class="menu-img img-fluid" alt=""></a>
                                <h4>Coco Pandan</h4>
                                <p class="ingredients">
                                    (Green Tea + Coconut + Pandan Leaf + Stevia Leaf)
                                </p>
                                <a href="<?php echo site_url('transaksi'); ?>" type="button"
                                    class="btn btn-primary btn-lg">Rp137.500</a>
                            </div>
                        </div>
                    </div><!-- End Starter Menu Content -->


                    <div class="tab-pane fade" id="menu-breakfast">

                        <div class="tab-header text-center">
                            <p>Menu</p>
                            <h3>Tea Blend Series</h3>
                        </div>

                        <div class="row gy-5">

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Magnam Tiste</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <a href="<?php echo site_url('transaksi'); ?>" type="button"
                                    class="btn btn-primary btn-lg">$5.95</a>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Aut Luia</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <a href="<?php echo site_url('transaksi'); ?>" type="button"
                                    class="btn btn-primary btn-lg">$14.95</a>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Est Eligendi</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <a href="<?php echo site_url('transaksi'); ?>" type="button"
                                    class="btn btn-primary btn-lg">$8.95</a>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Eos Luibusdam</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <button href="<?php echo site_url('transaksi'); ?>" type="button"
                                    class="btn btn-primary btn-lg">$12.95</button>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Eos Luibusdam</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <a href="<?php echo site_url('transaksi'); ?>" type="button"
                                    class="btn btn-primary btn-lg">$12.95</a>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Laboriosam Direva</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <a href="<?php echo site_url('transaksi'); ?>" type="button"
                                    class="btn btn-primary btn-lg">$9.95</a>
                            </div><!-- Menu Item -->

                        </div>
                    </div><!-- End Breakfast Menu Content -->

                    <div class="tab-pane fade" id="menu-lunch">

                        <div class="tab-header text-center">
                            <p>Menu</p>
                            <h3>Lunch</h3>
                        </div>

                        <div class="row gy-5">

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Magnam Tiste</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <a href="<?php echo site_url('transaksi'); ?>" type="button"
                                    class="btn btn-primary btn-lg">$5.95</a>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Aut Luia</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <a href="<?php echo site_url('transaksi'); ?>" type="button"
                                    class="btn btn-primary btn-lg">$14.95</a>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Est Eligendi</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <a href="<?php echo site_url('transaksi'); ?>" type="button"
                                    class="btn btn-primary btn-lg">$8.95</a>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Eos Luibusdam</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <a href="<?php echo site_url('transaksi'); ?>" type="button"
                                    class="btn btn-primary btn-lg">$12.95</a>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Eos Luibusdam</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <a href="<?php echo site_url('transaksi'); ?>" type="button"
                                    class="btn btn-primary btn-lg">$12.95</a>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Laboriosam Direva</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <a href="<?php echo site_url('transaksi'); ?>" type="button"
                                    class="btn btn-primary btn-lg">$9.95</a>
                            </div><!-- Menu Item -->

                        </div>
                    </div><!-- End Lunch Menu Content -->

                    <div class="tab-pane fade" id="menu-dinner">

                        <div class="tab-header text-center">
                            <p>Menu</p>
                            <h3>Dinner</h3>
                        </div>

                        <div class="row gy-5">

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Magnam Tiste</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <a href="<?php echo site_url('transaksi'); ?>" type="button"
                                    class="btn btn-primary btn-lg">$5.95</a>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Aut Luia</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <a href="<?php echo site_url('transaksi'); ?>" type="button"
                                    class="btn btn-primary btn-lg">$14.95</a>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Est Eligendi</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <a href="<?php echo site_url('transaksi'); ?>" type="button"
                                    class="btn btn-primary btn-lg">$8.95</a>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Eos Luibusdam</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <a href="<?php echo site_url('transaksi'); ?>" type="button"
                                    class="btn btn-primary btn-lg">$12.95</a>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Eos Luibusdam</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <a href="<?php echo site_url('transaksi'); ?>" type="button"
                                    class="btn btn-primary btn-lg">$12.95</a>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img
                                        src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Laboriosam Direva</h4>
                                <p class="ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <a href="<?php echo site_url('transaksi'); ?>" type="button"
                                    class="btn btn-primary btn-lg">$9.95</a>
                            </div><!-- Menu Item -->
                        </div>
                    </div><!-- End Dinner Menu Content -->

                </div>

            </div>
        </section><!-- End Menu Section -->



                <!-- ======= Chefs Section ======= -->
                <section id="chefs" class="chefs section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Testimoni</h2>
                    <p>Pelanggan <span>Setia</span> Seduh</p>
                </div>

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="chef-member">
                            <div class="member-img">
                                <img src="assets/img/chefs/epen.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Octo Seven Talahatu</h4>
                                <span>Pekerja Kantoran</span>
                                <p>"Seduh jagonya bikin kepala lebih rileks kalo lagi kerja kantoran. Cocok banget
                                    kerja di temani seduh"
                                </p>
                            </div>
                        </div>
                    </div><!-- End Chefs Member -->

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="chef-member">
                            <div class="member-img">
                                <img src="assets/img/chefs/wisnu.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Wisnu Adi Heryanto</h4>
                                <span>Mahasiswa</span>
                                <p>"Kepala sering kali cenat cenut gara gara tugas menumpuk, tapi kalo udh
                                    minum seduh rasanya lebih tenang dan siap mengahadapi tugas.
                                    Nugas? Seduh solusinya."
                                </p>
                            </div>
                        </div>
                    </div><!-- End Chefs Member -->

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="chef-member">
                            <div class="member-img">
                                <img src="assets/img/chefs/ilham.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Muhammad Ilhamsyah Aliwibawa</h4>
                                <span>Aktor</span>
                                <p>"Sebagai aktor tentunya saya harus memperhatikan kesehatan tapi dengan seduh hal
                                    tersebut sudah terpenuhi karena banyaknya manfaat kesehatan yang di dapatkan dari
                                    secangkir teh seduh. Seduh bantu kita untuk jaga kesehatan"
                                </p>
                            </div>
                        </div>
                    </div><!-- End Chefs Member -->

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="chef-member">
                            <div class="member-img">
                                <img src="assets/img/chefs/sandi.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Sandi Ardijaya Sopandi</h4>
                                <span>Pencinta Alam</span>
                                <p>"Saya suka sekali dengan seduh, karena dengan secangkir teh seduh mengandung banyak
                                    sekali herbal yang tentunya 100% Alami dari alam yang tentunya baik untuk kesehatan.
                                    Seduh 100% alami"
                                </p>
                            </div>
                        </div>
                    </div><!-- End Chefs Member -->

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    </div><!-- End Chefs Member -->

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="chef-member">
                            <div class="member-img">
                                <img src="assets/img/chefs/ali.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Ali Mustolih</h4>
                                <span>Pendaki Gunung Profesional</span>
                                <p>"Dengan seduh di backpack, saya bisa mendaki banyak gunung di indonesia.Saya bisa
                                    lebih
                                    menikmati indahnya pemandangan dari atas gunung dengan di temani hangatnya teh
                                    Seduh. Seduh, Mengahangatkan."
                                </p>
                            </div>
                        </div>
                    </div><!-- End Chefs Member -->

		            
		         
		          </div>

		        <div class="row">
		      
		        </div>
				</div>
			</div>
			<!-- load footer -->
			<?php $this->load->view('partials/footer.php') ?>
		</div>
	</div>
	<?php $this->load->view('partials/js.php') ?>
	<script src="<?= base_url('sb-admin/js/demo/datatables-demo.js') ?>"></script>
	<script src="<?= base_url('sb-admin') ?>/vendor/datatables/jquery.dataTables.min.js"></script>
	<script src="<?= base_url('sb-admin') ?>/vendor/datatables/dataTables.bootstrap4.min.js"></script>
</body>
</html>