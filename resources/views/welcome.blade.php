<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio - Ghabriel Theo</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <style>
        /* Custom Scrollbar khusus untuk Modal agar sesuai dengan tema gelap */
        .modal-scroll::-webkit-scrollbar {
            width: 8px;
        }
        .modal-scroll::-webkit-scrollbar-track {
            background: rgba(31, 41, 55, 0.5); /* bg-gray-800 */
            border-radius: 10px;
            margin-block: 10px;
        }
        .modal-scroll::-webkit-scrollbar-thumb {
            background: rgba(75, 85, 99, 0.8); /* bg-gray-600 */
            border-radius: 10px;
        }
        .modal-scroll::-webkit-scrollbar-thumb:hover {
            background: rgba(234, 179, 8, 0.8); /* hover kuning/yellow-500 */
        }
    </style>
</head>
<body class="bg-[#0B1120] text-gray-200 font-sans antialiased selection:bg-yellow-500 selection:text-gray-900">

    <div class="fixed top-0 left-0 w-full h-full overflow-hidden -z-10 pointer-events-none">
        <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-blue-900/20 blur-[120px]"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] rounded-full bg-yellow-900/10 blur-[120px]"></div>
    </div>

    <div class="max-w-5xl mx-auto px-6 py-8">
        
        <nav class="relative flex items-center justify-between mb-24 py-4">
            <h1 class="text-2xl font-bold text-white tracking-wide z-10 w-32">Ghabriel<span class="text-yellow-500">.</span></h1>
            
            <div class="hidden md:flex absolute inset-0 justify-center items-center pointer-events-none">
                <div class="bg-gray-900/80 backdrop-blur-md border border-gray-800 px-8 py-3 rounded-full space-x-8 text-sm font-semibold pointer-events-auto shadow-lg">
                    <a href="#" class="text-white hover:text-yellow-500 transition duration-300">Home</a>
                    <a href="#karya" class="text-gray-400 hover:text-yellow-500 transition duration-300">Karya</a>
                    <a href="#organisasi" class="text-gray-400 hover:text-yellow-500 transition duration-300">Organisasi</a>
                    <a href="#sertifikasi" class="text-gray-400 hover:text-yellow-500 transition duration-300">Sertifikasi</a>
                </div>
            </div>

            <div class="z-10 w-32 flex justify-end">
                <a href="mailto:ghabrielsagala@gmail.com" class="px-4 py-2 bg-yellow-500 hover:bg-yellow-400 text-gray-900 text-sm font-bold rounded-lg transition shadow-[0_0_15px_rgba(234,179,8,0.3)]">Hire Me</a>
            </div>
        </nav>

        <div class="mb-32 flex flex-col items-start pt-10">
            <div class="mb-8 w-full border-l-4 border-yellow-500 pl-6 py-2">
                <h2 class="text-4xl md:text-5xl text-white mb-4" style="font-family: 'Playfair Display', serif;">
                    Ghabriel Theo Petra Sagala
                </h2>
                <div class="flex flex-wrap items-center gap-3 mt-4">
                    <span class="px-4 py-1.5 bg-blue-950 text-blue-300 border border-blue-800 rounded-md text-sm font-semibold tracking-wide">
                        Mahasiswa D3 Teknologi Informasi
                    </span>
                    <span class="px-4 py-1.5 bg-yellow-950/50 text-yellow-400 border border-yellow-800/50 rounded-md text-sm font-semibold tracking-wide">
                        Universitas Brawijaya
                    </span>
                    <span class="px-4 py-1.5 bg-green-900/30 text-green-400 border border-green-800 rounded-md text-sm font-extrabold tracking-widest shadow-[0_0_10px_rgba(34,197,94,0.2)]">
                        IPK: 3.83
                    </span>
                </div>
            </div>

            <h1 class="text-5xl md:text-6xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-gray-100 to-gray-500 mb-8 leading-tight">
                Fullstack Web Developer <br> & Tech Enthusiast.
            </h1>
            <p class="text-gray-400 max-w-3xl text-lg leading-relaxed mb-8">
                Memiliki dedikasi tinggi dalam mengeksplorasi teknologi web mulai dari Native hingga Framework Laravel. Tidak hanya berfokus pada baris kode yang rapi dan fungsional, tetapi juga aktif membangun relasi dan memimpin tim melalui berbagai pengalaman organisasi kampus.
            </p>

            <div class="flex flex-wrap gap-4 mb-10 border-b border-gray-800 pb-10 w-full">
                <a href="https://wa.me/6282218361690" target="_blank" class="flex items-center px-4 py-2 bg-gray-900 border border-gray-700 hover:border-green-500 rounded-lg text-sm font-medium text-gray-300 hover:text-green-400 transition-colors shadow-sm group">
                    <svg class="w-5 h-5 mr-2 text-gray-500 group-hover:text-green-500 transition-colors" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 0 0-.57-.012c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z"/></svg>
                    0822 1836 1690
                </a>
                <a href="mailto:ghabrielsagala@gmail.com" class="flex items-center px-4 py-2 bg-gray-900 border border-gray-700 hover:border-blue-500 rounded-lg text-sm font-medium text-gray-300 hover:text-blue-400 transition-colors shadow-sm group">
                    <svg class="w-5 h-5 mr-2 text-gray-500 group-hover:text-blue-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    ghabrielsagala@gmail.com
                </a>
                <a href="https://instagram.com/Ghabrielsagala" target="_blank" class="flex items-center px-4 py-2 bg-gray-900 border border-gray-700 hover:border-pink-500 rounded-lg text-sm font-medium text-gray-300 hover:text-pink-400 transition-colors shadow-sm group">
                    <svg class="w-5 h-5 mr-2 text-gray-500 group-hover:text-pink-500 transition-colors" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                    @Ghabrielsagala
                </a>
            </div>
        </div>

    </div>

    <div id="karya" class="w-full bg-gray-900/30 border-y border-gray-800 py-24">
        <div class="max-w-5xl mx-auto px-6">
            <div class="flex items-center justify-between mb-12">
                <div>
                    <h3 class="text-4xl font-extrabold text-white mb-2">Karya & Project</h3>
                    <p class="text-gray-500">Eksplorasi teknis dan implementasi kode.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                <div onclick="openModal('Aplikasi Tabungan Mahasiswa', 'Aplikasi berbasis web untuk mencatat dan manajemen tabungan. Dibangun menggunakan PHP Native dari nol tanpa bantuan tim. Project ini sengaja saya kerjakan secara mandiri untuk menguji dan melatih insting Fullstack Development saya secara menyeluruh (Project UAS Semester 2 - Mendapatkan Nilai A).', 'PHP Native, HTML, CSS, MySQL', [`{{ asset('images/monument-home.png') }}`, `{{ asset('images/monument-dash.png') }}`])" 
     class="md:col-span-2 bg-gradient-to-br from-gray-800 to-gray-900 border border-gray-700 p-8 md:p-10 rounded-3xl cursor-pointer hover:border-yellow-500 hover:-translate-y-1 transition-all duration-300 group shadow-xl relative overflow-hidden flex flex-col justify-between min-h-[300px]">
    
    <div class="absolute -right-6 -bottom-6 p-8 opacity-5 group-hover:opacity-10 transition-all duration-500 transform group-hover:scale-110">
        <svg class="w-48 h-48 text-yellow-500" fill="currentColor" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm-5 14H4v-4h11v4zm0-5H4V9h11v4zm5 5h-4V9h4v9z"/></svg>
    </div>
    
    <div class="relative z-10 w-full md:w-5/6">
        <div class="flex items-center mb-5">
            <span class="px-3 py-1.5 bg-yellow-500/10 text-yellow-400 border border-yellow-500/20 rounded-full text-xs font-bold tracking-widest uppercase shadow-sm">
                ⭐ Project Unggulan
            </span>
        </div>
        <h4 class="text-3xl font-extrabold text-white mb-3 group-hover:text-yellow-400 transition-colors tracking-tight">Aplikasi Tabungan Mahasiswa</h4>
        <p class="text-gray-400 text-sm md:text-base leading-relaxed mb-6 line-clamp-3">
            Aplikasi pencatatan keuangan yang dibangun mandiri dari nol. Berfokus pada logika bisnis terstruktur dan antarmuka fungsional untuk melatih insting Fullstack secara komprehensif.
        </p>
    </div>

    <div class="relative z-10 mt-auto flex flex-wrap gap-2">
        <span class="px-3 py-1.5 bg-gray-950/60 border border-gray-700/50 rounded-lg text-xs font-semibold text-gray-300 backdrop-blur-sm">PHP Native</span>
        <span class="px-3 py-1.5 bg-gray-950/60 border border-gray-700/50 rounded-lg text-xs font-semibold text-gray-300 backdrop-blur-sm">MySQL</span>
        <span class="px-3 py-1.5 bg-gray-950/60 border border-gray-700/50 rounded-lg text-xs font-semibold text-gray-300 backdrop-blur-sm">HTML/CSS</span>
    </div>
