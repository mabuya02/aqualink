<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
</head>


<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="{{ asset('images/logo.png') }}" class="logo">
            <i class='bx bx-code-alt'></i>
            <div class="logo-name"><span>Aqua</span>link</div>
        </a>
        <ul class="side-menu">
            <li ><a href="#"><i class='bx bxs-dashboard'></i>Dashboard</a></li>
            <li><a href="{{ route('welcome') }}"><i class='bx bx-message-square-dots'></i>Homepage</a></li>
            <li ><a href="{{ route('maps.view') }}"><i class='bx bx-map'></i>Map</a></li>
            <li class="active"><a href="{{ route('species.view') }}"><i class='bx bx-map'></i>Species</a></li>
            <li><a href="{{ route('settings.view') }}"><i class='bx bx-cog'></i>Settings</a></li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="{{ route('logout') }}" class="logout">
                    <i class='bx bx-log-out-circle'></i>
                    Logout
                </a>
            </li>
        </ul>
    </div>
    <!-- End of Sidebar -->

    <!-- Main Content -->
    <div class="content">
        <!-- Navbar -->
        <nav>
            <i class='bx bx-menu'></i>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button class="search-btn" type="submit"><i class='bx bx-search'></i></button>
                </div>
            </form>
            
            <a href="#" class="notif">
                <i class='bx bx-bell'></i>
                <span class="count">12</span>
            </a>
            <a href="#" class="profile">
                <img src="{{ asset('images/no-profile.jpeg') }}">
            </a>
        </nav>

        <!-- End of Navbar -->

        <main>
            <div class="header">
                <div class="left">
                    
                    <ul class="breadcrumb">
                        <li><a href="#">
                                Homepage
                            </a></li>
                        /
                        <li><a href="#" class="active">Species</a></li>
                    </ul>
                </div>
                <a href="#" class="report" input type="image">
                    <i class='bx bx-cloud-download'></i>
                    <span>Upload Picture</span>
                </a>
            </div>

            <div class="bottom-data">
                <div class="activity">
                    <div class="header">
                        <i class='bx bx-receipt'></i>
                        <h3>Endangered Species</h3>
                        <i class='bx bx-filter'></i>
                        <i class='bx bx-search'></i>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Organism</th>
                                <th>Life Form</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="{{ asset('images/Dolphin.jpeg') }}">
                                    <p>Hunchback Dolphin</p>
                                </td>
                                <td>Bacteria</td>
                                
                            </tr>
                            <tr>
                                <td>
                                    <img src="{{ asset('images/fish1.jpeg') }}">
                                    <p>Octopus</p>
                                </td>
                                <td>TBD</td>
                                
                            </tr>
                            <tr>
                                <td>
                                    <img src="{{ asset('images/fish2.jpeg') }}">
                                    <p>Fish</p>
                                </td>
                                <td>TBD</td>
                                
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Reminders -->
                <div class="reminders">
                    <div class="header">
                        <i class='bx bx-note'></i>
                        <h3>Conservational Efforts</h3>
                        <i class='bx bx-filter'></i>
                        <i class='bx bx-plus'></i>
                    </div>
                    <ul class="task-list">
                        <li class="completed">
                            <div class="task-title">
                                <i class='bx bx-check-circle'></i>
                                <p>
                                  Discover how you can make a difference in your community. Learn about water conservation practices and protecting endangered aquatic species in our app today!
                                     <i>Save Our Rivers and Lakes!</i>
                                </p>
                            </div>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>
                        <li class="completed">
                            <div class="task-title">
                                <i class='bx bx-check-circle'></i>
                                <p>
                                Help preserve local water bodies. Find tips on reducing water usage and preventing pollution in our app's latest articles.
                                     <i>Protect Aquatic Wildlife! 🐟</i>
                                </p>
                            </div>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>
                        <li class="not-completed">
                            <div class="task-title">
                                <i class='bx bx-x-circle'></i>
                                <p>
                                Aquatic species need your help. Explore how you can safeguard their habitats and promote biodiversity in your area using our app.
                                     <i>Join the Clean Water Movement! 🚰</i>
                                </p>
                            </div>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>
                    </ul>
                </div>
                
                </div>
          
        </main>

    </div>

    <script src="{{ asset('js/index.js') }}"></script>
</body>
</html>