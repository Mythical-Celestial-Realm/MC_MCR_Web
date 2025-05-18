// 动态调整布局的函数
function adjustLayout() {
    const windowWidth = window.innerWidth;
    const container = document.querySelector('.container');
    const cards = document.querySelectorAll('.card');
    const navTitle = document.querySelector('.nav > div:first-child');

    // 根据窗口宽度调整容器宽度
    if (windowWidth < 768) {
        container.style.width = '95%';
        navTitle.style.fontSize = '18px';
        
        // 卡片布局改为垂直排列
        document.querySelectorAll('.cards').forEach(cardContainer => {
            cardContainer.style.flexDirection = 'column';
        });
        
        // 调整卡片宽度
        cards.forEach(card => {
            card.style.width = '90%';
            card.style.marginBottom = '20px';
        });
        
        // 调整加入容器布局
        const joinContainer = document.querySelector('.join-container');
        if (joinContainer) {
            joinContainer.style.flexDirection = 'column';
            joinContainer.querySelector('.right').style.marginTop = '20px';
            joinContainer.querySelector('.right').style.textAlign = 'left';
        }
    } else {
        container.style.width = '80%';
        navTitle.style.fontSize = '24px';
        
        // 恢复卡片水平布局
        document.querySelectorAll('.cards').forEach(cardContainer => {
            cardContainer.style.flexDirection = 'row';
        });
        
        // 恢复卡片宽度
        cards.forEach(card => {
            card.style.width = '30%';
            card.style.marginBottom = '0';
        });
        
        // 恢复加入容器布局
        const joinContainer = document.querySelector('.join-container');
        if (joinContainer) {
            joinContainer.style.flexDirection = 'row';
            joinContainer.querySelector('.right').style.marginTop = '0';
            joinContainer.querySelector('.right').style.textAlign = 'right';
        }
    }

    // 调整标题大小
    const h2Elements = document.querySelectorAll('h2');
    h2Elements.forEach(h2 => {
        h2.style.fontSize = windowWidth < 768 ? '32px' : '48px';
    });
}

// 页面加载时和窗口大小改变时调用调整函数
window.addEventListener('load', adjustLayout);
window.addEventListener('resize', adjustLayout);