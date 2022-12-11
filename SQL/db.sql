/* users table */
CREATE TABLE IF NOT EXISTS users (
  username VARCHAR(30) PRIMARY KEY NOT NULL,
  full_name VARCHAR(30) NOT NULL,
  email VARCHAR(50),
  password VARCHAR(50),
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)

/* details table */
CREATE TABLE IF NOT EXISTS details (
    username VARCHAR(30) NOT NULL,
    title VARCHAR(50),
    company VARCHAR(50),
    address VARCHAR(100),
    phone VARCHAR(50),
    facebook VARCHAR(50),
    github VARCHAR(50),
    twitter VARCHAR(50),
    linkedin VARCHAR(50),
    bio VARCHAR(100),
    FOREIGN KEY (username) REFERENCES users(username)
)

/* post table */
CREATE TABLE IF NOT EXISTS posts (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(30) NOT NULL,
  title TEXT(255) NOT NULL,
  body TEXT(999) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY (username) REFERENCES users(username)
)