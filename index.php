<?php
session_start();
include 'header.php';
?>


<body class="bg-[#F6F1EB] font-sans">
    <nav
        class="sticky top-0 z-50 bg-[#8C5A3C] shadow-md shadow-black/50 text-white px-6 py-3 flex items-center justify-between ">
        <div class="flex items-center space-x-3">
            <img src="assets/images/logo.png" alt="Croissant Logo" class="w-12 h-12 object-contain drop-shadow-md">

            <div class="font-poppins font-semibold text-sm tracking-wide">
                PELAN-PELAN TAPI <i class="font-petrona italic font-bold text-[#FFF8F0]">Pastry</i>
            </div>
        </div>


        <div class="flex items-center  space-x-6 text-sm font-medium -ml-60">
            <a href="index.php"
                class="text-[#FFF8F0] border-b-2 border-[#FFF8F0] pb-1 transition-all duration-150">Beranda</a>
            <a href="catalog.php"
                class="hover:text-[#FFF8F0] pb-1 transition-all duration-200 opacity-80 hover:opacity-100">Katalog</a>
            <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
                <a href="admin/katalogmanajemen.php" 
                    class="hover:text-[#FFF8F0] pb-1 transition-all duration-200 opacity-80 hover:opacity-100">Manajemen</a>
            <?php endif; ?>
        </div>

        <div class="flex items-center space-x-4">
            <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
                <a href="admin/logout.php" 
                    class="bg-[#4B2F2B] text-sm text-white px-3 py-1.5 rounded-xl font-medium flex items-center gap-2 hover:bg-[#392421] transition-all shadow-lg hover:shadow-xl active:scale-98 group">Logout</a>
            <?php else: ?>
                <div onclick="openLoginModal()" 
                    class="w-9 h-9 rounded-full bg-[#FFF8F0] flex items-center justify-center cursor-pointer hover:opacity-90 transition-opacity">
                    <span class="text-base">👤</span>
                </div>
            <?php endif; ?>
        </div>

        
    </nav>

    <section class="max-w-7xl mx-auto px-6 py-12 md:py-20 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div class="space-y-6 max-w-xl">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-[#4B2F2B] font-petrona italic leading-[1.15]">
                Seni Menikmati Rasa Tanpa Tergesa.
            </h1>
            <p class="text-sm md:text-base text-[#4B2F2B] leading-relaxed text-justify">
                Pelan-pelan Tapi Pastry adalah ruang di mana rasa dan waktu berpadu. Kami mengurasi bahan-bahan terbaik
                dan mengolahnya lewat keahlian tangan manual untuk menciptakan artisan pastry yang jujur. Dedikasi kami
                sederhana: memberikanmu alasan untuk duduk sejenak, menarik napas, dan menikmati momen lewat kelembutan
                cita rasa yang tertinggi.
            </p>
            <button
                class="bg-[#4B2F2B] text-white px-6 py-3.5 rounded-xl font-medium flex items-center gap-2 hover:bg-[#392421] transition-all shadow-lg hover:shadow-xl active:scale-98 group">
                <span>Lihat Katalog</span>
                <span class="transform transition-transform group-hover:translate-x-1">→</span>
            </button>
        </div>

        <div class="flex justify-center lg:justify-end">
            <div
                class="relative p-4 bg-[#F4EEDC] rounded-[40px] drop-shadow-xl border border-white/60 backdrop-blur-sm max-w-md md:max-w-lg rotate-[-1deg] transition-all duration-300 ease-in-out hover:rotate-0 hover:scale-[1.03] hover:drop-shadow-2xl">
                <img src="assets/product/almond-croissant.jpg" alt="Almond Croissant"
                    class="rounded-[32px] w-full h-auto object-cover shadow-inner">
            </div>
        </div>
    </section>

    <div class="max-w-7xl mx-auto px-6 py-6">
        <div class="h-[1px] w-full bg-gradient-to-r from-transparent via-[#4B2F2B]/25 to-transparent"></div>
    </div>


    <section class="max-w-7xl mx-auto px-6 py-16">
        <h2 class="text-3xl md:text-4xl font-extrabold text-[#4B2F2B] font-petrona italic text-center mb-12">
            Best Seller Product
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div
                class="bg-white/60 rounded-[32px] p-5 shadow-md border border-orange-50/50 flex flex-col items-center text-center transition-all duration-300 hover:-translate-y-1.5 hover:shadow-md">
                <div class="w-full h-52 rounded-[24px] overflow-hidden mb-4">
                    <img src="assets/product/matcha-cookie.jpg" alt="Matcha Cookies"
                        class="w-full h-full object-cover">
                </div>
                <h3 class="font-petrona italic text-xl font-bold text-[#4B2F2B] mb-2">Matcha Cookies</h3>
                <p class="text-xs text-[#4B2E2B] leading-relaxed mb-5 flex-1 max-w-[240px]">
                    Perpaduan sempurna cookies yang lembut dengan rasa matcha yang kaya, memberikan sensasi manis dan sedikit pahit yang memanjakan lidah di setiap gigitan.
                </p>
                <button
                    class="bg-[#8C5A3C] text-white rounded-full py-2 px-10 text-sm font-semibold shadow-sm hover:bg-[#734A31] transition-all active:scale-95">
                    Detail
                </button>
            </div>

            <div
                class="bg-white/60 rounded-[32px] p-5 shadow-md border border-orange-50/50 flex flex-col items-center text-center transition-all duration-300 hover:-translate-y-1.5 hover:shadow-md">
                <div class="w-full h-52 rounded-[24px] overflow-hidden mb-4">
                    <img src="assets/product/almond-croissant.jpg" alt="Almond Croissant"
                        class="w-full h-full object-cover">
                </div>
                <h3 class="font-petrona italic text-xl font-bold text-[#4B2F2B] mb-2">Almond Croissant</h3>
                <p class="text-xs text-[#4B2E2B] leading-relaxed mb-5 flex-1 max-w-[240px]">
                    Pastry Prancis yang kaya akan rasa almond yang lezat, dengan tekstur yang renyah di luar dan lembut di dalam.
                    kenyamanan di setiap gigitan.
                </p>
                <button
                    class="bg-[#8C5A3C] text-white rounded-full py-2 px-10 text-sm font-semibold shadow-sm hover:bg-[#734A31] transition-all active:scale-95">
                    Detail
                </button>
            </div>

            <div
                class="bg-white/60 rounded-[32px] p-5 shadow-md border border-orange-50/50 flex flex-col items-center text-center transition-all duration-300 hover:-translate-y-1.5 hover:shadow-md">
                <div class="w-full h-52 rounded-[24px] overflow-hidden mb-4">
                    <img src="assets/product/strawberry-cheesecake.jpg" alt="Strawberry Cheesecake"
                        class="w-full h-full object-cover">
                </div>
                <h3 class="font-petrona italic text-xl font-bold text-[#4B2F2B] mb-2">Strawberry Cheesecake</h3>
                <p class="text-xs text-[#4B2E2B] leading-relaxed mb-5 flex-1 max-w-[240px]">
                    Kue keju yang lembut dengan lapisan strawberry yang segar, memberikan sensasi manis dan asam yang seimbang di setiap gigitan.
                    kaya rasa butter di dalam.
                </p>
                <button
                    class="bg-[#8C5A3C] text-white rounded-full py-2 px-10 text-sm font-semibold shadow-sm hover:bg-[#734A31] transition-all active:scale-95">
                    Detail
                </button>
            </div>
        </div>
    </section>

    <div class="max-w-7xl mx-auto px-6 py-6">
        <div class="h-[1px] w-full bg-gradient-to-r from-transparent via-[#4B2F2B]/25 to-transparent"></div>
    </div>

    <section class="max-w-7xl mx-auto px-6 py-16">
        <h2 class="text-3xl md:text-4xl font-extrabold text-[#4B2F2B] font-petrona italic text-center mb-12">
            Mengapa Harus Memilih Kami?
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div
                class="bg-white rounded-[32px] p-8 shadow-md border border-gray-100/60 flex flex-col transition-all duration-300 hover:-translate-y-1.5 hover:shadow-md items-center text-center min-h-[340px]">
                <div class="w-16 h-16 bg-amber-50 rounded-full flex items-center justify-center mb-6 text-4xl">
                    🐌
                </div>
                <h3 class="font-petrona font-bold text-lg text-[#4B2F2B] mb-3 max-w-[220px] leading-snug">
                    Prosesnya Pelan-Pelan, Kualitasnya Past(ry)
                </h3>
                <p class="text-xs text-[#4B2E2B] leading-relaxed max-w-[250px]">
                    Menciptakan ratusan lapisan flaky butuh kesabaran. Kami merawat adonan pelan-pelan demi tekstur yang
                    sempurna di setiap gigitan.
                </p>
            </div>

            <div
                class="bg-white rounded-[32px] p-8 shadow-md border border-gray-100/60 flex flex-col transition-all duration-300 hover:-translate-y-1.5 hover:shadow-md items-center text-center min-h-[340px]">
                <div class="w-16 h-16 bg-amber-50 rounded-full flex items-center justify-center mb-6 text-4xl">
                    🌾
                </div>
                <h3 class="font-petrona font-bold text-lg text-[#4B2F2B] mb-3 max-w-[220px] leading-snug">
                    Premium Tanpa Jalan Pintas
                </h3>
                <p class="text-xs text-[#4B2E2B] leading-relaxed max-w-[250px]">
                    Kue kering legendaris dengan tekstur soft-chewy dan taburan chocolate chips melimpah yang memberikan
                    kenyamanan di setiap gigitan.
                </p>
            </div>

            <div
                class="bg-white rounded-[32px] p-8 shadow-md border border-gray-100/60 flex flex-col transition-all duration-300 hover:-translate-y-1.5 hover:shadow-md items-center text-center min-h-[340px]">
                <div class="w-16 h-16 bg-amber-50 rounded-full flex items-center justify-center mb-6 text-4xl">
                    ☕
                </div>
                <h3 class="font-petrona font-bold text-lg text-[#4B2F2B] mb-3 max-w-[220px] leading-snug">
                    Jeda di Dunia yang Terburu-buru
                </h3>
                <p class="text-xs text-[#4B2E2B] leading-relaxed max-w-[250px]">
                    Pastry kami hadir sebagai alasan untukmu rehat sejenak. Ambil kopi favoritmu, dan mari nikmati hari
                    pelan-pelan.
                </p>
            </div>
        </div>
    </section>

