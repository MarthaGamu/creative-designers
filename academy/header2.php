
<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link rel='stylesheet' href='bootstrap/css/bootstrap.min.css'>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link rel='stylesheet' href='style.css?ver=3'>
<link href='https://fonts.googleapis.com/css?family=Archivo Narrow,Open Sans,Arial ,Helvetica, Sans Serif' rel='stylesheet'>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div id='wrapper'>
        <header id="header">
           <div class="container">
                 <div class ="row">
                      <div class="col-xs-4">
       
       
                      <nav class="navbar navbar-expand-lg ">
                      
  <a class="navbar-brand" href="index.php">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="blog.php">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="community.php">Community</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="bootcamps.php">Bootcamps</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" 
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Courses
        </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">php</a>
          <a class="dropdown-item" href="#">wordpress</a>
          <a class="dropdown-item" href="#">bootstrap</a>
        </div>
      </li>
    </ul>
  </div>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
  </form>
  <button class="btn btn-outline-info my-2 my-sm-0" type="submit"><a href="signup.php">logout</a></button>
  
  <div class="hname">
  <?php
echo"Welcome ";
echo $_SESSION['name'];

?>
</div>
     
      </nav>
 
</div>


</header>
</div>
</div>
  
</div>