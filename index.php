<?php
  include 'assets/php/connection.php';

  $query = "SELECT * FROM tbl_sample ORDER BY  id DESC";

  $result = $connect->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <!--  -->
  <script src="assets/moment/moment.min.js"></script>
  <!-- Dark Editable-->
  <link rel="stylesheet" href="assets/dark-editable/dark-editable.css" />
  <script src="assets/dark-editable/dark-editable.js"></script>

  <title>Edicion en Linea con JavaScript</title>
  <link rel="shortcut icon" href="assets/icon/edit.png">

</head>
<body>
  <div class="container">
    <h1 classmt-5 mb-5 text-center text-primary>Edicion en Linea con JavaScript</h1>
    <div class="card">
      <div class="card-header">Data</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped table-bordered">
            <tr>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Genero</th>
              <?php
                foreach($result as $row){
                  echo'<tr>
                    <td>
                      <a href="#" class="first_name" id="first_name_'.$row["id"].'" data-type="text" data-pk = "'.$row["id"].'" data-url="process.php" data-name="first_name">'.$row["first_name"].'</a>
                    </td>
                    <td>
                      <a href="#" class="last_name" id="last_name_'.$row["id"].'" data-type="text" data-pk="'.$row["id"].'" data-url="process.php" data-name="last_name">'.$row["last_name"].'</a>
                    </td>
                    <td>
                      <a href="#" class="gender" id="gender_'.$row["id"].'" data-type="select" data-pk="'.$row["id"].'" data-url="process.php" data-name="gender">'.$row["gender"].'</a>
                    </td>
                  </tr>';
                }
              ?>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>
<script>
  //Nombre
  const first_name = document.getElementsByClassName('first_name');

  for(var count = 0; count < first_name.length; count++){
    const first_name_data = document.getElementsById(first_name[count].getAttribute('id'));
    const first_name_popover = nre DarkEditable(first_name_data);
  }
  //Apellido
  const last_name = document.getElementsByClassName('last_name');

  for(var count = 0; count < last_name.length; count++){
    const last_name_data = document.getElementById(last_name[count].getAttribute('id'));
    const last_name_popover = new DarkEditable(last_name_data);
  }
  //Genero
  const gender = document.getElementsByClassName('gender');

  for(var count = 0; count < gender.length; count++){
    const gender_data = document.getElementById(gender[count].getAttribute("id"));

    const gender_popover = new DarkEditable(gender_data, {
        source :[
            {
                value : 'Male',
                text : 'Male'
            },
            {
                value : 'Female',
                text : 'Female'
            }
        ]
    });
  }
</script>
</html>