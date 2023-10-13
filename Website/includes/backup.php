<?php
			if (isset($_SESSION['user']))
			{
				$user = $_SESSION['user'];

				echo '
				<li class="nav-item">
					<a class="nav-link fs-5" href="admin/adminlogin.php">'.$user.'
					</a>
			  	</li>
			 	<li class="nav-item">
					<a class="nav-link fs-5" href="logout.php">Logout</a>
			  	</li>
				
				';
			}else{
				echo '
				<li class="nav-item">
         			 <a class="nav-link fs-5" href="admin/adminlogin.php">Admin</a>
       			</li>
				<li class="nav-item">
            		<a class="nav-link fs-5" href="index.php">Doctors</a>
       			 </li>

				<li class="nav-item">
          			<a class="nav-link fs-5" href="#">Patient</a>
        		</li>
			
				';
			}

		?> 