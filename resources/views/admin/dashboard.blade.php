<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard — KVlov Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;1,300;1,400&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        *{margin:0;padding:0;box-sizing:border-box;}
        :root{
            --gold:#c9a84c;
            --cream:#f5f0e8;
            --dark:#0a0a0a;
            --dark2:#111111;
            --dark3:#1a1a1a;
            --muted:#6b6b6b;
            --serif:'Cormorant Garamond',serif;
            --sans:'Montserrat',sans-serif;
        }
        body{font-family:var(--sans);background:var(--dark);color:var(--cream);min-height:100vh;}

        nav{
            background:var(--dark2);
            border-bottom:1px solid rgba(201,168,76,0.15);
            padding:1.5rem 3rem;
            display:flex;
            align-items:center;
            justify-content:space-between;
        }
        .nav-brand{
            font-family:var(--serif);
            font-size:1.5rem;
            font-weight:300;
            font-style:italic;
            color:var(--gold);
        }
        .nav-right{
            display:flex;
            align-items:center;
            gap:2rem;
        }
        .nav-user{
            font-size:0.62rem;
            letter-spacing:2px;
            text-transform:uppercase;
            color:var(--muted);
        }
        .logout-btn{
            background:transparent;
            border:1px solid rgba(201,168,76,0.3);
            color:var(--gold);
            font-family:var(--sans);
            font-size:0.58rem;
            letter-spacing:3px;
            text-transform:uppercase;
            padding:0.6rem 1.2rem;
            cursor:pointer;
            transition:all 0.3s;
        }
        .logout-btn:hover{background:var(--gold);color:var(--dark);}

        main{padding:4rem 3rem;max-width:1200px;margin:0 auto;}

        .page-header{margin-bottom:4rem;}
        .page-eyebrow{
            font-size:0.6rem;
            letter-spacing:4px;
            text-transform:uppercase;
            color:var(--gold);
            margin-bottom:0.8rem;
            display:flex;
            align-items:center;
            gap:1rem;
        }
        .page-eyebrow::after{content:'';display:block;width:40px;height:1px;background:var(--gold);}
        .page-title{
            font-family:var(--serif);
            font-size:3rem;
            font-weight:300;
            color:var(--cream);
        }
        .page-title em{font-style:italic;color:var(--gold);}

        .stat-cards{
            display:grid;
            grid-template-columns:repeat(3,1fr);
            gap:1.5rem;
            margin-bottom:3rem;
        }
        .stat-card{
            padding:2rem 2.5rem;
            border:1px solid rgba(201,168,76,0.15);
            background:var(--dark2);
        }
        .stat-card-num{
            font-family:var(--serif);
            font-size:3.5rem;
            font-weight:300;
            color:var(--gold);
            line-height:1;
            margin-bottom:0.8rem;
        }
        .stat-card-label{
            font-size:0.58rem;
            letter-spacing:3px;
            text-transform:uppercase;
            color:var(--muted);
        }
        .stat-card-icon{
            font-size:0.9rem;
            color:rgba(201,168,76,0.3);
            margin-bottom:1rem;
        }

        .delete-btn{
            background:transparent;
            border:1px solid rgba(201,168,76,0.2);
            color:rgba(201,168,76,0.5);
            font-family:var(--sans);
            font-size:0.55rem;
            letter-spacing:2px;
            text-transform:uppercase;
            padding:0.4rem 0.9rem;
            cursor:pointer;
            transition:all 0.3s;
        }
        .delete-btn:hover{border-color:#c0392b;color:#c0392b;background:rgba(192,57,43,0.08);}
        .alert-deleted{
            background:transparent;
            border:1px solid rgba(192,57,43,0.4);
            color:rgba(245,240,232,0.7);
            padding:0.8rem 1.5rem;
            font-size:0.7rem;
            letter-spacing:1px;
            margin-bottom:2rem;
            display:flex;align-items:center;gap:0.8rem;
        }
            text-align:center;
            padding:6rem 2rem;
            border:1px solid rgba(201,168,76,0.1);
        }
        .empty-state i{font-size:2rem;color:rgba(201,168,76,0.3);margin-bottom:1.5rem;display:block;}
        .empty-state p{
            font-size:0.7rem;
            letter-spacing:2px;
            text-transform:uppercase;
            color:var(--muted);
        }

        .entries{display:flex;flex-direction:column;gap:0;}

        .entry{
            border:1px solid rgba(201,168,76,0.1);
            border-bottom:none;
            padding:2rem 2.5rem;
            background:var(--dark2);
            transition:background 0.3s;
            display:grid;
            grid-template-columns:auto 1fr;
            gap:2rem;
            align-items:start;
        }
        .entry:last-child{border-bottom:1px solid rgba(201,168,76,0.1);}
        .entry:hover{background:var(--dark3);}

        .entry-num{
            font-family:var(--serif);
            font-size:2rem;
            font-weight:300;
            color:rgba(201,168,76,0.2);
            line-height:1;
            min-width:3rem;
            text-align:right;
        }
        .entry-content{}
        .entry-top{
            display:flex;
            align-items:baseline;
            justify-content:space-between;
            margin-bottom:1.5rem;
            flex-wrap:wrap;
            gap:0.5rem;
        }
        .entry-name{
            font-family:var(--serif);
            font-size:1.4rem;
            font-weight:400;
            color:var(--cream);
        }
        .entry-meta{
            display:flex;
            gap:1.5rem;
            align-items:center;
        }
        .entry-kelas{
            font-size:0.6rem;
            letter-spacing:2px;
            text-transform:uppercase;
            color:var(--gold);
            border:1px solid rgba(201,168,76,0.3);
            padding:0.3rem 0.8rem;
        }
        .entry-time{
            font-size:0.6rem;
            letter-spacing:1px;
            color:var(--muted);
        }
        .entry-fields{
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:1.5rem;
        }
        .entry-field{}
        .entry-field-label{
            font-size:0.55rem;
            letter-spacing:3px;
            text-transform:uppercase;
            color:var(--gold);
            margin-bottom:0.5rem;
            opacity:0.7;
        }
        .entry-field-val{
            font-family:var(--serif);
            font-size:0.95rem;
            font-weight:300;
            color:rgba(245,240,232,0.7);
            line-height:1.7;
        }
        .entry-field-val.empty{
            font-style:italic;
            color:rgba(107,107,107,0.5);
        }
        .entry-field.full{grid-column:1/-1;}

        @media(max-width:768px){
            nav{padding:1rem 1.5rem;}
            main{padding:2rem 1.5rem;}
            .entry{grid-template-columns:1fr;gap:1rem;}
            .entry-num{display:none;}
            .entry-fields{grid-template-columns:1fr;}
            .stat-cards{grid-template-columns:1fr;}
        }
    </style>
