
<!DOCTYPE html>
<html>
    <head>
        <!--CSS-->
        <link rel="stylesheet" href="CSS/style.css"/>

        <!--Swiper CSS-->
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

        <!---->
        <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css"/>

        <title>Cozycom</title>
    </head>
    <body>
        <!--Main JS-->
        <script src="JS/main.js"></script>

        <header class="header">
            <div class="header__top">
                <div class="header__container container">
                    <div class="header__contact">
                        <span>+91 98858 23659</span>

                        <!--<span>Our Location</span>-->
                    </div>
                    <p class="header__alert-news">
                        Swagat he CozyCom Mai!!
                    </p>

                    <a href="login-register.html" class="header__top-action">
                        Sign up
                    </a>
                </div>
            </div>
            <!-- logo-->
            <nav class="nav container">
                <a href="" class="nav__logo">
                    <img src="" alt="" class="nav__log-img">
                </a>

                <!-- All pages-->
                <div class="nav__menu" id="nav-menu">

                    <ul class="nav__list">
                        <li class="nav__items">
                            <a href="index.html" class="nav__link active-link">Home</a>
                        </li>

                        <li class="nav__items">
                            <a href="shop.html" class="nav__link">Shop</a>
                        </li>

                        <li class="nav__items">
                            <a href="accounts.html" class="nav__link">My Account</a>
                        </li>

                        <li class="nav__items">
                            <a href="compare.html" class="nav__link">Compare</a>
                        </li>

                        <li class="nav__items">
                            <a href="login.html" class="nav__link">Login</a>
                        </li>
                    </ul>

                    <!--Search Box-->
                    <div class="header__search">
                        <input type="text" class="form__input" placeholder="Search for item"/>

                        <button class="search__btn">
                            <img src="IMG/search.png" alt=""/>
                        </button>
                    </div>
                </div>

                <!--Wishlist-->
                <div class="header__user-actions">
                    <a href="wishlist.html" class="header__action-btn">
                        <img src="IMG/icon-heart.svg" alt="">
                        <span class="count">3</span>
                    </a>

                    <a href="cart.html" class="header__action-btn">
                        <img src="IMG/icon-cart.svg" alt="">
                        <span class="count">3</span>
                    </a>
                </div>
            </nav>
        </header>

        <main class="main">
            <section class="home section--lg">
                <div class="home__container container grid">
                    <div class="home__content">
                        <span class="home__subtitle">Hot Promotions</span>
                        <h1 class="home__title">Your's Baby's Comfort in our hands</h1>
                    
                    <p class="home__description">Save more on baby's b-day</p>
                    <a href="shop.html" class="btn">Shop Now</a>
                    </div>

                    <img src="New folder/Coverpage.png" alt="" class="home__img"/>
                </div>
            </section>

            <section class="categories container section">
                <h3 class="section__title"><span>Popular</span> Categories</h3>

                <div class="categories__container swiper">
                    <div class="swiper-wrapper">
                        <!--Category 1-->
                        <a href="shop.html" class="category__items swiper-slide">
                            <img src="New folder/Category/category-1.jpg" alt="" class="category__img">

                            <h3 class="category__title">Clothing</h3>
                        </a>

                        <!--Category 2-->
                        <a href="shop.html" class="category__items swiper-slide">
                            <img src="New folder/Category/Category-2.jpg" alt="" class="category__img">

                            <h3 class="category__title">Soft Toys</h3>
                        </a>

                        <!--Category 3-->
                        <a href="shop.html" class="category__items swiper-slide">
                            <img src="New folder/Category/Category-3.jpg" alt="" class="category__img">

                            <h3 class="category__title">hygienic</h3>
                        </a>

                        <!--Category 4-->
                        <a href="shop.html" class="category__items swiper-slide">
                            <img src="New folder/Category/Category-4.png" alt="" class="category__img">

                            <h3 class="category__title">Shoes</h3>
                        </a>

                        <!--Category 5-->
                        <a href="shop.html" class="category__items swiper-slide">
                            <img src="New folder/Category/Category-5.jpg" alt="" class="category__img">

                            <h3 class="category__title">Care</h3>
                        </a>

                        <!--Category 6-->
                        <a href="shop.html" class="category__items swiper-slide">
                            <img src="New folder/Category/Category-6.jpg" alt="" class="category__img">

                            <h3 class="category__title">Travelling Bags</h3>
                        </a>

                        <!--Category 7-->
                        <!--<a href="shop.html" class="category__items swiper-slide">
                            <img src="" alt="" class="category__img">

                            <h3 class="category__title"></h3>
                        </a>

                        Category 8
                        <a href="shop.html" class="category__items swiper-slide">
                            <img src="" alt="" class="category__img">

                            <h3 class="category__title"></h3>
                        </a>-->
                    </div>

                    <div class="swiper-button-next">
                        <!--<i class="fi fi-rs-angle-small-right"></i>-->
                        <i class="fi fi-rs-angle-right"></i>
                    </div>
                    <div class="swiper-button-prev">
                        <!--<i class="fi fi-rs-angle-small-left"></i>-->
                        <i class="fi fi-rs-angle-left"></i>
                    </div>
                </div>
            </section>

            <section class="products section container">
                <div class="tab__btns">
                    <span class="tab__btn active-tab" data-target="#featured">Featured</span>
                    <!--<span class="tab__btn" data-target="#popular">Popular</span>
                    <span class="tab__btn" data-target="#new-added">New added</span>-->
                </div>

                <div class="tab__items">
                    <div class="tab__item active-tab" content id="featured">
                        <div class="product__container grid">
                            <!--Product 1-->
                            <div class="product__item">
                                <div class="product__banner">
                                    <a href="details.html" class="product__images">

                                        <!--Product1-->
                                        <img src="New folder/Product/Product-1-1.jpg" alt="" class="product__img default">
                                        <img src="New folder/Product/Product-1-2.jpg" alt="" class="product__img hover">
                                    </a>

                                    <div class="product__actions">
                                        <a href="#" class="action__btn" aria-label="Quick view">
                                            <i class="fi fi-rs-eye"></i>
                                        </a>

                                        <a href="#" class="action__btn" aria-label="Add to Wishlist">
                                            <i class="fi fi-rs-heart"></i>
                                        </a>

                                        <a href="#" class="action__btn" aria-label="Compare">
                                            <i class="fi fi-rs-shuffle"></i>
                                        </a>
                                    </div>

                                    <div class="product__badge light-pink">Hot</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">Clothing</span>
                                    <a href="details.html">
                                        <h3 class="product__title">Regular Fit Printed Casual Shirt</h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">₹499</span>
                                        <span class="old__price">₹999</span>
                                    </div>

                                    <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                        <i class="fi fi-rs-shopping-bag-add"></i>
                                    </a>
                                </div>
                            </div>

                            <!--Product 2-->
                            <div class="product__item">
                                <div class="product__banner">
                                    <a href="details.html" class="product__images">

                                        <!--Product1-->
                                        <img src="New folder/Product/Product-2-1.jpg" alt="" class="product__img default">
                                        <img src="New folder/Product/Product-2-2.jpg" alt="" class="product__img hover">
                                    </a>

                                    <div class="product__actions">
                                        <a href="#" class="action__btn" aria-label="Quick view">
                                            <i class="fi fi-rs-eye"></i>
                                        </a>

                                        <a href="#" class="action__btn" aria-label="Add to Wishlist">
                                            <i class="fi fi-rs-heart"></i>
                                        </a>

                                        <a href="#" class="action__btn" aria-label="Compare">
                                            <i class="fi fi-rs-shuffle"></i>
                                        </a>
                                    </div>

                                    <div class="product__badge light-green">Hot</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">Soft-Toy</span>
                                    <a href="details.html">
                                        <h3 class="product__title"> Blue Elephant Soft-Toy</h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">₹369</span>
                                        <span class="old__price">₹549</span>
                                    </div>

                                    <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                        <i class="fi fi-rs-shopping-bag-add"></i>
                                    </a>
                                </div>
                            </div>

                            <!--Product 3-->
                            <div class="product__item">
                                <div class="product__banner">
                                    <a href="details.html" class="product__images">

                                        <!--Product1-->
                                        <img src="New folder/Product/Product-8-1.jpg" alt="" class="product__img default">
                                        <img src="New folder/Product/Product-8-2.jpg" alt="" class="product__img hover">
                                    </a>

                                    <div class="product__actions">
                                        <a href="#" class="action__btn" aria-label="Quick view">
                                            <i class="fi fi-rs-eye"></i>
                                        </a>

                                        <a href="#" class="action__btn" aria-label="Add to Wishlist">
                                            <i class="fi fi-rs-heart"></i>
                                        </a>

                                        <a href="#" class="action__btn" aria-label="Compare">
                                            <i class="fi fi-rs-shuffle"></i>
                                        </a>
                                    </div>

                                    <div class="product__badge light-blue">Hot</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">Care</span>
                                    <a href="details.html">
                                        <h3 class="product__title">Baby Lotion</h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">₹359</span>
                                        <span class="old__price">₹399</span>
                                    </div>

                                    <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                        <i class="fi fi-rs-shopping-bag-add"></i>
                                    </a>
                                </div>
                            </div>

                            <!--Product 4-->
                            <div class="product__item">
                                <div class="product__banner">
                                    <a href="details.html" class="product__images">

                                        <!--Product1-->
                                        <img src="New folder/Product/Product-4-1.jpg" alt="" class="product__img default">
                                        <img src="New folder/Product/Product-4-2.jpg" alt="" class="product__img hover">
                                    </a>

                                    <div class="product__actions">
                                        <a href="#" class="action__btn" aria-label="Quick view">
                                            <i class="fi fi-rs-eye"></i>
                                        </a>

                                        <a href="#" class="action__btn" aria-label="Add to Wishlist">
                                            <i class="fi fi-rs-heart"></i>
                                        </a>

                                        <a href="#" class="action__btn" aria-label="Compare">
                                            <i class="fi fi-rs-shuffle"></i>
                                        </a>
                                    </div>

                                    <div class="product__badge light-orange">Hot</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">Soft-Toy</span>
                                    <a href="details.html">
                                        <h3 class="product__title">Babyhug Turtle Soft Toy Green & Pink </h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">₹285</span>
                                        <span class="old__price">₹545</span>
                                    </div>

                                    <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                        <i class="fi fi-rs-shopping-bag-add"></i>
                                    </a>
                                </div>
                            </div>

                            <!--Product 5-->
                            <div class="product__item">
                                <div class="product__banner">
                                    <a href="details.html" class="product__images">

                                        <!--Product1-->
                                        <img src="New folder/Product/Product-9-1.jpg" alt="" class="product__img default">
                                        <img src="New folder/Product/Product-9-2.jpg" alt="" class="product__img hover">
                                    </a>

                                    <div class="product__actions">
                                        <a href="#" class="action__btn" aria-label="Quick view">
                                            <i class="fi fi-rs-eye"></i>
                                        </a>

                                        <a href="#" class="action__btn" aria-label="Add to Wishlist">
                                            <i class="fi fi-rs-heart"></i>
                                        </a>

                                        <a href="#" class="action__btn" aria-label="Compare">
                                            <i class="fi fi-rs-shuffle"></i>
                                        </a>
                                    </div>

                                    <div class="product__badge light-blue">-15%</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">FootWear</span>
                                    <a href="details.html">
                                        <h3 class="product__title">Fruit Printed Flip Flop</h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">₹339</span>
                                        <span class="old__price">₹399</span>
                                    </div>

                                    <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                        <i class="fi fi-rs-shopping-bag-add"></i>
                                    </a>
                                </div>
                            </div>

                            <!--Product 6-->
                            <div class="product__item">
                                <div class="product__banner">
                                    <a href="details.html" class="product__images">

                                        <!--Product1-->
                                        <img src="New folder/Product/Product-11-1.jpg" alt="" class="product__img default">
                                        <img src="New folder/Product/Product-11-2.jpg" alt="" class="product__img hover">
                                    </a>

                                    <div class="product__actions">
                                        <a href="#" class="action__btn" aria-label="Quick view">
                                            <i class="fi fi-rs-eye"></i>
                                        </a>

                                        <a href="#" class="action__btn" aria-label="Add to Wishlist">
                                            <i class="fi fi-rs-heart"></i>
                                        </a>

                                        <a href="#" class="action__btn" aria-label="Compare">
                                            <i class="fi fi-rs-shuffle"></i>
                                        </a>
                                    </div>

                                    <div class="product__badge light-blue">-52%</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">Travelling Bag</span>
                                    <a href="details.html">
                                        <h3 class="product__title">Diaper Backpack Star Print</h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">₹1339</span>
                                        <span class="old__price">₹2795</span>
                                    </div>

                                    <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                        <i class="fi fi-rs-shopping-bag-add"></i>
                                    </a>
                                </div>
                            </div>

                            <!--Product 7-->
                            <div class="product__item">
                                <div class="product__banner">
                                    <a href="details.html" class="product__images">

                                        <!--Product1-->
                                        <img src="New folder/Product/Product-14-1.jpg" alt="" class="product__img default">
                                        <img src="New folder/Product/Product-14-1.jpg" alt="" class="product__img hover">
                                    </a>

                                    <div class="product__actions">
                                        <a href="#" class="action__btn" aria-label="Quick view">
                                            <i class="fi fi-rs-eye"></i>
                                        </a>

                                        <a href="#" class="action__btn" aria-label="Add to Wishlist">
                                            <i class="fi fi-rs-heart"></i>
                                        </a>

                                        <a href="#" class="action__btn" aria-label="Compare">
                                            <i class="fi fi-rs-shuffle"></i>
                                        </a>
                                    </div>

                                    <div class="product__badge light-green">Hot</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">hygienic</span>
                                    <a href="details.html">
                                        <h3 class="product__title">MotherCare Soap</h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">₹45</span>
                                        <span class="old__price">₹50</span>
                                    </div>

                                    <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                        <i class="fi fi-rs-shopping-bag-add"></i>
                                    </a>
                                </div>
                            </div>

                            <!--Product 8-->
                            <div class="product__item">
                                <div class="product__banner">
                                    <a href="details.html" class="product__images">

                                        <!--Product1-->
                                        <img src="New folder/Product/Product-18-1.jpg" class="product__img default">
                                        <img src="New folder/Product/Product-18-2.jpg" class="product__img hover">
                                    </a>

                                    <div class="product__actions">
                                        <a href="#" class="action__btn" aria-label="Quick view">
                                            <i class="fi fi-rs-eye"></i>
                                        </a>

                                        <a href="#" class="action__btn" aria-label="Add to Wishlist">
                                            <i class="fi fi-rs-heart"></i>
                                        </a>

                                        <a href="#" class="action__btn" aria-label="Compare">
                                            <i class="fi fi-rs-shuffle"></i>
                                        </a>
                                    </div>

                                    <!--<div class="product__badge light-blue">-32%</div>-->
                                </div>

                                <div class="product__content">
                                    <span class="product__category">Clothing</span>
                                    <a href="details.html">
                                        <h3 class="product__title">Taffy Sleeveless Ruffle Detail Textured Crop Top And Pant Set </h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">₹1199</span>
                                        <span class="old__price">₹1499</span>
                                    </div>

                                    <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                        <i class="fi fi-rs-shopping-bag-add"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>       
        </main>
        <!--Swiper JS-->
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

        <!--Swiper JS-->
        <script>
        var swiperCategories = new Swiper(".categories__container", {
            spaceBetween: 24,
            loop: true,
            
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
             },
            768: {
                slidesPerView: 4,
                spaceBetween: 40,
            },
            1400: {
                slidesPerView: 6,
                spaceBetween: 24,
            },
        }
    });

    //Product JS
        const tabs = document.querySelectorAll('[data-target]'),
            tabContents = document.querySelectorAll('[content]');

        tabs.forEach((tab) =>{
            tab.addEventListener('click', () =>{
                const target = document.querySelector(tab.dataset.target);
                tabContents.forEach((tabContent) => {
                    tabContent.classList.remove('active-tab');
                });

                target.classList.add('active-tab');

                tabs.forEach((tab) => {
                    tab.classList.remove('active-tab');
                });
                tab.classList.add('active-tab');

            });
        });

        var swiperProducts = new Swiper(".new__container", {
            spaceBetween: 24,
            loop: true,
            
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
             },
            768: {
                slidesPerView: 4,
                spaceBetween: 40,
            },
            1400: {
                slidesPerView: 5,
                spaceBetween: 24,
            },
        }
    });
        
        </script>

    </body>
</html>