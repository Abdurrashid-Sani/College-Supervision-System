CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    category ENUM('Administrator', 'Parent', 'NGO', 'PTO', 'Teacher') NOT NULL
);

-- Insert sample data (optional)
INSERT INTO users (username, password, category) VALUES
('admin', 'admin123', 'Administrator'),
('parent1', 'parent123', 'Parent'),
('ngo1', 'ngo123', 'NGO'),
('pto1', 'pto123', 'PTO'),
('teacher1', 'teacher123', 'Teacher');
