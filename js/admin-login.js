// 登录弹窗与按钮控制
// 按ESC关闭登录框
function closeAdminLoginBox() {
    document.getElementById('adminLoginBox').style.display = 'none';
}
function openAdminLoginBox() {
    document.getElementById('adminLoginBox').style.display = 'block';
}
document.addEventListener('DOMContentLoaded', function() {
    var showBtn = document.getElementById('showAdminLogin');
    var cancelBtn = document.getElementById('cancelAdminLogin');
    var loginBox = document.getElementById('adminLoginBox');
    if (showBtn) {
        showBtn.onclick = openAdminLoginBox;
    }
    if (cancelBtn) {
        cancelBtn.onclick = closeAdminLoginBox;
    }
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && loginBox.style.display === 'block') {
            closeAdminLoginBox();
        }
    });
});
