<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="dashboard admin.css">
</head>
<body>

<div class="dashboard">

    <!-- Sidebar -->
    <aside class="sidebar">
        <h2>Admin Panel</h2>
        <ul>
            <li>Dashboard</li>
            <li>User Management</li>
            <li>Access Rights</li>
            <li>System Logs</li>
            <li>Settings</li>
            <li class="logout">Logout</li>
        </ul>
    </aside>

    <!-- Main Content -->
    <main class="main-content">

        <header>
            <h1>Welcome, Administrator</h1>
            <span class="role">Role: Super Admin</span>
        </header>

        <section class="cards">
            <div class="card">
                <h3>Users</h3>
                <p>Manage all system users</p>
            </div>

            <div class="card">
                <h3>Permissions</h3>
                <p>Grant & revoke rights</p>
            </div>

            <div class="card">
                <h3>Logs</h3>
                <p>View system activity</p>
            </div>

            <div class="card">
                <h3>Security</h3>
                <p>Admin-only controls</p>
            </div>
        </section>

    </main>

</div>

</body>
</html>
