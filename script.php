<?php
// Required if your environment does not handle autoloading
require_once 'vendor/autoload.php';

class ok {
public $dbuser,$dbpassword, $dbhost, $dbname, $conn, $query,$query1,$fn,$ln,$em,$un,$ph,$pass,$cpass,$bio,$img_path,$img_ext,$img_dir,$img_name,$img_tmpname,$client,$message,$process,$process1,$row,$to,$id,$vid,$pn,$purl,$sid,$token,$rpp,$nor,$nop,$page,$tpfr,$subject,$headers;

   function dbcon(){ 
    // $this->dbhost ="localhost";
    // $this->dbuser ="apexgrow_user";
    // $this->dbpassword ="liI1`*jznERO ggiw04kgek";
    // $this->dbname ="apexgrow_new";

    $this->dbhost ="localhost";
    $this->dbuser ="root";
    $this->dbpassword ="";
    $this->dbname ="banking";

    $this->conn = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpassword, $this->dbname );
      if (!$this->conn) {
        echo "Connection error: " . mysqli_connect_error();
      }
    }

   function register(){

    if (isset($_POST["process"])) {
        $this->fn = mysqli_real_escape_string($this->conn, trim($_POST['fn']));
        $this->ln = mysqli_real_escape_string($this->conn, trim($_POST['ln']));
        $this->em = mysqli_real_escape_string($this->conn, trim($_POST['em']));
        $this->un = mysqli_real_escape_string($this->conn, trim($_POST['un']));
        $address = mysqli_real_escape_string($this->conn, trim($_POST["address"]));
        $city = mysqli_real_escape_string($this->conn, trim($_POST['city']));
        $state = mysqli_real_escape_string($this->conn, trim($_POST['state']));
        $zip = mysqli_real_escape_string($this->conn, trim($_POST['zip']));
        $country = mysqli_real_escape_string($this->conn, trim($_POST['country']));
        $occupation = mysqli_real_escape_string($this->conn, trim($_POST['occupation']));
        // $dob = mysqli_real_escape_string($this->conn, trim($_POST['dob']));
        $acct_type = mysqli_real_escape_string($this->conn, trim($_POST['acct_type']));
        $this->ph = mysqli_real_escape_string($this->conn, trim($_POST['full_phone']));
        $this->pass = mysqli_real_escape_string($this->conn, trim($_POST['pass']));
        $confpass = mysqli_real_escape_string($this->conn, trim($_POST['con_pass']));
        $this->bio = rand(1000000000, 9999999999);
        // echo $this->un.'<br>'.$this->em.'<br>'.$this->ph;
        $this->query1 = "SELECT * FROM `customer` WHERE `customer_un` = '$this->un' || `customer_email` = '$this->em' || `customer_phone` = '$this->ph'";
        $this->process1 = mysqli_query($this->conn , $this->query1);
      if (mysqli_num_rows($this->process1) > 0) {
    echo ' <div class="alert alert-danger">   
      Username , email or phone has already be used by another user
      <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
         </div>
         <script>
         window.scrollTo(0, 800);
         </script>
         ';
   
  }elseif($this->pass != $confpass){

      echo ' <div class="alert alert-danger">   
      Password does not match
      <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
         </div>
         <script>
         window.scrollTo(0, 800);
         </script>
         ';
        
    }
  
    else{
      $sess = date("l jS \of F Y  h:i:s A");
      $this->query="INSERT INTO `customer` (`customer_un`, `customer_fn`, `customer_ln`, `customer_img`, `customer_num`, `customer_email`, `customer_phone`, `customer_pass`, `customer_date`,`last_session`, `address`, `city`, `state`, `zip`, `country`, `occupation`, `acct_type`) VALUES ('$this->un','$this->fn','$this->ln', '2.png','$this->bio','$this->em','$this->ph',sha1('$this->pass'),NOW(),'$sess','$address','$city','$state','$zip','$country','$occupation','$acct_type')";
      $this->process = mysqli_query($this->conn , $this->query);
      if ($this->process) {
              $email = new \SendGrid\Mail\Mail(); 
              $email->setFrom("noreply@ravennafin.com", "Ravennafin");
              $email->setSubject("Ravennafin Customer Registration");
              $email->addTo("$this->em" , $this->fn." ".$this->ln);
              $email->addContent("text/plain", "Welcome to Ravennafin");
              $email->addContent(
                  "text/html", '
                  <html>
                          <head>
                            <title> Credit Alert </title>
                          </head>
                          <body style="padding: 10px;  ">
                          <p>&nbsp; &nbsp;&nbsp;</p>
  
                        <p style="text-align: center;"><img alt="Ravennafin" src="https://ravennafin.com/images/logo.png" style="height:70px; width:64px" /></p>
  
                        <h1 style="text-align: center;" ><span style="font-family:Comic Sans MS, cursive"><strong>Ravennafin&nbsp;</strong></span></h1>
  
                        <h2><span style="font-family:Comic Sans MS, cursive"><strong>Dear customer,&nbsp;</strong></span></h2>
  
                        <p>
                          <span style="text-align: center;">
                          Welcome to Ravennafin, we provide the right financial services that will meet your financial challenges. We are inspired by integrity, experience, skills and motivated workforce to confront our challenges to deliver valuable financial services to our esteem customers. Bank with us and experience the difference. Our strong reputation is our most fundamental asset. We provide the right solutions to our customers. 
                          </span>
                        </p>
                        <p>
                          <span style="text-align: center;">
                            We give the right consumer services which meet our customers demands. We act with integrity because it’s the right thing to do for our customers, our shareholders, the industry and the larger community. Meet competent employees who will provide all your banking needs.
                          </span>
                        </p>
                        <p>
                          <span style="text-align: center;">
                            Banking with Ravennafin Limited will lead you to overcome all your financial constraints as we elevate our clients on financial ladder. Our customers’ sustainability in their businesses is our credo. Likewise, excellence in customer care and welfare of our customers are what we pursue.
                          </span> 
                        </p>
                        <div style="text-align:center">
                          <table border="1" cellpadding="1" cellspacing="1" style="width:100%">
                          <caption>Account details</caption>
                          <tbody>
                            <tr>
                              <td><strong>&nbsp; &nbsp;Account Number </strong></td>
                              <td>&nbsp; &nbsp;&nbsp;<strong>'.$this->bio.'</strong></td>
                            </tr>
                            <tr>
                            </tr>
                            <tr>
                              <td>&nbsp; &nbsp;<strong>Full name</strong></td>
                              <td>&nbsp; &nbsp;&nbsp;<strong>  '.$this->fn.''.$this->ln.'</strong></td>
                            </tr>
                            <tr>
                              <td>&nbsp; &nbsp;<strong>User name</strong></td>
                              <td>&nbsp; &nbsp;&nbsp;<strong>  '.$this->un.'</strong></td>
                            </tr>
                            <tr>
                              <td>&nbsp; &nbsp;<strong>Email</strong></td>
                              <td>&nbsp; &nbsp; &nbsp;<strong>'.$this->em.'</strong></td>
                            </tr>
  
                            <tr>
                              <td>&nbsp; &nbsp;<strong>Phone</strong></td>
                              <td>&nbsp; &nbsp; &nbsp;<strong>'.$this->ph.'</strong></td>
                            </tr>
  
                            <tr>
                              <td>&nbsp; &nbsp;<strong>Time </strong></td>
                              <td>&nbsp; &nbsp;&nbsp;<strong>'.date( "h : i : sa" ).'</strong></td>
                            </tr>
                            
                            <tr>
                              <td>&nbsp; &nbsp;<strong>Date </strong></td>
                              <td>&nbsp; &nbsp; &nbsp;<strong>'.date( "Y-m-d" ).'</strong></td>
                            </tr>
                          </tbody>
                        </table>
                        </div>
  
  
                        <p> This is an automated Transaction Alert Service . You are getting this email because a transaction just occured on your account that met the threshold you set .</p>
                        <p><strong>Please ensure you do&nbsp; not&nbsp; reveal your pin , Online banking password , responses from your token ( token generated numbers ) or fill card number ( PAN ) to anyone.&nbsp; Ravennafin Would not request these details from you at any time.</strong></p>
  
                        <p><strong>Kindly note that mails containing your full card number would not be delivered.</strong></p>
  
                        <p><strong>Also , do not open links , respond to suspicious calls, mails or letters requesting your bank details . Such messages are fraudulent and are not from Ravennafin.</strong></p>
  
                        <p><strong>For enquiries please contact us</strong></p>
  
                        <p><strong>official website : www.ravennafin.com</strong></p>
  
                        <p><strong>official email :info@ravennafin.com</strong></p>
  
                        <p>&nbsp;</p>
  
  
                        <hr>
                        The Information contained and transmitted by this E-MAIL is proprietary to Ravennafin and/or its Customer and is intended for use only by the individual or entity to which it is addressed, and may contain information that is privileged, confidential or exempt from a disclosure under applicable law.
                        If this is a forwarded message, the content of this E-MAIL may not have been sent with the authority of the Bank. Ravennafin shall not be liable for any mails sent without due authorisation or through unauthorised access.
                        If you are not the intended recipient, an agent of the intended recipient or a person responsible for delivering the information to the named recipient, you are notified that any use, distribution, transmission, printing, copying or dissemination of this information in any way or in any manner is strictly prohibited.
                        If you have received this communication in error, please delete this mail and notify us immediately at info@ravennafin.com .
                          </body> 
  
                        </html>
  
                          '
              );
              $sendgrid = new \SendGrid('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');
              try {
                  $response = $sendgrid->send($email);
                  // print $response->statusCode() . "\n";
  
                  // print_r($response->headers());
                 // print $response->body() . "\n";
                   session_start();
                $_SESSION['cname'] = $this->un;
  
                $_SESSION['cacn'] = $this->bio;
  
                 $_SESSION['cpn'] = $this->ph;   
                  //header("location: user");
        echo '
        <br>
      <div class="alert alert-success">Congratulations dear '.$this->fn.' '.$this->ln.',<br>
        your account creation process will be verified by our team of customer relations offices this process usually takes 24 hours of a working day after you will be informed.
        <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        </div>
        <script>
        window.scrollTo(0, 800);
        </script>
        '
        
          ;
              } catch (Exception $e) {
                  echo 'Caught exception: '. $e->getMessage() ."\n";
              }
  
      }else{
        echo "data base errors".mysqli_error($this->conn);
      }
    }
  
 
   

    }
  } 
  
  function ulogin(){
      if (isset($_POST['ulogin'])) {
        $this->un = mysqli_escape_string($this->conn,$_POST['username']);
        $this->pass = mysqli_escape_string($this->conn,$_POST['pass']);
       

        $this->query = "SELECT * FROM `customer` WHERE `customer_num`= '$this->un' AND `customer_pass` = SHA1('$this->pass')";
        $this->process = mysqli_query($this->conn , $this->query);


        if ($this->process) {
        $this->row = mysqli_fetch_assoc($this->process);
        if ( mysqli_num_rows($this->process) == 1 ) {
             if($this->row["signup"] == 'no'){
                 die('<div class=" alert alert-info "> Your account is awaiting confirmation by our customer service team. <br> <a href="index.php" class="btn btn-link" style="color: red">Continue</a> </div>');     
             }        
             if ($this->row["freeze"] == 'yes') {
                header("location: user/user_account_blocked.php ");
              }else{
                 session_start();

              $_SESSION['cname'] = $this->row["customer_un"];

              $_SESSION['cacn'] = $this->row["customer_num"];

               $_SESSION['cpn'] = $this->row["customer_phone"];

                
               header("location: user");
                
              }
            }else{

         echo '<div class=" alert alert-info"> 
         Incorrect username and password combination 
         <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
         </div>';    
       

            }

        }else{
            echo '<div class=" alert alert-info "> Database error </div>';
        }  

        }
     }
     function getlast(){
      $id = $_SESSION['cacn'];
      // run an update first
      $sess = date("l jS \of F Y  h:i:s A");
      $q = " SELECT * FROM `customer` WHERE `customer_num` = '$id' ";
      $pro = mysqli_query($this->conn , $q);
      if($pro){
        $row = mysqli_fetch_assoc($pro);
        echo $row["last_session"];
        $query = mysqli_query($this->conn, " UPDATE `customer` SET `last_session` = '$sess' WHERE `customer`.`customer_num` = '$id' ");
        //
        //echo $sess;  
      }
     }
  function genbal(){
    $this->id = $_SESSION['cacn'];
    $this->query = "SELECT * FROM `balance` WHERE `bal_acc` = '$this->id'";
    $this->process = mysqli_query($this->conn , $this->query);
    if (mysqli_num_rows($this->process) == 0) {
      $this->query1 = "INSERT INTO `balance` (`bal_acc`, `bal_alt`, `bal_amount`, `bal_date`) VALUES ('$this->id', 'no', '00000', CURRENT_TIMESTAMP)";
      $this->process1 = mysqli_query($this->conn , $this->query1);    
    }
  } 
  function genbal2(){
    $this->id = $_SESSION['cacn'];
    $this->query = "SELECT * FROM `balance` WHERE `bal_acc` = '$this->id'";
    $this->process = mysqli_query($this->conn , $this->query);
    $this->row = mysqli_fetch_assoc($this->process);
    $this->fn = $this->row["bal_amount"];
    echo number_format($this->fn);
  }

   function genbal3(){
    $this->id = $_SESSION['cacn'];
    $this->fn = $_SESSION['cname'];
    $this->query = "SELECT * FROM `balance` WHERE `bal_alt` = 'no' AND `bal_acc` = '$this->id'";
    $this->process = mysqli_query($this->conn , $this->query);
    if (mysqli_num_rows($this->process) == 1) {
      $this->query1 = " UPDATE `balance` SET `bal_alt` = 'yes' WHERE `balance`.`bal_acc` = '$this->id' ";
      $this->process1 = mysqli_query($this->conn , $this->query1);
      if ($this->process1) {
            echo '<div class="notification success closeable margin-bottom-30">
          <p>Congratulations '.$this->fn.'('.$_SESSION["cacn"].') your account has been full activate.<br> Welome to Ravennafin </p>
          <a class="close" href="#"></a>
        </div>';
          }     
    }
  }

  function pro(){
      $this->id = $_SESSION['cacn'];
    $this->query = "SELECT * FROM `balance` WHERE `bal_acc` = '$this->id'";
    $this->process = mysqli_query($this->conn , $this->query);
    $this->row = mysqli_fetch_assoc($this->process);
    $this->fn = $this->row["bal_amount"];
    echo '<div class="dashboard-stat color-1">
          <div class="dashboard-stat-content"><h4 style="animation:none;">'.$this->id.'</h4> <span>Acount Number</span><br>
            </div>
          <div class="dashboard-stat-icon"><i class="im im-icon-Coins"></i></div>
          
        </div>';
  }
