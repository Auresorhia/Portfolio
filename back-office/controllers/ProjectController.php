<?php
require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../models/Project.php';

class ProjectController {
    private $projectModel;

    public function __construct() {
        // Vérifier si l'utilisateur est connecté
        if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
            header('Location: /php/portfolio-crud/back-office/index.php');
            exit();
        }
        $this->projectModel = new Project();
    }

    public function index() {
        return $this->projectModel->findAll();
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            try {
                $data = $_POST;
                if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) {
                    $data['image_url'] = $this->projectModel->uploadImage($_FILES['image']);
                }
                
                if ($this->projectModel->create($data)) {
                    $_SESSION['message'] = 'Projet créé avec succès';
                    $_SESSION['message_type'] = 'success';
                    header('Location: /php/portfolio-crud/back-office/views/projects.php');
                    exit();
                }
            } catch (Exception $e) {
                $_SESSION['message'] = 'Erreur lors de la création du projet : ' . $e->getMessage();
                $_SESSION['message_type'] = 'error';
                header('Location: /php/portfolio-crud/back-office/views/projects.php?action=create');
                exit();
            }
        }
        require_once __DIR__ . '/../views/projects/form.php';
    }

    public function edit($id) {
        $project = $this->projectModel->findById($id);
        if (!$project) {
            $_SESSION['message'] = 'Projet non trouvé';
            $_SESSION['message_type'] = 'error';
            header('Location: /php/portfolio-crud/back-office/views/projects.php');
            exit();
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            try {
                $data = $_POST;
                if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) {
                    $data['image_url'] = $this->projectModel->uploadImage($_FILES['image']);
                }
                
                if ($this->projectModel->update($id, $data)) {
                    $_SESSION['message'] = 'Projet mis à jour avec succès';
                    $_SESSION['message_type'] = 'success';
                    header('Location: /php/portfolio-crud/back-office/views/projects.php');
                    exit();
                }
            } catch (Exception $e) {
                $_SESSION['message'] = 'Erreur lors de la mise à jour du projet : ' . $e->getMessage();
                $_SESSION['message_type'] = 'error';
                header('Location: /php/portfolio-crud/back-office/views/projects.php?action=edit&id=' . $id);
                exit();
            }
        }
        require_once __DIR__ . '/../views/projects/form.php';
    }

    public function delete($id) {
        try {
            if ($this->projectModel->delete($id)) {
                $response = ['success' => true, 'message' => 'Projet supprimé avec succès'];
            } else {
                $response = ['success' => false, 'message' => 'Erreur lors de la suppression'];
            }
        } catch (Exception $e) {
            $response = ['success' => false, 'message' => $e->getMessage()];
        }

        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            header('Content-Type: application/json');
            echo json_encode($response);
        } else {
            $_SESSION['message'] = $response['message'];
            $_SESSION['message_type'] = $response['success'] ? 'success' : 'error';
            header('Location: /php/portfolio-crud/back-office/views/projects.php');
        }
    }
}
