<nav class="nav">
  <ul class="nav__list container">
        <?php foreach ($categories as $category): ?>
    <li class="nav__item">
      <a href="all-lots.html"><?= htmlspecialchars($category['title']) ?></a>
    </li>
        <?php endforeach; ?>
  </ul>
</nav>
<section class="lot-item container">
<?php foreach ($lot_info as $lots): ?> 
  <h2><?= htmlspecialchars($lots['name_lot']) ?></h2>
  <div class="lot-item__content">
    <div class="lot-item__left">
      <div class="lot-item__image">
        <img src="../<?= htmlspecialchars($lots['img_path']) ?>" width="730" height="548" alt="<?= htmlspecialchars($lots['title_id']) ?>">
      </div>
      <p class="lot-item__category">Категория: <span><?= htmlspecialchars($lots['title']) ?></span></p>
      <p class="lot-item__description"><?= htmlspecialchars($lots['description_lot']) ?></p>
    </div>
    <div class="lot-item__right">
      <?php if(isset($_SESSION['user'])): ?>
      <div class="lot-item__state">
      <?php [$hour, $minut] = diff_in_time($lots['date_end']); ?>
        <div class="lot-item__timer timer <?= $hour<1 ? 'timer--finishing' : '' ?>">
        <?= $hour . ':' . $minut ?>
        </div>
        <div class="lot-item__cost-state">
          <div class="lot-item__rate">
            <span class="lot-item__amount">Текущая цена</span>
            <span class="lot-item__cost"><?= costs_of_item($lots['start_price']) ?></span>
          </div>
          <div class="lot-item__min-cost">
            Мин. ставка <span><?= htmlspecialchars($lots['bet_step']) ?></span>
          </div>
        </div>
        <form class="lot-item__form" action="https://echo.htmlacademy.ru" method="post" autocomplete="off">
          <p class="lot-item__form-item form__item form__item--invalid">
            <label for="cost">Ваша ставка</label>
            <input id="cost" type="text" name="cost" placeholder="12 000">
            <span class="form__error">Введите наименование лота</span>
          </p>
          <button type="submit" class="button">Сделать ставку</button>
        </form>
      </div>
      <div class="history">
        <h3>История ставок (<span>10</span>)</h3>
        <table class="history__list">
          <tr class="history__item">
            <td class="history__name">Иван</td>
            <td class="history__price">10 999 р</td>
            <td class="history__time">5 минут назад</td>
          </tr>
          <tr class="history__item">
            <td class="history__name">Константин</td>
            <td class="history__price">10 999 р</td>
            <td class="history__time">20 минут назад</td>
          </tr>
          <tr class="history__item">
            <td class="history__name">Евгений</td>
            <td class="history__price">10 999 р</td>
            <td class="history__time">Час назад</td>
          </tr>
          <tr class="history__item">
            <td class="history__name">Игорь</td>
            <td class="history__price">10 999 р</td>
            <td class="history__time">19.03.17 в 08:21</td>
          </tr>
          <tr class="history__item">
            <td class="history__name">Енакентий</td>
            <td class="history__price">10 999 р</td>
            <td class="history__time">19.03.17 в 13:20</td>
          </tr>
          <tr class="history__item">
            <td class="history__name">Семён</td>
            <td class="history__price">10 999 р</td>
            <td class="history__time">19.03.17 в 12:20</td>
          </tr>
          <tr class="history__item">
            <td class="history__name">Илья</td>
            <td class="history__price">10 999 р</td>
            <td class="history__time">19.03.17 в 10:20</td>
          </tr>
          <tr class="history__item">
            <td class="history__name">Енакентий</td>
            <td class="history__price">10 999 р</td>
            <td class="history__time">19.03.17 в 13:20</td>
          </tr>
          <tr class="history__item">
            <td class="history__name">Семён</td>
            <td class="history__price">10 999 р</td>
            <td class="history__time">19.03.17 в 12:20</td>
          </tr>
          <tr class="history__item">
            <td class="history__name">Илья</td>
            <td class="history__price">10 999 р</td>
            <td class="history__time">19.03.17 в 10:20</td>
          </tr>
        </table>
      </div>
    </div>
    <?php endif; ?>
    <?php endforeach; ?>
  </div>
</section>
