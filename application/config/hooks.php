<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$hook['post_controller'][] = array(
'class' => 'pjax',
'function' => 'initialize',
'filename' => 'pjax.php',
'filepath' => 'hooks'
);