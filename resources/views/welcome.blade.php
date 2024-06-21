<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alfa - Pagina Iniziale</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            font-family: 'Roboto', sans-serif;
            background-color: #f5f5f5;
            overflow-x: hidden;
            color: #333;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .section {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: transform 0.5s ease-in-out;
            position: relative;
        }

        .section:nth-child(even) {
            background-color: #fff;
            color: #000;
        }

        .section:nth-child(odd) {
            background-color: #000;
            color: #fff;
        }

        .content {
            text-align: center;
            max-width: 800px;
            padding: 0 2rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100%;
            line-height: 4.5rem;
        }

        .big-text {
            font-size: 4rem;
            font-weight: 700;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            opacity: 0;
            animation: slideInFromBottom 0.8s ease-out forwards;
        }

        .big-text span {
            color: #ff0000;
            line-height: 1;
        }

        @keyframes slideInFromBottom {
            0% {
                transform: translateY(100%);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .scroll-down {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            width: 100%;
            font-size: 1.2rem;
        }

        .alfa-link {
            font-family: 'Roboto', sans-serif;
            font-size: 2rem;
            font-weight: bold;
            letter-spacing: -1px;
            text-decoration: none;
            position: fixed;
            top: 20px;
            left: 20px;
            z-index: 9999;
            transition: all 0.2s ease-in-out;
            color: #000;
        }

        body .alfa-link:hover {
            color: #ff0000 !important;
        }

        /* Footer simile a quello di NOOO Agency */
        .footer {
            background-color: #000;
            color: #fff;
            padding: 3rem 0;
            text-align: center;
            font-size: 1.4rem;
            position: relative;
            z-index: 1;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .footer-logo {
            flex: 1 1 100%;
            max-width: 120px;
            margin-bottom: 2rem;
        }

        .footer-logo img {
            max-width: 100%;
            height: auto;
        }

        .footer-links {
            flex: 1 1 25%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-bottom: 2rem;
        }

        .footer-links h3 {
            font-size: 1.6rem;
            margin-bottom: 1rem;
        }

        .footer-links ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .footer-links li {
            margin-bottom: 1rem;
        }

        .footer-links a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: #ff0000;
        }

        .footer-info {
            flex: 1 1 50%;
            text-align: left;
        }

        .footer-info p {
            margin-bottom: 1rem;
        }

        .footer-info .copyright {
            font-size: 0.9rem;
            margin-top: 2rem;
        }

        .footer-social {
            flex: 1 1 25%;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }

        .footer-social a {
            color: #fff;
            text-decoration: none;
            font-size: 1.6rem;
            margin-bottom: 1rem;
            transition: color 0.3s ease;
        }

        .footer-social a:hover {
            color: #ff0000;
        }
    </style>
</head>
<body>
    <a href="#" class="alfa-link">ALFA</a>
    
    <div class="section">
        <div class="content">
            <div class="big-text">
                <span>A</span>udace
            </div>
            <div class="big-text">
                <span>L</span>ussuosa
            </div>
            <div class="big-text">
                <span>F</span>ormidabile
            </div>
            <div class="big-text">
                <span>A</span>ffascinante
            </div>
        </div>
        <div class="scroll-down">Scorri verso il basso</div>
    </div>
    
    <div class="section">
        <div class="content">
            <div class="big-text">La tua auto è questo e molto più</div>
        </div>
        <div class="scroll-down">Scorri verso il basso</div>
    </div>
    
    <div class="section">
        <div class="content">
            <div class="big-text">Qui facciamo</div>
            <div class="big-text">Login e</div>
            <div class="big-text">Registrazione</div>
        </div>
    </div>

    <!-- Footer simile a quello di NOOO Agency -->
    <div class="footer">
        <div class="footer-content">
            <div class="footer-logo">
                <img src="logo.png" alt="Logo">
            </div>
            <div class="footer-links">
                <h3>Agency</h3>
                <ul>
                    <li><a href="#">Servizi</a></li>
                    <li><a href="#">Contatti</a></li>

                </ul>
            </div>
            <div class="footer-info">
                <p>Via Gianbattista Morgani 22, Verona (Italy)</p>
                <p>T. (+39) 327 5442784</p>
                <p>AlfaConcessionaria@alfa.it</p>
            </div>
            <div class="footer-social">
                <a href="#">Instagram</a>
                <a href="#">Linkedin</a>
                <a href="#">Facebook</a>
            </div>
        </div>
        <div class="copyright">
            © 2024 Alfa Agency srl – IT03747070245<br>
            <a href="#">Privacy - Cookies</a>
        </div>
    </div>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sections = document.querySelectorAll('.section');
            const alphaLink = document.querySelector('.alfa-link');
            let index = 0;

            function updateLinkColor() {
                const currentSection = sections[index];
                const sectionColor = window.getComputedStyle(currentSection).backgroundColor;
                alphaLink.style.color = (sectionColor === 'rgb(255, 255, 255)') ? '#000' : '#fff';
            }

            window.addEventListener('wheel', function(e) {
                if (e.deltaY > 0) {
                    index++;
                } else {
                    index--;
                }

                index = Math.max(0, Math.min(index, sections.length - 1));

                const translateY = -index * 100;
                sections.forEach((section, i) => {
                    section.style.transform = `translateY(${translateY}vh)`;
                });

                updateLinkColor();
            });

            alphaLink.addEventListener('click', function(e) {
                e.preventDefault();

                index = 0;
                sections.forEach((section) => {
                    section.style.transform = '';
                });

                updateLinkColor();

                window.scrollTo({ top: 0, behavior: 'smooth' });
            });

            updateLinkColor();
        });
    </script>
</body>
</html>
