<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Ticketing System</title>
    
    <style>:root{--blue-1:#0ea5e9;--blue-2:#2563eb;--bg:#f6f9ff;--card:#ffffff;--text:#0f172a;--muted:#64748b;--radius:14px;}body{margin:0;min-height:100vh;display:flex;justify-content:center;align-items:center;background:linear-gradient(135deg,var(--blue-1),var(--blue-2));font-family:Arial,sans-serif;color:var(--text);}#login-card{width: 360px;background: var(--card);padding:24px;border-radius: var(--radius);box-shadow: 0 10px 30px rgba(0,0,0,0.18);}#logo{display: flex;align-items: center;justify_content: center;margin-bottom: 14px;}#logo img{width: 54px;height: 54px;object-fit: contain;border: 2px;border-radius: 50%;}label{display: block;font-size:13px;color: var(--muted);margin-top: 12px;margin-bottom:6px;}input{width: 100%;padding: 10px 12px;border: 1px solid rgba(15,23,42,0.18);border-radius:10px;outline:none;font-size: 14px;}input:focus{border-color: rgba(37,99,235,0.8);box-shadow: 0 0 0 4px rgba(14,65,233,0.25);}button {width: 100%;margin-top: 16px;padding: 10px 12px;border: none;border-radius:10px;background:linear-gradient(135deg,var(--blue-1),var(--blue-2));color: white;font-size:14px;cursor: pointer;}button:hover{filter: brightness(1.05);}</style>
</head>
<body>
    <div id = "logo">
      <img src="/opsdesk-practice/assets/Ticket.png" alt="Opsdesk Logo" title="Our Logo"> 
    
      <div id="login-card"> 
        <div id="card-title">
        <h1> Opsdesk</h1>
        <p>Sign in to manage tickets</p>

        </div>
        

    <form method="POST" action="login_action.php" enctype="application/x-www-form-urlencoded">
        
    <label for="email">Email</label><input id ="email" name="email" type="email" placeholder="Enter your email" required>
    <label for="password">Password</label><input id="password" name="password" type="password" placeholder="password" required>
    <button type="submit" name="login_btn">Login</button>
</form>

    </div>
</div>
</body>
</html>