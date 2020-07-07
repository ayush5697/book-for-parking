 <?php include "header.php"; ?>
<div class="container">
  
                    <form class="form-horizontal" action='' method="post">
            <fieldset>
<div id="legend">
                 <legend class="">Parking location</legend>
</div>
    <div class="control-group">
       
                 <label class="control-label"  for="parking id">Parking Id</label>
          <div class="controls">
        <input type="text" class="form-control"  name="Parking id" placeholder=" " class="input-xlarge">
        
          </div>
    </div>
 
               <div class="control-group">
                    <label class="control-label" >City</label>
                   <div class="controls">
                    <input type="text" class="form-control" name="city" placeholder="" class="input-xlarge">
       
      </div>
                   </div>
 
  <div class="control-group">
                <label class="control-label">Location</label>
         <div class="controls">
                <input type="text" class="form-control"  name="location" placeholder="" class="input-xlarge">
         </div>
  </div> 

   <div class="control-group">
                <label class="control-label">Capacity</label>
         <div class="controls">
                <input type="text" class="form-control"  name="Capacity" placeholder="" class="input-xlarge">
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