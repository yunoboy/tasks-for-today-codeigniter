<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tasks for Today Management System">
    <title><?= esc($title) ?> | Tasks for Today</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <header class="site-header">
        <div class="nav-wrap">
            <a class="brand" href="<?= site_url() ?>">Tasks for Today</a>
            <nav aria-label="Main navigation">
                <a href="<?= site_url() ?>">Welcome</a>
                <a href="<?= site_url('tasks') ?>">Task List</a>
                <a href="<?= site_url('profile') ?>">Profile</a>
                <a href="<?= site_url('about') ?>">About</a>
            </nav>
        </div>
    </header>
    <main class="page-shell">
