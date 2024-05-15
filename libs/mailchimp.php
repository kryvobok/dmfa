<?php 

/*
    Integrate mailchimp subscriptions
*/
  use \DrewM\MailChimp\MailChimp;


//Booking Form Functionality
add_action('wp_ajax_mailchimp_signup', 'mailchimp_signup_func');
add_action('wp_ajax_nopriv_mailchimp_signup', 'mailchimp_signup_func'); // Allow front-end submission

function mailchimp_signup_func(){ //0

  //include '../../../wp-load.php';

  $nonce = $_POST['custom_nonce'];
  $email_address = $_POST['email_address'];
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];  
  $investment_ID = $_POST['investment_ID'];  
 
  $current_html = '<div class="rs-popup-w"><div class="rs-popup-i">';

 

  $MailChimp = new MailChimp('43a51e6c69552056c1d12727699cfde0-us13');
  //$result = $MailChimp->get('lists');

  //print_r($result); 

$list_id = 'b9d2162120';

$result = $MailChimp->post("lists/$list_id/members", [
                'merge_fields' => ['FNAME'=> $first_name, 'LNAME'=> $last_name ],
                'email_address' => $email_address,
                'status'        => 'subscribed',
            ]);

//print_r($result);

//if member already exists result is this
/*
Array
(
    [type] => http://developer.mailchimp.com/documentation/mailchimp/guides/error-glossary/
    [title] => Member Exists
    [status] => 400
    [detail] => pbobula@purpleplanet.com is already a list member. Use PUT to insert or update list members
.
    [instance] => 
)
*/
  if( $result['title'] == 'Member Exists' ) {
    $message = 'Member Exists'; 
    $success = 'true';  
    $download_link = esc_attr( get_post_meta( $investment_ID, 'pdf_download_link',true)); 
  } else if ( $result['status'] == 'subscribed' ) {
    $message = 'Member Added'; 
    $success = 'true';  
    $download_link = esc_attr( get_post_meta( $investment_ID, 'pdf_download_link',true));  
  } else {
    $message = 'Invalid Member';
    $success = 'false';    
  }
  

  // check to see if the submitted nonce matches with the
  // generated nonce we created earlier
  if ( ! wp_verify_nonce( $nonce, 'custom-nonce' ) ) :
    die ( 'Error!');
  endif;

  

  $return_info = array( 'message' => $message, 'success' => $success, 'download_link' => $download_link );
  //wp_send_json($return_info);
  echo json_encode($return_info);
                    
  exit();

// EOF booking payment

} //0


?>