function getin(){
  $this->id = $_SESSION['cname'];
  $this->query = "SELECT * FROM `customer` WHERE `customer_un` = '$this->id'";
    $this->process = mysqli_query($this->conn , $this->query);
    $this->row = mysqli_fetch_assoc($this->process);
    $this->fn = $this->row["customer_img"];
    echo '<img src="../upload/'.$this->fn.'" alt=""> ';
}

  function editimg(){
    $this->id = $_SESSION['cname'];
    
        if (isset($_POST["upload"])) {
         $this->img_name = $_FILES['img']['name'];
         $this->img_tmpname = $_FILES['img']['tmp_name'];
         $this->img_path = basename($this->img_name);
         $this->img_ext = pathinfo($this->img_path, PATHINFO_EXTENSION);
         $this->img_dir = '../upload/'.$this->img_path;
       
        if ($this->img_ext != "jpg" && $this->img_ext != "JPG" && $this->img_ext != "jpg" && $this->img_ext != "PNG") {
            echo '<div class="alert alert-info">
           Image is required<a href="profile.php"> continue</a>
                </div>';
                exit(); 
           }
        if (!file_exists($this->img_dir)) {
            move_uploaded_file( $this->img_tmpname, $this->img_dir);

            $this->query1 = "UPDATE `customer` SET `customer_img` = '$this->img_name' WHERE `customer`.`customer_un` = '$this->id'";
      $this->process1 = mysqli_query($this->conn , $this->query1);

            if ($this->process1) {
                echo '<div class="alert alert-info"> successful  </div>
                    <script>
                 var a = window.location.href ;
                 window.location.assign(a);
                </script>
             
                ';
            }
            }else{
                echo '<div class="alert alert-info">
            This image already exist <a href="profile.php"> continue</a>
                </div>';
                exit();
            }
        }
  }
  function selectpro() {
    $this->id = $_SESSION['cacn'];
    $this->ph = $_SESSION['cname'];
    $this->query = " SELECT * FROM `customer` WHERE `customer_un` = '$this->ph' AND `customer_num` = '$this->id'";
    $this->process = mysqli_query($this->conn , $this->query);
    $this->row = mysqli_fetch_assoc($this->process);
    echo ' 
        <div class="my-profile">
              <label>First Name</label>
              <input value="'.$this->row["customer_fn"].'" type="text" disabled>

              <label>Last Name</label>
              <input value="'.$this->row["customer_ln"].'" type="text" disabled>

              <label>User name</label>
              <input value="'.$this->row["customer_un"].'" type="text" disabled>

              <label>Phone</label>
              <input value="'.$this->row["customer_phone"].'" type="text" disabled>

              <label>Email</label>
              <input value="'.$this->row["customer_email"].'" type="text" disabled>
                  
              <label>Account number</label>
              <input value="'.$this->row["customer_num"].'" type="text" disabled>

              
          </div>
      '; 
  }

  function  changep(){
    $this->id = $_SESSION['cname'];
    if (isset($_POST['change'])) {

    $this->fn = mysqli_real_escape_string($this->conn, trim($_POST['pass1']));
    $this->ln = mysqli_real_escape_string($this->conn, trim($_POST['pass2']));
    $this->em = mysqli_real_escape_string($this->conn, trim($_POST['pass3']));
     $this->query = " SELECT * FROM `customer` WHERE `customer_un` = '$this->id' AND `customer_pass` = SHA1('$this->fn')";
     $this->process = mysqli_query($this->conn , $this->query);
     if (mysqli_num_rows($this->process) == 0) {
       echo '<div class="alert alert-info"><h4> password incorrect <a href="profile.php"> continue </a></h4></div>';
          exit();  
     }

      if($this->ln == $this->em) {
        $this->query1 = " UPDATE `customer` SET `customer_pass` = SHA1('$this->em') WHERE `customer`.`customer_un` = '$this->id' ";
      $this->process  = mysqli_query($this->conn , $this->query1);
      echo '<div class="alert alert-info"><h4> successful </h4></div>';
      }else{
         echo '<div class="alert alert-info"><h4>password don\'t match<a href="profile.php"> continue </a></h4></h4></div> ';
          exit(); 
      }
    }
            
  }

  function loopen(){
    $this->query = " SELECT * FROM `customer` ";
    $this->process = mysqli_query($this->conn , $this->query);
    while ($this->row = mysqli_fetch_assoc($this->process)) {
    echo'
    
  <tr style="color: blue;">
    <td>'.$this->row['customer_un'].'</td>
    <td>
      <img src="../../upload/'.$this->row['customer_img'].'" style="height: 100px; width: 100px;">
    </td>
    <td><a href="credit.php?acn='.$this->row['customer_num'].'&ph='.$this->row['customer_phone'].'&em='.$this->row['customer_email'].'" class="btn btn-info">Credit</a></td>
    
    <td><a href="debit.php?acn='.$this->row['customer_num'].'&ph='.$this->row['customer_phone'].'&em='.$this->row['customer_email'].'" class="btn btn-info">Debit</a></td>

      <td><a href="outbox.php?acn='.$this->row['customer_num'].'&ph='.$this->row['customer_phone'].'&em='.$this->row['customer_email'].'&un='.$this->row['customer_un'].'" class="btn btn-success">Message</a></td>
      
      <td><a href="'.($this->row["add_pre"] == 'yes' ? 'undopremium.php?id='.$this->row["customer_id"] : 'makepre.php?id='.$this->row["customer_id"]).'&em='.$this->row["customer_email"].'" class="btn btn-warning">'.($this->row["add_pre"] == 'yes' ? 'UNDO' : 'MAKE PREMIUM').'</a></td>
     
      <td> <a href="'.($this->row["freeze"] == 'yes' ? 'undofreeze.php?acn='.$this->row["customer_un"].'&em='.$this->row["customer_email"] : 'freezeuser.php?acn='.$this->row["customer_un"].'&em='.$this->row["customer_email"]).'" class="btn btn-danger">'.($this->row["freeze"] == 'yes' ? 'UNDO FREEZE' : 'MAKE FREEZE').'</a> </td> 

     <td>'.($this->row["signup"] == 'no' ? '<a href="account_verify.php?un='.$this->row["customer_un"].'&em='.$this->row["customer_email"].'&fn='.$this->row["customer_fn"].'&ln'.$this->row["customer_ln"].'" class="btn btn-success"> Verify account </a>' : '<a class="btn btn-info">Verified</a>').'</td>

    
    <td><a href="deleuser.php?acn='.$this->row['customer_num'].'" class="btn btn-danger">Delete</a></td>
  </tr>    
      ';
    }
  }

  function deleuser(){
    $this->id = $_GET['acn'];
    if ($this->id == " " ) {
      header('location : index.php');
      
    }
    $this->query = " DELETE FROM `customer` WHERE `customer`.`customer_num` =  '$this->id'";
      $this->process = mysqli_query($this->conn , $this->query);

      if ($this->process) {
        header('location: users.php');
      }
  }
 
  function credituser(){
    $this->id = $_GET['acn'];
    $this->ph = $_GET['ph'];
    $this->em = $_GET['em'];
 

    if (isset($_POST['cc'])) {
        $this->ln = mysqli_real_escape_string($this->conn, trim($_POST['amount']));
        $this->query = " SELECT * FROM `balance` WHERE `bal_acc`= '$this->id' ";
        $this->process = mysqli_query($this->conn ,$this->query);
        $this->row = mysqli_fetch_assoc($this->process);
        $this->pass = $this->row['bal_amount']; 
        $this->bio  = $this->ln + $this->pass;
 $this->query1 = "UPDATE `balance` SET `bal_amount`= '$this->bio'  WHERE `bal_acc`= '$this->id'";
      $this->process1 = mysqli_query($this->conn , $this->query1);

            if ($this->process1) {
                 
                $this->to = $this->em;
                $this->subject = "Credit alert confirmation";

 $email = new \SendGrid\Mail\Mail(); 
            $email->setFrom("noreply@ravennafin.com", "Ravennafin");
            $email->setSubject("Ravennafin Credit Alert ");
            $email->addTo("$this->to", " Cutomer ");
            $email->addContent("text/plain", "Welcome to Ravennafin");
            $email->addContent(
                "text/html", '
                             <html>
  <head>
    <title> Credit Alert </title>
  </head>
  <body style="padding: 10px;">
  <p>&nbsp; &nbsp;&nbsp;</p>

<p style="text-align: center;"><img alt="Ravennafin" src="https://ravennafin.com/images/logo.png" style="height:70px; width:64px" /></p>

<h1 style="     text-align: center;" ><span style="font-family:Comic Sans MS, cursive"><strong>Ravennafin&nbsp;</strong></span></h1>

<h2><span style="font-family:Comic Sans MS, cursive"><strong>Dear customer ,&nbsp;</strong></span></h2>

<p><span style="text-align: center;"  ><strong>&nbsp; &nbsp; &nbsp; Ravennafin CREDIT ALERT 
</strong><br><br>Please be informed that a credit transaction occurred on your bank account.
 kindly find details of transaction below:</span></p>

<div style="text-align:center">
  <table border="1" cellpadding="1" cellspacing="1" style="width:100%">
  <caption>transaction details</caption>
  <tbody>
    <tr>
      <td><strong>&nbsp; &nbsp;Account Number </strong></td>
      <td>&nbsp; &nbsp;&nbsp;<strong>'.$this->id.'</strong></td>
    </tr>
    <tr>
      <td>&nbsp; &nbsp;<strong>Amount Credit </strong></td>
      <td>&nbsp; &nbsp;&nbsp;<strong> USD'.$this->ln.'</strong></td>
    </tr><tr>
      <td>&nbsp; &nbsp;<strong>Previous Balance</strong></td>
      <td>&nbsp; &nbsp;&nbsp;<strong>  USD '.$this->pass.'</strong></td>
    </tr>
    <tr>
      <td>&nbsp; &nbsp;<strong>Account Balance</strong></td>
      <td>&nbsp; &nbsp; &nbsp;<strong> USD '.$this->bio.'</strong></td>
    </tr>
    <tr>
      <td>&nbsp; &nbsp;<strong>Time </strong></td>
      <td>&nbsp; &nbsp;&nbsp;<strong>'.date( "h : i : sa" ).'</strong></td>
    </tr>
    
    <tr>
      <td>&nbsp; &nbsp;<strong>Date </strong></td>
      <td>&nbsp; &nbsp; &nbsp;<strong>'.date( "Y-m-d" ).'</strong></td>
    </tr>
  </tbody>
</table>
</div>

<p>&nbsp; As a result of this transaction the balance on this account is : USD  '.$this->bio.' </p>
<p> This is an automated Transaction Alert Service . You are getting this email because a transaction just occured on your account that met the threshold you set .</p>
<p><strong>Please ensure you do&nbsp; not&nbsp; reveal your pin , Online banking password , responses from your token ( token generated numbers ) or fill card number ( PAN ) to anyone.&nbsp; Ravennafin Would not request these details from you at any time.</strong></p>

<p><strong>Kindly note that mails containing your full card number would not be delivered.</strong></p>

<p><strong>Also , do not open links , respond to suspicious calls, mails or letters requesting your bank details . Such messages are fraudulent and are not from Ravennafin.</strong></p>

<p><strong>For enquiries please contact us</strong></p>

<p><strong>official website : www.ravennafin.com</strong></p>

<p><strong>official email :info@ravennafin.com</strong></p>

<p>&nbsp;</p>

<hr>
The Information contained and transmitted by this E-MAIL is proprietary to Ravennafin and/or its Customer and is intended for use only by the individual or entity to which it is addressed, and may contain information that is privileged, confidential or exempt from a disclosure under applicable law.
If this is a forwarded message, the content of this E-MAIL may not have been sent with the authority of the Bank. Ravennafin shall not be liable for any mails sent without due authorisation or through unauthorised access.
If you are not the intended recipient, an agent of the intended recipient or a person responsible for delivering the information to the named recipient, you are notified that any use, distribution, transmission, printing, copying or dissemination of this information in any way or in any manner is strictly prohibited.
If you have received this communication in error, please delete this mail and notify us immediately at info@ravennafin.com.
  </body> 

</html>

            '
            );
            $sendgrid = new \SendGrid('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');
            try {
                $response = $sendgrid->send($email);
                echo '<div class="alert alert-info"> successful  </div>
                <script>
                 var a = window.location.href ;
                 window.location.assign(a);
                </script>
                ';
            } catch (Exception $e) {
                echo 'Caught exception: '. $e->getMessage() ."\n";
            }
 
       }
    }
  }

  function pullbal(){

    $this->id = $_GET['acn'];
    $this->ph = $_GET['ph'];
    $this->em = $_GET['em'];  

  $this->query = " SELECT * FROM `balance` WHERE `bal_acc`= '$this->id' ";
  $this->process = mysqli_query($this->conn ,$this->query);
  $this->row = mysqli_fetch_assoc($this->process);
  $this->pass = $this->row['bal_amount']; 
  echo $this->pass;

  }
 function luckpage(){
  $this->id = $_GET['acn'];
  if (empty($this->id)) {
    header('location:index.php');
    
  }
 }
 function dedituser(){
    $this->id = $_GET['acn'];
    $this->ph = $_GET['ph'];
    $this->em = $_GET['em'];
 

  if (isset($_POST['cc'])) {
    $this->ln = mysqli_real_escape_string($this->conn, trim($_POST['amount']));
    $this->query = " SELECT * FROM `balance` WHERE `bal_acc`= '$this->id' ";
    $this->process = mysqli_query($this->conn ,$this->query);
    $this->row = mysqli_fetch_assoc($this->process);
    $this->pass = $this->row['bal_amount']; 
    if ($this->pass < $this->ln) {
        echo  ' 
          <div class="alert alert-info">You don\'t have enough in your account balance <a href="users.php" class="btn btn-info"> continue </a></div>
           ';
           exit();
      }
  $this->bio  = $this->pass - $this->ln;
 $this->query1 = "UPDATE `balance` SET `bal_amount`= '$this->bio'  WHERE `bal_acc`= '$this->id'";
      $this->process1 = mysqli_query($this->conn , $this->query1);

            if ($this->process1) {
                $this->to = $this->em;
                $this->subject = "Debit  alert "; 
             $email = new \SendGrid\Mail\Mail(); 
            $email->setFrom("noreply@ravennafin.com", "Ravennafin");
            $email->setSubject("Ravennafin Credit Alert ");
            $email->addTo("$this->to", " Cutomer ");
            $email->addContent("text/plain", "Welcome to Ravennafin");
            $email->addContent(
                "text/html", '
            <html>
  <head>
    <title> Debit Alert </title>
  </head>
  <body style="padding: 10px;  ">
  <p>&nbsp; &nbsp;&nbsp;</p>

<p style="text-align: center;"><img alt="Ravennafin" src="https://ravennafin.com/images/logo.png" style="height:70px; width:64px" /></p>

<h1 style="text-align: center;" ><span style="font-family:Comic Sans MS, cursive"><strong>Ravennafin&nbsp;</strong></span></h1>

<h2><span style="font-family:Comic Sans MS, cursive"><strong>Dear customer ,&nbsp;</strong></span></h2>

<p><span style="text-align: center;"  ><strong>&nbsp; &nbsp; &nbsp; Ravennafin DEBIT ALERT 
</strong><br><br>Please be informed that a Debit transaction occurred on your bank account.
 kindly find details of transaction below:</span></p>

<div style="text-align:center">
  <table border="1" cellpadding="1" cellspacing="1" style="width:100%">
  <caption>transaction details</caption>
  <tbody>
    <tr>
      <td><strong>&nbsp; &nbsp;Account Number </strong></td>
      <td>&nbsp; &nbsp;&nbsp;<strong>'.$this->id.'</strong></td>
    </tr>
    <tr>
      <td>&nbsp; &nbsp;<strong>Amount Debit </strong></td>
      <td>&nbsp; &nbsp;&nbsp;<strong> USD'.$this->ln.'</strong></td>
    </tr><tr>
      <td>&nbsp; &nbsp;<strong>Previous Balance</strong></td>
      <td>&nbsp; &nbsp;&nbsp;<strong>  USD '.$this->pass.'</strong></td>
    </tr>
    <tr>
      <td>&nbsp; &nbsp;<strong>Account Balance</strong></td>
      <td>&nbsp; &nbsp; &nbsp;<strong> USD '.$this->bio.'</strong></td>
    </tr>
    <tr>
      <td>&nbsp; &nbsp;<strong>Time </strong></td>
      <td>&nbsp; &nbsp;&nbsp;<strong>'.date( "h : i : sa" ).'</strong></td>
    </tr>
    
    <tr>
      <td>&nbsp; &nbsp;<strong>Date </strong></td>
      <td>&nbsp; &nbsp; &nbsp;<strong>'.date( "Y-m-d" ).'</strong></td>
    </tr>
  </tbody>
</table>
</div>


<p>&nbsp; As a result of this transaction the balance on this account is : USD  '.$this->bio.' </p>
<p> This is an automated Transaction Alert Service . You are getting this email because a transaction just occured on your account that met the threshold you set .</p>
<p><strong>Please ensure you do&nbsp; not&nbsp; reveal your pin , Online banking password , responses from your token ( token generated numbers ) or fill card number ( PAN ) to anyone.&nbsp; Ravennafin Would not request these details from you at any time.</strong></p>

<p><strong>Kindly note that mails containing your full card number would not be delivered.</strong></p>

<p><strong>Also , do not open links , respond to suspicious calls, mails or letters requesting your bank details . Such messages are fraudulent and are not from Ravennafin.</strong></p>

<p><strong>For enquiries please contact us</strong></p>

<p><strong>official website : www.ravennafin.com</strong></p>

<p><strong>official email :info@ravennafin.com</strong></p>

<p>&nbsp;</p>


<hr>
The Information contained and transmitted by this E-MAIL is proprietary to Ravennafin and/or its Customer and is intended for use only by the individual or entity to which it is addressed, and may contain information that is privileged, confidential or exempt from a disclosure under applicable law.
If this is a forwarded message, the content of this E-MAIL may not have been sent with the authority of the Bank. Ravennafin shall not be liable for any mails sent without due authorisation or through unauthorised access.
If you are not the intended recipient, an agent of the intended recipient or a person responsible for delivering the information to the named recipient, you are notified that any use, distribution, transmission, printing, copying or dissemination of this information in any way or in any manner is strictly prohibited.
If you have received this communication in error, please delete this mail and notify us immediately at info@ravennafin.com.
  </body> 

</html>

            '
            );
            $sendgrid = new \SendGrid('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');
            try {
                $response = $sendgrid->send($email);
                 echo '<div class="alert alert-info"> successful  </div>
                <script>
                 var a = window.location.href ;
                 window.location.assign(a);
                </script>
                ';
            } catch (Exception $e) {
                echo 'Caught exception: '. $e->getMessage() ."\n";
            }
     
     }
    }
  }

 function pullproim(){
  $this->id = $_SESSION['cacn'];
  $this->query = " SELECT * FROM `customer` WHERE `customer_num` = '$this->id'";
  $this->process = mysqli_query($this->conn , $this->query);
  $this->row = mysqli_fetch_assoc($this->process);
  $this->ln = $this->row['customer_img'];
  echo $this->ln;

 }

 function transdata(){
  $this->id = $_SESSION['cacn'];
   $this->query = " SELECT * FROM `balance` WHERE `bal_acc`= '$this->id' ";
  $this->process = mysqli_query($this->conn ,$this->query);
  $this->row = mysqli_fetch_assoc($this->process);
  $this->pass = $this->row['bal_amount']; 
    echo '
        <input type="text" class="input-text "   value="'.$this->row['bal_amount'].'" disabled />
        <input type="hidden" class="input-text " name="ba"  value="'.$this->row['bal_amount'].'"  />
';
  } 
