<?php
// template-parts/content-home.php
// Dit bestand bevat de hoofdinhoud van de homepagina: onder andere de features, intro + logos en de Fietsen-sectie.
?>

<section class="hero">
  <div class="hero__image">
    <img src="<?php echo get_template_directory_uri(); ?>/images/hero.jpg" alt="Hero achtergrond">
  </div>

  <div class="hero__content">
    <h1 class="hero__title">Punt 1, Punt 2.<br><span>Perfect geregeld.</span></h1>
    <div class="hero__buttons">
      <a href="#" class="btn btn--outline">Bekijk onze diensten</a>
      <a href="#" class="btn btn--primary">Vraag een offerte aan</a>
    </div>
  </div>
</section>

<section class="features">
  <ul class="features__list">
    <li class="features__item">Lorem ipsum dolor sit amet</li>
    <li class="features__item">Lorem ipsum dolor sit amet</li>
    <li class="features__item">Lorem ipsum dolor sit amet</li>
    <li class="features__item">Lorem ipsum dolor sit amet</li>
  </ul>
</section>

<!-- === INFO SECTION === -->
<section class="info">
  <div class="info__container">
    <div class="info__text">
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        Tempor incididunt ut labore et 25 jaar en 200 projecten.
      </p>
    </div>

    <div class="info__stats">
      <div class="info__stat">
        <span class="info__number">25+</span>
        <span class="info__label">jaar ervaring</span>
      </div>
      <div class="info__stat">
        <span class="info__number">200+</span>
        <span class="info__label">projecten</span>
      </div>
    </div>

    <div class="info__logos">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo1.png" alt="Logo 1">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo2.png" alt="Logo 2">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo3.png" alt="Logo 3">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo4.png" alt="Logo 4">
    </div>
  </div>
</section>


<!-- === FIETSEN SECTION === -->
<section class="bikes">
  <div class="bikes__container">
    
    <div class="bikes__header">
      <h2 class="bikes__title">Fietsen</h2>
      <p class="bikes__subtitle">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.
      </p>
    </div>

    <div class="bikes__grid">

      <!-- Grote afbeelding: Stadsfietsen -->
      <div class="bikes__item bikes__item--large">
        <img src="<?php echo get_template_directory_uri(); ?>/images/stadsfietsen.png" alt="Stadsfietsen">
        <div class="bikes__overlay">
          <h3>Stadsfietsen</h3>
          <div class="bikes__tags">
            <span class="tag">Ideaal voor</span>
            <span class="tag">Gemak</span>
            <span class="tag">Fietsen</span>
          </div>
          <a href="#" class="bikes__button">→</a>
        </div>
      </div>

      <!-- Kleine afbeelding: Mountainbikes -->
      <div class="bikes__item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/mountainbike.png" alt="Mountainbikes">
        <div class="bikes__overlay">
          <h3>Mountainbikes</h3>
          <span class="tag">Avontuur</span>
          <span class="tag">Fietsen</span>
        </div>
      </div>

      <!-- Kleine afbeelding: Elektrische fietsen -->
      <div class="bikes__item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/elektrisch.png" alt="Elektrische fietsen">
        <div class="bikes__overlay">
          <h3>Elektrische fietsen</h3>
          <span class="tag">Stijl</span>
          <span class="tag">100 km bereik</span>
          <span class="tag">Fietsen</span>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- === AUTOS SECTION === -->
<section class="cars">
  <div class="cars__container">

    <div class="cars__header">
      <h2 class="cars__title">Auto’s</h2>
      <p class="cars__subtitle">
        Bekijk onze nieuwste modellen en betrouwbare occasions.
      </p>
    </div>

    <div class="cars__grid">

      <!-- Nieuwe Auto's -->
      <div class="cars__item cars__item--left">
        <img src="<?php echo get_template_directory_uri(); ?>/images/nieuwe-auto.jpg" alt="Nieuwe Auto’s">
        <div class="cars__overlay">
          <h3>Nieuwe Auto’s</h3>
          <p>De nieuwste modellen met topkwaliteit en garantie.</p>
          <a href="#" class="cars__button">→</a>
        </div>
      </div>

      <!-- Occasions -->
      <div class="cars__item cars__item--right">
        <img src="<?php echo get_template_directory_uri(); ?>/images/occasions.jpg" alt="Occasions">
        <div class="cars__overlay">
          <h3>Occasions</h3>
          <p>Betrouwbare tweedehands auto’s, scherp geprijsd.</p>
          <a href="#" class="cars__button">→</a>
        </div>
      </div>

    </div>

  </div>
</section>


