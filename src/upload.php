<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Jason Brashear
 * Date: 3/21/12
 * Time: 2:39 PM
 * PDS File Upload for creating large file to upload to the server for transfer to clients and reverse.
 */
// Include config
include_once "config.inc.php";
// Include ezSQL
include_once "ez_sql.php";
$uploadDate = date("U"); // timestamp for right now
// Get my post variables and set them up for the email and database.

//This assigns the subdirectory to save into... Does it exists??
$target = USENDIT_UPLOADS;

$sender_full_name = $_POST['full_name'];
$sender_email = $_POST['email'];
$receiver_email = $_POST['eu_email'];
$fileMessage = $_POST['msg'];

//This function separates the extension from the rest of the file name and returns it .
function findexts ($filename) {
    $filename = strtolower($filename) ;
    $exts = split("[/\\.]", $filename) ;

    $n = count($exts)-1;
    $exts = $exts[$n];
    return $exts; }
//This applies the function to our file
$ext = findexts ($_FILES['uploaded']['name']) ;
$original = $_FILES['uploaded']['name'];
//This line assigns a random number to a variable. You could also use a timestamp here if you prefer.
$ran = rand () ;

// hash it!
$ran1 = md5($ran);

//This takes the random number generated and adds a . on the end, so it is ready of the file extension to be appended.
$ran2 = $ran1.".";


//This combines the directory, the random file name, and the extension
$target = $target . $ran2.$ext;

if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target))
         {
        echo "The file has been uploaded as ".$ran2.$ext; //testing for now.
            }
        else
        {
            echo "Sorry, there was a problem uploading your file."; // echo is for testing convert to a variable for html output.

        }


// Now we need to insert entry into the database if the file was sucesful.

//$test = $db->query("INSERT INTO fileUpload (id,) VALUES (NULL,$pds_full_name,$pds_email,$receiver_email,$fileMessage,$ran2,'too large for email','Y')");
$db->query("INSERT INTO fileUpload (senderName, SenderEmail, receiverEmail, fileMessage, fileKey, 	fileNameOriginal, fileReason)
VALUES ('$sender_full_name','$sender_email','$receiver_email','$fileMessage','$ran1','$original','File too Large for Email')");
// $db->debug();
// now we need to create the email for sender



// now we need to email the recipient
// Contact subject
$subject ="You Have a New file from $sender_full_name Sent By uSendit";
// Details
$message="$fileMessage";

// Mail of sender
$mail_from="$sender_email";
// From
$header="from: $sender_full_name <$mail_from>";

// Enter your email address
$to ="$receiver_email";

$send_contact=mail($to,$subject,$message,$header);

// Check, if message sent to your email
// display message "We've recived your information"
if($send_contact){
    echo "<br /> An Email has been sent to " . "$receiver_email";
}
else {
    echo "ERROR";
}




