<?php
//Server Connectivity
require 'server_con.php';
error_reporting(0);
$mailId = $_POST['mail'];
//validate server connecitivity
if(!$conn)
{
    echo "Server Error";
}
else
{
    //fetching data from the form

    //Business Details
    $businessname =  $_POST['businessname'];
    $category = $_POST['category'];
    $phone = $_POST['phone'];
    $website = $_POST['website'];
    $email = $_POST['email'];
    $businessaddress1 = $_POST['businessaddress1'];
    $businessaddress2 = $_POST['businessaddress2'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $postcode = $_POST['postcode'];
    $country = $_POST['country'];

    //Authorised Person Details
  $authtitle = $_POST['authtitle'];
  $authfname = $_POST['authfname'];
  $authmname = $_POST['authmname'];
  $authlname = $_POST['authlname'];
  $authdesignation = $_POST['authdesignation'];
  $authgender = $_POST['authgender'];
  $authdob = $_POST['authdob'];
  $authprimaryemail = $_POST['authprimaryemail'];
  $authsecondaryemail = $_POST['authsecondaryemail'];
  $authphone = $_POST['authphone'];
  $authmobile = $_POST['authmobile'];
  $authaltcontact = $_POST['authaltcontact'];
  $authpropertyno = $_POST['authpropertyno'];
  $authstreetname = $_POST['authstreetname'];
  $authcity = $_POST['authcity'];
  $authstate = $_POST['authstate'];
  $authpostcode = $_POST['authpostcode'];
  $authcountry = $_POST['authcountry'];
  $meetingdate = $_POST['meetingdate'];
  $meetingtime = $_POST['meetingtime'];
  $authleadsource = $_POST['authleadsource'];
  $authagentcomments = $_POST['authagentcomments'];

// Assuming all arrays have the same length
    $fieldCount = count($authtitle);

    for($i=0; $i<$fieldCount; $i++)
    {

    //1st Query for Business Details
     $BusinessDetailsQuery = "INSERT INTO fr_business_details VALUES('','$businessname',
                                                            '$category',
                                                            '$phone',
                                                            '$website',
                                                            '$email',
                                                            '$businessaddress1',
                                                            '$businessaddress2',
                                                            '$city',
                                                            '$state',
                                                            '$postcode',
                                                            '$country','$authfname[$i]','$mailId',CURRENT_TIMESTAMP)";
    //2nd Query for Authorised Person Details
  
    $AuthorisedPersonQuery = "INSERT INTO fr_authorised_person_details VALUES('','$authtitle[$i]',
                                                                      '$authfname[$i]',
                                                                      '$authmname[$i]', 
                                                                      '$authlname[$i]', 
                                                                      '$authdesignation[$i]', 
                                                                      '$authgender[$i]',
                                                                      '$authdob[$i]', 
                                                                      '$authprimaryemail[$i]',
                                                                      '$authsecondaryemail[$i]', 
                                                                      '$authphone[$i]', 
                                                                      '$authmobile[$i]', 
                                                                      '$authaltcontact[$i]',
                                                                      '$authpropertyno[$i]', 
                                                                      '$authstreetname[$i]',
                                                                      '$authcity[$i]',
                                                                      '$authstate[$i]',
                                                                      '$authpostcode[$i]',
                                                                      '$authcountry[$i]',
                                                                      '$meetingdate', 
                                                                      '$meetingtime',
                                                                      '$authleadsource',
                                                                      '$authagentcomments','$businessname','$mailId',CURRENT_TIMESTAMP)";
 
 $send2 = mysqli_query($conn, $AuthorisedPersonQuery);
} 
//Comments query
$query3 = "INSERT INTO fr_meeting_comments VALUES ('', '$authagentcomments', '$mailId','$email',CURRENT_TIMESTAMP)";

    if(isset($_POST['create']))
    {
        //1st query firing
    $send1 = mysqli_query($conn, $BusinessDetailsQuery);
    $send3 = mysqli_query($conn, $query3);
    if($send1 && $send2 && $send3)
    {
        $sql1 = "SELECT * FROM fr_authorised_person_details";
        $sql2 = "SELECT * FROM fr_business_details";
        $sql3 = "SELECT * FROM fr_user_details WHERE User_Type='Quality'";

        $result1 = $conn->query($sql1);
        $result2 = $conn->query($sql2);
        $result3 = $conn->query($sql3);
        if($result1->num_rows > 0 && $result2->num_rows > 0 && $result3->num_rows >0)
        {
            $lead1 = array();
            $lead2 = array();
            $agent = array();
            while($row1 = $result1->fetch_assoc())
            {
                $lead1[] = $row1;
            }
            while($row2 = $result2->fetch_assoc())
            {
                $lead2[] = $row2;
            }
            while($row = $result3->fetch_assoc())
            {
                $agent[] = $row;
            }
            $leadCount = count($lead1);
            $agentCount = count($agent);
            $agentIndex = 0;

            for($j=0; $j < $leadCount; $j++)
            {
                $agentIndex = $j % $agentCount;
                $qry = "INSERT INTO quality_pending_distribute VALUES('',
                CURRENT_TIMESTAMP,
                '".$lead1[$j]['Created_By']."',
                '".$lead1[$j]['Business_Name']."',
                '".$lead1[$j]['Meeting_Date']."',
                '".$lead1[$j]['Meeting_Time']."',
                '".$lead1[$j]['First_Name']."',
                '".$lead2[$j]['Phone_No']."',
                '".$lead1[$j]['Mobile_No']."',
                '".$lead2[$j]['Email_Id']."',
                '".$lead2[$j]['Website']."',
                '".$lead1[$j]['Agent_Comments']."',
                '".$agent[$agentIndex]['User_Name']."')";
                mysqli_query($conn, $qry);
            }
             echo "<script>
                    window.alert('Meeting Created Successfully')
                    window.location.assign('Agent_View_Meeting.php?bname=$businessname&mail=$mailId')
                </script>";
        }
           
    }
    else
    {
      echo "<script>alert('Something Went Wrong!!!!!!!!!')
            window.history.back()
      </script>";
  
    //echo "Error Found ". mysqli_error($conn);
      
    }
}
mysqli_close($conn);
}
?>