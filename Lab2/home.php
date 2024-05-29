<?php
$posts = [
    [
      'title' => 'The Road Ahead',
      'subtitle' => 'The road ahead might be paved - it might not be.',
      'img_modifier' => 'TheRoadAhead',
      'author' => 'Mat Vogels',
      'date' => 'September 25, 2015',
      'adventure' => false,
    ],
    [
        'title' => 'From Top Down',
        'subtitle' => 'Once a year, go someplace you’ve never been before.',
        'img_modifier' => 'FromTopDown',
        'author' => 'William Wong',
        'date' => 'September 25, 2015',
        'adventure' => true,
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/home.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora&family=Oxygen&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="page__top-panel">
        <header class="page__menu page__menu_top">
            <div class="menu__logo">Escape.</div>
            <nav class="menu__navigation">
                <a href="#" class="navigation__item">HOME</a>
                <a href="" class="navigation__item">CATEGORIES</a>
                <a href="" class="navigation__item">ABOUT</a>
                <a href="" class="navigation__item">CONTACT</a>
            </nav>
        </header>
        <div class="top-panel__text-group">
            <h1 class="top-panel__main-header">Let's do it together.</h1>
            <h2 class="top-panel__sub-header">We travel the world in search of stories. Come along for the ride.</h2>
            <button class="top-panel__button">View Latest Posts</button>
        </div>
    </div>
    <nav class="page__categories-navigation">
        <a href="" class="categories-navigation__item">Nature</a>
        <a href="" class="categories-navigation__item">Photography</a>
        <a href="" class="categories-navigation__item">Relaxation</a>
        <a href="" class="categories-navigation__item">Vacation</a>
        <a href="" class="categories-navigation__item">Travel</a>
        <a href="" class="categories-navigation__item">Adventure</a>
    </nav>
    <main class="page__main-content">
        <h3 class="main-content__header">Featured Posts</h3>
        <div class="main-content__posts-group main-content__posts-group_big-posts">
            <?php
                foreach ($posts as $post) {
                    include 'post_preview.php';
                }
            ?>
        </div>
        <h3 class="main-content__header">Most Recent</h3>
        <div class="main-content__posts-group main-content__posts-group_small-posts">
            <div class="posts-group__small-post-preview">
                <img src="./images/StillStandingTall.png" alt="StillStandingTall" class="small-post-preview__image">
                <div class="small-post__content">
                    <p class="small-post-preview__header">Still Standing Tall</p>
                    <p class="small-post-preview__comment">Life begins at the end of your comfort zone.</p>
                </div>
                <div class="small-post-preview__footer">
                    <div class="small-post-preview__author-info">
                        <img src="./images/WilliamWong.png" alt="WilliamWong" class="author-info__avatar">
                        <p class="author-info__name">William Wong</p>
                    </div>
                    <div class="small-post-preview__date">9/25/2015</div>
                </div>
            </div>

            <div class="posts-group__small-post-preview">
                <img src="./images/SunnySideUp.png" alt="SunnySideUp"  class="small-post-preview__image">
                <div class="small-post__content">
                    <p class="small-post-preview__header">Sunny Side Up</p>
                    <p class="small-post-preview__comment">No place is ever as bad as they tell you it’s going to be.</p>
                </div>
                <div class="small-post-preview__footer">
                    <div class="small-post-preview__author-info">
                        <img src="./images/MatVogels.png" alt="MatVogels" class="author-info__avatar">
                        <p class="author-info__name">Mat Vogels</p>
                    </div>
                    <div class="small-post-preview__date">9/25/2015</div>
                </div>
            </div>

            <div class="posts-group__small-post-preview">
                <img src="./images/WaterFalls.png" alt="WaterFalls"  class="small-post-preview__image">
                <div class="small-post__content">
                    <p class="small-post-preview__header">Water Falls</p>
                    <p class="small-post-preview__comment">We travel not to escape life, but for life not to escape us.</p>
                </div>
                <div class="small-post-preview__footer">
                    <div class="small-post-preview__author-info">
                        <img src="./images/MatVogels.png" alt="MatVogels" class="author-info__avatar">
                        <p class="author-info__name">Mat Vogels</p>
                    </div>
                    <div class="small-post-preview__date">9/25/2015</div>
                </div>
            </div>

            <div class="posts-group__small-post-preview">
                <img src="./images/ThroughTheMist.png" alt="ThroughTheMist"  class="small-post-preview__image">
                <div class="small-post__content">
                    <p class="small-post-preview__header">Through the Mist</p>
                    <p class="small-post-preview__comment">Travel makes you see what a tiny place you occupy in the world.</p>
                </div>
                <div class="small-post-preview__footer">
                    <div class="small-post-preview__author-info">
                        <img src="./images/WilliamWong.png" alt="WilliamWong" class="author-info__avatar">
                        <p class="author-info__name">William Wong</p>
                    </div>
                    <div class="small-post-preview__date">9/25/2015</div>
                </div>
            </div>

            <div class="posts-group__small-post-preview">
                <img src="./images/AwakenEarly.png" alt="AwakenEarly"  class="small-post-preview__image">
                <div class="small-post__content">
                    <p class="small-post-preview__header">Awaken Early</p>
                    <p class="small-post-preview__comment">Not all those who wander are lost.</p>
                </div>
                <div class="small-post-preview__footer">
                    <div class="small-post-preview__author-info">
                        <img src="./images/MatVogels.png" alt="MatVogels" class="author-info__avatar">
                        <p class="author-info__name">Mat Vogels</p>
                    </div>
                    <div class="small-post-preview__date">9/25/2015</div>
                </div>
            </div>

            <div class="posts-group__small-post-preview">
                <img src="./images/TryItAlways.png" alt="TryItAlways"  class="small-post-preview__image">
                <div class="small-post__content">
                    <p class="small-post-preview__header">Try it Always</p>
                    <p class="small-post-preview__comment">The world is a book, and those who do not travel read only one page.</p>
                </div>
                <div class="small-post-preview__footer">
                    <div class="small-post-preview__author-info">
                        <img src="./images/MatVogels.png" alt="MatVogels" class="author-info__avatar">
                        <p class="author-info__name">Mat Vogels</p>
                    </div>
                    <div class="small-post-preview__date">9/25/2015</div>
                </div>
            </div>
        </div>
    </main>
    <footer class="page__footer-container">
        <form class="footer__form">
            <h3 class="footer__form-label">Stay in Touch</h3>
            <div class="form__input-container">
                <input
                    class="form__input-email"
                    type="email"
                    name="email"
                    placeholder="Enter your email address"
                />
                <input
                    class="form__input-submit"
                    type="submit"
                    value="Submit"
                />
            </div>
        </form>
        <div class="page__menu page__menu_footer">
            <div class="menu__logo">Escape.</div>
            <nav class="menu__navigation menu__navigation_footer">
                <a href="#" class="navigation__item">HOME</a>
                <a href="" class="navigation__item">CATEGORIES</a>
                <a href="" class="navigation__item">ABOUT</a>
                <a href="" class="navigation__item">CONTACT</a>
            </nav>
        </div>
    </footer>
</body>
</html>