function intertransfer(){
  $this->id = $_SESSION['cacn'];
  if (isset($_POST['login'])) {
  $this->ln = mysqli_real_escape_string($this->conn, trim($_POST['rn']));
  $this->un = mysqli_real_escape_string($this->conn, trim($_POST['at']));
  $this->bio = mysqli_real_escape_string($this->conn, trim($_POST['ba']));
  
  $this->query = " SELECT * FROM `balance` WHERE `bal_acc`= '$this->ln' ";

  $this->process = mysqli_query($this->conn ,$this->query);
  $this->row = mysqli_num_rows($this->process);
 if ($this->id == $this->ln ) {
    echo'
        <script>
                 window.location.assign("transfer-error.php");
        </script>';
  }elseif($this->bio < $this->un){
    header('location:transfer-error1.php');
  }elseif($this->row  == ' '){
    header('location:transfer-error2.php');

  }else{
    header('location:transfer.php?rn='.$this->ln.'&sn='.$this->id.'&am='.$this->un);
  }
  
}
   }


   function  tranerror(){
   if (empty($_GET['id'])) {
     header('index.php');
    }
   }

   function error(){  
      echo '
        Dear customer the account number of the reciever is your account number <br> we wish to inform you that 
      You can\'t transfer money to yourself ';

  }
   function error1(){
      echo 'Sorry you don\'t have enough money in your account to make this transfer  <br>
      ';
   }
   function error2(){
      echo '
          Sorry the recipiant account number is invalids.<br>
      ';
   }

   function even(){
  $this->ln = $_GET['rn'];
  $this->id = $_GET['sn'];
  $this->un = $_GET['am'];
  if (empty($this->ln) || empty($this->id) || empty($this->un)) {
    header('location:index.php');

    }
  
   }
   function even1(){
  $this->ln = $_GET['rn'];
  $this->id = $_GET['sn'];
  $this->un = $_GET['am'];
   echo 'Confirm your attempt to transfer $'.$this->un.' to '.$this->ln; 
   }
   function even2(){

  $this->ln = $_GET['rn'];
  $this->id = $_GET['sn'];
  $this->un = $_GET['am'];
  echo '
      <input type="hidden" value="'.$this->id.'" name="sender"/>
      
        <input type="hidden" value="'.$this->ln.'" name="reciver"/>
      
        <input type="hidden" value="'.$this->un.'" name="amount"/>

      ';
   }
   
   function even3(){

    if (isset($_POST['send'])) {
       
    $this->fn = mysqli_real_escape_string($this->conn, trim($_POST['sender']));
    $this->ln = mysqli_real_escape_string($this->conn, trim($_POST['reciver']));
    $this->em = mysqli_real_escape_string($this->conn, trim($_POST['amount']));

    $this->query = "SELECT * FROM `balance` INNER JOIN `customer` ON `balance`.`bal_acc`= `customer`.`customer_num` WHERE `bal_acc` = '$this->fn'";
    $this->process = mysqli_query($this->conn , $this->query);
    $this->row = mysqli_fetch_assoc($this->process);
    $this->ph = $this->row['bal_amount'];
    $this->to = $this->row['customer_email'];
   
    $this->bio = $this->ph - $this->em ;
    $this->query1 = "UPDATE `balance` SET `bal_amount`= '$this->bio'  WHERE `bal_acc`= '$this->fn'";
      $this->process1 = mysqli_query($this->conn , $this->query1);
     if ($this->process1) {
       
       
       echo 'done it';
    
//      $this->subject = "Debit  alert ";

// $this->message = '

        
        
        

// <html>
//   <head>
//     <title> Debit Alert </title>
//   </head>
//   <body style="padding: 10px; border: 5px double #09d0d6; ">
//   <p>&nbsp; &nbsp;&nbsp;</p>

// <p style="text-align: center;"><img alt="RavennafinLOankk src="https://ravennafin.com/images/logo.png" style="height:70px; width:64px" /></p>

// <h1 style="     text-align: center;" ><span style="font-family:Comic Sans MS, cursive"><strong>Ravennafin Bankk&nbsp;</strong></span></h1>

// <h2><span style="font-family:Comic Sans MS, cursive"><strong>Dear customer ,&nbsp;</strong></span></h2>

// <p><span><strong>&nbsp; &nbsp; &nbsp; Ravennafin Bankk Debit Alert  as a result of transfer transaction
// </strong>Please be informed that a debit transaction occurred on your bank account.
//  kindly find details of transaction below:</span></p>
// <div style="text-align:center">
// 	<table border="1" cellpadding="1" cellspacing="1" style="width:500px">
// 	<caption>transaction details</caption>
// 	<tbody>
// 		<tr>
// 			<td><strong>&nbsp; &nbsp; Sender Account Number </strong></td>
// 			<td>&nbsp; &nbsp;&nbsp;<strong>'.$this->fn.'</strong></td>
// 		</tr>
		
// 		<tr>
// 			<td><strong>&nbsp; &nbsp; Receiver Account Number </strong></td>
// 			<td>&nbsp; &nbsp;&nbsp;<strong>'.$this->ln.'</strong></td>
// 		</tr>
// 		<tr>
// 			<td>&nbsp; &nbsp;<strong>Amount Debited </strong></td>
// 			<td>&nbsp; &nbsp;&nbsp;<strong> USD'.$this->em.'</strong></td>
// 		</tr><tr>
// 			<td>&nbsp; &nbsp;<strong>Previous Balance</strong></td>
// 			<td>&nbsp; &nbsp;&nbsp;<strong>  USD '.$this->ph.'</strong></td>
// 		</tr>
// 		<tr>
// 			<td>&nbsp; &nbsp;<strong> Final Account Balance</strong></td>
// 			<td>&nbsp; &nbsp; &nbsp;<strong> USD '.$this->bio.'</strong></td>
// 		</tr>
// 		<tr>
// 			<td>&nbsp; &nbsp;<strong>Time </strong></td>
// 			<td>&nbsp; &nbsp;&nbsp;<strong>'.date( "h : i : sa" ).'</strong></td>
// 		</tr>
		
// 		<tr>
// 			<td>&nbsp; &nbsp;<strong>Date </strong></td>
// 			<td>&nbsp; &nbsp; &nbsp;<strong>'.date( "Y-m-d" ).'</strong></td>
// 		</tr>
// 	</tbody>
// </table>
// </div>



// <p>&nbsp; As a result of this transfer transaction the balance on this account is : USD  '.$this->bio.' </p>
// <p> This is an automated Transaction Alert Service . You are getting this email because a transaction just occured on your account that met the theshold you set .</p>
// <p><strong>Please ensure you do&nbsp; not&nbsp; reveal your pin , Online banking password , responses from your token ( token generated numbers ) or fill card number ( PAN ) to anyone.&nbsp; Ravennafin Bankk Would not request these details from you at any time.</strong></p>

// <p><strong>Kindly note that mails containing your full card number would not be delivered.</strong></p>

// <p><strong>Also , do not open links , respond to suspicious calls, mails or letters requesting your bank details . Such messages are fraudulent and are not from Ravennafin Bankk.</strong></p>

// <p><strong>For enquiries please contact us</strong></p>

// <p><strong>official website : www.spring-heritagebank.com</strong></p>

// <p><strong>official email :info@spring-heritagebank.com</strong></p>

// <p>&nbsp;</p>

//   </body> 

// </html>





//   ';

// // Always set content-type when sending HTML email
// $this->headers = "MIME-Version: 1.0" . "\r\n";
// $this->headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// // More headers
// $this->headers .= 'From: Ravennafin Bankk<info@spring-heritagebank.com>' ;


// mail($this->to,$this->subject,$this->message,$this->headers);

    
          
       
       
       
   echo ' Cash has been removed from senders account <br>';
      
      } else{
        echo 'okini';
      } 
     }
   }
   function even4(){
    if (isset($_POST['send'])) {
       $who = $_SESSION["cname"];
    $this->fn = mysqli_real_escape_string($this->conn, trim($_POST['sender']));
    $this->ln = mysqli_real_escape_string($this->conn, trim($_POST['reciver']));
    $this->em = mysqli_real_escape_string($this->conn, trim($_POST['amount']));
     $hash = rand(10000000,19999999); 
    $this->query = " SELECT * FROM `balance` INNER JOIN `customer` ON `balance`.`bal_acc`= `customer`.`customer_num` WHERE `bal_acc` = '$this->ln'";
    $this->process = mysqli_query($this->conn , $this->query);
    $this->row = mysqli_fetch_assoc($this->process);
    $namea = $this->row["customer_fn"] ." ".$this->row["customer_ln"]; 
    $sql =  mysqli_query($this->conn , " INSERT INTO `transact` (`bank`, `who`, `complete`, `acc_name`, `acc_num`, `hash`,`amount`, `time`) VALUES ('same', '$who', 'yes', '$namea', '$this->ln', '$hash','$this->em', NOW()) ");
    if (!$sql) {
      echo mysqli_error($this->conn);
    }

    $this->to = $this->row['customer_email'];
    $this->ph = $this->row['bal_amount'];
    $this->bio = $this->ph + $this->em ;
    $this->query1 = "UPDATE `balance` SET `bal_amount`= '$this->bio'  WHERE `bal_acc`= '$this->ln'";
      $this->process1 = mysqli_query($this->conn , $this->query1);
     if ($this->process1) {
                  $this->subject = "Crebit  alert ";
            $email = new \SendGrid\Mail\Mail(); 
            $email->setFrom("noreply@ravennafin.com", "Ravennafin");
            $email->setSubject(" Credit alert from transfer.");
            $email->addTo($this->to,$this->fn." ".$this->ln);
            $email->addContent("text/plain", "Welcome to Ravennafin");
            $email->addContent(
                "text/html", '<html>
              <head>
                <title> Crebit Alert </title>
              </head>
              <body style="padding: 10px; border: 5px double #09d0d6; ">
              <p>&nbsp; &nbsp;&nbsp;</p>

            <p style="text-align: center;"><img alt="Ravennafin" src="https://ravennafin.com/images/logo.png" style="height:70px; width:64px" /></p>

            <h1 style=" text-align: center;" ><span style="font-family:Comic Sans MS, cursive"><strong>Ravennafin&nbsp;</strong></span></h1>

            <h2><span style="font-family:Comic Sans MS, cursive"><strong>Dear customer ,&nbsp;</strong></span></h2>

            <p><span><strong>&nbsp; &nbsp; &nbsp; Ravennafin Credit Alert  as a result of transfer transaction
            </strong> Please be informed that a credit transaction occurred on your bank account.
             kindly find details of transaction below:</span></p>
            <div style="text-align:center">
              <table border="1" cellpadding="1" cellspacing="1" style="width:500px">
              <caption>transaction details</caption>
              <tbody>
                <tr>
                  <td><strong>&nbsp; &nbsp; Sender Account Number </strong></td>
                  <td>&nbsp; &nbsp;&nbsp;<strong>'.$this->fn.'</strong></td>
                </tr>
                
                <tr>
                  <td><strong>&nbsp; &nbsp; Receiver Account Number </strong></td>
                  <td>&nbsp; &nbsp;&nbsp;<strong>'.$this->ln.'</strong></td>
                </tr>
                <tr>
                  <td>&nbsp; &nbsp;<strong>Amount Credited </strong></td>
                  <td>&nbsp; &nbsp;&nbsp;<strong> USD'.$this->em.'</strong></td>
                </tr><tr>
                  <td>&nbsp; &nbsp;<strong>Previous Balance</strong></td>
                  <td>&nbsp; &nbsp;&nbsp;<strong>  USD '.$this->ph.'</strong></td>
                </tr>
                <tr>
                  <td>&nbsp; &nbsp;<strong> Final Account Balance</strong></td>
                  <td>&nbsp; &nbsp; &nbsp;<strong> USD '.$this->bio.'</strong></td>
                </tr>
                <tr>
                  <td>&nbsp; &nbsp;<strong>Time </strong></td>
                  <td>&nbsp; &nbsp;&nbsp;<strong>'.date( "h : i : sa" ).'</strong></td>
                </tr>
                
                <tr>
                  <td>&nbsp; &nbsp;<strong>Date </strong></td>
                  <td>&nbsp; &nbsp; &nbsp;<strong>'.date( "Y-m-d" ).'</strong></td>
                </tr>
              </tbody>
            </table>
            </div>



            <p>&nbsp; As a result of this transfer transaction the balance on this account is : USD  '.$this->bio.' </p>
            <p> This is an automated Transaction Alert Service . You are getting this email because a transaction just occured on your account that met the theshold you set .</p>
            <p><strong>Please ensure you do&nbsp; not&nbsp; reveal your pin , Online banking password , responses from your token ( token generated numbers ) or fill card number ( PAN ) to anyone.&nbsp; Ravennafin Would not request these details from you at any time.</strong></p>

            <p><strong>Kindly note that mails containing your full card number would not be delivered.</strong></p>

            <p><strong>Also , do not open links , respond to suspicious calls, mails or letters requesting your bank details . Such messages are fraudulent and are not from Ravennafin.</strong></p>

            <p><strong>For enquiries please contact us</strong></p>

            <p><strong>official website : www.ravennafin.com</strong></p>

            <p><strong>official email :info@ravennafin.com</strong></p>

            <p>&nbsp;</p>

              </body> 

            </html>'
            );
            $sendgrid = new \SendGrid('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');
            try {
                $response = $sendgrid->send($email);
           
                echo '
        <script>
                 window.location.assign("transaction.php");
        </script>
        ';    
          } catch (Exception $e) {
                echo 'Caught exception: '. $e->getMessage() ."\n";
         }
      }  
     }
   }
   function mess(){
    $this->id = $_SESSION['cname'];
    $this->query = " SELECT * FROM `messages` WHERE `messs_to` = '$this->id' "; 
    $this->process = mysqli_query($this->conn , $this->query);
    if (mysqli_num_rows($this->process) == 0 ) {
      $this->query1 = " INSERT INTO `messages` (`messs_to`, `mess_from`, `view`, `mess_cont`, `mess_date`) VALUES ('$this->id', 'Customer Service', 'no', 'Hello dear,<br> Customer you are welcome to Ravennafin for any complains contact us with our customer service chat platform .', NOW()) ";
    $this->process1 = mysqli_query($this->conn , $this->query1);
    
    }

   }
