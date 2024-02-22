//删除学生信息的JS
//获取元素
let buttons = document.querySelectorAll(".delete");

//添加事件
for(let i=0;i<buttons.length;i++){
    buttons[i].addEventListener("click",deleteStu);
}


//传递学生id的函数
function deleteStu(){
    axios.get("/student/deleteStu.php?q="+this.id)
        .then(res => {
            console.log("传递成功！HTTP状态码：" + res.status);
        })
        .catch(err => {
            console.log("发生错误！HTTP状态码：" + err.response.status + " 详细信息：");
            console.log(error.toJSON());
        })
        .finally(() => {
            location.reload();
        });
}