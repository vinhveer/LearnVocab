<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        /* Optional: Style dropdown toggle button */
        .dropdown-toggle::after {
            display: none;
        }

        .navbar-brand {
            font-family: 'Segoe UI Semibold', sans-serif;
        }   
    </style>
</head>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <div class="me-auto d-flex">
            <a class="navbar-brand" href="/">
                dodoVOCAB
            </a>
            <div class="dropdown me-3">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="themeDropdown" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="bi bi-moon-stars-fill"></i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="themeDropdown">
                    <li><a class="dropdown-item" href="#" id="lightMode"><i class="bi bi-sun-fill"></i> Light Mode</a>
                    </li>
                    <li><a class="dropdown-item" href="#" id="darkMode"><i class="bi bi-moon-fill"></i> Dark Mode</a>
                    </li>
                </ul>
            </div>
        </div>

        <form class="d-flex w-100" role="search">
            <input class="form-control me-2" type="search" placeholder="Enter vocabulary" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
</nav>

<script>
    // Function to set the theme based on system preference
    function setSystemTheme() {
        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            document.body.setAttribute('data-bs-theme', 'dark');
        } else {
            document.body.setAttribute('data-bs-theme', 'light');
        }
    }

    // Call the function on page load
    setSystemTheme();

    // Event listeners for the dropdown items
    document.getElementById('lightMode').addEventListener('click', function () {
        document.body.setAttribute('data-bs-theme', 'light');
    });

    document.getElementById('darkMode').addEventListener('click', function () {
        document.body.setAttribute('data-bs-theme', 'dark');
    });

    // Listen for changes in the system theme and update accordingly
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', setSystemTheme);
</script>