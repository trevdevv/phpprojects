<?php
	// Message Vars
	$msg = '';
	$msgClass = '';

	// Check For Submit
	if(filter_has_var(INPUT_POST, 'submit')){
		// Get Form Data
		$name = htmlspecialchars($_POST['name']);
		$email = htmlspecialchars($_POST['email']);
		$message = htmlspecialchars($_POST['message']);
        
		// Check Required Fields
            if(!empty($email) && !empty($name) && !empty($message)){
			// Passed
			// Check Email
			if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
				// Failed
				$msg = 'Please use a valid email';
				$msgClass = 'alert-danger';
			} else {
				// Passed
				$toEmail = 'support@trevdevvmedia.com';
				$subject = 'Contact Request From '.$name;
				$body = '<h2>Contact Request</h2>
					<h4>Name</h4><p>'.$name.'</p>
					<h4>Email</h4><p>'.$email.'</p>
					<h4>Message</h4><p>'.$message.'</p>
				';

				// Email Headers
				$headers = "MIME-Version: 1.0" ."\r\n";
				$headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

				// Additional Headers
				$headers .= "From: " .$name. "<".$email.">". "\r\n";

				if(mail($toEmail, $subject, $body, $headers)){
					// Email Sent
					$msg = 'Your email has been sent';
					$msgClass = 'alert-success';
				} else {
					// Failed
					$msg = 'Your email was not sent';
					$msgClass = 'alert-danger';
				}
			}
		} else {
			// Failed
			$msg = 'Please fill in all fields';
			$msgClass = 'alert-danger';
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Trevdevv Media</title>
    <!-- <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">     -->
    <!-- <link rel="stylesheet" href="styles/font-awesome.css"> -->
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <script src="scripts/fontawesome-all.js"></script>
</head>
<body>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">TrevDevv</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor03">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#projects-counter">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#skills">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact-form">Contact Me</a>
                </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>
    <div id="main" class="is-loading">
        <h1 id = "cover-title">
            Trev Devv Media
        </h1>
        <div id="header-down-arrow" class = "arrow">
            <a id = "arw-btn" href="#projects-counter"><span></span></a>
        </div>
    </div>
    <br>

    <!-- Section - Project Counter -->
    <section id="projects-counter">
        <div class="sectiontitle">
            <h2>Projects statistics</h2>
            <span class="headerLine"></span>
        </div>
        <div id="projectFacts" class="sectionClass">
            <div class="fullWidth eight columns">
                <div class="projectFactsWrap ">
                    <div class="item wow fadeInUpBig animated animated" data-number="12" style="visibility: visible;">
                        <i class="fas fa-briefcase fa-5x"></i>
                        <p id="number1" class="number">12</p>
                        <span></span>
                        <p>Projects done</p>
                    </div>
                    <div class="item wow fadeInUpBig animated animated" data-number="55" style="visibility: visible;">
                        <i class="fas fa-smile fa-5x"></i>
                        <p id="number2" class="number">55</p>
                        <span></span>
                        <p>Happy clients</p>
                    </div>
                    <div class="item wow fadeInUpBig animated animated" data-number="359" style="visibility: visible;">
                        <i class="fas fa-coffee fa-5x"></i>
                        <p id="number3" class="number">359</p>
                        <span></span>
                        <p>Cups of coffee</p>
                    </div>
                    <div class="item wow fadeInUpBig animated animated" data-number="246" style="visibility: visible;">
                        <i class="fas fa-camera fa-5x"></i>
                        <p id="number4" class="number">246</p>
                        <span></span>
                        <p>Photos taken</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Section - Project Details-->
    <section id = "projects">
    <div class="sectiontitle">
        <h2>Projects Details</h2>
        <span class="headerLine"></span>
    </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                        <div class="card-header">Project 1</div>
                        <div class="card-body">
                            <h4 class="card-title">Tic Tac Toe Game (Minmax)</h4>
                            <p class="card-text">Used the notion of Artifical Intelligence by incorporting the famous Minmax function.</p>
                            <button type="button" class="btn btn-secondar" data-toggle="modal" data-target="#modal1">Learn More</button>
                            <!-- Button trigger modal -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                        <div class="card-header">Project 2</div>
                        <div class="card-body">
                            <h4 class="card-title">Card game War <br>iOS App</h4>
                            <p class="card-text">Using the Swift programming language and the xCode IDE, I created the famous card game 'WAR'. </p>
                            <button type="button" class="btn btn-secondar" data-toggle="modal" data-target="#modal2">Learn More</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                        <div class="card-header">Project 3</div>
                        <div class="card-body">
                            <h4 class="card-title">Selling Tires <br> Customer Web Site</h4>
                            <p class="card-text">I maximized my customers profits by nearly 50% by creating them an amazing web site.</p>
                            <button type="button" class="btn btn-secondar" data-toggle="modal" data-target="#modal3">Learn More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- Modal 1 -->
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tic Tac Toe Game (Minmax)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="imgs/TTTBoard.png" alt="..." class="img-thumbnail rounded mx-auto d-block">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a class = "btn btn-primary"href="https://codepen.io/trevdevv/">Code Pen</a>
      </div>
    </div>
  </div>
</div>

<!-- Modal 2 -->
<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Card game War iOS App</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="imgs/warApp.png" alt="..." class="img-thumbnail rounded mx-auto d-block">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a class = "btn btn-primary"href="https://github.com/trevdevv">Git Hub</a>
      </div>
    </div>
  </div>
</div>

<!-- Modal 3 -->
<div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Selling Tires: Customer Website</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="imgs/tireswebsite.png" alt="..." class="img-thumbnail rounded mx-auto d-block">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a class = "btn btn-primary"href="http://">Web Site</a>
      </div>
    </div>
  </div>
</div>
<br>

<!-- Skills Section -->
<section id="skills">
    <div class="spacer header">
        <h1 class = "header-scroll">Skills</h1>
    </div>

    <div class="container skills">
        <div class="row">
            <div class="col-sm">
                <h1>Front End</h1>
                <dl>
                    <dt>HTML</dt>
                    <dd class="skill-percent html" data-percent="95"></dd>
                    <dt>Javascript</dt>
                    <dd class="skill-percent css" data-percent="90"></dd>
                    <dt>CSS</dt>
                    <dd class="skill-percent jquery" data-percent="80"></dd>
                </dl>
            </div>
            <div class="col-sm">
                <h1>Back End</h1>
                <dl>
                    <dt>PHP</dt>
                    <dd class="skill-percent html" data-percent="95"></dd>
                    <dt>Node JS</dt>
                    <dd class="skill-percent css" data-percent="90"></dd>
                    <dt>Python</dt>
                    <dd class="skill-percent jquery" data-percent="80"></dd>
                </dl>
            </div>
            <div class="col-sm">
                <h1>CMS</h1>
                <dl>
                    <dt>Word Press</dt>
                    <dd class="skill-percent html" data-percent="95"></dd>
                    <dt>Drupal</dt>
                    <dd class="skill-percent css" data-percent="90"></dd>
                    <dt>WIX</dt>
                    <dd class="skill-percent jquery" data-percent="80"></dd>
                </dl>
            </div>
        </div>
        <div class="container spacer"></div>
    </div>
                

    


</section>
<br>
    <!-- Footer -->
    <footer id = "contact-form">
        <h1>Contact me</h1>
        <!-- Contact Form -->
        <div class="container">	
            <?php if($msg != ''): ?>
                <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
            <?php endif; ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
            </div>
            <br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </footer>
    <!-- Bootstrap JS&Jquery Script -->

    <!-- <script src="https://code.jquery.com/jquery-3.1.0.js"></script> -->
    <script src="scripts/jquery-3.3.1.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
    <script src="scripts/popper.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
    <script src="scripts/bootstrap.min.js"></script>
    <script src="scripts/index.js"></script>
</body>
</html>