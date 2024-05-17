<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sidebar Example</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="/resources/bootstrap.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  <style>
    .sidebar {
  height: 100%;
  width: 250px;
  position: fixed;
  top: 0;
  left: -250px;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 10px 15px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.content {
  margin-left: 250px;
  padding: 16px;
}

.content button {
  margin-bottom: 20px;
}
  </style>
</head>
<body>
  <div class="sidebar" id="sidebar">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
    <button onclick="toggleSidebar()">Close Sidebar</button>
  </div>
  <div class="content">
    <button onclick="toggleSidebar()">Open Sidebar</button>
    <p>Main Content Area</p>
  </div>
  <script >
    function toggleSidebar() {
  var sidebar = document.getElementById("sidebar");
  if (sidebar.style.left === "0px") {
    sidebar.style.left = "-250px";
  } else {
    sidebar.style.left = "0px";
  }
}
  </script>
</body>
</html> -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Example</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="/resources/bootstrap.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
    <style>
      body {
    font-family: Arial, sans-serif;
    margin: 0;
}

.sidebar {
    height: 100%;
    width: 250px;
    position: fixed;
    top: 0;
    left: 0;
    /* background-color: #111; */
    background-color:	#E8E8E8;
    /* background-color:rgb(222, 221, 221); */
    padding-top: 20px;
}

.sidebar h2 {
    color: black;
    text-align: center;
}

.sidebar a {
    padding: 10px;
    text-decoration: none;
    font-size: 18px;
    color: white;
    color: #333;
    display: block;
    transition: 0.3s;
}

.sidebar a:hover {
    /* background-color: #444; */
    background-color: rgb(222, 221, 221);
}

.content {
    margin-left: 250px;
    padding: 20px;
}

.content h2 {
    color: #333;
}
.logo{
  width:6em ;
  /* border-radius: 20px; */
  margin-left: 4em;
}
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Dashboard</h2>
        <img src="img/tel.png" alt="" class="logo rounded-circle">
        <a href="#">Accueil</a>
        <a href="#">contact </a>
        
        <a href="#">Paramètres</a>
        <a href="#">Profil</a>
    </div>
    
    <div class="content">
        <h2>Contenu principal</h2>
        <p>Contenu de la page...</p>
    </div>
</body>
</html>