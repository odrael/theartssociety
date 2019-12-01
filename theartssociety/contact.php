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
  <a href="index.php">Home</a>
  <a href="news.php">News</a>
  <a class="active" href="contact.php">Contact</a>
  <a href="about.php">About</a>
<div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit">Submit</button>
    </form>
  </div>
</div> 

<header id="main-content-header" class="clearfix">
              <div class="row">
                <h2 class="page-title col-md-8" id="page-title">Contact us</h2>
              </div>
                          
            
</header>
        
		<div class="main-content-wrapper no-sidebars">

          

                      <div id="content" class="no-sidebars">
              <div id="block-block-6" class="block block-block no-title odd first block-count-5 block-region-content block-6" >  
  
<p>Use the contact details below or use the online form at the bottom and we will get right back to you;</p>
<h2>Membership Support</h2>
<p>For enquiries relating to Membership, Volunteering, Lecture Programmes, AGM or Grants:<br />
Telephone 020 7430 0730<br />
Email:&nbsp;<a href="mailto:enquiries@theartssociety.org?subject=Membership%20enquiry">enquiries@theartssociety.org</a></p>
<p>
Directory day enquiries/ enquiries from lecturers 0203 206 9326<br />
Advertising enquiries&nbsp;0203 206 9332<br />
Expense claims and Society gift aid&nbsp;0203 206 9338<br />
Advice and support to Treasurers&nbsp;0203 206 9328</p>
<p>&nbsp;</p>

  </div>

</body>
</html>