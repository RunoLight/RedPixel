<?php
$mysql = new mysqli('localhost','root','root','redpixel');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Red Pixel - Разработка игр</title>
  <meta content="Студия разработки игр и сайтов" name="description">
  <meta content="Разработка игр, студия разработки игр, заказать разработку игры" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">Red Pixel<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Главная</a></li>
          <li><a class="nav-link scrollto" href="#about">О нас</a></li>
          <li><a class="nav-link scrollto" href="#services">Услуги</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Портфолио</a></li>
<!--          <li><a class="nav-link scrollto" href="#team">Team</a></li>-->
<!--          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>-->
<!--            <ul>-->
<!--              <li><a href="#">Drop Down 1</a></li>-->
<!--              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>-->
<!--                <ul>-->
<!--                  <li><a href="#">Deep Drop Down 1</a></li>-->
<!--                  <li><a href="#">Deep Drop Down 2</a></li>-->
<!--                  <li><a href="#">Deep Drop Down 3</a></li>-->
<!--                  <li><a href="#">Deep Drop Down 4</a></li>-->
<!--                  <li><a href="#">Deep Drop Down 5</a></li>-->
<!--                </ul>-->
<!--              </li>-->
<!--              <li><a href="#">Drop Down 2</a></li>-->
<!--              <li><a href="#">Drop Down 3</a></li>-->
<!--              <li><a href="#">Drop Down 4</a></li>-->
<!--            </ul>-->
<!--          </li>-->
          <li><a class="nav-link scrollto" href="#contact">Связаться с нами</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#services" class="get-started-btn scrollto">Услуги</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>Цифровые решения для бизнеса с <br> Red Pixel<span>.</span></h1>
          <h2>Мы предлагаем игровые решения для разных отраслей и
            бизнес-целей - от веселых игр до серьезных игр-тренажеров и
            симуляторов для профессионалов</h2>
        </div>
      </div>

<!--      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">-->
<!--        <div class="col-xl-2 col-md-4">-->
<!--          <div class="icon-box">-->
<!--            <i class="ri-store-line"></i>-->
<!--            <h3><a href="">Lorem Ipsum</a></h3>-->
<!--          </div>-->
<!--        </div>-->
<!--        <div class="col-xl-2 col-md-4">-->
<!--          <div class="icon-box">-->
<!--            <i class="ri-bar-chart-box-line"></i>-->
<!--            <h3><a href="">Dolor Sitema</a></h3>-->
<!--          </div>-->
<!--        </div>-->
<!--        <div class="col-xl-2 col-md-4">-->
<!--          <div class="icon-box">-->
<!--            <i class="ri-calendar-todo-line"></i>-->
<!--            <h3><a href="">Sedare Perspiciatis</a></h3>-->
<!--          </div>-->
<!--        </div>-->
<!--        <div class="col-xl-2 col-md-4">-->
<!--          <div class="icon-box">-->
<!--            <i class="ri-paint-brush-line"></i>-->
<!--            <h3><a href="">Magni Dolores</a></h3>-->
<!--          </div>-->
<!--        </div>-->
<!--        <div class="col-xl-2 col-md-4">-->
<!--          <div class="icon-box">-->
<!--            <i class="ri-database-2-line"></i>-->
<!--            <h3><a href="">Nemos Enimade</a></h3>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>Команда профессионалов, любящих свое дело.</h3>
            <p class="fst-italic">
              Мы проектируем и создаем интересные и удобные приложения с различными
              нестандартными функциями.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i>
                Поэтапная разработка.</li>
              <li><i class="ri-check-double-line"></i>
                Продуманный и удобный интерфейс.</li>
              <li><i class="ri-check-double-line"></i>
                Функции, решающие ваши задачи.</li>
              <li><i class="ri-check-double-line"></i>
                Автоматизация ваших бизнесс-процессов.</li>
              <li><i class="ri-check-double-line"></i>
                Адаптивный дизайн.</li>
              <li><i class="ri-check-double-line"></i>
                Интеграция со сторонними приложениями.</li>
            </ul>
            <p>
              Мы используем современные инструменты для реализации ваших проектов.
            </p>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">
        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
          </div>
