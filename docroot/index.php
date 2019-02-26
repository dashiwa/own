<?php

// index.php
require_once 'model.php';

$posts = get_all_posts();

require 'templates/list.php';