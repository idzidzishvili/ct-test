<html>

<head>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
	</script>
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('js/app.js') }}"></script>
   <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
	<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
		<a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">CT-test</a>
		<button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
			data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
			aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="navbar-nav">
			<div class="nav-item text-nowrap">
				{{-- <a class="nav-link px-3" href="#">Sign out</a> --}}
			</div>
		</div>
	</header>

	<div class="container-fluid">
		<div class="row">
			<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3 sidebar-sticky">
               <ul class="nav flex-column">
                  <li class="nav-item">
                     <a class="nav-link" href="{{route('projects.index')}}">
                        <span class="align-text-bottom"></span>
                        Projects
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{route('tasks.index')}}">
                        <span class="align-text-bottom"></span>
                        Tasks
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{route('project.tasks')}}">
                        <span class="align-text-bottom"></span>
                        Project tasks
                     </a>
                  </li>                  
               </ul>
            </div>
			</nav>
			<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">				
            @yield('content')
			</main>
		</div>
	</div>
</body>

</html>
