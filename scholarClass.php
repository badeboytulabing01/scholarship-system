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
          "user_id" => $array['user_id'],
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
        $stmt = $connection->prepare("SELECT * FROM  tbl_student_info WHERE username = ? AND pass = ? AND access='student'");
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
            "student_id" => $array['student_id'],
            "s_lastname" => $array['s_lastname'],
            "s_first_name" => $array['s_first_name'],
            "s_middlename" => $array['s_middlename'] ,
            "middlename" => $array['middlename'],  
            "s_extname" => $array['s_extname'], 
           "s_bday" => $array['s_bday'],
           "s_pday" => $array['s_pday'],
           "s_sex" => $array['s_sex'],
           "status" => $array['status'],
           "s_civiStatus" => $array['s_civiStatus'],
           "s_province" => $array['s_province'],
           "access" => $array['access'],
           


        );
        return $_SESSION['userdata'];
}
//end of function set_userdata student
 
  public function logout()
  {
    session_start();
    unset($_SESSION['user_id']);
    session_unset();
    session_destroy();
    echo "Logging out .... Please Wait .....";
      
}
 //end of function get_user_logout

 
  public function student_logout()
  {
    session_start();
    unset($_SESSION['student_id']);
    session_unset();
    session_destroy();
    echo "Logging out .... Please Wait .....";
      
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
        $s_lastname = $_POST["s_lastname"];
        $s_firstname = $_POST["s_firstname"];
        $s_middle = $_POST["s_middle"];
        $ext_name = $_POST["ext_name"];
        $s_bday = $_POST["s_bday"];
        $s_pday = $_POST["s_pday"];
        $s_sex = $_POST["s_sex"];
        $s_cstatus = $_POST["s_cstatus"];
        $s_province = $_POST["s_province"];
        $s_street = $_POST["s_street"];
        $s_town = $_POST["s_town"];
        $s_district = $_POST["s_district"];
        $s_zipcode = $_POST["s_zipcode"];
        $s_mobile = $_POST["s_mobile"];
        $s_email = $_POST["s_email"];
        $s_citizin = $_POST["s_citizin"];
        $pass = md5($_POST['pass']);
        $s_type_scholar = $_POST["s_type_scholar"];
        

        $connection = $this->openConnection();
        $stmt = $connection->prepare("INSERT INTO tbl_student_info(`s_lastname`,`s_first_name`,`s_middlename`,`s_extname`,`s_bday`,`s_pday`,`s_sex`,`s_civiStatus`,`s_province`,`s_street`,`s_town`,`s_district`,`s_zipcode`,`s_mobile`,`s_email`,`s_citizin`,`pass`,`s_applicant_type`)
                   VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) "); 
        $stmt->execute([$s_lastname,$s_firstname,$s_middle,$ext_name,$s_bday,$s_pday,$s_sex,$s_cstatus,$s_province,$s_street,$s_town,$s_district,$s_zipcode,$s_mobile,$s_email,$s_citizin,$pass,$s_type_scholar]);
          header("Location: alert.php");
         
      }
}
    //end of student add



