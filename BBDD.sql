DROP DATABASE IF EXISTS vending_machine;
CREATE DATABASE vending_machine;


/*php artisan migrate*/




INSERT INTO users (name,password,balance) VALUES ('javier','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',10); /*password ='password' */
INSERT INTO users (name,password,balance) VALUES ('roger','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',10); /*password ='password' */