<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Backend Service HTTP Request Headers">
    <title>Backend Service - Request Headers</title>

    <style>
      body {
        box-sizing: border-box;
        min-width: 200px;
        max-width: 980px;
        margin: 56px auto 0 auto;
        padding: 45px;
        color: #24292f;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
        line-height: 1.5;
      }

      header {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1;
        width: 100%;
        line-height: 42px;
        color: white;
        background-color: #424242;
        font-size: 20px;
        text-align: center;
      }

      h1 {
        margin: 0 0 12px 0;
        font-size: 28px;
        font-weight: 600;
      }

      p {
        margin: 0 0 24px 0;
      }

      .table-wrap {
        overflow-x: auto;
        margin: 24px 0;
        border: 1px solid #d0d7de;
        border-radius: 6px;
      }

      table {
        width: 100%;
        border-collapse: collapse;
        font-size: 14px;
      }

      th,
      td {
        padding: 10px 12px;
        border-bottom: 1px solid #d0d7de;
        text-align: left;
        vertical-align: top;
      }

      th {
        background-color: #f6f8fa;
        font-weight: 600;
      }

      tr:last-child td {
        border-bottom: 0;
      }

      td:first-child {
        width: 32%;
        font-weight: 600;
        word-break: break-word;
      }

      code {
        overflow-wrap: anywhere;
        font-family: ui-monospace, SFMono-Regular, Consolas, "Liberation Mono", monospace;
      }

      nav {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        margin-top: 28px;
      }

      a {
        color: #0969da;
      }

      nav a {
        display: inline-block;
        padding: 8px 12px;
        border: 1px solid #d0d7de;
        border-radius: 6px;
        color: #24292f;
        text-decoration: none;
      }

      nav a:hover,
      nav a:focus {
        border-color: #0969da;
        color: #0969da;
      }

      @media (max-width: 767px) {
        body {
          padding: 15px;
        }

        header {
          font-size: 15px;
        }

        h1 {
          font-size: 22px;
        }

        th,
        td {
          padding: 8px;
        }
      }
    </style>
</head>
<body>
<header>Backend Service</header>

<main>
    <h1>Received HTTP Request Headers</h1>
    <p>This backend endpoint shows the headers Apache received after the request passed through the reverse proxy.</p>

    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>Header</th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody>

<?php
$headers = apache_request_headers();

if (!is_array($headers)) {
    $headers = [];
}

ksort($headers, SORT_NATURAL | SORT_FLAG_CASE);

foreach ($headers as $header => $value) {
    $safeHeader = htmlspecialchars($header, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    $safeValue = htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');

    echo "                <tr>\n";
    echo "                    <td><code>$safeHeader</code></td>\n";
    echo "                    <td><code>$safeValue</code></td>\n";
    echo "                </tr>\n";
}

if (count($headers) === 0) {
    echo "                <tr>\n";
    echo "                    <td colspan=\"2\">No request headers were received.</td>\n";
    echo "                </tr>\n";
}
?>
            </tbody>
        </table>
    </div>

    <nav aria-label="Page navigation">
        <a href="/backend/">Backend Service</a>
        <a href="/">Reverse Proxy</a>
    </nav>
</main>
</body>
</html>
