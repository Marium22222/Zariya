<?php 
    $conn=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($conn,"jobrecruitmentsystem");
    $appid=$_GET['rn1'];
    $jid=$_GET['jid'];

    $query1=mysqli_query($conn,"update applicantapplied set statuss='accepted' where aplicantId='$appid' and jobId='$jid'");
?>