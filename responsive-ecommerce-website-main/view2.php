<?php require_once('connect_db2.php'); ?>
<html>
<head>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
    }
    
    .container {
      margin: 0 auto;
      max-width: 800px;
      padding: 20px;
    }
    
    .table-container {
      margin-top: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #fff;
    }
    
    table {
      width: 100%;
      border-collapse: collapse;
    }
    
    th, td {
      padding: 10px 20px;
      border-bottom: 1px solid #ddd;
    }
    
    th {
      background-color: #f2f2f2;
      font-weight: bold;
    }
    
    tr:nth-child(even) {
      background-color: #f9f9f9;
    }
    
    tr:hover {
      background-color: #f2f2f2;
    }
    
    .no-records {
      text-align: center;
      padding: 20px;
      font-weight: bold;
    }
  </style>
</head>
<body>
<div class="container">
  <div class="table-container">
    <?php
    $dbname = "ecomassign";
    $con = connect_db2($dbname);
    $sql = "SELECT fName, lName, email, passw, age, BANKP FROM custinfo";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
      echo "<table>
              <tr>
                <th>FIRST NAME</th>
                <th>LAST NAME</th>
                <th>EMAIL</th>
                <th>PASSWORD</th>
                <th>AGE</th>
                <th>ACCOUNT NUMBER</th>
              

              </tr>";
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>" . $row["fName"] . "</td>
                <td>" . $row["lName"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["passw"] . "</td>
                <td>" . $row["age"] . "</td>
                <td>" . $row["BANKP"] . "</td>
             
              </tr>";
      }
      echo "</table>";
    } else {
      echo "<div class='no-records'>No records found</div>";
    }
  
    mysqli_close($con);
    ?>
  </div>
</div>
</body>
</html>
