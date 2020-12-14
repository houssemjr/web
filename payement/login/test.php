<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>LOLproTN</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<!-- stylesheet css -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/templatemo-gray.css">
	<link rel="stylesheet" href="css/modal-pop-up.css">
</head>
<body data-spy="scroll" data-target=".navbar-collapse">
<style>
/* body  {
  background-image: url("images/tm-bg-slide-1.jpg");
}
</style> */
	<nav class="nav-bar">

		<ul>
			<li> <a href="K:\xamp\htdocs\lolprotn\home\acceuil.html">Home</a> </li>
			<li> <a href="test.php"class="active">Profile</a> </li>
			<li> <a href="K:\xamp\htdocs\lolprotn\forum\forum.html">Forum</a> </li>
			<li> <a href="search.php">Search</a> </li>
		</ul>
        <div class="loginPart">
        <a href='principale.php?deconnexion=true'><span>Déconnexion</span></a>

		</div>
	</nav>
<!-- preloader section -->
<div class="preloader">
	<div class="sk-spinner sk-spinner-wordpress">
       <span class="sk-inner-circle"></span>
     </div>
</div>
						
				
<!-- header section -->
<header>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">

				<img src="images/league-client-update-header.jpg" class="img-responsive img-circle tm-border" alt="templatemo easy profile">
				<?php
					$link = mysqli_connect("localhost", "root", "");
					mysqli_select_db($link,"projet web");

					if (mysqli_connect_error()) {
							die('Connect Error (' . mysqli_connect_errno() .')' . mysqli_connect_error());
						}

						$query = "Select * FROM users";
						$query_run = mysqli_query($link,$query);
				

				if($query_run)
				{
					foreach ($query_run as $row) { 
				?>	
				<hr>
				<h1 class="tm-title bold shadow"><?php echo $row['pseudo']; ?></h1>	
				<h1 class="white bold shadow"><?php echo $row['acc_type']; ?></h1>
			</div>
		</div>
		<!--<nav class="navbar navbar-light bg-light">
			<form action="" class="search-bar">
				<input type="search" name="search" class="inputText" placeholder="insert Player Name . . ."pattern=".*\S.*" required>
				<button class="search-btn" type="button" ><a href="search.php"></a>
					<span>Search</span>
				</button>
			</form>
			</nav>
	</div>-->
	<!-- EDIT BUTTON -->
	<div>
		<button type="button" name="edit"class="btn-grad editbtn">EDIT</button>
	</div>
</header>

<!-- about and skills section -->

<section class="container">
	<div class="row">
		<div class="col-md-6 col-sm-12">
			<div class="about" data-transition="fromTop">
				<h2 class="accent">Main role</h2>
				<h3><?php echo $row['role']; ?></h3>
				<h2 class="accent">Rank in-game</h2>
				<h3><?php echo $row['rank']; ?></h3>
			</div>
		</div>
		<div class="col-md-6 col-sm-12">
			<div class="skills">
				<h2 class="white">Skills</h2>
				<strong>SUPP</strong>
				<span class="pull-right">70%</span>
					<div class="progress">
						<div class="progress-bar progress-bar-primary" role="progressbar"
                        aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
					</div>
				<strong>ADC</strong>
				<span class="pull-right">85%</span>
					<div class="progress">
						<div class="progress-bar progress-bar-primary" role="progressbar"
                        aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
					</div>
				<strong>Mid lane</strong>
				<span class="pull-right">95%</span>
					<div class="progress">
						<div class="progress-bar progress-bar-primary" role="progressbar"
                        aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;"></div>
					</div>
			</div>
		</div>
	</div>
</section>

<!-- education and languages -->
<section class="container">
	<div class="row">
		<div class="col-md-8 col-sm-12">
			<div class="education">
				<h2 class="white">Description</h2>
					<div class="education-content">
						<h4 class="education-title accent">More about me ?</h4>
						<p class="education-description"><?php echo $row['description']; ?></p>
					</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-12">
			<div class="languages">
				<h2>Champion pool</h2>
					<ul>
						<li><?php echo $row['champ1']; ?></li>
						<li><?php echo $row['champ2']; ?></li>
						<li><?php echo $row['champ3']; ?></li>
						<li><?php echo $row['champ4']; ?></li>
					</ul>
			</div>
		</div>
	</div>
</section>

<!-- contact and experience -->
<section class="container">
	<div class="row">
		<div class="col-md-4 col-sm-12">
			<div class="contact">
				<h2>Contact</h2>
					<p><i class="fa fa-facebook"></i> <?php echo $row['facebook'];?></p>
					<p><i class="fa fa-phone"></i><?php echo $row['contact']; ?></p>
					<p><i class="fa fa-envelope"></i> <?php echo $row['email']; ?></p>
					<!--<p><i class="fa fa-discord"></i> discord</p>-->

			</div>

		</div>
		<?php	
					}
				}
				else
				{
					echo "alert('no table found')";
				}
				?>
		<br>
		<div class="col-md-4 col-sm-12">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/hta3YUsWb1U" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="vid"></iframe>
		</div>
	</div>
