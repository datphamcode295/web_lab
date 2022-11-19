<div class="d-flex flex-row-reverse m-2">
      <div class="col-sm-2 d-flex flex-row-reverse">
        <img class = "me-3" src="./img/logo.png" alt="logo" width="150px">
      </div>
      <div class="col-sm-6 align-self-center"><H1>My Bootstrap Demo</H1></div>
    </div>
<nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="?page=home">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="?page=product">Product</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="?page=action1">Action1</a></li>
                <li><a class="dropdown-item" href="?page=action2">Action2</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="?page=action3">Action3</a></li>
              </ul>
            </li>
            <?php 
            if(!isset($_COOKIE["name"])) { ?>
              <li class="nav-item">
              <a class="nav-link" href="?page=login">Login</a>
            </li><li class="nav-item">
            <a class="nav-link" href="?page=register">Register</a>
          </li>

          <?php  }else{ ?>
            </li><li class="nav-item">
              <a class="nav-link" href="logout.php">Logout(
                <?php echo $_COOKIE["name"] ?>
             ) </a>
            </li>
            <?php }; ?>            
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>