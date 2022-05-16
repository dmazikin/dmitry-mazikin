const hamburger = document.querySelector(".hamburger"),
    menu = document.querySelector(".menu"),
    closeElem = document.querySelector(".menu__close");

hamburger.addEventListener("click", () => {
    menu.classList.add("active");
});
closeElem.addEventListener("click", () => {
    menu.classList.remove("active");
});

function validateForm(form) {
    $(form).validate({
        messages: {
            name: "Пожалуйста, введите свое имя",
            email: {
                required: "Пожалуйста , введите email",
                email: "Не правильно введен email",
            },
            phone: "Пожалуйста , введите номер телефона",
            policy: "Пожалуйста, согласитесь с политикой конфиденциальности",
        },
    });
}
validateForm(".contacts__form");