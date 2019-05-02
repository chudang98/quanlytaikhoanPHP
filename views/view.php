<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style/view.css">
    
</head>
  <body>
      <div class="container-fluid h-100">
        <div class="row mt-5">
          <?php
            if(isset($success)){
              echo '<div class="alert ' .$success .' ">' .$mess .'</div>';
            }
          ?>
        </div>
        <table class="table table-bordered mt-3">
            <thead class="table-primary">
                <tr>
                    <td align="center">ID</td>
                    <td align="center">NAME</td>
                    <td align="center">EDIT</td>
                    <td align="center">DELETE</td>
                </tr>
            </thead>
            <tbody>
                <?php for($i = 0; $i < sizeof($result); $i++){?>
                    <tr>
                        <td align="center"> <?php echo $result[$i]['id'] ?> </td>
                        <td align="center"> <?php echo $result[$i]['ten'] ?> </td>
                        <td align="center"> <a class="nav-link" href="index.php?controll=edit&action=edit&id=<?php echo $result[$i]['id']?>&name=<?php echo $result[$i]['ten']?>">
                            <button class="btn btn-outline-success">EDIT</button></a></td>
                        <td align="center"><a class="nav-link" href="index.php?controll=home&action=delete&id=<?php echo $result[$i]['id']?>">
                            <button class="btn btn-outline-danger">DELETE</button></a></td>                        
                    </tr>
                <?php } ?>
            </tbody>
        </table>
      </div>
      <div class="container-fluid">
        <div class="d-flex justify-content-center">
            <a class="btn btn-warning" href="index.php?controll=add&action=add" role="button">Thêm user mới</a>
        </div>
      </div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>