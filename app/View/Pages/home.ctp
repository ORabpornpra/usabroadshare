<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>


<?php echo $this->set('title_for_layout', 'Usabroadshare'); ?>
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <?php 
          echo $this->Html->image(
                  'home_first.png',
                  array(
                      'alt' => 'Home First Slide'
                      )
                  );
          ?>
          <div class="container">
              <div class="row">
                  <div class="col-md-6 carousel-caption">
                      <h1>First slide.</h1>
                      <p>Can click button below to navigate Abroad</p>
                      <p><a class="btn btn-lg btn-primary" href="#" role="button">Go to Abroad</a></p>
                  </div>
              </div>
          </div>
        </div>
        <div class="item">
          <?php
          echo $this->Html->image(
                  'home_second.png', 
                  array(
                      'alt' => 
                      'Home Second Slide'
                      )
                  );
          ?>
          <div class="container">
            <div class="carousel-caption">
                <h1>Second slide.</h1>
                <p>Can click button below to navigate Share</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Go to Share</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <?php
          echo $this->Html->image(
                  'home_third.png', 
                  array(
                      'alt' => 
                      'Home Third Slide'
                      )
                  );
          ?>
          <div class="container">
            <div class="carousel-caption">
                <h1>Third slide.</h1>
                <p>Can click button below to navigate Recommended</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Go to Recommended</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->


    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4"><h1>Coming Soon</h1></div>
            <div class="col-md-4"></div>
        </div>
    </div>
    
   
            