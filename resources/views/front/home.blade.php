@extends('layouts.frontend')

@section('content')
<div class="col-sm-12" style="padding: 0px;">
  <div class="slideshow-container">
    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <img src="{{ url('/') }}/img/cryptotrading.original.jpg" style="width:100%">
      <div class="text">CryptoCurrency<br>Portfolio<br>Management</div>
    </div>

    <div class="mySlides fade">
      <img src="img2.jpg" style="width:100%">
      <div class="text">Caption Two</div>
    </div>

    <div class="mySlides fade">
      <img src="img3.jpg" style="width:100%">
      <div class="text">Caption Three</div>
    </div>
    <div class="blur">
    </div>
    <!-- Next and previous buttons -->
    <a class="prev">&#10094;</a>
    <a class="next">&#10095;</a>
    <!-- The dots/circles -->
    <div style="text-align:center; position: absolute; bottom: 0px; width: 100%;">
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
    </div>
  </div>
</div>
<div class="col-sm-12 sectionhome">
  <div class="text-container">
    <h2>Pioneros en un mercado en desarrollo</h2>
    <p>Somos una compañía dedicada a la asesoría de inversiones en criptomonedas con amplia experiencia en el mercado. Ofrecemos diversos productos de inversion adaptados a las necesidades de nuestros inversionistas. Manejamos portafolios de criptoactivos a largo plazo y fabricamos, instalamos y administramos mineros.</p>
  </div>
</div>

<div class="col-sm-12 sectionhome">
  <h2 style="text-align:center;">Ultimas Noticias</h2>
  <div class="col-sm-6 lastnews">
  <a class="imglink" href="#"><img src="{{ url('/') }}/img/news.jpg" alt=""></a>
  <span> <a href="#">Categoría</a> <i>12 horas antes.</i> </span>
  <h4>Titulo de noticia</h4>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean in arcu dignissim, suscipit augue quis, maximus sapien. Duis luctus sed diam id bibendum. Nam at enim egestas, mollis ligula nec, ullamcorper dolor.</p>
  </div>
  <div class="col-sm-6">
    <div class="row">
      <div class="col-sm-6 lastnews older">
        <a class="imglink" href="#"><img src="{{ url('/') }}/img/news.jpg" alt=""></a>
        <span> <a href="#">Categoría</a> <i>12 horas antes.</i> </span>
        <h4>Titulo de noticia muy largo y tedioso muchisimo mas aun </h4>
      </div>
      <div class="col-sm-6 lastnews older">
        <a class="imglink" href="#"><img src="{{ url('/') }}/img/news.jpg" alt=""></a>
        <span> <a href="#">Categoría</a> <i>12 horas antes.</i> </span>
        <h4>Titulo de noticia</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 lastnews older">
        <a class="imglink" href="#"><img src="{{ url('/') }}/img/news.jpg" alt=""></a>
        <span> <a href="#">Categoría</a> <i>12 horas antes.</i> </span>
        <h4>Titulo de noticia muy largo y tedioso mas aun </h4>
      </div>
      <div class="col-sm-6 lastnews older">
        <a class="imglink" href="#"><img src="{{ url('/') }}/img/news.jpg" alt=""></a>
        <span> <a href="#">Categoría</a> <i>12 horas antes.</i> </span>
        <h4>Titulo de noticia</h4>
      </div>
    </div>
  </div>


</div>
<div class="col-sm-12 sectionhome">
  <div class="product-container">
    <h2>Productos Destacados</h2>
    <div class="col-sm-3 top-product">
      <div class="img-product">
        <img src="{{ url('/') }}/img/minero-poseidon.png" alt="" width="" height="">
      </div>
      <h3>Minero Modelo Poseidon</h3>
      <p>Ensamblado y programado por nosotros en Venezuela con las tarjetas mas rápidas del mercado.</p>
      <button type="button" class="btn btn-alternative"  name="more">Ver más</button>
    </div>
    <div class="col-sm-3 top-product">
      <div class="img-product">
        <img src="{{ url('/') }}/img/minero-poseidon.png" alt="" width="" height="">
      </div>
      <h3>Minero Modelo Poseidon</h3>
      <p>Ensamblado y programado por nosotros en Venezuela con las tarjetas mas rápidas del mercado.</p>
      <button type="button" class="btn btn-alternative"  name="more">Ver más</button>
    </div>
    <div class="col-sm-3 top-product">
      <div class="img-product">
        <img src="{{ url('/') }}/img/minero-poseidon.png" alt="" width="" height="">
      </div>
      <h3>Minero Modelo Poseidon</h3>
      <p>Ensamblado y programado por nosotros en Venezuela con las tarjetas mas rápidas del mercado.</p>
      <button type="button" class="btn btn-alternative"  name="more">Ver más</button>
    </div>
    <div class="col-sm-3 top-product">
      <div class="img-product">
        <img src="{{ url('/') }}/img/minero-poseidon.png" alt="" width="" height="">
      </div>
      <h3>Minero Modelo Poseidon</h3>
      <p>Ensamblado y programado por nosotros en Venezuela con las tarjetas mas rápidas del mercado.</p>
      <button type="button" class="btn btn-alternative"  name="more">Ver más</button>
    </div>
  </div>
</div>
<div class="col-sm-12 sectionhome">
  <div class="col-sm-6 text-center">
    <h2>Portafolio</h2>
    <p>Manejo de portafolio de inversión en cualquier cryptomoneda</p>

    <table class="table">
    <tbody>
      <tr>
        <td>BTC</td>
        <td>2.256</td>
        <td>$18,530</td>
      </tr>
      <tr>
        <td>ETH</td>
        <td>22.766</td>
        <td>$15,542</td>
      </tr>
      <tr>
        <td>DASH</td>
        <td>31.587</td>
        <td>$12,322</td>
      </tr>
      <tr>
        <td>ETC</td>
        <td>339.285</td>
        <td>$6,080</td>
      </tr>
      <tr>
        <td>LTC</td>
        <td>33.559</td>
        <td>$4,550</td>
      </tr>
    </tbody>
  </table>
  </div>
  <div class="col-sm-6">
    <div id="chartContainer" style="height: 300px; width: 100%;"></div>
  </div>

</div>
<div class="col-sm-12 sectionhome miner">
  <div class="text-miner">
    <h2>Minería</h2>
    <p>Asesoramiento y Manejo de equipos para minería de crypto monedas</p>
  </div>
</div>
<div class="col-sm-12 sectionhome">
  <h2>Nodos Maestros</h2>
</div>


@endsection
