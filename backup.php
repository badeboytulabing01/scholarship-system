    <?php

class Myscholarhip{
     private $server = "mysql:host=localhost;dbname=db_scholarship";
     private $user = "root";
     private $pass = "";
     private $options = array(PDO::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => 
     PDO::FETCH_ASSOC);
    protected $con;
    //end of connection
    
    public function openConnection()
    {
        try{
            $this->con = new PDO($this->server, $this->user, $this->pass, $this->options);
            return $this->con;
        }catch(PDOException $e){
            echo "There is some problem in the connection:". $e->getMessage();
        }
        
    }
    //end of function openConnection
    
    public function closeConnection()
    {
        $this->con = null;
    }
    //end of function closeConnection
    
    public function getUsers()
    {
        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT * FROM tbl_studentinfo");
        $stmt -> execute();
        $users = $stmt->fetchAll();
        
        if($userCount >0){
            return $users;
        }else{
            return 0;
        }
    }
    //end of  function getUsers student

      public function getUsersadmin()
    {
        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT * FROM admininfo");
        $stmt -> execute();
        $users = $stmt->fetchAll();
        
        if($userCount >0){
            return $users;
        }else{
            return 0;
        }
    }
    //end of  function getUsers admin
public function set_userdata_admin($array)
    {
          if(!isset($_SESSION)){
            session_start();   
        }
        $_SESSION['admindata'] = array(
            "image" => $array['image'],
            "lname" => $array['lname'],
            "fname" => $array['fname'] ,
            "mname" => $array['mname'],  
            "email" => $array['email'], 
           "username" => $array['username'],
           "access" => $array['access'],
           "profilestatus" => $array['profilestatus'],
           
          
        );
        return $_SESSION['admindata'];
}
//end of function set_userdata for admin

public function get_admindata()
{
         if(!isset($_SESSION)){
           session_start();   
         }
         if(isset($_SESSION['admindata'])){
           return $_SESSION['admindata'];  
         }else{
           return null;
         }
  }
      //end of function get_user_data admin

   public function check_user_exist($userLog)
   {
        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT * FROM admininfo WHERE username = ?");
        $stmt -> execute([$userLog]);
        $total = $stmt ->rowCount();
        return $total;
  }
 //end of function check user existadmin

