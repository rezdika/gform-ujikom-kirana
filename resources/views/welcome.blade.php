<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KVlov Experience & Feedback</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        *{margin:0;padding:0;box-sizing:border-box;}
        :root{
            --gold:#b18f6a;
            --gold-light:#f5deb3;
            --cream:#f5f5dc;
            --dark:#2c1f14;
            --dark2:#3a2a1a;
            --dark3:#4a3520;
            --muted:#a8d7f5;
            --accent:#6f4e37;
            --serif:'Cormorant Garamond',serif;
            --sans:'Montserrat',sans-serif;
        }
        html{scroll-behavior:smooth;}
        body{font-family:var(--sans);background:var(--cream);color:var(--accent);overflow-x:hidden;}

        /* ── HERO ── */
        #hero{
            min-height:100vh;
            display:grid;
            grid-template-rows:1fr auto;
            padding:0;
            position:relative;
            background:var(--dark);
            overflow:hidden;
        }
        .hero-bg-line{
            position:absolute;top:0;left:50%;
            width:1px;height:100%;
            background:linear-gradient(to bottom,transparent,rgba(177,143,106,0.3),transparent);
        }
        .hero-bg-line2{
            position:absolute;top:0;left:25%;
            width:1px;height:100%;
            background:linear-gradient(to bottom,transparent,rgba(177,143,106,0.08),transparent);
        }
        .hero-bg-line3{
            position:absolute;top:0;left:75%;
            width:1px;height:100%;
            background:linear-gradient(to bottom,transparent,rgba(177,143,106,0.08),transparent);
        }
        .hero-inner{
            display:flex;flex-direction:column;
            align-items:center;justify-content:center;
            text-align:center;padding:6rem 2rem 4rem;
            position:relative;z-index:1;
        }
        .hero-eyebrow{
            font-family:var(--sans);font-size:0.65rem;font-weight:500;
            letter-spacing:5px;text-transform:uppercase;color:var(--gold);
            margin-bottom:2.5rem;display:flex;align-items:center;gap:1rem;
        }
        .hero-eyebrow::before,.hero-eyebrow::after{
            content:'';display:block;width:40px;height:1px;background:var(--gold);
        }
        .hero-title{
            font-family:var(--serif);font-size:clamp(4rem,10vw,9rem);
            font-weight:300;line-height:0.95;letter-spacing:-2px;
            margin-bottom:1rem;color:var(--cream);
        }
        .hero-title em{font-style:italic;color:var(--gold);}
        .hero-title-sub{
            font-family:var(--serif);font-size:clamp(1.5rem,4vw,3rem);
            font-weight:300;font-style:italic;
            color:rgba(245,245,220,0.5);margin-bottom:3rem;letter-spacing:1px;
        }
        .hero-desc{
            font-size:0.78rem;font-weight:300;letter-spacing:2px;
            color:var(--muted);text-transform:uppercase;
            max-width:400px;line-height:2;margin-bottom:4rem;
        }
        .hero-scroll{
            display:inline-flex;flex-direction:column;align-items:center;gap:0.8rem;
            color:var(--gold);text-decoration:none;font-size:0.65rem;
            letter-spacing:3px;text-transform:uppercase;font-family:var(--sans);transition:opacity 0.3s;
        }
        .hero-scroll:hover{opacity:0.7;}
        .scroll-line{
            width:1px;height:60px;
            background:linear-gradient(to bottom,var(--gold),transparent);
            animation:scrollline 2s ease-in-out infinite;
        }
        @keyframes scrollline{
            0%{transform:scaleY(0);transform-origin:top;}
            50%{transform:scaleY(1);transform-origin:top;}
            51%{transform:scaleY(1);transform-origin:bottom;}
            100%{transform:scaleY(0);transform-origin:bottom;}
        }
        .hero-bottom-bar{
            display:flex;justify-content:space-between;align-items:center;
            padding:1.5rem 3rem;border-top:1px solid rgba(177,143,106,0.2);
            position:relative;z-index:1;
        }
        .hero-bottom-bar span{font-size:0.65rem;letter-spacing:3px;text-transform:uppercase;color:var(--muted);}

        /* ── CREATOR ── */
        #creator{padding:8rem 2rem;background:var(--dark2);position:relative;}
        #creator::before{
            content:'02';position:absolute;top:4rem;right:3rem;
            font-family:var(--serif);font-size:8rem;font-weight:700;
            color:rgba(177,143,106,0.06);line-height:1;pointer-events:none;
        }
        .section-header{
            display:flex;align-items:center;gap:1.5rem;margin-bottom:5rem;
            max-width:1100px;margin-left:auto;margin-right:auto;
        }
        .section-num{font-family:var(--serif);font-size:0.75rem;color:var(--gold);letter-spacing:2px;}
        .section-line{width:60px;height:1px;background:var(--gold);}
        .section-label-text{font-size:0.65rem;letter-spacing:4px;text-transform:uppercase;color:var(--muted);}
        .section-big-title{
            font-family:var(--serif);font-size:clamp(2.5rem,5vw,5rem);
            font-weight:300;line-height:1.1;color:var(--cream);
            max-width:1100px;margin:0 auto 5rem;
        }
        .section-big-title em{font-style:italic;color:var(--gold);}
        .creator-layout{
            max-width:1100px;margin:0 auto;
            display:grid;grid-template-columns:1fr 1.2fr;gap:4rem;align-items:start;
        }
        .profile-img-wrap{
            width:100%;aspect-ratio:3/4;background:var(--dark3);
            border:1px solid rgba(177,143,106,0.2);
            display:flex;align-items:center;justify-content:center;
            font-size:5rem;margin-bottom:2rem;position:relative;overflow:hidden;
        }
        .profile-img-wrap::after{
            content:'';position:absolute;bottom:0;left:0;right:0;height:40%;
            background:linear-gradient(to top,rgba(44,31,20,0.85),transparent);
        }
        .profile-img-label{position:absolute;bottom:1.5rem;left:1.5rem;z-index:1;}
        .profile-img-label h3{
            font-family:var(--serif);font-size:1.4rem;font-weight:400;
            color:var(--cream);line-height:1.2;
        }
        .profile-img-label span{font-size:0.65rem;letter-spacing:3px;text-transform:uppercase;color:var(--gold);}
        .profile-right{padding-top:2rem;}
        .profile-quote{
            font-family:var(--serif);font-size:1.8rem;font-weight:300;font-style:italic;
            line-height:1.5;color:var(--cream);border-left:2px solid var(--gold);
            padding-left:2rem;margin-bottom:3rem;
        }
        .profile-bio{
            font-size:0.82rem;font-weight:300;line-height:2;
            color:var(--muted);margin-bottom:3rem;letter-spacing:0.5px;
        }
        .showcase-box{
            background:var(--dark3);border:1px solid rgba(177,143,106,0.15);
            padding:2rem;margin-bottom:2.5rem;
            overflow:visible;
        }
        .showcase-label{font-size:0.6rem;letter-spacing:4px;text-transform:uppercase;color:var(--gold);margin-bottom:1.5rem;}
        .anim-stage{
            width:100%;aspect-ratio:16/9;background:var(--dark);
            display:flex;align-items:center;justify-content:center;
            position:relative;overflow:visible;border:1px solid rgba(177,143,106,0.1);
        }
        .anim-ring{
            width:70px;height:70px;border-radius:50%;border:1px solid transparent;
            border-top-color:var(--gold);border-right-color:rgba(177,143,106,0.3);
            animation:spin 3s linear infinite;position:absolute;
        }
        .anim-ring:nth-child(2){
            width:45px;height:45px;border-top-color:var(--gold-light);
            animation:spin 2s linear infinite reverse;
        }
        .anim-center-dot{
            width:6px;height:6px;background:var(--gold);border-radius:50%;
            position:absolute;animation:pulse 2s ease-in-out infinite;
        }
        .char-stage{
            position:absolute;
            top:-115px;
            right:-40px;
            height:70%;
            pointer-events:none;
            z-index:2;
            opacity:0.95;
        }
        @media(min-width:769px){
            .char-stage{
                height:25%;
                top:-130px;
                right:-20px;
            }
        }
        .anim-text-overlay{
            position:absolute;bottom:1rem;font-size:0.55rem;
            letter-spacing:4px;text-transform:uppercase;color:rgba(177,143,106,0.4);
        }
        @keyframes spin{to{transform:rotate(360deg);}}
        @keyframes pulse{0%,100%{opacity:1;transform:scale(1);}50%{opacity:0.4;transform:scale(1.5);}}
        .socials-row{display:flex;gap:1.5rem;align-items:center;}
        .socials-row a{
            font-size:0.65rem;letter-spacing:2px;text-transform:uppercase;
            color:var(--muted);text-decoration:none;display:flex;align-items:center;
            gap:0.5rem;transition:color 0.3s;border-bottom:1px solid transparent;padding-bottom:2px;
        }
        .socials-row a:hover{color:var(--gold);border-bottom-color:var(--gold);}

        /* ── FORM ── */
        #form{padding:8rem 2rem;background:var(--cream);position:relative;}
        #form::before{
            content:'03';position:absolute;top:4rem;right:3rem;
            font-family:var(--serif);font-size:8rem;font-weight:700;
            color:rgba(177,143,106,0.08);line-height:1;pointer-events:none;
        }
        .form-layout{
            max-width:1100px;margin:0 auto;
            display:grid;grid-template-columns:1fr 1.5fr;gap:6rem;align-items:start;
        }
        .form-left-title{
            font-family:var(--serif);font-size:clamp(2rem,4vw,3.5rem);
            font-weight:300;line-height:1.2;color:var(--accent);margin-bottom:2rem;
        }
        .form-left-title em{font-style:italic;color:var(--gold);}
        .form-left-desc{
            font-size:0.78rem;font-weight:300;line-height:2;
            color:var(--accent);letter-spacing:0.5px;margin-bottom:3rem;opacity:0.7;
        }
        .form-divider{width:40px;height:1px;background:var(--gold);margin-bottom:2rem;}
        .form-note{font-size:0.65rem;letter-spacing:2px;text-transform:uppercase;color:var(--gold);}
        .field-group{margin-bottom:2rem;}
        .field-group label{
            display:block;font-size:0.6rem;letter-spacing:3px;text-transform:uppercase;
            color:var(--gold);margin-bottom:0.8rem;font-family:var(--sans);
        }
        .field-group input,.field-group textarea{
            width:100%;background:transparent;border:none;
            border-bottom:1px solid rgba(177,143,106,0.35);
            padding:0.8rem 0;color:var(--accent);
            font-family:var(--serif);font-size:1rem;font-weight:300;
            outline:none;transition:border-color 0.3s;resize:none;
        }
        .field-group input:focus,.field-group textarea:focus{border-bottom-color:var(--gold);}
        .field-group input::placeholder,.field-group textarea::placeholder{
            color:rgba(111,78,55,0.35);font-style:italic;
        }
        .error-msg{font-size:0.65rem;color:#c0392b;letter-spacing:1px;margin-top:0.4rem;}
        .submit-btn{
            display:inline-flex;align-items:center;gap:1rem;
            background:transparent;border:1px solid var(--gold);color:var(--gold);
            font-family:var(--sans);font-size:0.65rem;letter-spacing:4px;
            text-transform:uppercase;padding:1.2rem 3rem;cursor:pointer;
            transition:all 0.4s;margin-top:1rem;
        }
        .submit-btn:hover{background:var(--gold);color:var(--cream);}
        .submit-btn i{font-size:0.7rem;}
        .alert-success{
            background:transparent;border:1px solid rgba(177,143,106,0.4);
            color:var(--accent);padding:1rem 1.5rem;font-size:0.75rem;
            letter-spacing:1px;margin-bottom:2rem;display:flex;align-items:center;gap:0.8rem;
        }

        /* ── FOOTER ── */
        footer{
            background:var(--dark) url('/assets/image/character/merch-display-1.png') 70% center/85% auto no-repeat;
            border-top:1px solid rgba(177,143,106,0.2);
            padding:5rem 2rem 3rem;text-align:center;position:relative;overflow:hidden;
        }
        footer::before{
            content:'';position:absolute;inset:0;
            background:rgba(20,10,5,0.72);z-index:0;pointer-events:none;
        }
        .footer-inner{position:relative;z-index:1;}
        .footer-ornament{font-family:var(--serif);font-size:2rem;color:var(--gold);margin-bottom:2rem;letter-spacing:8px;}
        .footer-title{
            font-family:var(--serif);font-size:clamp(1.5rem,3vw,2.5rem);
            font-weight:300;font-style:italic;color:var(--cream);margin-bottom:1rem;
        }
        .footer-sub{font-size:0.7rem;letter-spacing:2px;text-transform:uppercase;color:var(--muted);margin-bottom:3rem;}
        .footer-divider{width:60px;height:1px;background:rgba(177,143,106,0.3);margin:0 auto 2rem;}
        .footer-credit{font-size:0.62rem;letter-spacing:2px;text-transform:uppercase;color:rgba(177,143,106,0.5);}
        .footer-credit span{color:var(--gold-light);}

        /* ── CHARACTERS ── */
        .char{
            position:absolute;
            pointer-events:none;
            z-index:0;
            left:50%;
            transform:translateX(-50%);
            bottom:0;
        }
        .char-hero{
            height:75vh;
            opacity:0.12;
        }
        .char-creator{
            height:380px;
            opacity:0.08;
        }
        .char-form{
            height:350px;
            opacity:0.08;
        }
        @media(max-width:768px){
            .char-hero{height:50vh;opacity:0.12;}
            .char-creator{height:280px;opacity:0.08;}
            .char-form{height:260px;opacity:0.08;}
        }
            .creator-layout,.form-layout{grid-template-columns:1fr;}
            .hero-bottom-bar{padding:1.5rem;}
            #creator::before,#form::before{display:none;}
        }
    </style>
