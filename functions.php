<?php
  
    // Add new roles
    // Hide admin bar from all but admin 
    show_admin_bar( false );
    
    // Registar Form for candidate
    function reg_new_users()
    {

        $returnArray = array();
        $error = false;

        $a = 1;

        $email = $_POST['emailaddress'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];

        if( email_exists( $email ) )
        {
            $error = true;
            $returnArray['error']['email']['code'] = 'email_address_used'; 
            $returnArray['error']['email']['return_message'] = 'Email address already in use.'; 
            $returnArray['error']['email']['hightlight_elm'] = 'emailaddress';
            $a++;
        }

        if( $password != $confirmpassword ) 
        {
            $error = true;
            $returnArray['error']['password']['code'] = 'passwords_do_not_match'; 
            $returnArray['error']['password']['return_message'] = 'Passwords do not match.'; 
            $returnArray['error']['password']['hightlight_elm'] = 'confirmpassword';
        }

        if( $error == false )
        {

            $password = md5( $password );

            wp_insert_user(
                array(
                    'user_login' => $email,
                    'user_email' => $email,
                    'user_url' => '',
                    'user_pass' => $password, 
                    'role' => 'candidate',
                )
            );

            $user_id = email_exists( $email );

            $returnArray['success']['code'] = 'user_created';
            $returnArray['success']['redirect'] = 'http://v3.cbddev.com/fds/my-account/';

            wp_set_auth_cookie(
                $user_id,
                true
            );

        }

        echo json_encode( $returnArray );

        die();
        exit();

    }
    add_action( 'wp_ajax_nopriv_reg_new_users', 'reg_new_users' );

  
?>
