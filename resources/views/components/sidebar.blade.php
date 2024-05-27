<nav class="nav">

    <div class="nav__container">

        <h1 class="nav__title">Sistema de Gestion de Recursos</h1>

        <a href="#menu" class="nav__menu">
            <img src="{{ asset('img/menu.svg') }}" class="nav__icon">
        </a>

        <a href="#" class="nav__menu nav__menu--second">
            <img src="{{ asset('img/close.svg') }}" class="nav__icon ">
        </a>

        <ul class="dropdown" id="menu">

            <li class="dropdown__list">
                <a href="#" class="dropdown__link">
                    <img src="{{ asset('img/house.svg') }}" class="dropdown__icon">
                    <span class="dropdown__span">Inicio</span>
                </a>
            </li>

            <li class="dropdown__list">
                <a href="#" class="dropdown__link">
                    <img src="{{ asset('img/projects.svg') }}" class="dropdown__icon">
                    <span class="dropdown__span">Projects</span>
                    <img src="{{ asset('img/down.svg') }}" class="dropdown__arrow">

                    <input type="checkbox" class="dropdown__check">
                </a>

                <div class="dropdown__content">

                    <ul class="dropdown__sub">

                        <li class="dropdown__li">
                            <a href="#" class="dropdown__anchor">Project 1</a>
                        </li>
                        <li class="dropdown__li">
                            <a href="#" class="dropdown__anchor">Project 2</a>
                        </li>
                        <li class="dropdown__li">
                            <a href="#" class="dropdown__anchor">Project 3</a>
                        </li>

                    </ul>

                </div>
            </li>

            <li class="dropdown__list">
                <a href="#" class="dropdown__link">
                    <img src="{{ asset('img/email.svg') }}" class="dropdown__icon">
                    <span class="dropdown__span">Contacto</span>
                    <img src="{{ asset('img/down.svg') }}" class="dropdown__arrow">

                    <input type="checkbox" class="dropdown__check">
                </a>

                <div class="dropdown__content">

                    <ul class="dropdown__sub">

                        <li class="dropdown__li">
                            <a href="#" class="dropdown__anchor">Contact 1</a>
                        </li>
                        <li class="dropdown__li">
                            <a href="#" class="dropdown__anchor">Contact 2</a>
                        </li>


                    </ul>

                </div>
            </li>

            <li class="dropdown__list">
                <a href="#" class="dropdown__link">
                    <img src="{{ asset('img/help.svg') }}" class="dropdown__icon">
                    <span class="dropdown__span">Ayuda</span>
                </a>
            </li>

        </ul>

    </div>

</nav>
