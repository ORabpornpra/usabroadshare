<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="container">
    <div class="main-top">
        <div class="row users form">
            <?php echo $this->Session->flash('auth');?>
            <?php echo $this->Form->create('User');?>
            <fieldset>
                <legend>
                    <?php echo __('Please enter your username and password');?>
                </legend>
                <?php 
                echo $this->Form->input('username');
                echo $this->Form->input('password');
                ?>     
            </fieldset>
            <?php echo $this->Form->end(__('Login'));?>
        </div>
    </div>
</div>
