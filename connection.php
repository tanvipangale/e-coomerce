<?php 


 $conn = mysqli_connect("127.0.0.1","root","","e_commerce");
 
 
if(mysqli_connect_error())
{
	echo "Unable to Connect" ; 
}
else	
{
	echo "Database connected" ; 
}
echo '<BR>';


mysqli_query($conn,"INSERT INTO `user` (`id`, `username`, `password`, `email`) 
                           VALUES ('2', 'admin1', 'admin1', 'admin1@example.com');
            ");

?>