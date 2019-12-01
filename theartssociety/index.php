 <!DOCTYPE html>
<html>
<head>
<title>The Arts Society</title>
</head>
<style>
body {
  background-color: lightblue;
}

/* background color to the top navigation */
.topnav {
  background-color: #333;
  overflow: hidden;
}

/*links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}

</style>
<body>

 <div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="news.php">News</a>
  <a href="contact.php">Contact</a>
  <a href="about.php">About</a>
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit">Submit</button>
    </form>
  </div>
</div> 
<img width="200" height="200" class="image-style-banner-image-1920x480" src="logo.png" alt="" />
<br></br>
<h2>
ENRICHING LIVES THROUGH THE ARTS
WE ARE THE ARTS SOCIETY
</h2>
<video width="500" height="500" controls>
  <source src="video1.mp4" type="video/mp4">
Your browser does not support the video tag.
</video> 

<iframe width="560" height="315" src="https://www.youtube.com/embed/8Iw1W4sEgPY"></iframe>

</body>
</html>