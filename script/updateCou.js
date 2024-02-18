//这是修改课程信息的JS
//获取元素
let updateButtons = document.querySelectorAll(".update");
let modifyCou = document.querySelector(".modifyCou");
let idInput = document.querySelector(".modifyCou input");

//遍历所有按钮，添加click事件
for(let i=0;i<buttons.length;i++){
    updateButtons[i].addEventListener("click",showUpdate);
}

//展开修改框的函数
function showUpdate(){
    modifyCou.style.display = "flex";
    //填入所选课程id
    idInput.value = this.id;
}