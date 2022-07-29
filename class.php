<?php

class crud{
    private $connection;
    function __construct()
    {
        $this->connection=new mysqli('localhost','root','','php_crud');
    }
    function insert($name,$department,$email,$address,$status){
        $sql=$this->connection->query("INSERT INTO  tbl_student(name,department,email,address,status) 
        VALUES('$name','$department','$email','$address','$status')");

    }  
    function show(){
      $table_data= $this->connection->query("SELECT *FROM tbl_student");
      return $table_data;
        
    } 
    function delete($id){
        $sql=$this->connection->query("DELETE FROM tbl_student where id='$id' ");
        if($sql){
          header("location:index.php");
          return true;
        }
        else{
          return false;
        }
    }
    function update($data,$id){
      $name = $data['name'];
      $email = $data['email'];
      $department = $data['department'];
      $address = $data['address'];
      $status = $data['status'];
    $result = $this->connection->query("UPDATE tbl_student SET name='$name', email='$email',department='$department',address ='$address',status='$status' WHERE id='$id'");
    if ($result) {
      header("location: index.php");
    }
  }

}
 ?>