<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        h1 {
          position: relative;
          display: inline-block; 
          font-size: 3rem;
        margin-right: auto;
      margin-bottom:50px;}

  
       p {
          font-size: 1.9rem; }
           p::after {
          content: "";
          display: block;
          width: 900px;      
          height: 3px;     
          background: white; 
          margin: 10px auto 0;}
         
  </style> 
</head>

<body>
   
    <style>
        
        .navbar .nav-link {
    font-size: 18px;
  }
  .navbar .navbar-brand {
    font-size: 20px;
  } 
   
  /*h1 { margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #c69fb4ff;
            font-family: 'Arial', sans-serif
             }*/
            

       .background-image {
    background-image: url('img/product.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 100vh;
}   
   
 
        </style>

  
    <nav class="navbar navbar-expand-lg "  >
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="#">MY <i class="fa-solid fa-heart text-danger"></i> PARAPHARM</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu">
            
            <li><a class="dropdown-item" href="#">Skin care & Cosmetics</a></li>
              <li><a class="dropdown-item" href="#">Body & Hair treatment</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#"> Food supplements</a></li>
            <li><a class="dropdown-item" href="#"> Medical équipment</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Help</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
    @if (Route::has('login'))
        @auth
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/home') }}">Welcome</a>
            </li>
        @else
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>

            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
            @endif
        @endauth
    @endif
</ul>

    </div>
  </div>
</nav>

 
  <div class="background-image">
    <h1 class="text-center text-white">Your❤️Parapharm</h1>
  
    <p class="text-center text-white">Découvrez une large gamme de produits parapharmaceutiques sélectionnés avec soin : soins du visage, compléments alimentaires, hygiène, bébé et bien-être.</p>
  
   </div>
   <!-- <div class="image-container">
    <img src="{{ asset('img/product.jpg') }}" alt="Médecine">
    <div class="texte-sur-image">Bienvenue sur mon site </div>
</div> -->
      
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>                                                                                                                                                                                                                                                                                                                                   