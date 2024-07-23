<?php
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demis test</title>
    <link rel="stylesheet" href="./assets/css/main.css">
</head>
<body>
<header><h1>Каталог</h1></header>
<main class="main">
    <section class="catalog">
        <div class="catalog__items">
            <article class="product-card">
                <figure class="product-card__image">
                    <img src="" alt="image">
                </figure>
                <div class="product-card__content">
                    <h2 class="product-card__name">Товар 1</h2>
                    <div class="product-card__price">
                        <span class="product-card__amount">10 ₽</span>
                        <div class="counter">
                            <button class="counter__button counter__button--minus" disabled>-</button>
                            <input type="number" class="counter__input" data-price="10" value="1" disabled>
                            <button class="counter__button counter__button--plus">+</button>
                        </div>
                    </div>
                    <button type="button" class="product-card__add-to-cart btn">В корзину</button>
                </div>
            </article>
            <article class="product-card">
                <figure class="product-card__image">
                    <img src="" alt="image">
                </figure>
                <div class="product-card__content">
                    <h2 class="product-card__name">Товар 2</h2>
                    <div class="product-card__price">
                        <span class="product-card__amount">20 ₽</span>
                        <div class="counter">
                            <button class="counter__button counter__button--minus" disabled>-</button>
                            <input type="number" class="counter__input" data-price="20" value="1" disabled>
                            <button class="counter__button counter__button--plus">+</button>
                        </div>
                    </div>
                    <button type="button" class="product-card__add-to-cart btn">В корзину</button>
                </div>
            </article>
            <article class="product-card">
                <figure class="product-card__image">
                    <img src="" alt="image">
                </figure>
                <div class="product-card__content">
                    <h2 class="product-card__name">Товар 3</h2>
                    <div class="product-card__price">
                        <span class="product-card__amount">30 ₽</span>
                        <div class="counter">
                            <button class="counter__button counter__button--minus" disabled>-</button>
                            <input type="number" class="counter__input" data-price="30" value="1" disabled>
                            <button class="counter__button counter__button--plus">+</button>
                        </div>
                    </div>
                    <button type="button" class="product-card__add-to-cart btn">В корзину</button>
                </div>
            </article>
            <article class="product-card">
                <figure class="product-card__image">
                    <img src="" alt="image">
                </figure>
                <div class="product-card__content">
                    <h2 class="product-card__name">Товар 4</h2>
                    <div class="product-card__price">
                        <span class="product-card__amount">40 ₽</span>
                        <div class="counter">
                            <button class="counter__button counter__button--minus" disabled>-</button>
                            <input type="number" class="counter__input" data-price="40" value="1" disabled>
                            <button class="counter__button counter__button--plus">+</button>
                        </div>
                    </div>
                    <button type="button" class="product-card__add-to-cart btn">В корзину</button>
                </div>
            </article>
            <article class="product-card">
                <figure class="product-card__image">
                    <img src="" alt="image">
                </figure>
                <div class="product-card__content">
                    <h2 class="product-card__name">Товар 5</h2>
                    <div class="product-card__price">
                        <span class="product-card__amount">50 ₽</span>
                        <div class="counter">
                            <button class="counter__button counter__button--minus" disabled>-</button>
                            <input type="number" class="counter__input" data-price="50" value="1" disabled>
                            <button class="counter__button counter__button--plus">+</button>
                        </div>
                    </div>
                    <button type="button" class="product-card__add-to-cart btn">В корзину</button>
                </div>
            </article>
            <article class="product-card">
                <figure class="product-card__image">
                    <img src="" alt="image">
                </figure>
                <div class="product-card__content">
                    <h2 class="product-card__name">Товар 6</h2>
                    <div class="product-card__price">
                        <span class="product-card__amount">60 ₽</span>
                        <div class="counter">
                            <button class="counter__button counter__button--minus" disabled>-</button>
                            <input type="number" class="counter__input" data-price="60" value="1" disabled>
                            <button class="counter__button counter__button--plus">+</button>
                        </div>
                    </div>
                    <button type="button" class="product-card__add-to-cart btn">В корзину</button>
                </div>
            </article>
            <article class="product-card">
                <figure class="product-card__image">
                    <img src="" alt="image">
                </figure>
                <div class="product-card__content">
                    <h2 class="product-card__name">Товар 7</h2>
                    <div class="product-card__price">
                        <span class="product-card__amount">70 ₽</span>
                        <div class="counter">
                            <button class="counter__button counter__button--minus" disabled>-</button>
                            <input type="number" class="counter__input" data-price="70" value="1" disabled>
                            <button class="counter__button counter__button--plus">+</button>
                        </div>
                    </div>
                    <button type="button" class="product-card__add-to-cart btn">В корзину</button>
                </div>
            </article>
        </div>
    </section>

    <div class="modal">
        <div class="modal__overlay"></div>
        <div class="modal__content">
            <span class="modal__close">&times;</span>
            <div class="modal__info-product">
            <figure class="modal__figure">
                <img src="" alt="Product Image" class="modal__image">
            </figure>
            <h2 class="modal__title">Название товара</h2>
            <p class="modal__quantity">Количество: 1</p>
            <p class="modal__price-per-item">Цена за шт.: 1000 ₽</p>
            <p class="modal__total">Итого: 1000 ₽</p>
            <form class="modal__form">
                <input type="text" name="name" placeholder="Имя" required>
                <input type="tel" name="phone" placeholder="Телефон" required>
                <textarea name="comment" placeholder="Комментарий"></textarea>
                <input type="hidden" name="productName" value="">
                <input type="hidden" name="quantity" value="">
                <input type="hidden" name="price" value="">
                <input type="hidden" name="total" value="">
                <button type="submit" class="btn">Оформить заказ</button>
                <div class="modal__message" style="display: none;"></div>
            </form>
            </div>
            <div class="modal__status" style="display: none;"></div>
        </div>
    </div>

    <div class="debug-container" style="display:none; color: #333; background: #f7f7f7; padding: 20px; margin-top: 20px;"></div>
</main>
<script src="./assets/js/main.js"></script>
</body>
</html>
