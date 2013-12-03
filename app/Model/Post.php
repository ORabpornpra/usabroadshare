<?php
App::uses('AppModel', 'Model');
/**
 * Post Model
 *
 */
class Post extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';
 
 /**
 * isOwnedBy 
 *
 * @var int $post, id from Post model
 * @var int $user, id from User model
 * 
 * return true if id from Post and User are match
 */
        public function isOwnedBy($post, $user) {
            //$this->field, Returns the contents of a single field given
            // the supplied conditions, in the supplied order.
            return $this->field(
                    'id', 
                    array(
                        'id' => $post, 
                        'user_id' => $user
                    )
                    ) === $post;
        }

}
