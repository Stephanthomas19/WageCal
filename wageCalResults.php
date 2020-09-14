<?php

if(isset($_POST['btnSubmit'])){

    $name = $_POST['name'];

    //Should be between 500 and 5000
    $hrlyRate = $_POST['hrlyRate'];

    //Should be between 4 and 13
    $hrPerDay = $_POST['hrPerDay'];

    // should be 6 
    $daysWrk = $_POST['daysWrk'];

    //determined by user
    $travelExp = $_POST['travelExp'];

    //determined by user
    $lunchExp = $_POST['lunchExp'];

    if(($hrlyRate>=500) && ($hrlyRate<=5000) && (($hrPerDay>=4) && ($hrPerDay<=13)) &&
        ($daysWrk ==6)) {

            $totalExp = ($travelExp * $daysWrk) + ($lunchExp * $daysWrk);

            $pay = ($hrlyRate * $hrPerDay) * $daysWrk;
        
            $wage = $pay  - $totalExp;
            
            $monthlyWage = $wage * 4.28;
             
            echo "<h2> Welcome " .$name. ", Thanks for inputing your information </h2>" ;
            echo "<h3> Your wages are as follows: </h3>";
            echo "<h4> Hourly Rate - $" .$hrlyRate. "</h4>";
            echo "<h4> Hours Worked -  " .$hrPerDay. "</h4>";
            echo "<h4> Days Worked - " .$daysWrk. "</h4>";
            echo "<h4> Daily Travel Expense - $" .$travelExp. "</h4>";
            echo "<h4> Daily Lunch Expense - $" .$lunchExp. "</h4>";
        
            echo "<h2> Your Weekly Wages are - $" .$wage. "</h2>";
            
            echo "<h2> Your Monthly Wages are - $" .$monthlyWage. "</h2>";
    }else{
        echo "<h1> You Entered an value that is incorrect </h1>";
    }

   


}







?>