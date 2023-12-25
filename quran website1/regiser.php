<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Registration Form</title>
  <style>
    body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
  margin: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.container {
  background-color: #fff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form {
  display: flex;
  flex-direction: column;
}

label {
  margin-bottom: 8px;
}

input {
  padding: 8px;
  margin-bottom: 16px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

button {
  padding: 10px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  background-color: #0056b3;
}

  </style>
</head>
<body>
  <div class="container">
    <form action="insert.php" method="post">
      <h2>Registration Form</h2>
      
      <label for="username">Username:</label>
      <input type="text" id="username" name="name" required>
      
      <label for="phone">phone:</label>
      <input type="phone" id="phone" name="phone" required>
      
      <label for="Email">Email:</label>
      <input type="Email" id="Email" name="email" required>
      
      <label for="address">Address:</label>
      <input type="address" id="address" name="address" required>
      
      <button type="submit">Register</button>
    </form>
  </div>
</body>
</html>
