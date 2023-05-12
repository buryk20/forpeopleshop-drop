    <header data-header data-mob-menu class="header">
        <a href="{{ LaravelLocalization::localizeUrl('/') }}">
            <img class="header__logo" src="{{ asset('public/img/logo-header.png') }}" alt="LogicLink">
        </a>
        <div data-wrp-menu-mob class="header__wrp-r none">

            <div class="header__nav-wrp">
                <a data-nav-header class="header__nav-item" href="{{ LaravelLocalization::localizeUrl('/') }}#about-us">{{ __('messages.logic_header_aboutus') }}</a>
                <a data-nav-header class="header__nav-item" href="{{ LaravelLocalization::localizeUrl('/') }}#instruction">{{ __('messages.logic_header_instruction') }}</a>
                <!-- <a data-nav-header class="header__nav-item" href="{{ LaravelLocalization::localizeUrl('/') }}#storage">{{ __('messages.logic_header_storage') }}</a> -->
                <a data-nav-header class="header__nav-item" href="{{ LaravelLocalization::localizeUrl('/') }}#special-offer">{{ __('messages.logic_header_offer') }}</a>
                <a data-nav-header class="header__nav-item" href="{{ LaravelLocalization::localizeUrl('/') }}#payment">{{ __('messages.logic_header_cash') }}</a>
                <a data-nav-header class="header__nav-item" href="{{ LaravelLocalization::localizeUrl('/') }}#contacts">{{ __('messages.logic_header_contacts') }}</a>
            </div>
            @if ( Config::get('app.locale') == 'ua' )
            <div class="header__languages-wrp">
                <div data-languages-btn class="header__languages-menu-active-item-wrp ">
                    <p>UA</p>
                    <svg class="header__languages-menu-active-item-icon" width="10" height="7" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.70711 0.292893C1.31658 -0.097631 0.683417 -0.097631 0.292893 0.292893C-0.0976313 0.683417 -0.0976313 1.31658 0.292893 1.70711L1.70711 0.292893ZM5 5L4.29289 5.70711L5 6.41421L5.70711 5.70711L5 5ZM9.70711 1.70711C10.0976 1.31658 10.0976 0.683417 9.70711 0.292893C9.31658 -0.0976313 8.68342 -0.0976313 8.29289 0.292893L9.70711 1.70711ZM0.292893 1.70711L4.29289 5.70711L5.70711 4.29289L1.70711 0.292893L0.292893 1.70711ZM5.70711 5.70711L9.70711 1.70711L8.29289 0.292893L4.29289 4.29289L5.70711 5.70711Z" />
                    </svg>
                </div>
                <div data-languages-item-wrp class="header__languages-menu">
                    <div data-languages-item class="header__languages-menu-item">
                        <p><a href="{{ LaravelLocalization::getLocalizedURL('ru') }}">RU</a></p>
                    </div>
                </div>
            </div>
            @elseif ( Config::get('app.locale') == 'ru')
            <div class="header__languages-wrp">
                <div data-languages-btn class="header__languages-menu-active-item-wrp ">
                    <p>RU</p>
                    <svg class="header__languages-menu-active-item-icon" width="10" height="7" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.70711 0.292893C1.31658 -0.097631 0.683417 -0.097631 0.292893 0.292893C-0.0976313 0.683417 -0.0976313 1.31658 0.292893 1.70711L1.70711 0.292893ZM5 5L4.29289 5.70711L5 6.41421L5.70711 5.70711L5 5ZM9.70711 1.70711C10.0976 1.31658 10.0976 0.683417 9.70711 0.292893C9.31658 -0.0976313 8.68342 -0.0976313 8.29289 0.292893L9.70711 1.70711ZM0.292893 1.70711L4.29289 5.70711L5.70711 4.29289L1.70711 0.292893L0.292893 1.70711ZM5.70711 5.70711L9.70711 1.70711L8.29289 0.292893L4.29289 4.29289L5.70711 5.70711Z" />
                    </svg>
                </div>
                <div data-languages-item-wrp class="header__languages-menu">
                    <div data-languages-item class="header__languages-menu-item">
                        <p><a href="{{ LaravelLocalization::getLocalizedURL('ua') }}">UA</a></p>
                    </div>
                </div>
            </div>
            @endif
            <button data-color-switching-wrp class="header__color-change">
                <img data-btn-color-switching class="header__color-change-night active" src="{{ asset('public/icon/black-theme-icon.svg') }}" alt="black theme">
                <span class="header__color-change-circle"></span>
                <img data-btn-color-switching class="header__color-change-sun" src="{{ asset('public/icon/sun-header-icon.svg') }}" alt="sun">
            </button>
            <a class="header__phone" href="tel:+380800222333">
                <p>093 312 44 83</p>
            </a>
        </div>
        <div data-menu-mob-conteiner class="header-mob">
            <a href="{{ LaravelLocalization::localizeUrl('/') }}">
                <svg class="header-mob__logo-mob" width="112" height="80" viewBox="0 0 112 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="header-mob__logo-mob-svg-color" d="M9.7758 6.29626V25.0646H18.6227V28.4109H6.00781V6.29626H9.7758Z" fill="#ffffff" />
                    <path class="header-mob__logo-mob-svg-color" d="M23.0662 16.8832C23.7588 15.746 24.6987 14.8542 25.9025 14.216C27.098 13.5697 28.442 13.2506 29.9343 13.2506C31.4432 13.2506 32.7871 13.5697 33.9827 14.216C35.1699 14.8624 36.1099 15.746 36.8025 16.8832C37.495 18.0204 37.8413 19.3376 37.8413 20.8349C37.8413 22.3075 37.495 23.6248 36.8025 24.7702C36.1099 25.9156 35.1699 26.8155 33.9827 27.4537C32.7954 28.1 31.4432 28.4191 29.9343 28.4191C28.4502 28.4191 27.1063 28.1 25.9025 27.4537C24.6987 26.8074 23.7588 25.9156 23.0662 24.7702C22.3736 23.6248 22.0273 22.3075 22.0273 20.8349C22.0356 19.3376 22.3736 18.0204 23.0662 16.8832ZM26.1416 23.2239C26.5209 23.9111 27.0403 24.4429 27.6999 24.8356C28.3595 25.2283 29.1016 25.4165 29.9261 25.4165C30.7506 25.4165 31.5009 25.2201 32.1523 24.8356C32.8119 24.4429 33.3313 23.9111 33.7106 23.2239C34.0898 22.5366 34.2877 21.743 34.2877 20.8349C34.2877 19.9267 34.0981 19.1249 33.7106 18.4295C33.3313 17.7341 32.8119 17.1941 32.1523 16.8177C31.4927 16.4414 30.7506 16.245 29.9261 16.245C29.1016 16.245 28.3513 16.4332 27.6999 16.8177C27.0403 17.1941 26.5209 17.7341 26.1416 18.4295C25.7623 19.1249 25.5645 19.9267 25.5645 20.8349C25.5645 21.743 25.7623 22.5366 26.1416 23.2239Z" />
                    <path class="header-mob__logo-mob-svg-color" d="M42.2199 16.7605C42.8795 15.656 43.7534 14.8051 44.85 14.2161C45.9466 13.627 47.1174 13.3325 48.3707 13.3325C49.5992 13.3325 50.6793 13.6352 51.6027 14.2324C52.5262 14.8297 53.26 15.6887 53.7959 16.7932C54.3401 17.8977 54.6122 19.2395 54.6122 20.8185C54.6122 22.3812 54.3401 23.723 53.7959 24.8438C53.2517 25.9729 52.5262 26.8319 51.6027 27.4374C50.6793 28.0346 49.5992 28.3373 48.3707 28.3373C47.1174 28.3373 45.9466 28.0428 44.85 27.4537C43.7534 26.8647 42.8795 26.0138 42.2199 24.8929C41.5603 23.7802 41.2305 22.4139 41.2305 20.8185C41.2387 19.215 41.5685 17.865 42.2199 16.7605ZM44.9655 29.1637C44.9902 29.8182 45.1634 30.3991 45.5096 30.9145C45.8477 31.4299 46.3259 31.839 46.9443 32.1499C47.5627 32.4526 48.28 32.6081 49.1127 32.6081C49.8136 32.6081 50.4896 32.4363 51.1493 32.1008C51.8089 31.7654 52.3448 31.2499 52.757 30.5545C53.1693 29.8591 53.3754 28.9673 53.3754 27.871V13.6434H56.7476V27.8628C56.7476 29.6136 56.3931 31.0536 55.684 32.1908C54.975 33.328 54.0433 34.1789 52.8972 34.7353C51.7511 35.2916 50.5061 35.5698 49.1704 35.5698C47.5956 35.5698 46.2517 35.2998 45.1221 34.7598C44.0008 34.2198 43.1268 33.4671 42.5085 32.5017C41.8901 31.5363 41.5603 30.4154 41.519 29.1555H44.9655V29.1637ZM45.4107 23.2975C45.8147 23.9848 46.3506 24.5002 47.0185 24.8438C47.6863 25.1875 48.4119 25.3674 49.2034 25.3674C49.8795 25.3674 50.5391 25.1956 51.174 24.8438C51.8089 24.5002 52.3365 23.9848 52.7488 23.3139C53.161 22.643 53.3672 21.8085 53.3672 20.8185C53.3672 20.0822 53.2435 19.4359 53.0044 18.8713C52.757 18.315 52.4355 17.8405 52.0315 17.4478C51.6275 17.055 51.1822 16.7687 50.6958 16.5805C50.2093 16.3923 49.7064 16.2942 49.1952 16.2942C48.4119 16.2942 47.6863 16.466 47.0102 16.8178C46.3424 17.1614 45.8065 17.6768 45.4025 18.3477C44.9985 19.0186 44.8006 19.8449 44.8006 20.8104C44.8006 21.784 45.0067 22.6185 45.4107 23.2975Z" />
                    <path class="header-mob__logo-mob-svg-color" d="M60.3271 6.55813C60.7641 6.15723 61.2671 5.96088 61.836 5.96088C62.4544 5.96088 62.9738 6.15723 63.3943 6.55813C63.8148 6.95902 64.0292 7.44991 64.0292 8.04716C64.0292 8.61987 63.8148 9.10257 63.3943 9.51983C62.9656 9.92891 62.4461 10.1334 61.836 10.1334C61.2588 10.1334 60.7559 9.92891 60.3271 9.51983C59.8901 9.11076 59.6758 8.61987 59.6758 8.04716C59.6758 7.44991 59.8901 6.95902 60.3271 6.55813ZM63.5592 13.8233V28.3618H60.154V13.8233H63.5592Z" />
                    <path class="header-mob__logo-mob-svg-color" d="M64.5854 49.601C65.0718 49.151 65.6325 48.9301 66.2756 48.9301C66.9682 48.9301 67.5453 49.151 68.0236 49.601C68.5018 50.051 68.7326 50.6073 68.7326 51.2618C68.7326 51.9 68.4935 52.4482 68.0236 52.9063C67.5453 53.3645 66.9682 53.5936 66.2756 53.5936C65.6325 53.5936 65.0718 53.3645 64.5854 52.9063C64.0989 52.4482 63.8516 51.9 63.8516 51.2618C63.8516 50.6073 64.0907 50.051 64.5854 49.601ZM68.1967 57.7334V73.9982H64.3875V57.7334H68.1967Z" />
                    <path class="header-mob__logo-mob-svg-color" d="M71.1082 23.1748C71.5122 23.8702 72.0564 24.4184 72.749 24.8193C73.4415 25.2202 74.2083 25.4165 75.0576 25.4165C75.7831 25.4165 76.451 25.302 77.0776 25.0811C77.7042 24.8602 78.2566 24.5656 78.7513 24.1975C79.2378 23.8293 79.6006 23.4121 79.8314 22.9457V26.7092C79.3203 27.2165 78.6359 27.6173 77.7619 27.9119C76.888 28.2064 75.9315 28.3537 74.8927 28.3537C73.4086 28.3537 72.0646 28.0346 70.8608 27.3883C69.6571 26.7419 68.7089 25.8501 68.0081 24.7047C67.3072 23.5593 66.9609 22.2421 66.9609 20.7694C66.9609 19.2722 67.3155 17.955 68.0081 16.8178C68.7089 15.6805 69.6571 14.7888 70.8608 14.1506C72.0564 13.5043 73.4003 13.1852 74.8927 13.1852C75.9315 13.1852 76.888 13.3324 77.7619 13.627C78.6359 13.9215 79.3203 14.3142 79.8314 14.7969V18.5932C79.6006 18.1104 79.2296 17.685 78.7349 17.3168C78.2319 16.9487 77.6712 16.6623 77.0281 16.4496C76.3933 16.2369 75.7337 16.1305 75.0576 16.1305C74.2083 16.1305 73.4415 16.3269 72.749 16.7278C72.0564 17.1287 71.5122 17.6768 71.1082 18.3723C70.7042 19.0677 70.5063 19.8695 70.5063 20.7776C70.5063 21.6858 70.7042 22.4794 71.1082 23.1748Z" />
                    <path class="header-mob__logo-mob-svg-color" d="M60.4238 46.2712V74.0392H56.5156V46.2712H60.4238Z" />
                    <path class="header-mob__logo-mob-svg-color" d="M81.9935 61.3251C81.4905 60.7115 80.7237 60.4006 79.7013 60.4006C78.9593 60.4006 78.3162 60.5479 77.7637 60.8424C77.2113 61.1369 76.7908 61.5624 76.494 62.1269C76.1972 62.6832 76.0488 63.3296 76.0488 64.0659V74.031H72.1406V57.6598H76.0488V60.1879C76.5765 59.2143 77.2526 58.4943 78.0771 58.0198C78.9016 57.5452 79.8745 57.308 81.004 57.308C82.8674 57.308 84.2938 57.8725 85.275 59.0016C86.2561 60.1306 86.7426 61.6687 86.7426 63.6077V74.0392H82.7602V64.0659C82.7438 62.8632 82.4964 61.9469 81.9935 61.3251Z" />
                    <path class="header-mob__logo-mob-svg-color" d="M94.4416 46.2712V74.0392H90.6406V46.2712H94.4416ZM105.276 57.6598L98.1354 64.4259L105.993 74.0392H101.26L93.4027 64.4259L100.51 57.6598H105.276Z" />
                    <path d="M52.459 56.0235H16.1891C11.7862 56.0235 8.19141 52.6118 8.19141 48.4475C8.19141 46.3612 9.09012 44.4712 10.5412 43.0967C11.9924 41.7223 13.9959 40.8714 16.2138 40.8714H53.1516H96.5453C98.7467 40.8714 100.742 40.0205 102.193 38.646C103.644 37.2715 104.543 35.3734 104.543 33.2871C104.543 29.1146 100.948 25.7111 96.5453 25.7111H83.246" stroke="#0A0A0A" stroke-width="4.52704" stroke-miterlimit="10" />
                    <path d="M52.459 56.0235H16.1891C11.7862 56.0235 8.19141 52.6118 8.19141 48.4475C8.19141 46.3612 9.09012 44.4712 10.5412 43.0967C11.9924 41.7223 13.9959 40.8714 16.2138 40.8714H53.1516H96.5453C98.7467 40.8714 100.742 40.0205 102.193 38.646C103.644 37.2715 104.543 35.3734 104.543 33.2871C104.543 29.1146 100.948 25.7111 96.5453 25.7111H83.246" stroke="#FBF9F9" stroke-width="0.646722" stroke-miterlimit="10" stroke-dasharray="3.88 3.88" />
                </svg>

            </a>
            <div data-mob-menu-btn class="header-mob__mob-menu">
                <span class="header-mob__mob-menu-line header-mob__mob-menu-line-r-t"></span>
                <span class="header-mob__mob-menu-line header-mob__mob-menu-line-r-d"></span>
                <span class="header-mob__mob-menu-line header-mob__mob-menu-line-l-t"></span>
                <span class="header-mob__mob-menu-line header-mob__mob-menu-line-l-d"></span>
            </div>
        </div>
        <div class="line__wrp">
            <div class="line"></div>
        </div>
    </header>


    <div data-pop-up-form-wrp class="pop-up-form__wrp">
        <form data-pop-up-form class="pop-up-form" method="POST" action="sendmail.php">
            <div data-pop-up-btn-close class="pop-up-form__btn-wrp">
                <span class="pop-up-form__btn-line pop-up-form__btn-line-r"></span>
                <span class="pop-up-form__btn-line pop-up-form__btn-line-l"></span>
            </div>
            <p class="pop-up-form__form-header">{{ __('messages.logic_popup_leaveyourcontacts') }}</p>
            <div class="pop-up-form__form-input-wrp">
                <input class="pop-up-form__form-input" name="UserName" id="UserName" type="text" required placeholder="{{ __('messages.logic_popup_name') }}">
                <label class="pop-up-form__form-label">{{ __('messages.logic_popup_name') }}</label>
                <p class="pop-up-form__form-input-error">{{ __('messages.logic_popup_enteryourname') }}</p>
            </div>
            <div class="pop-up-form__form-input-wrp">
                <input class="pop-up-form__form-input" name="UserEmail" id="UserEmail" type="email" placeholder="* E-mail">
                <label class="pop-up-form__form-label">* E-mail</label>
                <p class="pop-up-form__form-input-error">{{ __('messages.logic_popup_wrongemail') }}</p>
            </div>
            <div class="pop-up-form__form-input-wrp">
                <input class="pop-up-form__form-input" name="PhoneNumber" id="PhoneNumber" type="tel" placeholder="{{ __('messages.logic_popup_phone') }}">
                <label class="pop-up-form__form-label">{{ __('messages.logic_popup_phone') }}</label>
                <p class="pop-up-form__form-input-error">{{ __('messages.logic_popup_wrongphone') }}</p>
            </div>
            <div class="pop-up-form__form-input-wrp">
                <input class="pop-up-form__form-input" name="Comment" id="Comment" type="text" placeholder="{{ __('messages.logic_popup_comment') }}">
                <label class="pop-up-form__form-label">{{ __('messages.logic_popup_comment') }}</label>
                <p class="pop-up-form__form-input-error">{{ __('messages.logic_popup_toobigcomment') }}</p>
            </div>
            <label class="pop-up-form__form-checkbox-wrp">
                {{ __('messages.logic_popup_iagreewith') }}<a class="pop-up-form__form-checkbox-link" href="https://logiclink.com.ua/files/privacy-policy.pdf">{{ __('messages.logic_popup_policylink') }}</a>
                <input class="pop-up-form__form-checkbox" type="checkbox" checked="checked">
                <span class="pop-up-form__form-fake-checkbox"></span>
            </label>
            <button class="pop-up-form__form-btn">{{ __('messages.logic_popup_button') }}</button>
        </form>
    </div>