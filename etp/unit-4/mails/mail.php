<?php
$to="vanshkumar1680@gmail.com";
$sub="Testing Email";
$message="hello Laxman";
$from="kumarvansh16aug@gmail.com";
$headers="From : $from";
$check=mail($to,$sub,$message,$from,$headers);
if($check){
    echo "Mail sent sucessfully";
}else{
    echo "Mail not sent sucessfully";
}
?>