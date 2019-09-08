<?php

namespace Mini\Model;

use Mini\Core\Model;
use PDO;


class Register extends Model
{

    public function getPatientInfo($id){
        $query = $this->db -> prepare("SELECT * FROM patient_tbl WHERE reportId = ? LIMIT 1");
        $query -> execute(array($id));
        $result = $query->fetch();
        return $result;
    }


    public function registerPatient($reportId,$date,$doctorInCharge,$surnameOfPatient,$otherNameOfPatient,$gender,$diagnosis,$presentCondition,$drugsPrescribed,$dateDischarged){

      
    $queryInsert = $this->db->prepare("INSERT INTO patient_tbl (id,reportId,dateRegistered,doctorInCharge,surnameOfPatient,otherNameOfPatient,gender,diagnosis,presentCondition,drugsPrescribed,dateDischarged) VALUES(?,?,?,?,?,?,?,?,?,?,?)");
    $queryInsert->execute(array('',$reportId,$date,$doctorInCharge,$surnameOfPatient,$otherNameOfPatient,$gender,$diagnosis,$presentCondition,$drugsPrescribed,$dateDischarged));
    //    die();
    // print_r($this->db->errorInfo());

    if($queryInsert){
        $this->msg->success('Registration successful.', $_SERVER['HTTP_REFERER']);
    }else{
        $this->msg->success('Unable to register at this time, please try again later.', $_SERVER['HTTP_REFERER']);
    }

    }


    public function updatePatient($reportId,$date,$doctorInCharge,$surnameOfPatient,$otherNameOfPatient,$gender,$diagnosis,$presentCondition,$drugsPrescribed,$dateDischarged){
           
        $queryUpdate = $this->db->prepare("UPDATE patient_tbl set doctorInCharge=?,surnameOfPatient=?,otherNameOfPatient=?,gender=?,diagnosis=?,presentCondition=?,drugsPrescribed=?,dateDischarged=? WHERE reportId = ?");
        $queryUpdate->execute(array($doctorInCharge,$surnameOfPatient,$otherNameOfPatient,$gender,$diagnosis,$presentCondition,$drugsPrescribed,$dateDischarged,$reportId));
        
        // print_r($this->db->errorInfo());

        if($queryUpdate){
            $this->msg->success('Successfully updated.', $_SERVER['HTTP_REFERER']);  
        }else{
            $this->msg->error('Unable to update at this time, please try again later.', $_SERVER['HTTP_REFERER']);            

        }
    
        }


    public function report(){
        $query = $this->db -> prepare("SELECT * FROM  patient_tbl ORDER BY id DESC");
        $query->execute();
        if($query->rowCount()>0){
    
     
    ?>
    <h2 class=""> Report</h2>
    <div class="table-responsive">
  
        <table class="table table-hover table-striped">
            <thead>
            
                <tr>
                    <th>Report ID</th>
                    <th>Date registered </th>
                    <th>Doctor incharge</th>
                    <th>Surname of patient</th>
                    <th>Other name of patient</th>
                    <th>Gender</th>
                    <th>Diagnosis</th>
                    <th>Present Condition</th>
                    <th>Drug prescribed</th>
                    <th>Date discharged</th>

                </tr>
            </thead>
            <?php
            
            while($row = $query->fetch(PDO::FETCH_ASSOC)){ 

                ?>
             <tr>
                <td><?php echo $row['reportId'];?></td>
                <td> <?php echo $row['dateRegistered'];?> </td>
                <td><?php echo $row['doctorInCharge'];?></td>
               
                <td><?php echo $row['surnameOfPatient'] ;?> </td>
                <td><?php echo $row['otherNameOfPatient'] ;?> </td>

                <td><?php echo $row['gender'] ;?> </td>
                <td><?php echo $row['diagnosis'] ;?> </td>
                <td><?php echo $row['presentCondition'] ;?> </td>
                <td><?php echo $row['drugsPrescribed'] ;?> </td>
                <td><?php echo $row['dateDischarged'] ;?> </td>
               
            </tr>
    
            <?php
             }    
            ?>
        </table>
    </div>
    <?php
        }else{
            echo '<div>
                <a class="list-group-item">No Record Found.</a>
            </div>';	
        }			
    
    }
   

    public function updateReport(){
        $query = $this->db -> prepare("SELECT * FROM  patient_tbl ORDER BY id DESC");
        $query->execute();
        if($query->rowCount()>0){
    
     
    ?>
    <h2 class=""> Report</h2>
    <div class="table-responsive">
  
        <table class="table table-hover table-striped">
            <thead>
            
                <tr>
                    <th>Report ID</th>
                    <th>Date registered </th>
                    <th>Doctor incharge</th>
                    <th>Surname of patient</th>
                    <th>Other name of patient</th>
                    <th>Gender</th>
                    <th>Diagnosis</th>
                    <th>Present Condition</th>
                    <th>Drug prescribed</th>
                    <th>Date discharged</th>
                    <th>Update</th>

                </tr>
            </thead>
            <?php
            
            while($row = $query->fetch(PDO::FETCH_ASSOC)){ 

                ?>
             <tr>
                <td><?php echo $row['reportId'];?></td>
                <td> <?php echo $row['dateRegistered'];?> </td>
                <td><?php echo $row['doctorInCharge'];?></td>
               
                <td><?php echo $row['surnameOfPatient'] ;?> </td>
                <td><?php echo $row['otherNameOfPatient'] ;?> </td>

                <td><?php echo $row['gender'] ;?> </td>
                <td><?php echo $row['diagnosis'] ;?> </td>
                <td><?php echo $row['presentCondition'] ;?> </td>
                <td><?php echo $row['drugsPrescribed'] ;?> </td>
                <td><?php echo $row['dateDischarged'] ;?> </td>
                <td> <a class="btn btn-info" href="<?php URL ?>update?reportId=<?php echo $row['reportId']?>">Update</a></td>

               
            </tr>
    
            <?php
             }    
            ?>
        </table>
    </div>
    <?php
        }else{
            echo '<div>
                <a class="list-group-item">No Record Found.</a>
            </div>';	
        }			
    
    }

   
                
     
   




}
