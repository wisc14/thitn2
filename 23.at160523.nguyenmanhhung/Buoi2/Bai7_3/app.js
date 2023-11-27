function validate(){
    var classCode = document.getElementById("class-code").value;
    var className = document.getElementById("class-name").value;
    var course = document.getElementById("course").value;
    var teacher = document.getElementById("teacher").value;

    //Kiểm tra các ô input trống
    if(classCode === "" || className === "" || teacher === "" || course === ""){
        alert('Vui lòng nhập đầy đủ thông tin');
        return false;
    }

    // Form mã sinh viên có dạng AT170000
    var classCodePattern = /^AT\d{6}$/;

    // Form họ tên
    var classNamePattern = /^[\p{L}\s]+$/u;

    // Form tên lớp có dạng L00
    var teacherPattern = /^[\p{L}\s]+$/u;

    // Form tên môn học
    var coursePattern = /^[\p{L}\s]+$/u;

    // Kiểm tra mã sinh viên
    if (!classCode.match(classCodePattern)) {
        alert("Mã lớp không hợp lệ.");
        return false;
    }

    // Kiểm tra họ tên
    if(!className.match(classNamePattern)){
        alert("Tên lớp không hợp lệ");
        return false;
    }

    // Kiểm tra tên lớp
    if(!teacher.match(teacherPattern)){
        alert("Tên giáo viên không hợp lệ");
        return false;
    }

    // Kiểm tra tên môn học
    if(!course.match(coursePattern)){
        alert("Tên môn học không hợp lệ");
        return false;
    }

    // Nếu thỏa mãn điều kiện thông báo cho người dùng
    alert("Gửi biểu mẫu thành công");
    return true;
}
