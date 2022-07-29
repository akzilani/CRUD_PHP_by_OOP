
<!-- Update Modal -->


<div class="modal" id="edit" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Update Student Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <div class="form-group mb-3">
      <label class="control-label col-sm-2" for="">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Enter Name " name="name" value="">
      </div>
      </div>     
      
      <div class="form-group mb-3">
      <label class="control-label col-sm-2" for="">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" placeholder="Enter Email " name="email">
      </div>
      </div>    
      
      <div class="form-group mb-3">
      <label class="control-label col-sm-2" for="">Department:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Enter Department" name="department">
      </div>
      </div>   
      
      <div class="form-group mb-3">
      <label class="control-label col-sm-2" for="">Address:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Enter Address" name="address">
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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" name="uid" class="btn btn-primary">Update</button>
      </div>
    </div>

  </div>
</div>



<div class="modal-body">
                  <form action="GET">
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