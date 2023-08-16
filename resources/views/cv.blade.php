<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- CSS -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Merriweather Sans', sans-serif;
        }

        *::selection {
            color: rgb(252, 252, 252);
            background-color: rgb(25, 200, 156);
        }

        body {
            background-color: rgb(245, 247, 250);
        }

        .container {
            background-color: rgb(252, 252, 252);
            margin: 90px 440px 0;
            border-radius: 5px;
            box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.2);
        }

        header {
            display: flex;
            position: relative;
            background-color: rgb(25, 201, 157);
            background-image: url("data:image/svg+xml,<svg id='patternId' width='100%' height='100%' xmlns='http://www.w3.org/2000/svg'><defs><pattern id='a' patternUnits='userSpaceOnUse' width='69.283' height='40' patternTransform='scale(2) rotate(0)'><rect x='0' y='0' width='100%' height='100%' fill='hsla(165, 78%, 44%, 1)'/><path d='M46.189-20L57.736 0M46.189 20l11.547 20m-46.189 0l11.547 20M11.547 0l11.547 20m40.415 30H40.415M28.868 30H5.774m23.094-40H5.774m57.735 20H40.415m0 20L28.868 50m11.547-60L28.868 10m46.188 0L63.509 30M5.774 10L-5.773 30m75.056 10H46.189L34.64 20 46.19 0h23.094C73.13 6.667 76.98 13.333 80.83 20zM57.736 60H34.64L23.094 40l11.547-20h23.095c3.848 6.667 7.698 13.333 11.547 20L57.736 60zm0-40H34.64L23.094 0l11.547-20h23.095L69.283 0c-3.87 6.7-8.118 14.06-11.547 20zM34.64 60H11.547L0 40l11.547-20h23.094L46.19 40 34.64 60zm0-40H11.547L0 0l11.547-20h23.094L46.19 0 34.64 20zM23.094 40H0l-5.773-10-5.774-10L0 0h23.094l11.547 20-11.547 20z'  stroke-width='0.5' stroke='hsla(0, 0%, 0%, 1)' fill='none'/></pattern></defs><rect width='800%' height='800%' transform='translate(-200,-142)' fill='url(%23a)'/></svg>");
            padding: 55px 50px;
            margin-bottom: -80px;
            height: fit-content;
            border-radius: 5px 5px 0px 0px;
            text-shadow: 0.1px 1px 5px rgba(0, 0, 0, 0.5);
        }

        header img {
            position: relative;
            z-index: 2;
            border: 8px solid rgb(252, 252, 252);
            width: 180px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
        }

        header .text {
            margin-left: 60px;
        }

        header h4,
        header h1 {
            color: rgb(252, 252, 252);
        }

        h1 {
            font-size: 40px;
        }

        .about {
            position: relative;
            z-index: 1;
            background-color: rgb(252, 252, 252);
            padding: 50px;
            display: grid;
            grid-template-columns: 1fr 1fr;
        }

        h2 {
            margin: 10px 0 40px;
        }

        .about-me {
            width: 80%;
        }

        .about-me p {
            color: #292929;
            font-weight: 300;
        }

        .specific {
            display: grid;
            grid-template-areas:
                'span p';
            gap: 15px;
            margin-top: 20px;
            font-weight: 300;
        }

        .specific span {
            grid-area: span;
            margin-right: 25px;
        }

        .specific p {
            color: #292929;
        }

        .line {
            border-bottom: 1px solid #0d0d0d;
        }

        .line-2px {
            border-bottom: 2px solid #0d0d0d;
        }

        .education,
        .contact {
            padding: 30px 50px;
            margin-bottom: 30px;
        }

        .education h2 {
            margin: 10px 0 40px;
        }

        .education-grouping {
            display: flex;
            justify-content: space-evenly;
        }

        .education-level {
            position: relative;
            width: 280px;
            margin: 20px 10px;
            padding: 30px;
            top: 0;
            border-top: 3px solid rgb(25, 201, 157);
            box-shadow: 0px 7px 10px -5px rgba(0, 0, 0, 0.2);
            border-radius: 3px;
            transition: 0.5s;
        }

        .education-level:hover {
            top: -10px;
            box-shadow: 0px 8px 10px -2px rgba(0, 0, 0, 0.2);
        }

        .years {
            color: #888;
            font-size: 13px;
        }

        .contact-grouping {
            display: grid;
            grid-template-columns: 2fr 1fr;
        }

        
        form {
            display: grid;
            gap: 25px;
            grid-template-areas:
                'name email'
                'message message'
                'send 0';
        }
        
        input,
        textarea {
            padding: 10px;
            color: #0d0d0d;
            border: 1px solid #0d0d0d;
            border-radius: 3px;
            transition: .3s;
            background-color: rgb(245, 247, 250);
        }

        input:focus,
        textarea:focus {
            box-shadow: 0px 0px 10px rgba(25, 200, 156, 0.5);
            outline: 1px solid rgb(25, 201, 157);
            border: 1px solid rgb(25, 201, 157);
        }
        
        button {
            cursor: pointer;
            grid-area: send;
            padding: 6px;
            margin-right: 150px;
            color: rgb(252, 252, 252);
            border: 1px solid rgb(25, 201, 157);
            background-color: rgb(25, 201, 157);
            border-radius: 5px;
            transition: .3s;
        }
        
        button:hover {
            background-color: rgb(22, 177, 138);
        }

        button:focus {
            box-shadow: 0px 0px 10px 2px rgba(25, 200, 156, 0.5);
        }
        
        textarea {
            grid-area: message;
            resize: none;
            font-size: 14px;
        }

        .contact-grouping .map {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .map p {
            font-size: 13px;
            margin: 15px;
        }

        .name,
        .copyright {
            display: flex;
            justify-content: center;
            margin: 60px 0 20px;
        }

        p.copyright {
            font-size: 14px;
            margin: 40px 0 50px;
        }

        .platform {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        a,
        a:visited,
        p.copyright {
            color: rgb(13, 13, 13, 0.5);
        }
        
        a:hover {
            color: rgb(41, 41, 41);
        }
        </style>
    <title>My CV</title>
</head>

<body>
    <section class="container">
        <header>
            <img src="{{URL::asset('image/virgi.jpg')}}" alt="My Picture">
            <div class="text">
                <h1>Virgi Putra Riyadi</h1>
                <h4>Seorang Pelajar</h4>
            </div>
        </header>
        <section class="about">
            <section class="about-me">
                <h2>About Me</h2>
                <p>Saya adalah seorang pelajar yang memiliki impian menjadi seorang Web Developer yang berperan di bidang Front End.</p>
            </section>
            <section class="specific">
                <span>Age</span>
                <p>16</p>
                <span>Email</span>
                <p>virgiriyadi2404@gmail.com</p>
                <span>Phone</span>
                <p>+62 89603784944</p>
                <span>Address</span>
                <p>Jln. Kebon Gedang No.114/126 E , Bandung , Indonesia</p>
            </section>
        </section>
        <div class="line"></div>
        <section class="education">
            <h2>Education</h2>
            <section class="education-grouping">
                <div class="education-level">
                    <h3>SDN 063 Kebon Gedang</h3>
                    <span class="years">2013 - 2019</span>
                </div>
                <div class="education-level">
                    <h3>SMPN 62 Bandung</h3>
                    <span class="years">2019 - 2022</span>
                </div>
                <div class="education-level">
                    <h3>SMKN 2 Bandung</h3>
                    <span class="years">2022 - saat ini</span>
                </div>
            </section>
        </section>
        <div class="line"></div>
        <section class="contact">
            <h2>Contact</h2>
            <div class="contact-grouping">
                <form action="">
                    <input type="text" placeholder="Your Name">
                    <input type="email" placeholder="Your Email">
                    <textarea cols="50" rows="6" placeholder="Your Message"></textarea>
                    <button type="submit">Send</button>
                </form>
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1665.2546752815558!2d107.64356935377268!3d-6.930535296764166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9388e72222b%3A0xbb2b621bad367dfe!2sRumah%20Arvi!5e0!3m2!1sen!2sid!4v1692199782301!5m2!1sen!2sid"
                         width="150" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <p>Address : Jln. Kebon Gedang No.114/126 E</p>
                </div>
            </div>
        </section>
    </section>
    <h2 class="name">Virgi</h2>
    <section class="platform">
        <a href="https://www.facebook.com/virgi.riyadi.9"><i class="fa-brands fa-facebook fa-xl"></i></a>
        <a href="https://www.instagram.com/virz.12/"><i class="fa-brands fa-instagram fa-xl"></i></a>
        <a href="https://github.com/Virz12"><i class="fa-brands fa-github fa-xl"></i></a>
    </section>
    <p class="copyright">© Virgi. All rights reserved</p>
    <!-- ICON PLATFORM -->
    <script src="https://kit.fontawesome.com/a1fe272ba9.js" crossorigin="anonymous"></script>
</body>
</html>