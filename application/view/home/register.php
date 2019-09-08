<?php
 $msg = new \Mini\Libs\FlashMessages();
 use Mini\Model\Lend;
 

?>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3" style="background-color:white; margin-top:10px; padding-top:20px;">
            <?php $msg->display();?>
            <h3> Doctor Report Registration  </h3>
            <hr>
            <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" class="" role="form" enctype="multipart/form-data">
                   
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="" for="">Report ID </label>
                                <input type="text" class="form-control"  name="reportId" value="<?php echo rand(9999,7777) ?>">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="" for="">Date Of Medical Report </label>
                                <input type="text" class="form-control"  name="date" value="<?php echo date("d/m/Y")?>">
                            </div>
                        </div>

                      
                    

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="" for="">Doctor In Charge</label>
                            <input type="text" name="doctorInCharge" class="form-control">
                        </div>
                    </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Surname Of Patient</label>
                        <input type="text" class="form-control" name="surnameOfPatient">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Other Name Of Patient</label>
                        <input type="text" class="form-control" name="otherNameOfPatient">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <label for="my-select">Gender</label>
                            <select id="my-select" class="form-control" name="gender">
                                <option value=""></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Diagnosis</label>
                        <input type="text" class="form-control" name="diagnosis">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Present Condition Of Patient</label>
                        <input type="text" class="form-control" name="presentCondition">
                    </div>
                </div>
               

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Drugs Prescribed</label>
                        <input type="text" class="form-control" name="drugsPrescribed">
                    </div>
                </div>
              

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="" for="">Date Discharged</label>
                        <input type="date" class="form-control" name="dateDischarged">
                    </div>
                </div>

               
             

                <div class="form-group">
                    <button type="submit" name="regBtn" class="btn btn-primary btn-block">Submit</button>
                </div>

            </form>

        </div>

    </div>

</div>
