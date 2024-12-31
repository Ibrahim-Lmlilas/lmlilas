CREATE DATABASE situation;

-- Role Table
CREATE TABLE Role (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL UNIQUE
);

-- Sample Roles
INSERT INTO Role (name) VALUES
('Admin'),
('User');


-- User Table
CREATE TABLE User (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    fullname VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL, -- appropriate length for hashed passwords
    role_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (role_id) REFERENCES Role(id) ON DELETE CASCADE
);

-- Hash for: 123456

-- Sample Users
INSERT INTO User (username, fullname, password, role_id) VALUES
('admin', 'Lamlilas Ibrahim', '$2y$10$z5hvjVbnx11kyif3UNNtSe73DpyAvCpj5s6oNLJ8GAvPvygqa0AWa', 1),
('user1', 'El Mourabit Wassim', '$2y$10$z5hvjVbnx11kyif3UNNtSe73DpyAvCpj5s6oNLJ8GAvPvygqa0AWa', 2),
('user2', 'Fetti Ayoub', '$2y$10$z5hvjVbnx11kyif3UNNtSe73DpyAvCpj5s6oNLJ8GAvPvygqa0AWa', 2),
('user3', 'Ouirghane Lahcen', '$2y$10$z5hvjVbnx11kyif3UNNtSe73DpyAvCpj5s6oNLJ8GAvPvygqa0AWa', 2),
('user4', 'Jebbouri Ayoub', '$2y$10$z5hvjVbnx11kyif3UNNtSe73DpyAvCpj5s6oNLJ8GAvPvygqa0AWa', 2),
('user5', 'Latrach Mohammed', '$2y$10$z5hvjVbnx11kyif3UNNtSe73DpyAvCpj5s6oNLJ8GAvPvygqa0AWa', 2),
('user6', 'Ettaoussi Ilyas', '$2y$10$z5hvjVbnx11kyif3UNNtSe73DpyAvCpj5s6oNLJ8GAvPvygqa0AWa', 2),
('user7', 'Hammaoui Anas', '$2y$10$z5hvjVbnx11kyif3UNNtSe73DpyAvCpj5s6oNLJ8GAvPvygqa0AWa', 2),
('user8', 'El Mokhtari Firdaous', '$2y$10$z5hvjVbnx11kyif3UNNtSe73DpyAvCpj5s6oNLJ8GAvPvygqa0AWa', 2),
('user9', 'Achbab Oussama', '$2y$10$z5hvjVbnx11kyif3UNNtSe73DpyAvCpj5s6oNLJ8GAvPvygqa0AWa', 2),
('user10', 'Guezadi Abdellatif', '$2y$10$z5hvjVbnx11kyif3UNNtSe73DpyAvCpj5s6oNLJ8GAvPvygqa0AWa', 2),
('user11', 'Imouga Younes', '$2y$10$z5hvjVbnx11kyif3UNNtSe73DpyAvCpj5s6oNLJ8GAvPvygqa0AWa', 2),
('user12', 'Mahtaj Issam', '$2y$10$z5hvjVbnx11kyif3UNNtSe73DpyAvCpj5s6oNLJ8GAvPvygqa0AWa', 2),
('user13', 'Filali Zehri Driss', '$2y$10$z5hvjVbnx11kyif3UNNtSe73DpyAvCpj5s6oNLJ8GAvPvygqa0AWa', 2),
('user14', 'Oumha Ayyoub', '$2y$10$z5hvjVbnx11kyif3UNNtSe73DpyAvCpj5s6oNLJ8GAvPvygqa0AWa', 2),
('user15', 'Asfor Dounia', '$2y$10$z5hvjVbnx11kyif3UNNtSe73DpyAvCpj5s6oNLJ8GAvPvygqa0AWa', 2),
('user16', 'Karroumi Mohamed', '$2y$10$z5hvjVbnx11kyif3UNNtSe73DpyAvCpj5s6oNLJ8GAvPvygqa0AWa', 2),
('user17', 'Zouhairi Mohamed', '$2y$10$z5hvjVbnx11kyif3UNNtSe73DpyAvCpj5s6oNLJ8GAvPvygqa0AWa', 2),
('user18', 'Bassam Lahcen', '$2y$10$z5hvjVbnx11kyif3UNNtSe73DpyAvCpj5s6oNLJ8GAvPvygqa0AWa', 2),
('user19', 'Lamrini Fouad', '$2y$10$z5hvjVbnx11kyif3UNNtSe73DpyAvCpj5s6oNLJ8GAvPvygqa0AWa', 2),
('user20', 'ARZIKI Souad', '$2y$10$z5hvjVbnx11kyif3UNNtSe73DpyAvCpj5s6oNLJ8GAvPvygqa0AWa', 2),
('user21', 'Kibous Samira', '$2y$10$z5hvjVbnx11kyif3UNNtSe73DpyAvCpj5s6oNLJ8GAvPvygqa0AWa', 2),
('user22', 'Elyagoubi Mohammed Abdessetar', '$2y$10$z5hvjVbnx11kyif3UNNtSe73DpyAvCpj5s6oNLJ8GAvPvygqa0AWa', 2),
('user23', 'El Benallali Ikram', '$2y$10$z5hvjVbnx11kyif3UNNtSe73DpyAvCpj5s6oNLJ8GAvPvygqa0AWa', 2);
