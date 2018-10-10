<nav class="navbar navbar-expand-lg navbar-light bg-faded header-navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" data-toggle="collapse" class="navbar-toggle d-lg-none float-left">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <span class="d-lg-none navbar-right navbar-collapse-toggle">
                <a aria-controls="navbarSupportedContent" href="javascript:;" class="open-navbar-container black">
                    <i class="ft-more-vertical"></i>
                </a>
            </span>
            <form role="search" class="navbar-form navbar-right mt-1">
                <div class="position-relative has-icon-right">
                    <input type="text" placeholder="جستجو" class="form-control round"/>
                    <div class="form-control-position"><i class="ft-search"></i></div>
                </div>
            </form>
        </div>
        <div class="navbar-container">
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item mr-2 d-none d-lg-block">
                        <a id="navbar-fullscreen" href="javascript:;" class="nav-link apptogglefullscreen">
                            <i class="ft-maximize font-medium-3 blue-grey darken-4"></i>
                            <p class="d-none">fullscreen</p>
                        </a>
                    </li>
                    <li class="dropdown nav-item">
                        <a id="dropdownBasic3" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-toggle">
                            <i class="ft-flag font-medium-3 blue-grey darken-4"></i>
                            <span class="selected-language d-none"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right text-left">
                            <a href="javascript:;" class="dropdown-item py-1">
                                <img src="app-assets/img/flags/us.png" class="langimg"/>
                                <span> انگلیسی</span>
                            </a>
                            <a href="javascript:;" class="dropdown-item py-1">
                                <img src="app-assets/img/flags/es.png" class="langimg"/>
                                <span> اسپانیایی</span>
                            </a>
                            <a href="javascript:;" class="dropdown-item py-1">
                                <img src="app-assets/img/flags/br.png" class="langimg"/>
                                <span> ژاپنی</span>
                            </a>
                            <a href="javascript:;" class="dropdown-item">
                                <img src="app-assets/img/flags/de.png" class="langimg"/>
                                <span> فرانسوی</span>
                            </a>
                        </div>
                    </li>
                    <li class="dropdown nav-item">
                        <a id="dropdownBasic2" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-toggle">
                            <i class="ft-bell font-medium-3 blue-grey darken-4"></i>
                            <span class="notification badge badge-pill badge-danger">4</span>
                            <p class="d-none">گزارشات سایت</p>
                        </a>
                        <div class="notification-dropdown dropdown-menu dropdown-menu-right">
                            <div class="noti-list">
                                <a class="dropdown-item noti-container py-3 border-bottom border-bottom-blue-grey border-bottom-lighten-4">
                                    <i class="ft-bell info float-left d-block font-large-1 mt-1 mr-2"></i>
                                    <span class="noti-wrapper">
                                        <span class="noti-title line-height-1 d-block text-bold-400 info">سفارش جدید دریافت شده سات</span>
                                        <span class="noti-text">متن اطلاعات سفارش در این قسمت </span>
                                    </span>
                                </a>
                                <a class="dropdown-item noti-container py-3 border-bottom border-bottom-blue-grey border-bottom-lighten-4">
                                    <i class="ft-bell warning float-left d-block font-large-1 mt-1 mr-2"></i>
                                    <span class="noti-wrapper">
                                        <span class="noti-title line-height-1 d-block text-bold-400 warning">یک کاربر جدید ثبت نام کرده است</span>
                                        <span class="noti-text">اطلاعات در مورد عنوان مورد نظر </span>
                                    </span>
                                </a>
                                <a class="dropdown-item noti-container py-3 border-bottom border-bottom-blue-grey border-bottom-lighten-4">
                                    <i class="ft-bell danger float-left d-block font-large-1 mt-1 mr-2"></i>
                                    <span class="noti-wrapper">
                                        <span class="noti-title line-height-1 d-block text-bold-400 info">سفارش جدید دریافت شده سات</span>
                                        <span class="noti-text">متن اطلاعات سفارش در این قسمت </span>
                                    </span>
                                </a>
                                <a class="dropdown-item noti-container py-3">
                                    <i class="ft-bell success float-left d-block font-large-1 mt-1 mr-2"></i>
                                    <span class="noti-wrapper">
                                        <span class="noti-title line-height-1 d-block text-bold-400 info">سفارش جدید دریافت شده سات</span>
                                        <span class="noti-text">متن اطلاعات سفارش در این قسمت </span>
                                    </span>
                                </a>
                            </div>
                            <a class="noti-footer primary text-center d-block border-top border-top-blue-grey border-top-lighten-4 text-bold-400 py-1">Read All Notifications</a>
                        </div>
                    </li>
                    <li class="dropdown nav-item">
                        <a id="dropdownBasic3" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-toggle">
                            <i class="ft-user font-medium-3 blue-grey darken-4"></i>
                            <p class="d-none">مدیریت</p>
                        </a>
                        <div ngbdropdownmenu="" aria-labelledby="dropdownBasic3" class="dropdown-menu text-left dropdown-menu-right">
                            <a href="javascript:;" class="dropdown-item py-1">
                                <i class="ft-settings mr-2"></i>
                                <span>تنظیمات سایت</span>
                            </a>
                            <a href="javascript:;" class="dropdown-item py-1">
                                <i class="ft-edit mr-2"></i>
                                <span>ویرایش پروفایل</span>
                            </a>
                            <a href="javascript:;" class="dropdown-item py-1">
                                <i class="ft-mail mr-2"></i>
                                <span>صندوق ورودی</span>
                            </a>
                            <div class="dropdown-divider">

                            </div><a href="javascript:;" class="dropdown-item">
                                <i class="ft-power mr-2"></i>
                                <span>خروج از سایت</span>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                        <a href="javascript:;" class="nav-link position-relative notification-sidebar-toggle">
                            <i class="ft-align-left font-medium-3 blue-grey darken-4"></i>
                            <p class="d-none">Notifications Sidebar</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>


<!--4top-header-->