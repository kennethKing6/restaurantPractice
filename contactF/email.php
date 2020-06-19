<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The HTML5 Herald</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <style>
      html,body{
    box-sizing: content-box;
    margin: 1%;
}

body{
    font-size: calc(10px + 0.5rem);
}

h1{
    color: green;
}
  </style>
</head>

<body>
    <img src="../foodImg/pic1.jpg"/>
    <h1>firstName: <?php $firstName;?></h1>
    <h1>Last Name: <?php $_POST['lastname'];?></h1>
    <h1>Country: <?php $_POST['country'];?></h1>
    <h1>Subject: <?php $_POST['subject'];?></h1>

</body>
</html>