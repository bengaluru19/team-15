import sqlite3
con = sqlite3.connect("JPM.db")

crsr = con.cursor()

com = """CREATE TABLE Images (    
id VARCHAR(20) PRIMARY KEY,  
file_name VARCHAR(50) ,
area FLOAT,J
budget FLOAT,
snake INTEGER,
heaving_hoops INTEGER,
snowflakes INTEGER,
tyre_climber INTEGER,
tyre_tunnel INTEGER,
cube_climber INTEGER);"""

crsr.execute(com)

com = """INSERT INTO Images VALUES ('PLAY000001', 'img1.jpg', 5000, 100000, 0, 1, 1, 2, 1, 2)"""
crsr.execute(com)

com = """INSERT INTO Images VALUES ('PLAY000002', 'img2.jpg', 7000, 150000, 1, 0, 1, 1, 3, 0)"""
crsr.execute(com)

com = """INSERT INTO Images VALUES ('PLAY000003', 'img3.jpg', 6000, 120000, 0, 1, 0, 2, 2, 1)"""
crsr.execute(com)

com = """INSERT INTO Images VALUES ('PLAY000004', 'img4.jpg', 8000, 175000, 0, 1, 2, 2, 2, 2)"""
crsr.execute(com)

com = """INSERT INTO Images VALUES ('PLAY000005', 'img5.jpg', 9000, 180000, 1, 0, 2, 2, 1, 3)"""
crsr.execute(com)

com = """INSERT INTO Images VALUES ('PLAY000006', 'img6.jpg', 11000, 200000, 0, 2, 3, 2, 3, 2)"""
crsr.execute(com)

com = """INSERT INTO Images VALUES ('PLAY000007', 'img7.jpg', 12000, 250000, 0, 3, 2, 2, 1, 2)"""
crsr.execute(com)

com = """INSERT INTO Images VALUES ('PLAY000008', 'img8.jpg', 11500, 210000, 0, 1, 2, 2, 3, 1)"""
crsr.execute(com)

com = """INSERT INTO Images VALUES ('PLAY000009', 'img9.jpg', 12000, 225000, 0, 3, 2, 1, 1, 2)"""
crsr.execute(com)

com = """INSERT INTO Images VALUES ('PLAY0000010', 'img10.jpg', 9000, 190000, 0, 1, 2, 2, 3, 0)"""
crsr.execute(com)

con.commit()