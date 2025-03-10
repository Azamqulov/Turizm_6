<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keşfet Türkiye - Eşsiz Güzelliklerin Ülkesi</title>
    <meta name="description" content="Türkiye'nin eşsiz tarihi, kültürü, plajları ve lezzetleriyle dolu bir seyahat deneyimi yaşayın. En popüler turistik yerler, oteller ve gezi rehberi.">
    <meta name="keywords" content="Türkiye turizm, Türkiye tatil, İstanbul gezilecek yerler, Kapadokya, Antalya plajları, Türk mutfağı">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Raleway:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Çerez Banner -->
    <div id="cookie-banner" class="cookie-banner">
        <p>Bu website, size en iyi deneyimi sunmak için çerezleri kullanmaktadır. Sitemizi kullanmaya devam ederek, çerez kullanımımızı kabul etmiş olursunuz.</p>
        <div class="cookie-buttons">
            <a href="cerez-politikasi.php" class="cookie-more">Daha Fazla Bilgi</a>
            <button id="accept-cookies" class="cookie-accept">Kabul Et</button>
        </div>
    </div>

    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="logo">
                <h1>Keşfet Türkiye</h1>
            </div>
            <nav class="main-nav">
                <button class="mobile-menu-toggle" id="mobile-menu-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <ul class="nav-list" id="nav-list">
                    <li><a href="index.php" class="active">Ana Sayfa</a></li>
                    <li><a href="#destinasyonlar">Destinasyonlar</a></li>
                    <li><a href="#kultur">Kültür & Tarih</a></li>
                    <li><a href="#mutfak">Türk Mutfağı</a></li>
                    <li><a href="iletisim.php">İletişim</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h2>Medeniyetlerin Beşiği Türkiye'yi Keşfedin</h2>
            <p>Binlerce yıllık tarihi, eşsiz doğal güzellikleri ve zengin kültürüyle unutulmaz bir deneyim</p>
            <a href="#destinasyonlar" class="btn-primary">Keşfetmeye Başla</a>
        </div>
    </section>

    <!-- Main Content -->
    <main>
        <!-- Intro Section -->
        <section class="intro">
            <div class="container">
                <h2 class="section-title">Türkiye'de Sizi Bekleyen Eşsiz Deneyimler</h2>
                <p class="intro-text">
                    Asya ile Avrupa'nın buluştuğu noktada yer alan Türkiye, ziyaretçilerine benzersiz bir seyahat deneyimi sunmaktadır. Üç tarafı denizlerle çevrili bu eşsiz ülke, antik medeniyetlerin izlerini taşıyan tarihi zenginlikleri, nefes kesen doğal güzellikleri, dünyaca ünlü misafirperverliği ve lezzetli mutfağıyla her yıl milyonlarca turisti ağırlamaktadır.
                </p>
            </div>
        </section>

        <!-- Destinations Section -->
        <section id="destinasyonlar" class="destinations">
            <div class="container">
                <h2 class="section-title">Popüler Destinasyonlar</h2>
                <div class="destination-grid">
                    <div class="destination-card">
                        <div class="destination-img istanbul"></div>
                        <div class="destination-content">
                            <h3>İstanbul</h3>
                            <p>İki kıtayı birleştiren, Bizans ve Osmanlı İmparatorluklarına başkentlik yapmış, tarihi ve kültürel zenginlikleriyle dünyaca ünlü şehir. Ayasofya, Topkapı Sarayı, Sultanahmet Camii ve Kapalıçarşı gibi ikonik yapıları keşfedin.</p>
                        </div>
                    </div>
                    <div class="destination-card">
                        <div class="destination-img kapadokya"></div>
                        <div class="destination-content">
                            <h3>Kapadokya</h3>
                            <p>Peri bacaları, sıcak hava balonları ve yeraltı şehirleriyle ünlü, masalsı bir coğrafya. Göreme Açık Hava Müzesi'ndeki kaya kiliselerini ziyaret edin ve gün doğumunda balon turuna katılarak unutulmaz manzaraların tadını çıkarın.</p>
                        </div>
                    </div>
                    <div class="destination-card">
                        <div class="destination-img antalya"></div>
                        <div class="destination-content">
                            <h3>Antalya</h3>
                            <p>Turkuaz renkli denizi, altın sarısı kumsalları ve antik kentleriyle Türk Rivierası'nın incisi. Kaleiçi'nin dar sokakları, Aspendos Antik Tiyatrosu ve Düden Şelalesi'ni keşfedin, Lara ve Konyaaltı plajlarında güneşin tadını çıkarın.</p>
                        </div>
                    </div>
                    <div class="destination-card">
                        <div class="destination-img pamukkale"></div>
                        <div class="destination-content">
                            <h3>Pamukkale</h3>
                            <p>UNESCO Dünya Mirası Listesi'nde yer alan, beyaz travertenler ve antik Hierapolis kentiyle ünlü doğa harikası. Termal sularda yüzün ve antik havuzda Kleopatra'nın izinden gidin.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Culture & History Section -->
        <section id="kultur" class="culture">
            <div class="container">
                <h2 class="section-title">Kültür & Tarih</h2>
                <div class="culture-content">
                    <div class="culture-text">
                        <p>
                            Türkiye, Hitit, Lidya, Likya, Yunan, Roma, Bizans, Selçuklu ve Osmanlı gibi birçok medeniyete ev sahipliği yapmış, zengin bir kültürel mirasa sahiptir. Ülke genelinde 20'den fazla UNESCO Dünya Mirası Listesi'nde yer alan tarihi ve kültürel değer bulunmaktadır.
                        </p>
                        <p>
                            Efes, Troya, Göbekli Tepe, Nemrut Dağı, Afrodisias gibi antik kentler, binlerce yıllık tarihin izlerini taşımaktadır. Türkiye'nin her köşesinde, geçmişin ihtişamını yansıtan camiler, kiliseler, saraylar ve hanlar bulunmaktadır.
                        </p>
                        <p>
                            Türk halk oyunları, geleneksel el sanatları, halı dokumacılığı, çini sanatı ve Türk kahvesi gibi somut olmayan kültürel miras öğeleri de Türkiye'nin zengin kültürel dokusunu oluşturmaktadır.
                        </p>
                    </div>
                    <div class="culture-img"></div>
                </div>
            </div>
        </section>

        <!-- Turkish Cuisine Section -->
        <section id="mutfak" class="cuisine">
            <div class="container">
                <h2 class="section-title">Türk Mutfağı</h2>
                <p class="cuisine-intro">
                    Türk mutfağı, dünyanın en zengin ve çeşitli mutfaklarından biridir. Bölgeden bölgeye değişen lezzetleriyle, her damak tadına hitap eden yemekleri keşfedin.
                </p>
                <div class="cuisine-grid">
                    <div class="cuisine-item">
                        <div class="cuisine-img kebap"></div>
                        <h3>Kebaplar</h3>
                        <p>Adana, Urfa, şiş ve döner kebap çeşitleri</p>
                    </div>
                    <div class="cuisine-item">
                        <div class="cuisine-img meze"></div>
                        <h3>Mezeler</h3>
                        <p>Humus, cacık, patlıcan salatası ve dolmalar</p>
                    </div>
                    <div class="cuisine-item">
                        <div class="cuisine-img tatli"></div>
                        <h3>Tatlılar</h3>
                        <p>Baklava, künefe, lokum ve Türk dondurması</p>
                    </div>
                    <div class="cuisine-item">
                        <div class="cuisine-img icecek"></div>
                        <h3>İçecekler</h3>
                        <p>Türk çayı, Türk kahvesi ve ayran</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Travel Tips Section -->
        <section class="travel-tips">
            <div class="container">
                <h2 class="section-title">Seyahat İpuçları</h2>
                <div class="tips-grid">
                    <div class="tip-card">
                        <div class="tip-icon">🗓️</div>
                        <h3>En İyi Ziyaret Zamanı</h3>
                        <p>Türkiye'yi ziyaret etmek için en ideal zamanlar ilkbahar (Nisan-Mayıs) ve sonbahar (Eylül-Ekim) aylarıdır. Bu dönemlerde hava sıcaklıkları ılıman ve turist yoğunluğu daha azdır.</p>
                    </div>
                    <div class="tip-card">
                        <div class="tip-icon">💰</div>
                        <h3>Para Birimi</h3>
                        <p>Türkiye'nin para birimi Türk Lirası (TL)'dir. Büyük şehirlerde ve turistik bölgelerde kredi kartları yaygın olarak kabul edilmektedir, ancak yanınızda nakit bulundurmanız önerilir.</p>
                    </div>
                    <div class="tip-card">
                        <div class="tip-icon">🚌</div>
                        <h3>Ulaşım</h3>
                        <p>Şehir içi ulaşımda otobüs, metro, tramvay ve taksi seçenekleri mevcuttur. Şehirlerarası ulaşımda ise otobüs, uçak ve tren alternatifleri bulunmaktadır. İstanbul Kart gibi şehir kartları toplu taşımada kolaylık sağlar.</p>
                    </div>
                    <div class="tip-card">
                        <div class="tip-icon">🛂</div>
                        <h3>Vize Bilgileri</h3>
                        <p>Birçok ülke vatandaşı Türkiye'ye giriş için e-vize alabilmektedir. Seyahatinizden önce güncel vize gereksinimlerini kontrol etmeniz önerilir.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Newsletter Section -->
        <section class="newsletter">
            <div class="container">
                <h2>Türkiye Hakkında Güncel Bilgiler Alın</h2>
                <p>En yeni seyahat önerileri, etkinlikler ve özel teklifler için bültenimize abone olun.</p>
                <form class="newsletter-form">
                    <input type="email" placeholder="E-posta adresiniz" required>
                    <button type="submit" class="btn-primary">Abone Ol</button>
                </form>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <h3>Keşfet Türkiye</h3>
                    <p>Türkiye'nin eşsiz güzelliklerini keşfedin</p>
                </div>
                <div class="footer-links">
                    <h4>Hızlı Bağlantılar</h4>
                    <ul>
                        <li><a href="index.php">Ana Sayfa</a></li>
                        <li><a href="#destinasyonlar">Destinasyonlar</a></li>
                        <li><a href="#kultur">Kültür & Tarih</a></li>
                        <li><a href="#mutfak">Türk Mutfağı</a></li>
                        <li><a href="iletisim.php">İletişim</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Yasal</h4>
                    <ul>
                        <li><a href="gizlilik-politikasi.php">Gizlilik Politikası</a></li>
                        <li><a href="cerez-politikasi.php">Çerez Politikası</a></li>
                        <li><a href="#">Kullanım Koşulları</a></li>
                    </ul>
                </div>
                <div class="footer-contact">
                    <h4>İletişim</h4>
                    <p>Turizm Caddesi No:123</p>
                    <p>Beyoğlu, İstanbul</p>
                    <p>Tel: +90 212 123 4567</p>
                    <p>E-posta: info@kesfetturkiye.com</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Keşfet Türkiye. Tüm hakları saklıdır.</p>
            </div>
        </div>
    </footer>

    <script src="js/main.js"></script>
</body>
</html>