<!--          Плашки для свайпа-->
<!--          <div class="swiper-pagination"></div>-->
        </div>
      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Features Section ======= -->
<!--    <section id="features" class="features">-->
<!--      <div class="container" data-aos="fade-up">-->

<!--        <div class="row">-->
<!--          <div class="image col-lg-6" style='background-image: url("assets/img/features.jpg");' data-aos="fade-right"></div>-->
<!--          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">-->
<!--            <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">-->
<!--              <i class="bx bx-receipt"></i>-->
<!--              <h4>Est labore ad</h4>-->
<!--              <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>-->
<!--            </div>-->
<!--            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">-->
<!--              <i class="bx bx-cube-alt"></i>-->
<!--              <h4>Harum esse qui</h4>-->
<!--              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>-->
<!--            </div>-->
<!--            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">-->
<!--              <i class="bx bx-images"></i>-->
<!--              <h4>Aut occaecati</h4>-->
<!--              <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>-->
<!--            </div>-->
<!--            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">-->
<!--              <i class="bx bx-shield"></i>-->
<!--              <h4>Beatae veritatis</h4>-->
<!--              <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->

<!--      </div>-->
<!--    </section>&lt;!&ndash; End Features Section &ndash;&gt;-->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Услуги</h2>
          <p>Наши услуги</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="#contact">Разработка игр</a></h4>
              <p>
                Разработка на мобильные платформы и на PC.<br>
                Интеграция игры в другие приложения и сайты.<br>
                Публикация вашего приложения в Google Play или Steam.
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="#contact">Приложения для бизнеса</a></h4>
              <p>Магазин или доставка?</p>
              <p>Создадим любой E-commerce и повысим лояльность ваших пользователей.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
<!--              <div class="icon"><i class="bx bx-tachometer"></i></div>-->
              <div class="icon"><i class="bx bx-bulb"></i></div>
              <h4><a href="#contact">Разработка прототипов</a></h4>
              <p>Есть крутые идеи, которые нужно протестировать?</p>
              <p>Создадим для вас прототип из идеи. Подключим нужную систему аналитики.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-bot"></i></div>
              <h4><a href="#contact">Мессенджер-боты</a></h4>
              <p>Разработаем чат-бота для вашего бизнеса и автоматизируем ваши процессы.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4><a href="#contact">Поддержка сайтов</a></h4>
              <p>Техническое сопровождение веб-сайтов. Доработка по требованиям.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-spa"></i></div>
              <h4><a href="#contact">Создание айдентики</a></h4>
              <p>
                Разработка логотипа, который отражает цель бизнеса. <br>
                Разработка brand-book, который опишет концепцию бренда, его ценности и атрибуты
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Доверьте нам свою разработку</h3>
          <p> Начнем разработку вашего проекта оперативно и закончим в срок. Уточним требования и составим смету. <br>
          Мы нацелены на долгосрочные отношения.</p>
          <a class="cta-btn" href="#contact">Работать с нами</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Портфолио</h2>
          <p>Наши работы</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Все</li>
              <li data-filter=".filter-game">Игры</li>
              <li data-filter=".filter-app">Приложения</li>
              <li data-filter=".filter-web">Сайты</li>
              <li data-filter=".filter-bots">Чат-боты</li>
            </ul>
          </div>
        </div>

        <div id="portfolio" class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <?php

                $count =        $mysql->query("select count(*) as count from projects")->fetch_object()->count;
                $projects =     $mysql->query("select title, description, path, link, link_title, type from projects order by id desc");

                for ($i = 0; $i < $count; $i++)
                { 
                    $proj = $projects->fetch_assoc();

                    echo'
                        <div class="col-lg-4 col-md-6 portfolio-item filter-'.$proj['type'].'">
                            <div class="portfolio-wrap">
                                <img src="'.$proj['path'].'" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                <h4>'.$proj['title'].'</h4>
                                <p>'.$proj['description'].'</p>
                                <div class="portfolio-links">
                                    <a href="'.$proj['path'].'" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="'.$proj['title'].'">
                                    <i class="bx bx-search"></i></a>
                    ';
                    if ($proj['link'] && $proj['link_title']) {
                        echo'       <a href="'.$proj['link'].'" title="'.$proj['link_title'].'"><i class="bx bx-link"></i></a>';
                    }
                    echo'
                                </div>
                                </div>
                            </div>
                        </div>
                    ';
                }
        //   <div class="col-lg-4 col-md-6 portfolio-item filter-game">
            // <div class="portfolio-wrap">
            //   <img src="assets/img/portfolio/portfolio-1.png" class="img-fluid" alt="">
            //   <div class="portfolio-info">
            //     <h4>Игровое приложение "Кубокот"</h4>
            //     <p>В сотрудничестве с телеканалом "СТС" и Яндексом</p>
            //     <div class="portfolio-links">
            //       <a href="assets/img/portfolio/portfolio-1.png" data-gallery="portfolioGallery"
            //          class="portfolio-lightbox" title='Игровое приложение "Кубокот"'>
            //         <i class="bx bx-search"></i></a>
            //     </div>
            //   </div>
            // </div>
        //   </div>

          ?>


        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts" style="padding-top: 0; padding-bottom: 0">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
