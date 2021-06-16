<!doctype html>
<html lang="en">
    <head>
        <title>Laravel</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <header>
        <div class="header-logo">PTW</div>
        <div class="header-list">
            <ul>
                <li><a href="home">Home</a>
                <li><a href="artikel">Artikel</a></li>
                <li><a href="contact-us">Contact us</a></li>
                </li>
            </ul>
        </div>
    </header>
    <body>
       @yield('content')
    </body>
</html>

<style>
* {margin:0; padding:0;}

.header-logo {
  float: left;
  font-size: 36px;
  padding-left: 50px;
  padding-top: 10px;
}
 
header {
  background-color:#f00606;
  font-family:Arial;
  color:#FFF;
  height: 60px;
}
 
.header-list {
  height:40px; 
  line-height:40px; 
  padding: 10px;
  float: left;
  width:720px;
}
 
.header-list ul {
  list-style:none;
}
 
.header-list ul li a {
  float:left; 
  width:100px; 
  display:block; 
  text-align:center; 
  color:#FFF; 
  text-decoration:none; 
}
 
.header-list ul li a:hover {
  background-color:#4d0606; 
  display:block;
}
 
.header-list ul li:hover ul {
  display:block;

}
 
.header-list ul ul {
  display:none; 
  list-style:none; 
  position:absolute; 
  background: color #4d0606;
  background-color: #f00606;
  margin-top: 40px;
}
 
.header-list ul ul li a {
  float:none; 
  display:block; 
  padding-left:30px; 
  text-align:left; 
  width:160px;
}
 
.header-list ul ul li a:hover {
  color:#fff;
}
</style>