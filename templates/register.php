<?php

    /* Template Name: Register */

    get_header();

        echo '<div id="main">';

            echo '<div id="loginPanelOutter">';
                
                echo '<div id="loginPanelLogo">';

                    echo '<img width="200px" src="http://v3.cbddev.com/fds/wp-content/uploads/2018/11/logo_mid.png" />';

                echo '</div>';

                echo '<div id="loginPanel">';

                    $link = admin_url('admin-ajax.php?action=reg_new_candidate');

                    echo '<form action="' . $link . '">';
                        
                        echo '<div class="regFormInput">';

                            echo '<p>';

                                echo '<label>Email Address</label>';

                                echo '<input type="email" name="emailaddress" />';

                            echo '</p>';

                        echo '</div>';

                        echo '<div class="regFormInput">';

                            echo '<p>';

                                echo '<label>Password</label>';

                                echo '<input type="password" name="password" />';

                            echo '</p>';

                        echo '</div>';

                        echo '<div class="regFormInput">';

                            echo '<p>';

                                echo '<label>Confirm Password</label>';

                                echo '<input type="password" name="confirmpassword" />';

                            echo '</p>';

                        echo '</div>';

                        echo '<div class="regFormSubmit">';

                            echo '<button id="cadRegButton">Submit</button>';


                        echo '</div>';

                        echo '<div id="regFormTerms">';

                            echo '<p>By creating an account, you agree to the Terms of Service, Cookie Policy and Privacy Policy. You consent to receiving marketing messages and may opt out from receiving such messages by following the unsubscribe link in our messages, or as detailed in our terms.</p>';

                        echo '</div>';

                    echo '</form>';

                echo '</div>';
                
                echo '<div id="loginPanelAdditionalOptions">';
                    
                    echo '<p><a href="http://v3.cbddev.com/fds/login/">Have an account?</a></p>';

                    echo '<p><a href="">Need Help</a></p>';

                echo '</div>';
                
            echo '</div>';

        echo '</div>';

    get_footer();

?>
