<?php

// show.php
require_once 'model.php';

$post = get_post_by_id($_GET['id']);

require 'templates/show.php';