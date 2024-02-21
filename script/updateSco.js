//这是修改成绩的JS
//获取元素
let updateButtons = document.querySelectorAll(".update");
let modifySco = document.querySelector(".modifySco");
let sidInput = document.querySelector(".sid");
let cidInput = document.querySelector(".cid");

//遍历所有按钮，添加click事件
for(let i=0;i<updateButtons.length;i++){
    updateButtons[i].addEventListener("click",showUpdate);
}

//展开修改框的函数
function showUpdate(){
    modifySco.style.display = "flex";
    //填入所选学生和课程序号
    let sid = this.getAttribute("data-sid");
    let cid = this.getAttribute("data-cid");
    sidInput.value = sid;
    cidInput.value = cid;

}