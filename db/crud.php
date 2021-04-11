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
    public function getCourseInfos($subject, $level, $units)
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

    public function getExerciseQuest($subject, $level, $units)
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

    public function insertComment($comment, $courses_id, $user_id)
    {
        try {
            //define sql to be executed
            $sql = "INSERT INTO panda_comments (comment,courses_id,user_id) VALUES (:comment,:courses_id,:user_id)";

            //prepare sql statetement for executed
            $stmt = $this->db->prepare($sql);

            //bind all placeholder to actual values
            $stmt->bindparam(':courses_id', $courses_id);
            $stmt->bindparam(':user_id', $user_id);
            $stmt->bindparam(':comment', $comment);

            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function getComments($courses_id)
    {
        try {
            $sql = "SELECT comment FROM `panda_comments` WHERE courses_id='$courses_id'";

            $stmt = $this->db->prepare($sql);

            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function getCourses()
    {
        try {
            $sql = "SELECT subject, level, units FROM `classes`";
            $result = $this->db->query($sql);
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    // public function getAllComments()
    // {
    //     try {
    //         $sql = "SELECT * FROM `panda_comments`";
    //         $result = $this->db->query($sql);
    //         return $result;
    //     } catch (PDOException $e) {
    //         echo $e->getMessage();
    //         return false;
    //     }
    // }
}
