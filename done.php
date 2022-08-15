<?php

// First  we have to check if the form is submitted via the POST
	
	
	if(isset($_POST['submit'])){
		// If the form is submitted we are gonna create a new associative array
		// to hold the values we will store.
		$new_message = array(
			
			"first-name" => $_POST['fname'],
			"last-name" => $_POST['lname'],
			"email" => $_POST['email'],
			"country" => $_POST['country'],
			"Gender" => $_POST['gender'],
			"Dname" => $_POST['Dname'],
			"country" => $_POST['country']

		);
		
		// Before storing the $new_message[] array, we have to check if this is 
		// the first record.
		
		if(filesize("messages.json") == 0){
			// if this is the first record, we creating an array to hold out data.
			$first_record = array($new_message);
			// The only purpose of this step is to create an array inside the json 
			// file to hold our messages. You will see in sec.
			
			/* I'll assign the record to a generic variable for later use. */
			$data_to_save = $first_record; 
		}else{
			
			$old_records = json_decode(file_get_contents("messages.json"));

			  
			array_push( $old_records , $new_message);

			$data_to_save = $old_records;
		}

		//  store the data to the file (messages.json).
		if(!file_put_contents("messages.json", json_encode($data_to_save, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE), LOCK_EX)){
			// if something went wrong, we are showing an error message.
			$error = "Error storing data, please try again";
		}else{
			// and if everything went ok, we show a success message.
			$success =  "Your data is stored successfully";
		}
	}




	
//var_dump($_POST);
// second we creat confirm screen to displat info

$type;

if($_POST["gender"]=="Male")
{
$type='Mr';
}
else{
    $type='Miss';
};



echo "<h1>Thanks". " ". $type ." ".$_POST["fname"]." ".$_POST["lname"]."</h1>"."<br>";
echo "Please Review Your Information"."<br>";
echo "Name is : ".$_POST["fname"]." ".$_POST["lname"]."<br>";
echo "you are frome : " .$_POST["country"]."<br>";
echo "Address is : " .$_POST["address"]."<br>";
echo "Your Email is : ".$_POST["email"]."<br>";
echo "Your department is  : ".$_POST["Dname"]."<br>";


