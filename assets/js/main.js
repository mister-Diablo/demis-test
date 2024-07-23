document.addEventListener('DOMContentLoaded', function() {
    // Старт настройки счётчиков
    const counters = document.querySelectorAll('.counter');
    counters.forEach(counter => {
        const minusBtn = counter.querySelector('.counter__button--minus');
        const plusBtn = counter.querySelector('.counter__button--plus');
        const input = counter.querySelector('.counter__input');

        minusBtn.addEventListener('click', function() {
            if (input.value > 1) {
                input.value--;
                minusBtn.disabled = input.value == 1;
            }
        });

        plusBtn.addEventListener('click', function() {
            if (input.value == 1) {
                minusBtn.disabled = false;
            }
            input.value++;
        });
    });

    // Настройка модального окна
    const modal = document.querySelector('.modal');
    const modalStatus = modal.querySelector('.modal__status');
    const modalInfo = modal.querySelector('.modal__info-product');
    const initialModalContent = modal.innerHTML;
    const modalOverlay = modal.querySelector('.modal__overlay');
    const closeModal = modal.querySelector('.modal__close');

    const addToCartButtons = document.querySelectorAll('.product-card__add-to-cart');
    addToCartButtons.forEach(button => {
        button.addEventListener('click', function() {
            const productCard = button.closest('.product-card');
            const imageSrc = productCard.querySelector('.product-card__image img')?.src;
            const productName = productCard.querySelector('.product-card__name').textContent;
            const productPrice = productCard.querySelector('.counter__input').dataset.price;
            const productQuantity = productCard.querySelector('.counter__input').value;
            const productTotal = productPrice * productQuantity;
            const imageElement = modal.querySelector('.modal__image');
            if (imageElement) {
                imageElement.src = imageSrc || '';
            }
            modal.querySelector('.modal__title').textContent = productName;
            modal.querySelector('.modal__quantity').textContent = `Количество: ${productQuantity}`;
            modal.querySelector('.modal__price-per-item').textContent = `Цена за шт.: ${productPrice} ₽`;
            modal.querySelector('.modal__total').textContent = `Итого: ${productTotal} ₽`;

            const form = modal.querySelector('.modal__form');
            form.productName.value = productName;
            form.quantity.value = productQuantity;
            form.price.value = productPrice;
            form.total.value = productTotal;

            modal.classList.add('open');
        });
    });

    // Обработка отправки формы
    const form = modal.querySelector('.modal__form');
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        const formData = new FormData(form);

        fetch('set-order.php', {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                const debugContainer = document.querySelector('.debug-container');
                debugContainer.textContent = data.message;
                debugContainer.style.display = 'block';


                modalInfo.style.display = 'none';
                modalStatus.textContent = 'Ваш заказ успешно отправлен!';
                modalStatus.style.display = 'block';
                form.reset();
            })
            .catch(error => {
                console.error('Ошибка:', error);

                modalInfo.style.display = 'none';
                modalStatus.textContent = 'Произошла ошибка, попробуйте еще раз.';
                modalStatus.style.display = 'block';
                form.reset();
            });
    });

    [closeModal, modalOverlay].forEach(element => {
        element.addEventListener('click', function() {
            modalInfo.style.display = 'block';
            modalStatus.style.display = 'none';
            modal.classList.remove('open');
            form.reset();
        });
    });
});
