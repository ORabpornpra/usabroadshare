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
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

?>
<!DOCTYPE html>
<html>
<head>
	<?php 
        echo $this->Html->charset(); ?>
    <title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta(
                        'icon', 
                        $this->Html->url('/img/favicon.png')
                        );
                echo $this->Html->meta(null, null, array(
                    'name' => 'viewport',
                    'content' => 'width=device-width, initial-scale=1.0'
                ));
                echo $this->Html->meta(NULL, NULL, array(
                    'name' => 'author',
                    'content' => 'Usabroadshare'
                ));
		echo $this->Html->css('bootstrap');
                echo $this->Html->css('carousel');
                echo $this->Html->css('usabroadshare');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
    <?php echo $this->element('Layout/navigation'); ?>
    
    <div class="container">
        <?php 
        echo $this->Session->flash(); 
        echo $this->fetch('content');
        ?>
    </div>
    
    <?php 
    echo $this->element('Layout/footer');
    echo $this->Html->script(
            '//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js'
    );
    echo $this->Html->script('bootstrap.min');
    echo $this->Html->script('holder');
    echo $this->Html->script(
                '//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js'
        );
    
    echo $this->Js->writeBuffer();
    ?>   
</body>
</html>
