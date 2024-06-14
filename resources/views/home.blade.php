<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mugi Mustakim</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="{{ asset('assets/bootstrap-5.3.3-dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/jquery/jquery-3.7.1.min.js') }}"></script>
</head>
<body>
    <div class="container overflow-hidden">
        <div class="row">
            <!-- Header -->
            <header class="col-12 col-lg-5 d-flex flex-column vh-lg-100 p-header">
                <div class="flex-grow-1 d-flex flex-column gap-3 gap-lg-5">
                    <div>
                        <h1>Mugi Mustakim</h1>
                        <h3>Full Stack Developer</h3>
                        <p style="width: 25rem;">Develop web applications according to user needs.</p>
                    </div>
                    <nav>
                        <ul>
                            <a href="#about"><li class="active list">About</li></a>
                            <a href="#experience"><li class="list">Experience</li></a>
                            <a href="#certificate"><li class="list">Certificate</li></a>
                        </ul>
                    </nav>
                    <div>
                        <div class="d-flex flex-wrap justify-content-between gap-2">
                            <!-- JS Flip Card -->
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <img src="{{ asset('assets/images/js.png') }}" alt="js">
                                    </div>
                                    <div class="flip-card-back">
                                        <a href="https://www.credly.com/badges/947ba31d-653e-4f5c-8944-ae7c0f4afeaf/linked_in_profile" target="_blank" class="text-decoration-none">Click</a>
                                    </div>
                                </div>
                            </div>
                            <!-- PHP Flip Card -->
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <img src="{{ asset('assets/images/php.png') }}" alt="php">
                                    </div>
                                    <div class="flip-card-back">
                                        <a href="https://www.sololearn.com/en/certificates/CC-WACKT7WA" target="_blank" class="text-decoration-none">Click</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Python Flip Card -->
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <img src="{{ asset('assets/images/python.png') }}" alt="python">
                                    </div>
                                    <div class="flip-card-back">
                                        <a href="https://drive.google.com/file/d/1PiPE7ClHTgZgaO0uNBKB99vlcw9s-eVr/view?usp=sharing" target="_blank" class="text-decoration-none">Click</a>
                                    </div>
                                </div>
                            </div>
                             <!-- C# Flip Card -->
                             <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <img src="{{ asset('assets/images/c-sharp.png') }}" alt="c-sharp">
                                    </div>
                                    <div class="flip-card-back">
                                        <a href="https://www.freecodecamp.org/certification/mugimustakim/foundational-c-sharp-with-microsoft" target="_blank" class="text-decoration-none">Click</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex gap-2 mt-5 mt-lg-0">
                    <!-- Github -->
                    <a href="https://github.com/mstkm" target="_blank" class="text-white w-5 h-5 p-2 rounded-circle bg-black">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
                    </a>
                    <!-- Linkedin -->
                    <a href="https://www.linkedin.com/in/mugimustakim/" target="_blank" class="text-white w-5 h-5 p-2 rounded-circle bg-black">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                    </a>
                    <!-- Instagram -->
                    <a href="https://www.instagram.com/mgmstkm/" target="_blank" class="text-white w-5 h-5 p-2 rounded-circle bg-black">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                    </a>
                </div>
            </header>

            <!-- Main -->
            <main class="col p-main d-flex flex-column gap-3 gap-lg-5 h-main scrollable">
                <section id="about">
                    <h4 class="mb-lg-3">About</h4>
                    <div>
                        <p>I am a Full Stack Developer with more than 1 year of experience in developing web applications. I have skills in various technologies, including PHP (Laravel), JavaScript (React.js, Node.js), and databases (MySQL, PostgreSQL and MongoDB). I am very enthusiastic about continuing to learn new technologies so that my abilities continue to improve.</p>
                        <p>Over the course of my career, I have completed a variety of projects, all of which focused on optimal user experience and high performance.</p>
                        <p>Based on my background and passion for continuing to learn and develop, I am confident that I can make a positive and significant contribution.</p>
                    </div>
                </section>
                <section id="experience">
                    <h4 class="mb-lg-3">Experience</h4>
                    <div class="d-flex flex-column gap-3">
                        <div class="wrapper">
                            <a href="https://web.globalservice.co.id/" target="_blank" class="text-black">
                                <h5>PT Global Service Indonesia</h5>
                            </a>
                            <p>July 2023 - Currently</p>
                            <ul>
                                <li>Assigned to work at <a href="https://www.patria.co.id/" target="_blank" class="text-black">PT United Tractors Pandu Engineering.</a></li>
                                <li>Develop and maintain web-based applications used by companies to manage business processes in manufacturing and remanufacturing divisions.</li>
                                <li>Perform testing to ensure the application runs well.</li>
                                <li>Troubleshooting and debugging to resolve technical problems that arise in the application.</li>
                                <li>Optimize application performance to ensure fast response and efficiency in data management.</li>
                            </ul>
                            <div class="d-flex gap-1 flex-wrap">
                                <div class="bg-black rounded text-white px-3 py-1 w-fit text-nowrap">Laravel</div>
                                <div class="bg-black rounded text-white px-3 py-1 w-fit text-nowrap">jQuery</div>
                                <div class="bg-black rounded text-white px-3 py-1 w-fit text-nowrap">Boostrap</div>
                                <div class="bg-black rounded text-white px-3 py-1 w-fit text-nowrap">ReactJS</div>
                                <div class="bg-black rounded text-white px-3 py-1 w-fit text-nowrap">NodeJS</div>
                                <div class="bg-black rounded text-white px-3 py-1 w-fit text-nowrap">MySQL</div>
                                <div class="bg-black rounded text-white px-3 py-1 w-fit text-nowrap">SQL Server</div>
                            </div>
                        </div>
                        <div class="wrapper">
                            <a href="https://ayomenebarkebaikan.id/" target="_blank" class="text-black">
                                <h5>PT Ayo Menebar Kebaikan</h5>
                            </a>
                            <p>May - June 2023</p>
                            <ul>
                                <li>Develop and maintain web-based CRM applications used by companies to manage relationships with customers.</li>
                                <li>Work with the team in developing scalable and maintainable applications.</li>
                                <li>Troubleshooting and debugging to resolve technical problems that arise in the application.</li>
                            </ul>
                            <div class="d-flex gap-1 flex-wrap">
                                <div class="bg-black rounded text-white px-3 py-1 w-fit text-nowrap">Laravel</div>
                                <div class="bg-black rounded text-white px-3 py-1 w-fit text-nowrap">jQuery</div>
                                <div class="bg-black rounded text-white px-3 py-1 w-fit text-nowrap">Boostrap</div>
                                <div class="bg-black rounded text-white px-3 py-1 w-fit text-nowrap">PostgreSQL</div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="certificate">
                    <h4 class="mb-lg-3">Certificate</h4>
                    <div>
                        <div class="wrapper">
                            <a href="https://learn.saylor.org/admin/tool/certificate/index.php?code=0124680806MM" target="_blank" class="text-black">
                                <h5>CS101: Introduction to Computer Science I</h5>
                            </a>
                            <span>Saylor Academy</span>
                        </div>
                        <div class="wrapper">
                            <a href="https://www.credly.com/badges/09a838dd-8a31-4cd1-879a-ff0dfeee99c2/linked_in_profile" target="_blank" class="text-black">
                                <h5>Information Technology Fundamentals</h5>
                            </a>
                            <span>IBM SkillsBuild</span>
                        </div>
                        <div class="wrapper">
                            <a href="https://www.credly.com/badges/3befd90d-0e13-4b40-8298-0496765bf71b/linked_in_profile" target="_blank" class="text-black">
                                <h5>Web Development Fundamentals</h5>
                            </a>
                            <span>IBM SkillsBuild</span>
                        </div>
                        <div class="wrapper">
                            <a href="https://drive.google.com/file/d/1UM9lb9pWYEwIpJd_36xA2wb64jFlwM26/view?usp=sharing" target="_blank" class="text-black">
                                <h5>Junior Web Developer</h5>
                            </a>
                            <span>Digital Talent Scholarship</span>
                        </div>
                        <div class="wrapper">
                            <a href="https://drive.google.com/file/d/1CT4wWdBrSc5A0l1tYeasjmtAaiAxms9o/view?usp=sharing" target="_blank" class="text-black">
                                <h5>Full Stack Developer</h5>
                            </a>
                            <span>Fazztrack</span>
                        </div>
                        <div class="wrapper">
                            <a href="https://drive.google.com/file/d/1-n1ktticrSvAN1djbDaO-ll1Oz_W49wT/view?usp=sharing" target="_blank" class="text-black">
                                <h5>Back End Developer</h5>
                            </a>
                            <span>DBS Foundation Coding Camp</span>
                        </div>
                        <div class="wrapper">
                            <a href="https://drive.google.com/file/d/1e6keKsD5LNGPDpE41sukdGupKXUqzlZd/view?usp=sharing" target="_blank" class="text-black">
                                <h5>Data Engineer</h5>
                            </a>
                            <span>Digital Skola</span>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
</body>
<script>
    $(document).ready(function() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        $('a').on('click', function() {
            console.log($(this))
            $(".list").removeClass();
            $(".list").addClass("list");
            $(this).children().removeClass();
            $(this).children().addClass("active list");
        });
    });
</script>
</html>
