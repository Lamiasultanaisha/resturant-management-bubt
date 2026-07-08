<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?q=80&w=1200') no-repeat center center/cover;
            color: white;
            padding: 120px 0;
            text-align: center;
        }
        .menu-card img {
            height: 200px;
            object-fit: cover;
        }
        .feature-icon {
            font-size: 3rem;
            color: #ffc107;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-warning" href="index.php"><i class="fas fa-utensils me-2"></i>FoodVerse</a>
            <div class="ms-auto">
                <a href="login.php" class="btn btn-outline-warning fw-bold">Admin Login</a>
            </div>
        </div>
    </nav>

    <header class="hero-section">
        <div class="container">
            <h1 class="display-4 fw-bold">Welcome to FoodVerse</h1>
            <p class="lead">Experience the taste of royalty at Mirpur's finest food junction.</p>
        </div>
    </header>

    <section class="container my-5">
        <h2 class="text-center fw-bold mb-5">Why Choose Us?</h2>
        <div class="row text-center g-4">
            <div class="col-md-4">
                <div class="p-3 shadow-sm rounded bg-light">
                    <i class="fas fa-pizza-slice feature-icon mb-3"></i>
                    <h5 class="fw-bold">Quality Food</h5>
                    <p class="text-muted">We serve foods made from the freshest and organic ingredients.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 shadow-sm rounded bg-light">
                    <i class="fas fa-truck feature-icon mb-3"></i>
                    <h5 class="fw-bold">Fast Delivery</h5>
                    <p class="text-muted">Get your favourite food delivered at your doorstep within 30 mins.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 shadow-sm rounded bg-light">
                    <i class="fas fa-user-chef feature-icon mb-3"></i>
                    <i class="fas fa-hat-chef feature-icon mb-3"></i> <h5 class="fw-bold">Expert Chefs</h5>
                    <p class="text-muted">Our dishes are crafted by world-class professional chefs.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="container my-5">
        <h2 class="text-center fw-bold mb-4">Our Premium Menu</h2>
        <div class="row g-4">
            
            <div class="col-md-4">
                <div class="card menu-card shadow-sm h-100">
                    <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?q=80&w=500" class="card-img-top" alt="Pizza">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Cheesy Margherita Pizza</h5>
                        <p class="card-text text-muted">Delicious loaded mozzarella cheese pizza with fresh tomato toppings.</p>
                        <span class="badge bg-warning text-dark fs-6">৳ 450</span>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card menu-card shadow-sm h-100">
                    <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?q=80&w=500" class="card-img-top" alt="Burger">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Double Patty Beef Burger</h5>
                        <p class="card-text text-muted">Juicy double beef patty with crunchy veggies and special garlic sauce.</p>
                        <span class="badge bg-warning text-dark fs-6">৳ 280</span>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card menu-card shadow-sm h-100">
                    <img src="https://images.unsplash.com/photo-1633945274405-b6c8069047b0?q=80&w=500" class="card-img-top" alt="Biryani">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Hyderabadi Kacchi Biryani</h5>
                        <p class="card-text text-muted">Basmati rice cooked with tender mutton, basmati rice, and secret spices.</p>
                        <span class="badge bg-warning text-dark fs-6">৳ 380</span>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card menu-card shadow-sm h-100">
                    <img src="https://images.unsplash.com/photo-1546549032-9571cd6b27df?q=80&w=500" class="card-img-top" alt="Pasta">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">White Sauce Pasta</h5>
                        <p class="card-text text-muted">Rich and creamy pasta tossed with grilled chicken and mushrooms.</p>
                        <span class="badge bg-warning text-dark fs-6">৳ 240</span>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card menu-card shadow-sm h-100">
                    <img src="https://images.unsplash.com/photo-1541167760496-1628856ab772?q=80&w=500" class="card-img-top" alt="Coffee">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Creamy Cappuccino</h5>
                        <p class="card-text text-muted">Freshly brewed espresso with a smooth layer of thick milk foam.</p>
                        <span class="badge bg-warning text-dark fs-6">৳ 150</span>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card menu-card shadow-sm h-100">
                    <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?q=80&w=500" class="card-img-top" alt="Salad">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Healthy Green Salad</h5>
                        <p class="card-text text-muted">Fresh organic green vegetables dressing with pure extra virgin olive oil.</p>
                        <span class="badge bg-warning text-dark fs-6">৳ 120</span>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <footer class="bg-dark text-white pt-5 pb-3">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6">
                    <h5 class="fw-bold text-warning mb-3">FoodVerse</h5>
                    <p class="text-muted">A standard University practical project for Restaurant Management System built with PHP and MySQL.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <h5 class="fw-bold text-warning mb-3">Contact Us</h5>
                    <p class="mb-1"><i class="fas fa-map-marker-alt text-warning me-2"></i> Mirpur-2, Road-9, Rupnogor Abasik Area, Dhaka</p>
                    <p class="mb-0"><i class="fas fa-phone text-warning me-2"></i> +880 1673-189513</p>
                </div>
            </div>
            <hr class="bg-secondary my-4">
            <div class="text-center">
                <p class="mb-0 text-muted">&copy; 2026 FoodVerse | Designed for Practical Exam</p>
            </div>
        </div>
    </footer>