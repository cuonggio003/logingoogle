<header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
        <div class="mdl-layout-spacer"></div>
       
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
                <i class="material-icons">search</i>
            </label>

            <div class="mdl-textfield__expandable-holder">
                <input class="mdl-textfield__input" type="text" id="search"/>
                <label class="mdl-textfield__label" for="search">Enter your query...</label>
            </div>
        </div>

        <div class="material-icons mdl-badge mdl-badge--overlap mdl-button--icon notification" id="notification"
             data-badge="23">
            notifications_none
        </div>
        
        <ul class="mdl-menu mdl-list mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right mdl-shadow--2dp notifications-dropdown"
            for="notification">
            <li class="mdl-list__item">
                You have 23 new notifications!
            </li>
            <li class="mdl-menu__item mdl-list__item list__item--border-top">
                <span class="mdl-list__item-primary-content">
                    <span class="mdl-list__item-avatar background-color--primary">
                        <i class="material-icons">plus_one</i>
                    </span>
                    <span>You have 3 new orders.</span>
                </span>
                <span class="mdl-list__item-secondary-content">
                  <span class="label">just now</span>
                </span>
            </li>
            <li class="mdl-menu__item mdl-list__item list__item--border-top">
                <span class="mdl-list__item-primary-content">
                    <span class="mdl-list__item-avatar background-color--secondary">
                        <i class="material-icons">error_outline</i>
                    </span>
                  <span>Database error</span>
                </span>
                <span class="mdl-list__item-secondary-content">
                  <span class="label">1 min</span>
                </span>
            </li>
            <li class="mdl-menu__item mdl-list__item list__item--border-top">
                <span class="mdl-list__item-primary-content">
                    <span class="mdl-list__item-avatar background-color--primary">
                        <i class="material-icons">new_releases</i>
                    </span>
                  <span>The Death Star is built!</span>
                </span>
                <span class="mdl-list__item-secondary-content">
                  <span class="label">2 hours</span>
                </span>
            </li>
            <li class="mdl-menu__item mdl-list__item list__item--border-top">
                <span class="mdl-list__item-primary-content">
                    <span class="mdl-list__item-avatar background-color--primary">
                        <i class="material-icons">mail_outline</i>
                    </span>
                  <span>You have 4 new mails.</span>
                </span>
                <span class="mdl-list__item-secondary-content">
                  <span class="label">5 days</span>
                </span>
            </li>
            <li class="mdl-list__item list__item--border-top">
                <button href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect">ALL NOTIFICATIONS</button>
            </li>
        </ul>

        <div class="material-icons mdl-badge mdl-badge--overlap mdl-button--icon message" id="inbox" data-badge="4">
            mail_outline
        </div>
        
        <ul class="mdl-menu mdl-list mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right mdl-shadow--2dp messages-dropdown"
            for="inbox">
            <li class="mdl-list__item">
                You have 4 new messages!
            </li>
            <li class="mdl-menu__item mdl-list__item mdl-list__item--two-line list__item--border-top">
                <span class="mdl-list__item-primary-content">
                    <span class="mdl-list__item-avatar background-color--primary">
                        <a>A</a>
                    </span>
                    <span>Alice</span>
                    <span class="mdl-list__item-sub-title">Birthday Party</span>
                </span>
                <span class="mdl-list__item-secondary-content">
                  <span class="label label--transparent">just now</span>
                </span>
            </li>
            <li class="mdl-menu__item mdl-list__item mdl-list__item--two-line list__item--border-top">
                <span class="mdl-list__item-primary-content">
                    <span class="mdl-list__item-avatar background-color--baby-blue">
                        <a>M</a>
                    </span>
                    <span>Mike</span>
                    <span class="mdl-list__item-sub-title">No theme</span>
                </span>
                <span class="mdl-list__item-secondary-content">
                  <span class="label label--transparent">5 min</span>
                </span>
            </li>
            <li class="mdl-menu__item mdl-list__item mdl-list__item--two-line list__item--border-top">
                <span class="mdl-list__item-primary-content">
                    <span class="mdl-list__item-avatar background-color--cerulean">
                        <text>D</text>
                    </span>
                    <span>Darth</span>
                    <span class="mdl-list__item-sub-title">Suggestion</span>
                </span>
                <span class="mdl-list__item-secondary-content">
                  <span class="label label--transparent">23 hours</span>
                </span>
            </li>
            <li class="mdl-menu__item mdl-list__item mdl-list__item--two-line list__item--border-top">
                <span class="mdl-list__item-primary-content">
                    <span class="mdl-list__item-avatar background-color--mint">
                        <text>D</text>
                    </span>
                    <span>Don McDuket</span>
                    <span class="mdl-list__item-sub-title">NEWS</span>
                </span>
                <span class="mdl-list__item-secondary-content">
                  <span class="label label--transparent">30 Nov</span>
                </span>
            </li>
            <li class="mdl-list__item list__item--border-top">
                <button href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect">SHOW ALL MESSAGES</button>
            </li>
        </ul>

        <div class="avatar-dropdown" id="icon">
            <span>Note</span>
            <img src="images/admin.jpg">
        </div>
       
        <ul class="mdl-menu mdl-list mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect mdl-shadow--2dp account-dropdown"
            for="icon">
            <li class="mdl-list__item mdl-list__item--two-line">
                <span class="mdl-list__item-primary-content">
                    <span src="images/admin.jpg"></span>
                    <span>Note</span>
                    <span class="mdl-list__item-sub-title">admin@gmail.com</span>
                </span>
            </li>
            <li class="list__item--border-top"></li>
            <li class="mdl-menu__item mdl-list__item">
                <span class="mdl-list__item-primary-content">
                    <i class="material-icons mdl-list__item-icon">account_circle</i>
                    My account
                </span>
            
            <a href="{{ route('login') }}">
                <li class="mdl-menu__item mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                        <i class="material-icons mdl-list__item-icon text-color--secondary">exit_to_app</i>
                        Log out
                    </span>
            </a>
            <li > 
                <a  class="btn btn-secondary" href="{{ route('change.form')}}">
                    <i class="bi bi-arrow-clockwise"></i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"></path>
                        <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"></path>
                    </svg>
                    reset password
                </a>    

            </li>
        </ul>
    </div>
</header>
