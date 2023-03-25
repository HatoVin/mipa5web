<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>XI MIPA 5 - Struktur</title>
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="css/struktur.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/653a309332.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <section class="header">
            <nav class="navbar navbar-expand-lg fixed-top" id="nvbr">
                <div class="container-fluid">
                    <a class="image" href="{{ url('/') }}"><img src="logobadag.png"></a>
                    <button class="navbar-toggler border border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <i class="fa-solid fa-bars" style="color: #ffffff;"></i>
                    </button>
                    {{-- <div class="collapse navbar-collapse" id="navcontent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/struktur') }}">STRUKTUR KELAS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/mapel') }}">JADWAL PELAJARAN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/piket') }}">JADWAL PIKET</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/list') }}">LIST SISWA</a>
                            </li>
                        </ul>
                    </div> --}}
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h4 class="offcanvas-title fw-bold" id="offcanvasNavbarLabel">XI MIPA 5</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link text-light active" href="{{ url('/struktur') }}">STRUKTUR KELAS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="{{ url('/mapel') }}">JADWAL PELAJARAN</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="{{ url('/piket') }}">JADWAL PIKET</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="{{ url('/list') }}">LIST SISWA</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                    
                
                {{-- <i class="fa-solid fa-bars x-mark text-light" onclick="showmenu()"></i> --}}
            </nav>
            <div class="text-box">
                {{-- <div class="card">
                    <div class="card-content">
                        <div class="image">
                            <img src="8bf74b99e82032f04d9ad49d262cab45.jpg">
                        </div>
                        <div class="name row">
                            <span class="name">HatoVin</span>
                            <span class="division">{{ $bid }}</span>    
                        </div>
                        <a href="#" class="more"></a>
                    </div>
                </div> --}}
                <ul class="tree">
                    <li> 
                        <span style="font-size: 190%">STRUKTUR XI MIPA 5</span>
                      <ul>
                        <li> <span style="font-size: 140%">Ketua<br>Muhammad jeffri</span>
                          <ul>
                            <li> <span style="font-size: 120%">Wakil Ketua<br>Dwi Rahmawati</span>
                                <ul>
                                    <li><span>Lathifah<br>sekretaris 1</span></li>
                                    <li><span>Syifaul Kholilah<br>sekretaris 2</span></li>
                                    <li class="seksi"><span class="seksi">Seksi - seksi dalam bidangnya</span>
                                        <ul>
                                            <li><span>Seksi Agama</span>
                                                <ul>
                                                    <li><span>Dhavin R.D.</span></li>
                                                    <li><span>Alfinansyah</span></li>
                                                </ul>
                                            </li>
                                            <li><span>Seksi Olahraga</span>
                                                <ul>
                                                    <li><span>Fadila Annur</span></li>
                                                    <li><span>Muhamad Arifin</span></li>
                                                </ul>
                                            </li>
                                            <li><span>Seksi Pendidikan</span>
                                                <ul>
                                                    <li><span>Maftuh R.G.</span></li>
                                                    <li><span>M. Adrian F.</span></li>
                                                </ul>
                                            </li>
                                            <li><span>Seksi Kebersihan</span>
                                                <ul>
                                                    <li><span>Najwa N.F.</span></li>
                                                    <li><span>Intan Safitrih</span></li>
                                                </ul>
                                            </li>
                                            <li><span>Seksi Keamanan</span>
                                                <ul>
                                                    <li><span>Karmila</span></li>
                                                    <li><span>Siti Nurhayu</span></li>
                                                </ul>
                                            </li>
                                          </ul>
                                    </li>
                                    <li><span>Jihan Amelia P.<br>bendahara 1</span></li>
                                    <li><span>Rafli F.S.<br>bendahara 2</span></li>
                                </ul>
                              
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                </ul>
                <div class="position-relative"><a role="button" href="#seksidll" class="btn btn-lg btn-outline-info text-light rounded-pill buttonformobile position-absolute top-50 start-50 translate-middle">Lihat Yang lain</a></div>
            </div>
        </section> 
        <section class="seksidll min-vh-100" id="seksidll">
            <div class="container-fluid">
                <h2 class="text-center my-5">SEKSI - SEKSI DALAM BIDANGNYA</h2>
                <div class="contents">
                    <h3 class="border-bottom border-dark mt-4 fw-bold">Seksi Agama >></h3>
                    <div class="cards text-center row">
                        <div class="col-sm">
                            <div class="card shadow p-3 mb-5">
                                <div class="card-body">
                                    <h3 class="card-title">Seksi Agama 1</h3>
                                    <h5 class="card-subtitle mb-3 text-muted border-bottom border-dark">XI MIPA 5</h5>
                                    <h2 class="card-text">Dhavin R.D.</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card shadow p-3 mb-5">
                                <div class="card-body">
                                    <h3 class="card-title">Seksi Agama 2</h3>
                                    <h5 class="card-subtitle mb-3 text-muted border-bottom border-dark">XI MIPA 5</h5>
                                    <h2 class="card-text">Alfinansyah</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="border-bottom border-dark mt-4 fw-bold">Seksi Olahraga >></h3>
                    <div class="cards text-center row">
                        <div class="col-sm">
                            <div class="card shadow p-3 mb-5">
                                <div class="card-body">
                                    <h3 class="card-title">Seksi Olahraga 1</h3>
                                    <h5 class="card-subtitle mb-3 text-muted border-bottom border-dark">XI MIPA 5</h5>
                                    <h2 class="card-text">Fadila Annur</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card shadow p-3 mb-5">
                                <div class="card-body">
                                    <h3 class="card-title">Seksi Olahraga 2</h3>
                                    <h5 class="card-subtitle mb-3 text-muted border-bottom border-dark">XI MIPA 5</h5>
                                    <h2 class="card-text">Muhamad Arifin</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="border-bottom border-dark mt-4 fw-bold">Seksi Pendidikan >></h3>
                    <div class="cards text-center row">
                        <div class="col-sm">
                            <div class="card shadow p-3 mb-5">
                                <div class="card-body">
                                    <h3 class="card-title">Seksi Pendidikan 1</h3>
                                    <h5 class="card-subtitle mb-3 text-muted border-bottom border-dark">XI MIPA 5</h5>
                                    <h2 class="card-text">Maftuh R.G.</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card shadow p-3 mb-5">
                                <div class="card-body">
                                    <h3 class="card-title">Seksi Pendidikan 2</h3>
                                    <h5 class="card-subtitle mb-3 text-muted border-bottom border-dark">XI MIPA 5</h5>
                                    <h2 class="card-text">Moh. Adrian F.</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="border-bottom border-dark mt-4 fw-bold">Seksi Kebersihan >></h3>
                    <div class="cards text-center row">
                        <div class="col-sm">
                            <div class="card shadow p-3 mb-5">
                                <div class="card-body">
                                    <h3 class="card-title">Seksi Kebersihan 1</h3>
                                    <h5 class="card-subtitle mb-3 text-muted border-bottom border-dark">XI MIPA 5</h5>
                                    <h2 class="card-text">Najwa N.F.</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card shadow p-3 mb-5">
                                <div class="card-body">
                                    <h3 class="card-title">Seksi Kebersihan 2</h3>
                                    <h5 class="card-subtitle mb-3 text-muted border-bottom border-dark">XI MIPA 5</h5>
                                    <h2 class="card-text">Intan Safitrih</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="border-bottom border-dark mt-4 fw-bold">Seksi Keamanan >></h3>
                    <div class="cards text-center row">
                        <div class="col-sm">
                            <div class="card shadow p-3 mb-5">
                                <div class="card-body">
                                    <h3 class="card-title">Seksi Keamanan 1</h3>
                                    <h5 class="card-subtitle mb-3 text-muted border-bottom border-dark">XI MIPA 5</h5>
                                    <h2 class="card-text">Karmila</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card shadow p-3 mb-5">
                                <div class="card-body">
                                    <h3 class="card-title">Seksi Keamanan 2</h3>
                                    <h5 class="card-subtitle mb-3 text-muted border-bottom border-dark">XI MIPA 5</h5>
                                    <h2 class="card-text">Siti Nurhayu</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
        <section class="campus">
            <h1>Our Class XI MIPA 5</h1>
            <p>At your service! Let me be your sun to shine your day! Ehe!</p>
        </section>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,160L18.5,138.7C36.9,117,74,75,111,96C147.7,117,185,203,222,224C258.5,245,295,203,332,170.7C369.2,139,406,117,443,128C480,139,517,181,554,197.3C590.8,213,628,203,665,197.3C701.5,192,738,192,775,160C812.3,128,849,64,886,80C923.1,96,960,192,997,197.3C1033.8,203,1071,117,1108,117.3C1144.6,117,1182,203,1218,197.3C1255.4,192,1292,96,1329,74.7C1366.2,53,1403,107,1422,133.3L1440,160L1440,320L1421.5,320C1403.1,320,1366,320,1329,320C1292.3,320,1255,320,1218,320C1181.5,320,1145,320,1108,320C1070.8,320,1034,320,997,320C960,320,923,320,886,320C849.2,320,812,320,775,320C738.5,320,702,320,665,320C627.7,320,591,320,554,320C516.9,320,480,320,443,320C406.2,320,369,320,332,320C295.4,320,258,320,222,320C184.6,320,148,320,111,320C73.8,320,37,320,18,320L0,320Z"></path></svg>
        <footer>
            <div class="container">
                <h5 class="text-light">©2023 Codetech. All rights reserved</h5>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script>
            window.onscroll = function() {myFunction()};
            function myFunction() {
                if (document.documentElement.scrollTop > 600) {
                    document.getElementById("nvbr").style.backgroundColor = "#0099ff";
                } else {
                    document.getElementById("nvbr").style.backgroundColor = "transparent";
                }
            }

            var navLinks = document.getElementById("navLinks");
            function showmenu(){
                navLinks.style.right = "0";
            }
            function hidemenu(){
                navLinks.style.right = "-200px";
            }
        </script>
    </body>
</html>
