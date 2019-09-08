<?php
namespace Mini\Controller;

use Mini\Core\View;
use Mini\Model\Register;


class RegisterController
{
    var $View;
    public $msg;
   
    function __construct() {
        $this->View = new View();
        $this->msg = new \Mini\Libs\FlashMessages();
    }


    public function patient()
    {
        if(isset($_POST['regBtn'])){
          
            $reportId = ($_POST['reportId']);
            $date = $_POST['date'];
            $doctorInCharge = ($_POST['doctorInCharge']);
            $surnameOfPatient = ($_POST['surnameOfPatient']);
            $otherNameOfPatient = ($_POST['otherNameOfPatient']);

            $gender = ($_POST['gender']);
            $diagnosis = ($_POST['diagnosis']);
            $presentCondition= $_POST['presentCondition'];
            $drugsPrescribed = ($_POST['drugsPrescribed']);
            $dateDischarged = ($_POST['dateDischarged']);
           

            if(empty($reportId)){
                $this->msg->error('Report ID is required.');
            }if(empty($date)){
                $this->msg->error('Date is required.');
            }if(empty($doctorInCharge)){
                $this->msg->error('Doctor incharge is required.');
            }if(empty($otherNameOfPatient)){
                $this->msg->error('Patient other name is required.');
            }if(empty($surnameOfPatient)){
                $this->msg->error('Surname of patient is required.');
            }if(empty($gender)){
                $this->msg->error('Gender is required.');
            }if(empty($diagnosis)){
                $this->msg->error('Diagnosis is required.');
            }if(empty($presentCondition)){
                $this->msg->error('Present condition is required.');
            }if(empty($drugsPrescribed)){
                $this->msg->error('Drug prescribed is required.');
            }if(empty($dateDischarged)){
                $this->msg->error('Date discharged is required.');
            }

           
           
            if ($this->msg->hasErrors()){
                header('location:' . $_SERVER['HTTP_REFERER']);
                die();
            }else{
                $reportId = ($_POST['reportId']);
            $date = $_POST['date'];
            $doctorInCharge = ($_POST['doctorInCharge']);
            $surnameOfPatient = ($_POST['surnameOfPatient']);
            $otherNameOfPatient = ($_POST['otherNameOfPatient']);

            $gender = ($_POST['gender']);
            $diagnosis = ($_POST['diagnosis']);
            $presentCondition= $_POST['presentCondition'];
            $drugsPrescribed = ($_POST['drugsPrescribed']);
            $dateDischarged = ($_POST['dateDischarged']);

                (new Register())->registerPatient($reportId,$date,$doctorInCharge,$surnameOfPatient,$otherNameOfPatient,$gender,$diagnosis,$presentCondition,$drugsPrescribed,$dateDischarged);
            }

        }
            // html data
            $data["title"] = "Register"; /* for <title></title> inside header.php in this case */
            // load views
            $this->View->render('home/register', $data);
    }

    public function report()
    {
      
            // html data
            $data["title"] = " Report"; /* for <title></title> inside header.php in this case */
            // load views
            $this->View->render('home/report', $data);
    }

    public function update()
    {

        if(isset($_POST['updateBtn'])){
            $reportId = ($_GET['reportId']);
            $doctorInCharge = ($_POST['doctorInCharge']);
            $surnameOfPatient = ($_POST['surnameOfPatient']);
            $otherNameOfPatient = ($_POST['otherNameOfPatient']);

            $gender = ($_POST['gender']);
            $diagnosis = ($_POST['diagnosis']);
            $presentCondition= $_POST['presentCondition'];
            $drugsPrescribed = ($_POST['drugsPrescribed']);
            $dateDischarged = ($_POST['dateDischarged']);
           

            if(empty($reportId)){
                $this->msg->error('Report ID is required.');
            }if(empty($doctorInCharge)){
                $this->msg->error('Doctor incharge is required.');
            }if(empty($otherNameOfPatient)){
                $this->msg->error('Patient other name is required.');
            }if(empty($surnameOfPatient)){
                $this->msg->error('Surname of patient is required.');
            }if(empty($gender)){
                $this->msg->error('Gender is required.');
            }if(empty($diagnosis)){
                $this->msg->error('Diagnosis is required.');
            }if(empty($presentCondition)){
                $this->msg->error('Present condition is required.');
            }if(empty($drugsPrescribed)){
                $this->msg->error('Drug prescribed is required.');
            }if(empty($dateDischarged)){
                $this->msg->error('Date discharged is required.');
            }

           

           
            if ($this->msg->hasErrors()){
                header('location:' . $_SERVER['HTTP_REFERER']);
                die();
            }else{
                
                (new Register())->updatePatient($reportId,$date,$doctorInCharge,$surnameOfPatient,$otherNameOfPatient,$gender,$diagnosis,$presentCondition,$drugsPrescribed,$dateDischarged);
            }


        }

        $data["title"] = "Update "; /* for <title></title> inside header.php in this case */
            // load views
            $this->View->render('home/update', $data);
    }

    public function record()
    {
        $data["title"] = "Record"; /* for <title></title> inside header.php in this case */
            // load views
            $this->View->render('home/updateUser', $data);
    }
   
}