<div id="loginModal" class="fixed inset-0 z-[100] hidden flex items-center justify-center p-4 bg-black/40 backdrop-blur-md transition-all duration-300">
    
    <div class="bg-[#FFF8F0] w-full max-w-[440px] px-10 py-12 rounded-[51px] shadow-2xl relative text-center">
        
        <button onclick="closeLoginModal()" class="absolute top-5 right-6 text-black/60 hover:text-black text-xl font-bold cursor-pointer transition-colors">
            ✕
        </button>

        <h2 class="text-[32px] font-bold text-black mb-1 font-petrona italic">Masuk Akun</h2>
        <p class="text-[15px] font-medium text-black mb-8 opacity-80">Area Admin - Pelan-pelan Tapi Pastry</p>
        
        <?php if (isset($_GET['pesan'])): ?>
            <div class="mb-6 p-3 bg-amber-50 border border-amber-200 text-amber-800 text-sm rounded-xl text-center font-medium">
                <?php 
                    if ($_GET['pesan'] == "gagal") {
                        echo "Username atau password salah!";
                    } else if ($_GET['pesan'] == "belum_login") {
                        echo "Akses ditolak! Anda harus login terlebih dahulu.";
                    } else if ($_GET['pesan'] == "logout") {
                        echo "Anda berhasil keluar dari sistem.";
                    }
                ?>
            </div>
        <?php endif; ?>

        <form action="proses_login.php" method="POST">
            <div class="mb-4 flex flex-col">
                <input type="text" name="username" id="username"
                       placeholder="Username" 
                       required 
                       class="w-full px-6 py-3.5 text-sm bg-[#C08552] text-white rounded-[25px] border-none outline-none font-medium placeholder-white/80">
            </div>
            
            <div class="mb-5 flex flex-col items-center relative w-full">
                <input type="password" name="password" 
                       id="passwordModal" 
                       placeholder="Kata Sandi" 
                       required 
                       class="w-full pl-6 pr-12 py-3.5 text-sm bg-[#C08552] text-white rounded-[25px] border-none outline-none font-medium placeholder-white/80">
                <i class="fa-regular fa-eye-slash absolute right-5 text-white/80 cursor-pointer text-base top-1/2 -translate-y-1/2" id="togglePasswordModal"></i>
            </div>
            
            <button type="submit" name="login"
                    class="w-full py-3.5 bg-[#4B2F2B] text-white rounded-[25px] text-base font-bold shadow-sm transition duration-200 hover:bg-[#392421] active:scale-[0.99] cursor-pointer">
                Masuk
            </button>
        </form>
    </div>
</div>


<script>
    const loginModal = document.getElementById('loginModal');
    const passwordModal = document.getElementById('passwordModal');
    const togglePasswordModal = document.getElementById('togglePasswordModal');

    // Fungsi Menampilkan Modal
    function openLoginModal() {
        loginModal.classList.remove('hidden');
    }

    // Fungsi Menyembunyikan Modal
    function closeLoginModal() {
        loginModal.classList.add('hidden');
    }

    // Tutup modal otomatis jika admin klik di area luar kotak form (di area blur)
    window.onclick = function(event) {
        if (event.target == loginModal) {
            closeLoginModal();
        }
    }

    // Fitur Intip Kata Sandi di dalam Modal
    togglePasswordModal.addEventListener('click', function () {
        const type = passwordModal.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordModal.setAttribute('type', type);
        this.classList.toggle('fa-eye');
        this.classList.toggle('fa-eye-slash');
    });
</script>

<?php if (isset($_GET['pesan'])): ?>
<script>
    // Jika halaman memuat pesan error login, otomatis langsung munculkan kembali modalnya
    openLoginModal();
</script>
<?php endif; ?>
</body>



<?php
include 'footer.php';
?>