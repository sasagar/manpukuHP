<?php
function mnpk_post_has_archive_func($args, $post_type){
    if('post'== $post_type){
        $args['rewrite']=true;
        $args['has_archive']='post';
    }
    return $args;
}
add_filter('register_post_type_args', 'mnpk_post_has_archive_func', 10, 2);