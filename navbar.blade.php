<!DOCTYPE html>
<html>
<head>
  <style>

  
   .buttontest {
    color: #8FBC8F;
    font-family: cursive;
    font-size:15px;
    margin-left:-45px;
    margin-top:5px;
    padding-top:2px;
    padding-left:9px;
    padding-right:9px;
    padding-bottom:2px;
    background-color:black;
    }
    body{
      background-color:black;
    }
    
  .navbar{
    background-color:black;
    height:60px;
  }
 .navbar-brand {
   color:white;
 }

    </style>
</head>


<body>


<nav class="navbar">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
                
            </a>
            <ul class="nav navbar-nav">
              <li><a href="/">Home</a></li>
              <li><a href="/about">About</a></li>
              <li><a href="/serve">Services</a></li>
              <li><a href="/posts">Blog</a></li>
            </ul>
        </div>

            
        </div>


        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>
            
            
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

       
        <form>
          <input class="form-control" type="text" placeholder="Search" aria-label="Search">
        </form>

     
      </div>
    </div>
  </nav>

  </body>
  </html>
