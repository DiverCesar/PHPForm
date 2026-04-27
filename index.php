<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SER SALUD Clinical Management</title>
    <link rel="stylesheet" href="/sersalud/src/css/styles.css">
</head>
<body>
    <nav class="navbar">
        <a href="/sersalud/index.php" class="logo">
            <img src="/sersalud/src/assets/logo.png" alt="SER SALUD" class="logo-img">
        </a>
        <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#features">Features</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <section class="hero" id="home">
        <div class="hero-copy">
            <span class="eyebrow">Comprehensive Rehabilitation Clinic</span>
            <h1>A presentation website for the SER SALUD prototype.</h1>
            <p>Built for David Alejandro Flores Villalva, this platform manages clinical workflows efficiently.</p>
            <div class="hero-actions">
                <a href="#features" class="btn-primary">See Features</a>
                <a href="#contact" class="btn-secondary">Project Info</a>
            </div>
        </div>
        <div class="hero-visual">
            <img src="https://images.unsplash.com/photo-1631217868264-e5b90bb7e133?auto=format&fit=crop&w=1200&q=80">
        </div>
    </section>

    <section class="section-block" id="features">
        <div class="cards-section">
            <article class="card">
                <div class="card-body">
                    <h3>Patient Management</h3>
                    <p>Register new patients and manage clinical records.</p>
                    <a href="/sersalud/src/roles/patient/patient_info.php" class="btn-primary">Open Module</a>
                </div>
            </article>
            <article class="card">
                <div class="card-body">
                    <h3>Appointment System</h3>
                    <p>Schedule and review therapy sessions.</p>
                    <a href="/sersalud/src/roles/appointment/appointment_info.php" class="btn-primary">Open Module</a>
                </div>
            </article>
            <article class="card">
                <div class="card-body">
                    <h3>Specialist Team</h3>
                    <p>Manage the medical professional staff.</p>
                    <a href="/sersalud/src/roles/specialist/specialist_info.php" class="btn-primary">Open Module</a>
                </div>
            </article>
        </div>
    </section>

    <footer class="main-footer">
        <p>&copy; 2026 SER SALUD. All rights reserved.</p>
    </footer>
</body>
</html>