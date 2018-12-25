
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/" style="padding-top: 7px;">
        <img src="{{URL::asset('/images/logo-it.png')}}" alt="profile Pic" height="35" width="auto">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        {{-- <!--li class="{{ Request::is('/') ? "active" : "" }}"><a href="/">Home</a></li-->
        <!--li class="{{ Request::is('blog') ? "active" : "" }}"><a href="{{ route('blog.index') }}">Wiki</a></li--> --}}
        <li class="{{ Request::is('link') ? "active" : "" }}"><a href="/link">Link</a></li>
		<li class="{{ Request::is('computers') ? "active" : "" }}"><a target="_blank" href="http://172.22.75.230">ITVN</a></li>
        {{-- <!--li class="{{ Request::is('computers') ? "active" : "" }}"><a href="/computers">ITVN</a></li--> --}}
        {{-- <!--li class="{{ Request::is('contact') ? "active" : "" }}"><a href="/contact">Contact</a></li-->
        <!--li class="{{ Request::is('about') ? "active" : "" }}"><a href="/about">About</a></li--> --}}
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if(Auth::check())
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello {{ Auth::user()->name }} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            {{-- <li><a href="{{ route('posts.index') }}">Posts</a></li> --}}
            <li><a href="#">Factory</a></li>
            <li><a href="#">Dept</a></li>
            <li><a href="#">Category</a></li>
            <li><a href="#">Soft</a></li>
            <li><a href="#">Computers</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Logout</a></li>
          @else
            <li><a href="#">Login</a></li>
          </ul>
        </li>
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
