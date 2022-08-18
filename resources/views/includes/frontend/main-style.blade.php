<style>
    :root {
        /* main color palette */
        --primary-color: #6a3093;
        --secondary-color: #c8238b;
        --primary-text-color: #251d3a;
        --secondary-text-color: #7882a4;

        /* font style */
        --header-text: 500 32px/2.25rem Poppins, sans-serif;
        --title-text: 500 28px/1.5rem Poppins, sans-serif;
        --subtitle-text: 400 24px/1.5rem Poppins, sans-serif;
        --body-text: 300 16px/1.5rem Poppins, sans-serif;

        --light-text: 300 Poppins, sans-serif;
        --regular-text: 400 Poppins, sans-serif;
        --medium-text: 500 Poppins, sans-serif;
        --semibold-text: 600 Poppins, sans-serif;
    }


    .fs-48 {
        font-size: 48px;
    }

    .fs-36 {
        font-size: 36px;
    }

    .fs-24 {
        font-size: 24px;
    }

    .fs-18 {
        font-size: 18px;
    }

    .fs-16 {
        font-size: 16px;
    }

    .fs-sm-48 {
        font-size: 48px;
    }

    .fs-sm-36 {
        font-size: 36px;
    }

    .fs-sm-24 {
        font-size: 24px;
    }

    .fs-sm-18 {
        font-size: 18px;
    }

    .grey-color {
        color: #7882a4 !important;
    }

    .purple-color {
        color: #6a3093 !important;
    }


    .border-grey {
        border: 1px solid #7882a4;
        border-radius: 15px;
        height: 60px;
    }

    .border-text-area {
        border: 1px solid #7882a4;
        border-radius: 15px;
        height: 120px;
    }

    .regular-text {
        font-family: Poppins, sans-serif;
        font-weight: 400;
    }

    .medium-text {
        font-family: Poppins, sans-serif;
        font-weight: 500;
    }

    .semibold-text {
        font-family: Poppins, sans-serif;
        font-weight: 600;
    }

    .purple-text {
        font: var(--header-text);
        color: var(--primary-color);
    }

    .header-text {
        font: var(--header-text);
    }

    .title-text {
        font: var(--body-text);
        text-align: justify;
    }

    .college-information {
        background: linear-gradient(144.46deg,
                rgba(249, 249, 249, 0.15) -4.67%,
                rgba(249, 249, 249, 0.1) 102.1%);
        box-shadow: 16px 27px 30px -22px rgba(106, 48, 147, 0.2);
        backdrop-filter: blur(20px);
        /* Note: backdrop-filter has minimal browser support */

        border-radius: 15px;
    }

    @media (min-width: 280px) and (max-width: 576px) {
        .purple-text {
            font: 500 24px/1.75rem Poppins, sans-serif;
        }

        .header-text {
            font: 500 24px/1.5rem Poppins, sans-serif;
            text-align: center;
        }

        .title-text {
            font: 300 12px/1.25rem Poppins, sans-serif;
            text-align: center;
        }

        .fs-24 {
            font-size: 18px;
        }
    }

    .navbar-main .modal-item.modal {
        top: 2rem;
    }

    .navbar-main .hero {
        padding: 2.5rem 2rem 5rem;
    }

    .navbar-main .navbar-light .navbar-nav .nav-link {
        font: var(--body-text);
        color: black;
    }

    .navbar-main .navbar-light .navbar-nav .nav-link.active {
        color: var(--primary-color);
    }

    .navbar-main .navbar-light .navbar-nav .nav-link:hover {
        font: var(--body-text);
        color: var(--primary-color);
    }

    .navbar-main .navbar-light .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(0, 0, 0, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    .navbar-main .modal-content .modal-header,
    .navbar-main .modal-content .modal-footer,
    .navbar-main .navbar-light .navbar-toggler {
        border: none;
    }

    .navbar-main .btn:focus,
    .navbar-main .btn:active {
        outline: none !important;
    }

    .navbar-main .modal-item .modal-dialog .modal-content {
        border-radius: 8px;
    }

    .navbar-main .responsive li a {
        padding: 1rem;
    }

    .navbar-main .text-caption {
        font: 500 0.875rem/1.25rem Poppins, sans-serif;
        margin-bottom: 0.25rem;
        color: #52bd95;
    }

    .navbar-main .left-column {
        margin-bottom: 0;
        width: 100%;
    }

    .navbar-main .right-column {
        width: 100%;
    }

    .navbar-main .title-text-big {
        font: 700 2.25rem/2.5rem Poppins, sans-serif;
        margin-bottom: 3rem;
        color: #0e2f3e;
    }

    .navbar-main .icon-list {
        margin-bottom: 1.5rem;
    }

    .navbar-main .icon-item {
        margin-bottom: 2rem;
    }

    .navbar-main .icon-item-title {
        font: 600 0.875rem/1.25rem Poppins, sans-serif;
        font-weight: 600;
        margin-bottom: 0.25rem;
        color: #2a3759;
    }

    .navbar-main .icon-item-caption {
        font-size: 0.75rem;
        line-height: 1rem;
        margin-bottom: 1rem;
        color: #8283b9;
    }

    .navbar-main .card-container {
        z-index: 999;
    }

    .navbar-main .card-item {
        padding: 1rem 1.25rem 1.75rem;
        border-top-left-radius: 1.5rem;
        border-bottom-right-radius: 1.5rem;
        transition: 0.4s;
        top: 0px;
        left: 0px;
        position: relative;
    }

    .navbar-main .card-item:hover {
        box-shadow: -4px 4px 10px 0px rgba(224, 224, 224, 0.25);
        top: -3px;
        left: 3px;
        transition: 0.4s;
        position: relative;
    }

    .navbar-main .card-header-title {
        font: 500 0.875rem/1.25rem Poppins, sans-serif;
        color: #132247;
        margin-bottom: 1px;
    }

    .navbar-main .card-header-caption {
        font: 500 0.75rem/1rem Poppins, sans-serif;
        color: #a5a6cd;
        margin-bottom: 0;
    }

    .navbar-main .card-doctor-name {
        font: 500 0.75rem/1rem Poppins, sans-serif;
        margin-bottom: 0.25rem;
        color: #132247;
    }

    .navbar-main .card-doctor-status {
        font: 500 0.625rem/1rem Poppins, sans-serif;
        color: #a5a6cd;
        margin-bottom: 0;
    }

    .navbar-main .btn-card-item {
        font: 600 0.75rem/1rem Poppins, sans-serif;
        background-color: #e5fff5;
        color: #52bd95;
        transition: 0.3s;
        padding: 0.625rem 3.5rem;
        border-radius: 0.5rem;
    }

    .navbar-main .btn-card-item:hover {
        background-color: #52bd95;
        color: #ffffff;
        transition: 0.3s;
    }

    .navbar-main .navbar .nav-item .dropdown-menu {
        margin-top: 0;
        width: 250px;
        --tw-shadow: 0 0px 20px 0 rgba(167, 167, 167, 0.1),
            0 0px 20px 0 rgba(167, 167, 167, 0.06);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 rgba(167, 167, 167, 0)),
            var(--tw-ring-shadow, 0 0 rgba(167, 167, 167, 0)), var(--tw-shadow);
        border: none;
        border-radius: 0.75rem;
        padding: 1rem;
    }

    .navbar-main .dropdown-hover {
        height: 100%;
        padding: 0.5rem;
    }

    .navbar-main .dropdown-hover:hover {
        background-color: #e5fff5;
        border-radius: 0.75rem;
    }

    @media (min-width: 375px) {
        .navbar-main .navbar .nav-item .dropdown-menu {
            width: 310px;
        }

        .navbar-main .dropdown-hover:hover .dropdown-icon-arrow {
            display: block !important;
        }
    }

    @media (min-width: 576px) {
        .navbar-main .modal-item .modal-dialog {
            max-width: 95%;
            border-radius: 12px;
        }

        /* .navbar-main .navbar {
          padding: 3.5rem 2rem 2.5rem;
      } */

        .navbar-main .hero {
            padding: 2.5rem 2rem 5rem;
        }

        .navbar-main .title-text-big {
            font-size: 3rem;
            line-height: 1.2;
        }

        .navbar-main .icon-list {
            margin-bottom: 1.25rem;
        }

        .navbar-main .icon-item {
            width: 50%;
            margin-bottom: 2.75rem;
        }

        .navbar-main .dropdown-hover {
            padding: 1rem;
        }

        .navbar-main .navbar .nav-item .dropdown-menu {
            padding: 1.5rem;
        }
    }

    @media (min-width: 768px) {
        /* .navbar-main .navbar {
          padding: 3.5rem 6rem 2.5rem;
      } */

        .navbar-main .hero {
            padding: 2.5rem 4rem 5rem;
        }

        .navbar-main .left-column {
            margin-bottom: 3rem;
        }
    }

    @media (min-width: 992px) {

        /* .navbar-main .navbar-expand-lg .navbar-nav .nav-link {
          padding-right: 1.5rem;
          padding-left: 1.5rem;
      }
  */
        .navbar-main .navbar-expand-lg .navbar-nav {
            margin-right: 4rem;
        }

        /* .navbar-main .navbar {
          padding: 3.5rem 6rem 2.5rem;
      } */

        .navbar-main .hero {
            padding: 2.5rem 6rem 5rem;
        }

        .navbar-main .left-column {
            width: 50%;
            margin-bottom: 0;
        }

        .navbar-main .right-column {
            width: 50%;
        }

        .navbar-main .card-container {
            bottom: 10rem;
            right: 5rem;
            position: absolute !important;
        }

        .navbar-main .navbar .nav-item:hover .nav-link {
            color: #7f31ff;
        }

        .navbar-main .navbar .nav-item:hover .dropdown-menu {
            display: block;
        }

        .navbar-main .dropdown-toggle::after,
        .navbar-main .navbar .nav-item .dropdown-menu {
            display: none;
        }

        .navbar-main .dropdown:hover .dropdown-icon-drop {
            display: none !important;
        }

        .navbar-main .dropdown:hover .dropdown-icon-close {
            display: block !important;
        }
    }

    @media (min-width: 1200px) {
        /* .navbar-main .navbar {
          padding: 3.5rem 10rem 2.5rem;
      } */

        .navbar-main .hero {
            padding: 2.5rem 10rem 5rem;
        }
    }
</style>
