<!-- index.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Window Layout</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        /* Add this CSS to your stylesheet or inline styles */
/* Add this CSS to your stylesheet or inline styles */
body {
    height: 100vh; /* Set body height to viewport height */
    margin: 0;
    padding: 0;
    overflow: hidden; /* Hide scrollbar on body */
}

.container {
    display: flex;
    flex-direction: column;
    height: 100vh; /* Set container height to viewport height */
}

.header {
    background-color: #f0f0f0;
    padding: 1rem;
}

.main {
    flex: 1; /* Take up remaining space */
    display: flex;
    flex-direction: column;
    padding: 1rem;
    overflow: hidden; /* Hide scrollbar on main */
}

.main-content {
    flex: 1; /* Take up remaining space */
    display: flex;
    flex-direction: column;
    justify-content: center; /* Center content vertically */
    align-items: center; /* Center content horizontally */
    font-size: 1.5rem; /* Initial font size */
}

.carousel {
    flex: 1; /* Take up remaining space */
    width: 100%;
}

.carousel-inner {
    height: 100%;
}

.carousel-item {
    height: 100%;
    background-size: cover; /* Ensure image covers entire carousel item */
    background-position: center; /* Center image horizontally and vertically */
}

/* Scale carousel height based on main content height */
.carousel {
    height: calc(50vh - 2rem); /* Adjust formula as needed */
}

/* Media queries to adjust carousel height */
@media (max-height: 600px) {
    .carousel {
        height: calc(30vh - 2rem); /* Adjust formula as needed */
    }
}

@media (max-height: 500px) {
    .carousel {
        height: calc(20vh - 2rem); /* Adjust formula as needed */
    }
}

/* Scale font size based on main content height */
.main-content {
    font-size: calc(1.5rem + (100vw - 400px) / 50); /* Adjust formula as needed */
}
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Header</h1>
        </div>
        <div class="main">
            <div class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://via.placeholder.com/800x400" alt="Slide 1">
                    </div>
                    <div class="carousel-item">
                        <img src="https://via.placeholder.com/800x400" alt="Slide 2">
                    </div>
                    <!-- Add more slides as needed -->
                </div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.</p>
        </div>
        <div class="footer">
            <p>Footer</p>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>