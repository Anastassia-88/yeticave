<nav class="nav">
    <ul class="nav__list container">
        <?php foreach($categories as $category): ?>
            <li class="nav__item">
                <a href="/all-lots.php?id=<?= $category['id'];?>"><?= $category['name']; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>
<div class="container">
    <section class="lots">
        <h2>Все лоты в категории <span>«Доски и лыжи»</span></h2>
        <ul class="lots__list">
            <?php foreach ($lots as $lot): ?>
                <li class="lots__item lot">
                    <div class="lot__image">
                        <img src="<?= htmlspecialchars($lot['image']); ?>" width="350" height="260"
                             alt="<?= htmlspecialchars($lot['name']); ?>">
                    </div>
                    <div class="lot__info">
                        <span class="lot__category"><?= $lot['category']; ?></span>
                        <h3 class="lot__title"><a class="text-link"
                                                  href="/lot.php?id=<?= $lot['id']; ?>"><?= htmlspecialchars($lot['name']); ?></a>
                        </h3>
                        <div class="lot__state">
                            <div class="lot__rate">
                                <span class="lot__amount">Стартовая цена</span>
                                <span class="lot__cost"><?= price_format($lot['start_price']); ?></span>
                            </div>
                            <div class="lot__timer timer">
                                <?= time_left ($lot['dt_end']); ?>
                            </div>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
    <ul class="pagination-list">
        <li class="pagination-item pagination-item-prev"><a>Назад</a></li>
        <li class="pagination-item pagination-item-active"><a>1</a></li>
        <li class="pagination-item"><a href="#">2</a></li>
        <li class="pagination-item"><a href="#">3</a></li>
        <li class="pagination-item"><a href="#">4</a></li>
        <li class="pagination-item pagination-item-next"><a href="#">Вперед</a></li>
    </ul>
</div>