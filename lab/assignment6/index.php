<!DOCTYPE html>
<html>
<head>
    <title>JobHunt — Home</title>
    <link rel="stylesheet" href="style.css">
    <?php include "nav.php"; ?>
</head>
<body>
    
<div class="hero">
    <h1>Find jobs that grow your career</h1>
    <p>Search thousands of curated job listings and apply in seconds.</p>

    <form class="search-box">
        <input type="text" placeholder="Job title, company, or keyword...">
        <button type="submit">Search</button>
    </form>

    <p style="margin-top:10px;">
        Don't have an account? <a href="signup.php" class="sign-up">Sign Up</a>
    </p>
</div>

<form class="filters">
    <select><option>Job Type</option></select>
    <select><option>Category</option></select>
    <input type="text" placeholder="Location">
    <select><option>Salary</option></select>
    <button type="submit">Apply Filters</button>
</form>

<!-- JOB GRID -->
<div class="jobs-grid">

    <!-- Example Job Card -->
    <div class="job-card">
        <div>
            <div class="job-top">
                <div class="job-logo">G</div>
                <div>
                    <div class="job-title">Frontend Developer</div>
                    <div class="job-company">Google</div>
                </div>
            </div>

            <div class="job-location">📍 California, USA</div>

            <div class="job-meta">
                <div class="meta-pill">💰 120000</div>
                <div class="meta-pill">🕒 Full Time</div>
                <div class="meta-pill">🏷️ IT</div>
            </div>

            <div class="job-description">
                Join our frontend team to build UI for millions of users.
                <span class="dots">...</span>
                <span class="more" style="display:none;">  
                    We are looking for developers with React, Vue or Angular experience.
                </span>
                <br>
                <a href="javascript:void(0)" onclick="toggleDesc(this)">Read more</a>
            </div>
        </div>

        <div class="card-footer">
            <div class="small">Posted: 2025-01-20</div>
            <div>
                <a class="apply-btn" href="#">Apply</a>
            </div>
        </div>
    </div>
</div>

<script>
function toggleDesc(el){
    const more = el.previousElementSibling;
    const dots = more.previousElementSibling;

    if(more.style.display === "none"){
        more.style.display = "inline";
        dots.style.display = "none";
        el.innerText = "Show less";
    } else {
        more.style.display = "none";
        dots.style.display = "inline";
        el.innerText = "Read more";
    }
}
</script>

</body>
</html>
