//这是修改学生信息的JS
//获取元素
let updateButtons = document.querySelectorAll(".update");
let modifyStu = document.querySelector(".modifyStu");
let idInput = document.querySelector(".modifyStu input");

//遍历所有按钮，添加click事件
for(let i=0;i<buttons.length;i++){
    updateButtons[i].addEventListener("click",showUpdate);
}

//展开修改框的函数
function showUpdate(){
    modifyStu.style.display = "flex";
    //填入所选学生id
    idInput.value = this.id;
}