<style>
* {
  box-sizing: border-box;
}
body {
  font-family: 'Recursive', sans-serif;
  font-size: 20px;
  color: #00FF84;
  background-color: #000000;
}
.navbar {
  width: 100%;
  margin-top: 20px;
  display: flex;
  flex-direction: row;
  justify-content: space-evenly;
}
.navlinks {
  width: 100%;
  display: grid;
  grid-template-columns: 25% 25% 25% 25%;
  grid-template-rows: auto;
}
.navlinks > a {
  margin-top: 30px;
  margin-left: 30px;
  text-decoration: none;
  font-family: 'Recursive', sans-serif;
  font-size: 20px;
  color: #00FF84;
  padding: 10px 150px;
  border: 2px solid #000000;
  border-radius: 10px;
  transition: 0.3s;
}
.navlinks > a:hover {
  color: #AEFF00;
  padding: 10px 150px;
  border: 2px solid #AEFF00;
  border-radius: 10px;
}
</style>
<head>
<!- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Recursive:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<body>
  <div class="navbar">
    <div class="title">
<center><h2 style="margin-left: 40px;">713TechSupport.com</h2></center>
    </div>
  <div class="navlinks">
    <a href="index.php">Home</a>
    <a href="services.php">Services</a>
    <a href="guides.php">Tutorials</a>
    <a href="contact.php">Contact</a>
  </div>
</div>
<hr>
</body>
