<?php
 			$uname=$_SESSION['login_id'];
			$sql="select * from tbl_regpics where login_id='$uname'";
	            $res =mysqli_query($con ,$sql);
	            $row=mysqli_fetch_array($res);
	            $imageURL='image/'.$row["prof_img"];
	            $proof=$row["pro_proof"];
			?>
			<!--sidebar start-->
			<div class="sidebar" style="background:#000000">
				<div class="sidebar-menu">
					<center class="profile">
						<img src="<?php echo $imageURL; ?>" alt="">
						<p>
							<?php
							 echo "$first $last";
							 
							?>
						
						</p>
					</center>

					<li class="item">
						<a href="index.php" class="menu-btn">
							<i class="fas fa-desktop"></i><span>Dashboard</span>
						</a>
					</li>
					<li class="item" id="profile">
						<a href="profile.php" class="menu-btn">
							<i class="fas fa-user-circle"></i><span>Profile</span>
						</a>
						
					</li>
					
					<?php
					if($proof == "Not Uploaded")
					{
						?>
					<li class="item">
						<a href="notuploadedproof.php" class="menu-btn">
							<i class="fas fa-info-circle"></i><span>View Places</span>

						</a>
					</li>
					<?php
					
					

					}

					else
					{
						?>
					<li class="item">
						<a href="viewplaces.php" class="menu-btn">
							<i class="fas fa-info-circle"></i><span>View Places</span>
						</a>
					</li>
					<?php

					}

					?>

					<?php
					if($proof == "Not Uploaded")
					{
						?>
					<li class="item" id="messages">
						<a href="#messages" class="menu-btn">
							<i class="fas fa-shipping-fast"></i><span>Packages <i class="fas fa-chevron-down drop-down"></i></span>
						</a>
						<div class="sub-menu">
							<a href="notuploadedproof.php"><i class="fas fa-envelope"></i><span>Adventure Tour Package</span></a>
							<a href="notuploadedproof.php"><i class="fas fa-envelope-square"></i><span>Single Tour Package</span></a>
							<a href="notuploadedproof.php"><i class="fas fa-envelope"></i><span>Family Tour Package</span></a>
							<a href="notuploadedproof.php"><i class="fas fa-envelope-square"></i><span>Group Tour Package</span></a>
							
						</div>
					</li>
					<?php

					}

					else
					{
						?>
					<li class="item" id="messages">
						<a href="#messages" class="menu-btn">
							<i class="fas fa-shipping-fast"></i><span>Packages <i class="fas fa-chevron-down drop-down"></i></span>
						</a>
						<div class="sub-menu">
							<a href="adventurepackage.php"><i class="fas fa-envelope"></i><span>Adventure Tour Package</span></a>
							<a href="singletourpackage.php"><i class="fas fa-envelope-square"></i><span>Single Tour Package</span></a>
							<a href="familytourpackage.php"><i class="fas fa-envelope"></i><span>Family Tour Package</span></a>
							<a href="grouptourpackage.php"><i class="fas fa-envelope-square"></i><span>Group Tour Package</span></a>
							
						</div>
					</li>
					<?php

					}

					?>

					<?php
					if($proof == "Not Uploaded")
					{
						?>
					<li class="item" id="contact">
						<a href="notuploadedproof.php" class="menu-btn">
							<i class="fa fa-history"></i></i><span>Package Bookings</i></span>
						</a>
						
					</li>
					<?php

					}

					else
					{
						?>
					<li class="item" id="contact">
						<a href="bookhistory.php" class="menu-btn">
							<i class="fa fa-history"></i></i><span>Package Bookings</i></span>
						</a>
						
					</li>
					<?php

					}

					?>
					<?php
					if($proof == "Not Uploaded")
					{
						?>
					<li class="item" id="contact">
						<a href="notuploadedproof.php" class="menu-btn">
							<i class="fa fa-address-book"></i></i><span>Guide Booking History</i></span>
						</a>
						
					</li>
					<?php

					}

					else
					{
						?>
					<li class="item" id="contact">
						<a href="guidebookinghistory.php" class="menu-btn">
							<i class="fa fa-address-book"></i></i><span>Guide Booking History</i></span>
						</a>
						
					</li>
					<?php

					}

					?>
					<?php
					if($proof == "Not Uploaded")
					{
						?>
					<li class="item" id="contact">
						<a href="notuploadedproof.php" class="menu-btn">
							<i class="fas fa-male"></i></i><span>Guides</i></span>
						</a>
						
					</li>
					<?php

					}

					else
					{
						?>
					<li class="item" id="contact">
						<a href="guideview.php" class="menu-btn">
							<i class="fas fa-male"></i></i><span>&nbsp Guides</i></span>
						</a>
						
					</li>
					<?php

					}

					?>

					<?php
					if($proof == "Not Uploaded")
					{
						?>
					<li class="item" id="contact">
						<a href="notuploadedproof.php" class="menu-btn">
							<i class="fa fa-taxi"></i></i><span>Call a Cab</i></span>
						</a>
						
					</li>
					<?php

					}

					else
					{
						?>
					<li class="item" id="contact">
						<a href="taxiview.php" class="menu-btn">
							<i class="fa fa-taxi"></i></i><span>Call a Cab</i></span>
						</a>
						
					</li>
					<?php

					}

					?>
					<?php
					if($proof == "Not Uploaded")
					{
						?>
					<li class="item" id="contact">
						<a href="notuploadedproof.php" class="menu-btn">
							<i class="fas fa-map"></i></i><span>Cab Booking History</i></span>
						</a>
						
					</li>
					<?php

					}

					else
					{
						?>
					<li class="item" id="contact">
						<a href="taxibookinghistory.php" class="menu-btn">
							<i class="fas fa-map"></i></i><span>Cab Booking History</i></span>
						</a>
						
					</li>
					<?php

					}

					?>
					
					
					
					<li class="item" id="contact">
						<a href="feedback.php" class="menu-btn">
							<i class="fas fa-phone"></i></i><span>Feedback</i></span>
						</a>
						
					</li>
					<li class="item">
						<a href="#" class="menu-btn">
							<i class="fas fa-info-circle"></i><span>About</span>
						</a>
					</li>
					
					
					
					
					
				</div>
			</div>