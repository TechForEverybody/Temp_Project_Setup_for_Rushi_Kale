<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
  // user is logged in
  $link_text = $_SESSION['name'];

}
?>
	<link rel="stylesheet" type="text/css" href="profile.css">
	<style>

*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Roboto', sans-serif;
}



.appoinments{
	display: flex;
	justify-content: center;
	/* align-items: center; */
	flex-direction: column;
}

.appoinment{
	display: flex;
	justify-content: center;
	/* align-items: center; */
	flex-direction: column;
	border: 1px solid black;
	padding:10px;
	margin : 10px 0px;

}

.appoinment h3{
	margin: 5px;
	padding: 0;
}
.appoinment span{
	color:blue;
}

.availability,
.timing{
	border: 1px solid black;
	padding:10px;
}

li{
	margin-left:20px;
	list-style:disc;
}
</style>
	<section class="profile_container">
		<div class="profile_img_section">
			<img class="profile_img-LG" src="https://tse2.mm.bing.net/th?id=OIP.tXKGs73UYjBEZSclUWLSMAHaHa&pid=Api&P=0" />
			
		</div>

		<div class="profile_desc_section">
			<h2><?php echo $link_text; ?></h2>
			<h3>Verified</h3>
			<p class="description">Refuse what you do not need; reduce what you do need; reuse what you consume; recycle what you cannot refuse, reduce, or reuse; and rot (compost) the rest."</p>

			<div class="interests">
				<span class="interests_item" ><a href="apointment.php" style="text-decoration:none">Book Apointment</a></span>
				<span class="interests_item" ><a href="index.php" style="text-decoration:none">Buy Product</a></span>
				<span class="interests_item" ><a href="logout.php" style="text-decoration:none">Logout</a></span>
			</div>
		</div>

	</section>
<br><br>        
	<div class="info">
		<ul>
			<li>
				<div class="link_img_wrapper">
					<img class="link_img" src="https://tse1.mm.bing.net/th?id=OIP.HUHR8yF3obxerWqyhn4uZwHaHa&pid=Api&P=0" alt="">
				</div>
				<p>Mumbai, India</p>
			</li>
			<li>
				<div class="link_img_wrapper">
					<img class="link_img" src="https://tse1.mm.bing.net/th?id=OIP.HUHR8yF3obxerWqyhn4uZwHaHa&pid=Api&P=0" alt="">
				</div>
				<p>400 001</p>
			</li>

		</ul>
	</div>
	<hr>
<table style="  
			border: 1px solid #ccc;
  			border-collapse: collapse;
  			margin-left: 4rem;
			margin-bottom: 4rem;
  			padding: 0;
  			width: 70rem;
  			table-layout: fixed;">
			<caption style="  
			font-size: 1.5em;
  			margin: .5em 0 .75em;"
			><b>Appoinments List</b></caption>
			<thead>
				<tr style=" 
				background-color: #f8f8f8;
  				border: 1px solid #ddd;
  				padding: .35em;
				">

				<th scope="col" style="  
				padding: .625em;
  				text-align: center;
				font-size: .85em;
  				letter-spacing: .1em;
  				text-transform: uppercase;
				">Name</th>

				<th scope="col" style="  
				padding: .625em;
  				text-align: center;
				font-size: .85em;
  				letter-spacing: .1em;
  				text-transform: uppercase;
				">Email</th>

				<th scope="col" style="  
				padding: .625em;
  				text-align: center;
				font-size: .85em;
  				letter-spacing: .1em;
  				text-transform: uppercase;
				">Phone No.</th>

				<th scope="col" style="  
				padding: .625em;
  				text-align: center;
				font-size: .85em;
  				letter-spacing: .1em;
  				text-transform: uppercase;">Way to reach </th>

				<th scope="col"style="  
				padding: .625em;
  				text-align: center;
				font-size: .85em;
  				letter-spacing: .1em;
  				text-transform: uppercase;
				">Available Days</th>

				<th scope="col"style="  
				padding: .625em;
  				text-align: center;
				font-size: .85em;

  				letter-spacing: .1em;
  				text-transform: uppercase;">Time of day</th>
				</tr>
			</thead>
			<?php

include($_SERVER["DOCUMENT_ROOT"] ."./db_conn.php");

