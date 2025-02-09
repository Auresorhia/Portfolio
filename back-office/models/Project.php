<?php
class Project {
    private $id;
    private $title;
    private $description;
    private $technologies;
    private $image_url;
    private $is_featured;
    private $created_at;
    private $pdo;

    public function __construct() {
        require_once dirname(__FILE__) . '/../config/db.php';
        global $pdo;
        $this->pdo = $pdo;
    }

    // Getters
    public function getId() { return $this->id; }
    public function getTitle() { return $this->title; }
    public function getDescription() { return $this->description; }
    public function getTechnologies() { return $this->technologies; }
    public function getImageUrl() { return $this->image_url; }
    public function getIsFeatured() { return $this->is_featured; }
    public function getCreatedAt() { return $this->created_at; }

    // Setters
    public function setTitle($title) { $this->title = $title; }
    public function setDescription($description) { $this->description = $description; }
    public function setTechnologies($technologies) { $this->technologies = $technologies; }
    public function setImageUrl($image_url) { $this->image_url = $image_url; }
    public function setIsFeatured($is_featured) { $this->is_featured = $is_featured; }

    // Méthodes CRUD
    public function create($data) {
        $stmt = $this->pdo->prepare('INSERT INTO projects (title, description, technologies, image_url, is_featured, created_at) VALUES (?, ?, ?, ?, ?, NOW())');
        return $stmt->execute([
            $data['title'],
            $data['description'],
            $data['technologies'],
            $data['image_url'],
            isset($data['is_featured']) ? 1 : 0
        ]);
    }

    public function update($id, $data) {
        $fields = [];
        $params = [];

        if (isset($data['title'])) {
            $fields[] = 'title = ?';
            $params[] = $data['title'];
        }
        if (isset($data['description'])) {
            $fields[] = 'description = ?';
            $params[] = $data['description'];
        }
        if (isset($data['technologies'])) {
            $fields[] = 'technologies = ?';
            $params[] = $data['technologies'];
        }
        if (isset($data['image_url'])) {
            $fields[] = 'image_url = ?';
            $params[] = $data['image_url'];
        }
        if (isset($data['is_featured'])) {
            $fields[] = 'is_featured = ?';
            $params[] = $data['is_featured'] ? 1 : 0;
        }

        $params[] = $id;
        $sql = 'UPDATE projects SET ' . implode(', ', $fields) . ' WHERE id = ?';
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute($params);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare('DELETE FROM projects WHERE id = ?');
        return $stmt->execute([$id]);
    }

    public function findAll() {
        $stmt = $this->pdo->query('SELECT * FROM projects ORDER BY created_at DESC');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findById($id) {
        $stmt = $this->pdo->prepare('SELECT * FROM projects WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getAllProjects() {
        $stmt = $this->pdo->query("SELECT * FROM projects ORDER BY created_at DESC");
        return $stmt->fetchAll();
    }

    public function uploadImage($file) {
        $target_dir = "../../public/uploads/projects/";
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        
        $file_extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        $new_filename = uniqid() . '.' . $file_extension;
        $target_file = $target_dir . $new_filename;
        
        $allowed_types = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
        if (!in_array($file_extension, $allowed_types)) {
            throw new Exception('Format de fichier non autorisé');
        }
        
        if (move_uploaded_file($file['tmp_name'], $target_file)) {
            return 'uploads/projects/' . $new_filename;
        }
        
        throw new Exception('Erreur lors du téléchargement du fichier');
    }
}
