<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8f0691896d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Portfolio - Contact</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="projects.php">Projecten</a></li>
                <li><a class="nav-active" href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="contact-info">
            <!--
            Source - https://stackoverflow.com/a/41566570
            Posted by cyptus, modified by community. See post 'Timeline' for change history
            Retrieved 2026-02-19, License - CC BY-SA 4.0
            -->

            <p>mail:
                <a href="#" class="cryptedmail"
                data-name="r.lemmers"
                data-domain="outlook"
                data-tld="com"
                onclick="window.location.href = 'mailto:' + this.dataset.name + '@' + this.dataset.domain + '.' + this.dataset.tld; return false;"></a></p>
            <p>tel:
                <a href="#" class="cryptedphone"
                data-countrycode="31"
                data-number="0624227346"
                onclick="window.location.href = 'tel:' + this.dataset.countrycode + this.dataset.number; return false;"></a></p>
        </section>
    </main>
</body>