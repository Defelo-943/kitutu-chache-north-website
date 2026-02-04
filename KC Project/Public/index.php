// File: /Public/index.php

<?php include_once __DIR__ . '/../Include/header.php'; ?>
<?php include_once __DIR__ . '/../Include/navbar.php'; ?>

<section class="hero">
    <div class="hero-content">
        <h1 class="hero-title reveal-hero">Kitutu Chache Constituency</h1>
        <p class="hero-subtitle reveal-hero delay-1">
            Empowering Communities. Driving Sustainable Development.
        </p>
        <div class="hero-actions reveal-hero delay-2">
            <a href="#" class="btn-primary">
                <i class="fa-solid fa-diagram-project"></i> View Projects
            </a>
            <a href="#" class="btn-secondary">
                <i class="fa-solid fa-envelope"></i> Contact Us
            </a>
        </div>
    </div>
</section>


<section class="about">
    <h2>About Us</h2>
    <p>
        Kitutu Chache Constituency is committed to inclusive development,
        transparent leadership, and empowering all citizens.
    </p>
    <a href="#" class="btn-link">Read More</a>
</section>

<section class="services reveal">
    <h2>Our Services</h2>

    <div class="card-grid services-grid">
        <div class="card service-card reveal delay-1">
            <i class="fa-solid fa-school icon"></i>
            <h3>Education & Bursaries</h3>
            <p>Supporting students through transparent and fair bursary programs.</p>
        </div>

        <div class="card service-card reveal delay-2">
            <i class="fa-solid fa-road icon"></i>
            <h3>Infrastructure Development</h3>
            <p>Improving roads, public buildings, and essential infrastructure.</p>
        </div>

        <div class="card service-card reveal delay-3">
            <i class="fa-solid fa-hospital icon"></i>
            <h3>Health Services</h3>
            <p>Enhancing access to quality healthcare facilities.</p>
        </div>

        <div class="card service-card reveal delay-4">
            <i class="fa-solid fa-people-group icon"></i>
            <h3>Youth & Women Empowerment</h3>
            <p>Empowering communities through skills and funding programs.</p>
        </div>
    </div>

    <a href="#" class="btn-link">View All Services</a>
</section>


<section class="projects">
    <h2>Featured Projects</h2>
    <div class="card-grid">
        <div class="card">Road Construction</div>
        <div class="card">School Renovation</div>
        <div class="card">Water Supply</div>
    </div>
    <a href="#" class="btn-link">View All Projects</a>
</section>

<section class="leadership">
    <h2>Constituency Leadership</h2>

    <div class="leader-grid">
        <div class="leader-card patron">
            <img src="/assets/images/leader-placeholder.png" alt="MP">
            <h3>Hon. [MP Name]</h3>
            <p class="role">Member of Parliament (Patron)</p>
            <p class="ward">Kitutu Chache Constituency</p>
            <a href="#" class="btn-outline">View Profile</a>
        </div>

        <div class="leader-card">
            <img src="/assets/images/leader-placeholder.png" alt="Ward Rep">
            <h3>[Name Placeholder]</h3>
            <p class="role">Ward Representative</p>
            <p class="ward">[Ward Name]</p>
            <a href="#" class="btn-outline">View Profile</a>
        </div>

        <div class="leader-card">
            <img src="/assets/images/leader-placeholder.png" alt="Ward Rep">
            <h3>[Name Placeholder]</h3>
            <p class="role">Ward Representative</p>
            <p class="ward">[Ward Name]</p>
            <a href="#" class="btn-outline">View Profile</a>
        </div>
    </div>

    <a href="#" class="btn-link">View Full Leadership</a>
</section>


<section class="metrics">
    <h2>Development Progress</h2>
    <p class="metrics-subtitle">
        Transparent reporting of key development indicators in Kitutu Chache Constituency.
    </p>

    <div class="metrics-stats">
        <div class="stat">
            <h3>46</h3>
            <p>Completed Projects</p>
        </div>
        <div class="stat">
            <h3>KES 180M</h3>
            <p>Funds Utilized</p>
        </div>
        <div class="stat">
            <h3>12,000+</h3>
            <p>Bursary Beneficiaries</p>
        </div>
        <div class="stat">
            <h3>6</h3>
            <p>Wards Covered</p>
        </div>
    </div>

    <div class="charts">
        <div class="chart-box">
            <h4>Projects by Sector</h4>
            <canvas id="projectsChart"></canvas>
        </div>

        <div class="chart-box">
            <h4>Budget Allocation</h4>
            <canvas id="bursaryChart"></canvas>
        </div>
    </div>

    <a href="#" class="btn-link">View Full Development Report</a>
</section>


<section class="contact">
    <h2>Contact Us</h2>
    <form>
        <input type="text" placeholder="Your Name" required>
        <input type="email" placeholder="Your Email" required>
        <textarea placeholder="Your Message" required></textarea>
        <button type="submit" class="btn-primary">Send Message</button>
    </form>
</section>

<?php include_once __DIR__ . '/../Include/footer.php'; ?>
