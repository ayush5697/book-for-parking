  <?php include "header.php"; ?>
<div class="container">
  
                    <form class="form-horizontal" action='' method="post">
            <fieldset>
<div id="legend">
                 <legend class="">User Information</legend>
</div>
    <div class="control-group">
       
                 <label class="control-label"  for="user information">Name</label>
          <div class="controls">
        <input type="text" class="form-control"  name="name" placeholder="enter name here " class="input-xlarge">
        
          </div>
    </div>
 
               <div class="control-group">
                    <label class="control-label" >Email</label>
                   <div class="controls">
                    <input type="email" class="form-control" name="email" placeholder="enter email here" class="input-xlarge">
       
      </div>
                   </div>
 
  <div class="control-group">
                <label class="control-label">Mobile</label>
         <div class="controls">
                <input type="text" class="form-control"  name="mobile no" placeholder="enter mobile number here" class="input-xlarge">
         </div>
  </div> 

   <div class="control-group">
                <label class="control-label">Password</label>
         <div class="controls">
                <input type="Password" class="form-control"  name="Password" placeholder="enter Password here" class="input-xlarge">
         </div>
  </div> 
    <hr>
          <div class="control-group">
             
              <div>
                    <button type="submit" name="Submit" class="btn btn-primary">submit</button>
             </div>
          </div>
     </fieldset>
                 </form>
</div>
         <?php include "footer.php"; ?>