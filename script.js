window.history.scrollRestoration = "manual";
window.onbeforeunload = function () {
    window.scrollTo(0, 0);
};

document.querySelector(".logo").addEventListener("click", (e) => {
    e.preventDefault();
    window.scrollTo({ top: 0, behavior: "smooth" });
    history.replaceState(null, null, " ");
});

const bannerBtn = document.querySelector(".bannerBtn");

if (bannerBtn) {
    bannerBtn.addEventListener("click", (e) => {
        e.preventDefault();
        document.querySelector("#about").scrollIntoView({ behavior: "smooth" });
        history.replaceState(null, null, " ");
    });
}


document.addEventListener("DOMContentLoaded", function () {
    const elements = document.querySelectorAll(".fadeInUp");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("animated");
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 });

    elements.forEach(el => {
        if (el.classList.contains("bannerOverlay")) {
            el.classList.add("animated");
        } else {
            observer.observe(el);
        }
    });
});

// Navbar scroll effect
const navbar = document.querySelector('.navbar');
const navLogo = document.querySelector('.navLogo');

window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
        navLogo.src = "assets/logo.webp";
    } else {
        navbar.classList.remove('scrolled');
        navLogo.src = "assets/logoWhite.webp";
    }
});

const menuToggle = document.querySelector('.menuToggle');
const menuClose = document.querySelector('.menuClose');
const menu = document.querySelector('.menu');
const menuLinks = document.querySelectorAll('.menu a');

menuToggle.addEventListener('click', () => {
    menu.classList.add('active');
    document.body.style.overflow = "hidden";
});

menuClose.addEventListener('click', () => {
    menu.classList.remove('active');
    document.body.style.overflow = "";
});

menuLinks.forEach(link => {
    link.addEventListener('click', (e) => {
        menu.classList.remove('active');
        document.body.style.overflow = "";

        const targetId = link.getAttribute("href");
        if (targetId.startsWith("#")) {
            e.preventDefault();
            const targetSection = document.querySelector(targetId);
            if (targetSection) {
                targetSection.scrollIntoView({ behavior: "smooth" });
            }
        }
    });
});

// why choose section 
const whyChooseData = [
    {
        title: "Direct Manufacturing",
        shortDesc: "Guaranteed quality and cost efficiency",
        longDesc: "We control the entire production process, ensuring top-notch quality at competitive prices.",
        img: "assets/WhyChoose/chooseOne.WEBP"
    },
    {
        title: "Global Trade Expertise",
        shortDesc: "Smooth export & import processes",
        longDesc: "Our experience in international markets makes cross-border trade simple and hassle-free.",
        img: "assets/WhyChoose/chooseTwo.WEBP"
    },
    {
        title: "Customer-Centric Approach",
        shortDesc: "Building long-term partnerships",
        longDesc: "We prioritize your needs and focus on creating sustainable, trusted business relationships.",
        img: "assets/WhyChoose/chooseThree.WEBP"
    },
    {
        title: "On-Time Delivery",
        shortDesc: "Reliable logistics and supply chain management",
        longDesc: "With efficient systems in place, we ensure your products reach you safely and on schedule.",
        img: "assets/WhyChoose/chooseFour.WEBP"
    }
];
const whyChooseContainer = document.querySelector('.moreInfoContainer');

whyChooseData.forEach((item, index) => {

    const outerCard = document.createElement('div');
    outerCard.classList.add('whyChooseSectionOuter', 'wp-6');

    const card = document.createElement('div');
    card.classList.add('whyChooseSection');

    card.innerHTML = `
    <div class="box">
      <div class="imageHolder">
        <img src="${item.img}" alt="${item.title}" class="OF-cover">
      </div>
    </div>
    <div class="showSectionHeading">
      <div class="whyChooseVisibleContent">
        <h4>${item.title}</h4>
        <img src="assets/SVG/arrowGreen.svg"/>
      </div>
      <p class="whyChooseSectionOverlay">
        ${item.shortDesc}
        ${item.longDesc}
      </p>
    </div>
  `;

    outerCard.appendChild(card);

    whyChooseContainer.appendChild(outerCard);
});

function handleClick(e) {
    const card = e.currentTarget.closest('.whyChooseSection');
    const allCards = document.querySelectorAll('.whyChooseSection');

    allCards.forEach(c => {
        if (c !== card) {
            c.classList.remove('expanded');
        }
    });

    card.classList.toggle('expanded');
}

