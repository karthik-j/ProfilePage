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
    return view('test');
});

Route::get('/test', function () {
    return view('test');
});

Route::post('/projects', function () {

    $string = '[{"project_id": "1", "img" : "./image/os3.jpg","title":"OS/161: Design and Implementation of working System Software using Kernel Programming","period":"Jan 2015 - May 2015","url":"https://github.com/karthik-j/Operating-System-OS161-CS521-Spring-2015.git","description":"- Implementation of synchronization primitives such as locks, condition variables and reader-writer locks for OS/161 standalone kernel.
- Solving synchronization problems including \"whale-mating\"​ and \"traffic-intersection\" problems.
- Design and Implementation of system call interface including file and process system calls (open, close, read, write, chdir, dup2, lseek, getcwd, fork, getpid, waitpid, exit, execv), thus allowing kernel to run user programs.
- Design and implementation of virtual memory subsystem (paging, TLB), sbrk system call to handle malloc()","skills":"C, Kernel Programming"},
                {"project_id": "2", "img" : "./image/dynamo3.jpg","period":"April 2015","url":"https://github.com/karthik-j/Simple-Dynamo.git","title":"Amazon\'s Dynamo styled Key-Value Storage","skills":" Java, Android","description":"Implemented Dynamo-style key-value storage with Partitioning, Replication and Failure Handling.

The main goal was to provide both availability and linearizability at the same time. In other words, the implementation always perform read and write operations successfully even under failures. At the same time, a read operation always returns the most recent value"},
                {"project_id": "3", "img" : "./image/neural1.jpg","period":"Feb 2015","url":"https://github.com/karthik-j/Handwritten-Digits-Classification-Using-Neural-Network.git","title":"Handwritten Digits Classification using Neural Network","skills":" Python","description":"Implemented Multilayer Perceptron Neural Network (using Feed Forward and Back Propogation) and evaluated its performance in classifying handwritten digits"},
                {"project_id": "4", "img" : "./image/newsroom2.jpg","period":"Nov 2014 - Dec 2014","url":"https://github.com/karthik-j/NewsRoom.git","title":"NewsRoom","skills":"Java, Solr, PHP, Javascript","description":"Building a two-tiered search system – one that serves Wikipedia articles and the other that provides related news stories. The idea is to be able to serve contextually related news stories and the relevant posts from the social media platforms for the given Wikipedia article(s)."},
                {"project_id": "5", "img" : "./image/chord1.jpg","period":"March 2015 - April 2015","url":"https://github.com/karthik-j/Distributed-Hash-Table.git","title":"Distributed HashTable using Chord Protocol","skills":"Java, Android","description":"Implemented Distributed Hash Table using Chord protocol with node partitioning, node join and ring based routing of messages across android devices. The DHT was capable of serving insert, query and delete requests in a distributed fashion according to the Chord protocol."},
                {"project_id": "6", "img" : "./image/svm.jpg","period":"April 2015","url":"https://github.com/karthik-j/Logistic-Regression-and-SVM.git","title":"Logistic Regression and SVM","skills":" Python","description":"Implemented Logistic Regression and Support Vector Machine to classify handwritten digit images from the MNIST dataset and compare the performance of these methods"},
                {"project_id": "7", "img" : "./image/fifo1.jpg","period":"Feb 2015 - March 2015","url":"https://github.com/karthik-j/Group-Messenger.git","title":"Group Messenger with Total and FIFO Ordering Guarantees","skills":" Java, Android","description":"- Developed a group messenger mobile application in Android with persistent key-value storage.
- Implemented Total and FIFO message ordering guarantees and failure handling of clients."},
                {"project_id": "8", "img" : "./image/classification.jpg","period":"March 2015","url":"https://github.com/karthik-j/Classification-and-Regression.git","title":"Classification and Regression","skills":"Python","description":"Using diabetes medical data set, implemented Linear Discriminant Analysis (LDA), Quadratic Discriminant Analysis (QDA), Ridge Regression and Non-Linear Regression, intrepreted the results and analyzed them."},
                {"project_id": "9", "img" : "./image/ir3.jpg","period":"August 2014 - October 2014","url":"https://github.com/karthik-j/NewsCrusader.git","title":"News Indexer","skills":"Java","description":"Developed a search engine which parses news articles with minimal markup, index a subset of corpus, create indexes on articles, metadata and provide an index introspection mechanism to support queries. The application supports wildcard querying and spell check suggestions."},
                {"project_id": "10","img" : "./image/parser1.png","period":"October 2014","url":"https://github.com/karthik-j/Top-Down-Parser.git","title":"Object Oriented Top-Down Parser","skills":"Java","description":"An Object Oriented Top-Down Parser that translates any TinyPL program, for a given set of grammars, into an equivalent sequence of byte codes for a Java Virtual Machine."},
                {"project_id": "11","img" : "./image/secure2.jpg","period":"Dec 2010 - April 2011","url":"","title":"Secure Client Group Interaction System","skills":"JXTA, Java FX, JSP, Servlets and Ajax","description":"Developed an application to implement a proposed novel peer group joining protocol. We defined protocols to test such resource availability customized to the level of assurance required by the peers. Our results show the robustness of our approach in detecting malicious peers, detected both during the negotiation and during the peer group lifetime."},
                {"project_id": "12","img" : "./image/optimx1.jpg","period":"April 2009 - Sept 2009","url":"","title":"OptimX","skills":"VB 6, Windows registry","description":"Developed an application with a simple user interface to enable any individual with minimal computer knowledge to optimize his/her computer at the Windows Registry level.This application provides the user an idea about the Windows Registry, its powerful features & also warns about the security threats, which he/she may be vulnerable to."}]';
    $result = json_decode($string);


    $project_id = strip_tags(trim(Input::get("id")));


    $filter = array();
    for ($i = 0; $i < count($result); $i++){
        if($result[$i]->project_id == $project_id){
            $filter = $result[$i];
            break;
        }
    }

    if($filter->url != ""){
        $output = "<div class='featured_image col-md-6 col-lg-4'>			                <img  src=$filter->img class='' alt=$filter->title title=''>            		</div>		<div class='content col-md-6 col-lg-8'>			<h3 class='single-title'>$filter->title</h3>			<div class='portfolio-content'>	<p><i class=\"fa fa-lg fa-history\"></i> $filter->period</p> <br> <p><i class=\"fa fa-lg fa-github\"></i><a href=\"$filter->url\" target=\"_blank\">$filter->url</a> </p>   <br> <p><b>Skills Used: </b>$filter->skills</p> <br>   <p>$filter->description</p>			</div>					</div><div class='close-view'>				<a href='#'><i class='fa fa-times'></i></a>			</div>";
    }else{
        $output = "<div class='featured_image col-md-6 col-lg-4'>			                <img  src=$filter->img class='' alt=$filter->title title=''>            		</div>		<div class='content col-md-6 col-lg-8'>			<h3 class='single-title'>$filter->title</h3>			<div class='portfolio-content'>	<p><i class=\"fa fa-lg fa-history\"></i> $filter->period</p> <br><p><b>Skills Used: </b>$filter->skills</p> <br>   <p>$filter->description</p>			</div>					</div><div class='close-view'>				<a href='#'><i class='fa fa-times'></i></a>			</div>";
    }


    echo $output;
//    echo $filter->content;
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

            echo "Messenge sent.";
        });

});
