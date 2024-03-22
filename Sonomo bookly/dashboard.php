<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <title>Dashboard</title>
</head>
<body>
     <!---------------Navbar---------------->
     <nav class="navbar navbar-expand-lg navbar-dark" id="navsono">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Bookly</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <a href="add new book.html" class="btn" id="cart_btn" target="_blank">Add new book</a>
            <a href='#' class="btn" id="login_btn" target="_blank">Logout</a>
          </div>
        </div>
      </nav>

      <!------Table------>
      <section>
            <!-- Display book details -->
            <h5>Book List</h5>
            <br>
            <table class="table">
              <thead>
                <tr>
                  <th>Book ID</th>
                  <th>Title</th>
                  <th>Author</th>
                  <th>Price</th>
                  <th>Quantity</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $host = "127.0.0.1:3307";
                $dbusername = "Vinoth";
                $dbpassword = "V1nThh";
                $dbname="test";
                 
                 // Create connection
                 $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
             
                 // Check connection
                 if ($conn->connect_error) {
                   die("Connection failed: " . $conn->connect_error);
                 }
             
                $sql = "SELECT * FROM `book_info`";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                    echo "
                    <tr>
                        <td>$row[bookid]</td>
                        <td>$row[Book_Name]</td>
                        <td>$row[Name_Of_the_Author]</td>
                        <td>$row[Price]</td>
                        <td>$row[Quantity]</td>
                    </tr>";
                  }
                } 
                
                else {
                  echo "<tr><td colspan='5'>No books available</td></tr>";
                }
                ?>
              </tbody>
            </table>
  </section>
</body>
</html>