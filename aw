<!doctype html>
<html lang="id" class="h-full">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>2026 Aplikasi KGB Cadisdik Wil.9</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="/_sdk/element_sdk.js"></script>
  <script src="/_sdk/data_sdk.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
  <style>
    body {
      box-sizing: border-box;
      font-family: 'Plus Jakarta Sans', sans-serif;
    }
    
    .sidebar-item {
      transition: all 0.2s ease;
    }
    
    .sidebar-item:hover {
      transform: translateX(4px);
    }
    
    .sidebar-item.active {
      border-left: 3px solid currentColor;
    }
    
    .card-hover {
      transition: all 0.3s ease;
    }
    
    .card-hover:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 40px -10px rgba(0,0,0,0.2);
    }
    
    .fade-in {
      animation: fadeIn 0.3s ease;
    }
    
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }
    
    .btn-primary {
      transition: all 0.2s ease;
    }
    
    .btn-primary:hover {
      transform: scale(1.02);
    }
    
    ::-webkit-scrollbar {
      width: 6px;
    }
    
    ::-webkit-scrollbar-track {
      background: #f1f5f9;
    }
    
    ::-webkit-scrollbar-thumb {
      background: #cbd5e1;
      border-radius: 3px;
    }
    
    .gradient-bg {
      background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
    }
    
    .input-focus:focus {
      box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
    }
  </style>
  <style>@view-transition { navigation: auto; }</style>
 </head>
 <body class="h-full bg-slate-50">
  <div id="app" class="h-full w-full overflow-auto"><!-- Login Page -->
   <div id="loginPage" class="h-full w-full flex items-center justify-center p-4" style="background: linear-gradient(135deg, #1e3a5f 0%, #0f172a 100%);">
    <div class="w-full max-w-md fade-in">
     <div class="bg-white rounded-2xl shadow-2xl p-8">
      <div class="text-center mb-8">
       <div id="loginLogo" class="w-28 h-28 mx-auto mb-4 rounded-2xl flex items-center justify-center bg-transparent">
        <svg class="w-16 h-16" fill="none" stroke="url(#gradient)" viewbox="0 0 24 24" stroke-width="2"><defs>
          <lineargradient id="gradient" x1="0%" y1="0%" x2="100%" y2="100%">
           <stop offset="0%" style="stop-color:#3b82f6;stop-opacity:1" />
           <stop offset="100%" style="stop-color:#1d4ed8;stop-opacity:1" />
          </lineargradient>
         </defs> <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
       </div>
       <h1 id="loginTitle" class="text-xl font-bold text-slate-800">APLIKASI USULAN KGB</h1>
       <p id="loginSubtitle" class="text-xs text-slate-500 mt-2 leading-relaxed">CABANG DINAS PENDIDIKAN WILAYAH IX<br>
        PROVINSI JAWA BARAT</p>
      </div><!-- Login Form -->
      <div id="loginForm">
       <div class="space-y-4">
        <div><label class="block text-sm font-medium text-slate-700 mb-1">Username</label> <input type="text" id="loginUsername" class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:outline-none focus:border-blue-500 input-focus" placeholder="Masukkan username">
        </div>
        <div><label class="block text-sm font-medium text-slate-700 mb-1">Password</label> <input type="password" id="loginPassword" class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:outline-none focus:border-blue-500 input-focus" placeholder="Masukkan password">
        </div><button onclick="handleLogin()" class="w-full py-3 bg-gradient-to-r from-blue-600 to-blue-700 text-white font-semibold rounded-xl btn-primary hover:from-blue-700 hover:to-blue-800"> Masuk </button>
       </div>
       <div class="mt-6 flex justify-between text-sm"><button onclick="showForgotPassword()" class="text-blue-600 hover:text-blue-700 font-medium">Lupa Password?</button> <button onclick="showRegister()" class="text-blue-600 hover:text-blue-700 font-medium">Daftar Akun</button>
       </div>
      </div><!-- Forgot Password Form -->
      <div id="forgotPasswordForm" class="hidden">
       <div class="space-y-4">
        <div><label class="block text-sm font-medium text-slate-700 mb-1">Email Terdaftar</label> <input type="email" id="forgotEmail" class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:outline-none focus:border-blue-500 input-focus" placeholder="Masukkan email terdaftar">
        </div><button onclick="handleForgotPassword()" class="w-full py-3 bg-gradient-to-r from-blue-600 to-blue-700 text-white font-semibold rounded-xl btn-primary"> Kirim Link Reset </button>
       </div>
       <div class="mt-6 text-center"><button onclick="showLogin()" class="text-blue-600 hover:text-blue-700 font-medium text-sm">← Kembali ke Login</button>
       </div>
      </div><!-- Register Form -->
      <div id="registerForm" class="hidden">
       <div class="space-y-4">
        <div><label class="block text-sm font-medium text-slate-700 mb-1">Nama Lengkap</label> <input type="text" id="regName" class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:outline-none focus:border-blue-500 input-focus" placeholder="Masukkan nama lengkap">
        </div>
        <div><label class="block text-sm font-medium text-slate-700 mb-1">NIP</label> <input type="text" id="regNip" class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:outline-none focus:border-blue-500 input-focus" placeholder="Masukkan NIP">
        </div>
        <div><label class="block text-sm font-medium text-slate-700 mb-1">Nomor HP</label> <input type="tel" id="regPhone" class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:outline-none focus:border-blue-500 input-focus" placeholder="Masukkan nomor HP">
        </div>
        <div><label class="block text-sm font-medium text-slate-700 mb-1">Email</label> <input type="email" id="regEmail" class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:outline-none focus:border-blue-500 input-focus" placeholder="Masukkan email">
        </div>
        <div><label class="block text-sm font-medium text-slate-700 mb-1">Password</label> <input type="password" id="regPassword" class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:outline-none focus:border-blue-500 input-focus" placeholder="Buat password">
        </div>
        <div class="p-3 bg-blue-50 rounded-xl border border-blue-200">
         <p class="text-xs text-blue-800"><strong>Catatan:</strong> Akun Anda akan terdaftar sebagai <strong>Operator</strong> dan memerlukan persetujuan Administrator sebelum dapat digunakan.</p>
        </div><button onclick="handleRegister()" class="w-full py-3 bg-gradient-to-r from-blue-600 to-blue-700 text-white font-semibold rounded-xl btn-primary"> Daftar </button>
       </div>
       <div class="mt-6 text-center"><button onclick="showLogin()" class="text-blue-600 hover:text-blue-700 font-medium text-sm">← Kembali ke Login</button>
       </div>
      </div>
     </div>
     <p class="text-center text-slate-400 text-sm mt-6">© 2026 Aplikasi KGB Cadisdik Wil.9</p>
    </div>
   </div><!-- Main App -->
   <div id="mainApp" class="hidden h-full w-full flex"><!-- Sidebar -->
    <aside id="sidebar" class="w-64 h-full flex-shrink-0 text-white flex flex-col" style="background: linear-gradient(180deg, #1e3a5f 0%, #0f172a 100%);">
     <div class="p-5 border-b border-white/10">
      <div class="flex items-center gap-3">
       <div id="sidebarLogo" class="w-16 h-16 rounded-xl flex items-center justify-center bg-transparent">
        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewbox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
       </div>
       <div>
        <h2 id="appTitle" class="font-bold text-lg">Aplikasi KGB</h2>
        <p id="orgName" class="text-xs text-slate-300">Sistem Kepegawaian</p>
       </div>
      </div>
     </div>
     <nav class="flex-1 overflow-y-auto py-4 px-3">
      <div class="space-y-1"><button onclick="navigateTo('dashboard')" data-menu="dashboard" class="sidebar-item active w-full flex items-center gap-3 px-4 py-3 rounded-xl text-left text-sm font-medium bg-white/10">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewbox="0 0 24 24">
         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
        </svg> Dashboard </button>
       <div class="pt-4 pb-2 px-4 text-xs font-semibold text-slate-400 uppercase tracking-wider" id="sectionPengajuan">
        Pengajuan KGB
       </div><button onclick="navigateTo('formPns')" data-menu="formPns" class="sidebar-item w-full flex items-center gap-3 px-4 py-3 rounded-xl text-left text-sm font-medium hover:bg-white/10">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewbox="0 0 24 24">
         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
        </svg> Form KGB PNS </button> <button onclick="navigateTo('formPppk')" data-menu="formPppk" class="sidebar-item w-full flex items-center gap-3 px-4 py-3 rounded-xl text-left text-sm font-medium hover:bg-white/10">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewbox="0 0 24 24">
         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
        </svg> Form KGB PPPK </button> <button onclick="navigateTo('rekap')" data-menu="rekap" class="sidebar-item w-full flex items-center gap-3 px-4 py-3 rounded-xl text-left text-sm font-medium hover:bg-white/10">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewbox="0 0 24 24">
         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
        </svg> Rekap </button>
       <div class="pt-4 pb-2 px-4 text-xs font-semibold text-slate-400 uppercase tracking-wider" id="sectionVerifikasi">
        Verifikasi
       </div><button onclick="navigateTo('verifSurat')" data-menu="verifSurat" class="sidebar-item w-full flex items-center gap-3 px-4 py-3 rounded-xl text-left text-sm font-medium hover:bg-white/10">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewbox="0 0 24 24">
         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg> Verifikasi Persuratan </button> <button onclick="navigateTo('verifPegawai')" data-menu="verifPegawai" class="sidebar-item w-full flex items-center gap-3 px-4 py-3 rounded-xl text-left text-sm font-medium hover:bg-white/10">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewbox="0 0 24 24">
         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
        </svg> Verifikasi Kepegawaian </button>
       <div class="pt-4 pb-2 px-4 text-xs font-semibold text-slate-400 uppercase tracking-wider" id="sectionProses">
        Proses
       </div><button onclick="navigateTo('prosesKgb')" data-menu="prosesKgb" class="sidebar-item w-full flex items-center gap-3 px-4 py-3 rounded-xl text-left text-sm font-medium hover:bg-white/10">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewbox="0 0 24 24">
         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
        </svg> Proses KGB </button> <button onclick="navigateTo('export')" data-menu="export" class="sidebar-item w-full flex items-center gap-3 px-4 py-3 rounded-xl text-left text-sm font-medium hover:bg-white/10">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewbox="0 0 24 24">
         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
        </svg> Export </button>
       <div class="pt-4 pb-2 px-4 text-xs font-semibold text-slate-400 uppercase tracking-wider" id="sectionData">
        Data
       </div><button onclick="navigateTo('dbKepegawaian')" data-menu="dbKepegawaian" class="sidebar-item w-full flex items-center gap-3 px-4 py-3 rounded-xl text-left text-sm font-medium hover:bg-white/10">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewbox="0 0 24 24">
         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
        </svg> Database Kepegawaian </button> <button onclick="navigateTo('dbSekolah')" data-menu="dbSekolah" class="sidebar-item w-full flex items-center gap-3 px-4 py-3 rounded-xl text-left text-sm font-medium hover:bg-white/10">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewbox="0 0 24 24">
         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
        </svg> Database Sekolah </button> <button onclick="navigateTo('dbGaji')" data-menu="dbGaji" class="sidebar-item w-full flex items-center gap-3 px-4 py-3 rounded-xl text-left text-sm font-medium hover:bg-white/10">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewbox="0 0 24 24">
         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg> Database Gaji Pokok </button> <button onclick="navigateTo('users')" data-menu="users" class="sidebar-item w-full flex items-center gap-3 px-4 py-3 rounded-xl text-left text-sm font-medium hover:bg-white/10">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewbox="0 0 24 24">
         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
        </svg> Kelola User </button> <button onclick="navigateTo('settings')" data-menu="settings" class="sidebar-item w-full flex items-center gap-3 px-4 py-3 rounded-xl text-left text-sm font-medium hover:bg-white/10">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewbox="0 0 24 24">
         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg> Pengaturan </button>
      </div>
     </nav>
     <div class="p-4 border-t border-white/10"><button onclick="handleLogout()" class="w-full flex items-center gap-3 px-4 py-3 rounded-xl text-left text-sm font-medium hover:bg-white/10 text-red-300">
       <svg class="w-5 h-5" fill="none" stroke="currentColor" viewbox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
       </svg> Keluar </button>
     </div>
    </aside><!-- Main Content -->
    <main class="flex-1 h-full overflow-auto"><!-- Header -->
     <header class="bg-white border-b border-slate-200 px-6 py-4 sticky top-0 z-10">
      <div class="flex items-center justify-between">
       <div>
        <h1 id="pageTitle" class="text-xl font-bold text-slate-800">Dashboard</h1>
        <p id="pageSubtitle" class="text-sm text-slate-500">Selamat datang di Aplikasi KGB</p>
       </div>
       <div class="flex items-center gap-4">
        <div class="relative"><button class="p-2 rounded-xl hover:bg-slate-100 relative">
          <svg class="w-6 h-6 text-slate-500" fill="none" stroke="currentColor" viewbox="0 0 24 24">
           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
          </svg><span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full"></span> </button>
        </div>
        <div class="flex items-center gap-3">
         <div class="w-10 h-10 rounded-full bg-gradient-to-r from-blue-500 to-blue-600 flex items-center justify-center text-white font-semibold">
          A
         </div>
         <div class="hidden sm:block">
          <p class="text-sm font-semibold text-slate-800 user-name">Administrator</p>
          <p class="text-xs text-slate-500 user-role">Admin</p>
         </div>
        </div>
       </div>
      </div>
     </header><!-- Content Area -->
     <div id="contentArea" class="p-6"><!-- Dashboard Content -->
      <div id="dashboardContent" class="fade-in">
       <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="card-hover bg-white rounded-2xl p-6 border border-slate-200">
         <div class="flex items-center justify-between mb-4">
          <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center">
           <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewbox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
           </svg>
          </div><span class="text-xs font-medium text-green-600 bg-green-100 px-2 py-1 rounded-full">+12%</span>
         </div>
         <h3 id="totalPengajuan" class="text-3xl font-bold text-slate-800">0</h3>
         <p class="text-sm text-slate-500 mt-1">Total Pengajuan</p>
        </div>
        <div class="card-hover bg-white rounded-2xl p-6 border border-slate-200">
         <div class="flex items-center justify-between mb-4">
          <div class="w-12 h-12 rounded-xl bg-amber-100 flex items-center justify-center">
           <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewbox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
           </svg>
          </div><span class="text-xs font-medium text-amber-600 bg-amber-100 px-2 py-1 rounded-full">Pending</span>
         </div>
         <h3 id="menungguVerif" class="text-3xl font-bold text-slate-800">0</h3>
         <p class="text-sm text-slate-500 mt-1">Menunggu Verifikasi</p>
        </div>
        <div class="card-hover bg-white rounded-2xl p-6 border border-slate-200">
         <div class="flex items-center justify-between mb-4">
          <div class="w-12 h-12 rounded-xl bg-green-100 flex items-center justify-center">
           <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewbox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
           </svg>
          </div><span class="text-xs font-medium text-green-600 bg-green-100 px-2 py-1 rounded-full">Selesai</span>
         </div>
         <h3 id="disetujui" class="text-3xl font-bold text-slate-800">0</h3>
         <p class="text-sm text-slate-500 mt-1">Disetujui</p>
        </div>
        <div class="card-hover bg-white rounded-2xl p-6 border border-slate-200">
         <div class="flex items-center justify-between mb-4">
          <div class="w-12 h-12 rounded-xl bg-red-100 flex items-center justify-center">
           <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewbox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
           </svg>
          </div><span class="text-xs font-medium text-red-600 bg-red-100 px-2 py-1 rounded-full">Ditolak</span>
         </div>
         <h3 id="ditolak" class="text-3xl font-bold text-slate-800">0</h3>
         <p class="text-sm text-slate-500 mt-1">Ditolak</p>
        </div>
       </div>
       <div class="bg-white rounded-2xl border border-slate-200 p-6">
        <h3 class="text-lg font-bold text-slate-800 mb-4">Pengajuan Terbaru</h3>
        <div id="recentList" class="space-y-3">
         <div class="text-center py-8 text-slate-400">
          <svg class="w-12 h-12 mx-auto mb-2 opacity-50" fill="none" stroke="currentColor" viewbox="0 0 24 24">
           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
          </svg>
          <p>Belum ada pengajuan</p>
         </div>
        </div>
       </div>
      </div><!-- Form KGB PNS - COMPLETELY NEW -->
      <div id="formPnsContent" class="hidden fade-in">
       <div class="bg-white rounded-2xl border border-slate-200 p-6">
        <h3 class="text-lg font-bold text-slate-800 mb-6">Form Pengajuan KGB ASN PNS</h3>
        <form id="pnsForm" onsubmit="submitFormPns(event)" class="space-y-6"><!-- Data Pegawai Section -->
         <div class="rounded-2xl p-6" style="background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%);">
          <div class="flex items-center gap-3 mb-4">
           <div class="w-12 h-12 rounded-xl bg-blue-600 flex items-center justify-center">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
           </div>
           <h4 class="text-lg font-bold text-blue-900">Data Pegawai</h4>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
           <div class="md:col-span-2"><label class="block text-sm font-medium text-blue-900 mb-1">NIP <span class="text-red-600">*</span></label> <input type="text" id="pnsNip" required onblur="loadPegawaiData('pns', this.value)" class="w-full px-4 py-2 border border-blue-200 rounded-xl focus:outline-none focus:border-blue-500" placeholder="Masukkan NIP untuk mengisi data otomatis">
            <p class="text-xs text-blue-700 mt-1">Data pegawai akan terisi otomatis setelah memasukkan NIP</p>
           </div>
           <div><label class="block text-sm font-medium text-blue-900 mb-1">Nama</label> <input type="text" id="pnsNama" required readonly class="w-full px-4 py-2 border border-blue-200 rounded-xl bg-blue-50 focus:outline-none" placeholder="Otomatis dari database">
           </div>
           <div><label class="block text-sm font-medium text-blue-900 mb-1">Unit Kerja</label> <input type="text" id="pnsUnitKerja" required readonly class="w-full px-4 py-2 border border-blue-200 rounded-xl bg-blue-50 focus:outline-none" placeholder="Otomatis dari database">
           </div>
           <div><label class="block text-sm font-medium text-blue-900 mb-1">Jabatan</label> <input type="text" id="pnsJabatan" required readonly class="w-full px-4 py-2 border border-blue-200 rounded-xl bg-blue-50 focus:outline-none" placeholder="Otomatis dari database">
           </div>
           <div><label class="block text-sm font-medium text-blue-900 mb-1">Pangkat / Golongan</label> <input type="text" id="pnsPangkat" required readonly class="w-full px-4 py-2 border border-blue-200 rounded-xl bg-blue-50 focus:outline-none" placeholder="Otomatis dari database">
           </div>
           <div><label class="block text-sm font-medium text-blue-900 mb-1">Gaji Pokok</label> <input type="text" id="pnsGaji" required class="w-full px-4 py-2 border border-blue-200 rounded-xl focus:outline-none focus:border-blue-500" placeholder="Gaji pokok saat ini">
           </div>
          </div>
         </div><!-- Masa Kerja Section -->
         <div class="rounded-2xl p-6" style="background: linear-gradient(135deg, #d1fae5 0%, #a7f3d0 100%);">
          <div class="flex items-center gap-3 mb-4">
           <div class="w-12 h-12 rounded-xl bg-green-600 flex items-center justify-center">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
           </div>
           <h4 class="text-lg font-bold text-green-900">Masa Kerja &amp; TMT</h4>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
           <div><label class="block text-sm font-medium text-green-900 mb-1">Masa Kerja Tahun</label> <input type="number" id="pnsMasaTahun" required class="w-full px-4 py-2 border border-green-200 rounded-xl focus:outline-none focus:border-green-500" placeholder="Tahun">
           </div>
           <div><label class="block text-sm font-medium text-green-900 mb-1">Masa Kerja Bulan</label> <input type="number" id="pnsMasaBulan" required min="0" max="11" class="w-full px-4 py-2 border border-green-200 rounded-xl focus:outline-none focus:border-green-500" placeholder="Bulan (0-11)">
           </div>
           <div class="md:col-span-2"><label class="block text-sm font-medium text-green-900 mb-1">TMT KGB Terakhir</label> <input type="date" id="pnsTmtTerakhir" required class="w-full px-4 py-2 border border-green-200 rounded-xl focus:outline-none focus:border-green-500">
           </div>
          </div>
         </div><!-- Surat Usulan Section -->
         <div class="rounded-2xl p-6" style="background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);">
          <div class="flex items-center gap-3 mb-4">
           <div class="w-12 h-12 rounded-xl bg-amber-600 flex items-center justify-center">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
           </div>
           <h4 class="text-lg font-bold text-amber-900">Surat Usulan</h4>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
           <div><label class="block text-sm font-medium text-amber-900 mb-1">Periode KGB (Bulan - Tahun)</label> <input type="month" id="pnsPeriode" required class="w-full px-4 py-2 border border-amber-200 rounded-xl focus:outline-none focus:border-amber-500">
           </div>
           <div><label class="block text-sm font-medium text-amber-900 mb-1">Tanggal Surat Usulan</label> <input type="date" id="pnsTanggalSurat" required class="w-full px-4 py-2 border border-amber-200 rounded-xl focus:outline-none focus:border-amber-500">
           </div>
           <div class="md:col-span-2"><label class="block text-sm font-medium text-amber-900 mb-1">Nomor Surat Usulan / Pengantar</label> <input type="text" id="pnsNomorSurat" required class="w-full px-4 py-2 border border-amber-200 rounded-xl focus:outline-none focus:border-amber-500" placeholder="Contoh: 800/123/BKPSDM/2024">
           </div>
          </div>
         </div><!-- Upload Dokumen Section -->
         <div class="rounded-2xl p-6" style="background: linear-gradient(135deg, #f3e8ff 0%, #e9d5ff 100%);">
          <div class="flex items-center gap-3 mb-4">
           <div class="w-12 h-12 rounded-xl bg-purple-600 flex items-center justify-center">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
            </svg>
           </div>
           <h4 class="text-lg font-bold text-purple-900">Upload Dokumen PDF</h4>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6"><!-- SK KGB Terakhir -->
           <div class="border-2 border-dashed border-slate-300 rounded-xl p-6 hover:border-blue-400 transition-colors bg-white">
            <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center mb-3 mx-auto">
             <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
             </svg>
            </div><label class="block text-sm font-semibold text-slate-700 mb-2 text-center">SK KGB Terakhir</label> <input type="file" accept=".pdf" id="pnsSkKgb" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
            <p class="text-xs text-slate-500 mt-2 text-center">PDF max 1MB</p>
           </div><!-- SK Pangkat Terakhir -->
           <div class="border-2 border-dashed border-slate-300 rounded-xl p-6 hover:border-green-400 transition-colors bg-white">
            <div class="w-16 h-16 rounded-full bg-green-100 flex items-center justify-center mb-3 mx-auto">
             <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
             </svg>
            </div><label class="block text-sm font-semibold text-slate-700 mb-2 text-center">SK Pangkat Terakhir</label> <input type="file" accept=".pdf" id="pnsSkPangkat" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-green-50 file:text-green-700 hover:file:bg-green-100">
            <p class="text-xs text-slate-500 mt-2 text-center">PDF max 1MB</p>
           </div><!-- Bebas Hukuman Disiplin -->
           <div class="border-2 border-dashed border-slate-300 rounded-xl p-6 hover:border-purple-400 transition-colors bg-white">
            <div class="w-16 h-16 rounded-full bg-purple-100 flex items-center justify-center mb-3 mx-auto">
             <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
             </svg>
            </div><label class="block text-sm font-semibold text-slate-700 mb-2 text-center">Bebas Hukuman Disiplin</label> <input type="file" accept=".pdf" id="pnsBebasHukuman" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-purple-50 file:text-purple-700 hover:file:bg-purple-100">
            <p class="text-xs text-slate-500 mt-2 text-center">PDF max 1MB</p>
           </div><!-- Surat Pengantar -->
           <div class="border-2 border-dashed border-slate-300 rounded-xl p-6 hover:border-amber-400 transition-colors bg-white">
            <div class="w-16 h-16 rounded-full bg-amber-100 flex items-center justify-center mb-3 mx-auto">
             <svg class="w-8 h-8 text-amber-600" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
             </svg>
            </div><label class="block text-sm font-semibold text-slate-700 mb-2 text-center">Surat Pengantar</label> <input type="file" accept=".pdf" id="pnsSuratPengantar" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-amber-50 file:text-amber-700 hover:file:bg-amber-100">
            <p class="text-xs text-slate-500 mt-2 text-center">PDF max 1MB</p>
           </div>
          </div>
         </div>
         <div class="flex gap-3"><button type="submit" class="px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-700 text-white font-semibold rounded-xl btn-primary hover:from-blue-700 hover:to-blue-800"> Simpan Pengajuan </button> <button type="reset" class="px-6 py-3 bg-slate-100 text-slate-700 font-semibold rounded-xl btn-primary hover:bg-slate-200"> Reset Form </button>
         </div>
        </form>
       </div>
      </div><!-- Form KGB PPPK - SAME AS PNS -->
      <div id="formPppkContent" class="hidden fade-in">
       <div class="bg-white rounded-2xl border border-slate-200 p-6">
        <h3 class="text-lg font-bold text-slate-800 mb-6">Form Pengajuan KGB ASN PPPK</h3>
        <form id="pppkForm" onsubmit="submitFormPppk(event)" class="space-y-6"><!-- Data Pegawai Section -->
         <div class="rounded-2xl p-6" style="background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%);">
          <div class="flex items-center gap-3 mb-4">
           <div class="w-12 h-12 rounded-xl bg-blue-600 flex items-center justify-center">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
           </div>
           <h4 class="text-lg font-bold text-blue-900">Data Pegawai</h4>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
           <div class="md:col-span-2"><label class="block text-sm font-medium text-blue-900 mb-1">NIP <span class="text-red-600">*</span></label> <input type="text" id="pppkNip" required onblur="loadPegawaiData('pppk', this.value)" class="w-full px-4 py-2 border border-blue-200 rounded-xl focus:outline-none focus:border-blue-500" placeholder="Masukkan NIP untuk mengisi data otomatis">
            <p class="text-xs text-blue-700 mt-1">Data pegawai akan terisi otomatis setelah memasukkan NIP</p>
           </div>
           <div><label class="block text-sm font-medium text-blue-900 mb-1">Nama</label> <input type="text" id="pppkNama" required readonly class="w-full px-4 py-2 border border-blue-200 rounded-xl bg-blue-50 focus:outline-none" placeholder="Otomatis dari database">
           </div>
           <div><label class="block text-sm font-medium text-blue-900 mb-1">Unit Kerja</label> <input type="text" id="pppkUnitKerja" required readonly class="w-full px-4 py-2 border border-blue-200 rounded-xl bg-blue-50 focus:outline-none" placeholder="Otomatis dari database">
           </div>
           <div><label class="block text-sm font-medium text-blue-900 mb-1">Jabatan</label> <input type="text" id="pppkJabatan" required readonly class="w-full px-4 py-2 border border-blue-200 rounded-xl bg-blue-50 focus:outline-none" placeholder="Otomatis dari database">
           </div>
           <div><label class="block text-sm font-medium text-blue-900 mb-1">Pangkat / Golongan</label> <input type="text" id="pppkPangkat" required readonly class="w-full px-4 py-2 border border-blue-200 rounded-xl bg-blue-50 focus:outline-none" placeholder="Otomatis dari database">
           </div>
           <div><label class="block text-sm font-medium text-blue-900 mb-1">Gaji Pokok</label> <input type="text" id="pppkGaji" required class="w-full px-4 py-2 border border-blue-200 rounded-xl focus:outline-none focus:border-blue-500" placeholder="Gaji pokok saat ini">
           </div>
          </div>
         </div><!-- Masa Kerja Section -->
         <div class="rounded-2xl p-6" style="background: linear-gradient(135deg, #d1fae5 0%, #a7f3d0 100%);">
          <div class="flex items-center gap-3 mb-4">
           <div class="w-12 h-12 rounded-xl bg-green-600 flex items-center justify-center">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
           </div>
           <h4 class="text-lg font-bold text-green-900">Masa Kerja &amp; TMT</h4>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
           <div><label class="block text-sm font-medium text-green-900 mb-1">Masa Kerja Tahun</label> <input type="number" id="pppkMasaTahun" required class="w-full px-4 py-2 border border-green-200 rounded-xl focus:outline-none focus:border-green-500" placeholder="Tahun">
           </div>
           <div><label class="block text-sm font-medium text-green-900 mb-1">Masa Kerja Bulan</label> <input type="number" id="pppkMasaBulan" required min="0" max="11" class="w-full px-4 py-2 border border-green-200 rounded-xl focus:outline-none focus:border-green-500" placeholder="Bulan (0-11)">
           </div>
           <div class="md:col-span-2"><label class="block text-sm font-medium text-green-900 mb-1">TMT KGB Terakhir</label> <input type="date" id="pppkTmtTerakhir" required class="w-full px-4 py-2 border border-green-200 rounded-xl focus:outline-none focus:border-green-500">
           </div>
          </div>
         </div><!-- Surat Usulan Section -->
         <div class="rounded-2xl p-6" style="background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);">
          <div class="flex items-center gap-3 mb-4">
           <div class="w-12 h-12 rounded-xl bg-amber-600 flex items-center justify-center">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
           </div>
           <h4 class="text-lg font-bold text-amber-900">Surat Usulan</h4>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
           <div><label class="block text-sm font-medium text-amber-900 mb-1">Periode KGB (Bulan - Tahun)</label> <input type="month" id="pppkPeriode" required class="w-full px-4 py-2 border border-amber-200 rounded-xl focus:outline-none focus:border-amber-500">
           </div>
           <div><label class="block text-sm font-medium text-amber-900 mb-1">Tanggal Surat Usulan</label> <input type="date" id="pppkTanggalSurat" required class="w-full px-4 py-2 border border-amber-200 rounded-xl focus:outline-none focus:border-amber-500">
           </div>
           <div class="md:col-span-2"><label class="block text-sm font-medium text-amber-900 mb-1">Nomor Surat Usulan / Pengantar</label> <input type="text" id="pppkNomorSurat" required class="w-full px-4 py-2 border border-amber-200 rounded-xl focus:outline-none focus:border-amber-500" placeholder="Contoh: 800/123/BKPSDM/2024">
           </div>
          </div>
         </div><!-- Upload Dokumen Section -->
         <div class="rounded-2xl p-6" style="background: linear-gradient(135deg, #f3e8ff 0%, #e9d5ff 100%);">
          <div class="flex items-center gap-3 mb-4">
           <div class="w-12 h-12 rounded-xl bg-purple-600 flex items-center justify-center">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
            </svg>
           </div>
           <h4 class="text-lg font-bold text-purple-900">Upload Dokumen PDF</h4>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6"><!-- SK KGB Terakhir -->
           <div class="border-2 border-dashed border-slate-300 rounded-xl p-6 hover:border-blue-400 transition-colors bg-white">
            <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center mb-3 mx-auto">
             <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
             </svg>
            </div><label class="block text-sm font-semibold text-slate-700 mb-2 text-center">SK KGB Terakhir</label> <input type="file" accept=".pdf" id="pppkSkKgb" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
            <p class="text-xs text-slate-500 mt-2 text-center">PDF max 1MB</p>
           </div><!-- SK Pangkat Terakhir -->
           <div class="border-2 border-dashed border-slate-300 rounded-xl p-6 hover:border-green-400 transition-colors bg-white">
            <div class="w-16 h-16 rounded-full bg-green-100 flex items-center justify-center mb-3 mx-auto">
             <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
             </svg>
            </div><label class="block text-sm font-semibold text-slate-700 mb-2 text-center">SK Pangkat Terakhir</label> <input type="file" accept=".pdf" id="pppkSkPangkat" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-green-50 file:text-green-700 hover:file:bg-green-100">
            <p class="text-xs text-slate-500 mt-2 text-center">PDF max 1MB</p>
           </div><!-- Bebas Hukuman Disiplin -->
           <div class="border-2 border-dashed border-slate-300 rounded-xl p-6 hover:border-purple-400 transition-colors bg-white">
            <div class="w-16 h-16 rounded-full bg-purple-100 flex items-center justify-center mb-3 mx-auto">
             <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
             </svg>
            </div><label class="block text-sm font-semibold text-slate-700 mb-2 text-center">Bebas Hukuman Disiplin</label> <input type="file" accept=".pdf" id="pppkBebasHukuman" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-purple-50 file:text-purple-700 hover:file:bg-purple-100">
            <p class="text-xs text-slate-500 mt-2 text-center">PDF max 1MB</p>
           </div><!-- Surat Pengantar -->
           <div class="border-2 border-dashed border-slate-300 rounded-xl p-6 hover:border-amber-400 transition-colors bg-white">
            <div class="w-16 h-16 rounded-full bg-amber-100 flex items-center justify-center mb-3 mx-auto">
             <svg class="w-8 h-8 text-amber-600" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
             </svg>
            </div><label class="block text-sm font-semibold text-slate-700 mb-2 text-center">Surat Pengantar</label> <input type="file" accept=".pdf" id="pppkSuratPengantar" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-amber-50 file:text-amber-700 hover:file:bg-amber-100">
            <p class="text-xs text-slate-500 mt-2 text-center">PDF max 1MB</p>
           </div>
          </div>
         </div>
         <div class="flex gap-3"><button type="submit" class="px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-700 text-white font-semibold rounded-xl btn-primary hover:from-blue-700 hover:to-blue-800"> Simpan Pengajuan </button> <button type="reset" class="px-6 py-3 bg-slate-100 text-slate-700 font-semibold rounded-xl btn-primary hover:bg-slate-200"> Reset Form </button>
         </div>
        </form>
       </div>
      </div><!-- Verifikasi Persuratan - COMPLETELY NEW -->
      <div id="verifSuratContent" class="hidden fade-in">
       <div class="bg-white rounded-2xl border border-slate-200 p-6">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
         <h3 class="text-lg font-bold text-slate-800">Verifikasi Persuratan</h3>
         <div class="flex gap-3"><input type="text" id="searchVerifSurat" onkeyup="searchVerifSurat()" placeholder="Cari Nama atau NIP..." class="px-4 py-2 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-blue-500"> <select id="filterVerifSurat" onchange="filterVerifSurat()" class="px-4 py-2 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-blue-500"> <option value="all">Semua Status</option> <option value="Belum Verifikasi">Belum Verifikasi</option> <option value="Lengkap">Lengkap</option> <option value="Tidak Lengkap">Tidak Lengkap</option> </select>
         </div>
        </div>
        <div class="overflow-x-auto">
         <table class="w-full border-collapse border border-slate-300">
          <thead>
           <tr class="bg-gradient-to-r from-blue-600 to-blue-700 text-white">
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-left" style="min-width: 150px;">Nama</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-left" style="min-width: 140px;">NIP</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-left" style="min-width: 180px;">Jabatan</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-left" style="min-width: 150px;">Unit Kerja</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-center" style="min-width: 100px;">SK KGB</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-center" style="min-width: 120px;">SK Pangkat</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-center" style="min-width: 140px;">Bebas Hukuman</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-center" style="min-width: 130px;">Surat Pengantar</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-left" style="min-width: 140px;">Nomor Surat</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-left" style="min-width: 120px;">Tanggal Surat</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-center" style="min-width: 150px;">Status Verifikasi</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-center" style="min-width: 180px;">Disposisi</th>
           </tr>
          </thead>
          <tbody id="verifSuratTable">
           <tr>
            <td colspan="12" class="text-center py-8 text-slate-400 border border-slate-300">Belum ada data untuk diverifikasi</td>
           </tr>
          </tbody>
         </table>
        </div>
       </div>
      </div><!-- Verifikasi Kepegawaian - NEW -->
      <div id="verifPegawaiContent" class="hidden fade-in">
       <div class="bg-white rounded-2xl border border-slate-200 p-6">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
         <h3 class="text-lg font-bold text-slate-800">Verifikasi Kepegawaian</h3>
         <div class="flex gap-3"><input type="text" id="searchVerifPegawai" onkeyup="searchVerifPegawai()" placeholder="Cari Nama atau NIP..." class="px-4 py-2 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-blue-500"> <select id="filterVerifPegawai" onchange="filterVerifPegawai()" class="px-4 py-2 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-blue-500"> <option value="all">Semua Status</option> <option value="Belum Verifikasi">Belum Verifikasi</option> <option value="MS">Memenuhi Syarat</option> <option value="TMS">Tidak Memenuhi Syarat</option> </select>
         </div>
        </div>
        <div class="overflow-x-auto">
         <table class="w-full border-collapse border border-slate-300">
          <thead>
           <tr class="bg-gradient-to-r from-green-600 to-green-700 text-white">
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-left" style="min-width: 150px;">Nama</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-left" style="min-width: 140px;">NIP</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-left" style="min-width: 180px;">Jabatan</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-left" style="min-width: 150px;">Unit Kerja</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-center" style="min-width: 120px;">SK KGB</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-center" style="min-width: 140px;">SK Pangkat</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-center" style="min-width: 160px;">Bebas Hukuman</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-center" style="min-width: 150px;">Surat Pengantar</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-center" style="min-width: 180px;">Hasil Verifikasi</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-left" style="min-width: 300px;">Keterangan / Alasan</th>
           </tr>
          </thead>
          <tbody id="verifPegawaiTable">
           <tr>
            <td colspan="10" class="text-center py-8 text-slate-400 border border-slate-300">Belum ada data untuk diverifikasi</td>
           </tr>
          </tbody>
         </table>
        </div>
       </div>
      </div><!-- Rekap - UPDATED -->
      <div id="rekapContent" class="hidden fade-in">
       <div class="bg-white rounded-2xl border border-slate-200 p-6">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
         <h3 class="text-lg font-bold text-slate-800">Rekap Data KGB</h3>
         <div class="flex gap-3"><input type="text" id="searchRekap" onkeyup="searchRekap()" placeholder="Cari data..." class="px-4 py-2 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-blue-500"> <select id="filterUnitRekap" onchange="filterRekapByUnit()" class="px-4 py-2 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-blue-500"> <option value="all">Semua Unit</option> </select> <button onclick="exportToExcel()" class="px-4 py-2 bg-green-600 text-white rounded-xl text-sm font-medium hover:bg-green-700"> Export Excel </button>
         </div>
        </div>
        <div class="overflow-x-auto">
         <table class="w-full border-collapse border border-slate-300">
          <thead>
           <tr class="bg-gradient-to-r from-purple-600 to-purple-700 text-white">
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-left" style="min-width: 150px;">Nama</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-left" style="min-width: 140px;">NIP</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-left" style="min-width: 180px;">Jabatan</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-left" style="min-width: 150px;">Unit Kerja</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-left" style="min-width: 120px;">Jenis ASN</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-center" style="min-width: 160px;">Verif. Persuratan</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-center" style="min-width: 180px;">Verif. Kepegawaian</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-left" style="min-width: 250px;">Keterangan</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-center" style="min-width: 150px;">Status KGB</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-center" style="min-width: 120px;">Download</th>
           </tr>
          </thead>
          <tbody id="rekapTable">
           <tr>
            <td colspan="10" class="text-center py-8 text-slate-400 border border-slate-300">Belum ada data</td>
           </tr>
          </tbody>
         </table>
        </div>
       </div>
      </div><!-- Database Kepegawaian - UPDATED -->
      <div id="dbKepegawaianContent" class="hidden fade-in">
       <div class="bg-white rounded-2xl border border-slate-200 p-6">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
         <h3 class="text-lg font-bold text-slate-800">Database Kepegawaian</h3>
         <div class="flex gap-3"><input type="text" id="searchDbKepegawaian" onkeyup="searchDbKepegawaian()" placeholder="Cari pegawai..." class="px-4 py-2 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-blue-500"> <select id="filterDbKepegawaian" onchange="filterDbKepegawaian()" class="px-4 py-2 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-blue-500"> <option value="all">Semua Golongan</option> <option value="I">Golongan I</option> <option value="II">Golongan II</option> <option value="III">Golongan III</option> <option value="IV">Golongan IV</option> </select> <button onclick="addPegawai()" class="px-4 py-2 bg-blue-600 text-white rounded-xl text-sm font-medium hover:bg-blue-700"> + Tambah Pegawai </button>
         </div>
        </div>
        <div class="overflow-x-auto">
         <table class="w-full border-collapse border border-slate-300">
          <thead>
           <tr class="bg-gradient-to-r from-blue-600 to-blue-700 text-white">
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-left" style="min-width: 180px;">Nama</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-left" style="min-width: 160px;">NIP</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-left" style="min-width: 180px;">Pangkat / Golongan</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-left" style="min-width: 200px;">Jabatan</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-left" style="min-width: 200px;">Unit Kerja</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-center" style="min-width: 120px;">Aksi</th>
           </tr>
          </thead>
          <tbody id="dbKepegawaianTable">
           <tr>
            <td colspan="6" class="text-center py-8 text-slate-400 border border-slate-300">Belum ada data pegawai</td>
           </tr>
          </tbody>
         </table>
        </div>
       </div>
      </div><!-- Database Sekolah - UPDATED -->
      <div id="dbSekolahContent" class="hidden fade-in">
       <div class="bg-white rounded-2xl border border-slate-200 p-6">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
         <h3 class="text-lg font-bold text-slate-800">Database Sekolah</h3>
         <div class="flex gap-3"><input type="text" id="searchDbSekolah" onkeyup="searchDbSekolah()" placeholder="Cari sekolah..." class="px-4 py-2 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-blue-500"> <select id="filterDbSekolah" onchange="filterDbSekolah()" class="px-4 py-2 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-blue-500"> <option value="all">Semua Kabupaten</option> <option value="Kabupaten A">Kabupaten A</option> <option value="Kabupaten B">Kabupaten B</option> <option value="Kabupaten C">Kabupaten C</option> </select> <button onclick="addSekolah()" class="px-4 py-2 bg-blue-600 text-white rounded-xl text-sm font-medium hover:bg-blue-700"> + Tambah Sekolah </button>
         </div>
        </div>
        <div class="overflow-x-auto">
         <table class="w-full border-collapse border border-slate-300">
          <thead>
           <tr class="bg-gradient-to-r from-indigo-600 to-indigo-700 text-white">
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-left" style="min-width: 300px;">Sekolah</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-left" style="min-width: 200px;">Kabupaten</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-center" style="min-width: 120px;">Aksi</th>
           </tr>
          </thead>
          <tbody id="dbSekolahTable">
           <tr>
            <td colspan="3" class="text-center py-8 text-slate-400 border border-slate-300">Belum ada data sekolah</td>
           </tr>
          </tbody>
         </table>
        </div>
       </div>
      </div><!-- Database Gaji Pokok - UPDATED -->
      <div id="dbGajiContent" class="hidden fade-in">
       <div class="bg-white rounded-2xl border border-slate-200 p-6">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
         <h3 class="text-lg font-bold text-slate-800">Database Gaji Pokok</h3>
         <div class="flex gap-3"><input type="text" id="searchDbGaji" onkeyup="searchDbGaji()" placeholder="Cari golongan..." class="px-4 py-2 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-blue-500"> <button onclick="addGaji()" class="px-4 py-2 bg-blue-600 text-white rounded-xl text-sm font-medium hover:bg-blue-700"> + Tambah Data Gaji </button>
         </div>
        </div>
        <div class="overflow-x-auto">
         <table class="w-full border-collapse border border-slate-300">
          <thead>
           <tr class="bg-gradient-to-r from-emerald-600 to-emerald-700 text-white">
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-left" style="min-width: 180px;">Pangkat</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-left" style="min-width: 120px;">Golongan</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-left" style="min-width: 140px;">Masa Kerja</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-left" style="min-width: 180px;">Gaji Pokok</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-center" style="min-width: 120px;">Aksi</th>
           </tr>
          </thead>
          <tbody id="dbGajiTable">
           <tr>
            <td colspan="5" class="text-center py-8 text-slate-400 border border-slate-300">Belum ada data gaji pokok</td>
           </tr>
          </tbody>
         </table>
        </div>
       </div>
      </div><!-- Kelola User - UPDATED WITH NEW FEATURES -->
      <div id="usersContent" class="hidden fade-in">
       <div class="bg-white rounded-2xl border border-slate-200 p-6">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
         <h3 class="text-lg font-bold text-slate-800">Kelola User</h3><button onclick="addUser()" class="px-4 py-2 bg-blue-600 text-white rounded-xl text-sm font-medium hover:bg-blue-700"> + Tambah User </button>
        </div><!-- Pending Approval Section -->
        <div class="mb-8">
         <h4 class="text-md font-semibold text-slate-700 mb-4">Menunggu Persetujuan</h4>
         <div class="overflow-x-auto">
          <table class="w-full border-collapse border border-slate-300">
           <thead>
            <tr class="bg-amber-600 text-white">
             <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-left">Nama</th>
             <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-left">NIP</th>
             <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-left">Email</th>
             <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-left">No. HP</th>
             <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-center">Role</th>
             <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-center">Aksi</th>
            </tr>
           </thead>
           <tbody id="pendingUsersTable">
            <tr>
             <td colspan="6" class="text-center py-6 text-slate-400 border border-slate-300">Tidak ada user menunggu persetujuan</td>
            </tr>
           </tbody>
          </table>
         </div>
        </div><!-- Active Users Section -->
        <div>
         <h4 class="text-md font-semibold text-slate-700 mb-4">User Aktif</h4>
         <div class="overflow-x-auto">
          <table class="w-full border-collapse border border-slate-300">
           <thead>
            <tr class="bg-gradient-to-r from-blue-600 to-blue-700 text-white">
             <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-left">Username</th>
             <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-left">Nama</th>
             <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-left">Email</th>
             <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-center">Role</th>
             <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-center">Status</th>
             <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-center">Aksi</th>
            </tr>
           </thead>
           <tbody id="usersTable">
            <tr>
             <td colspan="6" class="text-center py-8 text-slate-400 border border-slate-300">Belum ada data user</td>
            </tr>
           </tbody>
          </table>
         </div>
        </div>
       </div>
      </div><!-- Proses KGB - NEW COMPLETE TABLE -->
      <div id="prosesKgbContent" class="hidden fade-in">
       <div class="bg-white rounded-2xl border border-slate-200 p-6">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
         <h3 class="text-lg font-bold text-slate-800">Proses KGB</h3>
         <div class="flex gap-3"><input type="text" id="searchProsesKgb" onkeyup="searchProsesKgb()" placeholder="Cari pegawai..." class="px-4 py-2 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-blue-500"> <button onclick="saveAllProsesKgb()" class="px-4 py-2 bg-blue-600 text-white rounded-xl text-sm font-medium hover:bg-blue-700"> Simpan Semua Perubahan </button>
         </div>
        </div>
        <div class="overflow-x-auto">
         <table class="w-full border-collapse border border-slate-300">
          <thead>
           <tr class="bg-gradient-to-r from-cyan-600 to-cyan-700 text-white">
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-left" style="min-width: 180px;">Nama</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-left" style="min-width: 160px;">NIP</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-left" style="min-width: 160px;">Pangkat / Golongan</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-left" style="min-width: 200px;">Jabatan</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-left" style="min-width: 200px;">Unit Kerja</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-left" style="min-width: 180px;">Gaji Pokok Lama</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-left" style="min-width: 180px;">Gaji Pokok Baru</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-left" style="min-width: 160px;">TMT KGB Baru</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-left" style="min-width: 180px;">TMT KGB Mendatang</th>
            <th class="py-3 px-4 font-semibold text-sm border border-slate-300 text-center" style="min-width: 200px;">Upload SK KGB Baru</th>
           </tr>
          </thead>
          <tbody id="prosesKgbTable">
           <tr>
            <td colspan="10" class="text-center py-8 text-slate-400 border border-slate-300">Belum ada data KGB yang disetujui untuk diproses</td>
           </tr>
          </tbody>
         </table>
        </div>
       </div>
      </div><!-- Export -->
      <div id="exportContent" class="hidden fade-in">
       <div class="bg-white rounded-2xl border border-slate-200 p-6">
        <h3 class="text-lg font-bold text-slate-800 mb-6">Export Data</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4"><button onclick="exportToExcel()" class="p-6 border-2 border-dashed border-slate-300 rounded-xl hover:border-green-500 hover:bg-green-50 transition-all">
          <div class="w-16 h-16 mx-auto mb-3 bg-green-100 rounded-xl flex items-center justify-center">
           <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
           </svg>
          </div><p class="font-semibold text-slate-700">Export ke Excel</p><p class="text-sm text-slate-500 mt-1">Download semua data dalam format Excel</p></button> <button onclick="exportToPdf()" class="p-6 border-2 border-dashed border-slate-300 rounded-xl hover:border-red-500 hover:bg-red-50 transition-all">
          <div class="w-16 h-16 mx-auto mb-3 bg-red-100 rounded-xl flex items-center justify-center">
           <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
           </svg>
          </div><p class="font-semibold text-slate-700">Export ke PDF</p><p class="text-sm text-slate-500 mt-1">Download laporan dalam format PDF</p></button> <button onclick="exportLaporan()" class="p-6 border-2 border-dashed border-slate-300 rounded-xl hover:border-blue-500 hover:bg-blue-50 transition-all">
          <div class="w-16 h-16 mx-auto mb-3 bg-blue-100 rounded-xl flex items-center justify-center">
           <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
           </svg>
          </div><p class="font-semibold text-slate-700">Laporan Lengkap</p><p class="text-sm text-slate-500 mt-1">Export laporan lengkap dengan statistik</p></button>
        </div>
       </div>
      </div><!-- Settings -->
      <div id="settingsContent" class="hidden fade-in">
       <div class="bg-white rounded-2xl border border-slate-200 p-6">
        <h3 class="text-lg font-bold text-slate-800 mb-6">Pengaturan Aplikasi</h3>
        <div class="space-y-6"><!-- Logo Settings -->
         <div class="p-6 bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl border border-blue-200">
          <h4 class="text-md font-semibold text-slate-800 mb-4 flex items-center gap-2">
           <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
           </svg> Pengaturan Logo</h4>
          <div class="mb-4"><label class="block text-sm font-medium text-slate-700 mb-2">Logo Aplikasi</label>
           <div class="flex items-center gap-4">
            <div id="logoPreview" class="w-32 h-32 bg-white border-2 border-dashed border-slate-300 rounded-xl flex items-center justify-center overflow-hidden">
             <svg class="w-16 h-16 text-slate-400" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
             </svg>
            </div>
            <div class="flex-1"><input type="file" id="logoUpload" accept="image/*" onchange="handleLogoUpload(this)" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
             <p class="text-xs text-slate-500 mt-2">Format: PNG, JPG, SVG (Max 1MB)</p><button onclick="resetLogo()" class="mt-2 px-3 py-1 bg-slate-200 text-slate-700 rounded-lg text-xs hover:bg-slate-300">Reset ke Default</button>
            </div>
           </div>
          </div>
         </div><!-- Color Settings -->
         <div class="p-6 bg-gradient-to-br from-purple-50 to-pink-50 rounded-xl border border-purple-200">
          <h4 class="text-md font-semibold text-slate-800 mb-4 flex items-center gap-2">
           <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
           </svg> Pengaturan Warna Tema</h4>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
           <div><label class="block text-sm font-medium text-slate-700 mb-2">Warna Utama</label>
            <div class="flex gap-2"><input type="color" id="primaryColorPicker" value="#1e3a5f" onchange="updatePrimaryColor(this.value)" class="w-16 h-10 rounded-lg border border-slate-300 cursor-pointer"> <input type="text" id="primaryColorText" value="#1e3a5f" onchange="updatePrimaryColor(this.value)" class="flex-1 px-4 py-2 border border-slate-200 rounded-xl focus:outline-none focus:border-blue-500 font-mono text-sm">
            </div>
            <p class="text-xs text-slate-500 mt-1">Warna untuk sidebar dan header</p>
           </div>
           <div><label class="block text-sm font-medium text-slate-700 mb-2">Warna Sekunder</label>
            <div class="flex gap-2"><input type="color" id="secondaryColorPicker" value="#0f172a" onchange="updateSecondaryColor(this.value)" class="w-16 h-10 rounded-lg border border-slate-300 cursor-pointer"> <input type="text" id="secondaryColorText" value="#0f172a" onchange="updateSecondaryColor(this.value)" class="flex-1 px-4 py-2 border border-slate-200 rounded-xl focus:outline-none focus:border-blue-500 font-mono text-sm">
            </div>
            <p class="text-xs text-slate-500 mt-1">Warna gradien sidebar</p>
           </div>
          </div>
          <div class="mt-4 p-3 bg-white rounded-lg border border-purple-200">
           <p class="text-xs font-medium text-slate-700 mb-2">Preview Warna:</p>
           <div class="flex gap-2">
            <div id="colorPreview1" class="flex-1 h-12 rounded-lg" style="background: #1e3a5f;"></div>
            <div id="colorPreview2" class="flex-1 h-12 rounded-lg" style="background: linear-gradient(135deg, #1e3a5f 0%, #0f172a 100%);"></div>
           </div>
          </div>
         </div><!-- Organization Settings -->
         <div class="p-6 bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl border border-green-200">
          <h4 class="text-md font-semibold text-slate-800 mb-4 flex items-center gap-2">
           <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
           </svg> Informasi Organisasi</h4>
          <div class="space-y-4">
           <div><label class="block text-sm font-medium text-slate-700 mb-2">Nama Organisasi</label> <input type="text" id="orgNameInput" value="Sistem Kepegawaian" class="w-full px-4 py-2 border border-slate-200 rounded-xl focus:outline-none focus:border-blue-500">
           </div>
           <div><label class="block text-sm font-medium text-slate-700 mb-2">Email Notifikasi</label> <input type="email" id="emailInput" value="admin@kgb.go.id" class="w-full px-4 py-2 border border-slate-200 rounded-xl focus:outline-none focus:border-blue-500">
           </div>
           <div><label class="block text-sm font-medium text-slate-700 mb-2">Periode KGB Aktif</label> <input type="text" id="periodeInput" value="2024" class="w-full px-4 py-2 border border-slate-200 rounded-xl focus:outline-none focus:border-blue-500">
           </div>
          </div>
         </div>
         <div class="flex gap-3"><button onclick="saveSettings()" class="px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-700 text-white font-semibold rounded-xl btn-primary hover:from-blue-700 hover:to-blue-800"> Simpan Semua Pengaturan </button> <button onclick="resetSettings()" class="px-6 py-3 bg-slate-200 text-slate-700 font-semibold rounded-xl btn-primary hover:bg-slate-300"> Reset ke Default </button>
         </div>
        </div>
       </div>
      </div>
     </div>
    </main>
   </div><!-- Toast Notification -->
   <div id="toast" class="fixed bottom-4 right-4 transform translate-y-20 opacity-0 transition-all duration-300 z-50">
    <div class="bg-slate-800 text-white px-6 py-3 rounded-xl shadow-lg flex items-center gap-3"><span id="toastMessage">Pesan</span>
    </div>
   </div><!-- Modal for Document View -->
   <div id="docModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-4">
    <div class="bg-white rounded-2xl max-w-4xl w-full max-h-[90vh] overflow-auto">
     <div class="p-6 border-b border-slate-200 flex items-center justify-between">
      <h3 id="docModalTitle" class="text-lg font-bold text-slate-800">Lihat Dokumen</h3><button onclick="closeDocModal()" class="text-slate-400 hover:text-slate-600">
       <svg class="w-6 h-6" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
       </svg></button>
     </div>
     <div id="docModalContent" class="p-6">
      <p class="text-center text-slate-500">Memuat dokumen...</p>
     </div>
    </div>
   </div><!-- Modal for Add User -->
   <div id="addUserModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-4">
    <div class="bg-white rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-auto">
     <div class="p-6 border-b border-slate-200 flex items-center justify-between">
      <h3 class="text-lg font-bold text-slate-800">Tambah User Baru</h3><button onclick="closeAddUserModal()" class="text-slate-400 hover:text-slate-600">
       <svg class="w-6 h-6" fill="none" stroke="currentColor" viewbox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
       </svg></button>
     </div>
     <div class="p-6">
      <form id="addUserForm" onsubmit="submitAddUser(event)">
       <div class="space-y-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
         <div><label class="block text-sm font-medium text-slate-700 mb-1">Username</label> <input type="text" id="newUsername" required class="w-full px-4 py-2 border border-slate-200 rounded-xl focus:outline-none focus:border-blue-500" placeholder="Username untuk login">
         </div>
         <div><label class="block text-sm font-medium text-slate-700 mb-1">Nama Lengkap</label> <input type="text" id="newName" required class="w-full px-4 py-2 border border-slate-200 rounded-xl focus:outline-none focus:border-blue-500" placeholder="Nama lengkap">
         </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
         <div><label class="block text-sm font-medium text-slate-700 mb-1">Email</label> <input type="email" id="newEmail" required class="w-full px-4 py-2 border border-slate-200 rounded-xl focus:outline-none focus:border-blue-500" placeholder="email@example.com">
         </div>
         <div><label class="block text-sm font-medium text-slate-700 mb-1">Nomor HP</label> <input type="tel" id="newPhone" class="w-full px-4 py-2 border border-slate-200 rounded-xl focus:outline-none focus:border-blue-500" placeholder="08xxxxxxxxxx">
         </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
         <div><label class="block text-sm font-medium text-slate-700 mb-1">NIP (Opsional)</label> <input type="text" id="newNip" class="w-full px-4 py-2 border border-slate-200 rounded-xl focus:outline-none focus:border-blue-500" placeholder="NIP">
         </div>
         <div><label class="block text-sm font-medium text-slate-700 mb-1">Role</label> <select id="newRole" required class="w-full px-4 py-2 border border-slate-200 rounded-xl focus:outline-none focus:border-blue-500"> <option value="">Pilih Role</option> <option value="Admin">Admin</option> <option value="Verifikator Surat">Verifikator Surat</option> <option value="Verifikator Kepegawaian">Verifikator Kepegawaian</option> <option value="Operator">Operator</option> </select>
         </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
         <div><label class="block text-sm font-medium text-slate-700 mb-1">Password</label> <input type="password" id="newPassword" required class="w-full px-4 py-2 border border-slate-200 rounded-xl focus:outline-none focus:border-blue-500" placeholder="Minimal 6 karakter">
         </div>
         <div><label class="block text-sm font-medium text-slate-700 mb-1">Konfirmasi Password</label> <input type="password" id="newPasswordConfirm" required class="w-full px-4 py-2 border border-slate-200 rounded-xl focus:outline-none focus:border-blue-500" placeholder="Ulangi password">
         </div>
        </div>
        <div><label class="block text-sm font-medium text-slate-700 mb-1">Status</label> <select id="newStatus" required class="w-full px-4 py-2 border border-slate-200 rounded-xl focus:outline-none focus:border-blue-500"> <option value="Aktif">Aktif</option> <option value="Nonaktif">Nonaktif</option> </select>
        </div>
        <div class="flex gap-3 pt-4"><button type="submit" class="flex-1 px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-700 text-white font-semibold rounded-xl btn-primary hover:from-blue-700 hover:to-blue-800"> Simpan User </button> <button type="button" onclick="closeAddUserModal()" class="px-6 py-3 bg-slate-200 text-slate-700 font-semibold rounded-xl btn-primary hover:bg-slate-300"> Batal </button>
        </div>
       </div>
      </form>
     </div>
    </div>
   </div>
  </div>
  <script>
    // State Management
    let kgbData = [];
    let userData = [
      {
        id: '1',
        username: 'admin',
        name: 'Administrator',
        email: 'admin@kgb.go.id',
        role: 'Admin',
        status: 'Aktif'
      }
    ];
    let pendingUsers = [];
    let dbKepegawaianData = [];
    let dbSekolahData = [];
    let dbGajiData = [];
    let currentPage = 'dashboard';
    let currentUserRole = 'Admin';
    let currentUserUnit = 'Semua Unit'; // Unit kerja user yang login
    
    // Sample data pegawai untuk demo
    const samplePegawaiData = [
      { nip: '199001012015031001', nama: 'Ahmad Fauzi, S.Pd', unitKerja: 'SDN 1 Kota', jabatan: 'Guru Kelas', pangkat: 'Penata / III/c' },
      { nip: '199203052017042002', nama: 'Siti Nurhaliza, S.Pd', unitKerja: 'SDN 2 Kota', jabatan: 'Guru Kelas', pangkat: 'Penata Muda Tk.I / III/b' },
      { nip: '198805102014031003', nama: 'Budi Santoso, S.Pd', unitKerja: 'SMPN 1 Kota', jabatan: 'Guru Matematika', pangkat: 'Penata Tk.I / III/d' },
      { nip: '199512152018042004', nama: 'Dewi Lestari, S.Pd', unitKerja: 'SMPN 2 Kota', jabatan: 'Guru Bahasa Indonesia', pangkat: 'Penata Muda / III/a' },
      { nip: '198701202012031005', nama: 'Eko Prasetyo, S.Pd', unitKerja: 'SMAN 1 Kota', jabatan: 'Guru Fisika', pangkat: 'Pembina / IV/a' }
    ];
    
    // Initialize dbKepegawaianData with sample data
    dbKepegawaianData = samplePegawaiData.map((item, index) => ({
      id: (index + 1).toString(),
      ...item
    }));
    
    // Function to load pegawai data automatically
    function loadPegawaiData(formType, nip) {
      if (!nip) return;
      
      // Find pegawai in database
      const pegawai = dbKepegawaianData.find(p => p.nip === nip);
      
      if (pegawai) {
        // Fill form fields based on form type
        if (formType === 'pns') {
          document.getElementById('pnsNama').value = pegawai.nama;
          document.getElementById('pnsUnitKerja').value = pegawai.unitKerja;
          document.getElementById('pnsJabatan').value = pegawai.jabatan;
          document.getElementById('pnsPangkat').value = pegawai.pangkat;
        } else if (formType === 'pppk') {
          document.getElementById('pppkNama').value = pegawai.nama;
          document.getElementById('pppkUnitKerja').value = pegawai.unitKerja;
          document.getElementById('pppkJabatan').value = pegawai.jabatan;
          document.getElementById('pppkPangkat').value = pegawai.pangkat;
        }
        showToast('Data pegawai berhasil dimuat');
      } else {
        showToast('NIP tidak ditemukan di database');
        // Clear fields if not found
        if (formType === 'pns') {
          document.getElementById('pnsNama').value = '';
          document.getElementById('pnsUnitKerja').value = '';
          document.getElementById('pnsJabatan').value = '';
          document.getElementById('pnsPangkat').value = '';
        } else if (formType === 'pppk') {
          document.getElementById('pppkNama').value = '';
          document.getElementById('pppkUnitKerja').value = '';
          document.getElementById('pppkJabatan').value = '';
          document.getElementById('pppkPangkat').value = '';
        }
      }
    }
    
    // Role-based menu access
    const menuAccess = {
      'Admin': ['dashboard', 'formPns', 'formPppk', 'rekap', 'verifSurat', 'verifPegawai', 'prosesKgb', 'export', 'dbKepegawaian', 'dbSekolah', 'dbGaji', 'users', 'settings'],
      'Verifikator Surat': ['dashboard', 'verifSurat', 'rekap', 'export'],
      'Verifikator Kepegawaian': ['dashboard', 'verifPegawai', 'dbKepegawaian', 'dbGaji', 'rekap', 'export', 'users', 'settings'],
      'Operator': ['dashboard', 'formPns', 'formPppk', 'rekap']
    };
    
    // App Settings
    let appSettings = {
      primaryColor: '#1e3a5f',
      secondaryColor: '#0f172a',
      logoUrl: '',
      orgName: 'Sistem Kepegawaian'
    };

    // Login Functions
    function handleLogin() {
      const username = document.getElementById('loginUsername').value;
      const password = document.getElementById('loginPassword').value;
      
      if (!username || !password) {
        showToast('Masukkan username dan password');
        return;
      }
      
      // Find user in userData
      const user = userData.find(u => u.username === username && u.status === 'Aktif');
      
      if (!user) {
        showToast('Username tidak ditemukan atau akun tidak aktif');
        return;
      }
      
      // Set current user role from found user
      currentUserRole = user.role;
      
      document.getElementById('loginPage').classList.add('hidden');
      document.getElementById('mainApp').classList.remove('hidden');
      
      updateUserDisplay();
      applyMenuAccess();
      updateDashboard();
      
      showToast(`Login berhasil sebagai ${currentUserRole}!`);
    }
    
    function updateUserDisplay() {
      const userNameElements = document.querySelectorAll('.user-name');
      const userRoleElements = document.querySelectorAll('.user-role');
      
      // Find current user from userData
      const currentUser = userData.find(u => u.role === currentUserRole);
      
      userNameElements.forEach(el => {
        el.textContent = currentUser ? currentUser.name : currentUserRole;
      });
      
      userRoleElements.forEach(el => {
        el.textContent = currentUserRole;
      });
    }
    
    function applyMenuAccess() {
      const allowedMenus = menuAccess[currentUserRole] || [];
      
      document.querySelectorAll('[data-menu]').forEach(item => {
        const menuId = item.getAttribute('data-menu');
        item.style.display = allowedMenus.includes(menuId) ? 'flex' : 'none';
      });
      
      const sections = document.querySelectorAll('nav .text-xs.font-semibold.text-slate-400');
      sections.forEach(section => {
        const nextElements = [];
        let currentElement = section.nextElementSibling;
        
        while (currentElement && !currentElement.classList.contains('text-xs')) {
          if (currentElement.hasAttribute('data-menu')) {
            nextElements.push(currentElement);
          }
          currentElement = currentElement.nextElementSibling;
        }
        
        const hasVisibleItems = nextElements.some(el => el.style.display !== 'none');
        section.style.display = hasVisibleItems ? 'block' : 'none';
      });
    }

    function handleLogout() {
      document.getElementById('mainApp').classList.add('hidden');
      document.getElementById('loginPage').classList.remove('hidden');
      document.getElementById('loginUsername').value = '';
      document.getElementById('loginPassword').value = '';
      currentUserRole = 'Admin';
      showToast('Anda telah keluar');
    }

    function showForgotPassword() {
      document.getElementById('loginForm').classList.add('hidden');
      document.getElementById('registerForm').classList.add('hidden');
      document.getElementById('forgotPasswordForm').classList.remove('hidden');
    }

    function showRegister() {
      document.getElementById('loginForm').classList.add('hidden');
      document.getElementById('forgotPasswordForm').classList.add('hidden');
      document.getElementById('registerForm').classList.remove('hidden');
    }

    function showLogin() {
      document.getElementById('forgotPasswordForm').classList.add('hidden');
      document.getElementById('registerForm').classList.add('hidden');
      document.getElementById('loginForm').classList.remove('hidden');
    }

    function handleForgotPassword() {
      const email = document.getElementById('forgotEmail').value;
      if (!email) {
        showToast('Masukkan email terdaftar');
        return;
      }
      showToast('Link reset password telah dikirim ke email');
      showLogin();
    }

    function handleRegister() {
      const name = document.getElementById('regName').value;
      const nip = document.getElementById('regNip').value;
      const phone = document.getElementById('regPhone').value;
      const email = document.getElementById('regEmail').value;
      const password = document.getElementById('regPassword').value;
      
      if (!name || !nip || !phone || !email || !password) {
        showToast('Lengkapi semua field');
        return;
      }
      
      // Add to pending users
      pendingUsers.push({
        id: Date.now().toString(),
        name: name,
        nip: nip,
        phone: phone,
        email: email,
        role: 'Operator',
        status: 'Pending'
      });
      
      showToast('Pendaftaran berhasil! Akun Anda sebagai Operator akan diverifikasi oleh Admin');
      showLogin();
    }

    // Navigation
    function navigateTo(page) {
      document.querySelectorAll('[id$="Content"]').forEach(el => el.classList.add('hidden'));
      document.getElementById(page + 'Content').classList.remove('hidden');
      
      document.querySelectorAll('.sidebar-item').forEach(el => {
        el.classList.remove('active', 'bg-white/10');
      });
      document.querySelector(`[data-menu="${page}"]`).classList.add('active', 'bg-white/10');
      
      const titles = {
        dashboard: 'Dashboard',
        formPns: 'Form KGB PNS',
        formPppk: 'Form KGB PPPK',
        rekap: 'Rekap Data',
        verifSurat: 'Verifikasi Persuratan',
        verifPegawai: 'Verifikasi Kepegawaian',
        prosesKgb: 'Proses KGB',
        export: 'Export Data',
        dbKepegawaian: 'Database Kepegawaian',
        dbSekolah: 'Database Sekolah',
        dbGaji: 'Database Gaji Pokok',
        users: 'Kelola User',
        settings: 'Pengaturan'
      };
      
      document.getElementById('pageTitle').textContent = titles[page] || 'Dashboard';
      currentPage = page;
      
      if (page === 'dashboard') updateDashboard();
      if (page === 'verifSurat') renderVerifSurat();
      if (page === 'verifPegawai') renderVerifPegawai();
      if (page === 'rekap') renderRekap();
      if (page === 'prosesKgb') renderProsesKgb();
      if (page === 'users') renderUsers();
      if (page === 'dbKepegawaian') renderDbKepegawaian();
      if (page === 'dbSekolah') renderDbSekolah();
      if (page === 'dbGaji') renderDbGaji();
    }

    // Form Submissions
    function submitFormPns(e) {
      e.preventDefault();
      
      const formData = {
        id: Date.now().toString(),
        jenis: 'PNS',
        nama: document.getElementById('pnsNama').value,
        nip: document.getElementById('pnsNip').value,
        unitKerja: document.getElementById('pnsUnitKerja').value,
        jabatan: document.getElementById('pnsJabatan').value,
        pangkat: document.getElementById('pnsPangkat').value,
        gaji: document.getElementById('pnsGaji').value,
        masaTahun: document.getElementById('pnsMasaTahun').value,
        masaBulan: document.getElementById('pnsMasaBulan').value,
        tmtTerakhir: document.getElementById('pnsTmtTerakhir').value,
        periode: document.getElementById('pnsPeriode').value,
        tanggalSurat: document.getElementById('pnsTanggalSurat').value,
        nomorSurat: document.getElementById('pnsNomorSurat').value,
        skKgb: document.getElementById('pnsSkKgb').files.length > 0,
        skPangkat: document.getElementById('pnsSkPangkat').files.length > 0,
        bebasHukuman: document.getElementById('pnsBebasHukuman').files.length > 0,
        suratPengantar: document.getElementById('pnsSuratPengantar').files.length > 0,
        statusSurat: 'Belum Verifikasi',
        statusPegawai: 'Belum Verifikasi',
        disposisi: 'Belum Disposisi',
        keterangan: '',
        tanggalPengajuan: new Date().toISOString()
      };
      
      kgbData.push(formData);
      showToast('Pengajuan KGB PNS berhasil disimpan!');
      document.getElementById('pnsForm').reset();
      updateDashboard();
      populateUnitFilter();
    }

    function submitFormPppk(e) {
      e.preventDefault();
      
      const formData = {
        id: Date.now().toString(),
        jenis: 'PPPK',
        nama: document.getElementById('pppkNama').value,
        nip: document.getElementById('pppkNip').value,
        unitKerja: document.getElementById('pppkUnitKerja').value,
        jabatan: document.getElementById('pppkJabatan').value,
        pangkat: document.getElementById('pppkPangkat').value,
        gaji: document.getElementById('pppkGaji').value,
        masaTahun: document.getElementById('pppkMasaTahun').value,
        masaBulan: document.getElementById('pppkMasaBulan').value,
        tmtTerakhir: document.getElementById('pppkTmtTerakhir').value,
        periode: document.getElementById('pppkPeriode').value,
        tanggalSurat: document.getElementById('pppkTanggalSurat').value,
        nomorSurat: document.getElementById('pppkNomorSurat').value,
        skKgb: document.getElementById('pppkSkKgb').files.length > 0,
        skPangkat: document.getElementById('pppkSkPangkat').files.length > 0,
        bebasHukuman: document.getElementById('pppkBebasHukuman').files.length > 0,
        suratPengantar: document.getElementById('pppkSuratPengantar').files.length > 0,
        statusSurat: 'Belum Verifikasi',
        statusPegawai: 'Belum Verifikasi',
        disposisi: 'Belum Disposisi',
        keterangan: '',
        tanggalPengajuan: new Date().toISOString()
      };
      
      kgbData.push(formData);
      showToast('Pengajuan KGB PPPK berhasil disimpan!');
      document.getElementById('pppkForm').reset();
      updateDashboard();
      populateUnitFilter();
    }

    // Render Functions
    function renderVerifSurat() {
      const tbody = document.getElementById('verifSuratTable');
      if (kgbData.length === 0) {
        tbody.innerHTML = '<tr><td colspan="12" class="text-center py-8 text-slate-400 border border-slate-300">Belum ada data untuk diverifikasi</td></tr>';
        return;
      }
      
      tbody.innerHTML = kgbData.map(item => `
        <tr class="hover:bg-slate-50">
          <td class="py-3 px-4 text-sm border border-slate-300">${item.nama}</td>
          <td class="py-3 px-4 text-sm border border-slate-300">${item.nip}</td>
          <td class="py-3 px-4 text-sm border border-slate-300">${item.jabatan}</td>
          <td class="py-3 px-4 text-sm border border-slate-300">${item.unitKerja}</td>
          <td class="py-3 px-4 text-sm border border-slate-300 text-center">
            ${item.skKgb ? '<span class="text-green-600 text-xl">✓</span>' : '<span class="text-red-600 text-xl">✗</span>'}
          </td>
          <td class="py-3 px-4 text-sm border border-slate-300 text-center">
            ${item.skPangkat ? '<span class="text-green-600 text-xl">✓</span>' : '<span class="text-red-600 text-xl">✗</span>'}
          </td>
          <td class="py-3 px-4 text-sm border border-slate-300 text-center">
            ${item.bebasHukuman ? '<span class="text-green-600 text-xl">✓</span>' : '<span class="text-red-600 text-xl">✗</span>'}
          </td>
          <td class="py-3 px-4 text-sm border border-slate-300 text-center">
            ${item.suratPengantar ? '<span class="text-green-600 text-xl">✓</span>' : '<span class="text-red-600 text-xl">✗</span>'}
          </td>
          <td class="py-3 px-4 text-sm border border-slate-300">
            <input type="text" value="${item.nomorSurat || ''}" onchange="updateNomorSurat('${item.id}', this.value)" class="w-full px-2 py-1 border border-slate-200 rounded" placeholder="Nomor surat">
          </td>
          <td class="py-3 px-4 text-sm border border-slate-300">${item.tanggalSurat || '-'}</td>
          <td class="py-3 px-4 text-sm border border-slate-300 text-center">
            <select onchange="updateStatusSurat('${item.id}', this.value)" class="px-2 py-1 border border-slate-200 rounded text-xs">
              <option value="Belum Verifikasi" ${item.statusSurat === 'Belum Verifikasi' ? 'selected' : ''}>Belum Verifikasi</option>
              <option value="Lengkap" ${item.statusSurat === 'Lengkap' ? 'selected' : ''}>Lengkap</option>
              <option value="Tidak Lengkap" ${item.statusSurat === 'Tidak Lengkap' ? 'selected' : ''}>Tidak Lengkap</option>
            </select>
          </td>
          <td class="py-3 px-4 text-sm border border-slate-300 text-center">
            <select onchange="updateDisposisi('${item.id}', this.value)" class="px-2 py-1 border border-slate-200 rounded text-xs">
              <option value="Belum Disposisi" ${item.disposisi === 'Belum Disposisi' ? 'selected' : ''}>Belum Disposisi</option>
              <option value="Disposisi Pimpinan" ${item.disposisi === 'Disposisi Pimpinan' ? 'selected' : ''}>Disposisi Pimpinan</option>
              <option value="Disposisi Pengelola KGB" ${item.disposisi === 'Disposisi Pengelola KGB' ? 'selected' : ''}>Disposisi Pengelola KGB</option>
            </select>
          </td>
        </tr>
      `).join('');
    }

    function renderVerifPegawai() {
      const tbody = document.getElementById('verifPegawaiTable');
      const filteredData = kgbData.filter(item => item.statusSurat === 'Lengkap');
      
      if (filteredData.length === 0) {
        tbody.innerHTML = '<tr><td colspan="10" class="text-center py-8 text-slate-400 border border-slate-300">Belum ada data untuk diverifikasi</td></tr>';
        return;
      }
      
      tbody.innerHTML = filteredData.map(item => `
        <tr class="hover:bg-slate-50">
          <td class="py-3 px-4 text-sm border border-slate-300">${item.nama}</td>
          <td class="py-3 px-4 text-sm border border-slate-300">${item.nip}</td>
          <td class="py-3 px-4 text-sm border border-slate-300">${item.jabatan}</td>
          <td class="py-3 px-4 text-sm border border-slate-300">${item.unitKerja}</td>
          <td class="py-3 px-4 text-sm border border-slate-300 text-center">
            <button onclick="viewDoc('SK KGB', '${item.id}')" class="text-blue-600 hover:text-blue-800 text-xs underline">Lihat</button>
          </td>
          <td class="py-3 px-4 text-sm border border-slate-300 text-center">
            <button onclick="viewDoc('SK Pangkat', '${item.id}')" class="text-blue-600 hover:text-blue-800 text-xs underline">Lihat</button>
          </td>
          <td class="py-3 px-4 text-sm border border-slate-300 text-center">
            <button onclick="viewDoc('Bebas Hukuman', '${item.id}')" class="text-blue-600 hover:text-blue-800 text-xs underline">Lihat</button>
          </td>
          <td class="py-3 px-4 text-sm border border-slate-300 text-center">
            <button onclick="viewDoc('Surat Pengantar', '${item.id}')" class="text-blue-600 hover:text-blue-800 text-xs underline">Lihat</button>
          </td>
          <td class="py-3 px-4 text-sm border border-slate-300 text-center">
            <select onchange="updateStatusPegawai('${item.id}', this.value)" class="px-2 py-1 border border-slate-200 rounded text-xs">
              <option value="Belum Verifikasi" ${item.statusPegawai === 'Belum Verifikasi' ? 'selected' : ''}>Belum Verifikasi</option>
              <option value="MS" ${item.statusPegawai === 'MS' ? 'selected' : ''}>Memenuhi Syarat</option>
              <option value="TMS" ${item.statusPegawai === 'TMS' ? 'selected' : ''}>Tidak Memenuhi Syarat</option>
            </select>
          </td>
          <td class="py-3 px-4 text-sm border border-slate-300">
            <textarea onchange="updateKeterangan('${item.id}', this.value)" maxlength="100" class="w-full px-2 py-1 border border-slate-200 rounded text-xs" rows="2" placeholder="Keterangan maksimal 100 karakter">${item.keterangan || ''}</textarea>
          </td>
        </tr>
      `).join('');
    }

    function renderRekap() {
      const tbody = document.getElementById('rekapTable');
      
      if (kgbData.length === 0) {
        tbody.innerHTML = '<tr><td colspan="10" class="text-center py-8 text-slate-400 border border-slate-300">Belum ada data</td></tr>';
        return;
      }
      
      tbody.innerHTML = kgbData.map(item => `
        <tr class="hover:bg-slate-50">
          <td class="py-3 px-4 text-sm border border-slate-300">${item.nama}</td>
          <td class="py-3 px-4 text-sm border border-slate-300">${item.nip}</td>
          <td class="py-3 px-4 text-sm border border-slate-300">${item.jabatan}</td>
          <td class="py-3 px-4 text-sm border border-slate-300">${item.unitKerja}</td>
          <td class="py-3 px-4 text-sm border border-slate-300">${item.jenis}</td>
          <td class="py-3 px-4 text-sm border border-slate-300 text-center">
            <span class="px-2 py-1 rounded-full text-xs ${item.statusSurat === 'Lengkap' ? 'bg-green-100 text-green-800' : item.statusSurat === 'Tidak Lengkap' ? 'bg-red-100 text-red-800' : 'bg-amber-100 text-amber-800'}">${item.statusSurat}</span>
          </td>
          <td class="py-3 px-4 text-sm border border-slate-300 text-center">
            <span class="px-2 py-1 rounded-full text-xs ${item.statusPegawai === 'MS' ? 'bg-green-100 text-green-800' : item.statusPegawai === 'TMS' ? 'bg-red-100 text-red-800' : 'bg-amber-100 text-amber-800'}">${item.statusPegawai === 'MS' ? 'Memenuhi Syarat' : item.statusPegawai === 'TMS' ? 'Tidak Memenuhi Syarat' : 'Belum Verifikasi'}</span>
          </td>
          <td class="py-3 px-4 text-sm border border-slate-300">${item.keterangan || '-'}</td>
          <td class="py-3 px-4 text-sm border border-slate-300 text-center">
            <span class="px-2 py-1 rounded-full text-xs ${item.statusPegawai === 'MS' ? 'bg-blue-100 text-blue-800' : 'bg-slate-100 text-slate-600'}">
              ${item.statusPegawai === 'MS' ? 'Disetujui' : 'Proses'}
            </span>
          </td>
          <td class="py-3 px-4 text-sm border border-slate-300 text-center">
            <button onclick="downloadSkKgb('${item.id}')" class="text-blue-600 hover:text-blue-800 text-xs underline">Download SK</button>
          </td>
        </tr>
      `).join('');
      
      populateUnitFilter();
    }
    
    function renderProsesKgb() {
      const tbody = document.getElementById('prosesKgbTable');
      const approvedData = kgbData.filter(item => item.statusPegawai === 'MS');
      
      if (approvedData.length === 0) {
        tbody.innerHTML = '<tr><td colspan="10" class="text-center py-8 text-slate-400 border border-slate-300">Belum ada data KGB yang disetujui untuk diproses</td></tr>';
        return;
      }
      
      tbody.innerHTML = approvedData.map(item => `
        <tr class="hover:bg-slate-50">
          <td class="py-3 px-4 text-sm border border-slate-300">${item.nama}</td>
          <td class="py-3 px-4 text-sm border border-slate-300">${item.nip}</td>
          <td class="py-3 px-4 text-sm border border-slate-300">${item.pangkat}</td>
          <td class="py-3 px-4 text-sm border border-slate-300">${item.jabatan}</td>
          <td class="py-3 px-4 text-sm border border-slate-300">${item.unitKerja}</td>
          <td class="py-3 px-4 text-sm border border-slate-300">
            <input type="text" value="${item.gaji || ''}" readonly class="w-full px-2 py-1 border border-slate-200 rounded bg-slate-50" placeholder="Gaji lama">
          </td>
          <td class="py-3 px-4 text-sm border border-slate-300">
            <input type="text" onchange="updateGajiBaru('${item.id}', this.value)" value="${item.gajiBaru || ''}" class="w-full px-2 py-1 border border-slate-200 rounded" placeholder="Gaji baru">
          </td>
          <td class="py-3 px-4 text-sm border border-slate-300">
            <input type="date" onchange="updateTmtBaru('${item.id}', this.value)" value="${item.tmtBaru || ''}" class="w-full px-2 py-1 border border-slate-200 rounded text-xs">
          </td>
          <td class="py-3 px-4 text-sm border border-slate-300">
            <input type="date" onchange="updateTmtMendatang('${item.id}', this.value)" value="${item.tmtMendatang || ''}" class="w-full px-2 py-1 border border-slate-200 rounded text-xs">
          </td>
          <td class="py-3 px-4 text-sm border border-slate-300 text-center">
            <input type="file" accept=".pdf" onchange="uploadSkBaru('${item.id}', this)" class="w-full text-xs file:mr-2 file:py-1 file:px-3 file:rounded-full file:border-0 file:text-xs file:font-semibold file:bg-blue-50 file:text-blue-700">
          </td>
        </tr>
      `).join('');
    }
    
    function renderUsers() {
      const tbody = document.getElementById('usersTable');
      const pendingTbody = document.getElementById('pendingUsersTable');
      
      // Render pending users
      if (pendingUsers.length === 0) {
        pendingTbody.innerHTML = '<tr><td colspan="6" class="text-center py-6 text-slate-400 border border-slate-300">Tidak ada user menunggu persetujuan</td></tr>';
      } else {
        pendingTbody.innerHTML = pendingUsers.map(user => `
          <tr class="hover:bg-slate-50">
            <td class="py-3 px-4 text-sm border border-slate-300">${user.name}</td>
            <td class="py-3 px-4 text-sm border border-slate-300">${user.nip}</td>
            <td class="py-3 px-4 text-sm border border-slate-300">${user.email}</td>
            <td class="py-3 px-4 text-sm border border-slate-300">${user.phone}</td>
            <td class="py-3 px-4 text-sm border border-slate-300 text-center">
              <span class="px-2 py-1 bg-amber-100 text-amber-800 rounded-full text-xs">${user.role}</span>
            </td>
            <td class="py-3 px-4 text-sm border border-slate-300 text-center">
              <div class="flex gap-2 justify-center">
                <button onclick="approveUser('${user.id}')" class="px-3 py-1 bg-green-600 text-white rounded text-xs hover:bg-green-700">Setujui</button>
                <button onclick="rejectUser('${user.id}')" class="px-3 py-1 bg-red-600 text-white rounded text-xs hover:bg-red-700">Tolak</button>
              </div>
            </td>
          </tr>
        `).join('');
      }
      
      // Render active users
      if (userData.length === 0) {
        tbody.innerHTML = '<tr><td colspan="6" class="text-center py-8 text-slate-400 border border-slate-300">Belum ada data user</td></tr>';
      } else {
        tbody.innerHTML = userData.map(user => `
          <tr class="hover:bg-slate-50">
            <td class="py-3 px-4 text-sm border border-slate-300">${user.username}</td>
            <td class="py-3 px-4 text-sm border border-slate-300">${user.name}</td>
            <td class="py-3 px-4 text-sm border border-slate-300">${user.email}</td>
            <td class="py-3 px-4 text-sm border border-slate-300 text-center">
              <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">${user.role}</span>
            </td>
            <td class="py-3 px-4 text-sm border border-slate-300 text-center">
              <span class="px-2 py-1 ${user.status === 'Aktif' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800'} rounded-full text-xs">${user.status}</span>
            </td>
            <td class="py-3 px-4 text-sm border border-slate-300 text-center">
              <div class="flex gap-2 justify-center">
                <button onclick="editUser('${user.id}')" class="px-3 py-1 bg-blue-600 text-white rounded text-xs hover:bg-blue-700">Edit</button>
                <button onclick="deleteUser('${user.id}')" class="px-3 py-1 bg-red-600 text-white rounded text-xs hover:bg-red-700">Hapus</button>
              </div>
            </td>
          </tr>
        `).join('');
      }
    }
    
    function renderDbKepegawaian() {
      const tbody = document.getElementById('dbKepegawaianTable');
      
      if (dbKepegawaianData.length === 0) {
        tbody.innerHTML = '<tr><td colspan="6" class="text-center py-8 text-slate-400 border border-slate-300">Belum ada data pegawai</td></tr>';
        return;
      }
      
      tbody.innerHTML = dbKepegawaianData.map(item => `
        <tr class="hover:bg-slate-50">
          <td class="py-3 px-4 text-sm border border-slate-300">${item.nama}</td>
          <td class="py-3 px-4 text-sm border border-slate-300">${item.nip}</td>
          <td class="py-3 px-4 text-sm border border-slate-300">${item.pangkat}</td>
          <td class="py-3 px-4 text-sm border border-slate-300">${item.jabatan}</td>
          <td class="py-3 px-4 text-sm border border-slate-300">${item.unitKerja}</td>
          <td class="py-3 px-4 text-sm border border-slate-300 text-center">
            <div class="flex gap-2 justify-center">
              <button onclick="editPegawai('${item.id}')" class="px-3 py-1 bg-blue-600 text-white rounded text-xs hover:bg-blue-700">Edit</button>
              <button onclick="deletePegawai('${item.id}')" class="px-3 py-1 bg-red-600 text-white rounded text-xs hover:bg-red-700">Hapus</button>
            </div>
          </td>
        </tr>
      `).join('');
    }
    
    function renderDbSekolah() {
      const tbody = document.getElementById('dbSekolahTable');
      
      if (dbSekolahData.length === 0) {
        tbody.innerHTML = '<tr><td colspan="3" class="text-center py-8 text-slate-400 border border-slate-300">Belum ada data sekolah</td></tr>';
        return;
      }
      
      tbody.innerHTML = dbSekolahData.map(item => `
        <tr class="hover:bg-slate-50">
          <td class="py-3 px-4 text-sm border border-slate-300">${item.nama}</td>
          <td class="py-3 px-4 text-sm border border-slate-300">${item.kabupaten}</td>
          <td class="py-3 px-4 text-sm border border-slate-300 text-center">
            <div class="flex gap-2 justify-center">
              <button onclick="editSekolah('${item.id}')" class="px-3 py-1 bg-blue-600 text-white rounded text-xs hover:bg-blue-700">Edit</button>
              <button onclick="deleteSekolah('${item.id}')" class="px-3 py-1 bg-red-600 text-white rounded text-xs hover:bg-red-700">Hapus</button>
            </div>
          </td>
        </tr>
      `).join('');
    }
    
    function renderDbGaji() {
      const tbody = document.getElementById('dbGajiTable');
      
      if (dbGajiData.length === 0) {
        tbody.innerHTML = '<tr><td colspan="5" class="text-center py-8 text-slate-400 border border-slate-300">Belum ada data gaji pokok</td></tr>';
        return;
      }
      
      tbody.innerHTML = dbGajiData.map(item => `
        <tr class="hover:bg-slate-50">
          <td class="py-3 px-4 text-sm border border-slate-300">${item.pangkat}</td>
          <td class="py-3 px-4 text-sm border border-slate-300">${item.golongan}</td>
          <td class="py-3 px-4 text-sm border border-slate-300">${item.masaKerja}</td>
          <td class="py-3 px-4 text-sm border border-slate-300">${item.gaji}</td>
          <td class="py-3 px-4 text-sm border border-slate-300 text-center">
            <div class="flex gap-2 justify-center">
              <button onclick="editGaji('${item.id}')" class="px-3 py-1 bg-blue-600 text-white rounded text-xs hover:bg-blue-700">Edit</button>
              <button onclick="deleteGaji('${item.id}')" class="px-3 py-1 bg-red-600 text-white rounded text-xs hover:bg-red-700">Hapus</button>
            </div>
          </td>
        </tr>
      `).join('');
    }

    // Update Functions
    function updateNomorSurat(id, value) {
      const item = kgbData.find(d => d.id === id);
      if (item) item.nomorSurat = value;
    }

    function updateStatusSurat(id, value) {
      const item = kgbData.find(d => d.id === id);
      if (item) {
        item.statusSurat = value;
        updateDashboard();
        renderVerifSurat();
      }
    }

    function updateDisposisi(id, value) {
      const item = kgbData.find(d => d.id === id);
      if (item) item.disposisi = value;
    }

    function updateStatusPegawai(id, value) {
      const item = kgbData.find(d => d.id === id);
      if (item) {
        item.statusPegawai = value;
        updateDashboard();
        renderVerifPegawai();
      }
    }

    function updateKeterangan(id, value) {
      const item = kgbData.find(d => d.id === id);
      if (item) item.keterangan = value;
    }

    function updateGajiBaru(id, value) {
      const item = kgbData.find(d => d.id === id);
      if (item) item.gajiBaru = value;
    }

    function updateTmtBaru(id, value) {
      const item = kgbData.find(d => d.id === id);
      if (item) item.tmtBaru = value;
    }

    function updateTmtMendatang(id, value) {
      const item = kgbData.find(d => d.id === id);
      if (item) item.tmtMendatang = value;
    }

    function uploadSkBaru(id, input) {
      if (input.files.length > 0) {
        const item = kgbData.find(d => d.id === id);
        if (item) {
          item.skKgbBaru = true;
          showToast('SK KGB baru berhasil diupload');
        }
      }
    }

    function saveAllProsesKgb() {
      showToast('Semua data proses KGB berhasil disimpan');
    }

    // Dashboard Update
    function updateDashboard() {
      document.getElementById('totalPengajuan').textContent = kgbData.length;
      document.getElementById('menungguVerif').textContent = kgbData.filter(d => d.statusSurat === 'Belum Verifikasi').length;
      document.getElementById('disetujui').textContent = kgbData.filter(d => d.statusPegawai === 'MS').length;
      document.getElementById('ditolak').textContent = kgbData.filter(d => d.statusPegawai === 'TMS').length;
      
      const recentList = document.getElementById('recentList');
      if (kgbData.length === 0) {
        recentList.innerHTML = `
          <div class="text-center py-8 text-slate-400">
            <svg class="w-12 h-12 mx-auto mb-2 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
            <p>Belum ada pengajuan</p>
          </div>
        `;
      } else {
        const recent = kgbData.slice(-5).reverse();
        recentList.innerHTML = recent.map(item => `
          <div class="flex items-center justify-between p-3 hover:bg-slate-50 rounded-lg border border-slate-200">
            <div class="flex-1">
              <p class="font-medium text-sm text-slate-800">${item.nama}</p>
              <p class="text-xs text-slate-500">${item.nip} - ${item.unitKerja}</p>
            </div>
            <span class="px-2 py-1 rounded-full text-xs ${item.statusPegawai === 'MS' ? 'bg-green-100 text-green-800' : item.statusPegawai === 'TMS' ? 'bg-red-100 text-red-800' : 'bg-amber-100 text-amber-800'}">
              ${item.statusPegawai === 'MS' ? 'Disetujui' : item.statusPegawai === 'TMS' ? 'Ditolak' : 'Proses'}
            </span>
          </div>
        `).join('');
      }
    }

    // User Management Functions
    function approveUser(id) {
      const user = pendingUsers.find(u => u.id === id);
      if (user) {
        userData.push({
          id: user.id,
          username: user.email.split('@')[0],
          name: user.name,
          email: user.email,
          role: user.role,
          status: 'Aktif'
        });
        pendingUsers = pendingUsers.filter(u => u.id !== id);
        renderUsers();
        showToast('User berhasil disetujui');
      }
    }

    function rejectUser(id) {
      pendingUsers = pendingUsers.filter(u => u.id !== id);
      renderUsers();
      showToast('Pendaftaran user ditolak');
    }

    function addUser() {
      document.getElementById('addUserModal').classList.remove('hidden');
    }

    function closeAddUserModal() {
      document.getElementById('addUserModal').classList.add('hidden');
      document.getElementById('addUserForm').reset();
    }

    function submitAddUser(e) {
      e.preventDefault();
      
      const password = document.getElementById('newPassword').value;
      const passwordConfirm = document.getElementById('newPasswordConfirm').value;
      
      if (password !== passwordConfirm) {
        showToast('Password tidak cocok');
        return;
      }
      
      const newUser = {
        id: Date.now().toString(),
        username: document.getElementById('newUsername').value,
        name: document.getElementById('newName').value,
        email: document.getElementById('newEmail').value,
        role: document.getElementById('newRole').value,
        status: document.getElementById('newStatus').value
      };
      
      userData.push(newUser);
      closeAddUserModal();
      renderUsers();
      showToast('User berhasil ditambahkan');
    }

    function editUser(id) {
      showToast('Fitur edit user sedang dalam pengembangan');
    }

    function deleteUser(id) {
      userData = userData.filter(u => u.id !== id);
      renderUsers();
      showToast('User berhasil dihapus');
    }

    // Database Management Functions
    function addPegawai() {
      showToast('Fitur tambah pegawai akan segera tersedia');
    }

    function editPegawai(id) {
      showToast('Fitur edit pegawai sedang dalam pengembangan');
    }

    function deletePegawai(id) {
      dbKepegawaianData = dbKepegawaianData.filter(p => p.id !== id);
      renderDbKepegawaian();
      showToast('Data pegawai berhasil dihapus');
    }

    function addSekolah() {
      showToast('Fitur tambah sekolah akan segera tersedia');
    }

    function editSekolah(id) {
      showToast('Fitur edit sekolah sedang dalam pengembangan');
    }

    function deleteSekolah(id) {
      dbSekolahData = dbSekolahData.filter(s => s.id !== id);
      renderDbSekolah();
      showToast('Data sekolah berhasil dihapus');
    }

    function addGaji() {
      showToast('Fitur tambah data gaji akan segera tersedia');
    }

    function editGaji(id) {
      showToast('Fitur edit data gaji sedang dalam pengembangan');
    }

    function deleteGaji(id) {
      dbGajiData = dbGajiData.filter(g => g.id !== id);
      renderDbGaji();
      showToast('Data gaji berhasil dihapus');
    }

    // Search and Filter Functions
    function searchVerifSurat() {
      const searchTerm = document.getElementById('searchVerifSurat').value.toLowerCase();
      const rows = document.querySelectorAll('#verifSuratTable tr');
      
      rows.forEach(row => {
        const text = row.textContent.toLowerCase();
        row.style.display = text.includes(searchTerm) ? '' : 'none';
      });
    }

    function filterVerifSurat() {
      const filter = document.getElementById('filterVerifSurat').value;
      const rows = document.querySelectorAll('#verifSuratTable tr');
      
      rows.forEach(row => {
        if (filter === 'all') {
          row.style.display = '';
        } else {
          const text = row.textContent;
          row.style.display = text.includes(filter) ? '' : 'none';
        }
      });
    }

    function searchVerifPegawai() {
      const searchTerm = document.getElementById('searchVerifPegawai').value.toLowerCase();
      const rows = document.querySelectorAll('#verifPegawaiTable tr');
      
      rows.forEach(row => {
        const text = row.textContent.toLowerCase();
        row.style.display = text.includes(searchTerm) ? '' : 'none';
      });
    }

    function filterVerifPegawai() {
      const filter = document.getElementById('filterVerifPegawai').value;
      const rows = document.querySelectorAll('#verifPegawaiTable tr');
      
      rows.forEach(row => {
        if (filter === 'all') {
          row.style.display = '';
        } else {
          const text = row.textContent;
          row.style.display = text.includes(filter) ? '' : 'none';
        }
      });
    }

    function searchRekap() {
      const searchTerm = document.getElementById('searchRekap').value.toLowerCase();
      const rows = document.querySelectorAll('#rekapTable tr');
      
      rows.forEach(row => {
        const text = row.textContent.toLowerCase();
        row.style.display = text.includes(searchTerm) ? '' : 'none';
      });
    }

    function populateUnitFilter() {
      const units = [...new Set(kgbData.map(item => item.unitKerja))];
      const select = document.getElementById('filterUnitRekap');
      
      if (select) {
        select.innerHTML = '<option value="all">Semua Unit</option>' + 
          units.map(unit => `<option value="${unit}">${unit}</option>`).join('');
      }
    }

    function filterRekapByUnit() {
      const filter = document.getElementById('filterUnitRekap').value;
      const rows = document.querySelectorAll('#rekapTable tr');
      
      rows.forEach(row => {
        if (filter === 'all') {
          row.style.display = '';
        } else {
          const text = row.textContent;
          row.style.display = text.includes(filter) ? '' : 'none';
        }
      });
    }

    function searchProsesKgb() {
      const searchTerm = document.getElementById('searchProsesKgb').value.toLowerCase();
      const rows = document.querySelectorAll('#prosesKgbTable tr');
      
      rows.forEach(row => {
        const text = row.textContent.toLowerCase();
        row.style.display = text.includes(searchTerm) ? '' : 'none';
      });
    }

    function searchDbKepegawaian() {
      const searchTerm = document.getElementById('searchDbKepegawaian').value.toLowerCase();
      const rows = document.querySelectorAll('#dbKepegawaianTable tr');
      
      rows.forEach(row => {
        const text = row.textContent.toLowerCase();
        row.style.display = text.includes(searchTerm) ? '' : 'none';
      });
    }

    function filterDbKepegawaian() {
      const filter = document.getElementById('filterDbKepegawaian').value;
      const rows = document.querySelectorAll('#dbKepegawaianTable tr');
      
      rows.forEach(row => {
        if (filter === 'all') {
          row.style.display = '';
        } else {
          const text = row.textContent;
          row.style.display = text.includes(filter) ? '' : 'none';
        }
      });
    }

    function searchDbSekolah() {
      const searchTerm = document.getElementById('searchDbSekolah').value.toLowerCase();
      const rows = document.querySelectorAll('#dbSekolahTable tr');
      
      rows.forEach(row => {
        const text = row.textContent.toLowerCase();
        row.style.display = text.includes(searchTerm) ? '' : 'none';
      });
    }

    function filterDbSekolah() {
      const filter = document.getElementById('filterDbSekolah').value;
      const rows = document.querySelectorAll('#dbSekolahTable tr');
      
      rows.forEach(row => {
        if (filter === 'all') {
          row.style.display = '';
        } else {
          const text = row.textContent;
          row.style.display = text.includes(filter) ? '' : 'none';
        }
      });
    }

    function searchDbGaji() {
      const searchTerm = document.getElementById('searchDbGaji').value.toLowerCase();
      const rows = document.querySelectorAll('#dbGajiTable tr');
      
      rows.forEach(row => {
        const text = row.textContent.toLowerCase();
        row.style.display = text.includes(searchTerm) ? '' : 'none';
      });
    }

    // Export Functions
    function exportToExcel() {
      showToast('Export ke Excel akan segera tersedia');
    }

    function exportToPdf() {
      showToast('Export ke PDF akan segera tersedia');
    }

    function exportLaporan() {
      showToast('Export laporan lengkap akan segera tersedia');
    }

    function downloadSkKgb(id) {
      showToast('Download SK KGB akan segera tersedia');
    }

    // Document Modal Functions
    function viewDoc(type, id) {
      document.getElementById('docModal').classList.remove('hidden');
      document.getElementById('docModalTitle').textContent = `Lihat ${type}`;
      document.getElementById('docModalContent').innerHTML = `
        <div class="text-center py-12">
          <div class="w-24 h-24 mx-auto mb-4 bg-blue-100 rounded-full flex items-center justify-center">
            <svg class="w-12 h-12 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
            </svg>
          </div>
          <h4 class="text-lg font-semibold text-slate-800 mb-2">Dokumen ${type}</h4>
          <p class="text-sm text-slate-500 mb-4">Preview dokumen untuk ID: ${id}</p>
          <p class="text-xs text-slate-400">Fitur preview dokumen akan segera tersedia</p>
        </div>
      `;
    }

    function closeDocModal() {
      document.getElementById('docModal').classList.add('hidden');
    }

    // Settings Functions
    function handleLogoUpload(input) {
      if (currentUserRole !== 'Admin') {
        showToast('Hanya Admin yang dapat mengubah pengaturan');
        input.value = '';
        return;
      }
      
      if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
          document.getElementById('logoPreview').innerHTML = `<img src="${e.target.result}" class="w-full h-full object-contain">`;
          appSettings.logoUrl = e.target.result;
        };
        reader.readAsDataURL(input.files[0]);
      }
    }

    function resetLogo() {
      if (currentUserRole !== 'Admin') {
        showToast('Hanya Admin yang dapat mengubah pengaturan');
        return;
      }
      
      document.getElementById('logoPreview').innerHTML = `
        <svg class="w-16 h-16 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
        </svg>
      `;
      appSettings.logoUrl = '';
      document.getElementById('logoUpload').value = '';
    }

    function updatePrimaryColor(color) {
      if (currentUserRole !== 'Admin') {
        showToast('Hanya Admin yang dapat mengubah pengaturan');
        return;
      }
      
      document.getElementById('primaryColorPicker').value = color;
      document.getElementById('primaryColorText').value = color;
      document.getElementById('colorPreview1').style.background = color;
      document.getElementById('colorPreview2').style.background = `linear-gradient(135deg, ${color} 0%, ${appSettings.secondaryColor} 100%)`;
      appSettings.primaryColor = color;
    }

    function updateSecondaryColor(color) {
      if (currentUserRole !== 'Admin') {
        showToast('Hanya Admin yang dapat mengubah pengaturan');
        return;
      }
      
      document.getElementById('secondaryColorPicker').value = color;
      document.getElementById('secondaryColorText').value = color;
      document.getElementById('colorPreview2').style.background = `linear-gradient(135deg, ${appSettings.primaryColor} 0%, ${color} 100%)`;
      appSettings.secondaryColor = color;
    }

    function saveSettings() {
      if (currentUserRole !== 'Admin') {
        showToast('Hanya Admin yang dapat menyimpan pengaturan');
        return;
      }
      
      appSettings.orgName = document.getElementById('orgNameInput').value;
      document.getElementById('orgName').textContent = appSettings.orgName;
      
      document.getElementById('sidebar').style.background = `linear-gradient(180deg, ${appSettings.primaryColor} 0%, ${appSettings.secondaryColor} 100%)`;
      document.getElementById('loginPage').style.background = `linear-gradient(135deg, ${appSettings.primaryColor} 0%, ${appSettings.secondaryColor} 100%)`;
      
      if (appSettings.logoUrl) {
        document.getElementById('sidebarLogo').innerHTML = `<img src="${appSettings.logoUrl}" class="w-full h-full object-contain">`;
        document.getElementById('loginLogo').innerHTML = `<img src="${appSettings.logoUrl}" class="w-full h-full object-contain rounded-2xl">`;
      }
      
      showToast('Pengaturan berhasil disimpan!');
    }

    function resetSettings() {
      if (currentUserRole !== 'Admin') {
        showToast('Hanya Admin yang dapat mereset pengaturan');
        return;
      }
      
      appSettings = {
        primaryColor: '#1e3a5f',
        secondaryColor: '#0f172a',
        logoUrl: '',
        orgName: 'Sistem Kepegawaian'
      };
      
      document.getElementById('primaryColorPicker').value = '#1e3a5f';
      document.getElementById('primaryColorText').value = '#1e3a5f';
      document.getElementById('secondaryColorPicker').value = '#0f172a';
      document.getElementById('secondaryColorText').value = '#0f172a';
      document.getElementById('orgNameInput').value = 'Sistem Kepegawaian';
      
      updatePrimaryColor('#1e3a5f');
      updateSecondaryColor('#0f172a');
      resetLogo();
      
      showToast('Pengaturan dikembalikan ke default');
    }

    // Toast Notification
    function showToast(message) {
      const toast = document.getElementById('toast');
      const toastMessage = document.getElementById('toastMessage');
      toastMessage.textContent = message;
      
      toast.style.transform = 'translateY(0)';
      toast.style.opacity = '1';
      
      setTimeout(() => {
        toast.style.transform = 'translateY(5rem)';
        toast.style.opacity = '0';
      }, 3000);
    }
</script>
 <script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'9bda0433457afe1a',t:'MTc2ODM2MTAyNC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>
