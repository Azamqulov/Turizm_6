<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim - Keşfet Türkiye</title>
    <meta name="description" content="Keşfet Türkiye ile iletişime geçin. Seyahat planlamanız için sorularınızı yanıtlıyoruz.">
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
                    <li><a href="index.php">Ana Sayfa</a></li>
                    <li><a href="index.php#destinasyonlar">Destinasyonlar</a></li>
                    <li><a href="index.php#kultur">Kültür & Tarih</a></li>
                    <li><a href="index.php#mutfak">Türk Mutfağı</a></li>
                    <li><a href="iletisim.php" class="active">İletişim</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Contact Hero -->
    <section class="contact-hero">
        <div class="container">
            <h1>Bizimle İletişime Geçin</h1>
            <p>Türkiye seyahatiniz için sorularınızı yanıtlamaktan memnuniyet duyarız</p>
        </div>
    </section>

    <!-- Main Content -->
    <main class="contact-page">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-info">
                    <h2>İletişim Bilgileri</h2>
                    <div class="info-item">
                        <div class="info-icon">📍</div>
                        <div class="info-content">
                            <h3>Adres</h3>
                            <p>Turizm Caddesi No:123</p>
                            <p>Beyoğlu, İstanbul, Türkiye</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-icon">📞</div>
                        <div class="info-content">
                            <h3>Telefon</h3>
                            <p>+90 212 123 4567</p>
                            <p>Pazartesi - Cuma: 09:00 - 18:00</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-icon">✉️</div>
                        <div class="info-content">
                            <h3>E-posta</h3>
                            <p>info@kesfetturkiye.com</p>
                            <p>rezervasyon@kesfetturkiye.com</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-icon">🌐</div>
                        <div class="info-content">
                            <h3>Sosyal Medya</h3>
                            <div class="social-links">
                                <a href="#" class="social-link">Facebook</a>
                                <a href="#" class="social-link">Instagram</a>
                                <a href="#" class="social-link">Twitter</a>
                                <a href="#" class="social-link">YouTube</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form-container">
                    <h2>Bize Yazın</h2>
                    <form class="contact-form">
                        <div class="form-group">
                            <label for="name">Adınız Soyadınız</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">E-posta Adresiniz</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Konu</label>
                            <select id="subject" name="subject">
                                <option value="genel">Genel Bilgi</option>
                                <option value="rezervasyon">Rezervasyon</option>
                                <option value="tur">Tur Bilgisi</option>
                                <option value="sikayet">Şikayet/Öneri</option>
                                <option value="diger">Diğer</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Mesajınız</label>
                            <textarea id="message" name="message" rows="5" required></textarea>
                        </div>
                        <div class="form-group form-checkbox">
                            <input type="checkbox" id="privacy" name="privacy" required>
                            <label for="privacy">Kişisel verilerimin işlenmesine ilişkin <a href="gizlilik-politikasi.php">Gizlilik Politikası</a>'nı okudum ve kabul ediyorum.</label>
                        </div>
                        <button type="submit" class="btn-primary">Gönder</button>
                    </form>
                </div>
            </div>
            
            <div class="map-container">
                <h2>Konum</h2>
                <div class="map">
                    <!-- Burada gerçek bir harita entegrasyonu olacak, şimdilik placeholder -->
                    <div class="map-placeholder">
                        <p>Harita Yükleniyor...</p>
                        <p>Turizm Caddesi No:123, Beyoğlu, İstanbul, Türkiye</p>
                    </div>
                </div>
            </div>
            
            <div class="faq-section">
                <h2>Sık Sorulan Sorular</h2>
                <div class="faq-container">
                    <div class="faq-item">
                        <div class="faq-question">Türkiye'ye seyahat için vizeye ihtiyacım var mı?</div>
                        <div class="faq-answer">
                            <p>Türkiye'ye seyahat için vize gereksinimleri, vatandaşı olduğunuz ülkeye göre değişiklik göstermektedir. Birçok ülke vatandaşı e-vize alabilmektedir. Güncel vize bilgileri için <a href="https://www.evisa.gov.tr" target="_blank">e-vize portalını</a> ziyaret edebilir veya en yakın Türk konsolosluğu ile iletişime geçebilirsiniz.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">Türkiye'de hangi mevsimde seyahat etmek en iyisidir?</div>
                        <div class="faq-answer">
                            <p>Türkiye'nin farklı bölgeleri farklı mevsimlerde ziyaret için uygundur. Genel olarak, ilkbahar (Nisan-Mayıs) ve sonbahar (Eylül-Ekim) ayları, ılıman hava koşulları ve daha az kalabalık nedeniyle ideal ziyaret zamanlarıdır. Yaz ayları (Haziran-Ağustos) sahil bölgeleri için mükemmeldir, ancak iç bölgelerde oldukça sıcak olabilir. Kış ayları (Aralık-Şubat) ise kayak merkezleri için idealdir.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">Türkiye'de hangi para birimi kullanılmaktadır?</div>
                        <div class="faq-answer">
                            <p>Türkiye'de Türk Lirası (TL) kullanılmaktadır. Büyük şehirlerde ve turistik bölgelerde kredi kartları yaygın olarak kabul edilmektedir, ancak küçük işletmelerde ve kırsal alanlarda nakit bulundurmanız önerilir. Döviz büroları, bankalar ve ATM'ler aracılığıyla para değişimi yapabilirsiniz.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">Türkiye'de ulaşım nasıldır?</div>
                        <div class="faq-answer">
                            <p>Türkiye'de gelişmiş bir ulaşım ağı bulunmaktadır. Şehirlerarası ulaşımda otobüs, uçak ve tren seçenekleri mevcuttur. Şehir içi ulaşımda ise otobüs, metro, tramvay, dolmuş ve taksi gibi seçenekler bulunmaktadır. İstanbul gibi büyük şehirlerde toplu taşıma kartları (İstanbul Kart gibi) kullanmak daha ekonomik ve pratiktir.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                        <li><a href="index.php#destinasyonlar">Destinasyonlar</a></li>
                        <li><a href="index.php#kultur">Kültür & Tarih</a></li>
                        <li><a href="index.php#mutfak">Türk Mutfağı</a></li>
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

