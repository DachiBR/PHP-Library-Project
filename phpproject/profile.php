
    <!DOCTYPE html>
<html>
<head>
  <title>User Profile</title>
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="col-md-3 mb-2 mb-md-0">
            <a href="./Home.html" class="d-inline-flex link-body-emphasis text-decoration-none">
                <input class="logosize" type="image" id="myimage" src="./pngs/logo.png" >
            </a>
        </div>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="./home.php" class="nav-link px-2 link-secondary">Home</a></li>
            <li><a href="./profile.php" class="nav-link px-2">Profile</a></li>
            <li><a href="./blog.php" class="nav-link px-2">Blog</a></li>
            <li><a href="./roadmaps.php" class="nav-link px-2">Roadmaps</a></li>
            <li><a href="./resources.php" class="nav-link px-2">Resources</a></li>
            <li><a href="./quiz.php" class="nav-link px-2">Quiz<a></li>
            <li><a href="./tym.php" class="nav-link px-2">TYM<a></li>
        </ul>

        <div class="col-md-3 text-end">
            <a href="./index.php"><button type="button" class="btn btn-outline-primary me-2">Login | Register</button></a>
        </div>
    </header>
</div>
  <div class="container">
    <h2>User Profile</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Database connection
      $host = 'localhost';
      $dbname = 'DMSP';
      $username = 'root';
      $db_password = '';
  
      // Create a new PDO instance
      $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $db_password);
  
  

      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      // Insert data into the database
      $topic = $_POST["topic"];
      $description = $_POST["description"];

      $sql = "INSERT INTO blog (topic, description) VALUES ('$topic', '$description')";
      if ($conn->query($sql) === TRUE) {
        echo "<p>Blog post created successfully!</p>";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

      $conn->close();
    }
    ?>
    <form action="blog.php" method="POST">
      <div class="form-group">
        <label for="topic">Topic:</label>
        <input type="text" class="form-control" id="topic" name="topic" required>
      </div>
      <div class="form-group">
        <label for="description">Description:</label>
        <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <span class="mb-3 mb-md-0 text-body-secondary">© 2023 Company, Inc</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-body-secondary" href="https://www.linkedin.com/in/bregadze28/"><input class="pngsize" type="image" id="myimage1" src="./pngs/linktst.png"></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="https://www.instagram.com/bregadze28/"><input class="pngsize" type="image" id="myimage2" src="./pngs/instagrampng1.png"></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="https://www.facebook.com/dachi.bregadze78/"><input class="pngsize" type="image" id="myimage3" src="./pngs/facebookTST.png"></a></li>
        </ul>
    </footer>
</div>
</body>
</html>
