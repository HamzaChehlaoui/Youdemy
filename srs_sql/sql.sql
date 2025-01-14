
-- Table des utilisateurs
CREATE TABLE users (
    id_user INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'teacher', 'student') NOT NULL,
    status ENUM('pending', 'active', 'suspended') DEFAULT 'pending'
    
);

-- Table des catégories de cours
CREATE TABLE categories (
    id_categories INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL UNIQUE,
    description TEXT

);

-- Table des tags
CREATE TABLE tags (
    id_tags INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL UNIQUE

);

-- Table des cours
CREATE TABLE courses (
    id_courses INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(100) NOT NULL,
    description TEXT,
    content_type ENUM('video', 'document') NOT NULL,
    content_url VARCHAR(255) NOT NULL,
    teacher_id INT NOT NULL,
    category_id INT NOT NULL,
    status ENUM('draft', 'published', 'archived') DEFAULT 'draft',
    FOREIGN KEY (teacher_id) REFERENCES users(id_user) ON DELETE CASCADE,
    FOREIGN KEY (category_id) REFERENCES categories(id_categories) ON DELETE RESTRICT
);

-- Table de relation entre cours et tags (Many-to-Many)
CREATE TABLE course_tags (
    course_id INT NOT NULL,
    tag_id INT NOT NULL,
    PRIMARY KEY (course_id, tag_id),
    FOREIGN KEY (course_id) REFERENCES courses(id_courses) ON DELETE CASCADE,
    FOREIGN KEY (tag_id) REFERENCES tags(id_tags) ON DELETE CASCADE
);

-- Table des inscriptions aux cours
CREATE TABLE enrollments (
    id INT PRIMARY KEY AUTO_INCREMENT,
    student_id INT NOT NULL,
    course_id INT NOT NULL,
    enrollment_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status ENUM('active', 'completed', 'dropped') DEFAULT 'active',
    FOREIGN KEY (student_id) REFERENCES users(id_user) ON DELETE CASCADE,
    FOREIGN KEY (course_id) REFERENCES courses(id_courses) ON DELETE CASCADE,
    UNIQUE KEY unique_enrollment (student_id, course_id)
);