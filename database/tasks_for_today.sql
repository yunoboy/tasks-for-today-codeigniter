SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

DROP TABLE IF EXISTS tasks;
DROP TABLE IF EXISTS users;

CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    status VARCHAR(20) NOT NULL DEFAULT 'pending',
    task_date DATE NOT NULL,
    created_at DATETIME NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at DATETIME NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO tasks (title, status, task_date, created_at) VALUES
('Review project requirements', 'pending', '2026-09-23', '2026-09-23 08:00:00'),
('Prepare team meeting notes', 'completed', '2026-09-23', '2026-09-23 08:10:00'),
('Update client contact list', 'in_progress', '2026-09-23', '2026-09-23 08:20:00'),
('Test the daily task filter', 'pending', '2026-09-23', '2026-09-23 08:30:00'),
('Archive previous reports', 'completed', '2026-09-22', '2026-09-22 15:00:00'),
('Back up the project database', 'completed', '2026-09-22', '2026-09-22 16:00:00'),
('Draft the next sprint plan', 'pending', '2026-09-24', '2026-09-23 09:00:00'),
('Schedule the stakeholder review', 'pending', '2026-09-24', '2026-09-23 09:10:00');

INSERT INTO users (username, full_name, email, created_at) VALUES
('yuan', 'Yuan Evangelista', 'yuan@example.com', '2026-09-23 08:00:00');

SET FOREIGN_KEY_CHECKS = 1;