<!--          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right" data-aos-delay="100"></div>-->
          <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch" data-aos="fade-left" data-aos-delay="100">
            <div class="content d-flex flex-column justify-content-center">
              <h3>Наши показатели</h3>
              <p>
                  Уже более 4 лет компания Red Pixel выполняет деятельность по разработке заказного программного обеспечения. Мы нацелены на создание современных и инновационных продуктов, которые будут полезны пользователям. В своей работе мы не только разрабатываем программные продукты, но и делимся своими компетенциями в предметных областях за все время работы компании.
              </p>
              <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                    <span data-purecounter-start="0" data-purecounter-end="9" data-purecounter-duration="2" class="purecounter"></span>
                    <p><strong>Клиентов</strong>, которые доверили нам разработку своих идей</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-journal-richtext"></i>
                    <span data-purecounter-start="0" data-purecounter-end="14" data-purecounter-duration="2" class="purecounter"></span>
                    <p><strong>Проектов</strong>, запущенных в работу и поддерживающихся на всём жизненном цикле </p>
                  </div>
                </div>

<!--                <div class="col-md-6 d-md-flex align-items-md-stretch">-->
<!--                  <div class="count-box">-->
<!--                    <i class="bi bi-clock"></i>-->
<!--                    <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="4" class="purecounter"></span>-->
<!--                    <p><strong>Года опыта</strong> в разработке и сопрвождении проектов</p>-->
<!--                  </div>-->
<!--                </div>-->

<!--                <div class="col-md-6 d-md-flex align-items-md-stretch">-->
<!--                  <div class="count-box">-->
<!--                    <i class="bi bi-award"></i>-->
<!--                    <span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="4" class="purecounter"></span>-->
<!--                    <p><strong>Награды</strong> </p>-->
<!--                  </div>-->
<!--                </div>-->
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
<!--    <section id="testimonials" class="testimonials">-->
<!--      <div class="container" data-aos="zoom-in">-->

<!--        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">-->
<!--          <div class="swiper-wrapper">-->

<!--            <div class="swiper-slide">-->
<!--              <div class="testimonial-item">-->
<!--                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">-->
<!--                <h3>Saul Goodman</h3>-->
<!--                <h4>Ceo &amp; Founder</h4>-->
<!--                <p>-->
<!--                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>-->
<!--                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.-->
<!--                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>-->
<!--                </p>-->
<!--              </div>-->
<!--            </div>&lt;!&ndash; End testimonial item &ndash;&gt;-->

