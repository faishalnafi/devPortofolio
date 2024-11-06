<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="/" class="logo d-flex align-items-center">
            <img src="{{ asset('assets/img/logo.png') }}" alt="TransLife By Nafi'">
            <span>TransLife</span>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="/">Home</a></li>
                <li><a class="nav-link scrollto" href="/#about">About</a></li>
                <li><a class="nav-link scrollto" href="/#features">Services</a></li>
                <li><a class="nav-link scrollto" href="/#team">Team</a></li>
                <li class="dropdown"><a href="#"><span>Fitur</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/portofolio">Portofolio</a></li>
                        <li class="dropdown"><a href="#"><span>Sosmed</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="https://www.instagram.com/faishal.nafi/">Instagram</a></li>
                                <li><a href="https://github.com/faishal-nafi">Github</a></li>
                                <li><a href="https://twitter.com/FaishalNafi_">Twitter</a></li>
                                <li><a href="https://web.facebook.com/faishal.nafi">Facebook</a></li>
                                <li><a href="https://www.linkedin.com/in/faishal-nafi/">Linkedin</a></li>
                                <li><a href="https://wa.me/6285731707313/">WhatsApp</a></li>
                                <li><a href="https://t.me/FaishalNafiR">Telegram</a></li>
                            </ul>
                        </li>
                        <li><a href="https://web.nafii.my.id/store">Store</a></li>
                        <li><a href="https://blog.nafii.my.id">Blog Galery</a></li>
                        <li><a href="https://angel.nafii.my.id/spotify/">Spotify</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

                {{-- Sementara fitur login dinonaktifkan --}}
                {{-- @auth
                <li><a class="getstarted scrollto" href="/logout">Log Out</a></li>
                @else
                <li><a class="getstarted scrollto" href="/sso">Log In</a></li>
                @endauth --}}
                {{-- SSO --}}
                
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
