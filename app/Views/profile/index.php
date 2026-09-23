<?= view('layout/header', ['title' => $title]) ?>

<section class="page-intro">
    <p class="eyebrow">Demo account</p>
    <h1>Profile</h1>
    <p>The single user record stored in the database.</p>
</section>

<section class="profile-card">
    <?php if ($user === null): ?>
        <p class="empty-state">No demo user was found.</p>
    <?php else: ?>
        <div class="avatar" aria-hidden="true"><?= esc(strtoupper(substr($user['full_name'], 0, 1))) ?></div>
        <div>
            <h2><?= esc($user['full_name']) ?></h2>
            <dl class="profile-details">
                <div><dt>Username</dt><dd><?= esc($user['username']) ?></dd></div>
                <div><dt>Email</dt><dd><?= esc($user['email']) ?></dd></div>
                <div><dt>Member since</dt><dd><?= esc(date('F j, Y', strtotime($user['created_at']))) ?></dd></div>
            </dl>
        </div>
    <?php endif; ?>
</section>

<?= view('layout/footer') ?>
