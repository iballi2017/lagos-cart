document.addEventListener("DOMContentLoaded", (event) => {
    // console.log("DOM fully loaded and parsed");


    const planOptionBtns = document.querySelectorAll(".plan-options .plan button");
    const planOptionModals = document.querySelectorAll(".modal .plan-option");
    const overlay = document.querySelector(".overlay");
    const closeBtns = document.querySelectorAll(".close-btn");

    for (let i = 0; i < planOptionBtns.length; i++) {
        planOptionBtns[i]?.addEventListener("click", (e) => {
            let tag = e.target.getAttribute("data-bs-target").slice(1)
            for (let j = 0; j < planOptionModals.length; j++) {
                let modalTag = planOptionModals[j].getAttribute("id")
                if (tag == modalTag) {
                    planOptionModals[j].classList.add("show");
                    overlay.classList.add("show");
                }
            }


        })
    }

    overlay?.addEventListener("click", () => {
        for (let j = 0; j < planOptionModals.length; j++) {
            planOptionModals[j].classList.remove("show")
            overlay.classList.contains("show") ? overlay.classList.remove("show") : null;
        }
    });

    for (let index = 0; index < closeBtns.length; index++) {
        const btn = closeBtns[index];
        btn.addEventListener("click", () => {
            for (let j = 0; j < planOptionModals.length; j++) {
                planOptionModals[j].classList.remove("show")
                overlay.classList.contains("show") ? overlay.classList.remove("show") : null;
            }
        })

    }

});
