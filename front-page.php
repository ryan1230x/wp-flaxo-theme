<?php
get_header();
?>
<!-- Front page content goes here -->
<main id="rw-front-page">   
<!-- Banner section start -->
  <section class="front-page-banner banner text-center">
    <div class="section-padding">
      <div class="container-fluid">
        <div class="banner-title">
          <h1>
            Confortable & stylis clothes for every men
          </h1>
        </div>
        <div class="banner-content">
          <p>
            With Flaxo, find the confortable and stylish clothes. Flaxo provides fast
            affordable fashion for men via a portfolio of over 20 different brands.
          </p>
        </div>
        <div class="banner-cta">
          <a href="#" class="btn button">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-circle" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.854 10.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707l-4.096 4.096z"/>
            </svg>
            Shop Collections
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- Banner section end -->
  <!-- featured image start -->
  <section class="featured-image mb-5">
    <div class="container-fluid">
      <div class="image"></div>
    </div>
  </section>
  <!-- featured image end -->
  <!-- New Arrivals start -->
  <section class="new-arrivals">
    <div class="section-padding">
      <div class="custom-wrapper container-fluid">
        <div class="heading mb-5">
          <h2>
            New Arrivals
          </h2>
        </div>
        <div class="new-arrivals-gallery">
        <?php 
        the_content(); 
        echo do_shortcode('[woo_product_slider id="40"]');
        ?>
        </div>
      </div>
    </div>
  </section>
  <!-- New Arrivals end -->
  <!-- Our collections start -->
  <section class="our-collections">
    <div class="section-padding" style="padding-bottom: 0;margin-bottom:-50px">
      <div class="custom-wrapper container-fluid">
        <div class="heading">
          <h2>
            Our Collections
          </h2>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est repellendus eum nostrum sequi cupiditate pariatur fugiat eos obcaecati molestias ipsa!
          </p>
        </div>
        <div class="row">
          <div class="col-12 col-lg-6 our-collections-list-wrapper">
            <ul class="our-collections-list">
              <li class="our-collections-item line-through"><h3>Hoodies</h3></li>
              <li class="our-collections-item"><h3>Shorts & Pants</h3></li>
              <li class="our-collections-item"><h3>Shirts & Pants</h3></li>
              <li class="our-collections-item"><h3>Sweatshirts</h3></li>
              <li class="our-collections-item"><h3>Jackets & Vest</h3></li>
            </ul>
          </div>
          <div class="col-12 col-lg-6">
            <div class="our-collections-image">
              <img 
                src="https://images.unsplash.com/photo-1488161628813-04466f872be2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=80"
                alt=""
                class="img-fluid"
              >
            </div>
            <div class="our-collections-info">
              <div class="our-collections-cta mb-2">
                <div class="our-collections-title">
                  <h3>Hoodies</h3>
                  <span>100&euro;</span>
                </div>
                <button class="btn button">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                  </svg>
                </button>
              </div>
              <span><span class="font-weight-bold h4">01/</span><small>06</small></span>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis, suscipit!
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Our collections end -->
  <!-- Season start  -->
  <section class="season">
    <div class="section-padding">
      <div class="custom-wrapper container-fluid">
        <div class="heading">
          <h2>
            Spring/Summer 2021
          </h2>
        </div>
        <div class="row">
          <div class="col-12 col-lg-6">
            <div class="season-cta">
              <img 
                src="https://images.unsplash.com/photo-1611099024089-7f57ca9aca7f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                alt=""
                class="img-fluid"
              >
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia reiciendis adipisci pariatur similique perspiciatis blanditiis maiores exercitationem, sequi error sapiente.
              </p>
              <a href="#" class="button">
                Check out Season
              </a>
            </div>
          </div>
          <div class="col-12 col-lg-6 season-second-col-wrapper">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non commodi omnis quisquam tempore deserunt? Aliquam expedita inventore dignissimos delectus iusto.</p>
            <img 
              src="https://images.unsplash.com/photo-1620833072816-e879094a1475?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=80"
              alt=""
              class="img-fluid"
              >
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Season end -->
</main>
<!-- Front page content ends here -->
<?php
get_footer();
?>
