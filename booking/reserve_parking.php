<?php include "header.php"; ?>
<div class="container">
	
                    <form class="form-horizontal" action='' method="post">
            <fieldset>
<div id="legend">
                 <legend class="">Reserve Parking</legend>
</div>
    <div class="control-group">
       
                 <label class="control-label"  for="parking id">Parking Id</label>
          <div class="controls">
        <input type="text" class="form-control"  name="Parking id" placeholder=" " class="input-xlarge">
        
          </div>
    </div>
 
               <div class="control-group">
                    <label class="control-label" >User mobile</label>
                   <div class="controls">
                    <input type="text" class="form-control" name="mobile no" placeholder="mobile no" class="input-xlarge">
       
      </div>
                   </div>
 
  <div class="control-group">
                <label class="control-label">Parking Date</label>
         <div class="controls">
                <input type="date" class="form-control"  name="parking_date" placeholder="" class="input-xlarge">
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