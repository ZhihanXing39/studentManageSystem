//删除学生信息的JS
//获取元素
let buttons = document.querySelectorAll(".delete");
console.log(buttons[0]);

//添加事件
for(let i=0;i<buttons.length;i++){
    buttons[i].addEventListener("click",deleteStu);
}


//传递学生id的函数
function deleteStu(){
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange=function(){
        if(xmlhttp.readyState==4 && xmlhttp.status==200){
            console.log("传递成功！");
        }
    }
    xmlhttp.open("GET","deleteStu.php?q="+this.id);
    xmlhttp.send();
    location.reload();
}