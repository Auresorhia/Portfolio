<?php include __DIR__ . '/../../inc/head.php'; ?>
    <title><?php echo isset($project) ? 'Modifier' : 'Ajouter'; ?> un Projet - Back Office</title>
</head>
<body>
    <?php include __DIR__ . '/../../inc/nav.php'; ?>
    
    <main class="container">
        <h1><?php echo isset($project) ? 'Modifier' : 'Ajouter'; ?> un Projet</h1>

        <?php if (isset($_SESSION['message'])): ?>
            <div class="alert alert-<?php echo $_SESSION['message_type']; ?>">
                <?php 
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                unset($_SESSION['message_type']);
                ?>
            </div>
        <?php endif; ?>
        
        <form action="/php/portfolio-crud/back-office/views/projects.php?action=<?php echo isset($project) ? 'edit&id=' . $project['id'] : 'create'; ?>" 
              method="POST" 
              enctype="multipart/form-data" 
              class="project-form">
            
            <div class="form-group">
                <label for="title">Titre du projet</label>
                <input type="text" 
                       id="title" 
                       name="title" 
                       value="<?php echo isset($project) ? htmlspecialchars($project['title']) : ''; ?>" 
                       required>
            </div>
            
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" 
                          name="description" 
                          required><?php echo isset($project) ? htmlspecialchars($project['description']) : ''; ?></textarea>
            </div>
            
            <div class="form-group">
                <label for="technologies">Technologies utilisées</label>
                <input type="text" 
                       id="technologies" 
                       name="technologies" 
                       value="<?php echo isset($project) ? htmlspecialchars($project['technologies']) : ''; ?>" 
                       placeholder="HTML, CSS, JavaScript, etc.">
            </div>
            
            <div class="form-group">
                <label for="image">Image du projet</label>
                <?php if (isset($project) && $project['image_url']): ?>
                    <img src="<?php echo htmlspecialchars($project['image_url']); ?>" 
                         alt="Image actuelle" 
                         style="max-width: 200px;">
                <?php endif; ?>
                <input type="file" 
                       id="image" 
                       name="image" 
                       <?php echo !isset($project) ? 'required' : ''; ?>>
            </div>
            
            <div class="form-group">
                <label>
                    <input type="checkbox" 
                           name="is_featured" 
                           value="1" 
                           <?php echo (isset($project) && $project['is_featured']) ? 'checked' : ''; ?>>
                    Projet mis en avant
                </label>
            </div>
            
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">
                    <?php echo isset($project) ? 'Modifier' : 'Ajouter'; ?> le projet
                </button>
                <a href="/php/portfolio-crud/back-office/views/projects.php" class="btn btn-secondary">Annuler</a>
            </div>
        </form>
    </main>
</body>
</html>
