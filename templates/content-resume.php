<main id="main">
    <article class="container padding-section main-content resume-content">
        <div class="section">
            <?php the_title('<div class="title-wrapper"><h1 class="title">','</h1></div>'); ?>
            <ul class="name-and-contact-data">
                <li>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
                            <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
                        </svg>
                        <b>Cristian Vera</b>
                    </p>
                </li>
                <li>
                    <a href="mailto:<?php echo get_theme_mod('email_office', 'contacto@chanovera.com'); ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" viewBox="0 0 16 16"><path d="M4 4a3 3 0 0 0-3 3v6h6V7a3 3 0 0 0-3-3zm0-1h8a4 4 0 0 1 4 4v6a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V7a4 4 0 0 1 4-4zm2.646 1A3.99 3.99 0 0 1 8 7v6h7V7a3 3 0 0 0-3-3H6.646z"/><path d="M11.793 8.5H9v-1h5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.354-.146l-.853-.854zM5 7c0 .552-.448 0-1 0s-1 .552-1 0a1 1 0 0 1 2 0z"/></svg>
                        <?php echo get_theme_mod('personal_office', 'contacto@chanovera.com'); ?>
                    </a>
                </li>
                <li>
                    <a href="https://chanovera.com/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-link" viewBox="0 0 16 16">
                            <path d="M6.354 5.5H4a3 3 0 0 0 0 6h3a3 3 0 0 0 2.83-4H9c-.086 0-.17.01-.25.031A2 2 0 0 1 7 10.5H4a2 2 0 1 1 0-4h1.535c.218-.376.495-.714.82-1z"/>
                            <path d="M9 5.5a3 3 0 0 0-2.83 4h1.098A2 2 0 0 1 9 6.5h3a2 2 0 1 1 0 4h-1.535a4.02 4.02 0 0 1-.82 1H12a3 3 0 1 0 0-6H9z"/>
                        </svg>
                        <?= __('Sitio web', 'renata'); ?>
                    </a>
                </li>
                <li>
                    <a href="tel:<?php echo get_theme_mod('office_phone_number', '9211243148'); ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-phone-vibrate" viewBox="0 0 16 16">
                            <path d="M10 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h4zM6 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H6z"/>
                            <path d="M8 12a1 1 0 1 0 0-2 1 1 0 0 0 0 2zM1.599 4.058a.5.5 0 0 1 .208.676A6.967 6.967 0 0 0 1 8c0 1.18.292 2.292.807 3.266a.5.5 0 0 1-.884.468A7.968 7.968 0 0 1 0 8c0-1.347.334-2.619.923-3.734a.5.5 0 0 1 .676-.208zm12.802 0a.5.5 0 0 1 .676.208A7.967 7.967 0 0 1 16 8a7.967 7.967 0 0 1-.923 3.734.5.5 0 0 1-.884-.468A6.967 6.967 0 0 0 15 8c0-1.18-.292-2.292-.807-3.266a.5.5 0 0 1 .208-.676zM3.057 5.534a.5.5 0 0 1 .284.648A4.986 4.986 0 0 0 3 8c0 .642.12 1.255.34 1.818a.5.5 0 1 1-.93.364A5.986 5.986 0 0 1 2 8c0-.769.145-1.505.41-2.182a.5.5 0 0 1 .647-.284zm9.886 0a.5.5 0 0 1 .648.284C13.855 6.495 14 7.231 14 8c0 .769-.145 1.505-.41 2.182a.5.5 0 0 1-.93-.364C12.88 9.255 13 8.642 13 8c0-.642-.12-1.255-.34-1.818a.5.5 0 0 1 .283-.648z"/>
                        </svg>
                        <?= __('Teléfono', 'renata'); ?>
                    </a>
                </li>
                <li>
                    <a href="<?php echo get_theme_mod('linkedin_link', 'https://www.linkedin.com/in/chanovera/'); ?>" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" viewBox="0 0 448 512">
                            <!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/>
                        </svg>
                        LinkedIn
                    </a>
                </li>
                <li>
                    <a href="<?php echo get_theme_mod('github_link', 'https://github.com/chanovera-dev'); ?>" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                        </svg>
                        GitHub
                    </a>
                </li>
            </ul>
        </div>
        <div class="section">
            <div class="title-wrapper">
                <h2 class="title">Academic Record</h2>
            </div>
            <p><b>Computer Systems Engineering</b> <span class="text-colored"><b>Universidad Virtual del Estado de Guanajuato</b> Currently</span></p>
        </div>
        <div class="section non-academy-training">
            <div class="title-wrapper">
                <h2 class="title">Non-Academic training</h2>
            </div>
            <p><b>BootCamp Java</b> <span class="text-colored"><b>FUNVAL Internacional</b> June - August 2023</span></p>
            <p><b>Definitive HTML and CSS course / Blog creation course with Wordpress / Wordpress theme creation course / Frontend Developer course</b> <span class="text-colored"><b>Platzi.com</b> 2021</span></p>
        </div>
        <div class="section work-experience">
            <div class="title-wrapper">
                <h2 class="title">Work experience</h2>
            </div>
            <div>
                <p><b>Systems manager / Frontend developer / Designer</b> <span class="text-colored"><b>Freelance</b></span></p>
                <p>End user support / Design and implementation of websites</p>
                <span class="text-colored"><p>2017 / Currently</p></span>
            </div>
            <div>
                <p><b>Systems manager</b> <span class="text-colored"><b>Biss Coworking</b></span></p>
                <p>Tech support. Security and access control manager. Network management and maintenance manager. Technology Consultant. <i>I standardized facility access protocols, migrated the wireless network to 5Ghz, standardized internal systems to 5Ghz, standardized internal systems and reduced technical failures to 0</i></p>
                <span class="text-colored"><p>June 2016 / February 2017</p></span>
            </div>
            <div>
                <p><b>Tech Support</b> <span class="text-colored"><b>Ciudad del Carmen City Hall</b></span></p>
                <p>Tech support. Linux-based Institutional Mail Server Administrator <span class="text-colored">July 2012 / December 2012</span></p>
            </div>
            <div>
                <p><b>Systems manager</b> <span class="text-colored"><b>Bit Byte Computation</b></span></p>
                <p>Tech support / Teacher <span class="text-colored">2002 / 2010</span></p>
            </div>
        </div>
        <div class="section">
            <div class="title-wrapper">
                <h2 class="title">Soft Skills</h2>
            </div>
            <ul class="skills">
                <li>Creative</li>
                <li>Persuasive</li>
                <li>Patient</li>
                <li>Collaborative</li>
                <li>Flexible</li>
                <li>Liable</li>
                <li>Empathic</li>
                <li>Positive</li>
                <li>Ethic</li>
            </ul>
        </div>
        <div class="section">
            <div class="title-wrapper">
                <h2 class="title">Technical Skills</h2>
            </div>
            <ul class="tech">
                <li>
                    <ul>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-microsoft" viewBox="0 0 16 16">
                                <path d="M7.462 0H0v7.19h7.462V0zM16 0H8.538v7.19H16V0zM7.462 8.211H0V16h7.462V8.211zm8.538 0H8.538V16H16V8.211z"/>
                            </svg>
                            Windows
                        </li>
                        <li>
                        <svg xmlns="http://www.w3.org/2000/svg" height="17" fill="currentColor" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M341.52 285.56c33.65 0 82.34-6.94 82.34-47 .22-6.74.86-1.82-20.88-96.24-4.62-19.15-8.68-27.84-42.31-44.65-26.09-13.34-82.92-35.37-99.73-35.37-15.66 0-20.2 20.17-38.87 20.17-18 0-31.31-15.06-48.12-15.06-16.14 0-26.66 11-34.78 33.62-27.5 77.55-26.28 74.27-26.12 78.27 0 24.8 97.64 106.11 228.47 106.11M429 254.84c4.65 22 4.65 24.35 4.65 27.25 0 37.66-42.33 58.56-98 58.56-125.74.08-235.91-73.65-235.91-122.33a49.55 49.55 0 0 1 4.06-19.72C58.56 200.86 0 208.93 0 260.63c0 84.67 200.63 189 359.49 189 121.79 0 152.51-55.08 152.51-98.58 0-34.21-29.59-73.05-82.93-96.24"/></svg>
                            Red Hat
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-apple" viewBox="0 0 16 16">
                                <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z"/>
                                <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z"/>
                            </svg>
                            macOS
                        </li>
                    </ul>
                </li>
                <li>
                    <ul>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-wordpress" viewBox="0 0 16 16">
                                <path d="M12.633 7.653c0-.848-.305-1.435-.566-1.892l-.08-.13c-.317-.51-.594-.958-.594-1.48 0-.63.478-1.218 1.152-1.218.02 0 .039.002.058.003l.031.003A6.838 6.838 0 0 0 8 1.137 6.855 6.855 0 0 0 2.266 4.23c.16.005.313.009.442.009.717 0 1.828-.087 1.828-.087.37-.022.414.521.044.565 0 0-.371.044-.785.065l2.5 7.434 1.5-4.506-1.07-2.929c-.369-.022-.719-.065-.719-.065-.37-.022-.326-.588.043-.566 0 0 1.134.087 1.808.087.718 0 1.83-.087 1.83-.087.37-.022.413.522.043.566 0 0-.372.043-.785.065l2.48 7.377.684-2.287.054-.173c.27-.86.469-1.495.469-2.046zM1.137 8a6.864 6.864 0 0 0 3.868 6.176L1.73 5.206A6.837 6.837 0 0 0 1.137 8z"/>
                                <path d="M6.061 14.583 8.121 8.6l2.109 5.78c.014.033.03.064.049.094a6.854 6.854 0 0 1-4.218.109zm7.96-9.876c.03.219.047.453.047.706 0 .696-.13 1.479-.522 2.458l-2.096 6.06a6.86 6.86 0 0 0 2.572-9.224z"/>
                                <path fill-rule="evenodd" d="M0 8c0-4.411 3.589-8 8-8 4.41 0 8 3.589 8 8s-3.59 8-8 8c-4.411 0-8-3.589-8-8zm.367 0c0 4.209 3.424 7.633 7.633 7.633 4.208 0 7.632-3.424 7.632-7.633C15.632 3.79 12.208.367 8 .367 3.79.367.367 3.79.367 8z"/>
                            </svg>
                            Wordpress
                        </li>
                        <li style="position:relative; left:-1rem;">
                            <svg width="27" height="27" viewBox="0 -51.5 256 256" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid"><path d="M23.759 0h208.378C245.325 0 256 10.675 256 23.863v79.541c0 13.188-10.675 23.863-23.863 23.863H157.41l10.257 25.118-45.109-25.118H23.863c-13.187 0-23.862-10.675-23.862-23.863V23.863C-.104 10.78 10.57 0 23.759 0z" fill="currentColor"/><path d="M14.578 21.75c1.457-1.978 3.642-3.018 6.556-3.226 5.308-.417 8.326 2.08 9.054 7.492 3.226 21.75 6.764 40.17 10.51 55.259l22.79-43.395c2.082-3.955 4.684-6.036 7.806-6.244 4.579-.312 7.388 2.601 8.533 8.741 2.602 13.84 5.932 25.6 9.886 35.59 2.706-26.432 7.285-45.476 13.737-57.235 1.56-2.914 3.85-4.371 6.868-4.58 2.394-.207 4.579.521 6.556 2.082 1.977 1.561 3.018 3.538 3.226 5.932.104 1.873-.208 3.434-1.04 4.995-4.059 7.493-7.39 20.085-10.095 37.567-2.601 16.963-3.538 30.18-2.914 39.65.209 2.6-.208 4.89-1.248 6.868-1.25 2.289-3.122 3.538-5.516 3.746-2.706.208-5.515-1.04-8.221-3.85-9.678-9.887-17.379-24.664-22.998-44.332-6.765 13.32-11.76 23.31-14.986 29.97-6.14 11.76-11.343 17.796-15.714 18.108-2.81.208-5.203-2.186-7.284-7.18-5.307-13.633-11.031-39.962-17.17-78.986-.417-2.706.207-5.1 1.664-6.972zm223.636 16.338c-3.746-6.556-9.262-10.51-16.65-12.072-1.978-.416-3.85-.624-5.62-.624-9.99 0-18.107 5.203-24.455 15.61-5.412 8.845-8.117 18.627-8.117 29.346 0 8.013 1.665 14.881 4.995 20.605 3.746 6.556 9.262 10.51 16.65 12.071 1.977.417 3.85.625 5.62.625 10.094 0 18.211-5.203 24.455-15.61 5.411-8.95 8.117-18.732 8.117-29.45.104-8.117-1.665-14.882-4.995-20.501zm-13.112 28.826c-1.457 6.868-4.059 11.967-7.91 15.401-3.017 2.706-5.827 3.85-8.428 3.33-2.498-.52-4.58-2.705-6.14-6.764-1.25-3.226-1.873-6.452-1.873-9.47 0-2.601.208-5.203.728-7.596.937-4.267 2.706-8.43 5.515-12.384 3.435-5.1 7.077-7.18 10.823-6.452 2.498.52 4.58 2.706 6.14 6.764 1.249 3.226 1.873 6.452 1.873 9.47 0 2.706-.208 5.307-.728 7.7zm-52.033-28.826c-3.746-6.556-9.366-10.51-16.65-12.072-1.977-.416-3.85-.624-5.62-.624-9.99 0-18.107 5.203-24.455 15.61-5.411 8.845-8.117 18.627-8.117 29.346 0 8.013 1.665 14.881 4.995 20.605 3.746 6.556 9.262 10.51 16.65 12.071 1.978.417 3.85.625 5.62.625 10.094 0 18.211-5.203 24.455-15.61 5.412-8.95 8.117-18.732 8.117-29.45 0-8.117-1.665-14.882-4.995-20.501zm-13.216 28.826c-1.457 6.868-4.059 11.967-7.909 15.401-3.018 2.706-5.828 3.85-8.43 3.33-2.497-.52-4.578-2.705-6.14-6.764-1.248-3.226-1.872-6.452-1.872-9.47 0-2.601.208-5.203.728-7.596.937-4.267 2.706-8.43 5.516-12.384 3.434-5.1 7.076-7.18 10.822-6.452 2.498.52 4.58 2.706 6.14 6.764 1.25 3.226 1.873 6.452 1.873 9.47.105 2.706-.208 5.307-.728 7.7z" fill="var(--color-body-hover)"/></svg>
                            Woocommerce
                        </li>
                    </ul>
                </li>
                <li>
                    <ul>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 32l34.9 395.8L191.5 480l157.6-52.2L384 32H0zm308.2 127.9H124.4l4.1 49.4h175.6l-13.6 148.4-97.9 27v.3h-1.1l-98.7-27.3-6-75.8h47.7L138 320l53.5 14.5 53.7-14.5 6-62.2H84.3L71.5 112.2h241.1l-4.4 47.7z"/></svg>    
                            HTML
                        </li>
                    </ul>
                </li>
                <li>
                    <ul>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 32l34.9 395.8L192 480l157.1-52.2L384 32H0zm313.1 80l-4.8 47.3L193 208.6l-.3.1h111.5l-12.8 146.6-98.2 28.7-98.8-29.2-6.4-73.9h48.9l3.2 38.3 52.6 13.3 54.7-15.4 3.7-61.6-166.3-.5v-.1l-.2.1-3.6-46.3L193.1 162l6.5-2.7H76.7L70.9 112h242.2z"/></svg>
                            CSS
                        </li>
                    </ul>
                </li>
                <li>
                    <ul>
                        <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM243.8 381.4c0 43.6-25.6 63.5-62.9 63.5-33.7 0-53.2-17.4-63.2-38.5l34.3-20.7c6.6 11.7 12.6 21.6 27.1 21.6 13.8 0 22.6-5.4 22.6-26.5V237.7h42.1v143.7zm99.6 63.5c-39.1 0-64.4-18.6-76.7-43l34.3-19.8c9 14.7 20.8 25.6 41.5 25.6 17.4 0 28.6-8.7 28.6-20.8 0-14.4-11.4-19.5-30.7-28l-10.5-4.5c-30.4-12.9-50.5-29.2-50.5-63.5 0-31.6 24.1-55.6 61.6-55.6 26.8 0 46 9.3 59.8 33.7L368 290c-7.2-12.9-15-18-27.1-18-12.3 0-20.1 7.8-20.1 18 0 12.6 7.8 17.7 25.9 25.6l10.5 4.5c35.8 15.3 55.9 31 55.9 66.2 0 37.8-29.8 58.6-69.7 58.6z"/></svg>
                            Javascript</li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M277.74 312.9c9.8-6.7 23.4-12.5 23.4-12.5s-38.7 7-77.2 10.2c-47.1 3.9-97.7 4.7-123.1 1.3-60.1-8 33-30.1 33-30.1s-36.1-2.4-80.6 19c-52.5 25.4 130 37 224.5 12.1zm-85.4-32.1c-19-42.7-83.1-80.2 0-145.8C296 53.2 242.84 0 242.84 0c21.5 84.5-75.6 110.1-110.7 162.6-23.9 35.9 11.7 74.4 60.2 118.2zm114.6-176.2c.1 0-175.2 43.8-91.5 140.2 24.7 28.4-6.5 54-6.5 54s62.7-32.4 33.9-72.9c-26.9-37.8-47.5-56.6 64.1-121.3zm-6.1 270.5a12.19 12.19 0 0 1-2 2.6c128.3-33.7 81.1-118.9 19.8-97.3a17.33 17.33 0 0 0-8.2 6.3 70.45 70.45 0 0 1 11-3c31-6.5 75.5 41.5-20.6 91.4zM348 437.4s14.5 11.9-15.9 21.2c-57.9 17.5-240.8 22.8-291.6.7-18.3-7.9 16-19 26.8-21.3 11.2-2.4 17.7-2 17.7-2-20.3-14.3-131.3 28.1-56.4 40.2C232.84 509.4 401 461.3 348 437.4zM124.44 396c-78.7 22 47.9 67.4 148.1 24.5a185.89 185.89 0 0 1-28.2-13.8c-44.7 8.5-65.4 9.1-106 4.5-33.5-3.8-13.9-15.2-13.9-15.2zm179.8 97.2c-78.7 14.8-175.8 13.1-233.3 3.6 0-.1 11.8 9.7 72.4 13.6 92.2 5.9 233.8-3.3 237.1-46.9 0 0-6.4 16.5-76.2 29.7zM260.64 353c-59.2 11.4-93.5 11.1-136.8 6.6-33.5-3.5-11.6-19.7-11.6-19.7-86.8 28.8 48.2 61.4 169.5 25.9a60.37 60.37 0 0 1-21.1-12.8z"/></svg>
                            Java
                        </li>
                        <li style="position:relative; left:-1rem;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M320 104.5c171.4 0 303.2 72.2 303.2 151.5S491.3 407.5 320 407.5c-171.4 0-303.2-72.2-303.2-151.5S148.7 104.5 320 104.5m0-16.8C143.3 87.7 0 163 0 256s143.3 168.3 320 168.3S640 349 640 256 496.7 87.7 320 87.7zM218.2 242.5c-7.9 40.5-35.8 36.3-70.1 36.3l13.7-70.6c38 0 63.8-4.1 56.4 34.3zM97.4 350.3h36.7l8.7-44.8c41.1 0 66.6 3 90.2-19.1 26.1-24 32.9-66.7 14.3-88.1-9.7-11.2-25.3-16.7-46.5-16.7h-70.7L97.4 350.3zm185.7-213.6h36.5l-8.7 44.8c31.5 0 60.7-2.3 74.8 10.7 14.8 13.6 7.7 31-8.3 113.1h-37c15.4-79.4 18.3-86 12.7-92-5.4-5.8-17.7-4.6-47.4-4.6l-18.8 96.6h-36.5l32.7-168.6zM505 242.5c-8 41.1-36.7 36.3-70.1 36.3l13.7-70.6c38.2 0 63.8-4.1 56.4 34.3zM384.2 350.3H421l8.7-44.8c43.2 0 67.1 2.5 90.2-19.1 26.1-24 32.9-66.7 14.3-88.1-9.7-11.2-25.3-16.7-46.5-16.7H417l-32.8 168.7z"/></svg>
                            PHP
                        </li>
                    </ul>
                </li>
                <li>
                    <ul>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                            </svg>
                            GitHub
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-git" viewBox="0 0 16 16">
                                <path d="M15.698 7.287 8.712.302a1.03 1.03 0 0 0-1.457 0l-1.45 1.45 1.84 1.84a1.223 1.223 0 0 1 1.55 1.56l1.773 1.774a1.224 1.224 0 0 1 1.267 2.025 1.226 1.226 0 0 1-2.002-1.334L8.58 5.963v4.353a1.226 1.226 0 1 1-1.008-.036V5.887a1.226 1.226 0 0 1-.666-1.608L5.093 2.465l-4.79 4.79a1.03 1.03 0 0 0 0 1.457l6.986 6.986a1.03 1.03 0 0 0 1.457 0l6.953-6.953a1.031 1.031 0 0 0 0-1.457"/>
                            </svg>
                            Git
                        </li>
                    </ul>
                </li>
                <li>
                    <ul>
                        <li style="position:relative; top:1.1rem;">
                        <svg fill="currentColor" width="60" height="60" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <path d="M30.026 15.139c-0.082-0.006-0.177-0.010-0.273-0.010-0.484 0-0.947 0.090-1.373 0.254l0.026-0.009c-0.125 0.050-0.325 0.050-0.342 0.209 0.069 0.066 0.079 0.175 0.137 0.267 0.117 0.198 0.261 0.366 0.429 0.506l0.003 0.003c0.175 0.137 0.35 0.27 0.534 0.387 0.325 0.2 0.694 0.319 1.012 0.52 0.181 0.117 0.366 0.266 0.55 0.391 0.091 0.062 0.15 0.175 0.267 0.215v-0.025c-0.057-0.075-0.075-0.184-0.131-0.267-0.084-0.084-0.167-0.159-0.25-0.241-0.248-0.325-0.535-0.603-0.857-0.835l-0.012-0.008c-0.267-0.182-0.852-0.437-0.962-0.744l-0.016-0.018c0.218-0.031 0.412-0.077 0.599-0.139l-0.024 0.007c0.284-0.075 0.544-0.059 0.837-0.132 0.132-0.034 0.266-0.075 0.4-0.117v-0.075c-0.15-0.15-0.262-0.354-0.417-0.494-0.409-0.36-0.86-0.698-1.335-1.002l-0.045-0.027c-0.262-0.167-0.595-0.275-0.871-0.417-0.1-0.050-0.267-0.075-0.325-0.159-0.13-0.185-0.245-0.397-0.336-0.621l-0.008-0.022q-0.368-0.714-0.684-1.453c-0.144-0.383-0.287-0.697-0.448-1.001l0.023 0.047c-0.786-1.319-1.881-2.379-3.188-3.102l-0.043-0.022c-0.309-0.153-0.668-0.272-1.045-0.339l-0.025-0.004c-0.209-0.010-0.417-0.025-0.625-0.034-0.146-0.094-0.272-0.19-0.39-0.296l0.003 0.003c-0.475-0.3-1.704-0.95-2.054-0.090-0.225 0.542 0.334 1.077 0.527 1.352 0.154 0.183 0.294 0.388 0.415 0.605l0.010 0.020c0.059 0.145 0.075 0.294 0.134 0.445 0.145 0.452 0.292 0.823 0.459 1.182l-0.026-0.062c0.099 0.199 0.202 0.368 0.317 0.528l-0.008-0.012c0.067 0.091 0.182 0.134 0.209 0.284-0.086 0.181-0.153 0.391-0.19 0.61l-0.002 0.014c-0.108 0.332-0.171 0.715-0.171 1.112 0 0.621 0.153 1.206 0.423 1.72l-0.010-0.020c0.134 0.207 0.452 0.667 0.878 0.491 0.375-0.15 0.292-0.625 0.4-1.043 0.025-0.1 0.009-0.166 0.060-0.234v0.019c0.117 0.235 0.235 0.459 0.342 0.694 0.302 0.435 0.661 0.805 1.071 1.11l0.013 0.009c0.2 0.15 0.359 0.41 0.609 0.502v-0.025h-0.019c-0.057-0.062-0.12-0.117-0.189-0.164l-0.004-0.002c-0.155-0.152-0.299-0.316-0.429-0.489l-0.008-0.011c-0.326-0.44-0.636-0.938-0.905-1.461l-0.029-0.061c-0.137-0.262-0.252-0.545-0.362-0.804-0.050-0.1-0.050-0.25-0.134-0.3-0.148 0.166-0.281 0.351-0.392 0.55l-0.008 0.016c-0.128 0.373-0.212 0.804-0.234 1.251l-0 0.011c-0.034 0.009-0.017 0-0.034 0.018-0.267-0.065-0.359-0.342-0.459-0.575-0.136-0.366-0.215-0.79-0.215-1.231 0-0.356 0.051-0.7 0.147-1.025l-0.006 0.026c0.059-0.175 0.309-0.727 0.209-0.895-0.052-0.159-0.217-0.25-0.309-0.379-0.109-0.154-0.209-0.329-0.292-0.514l-0.008-0.020c-0.2-0.467-0.3-0.985-0.517-1.452-0.131-0.244-0.269-0.454-0.424-0.65l0.007 0.009c-0.165-0.191-0.317-0.404-0.449-0.63l-0.011-0.020c-0.041-0.091-0.1-0.242-0.034-0.342 0.012-0.058 0.058-0.103 0.117-0.112l0.001-0c0.11-0.090 0.419 0.027 0.527 0.077 0.317 0.12 0.59 0.261 0.843 0.427l-0.016-0.010c0.117 0.082 0.244 0.241 0.394 0.282h0.175c0.267 0.059 0.569 0.018 0.819 0.091 0.459 0.155 0.856 0.349 1.223 0.587l-0.021-0.013c1.104 0.713 1.988 1.677 2.586 2.816l0.020 0.041c0.1 0.192 0.144 0.369 0.235 0.569 0.175 0.412 0.391 0.829 0.569 1.227 0.169 0.428 0.369 0.798 0.607 1.139l-0.012-0.018c0.125 0.175 0.627 0.266 0.852 0.357 0.237 0.083 0.427 0.162 0.611 0.251l-0.037-0.016c0.287 0.175 0.567 0.375 0.837 0.567 0.137 0.095 0.554 0.304 0.579 0.472zM18.302 22.452c0 0.015 0.001 0.032 0.001 0.049 0 0.558-0.249 1.057-0.643 1.393l-0.003 0.002c-0.432 0.352-0.989 0.566-1.596 0.566-0.047 0-0.094-0.001-0.14-0.004l0.006 0c-0.739-0.010-1.419-0.25-1.976-0.651l0.010 0.007 0.296-0.595c0.429 0.24 0.939 0.389 1.481 0.41l0.006 0c0.027 0.002 0.058 0.003 0.090 0.003 0.332 0 0.641-0.104 0.894-0.281l-0.005 0.003c0.229-0.174 0.375-0.446 0.375-0.752 0-0.006-0-0.011-0-0.017v0.001c0-0.412-0.287-0.762-0.81-1.056-0.485-0.266-1.453-0.821-1.453-0.821-0.478-0.296-0.791-0.817-0.791-1.411 0-0.021 0-0.042 0.001-0.063l-0 0.003c-0.001-0.019-0.001-0.041-0.001-0.063 0-0.515 0.227-0.977 0.586-1.291l0.002-0.002c0.382-0.324 0.881-0.521 1.426-0.521 0.035 0 0.069 0.001 0.103 0.002l-0.005-0c0.009-0 0.020-0 0.031-0 0.639 0 1.234 0.191 1.73 0.52l-0.012-0.007-0.266 0.595c-0.391-0.176-0.847-0.282-1.327-0.287l-0.002-0c-0.024-0.002-0.051-0.003-0.079-0.003-0.28 0-0.538 0.098-0.74 0.262l0.002-0.002c-0.189 0.157-0.309 0.392-0.31 0.655v0c0 0.41 0.292 0.762 0.832 1.062 0.491 0.269 1.483 0.837 1.483 0.837 0.488 0.287 0.811 0.809 0.811 1.407 0 0.018-0 0.037-0.001 0.055l0-0.003zM20.374 22.983c-0.273-0.545-0.432-1.187-0.432-1.866 0-0.107 0.004-0.213 0.012-0.317l-0.001 0.014q0-2.611 1.587-2.612c0.026-0.002 0.057-0.003 0.089-0.003 0.475 0 0.892 0.248 1.129 0.622l0.003 0.005c0.271 0.542 0.43 1.182 0.43 1.858 0 0.104-0.004 0.207-0.011 0.309l0.001-0.014q0 2.632-1.587 2.634c-0.027 0.002-0.058 0.003-0.089 0.003-0.475 0-0.893-0.248-1.13-0.622l-0.003-0.005zM24.488 24.535l-1.27-0.625c0.116-0.097 0.22-0.199 0.316-0.309l0.003-0.003c0.513-0.692 0.821-1.563 0.821-2.505 0-0.109-0.004-0.217-0.012-0.324l0.001 0.014q0-3.43-2.693-3.432c-0.040-0.002-0.087-0.003-0.134-0.003-0.767 0-1.456 0.337-1.925 0.872l-0.002 0.003c-0.511 0.692-0.818 1.562-0.818 2.504 0 0.106 0.004 0.211 0.012 0.315l-0.001-0.014c-0.009 0.101-0.014 0.219-0.014 0.338 0 0.874 0.274 1.684 0.74 2.349l-0.009-0.013c0.449 0.478 1.086 0.776 1.791 0.776 0.066 0 0.131-0.003 0.195-0.008l-0.009 0.001c0.009 0 0.021 0 0.032 0 0.311 0 0.612-0.045 0.897-0.128l-0.022 0.006 1.656 0.965 0.45-0.777zM28.636 24.366h-3.287v-6.91h1.106v6.061h2.181zM13.235 19.268c-0.287 2.084-0.944 3.965-1.905 5.65l0.040-0.077c-0.385 0.741-1.113 1.257-1.968 1.34l-0.010 0.001c-0.259-0.014-0.5-0.076-0.719-0.177l0.012 0.005v-0.617c0.137 0.021 0.295 0.033 0.456 0.033 0.009 0 0.018-0 0.028-0h-0.001c0.016 0.001 0.034 0.001 0.052 0.001 0.289 0 0.554-0.105 0.758-0.28l-0.002 0.001c0.22-0.181 0.361-0.451 0.369-0.755l0-0.001c-0.053-0.438-0.154-0.837-0.299-1.214l0.012 0.034-1.267-3.944h1.137l0.909 2.949c0.162 0.416 0.256 0.898 0.256 1.401 0 0.001 0 0.002 0 0.002v-0c0.482-1.262 0.848-2.734 1.034-4.261l0.009-0.092zM8.215 24.366h-1.158q-0.049-2.761-0.337-5.511h-0.010l-1.762 5.511h-0.881l-1.75-5.511h-0.012q-0.205 2.751-0.244 5.511h-1.056q0.103-3.685 0.512-6.911h1.437l1.668 5.079h0.010l1.683-5.079h1.368q0.454 3.777 0.535 6.911zM21.505 7.879c-0.002 0-0.005-0-0.008-0-0.119 0-0.234 0.015-0.344 0.043l0.010-0.002v0.016h0.017c0.086 0.128 0.174 0.239 0.269 0.343l-0.002-0.002c0.067 0.134 0.125 0.267 0.192 0.4l0.017-0.019c0.109-0.086 0.178-0.218 0.178-0.366 0-0.018-0.001-0.035-0.003-0.053l0 0.002c-0.050-0.059-0.057-0.117-0.1-0.175-0.050-0.084-0.157-0.125-0.225-0.191z"></path>
                        </svg>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </article>
</main>