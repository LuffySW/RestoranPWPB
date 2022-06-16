@extends('main')
@section('container')
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      .bd-placeholder-img {
        width: 1280px;
        height: 1024px;
        background-image: url(http://www.sop-perusahaan.com/wp-content/uploads/2019/08/Contoh-SOP-restoran-Terlengkap.jpg)
      }
      .bd-placeholder-img2 {
        width: 1270px;
        height:  1100px;
        background-image: url(https://3.bp.blogspot.com/-feLXcmZqmss/WoT5SPro_jI/AAAAAAAABk8/6Pni7gIaWNwi-cE1WlXjv3GMfRVyAQ5TwCLcBGAs/s1600/love_eat_cafe_menu.jpg)
      }

    </style>
       <link href="../css/carousel.css" rel="stylesheet">
    </head>
    <body>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="bd-placeholder-img"></div>
          <div class="container">
            <div class="carousel-caption text-start">
              <h1>SELAMAT DATANG</h1>
              <p>Carborea Café Merupakan Salah Satu Cafe Yang Berada Di Bandung</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="bd-placeholder-img2"></div>
          <div class="container">
            <div class="carousel-caption">
              <p style="color: black">Carborea Café Menyediakan berbagai pilihan makanan</p>
              <p><a class="btn btn-lg" style="color: white" href="/list">Lihat Makanan</a></p>
            </div>
          </div>
        </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

      <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>



    </body>
  </html>

@endsection