function applySmallScreenBehavior() {
    const cards = document.querySelectorAll('.whyChooseSection');
    if (window.innerWidth <= 768) {
        cards.forEach(card => {
            card.querySelector('.showSectionHeading').removeEventListener('click', handleClick);
            card.querySelector('.showSectionHeading').addEventListener('click', handleClick);
        });
    } else {
        cards.forEach(card => card.classList.remove('expanded'));
    }
}

window.addEventListener('resize', applySmallScreenBehavior);
window.addEventListener('load', applySmallScreenBehavior);

// Services section 
const services = [
    {
        title: "Cow Dung Powder",
        description: "Processed and finely powdered cow dung, used as an organic fertilizer to enrich soil health and improve crop yield naturally.",
        image: "assets/Services/cowDungPowder.WEBP"
    },
    {
        title: "Cow Dung Cake",
        description: "Traditional eco-friendly product used as fuel for cooking, religious rituals, and as a natural soil enhancer.",
        image: "assets/Services/cowDungCake.WEBP"
    },
    {
        title: "Cow Manure",
        description: "100% organic, nutrient-rich manure that improves soil fertility, promotes healthy plant growth, and reduces the need for chemical fertilizers.",
        image: "assets/Services/cowManure.WEBP"
    },
    {
        title: "Coco Peat",
        description: "A natural growing medium made from coconut husks, ideal for seed germination, soil conditioning, and water retention in farming.",
        image: "assets/Services/cocoPeat.WEBP"
    },
    {
        title: "Frozen Goods",
        description: "High-quality frozen food items stored under strict hygiene and cold-chain processes to ensure freshness and long shelf life.",
        image: "assets/Services/frozenGoods.WEBP"
    },
    {
        title: "Fruits & Vegetables",
        description: "Freshly sourced, chemical-free produce directly from farms, delivered with maximum freshness and nutritional value.",
        image: "assets/Services/fruitVegetables.WEBP"
    },
    {
        title: "Spices & Herbs",
        description: "Premium-quality spices and natural herbs that add authentic flavor, aroma, and health benefits to your meals.",
        image: "assets/Services/spicesHerbs.WEBP"
    },
    {
        title: "Decompose",
        description: "Natural decomposition solutions for organic waste management, turning biodegradable waste into nutrient-rich compost.",
        image: "assets/Services/decompose.WEBP"
    },
    {
        title: "Dehydrated Goods",
        description: "Fresh fruits, vegetables, and herbs dehydrated to lock in nutrition and flavor, providing long-lasting and convenient use.",
        image: "assets/Services/dehydratedProducts.WEBP"
    },
    {
        title: "Fertilizer",
        description: "Organic and natural fertilizers designed to improve soil fertility, boost crop production, and promote sustainable farming.",
        image: "assets/Services/fertilizers.WEBP"
    },
    {
        title: "Jelly",
        description: "A sweet, semi-solid fruit-based product made by cooking fruit juice with sugar and natural pectin, commonly used as a spread, dessert ingredient, or topping for baked goods.",
        image: "assets/Services/jelly.WEBP"
    }
];

const servicesContainer = document.querySelector(".servicesContainer");

services.forEach(service => {

    const outer = document.createElement("div");
    outer.classList.add("serviceCardOuter", "wp-4", "fadeInUp");

    const card = document.createElement("div");
    card.classList.add("serviceCard");

    card.innerHTML = `
        <div class="box">
            <div class="imageHolder">
                <img loading="lazy" decoding="async" src="${service.image}" class="OF-cover" alt="${service.title}">
            </div>
        </div>
        <div class="serviceCardDetails">
            <h4>${service.title.toUpperCase()}</h4>
            <p>${service.description}</p>
        </div>
    `;

    outer.appendChild(card);

    servicesContainer.appendChild(outer);
});

const serviceCardsOuter = document.querySelectorAll(".serviceCardOuter");

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const card = entry.target;
            const index = Array.from(serviceCardsOuter).indexOf(card);
            card.style.transitionDelay = `0.1s`;
            card.classList.add("animated");
            observer.unobserve(card);
        }
    });
}, { threshold: 0.2 });

serviceCardsOuter.forEach(card => observer.observe(card));

