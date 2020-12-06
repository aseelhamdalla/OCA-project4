
					<form method="GET" class="d-flex" action="">
					<input class="form-control" type="text" name="item" placeholder="Search here..." required="">

					<button type="submit" name="submit" class="btn btn-primary submit">
						<i class="fas fa-search">GO</i>
					</button>

					
					</form>
					


					<?php
						 if(isset($_GET['submit'])){
							 $item=$_GET['item'];

                            $_SESSION['item']=$_GET['item'];
                            header("location:searchresults.php?item=$item");

                        }
                            
							// header("location:searchresults.php?item=$item");}
					// 	 $query  = "SELECT * from categories WHERE category_name ={$_POST['item']}";
					// 	$result = mysqli_query($connection, $query);
					// 	while ($row = mysqli_fetch_assoc($result)) {
					// 		$val= $row['category_id'];
					// 		$catname = $row['category_name'];
					// 		echo "<option value='$val'>$catname</option>";
					// 	}

					// }
						?>s