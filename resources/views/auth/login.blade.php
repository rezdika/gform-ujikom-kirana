<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin — KVlov</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;1,300;1,400&family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        *{margin:0;padding:0;box-sizing:border-box;}
        body{
            font-family:'Montserrat',sans-serif;
            background:#0a0a0a;
            color:#f5f0e8;
            min-height:100vh;
            display:flex;
            align-items:center;
            justify-content:center;
            padding:1rem;
        }
        .wrap{
            width:100%;max-width:420px;
            text-align:center;
        }
        .logo{
            font-family:'Cormorant Garamond',serif;
            font-size:3rem;
            font-weight:300;
            font-style:italic;
            color:#c9a84c;
            margin-bottom:0.3rem;
        }
        .eyebrow{
            font-size:0.6rem;
            letter-spacing:4px;
            text-transform:uppercase;
            color:#6b6b6b;
            margin-bottom:3rem;
        }
        .card{
            background:#111111;
            border:1px solid rgba(201,168,76,0.15);
            padding:3rem 2.5rem;
            text-align:left;
        }
        .card-title{
            font-family:'Cormorant Garamond',serif;
            font-size:1.6rem;
            font-weight:300;
            color:#f5f0e8;
            margin-bottom:0.3rem;
        }
        .card-sub{
            font-size:0.65rem;
            letter-spacing:2px;
            text-transform:uppercase;
            color:#6b6b6b;
            margin-bottom:2.5rem;
        }
        .error-box{
            border:1px solid rgba(192,57,43,0.3);
            color:#e74c3c;
            padding:0.8rem 1rem;
            font-size:0.72rem;
            letter-spacing:1px;
            margin-bottom:1.5rem;
        }
        .field{margin-bottom:1.8rem;}
        label{
            display:block;
            font-size:0.58rem;
            letter-spacing:3px;
            text-transform:uppercase;
            color:#c9a84c;
            margin-bottom:0.7rem;
        }
        input{
            width:100%;
            background:transparent;
            border:none;
            border-bottom:1px solid rgba(201,168,76,0.2);
            padding:0.7rem 0;
            color:#f5f0e8;
            font-family:'Montserrat',sans-serif;
            font-size:0.9rem;
            font-weight:300;
            outline:none;
            transition:border-color 0.3s;
        }
        input:focus{border-bottom-color:#c9a84c;}
        input::placeholder{color:rgba(107,107,107,0.5);font-style:italic;}
        button{
            width:100%;
            background:transparent;
            border:1px solid #c9a84c;
            color:#c9a84c;
            font-family:'Montserrat',sans-serif;
            font-size:0.62rem;
            letter-spacing:4px;
            text-transform:uppercase;
            padding:1rem;
            cursor:pointer;
            transition:all 0.3s;
            margin-top:0.5rem;
        }
        button:hover{background:#c9a84c;color:#0a0a0a;}
        .back{
            display:block;
            text-align:center;
            margin-top:1.5rem;
            font-size:0.62rem;
            letter-spacing:2px;
            text-transform:uppercase;
            color:#6b6b6b;
            text-decoration:none;
            transition:color 0.3s;
        }
        .back:hover{color:#c9a84c;}
    </style>
</head>
<body>
    <div class="wrap">
        <div class="logo">KVlov</div>
        <p class="eyebrow">Admin Access</p>
        <div class="card">
            <h1 class="card-title">Selamat Datang</h1>
            <p class="card-sub">Masuk ke panel admin</p>
            @if($errors->any())
            <div class="error-box"><i class="fas fa-exclamation-circle"></i> {{ $errors->first() }}</div>
            @endif
            <form method="POST" action="/login">
                @csrf
                <div class="field">
                    <label>Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="admin@kvlov.com" required autofocus>
                </div>
                <div class="field">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="••••••••" required>
                </div>
                <button type="submit"><i class="fas fa-arrow-right"></i> &nbsp; Masuk</button>
            </form>
        </div>
        <a href="/" class="back">← Kembali ke halaman utama</a>
    </div>
</body>
</html>
