<?php

class DiplomaController
{

    public function diploma()
    {
        include __DIR__ . "/../View/diploma.php";
    }

    public function downloadDiploma()
    {
        session_start();

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['student_id'])) {
            $student_id = intval($_POST['student_id']);

            require_once __DIR__ . "/../Models/StudentModel.php";
            $model = new StudentModel();
            $student = $model->getStudentById($student_id);

            if ($student) {
                $name = $student['name'];
                $family_name = $student['family_name'];
                $fullName = $name . ' ' . $family_name . '.pdf';
                $filePath = __DIR__ . '/../../Public/diploma/' . $fullName;

                if (file_exists($filePath)) {
                    header('Content-Type: application/pdf');
                    header('Content-Disposition: attachment; filename="' . $fullName);
                    readfile($filePath);
                    exit;
                } else {
                    $fullName = $family_name . ' ' . $name . '.pdf';
                    $filePath = __DIR__ . '/../../Public/diploma/' . $fullName;

                    if (file_exists($filePath)) {
                        header('Content-Type: application/pdf');
                        header('Content-Disposition: attachment; filename="' . $fullName);
                        readfile($filePath);
                        exit;
                    } else {
                        $_SESSION['error_message'] = "Diploma file not found for: $family_name $name";
                        header("Location: index.php?page=diploma");
                        exit;
                    }
                }
            } else {
                $_SESSION['error_message'] = "Student not found.";
                header("Location: index.php?page=diploma");
                exit;
            }
        } else {
            $_SESSION['error_message'] = "Invalid request.";
            header("Location: index.php?page=diploma");
            exit;
        }
    }
}
