var btnTest1 = document.getElementById('test1')

var btnTest2 = document.getElementById('test2')

btnTest1.onclick = function(){
    document.getElementById('exam1').style.display = "block";
    document.getElementById('exam2').style.display = "none";
}

btnTest2.onclick = function(){
    document.getElementById('exam1').style.display = "none";
    document.getElementById('exam2').style.display = "block";
}