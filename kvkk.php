<?php 
require_once 'core/config.php'; 
$page_title = "KVKK Aydınlatma Metni - KAI";
$page_specific_css = ["/main/css/pages/txtpage.css"];

// --- ÖRNEK METİN ---
// Bu bölüm, gelecekte veritabanından veya bir metin dosyasından dinamik olarak çekilebilir.
$legal_content = '
    <h2>1. Veri Sorumlusunun Kimliği</h2>
    <p>Bu aydınlatma metni, 6698 sayılı Kişisel Verilerin Korunması Kanunu (“Kanun”) uyarınca, veri sorumlusu sıfatıyla KAI (“Şirket”) tarafından hazırlanmıştır. Kişisel verileriniz, aşağıda açıklanan kapsamda işlenebilecektir.</p>
    
    <h2>2. Kişisel Verilerin Hangi Amaçla İşleneceği</h2>
    <p>Toplanan kişisel verileriniz, Kanun’da öngörülen temel ilkelere uygun olarak ve Kanun’un 5. ve 6. maddelerinde belirtilen kişisel veri işleme şartları ve amaçları dahilinde, Şirketimiz tarafından aşağıda yer alan amaçlar doğrultusunda işlenebilecektir:</p>
    <ul>
        <li>Ürün ve hizmetlerimizin sunulabilmesi,</li>
        <li>Kullanıcı hesabı oluşturulması ve yönetilmesi,</li>
        <li>Hizmet kalitemizin artırılması ve kullanıcı deneyiminin iyileştirilmesi,</li>
        <li>Yasal yükümlülüklerimizin yerine getirilmesi.</li>
    </ul>

    <h3>2.1. İşlenen Kişisel Veri Kategorileri</h3>
    <p>Uygulamamız kapsamında ad, soyad, e-posta adresi gibi kimlik ve iletişim verileriniz ile uygulama kullanım verileriniz işlenmektedir.</p>

    <h2>3. Kişisel Verilerin Aktarılması</h2>
    <p>Kişisel verileriniz, yasal düzenlemelerin öngördüğü kapsamda, faaliyetlerimizi yürütmek üzere hizmet aldığımız iş ortaklarımızla ve kanunen yetkili kamu kurumları ve özel kişilerle paylaşılabilecektir.</p>
';
// --- ÖRNEK METİN SONU ---
?>
<?php require_once 'core/includes/header.php'; ?>

    <main class="relative overflow-hidden">
        <section class="relative z-10 py-20 md:py-32">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-3xl mx-auto">
                    <div class="text-center mb-16">
                        <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight">KVKK Aydınlatma Metni</h1>
                    </div>

                    <article class="text-content">
                        <?php echo $legal_content; ?>
                    </article>
                </div>
            </div>
        </section>
    </main>

<?php require_once 'core/includes/footer.php'; ?>
