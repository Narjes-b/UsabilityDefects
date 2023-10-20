<?php
	
function extractZip($file, $target){
	
	// Creating new ZipArchive object
	$zip = new ZipArchive();
	
	// Opening the file
    $open = $zip->open($file);
	
	//Checking if file has been opened properly
    if($open === true) {
		
		// Extracting the zip file
        $zip->extractTo($target);
		
		//Closing the zip file
        $zip->close();
        
		unlink($file);
		return true;
    } 
	else {
        return false;
	}
	
}

function showFileContents($target){
	
	$scan = scandir($target);
    
	echo  '<ul>';
    for ($i = 0; $i<count($scan); $i++) {
        if(strlen($scan[$i]) >= 3) {
            
			    echo '<li>' . $scan[$i] . '</li>'; 
        }
    }
    print '</ul>';
}
	
	if(isset($_FILES['zip']['name'])){
		
		/****************checking file credentials***************/
		$file_name = $_FILES['zip']['name'];
		if($file_name==""){
			echo "<p style='color:red;font-size:15px;'>No file uploaded</p>";
		}
		else{
			$ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
			if($ext!="zip")
				echo "<p style='color:red;font-size:15px;'>Upload file with zip extension only</p>";
			else{
				
				if($_FILES["zip"]["size"]>1000240000)
					echo "<p style='color:red;font-size:15px;'>Maximum file size allowed is 100Kb.</p>";
				else{
					$tmp = $_FILES['zip']['tmp_name'];
					$target = "./";
					$tar="";
					$target = $target.basename($file_name,'.zip').'-'.time().'/';
					// basename($file_name,'.zip') removes extension of the file leaving only the name
					//Creating the target directory
					mkdir($target);
					$tar=basename($file_name,'.zip').'-'.time().'/';
					$target_file = $target.$file_name;
					
					if (move_uploaded_file($tmp, $target_file)) {
						
						/*******************Extracting zip file********************/
						$result = extractZip($target_file,$target);
						
						if($result){
							//Successful extraction
							echo "<p style='color:green;font-size:18px;'>Files extracted</p>";
							// Show the contents of the directory
							//showFileContents($target);
						echo '<meta http-equiv="refresh" content="0;URL=http://localhost:8888/www/narj/choix/index.php?t='.$tar.'">';
						}
						else{
							echo "<p style='color:red;font-size:15px;'>There was a problem. Please try again!</p>";
						}
						
					} 
					else {
						echo "<p style='color:red;font-size:15px;'>Sorry, there was an error uploading your file.</p>";
					}
				}
				
			}
		}
		
	}
?>
