<style>
    .backedup {
        background-color: #f0f3fd;
        position: relative;
        padding: 50px 0;
        margin-bottom: 50px;
    }

    .infoside-bg::after {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        width: 27%;
        height: 100%;
        z-index: 1;
        /* Lower than image */
        background: #014293;
    }

    .info-img {
        position: relative;
        /* Required for z-index */
        z-index: 2;
        /* Higher than ::after */
    }

    .info-img img {
        border-radius: 7px;
        width: 100%;
        position: relative;
        /* Ensures it respects parent z-index */
    }

    .info-content h2 {
        display: inline-block;
        margin-top: 50px;
        margin-bottom: 30px;
        font-size: 42px;
        font-weight: 600;
        line-height: 120%;
        color: #014293;
        font-family: "sequelbook", sans-serif;
        text-transform: capitalize;
    }

    .info-content p {
        font-size: 16px;
        color: var(--text);
        line-height: 160%;
    }

    /* Brand Logo Styling - Ensuring Clickability */
    .brand-logo {
        display: flex;
        gap: 15px;
        margin-top: 20px;
        padding-left: 0px;
    }

    .logo-box,
    .logo-box2 {
        display: inline-block;
    }

    .logo-box a,
    .logo-box2 a {
        display: block;
        width: 100%;
        height: 100%;
    }

    .logo-box img,
    .logo-box2 img {
        max-width: 100%;
        height: auto;
    }

    /* Responsive Fixes */
    @media (max-width: 992px) {
        .infoside-bg::after {
            display: none;
        }

        .info-img {
            padding: 20px;
        }

        .info-content h2 {
            margin-top: 0px;
            font-size: 2rem;
            text-align: center;
        }
    }
</style>

<div class="sec infoside-bg backedup pb-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                <div class="info-img">
                    <img src="https://kfwcorp.com/assets/uploads/images/backedup.png"
                        alt="Backed by CFO Bridge and KFW">
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="info-content" id="info-content-b">
                    <h2 class="uppercase" style="margin-bottom: 10px;">Our affiliated entities</h2>
                    <h3  style="font-size: 1.5rem;">One consortium, every C-suite capability</h3>
                    <p>CTO Bridge and CHRO Bridge—provide fractional Chief Technology Officer and Chief Human Resources Officer services that equip start-ups and small-to-medium enterprises with executive-level expertise. Together with our core advisory practice, they create a unified centre of excellence that delivers the full spectrum of Finance, Talent, and Technology  (FTT) C-suite solutions under one roof.</p>
                </div>

                <!-- Brand Logos (Now Clickable) -->
                <div class="brand-logo">
                    <div class="logo-box">
                        <a href="https://ctobridge.com/" target="_blank" rel="noopener noreferrer"
                            data-faitracker-click-bind="true">
                            <img src="https://kfwcorp.com/assets/uploads/images/cto-logo.png" alt="CTO Bridge"
                                width="150px">
                        </a>
                    </div>
                    <div class="logo-box2">
                        <a href="https://kfwcorp.com/" target="_blank" rel="noopener noreferrer">
                            <img src="https://kfwcorp.com/assets/img/kfw-blogo.png" alt="KFW Corp">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>