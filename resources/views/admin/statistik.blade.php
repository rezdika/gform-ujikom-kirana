<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Statistik — KVlov Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;1,300;1,400&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        *{margin:0;padding:0;box-sizing:border-box;}
        :root{
            --gold:#c9a84c;--cream:#f5f0e8;--dark:#0a0a0a;
            --dark2:#111111;--dark3:#1a1a1a;--muted:#6b6b6b;
            --serif:'Cormorant Garamond',serif;--sans:'Montserrat',sans-serif;
        }
        body{font-family:var(--sans);background:var(--dark);color:var(--cream);min-height:100vh;}
        nav{
            background:var(--dark2);border-bottom:1px solid rgba(201,168,76,0.15);
            padding:1.5rem 3rem;display:flex;align-items:center;justify-content:space-between;
            position:sticky;top:0;z-index:100;
        }
        .nav-brand{font-family:var(--serif);font-size:1.5rem;font-weight:300;font-style:italic;color:var(--gold);}
        .nav-links{display:flex;align-items:center;gap:1.5rem;}
        .nav-links a{font-size:0.58rem;letter-spacing:3px;text-transform:uppercase;color:var(--muted);text-decoration:none;transition:color 0.3s;}
        .nav-links a:hover,.nav-links a.active{color:var(--gold);}
        .logout-btn{
            background:transparent;border:1px solid rgba(201,168,76,0.3);color:var(--gold);
            font-family:var(--sans);font-size:0.58rem;letter-spacing:3px;text-transform:uppercase;
            padding:0.6rem 1.2rem;cursor:pointer;transition:all 0.3s;
        }
        .logout-btn:hover{background:var(--gold);color:var(--dark);}
        .hamburger{display:none;background:transparent;border:none;color:var(--gold);font-size:1.2rem;cursor:pointer;padding:0.3rem;}
        .sidebar-overlay{display:none;position:fixed;inset:0;background:rgba(0,0,0,0.6);z-index:200;}
        .sidebar-overlay.open{display:block;}
        .sidebar{
            position:fixed;top:0;left:-280px;width:260px;height:100vh;
            background:var(--dark2);border-right:1px solid rgba(201,168,76,0.15);
            z-index:201;transition:left 0.3s ease;padding:2rem 1.5rem;
            display:flex;flex-direction:column;
        }
        .sidebar.open{left:0;}
        .sidebar-header{display:flex;align-items:center;justify-content:space-between;margin-bottom:2.5rem;}
        .sidebar-brand{font-family:var(--serif);font-size:1.4rem;font-weight:300;font-style:italic;color:var(--gold);}
        .sidebar-close{background:transparent;border:none;color:var(--muted);font-size:1.1rem;cursor:pointer;}
        .sidebar-close:hover{color:var(--gold);}
        .sidebar-nav{display:flex;flex-direction:column;gap:0.3rem;}
        .sidebar-nav a{
            display:flex;align-items:center;gap:1rem;
            font-size:0.65rem;letter-spacing:3px;text-transform:uppercase;
            color:var(--muted);text-decoration:none;padding:1rem 1.2rem;
            border:1px solid transparent;transition:all 0.3s;
        }
        .sidebar-nav a:hover,.sidebar-nav a.active{color:var(--gold);border-color:rgba(201,168,76,0.2);background:rgba(201,168,76,0.05);}
        .sidebar-nav a i{width:16px;text-align:center;font-size:0.75rem;}
        .sidebar-logout{
            background:transparent;border:1px solid rgba(201,168,76,0.3);color:var(--gold);
            font-family:var(--sans);font-size:0.6rem;letter-spacing:3px;text-transform:uppercase;
            padding:0.8rem;cursor:pointer;transition:all 0.3s;width:100%;margin-top:1rem;
        }
        .sidebar-logout:hover{background:var(--gold);color:var(--dark);}
        main{padding:4rem 3rem;max-width:1200px;margin:0 auto;}
        .page-eyebrow{
            font-size:0.6rem;letter-spacing:4px;text-transform:uppercase;
            color:var(--gold);margin-bottom:0.8rem;display:flex;align-items:center;gap:1rem;
        }
        .page-eyebrow::after{content:'';display:block;width:40px;height:1px;background:var(--gold);}
        .page-title{font-family:var(--serif);font-size:3rem;font-weight:300;color:var(--cream);margin-bottom:3rem;}
        .page-title em{font-style:italic;color:var(--gold);}

        .charts-grid{
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:1.5rem;
        }
        .chart-card{
            background:var(--dark2);
            border:1px solid rgba(201,168,76,0.15);
            padding:2rem;
        }
        .chart-card.full{grid-column:1/-1;}
        .chart-label{
            font-size:0.58rem;letter-spacing:3px;text-transform:uppercase;
            color:var(--gold);margin-bottom:0.5rem;
        }
        .chart-title{
            font-family:var(--serif);font-size:1.4rem;font-weight:300;
            color:var(--cream);margin-bottom:1.5rem;
        }
        .chart-wrap{position:relative;width:100%;}
        .chart-wrap.donut{max-width:260px;margin:0 auto;}

        @media(max-width:768px){
            nav{padding:1rem 1.5rem;flex-wrap:wrap;gap:1rem;}
            main{padding:2rem 1.5rem;}
            .charts-grid{grid-template-columns:1fr;}
            .chart-card.full{grid-column:1;}
            .hamburger{display:block;}
            .nav-links,.logout-btn{display:none;}
        }
    </style>
