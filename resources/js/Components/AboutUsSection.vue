<template>
    <div class="about-section">
  <div class="about-section-content">
    <span class="about-section-content-title">About Us</span> <hr>
    <span class="about-section-content-text"
      >Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi ratione
      magnam fugit tempora voluptas deserunt impedit. Voluptate excepturi id
      dignissimos aliquam dolor voluptatibus eaque eveniet dicta labore
      voluptatum? Ratione, quis.
      </span>
  </div>
  <div class="about-section-illustration">
    <img
      src="../../../storage/app/public/img/about-illustration.svg"
      alt="AboutUs Section"
    />
  </div>
</div>
</template>

<script>
export default {
    
}
</script>

<style scoped lang="scss">
@import '../../css/_variables.scss';

.about-section {
    display: flex;
    padding: 2em;
    box-sizing: border-box;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 90%;

    .about-section-illustration {
        height: 100%;
        flex: 4 0 0;
        display: flex;
        justify-content: center;
        align-items: center;

        img { 
            max-height: 70%;
        }
    }

    .about-section-content {
        display: block;
        margin: 0 auto;
        flex: 2 0 0;
        font-family: RubikRegular;
        transform: translateX(30%);

        hr {
            background-color: none;
            border: 1px solid rgba($color: #000000, $alpha: 0.2);
        }

        .about-section-content-title {
            font-family: RubikBold;
            font-size: 2em;
            display: inline-block;
            color: $primary-color;
            padding-bottom: 1rem;
        }

        .about-section-content-text {
            display: inline-block;
            padding-top: 1rem;
        }

        .about-section-content-cta {
            display: flex;
            justify-content: center;
            align-items: center;

            button {
                font-size: 1.5em;
                border: none;
                border-radius: 15px;
                background-color: $primary-color-light;
                color: $accent-color;
                padding: 0.5em;
                margin-top: 1.5em;
                transition: all 0.4s ease;
                cursor: pointer;
                
                &:hover {
                    color: white;
                    background-color: $accent-color;
                }
            }
        }
    }
}

// Large devices (desktops, less than 1200px)
@media (max-width: 1199.98px) {
    .about-section {
        padding: 1em;
        width: 100%;
        height: 90%;
    
        .about-section-illustration {
            position: absolute;
            height: 80%;
            opacity: 0.15;
    
            img { 
                max-height: 100%;
            }
        }
    
        .about-section-content {
            display: block;
            margin: 0 auto;
            font-family: RubikRegular;
            transform: translateX(0%);
    
            hr {
                background-color: none;
                border: none;
            }
    
            .about-section-content-title {
                font-size: 3em;
                padding-bottom: 1.2rem;
                text-align: center;
                display: block;
            }
    
            .about-section-content-text {
                text-align: center;
                font-size: 2em;
                padding-top: 1.2rem;
            }

            .about-section-content-cta {
                display: flex;
                justify-content: center;
                align-items: center;
    
                button {
                    font-size: 2.5em;
                    
                    &:hover {
                        color: white;
                        background-color: $accent-color;
                    }
                }
            }
        }
    }
}

// Medium devices (tablets, less than 992px)
@media (max-width: 991.98px) {
    .about-section {
        padding: 1em;
        width: 100%;
        height: 90%;
    
        .about-section-illustration {
            position: absolute;
            height: 50%;
            opacity: 0.15;
    
            img { 
                max-height: 70%;
            }
        }
    
        .about-section-content {
            display: block;
            margin: 0 auto;
            font-family: RubikRegular;
            transform: translateX(0%);
    
            hr {
                background-color: none;
                border: none;
            }
    
            .about-section-content-title {
                font-size: 2.7em;
                padding-bottom: 1.2rem;
                text-align: center;
                display: block;
            }
    
            .about-section-content-text {
                text-align: center;
                font-size: 1.5em;
                padding-top: 1.2rem;
            }

            .about-section-content-cta {
                display: flex;
                justify-content: center;
                align-items: center;
            }
        }
    }
}

// Small devices (landscape phones, less than 768px)
@media (max-width: 767.98px) {
}

@media (max-width: 575.98px) {
    .about-section {
        padding: 1em;
        width: 100%;
        height: 90%;
    
        .about-section-illustration {
            position: absolute;
            height: 50%;
            opacity: 0.15;
    
            img { 
                max-height: 70%;
            }
        }
    
        .about-section-content {
            display: block;
            margin: 0 auto;
            font-family: RubikRegular;
            transform: translateX(0%);
    
            hr {
                background-color: none;
                border: none;
            }
    
            .about-section-content-title {
                font-size: 2.7em;
                padding-bottom: 1.2rem;
                text-align: center;
            }
    
            .about-section-content-text {
                text-align: center;
                font-size: 1.3em;
                padding-top: 1.2rem;
            }
        }
    }
}
</style>