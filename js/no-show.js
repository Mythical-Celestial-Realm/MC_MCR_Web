        // 按ESC关闭登录框
        document.addEventListener('keydown', function(e){
            if(e.key === 'Escape'){
                document.getElementById('adminLoginBox').style.display='none';
            }
        });
        // "不再显示" 按钮功能，使用 localStorage 记忆
        document.addEventListener('DOMContentLoaded', function() {
            var tipBox = document.getElementById('userTipBox');
            var hideBtn = document.getElementById('hideTipBtn');
            if(localStorage.getItem('hideUserTip') === '1') {
                tipBox.style.display = 'none';  // 如果用户之前选择了不再显示，则隐藏提示框
            }
            hideBtn.onclick = function() {
                tipBox.style.display = 'none'; 
                localStorage.setItem('hideUserTip', '1');
            };
        });