<?php 

 if (class_exists('MultiPostThumbnails')) {
        new MultiPostThumbnails(
            array(
                'label' => 'Cover Image',
                'id' => 'cover-image',
                'post_type' => 'post'
            )
        );
        new MultiPostThumbnails(
            array(
                'label' => 'Cool Image',
                'id' => 'cool-image',
                'post_type' => 'post'
            )
        );
  }  

?>