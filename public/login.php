<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Ticketing System</title>

  <style>
    :root{
      --blue-1:#0ea5e9;
      --blue-2:#2563eb;

      --text:#0f172a;
      --muted:#64748b;

      --radius:16px;

      /* Glass */
      --glass-bg: rgba(255,255,255,0.18);
      --glass-border: rgba(255,255,255,0.28);
    }

    *{ box-sizing:border-box; }

    body{
      margin:0;
      min-height:100vh;
      display:flex;
      justify-content:center;
      align-items:center;
      padding:24px;
      background: linear-gradient(135deg, var(--blue-1), var(--blue-2));
      font-family: Arial, sans-serif;
      color: var(--text);
    }

    /* Optional: soft glow blobs for nicer background */
    body::before,
    body::after{
      content:"";
      position:fixed;
      inset:auto;
      width:320px;
      height:320px;
      border-radius:50%;
      filter: blur(35px);
      opacity:0.35;
      z-index:0;
    }
    body::before{
      background:#ffffff;
      top:8%;
      left:10%;
    }
    body::after{
      background:#0ea5e9;
      bottom:10%;
      right:12%;
    }

    #login-card{
      position:relative;
      z-index:1;

      width:360px;
      padding:24px;
      border-radius:var(--radius);

      /* Glassmorphism */
      background: var(--glass-bg);
      border: 1px solid var(--glass-border);
      backdrop-filter: blur(14px);
      -webkit-backdrop-filter: blur(14px);

      box-shadow: 0 18px 50px rgba(0,0,0,0.22);
      transform: translateY(0);
      transition: transform 160ms ease, box-shadow 160ms ease;
    }

    #login-card:hover{
      transform: translateY(-2px);
      box-shadow: 0 22px 60px rgba(0,0,0,0.26);
    }

    #ticket-badge{
      position:absolute;
      left:-64px;
      top:50%;
      transform: translateY(-50%);

      width:56px;
      height:56px;

      display:flex;
      align-items:center;
      justify-content:center;

      border-radius:50%;
      background: linear-gradient(135deg, var(--blue-1), var(--blue-2));
      color:white;
      font-weight:700;
      letter-spacing:1px;
      font-size:12px;

      box-shadow: 0 10px 22px rgba(0,0,0,0.18);
      border: 1px solid rgba(255,255,255,0.25);
    }

    #logo{
      display:flex;
      align-items:center;
      justify-content:center;
      margin-bottom:10px;
    }

    #logo img{
      width:54px;
      height:54px;
      object-fit:contain;
      border-radius:50%;
      border: 2px solid rgba(255,255,255,0.35);
      background: rgba(255,255,255,0.15);
      padding:6px;
    }

    #card-title{
      text-align:center;
      margin-bottom:14px;
    }
    #card-title h1{
      margin:0;
      font-size:22px;
      font-weight:700;
      color: #ffffff; 
    }
    #card-title p{
      margin:6px 0 0 0;
      font-size:13px;
      color: var(--muted);
    }

    form{
      margin-top:10px;
    }

    label{
      display:block;
      font-size:13px;
      color: var(--muted);
      margin-top:12px;
      margin-bottom:6px;
    }

    input{
      width:100%;
      padding:10px 12px;
      border-radius:10px;
      border: 1px solid rgba(255,255,255,0.35);
      outline:none;
      font-size:14px;

      
      background: rgba(255,255,255,0.22);
      color: var(--text);
    }

    input::placeholder{
      color: rgba(15,23,42,0.55);
    }

    input:focus{
      border-color: rgba(37,99,235,0.85);
      box-shadow: 0 0 0 4px rgba(14,165,233,0.25);
    }

    button{
      width:100%;
      margin-top:16px;
      padding:10px 12px;
      border:none;
      border-radius:10px;
      background: linear-gradient(135deg, var(--blue-1), var(--blue-2));
      color:white;
      font-size:14px;
      cursor:pointer;
      transition: filter 140ms ease, transform 140ms ease;
    }

    button:hover{
      filter: brightness(1.06);
      transform: translateY(-1px);
    }

    button:active{
      transform: translateY(0);
    }

 
    @media (max-width: 480px){
      #login-card{ width:100%; max-width:360px; }
      #ticket-badge{ left:12px; top:-18px; transform:none; }
    }

    
  </style>
</head>

<body>

  <div id="login-card">
   

   
    <div id="logo">
      <img src="/opsdesk-practice/assets/Ticket.png" alt="OpsDesk Logo">
    </div>
   

    <div id="card-title">
      <h1>OpsDesk</h1>
      <p>Sign in to manage tickets</p>
    </div>

    <form method="POST" action="login_action.php" enctype="application/x-www-form-urlencoded">
      <label for="email">Email</label>
      <input id="email" name="email" type="email" placeholder="Enter your email" required>

      <label for="password">Password</label>
      <input id="password" name="password" type="password" placeholder="Enter your password" required>
      

      <button type="submit" name="login_btn">Login</button>
    </form>
  </div>
<script>





</script>
</body>
</html>
