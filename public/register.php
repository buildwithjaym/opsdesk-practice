<?php
session_start();

$error = isset($_GET["error"]) ? $_GET["error"] : "";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

    <style> 
   :root{
  --blue-1:#0ea5e9;
  --blue-2:#2563eb;

  --radius:18px;

  --glass-bg: rgba(255,255,255,0.30);
  --glass-border: rgba(255,255,255,0.40);

  --text:#0f172a;
  --muted:#475569;

  --input-bg: rgba(255,255,255,0.35);
  --input-border: rgba(255,255,255,0.40);
}

*{
  box-sizing:border-box;
}

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

#card{
  width:380px;
  padding:26px;
  border-radius:var(--radius);
  background: var(--glass-bg);
  border:1px solid var(--glass-border);
  backdrop-filter: blur(14px);
  -webkit-backdrop-filter: blur(14px);
  box-shadow: 0 18px 55px rgba(0,0,0,0.22);
}
#card:hover{
      transform: translateY(-2px);
      box-shadow: 0 22px 60px rgba(0,0,0,0.26);
    }
h2{
  margin:0;
  text-align:center;
  font-size:22px;
  font-weight:800;
}

#subtext{
  margin:8px 0 0 0;
  text-align:center;
  font-size:13px;
  color: var(--muted);
}

form{
  margin-top:14px;
}

label{
  display:block;
  margin-top:12px;
  margin-bottom:6px;
  font-size:13px;
  color: var(--muted);
}

input, select{
  width:100%;
  padding:11px 12px;
  border-radius:12px;
  border:1px solid var(--input-border);
  background: var(--input-bg);
  color: var(--text);
  outline:none;
  font-size:14px;
}

input::placeholder{
  color: rgba(15,23,42,0.55);
}

input:focus, select:focus{
  border-color: rgba(37,99,235,0.85);
  box-shadow: 0 0 0 4px rgba(14,165,233,0.25);
}

button{
  width:100%;
  margin-top:16px;
  padding:11px 12px;
  border:none;
  border-radius:12px;
  background: linear-gradient(135deg, var(--blue-1), var(--blue-2));
  color:#fff;
  font-size:14px;
  font-weight:700;
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

#error-box{
  margin:14px 0 0 0;
  padding:10px 12px;
  border-radius:12px;
  background: rgba(239,68,68,0.12);
  border: 1px solid rgba(239,68,68,0.35);
  color:#7f1d1d;
  font-size:13px;
  font-weight:700;
  box-shadow: 0 14px 30px rgba(0,0,0,0.15);
}

#back-link{
  text-align:center;
  margin-top:12px;
  font-size:13px;
  color: var(--muted);
}

#back-link a{
  color:#0f172a;
  font-weight:700;
  text-decoration:none;
  border-bottom:1px solid rgba(15,23,42,0.35);
}

#back-link a:hover{
  border-bottom-color: rgba(15,23,42,0.75);
}

@media (max-width:480px){
  #card{
    width:100%;
    max-width:380px;
  }
}

    </style>
</head>

<body>
<div id="card">

  <h2>Create Account</h2>
  <p id="subtext"> Create your Opsdesk Account</p>

  <?php if ($error !== "") { ?>
    <div id="error-box"><?php echo htmlspecialchars($error); ?></div>
  <?php } ?>

  <form method="POST" action="register_action.php">

    <label for="fullname">Full Name</label>
    <input id="fullname" name="fullname" type="text" placeholder="Enter your name" required>

    <label for="email">Email</label>
    <input id="email" name="email" type="email" placeholder="example: ticket@gmail.com" required>

    <label for="password">Password</label>
    <input id="password" name="password" type="password" placeholder="Enter password" required>

    <label for="role">Role</label>
    <select id="role" name="role" required>
      <option value="Requester">Requester</option>
      <option value="Agent">Agent</option>
    </select>

    <button type="submit" name="register_btn">Register</button>
  </form>

  <div id="back-link">
    <a href="login.php">Back to Login</a>
  </div>

</div>

</body>
</html>