<!--            <div class="swiper-slide">-->
<!--              <div class="testimonial-item">-->
<!--                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">-->
<!--                <h3>Sara Wilsson</h3>-->
<!--                <h4>Designer</h4>-->
<!--                <p>-->
<!--                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>-->
<!--                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.-->
<!--                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>-->
<!--                </p>-->
<!--              </div>-->
<!--            </div>&lt;!&ndash; End testimonial item &ndash;&gt;-->

<!--            <div class="swiper-slide">-->
<!--              <div class="testimonial-item">-->
<!--                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">-->
<!--                <h3>Jena Karlis</h3>-->
<!--                <h4>Store Owner</h4>-->
<!--                <p>-->
<!--                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>-->
<!--                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.-->
<!--                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>-->
<!--                </p>-->
<!--              </div>-->
<!--            </div>&lt;!&ndash; End testimonial item &ndash;&gt;-->

<!--            <div class="swiper-slide">-->
<!--              <div class="testimonial-item">-->
<!--                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">-->
<!--                <h3>Matt Brandon</h3>-->
<!--                <h4>Freelancer</h4>-->
<!--                <p>-->
<!--                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>-->
<!--                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.-->
<!--                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>-->
<!--                </p>-->
<!--              </div>-->
<!--            </div>&lt;!&ndash; End testimonial item &ndash;&gt;-->

<!--            <div class="swiper-slide">-->
<!--              <div class="testimonial-item">-->
<!--                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">-->
<!--                <h3>John Larson</h3>-->
<!--                <h4>Entrepreneur</h4>-->
<!--                <p>-->
<!--                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>-->
<!--                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.-->
<!--                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>-->
<!--                </p>-->
<!--              </div>-->
<!--            </div>&lt;!&ndash; End testimonial item &ndash;&gt;-->
<!--          </div>-->
<!--          <div class="swiper-pagination"></div>-->
<!--        </div>-->

<!--      </div>-->
<!--    </section>&lt;!&ndash; End Testimonials Section &ndash;&gt;-->

    <!-- ======= Team Section ======= -->
<!--    <section id="team" class="team">-->
<!--      <div class="container" data-aos="fade-up">-->

<!--        <div class="section-title">-->
<!--          <h2>Team</h2>-->
<!--          <p>Check our Team</p>-->
<!--        </div>-->

<!--        <div class="row">-->

<!--          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">-->
<!--            <div class="member" data-aos="fade-up" data-aos-delay="100">-->
<!--              <div class="member-img">-->
<!--                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">-->
<!--                <div class="social">-->
<!--                  <a href=""><i class="bi bi-twitter"></i></a>-->
<!--                  <a href=""><i class="bi bi-facebook"></i></a>-->
<!--                  <a href=""><i class="bi bi-instagram"></i></a>-->
<!--                  <a href=""><i class="bi bi-linkedin"></i></a>-->
<!--                </div>-->
<!--              </div>-->
<!--              <div class="member-info">-->
<!--                <h4>Walter White</h4>-->
<!--                <span>Chief Executive Officer</span>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->

<!--          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">-->
<!--            <div class="member" data-aos="fade-up" data-aos-delay="200">-->
<!--              <div class="member-img">-->
<!--                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">-->
<!--                <div class="social">-->
<!--                  <a href=""><i class="bi bi-twitter"></i></a>-->
<!--                  <a href=""><i class="bi bi-facebook"></i></a>-->
<!--                  <a href=""><i class="bi bi-instagram"></i></a>-->
<!--                  <a href=""><i class="bi bi-linkedin"></i></a>-->
<!--                </div>-->
<!--              </div>-->
<!--              <div class="member-info">-->
<!--                <h4>Sarah Jhonson</h4>-->
<!--                <span>Product Manager</span>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->

