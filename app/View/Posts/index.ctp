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


<?php echo $this->set('title_for_layout', 'Usabroadshare Index'); ?>

<div class="container">
    <div class="main-top">
        <div class="row">
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-12">
                        <div><h2>Side Menu</h2></div>
                        <div class="btn-group-vertical">
                            <div class="btn-group">
                                <button class="btn btn-default dropdown-toggle side-menu-width" 
                                        type="button" 
                                        id="btnGroupVerticalDrop1" 
                                        data-toggle="dropdown">
                                    Dropdown
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                                    <li role="presentation" class="divider"></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                                </ul>
                            </div>
                            <button class="btn btn-default" type="button">Menu_2</button>
                            <button class="btn btn-default" type="button">Menu_3</button>
                            <div class="btn-group">
                                <button class="btn btn-default dropdown-toggle side-menu-width" 
                                        type="button" 
                                        id="btnGroupVerticalDrop2" 
                                        data-toggle="dropdown">
                                    Dropdown_2
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu2">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action_2</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action_2</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here_2</a></li>
                                    <li role="presentation" class="divider"></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link_2</a></li>
                                </ul>
                            </div>
                            <button class="btn btn-default" type="button">Menu_4</button>
                            <button class="btn btn-default" type="button">Menu_5</button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <h2><?php echo __('Posts'); ?></h2>
                </div>
                <div class="row">
                    <div class="col-md-1">
                        <?php echo $this->Paginator->sort('id'); ?>
                    </div>
                    <div class="col-md-2">
                        <?php echo $this->Paginator->sort('title'); ?>
                    </div>
                    <div class="col-md-3">
                        <?php echo $this->Paginator->sort('body'); ?>
                    </div>
                    <div class="col-md-2">
                        <?php echo $this->Paginator->sort('created'); ?>
                    </div>
                    <div class="col-md-2">
                        <?php echo $this->Paginator->sort('modified'); ?>
                    </div>
                    <div class="col-md-2 actions">
                        <?php echo __('Actions'); ?>
                    </div>
                </div>
                <?php foreach ($posts as $post): ?>
                <div class="row">
                    <div class="col-md-1">
                        <?php echo h($post['Post']['id']); ?>
                    </div>
                    <div class="col-md-2">
                        <?php echo h($post['Post']['title']); ?>
                    </div>
                    <div class="col-md-3">
                        <?php echo h($post['Post']['body']); ?>
                    </div>
                    <div class="col-md-2">
                        <?php echo h($post['Post']['created']); ?>
                    </div>
                    <div class="col-md-2">
                        <?php echo h($post['Post']['modified']); ?>
                    </div>
                    <div class="col-md-2 actions">
                        <?php echo $this->Html->link(
                                __('View'), 
                                array(
                                    'action' => 'view', 
                                    $post['Post']['id']
                                        )
                                ); 
                        ?>&nbsp;
                        <?php echo $this->Html->link(
                                __('Edit'), 
                                array(
                                    'action' => 'edit', 
                                    $post['Post']['id']
                                        )
                                ); 
                        ?>&nbsp;
                        <?php echo $this->Form->postLink(
                                __('Delete'), 
                                array(
                                    'action' => 'delete', 
                                    $post['Post']['id']
                                        ), 
                                null, 
                                __(
                                        'Are you sure you want to delete # %s?', 
                                        $post['Post']['id']
                                        )
                                ); 
                        ?>&nbsp;
                    </div>
                </div>
                <?php endforeach; ?>
                <p>
                    <?php
                    echo $this->Paginator->counter(array(
                        'format' => __('Page {:page} of {:pages}')
                    ));
                    ?>	</p>
                <?php if ($this->Paginator->counter('{:pages}') != '1') : ?>
                    <div class="paging">
                        <ul class="pagination">
                            <li class="disabled">
                                <?php
                                echo $this->Paginator->prev('< ' . __('<'), array(), null, array('class' => 'prev disabled'));
                                ?>
                            </li>
                            <?php
                            echo $this->Paginator->numbers(array(
                                'separator' => ' ',
                                'tag' => 'li',
                                'currentTag' => 'span',
                                'currentClass' => 'active'
                                    )
                            );
                            ?>
                            <li>
                                <?php
                                echo $this->Paginator->next(__('>') . ' >', array(), null, array('class' => 'next disabled'));
                                ?>
                            </li>
                        </ul>
                    </div>
                <?php endif; ?>
                <div class="actions">
                    <h3><?php echo __('Actions'); ?></h3>
                    <ul>
                        <li><?php echo $this->Html->link(__('New Post'), array('action' => 'add')); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

