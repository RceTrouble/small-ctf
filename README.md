# SMALL-CTF (Apache)

- This ctf has 2 vulnerabilities, if you are stuck/curious, check **README.txt**


### Setup
- `service mysql start & service apache2 start` (root)
- `git clone https://github.com/hyena0x/small-ctf.git`
- `cd small-ctf`
- `python3 -m pip install mysql-connector-python `
- `python3 setup.py`
- `cd .. ; mv small-ctf /var/www/html`
- `browse to  localhost/small-ctf :)`


### Manual (without setup.py)

- make sure mysql & apache is up...note, that this will leak the flag.
- `mysql -u root (-p 'pass')`
- `CREATE USER 'hacker'@'localhost' IDENTIFIED BY 's3cur3!p4ss!';`
- `CREATE DATABASE test_users";`
- `USE test_users;`
- `GRANT ALL PRIVILEGES ON test_users.* TO 'hacker'@'localhost';`
- `create table users( user_id INT NOT NULL AUTO_INCREMENT, user_name VARCHAR(20) NOT NULL, password VARCHAR(40) NOT NULL, PRIMARY KEY ( user_id ));`
- `ALTER TABLE users ADD flag varchar(255);`
- `INSERT INTO users (user_id, user_name, password, flag) VALUES (1, 'admin', 'sec65e5fe55fwe', 'ekzf{b0mfq4sy_0m_f3sshmf_sg3_ek4f!}');`
- `set global sql_mode='';`
