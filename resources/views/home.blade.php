<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mugi Mustakim</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
    <style>
        .p-header {
            padding: 5rem 3rem 5rem 3rem;
        }

        .p-main {
            /* margin-top: 5rem; */
            padding: 0 3rem 5rem 3rem;
        }

        .w-fit {
            width: fit-content;
        }

        .scrollable {
            width: 300px;
            height: 200px;
            overflow: scroll;
        }

        .scrollable::-webkit-scrollbar {
            display: none; /* Untuk menyembunyikan scrollbar pada WebKit browser */
        }

        .scrollable {
            -ms-overflow-style: none;  /* Untuk Internet Explorer dan Edge */
            scrollbar-width: none;  /* Untuk Firefox */
        }
    </style>
    <script src="{{ asset('assets/bootstrap-5.3.3-dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/jquery/jquery-3.7.1.min.js') }}"></script>
</head>
<body>
    <div class="container overflow-hidden">
        <div class="row">
            <header class="col d-flex flex-column vh-100 p-header">
                <div class="flex-grow-1">
                    <div>
                        <h1>John Doe</h1>
                        <h3>Full Stack Developer</h3>
                        <p style="width: 30rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla feugiat feugiat elit, sit amet placerat metus. Sed mauris mi, congue vel pulvinar elementum, maximus lobortis risus. </p>
                    </div>
                    <nav>
                        <ul>
                            <a href="#about"><li>Tentang</li></a>
                            <a href="#experience"><li>Pengalaman</li></a>
                            <a href="#certificate"><li>Sertifikat</li></a>
                        </ul>
                    </nav>
                </div>
                <div class="d-flex gap-2">
                    <a href="#">Github</a>
                    <a href="#">Linkedin</a>
                    <a href="#">Instagram</a>
                </div>
            </header>
            <main class="col p-main d-flex flex-column gap-5 vh-100 scrollable">
                <section id="about" style="padding-top: 5rem;">
                    <h4 class="mb-3">Tentang</h4>
                    <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla feugiat feugiat elit, sit amet placerat metus. Sed mauris mi, congue vel pulvinar elementum, maximus lobortis risus. Quisque nec iaculis orci. Fusce laoreet risus nec rutrum cursus. Ut congue dolor vel magna egestas, viverra scelerisque eros egestas.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla feugiat feugiat elit, sit amet placerat metus. Sed mauris mi, congue vel pulvinar elementum, maximus lobortis risus. Quisque nec iaculis orci. Fusce laoreet risus nec rutrum cursus. Ut congue dolor vel magna egestas, viverra scelerisque eros egestas.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla feugiat feugiat elit, sit amet placerat metus. Sed mauris mi, congue vel pulvinar elementum, maximus lobortis risus. Quisque nec iaculis orci. Fusce laoreet risus nec rutrum cursus. Ut congue dolor vel magna egestas, viverra scelerisque eros egestas.</p>
                    </div>
                </section>
                <section id="experience">
                    <h4 class="mb-3">Pengalaman</h4>
                    <div class="d-flex flex-column gap-3">
                        <div class="row">
                            <div class="col-4">Mei - Juni 2023</div>
                            <div class="col-8">
                                <h5>PT Ayo Menebar Kebaikan</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla feugiat feugiat elit, sit amet placerat metus. Sed mauris mi, congue vel pulvinar elementum, maximus lobortis risus. Quisque nec iaculis orci. Fusce laoreet risus nec rutrum cursus. Ut congue dolor vel magna egestas, viverra scelerisque eros egestas.</p>
                                <div>
                                    <div class="bg-black rounded text-white px-3 py-1 w-fit">Laravel</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">Juli 2023 - Saat ini</div>
                            <div class="col-8">
                                <h5>PT Ayo Menebar Kebaikan</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla feugiat feugiat elit, sit amet placerat metus. Sed mauris mi, congue vel pulvinar elementum, maximus lobortis risus. Quisque nec iaculis orci. Fusce laoreet risus nec rutrum cursus. Ut congue dolor vel magna egestas, viverra scelerisque eros egestas.</p>
                                <div>
                                    <div class="bg-black rounded text-white px-3 py-1 w-fit">Laravel</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="certificate">
                    <h4 class="mb-3">Sertifikat</h4>
                    <div>
                        --
                    </div>
                </section>
            </main>
        </div>
    </div>
</body>
<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>
</html>
