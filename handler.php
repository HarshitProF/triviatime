<?php
include("Db/db.php")
?>
<?php
if (isset($_REQUEST['action'])) {
    if ($_REQUEST['action']=="addQuestions") {
        if (isset($_FILES['file']) && isset($_REQUEST['subject']) && isset($_REQUEST['level']) && isset($_REQUEST['exam']) && isset($_REQUEST['lang'])) {
            $json=file_get_contents($_FILES['file']['tmp_name']);
            if ($json === false) {
                die('Error reading the JSON file');
            }
            
            // Decode the JSON file
            $json_data = json_decode($json, true); 
            
            // Check if the JSON was decoded successfully
            if ($json_data === null) {
                die('Error decoding the JSON file');
            }
           foreach($json_data as $question) {
            //print_r($question);
            add_question(question:$question,type:$_REQUEST['subject'],level:$_REQUEST['level'],exam:$_REQUEST['exam'],lang:$_REQUEST['lang']);
           }
           echo json_encode(array("msg"=>"Successfully Added"));
        }
    
    }elseif ($_REQUEST['action']=="getQuestions") {
        if (isset($_REQUEST['subject']) && isset($_REQUEST['questions']) && isset($_REQUEST['level']) && isset($_REQUEST['exam'])) {
            $questions=get_questions(type:$_REQUEST['subject'],limit:$_REQUEST['questions'],level:$_REQUEST['level'],exam:$_REQUEST['exam'],lang:$_REQUEST['lang']);
            echo json_encode($questions);
        }
    }
}else {
    print_r($_REQUEST);
    //echo json_encode(array("msg"=>"There is some request"));
}
?>