
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hero Section</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .hero-section {
      position: relative;
      height: 50vh;
      background: url('https://via.placeholder.com/1200x600') no-repeat center center/cover;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
      text-align: center;
    }
    .hero-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
    }
    .hero-content {
      position: relative;
      z-index: 2;
    }
  </style>
</head>
<body>

<!-- Small Hero Section -->
<section class="hero-section">
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <h2>Welcome to Mahis Artsight</h2>
    <p>Discover stunning art and creativity in every piece.</p>
    <a href="#about" class="btn btn-warning btn-sm">Learn More</a>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
