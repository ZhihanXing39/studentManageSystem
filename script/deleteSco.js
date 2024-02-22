// 这是删除成绩的JS脚本  
// 获取元素  
let buttons = document.querySelectorAll(".delete");  
  
// 添加事件  
for (let i = 0; i < buttons.length; i++) {  
    // 使用箭头函数来确保正确的this上下文  
    buttons[i].addEventListener("click", (e) => deleteSco(e.target));  
}  
  
// 传递sid和cid的函数  
function deleteSco(button) {  
    // 假设sid和cid是按钮的自定义数据属性  
    let sid = button.getAttribute('data-sid');  
    let cid = button.getAttribute('data-cid');  
    
    axios.get("/score/deleteSco.php?sid=" + sid + "&cid=" + cid)
        .then(res => {
            console.log("传递成功！HTTP状态码：" + res.status);
            // 可能需要在此处处理服务器的响应
        })
        .catch(err => {
            console.log("发生错误！HTTP状态码：" + err.response.status + " 详细信息：");
            console.log(error.toJSON());
        })
        .finally(() => {
            // 请求发出后无论如何都会执行
            
            // 刷新页面，确保更改生效  
            location.reload();
        });
}