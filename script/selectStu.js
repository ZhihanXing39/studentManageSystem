//展示所有学生的AJAX
//绑定对象和事件
let stu = document.getElementById("stu");
stu.addEventListener("click", selectStu);

//使用AJAX调用selectStu.php
function selectStu(){
    //创建xmlhttp对象
    let xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
            document.querySelector("main").innerHTML = xmlhttp.responseText;
        }
    }

    xmlhttp.open("GET","selectStu.php",true);
    xmlhttp.send();
}