// contact us form validation 
const form = document.getElementById("contactForm");
const alertBox = document.getElementById("alertBox");

const name = document.getElementById("name");
const email = document.getElementById("email");
const phone = document.getElementById("phone");
const message = document.getElementById("message");

const nameError = document.getElementById("nameError");
const emailError = document.getElementById("emailError");
const phoneError = document.getElementById("phoneError");
const messageError = document.getElementById("messageError");

const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

function showAlert() {
    alertBox.classList.add("show");
    document.body.classList.add("no-scroll");
}

function closeAlert() {
    alertBox.classList.remove("show");
    document.body.classList.remove("no-scroll");
}

function validateName() {
    if (!/^[a-zA-Z\s]{3,}$/.test(name.value.trim())) {
        nameError.classList.add("show");
        return false;
    } else {
        nameError.classList.remove("show");
        return true;
    }
}

function validateEmail() {
    if (!emailPattern.test(email.value.trim())) {
        emailError.classList.add("show");
        return false;
    } else {
        emailError.classList.remove("show");
        return true;
    }
}

function validatePhone() {
    if (!/^\d{10}$/.test(phone.value.trim())) {
        phoneError.classList.add("show");
        return false;
    } else {
        phoneError.classList.remove("show");
        return true;
    }
}

function validateMessage() {
    if (message.value.trim().length < 5) {
        messageError.classList.add("show");
        return false;
    } else {
        messageError.classList.remove("show");
        return true;
    }
}

name.addEventListener("input", validateName);
email.addEventListener("input", validateEmail);
phone.addEventListener("input", validatePhone);
message.addEventListener("input", validateMessage);

form.addEventListener("submit", function (e) {
    e.preventDefault();

    const isNameValid = validateName();
    const isEmailValid = validateEmail();
    const isPhoneValid = validatePhone();
    const isMessageValid = validateMessage();

    if (isNameValid && isEmailValid && isPhoneValid && isMessageValid) {
        let formData = new FormData(form);

        showLoadingOverlay();

        fetch("contact.php", {
            method: "POST",
            body: formData
        })
            .then(response => response.text())
            .then(data => {
                hideLoadingOverlay();

                if (data.trim() === "success") {
                    form.reset();
                    showAlert();
                } else {
                    showCustomError("Something went wrong. Please try again later.");
                }
            })
            .catch(error => {
                hideLoadingOverlay();
                showCustomError("Network error! Please check your connection.");
                console.error("Error:", error);
            });
    }
});

function showLoadingOverlay() {
    let overlay = document.getElementById("loadingOverlay");
    if (!overlay) {
        overlay = document.createElement("div");
        overlay.id = "loadingOverlay";
        overlay.className = "loadingOverlay";
        overlay.innerHTML = `
            <div class="loader"></div>
            <p>Please Wait...</p>
        `;
        document.body.appendChild(overlay);
    }
    overlay.style.display = "flex";
}

function hideLoadingOverlay() {
    const overlay = document.getElementById("loadingOverlay");
    if (overlay) overlay.style.display = "none";
}

// function showCustomError(message) {
//     const errorBox = document.createElement("div");
//     errorBox.className = "errorBox";
//     errorBox.innerHTML = `
//         <div class="errorContent">
//             <h3 class="errorTitle">Oops!</h3>
//             <p class="errorMessage">${message}</p>
//             <button class="errorButton" onclick="this.parentElement.parentElement.remove()">OK</button>
//         </div>
//     `;
//     document.body.appendChild(errorBox);
// }

function showCustomError(message) {
    document.body.classList.add("no-scroll");

    let errorBox = document.querySelector(".errorBox");
    if (!errorBox) {
        errorBox = document.createElement("div");
        errorBox.className = "errorBox";
        errorBox.innerHTML = `
            <div class="errorContent">
                <h3 class="errorTitle">Oops!</h3>
                <p class="errorMessage">${message}</p>
                <button class="errorButton">OK</button>
            </div>
        `;
        document.body.appendChild(errorBox);

        errorBox.querySelector(".errorButton").addEventListener("click", () => {
            errorBox.remove();
            document.body.classList.remove("no-scroll");
        });
    } else {
        errorBox.querySelector(".errorMessage").textContent = message;
        errorBox.style.display = "flex";
    }
}


document.getElementById("footerLogo").addEventListener("click", function (e) {
    e.preventDefault();
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});
