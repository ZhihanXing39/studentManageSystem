//这是用于登出的js
//获取元素
let logout = document.getElementById("logout");

//添加事件
logout.addEventListener("click",logoutHaddle);

//使用ajax调用logout.php
function logoutHaddle(){
    // 定义注销函数的URL  
const logoutUrl = '/utils/logout.php';  
  
// 使用fetch函数发起POST请求  
fetch(logoutUrl, {  
  method: 'POST', // 使用POST方法  
  headers: {  
    'Content-Type': 'application/x-www-form-urlencoded' // 设置请求头，指示发送的数据类型  
  },  
  body: 'logout=true' // 发送注销请求的参数，可以根据需要进行修改  
})  
  .then(response => {  
    // 请求成功后的回调函数  
    if (response.ok) {  
      // 在这里可以处理注销成功后的逻辑，比如跳转到登录页面或显示注销成功的消息  
      console.log('注销成功');
      window.location.href = '/login.php';  
    } else {  
      // 处理请求失败的情况  
      console.error('注销失败', response.status);  
    }  
  })  
  .catch(error => {  
    // 处理请求过程中的错误  
    console.error('发生错误', error);  
  });
}