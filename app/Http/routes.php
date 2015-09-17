<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::post('/mailer', function () {

        $name = strip_tags(trim(Input::get("name")));
        $name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim(Input::get("email")), FILTER_SANITIZE_EMAIL);
        $message = trim(Input::get("message"));
        $phone = trim(Input::get("phone"));


        if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }


        $recipient = "karthikjanarthanan@gmail.com";


        $subject = "New contact from $name";


        $email_content = "Name: $name\n";
        $email_content .= "Email: $email\n\n";
        $email_content .= "Phone: $phone\n\n";
        $email_content .= "Message:\n$message\n";


//        $email_headers = "From: $name <$email>";

        // Send the email.
//        if (mail($recipient, $subject, $email_content, $email_headers)) {
//            // 200 (okay) response code.
//            http_response_code(200);
//            echo "Thank You! Your message has been sent.";
//        } else {
//            // 500 (internal server error) response code.
//
//            http_response_code(500);
//            echo "Oops! Something went wrong and we couldn't send your message.";
//        }

        Mail::raw($email_content, function($message1) use($email , $name , $recipient)
        {
            $message1->from($email , $name);

            $message1->to( $recipient)->subject('ProfilePage - Contact!');
        });

});
