<?php

wp_list_comments();

if ( !comments_open( post_id ) ) {
    _e( 'comments dose not exist', 'alpha' );
}
comment_form();