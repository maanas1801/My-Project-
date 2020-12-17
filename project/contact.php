<!DOCTYPE html>
<html>
<head>
	<title>SIKAR | Contact</title>
	<link rel="stylesheet" type="text/css" href="./css/style3.css">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200&display=swap" rel="stylesheet">
</head>

<body>
	<header>
    <nav class="navbar">
    	<div id="logo">
	    <h1>sikar</h1>
        </div>
    	<div class="menu">
    		<a href="index.php">HOME</a>
    		<a href="services.php">SERVICES</a>
    		<a href="projects.php">PROJECTS</a>
    		<a href="contact.php">CONTACT</a>
    	
    	</div>
     </nav>
      <main>
        
            <div class="mains">
                <section>
                    <div class="right">
            <h4>Contact Us:</h4><br>
            <p>Email: sikar@gmail.com</p>
            <p>Phone No: 9889389401 , 9420138491</p>
            <br>
        </div>

            <div class="right">
                <h4>Head Office:</h4><br>
                <p>Street:  215, Free Press House, Yogakshema <br>
                    City:   Mumbai<br>
                    State/province/area: Maharashtra<br>
                    Phone number: 02222835333<br>
                    Zip code:  400021<br>
                     Country:  India<br></p>
                 </div>
            </section>
              </div>
              <div class="mains">
            
                 <form class="forms" action="" method="POST">
                    
                     
                         <label class="lab">Name</label><br>
                         <input type="text" name="name" placeholder=" Enter your Name" value="" required/><br>
                    
                         <label class="lab">Email ID</label><br>
                         <input type="email" name="email" placeholder=" Enter your email ID" value="" required/ ><br>
                    
                         <label class="lab">Queries</label><br>
                         <input type="text" name="queries" placeholder=" Enter Questions " value="" ><br>
                     
                        <button class="buttons" type="submit" name="submit">SUBMIT</button><br>

                 </form>
             </div>
        
            </main> 
    
    </header>
    
        
       
     
    

</body>
 
 <footer>
 	 <p>SIKAR Companies &copy; 2021</p>
 </footer>
</html>
<?php
include 'connection.php';
if (isset($_POST['submit'])){
    $name=$_POST['name'];
     $email=$_POST['email'];
      $queries=$_POST['queries'];

      $insertquery="insert into forms(name,email,queries) values('$name','$email','$queries')";
      $res=mysqli_query($con,$insertquery);
     

}

?>