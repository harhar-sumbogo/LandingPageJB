<?php
    require "api_method.php";
    $yt_token = "AIzaSyDK7QhbtRsM2ah0_3nZhv9nbsYpq49JODg";
    $yt_channel_id = "UCi9joRYtTKGgLXHNqwOwCEQ";
    $yt_num_of_video = 5;
    $yt_data = get_youtube_video($yt_token, $yt_channel_id, $yt_num_of_video);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>DE BRITTO COLLEGE</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
        rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <!-- FontAwesomeIcon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- addition CSS -->
    <link rel="stylesheet" href="css/addition.css">
    <!-- slider youtube -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"
        integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top " id="mainNav">
        <div class="container-fluid px-5">
            <a class="navbar-brand " href="index.html">
                <img src="assets/logo/sma-jb.png" alt="logo-jb">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavLightDropdown" aria-controls="navbarNavLightDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavLightDropdown">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="listBerita.html">BERITA</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="dropdownMenuProfile" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">
                            PROFILE
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuProfile">
                            <li><a class="dropdown-item" href="#">SEJARAH</a></li>
                            <li><a class="dropdown-item" href="visiMisi.html">VISI MISI</a></li>
                            <li><a class="dropdown-item" href="#">MAKNA LOGO</a></li>
                            <li><a class="dropdown-item" href="#">MARS</a></li>
                            <li><a class="dropdown-item" href="#">JAJARAN DIREKSI</a></li>
                            <li><a class="dropdown-item" href="#">GURU & KARYAWAN</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">ADMISI</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">AKADEMIK</a></li>
                    <li class="nav-item"><a class="nav-link" href="fasilitas.html">FASILITAS</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">JESUIT</a></li>
                    <li class="nav-item"><a class="nav-link" href="galeri.html">GALERI</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">ALUMNI</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div id="carouselPromosi" class="carousel slide" data-interval="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselPromosi" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselPromosi" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselPromosi" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <!-- <img src="assets/img/bg-masthead.jpg" class="carousel-img" alt="..."> -->
                    <video autoplay muted>
                        <source src="assets/video/test.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="carousel-item">
                    <video autoplay muted>
                        <source src="assets/video/test1.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/bg-masthead.jpg" class="carousel-img" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselPromosi" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselPromosi" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>

    <!-- Core Values -->
    <section class="page-section" id="nilai-dasar">
        <div class="fluid-container">
            <div class="row">
                <div class="col" id="deskripsi-nilai-dasar">
                    <h1>Nilai <span>Dasar</span></h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex nihil nobis perspiciatis voluptate
                        eius assumenda architecto, hic quae fugit nulla maiores optio voluptatem dolorem doloremque
                        omnis vero quia, eaque asperiores fugiat recusandae, quos aut non error ad. Eligendi vel in
                        praesentium vero a libero corporis expedita, veniam voluptatibus aperiam molestiae iure! Ullam
                        sequi doloremque unde molestias eum, rerum cumque nulla eveniet voluptate voluptates culpa
                        libero excepturi mollitia pariatur dicta eius. Iure repellendus voluptas numquam, blanditiis et
                        dolor temporibus ut sit! Facilis dicta dolorem, corrupti dolor, ea tempore magni ipsum ab
                        explicabo totam esse iste, non voluptate impedit quibusdam dolorum qui.</p>
                </div>
                <div class="col-6" id="item-nilai-dasar">
                    <div class="row">
                        <div class="col-2 ">
                            <svg width="75" height="68" viewBox="0 0 75 68" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <ellipse cx="37.5" cy="34" rx="37.5" ry="34" fill="#FFB74D" />
                                <path
                                    d="M38 29.082C44.6281 29.082 50 24.5354 50 18.9256C50 13.3157 44.6281 8.7691 38 8.7691C31.3719 8.7691 26 13.3157 26 18.9256C26 24.5354 31.3719 29.082 38 29.082ZM46.4 31.6212H44.8344C42.7531 32.4305 40.4375 32.8907 38 32.8907C35.5625 32.8907 33.2563 32.4305 31.1656 31.6212H29.6C22.6437 31.6212 17 36.3979 17 42.2854V45.5863C17 47.689 19.0156 49.395 21.5 49.395H54.5C56.9844 49.395 59 47.689 59 45.5863V42.2854C59 36.3979 53.3563 31.6212 46.4 31.6212Z"
                                    fill="black" />
                            </svg>
                        </div>
                        <div class="col">
                            <h3>LEADERSHIP</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui consequatur, quam temporibus
                                tenetur ipsum non est ipsa numquam? Beatae labore quidem iure laboriosam aut, illo eos
                                voluptatem optio temporibus neque?</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 ">
                            <svg width="75" height="68" viewBox="0 0 75 68" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <ellipse cx="37.5" cy="34" rx="37.5" ry="34" fill="#FFB74D" />
                                <path
                                    d="M36.2859 30.5736C36.9542 31.2959 38.0427 31.2959 38.7206 30.5736L49.1185 19.428C52.1357 16.1877 51.9638 10.8198 48.5838 7.83336C45.643 5.22749 41.2604 5.69596 38.5679 8.58486L37.4985 9.72675L36.4386 8.59462C33.7461 5.69596 29.3635 5.22749 26.4227 7.83336C23.0522 10.8198 22.8708 16.1877 25.888 19.428L36.2859 30.5736ZM63.9753 38.1472C62.8486 37.1029 61.0918 37.1713 59.9078 38.1472L51.0854 45.3597C50.0065 46.2479 48.6602 46.7261 47.2662 46.7261H35.9708C35.1306 46.7261 34.4431 46.0234 34.4431 45.1645C34.4431 44.3057 35.1306 43.603 35.9708 43.603H43.4469C44.9651 43.603 46.3782 42.5391 46.6264 41.0069C46.9415 39.0549 45.4711 37.3567 43.6093 37.3567H28.3323C25.7543 37.3567 23.2623 38.2644 21.2572 39.9235L16.8173 43.603H11.5277C10.6875 43.603 10 44.3057 10 45.1645V54.5339C10 55.3928 10.6875 56.0955 11.5277 56.0955H45.5953C46.9797 56.0955 48.326 55.6172 49.4145 54.7291L63.8512 42.9198C65.3025 41.7388 65.4171 39.4746 63.9753 38.1472Z"
                                    fill="black" />
                            </svg>

                        </div>
                        <div class="col">
                            <h3>compassion</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui consequatur, quam temporibus
                                tenetur ipsum non est ipsa numquam? Beatae labore quidem iure laboriosam aut, illo eos
                                voluptatem optio temporibus neque?</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 ">
                            <svg width="75" height="67" viewBox="0 0 75 67" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <ellipse cx="37.5" cy="33.5" rx="37.5" ry="33.5" fill="#FFB74D" />
                                <path
                                    d="M29.2105 9.823H45.7895V30.6784H60V51.5339H15V24.0925H29.2105V9.823ZM28.7143 39.5213V37.0963H23.7087V37.0582L24.9459 36.1068C25.9345 35.3155 26.7587 34.4861 27.4185 33.6186C28.0782 32.7511 28.4209 31.7982 28.4464 30.7594C28.442 29.6333 28.047 28.7218 27.2616 28.0248C26.4761 27.3279 25.3262 26.969 23.8118 26.9484C22.9066 26.9574 22.0774 27.079 21.3243 27.3136C20.5712 27.548 19.9431 27.8418 19.4401 28.1949L20.3267 30.2265L21.5898 29.5439C22.0779 29.339 22.6123 29.2304 23.1932 29.2181C23.9609 29.2304 24.5186 29.4056 24.866 29.7438C25.2136 30.0819 25.3846 30.5093 25.379 31.0259C25.3713 31.7259 25.0053 32.4808 24.2809 33.2904C23.5566 34.0999 22.4585 35.1022 20.9867 36.2971L19.275 37.7365V39.5213H28.7143ZM36.6486 25.3612H39.6799V12.9615H37.1022L33.5347 14.4876L34.0502 16.6624L36.6072 15.5368H36.6486V25.3612ZM47.9877 46.014C48.3881 46.2398 48.9328 46.436 49.6219 46.6027C50.311 46.7693 51.093 46.8568 51.9676 46.8651C53.6467 46.8444 54.9459 46.4886 55.865 45.798C56.7842 45.1073 57.2498 44.2061 57.2621 43.0942C57.2427 42.2597 56.9758 41.5778 56.4612 41.0486C55.9468 40.5195 55.3013 40.1846 54.5248 40.0442V40.006C55.2989 39.743 55.8799 39.3647 56.2677 38.8713C56.6556 38.3779 56.8495 37.8028 56.8496 37.1459C56.844 36.2824 56.472 35.5617 55.7339 34.9838C54.9958 34.4059 53.9259 34.1056 52.5244 34.0831C51.6352 34.0923 50.8258 34.1876 50.0963 34.3693C49.3669 34.551 48.7945 34.7646 48.3796 35.01L49.0188 37.0893L50.202 36.6078C50.7086 36.4497 51.2421 36.3646 51.8028 36.3529C52.4716 36.3603 52.9691 36.4823 53.2952 36.7187C53.6212 36.9552 53.7837 37.2612 53.7824 37.6367C53.7493 38.15 53.4855 38.5157 52.991 38.734C52.4965 38.9523 51.9699 39.0585 51.4109 39.0526H50.1737V41.1312H51.4521C52.1889 41.1283 52.8239 41.2736 53.3571 41.5666C53.8902 41.8597 54.1694 42.3176 54.1948 42.9403C54.1944 43.4134 53.9889 43.8048 53.5787 44.1143C53.1684 44.4238 52.5558 44.5842 51.7408 44.5954C51.0866 44.5813 50.4773 44.4891 49.9133 44.3188L48.627 43.8256L47.9877 46.014Z"
                                    fill="black" />
                            </svg>

                        </div>
                        <div class="col">
                            <h3>competence</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui consequatur, quam temporibus
                                tenetur ipsum non est ipsa numquam? Beatae labore quidem iure laboriosam aut, illo eos
                                voluptatem optio temporibus neque?</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 ">
                            <svg width="75" height="68" viewBox="0 0 75 68" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <ellipse cx="37.5" cy="34" rx="37.5" ry="34" fill="#FFB74D" />
                                <path
                                    d="M40.0931 49.8663C37.6577 47.7504 36.614 44.4253 37.3098 41.4026C38.0056 38.3798 40.0931 35.9616 43.2243 35.0548C43.2243 34.7525 42.8763 34.4502 42.8763 34.4502C42.8763 32.6366 45.6596 33.2411 47.7471 29.9161C47.7471 29.9161 57.1406 7.84998 37.6577 7.84998C18.5228 7.84998 27.9163 29.9161 27.9163 29.9161C30.0038 32.9389 32.787 32.3343 32.787 34.4502C32.787 36.5662 30.3517 36.5662 27.9163 36.8685C24.0893 37.1707 20.6102 36.5662 17.1312 42.0071C15.0437 45.3322 14 56.2141 14 56.2141H47.3991L40.0931 49.8663Z"
                                    fill="black" />
                                <path
                                    d="M62.0112 38.3799C61.3154 38.0776 60.2717 38.0776 59.5759 38.0776C57.1405 38.0776 55.0531 39.8912 53.6615 41.4026C52.2698 39.8912 50.1824 38.0776 47.747 38.0776C46.7033 38.0776 46.0075 38.0776 45.3117 38.3799C41.1368 39.589 40.441 44.4254 43.5721 47.1458L54.0094 55.9118L64.4466 47.1458C67.2299 44.4254 66.1861 39.589 62.0112 38.3799V38.3799Z"
                                    fill="black" />
                            </svg>

                        </div>
                        <div class="col">
                            <h3>conscience</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui consequatur, quam
                                temporibus
                                tenetur ipsum non est ipsa numquam? Beatae labore quidem iure laboriosam aut, illo
                                eos
                                voluptatem optio temporibus neque?</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 ">
                            <svg width="75" height="68" viewBox="0 0 75 68" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <ellipse cx="37.5" cy="34" rx="37.5" ry="34" fill="#FFB74D" />
                                <path
                                    d="M45.9977 24.5865V9.48902C45.9977 8.5622 45.1586 7.81152 44.1227 7.81152H40.3727C39.3367 7.81152 38.4977 8.5622 38.4977 9.48902V24.8937C39.0859 24.7071 39.7094 24.5865 40.3691 24.5865H45.9977ZM60.9977 34.6505C60.9965 30.9453 57.6391 27.9415 53.4988 27.9415H40.3574C39.3285 27.9415 38.4941 28.6828 38.4941 29.6033V29.662C38.4941 32.4162 40.9902 34.6515 44.0688 34.6515H48.2008C49.3352 34.6515 49.7477 35.0268 49.7477 35.4903V37.1887C49.7477 37.6385 49.327 38.0044 48.8242 38.0275C43.607 38.2665 41.3055 40.6182 37.5684 45.6339L36.8289 46.6268C36.7607 46.7184 36.673 46.7972 36.5707 46.8585C36.4685 46.9198 36.3537 46.9625 36.233 46.9841C36.1123 47.0057 35.988 47.0058 35.8673 46.9844C35.7466 46.9631 35.6317 46.9206 35.5293 46.8595L33.9695 45.9285C33.8671 45.8675 33.7791 45.789 33.7105 45.6975C33.642 45.606 33.5943 45.5034 33.5701 45.3954C33.546 45.2874 33.5458 45.1762 33.5697 45.0682C33.5936 44.9601 33.6411 44.8574 33.7094 44.7658L34.4488 43.7729C36.2922 41.2986 37.9879 39.2374 39.993 37.6836C37.9691 37.1059 36.3133 35.7838 35.4379 34.0717C34.6656 34.4292 33.802 34.6505 32.875 34.6505H29.125C27.6789 34.6505 26.3723 34.1462 25.375 33.342C24.3766 34.1472 23.0699 34.6515 21.625 34.6515H17.875C17.2141 34.6515 16.5895 34.5309 16 34.3422V42.5127C16 46.0721 17.5797 49.4848 20.3934 52.0021L23.4988 54.7815V61.4915H53.4965V54.7857L57.7047 51.0197C59.815 49.1312 61.0003 46.5701 61 43.8998L60.9977 34.6505ZM57.2465 25.2051V12.844C57.2465 11.9172 56.4074 11.1665 55.3715 11.1665H51.6215C50.5855 11.1665 49.7465 11.9172 49.7465 12.844V24.5865H53.4965C54.8184 24.5865 56.0676 24.8287 57.2465 25.2051ZM17.875 31.2965H21.625C22.6609 31.2965 23.5 30.5458 23.5 29.619V16.199C23.5 15.2722 22.6609 14.5215 21.625 14.5215H17.875C16.8391 14.5215 16 15.2722 16 16.199V29.619C16 30.5458 16.8391 31.2965 17.875 31.2965ZM29.1238 31.2965H32.8738C33.9098 31.2965 34.7488 30.5458 34.7488 29.619V12.844C34.7488 11.9172 33.9098 11.1665 32.8738 11.1665H29.1238C28.0879 11.1665 27.2488 11.9172 27.2488 12.844V29.619C27.2488 30.5458 28.0879 31.2965 29.1238 31.2965V31.2965Z"
                                    fill="black" />
                            </svg>

                        </div>
                        <div class="col">
                            <h3>comitment</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui consequatur, quam temporibus
                                tenetur ipsum non est ipsa numquam? Beatae labore quidem iure laboriosam aut, illo eos
                                voluptatem optio temporibus neque?</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 ">
                            <svg width="75" height="68" viewBox="0 0 75 68" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <ellipse cx="37.5" cy="34" rx="37.5" ry="34" fill="#FFB74D" />
                                <path
                                    d="M11.4348 52.113H22.9131V39.1694H36.3043V26.2258H49.6957V13.2822H65V18.8295H55.4349V31.7731H42.0435V44.7167H28.6522V57.6603L11.4348 57.6604V52.113ZM30.5652 27.6126L24.8261 33.1599V23.4522L14.7827 33.16L10 28.5373L20.0435 18.8295H10L15.7391 13.2822H30.5652V27.6126Z"
                                    fill="black" />
                            </svg>

                        </div>
                        <div class="col">
                            <h3>consistency</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui consequatur, quam temporibus
                                tenetur ipsum non est ipsa numquam? Beatae labore quidem iure laboriosam aut, illo eos
                                voluptatem optio temporibus neque?</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- About-->
    <section class="page-section" id="kepala-sekolah">
        <h1 class="text-center fw-bold ">KEPALA SEKOLAH</h1>
        <iframe class="video-kepala-sekolah" src="https://www.youtube-nocookie.com/embed/Rg9P4WmN3Eo?start=977"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
        <p class="mx-5 mt-3">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam, odit provident. Doloremque facere nulla
            rem illum beatae! Commodi, iste ratione perspiciatis beatae magnam tempora quibusdam placeat error, soluta
            dolor veritatis.
        </p>
    </section>

    <!-- Latest News -->
    <section class="page-section latestNews">
        <h1>LATEST NEWS</h1>

        <div class="container-fluid" id="container-news">
            <div class="row">
                <div class="col-7" id="img-large-news">
                    <img class="img-fluid img-news" src="assets/img/latestNews.png" alt="latestNews">
                </div>

                <div class="col">
                    <div class="published">
                        <p>Category</p>
                        <p>Monday, Febuary 21th 2022</p>
                    </div>
                    <div class="large-news-content">
                        <h3>Elit pellentesque habitant morbi tirstique</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum deleniti facere nobis
                            eaque enim
                            tempora asperiores, dicta molestiae quis possimus maiores similique, odit, non porro
                            voluptas
                            optio unde odio delectus. Explicabo, provident aliquid eaque aut amet voluptate
                            totam
                            fugit
                            aliquam quod quisquam quo distinctio. Quae quia non accusantium facilis corrupti...
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md">
                    <img class="img-fluid img-news" src="assets/img/latestNews.png" alt="latstNews">

                    <div class="published">
                        <p>Category</p>
                        <p>Monday, Febuary 21th 2022</p>
                    </div>
                    <div class="small-news-content">
                        <h3>Elit pellentesque habitant morbi tirstique</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum deleniti facere nobis eaque
                            enim
                            tempora asperiores, dicta molestiae quis possimus maiores similique, odit, non porro
                            voluptas
                            optio unde odio delectus. Explicabo, provident aliquid eaque aut amet voluptate totam fugit
                            aliquam quod quisquam quo distinctio. Quae quia non accusantium facilis corrupti...</p>
                    </div>
                </div>

                <div class="col-md">
                    <img class="img-fluid img-news" src="assets/img/latestNews.png" alt="latstNews">

                    <div class="published">
                        <p>Category</p>
                        <p>Monday, Febuary 21th 2022</p>
                    </div>
                    <div class="small-news-content">
                        <h3>Elit pellentesque habitant morbi tirstique</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum deleniti facere nobis eaque
                            enim
                            tempora asperiores, dicta molestiae quis possimus maiores similique, odit, non porro
                            voluptas
                            optio unde odio delectus. Explicabo, provident aliquid eaque aut amet voluptate totam fugit
                            aliquam quod quisquam quo distinctio. Quae quia non accusantium facilis corrupti...</p>
                    </div>
                </div>

                <div class="col-md">
                    <img class="img-fluid img-news" src="assets/img/latestNews.png" alt="latstNews">

                    <div class="published">
                        <p>Category</p>
                        <p>Monday, Febuary 21th 2022</p>
                    </div>
                    <div class="small-news-content">
                        <h3>Elit pellentesque habitant morbi tirstique</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum deleniti facere nobis eaque
                            enim
                            tempora asperiores, dicta molestiae quis possimus maiores similique, odit, non porro
                            voluptas
                            optio unde odio delectus. Explicabo, provident aliquid eaque aut amet voluptate totam fugit
                            aliquam quod quisquam quo distinctio. Quae quia non accusantium facilis corrupti...</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md">
                    <img class="img-fluid img-news" src="assets/img/latestNews.png" alt="latstNews">

                    <div class="published">
                        <p>Category</p>
                        <p>Monday, Febuary 21th 2022</p>
                    </div>
                    <div class="small-news-content">
                        <h3>Elit pellentesque habitant morbi tirstique</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum deleniti facere nobis eaque
                            enim
                            tempora asperiores, dicta molestiae quis possimus maiores similique, odit, non porro
                            voluptas
                            optio unde odio delectus. Explicabo, provident aliquid eaque aut amet voluptate totam fugit
                            aliquam quod quisquam quo distinctio. Quae quia non accusantium facilis corrupti...</p>
                    </div>
                </div>

                <div class="col-md">
                    <img class="img-fluid img-news" src="assets/img/latestNews.png" alt="latstNews">

                    <div class="published">
                        <p>Category</p>
                        <p>Monday, Febuary 21th 2022</p>
                    </div>
                    <div class="small-news-content">
                        <h3>Elit pellentesque habitant morbi tirstique</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum deleniti facere nobis eaque
                            enim
                            tempora asperiores, dicta molestiae quis possimus maiores similique, odit, non porro
                            voluptas
                            optio unde odio delectus. Explicabo, provident aliquid eaque aut amet voluptate totam fugit
                            aliquam quod quisquam quo distinctio. Quae quia non accusantium facilis corrupti...</p>
                    </div>
                </div>

                <div class="col-md">
                    <img class="img-fluid img-news" src="assets/img/latestNews.png" alt="latstNews">

                    <div class="published">
                        <p>Category</p>
                        <p>Monday, Febuary 21th 2022</p>
                    </div>
                    <div class="small-news-content">
                        <h3>Elit pellentesque habitant morbi tirstique</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum deleniti facere nobis eaque
                            enim
                            tempora asperiores, dicta molestiae quis possimus maiores similique, odit, non porro
                            voluptas
                            optio unde odio delectus. Explicabo, provident aliquid eaque aut amet voluptate totam fugit
                            aliquam quod quisquam quo distinctio. Quae quia non accusantium facilis corrupti...</p>
                    </div>
                </div>
            </div>

            <a href="./listBerita.html">
                <button class="btn btn-success">
                    SHOW MORE<i class="fa fa-arrow-right"></i>
                </button>
            </a>

        </div>
    </section>

    <!-- Social Media -->
    <section class="page-section" id="portfolio">
        <div id="social-media-title" class="d-flex justify-content-center">
            <h1 class="fw-bold text-uppercase underline-yellow">our social media</h1>
        </div>

        <div class="container-sm social-media">
            <div class="row">
                <div class="col m-3 d-flex justify-content-center">
                    <a href="assets/img/bg-masthead.jpg" class="portfolio-box" title="Instagram Content">
                        <img src="assets/img/bg-masthead.jpg" class="img-social-media" alt="ig">
                        <div id="porto-box-caption" class="portfolio-box-caption">
                            <div class="project-name">Instagram Content</div>
                        </div>
                    </a>
                </div>

                <div class="col m-3 d-flex justify-content-center">
                    <a href="assets/img/bg-masthead.jpg" class="portfolio-box" title="Instagram Content">
                        <img src="assets/img/bg-masthead.jpg" class="img-social-media" alt="ig">
                        <div class="portfolio-box-caption">
                            <div class="project-name">Instagram Content</div>
                        </div>
                    </a>
                </div>

                <div class="col m-3 d-flex justify-content-center">
                    <a href="assets/img/bg-masthead.jpg" class="portfolio-box" title="Instagram Content">
                        <img src="assets/img/bg-masthead.jpg" class="img-social-media" alt="ig">
                        <div class="portfolio-box-caption">
                            <div class="project-name">Instagram Content</div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col m-3 d-flex justify-content-center">
                    <a href="assets/img/bg-masthead.jpg" class="portfolio-box" title="Instagram Content">
                        <img src="assets/img/bg-masthead.jpg" class="img-social-media" alt="ig">
                        <div class="portfolio-box-caption">
                            <div class="project-name">Instagram Content</div>
                        </div>
                    </a>
                </div>

                <div class="col m-3 d-flex justify-content-center">
                    <a href="assets/img/bg-masthead.jpg" class="portfolio-box" title="Instagram Content">
                        <img src="assets/img/bg-masthead.jpg" class="img-social-media" alt="ig">
                        <div class="portfolio-box-caption">
                            <div class="project-name">Instagram Content</div>
                        </div>
                    </a>
                </div>

                <div class="col m-3 d-flex justify-content-center">
                    <a href="assets/img/bg-masthead.jpg" class="portfolio-box" title="Instagram Content">
                        <img src="assets/img/bg-masthead.jpg" class="img-social-media" alt="ig">
                        <div class="portfolio-box-caption">
                            <div class="project-name">Instagram Content</div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col m-3 d-flex justify-content-center">
                    <a href="assets/img/bg-masthead.jpg" class="portfolio-box" title="Instagram Content">
                        <img src="assets/img/bg-masthead.jpg" class="img-social-media" alt="ig">
                        <div class="portfolio-box-caption">
                            <div class="project-name">Instagram Content</div>
                        </div>
                    </a>
                </div>

                <div class="col m-3 d-flex justify-content-center">
                    <a href="assets/img/bg-masthead.jpg" class="portfolio-box" title="Instagram Content">
                        <img src="assets/img/bg-masthead.jpg" class="img-social-media" alt="ig">
                        <div class="portfolio-box-caption">
                            <div class="project-name">Instagram Content</div>
                        </div>
                    </a>
                </div>

                <div class="col m-3 d-flex justify-content-center">
                    <a href="assets/img/bg-masthead.jpg" class="portfolio-box" title="Instagram Content">
                        <img src="assets/img/bg-masthead.jpg" class="img-social-media" alt="ig">
                        <div class="portfolio-box-caption">
                            <div class="project-name">Instagram Content</div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <button class="btn btn-success"><i class="bi bi-instagram"></i>
                    FOLLOW ON INSTAGRAM</button>
            </div>
        </div>
    </section>

    <!-- YouTube -->
    <section id="slider">
        <div class="container slider">
            <div class="subcontainer">
                <div class="slider-wrapper">
                    <div class="my-slider">
                        <?php foreach($yt_data->items as $yt_video) : ?>
                            <div>
                                <div class="slide">
                                    <div class="slide-img">
                                        <a href="<?='https://www.youtube.com/watch?v=' . $yt_video->id->videoId?>"><img class="img-fluid" src="<?= $yt_video->snippet->thumbnails->high->url ?>" ></a>
                                    </div>
                                    <div>
                                        <h4><?= $yt_video->snippet->title ?></h4>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="controller">
                        <div id="controls">
                            <button class="previous">
                                <i class="fa fa-chevron-left"></i>
                            </button>
                            <button class="next "><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Location -->
    <section class="page-section">
        <div class="d-flex justify-content-center">
            <h1 class="fw-bold text-uppercase underline-yellow">OUR LOCATION</h1>
        </div>

        <div class="container d-flex justify-content-center" id="location-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.078489708599!2d110.39088161477812!3d-7.781502694392092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59c4e6fe5aef%3A0xbc91ae2d0069f518!2sSMA%20Kolese%20De%20Britto%20Yogyakarta!5e0!3m2!1sen!2sid!4v1653364861617!5m2!1sen!2sid"
                width="800" height="650" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section class="page-section">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-3 col-sm">
                    <img class="img-fluid img-school" src="assets/logo/sma-kanisius.png" alt="SMA">
                </div>
                <div class="col-3 col-sm">
                    <img class="img-fluid img-school" src="assets/logo/sma-gonzaga.png" alt="SMA">
                </div>
                <div class="col-3 col-sm">
                    <img class="img-fluid img-school" src="assets/logo/sma-jb.png" alt="SMA">
                </div>
                <div class="col-3 col-sm">
                    <img class="img-fluid img-school" src="assets/logo/sma-loyola.png" alt="SMA">
                </div>
                <div class="col-3 col-sm">
                    <img class="img-fluid img-school" src="assets/logo/smk-pika.png" alt="SMA">
                </div>
                <div class="col-3 col-sm">
                    <img class="img-fluid img-school" src="assets/logo/smk-st-michael.png" alt="SMA">
                </div>
                <div class="col-3 col-sm">
                    <img class="img-fluid img-school" src="assets/logo/seminari.png" alt="SMA">
                </div>
                <div class="col-3 col-sm">
                    <img class="img-fluid img-school" src="assets/logo/sma-adhi-luhur.png" alt="SMA">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer-->
    <footer class="page-section">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-md-4 col-sm-12">
                    <p>&copy; 2022 SMA KOLESE DE BRITTO</p>
                </div>
                <div class="col-md-4 col-sm-12 offset-md-4">
                    <div class="row text-center mb-4">
                        <img class="mx-auto d-block logo-jb" src="assets/logo/sma-jb.png" alt="logo-jb">
                    </div>
                    <div class="row">
                        <p><i class="fa fa-home"></i> Jl. Laksda Adisucipto No. 161 Yogyakarta, Indonesia 55281</p>
                    </div>
                    <div class="row">
                        <p> <i class="fa fa-phone"></i> Telp: +62 822-9716-1161</p>
                    </div>
                    <div class="row">
                        <p><i class="fa fa-envelope"></i> Email: kolese@debritto.sch.id</p>
                    </div>
                </div>
            </div>

        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>