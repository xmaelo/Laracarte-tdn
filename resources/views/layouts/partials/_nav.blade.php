 <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{route('root_path')}}">{{config('app.name')}}</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="{{activePage('root_path')}}"><a href="{{route('root_path')}}">Home</a></li>
            <li class="{{activePage('about_path')}}"><a href="{{route('about_path')}}">About</a></li>
            <li ><a href="">Artisans</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Planet <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="https://laravel.com">Laravel.com</a></li>
                <li><a href="https://laravel.io">laravel.io</a></li>
                <li><a href="https://laracasts.com">Laracasts</a></li>
                <li><a href="https://larajobs.com">Laravejobs</a></li>
                <li><a href="https://laravel-news.com">Laravel News</a></li>
                <li><a href="https://larachat.io">Larachat</a></li>
              </ul>
            <li><a href="">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="">Login</a></li>
            <li><a href="">Register</a></li>            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>