</div>
                <div onclick="openModal('Portal Pariwisata Terpadu', 'Website informasi pariwisata yang saya kerjakan berkolaborasi bersama satu rekan tim. Mengedepankan kerja sama tim dalam menyajikan UI/UX yang menarik serta pengelolaan data wisata yang informatif (Project UAS Semester 3 - Mendapatkan Nilai A).', 'PHP, HTML, CSS, JavaScript')" class="bg-gray-800/50 border border-gray-700 p-8 rounded-3xl cursor-pointer hover:border-yellow-500 transition-all duration-300 group shadow-xl flex flex-col justify-between">
                    <div>
                        <h4 class="text-xl font-bold text-white mb-3 group-hover:text-yellow-400 transition-colors">Portal Wisata</h4>
                        <p class="text-gray-400 text-sm line-clamp-3">Platform informasi pariwisata hasil kolaborasi tim dengan fokus pada UI/UX.</p>
                    </div>
                    <div class="mt-6 flex gap-2">
                        <span class="w-8 h-8 rounded-full bg-blue-900 flex items-center justify-center text-xs font-bold text-blue-200">PHP</span>
                        <span class="w-8 h-8 rounded-full bg-yellow-900 flex items-center justify-center text-xs font-bold text-yellow-200">JS</span>
                    </div>
                </div>

                <div onclick="openModal('Web Portal Olahraga', 'Aplikasi web bertemakan Sport yang saya kembangkan secara mandiri di luar tugas kampus. Project ini saya dedikasikan khusus untuk memperdalam pemahaman dan melatih keahlian saya dalam menggunakan arsitektur MVC pada Framework Laravel.', 'Laravel, Tailwind CSS, MySQL')" class="bg-gray-800/50 border border-gray-700 p-8 rounded-3xl cursor-pointer hover:border-yellow-500 transition-all duration-300 group shadow-xl flex flex-col justify-between">
                    <div>
                        <h4 class="text-xl font-bold text-white mb-3 group-hover:text-yellow-400 transition-colors">Web Theme Sport</h4>
                        <p class="text-gray-400 text-sm line-clamp-3">Implementasi arsitektur MVC menggunakan framework Laravel untuk portal berita olahraga.</p>
                    </div>
                    <div class="mt-6">
                        <span class="px-3 py-1 bg-red-900/40 text-red-400 rounded-md text-xs font-bold">Laravel</span>
                    </div>
                </div>

                <div onclick="openModal('Currency Converter App', 'Sebuah aplikasi utilitas ringan yang berfungsi untuk melakukan konversi mata uang secara offline (misal: USD ke IDR). Berfokus pada fungsionalitas dan logika matematika dasar dalam pemrograman.', 'JavaScript, HTML, CSS')" class="md:col-span-2 bg-gray-800/50 border border-gray-700 p-8 rounded-3xl cursor-pointer hover:border-yellow-500 transition-all duration-300 group shadow-xl flex items-center justify-between">
                    <div>
                        <h4 class="text-2xl font-bold text-white mb-3 group-hover:text-yellow-400 transition-colors">Currency Converter</h4>
                        <p class="text-gray-400 text-sm max-w-md">Aplikasi utilitas ringan untuk konversi mata uang dengan fokus pada fungsionalitas logika JavaScript murni.</p>
                    </div>
                    <div class="hidden sm:block">
                        <div class="w-16 h-16 rounded-full border-4 border-gray-700 flex items-center justify-center group-hover:border-yellow-500 transition-colors">
                            <span class="text-gray-400 group-hover:text-yellow-500">➔</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id="organisasi" class="w-full py-24">
        <div class="max-w-5xl mx-auto px-6">
            <div class="text-center mb-16">
                <span class="text-blue-500 font-bold tracking-widest uppercase text-sm">Leadership & Teamwork</span>
                <h3 class="text-4xl font-extrabold text-white mt-2">Pengalaman Organisasi</h3>
            </div>
            
            <div class="space-y-6">
                
                <div class="bg-gray-900/60 border border-gray-800 p-6 md:p-8 rounded-2xl flex flex-col md:flex-row gap-6 items-start hover:border-blue-500 transition-colors shadow-lg">
                    <div class="md:w-1/4 shrink-0">
                        <span class="inline-block px-3 py-1 bg-blue-900/30 text-blue-400 border border-blue-800/50 rounded-lg text-sm font-bold">2026 (Sem 4)</span>
                    </div>
                    <div class="md:w-3/4">
                        <h4 class="text-2xl font-bold text-white mb-1">Ketua Komisi Pengawas & Standarisasi</h4>
                        <h5 class="text-md text-yellow-500 font-medium mb-4">Badan Pengurus Inti (BPI) HMPSTI</h5>
                        <p class="text-gray-400 leading-relaxed text-sm">
                            Dipercaya memegang posisi strategis sebagai Badan Pengurus Inti di Himpunan Mahasiswa Program Studi Teknologi Informasi. Bertanggung jawab penuh membawahi dan mengevaluasi kinerja departemen-departemen, serta menyeimbangkan ritme organisasi agar tetap profesional namun berlandaskan asas kekeluargaan yang erat.
                        </p>
                    </div>
                </div>

                <div class="bg-gray-900/60 border border-gray-800 p-6 md:p-8 rounded-2xl flex flex-col md:flex-row gap-6 items-start hover:border-blue-500 transition-colors shadow-lg">
                    <div class="md:w-1/4 shrink-0">
                        <span class="inline-block px-3 py-1 bg-gray-800 text-gray-300 border border-gray-700 rounded-lg text-sm font-bold">2025 (Sem 3)</span>
                    </div>
                    <div class="md:w-3/4">
                        <h4 class="text-2xl font-bold text-white mb-1">Koordinator Divisi Acara</h4>
                        <h5 class="text-md text-yellow-500 font-medium mb-4">PKKMB Fakultas Vokasi Universitas Brawijaya</h5>
                        <p class="text-gray-400 leading-relaxed text-sm">
                            Memimpin divisi inti dalam program kemahasiswaan terbesar di Fakultas Vokasi selama 4 bulan masa persiapan dan pelaksanaan. Menghadirkan inovasi baru dalam sistem manajerial staff yang lebih efektif dari tahun sebelumnya, serta merombak dan merancang ulang konsep puncak acara PKKMB menjadi lebih *impactful*.
                        </p>
                    </div>
                </div>

                <div class="bg-gray-900/60 border border-gray-800 p-6 md:p-8 rounded-2xl flex flex-col md:flex-row gap-6 items-start hover:border-blue-500 transition-colors shadow-lg">
                    <div class="md:w-1/4 shrink-0">
                        <span class="inline-block px-3 py-1 bg-gray-800 text-gray-300 border border-gray-700 rounded-lg text-sm font-bold">2025 (Sem 3)</span>
                    </div>
                    <div class="md:w-3/4">
                        <h4 class="text-2xl font-bold text-white mb-1">Wakil Koordinator Acara</h4>
                        <h5 class="text-md text-yellow-500 font-medium mb-4">Program Abdi Desa</h5>
                        <p class="text-gray-400 leading-relaxed text-sm">
                            Terlibat langsung selama 1 bulan dalam pengabdian masyarakat. Merancang strategi manajerial warga dan menyusun rangkaian acara yang *engaging*. Berhasil menarik partisipasi aktif warga desa selama 4 minggu berturut-turut melalui pendekatan persuasif dan penyediaan program apresiasi/hadiah yang tepat sasaran.
                        </p>
                    </div>
                </div>

                <div class="bg-gray-900/60 border border-gray-800 p-6 md:p-8 rounded-2xl flex flex-col md:flex-row gap-6 items-start hover:border-yellow-500 transition-colors shadow-lg relative overflow-hidden">
                    <div class="absolute -right-12 top-6 bg-yellow-500 text-gray-900 text-xs font-bold px-12 py-1 rotate-45 shadow-md">BEST STAFF</div>
                    
                    <div class="md:w-1/4 shrink-0">
                        <span class="inline-block px-3 py-1 bg-gray-800 text-gray-300 border border-gray-700 rounded-lg text-sm font-bold">2024 (Sem 1 & 2)</span>
                    </div>
                    <div class="md:w-3/4">
                        <h4 class="text-2xl font-bold text-white mb-1">Staff Magang Kementrian PSDM</h4>
                        <h5 class="text-md text-yellow-500 font-medium mb-4">BEM Fakultas Vokasi Universitas Brawijaya</h5>
                        <p class="text-gray-400 leading-relaxed text-sm">
                            Memulai langkah awal di organisasi kampus dengan proaktif menggali potensi diri dan memberikan dedikasi penuh pada kementrian Pengembangan Sumber Daya Mahasiswa. Melalui inisiatif dan kinerja yang konsisten, berhasil dianugerahi predikat bergengsi di akhir periode kepengurusan.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id="sertifikasi" class="w-full bg-gradient-to-b from-gray-900/30 to-[#0B1120] border-t border-gray-800 py-24 mb-10">
        <div class="max-w-5xl mx-auto px-6">
            <h3 class="text-3xl font-bold text-white mb-10 flex items-center">
                <span class="bg-green-500 w-2 h-8 mr-3 rounded-sm"></span> Sertifikasi Profesi
            </h3>
            
            <div class="bg-gray-900/80 backdrop-blur-md border border-gray-700 p-8 md:p-10 rounded-3xl flex flex-col md:flex-row gap-10 items-center shadow-2xl relative overflow-hidden">
                <div class="absolute -right-20 -top-20 opacity-5 pointer-events-none">
                    <svg class="w-96 h-96" viewBox="0 0 24 24" fill="currentColor"><path d="M11.4 24H0V12.6h11.4V24zM24 24H12.6V12.6H24V24zM11.4 11.4H0V0h11.4v11.4zM24 11.4H12.6V0H24v11.4z"/></svg>
                </div>

                <div class="md:w-1/2 z-10">
                    <div class="inline-block px-3 py-1 bg-green-900/30 text-green-400 border border-green-800 rounded-full text-xs font-bold tracking-widest uppercase mb-4">
                        Verified Credentials
                    </div>
                    <h4 class="text-3xl font-extrabold text-white mb-2 leading-tight">Microsoft Office Desktop Application</h4>
                    <p class="text-yellow-500 font-bold text-lg mb-6">Trust Training Partners (Microsoft Partner)</p>
                    
                    <ul class="space-y-3 text-gray-400 text-sm mb-8">
                        <li class="flex items-center"><svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Sertifikasi kompetensi profesional berstandar tinggi.</li>
                        <li class="flex items-center"><svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Kemitraan resmi dengan Universitas Brawijaya.</li>
                        <li class="flex items-center"><svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Diterbitkan pada 22 Agustus 2024.</li>
                    </ul>
                </div>

                <div class="md:w-1/2 flex justify-center z-10 w-full">
                    <div class="w-full bg-gray-800 border-4 border-gray-700 rounded-xl overflow-hidden shadow-2xl transform md:rotate-2 hover:rotate-0 transition-transform duration-500 group">
                        <img src="{{ asset('images/sertifikat-microsoft.jpg') }}" alt="Sertifikat Microsoft Office Desktop Application" class="w-full h-auto opacity-90 group-hover:opacity-100 transition-opacity">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="border-t border-gray-800 py-8 text-center text-gray-500 text-sm max-w-5xl mx-auto px-6">
        <p>&copy; 2026 Ghabriel Theo Petra Sagala. Dibuat dengan Laravel & Tailwind CSS.</p>
    </footer>

    <div id="projectModal" class="hidden fixed inset-0 z-50 flex items-center justify-center p-4 opacity-0 transition-opacity duration-300">
        <div class="absolute inset-0 backdrop-blur-md bg-black/70" onclick="closeModal()"></div>
        
        <div class="relative bg-gray-900 border border-gray-700 w-full max-w-2xl max-h-[90vh] overflow-y-auto modal-scroll rounded-3xl shadow-2xl p-8 z-10 transform scale-95 transition-transform duration-300" id="modalBox">
            <button onclick="closeModal()" class="absolute top-6 right-6 bg-gray-800 text-gray-400 hover:text-white hover:bg-gray-700 rounded-full p-2 transition sticky float-right">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
            
            <h2 id="modalTitle" class="text-2xl font-extrabold text-white mb-4 pr-10">Nama Project</h2>
            <div class="flex flex-wrap gap-2 mb-6" id="modalTech">
            </div>
            
            <div class="bg-gray-800/40 p-6 rounded-2xl border border-gray-700 mb-6">
                <h3 class="text-xs font-bold text-yellow-500 mb-3 tracking-widest uppercase">Ringkasan Project</h3>
                <p id="modalDesc" class="text-gray-300 text-sm leading-relaxed">Deskripsi project di sini.</p>
            </div>

            <div id="modalImages" class="flex flex-col gap-4 hidden">
                </div>
        </div>
    </div>

    <script>
        const modal = document.getElementById('projectModal');
        const modalBox = document.getElementById('modalBox');

        // Parameter 'images' ditambahkan dan diset default berupa array kosong []
        function openModal(title, desc, techStr, images = []) {
            document.getElementById('modalTitle').innerText = title;
            document.getElementById('modalDesc').innerText = desc;
            
            const techs = techStr.split(', ');
            let techHtml = '';
            techs.forEach(t => {
                techHtml += `<span class="px-3 py-1 bg-gray-800 border border-gray-700 rounded-lg text-xs font-medium text-gray-300">${t}</span>`;
            });
            document.getElementById('modalTech').innerHTML = techHtml;

            // LOGIKA UNTUK MENAMPILKAN GAMBAR (JIKA ADA)
            const imagesContainer = document.getElementById('modalImages');
            imagesContainer.innerHTML = ''; // Kosongkan gambar sebelumnya
            
            if (images && images.length > 0) {
                images.forEach(imgSrc => {
                    imagesContainer.innerHTML += `
                        <div class="w-full rounded-xl overflow-hidden border border-gray-700 shadow-md">
                            <img src="${imgSrc}" alt="${title}" class="w-full h-auto object-cover">
                        </div>`;
                });
                imagesContainer.classList.remove('hidden');
            } else {
                imagesContainer.classList.add('hidden'); // Sembunyikan jika tidak ada gambar
            }

            modal.classList.remove('hidden');
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                modalBox.classList.remove('scale-95');
                modalBox.classList.add('scale-100');
            }, 10);
        }

        function closeModal() {
            modal.classList.add('opacity-0');
            modalBox.classList.remove('scale-100');
            modalBox.classList.add('scale-95');
            
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300);
        }
    </script>
</body>
</html>