<template>
    <nav class="navbar navbar-expand-lg navbar-dark py-3 px-1">
        <div class="container-fluid container-md">
            <div class="d-flex w-100 justify-content-between">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <img src="images/icons/navbar-toggler.svg" alt="Navigācija">
                </button>
                <div class="d-flex align-items-center">
                    <a href="/">
                        <img src="images/logo.svg" alt="LMT logo">
                    </a>
                </div>
                <div class="d-md-none d-flex align-items-center">
                    <img src="images/icons/account.svg" class="account-icon" alt="Ikona - mants konts">
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navigation">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">
                            <img src="images/icons/search.svg" alt="Meklēt">
                            <span>Meklēt</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <img src="images/icons/book.svg" alt="Meklēt">
                            <span>Palīdzība</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <img src="images/icons/account.svg" class="account-icon" alt="Meklēt">
                            <span>Autorizēties</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>
