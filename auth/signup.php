<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KAI'ye Kayıt Ol</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Lexend:wght@700&display=swap" rel="stylesheet">

    <style>
        :root {
            --color-background: #0A0A0A;
            --color-text-primary: #EAEAEA;
            --color-text-secondary: #A3A3A3;
            --color-border: rgba(255, 255, 255, 0.15);
            --color-input-bg: #1C1C1C;
            --color-accent: #3B82F6;
            --color-accent-glow-1: #583B85;
            --color-accent-glow-2: #2E638E;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--color-background);
            color: var(--color-text-primary);
        }
        
        .font-logo {
            font-family: 'Lexend', sans-serif;
        }
        
        .form-input {
            background-color: var(--color-input-bg);
            border: 1px solid var(--color-border);
            transition: border-color 0.2s, box-shadow 0.2s;
        }
        .form-input:focus {
            outline: none;
            border-color: var(--color-accent);
            box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.3);
        }
        
        .animation-container {
            position: absolute;
            inset: 0;
            overflow: hidden;
            filter: blur(80px);
        }

        .shape {
            position: absolute;
            border-radius: 50%;
            background: linear-gradient(45deg, var(--color-accent-glow-1), var(--color-accent-glow-2));
        }

        .shape1 {
            width: 400px;
            height: 400px;
            top: 10%;
            left: 10%;
        }

        .shape2 {
            width: 300px;
            height: 300px;
            bottom: 10%;
            right: 10%;
        }
        
        .shape3 {
            width: 250px;
            height: 250px;
            bottom: 40%;
            left: 20%;
        }
    </style>
</head>
<body class="min-h-screen">
    
    <div class="flex min-h-screen">
        <div class="hidden lg:flex lg:w-1/2 bg-black relative items-center justify-center p-12 text-center overflow-hidden">
            <div class="animation-container">
                <div class="shape shape1"></div>
                <div class="shape shape2"></div>
                <div class="shape shape3"></div>
            </div>
            <div class="relative z-10">
                <h2 class="text-4xl font-extrabold text-white mb-4">Verimliliğinizi Serbest Bırakın</h2>
                <p class="text-lg text-gray-300 max-w-md">
                    KAI ile görevlerinizi yönetin, odaklanma sürelerinizi takip edin ve hedeflerinize daha hızlı ulaşın.
                </p>
            </div>
        </div>

        <div class="w-full lg:w-1/2 flex items-center justify-center p-8">
            <div class="w-full max-w-sm mx-auto">
                <div class="text-center lg:text-left mb-8">
                    <a href="/" class="font-logo text-3xl font-bold tracking-tighter">KAI</a>
                </div>

                <div class="bg-transparent">
                    <h1 class="text-2xl font-semibold mb-2">Hesap oluştur</h1>
                    <p class="text-sm mb-8" style="color: var(--color-text-secondary);">Başlamak için bilgilerinizi girin.</p>

                    <form action="" method="POST" class="space-y-4">
                        <div>
                            <label for="fullname" class="sr-only">Ad Soyad</label>
                            <input type="text" name="fullname" id="fullname" placeholder="Adınız Soyadınız" required class="form-input w-full px-3 py-2.5 rounded-md text-sm placeholder-gray-500">
                        </div>
                        <div>
                            <label for="email" class="sr-only">E-posta</label>
                            <input type="email" name="email" id="email" placeholder="E-posta adresiniz" required class="form-input w-full px-3 py-2.5 rounded-md text-sm placeholder-gray-500">
                        </div>
                         <div>
                            <label for="password" class="sr-only">Şifre</label>
                            <input type="password" name="password" id="password" placeholder="Şifreniz" required class="form-input w-full px-3 py-2.5 rounded-md text-sm placeholder-gray-500">
                        </div>
                        <button type="submit" class="w-full bg-white text-black font-semibold py-2.5 rounded-md hover:bg-gray-200 transition-colors">Hesap Oluştur</button>
                    </form>
                </div>

                <div class="text-center mt-6">
                    <p class="text-sm" style="color: var(--color-text-secondary);">
                        Zaten bir hesabın var mı? <a href="/auth/login.php" class="font-medium text-white hover:underline">Giriş Yap</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script>
        gsap.utils.toArray('.shape').forEach(shape => {
            gsap.to(shape, {
                x: "random(-150, 150)",
                y: "random(-150, 150)",
                scale: "random(0.8, 1.5)",
                rotation: "random(-90, 90)",
                duration: "random(15, 30)",
                ease: "sine.inOut",
                repeat: -1,
                yoyo: true
            });
        });
    </script>
</body>
</html>
