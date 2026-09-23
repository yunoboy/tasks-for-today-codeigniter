<?= view('layout/header', ['title' => $title]) ?>

<section class="page-intro">
    <p class="eyebrow">Complete schedule</p>
    <h1>Task List</h1>
    <p>Every task is listed in date order.</p>
</section>

<section class="content-card">
    <?php if ($tasks === []): ?>
        <p class="empty-state">No tasks have been added yet.</p>
    <?php else: ?>
        <div class="table-wrap">
            <table>
                <thead>
                    <tr><th>Task</th><th>Status</th><th>Task Date</th><th>Created</th></tr>
                </thead>
                <tbody>
                    <?php foreach ($tasks as $task): ?>
                        <tr>
                            <td><?= esc($task['title']) ?></td>
                            <td><span class="status status-<?= esc(str_replace('_', '-', strtolower($task['status']))) ?>"><?= esc(ucwords(str_replace('_', ' ', $task['status']))) ?></span></td>
                            <td><?= esc(date('M j, Y', strtotime($task['task_date']))) ?></td>
                            <td><?= esc(date('M j, Y g:i A', strtotime($task['created_at']))) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</section>

<?= view('layout/footer') ?>
