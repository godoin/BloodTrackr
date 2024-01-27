<!-- Login -->
<div class="hero">
    <div class="hero-content">
        <form action="#" method="post">
            <div class="details">
                <div class="desc">
                    <span class="title">BloodTrackr</span>
                    <p class="description">Register and keep track of blood drives</p>
                </div>
                <?php
                    if(isset($error)) {
                        echo '<span class="error-msg"> Error: ' . $error . '</span>';
                    }
                ?>
                <div class="fields">
                    <div class="field input">
                        <label for="email">Email Address*</label>
                        <input id="email" type="email" class="form-control" name="email" required autocomplete="email" autofocus>
                    </div>
                    <div class="field input">   
                        <label for="password">Password*</label>
                        <input id="password" type="password" class="form-control" name="password" required autocomplete="password">
                    </div>
                    <div class="redirect">
                        <span class="text">Don't have an account?</span>
                        <a href="register.php">Register</a>
                    </div>
                </div>
                <div class="actions">
                    <button class="primary" name="submit" type="submit">Sign in</button>
                </div>
            </div>
        </form>
    </div>
</div>