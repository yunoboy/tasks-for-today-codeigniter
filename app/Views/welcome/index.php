<?= view('layout/header', ['title' => $title]) ?>

<section class="hero">
    <p class="eyebrow"><?= esc(date('l, F j, Y', strtotime($today))) ?></p>
    <h1>Welcome</h1>
    <p>Focus on the work scheduled for today.</p>
</section>

<section class="content-card">
    <div class="section-heading">
        <div>
            <p class="eyebrow">Daily dashboard</p>
            <h2>Today's Tasks</h2>
        </div>
        <span class="task-count"><?= count($tasks) ?> task<?= count($tasks) === 1 ? '' : 's' ?></span>
    </div>

    <?php if ($tasks === []): ?>
        <p class="empty-state">No tasks are scheduled for today.</p>
    <?php else: ?>
        <div class="table-wrap">
            <table>
                <thead>
                    <tr><th>Task</th><th>Status</th><th>Date</th></tr>
                </thead>
                <tbody>
                    <?php foreach ($tasks as $task): ?>
                        <tr>
                            <td><?= esc($task['title']) ?></td>
                            <td><span class="status status-<?= esc(str_replace('_', '-', strtolower($task['status']))) ?>"><?= esc(ucwords(str_replace('_', ' ', $task['status']))) ?></span></td>
                            <td><?= esc(date('M j, Y', strtotime($task['task_date']))) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</section>

<?= view('layout/footer') ?>
