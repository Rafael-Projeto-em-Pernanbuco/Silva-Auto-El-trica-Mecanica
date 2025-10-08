
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Silva Auto Elétrica e Mecânica</title>
    <style>
        body {
            background-color: yellow;
            color: red;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header, footer {
            background-color: black;
            color: red;
            text-align: center;
            padding: 10px 0;
        }

        nav {
            text-align: center;
            margin: 15px 0;
        }

        nav a {
            background-color: black;
            color: red;
            padding: 10px 15px;
            margin: 5px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
        }

        .container {
            padding: 20px;
            text-align: center;
        }

        .social-buttons a {
            margin: 5px;
            display: inline-block;
        }

        iframe {
            width: 90%;
            height: 300px;
            border: none;
            margin: 20px auto;
        }

        form input[type="email"], form input[type="submit"] {
            padding: 10px;
            margin: 5px;
        }

        form input[type="submit"] {
            background-color: black;
            color: red;
            border: none;
        }
    </style>
</head>
<body>

    <header>
        <h1>Silva Auto Elétrica e Mecânica</h1>
        <p>Rua José Arnaldo, Nº410 - Centro, Exu - PE</p>
    </header>

    <nav>
        <a href="#anuncios">Anúncios</a>
        <a href="#historico">Histórico</a>
        <a href="#portfolio">Portfólio</a>
    </nav>

    <div id="google_translate_element" style="text-align: center; margin-bottom: 20px;"></div>

    <div class="container">
        <h2>Localização</h2>
        <!-- Google Maps -->
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.215446060756!2d-39.7250000857482!3d-7.512222975242202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7a2a1dca2b38d87%3A0x1c96c9c45a2c0c07!2sRua%20Jos%C3%A9%20Arnaldo%2C%20410%20-%20Centro%2C%20Exu%20-%20PE!5e0!3m2!1spt-BR!2sbr!4v1695144968722"
            allowfullscreen="" loading="lazy">
        </iframe>

        <h2>Entre em Contato</h2>
        <form>
            <input type="email" placeholder="Digite seu e-mail" required>
            <input type="submit" value="Cadastrar">
        </form>

        <h2>Nossas Redes Sociais</h2>
        <div class="social-buttons">
            <a href="https://instagram.com" target="_blank">Instagram</a>
            <a href="https://facebook.com" target="_blank">Facebook</a>
            <a href="https://twitter.com" target="_blank">Twitter</a>
            <a href="https://www.kwai.com" target="_blank">Kwai</a>
            <a href="https://telegram.org" target="_blank">Telegram</a>
            <a href="https://tiktok.com" target="_blank">TikTok</a>
            <a href="https://wa.me/5587999019099" target="_blank">WhatsApp</a>
        </div>

        <section id="anuncios">
            <h2>Anúncios</h2>
            <p>Coloque aqui seus últimos anúncios e promoções.</p>
        </section>

        <section id="historico">
            <h2>Histórico</h2>
            <p>História da empresa, conquistas, eventos passados, etc.</p>
        </section>

        <section id="portfolio">
            <h2>Portfólio</h2>
            <p>Serviços realizados, fotos de antes e depois, depoimentos.</p>
        </section>
    </div>

    <footer>
        <p>&copy; 2025 Silva Auto Elétrica e Mecânica. Todos os direitos reservados.</p>
    </footer>

    <!-- Google Translate -->
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement(
                {pageLanguage: 'pt', layout: google.translate.TranslateElement.InlineLayout.SIMPLE},
                'google_translate_element'
            );
        }
    </script>
    <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <!-- Tawk.to Chat Online -->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/XXXXXXXXXXXX/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
</body>
</html>
