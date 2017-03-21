<?php
$nameError = '';
$emailError = '';
$msgError = '';
$headers = '';
if (isset($_POST['submitted'])) {
    if (trim($_POST['contactName']) === '') {
        $nameError = __('Please enter your name.', 'one-page');
        $hasError = true;
    } else {
        $name = trim($_POST['contactName']);
    }
    if (trim($_POST['email']) === '') {
        $emailError = __('Please enter your email address.', 'one-page');
        $hasError = true;
    } else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $emailError = __('You entered an invalid email address.', 'one-page');
        $hasError = true;
    } else {
        $email = trim($_POST['email']);
    }
    if (trim($_POST['msg']) === '') {
        $msgError = __('Please enter a message.', 'one-page');
        $hasError = true;
    } else {
        if (function_exists('stripslashes')) {
            $msg = stripslashes(trim($_POST['msg']));
        } else {
            $msg = trim($_POST['msg']);
        }
    }
    if (!isset($hasError)) {
        $emailTo = get_option('tz_email');
        if (!isset($emailTo) || ($emailTo == '')) {
            $emailTo = get_option('admin_email');
        }
        $subject = '[PHP Snippets] From ' . $name;
        $body = __('Name:', 'one-page') . $name . "<br/>" . __('Email:', 'one-page') . $email . "<br/>" . __('Message:', 'one-page') . $msg;
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        $headers .= __('From:', 'one-page') . $name . ' <' . $emailTo . '>' . "\r\n" . __('Reply-To:', 'one-page') . $email;
        wp_mail($emailTo, $subject, $body, $headers);
        $emailSent = true;
    }
}
$contact = Onepage_Data::get_instance()->contact(); //print_r($contact);
if (!empty($contact['onepage_contact_main_heading'])) {
    ?>
<!-- contact Section -->
    <section id="profile" class="section_11">
        <div class="profile_div" <?php echo "style='background-color:" . esc_attr($contact['onepage_contact_bg_color']) . "'"; ?>>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="main_head animated fade_in_up">CAREER</h2>
                        <!--hr class="team_sep animated fade_in_up" <?php //echo "style='background-color:" . esc_attr($contact['onepage_contact_hr_color']) . "'"; ?> -->
                        <p class="main_desc animated fade_in_up" style="margin-bottom:10px;">We invite the ignited minds to work with us in different capacities at different levels ranging from interns to senior consultants and associates.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="profile_wrapper">
                        <div class="col-md-5">
                            <div class="profile_content">
                                <?php
                                if (isset($emailSent) && $emailSent == true) {
                                    ?>
                                    <div class="thanks">
                                        <p><?php _e('Thanks, your email was sent successfully.', 'one-page'); ?></p>
                                    </div>
                                    <?php
                                } else {
                                    if (isset($hasError)) {
                                        ?>
                                        <p class="error"><?php _e('Sorry, an error occured.', 'one-page'); ?> </p>
                                        <?php
                                    }
                                }
                                ?>
                                <form class="profileform" action="#" method="post">
                                    <div class="form-group">
                                        <input class="form-control text animated fade_in_up" type="text" name="contactName" value="" placeholder="<?php echo _e('Name', 'one-page'); ?>" style="animation-delay: .2s;<?php echo 'border-color:' . esc_attr($contact['onepage_contact_input_box_border_color']); ?>" required/>
                                        <?php if ($nameError != '') { ?>
                                            <span class="error"> <?php echo $nameError; ?> </span>
                                        <?php } ?>
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control text animated fade_in_up" type="text" name="dateofBirth" value="" placeholder="<?php echo _e('Date of Birth', 'one-page'); ?>" style="animation-delay: .2s;<?php echo 'border-color:' . esc_attr($contact['onepage_contact_input_box_border_color']); ?>" required/>
                                        <?php if ($nameError != '') { ?>
                                            <span class="error"> <?php echo $nameError; ?> </span>
                                        <?php } ?>
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control text animated fade_in_up" type="text" name="gender" value="" placeholder="<?php echo _e('Gender', 'one-page'); ?>" style="animation-delay: .2s;<?php echo 'border-color:' . esc_attr($contact['onepage_contact_input_box_border_color']); ?>" required/>
                                        <?php if ($nameError != '') { ?>
                                            <span class="error"> <?php echo $nameError; ?> </span>
                                        <?php } ?>
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control text animated fade_in_up" type="email" name="email" value="" placeholder="<?php echo _e('Email', 'one-page'); ?>" style="animation-delay: .3s; <?php echo 'border-color:' . esc_attr($contact['onepage_contact_input_box_border_color']); ?>" required/>
                                        <?php if ($emailError != '') { ?>
                                            <span class="error"> <?php echo $emailError; ?> </span>
                                        <?php } ?>
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control text animated fade_in_up" type="text" name="number" value="" placeholder="<?php echo _e('Contact Number', 'one-page'); ?>" style="animation-delay: .2s;<?php echo 'border-color:' . esc_attr($contact['onepage_contact_input_box_border_color']); ?>" required/>
                                        <?php if ($nameError != '') { ?>
                                            <span class="error"> <?php echo $nameError; ?> </span>
                                        <?php } ?>
                                    </div>


                                    <div class="form-group">
                                        <input class="form-control text animated fade_in_up" type="text" name="qualification" value="" placeholder="<?php echo _e('Academic Qualification', 'one-page'); ?>" style="animation-delay: .2s;<?php echo 'border-color:' . esc_attr($contact['onepage_contact_input_box_border_color']); ?>" required/>
                                        <?php if ($nameError != '') { ?>
                                            <span class="error"> <?php echo $nameError; ?> </span>
                                        <?php } ?>
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control text animated fade_in_up" type="text" name="exprience" value="" placeholder="<?php echo _e('Professional Experience', 'one-page'); ?>" style="animation-delay: .2s;<?php echo 'border-color:' . esc_attr($contact['onepage_contact_input_box_border_color']); ?>" required/>
                                        <?php if ($nameError != '') { ?>
                                            <span class="error"> <?php echo $nameError; ?> </span>
                                        <?php } ?>
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control text animated fade_in_up" type="text" name="job" value="" placeholder="<?php echo _e('Current Job/Position', 'one-page'); ?>" style="animation-delay: .2s;<?php echo 'border-color:' . esc_attr($contact['onepage_contact_input_box_border_color']); ?>" required/>
                                        <?php if ($nameError != '') { ?>
                                            <span class="error"> <?php echo $nameError; ?> </span>
                                        <?php } ?>
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control text animated fade_in_up" type="text" name="org" value="" placeholder="<?php echo _e('Current Organization', 'one-page'); ?>" style="animation-delay: .2s;<?php echo 'border-color:' . esc_attr($contact['onepage_contact_input_box_border_color']); ?>" required/>
                                        <?php if ($nameError != '') { ?>
                                            <span class="error"> <?php echo $nameError; ?> </span>
                                        <?php } ?>
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control text animated fade_in_up" type="text" name="g2g" value="" placeholder="<?php echo _e('Why G2G', 'one-page'); ?>" style="animation-delay: .2s;<?php echo 'border-color:' . esc_attr($contact['onepage_contact_input_box_border_color']); ?>" required/>
                                        <?php if ($nameError != '') { ?>
                                            <span class="error"> <?php echo $nameError; ?> </span>
                                        <?php } ?>
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control text animated fade_in_up" type="text" name="address" value="" placeholder="<?php echo _e('Residential Address', 'one-page'); ?>" style="animation-delay: .2s;<?php echo 'border-color:' . esc_attr($contact['onepage_contact_input_box_border_color']); ?>" required/>
                                        <?php if ($nameError != '') { ?>
                                            <span class="error"> <?php echo $nameError; ?> </span>
                                        <?php } ?>
                                    </div>

                                    <div class="form-group">
                                        <input  required type="file" name="cf-file" size="40" accept=".doc,.docx,.pdf"/>
                                        
                                        <?php if ($msgError != '') { ?>
                                            <span class="error"> <?php echo $msgError; ?> </span>
                                        <?php } ?>
                                    </div>
                                    <div class="clear"></div>
                                    <input  class="btnSubmit animated fade_in_up" type="submit" name="submitted" value="<?php echo esc_attr($contact['onepage_contact_send_button_text']); ?>" style="animation-delay: .2s;"/>
                                </form>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /contact Section -->



    <!-- contact Section -->
    <section id="contact" class="section_9">
        <div class="contact_div" <?php echo "style='background-color:" . esc_attr($contact['onepage_contact_bg_color']) . "'"; ?>>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="main_head animated fade_in_up"><?php echo esc_attr($contact['onepage_contact_main_heading']); ?></h2>
                        <!--hr class="team_sep animated fade_in_up" <?php //echo "style='background-color:" . esc_attr($contact['onepage_contact_hr_color']) . "'"; ?> -->
                        <p class="main_desc animated fade_in_up" style="margin-bottom:10px;"><?php echo esc_attr($contact['onepage_contact_sub_heading']); ?></p>
                        <p class="main_desc animated fade_in_up" style="margin-bottom: 30px;"><?php echo esc_attr($contact['onepage_contact_msg_heading']); ?> Email: infogtog@gmail.com Contact: +91-9205293043 Website: www.guidetoglory.co.in </p>
                    </div>
                </div>
                <div class="row">
                    <div class="contact_wrapper">
                        <div class="col-md-5">
                            <div class="contact_content">
                                <?php
                                if (isset($emailSent) && $emailSent == true) {
                                    ?>
                                    <div class="thanks">
                                        <p><?php _e('Thanks, your email was sent successfully.', 'one-page'); ?></p>
                                    </div>
                                    <?php
                                } else {
                                    if (isset($hasError)) {
                                        ?>
                                        <p class="error"><?php _e('Sorry, an error occured.', 'one-page'); ?> </p>
                                        <?php
                                    }
                                }
                                ?>
                                <form class="contactform" action="#" method="post">
                                    <div class="form-group">
                                        <input class="form-control text animated fade_in_up" type="text" name="contactName" value="" placeholder="<?php echo _e('Name', 'one-page'); ?>" style="animation-delay: .2s;<?php echo 'border-color:' . esc_attr($contact['onepage_contact_input_box_border_color']); ?>" required/>
                                        <?php if ($nameError != '') { ?>
                                            <span class="error"> <?php echo $nameError; ?> </span>
                                        <?php } ?>
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control text animated fade_in_up" type="email" name="email" value="" placeholder="<?php echo _e('Email', 'one-page'); ?>" style="animation-delay: .3s; <?php echo 'border-color:' . esc_attr($contact['onepage_contact_input_box_border_color']); ?>" required/>
                                        <?php if ($emailError != '') { ?>
                                            <span class="error"> <?php echo $emailError; ?> </span>
                                        <?php } ?>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control message animated fade_in_up" type="textarea" name="msg" placeholder="<?php echo _e('Your Message', 'one-page'); ?>" style="animation-delay: .4s;<?php echo 'border-color:' . esc_attr($contact['onepage_contact_input_box_border_color']); ?>" required></textarea>
                                        <?php if ($msgError != '') { ?>
                                            <span class="error"> <?php echo $msgError; ?> </span>
                                        <?php } ?>
                                    </div>
                                    <div class="clear"></div>
                                    <input  class="btnSubmit animated fade_in_up" type="submit" name="submitted" value="<?php echo esc_attr($contact['onepage_contact_send_button_text']); ?>" style="animation-delay: .2s;"/>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div style="width: 100%; overflow:hidden; animation-delay: .6s;" class="contact_map animated fade_right"> <?php echo $contact['onepage_contact_map_iframe']; ?><br /></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /contact Section -->
<?php } ?>