function luckmess(){
  $this->un = $_GET['un'];
  $this->fn = $_GET['acn'];
  $this->ph = $_GET['ph'];
  $this->em = $_GET['em'];
   if (empty($this->un) || empty($this->fn) || empty($this->ph) || empty($this->em)) {
     header('location: index.php');
   }
}

function outbox(){
  
  $this->un = $_GET['un'];
  $this->fn = $_GET['acn'];
  $this->ph = $_GET['ph'];
  $this->em = $_GET['em'];
  if (isset($_POST['bio'])) {


  $this->fn = mysqli_real_escape_string($this->conn, trim($_POST['bio']));

    $this->query1 = " INSERT INTO `messages` (`messs_to`, `mess_from`, `view`, `mess_cont`, `mess_date`) VALUES ('$this->un', 'Customer Service', 'no','$this->fn', NOW()) ";
    $this->process1 = mysqli_query($this->conn , $this->query1);
    if ($this->process1) {
      echo '<div class=" alert alert-info"> successful </div>';
    }
  }
}
function pulluser(){
  $this->id = $_SESSION['cname'];
   $this->query = " SELECT * FROM `messages` WHERE `messs_to` = '$this->id' AND `view` = 'no' ORDER BY `mess_date` ASC "; 
    $this->process = mysqli_query($this->conn , $this->query);
    while ($this->row = mysqli_fetch_assoc($this->process)) {
      echo '

      <li class="unread">
                <a href="dashboard-messages-conversation.php?id='.$this->row['mess_id'].'">
                  <div class="message-avatar"><img src="images/happy-client-01.jpg" alt="" /></div>

                  <div class="message-by">
                    <div class="message-by-headline">
                      <h5>'.$this->row['mess_from'].'<i>Unread</i></h5>
                      <span>'.$this->row['mess_date'].'</span>
                    </div>
                    <p>'.$this->row['mess_cont'].'</p>
                  </div>
                </a>
              </li>


      ';
    }
}
 
function pull(){
  $this->id = $_SESSION['cname'];
   $this->query = " SELECT * FROM `messages` WHERE `messs_to` = '$this->id' || `mess_from` = '$this->id' ORDER BY `mess_date` ASC "; 
    $this->process = mysqli_query($this->conn , $this->query);
    while ($this->row = mysqli_fetch_assoc($this->process)) {
      echo '

              <div class="message-bubble">
                <div class="message-text"><p><div class="message-bubble">
                <div class="message-text"><p>
                From : '.$this->row['mess_from'].'<br>
                TO :   '.$this->row['messs_to'].'<br>
                Time : '.$this->row['mess_date'].'<br> 
                '.$this->row['mess_cont'].'
                </p></div>
              </div></p></div>
              </div>
      ';
    }
  }

 function getting(){
  $this->id = $_SESSION['cname'];
  if (isset($_POST['message'])) {

    $this->fn = mysqli_real_escape_string($this->conn, trim($_POST['send']));
     $this->query1 = " INSERT INTO `messages` (`messs_to`, `mess_from`, `view`, `mess_cont`, `mess_date`) VALUES ('Customer Service', '$this->id', 'no','$this->fn', NOW()) ";
    $this->process1 = mysqli_query($this->conn , $this->query1);
    if ($this->process1) {
      echo'<div class="alert alert-info">successful </div> 
<script>
                 var a = window.location.href ;
                 window.location.assign(a);
                </script>
      ';

    }
  }
 }

 function count(){
   $this->id = $_SESSION['cname'];
   $this->query = " SELECT * FROM `messages` WHERE `messs_to` = '$this->id' AND `view` = 'no' ORDER BY `mess_date` ASC "; 
    $this->process = mysqli_query($this->conn , $this->query);
    $this->row = mysqli_num_rows($this->process);
    echo $this->row ;
 }
 function recounted(){
  $this->id = $_GET['id'];
  
    $this->query1 = "UPDATE `messages` SET `view`= 'yes'  WHERE `mess_id` = '$this->id'";
      $this->process1 = mysqli_query($this->conn , $this->query1);
 }

 function adminmess(){
  $this->query = " SELECT * FROM `messages` WHERE `messs_to` = 'Customer Service' AND `view` = 'no' ORDER BY `mess_date` DESC "; 
    $this->process = mysqli_query($this->conn , $this->query);
    $this->bio = mysqli_num_rows($this->process);
    if ($this->bio == 0 ) {
      echo '<div class="well" style="color: black;">
      <h1>Sorry No messages avilable</h1>
      <br><br>
    </div>
  <br> <br>';
    }else{
      while ($this->row = mysqli_fetch_assoc($this->process)) {
      $this->ph = $this->row['mess_from'];
      $this->query1 = " SELECT * FROM `customer` WHERE `customer_un` = '$this->ph'";
      $this->process1 = mysqli_query($this->conn, $this->query1);
      $this->pass = mysqli_fetch_assoc($this->process1); 
    echo '
      <div class="well" style="color: black;">
      From : '.$this->row['mess_from'].'<br>
      Date : '.$this->row['mess_date'].'<br>
      <br><br>
      '.$this->row['mess_cont'].'
      <br><br>
      <a href="adminconfirm.php?id='.$this->row['mess_id'].'" class="btn btn-success"> Confirm </a>
      <a href="outbox.php?acn='.$this->pass['customer_num'].'&ph='.$this->pass['customer_phone'].'&em='.$this->pass['customer_email'].'&un='.$this->pass['customer_un'].'" class="btn btn-success">Message</a>
    </div>
  <br> <br>


    ';
       }   
    }   
 }
 function adminconfirm(){
  $this->id = $_GET['id'];
  if (empty($this->id)) {
   echo '
    <script>
                 var a = "message.php";
                 window.location.assign(a);
                </script>
 
      ';
  }

   $this->query1 = "UPDATE `messages` SET `view`= 'yes'  WHERE `mess_id` = '$this->id'";
      $this->process1 = mysqli_query($this->conn , $this->query1);
    if ($this->process1) {
      echo '
        <script>
                 var a = "message.php";
                 window.location.assign(a);
                </script>
      ' ;
    }
   }
   function selnumad(){
     $this->query = " SELECT * FROM `messages` WHERE `messs_to` = 'Customer Service' AND `view` = 'no' ORDER BY `mess_date` DESC "; 
    $this->process = mysqli_query($this->conn , $this->query);
    $this->bio = mysqli_num_rows($this->process);
 echo $this->bio;   
   }

   function trasord(){
    if (isset($_POST["transferto"])) {
          $who  = $_SESSION["cname"];
          $bank = mysqli_real_escape_string($this->conn, trim($_POST['bank']));
          $acnn = mysqli_real_escape_string($this->conn, trim($_POST['acnn']));
          $accn= mysqli_real_escape_string($this->conn, trim($_POST['accn']));
          $amount = mysqli_real_escape_string($this->conn, trim($_POST['amount']));
          $hash = rand(10000000,19999999); 

          $sql = mysqli_query($this->conn , " INSERT INTO `transact` (`bank`, `who`, `complete`, `acc_name`, `acc_num`, `hash`,`amount`, `time`) VALUES ('$bank', '$who', 'pro', '$acnn', '$accn', '$hash', '$amount', NOW()) ");
          if ($sql) {
            $xql = mysqli_query($this->conn , " SELECT * FROM `transact` WHERE `who` = '$who' ORDER BY `tran_id` DESC LIMIT 1");
            if ($row = mysqli_fetch_assoc($xql)) {
              echo '<script>
              var a = "transfer-fail.php?id='.$row["hash"].'&who='.$row["who"].'&to='.$row["acc_num"].'&am='.$row["amount"].'";
              window.location.assign(a);
             </script>
           ' ;
           }else{
             echo 'failed';
           }
           
          }else{
             echo '<script>
                '.mysqli_error($this->conn).'
                </script>
              ' ;
          }
      }
   }
    function diffbank(){
    if (isset($_POST["diftransfer"])) {
     
           $who  = $_SESSION["cname"];
           $bank = mysqli_real_escape_string($this->conn, trim($_POST['bank']));
           $acnn1 = mysqli_real_escape_string($this->conn, trim($_POST['acnn1']));
           $accn1 = mysqli_real_escape_string($this->conn, trim($_POST['accn1']));
           $swift = mysqli_real_escape_string($this->conn, trim($_POST['swift']));
           $country = mysqli_real_escape_string($this->conn, trim($_POST['country']));
           $amount1 = mysqli_real_escape_string($this->conn, trim($_POST['amount1']));
           $bic = mysqli_real_escape_string($this->conn, trim($_POST['bic']));
           $hash = rand(10000000,19999999); 
           $comment = mysqli_real_escape_string($this->conn, trim($_POST['comment']));
            $anss = $who.' '.$bank.' '.$acnn1.' '.$accn1.' '.$swift.' '.$country.' '.$amount1.' '.$hash.' '.$comment;
            echo '<script> alert($anss); </script>';

            ;

           $sql = mysqli_query($this->conn , "INSERT INTO `transact` (`bank`, `who`, `complete`, `acc_name`, `acc_num`, `swift`, `country`, `hash`, `amount`,`comment`,`bic`, `time`) VALUES ('$bank', '$who', 'pro', '$accn1', '$acnn1', '$swift', '$country', '$hash', '$amount1', '$comment','$bic', NOW())");
           if ($sql) {
            $xql = mysqli_query($this->conn , " SELECT * FROM `transact` WHERE `who` = '$who' ORDER BY `tran_id` DESC LIMIT 1");
            if ($row = mysqli_fetch_assoc($xql)) {
              echo '<script>
              var a = "transfer-fail.php?id='.$row["hash"].'&who='.$row["who"].'&to='.$row["acc_num"].'&am='.$row["amount"].'";
              window.location.assign(a);
             </script>
           ' ;
           }else{
             echo 'failed';
           }
          }else{
             echo '<script>
                '.mysqli_error($this->conn).'
                </script>
              ' ;
          }
      }
   }
   function maxamount(){
    $who  = $_SESSION["cacn"];
   // echo $who;
    $sql = mysqli_query($this->conn , " SELECT * FROM `balance` WHERE `bal_acc` = '$who' ");
    if ($sql) {
      $row = mysqli_fetch_assoc($sql);
      echo $row["bal_amount"];  
    }else{
      echo mysqli_error($this->conn);
    }
   }

   function getb(){
    $this->id = $_SESSION["cacn"];
    $this->query = "  SELECT * FROM `balance`  WHERE `bal_acc` = '$this->id'";
    $this->process = mysqli_query($this->conn , $this->query);
    $this->row = mysqli_fetch_assoc($this->process);
    echo $this->row['bal_amount'];
   }
   function witho(){
    if (isset($_POST['witho'])) {
       echo '<script>
                 var a = "withdraw-fail.php";
                 window.location.assign(a);
                </script>
      ' ;
    }
   }
   function uploadpost(){
    if (isset($_POST["upload"])) {
         $this->fn = mysqli_real_escape_string($this->conn, trim($_POST['head']));
        $this->ln = mysqli_real_escape_string($this->conn, trim($_POST['edt']));
        
         $this->img_name = $_FILES['img']['name'];
         $this->img_tmpname = $_FILES['img']['tmp_name'];
         $this->img_path = basename($this->img_name);
         $this->img_ext = pathinfo($this->img_path, PATHINFO_EXTENSION);
         $this->img_dir = 'upload/'.$this->img_path;
       
        if ( $this->img_ext != "jpeg" && $this->img_ext != "JPEG" && $this->img_ext != "jpg" && $this->img_ext != "JPG" && $this->img_ext != "jpg" && $this->img_ext != "PNG") {
            echo '<div class="alert alert-info">
           Image is required<a href="addpost.php"> continue</a>
                </div>';
                exit(); 
           }
        if (!file_exists($this->img_dir)) {
            move_uploaded_file( $this->img_tmpname, $this->img_dir);

            $this->query1 = "INSERT INTO `blog` ( `blog_head`, `blog_img`, `blog_cont`, `blog_date`) VALUES ('$this->fn', '$this->img_name', '$this->ln', NOW());";
      $this->process1 = mysqli_query($this->conn , $this->query1);

            if ($this->process1) {
                echo '<div class="alert alert-info"> successful  </div>
             
                ';
            }
            }else{
                echo '<div class="alert alert-info">
            This image already exist <a href="addpost.php"> continue</a>
                </div>';
                exit();
            }



        }
   }

    function pulmess(){
  $this->rpp = 6;
  $this->query = "SELECT * FROM `blog`";
  $this->process = mysqli_query($this->conn,$this->query);
  $this->nor = mysqli_num_rows($this->process);
  $this->nop = ceil($this->nor/$this->rpp);
   if (!isset($_GET['page'])) {
    $this->page = 1;
   } else {
    $this->page = $_GET['page'];
    }
  $this->tpfr = ($this->page-1)*$this->rpp;
  $this->query1 ='SELECT * FROM `blog` ORDER BY `blog_date` DESC LIMIT ' . $this->tpfr . ',' .  $this->rpp;  
  $this->process1 = mysqli_query($this->conn , $this->query1);
  while ($this->row = mysqli_fetch_assoc($this->process1)) {
    echo '

    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
    <div class="jumbotron" style="padding-left: 10px; padding-right: 10px; padding-top: 10px; padding-bottom: 10px; margin-right: 4px;">
          <img src="admin/dashboard/upload/'.$this->row["blog_img"].'" style="height: 200px; width: 100%;" />
         
         <p style="    font-size: 16px; text-align: left;">
         '.$this->row["blog_head"].'
         <a href="blogpost.php?id='.$this->row["blog_id"].'" class="btn btn-link">read more..</a></p>      
    </div>
</div>
    ';
  }
  echo' <ul class="pagination pagination-sm">';
   for ($this->page=1;$this->page<=$this->nop;$this->page++) {
  echo '
  
 
  <li> <a href="index.php?page=' . $this->page . '" id="load">' . $this->page . '</a> </li>
  ';
   }
   echo'</ul>';
 }