</head>
<body>
<div class="sidebar-overlay" id="overlay" onclick="closeSidebar()"></div>
<div class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <span class="sidebar-brand">KVlov</span>
        <button class="sidebar-close" onclick="closeSidebar()"><i class="fas fa-times"></i></button>
    </div>
    <nav class="sidebar-nav">
        <a href="{{ route('admin.dashboard') }}"><i class="fas fa-inbox"></i> Dashboard</a>
        <a href="{{ route('admin.statistik') }}" class="active"><i class="fas fa-chart-bar"></i> Statistik</a>
    </nav>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="sidebar-logout"><i class="fas fa-sign-out-alt"></i> &nbsp;Logout</button>
    </form>
</div>

    <nav>
        <span class="nav-brand">KVlov</span>
        <div class="nav-links">
            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            <a href="{{ route('admin.statistik') }}" class="active">Statistik</a>
        </div>
        <div style="display:flex;align-items:center;gap:1rem;">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="logout-btn">Logout</button>
            </form>
            <button class="hamburger" onclick="openSidebar()"><i class="fas fa-bars"></i></button>
        </div>
    </nav>

    <main>
        <div class="page-eyebrow">Admin Panel</div>
        <h1 class="page-title">Data <em>Statistik</em></h1>

        <div class="charts-grid">
            <!-- Bar: Pesan per hari -->
            <div class="chart-card full">
                <div class="chart-label">7 Hari Terakhir</div>
                <div class="chart-title">Pesan Masuk per Hari</div>
                <div class="chart-wrap">
                    <canvas id="chartHari"></canvas>
                </div>
            </div>

            <!-- Donut: Saran -->
            <div class="chart-card">
                <div class="chart-label">Partisipasi</div>
                <div class="chart-title">Saran vs Tidak</div>
                <div class="chart-wrap donut">
                    <canvas id="chartSaran"></canvas>
                </div>
            </div>

            <!-- Bar: Per kelas -->
            <div class="chart-card">
                <div class="chart-label">Top 5</div>
                <div class="chart-title">Pesan per Kelas</div>
                <div class="chart-wrap">
                    <canvas id="chartKelas"></canvas>
                </div>
            </div>
        </div>
    </main>

    <script>
        Chart.defaults.color = '#6b6b6b';
        Chart.defaults.font.family = "'Montserrat', sans-serif";
        Chart.defaults.font.size = 10;

        const gold = '#c9a84c';
        const goldFade = 'rgba(201,168,76,0.15)';
        const goldMid = 'rgba(201,168,76,0.6)';

        // Bar: pesan per hari
        new Chart(document.getElementById('chartHari'), {
            type: 'bar',
            data: {
                labels: @json($perHari->pluck('label')),
                datasets:[{
                    label:'Pesan',
                    data: @json($perHari->pluck('count')),
                    backgroundColor: goldFade,
                    borderColor: gold,
                    borderWidth:1,
                    borderRadius:2,
                }]
            },
            options:{
                responsive:true,
                plugins:{legend:{display:false}},
                scales:{
                    x:{grid:{color:'rgba(201,168,76,0.05)'}},
                    y:{grid:{color:'rgba(201,168,76,0.05)'},ticks:{stepSize:1},beginAtZero:true}
                }
            }
        });

        // Donut: saran
        new Chart(document.getElementById('chartSaran'), {
            type: 'doughnut',
            data:{
                labels:['Dengan Saran','Tanpa Saran'],
                datasets:[{
                    data:[ {{ $denganSaran }}, {{ $tanpaSaran }} ],
                    backgroundColor:[gold,'rgba(201,168,76,0.12)'],
                    borderColor:['#0a0a0a','#0a0a0a'],
                    borderWidth:2,
                }]
            },
            options:{
                responsive:true,
                plugins:{
                    legend:{position:'bottom',labels:{padding:16,color:'#6b6b6b'}},
                }
            }
        });

        // Bar: per kelas
        new Chart(document.getElementById('chartKelas'), {
            type: 'bar',
            data:{
                labels: @json($perKelas->keys()),
                datasets:[{
                    label:'Pesan',
                    data: @json($perKelas->values()),
                    backgroundColor: goldFade,
                    borderColor: gold,
                    borderWidth:1,
                    borderRadius:2,
                }]
            },
            options:{
                indexAxis:'y',
                responsive:true,
                plugins:{legend:{display:false}},
                scales:{
                    x:{grid:{color:'rgba(201,168,76,0.05)'},ticks:{stepSize:1},beginAtZero:true},
                    y:{grid:{color:'rgba(201,168,76,0.05)'}}
                }
            }
        });
    </script>
    <script>
        function openSidebar(){
            document.getElementById('sidebar').classList.add('open');
            document.getElementById('overlay').classList.add('open');
        }
        function closeSidebar(){
            document.getElementById('sidebar').classList.remove('open');
            document.getElementById('overlay').classList.remove('open');
        }
    </script>
</body>
</html>
