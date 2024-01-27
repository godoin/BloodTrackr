<!-- Logged Hamburger -->
<div class="logged user-pop">
    <!-- <div class="user-header">
        <button class="exit" id="logged-exit-btn">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div> -->
    <div class="user-content">
        <div class="actions">
            <a href="user-profile.php">User Profile</a>
            <a href="core/user-logout.php">Logout</a>
        </div>
    </div>
</div>

<!-- Pop-up Rating -->
<div class="rating-pop">
    <div class="wrapper">
        <form action="#" method="post">
            <div class="rating-header">
                <span class="title">Rate Bank</span>
                <div class="exit" id="rating-exit">
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </div>
            <div class="rating-description">
                <?php
                    if (isset($error)) {
                        echo '<span class="error-msg"> Error: ' . $error . '</span>';
                    }
                ?>
                <div class="rating-select">
                    <span class="title">What do you think of the Blood Bank?</span>
                    <input type="hidden" name="product_id" value="<?php echo $product['id'] ?>">
                        <div class="rate">
                            <div class="radio">
                                <input class="radio-input" type="radio" value="1" name="rating" id="star1">
                                <label class="radio-label" for="star1">
                                    <i class="fa-solid fa-star"></i>
                                </label>
                                <input class="radio-input" type="radio" value="2" name="rating" id="star2">
                                <label class="radio-label" for="star2">
                                    <i class="fa-solid fa-star"></i>
                                </label>
                                <input class="radio-input" type="radio" value="3" name="rating" id="star3">
                                <label class="radio-label" for="star3">
                                    <i class="fa-solid fa-star"></i>
                                </label>
                                <input class="radio-input" type="radio" value="4" name="rating" id="star4">
                                <label class="radio-label" for="star4">
                                    <i class="fa-solid fa-star"></i>
                                </label>
                                <input class="radio-input" checked type="radio" value="5" name="rating" id="star5">
                                <label class="radio-label" for="star5">
                                    <i class="fa-solid fa-star"></i>
                                </label>
                            </div>
                        </div>
                    <p class="rating-desc">It was awesome!</p>
                </div>
                <div class="field description">
                    <label for="message">Review Message</label>
                    <textarea name="message" id="review_message" autofocus required autocomplete="message" placeholder="Enter Review Message"></textarea>
                </div>
                <div class="actions">
                    <button name="rate-product" type="submit">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>