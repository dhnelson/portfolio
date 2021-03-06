<nav class="navbar navbar-default">
    <div class="navbar-header">      
        <a class="navbar-brand" href="{{ route('home') }}">Dustin Nelson | Web Developer</a> 
        <!-- Collapsed Hamburger -->
        <button type="button" class="navbar-toggle" id="dropdown" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>               
        </button>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
            <li class="{{ Request::is('/') ? "active" : ""}}"><a href="{{ route('home') }}">HOME</a></li> 
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">PORTFOLIO <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="http://traineps.com" target="_blank">traineps.com</a></li> 
                    <li><a href="deathvacation.com" target="_blank">deathvacation.com</a></li>
                    <li><a {{--href="gh3boxing.com"--}} target="_blank">gh3boxing.com (coming soon)</a></li>  
                </ul>
            </li>
            <li class="{{ Request::is('resume') ? "active" : ""}}"><a href="{{ route('resume') }}">RÉSUMÉ</a></li>
            <li class="{{ Request::is('contact') ? "active" : ""}}"><a href="{{ route('contact') }}">CONTACT</a></li>
        </ul>
    </div>
</nav>
