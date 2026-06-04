<div id="productModal" class="fixed inset-0 z-[100] hidden flex items-center justify-center p-4 bg-black/40 backdrop-blur-md transition-all duration-300">
    
    <div class="w-full max-w-5xl h-auto overflow-hidden flex flex-col items-center rounded-[40px]">        
        <div  class="bg-[#FFF8F0] w-full max-w-5xl rounded-[40px] p-8 md:p-12 shadow-[0_15px_50px_rgba(0,0,0,0.3)] flex flex-col md:flex-row gap-8 items-center justify-between relative overflow-visible transition-all duration-300">
            
            <button onclick="closeProductModal()" class="absolute top-6 right-8 text-pastry-brown text-xl font-bold cursor-pointer transition-colors z-50">
                ✕
            </button>

            <!-- sisi kiri -->
            <div class="flex-1 space-y-5 max-w-sm w-full flex flex-col items-center text-center">
                <h1 id="modalKategori" class="font-petrona font-bold italic text-5xl text-pastry-brown text-left"></h1>

                <h2 class="font-poppins font-bold text-xl text-pastry-brown-dark leading-snug text-left">
                    Dibuatnya pelan-pelan, tapi renyahnya past(ry) bikin ketagihan
                </h2>

                <p class="font-poppins text-sm text-gray-600 leading-relaxed font-medium text-left">
                    Pastry autentik Prancis dengan lapisan luar yang super flaky dan renyah, namun sangat lembut dan kaya
                    rasa butter di dalam.
                </p>

                <div class="pt-12 text-md font-poppins font-bold text-pastry-brown tracking-wider uppercase text-left">
                    Pelan-Pelan Tapi <span class="font-petrona italic font-bold normal-case text-md text-left">Pastry</span>
                </div>
            </div>

            <!-- data gambar -->
            <div class="w-72 h-[420px] shrink-0 flex items-center justify-center relative my-4 md:my-0">
                <div class="absolute inset-0 bg-[#EFE5D8] rounded-[150px] -rotate-3 scale-[1.02] z-0"></div>

                <div
                    class="absolute inset-0 bg-white rounded-[140px] transition-all duration-300 hover:-translate-y-1.5 hover:shadow-md overflow-hidden shadow-md z-10">
                    <img id="modalImg" src="" alt=""
                        class="w-full h-full object-cover scale-100 rotate-0">
                </div>
            </div>

            <div class="flex-1 space-y-6 max-w-xs w-full md:pl-6 font-poppins">
                <div class="space-y-1">
                    <div div id="modalHarga" class="text-3xl font-extrabold text-pastry-brown-dark"></div>
                    <div class="text-xs font-bold text-pastry-brown-dark"> <h2 id="modalNama" class="text-3xl font-bold font-petrona italic mb-2 leading-tight"></h2></div>
                    <div class="text-sm font-bold text-pastry-brown-dark">Stok : <span id="modalStok"
                            class="font-normal text-gray-600"></span></div>
                </div>

                <div class="mt-14 pt-1 w-full">
                    <div class="text-[14px] font-bold text-pastry-brown-dark mb-2">
                        Status:
                        <span id="modalStatus" class="font-medium italic text-green-600"></span>
                    </div>
                </div>

                <button
                    class="w-full bg-pastry-brown-dark hover:bg-[#3D251E] text-white font-bold py-3.5 px-6 rounded-2xl shadow-[0_6px_20px_rgba(75,47,43,0.4)] transition-all duration-300 hover:-translate-y-1.5 hover:shadow-md active:scale-95 text-sm">
                    <a href="https://food.grab.com/id/id/" target="_blank" class="text-white no-underline">
                        <span class="font-bold">Pesan Sekarang</span>
                    </a>
                </button>


                <div class="pt-11 space-y-2">
                    <div class="text-[10px] text-gray-400 font-bold tracking-wide uppercase">Follow kami di :</div>
                    <div class="flex items-center space-x-3">
                        <a href="#"
                            class="w-7 h-7 rounded-full bg-pastry-brown text-white flex items-center justify-center text-sm hover:bg-[#E1306C] transition-colors duration-200"
                            title="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>

                        <a href="#"
                            class="w-7 h-7 rounded-full bg-pastry-brown text-white flex items-center justify-center text-sm hover:bg-[#1877F2] transition-colors duration-200"
                            title="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>

                        <a href="#"
                            class="w-7 h-7 rounded-full bg-pastry-brown text-white flex items-center justify-center text-sm hover:bg-black transition-colors duration-200"
                            title="TikTok">
                            <i class="fab fa-tiktok"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    <button onclick="closeProductModal()"
        class="mt-5 bg-[#FFF8F0] hover:bg-white text-[#4B2F2B] hover:text-black font-poppins font-bold px-10 py-2.5 rounded-full shadow-md hover:shadow-xl transition-all duration-300 active:scale-95 text-sm cursor-pointer">
        Kembali Ke Katalog
    </button> 
    </div>
</div>

<style>
    /* Hilangkan scrollbar kaku pada device kecil agar modal tetap estetik */
    .custom-scrollbar::-webkit-scrollbar {
        display: none;
    }
    .custom-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
</style>