<?php
session_start();
// connection with database server
$con= mysql_connect("localhost", "root", "");
if($con)
echo "Server connection established";

//connection with database

$selected = mysql_select_db("miniproject",$con);
if($selected)
	echo "database selected";
else 
{
	die('datbaase couldnt be selected ' . mysql_error());
}
if(isset($_POST['submit']))
{
	
function myFunction(){


$room= array(
                    '4th floor' => Array
                        (
                            '401' => Array
                                (
                                    'a' => 'black',
                                    'b' => 'black',                                     
                                    'c' =>  null,                                     
                                    'd' =>  null,
                                    'e' =>  null

                                ),
                                '402' => Array
                                (
                                    'a' => 'null',
                                    'b' => 'null',                                     
                                    'c' => 'null',                                     
                                    'd' => 'null',
                                    'e' => 'null'

                                ),
                                '403' => Array
                                (
                                    'a' => 'null',
                                    'b' => 'null',                                     
                                    'c' => 'null',                                     
                                    'd' => 'null',
                                    'e' => 'null'

                                ),
                                '404' => Array
                                (
                                    'a' => 'null',
                                    'b' => 'null',                                     
                                    'c' => 'null',                                     
                                    'd' => 'null',
                                    'e' => 'null'

                                )




                        ),

                    '3rd floor' => Array
                        (
                            '301' => Array
                                (
                                    'a' => 'null',
                                    'b' => 'null',                                     
                                    'c' => 'null',                                     
                                    'd' => 'null'
                                ),
                                 '302' => Array
                                (
                                    'a' => 'null',
                                    'b' => 'null',                                     
                                    'c' => 'null',                                     
                                    'd' => 'null'
                                ),
                                 '303' => Array
                                (
                                    'a' => 'null',
                                    'b' => 'null',                                     
                                    'c' => 'null',                                     
                                    'd' => 'null'
                                ),
                                 '304' => Array
                                (
                                    'a' => 'null',
                                    'b' => 'null',                                     
                                    'c' => 'null',                                     
                                    'd' => 'null'
                                )
                        ),

                         '2nd floor' => Array
                        (
                            '201' => Array
                                (
                                    'a' => 'null',
                                    'b' => 'null',                                     
                                    'c' => 'null'                                    
                                    
                                ),
                                 '202' => Array
                                (
                                    'a' => 'null',
                                    'b' => 'null',                                     
                                    'c' => 'null'                                     
                                    
                                ),
                                 '203' => Array
                                (
                                    'a' => 'null',
                                    'b' => 'null',                                     
                                    'c' => 'null'                                     
                                    
                                ),
                                 '204' => Array
                                (
                                    'a' => 'null',
                                    'b' => 'null',                                     
                                    'c' => 'null',                                     
                                    'd' => 'null',
                                    'e' => 'null'
                                )
                        ),
                            
                         '1st floor' => Array
                        (
                            '101' => Array
                                (
                                    'a' => 'null',
                                    'b' => 'null'                                     
                                   
                                ),
                                 '102' => Array
                                (
                                    'a' => 'null',
                                    'b' => 'null'                                     
                                    
                                ),
                                 '103' => Array
                                (
                                    'a' => 'null'
                                    
                                ),
                                 '104' => Array
                                (
                                    'a' => 'null'
                                    
                                )
                        )
                            




                );
}

}		
	?>
<h1>You have successfully reserved the room :)</h1>