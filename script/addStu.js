//显示添加学生addStu.php的脚本
//获取元素
let addButton = document.getElementById("addButton");
let container = document.querySelector(".container");
//添加事件
addButton.addEventListener("click",function(){
    container.style.display = "flex";
});