  public function addAdminuser()
{

    if(isset($_POST["AddUser"])){
        $lastname = $_POST["lastname"];
        $fname = $_POST["fname"];
        $mname = $_POST["mname"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $pass    = md5($_POST['pass']);
        

        $connection = $this->openConnection();
        $stmt = $connection->prepare("INSERT INTO admininfo(`lname`,`fname`,`mname`,`email`,`username`,`password`)
                   VALUES(?,?,?,?,?,?) "); 
          $stmt->execute([$lastname,$fname,$mname,$email,$username,$pass]);


           header("Location: alert.php");
        
      }
      
    }//end of add user

   public function adminlogin()
   {
    if(isset($_POST['admin']) ){ 
        $password = md5($_POST['password']);
        $userLog = $_POST['userLog']; 
  
        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT * FROM admininfo WHERE username = ? AND password = ? AND access='admin'");
        $stmt -> execute([$userLog, $password]);
        $user = $stmt->fetch(); 
        $total = $stmt->rowCount(); 

       if($total > 0){
        echo "Welcome".$user['username']; 
         $this->set_userdata_admin($user);
         header("Location: admin/admindashboard.php");
        }else{
          echo "<script language='javascript'>alert('You Are Not Yet Registered'); </script>";
        }              
    }
    
}

  public function full_scholar()
    {
      if(isset($_POST["fullscholar"])){
        $first = $_POST["first"];
        $second = $_POST["second"];
        $third = $_POST["third"];
        $Frequirements = $_POST["Frequirements"];
        $Srequirements = $_POST["Srequirements"];
        $Trequirements = $_POST["Trequirements"];
        $Forequirements = $_POST["Forequirements"];
        $Fifrequirements = $_POST["Fifrequirements"];
        $Sixfrequirements = $_POST["Sixfrequirements"];
        $Sevenrequirements = $_POST["Sevenrequirements"];
        $full = $_POST["full"];
        

        $connection = $this->openConnection();
        $stmt = $connection->prepare("INSERT INTO tbl_scholar(`first`,`second`,`third`,`Frequirements`,`Srequirements`,`Trequirements`,`Forequirements`,`Fifrequirements`,`Sixfrequirements`,`Sevenrequirements`,`status`)
                   VALUES(?,?,?,?,?,?,?,?,?,?,?) "); 
        $stmt->execute([$first,$second,$third,$Frequirements,$Srequirements,$Trequirements,$Forequirements,$Fifrequirements,$Sixfrequirements,$Sevenrequirements,$full]);
        header("Location: alertforappmanagement.php");
      }
    }

    //end of student full scholar
    public function semi_scholar()
    {
      if(isset($_POST["semischolar"])){
        $sfirst = $_POST["sfirst"];
        $ssecond = $_POST["ssecond"];
        $sthird = $_POST["sthird"];
        $sFrequirements = $_POST["sFrequirements"];
        $sSrequirements = $_POST["sSrequirements"];
        $sTrequirements = $_POST["sTrequirements"];
        $sForequirements = $_POST["sForequirements"];
        $sFifrequirements = $_POST["sFifrequirements"];
        $sSixfrequirements = $_POST["sSixfrequirements"];
        $sSevenrequirements = $_POST["sSevenrequirements"];
        $semi = $_POST["semi"];
        

        $connection = $this->openConnection();
        $stmt = $connection->prepare("INSERT INTO tbl_scholar(`first`,`second`,`third`,`Frequirements`,`Srequirements`,`Trequirements`,`Forequirements`,`Fifrequirements`,`Sixfrequirements`,`Sevenrequirements`,`status`)
                   VALUES(?,?,?,?,?,?,?,?,?,?,?) "); 
        $stmt->execute([$sfirst,$ssecond,$sthird,$sFrequirements,$sSrequirements,$sTrequirements,$sForequirements,$sFifrequirements,$sSixfrequirements,$sSevenrequirements,$semi]);
        header("Location: alertforappmanagement.php");
      }
    }
    /*end of student semi scholar*/
     public function annoucement()
    {
      if(isset($_POST["sannoucement"])){
        $sannoucement = $_POST["sannoucement"];
        $annou = $_POST["annou"];
        
        $connection = $this->openConnection();
        $stmt = $connection->prepare("INSERT INTO tbl_annoucement(`annoucement`,`announcestatus`)
                   VALUES(?,?) "); 
        $stmt->execute([$sannoucement,$annou]);
        header("Location: alertforappmanagement.php");
      }
    }
    /*end for annoucement*/
/*end of adminlogin*/

////////////////////////////////////////////////////end of admin///////////////////////////////////////////////////////////////

    public function studentlogin()
   {
    if(isset($_POST['submit']) ){ 
        $password = md5($_POST['password']);
        $userLog = $_POST['userLog']; 
  
        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT * FROM tbl_studentinfo WHERE username = ? AND password = ? AND access='student'");
        $stmt -> execute([$userLog, $password]);
        $user = $stmt->fetch(); 
        $total = $stmt->rowCount(); 

       if($total > 0){
        echo "Welcome".$user['username']; 
         $this->set_userdata($user);
         header("Location: student/dashboard.php");
        }else{
          echo "<script language='javascript'>alert('You Are Not Yet Registered'); </script>";
        }              
    }
    
}
/*end of studentlogin*/

public function set_userdata($array)
    {
     if(!isset($_SESSION)){
            session_start(); 
              }
        $_SESSION['userdata'] = array(
            "Lastname" => $array['lastname'],
            "Username" => $array['username'],
            "firstname" => $array['firstname'] ,
            "middlename" => $array['middlename'],  
            "age" => $array['age'], 
           "dateofbirth" => $array['dateofbirth'],
           "gender" => $array['gender'],
           "image" => $array['image'],
           "full_address" => $array['full_address'],
           "contact" => $array['contact'],
           "access" => $array['access'],
           


        );
        return $_SESSION['userdata'];
}
//end of function set_userdata student
 
  public function logout()
  {
       if(!isset($_SESSION)){
           session_start();   
       }
       $_SESSION['userdata'] = null;
       unset($_SESSION['userdata']);
      
}
 //end of function get_user_logout


public function get_userdata()
{
         if(!isset($_SESSION)){
           session_start();   
         }
         if(isset($_SESSION['userdata'])){
           return $_SESSION['userdata'];  
         }else{
           return null;
         }
  }
      //end of function get_user_data admin

   




    public function studentAdd()
{
  if (isset($_POST["addStudent"])) {
            if (isset($_POST["addStudent"])) {
            $name    = $_POST["name"];
            $firstname  = $_POST["firstname"];
            $middlename  = $_POST["middlename"];
            $age  = $_POST["age"];
            $dateapp  = $_POST["dateapp"];
            $gender  = $_POST["gender"];
            $address  = $_POST["address"];
            $contact  = $_POST["contact"];
            $citizenship  = $_POST["citizenship"];
            $email  = $_POST["email"];
            $pass     = md5($_POST['pass']);


            if ($_FILES["image"]["error"] === 4) {
                echo 
                "<script>alert('Image Does not Exist'); </script>";
            }
            else{
                $fileName = $_FILES["image"]["name"];
                $fileSize = $_FILES["image"]["size"];
                $tmpName  = $_FILES["image"]["tmp_name"];
        
                $validImageExtension = ['jpg','jpeg','png'];
                $imageExtension = explode('.', $fileName);
                $imageExtension = strtolower(end($imageExtension));
        
                if (!in_array($imageExtension, $validImageExtension)) {
                    echo 
                "<script>alert('invalid image Extension '); </script>";
                }
                else if($fileSize > 100000){
                    echo 
                "<script>alert('Image Size is to large'); </script>";
                }
        
                else{
                    $newImageName = uniqid();
                    $newImageName .= '.' . $imageExtension;
        
                    move_uploaded_file($tmpName, 'img/student_profile/' . $newImageName);
                    $connection = $this->openConnection();
                    $stmt = $connection->prepare("INSERT INTO tbl_studentinfo(`image`,`lastname`, `firstname`, `middlename`,`age`,`dateofbirth`,`gender`,`full_address`,`contact`,`citizenship`,`email`,`password`)
                    VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");
                    $stmt -> execute([$newImageName, $name, $firstname, $middlename, $age, $dateapp, $gender, $address, $contact, $citizenship, $email, $pass]);
                 
                 header("Location: alert.php");
                }
            }
        }
      }
    }
    //end of student add


public function signature()
{
  if (isset($_POST["addStudent"])) {
            if (isset($_POST["addStudent"])) {
            $name    = $_POST["name"];
            if ($_FILES["signature"]["error"] === 4) {
                echo 
                "<script>alert('Image Does not Exist'); </script>";
            }
            else{
                $fileName = $_FILES["signature"]["name"];
                $fileSize = $_FILES["signature"]["size"];
                $tmpName  = $_FILES["signature"]["tmp_name"];
        
                $validImageExtension = ['jpg','jpeg','png'];
                $imageExtension = explode('.', $fileName);
                $imageExtension = strtolower(end($imageExtension));
        
                if (!in_array($imageExtension, $validImageExtension)) {
                    echo 
                "<script>alert('invalid image Extension '); </script>";
                }
                else if($fileSize > 100000){
                    echo 
                "<script>alert('Image Size is to large'); </script>";
                }
        
                else{
                    $signatureimage = uniqid();
                    $signatureimage .= '.' . $imageExtension;
        
                    move_uploaded_file($tmpName, 'img/signature/' . $signatureimage);
                    $connection = $this->openConnection();
                    $stmt = $connection->prepare("INSERT INTO tbl_studentignature(`image`,`name`)
                    VALUES(?,?)");
                    $stmt -> execute([$signatureimage, $name]);
                }
            }
        }
      }
    }
    //end of student signature
public function fatherinfo()
    {
      if(isset($_POST["addStudent"])){
        $f_lname = $_POST["f_lname"];
        $f_fname = $_POST["f_fname"];
        $f_mname = $_POST["f_mname"];
        $f_age = $_POST["f_age"];
        $f_bday = $_POST["f_bday"];
        $f_gender = $_POST["f_gender"];
        $f_address = $_POST["f_address"];
        $f_cnumber = $_POST["f_cnumber"];
        $f_citizenship = $_POST["f_citizenship"];
        $f_email = $_POST["f_email"];
        $f_occ = $_POST["f_occ"];
        $f_income = $_POST["f_income"];

        $connection = $this->openConnection();
        $stmt = $connection->prepare("INSERT INTO father_background(`f_lname`,`f_fname`,`f_mname`,`f_age`,`f_date_of_birth`,`f_gender`,`f_address`,`f_contact_number`,`f_citizenship`,`f_email`,`f_occupation`,`f_monthy_income`)
                   VALUES(?,?,?,?,?,?,?,?,?,?,?,?) "); 
        $stmt->execute([$f_lname,$f_fname,$f_mname,$f_age,$f_bday,$f_gender,$f_address,$f_cnumber,$f_citizenship,$f_email,$f_occ,$f_income]);
        
      }
}
 //end of student father info

public function motherinfo()
    {
      if(isset($_POST["addStudent"])){
        $m_lname = $_POST["m_lname"];
        $m_fname = $_POST["m_fname"];
        $m_mname = $_POST["m_mname"];
        $m_age = $_POST["m_age"];
        $m_bday = $_POST["m_bday"];
        $m_gender = $_POST["m_gender"];
        $m_address = $_POST["m_address"];
        $m_cnumber = $_POST["m_cnumber"];
        $m_citizenship = $_POST["m_citizenship"];
        $m_email = $_POST["m_email"];
        $m_occ = $_POST["m_occ"];
        $m_income = $_POST["m_income"];

        $connection = $this->openConnection();
        $stmt = $connection->prepare("INSERT INTO mother_background(`m_lname`,`m_fname`,`m_mname`,`m_age`,`m_date_of_birth`,`m_gender`,`m_address`,`m_contact_number`,`m_citizenship`,`m_email`,`m_occupation`,`m_mothly_income`)
         VALUES(?,?,?,?,?,?,?,?,?,?,?,?)"); 
       $stmt->execute([$m_lname,$m_fname,$m_mname,$m_age,$m_bday,$m_gender,$m_address,$m_cnumber,$m_citizenship,$m_email,$m_occ,$m_income]);

      }
}
 //end of student father info



}//end of class
$scholarship = new Myscholarhip();
