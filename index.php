<?php get_header(); ?>


<div id="slider">
  <div class="container">
    <h1>Aceleramos o teu desafio <br/></h1>
    <h2>Plataforma de inovação e empreendedorismo<br/> Na região litoral centro</h2>
  </div>
</div>

<div id="quem-somos">
  <div class="wrapper">
    <div class="container">
      <div class="content">
        <?php
        $page_id = 4;
        $page_data = get_page($page_id);
        echo '<h1>' . $page_data->post_title . '</h1>';
        echo '<p>';
        echo apply_filters('the_content', $page_data->post_content);
        echo '</p>';
        ?>
      </div>
    </div>
  </div>
</div>

<div id="objectivos">
  <div class="wrapper">
    <div class="pageCover1"></div>
    <div class="container">
      <div class="content">
        <?php
        $page_id = 6;
        $page_data = get_page($page_id);
        echo '<h1>' . $page_data->post_title . '</h1>';
        echo '<p>';
        echo apply_filters('the_content', $page_data->post_content);
        echo '</p>';
        ?>
      </div>
    </div>
  </div>
</div>

<div id="procuramos">
  <div class="wrapper">
    <div class="pageCover2"></div>
    <div class="container">
      <div class="content">
        <?php
        $page_id = 8;
        $page_data = get_page($page_id);
        echo '<h1>' . $page_data->post_title . '</h1>';
        echo '<p>';
        echo apply_filters('the_content', $page_data->post_content);
        echo '</p>';
        ?>
      </div>
    </div>
  </div>
</div>

<div id="ofertas">
  <div class="wrapper">
    <div class="pageCover3"></div>
    <div class="container">
      <div class="content">
        <?php
        $page_id = 10;
        $page_data = get_page($page_id);
        echo '<h1>' . $page_data->post_title . '</h1>';
        echo '<p>';
        echo apply_filters('the_content', $page_data->post_content);
        echo '</p>';
        ?>
      </div>
    </div>
  </div>
</div>

<div id="founders">
  <div class="wrapper">
    <div class="pageCover1"></div>
    <div class="container">
      <div class="content">
        <h1>Founders</h1>
        <center>
          <div class="col4">
            <a href="https://www.linkedin.com/pub/eduardo-costa/a/218/394" target="_blank"><div class="founder1"></div></a>
            <h2>Eduardo Costa</h2>
            <p>Co-Founder</p>
            <p><strong>Vice-President and COO</strong></p>
            <p><strong>Chief Operations Officer</strong></p>
          </div>
          <div class="col4">
            <a href="https://www.linkedin.com/in/mfrotarodrigues" target="_blank"><div class="founder2"></div></a>
            <h2>Miguel Rodrigues</h2>
            <p>Co-Founder</p>
            <p><strong>President and CFO</strong></p>
            <p><strong>Chief Financial Officer</strong></p>
          </div>
          <div class="col4">
            <a href="https://www.linkedin.com/in/nunofgsantos" target="_blank"><div class="founder3"></div></a>
            <h2>Nuno Santos</h2>
            <p>Co-Founder</p>
            <p><strong>Vice-President and CTO</strong></p>
            <p><strong>Chief Technology Officer</strong></p>
          </div>
          <div class="col4">
            <a href="https://www.linkedin.com/in/tjcosta" target="_blank"><div class="founder4"></div></a>
            <h2>Tiago Costa</h2>
            <p>Co-Founder</p>
            <p><strong>Vice-President and CEO</strong></p>
            <p><strong>Chief Executive Officer</strong></p>
          </div>
        </center>
      </div>
    </div>
  </div>
</div>

<div id="parceiros">
  <div class="wrapper">
    <div class="pageCover1"></div>
    <div class="container">
      <div class="content">
        <div class="parceirosMargin">
          <?php
          $page_id = 70;
          $page_data = get_page($page_id);
          echo '<h1>' . $page_data->post_title . '</h1>';
          echo '<p>' . apply_filters('the_content', $page_data->post_content) . '</p>';
          ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="ecossistema">
  <div class="wrapper">
    <div class="pageCover2"></div>
    <div class="container">
      <div class="content">
        <?php
        $page_id = 12;
        $page_data = get_page($page_id);
        echo '<h1>' . $page_data->post_title . '</h1>';
        echo '<p>';
        echo apply_filters('the_content', $page_data->post_content);
        echo '</p>';
        ?>
      </div>
    </div>
  </div>
</div>

<div id="eventos">
  <div class="wrapper">
    <div class="pageCover3"></div>
    <div class="container">
      <div class="content">
        <h1>Eventos</h1>
        <?php $my_query = new WP_Query('category_name=eventos&posts_per_page=1');
              while ($my_query->have_posts()) : $my_query->the_post(); ?>
          <div class="inner">
            <div clasS="left">
              <?php if ( has_post_thumbnail() ) {
                      the_post_thumbnail();
                    } ?>
            </div>
            <div class="right">
              <h2><?php the_title(); ?></h2>
              <p><?php the_excerpt(); ?></p>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</div>

<div id="calls">
  <div class="wrapper">
    <div class="pageCover1"></div>
    <div class="container">
      <div class="content">
        <div class="innerCalls">
          <h1>Calls Ativas</h1>
          <center>
            <?php $my_query = new WP_Query('category_name=calls&posts_per_page=3');
                  while ($my_query->have_posts()) : $my_query->the_post(); ?>
              <div class="col">
                <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                      } ?>
                <h2><?php the_title(); ?></h2>
                <p><?php the_content(); ?></p>
              </div>
            <?php endwhile; ?>
          </center>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="noticias">
  <div class="wrapper">
    <div class="pageCover2"></div>
    <div class="container">
      <div class="content">
        <h1>Notícias</h1>
        <?php $my_query = new WP_Query('category_name=noticias&posts_per_page=5');
              while ($my_query->have_posts()) : $my_query->the_post(); ?>
          <div class="news">
            <div class="left">
              <div class="date"><p><?php the_date(); ?></p></div>
              <?php if ( has_post_thumbnail() ) {
                      the_post_thumbnail();
                    } ?>
            </div>
            <div class="right">
              <h2><?php the_title(); ?></h2>
              <p><?php the_excerpt(); ?></p>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</div>

<div id="contacto">
  <div class="container">
    <div class="contacto-inner">
      <div class="col2 fLeft">
        <?php
        $page_title = "Contactos";
        $page_data = get_page_by_title($page_title);
        echo '<p>';
        echo apply_filters('the_content', $page_data->post_content);
        echo '</p>';
        ?>
      </div>
      <div class="col2 fRight newsletter">
        <div class="Email">
          <p>info@movein3.pt</p>
        </div>
        <p>SUBSCREVA À NOSSA <strong>NEWSLETTER</strong></p>
        <form action="http://themevan.us6.list-manage2.com/subscribe/post?u=2740080adc389393d6694082d&amp;id=0eb745d701" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
          <input type="text" id="mce-EMAIL" name="EMAIL" class="subscribe-input" value="" placeholder="Introduza o seu email..." required="">
          <button type="submit" name="submit" id="mc-embedded-subscribe" class="large_btn subscribe-btn">Subscreva</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
