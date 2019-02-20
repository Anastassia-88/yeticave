<?php
$is_auth = rand(0, 1);
$user_name = 'Anastassia';
require_once 'init.php';
require_once 'functions.php';

// SQL-запрос для получения списка новых лотов
$sql = "
select start_price, l.name as name, image, c.name as category, UNIX_TIMESTAMP(l.dt_add) as dt_add
from lots l
join categories c
on l.category_id = c.id
left join bets b
on b.lot_id = l.id
where winner_id is null
group by l.id
order by l.id desc;
";
$lots = db_fetch_data($link, $sql);

// SQL-запрос для получения списка категорий
$categories = get_categories($link);

$page_content = include_template('index.php', ['lots' => $lots, 'categories' => $categories]);
$layout_content = include_template('layout.php',
    ['content' => $page_content, 'categories' => $categories, 'title' => 'Главная']);

print($layout_content);