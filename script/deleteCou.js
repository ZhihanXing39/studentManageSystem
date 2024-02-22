//删除课程信息的JS
//获取元素
let buttons = document.querySelectorAll(".delete");

//添加事件
for(let i=0;i<buttons.length;i++){
    buttons[i].addEventListener("click",deleteStu);
}


//传递课程id的函数
function deleteStu(){
    axios.get('/deleteCou.php?q=' + this.id)
        .then(res => {
            // 若成功则执行
            console.log("传递成功！HTTP状态码：" + res.status);
        })
        .catch(err => {
            // 若出错则执行
            console.log("发生错误！HTTP状态码：" + err.response.status + " 详细信息：");
            console.log(error.toJSON());
        })
        .finally(() => {
            // 请求发出后无论如何都会执行
            location.reload();
        });
}