</head>
<body>
    <nav>
        <span class="nav-brand">KVlov</span>
        <div class="nav-right">
            <a href="{{ route('admin.statistik') }}" style="font-size:0.58rem;letter-spacing:3px;text-transform:uppercase;color:var(--muted);text-decoration:none;transition:color 0.3s;" onmouseover="this.style.color='#c9a84c'" onmouseout="this.style.color='#6b6b6b'">Statistik</a>
            <span class="nav-user">Admin Panel</span>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="logout-btn">Logout</button>
            </form>
        </div>
    </nav>

    <main>
        <div class="page-header">
            <div class="page-eyebrow">Dashboard</div>
            <h1 class="page-title">Semua <em>Pesan</em></h1>
        </div>

        <div class="stat-cards">
            <div class="stat-card">
                <div class="stat-card-icon"><i class="fas fa-inbox"></i></div>
                <div class="stat-card-num">{{ $total }}</div>
                <div class="stat-card-label">Total Pesan Masuk</div>
            </div>
            <div class="stat-card">
                <div class="stat-card-icon"><i class="fas fa-calendar-day"></i></div>
                <div class="stat-card-num">{{ $hari_ini }}</div>
                <div class="stat-card-label">Pesan Hari Ini</div>
            </div>
            <div class="stat-card">
                <div class="stat-card-icon"><i class="fas fa-lightbulb"></i></div>
                <div class="stat-card-num">{{ $dengan_saran }}</div>
                <div class="stat-card-label">Dengan Saran</div>
            </div>
        </div>

        @if(session('deleted'))
        <div class="alert-deleted"><i class="fas fa-trash"></i> {{ session('deleted') }}</div>
        @endif

        @if($pesan->isEmpty())
        <div class="empty-state">
            <i class="fas fa-inbox"></i>
            <p>Belum ada pesan yang masuk</p>
        </div>
        @else
        <div class="entries">
            @foreach($pesan as $i => $p)
            <div class="entry">
                <div class="entry-num">{{ str_pad($i+1, 2, '0', STR_PAD_LEFT) }}</div>
                <div class="entry-content">
                    <div class="entry-top">
                        <span class="entry-name">{{ $p->nama_lengkap }}</span>
                        <div class="entry-meta">
                            <span class="entry-kelas">{{ $p->kelas_jurusan }}</span>
                            <span class="entry-time">{{ $p->created_at->format('d M Y · H:i') }}</span>
                            <form method="POST" action="{{ route('admin.pesan.destroy', $p->id) }}" onsubmit="return confirm('Hapus pesan ini?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="delete-btn"><i class="fas fa-trash"></i> Hapus</button>
                            </form>
                        </div>
                    </div>
                    <div class="entry-fields">
                        <div class="entry-field full">
                            <div class="entry-field-label">Kesan &amp; Pesan Stand KVlov</div>
                            <div class="entry-field-val">{{ $p->kesan_pesan }}</div>
                        </div>
                        <div class="entry-field">
                            <div class="entry-field-label">Saran</div>
                            <div class="entry-field-val {{ $p->saran ? '' : 'empty' }}">{{ $p->saran ?? '— tidak diisi —' }}</div>
                        </div>
                        <div class="entry-field">
                            <div class="entry-field-label">Kata untuk Teh Vilova</div>
                            <div class="entry-field-val {{ $p->kata_untuk_vilova ? '' : 'empty' }}">{{ $p->kata_untuk_vilova ?? '— tidak diisi —' }}</div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </main>
</body>
</html>
