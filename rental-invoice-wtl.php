<?php
session_start();

require_once "dompdf/autoload.inc.php";

  $car=$_SESSION['car'];
  $phone =$_SESSION['phone'] ; 
  $pickup = $_SESSION['pickup'] ; 
  $drop= $_SESSION['drop'] ; 
  $date= $_SESSION['date'] ; 
  $date1 = new DateTime($date);
  $_REQUEST['date'] = $date1->format('d-m-Y');
  $time= $_SESSION['time'] ; 
  $trip = $_SESSION['trip'];
  $name = $_SESSION['name'];
  $email= $_SESSION['email'];
  $service=$_SESSION['service'];
  $parking = $_SESSION['parking'];
  $gst=$_SESSION['gst'];
  $dis = $_SESSION['distance'];
  $amount=$_SESSION['amount'];
  $dateend= $_SESSION['dateend']; 
  $timeend= $_SESSION['timeend']; 
  $new_amount=$_SESSION['new_amount'];
  $bookid = $_SESSION['bookid'];
  $driver = $_SESSION['driver'];
  $distance = $_SESSION['distance'];
  $toll = $_SESSION['toll'];
  $int = (int)$distance;
  $days = $_SESSION['days'];
  $extrahours = $_SESSION['extrahours'];
  $base = $_SESSION['base'];
  $extrakm = $_SESSION['extrakm'];
  $hr = $_SESSION['hr'];
  $rentalamount = $_SESSION['rentalamount'];
  $extrahoursrs = $_SESSION['extrahoursrs'];
  $extrakmrs = $_SESSION['extrakmrs'];
  $hour = $_SESSION['mySelect'];
  $base = $_SESSION['base'];
  $hoursamount = $extrahoursrs * $extrahours;
  $kmamount = $extrakmrs * $extrakm;
  $bookingtype = 'Custom';
  
   $totalpaidAmt = $_SESSION['totalpaid_amt'];
  $remainAmt = $_SESSION['remain_amt'];
  
  
  $companyname = $_SESSION['companyname'];
    $companyaddress =  $_SESSION['companyaddress'];
    $gstno =  $_SESSION['gstno'];


// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$pdf = new Dompdf();
$img = 'data:image/png;base64,' . base64_encode(@file_get_contents('images/wtl-logo.png'));
$pdf->set_base_path("css/");