<!--          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">-->
<!--            <div class="member" data-aos="fade-up" data-aos-delay="300">-->
<!--              <div class="member-img">-->
<!--                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">-->
<!--                <div class="social">-->
<!--                  <a href=""><i class="bi bi-twitter"></i></a>-->
<!--                  <a href=""><i class="bi bi-facebook"></i></a>-->
<!--                  <a href=""><i class="bi bi-instagram"></i></a>-->
<!--                  <a href=""><i class="bi bi-linkedin"></i></a>-->
<!--                </div>-->
<!--              </div>-->
<!--              <div class="member-info">-->
<!--                <h4>William Anderson</h4>-->
<!--                <span>CTO</span>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->

<!--          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">-->
<!--            <div class="member" data-aos="fade-up" data-aos-delay="400">-->
<!--              <div class="member-img">-->
<!--                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">-->
<!--                <div class="social">-->
<!--                  <a href=""><i class="bi bi-twitter"></i></a>-->
<!--                  <a href=""><i class="bi bi-facebook"></i></a>-->
<!--                  <a href=""><i class="bi bi-instagram"></i></a>-->
<!--                  <a href=""><i class="bi bi-linkedin"></i></a>-->
<!--                </div>-->
<!--              </div>-->
<!--              <div class="member-info">-->
<!--                <h4>Amanda Jepson</h4>-->
<!--                <span>Accountant</span>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->

<!--        </div>-->

<!--      </div>-->
<!--    </section>&lt;!&ndash; End Team Section &ndash;&gt;-->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact" style="padding-top: 20px">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Контакты</h2>
          <p>Работаем?</p>
        </div>

<!--        <div>-->
<!--          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>-->
<!--        </div>-->
<!--        <div class="row mt-5">-->
        <div class="row">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-telegram"></i>
                <h4>Telegram:</h4>
                <p>@runolight</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>redpixelgames2020@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Звонок:</h4>
                <p>+79245282833</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form  name="callbackform" action="http://18.197.86.39/form" method="post" role="form" class="php-email-form">
           <!-- <form action="http://localhost:81/form" method="post" role="form" class="php-email-form"> -->
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Телефон" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="aboutField" id="aboutField" rows="5" placeholder="Пара слов о вашем проекте" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Отправка...</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center submit-button"><button id="feedback"  name="feedback" type="submit">Отправить</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Red Pixel<span>.</span></h3>
              <p>
<!--                A108 Adam Street <br>-->
<!--                NY 535022, USA<br><br>-->
                <strong>Phone:</strong> +79245282833<br>
                <strong>Email:</strong> redpixelgames2020@gmail.com<br>
              </p>
<!--              <div class="social-links mt-3">-->
<!--                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>-->
<!--                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>-->
<!--                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>-->
<!--                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>-->
<!--                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>-->
<!--              </div>-->
            </div>
          </div>

<!--          <div class="col-lg-2 col-md-6 footer-links">-->
<!--            <h4>Useful Links</h4>-->
<!--            <ul>-->
<!--              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>-->
<!--              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>-->
<!--              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>-->
<!--              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>-->
<!--              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>-->
<!--            </ul>-->
<!--          </div>-->

<!--          <div class="col-lg-3 col-md-6 footer-links">-->
<!--            <h4>Our Services</h4>-->
<!--            <ul>-->
<!--              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>-->
<!--              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>-->
<!--              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>-->
<!--              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>-->
<!--              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>-->
<!--            </ul>-->
<!--          </div>-->

<!--          <div class="col-lg-4 col-md-6 footer-newsletter">-->
<!--            <h4>Our Newsletter</h4>-->
<!--            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>-->
<!--            <form action="" method="post">-->
<!--              <input type="email" name="email"><input type="submit" value="Subscribe">-->
<!--            </form>-->

<!--          </div>-->

        </div>
      </div>
    </div>

<!--    <div class="container">-->
<!--      <div class="copyright">-->
<!--        &copy; Copyright <strong><span>Gp</span></strong>. All Rights Reserved-->
<!--      </div>-->
<!--      <div class="credits">-->
<!--      </div>-->
<!--    </div>-->
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="//code.jquery.com/jquery.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/database.js"></script>

</body>

</html>

<?php

$mysql->close();
?>