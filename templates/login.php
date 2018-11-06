<?php

    /* Template Name: Login */

    get_header();

        echo '<div id="main">';

            echo '<div id="loginPanelOutter">';
                
                echo '<div id="loginPanelLogo">';

                    echo '<img width="200px" src="http://v3.cbddev.com/fds/wp-content/uploads/2018/11/logo_mid.png" />';

                echo '</div>';

                echo '<div id="loginPanel">';
                    
                    wp_login_form( 
                        array(
                            'echo' => true,
                            'label_username' => 'Email Address',
                            'remember' => true,
                            'redirect' => 'http://v3.cbddev.com/fds/about-us/'
                        ) 
                    );

                echo '</div>';
                
                echo '<div id="loginPanelAdditionalOptions">';
                    
                    echo '<p><a href="http://v3.cbddev.com/fds/register/">Need an account?</a></p>';

                    echo '<p><a href="">Forgot Password</p></a>';

                    echo '<p><a href="">Need Help</a></p>';

                echo '</div>';
                
            echo '</div>';

        echo '</div>';

    get_footer();  

?> 