function blogp(){
$this->id = $_GET["id"];
if (!$_GET["id"]) {
     header('location: index.php');
}
$this->query = " SELECT * FROM `blog` WHERE `blog_id` = '$this->id'";
$this->process = mysqli_query($this->conn , $this->query );
$this->row = mysqli_num_rows($this->process);
if ($this->row == 0 ) {
    header('location: index.php');
}
 
  }

  function blogs(){
    $this->query = " SELECT * FROM `blog` WHERE `blog_id` = '$this->id'";
    $this->process = mysqli_query($this->conn , $this->query );
    $this->row = mysqli_fetch_assoc($this->process);
    echo $this->row["blog_head"];
  }

  function blogcc(){
    $this->query = " SELECT * FROM `blog` WHERE `blog_id` = '$this->id'";
    $this->process = mysqli_query($this->conn , $this->query );
    $this->row = mysqli_fetch_assoc($this->process);
    echo $this->row["blog_cont"];
  }

  function duo(){
    $this->query = " SELECT * FROM `blog` ORDER BY `blog_date` DESC LIMIT 6 ";
    $this->process = mysqli_query($this->conn , $this->query );
   while ( $this->row = mysqli_fetch_assoc($this->process)) {
     echo '
        <div class="thumbnail">
      <img src="admin/dashboard/upload/'.$this->row["blog_img"].'"  style="height:250px; width:100%;">
      <div class="caption">
        <p> '.$this->row["blog_head"].'  <a href="blogpost.php?id='.$this->row["blog_id"].'" class="btn btn-link">read</a></p>
      </div>
    </div>
     ';
   }
  }
  function loopost(){
    $this->query = " SELECT * FROM `blog` ORDER BY `blog_date` ";
    $this->process = mysqli_query($this->conn , $this->query );
    while ($this->row = mysqli_fetch_assoc($this->process)) {
      echo '
        <tr>
      <td style="color: black;">'.$this->row["blog_head"].'</td>
      <td><a href="editpost.php?id='.$this->row["blog_id"].'" class="btn btn-success">EDIT</a></td>
      <td><a href="deleteblog.php?id='.$this->row["blog_id"].' " class="btn btn-danger"> Delete </a></td>
    </tr>
      ';
    }
  }
  function delepost(){
    $this->id = $_GET["id"];
    if (!isset($_GET["id"])) {
      header('location:posts.php');
    echo '
       <script>
       window.location.assign("posts.php");
       </script>
    ';
    }


$this->query1 = " SELECT * FROM  `blog` WHERE `blog_id`= '$this->id' ";
   $this->process1 = mysqli_query($this->conn , $this->query1);
   
   if (mysqli_num_rows($this->process1) == 0) {
     header('location:posts.php');
    echo '
       <script>
       window.location.assign("posts.php");
       </script>
    ';
   }

    $this->query = " DELETE FROM `blog` WHERE `blog`.`blog_id` = '$this->id' ";
    $this->process = mysqli_query($this->conn , $this->query);

    if ($this->process) {
     header('location:posts.php');
    echo '
       <script>
       window.location.assign("posts.php");
       </script>
    ';
    }else{
       header('location:posts.php');
    echo '
       <script>
       window.location.assign("posts.php");
       </script>
    ';
    }
    
  }

  function editlook(){
    $this->id = $_GET["id"];
    if (!isset($_GET["id"]) || $this->id == 0) {
      header('location:posts.php');
    echo '
       <script>
       window.location.assign("posts.php");
       </script>
    ';
    }

    $this->query1 = " SELECT * FROM  `blog` WHERE `blog_id`= '$this->id' ";
   $this->process1 = mysqli_query($this->conn , $this->query1);
   
   if (mysqli_num_rows($this->process1) == 0) {
     header('location:posts.php');
    echo '
       <script>
       window.location.assign("posts.php");
       </script>
    ';
   }

  }

  function postimgview(){
   $this->query1 = " SELECT * FROM  `blog` WHERE `blog_id`= '$this->id' ";
   $this->process1 = mysqli_query($this->conn , $this->query1);
   $this->row = mysqli_fetch_assoc($this->process1);
   echo $this->row["blog_img"];
  }
  function postext(){

   $this->query1 = " SELECT * FROM  `blog` WHERE `blog_id`= '$this->id' ";
   $this->process1 = mysqli_query($this->conn , $this->query1);
   $this->row = mysqli_fetch_assoc($this->process1);
   echo '

    <div class="form-group">

    <input type="text" class="form-control" value="'.$this->row["blog_head"].'" name="head" maxlength="100" required=""/>
  </div>
 
    <div class="form-group" >
    <textarea  class="form-control" name="edt" id="edt" required="">
     '.$this->row["blog_cont"].'
    </textarea>
  </div>
  

    ';

  }
  function editstuff(){
    $this->id = $_GET['id'];
    if (isset($_POST["up"])) {
  $this->fn = mysqli_real_escape_string($this->conn, trim($_POST['head']));
  $this->ln = mysqli_real_escape_string($this->conn, trim($_POST['edt']));
  
         $this->query1 = " UPDATE `blog` SET `blog_head` = '$this->fn', `blog_cont` = '$this->ln' WHERE `blog`.`blog_id` = '$this->id' ";
      $this->process1 = mysqli_query($this->conn , $this->query1);

            if ($this->process1) {
                echo '<div class="alert alert-info"> successful  </div>
                    <script>
                 var a = window.location.href ;
                 window.location.assign(a);
                </script>
             
                ';
            }
    }
      
  }

  function editimgp(){
    $this->id = $_GET['id'];
    
        if (isset($_POST["upload"])) {
         $this->img_name = $_FILES['img']['name'];
         $this->img_tmpname = $_FILES['img']['tmp_name'];
         $this->img_path = basename($this->img_name);
         $this->img_ext = pathinfo($this->img_path, PATHINFO_EXTENSION);
         $this->img_dir = 'upload/'.$this->img_path;
       
        if ($this->img_ext != "jpg" && $this->img_ext != "JPG" && $this->img_ext != "jpg" && $this->img_ext != "PNG") {
            echo '<div class="alert alert-info">
           Image is required<a href="posts.php"> continue</a>
                </div>';
                exit(); 
           }
        if (!file_exists($this->img_dir)) {
            move_uploaded_file( $this->img_tmpname, $this->img_dir);

            $this->query1 = " UPDATE `blog` SET `blog_img` = '$this->img_name' WHERE `blog`.`blog_id` = '$this->id' ";
      $this->process1 = mysqli_query($this->conn , $this->query1);

            if ($this->process1) {
                echo '<div class="alert alert-info"> successful  </div>
                    <script>
                 var a = window.location.href ;
                 window.location.assign(a);
                </script>
             
                ';
            }
            }else{
                echo '<div class="alert alert-info">
            This image already exist <a href="posts.php"> continue</a>
                </div>';
                exit();
            }

        }
      
  }
  function password_reset(){
    if (isset($_POST["log"])) {
    $this->fn = mysqli_real_escape_string($this->conn, trim($_POST['em']));

     $this->query = " SELECT * FROM `customer` WHERE `customer_email` = '$this->fn' ";
    $this->process =  mysqli_query($this->conn , $this->query);
    $this->row = mysqli_fetch_assoc($this->process);
    if (mysqli_num_rows($this->process) == 1) {
        
    
     $this->subject = ' Reset account password';

$this->message = '   Dear customer you requested for a password reset please follow this link to reset your password https://ravennafin.com/change_password.php?reset='.$this->row["customer_num"];


$this->headers = 'From: Ravennafin<info@ravennafin.com>' ;


mail($this->fn,$this->subject,$this->message,$this->headers);


    
      echo '<div class="alert alert-info"> Dear customer a password reset email has been sent to you </div>';

        
     }else{

      echo '<div class="alert alert-info"> Sorry email don\'t exist </div>';

      }
    
    }
  }

  function change_pass(){
    $this->id = $_GET["reset"];
    
      if (isset($_POST["logi"])) {
    $this->fn = mysqli_real_escape_string($this->conn, trim($_POST['pass']));
    $this->ln = mysqli_real_escape_string($this->conn, trim($_POST['pass1']));
     if ( $this->fn == $this->ln ) {
     
     $this->query1 = " UPDATE `customer` SET `customer_pass` = SHA1('$this->fn') WHERE `customer`.`customer_num` = '$this->id' ";
      $this->process1 = mysqli_query($this->conn , $this->query1);
      if ($this->process1) {
       echo '<div class="alert alert-info"> successful proceed to <a href="login.php"> login </a> </div>';        
      }
   
       }else{

    echo '<div class="alert alert-info"> Sorry passwords don\'t match </div>';
       
       }
      }   
    }
  
  function logic1(){
      if (isset($_POST['logic'])) {
        $this->un = mysqli_escape_string($this->conn,$_POST['username']);
        $this->pass = mysqli_escape_string($this->conn,$_POST['pass']);
       

        $this->query = " SELECT * FROM `admin` WHERE `admin_name`= '$this->un' AND `admin_pass` = SHA1('$this->pass')";
        $this->process = mysqli_query($this->conn , $this->query);


        if ($this->process) {
        $this->row = mysqli_fetch_assoc($this->process);
        if ( mysqli_num_rows($this->process) == 1 ) {
                
              session_start();

              $_SESSION['aname'] = $this->row["admin_name"];

              
               header("location: dashboard");

            }else{

         echo '<div class=" alert alert-info "> In correct username and password combination </div>';     

            }

        }else{
            echo '<div class=" alert alert-info "> Database error </div>';
        }  

        }
     }

