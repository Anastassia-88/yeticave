<?php
$is_auth = rand(0, 1);
$user_name = 'Anastassia';

require_once 'init.php';
require_once 'functions.php';

// SQL-запрос для получения списка новых лотов
$lots = get_lots($link);

// SQL-запрос для получения списка категорий
$categories = get_categories($link);

$page_content = include_template('index.php', ['lots' => $lots, 'categories' => $categories]);
$layout_content = include_template('layout.php',
    ['content' => $page_content, 'categories' => $categories, 'title' => 'Главная']);

print($layout_content);
