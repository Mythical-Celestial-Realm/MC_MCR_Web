document.addEventListener('DOMContentLoaded', function() {
    const scrollControl = {
        isAnimating: false,

        lockScroll: function() {
            document.body.style.overflow = 'hidden';
        },

        unlockScroll: function() {
            document.body.style.overflow = '';
        }
    };

    function smoothScrollTo(target) {
        if (scrollControl.isAnimating) return;

        scrollControl.isAnimating = true;
        scrollControl.lockScroll();

        const startPos = window.pageYOffset;
        const targetPos = 688;
        const distance = targetPos - startPos;
        const duration = 700;
        let startTime = null;

        const animation = (currentTime) => {
            if (!startTime) startTime = currentTime;
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);

            window.scrollTo(0, startPos + distance * (progress < 0.5 
                ? 4 * progress * progress * progress 
                : 1 - Math.pow(-2 * progress + 2, 3) / 2));

            if (progress < 1) {
                requestAnimationFrame(animation);
            } else {
                scrollControl.unlockScroll();
                scrollControl.isAnimating = false;
            }
        };

        requestAnimationFrame(animation);
    }

    const startButton = document.querySelector('.start-button');
    const mainContent = document.querySelector('#main-content');

    if (startButton && mainContent) {
        startButton.addEventListener('click', (e) => {
            e.preventDefault();
            smoothScrollTo(mainContent);
        });
    }
    
    let isScrolling = false;
    
    window.addEventListener('wheel', function(e) {
        if (isScrolling) return;
        
        if (window.scrollY < 688 && e.deltaY > 0) {
            e.preventDefault();
            isScrolling = true;
            smoothScrollTo(mainContent);
            
            setTimeout(() => {
                isScrolling = false;
            }, 1000);
        }
    }, { passive: false });
});