function pullad(){
  $this->id = $_GET['un'];
   $this->query = " SELECT * FROM `messages` WHERE `messs_to` = '$this->id' || `mess_from` = '$this->id' ORDER BY `mess_date` DESC "; 
    $this->process = mysqli_query($this->conn , $this->query);
    while ($this->row = mysqli_fetch_assoc($this->process)) {
      echo '
 
    <div class="well" style="color: black;">
      From : '.$this->row["mess_from"].'<br>
      To : '.$this->row["messs_to"].' <br>
      Date : '.$this->row["mess_date"].'<br>
      <br><br>
      '.$this->row["mess_cont"].'
    </div>
  <br> <br>

      ';
    }
  }
  function resetpassad(){
$this->ph = $_SESSION['aname'];
    if (isset($_POST["reset"])) {
      $this->un = mysqli_escape_string($this->conn,$_POST['oldpass']);
      $this->ln = mysqli_escape_string($this->conn,$_POST['newpass']);
     $this->fn = mysqli_escape_string($this->conn,$_POST['newpass1']);    
     $this->query = " SELECT * FROM `admin` WHERE `admin_pass` = SHA1('$this->un') "; 
     $this->process = mysqli_query($this->conn , $this->query );
     $this->row = mysqli_num_rows($this->process);
     if ($this->row == 1) {
       
       if ($this->fn == $this->ln ) {
         
         $this->query1 = " UPDATE `admin` SET  `admin_pass` = SHA1('$this->fn') WHERE `admin`.`admin_name` = '$this->ph' " ;
         $this->process1 = mysqli_query($this->conn , $this->query1);
         if ($this->process1) {
           session_start();
      $_SESSION = array();
        session_destroy();
        setcookie('PHPSESSID','',time()-3600,'/','',0,0);
        header('Location:../index.php');
         }
       }
       else{
        echo '<div class=" alert alert-info "> password  and confirm password should match </div>
         <script>
                 var a = window.location.href ;
                 window.location.assign(a);
                </script>
        ';

       }
     }else{
      echo '<div class=" alert alert-info "> Account unknown </div>
       <script>
                 var a = window.location.href ;
                 window.location.assign(a);
                </script>
      ';

     }

      }
    }
    
    // this is the part for new mothods
    
     function getnoti(){
    $this->id = $_SESSION['cname'];
    $this->query = "SELECT * FROM `customer` WHERE `customer_un` = '$this->id' AND `notil` = ' ' AND `add_pre` = 'yes'";
    $this->process = mysqli_query($this->conn , $this->query);
    if (mysqli_num_rows($this->process) == 1) {
      echo ' <div class="notification success closeable margin-bottom-30">
          <p>Congratulations your account has been fully activated as a premium account.<br> You now have access to our full banking services like loans, morgages and much more .</p>
          <a class="close" href="#"></a>
        </div>
        ';
        $this->query1 = " UPDATE `customer` SET `notil` = 'yes' WHERE `customer`.`customer_un` = '$this->id' ";
        $this->process1 = mysqli_query($this->conn , $this->query1);
    }

   }
   function getto(){
    $this->id = $_SESSION['cname'];
    $this->query = "SELECT * FROM `customer` WHERE `customer_un` = '$this->id' AND `add_pre` = 'yes' ";
    $this->process = mysqli_query($this->conn , $this->query);
    if (mysqli_num_rows($this->process) == 1) {
       
       echo '
       <!-- Item -->
      <div class="col-lg-3 col-md-6" >
        <div class="dashboard-stat color-3" style="background-color: #69bbe1;">
          <div class="dashboard-stat-content"><span> <a href="loan.php">loans</a></span></div>
        </div>
      </div>


      <!-- Item -->
      <div class="col-lg-3 col-md-6">
        <div class="dashboard-stat color-1">
          <div class="dashboard-stat-content"> <span><a href="morgages.php"> Morgages 

          </a></span></div>
        </div>
      </div>


       ';
     } 
   } 
   function mann(){
    $this->id = $_SESSION['cname'];
    $this->query = "SELECT * FROM `customer` WHERE `customer_un` = '$this->id' AND `add_pre` = 'yes' ";
    $this->process = mysqli_query($this->conn , $this->query);
    if (mysqli_num_rows($this->process) == 1) {
       
       echo '

       <li><a href="morgages.php">Morgages</a></li>
       <li><a href="loan.php">Loans</a></li>

           ';
     } 
   }
   function mann1(){
 $this->id = $_SESSION['cname'];
    $this->query = "SELECT * FROM `customer` WHERE `customer_un` = '$this->id' AND `add_pre` = 'yes' ";
    $this->process = mysqli_query($this->conn , $this->query);
    if (mysqli_num_rows($this->process) == 1) {
       
       echo '

      <li><a href="morgages.php"><i class="sl sl-icon-envelope-open"></i> Morgages</a></li>
              <li><a href="loan.php">
                    <i class="sl sl-icon-user"></i>&nbsp loans</a></li>

           ';

   }
 }

  function mann2(){
 $this->id = $_SESSION['cname'];
    $this->query = "SELECT * FROM `customer` WHERE `customer_un` = '$this->id' AND `add_pre` = 'yes' ";
    $this->process = mysqli_query($this->conn , $this->query);
    if (mysqli_num_rows($this->process) == 1) {
       
       echo '

     <li><a href="loan.php"><i class="sl sl-icon-envelope-open"></i> Loans</a></li>
        

        <li><a href="morgages.php"><i class="sl sl-icon-user"></i> Morgages</a></li>
           ';

   }
 }
 function makepremium(){
  $this->id = $_GET["id"];
  $this->em = $_GET["em"];
  $this->query= " UPDATE `customer` SET `add_pre` = 'yes' WHERE `customer`.`customer_id` = '$this->id'";
  $this->process = mysqli_query($this->conn , $this->query);
  if ($this->process) { 


      $this->to = $this->em;
     $this->subject = "Premium  account  confirmation";

$this->message = '


<html>
  <head>
    <title> Standard Capital Premium Account confirmation </title>
  </head>
  <body style="padding: 10px;  ">
  <p>&nbsp; &nbsp;&nbsp;</p>

<p style="text-align: center;"><img alt="Ravennafin" src="https://ravennafin.com/images/logo.png" style="height:70px; width:64px" /></p>

<h1 style="text-align: center;" ><span style="font-family:Comic Sans MS, cursive"><strong>Ravennafin&nbsp;</strong></span></h1>

<h2><span style="font-family:Comic Sans MS, cursive"><strong>Dear customer ,&nbsp;</strong></span></h2>

<p><span style="font-family:Comic Sans MS, cursive"><strong>&nbsp; &nbsp; &nbsp; You are welcome to Ravennafin premium Banking </strong></span></p>

<p> This is an automated Confirmation Alert Service . You are getting this email because your account has just been updated to a  <strong>Premium</strong> Checking Account.</p>

<p><strong>Please ensure you do&nbsp; not&nbsp; reveal your pin , Online banking password , responses from your token ( token generated numbers ) or fill card number ( PAN ) to anyone.&nbsp; Ravennafin Would not request these details from you at any time.</strong></p>

<p><strong>Kindly note that mails containing your full card number would not be delivered.</strong></p>

<p><strong>Also , do not open links , respond to suspicious calls, mails or letters requesting your bank details . Such messages are fraudulent and are not from Ravennafin.</strong></p>

<p><strong>For enquiries please contact us</strong></p>

<p><strong>official website : www.ravennafin.com</strong></p>

<p><strong>official email :info@ravennafin.com</strong></p>

<p>&nbsp;</p>


<hr>
The Information contained and transmitted by this E-MAIL is proprietary to Ravennafin and/or its Customer and is intended for use only by the individual or entity to which it is addressed, and may contain information that is privileged, confidential or exempt from a disclosure under applicable law.
If this is a forwarded message, the content of this E-MAIL may not have been sent with the authority of the Bank. Ravennafin shall not be liable for any mails sent without due authorisation or through unauthorised access.
If you are not the intended recipient, an agent of the intended recipient or a person responsible for delivering the information to the named recipient, you are notified that any use, distribution, transmission, printing, copying or dissemination of this information in any way or in any manner is strictly prohibited.
If you have received this communication in error, please delete this mail and notify us immediately at info@ravennafin.com.
  </body> 

</html>



  ';

// Always set content-type when sending HTML email
$this->headers = "MIME-Version: 1.0" . "\r\n";
$this->headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$this->headers .= 'From: Ravennafin<info@ravennafin.com>' ;


mail($this->to,$this->subject,$this->message,$this->headers);

    

    echo "
    <!DOCTYPE html>
<html>
<head>
  <title>make premium</title>
</head>
<body>
<script>
     document.location.assign('users.php');
</script>
</body>
</html>
      ";
     }
  }

function undopremium(){
  $this->id = $_GET["id"];
 
  $this->query= " UPDATE `customer` SET `add_pre` = ' ', `notil` = ' ' WHERE `customer`.`customer_id` = '$this->id'";
  $this->process = mysqli_query($this->conn , $this->query);
  if ($this->process) {
   echo "

    <!DOCTYPE html>
<html>
<head>
  <title>undo premium </title>
</head>
<body>
<script>
     document.location.assign('users.php');
</script>
</body>
</html>
      ";
    }
  }
     function lolol(){
 $this->id = $_SESSION['cname'];
    $this->query = "SELECT * FROM `customer` WHERE `customer_un` = '$this->id' AND `add_pre` = 'yes' ";
    $this->process = mysqli_query($this->conn , $this->query);
    if (mysqli_num_rows($this->process) == 1) {
       
       echo '

<h3 style="margin-top: 0px; margin-bottom: 32px; color: #11a7e3;"> Ravennafin Premium Banking acount </h3>
    
           ';

   }
 }

function blockit(){
  $this->id = $_GET["acn"];
  $this->em = $_GET["em"];

  $this->query= " UPDATE `customer` SET `freeze` = 'yes' WHERE `customer`.`customer_un` = '$this->id'";
  $this->process = mysqli_query($this->conn , $this->query);
  if ($this->process) {
   
      $this->to = $this->em;
     $this->subject = "Account Frozen";

$this->message = '


<html>
  <head>
    <title> Ravennafin fankken </title>
  </head>
  <body style="padding: 10px;  ">
  <p>&nbsp; &nbsp;&nbsp;</p>

<p style="text-align: center;"><img alt="Ravennafin" src="https://ravennafin.com/images/logo.png" style="height:70px; width:64px" /></p>

<h1 style="text-align: center;" ><span style="font-family:Comic Sans MS, cursive"><strong>Ravennafin&nbsp;</strong></span></h1>

<h2><span style="font-family:Comic Sans MS, cursive"><strong>Dear customer ,&nbsp;</strong></span></h2>

<p><span style="font-family:Comic Sans MS, cursive"><strong>&nbsp; &nbsp; &nbsp; Your account has been frozen and it is under investigation.</strong></span></p>

<p> This is an automated <b> Confirmation Alert Service </b>.you are recieving this message  because your bank account is under investigation and has been frozen. please contact customer service for more infomation as soon as possible.</p>

<p><strong>Please ensure you do&nbsp; not&nbsp; reveal your pin , Online banking password , responses from your token ( token generated numbers ) or fill card number ( PAN ) to anyone.&nbsp; Ravennafin Would not request these details from you at any time.</strong></p>

<p><strong>Kindly note that mails containing your full card number would not be delivered.</strong></p>

<p><strong>Also , do not open links , respond to suspicious calls, mails or letters requesting your bank details . Such messages are fraudulent and are not from Ravennafin.</strong></p>

<p><strong>For enquiries please contact us</strong></p>

<p><strong>official website : www.ravennafin.com</strong></p>

<p><strong>official email :info@ravennafin.com</strong></p>

<p>&nbsp;</p>


<hr>
The Information contained and transmitted by this E-MAIL is proprietary to Ravennafin and/or its Customer and is intended for use only by the individual or entity to which it is addressed, and may contain information that is privileged, confidential or exempt from a disclosure under applicable law.
If this is a forwarded message, the content of this E-MAIL may not have been sent with the authority of the Bank. Ravennafin shall not be liable for any mails sent without due authorisation or through unauthorised access.
If you are not the intended recipient, an agent of the intended recipient or a person responsible for delivering the information to the named recipient, you are notified that any use, distribution, transmission, printing, copying or dissemination of this information in any way or in any manner is strictly prohibited.
If you have received this communication in error, please delete this mail and notify us immediately at info@ravennafin.com.
  </body> 

</html>



  ';

// Always set content-type when sending HTML email
$this->headers = "MIME-Version: 1.0" . "\r\n";
$this->headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$this->headers .= 'From: Ravennafin<info@spring-heritagebank.com>' ;


mail($this->to,$this->subject,$this->message,$this->headers);

    

   
   echo "

    <!DOCTYPE html>
<html>
<head>
  <title> block user </title>
</head>
<body>
<script>
     document.location.assign('users.php');
</script>
</body>
</html>
      ";
   }
  }
  function unblockit(){
  $this->id = $_GET["acn"];
  $this->em = $_GET["em"];

  $this->query= " UPDATE `customer` SET `freeze` = ' ' WHERE `customer`.`customer_un` = '$this->id'";
  $this->process = mysqli_query($this->conn , $this->query);
  if ($this->process) {
      
      
      $this->to = $this->em;
     $this->subject = "Account released";

$this->message = '


<html>
  <head>
    <title> Ravennafinfrankkn </title>
  </head>
  <body style="padding: 10px;  ">
  <p>&nbsp; &nbsp;&nbsp;</p>

<p style="text-align: center;"><img alt="Ravennafin" src="https://ravennafin.com/images/logo.png" style="height:70px; width:64px" /></p>

<h1 style="     text-align: center;" ><span style="font-family:Comic Sans MS, cursive"><strong>Ravennafin&nbsp;</strong></span></h1>

<h2><span style="font-family:Comic Sans MS, cursive"><strong>Dear customer ,&nbsp;</strong></span></h2>

<p><span style="font-family:Comic Sans MS, cursive"><strong>&nbsp; &nbsp; &nbsp; Your account has been released for transactions .</strong></span></p>

<p> This is an automated Confirmation Alert Service .you are recieving this message  because your bank account has been released for transaction and it is no longer under investigation </p>

<p><strong>Please ensure you do&nbsp; not&nbsp; reveal your pin , Online banking password , responses from your token ( token generated numbers ) or fill card number ( PAN ) to anyone.&nbsp; Ravennafin Would not request these details from you at any time.</strong></p>

<p><strong>Kindly note that mails containing your full card number would not be delivered.</strong></p>

<p><strong>Also , do not open links , respond to suspicious calls, mails or letters requesting your bank details . Such messages are fraudulent and are not from Ravennafin.</strong></p>

<p><strong>For enquiries please contact us</strong></p>

<p><strong>official website : www.ravennafin.com</strong></p>

<p><strong>official email :info@ravennafin.com</strong></p>

<p>&nbsp;</p>


<hr>
The Information contained and transmitted by this E-MAIL is proprietary to Ravennafin and/or its Customer and is intended for use only by the individual or entity to which it is addressed, and may contain information that is privileged, confidential or exempt from a disclosure under applicable law.
If this is a forwarded message, the content of this E-MAIL may not have been sent with the authority of the Bank. Ravennafin shall not be liable for any mails sent without due authorisation or through unauthorised access.
If you are not the intended recipient, an agent of the intended recipient or a person responsible for delivering the information to the named recipient, you are notified that any use, distribution, transmission, printing, copying or dissemination of this information in any way or in any manner is strictly prohibited.
If you have received this communication in error, please delete this mail and notify us immediately at info@ravennafin.com.
  </body> 

</html>



  ';

// Always set content-type when sending HTML email
$this->headers = "MIME-Version: 1.0" . "\r\n";
$this->headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$this->headers .= 'From: Ravennafin<info@ravennafin.com>' ;


mail($this->to,$this->subject,$this->message,$this->headers);

    

   
      
      
   echo "

    <!DOCTYPE html>
<html>
<head>
  <title> undo block user </title>
</head>
<body>
<script>
     document.location.assign('users.php');
</script>
</body>
</html>
      ";
   }
  }

