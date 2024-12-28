<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glowéra Navbar with Custom Dropdown</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f1e4; 
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 30px;
            background-color: #f8d7b2;
            border-bottom: 1px solid #ddd;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); 
        }

        .navbar-brand {
            font-size: 1.8rem;
            font-weight: bold;
            color: #333;
        }

        .nav-links {
            display: flex;
            gap: 25px;
            list-style: none;
            padding: 0;
            margin: 0;
            justify-content: space-evenly; 
            flex-grow: 1; 
            text-align: center;
        }

        .nav-links a {
            text-decoration: none;
            color: #333;
            font-size: 1.1rem;
            transition: color 0.3s, background-color 0.3s;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .nav-links a:hover {
            color: #fff;
            background-color: #f1a7c1;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-toggle {
            background-color: #f8d7b2; 
            color: black;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.1rem;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #f1f1f1; /* Light grey background */
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            overflow: hidden;
            z-index: 1000;
        }

        .dropdown-menu a {
            display: block;
            padding: 10px 15px;
            text-decoration: none;
            color: black;
            transition: background-color 0.3s;
        }

        .dropdown-menu a:hover {
            background-color: #f1a7c1; 
        }

        .dropdown.open .dropdown-menu {
            display: block;
        }

        .icon-container {
            display: flex;
            gap: 20px;
            align-items: center;
            position: fixed;
            top: 15px;
            right: 30px;
            z-index: 1000;
        }

        .icon {
            font-size: 1.8rem;
            cursor: pointer;
            transition: color 0.3s;
        }

        .icon:hover {
            color: #007bff;
        }

    </style>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-brand">Glowéra</div>
        <ul class="nav-links">
            <li class="nav-item"><a href="{{url('/')}}">Home</a></li>

            <li class="nav-item dropdown">
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Products
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="./sunscreen">Sunscreen</a></li>
                        <li><a class="dropdown-item" href="./moisturizers">Moisturizers</a></li>
                        <li><a class="dropdown-item" href="./serums">Serums</a></li>
                        <li><a class="dropdown-item" href="./gelcleanser">Gel Cleansers</a></li>
                        <li><a class="dropdown-item" href="./liptreatment">Lip Treatment</a></li>
                        <li><a class="dropdown-item" href="./vitc">Vitamin C Range</a></li>
                    </ul>
                </div>  
            </li>
            <li class="nav-item"><a href="{{url('/contact')}}">Contact</a></li>
            <li class="nav-item"><a href="{{url('/about')}}">About Us</a></li> 
        </ul>
    </nav>

    <!-- Search Bar -->
    <div id="searchBar" class="container search-bar" style="display: none; margin-top: 10px;">
        <input type="text" name="search" class="form-control" placeholder="Search products..." />
    </div>

    <!-- Search Results Container -->
    <div id="searchResults" style="display: none; position: absolute; top: 50px; left: 0; background: #fff; border: 1px solid #ddd; width: 100%; z-index: 1000;">
        <ul class="list-group">
            <!-- Search results will be populated here -->
        </ul>
    </div>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content login-modal">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login or Signup</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 mb-2">Login</button>
                    </form>
                    
                    <a href="{{ route('register') }}" class="btn btn-outline-primary w-100">Sign Up</a>
                </div>
            </div>
        </div>
    </div>

    <div class="icon-container">
        <!-- <i class="bi bi-search icon" onclick="toggleSearchBar()"></i> -->
        <a href="{{ url('/login') }}"><i class="bi bi-person-circle icon"></i></a>
        <!-- <i class="bi bi-cart icon"></i> -->
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Show search bar when clicked on the search icon
        function toggleSearchBar() {
            const searchBar = document.getElementById("searchBar");
            searchBar.style.display = searchBar.style.display === "block" ? "none" : "block";
        }

        // Handle keyup event on the search input field
        $('#searchBar input').on('keyup', function() {
            let query = $(this).val(); // Get the value entered in the search bar

            if (query.length > 2) { // Trigger the search only if the query length is greater than 2
                $.ajax({
                    url: '{{ url("/search") }}', // Make sure this matches your backend route
                    method: 'GET',
                    data: { search_query: query }, // Send the search query to the backend
                    success: function(response) {
                        let results = response;
                        let resultsList = $('#searchResults ul'); // Search result container inside the div

                        // Clear previous search results
                        resultsList.empty();

                        if (results.length > 0) {
                            results.forEach(function(result) {
                                resultsList.append('<li class="list-group-item">' + result.Pro_Name + ' - ' + result.Pro_Category + '</li>');
                            });
                            $('#searchResults').show();
                        } else {
                            $('#searchResults').hide(); // Hide if no results found
                        }
                    },
                    error: function(error) {
                        console.log('Error:', error);
                    }
                });
            } else {
                $('#searchResults').hide(); // Hide results if the query is too short
            }
        });

        // Hide search results when clicked outside
        $(document).click(function(e) {
            if (!$(e.target).closest('#searchBar').length) {
                $('#searchResults').hide();
            }
        });
    </script>
</body>
</html>
