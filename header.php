<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php if ( is_category() ) {
      echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
    } elseif ( is_tag() ) {
      echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
    } elseif ( is_archive() ) {
      wp_title(''); echo ' Archive | '; bloginfo( 'name' );
    } elseif ( is_search() ) {
      echo 'Search for &quot;'.esc_html($s).'&quot; | '; bloginfo( 'name' );
    } elseif ( is_home() || is_front_page() ) {
      bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
    }  elseif ( is_404() ) {
      echo 'Error 404 Not Found | '; bloginfo( 'name' );
    } elseif ( is_single() ) {
      wp_title('');
    } else {
      echo wp_title( ' | ', 'false', 'right' ); bloginfo( 'name' );
    } ?></title>

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ; ?>/css/app.css" />

    <link rel="icon" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-144x144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-precomposed.png">

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <?php do_action('foundationPress_after_body'); ?>

  <div class="off-canvas-wrap" data-offcanvas>
  <div class="inner-wrap">

  <?php do_action('foundationPress_layout_start'); ?>

  <nav class="tab-bar show-for-small-only">
    <section class="left-small">
      <a class="left-off-canvas-toggle menu-icon" ><span></span></a>
    </section>
    <section class="middle tab-bar-section">

      <h1 class="title"><?php bloginfo( 'name' ); ?></h1>

    </section>
  </nav>

  <aside class="left-off-canvas-menu">
    <?php foundationPress_mobile_off_canvas(); ?>
  </aside>
        <!--
        <div class="top-bar-container contain-to-grid show-for-medium-up">
            <nav class="top-bar" data-topbar="">
                <ul class="title-area">
                    <li class="name">
                        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                    </li>
                </ul>
                <section class="top-bar-section">
                    <?php foundationPress_top_bar_l(); ?>
                    <?php foundationPress_top_bar_r(); ?>
                </section>
            </nav>
        </div>-->

        <div class="ShortNavStatus complex" id="marketing_nav">
  <div class="logo">
    <a href="/"><img class="logo-bottom transparent" src="layouts/mogo_logo-pink.png" /><img class="logo-top" src="layouts/mogo_logo.png" /></a>
  </div>
  <div class="mainNav">
    <ul id="center_links">
<li class="mogo-card-wrapper">
        <a href="/avoid-aftershock"></a>
<div class="mogo-card"></div>
<div class="link-title hide-for-small">
  Mogo
</div>
<div class="link-title">
  Card
</div>
<div class="link-description">
  No credit card aftershock
</div>
        </li>

<li class="mogo-money-wrapper">
        <a href="/mogo-money" ></a>
<div class="mogo-money"></div>
<div class="link-title hide-for-small">
  Mogo
</div>
<div class="link-title">
  Money
</div>
<div class="link-description">
  Get up to $2500 today
</div>
        </li>

<li class="store-wrapper">
        <a class="alone" href="/mogo-retail-stores"></a><span>Stores</span>
        </li>

<li class="help-wrapper">
        <a class="alone" href="http://help.mogo.ca"></a><span>Help</span>
</li>

    </ul>
  </div>
  <div class="asideNav">
    <ul id="right_links">
      <li class="reloan">
        <a href="/reloan/">Re-loan</a>
      </li>
      <li>
        <a href="/sign-in">Visa sign in</a>
      </li>
      <a class="lender-licenses hide-for-small" data-reveal="1" data-reveal-id="provinceSelect" href="#">Lender licences</a>
    </ul>
  </div>
  <div class="shortNav">
    <div class="view_menu">
      <a href="javascript:void(0);"><span aria-hidden="true" class="icon-menu" data-icon="&#xe01d;">View menu</span></a>
    </div>
    <div class="action_buttons">
      <a class="retro pink-black" href="/invite" onclick="_gaq.push(['_trackEvent', 'VisaCard', 'Click', 'HeaderGetCard-NoInvite',0, true]);"><span aria-hidden="true" class="icon-card" data-icon="&#xe011;"></span>Get invited </a><a class="retro green-black" href="/loan/apply" onclick="_gaq.push(['_trackEvent', 'Money', 'Click', 'HeaderButtonGetMoney',0, true]);"><span aria-hidden="true" class="icon-money" data-icon="&#xe010;"></span>Get money now </a>
    </div>
  </div>
  <div class="reveal-modal medium" data-reveal="1" id="provinceSelect">
    <form class="custom">
      <h3>
        Which province are you in?
      </h3>
      <div class="row">
        <div class="large-8 small-12 columns">
          <select class="custom dropdown select" id="lenderLicensesProvince">
            <option value="">
              Province
            </option>
            <option value="AB">
              AB
            </option>
            <option value="BC">
              BC
            </option>
            <option value="ON">
              ON
            </option>
          </select>
        </div>
        <div class="large-4 small-12 columns">
          <a class="button large_button hollow_arrow pink-button" id="lenderLicensesProvinceBtn">Continue</a>
        </div>
      </div>
    </form>
  </div>
</div>



<section class="container" role="document">
  <?php do_action('foundationPress_after_header'); ?>