$html = '<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    '.file_get_contents("css/bootstrap.min.css").'
 table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td {
        border: 1px solid #000;
        text-align: left;
        padding: 5px;
        background-color: #8889d1;
        color: black;
    }

    th {
        border: 1px solid #000;
        text-align: center;
        padding: 5px;
        background-color: #8889d1;
        color: white;
    }


    
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-4">
                <img src="' . $img . '" height="70px" width="120px" alt="logo">
            </div>
            <div class="col-xs-4">
            <p>&emsp;</p>
                <p>&emsp;</p>
                <h1 style="text-align:left;">Invoice</h1>
            </div>
            <div class="col-xs-4">
                <p>&emsp;</p>
                <p>&emsp;</p>
                <p>&emsp;</p>
                <p>&emsp;</p>
                <p style="text-align:center;"><strong>Date: '.$_REQUEST['date'].'</strong></p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <hr style="height: 10px; background-color:#8889d1; margin-top: 0px;">
            </div>
        </div>
        <div class="row" style="padding-top:20px;">
            <div class="col-xs-4">
                 <p><strong>'.$companyname.'</strong><br>
                <strong>'.$companyaddress.'</strong><br>
                <strong>'.$name.'</strong><br>
                  Email: '.$email.'<br>
                  Mobile:  '.$phone.'<br>
                  GSTNO:   '.$gstno.'<br>
                  Invoice No: '.$bookid.'</p>
            </div>
            <div class="col-xs-3"></div>
            <div class="col-xs-5">
                <p><strong>WTL Tourism Pvt. Ltd.</strong><br>
                    Mobile: 9325578091<br>
                    Email : contact@worldtriplink.com<br>
                    Website: worldtriplink.com<br>
                    GSTIN: 27AADCW8531C1ZD</p>
            </div>
        </div>
        <div class="row" style="padding-top:20px;">
         <div class="col-xs-1"></div>
            <div class="col-md-10">
                <h5 style="background-color: #000; color:white; padding:8px;"><strong>TRIP DETAILS</strong></h5>
                <table class="table">
                    <tr>
                        <td style="width:30%; padding-left:20px";><strong>Pickup Location:</strong></td>
                        <td style="width:70%;">'.$pickup.'</td>
                    </tr>
                    
                    <tr>
                        <td style="padding-left:20px;"><strong>Drop Location:</strong></td>
                        <td>'.$drop.'</td>
                    </tr>
                    <tr>
                        <td  style=" padding-left:20px;"><strong>Journey Type:</strong></td>
                       <td>'.$trip.'</td>
                       </tr>
                    <tr>
                        <td  style=" padding-left:20px;"><strong>Fixed Km:</strong></td>
                        <td>'.$int.'</td>
                    </tr>
                    <tr>
                        <td  style=" padding-left:20px;"><strong>Extra Hours:</strong></td>
                        <td>'.$extrahours.' Hr</td>
                    </tr>
                    <tr>
                        <td  style=" padding-left:20px;"><strong>Extra Distance:</strong></td>
                        <td>'.$extrakm.' Km</td>
                    </tr>
                    <tr>
                        <td  style=" padding-left:20px;"><strong>Date &amp;&emsp;&emsp;&emsp; Time:</strong></td>
                        <td>'.$_REQUEST['date'].'&emsp;&emsp;&emsp; '.$time.'</td>
                    </tr>
                </table>
            </div>
           <div class="col-xs-1"></div>
        </div>

        <div class="row" style="padding-top:1px;">
         <div class="col-xs-4"></div>
            <div class="col-xs-7">
                <table class="table2">
                    <tr>
                        <th colspan="2" style="text-align:center; background-color: black;"><strong>BOOKING DETAILS</strong></th>
                    </tr>
                    <tr>
                        <td style="width:50%; background-color: white;"><strong>Vehicle Type:</strong></td>
                        <td style="width:50%; background-color: white;">'.$car.'</td>
                    </tr>
                    <tr>
                        <td style="background-color: white;"><strong>Base Fare:</strong></td>
                        <td style="background-color: white;">Rs.'.$base.'</td>
                    </tr>';
                    
                   if($toll!= 0){
                       $html .= '<tr>
                        <td style="background-color: white;"><strong>Toll:</strong></td>
                        <td style="background-color: white;">Rs.'.$toll.'</td>
                    </tr>';
                   }
                      if($parking!= 0){
                            $html .= '<tr>
                        <td style="background-color: white;"><strong>Parking:</strong></td>
                        <td style="background-color: white;">Rs.'.$parking.'</td>
                    </tr>';
                    }
                      $html .= '
                    <tr>
                        <td style="background-color: white;"><strong>Extra Hours Charges:</strong></td>
                        <td style="background-color: white;">Rs.'.$hoursamount.'</td>
                    </tr>
                    <tr>
                        <td style="background-color: white;"><strong>Extra Km Charges:</strong></td>
                        <td style="background-color: white;">Rs.'.$kmamount.'</td>
                    </tr>
                    <tr>
                        <td style="background-color: white;"><strong>GST Tax (5%):</strong></td>
                        <td style="background-color: white;">Rs.'.$gst.'</td>
                    </tr>
                    <tr>
                        <td style="background-color: white;"><strong>Subtotal:</strong></td>
                        <td style="background-color: white;">Rs.'.$rentalamount.'</td>
                    </tr>
                    <tr>
                        <td style="background-color: white;"><strong>Paid Amount:</strong></td>
                        <td style="background-color: white;">Rs.'.$totalpaidAmt.'</td>
                    </tr>';
                     if($rentalamount!=$totalpaidAmt){
                     $html .= ' <tr>
                        <td style="background-color: white;"><strong>Remaining Amount:</strong></td>
                        <td style="background-color: white;">Rs.'.$remainAmt.'</td>
                    </tr>';
                     }
                    $html .= ' 
                </table>
            </div>
              <div class="col-xs-1"></div>
        </div>

    </div>
</body>

</html>';

$pdf->loadhtml($html);

// (Optional) Setup the paper size and orientation
$pdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$pdf->render();

$canvas = $pdf->get_canvas();
$canvas->page_text(530, 820, "Page {PAGE_NUM} of {PAGE_COUNT}", null, 10, array(0, 0, 0));

// Output the generated PDF to Browser
$pdf->stream(''.$bookid.'.pdf', array('Attachment' => 0));
