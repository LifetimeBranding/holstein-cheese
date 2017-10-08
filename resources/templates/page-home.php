<!-- hero component -->
<div class="hero mx-auto" id="hero-homepage">
  <div class="text-center hero-content-container m-4">
    <h1 class="text-boldest text-uppercase">A Blend of All Natural Cheese</h1>
    <hr class="divider-header">
    <span class="text-small">Barrel Aged Blended Cheddar Made With 100% Natural Ingredients</span>
  </div>
</div>

<!-- why holstein component -->
<div class="row bgcolor-secondary mx-auto" id="why-choose-holstein">
  <div class="col text-center py-5">
    <h3 class="text-bolder text-uppercase">Our Cheese</h3>
    <div class="row mx-auto">
      <div class="col py-5">
        <!-- card deck -->
        <div class="card-deck">
          <div class="card">

            <a href="products#american-cheese">
              <img class="card-img-top img-fluid" src="images/card-organic.jpg" width="549" height="308" alt="American cheese">
              <div class="card-block">
                <p class="card-text text-bold">American</p>
              </div>
              </a>
          </div>
          <div class="card">
            <a href="products#ultrasharp-cheese">
              <img class="card-img-top img-fluid" src="images/card-ultrasharp.jpg" width="549" height="308" alt="Ultrasharp cheese">
              <div class="card-block">
                <p class="card-text text-bold">Ultrasharp</p>
              </div>
              </a>
          </div>
          <div class="card">
            <a href="products#horseradish-cheese">
              <img class="card-img-top img-fluid" src="images/card-horseradish.jpg" width="549" height="308" alt="Horseradish cheese">
              <div class="card-block">
                <p class="card-text text-bold">Horseradish</p>
              </div>
              </a>
          </div>
        </div>
      </div>
    </div>
    <div class="row mx-auto mt-3">
      <div class="col">
        <a href="products" class="button" role="button">Get a Taste &gt;</a>
      </div>
    </div>
  </div>
</div>

<!-- detailed characteristics component -->
<div class="row mx-auto bgcolor-secondary" id="interactive-section-row">
  <!-- interactive section -->
  <div class="col-md-6 col-sm-12 col-lg-6 text-center bgcolor-primary p-5" id="interactive-section-first">
    <div id="interactive-section-first-content">
      <img src="images/cow-head.png" width="450" height="400" alt="Cow head" class="img-fluid">
    </div>
  </div>
  <div class="col-md-6 col-sm-12 col-lg-6 bgcolor-primary text-center p-5" id="interactive-section-second">
    <div class="section-box500">
      <div id="interactive-section-second-content">
        <h3 class="text-bolder text-uppercase">About Holstein</h3>
        <hr class="divider-header">
        <a href="aboutus" class="button" role="button">Learn More &gt;</a>
      </div>
    </div>
  </div>
</div>

<!-- store finder component -->
<div class="row mx-auto">
  <div class="col-sm text-center" id="interactive-section-third">
    <div class="section-box500">
      <div id="interactive-section-third-content">
        <h3 class="text-bolder text-uppercase">Buy Holstein Cheese</h3>
        <hr class="divider-header">
        <p>Available at all Market Basket locations.</p>
        <div class="d-inline-block">
          <input size="8" type="text" placeholder="Zip Code" class="form-input text-center align-middle" id="input-zip-code">
          <button class="d-inline-block p-1 text-small align-middle" id="btn-locate-store">Find &gt;</button>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm">
    <div class="google-maps">
      <iframe id="map-homepage" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDj8fNVGdtienzgVtQh6RV5HOJHA477pjM&q=Market+Basket"
         style="border: 0" width="500" height="300" allowfullscreen></iframe>
    </div>
  </div>
</div>

<!-- newsletter signup component -->
<div id="newsletter-signup-section">
  <div class="row w-75 mx-auto" id="newsletter-signup-box">
    <div class="col text-center py-5">
      <i class="fa fa-lg fa-envelope-o py-3"></i>
      <h3 class="text-uppercase text-bold">Sign Up For Special Offers</h3>
      <hr class="divider-header">
      <form id="newsletter-sign-up-form">
      <div class="form-group">
        <input type="text" name="firstname" placeholder="First Name" class="form-input">
        <input type="text" name="lastname" placeholder="Last Name" class="form-input">
        <input type="email" name="email" placeholder="Email Address" class="form-input">
      </div>
      <button type="button" id="btn-newsletter-signup">Submit &gt;</button>
      </form>
      <div id="form-ajax-response-container"></div>
    </div>
  </div>
</div>

<div class="row bgcolor-primary-dark text-white py-2 mx-auto text-big text-bold text-uppercase">
  <div class="col-12 text-center">
    <a href="contact" class="text-white contact-us-link">Contact Us &gt;</a>
  </div>
</div>