</head>
<body>

<!-- HERO -->
<section id="hero">
    <div class="hero-bg-line"></div>
    <div class="hero-bg-line2"></div>
    <div class="hero-bg-line3"></div>
    <img src="/assets/image/character/merch-display-2.png" class="char char-hero" alt="Kirana">
    <div class="hero-inner">
        <div class="hero-eyebrow">KVlov — Ujikom 2026</div>
        <h1 class="hero-title"><em>Experience</em><br>&amp; Feedback</h1>
        <p class="hero-title-sub">Kesan &amp; Pesan</p>
        <p class="hero-desc">Bagikan pengalaman kamu bersama Kirana vilova alwaysha putri aji. Setiap kata adalah apresiasi yang berarti.</p>
        <a href="#creator" class="hero-scroll">
            <div class="scroll-line"></div>
            <span>Scroll</span>
        </a>
    </div>
    <div class="hero-bottom-bar">
        <span>Est. 2026</span>
        <span>KVlov — Kirana Vilova</span>
        <span>Ujikom</span>
    </div>
</section>

<!-- MEET THE CREATOR -->
<section id="creator">
    <div class="section-header">
        <span class="section-num">01</span>
        <div class="section-line"></div>
        <span class="section-label-text">Meet The Creator</span>
    </div>
    <div class="section-big-title">
        Behind the<br><em>Masterpiece</em>
    </div>
    <div class="creator-layout">
        <div class="profile-left">
            <div class="profile-img-wrap">
                <img src="/assets/image/kirana.jpg" alt="Kirana Vilova" style="width:100%;height:100%;object-fit:cover;position:absolute;top:0;left:0;">
                <div class="profile-img-label">
                    <h3>Kirana Vilova<br>Alwaysha Putri Aji</h3>
                    <span>Animator</span>
                </div>
            </div>
        </div>
        <div class="profile-right">
            <blockquote class="profile-quote">
                "Ini cara aku Bercerita lewat karya ku"
                    </blockquote>
            <p class="profile-bio">
                Hii!! aku Kirana Vilova, author dari animation project ujikom aku, yaitu iklan dari produk UMKM MW Coffee dengan judul Dan... Bandung : MW Coffee. animasi ini di buat selama 4 bulan dengan effort dari diri saya sendiri mulai dari pra produksi, produksi, dan hasil akhirnya.
                 </p>
            <div class="showcase-box">
                <p class="showcase-label">Animation Showcase</p>
                <div class="anim-stage">
                    <div class="anim-ring"></div>
                    <div class="anim-ring"></div>
                    <div class="anim-center-dot"></div>
                    <p class="anim-text-overlay">KVlov Animation Studio</p>
                    <img src="/assets/image/character/akbar merch.png" class="char-stage" alt="Akbar">
                </div>
            </div>
            <div class="socials-row">
                <a href="https://www.instagram.com/kirvlova._/"><i class="fab fa-instagram"></i> Instagram</a>
                <a href="https://www.tiktok.com/@kvaxsyll_"><i class="fab fa-tiktok"></i> TikTok</a>
            </div>
        </div>
    </div>