$sql = "SELECT * FROM `appointment` WHERE `email` = '".$_SESSION['email']."'";
$result = mysqli_query($conn, $sql);
if($result){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo'
            <tbody>
                <tr>
                    <td data-label="name" style="  
                        padding: .625em;
                        text-align: center;">'. $row['name'].'</td>
                    <td data-label="Email" style="  
                        padding: .625em;
                        text-align: center;">'. $row['email'].'</td>
                    <td data-label="Phone No" style="  
                        padding: .625em;
                        text-align: center;">'. $row['phone'].'</td>
                    <td data-label="Way to reach "style="  
                        padding: .625em;
                        text-align: center;">'. $row['reach_type'].'</td>
                    <td data-label="Days"style="  
                        padding: .625em;
                        text-align: center;">
                        <ul>';
                            $availability = explode(',', $row['availability']);
                            for($i=0; $i<count($availability); $i++){
                                echo '<li>'.$availability[$i].'</li>';
                            }
                        echo '</ul>
                    </td>
                    <td data-label="Time of day"style="  
                        padding: .625em;
                        text-align: center;"><ul>';
                            $timing = explode(',', $row['timing']);
                            for($i=0; $i<count($timing); $i++){
                                echo '<li>'.$timing[$i].'</li>';
                            }
                        echo '</ul></td>
                </tr>
            </tbody>';
        }
    }
    else{
        echo '
        <div class="appoinment" style="
            display: flex;
            justify-content: center;
            align-items: center;
            fosnt-size: 20px;
            padding: 30px 10px;

        ">
            <h3>No Appoinments</h3>
        </div>    
        ';
    }
}
else{
    echo "error";
}


?>
</table>
<table style="  
			border: 1px solid #ccc;
  			border-collapse: collapse;
  			margin-left: 4rem;
			margin-bottom: 4rem;
  			padding: 0;
  			width: 70rem;
  			table-layout: fixed;">
			<caption style="  
			font-size: 1.5em;
  			margin: .5em 0 .75em;"
			><b>Appoinments List</b></caption>
			<thead>
				<tr style=" 
				background-color: #f8f8f8;
  				border: 1px solid #ddd;
  				padding: .35em;
				">

				<th scope="col" style="  
				padding: .625em;
  				text-align: center;
				font-size: .85em;
  				letter-spacing: .1em;
  				text-transform: uppercase;
				">Order ID</th>
				<th scope="col" style="  
				padding: .625em;
  				text-align: center;
				font-size: .85em;
  				letter-spacing: .1em;
  				text-transform: uppercase;
				">Product ID</th>

				<th scope="col" style="  
				padding: .625em;
  				text-align: center;
				font-size: .85em;
  				letter-spacing: .1em;
  				text-transform: uppercase;
				">Product Name</th>

				<th scope="col" style="  
				padding: .625em;
  				text-align: center;
				font-size: .85em;
  				letter-spacing: .1em;
  				text-transform: uppercase;
				">Price</th>

				<th scope="col" style="  
				padding: .625em;
  				text-align: center;
				font-size: .85em;
  				letter-spacing: .1em;
  				text-transform: uppercase;">Ordered Date </th>

				<th scope="col"style="  
				padding: .625em;
  				text-align: center;
				font-size: .85em;
  				letter-spacing: .1em;
  				text-transform: uppercase;
				">Delivery Status</th>
				<th scope="col"style="  
				padding: .625em;
  				text-align: center;
				font-size: .85em;
  				letter-spacing: .1em;
  				text-transform: uppercase;
				">Payment Mode</th>
			</thead>
			<?php


$sql = "SELECT * FROM `orders` WHERE `email` = '".$_SESSION['email']."'";
$result = mysqli_query($conn, $sql);
if($result){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo'
            <tbody>
                <tr>
                    <td data-label="name" style="  
                        padding: .625em;
                        text-align: center;">'. $row['id'].'</td>
                    <td data-label="name" style="  
                        padding: .625em;
                        text-align: center;">'. $row['product_id'].'</td>
                    <td data-label="Email" style="  
                        padding: .625em;
                        text-align: center;">'. $row['product_name'].'</td>
                    <td data-label="Phone No" style="  
                        padding: .625em;
                        text-align: center;">'. $row['price'].'</td>
                    <td data-label="Way to reach "style="  
                        padding: .625em;
                        text-align: center;">'. $row['order_date'].'</td>
                    <td data-label="Days"style="  
                        padding: .625em;
                        text-align: center;">
                        '. ($row['delivery_status']=="NO"?"Not Delivered":"Delivered").'
                    </td>
                    <td data-label="Days"style="  
                        padding: .625em;
                        text-align: center;">
                        CASH ON DELIVERY
                    </td>
                </tr>
            </tbody>';
        }
    }
    else{
        echo '
        <div class="appoinment" style="
            display: flex;
            justify-content: center;
            align-items: center;
            fosnt-size: 20px;
            padding: 30px 10px;

        ">
            <h3>No Appoinments</h3>
        </div>    
        ';
    }
}
else{
    echo "error";
}



mysqli_close($conn);

?>
</table>