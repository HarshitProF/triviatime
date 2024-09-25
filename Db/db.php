<?php
include("dbconfig.php");
$conn=new mysqli(Host, User, Password,Db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<?php
function add_question ($question,$type,$level,$exam,$lang) {
    global $conn ;
    $query=$conn->prepare("insert into questions (question,option1,option2,option3,option4,right_answer,type,level,exam,lang) VALUES (?,?,?,?,?,?,?,?,?,?)");
    $query->bind_param('ssssssssss',$question['question'],$question['options']['A'],$question['options']['B'],$question['options']['C'],$question['options']['D'],$question['options'][$question['answer']],$type,$level,$exam,$lang);
    if (!$conn->error){
        $result=$query->execute();
        if ($result){
            $insert_id=$conn->insert_id;
            $query->close();
            return array("msg"=>"Successfully added","insert_id"=>$insert_id);
        }else {
            return array("msg"=>"Something went wrong");
        }
    } elseif ($conn->errno==1062) {
        $query->close();
        return array("msg"=>"Duplicate Record");
    } else {
        $query->close();
        return array("msg"=>"SomeThing is Wrong");
    }
}
function get_questions($type,$limit,$level,$exam,$lang) {
    global $conn ;
    $questions=array();
    $query=$conn->prepare("select * from questions where (type=? and level=? and exam=? and lang=?) ORDER BY RAND()  LIMIT ?  ");
    $query->bind_param('ssssi',$type,$level,$exam,$lang,$limit);
    if (($query->execute()) && !$conn->error){
        $result =$query->get_result();
        if ($result->num_rows > 0){
            while ($row=$result->fetch_assoc()) {
                $answers=array($row['option1'],$row['option2'],$row['option3'],$row['option4']);
                $question=array("question"=>$row['question'],"answers"=>$answers,"correct"=>$row['right_answer']);
                array_push($questions,$question);
                //array_push($questions,$row);
            }
            $query->close();
            return $questions;
        } else {
            $query->close();
            return NULL ;
        }
    }else {
        $query->close();
        return NULL;
    }
}
?>