</section>



<!-- footer section -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<p class="Paragraph">Copyright &copy; <sup class="suppart">2020</sup> LOLproTN</p>
				<ul class="social-icons">
					<li><a href="https://www.facebook.com"target="_blank" class="fa fa-facebook"></a></li>
          <li><a href="https://www.gmail.com" target="_blank"class="fa fa-google-plus"></a></li>
					<li><a href="https://www.twitter.com" target="_blank"class="fa fa-twitter"></a></li>
					<li><a href="https://dribbble.com/"target="_blank" class="fa fa-dribbble"></a></li>
					<li><a href="https://github.com/" target="_blank"class="fa fa-github"></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>



<!--################################################# UPDATE Modal ###########################################################################-->
<!-- UPDATE Modal -->

<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog form-dark" role="document">
    <!--Content-->
    <div class="modal-content card card-image"  style='background-image: url("index.jpg");'>
      <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
        <!--Header-->
        <div class="modal-header text-center pb-4">
          <h3 class="modal-title w-100 White-text font-weight-bold " id="myModalLabel" style="color: green;"><strong>Update</strong> <a
              class="green-text font-weight-bold"><strong> Profile</strong></a></h3>
          <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
		<!--Body-->
		

        <form action="update.php" method="POST">
        <div class="modal-body">
          <!--Body-->
          <div class="md-form mb-5">
          	<label data-error="wrong" data-success="right" for="Form-username">Your username</label>
            <input type="text" name="Username" class="form-control validate white-text" placeholder=<?php echo $row['username']; ?> >
            
            </div>
          
          <div class="md-form mb-5">
          	<label data-error="wrong" data-success="right" for="Form-pass">Your password</label>
            <input type="password" name="password" class="form-control validate white-text">
            
          </div>
          
          <div class="md-form mb-5">
          	<label data-error="wrong" data-success="right" for="Form-email">Your email</label>
            <input type="email" name="email" class="form-control validate white-text" placeholder=<?php echo $row['email']; ?> >
            
          </div>
					
         <div class="md-form mb-5">
          	
            <input type="hidden" name="pseudo" class="form-control validate white-text" placeholder=<?php echo $row['pseudo']; ?> >
            
          </div>
          
          <div class="md-form mb-5">
          	<label data-error="wrong" data-success="right" for="Form-acc-typ">Coach / Player</label>
            <input type="text" name="acc_type" class="form-control validate white-text" placeholder=<?php echo $row['acc_type']; ?> >
            
          </div>
          
           <div class="md-form mb-5">
           	<label data-error="wrong" data-success="right" for="Form-role">Your role</label>
            <input type="text" name="role" class="form-control validate white-text" placeholder=<?php echo $row['role']; ?> >
            
            </div>
          
          <div class="md-form mb-5">
          	<label data-error="wrong" data-success="right" for="Form-rank">Your rank</label>
            <input type="text" name="rank" class="form-control validate white-text" placeholder=<?php echo $row['rank']; ?>>
            
            </div>
          
          <div class="md-form mb-5">
          	<label data-error="wrong" data-success="right" for="Form-description">Description</label>
            <input type="text" name="description"  class="form-control validate white-text" placeholder=<?php echo $row['description']; ?> >
            
          </div>
          
          <div class="md-form mb-5">
          	<label data-error="wrong" data-success="right" for="Form-phone">Phone number</label>
            <input type="text" name="contact" class="form-control validate white-text" placeholder=<?php echo $row['contact']; ?> >
            
          </div>
          <div class="md-form mb-5">
          	<label data-error="wrong" data-success="right" for="Form-fb" >Facebook</label>
            <input type="text" name="facebook" class="form-control validate white-text" placeholder=<?php echo $row['facebook']; ?> >
            
          </div>


          <!--Grid row-->
          <div class="row d-flex align-items-center mb-4">

            <!--Grid column-->
            <div class="text-center mb-4 col-md-12">
              <button type="submit" name ="edit" class="btn btn-success btn-block btn-rounded z-depth-1">Update</button>
            </div>
            <!--Grid column-->

          </div>
          <!--Grid row-->
        </div>
        </form>
      </div>
    </div>
    <!--/.Content-->
  </div>
  
</div>
<!-- Modal -->

<!--############################################################################################################################-->



<!-- javascript js -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/custom.js"></script>
<script>
  $(document).ready(function() {
    $('.editbtn').on('click', function() {
    $('#editmodal').modal('show');

    });
  });	
</script>

</body>
</html>
