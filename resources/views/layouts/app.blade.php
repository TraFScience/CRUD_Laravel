<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Products')</title>
    <style>
        :root {
            --primary: #0d9488;
            --primary-dark: #0f766e;
            --danger: #dc2626;
            --danger-dark: #b91c1c;
            --success-bg: #ecfdf5;
            --success-text: #065f46;
            --success-border: #a7f3d0;
            --error-bg: #fef2f2;
            --error-text: #991b1b;
            --error-border: #fecaca;
            --bg: #f1f5f9;
            --card: #ffffff;
            --text: #1e293b;
            --muted: #64748b;
            --border: #e2e8f0;
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background: var(--bg);
            color: var(--text);
            line-height: 1.6;
        }
        .container {
            max-width: 820px;
            margin: 2rem auto;
            padding: 0 1rem;
        }
        .card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 12px;
            box-shadow: 0 1px 3px rgba(0,0,0,.06);
            padding: 1.5rem;
        }
        .page-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            margin-bottom: 1.25rem;
        }
        h1 { margin: 0; font-size: 1.5rem; }
        .btn {
            display: inline-block;
            padding: .45rem .9rem;
            border-radius: 8px;
            border: 1px solid transparent;
            text-decoration: none;
            font-size: .875rem;
            font-weight: 500;
            font-family: inherit;
            cursor: pointer;
            line-height: 1.4;
        }
        .btn-primary { background: var(--primary); color: #fff; }
        .btn-primary:hover { background: var(--primary-dark); }
        .btn-outline { background: #fff; color: var(--text); border-color: var(--border); }
        .btn-outline:hover { background: var(--bg); }
        .btn-danger { background: var(--danger); color: #fff; }
        .btn-danger:hover { background: var(--danger-dark); }
        .btn-sm { padding: .25rem .6rem; font-size: .8rem; }
        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
        }
        th, td { padding: .7rem .8rem; text-align: left; border-bottom: 1px solid var(--border); }
        th {
            background: #f8fafc;
            color: var(--muted);
            font-size: .75rem;
            text-transform: uppercase;
            letter-spacing: .04em;
            font-weight: 600;
        }
        tbody tr:hover { background: #f8fafc; }
        .alert {
            padding: .75rem 1rem;
            border-radius: 8px;
            margin-bottom: 1rem;
            font-size: .9rem;
            border: 1px solid transparent;
        }
        .alert-success { background: var(--success-bg); color: var(--success-text); border-color: var(--success-border); }
        .alert-error { background: var(--error-bg); color: var(--error-text); border-color: var(--error-border); }
        .alert ul { margin: 0; padding-left: 1.25rem; }
        .form-group { margin-bottom: 1rem; }
        label { display: block; font-weight: 500; margin-bottom: .3rem; font-size: .9rem; }
        input[type="text"], textarea {
            width: 100%;
            padding: .55rem .75rem;
            border: 1px solid var(--border);
            border-radius: 8px;
            font-size: .9rem;
            font-family: inherit;
            color: var(--text);
        }
        input[type="text"]:focus, textarea:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(13,148,136,.15);
        }
        .actions { display: flex; gap: .5rem; margin-top: 1rem; flex-wrap: wrap; }
        .muted { color: var(--muted); }
        .price { font-weight: 600; }
        .detail-label { font-weight: 600; font-size: .8rem; text-transform: uppercase; letter-spacing: .04em; color: var(--muted); margin-bottom: .25rem; }
        .detail-block { margin-bottom: 1rem; }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
