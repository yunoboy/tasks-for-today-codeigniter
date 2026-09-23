<?= view('layout/header', ['title' => $title]) ?>

<section class="page-intro">
    <p class="eyebrow">About the system</p>
    <h1>Tasks for Today</h1>
    <p>This CodeIgniter application separates today's priorities from the complete task schedule while using one shared database.</p>
</section>

<section class="about-grid">
    <article class="content-card">
        <h2>Purpose</h2>
        <p>The system helps a small team review daily work, browse all scheduled tasks, and view a demo user profile.</p>
    </article>
    <article class="content-card">
        <h2>Developer</h2>
        <p>Developed by Yuan Evangelista for IT0049 Web System Technologies.</p>
    </article>
</section>

<?= view('layout/footer') ?>
