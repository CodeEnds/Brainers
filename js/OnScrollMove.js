const nav = document.getElementById("nav");
let animationPlayed = true;

addEventListener("scroll", (event) => {
    const animation = async () => {
        if(animationPlayed == true) {
            nav.style.animation = 'opacityAnimation 1s 1';
            animationPlayed = false;
            await new Promise(r => setTimeout(r, 900));
            nav.style.opacity = '1';
        }
    }
    animation();
});