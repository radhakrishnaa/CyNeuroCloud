<?php
   include("includes/header.php");
   ?>
<div class="container">
   <h2 class="heading"> Neuron Workflow Requirements</h2>
</div>
</br>
</br>
<form>
   <div class="form-group row">
      <div class="col-sm-2">
      </div>
      <label for="jobname" class="col-sm-2 col-form-label">Number of Neurons:</label>
      <div class="col-sm-5">
         <input  type="text" class="form-control" id="inputname" >
      </div>
      <div class="tooltip col-sm-2" style="color: black">
         <span class="glyphicon glyphicon-question-sign"></span>
         <span class="tooltiptext">Tooltip text</span>
      </div>
   </div>
   <div class="form-group row">
      <div class="col-sm-2">
      </div>
      <label for="description" class="col-sm-2 col-form-label">Connectivity Matrix:</label>
      <div class="tooltip col-sm-2" style="color: black; margin-top: 1px">
         <span class="glyphicon glyphicon-question-sign"></span>
         <span class="tooltiptext">Tooltip text</span>
      </div>
   </div>
   <div class="form-group row">
      <div class="col-sm-4">
      </div>
      <div class="col-sm-6">
         <label><input type="radio" name="optradio" value = '1'>   Generate Randomly based on % of connections from Neuron
         A to Neuron B</label>
      </div>
      <div class="col-sm-12" style="display: none" id="selection1">
         <div class="col-sm-4">
         </div>
         <div class="col-sm-4">
            <input  type="text" class="form-control" id="inputname" >
         </div>
         <div class="tooltip col-sm-2" style="color: black; margin-top: 8px">
         <span class="glyphicon glyphicon-question-sign"></span>
         <span style="height: 40px" class="tooltiptext">Percentage of connections from Neuron Type A to Type B</span>
      </div>
         <div class="col-sm-2">
         </div>
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-6">
         <label><input value='2' type="radio" name="optradio">   Upload csv file</label>
      </div>
      <div class="tooltip col-sm-2" style="color: black; margin-top: 1px">
         <span class="glyphicon glyphicon-question-sign"></span>
         <span class="tooltiptext">Tooltip text</span>
      </div>
      <div class="col-sm-12" style="display: none" id="selection2">
         <div class="col-sm-4">
         </div>
         <div class="col-sm-4">
            <input type="file" name="fileToUpload" id="fileToUpload">
         </div>
         <div class="col-sm-2">
         </div>
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-6">
         <label><input value='3' type="radio" name="optradio" >   I am not sure</label>
      </div>
      <div class="tooltip col-sm-2" style="color: black; margin-top: 1px">
         <span class="glyphicon glyphicon-question-sign"></span>
         <span class="tooltiptext">Tooltip text</span>
      </div>
   </div>
   <div class="form-group row">
      <div class="col-sm-2">
      </div>
      <label for="description" class="col-sm-2 col-form-label">Weight Matrix:</label>
      <div class="tooltip col-sm-2" style="color: black; margin-top: 1px">
         <span class="glyphicon glyphicon-question-sign"></span>
         <span class="tooltiptext">Tooltip text</span>
      </div>
   </div>
   <div class="form-group row">
      <div class="col-sm-4">
      </div>
      <div class="col-sm-6">
         <label><input value='3' type="radio" name="optradio">   Generate Random weights</label>
      </div>
      <div class="col-sm-12" style="display: none" id="selection3">
         <div class="col-sm-4">
         </div>
         <div class="col-sm-4">
            <input  type="text" class="form-control" id="inputname" >
         </div>
         <div class="tooltip col-sm-2" style="color: black; margin-top: 8px">
         <span class="glyphicon glyphicon-question-sign"></span>
         <span style="height: 40px" class="tooltiptext">Percentage of connections from Neuron Type A to Type B</span>
      </div>
      <div class="col-sm-12" style="display: none" id="selection4">
         <div class="col-sm-4">
         </div>
         <div class="col-sm-4">
            <input type="file" name="fileToUpload" id="fileToUpload">
         </div>
         <div class="col-sm-2">
         </div>
      </div>
         <div class="col-sm-2">
         </div>
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-6">
         <label><input value='4' type="radio" name="optradio">   Upload csv file</label>
      </div>
      <div class="tooltip col-sm-2" style="color: black; margin-top: 1px">
         <span class="glyphicon glyphicon-question-sign"></span>
         <span class="tooltiptext">Tooltip text</span>
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-6">
         <label><input type="radio" name="optradio" >   I am not sure</label>
      </div>
      <div class="tooltip col-sm-2" style="color: black; margin-top: 1px">
         <span class="glyphicon glyphicon-question-sign"></span>
         <span class="tooltiptext">Tooltip text</span>
      </div>
   </div>
   <div class="form-actions" style="margin-left:50px ">
      <a class="btn btn-primary" href="neuronDetails.php">Back</a>
      &nbsp&nbsp&nbsp&nbsp&nbsp
      <a class="btn btn-primary" href="workflowRequirements2.php">Next</a>
   </div>
</form>
</body>
</html>