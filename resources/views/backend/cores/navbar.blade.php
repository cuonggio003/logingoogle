<div class="mdl-layout__drawer">
    <header>Inote</header>
    <div class="scroll__wrapper" id="scroll__wrapper">
        <div class="scroller" id="scroller">
            <div class="scroll__container" id="scroll__container">
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link mdl-navigation__link--current" href="{{ route('home') }}">
                        <i class="material-icons" role="presentation">Home page</i>
                        Home page
                    </a>
                    <div class="sub-navigation">
                        <a class="mdl-navigation__link" href="{{ route('show.note') }}">
                            <i class="material-icons">view_comfy</i>
                            List note
                            <i class="material-icons"></i>
                        </a>
                    </div>
                    <a class="mdl-navigation__link" href="ui-components.html">
                        <i class="material-icons">developer_board</i>
                        Components
                    </a>
                    <a class="mdl-navigation__link" href="forms.html">
                        <i class="material-icons" role="presentation">person</i>
                        List account note
                    </a>
                    <a class="mdl-navigation__link" href="maps.html">
                        <i class="material-icons" role="presentation">map</i>
                        Maps
                    </a>
                    <a class="mdl-navigation__link" href="charts.html">
                        <i class="material-icons">multiline_chart</i>
                        Charts
                    </a>
                    
                </nav>
            </div>
        </div>
        <div class='scroller__bar' id="scroller__bar"></div>
    </div>
</div>