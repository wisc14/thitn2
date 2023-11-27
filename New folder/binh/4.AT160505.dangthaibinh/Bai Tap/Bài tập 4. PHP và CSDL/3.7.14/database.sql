CREATE TABLE classes(
    ID INTEGER PRIMARY KEY AUTO_INCREMENT,
    ClassName VARCHAR(255) NOT NULL,
    ClassDescription VARCHAR(255) NOT NULL,
    NumOfStudents INTEGER NOT NULL
);

INSERT INTO classes(ClassName, ClassDescription, NumOfStudents) VALUES ( "AT16A", "Lớp chuyên hóa", 65);
INSERT INTO classes(ClassName, ClassDescription, NumOfStudents) VALUES ('AT16B', "Lớp chuyên toán", 43);
INSERT INTO classes(ClassName, ClassDescription, NumOfStudents) VALUES ('AT16C', "Lớp chuyên lý", 42);
INSERT INTO classes(ClassName, ClassDescription, NumOfStudents) VALUES ('AT16D', "Lớp chuyên anh", 55);

CREATE TABLE students(
    ID INTEGER PRIMARY KEY AUTO_INCREMENT ,
    StudentName VARCHAR(255) NOT NULL,
    StudentGender VARCHAR(255) NOT NULL,
    StudentAddress VARCHAR(255) NOT NULL,
    StudentEmail VARCHAR(255) NOT NULL,
    ClassID INTEGER NOT NULL
);

INSERT INTO students(StudentName, StudentGender, StudentAddress, StudentEmail, ClassID) VALUES ("Đặng Thái Bình", "Nam", "Quảng Ninh", "thaibinhdang2710.bc@gmail.com",1);
INSERT INTO students(StudentName, StudentGender, StudentAddress, StudentEmail, ClassID) VALUES ("Lê Huyền Mai", "Nữ", "Quảng Nam", "maihuyen@gmail.com",3);
INSERT INTO students(StudentName, StudentGender, StudentAddress, StudentEmail, ClassID) VALUES ("Nguyễn Mạnh Hùng", "Nữ", "Hà Nội", "hunghihi@gmail.com",1);
INSERT INTO students(StudentName, StudentGender, StudentAddress, StudentEmail, ClassID) VALUES ("Nguyễn Minh Khôi", "Nam", "Quảng Ninh", "khoiminhnguyen@gmail.com",2);

