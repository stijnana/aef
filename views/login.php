<div class="container-fluid no-padding">
    <div class="wrap">
        <div class="hwrap">
            <h1 class=" h1aef wow fadeInUp" data-wow-duration="2s" data-wow-delay="0s">anna elizabeth foundation</h1>
        </div>
        <?php
        $helper = $fb->getRedirectLoginHelper();

        //$permissions = ['email','user_likes'];
        $permissions = [];
        $loginUrl = $helper->getLoginUrl('http://localhost:8888/aef/login-callback.php', $permissions);

        echo '<a href="'. $loginUrl . '"><button type="button" class="aefcolor fbbtn btn btn-primary btn-lg wow fadeInUp" data-wow-duration="2s" data-wow-delay="1s">Log in with Facebook</button></a>';
        ?>
    </div>
</div>