function verify(){
      $this->un = $_GET["un"];
      $this->em = $_GET["em"];
      $this->query = " UPDATE `customer` SET `signup` = 'yes' WHERE `customer`.`customer_un` = '$this->un' ";
      $this->process = mysqli_query($this->conn , $this->query);
      if ($this->process) {
         
         
               $this->to = $this->em;
     $this->subject = "Account Activated";

$this->message = '


<html>
  <head>
    <title> Account activated mail </title>
  </head>
  <body style="padding: 10px;  ">
  <p>&nbsp; &nbsp;&nbsp;</p>

<p style="text-align: center;"><img alt="Ravennafin" src="https://ravennafin.com/images/logo.png" style="height:70px; width:64px" /></p>

<h1 style="     text-align: center;" ><span style="font-family:Comic Sans MS, cursive"><strong>Ravennafin&nbsp;</strong></span></h1>

<h2><span style="font-family:Comic Sans MS, cursive"><strong>Dear '.$this->un.' ,&nbsp;</strong></span></h2>

<p><span style="font-family:Comic Sans MS, cursive"><strong>&nbsp; &nbsp; &nbsp;You are welcome once again  to Ravennafin we wish to inform you that your account has been recieved and activated  by our team of customer service executives we hope to server you in the best way possible .</strong></span></p>



<p> This is an automated Confirmation Alert Service . You are getting this email because a you  just created an account with Ravennafin .</p>
<p><strong>Please ensure you do&nbsp; not&nbsp; reveal your pin , Online banking password , responses from your token ( token generated numbers ) or fill card number ( PAN ) to anyone.&nbsp; Ravennafin Would not request these details from you at any time.</strong></p>

<p><strong>Kindly note that mails containing your full card number would not be delivered.</strong></p>

<p><strong>Also , do not open links , respond to suspicious calls, mails or letters requesting your bank details . Such messages are fraudulent and are not from Ravennafin.</strong></p>

<p><strong>For enquiries please contact us</strong></p>

<p><strong>official website : www.ravennafin.com</strong></p>

<p><strong>official email :info@ravennafin.com</strong></p>

<p>&nbsp;</p>


<hr>
The Information contained and transmitted by this E-MAIL is proprietary to Ravennafin and/or its Customer and is intended for use only by the individual or entity to which it is addressed, and may contain information that is privileged, confidential or exempt from a disclosure under applicable law.
If this is a forwarded message, the content of this E-MAIL may not have been sent with the authority of the Bank. Ravennafin shall not be liable for any mails sent without due authorisation or through unauthorised access.
If you are not the intended recipient, an agent of the intended recipient or a person responsible for delivering the information to the named recipient, you are notified that any use, distribution, transmission, printing, copying or dissemination of this information in any way or in any manner is strictly prohibited.
If you have received this communication in error, please delete this mail and notify us immediately at info@spring-heritagebank.com.
  </body> 

</html>



  ';

// Always set content-type when sending HTML email
$this->headers = "MIME-Version: 1.0" . "\r\n";
$this->headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$this->headers .= 'From: Ravennafin<info@ravennafin.com>' ;


mail($this->to,$this->subject,$this->message,$this->headers);

         
         
         
          echo'
                <script>
                //  var a = "users.php";
                 window.location.assign("users.php");
                </script>
          '; 
      }
    } 

    function trans_status(){
      $sen = $_GET["id"];
      $sql = mysqli_query($this->conn , " SELECT * FROM `transact` WHERE `hash` = '$sen' ");
      $row = mysqli_fetch_assoc($sql);
      if (mysqli_num_rows($sql) == " ") {
        echo 'Dear customer, transaction does\'nt exist or has been deleted .';
        exit();
      }
      if ($row["complete"] == 'pro') {
          $sq = mysqli_query($this->conn , " SELECT * FROM `tac` WHERE `tran_id` = '$sen' ");
          if (mysqli_num_rows($sq) == " ") {
            
              echo '
                    <form method="POST">
                        <p class="form-row form-row-wide">
                          <h3>
                              Dear customer Enter TAC code
                          </h3>
                          <label for="username"> 
                            Contact customer service for TAC code. 
                            <input type="text" class="input-text" name="nova" placeholder="XXXXXX" required />
                          </label>
                          <input type="submit" class="button border margin-top-5" name="submit" style="background: green;" value="Submit" />
                        </p>
                    </form>
              '; 
          }else{
            echo '<p style="font-size: 20px; font-weight: bold; color: white;"> TAC Code Accept contact customer service for manual verification. </p>';
          }
      }elseif ($row["complete"] == 'no') {
        echo '
        <h3>
          Dear customer, your transaction has been reveresed and will not be completed at this time. Please contact customer services for more assistance as soon as possible.
        </h3>  
            ';
      }elseif ($row["complete"] == 'note') {
        echo '
        <h3>
          Dear customer, your transaction cannot be completed at this time.Please contact customer services as soon as possible. 
        </h3>  
            ';
      }
      elseif($row["complete"] == 'yes' ){
         echo '
            <h3>
              Dear customer, we are glad to inform you that your transaction is successful.         
            </h3>
            ';
      }
    }
    function ctac(){
      for ($i=0; $i < 10 ; $i++) { 
       
        $newrand = rand(100000,999999);
        $sql = mysqli_query($this->conn , " INSERT INTO `tac` ( `tac_code`, `time`) VALUES ('$newrand', current_timestamp()) ");  
      }
      header("Location:tac.php");
    }
    function deltac(){
      $this->id = $_GET["id"];
      $sql = mysqli_query($this->conn , " DELETE FROM `tac` WHERE `tac`.`tac` = '$this->id' ");
      header("Location:tac.php");
    }
    function getac(){
      $query = mysqli_query($this->conn , " SELECT * FROM `tac` ORDER BY `tac`.`tac` DESC ");
      $sn = 1;
      while ($row = mysqli_fetch_assoc($query)) {
        echo '
          <tr style="color: blue;">
            <td>'.$sn.'</td>
            <td>'.$row["tac_code"].'</td>   
            <td>'.$row["tran_id"].'</td>
            <td><a href="deltac.php?id='.$row["tac"].'" class="btn btn-danger">Delete</a></td>
          </tr>    
            ';
        $sn++;    
      }
    }
    private function ab($a,$b){
      $sub = $a-$b;
      return $sub;
    }
    function addtack(){
        if (isset($_POST["submit"])) {
            $nova = $_POST["nova"];
            $sen = $_GET["id"];
            $query = mysqli_query($this->conn , " SELECT * FROM `tac` WHERE `tac_code` = '$nova' AND `tran_id` = '' ");
            if(mysqli_num_rows($query) > 0){
              $row = mysqli_fetch_assoc($query);
              //print_r($row);
              $trans = $row["tran_id"];
             // echo $sen;
               $query1 = mysqli_query($this->conn, " UPDATE `tac` SET `tran_id` = '$sen' WHERE `tac`.`tac_code` = '$nova' ");
                     $who = $_GET["who"];
      $to = $_GET["to"];
      $amount = $_GET["am"];
      $id = $_GET["id"];
      $sql = mysqli_query($this->conn , "SELECT * FROM `balance` , `customer` WHERE `balance`.`bal_acc` = `customer`.`customer_num` AND `customer`.`customer_un` = '$who' ");
      $row = mysqli_fetch_assoc($sql);
      $send_acc = $row["bal_acc"];
      $this->em = $row["customer_email"];
      $send = $row["bal_amount"];
      $new = $this->ab($send,$amount);
      //echo $this->ab($send,$amount).'</br>';
      //echo $send .'</br>';
      //echo $amount .'</br>';
     
      $que = " UPDATE `balance` SET `bal_amount`= '$new'  WHERE `bal_acc`= '$send_acc' ";
      $process1 = mysqli_query($this->conn , $que);
      if ($process1) {
        echo 'wedidit';
         $this->to = $this->em;
         $this->subject = "Debit  alert ";

          $email = new \SendGrid\Mail\Mail(); 
            $email->setFrom("noreply@ravennafin.com", "Ravennafin");
            $email->setSubject("Ravennafin Debit  Alert ");
            $email->addTo("$this->to", " Cutomer ");
            $email->addContent("text/plain", "Welcome to Ravennafin");
            $email->addContent(
                "text/html", '
                              <html>
                                <head>
                                  <title> Debit Alert </title>
                                </head>
                                <body style="padding: 10px;  ">
                                <p>&nbsp; &nbsp;&nbsp;</p>

                              <p style="text-align: center;"><img alt="Ravennafin LOGO" src="https://ravennafin.com/images/logo.png" style="height:70px; width:64px" /></p>

                              <h1 style="     text-align: center;" ><span style="font-family:Comic Sans MS, cursive"><strong>Ravennafin&nbsp;</strong></span></h1>

                              <h2><span style="font-family:Comic Sans MS, cursive"><strong>Dear customer ,&nbsp;</strong></span></h2>

                              <p><span style="text-align: center;"  ><strong>&nbsp; &nbsp; &nbsp; Ravennafin DEBIT ALERT 
                              </strong><br><br>Please be informed that a Debit transaction occurred on your bank account.
                               kindly find details of transaction below:</span></p>

                              <div style="text-align:center">
                                <table border="1" cellpadding="1" cellspacing="1" style="width:100%">
                                <caption>transaction details</caption>
                                <tbody>
                                  <tr>
                                    <td><strong>&nbsp; &nbsp;Account Number </strong></td>
                                    <td>&nbsp; &nbsp;&nbsp;<strong>'.$send_acc.'</strong></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp; &nbsp;<strong>Amount Debit </strong></td>
                                    <td>&nbsp; &nbsp;&nbsp;<strong> USD'.$amount.'</strong></td>
                                  </tr><tr>
                                    <td>&nbsp; &nbsp;<strong>Previous Balance</strong></td>
                                    <td>&nbsp; &nbsp;&nbsp;<strong>  USD '.$send.'</strong></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp; &nbsp;<strong>Account Balance</strong></td>
                                    <td>&nbsp; &nbsp; &nbsp;<strong> USD '.$new.'</strong></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp; &nbsp;<strong>Time </strong></td>
                                    <td>&nbsp; &nbsp;&nbsp;<strong>'.date( "h : i : sa" ).'</strong></td>
                                  </tr>
                                  
                                  <tr>
                                    <td>&nbsp; &nbsp;<strong>Date </strong></td>
                                    <td>&nbsp; &nbsp; &nbsp;<strong>'.date( "Y-m-d" ).'</strong></td>
                                  </tr>
                                </tbody>
                              </table>
                              </div>


                              <p>&nbsp; As a result of this transaction the balance on this account is : USD  '.$send_acc.' </p>
                              <p> This is an automated Transaction Alert Service . You are getting this email because a transaction just occured on your account that met the threshold you set .</p>
                              <p><strong>Please ensure you do&nbsp; not&nbsp; reveal your pin , Online banking password , responses from your token ( token generated numbers ) or fill card number ( PAN ) to anyone.&nbsp; Ravennafin Would not request these details from you at any time.</strong></p>

                              <p><strong>Kindly note that mails containing your full card number would not be delivered.</strong></p>

                              <p><strong>Also , do not open links , respond to suspicious calls, mails or letters requesting your bank details . Such messages are fraudulent and are not from Ravennafin.</strong></p>

                              <p><strong>For enquiries please contact us</strong></p>

                              <p><strong>official website : www.ravennafin.com</strong></p>

                              <p><strong>official email :info@ravennafin.com</strong></p>

                              <p>&nbsp;</p>


                              <hr>
                              The Information contained and transmitted by this E-MAIL is proprietary to Ravennafin Bank and/or its Customer and is intended for use only by the individual or entity to which it is addressed, and may contain information that is privileged, confidential or exempt from a disclosure under applicable law.
                              If this is a forwarded message, the content of this E-MAIL may not have been sent with the authority of the Bank. Ravennafin shall not be liable for any mails sent without due authorisation or through unauthorised access.
                              If you are not the intended recipient, an agent of the intended recipient or a person responsible for delivering the information to the named recipient, you are notified that any use, distribution, transmission, printing, copying or dissemination of this information in any way or in any manner is strictly prohibited.
                              If you have received this communication in error, please delete this mail and notify us immediately at info@ravennafin.com.
                                </body> 

                              </html>
            '
            );
            $sendgrid = new \SendGrid('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');
            try {
                $response = $sendgrid->send($email);
                $sql1 = mysqli_query($this->conn , " UPDATE `transact` SET `complete` = 'yes' WHERE `transact`.`tran_id` = '$id'");
                  if ($sql1) {
             echo '<div class="alert alert-info"> successful  </div>
                        <script>
                        var a = "transaction.php" ;
                        window.location.assign(a);
                    </script>
                ';
         }
           }catch (Exception $e) {
                echo 'Caught exception: '. $e->getMessage() ."\n";
          }
      }

               $query7 = mysqli_query($this->conn, " UPDATE `transact` SET `complete` = 'yes' WHERE `transact`.`hash` = '$sen' ");
               // // echo mysqli_error($this->conn);
               // echo ' TAC Code added successful contact customer service for approval';
            }else{
              echo '<div> Wrong TAC Code. </div>';
            }
        }
    }
    
    function gettt(){
         $who = $_SESSION["cname"];
      $sql = mysqli_query($this->conn , " SELECT * FROM `transact` WHERE `who` = '$who' ");
      if (mysqli_num_rows($sql)) {
            $num = 1;
            while ($row = mysqli_fetch_assoc($sql)) {

              if ($row["complete"] == 'yes') {
                $real = 'Completed';
              }elseif ($row["complete"] == 'no') {
                $real = 'Uncompleted';
              }else{
                $real = 'Processing';
              }

              echo '
                    <tr>
                      <td>'.$num.'</td>
                      <td>'.($row["bank"] == 'same' ? 'Ravennafin' : $row["bank"]).'</td>
                      <td>'.$row["acc_name"].'</td>
                      <td> $'.$row["amount"].'</td>
                      <td>'.(($row["comment"] == 'none' OR $row["comment"] == NULL ) ? 'No comments available' : $row["comment"]).'</td>
                     
                      <td>'.$row["swift"].'</td>
                      <td>'.$row["bic"].'</td>
                      <td>'.$real.'</td>
                      <td><a href="transfer-fail.php?id='.$row["hash"].'&who='.$row["who"].'&to='.$row["acc_num"].'&am='.$row["amount"].'" target="_blank" class=" btn btn-info"> Check status </a> 
                      </td>
                      <td> '.$row["time"].'</td>
                    </tr>
                  ';
                  $num++;
                }   
              } 
         }
    function gettransact(){
      $who = $_SESSION["cname"];
      $sql = mysqli_query($this->conn , " SELECT * FROM `transact` WHERE `who` = '$who' ");
      if (mysqli_num_rows($sql)) {
          while ($row = mysqli_fetch_assoc($sql)) {
            if ($row["complete"] == 'yes') {
              $real = 'Completed';
            }elseif ($row["complete"] == 'no') {
              $real = 'Uncompleted';
            }else{
              $real = 'Processing';
            }
        echo '


      <div class=" panel col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center" style="border: 1px solid; border-radius: 3px;">
        
          <p style="margin-bottom: 0px;">Bank: '.($row["bank"] == 'same' ? 'Ravennafin' : $row["bank"]).'</p>
          <p style="margin-bottom: 0px;">Reciever: '.$row["acc_name"].'</p>
          <p style="margin-bottom: 0px;">Amount: '.$row["amount"].'</p>
          <p style="margin-bottom: 0px;">Status: '.$real.'</p>
          <p style="margin-bottom: 0px;"> <a href="transfer-fail.php?id='.$row["hash"].'" class=" btn btn-info"> Check status </a> </p>
          <p style="margin-bottom: 0px;">Time: '.$row["time"].'</p>
      </div>

            ';
       }   
      }else{
        echo '<div class="col-lg-12 col-md-12">
                <div class="dashboard-stat color-1">
                You don\'t have any transaction
                </div>      
            </div>';
      }      
    }
    function getransact(){
      $sql = mysqli_query($this->conn , " SELECT * FROM `transact` ");
      $num = 1;
      while ($row = mysqli_fetch_assoc($sql)) {
        echo '

        <tr>
        <td>'.$num.'</td>
        <td>'.$row["who"].'</td>
        <td>'.($row["bank"] == 'same' ? 'Ravennafin' : $row["bank"]).'</td>
        <td>'.$row["acc_name"].' '.$row["acc_num"].' '.($row["swift"] == 'none' ? ' ' : $row["swift"].' '.$row["country"]).'</td>
        <td>'.($row["complete"]  == 'yes' ? 'completed' : 'uncompleted').'</td>
        <td> $'.$row["amount"].'</td>
        <td>'.($row["complete"]  == 'yes' ? '<a href="unconfirm_tran.php?who='.$row["who"].'&to='.$row["acc_num"].'&id='.$row["tran_id"].'&am='.$row["amount"].'" class="btn btn-danger"> unconfirm </a>' :  
          ($row["complete"] == 'note' ? ' ' : '<a href="nott.php?who='.$row["who"].'&to='.$row["acc_num"].'&am='.$row["amount"].'&id='.$row["tran_id"].'"> STOP </a> <a href="confirm_tran.php?who='.$row["who"].'&to='.$row["acc_num"].'&am='.$row["amount"].'&id='.$row["tran_id"].'" class="btn btn-info"> confirm  </a>').' ').' </td>
        <td>'.$row["swift"].' / '.$row["bic"].'</td>
        <td><a href="delete_tran.php?id='.$row["tran_id"].'" class="btn btn-danger"> Delete  </a></td>
        <td><a href="editime.php?id='.$row["tran_id"].'" class="btn btn-info"> Edit time </a> '.$row["time"].'</td>
      </tr>

            ';
        $num++;    
      }
    } 


    function getid(){
      $id = $_GET["id"];
      $query = mysqli_query($this->conn , " SELECT * FROM `transact` WHERE `tran_id` = '$id' ");
      $row = mysqli_fetch_assoc($query);
      echo $row["time"];
    }
    function upid(){
      $id = $_GET["id"];
      if (isset($_POST["cc"])) {
        $time = $_POST["mtime"];
        $query = mysqli_query($this->conn , " UPDATE `transact` SET `time` = '$time' WHERE `transact`.`tran_id` = '$id' ");
        if ($query) {
          echo ' <div class="alert alert-info "> Updated completed. </div>'; 
        }
      }
    }
    function delete_tran(){
      $id = $_GET["id"];      
      $sql = mysqli_query($this->conn , " DELETE FROM `transact` WHERE `transact`.`tran_id` = '$id' ");
      if ($sql) {
        header('location: transaction.php');
      }

    }

    function nott(){
      $who = $_GET["who"];
      $to = $_GET["to"];
      $amount = $_GET["am"];
      $id = $_GET["id"];      
     $sql1 = mysqli_query($this->conn , " UPDATE `transact` SET `complete` = 'note' WHERE `transact`.`tran_id` = '$id'");
      if ($sql1) {
       echo '<div class="alert alert-info"> successful  </div>
                <script>
                 var a = "transaction.php" ;
                 window.location.assign(a);
                </script>
                ';
         }

      }
    
    function confirmtrans(){
      $who = $_GET["who"];
      $to = $_GET["to"];
      $amount = $_GET["am"];
      $id = $_GET["id"];
      $sql = mysqli_query($this->conn , "SELECT * FROM `balance` , `customer` WHERE `balance`.`bal_acc` = `customer`.`customer_num` AND `customer`.`customer_un` = '$who' ");
      $row = mysqli_fetch_assoc($sql);
      $send_acc = $row["bal_acc"];
      $this->em = $row["customer_email"];
      $send = $row["bal_amount"];
      $new = $send - $amount;
    // echo $new .' = '.$send . ' - ' .  $amount;
      $query1 = " UPDATE `balance` SET `bal_amount`= '$new'  WHERE `bal_acc`= '$send_acc' ";
      $process1 = mysqli_query($this->conn , $query1);
      if ($process1) {
         $this->to = $this->em;
         $this->subject = "Debit  alert ";

          $email = new \SendGrid\Mail\Mail(); 
            $email->setFrom("noreply@ravennafin.com", "Ravennafin");
            $email->setSubject("Ravennafin Debit  Alert ");
            $email->addTo("$this->to", " Cutomer ");
            $email->addContent("text/plain", "Welcome to Ravennafin");
            $email->addContent(
                "text/html", '
                              <html>
                                <head>
                                  <title> Debit Alert </title>
                                </head>
                                <body style="padding: 10px;  ">
                                <p>&nbsp; &nbsp;&nbsp;</p>

                              <p style="text-align: center;"><img alt="Ravennafin LOGO" src="https://ravennafin.com/images/logo.png" style="height:70px; width:64px" /></p>

                              <h1 style="     text-align: center;" ><span style="font-family:Comic Sans MS, cursive"><strong>Ravennafin&nbsp;</strong></span></h1>

                              <h2><span style="font-family:Comic Sans MS, cursive"><strong>Dear customer ,&nbsp;</strong></span></h2>

                              <p><span style="text-align: center;"  ><strong>&nbsp; &nbsp; &nbsp; Ravennafin DEBIT ALERT 
                              </strong><br><br>Please be informed that a Debit transaction occurred on your bank account.
                               kindly find details of transaction below:</span></p>

                              <div style="text-align:center">
                                <table border="1" cellpadding="1" cellspacing="1" style="width:100%">
                                <caption>transaction details</caption>
                                <tbody>
                                  <tr>
                                    <td><strong>&nbsp; &nbsp;Account Number </strong></td>
                                    <td>&nbsp; &nbsp;&nbsp;<strong>'.$send_acc.'</strong></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp; &nbsp;<strong>Amount Debit </strong></td>
                                    <td>&nbsp; &nbsp;&nbsp;<strong> USD'.$amount.'</strong></td>
                                  </tr><tr>
                                    <td>&nbsp; &nbsp;<strong>Previous Balance</strong></td>
                                    <td>&nbsp; &nbsp;&nbsp;<strong>  USD '.$send.'</strong></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp; &nbsp;<strong>Account Balance</strong></td>
                                    <td>&nbsp; &nbsp; &nbsp;<strong> USD '.$new.'</strong></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp; &nbsp;<strong>Time </strong></td>
                                    <td>&nbsp; &nbsp;&nbsp;<strong>'.date( "h : i : sa" ).'</strong></td>
                                  </tr>
                                  
                                  <tr>
                                    <td>&nbsp; &nbsp;<strong>Date </strong></td>
                                    <td>&nbsp; &nbsp; &nbsp;<strong>'.date( "Y-m-d" ).'</strong></td>
                                  </tr>
                                </tbody>
                              </table>
                              </div>


                              <p>&nbsp; As a result of this transaction the balance on this account is : USD  '.$send_acc.' </p>
                              <p> This is an automated Transaction Alert Service . You are getting this email because a transaction just occured on your account that met the threshold you set .</p>
                              <p><strong>Please ensure you do&nbsp; not&nbsp; reveal your pin , Online banking password , responses from your token ( token generated numbers ) or fill card number ( PAN ) to anyone.&nbsp; Ravennafin Would not request these details from you at any time.</strong></p>

                              <p><strong>Kindly note that mails containing your full card number would not be delivered.</strong></p>

                              <p><strong>Also , do not open links , respond to suspicious calls, mails or letters requesting your bank details . Such messages are fraudulent and are not from Ravennafin.</strong></p>

                              <p><strong>For enquiries please contact us</strong></p>

                              <p><strong>official website : www.ravennafin.com</strong></p>

                              <p><strong>official email :info@ravennafin.com</strong></p>

                              <p>&nbsp;</p>


                              <hr>
                              The Information contained and transmitted by this E-MAIL is proprietary to Ravennafin Bank and/or its Customer and is intended for use only by the individual or entity to which it is addressed, and may contain information that is privileged, confidential or exempt from a disclosure under applicable law.
                              If this is a forwarded message, the content of this E-MAIL may not have been sent with the authority of the Bank. Ravennafin shall not be liable for any mails sent without due authorisation or through unauthorised access.
                              If you are not the intended recipient, an agent of the intended recipient or a person responsible for delivering the information to the named recipient, you are notified that any use, distribution, transmission, printing, copying or dissemination of this information in any way or in any manner is strictly prohibited.
                              If you have received this communication in error, please delete this mail and notify us immediately at info@ravennafin.com.
                                </body> 

                              </html>
            '
            );
            $sendgrid = new \SendGrid('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');
            try {
                $response = $sendgrid->send($email);
                $sql1 = mysqli_query($this->conn , " UPDATE `transact` SET `complete` = 'yes' WHERE `transact`.`tran_id` = '$id'");
                  if ($sql1) {
             echo '<div class="alert alert-info"> successful  </div>
                        <script>
                        var a = "transaction.php" ;
                        window.location.assign(a);
                    </script>
                ';
         }
           }catch (Exception $e) {
                echo 'Caught exception: '. $e->getMessage() ."\n";
          }
      }
    }
    function unconfirmtrans(){
      $who = $_GET["who"];
      $to = $_GET["to"];
      $amount = $_GET["am"];
      $id = $_GET["id"];
      $sql = mysqli_query($this->conn , "SELECT * FROM `balance` , `customer` WHERE `balance`.`bal_acc` = `customer`.`customer_num` AND `customer`.`customer_un` = '$who' ");
      $row = mysqli_fetch_assoc($sql);
      $send_acc = $row["bal_acc"];
      $this->em = $row["customer_email"];
      $send = $row["bal_amount"];
      $new = $send + $amount;

      $query1 = " UPDATE `balance` SET `bal_amount`= '$new'  WHERE `bal_acc`= '$send_acc' ";
      $process1 = mysqli_query($this->conn , $query1);
      if ($process1) {
         $this->to = $this->em;
         $this->subject = "Credit  alert ";


          $email = new \SendGrid\Mail\Mail(); 
            $email->setFrom("noreply@ravennafin.com", "Ravennafin");
            $email->setSubject("Ravennafin Credit Alert ");
            $email->addTo("$this->to", " Cutomer ");
            $email->addContent("text/plain", "Welcome to Ravennafin");
            $email->addContent(
                "text/html", '
                              <html>
  <head>
    <title> Debit Alert </title>
  </head>
  <body style="padding: 10px;">
  <p>&nbsp; &nbsp;&nbsp;</p>

<p style="text-align: center;"><img alt="Ravennafin LOGO" src="https://ravennafin.com/images/logo.png" style="height:70px; width:64px" /></p>

<h1 style="     text-align: center;" ><span style="font-family:Comic Sans MS, cursive"><strong>Ravennafin&nbsp;</strong></span></h1>

<h2><span style="font-family:Comic Sans MS, cursive"><strong>Dear customer ,&nbsp;</strong></span></h2>

<p><span style="text-align: center;"  ><strong>&nbsp; &nbsp; &nbsp; Ravennafin CREDIT ALERT 
</strong><br><br>Please be informed that a Credit transaction occurred on your bank account.
 kindly find details of transaction below:</span></p>

<div style="text-align:center">
  <table border="1" cellpadding="1" cellspacing="1" style="width:100%">
  <caption>transaction details</caption>
  <tbody>
    <tr>
      <td><strong>&nbsp; &nbsp;Account Number </strong></td>
      <td>&nbsp; &nbsp;&nbsp;<strong>'.$send_acc.'</strong></td>
    </tr>
    <tr>
      <td>&nbsp; &nbsp;<strong>Amount Debit </strong></td>
      <td>&nbsp; &nbsp;&nbsp;<strong> USD'.$amount.'</strong></td>
    </tr><tr>
      <td>&nbsp; &nbsp;<strong>Previous Balance</strong></td>
      <td>&nbsp; &nbsp;&nbsp;<strong>  USD '.$send.'</strong></td>
    </tr>
    <tr>
      <td>&nbsp; &nbsp;<strong>Account Balance</strong></td>
      <td>&nbsp; &nbsp; &nbsp;<strong> USD '.$new.'</strong></td>
    </tr>
    <tr>
      <td>&nbsp; &nbsp;<strong>Time </strong></td>
      <td>&nbsp; &nbsp;&nbsp;<strong>'.date( "h : i : sa" ).'</strong></td>
    </tr>
    
    <tr>
      <td>&nbsp; &nbsp;<strong>Date </strong></td>
      <td>&nbsp; &nbsp; &nbsp;<strong>'.date( "Y-m-d" ).'</strong></td>
    </tr>
  </tbody>
</table>
</div>


<p>&nbsp; As a result of this transaction the balance on this account is : USD  '.$send_acc.' </p>
<p> This is an automated Transaction Alert Service . You are getting this email because a transaction just occured on your account that met the threshold you set .</p>
<p><strong>Please ensure you do&nbsp; not&nbsp; reveal your pin , Online banking password , responses from your token ( token generated numbers ) or fill card number ( PAN ) to anyone.&nbsp; Ravennafin Would not request these details from you at any time.</strong></p>

<p><strong>Kindly note that mails containing your full card number would not be delivered.</strong></p>

<p><strong>Also , do not open links , respond to suspicious calls, mails or letters requesting your bank details . Such messages are fraudulent and are not from Ravennafin.</strong></p>

<p><strong>For enquiries please contact us</strong></p>

<p><strong>official website : www.ravennafin.com</strong></p>

<p><strong>official email :info@ravennafin.com</strong></p>

<p>&nbsp;</p>


<hr>
The Information contained and transmitted by this E-MAIL is proprietary to Ravennafin and/or its Customer and is intended for use only by the individual or entity to which it is addressed, and may contain information that is privileged, confidential or exempt from a disclosure under applicable law.
If this is a forwarded message, the content of this E-MAIL may not have been sent with the authority of the Bank. Ravennafin shall not be liable for any mails sent without due authorisation or through unauthorised access.
If you are not the intended recipient, an agent of the intended recipient or a person responsible for delivering the information to the named recipient, you are notified that any use, distribution, transmission, printing, copying or dissemination of this information in any way or in any manner is strictly prohibited.
If you have received this communication in error, please delete this mail and notify us immediately at info@ravennafin.com.
  </body> 

</html>

            '
            );
            $sendgrid = new \SendGrid('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');
            try {
                $response = $sendgrid->send($email);
            
                 $sql1 = mysqli_query($this->conn , " UPDATE `transact` SET `complete` = 'no' WHERE `transact`.`tran_id` = '$id'");
                if ($sql1) {
                     echo '<div class="alert alert-info"> successful  </div>
                      <script>
                       var a = "transaction.php" ;
                       window.location.assign(a);
                      </script>
                      ';
               }

            } catch (Exception $e) {
                echo 'Caught exception: '. $e->getMessage() ."\n";
            }
      }
    }

    function check_freeze(){
    
      $query = mysqli_query($this->conn , " SELECT * FROM `customer` ");
      $row = mysqli_fetch_assoc($query);
      if ($row['freeze'] == 'yes') {
        header("location: user_account_blocked.php");
        //echo '<span style="color:red;">done</span>';
    }
  }
  }
?>
