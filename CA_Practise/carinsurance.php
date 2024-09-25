<?php
// Sample input
$age = 25;
$hasLicense = true;
$drivingExperience = 3;

// Determine eligibility for car insurance
if($age>=18 && $hasLicense &&$drivingExperience>=3){
echo "The person will be issued car  inurance";
}
else{
    echo "The person will not be issued car  inurance";  
}
// if ($age > 18) {
//     echo "Ineligible for car insurance: Must be at least 18 years old.";
// } elseif (!$hasLicense) {
//     echo "Ineligible for car insurance: Must have a valid driving license.";
// } elseif ($drivingExperience < 1) {
//     echo "Ineligible for car insurance: Must have at least 1 year of driving experience.";
// } else {
//     echo "Eligible for car insurance.";
// }
?>
