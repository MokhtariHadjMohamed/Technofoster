<?php
require_once __DIR__ . '/../../Config/Database.php';

class StudentModel {
    public function getAllStudent() {
        $db = Database::connect();
        $stmt = $db->query("SELECT * FROM students");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getStudentById($student_id) {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM students WHERE student_id = ?");
        $stmt->execute([$student_id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}