public function fatherinfo()
    {
      if(isset($_POST["addStudent"])){
        $fs_lastname = $_POST["fs_lastname"];
        $fs_firstname = $_POST["fs_firstname"];
        $fs_middle = $_POST["fs_middle"];
        $fs_ext_name = $_POST["fs_ext_name"];
        $fs_add = $_POST["fs_add"];
        $fs_highest = $_POST["fs_highest"];
        $fs_occ = $_POST["fs_occ"];


        
        $connection = $this->openConnection();
        $stmt = $connection->prepare("INSERT INTO tbl_father(`f_lastname`,`f_firstname`,`f_middle`,`f_ext_name`,`f_add`,`f_highest`,`f_occ`)
                   VALUES(?,?,?,?,?,?,?) "); 
        $stmt->execute([$fs_lastname,$fs_firstname,$fs_middle,$fs_ext_name,$fs_add,$fs_highest,$fs_occ]);
             header("Location: alert.php");
      }
}
 //end of student father info

public function motherinfo()
    {
      if(isset($_POST["addStudent"])){
       $ms_lastname = $_POST["ms_lastname"];
        $ms_firstname = $_POST["ms_firstname"];
        $ms_middle = $_POST["ms_middle"];
        $ms_ext_name = $_POST["ms_ext_name"];
        $ms_add = $_POST["ms_add"];
        $ms_highest = $_POST["ms_highest"];
        $ms_occ = $_POST["ms_occ"];


        
        $connection = $this->openConnection();
        $stmt = $connection->prepare("INSERT INTO tbl_mother(`m_lastname`,`m_firstname`,`m_middle`,`m_ext_name`,`m_add`,`m_highest`,`m_occ`)
                   VALUES(?,?,?,?,?,?,?) "); 
        $stmt->execute([$ms_lastname,$ms_firstname,$ms_middle,$ms_ext_name,$ms_add,$ms_highest,$ms_occ]);
           header("Location: alert.php");
      }
}
      public function legal_guardian()
    {
      if(isset($_POST["addStudent"])){
       $ls_lastname = $_POST["ls_lastname"];
        $ls_firstname = $_POST["ls_firstname"];
        $ls_middle = $_POST["ls_middle"];
        $ls_ext_name = $_POST["ls_ext_name"];
        $ls_add = $_POST["ls_add"];
        $ls_occ = $_POST["ls_occ"];
        $ls_siblings = $_POST["ls_siblings"];
        $ls_income = $_POST["ls_income"];
        $beneficiary = $_POST["beneficiary"];



        
        $connection = $this->openConnection();
        $stmt = $connection->prepare("INSERT INTO tbl_legal_guardian(`l_lastname`,`l_firstname`,`l_middle`,`l_ext_name`,`l_add`,`l_occ`,`l_siblings`,`l_income`,`l_beneficiary`)
                   VALUES(?,?,?,?,?,?,?,?,?)"); 
        $stmt->execute([$ls_lastname,$ls_firstname,$ls_middle,$ls_ext_name,$ls_add,$ls_occ,$ls_siblings,$ls_income,$beneficiary]);
            header("Location: alert.php");
      }

}
 //end of student leagal guardian

 public function academic()
    {
      if(isset($_POST["addStudent"])){
       $applicant_type = $_POST["applicant_type"];
        $stundent_lrn = $_POST["stundent_lrn"];
        $year = $_POST["year"];
        $schoolname = $_POST["schoolname"];
        $gwa = $_POST["gwa"];


        $connection = $this->openConnection();
        $stmt = $connection->prepare("INSERT INTO tbl_acdemic(`ap_type`,`lrn`,`year_level`,`school_name`,`gwa`)
                   VALUES(?,?,?,?,?)"); 
        $stmt->execute([$applicant_type,$stundent_lrn,$year,$schoolname,$gwa]);
             header("Location: alert.php");
      }


}/*end of academic*/

public function other_info()
    {
      if(isset($_POST["addStudent"])){
        $financial = $_POST["financial"];
        $type_scholar = $_POST["type_scholar"];
        $agency = $_POST["agency"];
        $indegenous = $_POST["indegenous"];
        $specify_member = $_POST["specify_member"];
        $solo_parent = $_POST["solo_parent"];
        $type_disability = $_POST["type_disability"];
        $please_specify = $_POST["please_specify"];



        $connection = $this->openConnection();
        $stmt = $connection->prepare("INSERT INTO tbl_other_info(`financial`,`type_of_scholar`,`agency`,`indigenous`,`specify_member`,`solo_parent`,`type_disability`,`please_specify`)
                   VALUES(?,?,?,?,?,?,?,?)"); 
        $stmt->execute([$financial,$type_scholar,$agency,$indegenous,$specify_member,$solo_parent,$type_disability,$please_specify]);
             header("Location: alert.php");
      }


}/*end of other_info*/

public function tobyto()
{
  if (isset($_POST["addStudent"])) {
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
                    $stmt = $connection->prepare("INSERT INTO tbl_two_by_two(`image`)
                    VALUES(?)");
                    $stmt -> execute([$newImageName]);
                 
                  header("Location: alert.php");
                }
            }
        }
    }    
    //end of student 2x2

    public function signature()
{
            if (isset($_POST["addStudent"])) {
            $iheard    = $_POST["iheard"];
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
                    $stmt = $connection->prepare("INSERT INTO  tbl_signature(`signature`,`iheard`)
                    VALUES(?,?)");
                    $stmt -> execute([$signatureimage, $iheard]);
                         header("Location: alert.php");
                }
            }
        }
    }
    //end of student signature


}//end of class
$scholarship = new Myscholarhip();
