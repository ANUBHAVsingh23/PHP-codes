<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <style>
   body {
  font-family: Arial, sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  margin: 0;
  background-image: url('https://images.unsplash.com/photo-1517672651691-24622a91b550?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y2FyJTIwYW5kJTIwYmlrZXxlbnwwfHwwfHx8MA%3D%3D');
  background-size: cover;
  background-position: center;
}
    
    .login-container {
      background-color: white;
      padding: 30px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 300px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    
    .login-container img {
      width: 80px;
      margin-bottom: 20px;
    }
    
    input[type=text], input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    
    button {
      background-color: #00b8d4;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
    }
    
    button:hover {
      background-color: #00a0b2;
    }
    
    .register-link {
      text-align: center;
      margin-top: 10px;
    }
  </style>
</head>
<h1>Car and Bike Rental Service </h1>
<body>
  <div class="login-container">
    <img src="hoodie.png" alt="Logo">
    
    <h2>Login</h2>
    <form>
      <label for="email">Email:</label>
      <input type="text" id="email" name="email" placeholder="Enter your email" required>
      
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" required>
      
      <button type="submit">Login</button>
    </form>
    <div class="register-link">
      Don't have an account? <a href="#">Register</a>
    </div>
  </div>
</body>
</html>
