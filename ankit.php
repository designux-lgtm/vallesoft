<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background: #111;
        height: 100vh;
        overflow: hidden;

        display: flex;
        align-items: center;
        justify-content: center;
    }

    .cards-slider {
        position: relative;
        width: 1200px;
        height: 500px;

        display: flex;
        align-items: center;
        justify-content: center;
    }

    .card {
        position: absolute;

        width: 534px;
        height: 468px;

        border-radius: 24px;
        overflow: hidden;

        will-change: transform, opacity;
        transform-origin: center center;
    }

    .card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }







    .slider-buttons {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        margin-top: 30px;
    }

    .slider-btn {
        width: 52px;
        height: 52px;
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        background: linear-gradient(145deg, #252525, #111111);
        color: #fff;
        font-size: 25px;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        transition: all 0.35s ease;
        box-shadow: 0 5px 18px rgba(0, 0, 0, 0.2);
    }

    .slider-btn:hover {
        background: #00bfa6;
        color: #fff;
        border-color: #00bfa6;
        transform: scale(1.12);
        box-shadow: 0 5px 20px rgba(0, 191, 166, 0.35);
    }

    .slider-btn:active {
        transform: scale(0.92);
    }

    .slider-btn span {
        display: block;
        line-height: 1;
    }
</style>
<div class="container-fluid">
    <div class="container">
        <div class="cards-slider">

            <div class="card" id="card1">
                <img src="assets/images/certificate-1.jpg">
            </div>

            <div class="card" id="card2">
                <img src="https://cdn.prod.website-files.com/5f2fd61608fd62471b38ff8a/6a1530fdc527d2475656ecc4_slide-3.avif">
            </div>

            <div class="card" id="card3">
                <img src="https://cdn.prod.website-files.com/5f2fd61608fd62471b38ff8a/6a1530fd6c0c70a24be90745_slide-1.avif">
            </div>

        </div>


        <div class="slider-buttons">
            <button id="leftBtn" class="slider-btn left-btn">
                <span>←</span>
            </button>

            <button id="rightBtn" class="slider-btn right-btn">
                <span>→</span>
            </button>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/gsap@3/dist/gsap.min.js"></script>


<script>
    const cards = [
        document.querySelector("#card1"),
        document.querySelector("#card2"),
        document.querySelector("#card3")
    ];

    const positions = [{
            x: -450,
            scale: 0.55,
            opacity: 0.7,
            zIndex: 1
        },
        {
            x: 0,
            scale: 1,
            opacity: 1,
            zIndex: 3
        },
        {
            x: 450,
            scale: 0.55,
            opacity: 0.7,
            zIndex: 2
        }
    ];

    // INITIAL
    cards.forEach((card, index) => {
        gsap.set(card, positions[index]);
    });

    // MANUAL SLIDE
    function animateCards(direction) {

        if (direction === "right") {
            positions.unshift(positions.pop());
        } else {
            positions.push(positions.shift());
        }

        cards.forEach((card, index) => {

            gsap.to(card, {
                ...positions[index],
                duration: 1.2,
                ease: "power2.inOut"
            });

        });
    }

    // BUTTON EVENTS
    document.querySelector("#leftBtn").addEventListener("click", () => {
        animateCards("left");
    });

    document.querySelector("#rightBtn").addEventListener("click", () => {
        animateCards("right");
    });
</script>