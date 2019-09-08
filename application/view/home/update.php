<?php
 $msg = new \Mini\Libs\FlashMessages();
 use Mini\Model\Register;
 if(!isset($_GET['reportId'])){
    ?>
        <div class="container">
            <div class="row">
                <?php
                   (new Register())->updateReport() 
                ?>
            </div>
        </div>
<?php
 }else{
    
    $patient = (new Register())->getPatientInfo($_GET['reportId']);

  

?>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3" style="background-color:white; margin-top:10px; padding-top:20px;">
            <?php $msg->display();?>
            <h3>Update Doctor Report   </h3>
            <hr>
            <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" class="" role="form" enctype="multipart/form-data">
                   
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="" for="">Report ID </label>
                                <input type="text" class="form-control"  name="reportId"  value="<?php echo $patient->reportId?>">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="" for="">Date Of Medical Report </label>
                                <input type="text" class="form-control"  name="date"  value="<?php echo $patient->dateRegistered?>">
                            </div>
                        </div>

                      
                    

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="" for="">Doctor In Charge</label>
                            <input type="text" name="doctorInCharge" class="form-control" value="<?php echo $patient->doctorInCharge?>">
                        </div>
                    </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Surname Of Patient</label>
                        <input type="text" class="form-control" name="surnameOfPatient" value="<?php echo $patient->surnameOfPatient?>">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Other Name Of Patient</label>
                        <input type="text" class="form-control" name="otherNameOfPatient" value="<?php echo $patient->otherNameOfPatient?>">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <label for="my-select">Gender</label>
                            <select id="my-select" class="form-control" name="gender">
                                <option value="<?php echo $patient->gender?>"><?php echo $patient->gender?></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Diagnosis</label>
                        <input type="text" class="form-control" name="diagnosis"  value="<?php echo $patient->diagnosis?>">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Present Condition Of Patient</label>
                        <input type="text" class="form-control" name="presentCondition"  value="<?php echo $patient->presentCondition?>">
                    </div>
                </div>
               

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Drugs Prescribed</label>
                        <input type="text" class="form-control" name="drugsPrescribed" value="<?php echo $patient->drugsPrescribed?>">
                    </div>
                </div>
              

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Date Discharged</label>
                        <input type="date" class="form-control" name="dateDischarged" value="<?php echo $patient->dateDischarged?>">
                    </div>
                </div>

               
             

                <div class="form-group">
                    <button type="submit" name="updateBtn" class="btn btn-primary btn-block">Update</button>
                </div>

            </form>

        </div>

    </div>

</div>


<?php
 }
 ?>