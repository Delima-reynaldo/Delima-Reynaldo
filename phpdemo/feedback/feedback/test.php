<?php
    include_once 'inc/dbh.php';
    include_once 'inc/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <title>TEST PHP</title>
</head>
<body>
<main>
      <div class="container d-flex flex-column align-items-center">
        <h2>Past Feedbacks</h2>

      
     
          <?php
        $sql = "SELECT * FROM feedback;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0 ) {
            while($row = mysqli_fetch_assoc($result)){ 
              echo '  <div class="card my-3">';
              echo '<div class="card-body text-center">';
                echo $row['Body'] . '<br><br>' ;
                echo '<p class="text-black-50">';
                echo 'By: ' .$row['Name'] . ' on ' . $row['Date'] . '<br><br>';
                echo '</p>';
                echo '</div>';
                echo ' </div>';
            }
        }
    ?>
          
       

        </div>
      </div>
    </main>
    <?php
    include_once 'inc/footer.php';
    ?>

<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
</body>
</html>