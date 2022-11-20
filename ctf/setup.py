import mysql.connector

db = mysql.connector.connect(
  host="localhost",
  user="root",
  password="shitpassword"
)

cmd = db.cursor()
cmd.execute("CREATE USER 'hacker'@'localhost' IDENTIFIED BY 'holy!shit!'")
cmd.execute("CREATE DATABASE test_users")
cmd.execute("USE test_users")
cmd.execute("GRANT ALL PRIVILEGES ON test_users.* TO 'hacker'@'localhost'")
cmd.execute("create table users( user_id INT NOT NULL AUTO_INCREMENT, user_name VARCHAR(20) NOT NULL, password VARCHAR(40) NOT NULL, PRIMARY KEY ( user_id ))")
cmd.execute("ALTER TABLE users ADD flag varchar(255)")
cmd.execute("INSERT INTO users (user_id, user_name, password, flag) VALUES (1, 'admin', 'sec65e5fe55fwe', 'ekzf{b0mfq4sy_0m_f3sshmf_sg3_ek4f!}')") 
cmd.execute("set global sql_mode=''")

lol = db.cursor()
lol.execute("SELECT * FROM users")

for x in lol:
	print(x)
	