</section>

<!-- FORM -->
<section id="form">
    <img src="/assets/image/character/kirana merch.png" class="char char-form" alt="Devan">
    <div class="section-header">
        <span class="section-num">02</span>
        <div class="section-line"></div>
        <span class="section-label-text">Form Kesan &amp; Pesan</span>
    </div>
    <div class="form-layout">
        <div class="form-left">
            <h2 class="form-left-title">Pesan untuk<br><em>Animation project</em><br>Dan... Bandung : MW Coffee</h2>
            <div class="form-divider"></div>
            <p class="form-left-desc">
                Kirimkan pesan untuk karya maupun author dengan melengkapi data di bawah ini. Saya akan selalu menghargai setiap kata dan kalimat yang keluar dari lubuk hati kalian! HATUR NUHUN PISAN EUY!!
                  </p>
            <p class="form-note">* Wajib diisi</p>
        </div>
        <div class="form-right">
            @if(session('success'))
            <div class="alert-success">
                <i class="fas fa-check"></i> {{ session('success') }}
            </div>
            @endif
            <form action="{{ route('pesan.store') }}" method="POST">
                @csrf
                <div class="field-group">
                    <label>Nama Lengkap *</label>
                    <input type="text" name="nama_lengkap" placeholder="Nama kamu..." value="{{ old('nama_lengkap') }}" required>
                    @error('nama_lengkap')<p class="error-msg">{{ $message }}</p>@enderror
                </div>
                <div class="field-group">
                    <label>Kelas &amp; Jurusan *</label>
                    <input type="text" name="kelas_jurusan" placeholder="Contoh: XII RPL 1" value="{{ old('kelas_jurusan') }}" required>
                    @error('kelas_jurusan')<p class="error-msg">{{ $message }}</p>@enderror
                </div>
                <div class="field-group">
                    <label>Kesan &amp; Pesan Stand KVlov *</label>
                    <textarea name="kesan_pesan" rows="4" placeholder="Ceritakan kesan kamu...">{{ old('kesan_pesan') }}</textarea>
                    @error('kesan_pesan')<p class="error-msg">{{ $message }}</p>@enderror
                </div>
                <div class="field-group">
                    <label>Saran</label>
                    <textarea name="saran" rows="3" placeholder="Ada saran untuk kami? (opsional)">{{ old('saran') }}</textarea>
                </div>
                <div class="field-group">
                    <label>Kata-kata untuk Teh Vilova</label>
                    <textarea name="kata_untuk_vilova" rows="3" placeholder="Mau bilang apa ke Teh Vilova? (opsional)">{{ old('kata_untuk_vilova') }}</textarea>
                </div>
                <button type="submit" class="submit-btn">
                    <i class="fas fa-paper-plane"></i> Kirim Pesan
                </button>
            </form>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer>
    <div class="footer-inner">
       
        <h3 class="footer-title">HaNuPis! hatur nuhun pisan sadayana!</h3>
        <p class="footer-sub">Enjoy your life and our work thank you again for coming</p>
        <div class="footer-divider"></div>
        <p class="footer-credit">
            © {{ date('Y') }} &nbsp;·&nbsp; Designed &amp; Animated by <span>Kirana Vilova Alwaysha Putri Aji</span>
        </p>
    </div>
</footer>

@if(session('success'))
<script>document.addEventListener('DOMContentLoaded',()=>document.getElementById('form').scrollIntoView({behavior:'smooth'}));</script>
@endif
</body>
</html>
