<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
<!--              <a class="navbar-brand" href="#">Usabroadshare</a>-->
              <?php
              echo $this->Html->link(
                      $this->Html->image(
                              'nav_logo.png',
                              array('alt' => 'usabroadshareLogo')
                              ), 
                      array(
                          'controller' => 'pages', 
                          'action' => 'display'
                          ),
                      array(
                          'class' => 'navbar-brand',
                          'escape' => FALSE)
                      );
              ?>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">HOME</a></li>
                <li><a href="#contact">ABROAD</a></li>
                <li><a href="#contact">CLASSIFIED</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">SHARE <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">TRIP PLAN</a></li>
                    <li><a href="#">VIDEO</a></li>
                    <li><a href="#">PICTURE</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">RECOMMENDED <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">STORE</a></li>
                    <li><a href="#">RESTAURANT</a></li>
                    <li><a href="#">HOUSING</a></li>
                  </ul>
                </li>
                <li><a href="#contact">US</a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div
