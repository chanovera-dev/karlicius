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
            <div class="logos">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Windows.svg" alt="Windows Logo" width="122">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/RedHat.svg" alt="Red Hat Logo" width="128">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/macOS.svg" alt="macOS Logo" width="66">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Wordpress.svg" alt="Wordpress Logo" width="164">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Woocommerce.svg" alt="Woocommerce Logo" width="161">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/html.svg" alt="HTML Logo" width="32">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/css.svg" alt="CSS Logo" width="32">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Javascript.svg" alt="Javascript Logo" width="32">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/php.svg" alt="PHP Logo" width="58">
            </div>
        </div>
    </article>
</main>