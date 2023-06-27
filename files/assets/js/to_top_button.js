let calcScrollValue = () => {
    let toTopButton = document.getElementById("progress");
    let topValue = document.documentElement.scrollTop;
    console.log(topValue)
    let calcHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    let scrollValue = Math.round((topValue * 100) / calcHeight);
    if (topValue > 150) {
        toTopButton.style.display = "";
    } else {
        toTopButton.style.display = "none";
    }
    toTopButton.addEventListener("click", () => {
        document.querySelector('body,html').getBoundingClientRect().top;
        window.scrollTo({
            behavior: 'smooth',
            top: scroll,
        });
    });
    toTopButton.style.background = `conic-gradient(#003F74 ${scrollValue}%, #ffffff ${scrollValue}%)`;
};
window.onscroll = calcScrollValue;
window.onload = calcScrollValue;
