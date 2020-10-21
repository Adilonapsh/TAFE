<!-- Navbar -->
<nav class="main-header navbar sticky-top navbar-expand navbar-white navbar-light ">
    <!-- Left navbar links -->
    <div class="navbar-nav">
        <div class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </div>
    </div>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
        <div class="input-group">
            <div class="input-group-prepend">
              <!-- <span class="" id=""><i class="fas fa-search"></i></span> -->
            </div>
            <input type="text" class="form-control" placeholder="Search.." aria-label="Search" aria-describedby="basic-addon1" style="border:0px; width: 500px;">
          </div>
    </form>

   <div class="navbar-nav ml-auto">
       
   </div>



    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        {{-- <a href="#" class="btn btn-light"></a> --}}
        <div class="dropdown">
          <a class="btn btn-secondary dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }}
          </a>
        
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>
      </li>
      
    </ul>
  </nav>