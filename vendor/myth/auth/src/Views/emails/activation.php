
<p>This is activation email for your account on <?= site_url() ?>.</p>

<p>To activate your account use this URL.</p>

<p><a href="<?= url_to('activate-account') . '?token=' . $hash ?>">Activate account</a>.</p>

<br>

<p>If you did not registered on this website, you can safely ignore this email.</p>


<!-- <div style="text-align: center;">
    <figure>
        <img src="cid:<?php echo $image ?>" alt="">
    </figure>
    <div style="background-color: #fff; padding: 20px; border:gray 1px solid; border-radius: 5px; margin: 20px auto; max-width: 500px;">
        <div style="color: #000; padding: 20px; font-size: 24px;">
            Verify your email to sign up for <b><span style="color: #18A8D8;">Virtu</span><span style="color: #FFC700;">see</span></b>
        </div>
        <div style="padding: 20px; text-align: left;">
            <p style="padding-bottom: 30px; font-size: 15px;">
                To complete the signup process, please click on the button below. Please note that by completing
                your signup you are agreeing to our <a href="https://virtusee.com/service-away-from-safety-ruless-get-in-touch-with/" style="text-decoration: none; color: #18A8D8;">Terms of Service
                </a> and <a href="https://virtusee.com/privacy/" style="text-decoration: none; color: #18A8D8;">Privacy Policy</a>:
            </p>
            <p style="text-align: center; padding-bottom: 30px;">
                <a href="<?= url_to('activate-account') . '?token=' . $hash ?>" style="display: inline-block; background-color: #3498db; color: #fff; padding: 15px 25px; text-decoration: none; border-radius: 5px;">Activate
                    account</a>
            </p>

            <p>Or copy and paste this URL into a new tab of your browser:</p>
            <p>
                <a href="<?= url_to('activate-account') . '?token=' . $hash ?>" style="color: #18A8D8; text-decoration: none;">
                    <?= url_to('activate-account') . '?token=' . $hash ?>
                </a>
            </p>
        </div>
        <hr>
        <div style="color: #333; padding: 10px; font-size: 14px; text-align: left;">
            If you didn't attempt to sign up but received this email, or if the location doesn't match, please
            ignore this email. If you are concerned about your account's safety, please reply to this email to get
            in touch with us.
        </div>
    </div>
</div>
 -->