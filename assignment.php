<div class="content">
        <div class="container-fluid">
          <form action="repository_process.php" method="POST">
          <div class="row">
          
                
         <div class="col-md-7">
            <div class="card">
              <div class="card-header card-header-primary">
                <h5 class="title">Add Assignment</h5>
              </div>
              <div class="card-body">
                
                  <div class="row">
                    
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Assignment Title</label>
                        <input type="text" id="assignment_name" required name="assignment_name" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="">
                        <label for="">Add file</label>
                        <input type="file" name="file" required class="btn btn-fill btn-success" id="file" >
                      </div>
                    </div>
                     <div class="col-md-12">
                      <div class="form-group">
                        <label>Description</label>
                        <textarea rows="4" cols="80" id="details" required name="details" class="form-control"></textarea>
                      </div>
                    </div>
               
              <div class="card-body">
                
                  <div class="row">
                    
                     
                  
        
              <div class="card-footer">
                  <button type="submit" id="btn_save" name="btn_save" required class="btn btn-fill btn-primary">Add Assignment</button>
              </div>
            </div>
          </div>
          </div>
        </div>
         </form>
          </div>
        </div>
        </div>
      </div>
      <?php
include "footer.php";
?>