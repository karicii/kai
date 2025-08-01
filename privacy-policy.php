<?php 
require_once 'core/config.php'; 
$page_title = "Privacy Policy - KAI";
$page_specific_css = ["/main/css/pages/txtpage.css"];

// --- SAMPLE TEXT ---
$legal_content = '
    <h2>1. Introduction</h2>
    <p>At KAI ("we", "our", or "the Company"), we value your privacy. This Privacy Policy explains what information we collect when you use our services, how we use that information, and how we protect it.</p>
    
    <h2>2. Information We Collect</h2>
    <p>We collect various types of information to provide and improve our services:</p>
    <ul>
        <li><strong>Account Information:</strong> Information such as your first name, last name, and email address that you provide during registration.</li>
        <li><strong>Usage Data:</strong> Your activities within the application, such as the projects you create, tasks, and timer records.</li>
        <li><strong>Technical Data:</strong> Standard web log information such as IP address, browser type, and operating system.</li>
    </ul>

    <h2>3. Use of Information</h2>
    <p>We use the information we collect for the following purposes:</p>
    <ul>
        <li>To provide, maintain, and improve our services.</li>
        <li>To manage your account and provide you with support.</li>
        <li>To comply with legal obligations and prevent fraud.</li>
    </ul>
    <p>Your information will never be shared with third parties for marketing purposes without your explicit consent.</p>
';
// --- END OF SAMPLE TEXT ---
?>
<?php require_once 'core/includes/header.php'; ?>

    <main class="relative overflow-hidden">
        <section class="relative z-10 py-20 md:py-32">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-3xl mx-auto">
                    <div class="text-center mb-16">
                        <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight">Privacy Policy</h1>
                    </div>

                    <article class="text-content">
                        <?php echo $legal_content; ?>
                    </article>
                </div>
            </div>
        </section>
    </main>

<?php require_once 'core/includes/footer.php'; ?>
