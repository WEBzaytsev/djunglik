<?php
function register_acf_blocks() {
    register_block_type( __DIR__ . '/blocks/front-page/3d-tour' );
    register_block_type( __DIR__ . '/blocks/front-page/come-to-visit' );
    register_block_type( __DIR__ . '/blocks/front-page/feedback-form-2' );
    register_block_type( __DIR__ . '/blocks/front-page/front-page-first-section' );
    register_block_type( __DIR__ . '/blocks/front-page/front-page-fourth-section' );
    register_block_type( __DIR__ . '/blocks/front-page/front-page-second-section' );
    register_block_type( __DIR__ . '/blocks/front-page/front-page-third-section' );
    register_block_type( __DIR__ . '/blocks/front-page/news' );
    register_block_type( __DIR__ . '/blocks/front-page/reviews' );
    register_block_type( __DIR__ . '/blocks/front-page/telegram-bot' );
}