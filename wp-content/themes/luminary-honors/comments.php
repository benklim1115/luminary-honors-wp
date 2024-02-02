<?php
/**
 * Template for displaying comments
 */

 //is it a password protected post
 if (post_password_required()) {
    return;
 }