<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MiniShop Admin')</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap');

        :root {
            --bg-color: #f8fafc;
            --card-bg: #ffffff;
            --card-border: rgba(0, 0, 0, 0.06);
            --text-primary: #0f172a;
            --text-secondary: #475569;
            --accent-primary: #4f46e5;
            --accent-secondary: #0ea5e9;
            --accent-gradient: linear-gradient(135deg, #4f46e5 0%, #0ea5e9 100%);
            --card-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -2px rgba(0, 0, 0, 0.05);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Outfit', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-primary);
            margin: 0;
            display: flex;
            height: 100vh;
        }

        .sidebar {
            width: 210px; /* Thu hẹp chiều rộng nav */
            background: #0f172a;
            color: white;
            display: flex;
            flex-direction: column;
        }

        .sidebar .brand {
            padding: 20px;
            font-size: 1.5em;
            font-weight: 700;
            background: #0b1120;
            text-align: center;
            color: var(--accent-secondary);
        }

        .sidebar a {
            padding: 15px 20px;
            color: #94a3b8;
            text-decoration: none;
            border-bottom: 1px solid #1e293b;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .sidebar a:hover {
            background: #1e293b;
            color: white;
        }

        .sidebar a.active {
            background: #1e293b;
            color: white;
            border-left: 4px solid var(--accent-primary);
        }

        .main-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            background: var(--bg-color);
        }

        .topbar {
            background: var(--card-bg);
            padding: 20px;
            border-bottom: 1px solid var(--card-border);
            font-size: 1.25em;
            font-weight: 600;
            color: var(--text-primary);
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        }

        .content {
            padding: 24px;
            flex: 1;
            overflow-y: auto;
        }

        /* Base Form/Table styling */
        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            text-align: left;
            background: var(--card-bg);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--card-shadow);
            margin-top: 20px;
        }

        th, td {
            padding: 1rem 1.25rem;
            border-bottom: 1px solid #f1f5f9;
        }

        th {
            font-weight: 600;
            color: var(--text-secondary);
            font-size: 0.875rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            background-color: #f8fafc;
        }

        tbody tr:hover {
            background-color: #f8fafc;
        }

        .btn {
            padding: 0.6rem 1.2rem;
            border-radius: 8px;
            background: var(--accent-gradient);
            color: #ffffff;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: opacity 0.2s ease, transform 0.2s ease;
            border: none;
            cursor: pointer;
            margin-bottom: 15px;
        }

        .btn:hover {
            opacity: 0.9;
            transform: translateY(-1px);
        }

        .alert-success {
            background-color: rgba(16, 185, 129, 0.1);
            color: #047857;
            border: 1px solid rgba(16, 185, 129, 0.2);
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-weight: 500;
        }

        /* Form Styles for Create Pages */
        form label {
            font-weight: 500;
            color: var(--text-secondary);
            display: block;
            margin-bottom: 0.5rem;
        }

        form input, form select, form textarea {
            border-radius: 8px;
            border: 1px solid #cbd5e1;
            font-family: inherit;
            font-size: 0.95rem;
            color: var(--text-primary);
            background-color: #f8fafc;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }

        form input:focus, form select:focus, form textarea:focus {
            outline: none;
            border-color: var(--accent-primary);
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.15);
            background-color: #ffffff;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <div class="brand">MiniShop</div>
        <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">Dashboard</a>
        <a href="{{ route('admin.categories.index') }}" class="{{ request()->routeIs('admin.categories.*') ? 'active' : '' }}">Categories</a>
        <a href="{{ route('admin.products.index') }}" class="{{ request()->routeIs('admin.products.*') ? 'active' : '' }}">Products</a>
        <a href="{{ route('admin.about') }}" class="{{ request()->routeIs('admin.about') ? 'active' : '' }}">About</a>
    </div>

    <div class="main-content">
        <div class="topbar">
            @yield('page_heading', 'Admin Area')
        </div>
        <div class="content">
            <!-- Nhúng file thông báo (Flash Message) -->
            @include('partials.flash')

            <!-- Vùng dành cho nội dung trang con -->
            @yield('content')
        </div>
    </div>
</body>

</html>