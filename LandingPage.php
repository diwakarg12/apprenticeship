<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Augmentic Assignment</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    
</head>

<body>

    <div class="logo">
        <img src="./logo1.png" alt="The Aprenticeship guide"><hr> 
        <div class="admin">
            <button class="btn btn-primary d-flex justify-content-end my-2"><a href="./adminpanel/login.php" style="color: white; text-decoration: none;">Admin Login</a></button>
        </div>
    </div>
    <div id="abc">
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">What is Aprenticeship?</a></li>
                <li><a href="#">Aprenticeship Choices</a></li>
                <li><a href="#">Success Stories</a></li>
                <li><a href="#">Employers & Providers</a></li>
                <li><a href="#">Vacancies</a></li>
                <li><a href="#">Blogs</a></li>
            </ul>
        </nav>
    </div>

    <section class="my-5">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class=" col-xxl-5  col-xl-6 col-lg-6 col-12">
                    <div>
        <!-- <p ><a href="" style="color: tomato; font-size: 18px;" >Get Your Copy of the 2022 Aprenticeship Guide </a></p> -->
        <p style="color: tomato; font-size: 18px;">
        <?php
        // Connect to the database (replace these values with your actual database credentials)
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'phpadminpanel';

        $conn = mysqli_connect($host, $username, $password, $database);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Fetch the content from the database
        $sql = "SELECT content_p1 FROM aprenticeship_db WHERE id = 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        echo $row['content_p1'];
        ?>
    </p>
        <h1 style="font-size: 9vh;">
        <?php
        // Connect to the database (replace these values with your actual database credentials)
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'phpadminpanel';

        $conn = mysqli_connect($host, $username, $password, $database);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Fetch the content from the database
        $sql = "SELECT content_h1 FROM aprenticeship_db WHERE id = 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        echo $row['content_h1'];
        ?>
    </h1>
    <!-- <p class="lead mb-4">Here to help you in your journey toward a new Career.</p> -->
    <p class="lead mb-4">
        <?php
        // Connect to the database (replace these values with your actual database credentials)
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'phpadminpanel';

        $conn = mysqli_connect($host, $username, $password, $database);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Fetch the content from the database
        $sql = "SELECT content_p2 FROM aprenticeship_db WHERE id = 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        echo $row['content_p2'];
        ?>
    </p>
                        
        </div>
        </div>
        <div class="col-xxl-5 offset-xxl-1 col-xl-6 col-lg-6 col-12 d-lg-flex justify-content-center">
        <img class="mx-4" src="./xxxx.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="SearchForm">
            <h3 style="color: white;"><span style="font-weight: 900;">Dive</span> right in,<span style="font-weight: 900;">Start</span> Your <span style="font-weight: 900; color: tomato;">Aprenticeship</span> Search now</h3>
            <select name="search1" id="search1">
                <option value="favSub">Favourite Subject</option>
                <option value="v1">Value1</option>
                <option value="v2">Value2</option>
                <option value="v3">Value3</option>
                <option value="v4">Value4</option>
              </select>
              <select name="search2" id="search2">
                <option value="">Interests/Skills</option>
                <option value="volvo">Value1</option>
                <option value="saab">Value2</option>
                <option value="opel">Value3</option>
                <option value="audi">Value4</option>
              </select>
              <select name="search3" id="search3">
                <option value="">Industry Sector</option>
                <option value="volvo">Value1</option>
                <option value="saab">Value2</option>
                <option value="opel">Value3</option>
                <option value="audi">Value4</option>
              </select>
              <select name="search4" id="search4">
                <option value="">Search By Potential Salary</option>
                <option value="volvo">Value1</option>
                <option value="saab">Value2</option>
                <option value="opel">Value3</option>
                <option value="audi">Value4</option>
              </select>
        </div>
    </section>

    <section class="content">
        <div class="card " style="width: 25rem;">
            <img class="card-img-top" src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTqo-vC7qY-YrdxYAArowF9JJ0RAS94pQ8ZHsNIWxMbTsBKrMM0" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">
                    <!-- <strong style="color: rgb(224, 66, 66);">@Laura Tejido Rey</strong> -->
        <strong style="color: rgb(224, 66, 66);">
        <?php
        // Connect to the database (replace these values with your actual database credentials)
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'phpadminpanel';

        $conn = mysqli_connect($host, $username, $password, $database);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Fetch the content from the database
        $sql = "SELECT first0 FROM aprenticeship_db2 WHERE id = 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        echo $row['first0'];
        ?>
    </strong>
                    <!-- <p>Royal Holticultural society</p> -->
        <p>
        <?php
        // Connect to the database (replace these values with your actual database credentials)
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'phpadminpanel';

        $conn = mysqli_connect($host, $username, $password, $database);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Fetch the content from the database
        $sql = "SELECT second0 FROM aprenticeship_db2 WHERE id = 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        echo $row['second0'];
        ?>
    </p>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt adipisci hic amet quibusdam. Dicta quibusdam maiores pariatur recusandae dolorum iusto?</p><br> -->
        <p>
        <?php
        // Connect to the database (replace these values with your actual database credentials)
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'phpadminpanel';

        $conn = mysqli_connect($host, $username, $password, $database);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Fetch the content from the database
        $sql = "SELECT third0 FROM aprenticeship_db2 WHERE id = 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        echo $row['third0'];
        ?>
    </p> 
    <strong><a href="" style="color: rgb(224, 66, 66);">Read My Story</a></strong>
                </p>
            </div>
          </div>
          <div class="card mx-2 my-2" style="width: 25rem;">
            <img class="card-img-top" src="https://images.ctfassets.net/16nm6vz43ids/34o0L5yIWxASn6gkvVaRMq/ecabe65c8e2695271d5f13d3bf2e74fc/How_to_reset_Microsoft_Surface.png?w=1280&h=720&q=65&fm=webp" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">
                    <!-- <strong style="color: rgb(224, 66, 66);">@Charlotte Cox</strong> -->
        <strong style="color: rgb(224, 66, 66);">
        <?php
        // Connect to the database (replace these values with your actual database credentials)
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'phpadminpanel';

        $conn = mysqli_connect($host, $username, $password, $database);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Fetch the content from the database
        $sql = "SELECT first1 FROM aprenticeship_db3 WHERE id = 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        echo $row['first1'];
        ?>
    </strong>
                <!-- <p>British Army</p> -->
        <p>
        <?php
        // Connect to the database (replace these values with your actual database credentials)
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'phpadminpanel';

        $conn = mysqli_connect($host, $username, $password, $database);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Fetch the content from the database
        $sql = "SELECT second1 FROM aprenticeship_db3 WHERE id = 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        echo $row['second1'];
        ?>
    </p>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt adipisci hic amet quibusdam. Dicta quibusdam maiores pariatur recusandae dolorum iusto? </p><br> -->
        <p>
        <?php
        // Connect to the database (replace these values with your actual database credentials)
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'phpadminpanel';

        $conn = mysqli_connect($host, $username, $password, $database);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Fetch the content from the database
        $sql = "SELECT third1 FROM aprenticeship_db3 WHERE id = 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        echo $row['third1'];
        ?>
    </p>
                    <strong><a href="" style="color: rgb(224, 66, 66);">Read My Story</a></strong>
                </p>
            </div>
          </div>

    </section>
</body>

</html>