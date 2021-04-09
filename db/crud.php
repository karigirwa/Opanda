<?php
class crud
{
    //private database object
    private $db;
   // constructor to initialize private variable to the db
    function __construct($conn)
    {
        $this->db = $conn;
    }
     public function getCourseInfos($subject , $level , $units)
    {
        try {
            $unit = $units . "%"; 

            $sql = "SELECT * FROM `classes` WHERE subject='$subject' AND level='$level' AND units LIKE '$unit'";
        
            $stmt = $this->db->prepare($sql);
           
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

public function getExerciseQuest($subject , $level , $units)
    {
        try {
            $unit = $units . "%"; 

            $sql = "SELECT * FROM `panda_questions_auto` WHERE panda_questions_auto_subject='$subject' AND panda_questions_auto_academic_level='$level' AND panda_questions_auto_academic_units LIKE '$unit'";
        
            $stmt = $this->db->prepare($sql);
           
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

     public function insertComment( $exercise_id, $courses_id, $books_id, $document_id, $teacher_id, $comment)
    {
        try {
            //define sql to be executed
            $sql = "INSERT INTO panda_comments (exercise_id,courses_id,books_id,document_id,teacher_id,comment) VALUES (:comment_id,:exercise_id,:courses_id,:book_id,:document_id,:teacher_id,:comment)";

            //prepare sql statetement for executed
            $stmt = $this->db->prepare($sql);

            //bind all placeholder to actual values
            $stmt->bindparam(':exercise_id', $exercise_id);
            $stmt->bindparam(':courses_id', $courses_id);
            $stmt->bindparam(':books_id', $books_id);
            $stmt->bindparam(':document_id', $document_id);
            $stmt->bindparam(':techer_id', $teacher_id);
            $stmt->bindparam(':comment', $comment);

            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

}
?>