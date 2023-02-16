<!DOCTYPE html>
<html>
<head>
    <title>Reiner Gena</title>
        <!-- Favicon ni RJ-->
        <link rel="icon" type="image/png" href="images/RJ-favicon.png">
        <link rel="stylesheet" href="mystyle.css">
        <script src="myScript.js"></script>
        <meta charset="UTF-8">

        <meta name="description" content="Reiner Gena's Portfolio">
        <meta name="keywords" content="Reiner, Gena, RJ, HTML, CSS, JavaScript">
        <meta name="author" content="Reiner Gena">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="header">
        <div class="logo">
        <img src="images/RJ-LOGO.png" alt="logo">
        </div>
        <h1>RJ.</h1>
        <div class="header-right">
          <a class="active" href="index.php"><b>Home</b></a>
          <a href="#About"><b>Profile</b></a>
          <a href="#"><b>Experience</b></a>
          <a href="guests.php"><b>DB Records</b></a>
          <a href="Javascript works.html"><b>JS Exercises</b></a>
          <a href="resource.html"><b>Resources</b></a>
          <a href="#Contact"><b>Contact Me</b></a>
        </div>
    </div>
    
    <div class="content">
        <div class="flex-container">

            <div class = "one">WELCOME TO THE <br> PORTFOLIO OF</div>
            <div class = "two">
                <img src="images/RJ-LOGO-Default.png" alt="main logo"
                width="300px" height="300px" >
            </div>
    
            <div class = "three" style="text-align: left;"><br><br><br><br><br><br>
            REINER GENA<br><i>Aspiring Front-End Dev</i></div>  
        </div>
    </div>
    <div class="About" id="About">
        <div class="Heading">
            <img src="images/GENA.png" alt="main logo">
            <h1>About()</h1>
            
        </div>
        <div class="SubHeading">
            <h3>&nbsp&nbspAspiring Front-End Developer</h3>
        </div>
        <div class="information">
            <blockquote><p>I'm currently 20 years old. Majority of my peers calls me RJ or Jay. 
                A 2nd Year student taking Bachelor of Science in Information Technology 
                with specialization on Mobile and Internet Technology (BSIT) student. I 
                started my IT life with the excitement of HTML during my 1st Year High School life.
                Majority of the time, I critisize the works of friend's or classmate's work especially in designs; maybe because 
                I have OCD.... being perfect. Before making any design activities, I always make a wireframe and a prototype to 
                visuals what my work or website should look like. I use Canva and Figma.
            
            </p></blockquote>
        </div>
    </div>
    <div class="CheckTime">
        <button type="button" 
        onclick="document.getElementById('demo').innerHTML = Date()">
        <b>WHAT'S THE TIME AND DATE ???? </b></button>
        
        <p id="demo" style="font-weight: bold;"></p>
    </div>

    <div class="ImageGal">
        <button onclick="document.getElementById('myImage').src='images/gal_friends.jpg'" style= "margin-left: 260px;"><b> FRIENDS</b></button>
        <button onclick="document.getElementById('myImage').src='images/gal_org.jpg'"><b> SCHOOL ORG</b></button>
        <button onclick="document.getElementById('myImage').src='images/gal_orgfair.jpg'"><b> ORG FAIR</b</button>
        <button onclick="document.getElementById('myImage').src='images/gal_photoshoot.jpg'"><b> PHOTOSHOOT</b></button>
        <br>
        <img id="myImage" src="images/gal_selfie.jpg" style= "margin-left: 200px;">
      </div>
    </div>
    <div class="Table">
        <h1 style="text-align: center;">know more about me?</h1>
        <table>
           <tr>
             <th>Other Nicknames?</th>
             <th>Favorite GG?</th>
             <th>KPOP Bias?</th>
           </tr>
           <tr>
             <td>Jay</td>
             <td>BLACKPINK</td>
             <td>Lisa</td>
           </tr>
           <tr>
             <td>RAY-RAY</td>
             <td>TWICE</td>
             <td>Momo</td>
           </tr>
           <tr>
            <td>Reindeer</td>
            <td>ITZY</td>
            <td>Ryugin</td>
           </tr>
           <tr>
            <td>Baby : ></td>
            <td>XG</td>
            <td>Cocona</td>
           </tr>
        </table>
      </div>
      <div class="Youtube">
        <h1 style="text-align: center;">KPOP CHOREOS I DO</h1>
        <iframe width="560" height="315" style="margin-left:60px" src=https://www.youtube.com/embed/sGAqI0zejkI frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
        <iframe width="560" height="315" style="margin-left:60px" src=https://www.youtube.com/embed/likYKQXBLbw frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
        <iframe width="560" height="315" style="margin-left:60px" src=https://www.youtube.com/embed/8aKeXTJ6lA0 frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
        <iframe width="560" height="315" style="margin-left:60px" src=https://www.youtube.com/embed/APmcQ5WgBCc frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
        
    </div>
    
        <div class="Education">
        <div class="Heading2">
            <h1>Educational_Background()</h1>
            
        </div>
    </div>
    
    <div class="Technologies">
            <div class="Heading3">
                <h1>Technologies()</h1>
                
            </div>
    </div>

    <div class="Certificates">
        <div class="Heading4">
            <h1>Certificates()</h1>
            
        </div>
    </div>

    <?php
$servername = "192.168.150.213";
$username = "webprogmi211";
$password = "j@zzyAngle30";
$dbname = "webprogmi211";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$name = $_POST['name'];
$email = $_POST['email'];
$website = $_POST['website'];
$comment = $_POST['comment'];

$sql = "INSERT INTO gena_MyGuests (Fullname, email, website, comment)
VALUES ('$name','$email', '$website', '$comment')";

if ($conn->multi_query($sql) === TRUE) {
 echo "New records created successfully";
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "SELECT id, Lastname, email, website, comment FROM MyGuests";
$result = $conn->query($sql);
// PHP_MySQL L 15.9 Select Data

$conn->close();
?>





    <?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div class="PHPFORM" style="color:white">
<h2 >CONTACT ME</h2>
<p><span class="error">* required field</span></p>
<form method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  <input type="submit"  name="submit" value="Submit">  
</form>
</div>
<?php
echo '<br><font color="gray">Your Input:</font><br><br>';
echo '<font color="pink">' . $name . '</font><br>';
echo '<font color="pink">' . $email . '</font><br>';
echo '<font color="pink">' . $website . '</font><br>';
echo '<font color="pink">' . $comment . '</font><br>';
?>
</body>
</html>
