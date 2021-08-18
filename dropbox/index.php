<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: white;
  border-bottom: 1px solid rgb(209,204,198);
  height:80px;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  /* height:30px; */
}

.topnav a:hover {
  background-color: white;
  color: black;
}


.topnav .search-container {
  float: right;
  width:40%;
  border: 4px solid rgb(247,245,242);
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
  border: 2px solid black;
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

.topnav-right {
  float: right;
}

.rightsidenav {
  height: 100%;
  width: 22%;
  position: fixed;
  float: right;
  z-index: 1;
  top: 0;
  right: 0;
  background-color: white;
  overflow-x: hidden;
  padding-top: 20px;
  margin-top:80px;
  border-left: 2px solid rgb(209,204,198)
}


.sidenav {
  height: 100%;
  width: 15.5%;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(247,245,242);
  overflow-x: hidden;
  padding-top: 20px;
  margin-top:80px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 16px;
  font: sharpGrotesk;
  color: #818181;
  display: block;
  margin-left:10px;
  margin-bottom:15px;
}

.sidenav a:hover {
  color: black;
}

.main {
  margin-left: 15.5%; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
p{
    font: sharpgrotesk;
    font-size: 16px;
}

table {
  border-collapse: collapse;
  width: 70%;
  margin-left: 1%;
  margin-right: 1%;
  /* margin-top: 10%; */
}

th, td {
  padding: 9px;
  text-align: left;
  font: AtlasGrotesk;
  font-size: 16px;
  border-bottom: 0.01px solid #818181;
}

tr:hover {background-color: rgb(247,245,242);}

.fa-folder{
    color: rgb(146,206,255);
}


</style>
</head>
<body>

<div class="topnav">
  <a href="#"><i class="fa fa-bars" style="margin-top: 20px;"></i></a>
  <a href="#"><img src="dropboxlogo.png" width="100" height="40" style="margin-top: 10px;"></img></a> 
  <div class="topnav-right">
  <a href="#"><i class="fa fa-question-circle" style="margin-top: 20px;"></i></a>
  <a href="#"><i class="fa fa-bell" style="margin-top: 20px;"></i></a>
  <a href="#"><i class="fa fa-user" style="margin-top: 20px;"></i></a>
</div>
</div>


<div class="sidenav">
    <a href="#">Home</a>
    <a href="#">All Files</a>
    <a href="#">Recents</a>
    <a href="#">Starred</a>
    <a href="#">Shared</a>
    <a href="#">File Requests</a>
    <a href="#">Deleted Files</a>
  </div>

<div class="rightsidenav">

</div>



  <div class="main">
    <p>Dropbox</p>

    <br><br>

    <table>
        <tr>
          <th>Name</th>
          <th>Modified</th>
          <th>Members</th>
        </tr>
        <tr>
          <td><i class="fa fa-folder"></i> Team workspace</td></i>
          <td>--</td>
          <td>Only you</td>
        </tr>
        <tr>
            <td><i class="fa fa-file" style="color:rgb(243,132,101)"></i> Exam 2020</td></i>
          <td>--</td>
          <td>Only you</td>
        </tr>
        <tr>
          <td>Final.pdf</td>
          <td>21/06/2020 12:33 pm</td>
          <td>Only you</td>
        </tr>
        <tr>
          <td>Aub</td>
          <td>21/08/2020 12:33 pm</td>
          <td>Only you</td>
        </tr>
      </table>

      <br><br>
      <!-- <form method="POST" action="upload.php">
          <button type="submit">UPLOAD</button>
      </form> -->


    <!-- Upload response -->
    <?php 
    // session_start();
    if(isset($_SESSION['message'])){
       echo $_SESSION['message'];
       unset($_SESSION['message']);
    }
    ?>
    <form method="post" action="upload.php" enctype='multipart/form-data'>
      <input type='file' name='file' />
      <input type='submit' value='Upload' name='but_upload'>
    </form>


    </div>

</body>
</html>
