<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="{{asset ('css/style_pp.css')}}">

    <title>Company Profile</title>

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-lg fixed-top">
        <div class="container-lg container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{asset ('image/profile_page/brand.png')}}" alt="RPL Brand" width="50px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav fw-medium ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#" onclick="Pick(this)">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cv" onclick="Pick(this)">My CV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#intro" onclick="Pick(this)">Intro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#box" onclick="Pick(this)">Box</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Header -->
    <header class="container align-items-center justify-content-center d-flex">
        <div class="row">
            <div class="col">
                <h1 class="text-white text-center">Pengembangan Perangkat Lunak dan Gim</h1>
            </div>
        </div>
    </header>
    <!-- End Header -->

    <!-- Intro -->
    <section id="intro" class="text-center mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1>Intro</h1>
                    <p class="fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dicta cum voluptas illum delectus,
                        velit amet sit labore necessitatibus accusamus officiis animi. Harum sed aliquam ipsam at ipsum ad ipsa.</p>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs" width="100%" height="300" preserveAspectRatio="none" viewBox="0 0 1440 300">
            <g mask="url(&quot;#SvgjsMask1077&quot;)" fill="none">
                <rect width="1440" height="300" x="0" y="0" fill="rgba(255, 255, 255, 1)"></rect>
                <path d="M 0,20 C 144,53.2 432,164.2 720,186 C 1008,207.8 1296,140.4 1440,129L1440 300L0 300z" fill="rgba(227, 147, 0, 1)"></path>
            </g>
            <defs>
                <mask id="SvgjsMask1077">
                    <rect width="1440" height="300" fill="#ffffff"></rect>
                </mask>
            </defs>
        </svg>
    </section>
    <!-- End Intro -->

    <!-- Box -->
    <section id="box">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card py-5 px-5 mb-5 shadow">
                        <div class="card-body">
                            <h2 class="card-title">Judul</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae deleniti quae placeat quod repellat iste.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card py-5 px-5 mb-5 shadow">
                        <div class="card-body">
                            <h2 class="card-title">Judul</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae deleniti quae placeat quod repellat iste.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card py-5 px-5 mb-5 shadow">
                        <div class="card-body">
                            <h2 class="card-title">Judul</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae deleniti quae placeat quod repellat iste.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs" width="100%" height="300" preserveAspectRatio="none" viewBox="0 0 1440 300">
            <g mask="url(&quot;#SvgjsMask1005&quot;)" fill="none">
                <rect width="1440" height="300" x="0" y="0" fill="rgba(227, 147, 0, 1)"></rect>
                <path d="M 0,78 C 96,109.6 288,228.6 480,236 C 672,243.4 768,116 960,115 C 1152,114 1344,207.8 1440,231L1440 300L0 300z" fill="rgba(101, 66, 9, 1)"></path>
            </g>
            <defs>
                <mask id="SvgjsMask1005">
                    <rect width="1440" height="300" fill="#ffffff"></rect>
                </mask>
            </defs>
        </svg>
    </section>
    <!-- End Box -->

    <!-- Footer -->
    <footer>
        <div class="container py-5 text-white">
            <div class="row">
                <div class="col-12 col-lg-6 mb-5 mb-lg-0">
                    <h2>Judul</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi maxime magni minima exercitationem
                        beatae rerum et architecto obcaecati fuga eum.</p>
                </div>
                <div class="col">
                    <h2>Judul</h2>
                    <ul class="footer_point">
                        <li>Lorem, ipsum dolor.</li>
                        <li>Lorem, ipsum dolor sit.</li>
                        <li>Lorem, ipsum.</li>
                        <li>Lorem, ipsum dolor sit amet.</li>
                    </ul>
                </div>
                <div class="col">
                    <h2>Judul</h2>
                    <ul class="footer_point">
                        <li>Lorem, ipsum dolor.</li>
                        <li>Lorem, ipsum dolor sit.</li>
                        <li>Lorem, ipsum.</li>
                        <li>Lorem, ipsum dolor sit amet.</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <!-- My JS -->
    <script>
        let boldText = null;

        function Pick(text) {
            if (text != boldText) {
                if (boldText) {
                    boldText.classList.remove("active");
                }
                boldText = text;
                text.classList.add("active");
            }
        }
    </script>
</body>

</html>