window.onload = () => {
    const pagetopBtn = document.querySelector("#page-top");
    pagetopBtn.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth",
        });
    });
}