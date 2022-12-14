<?php 
    include"class.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootstreap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- font awasm -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" interity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
     <!-- jquery css link -->
     <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
</head>
<body>
    <?php
        $cd=new crud();

        if(isset($_POST["submit"])){
            $name=$_POST["name"];
            $department=$_POST["department"];
            $email=$_POST["email"];
            $address=$_POST["address"];
            $status=$_POST["status"];

            $cd->insert($name,$department,$email,$address,$status);
          }

          if(isset($_GET["uid"])){
            $id = $_GET["uid"];
            if($cd->delete($id)){
              echo '<span class="alert alert-success">Data Deleted</span>';
            }
            else{
              
              echo '<span class="alert alert-success">Data Deleted</span>';
            }
          }

          if(isset($_GET["updateId"])){
            $id = $_GET['updateId'];
            if ($cd->update($_GET,$id)) {
              echo '<span class="alert alert-success">Data Updated</span>';
            }
            else{
              echo '<span class="alert alert-danger">Data Not Updated</span>';
            }
          }
          if(isset($_GET["statusId1"])){
            $id = $_GET['statusId1'];
            $cd->statusUpdate2($id);
          }
          if(isset($_GET["statusId2"])){
            $id = $_GET['statusId2'];
            $cd->statusUpdate1($id);
          }
  
    ?>
<div class="container">
  <h2 class="text-center text-warning">Student Information Form</h2>
  <form class="form-horizontal" action="" method="POST">
    <div class="form-group mb-3">
      <label class="control-label col-sm-2" for="">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Enter Name" name="name">
      </div>
    </div>   
    
    <div class="form-group mb-3">
      <label class="control-label col-sm-2" for="email">Department:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  placeholder="Enter Department" name="department">
      </div>
    </div>   
    
    <div class="form-group mb-3">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" placeholder="Enter Email" name="email">
      </div>
    </div>   
    
    <div class="form-group mb-3">
      <label class="control-label col-sm-2" for="address">Address:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Enter Address" name="address">
      </div>
    </div>  
    
    <div class="form-group mb-3">
      <label class="control-label col-sm-2" >Status:</label>
      <div class="col-sm-10">
       <select class="form-control" name="status">
        <option value="1">------ Select Status--------</option>
        <option value="1"> Regular</option>
        <option value="2">Irregular</option>
       </select>
      </div>
    </div>
    <div class="form-group mb-3">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
</div>

<div class="row">
  <div class="col-md-9 offset-md-1">
    <table class="table table-striped" border="1" id="table_id">
      <thead>
      <tr>
        <th>Serial</th>
        <th>Name</th>
        <th>Department</th>
        <th>Email</th>
        <th>Address</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
      </thead>
      <tbody>
      <?php
      $table_view=$cd->show();
      $sl=1;
      while($data=$table_view->fetch_assoc()){
        echo '        
        <tr>
            <td>'.$sl.'</td>
            <td>'.$data["name"].'</td>
            <td>'.$data["department"].'</td>
            <td>'.$data["email"].'</td>
            <td>'.$data["address"].'</td>
            <td>
            <a href="" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#edit'.$data["id"].'"><i class="fas fa-edit"></i></a>
            <a href="" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete'.$data["id"].'"><i class="fas fa-trash"></i></a>           
            </td>';

        if($data["status"]==1){
          echo '<form method="GET">
          <td>
          <button class="btn btn-success btn-sm" value="'.$data["id"].'" name="statusId1">Regular</button>
          </td>
          </form></tr>';
        }
        else{
          echo '<form method="GET"><td><button class="btn btn-warning btn-sm" value="'.$data["id"].'" name="statusId2">Irregular</button></td></form></tr>';
        }
        $sl++;
        ?>

        <!-- Delete Modal -->
          <div class="modal fade" id="delete<?php echo $data['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Are You Sure want to delete this Information ?</h5>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                  <form method="GET">
                    <button class="btn btn-danger" name="uid" value="<?php echo $data['id'] ?>">Delete</button>
                  </form>              
                </div>
              </div>
            </div>
          </div>


            <!-- Update Modal -->
            <div class="modal fade" id="edit<?php echo $data['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Are You Sure want to Update this Information ?</h5>
                </div>
                <div class="model-body">
                  <form action="" method="GET">
                  <div class="form-group mb-3">
                  <label class="control-label col-sm-2" for="">Name:</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="Enter Name " name="name" value="<?php echo $data['name'] ?>">
                  </div>
                  </div>   
                
                  <div class="form-group mb-3">
                  <label class="control-label col-sm-2" for="">Email:</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" placeholder="Enter Email " name="email" value="<?php echo $data['email'] ?>">
                  </div>
                  </div>    
                
                  <div class="form-group mb-3">
                  <label class="control-label col-sm-2" for="">Department:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Enter Department" name="department" value="<?php echo $data['department'] ?>">
                  </div>
                  </div>   
                  
                  <div class="form-group mb-3">
                  <label class="control-label col-sm-2" for="">Address:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Enter Address" name="address" value="<?php echo $data['address'] ?>" >
                  </div>
                  </div>    
                  
                  <div class="form-group mb-3">
                    <div class="col-sm-10">
                    <select class="form-control" name="status" id="">
                        <option value="1">-------Select Regular-------</option>
                        <option value="1">Regular</option>
                        <option value="2">Irregular</option>
                      </select>
                    </div>
                  </div>    
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                  <button name="updateId" value="<?php echo $data['id']?>" class="btn btn-success">update</button>
                </div>
                </form>
              </div>
            </div>
          </div>



          <?php
      }

       ?>
       </tbody> 
    </table>
  </div>
</div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
</body>
</html>