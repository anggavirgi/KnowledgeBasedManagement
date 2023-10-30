
<p>Someone requested a password reset at this email address for <?= site_url() ?>.</p>

<p>To reset the password use this code or URL and follow the instructions.</p>

<p>Your Code: <?= $hash ?></p>

<p>Visit the <a href="<?= url_to('reset-password') . '?token=' . $hash ?>">Reset Form</a>.</p>

<br>

<p>If you did not request a password reset, you can safely ignore this email.</p>

<!-- <div style="text-align: center;">
    <figure>
        <img src="<?php echo base_url(); ?>src/images/logo-vsee.png" alt="">
    </figure>
    <div style="background-color: #fff; padding: 20px; border:gray 1px solid; border-radius: 5px; margin: 20px auto; max-width: 500px;">
        <div style="color: #000; padding: 20px; font-size: 24px;">
            Reset Password
        </div>
        <div style="padding: 20px; text-align: left;">
            <p style="padding-bottom: 30px; font-size: 15px;">
                We're sending you this email because you requsted a password reset. Click on this link to create a
                new password
            </p>
            <p style="text-align: center; padding-bottom: 30px;">
                <a href="<?= url_to('reset-password') . '?token=' . $hash ?>" style="display: inline-block; background-color: #3498db; color: #fff; padding: 15px 25px; text-decoration: none; border-radius: 5px;">Reset
                    Password</a>
            </p>

            <p style="text-align: center;">Or copy and paste this code:</p>
            <p style="text-align: center; background-color: lightgray; padding:15px 0; border-radius: 4px; font-weight: bold; padding-bottom: 30px;">
                <?= $hash ?>
            </p>
            <p>
                If you didn't request a password reset, you can ignore this email, Your password will not be changed
            </p>
        </div>
        <hr>
        <div style="color: #333; padding: 10px; font-size: 14px; text-align: left;">
            If you didn't attempt to sign up but received this email, or if the location doesn't match, please
            ignore this email. If you are concerned about your account's safety, please reply to this email to get
            in touch with us.
        </div>
    </div>
</div> -->