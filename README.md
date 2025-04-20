<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AidHive - Online Donation Platform for Charities</title>
</head>
<body>

<h1>AidHive - Online Donation Platform for Charities</h1>

<p>AidHive is a web-based donation management platform designed to facilitate donations for a single charity. The platform includes roles such as <strong>Donors</strong>, <strong>Program Coordinators</strong>, <strong>Accountants</strong>, and <strong>Top Management</strong>, each with specific access and functionality.</p>

<h2>Features</h2>
<ul>
    <li><strong>Donor Role</strong>: 
        <ul>
            <li>Donors can register, log in, and donate to specific events.</li>
            <li>View donation history and track how their contributions are used.</li>
        </ul>
    </li>
    <li><strong>Program Coordinator</strong>: 
        <ul>
            <li>Manage charity programs and events.</li>
        </ul>
    </li>
    <li><strong>Accountant</strong>:
        <ul>
            <li>Manage donations and generate financial reports.</li>
        </ul>
    </li>
    <li><strong>Top Management</strong>:
        <ul>
            <li>Oversee the entire system and manage users.</li>
        </ul>
    </li>
</ul>

<h2>Technologies Used</h2>
<ul>
    <li><strong>Frontend</strong>: HTML, CSS, Bootstrap 5, Tailwind CSS, JavaScript</li>
    <li><strong>Backend</strong>: Laravel 10</li>
    <li><strong>Database</strong>: MySQL</li>
    <li><strong>Authentication</strong>: Laravel Breeze (authentication and role management)</li>
</ul>

<h2>Installation</h2>
<h3>Prerequisites</h3>
<ul>
    <li>PHP >= 8.1</li>
    <li>Composer</li>
    <li>MySQL</li>
    <li>Node.js and NPM (for frontend development)</li>
</ul>

<h3>Steps to Install</h3>
<ol>
    <li>Clone the repository:
        <pre><code>git clone https://github.com/FabihaPritha/Aid_Hive.git</code></pre>
    </li>
    <li>Navigate into the project folder:
        <pre><code>cd Aid_Hive</code></pre>
    </li>
    <li>Install Composer dependencies:
        <pre><code>composer install</code></pre>
    </li>
    <li>Install Node.js dependencies:
        <pre><code>npm install</code></pre>
    </li>
    <li>Create a .env file by duplicating .env.example:
        <pre><code>cp .env.example .env</code></pre>
    </li>
    <li>Set up your database credentials in the .env file.</li>
    <li>Generate the application key:
        <pre><code>php artisan key:generate</code></pre>
    </li>
    <li>Run the migrations to set up the database tables:
        <pre><code>php artisan migrate</code></pre>
    </li>
    <li>Seed the database (optional):
        <pre><code>php artisan db:seed</code></pre>
    </li>
    <li>Compile assets (optional but recommended for production):
        <pre><code>npm run dev</code></pre>
    </li>
    <li>Start the development server:
        <pre><code>php artisan serve</code></pre>
    </li>
</ol>

<p>Now you can access the application by visiting <strong>http://127.0.0.1:8000</strong> in your browser.</p>

<h2>Directory Structure</h2>
<pre><code>
.
├── app/                    # Contains the core application logic (Controllers, Models, etc.)
├── resources/               # Contains views, assets (CSS, JS), and localization files
│   ├── views/               # Blade files for frontend
│   ├── css/                 # Stylesheets
│   ├── js/                  # JavaScript files
├── routes/                  # Web routes
│   └── web.php              # Defines routes for the application
├── database/                # Database migrations and seeders
├── public/                  # Publicly accessible files (images, assets)
├── .env                     # Environment variables
├── composer.json            # Composer dependencies and settings
└── package.json             # Node.js dependencies and settings
</code></pre>

<h2>Roles and Permissions</h2>

<h3>Donor</h3>
<ul>
    <li>Donors can register, log in, and donate to specific causes.</li>
    <li>They can track their donation history and view how their funds are being used.</li>
</ul>

<h3>Program Coordinator</h3>
<ul>
    <li>Can manage charity programs and campaigns.</li>
    <li>Assign specific programs to donation sectors.</li>
</ul>

<h3>Accountant</h3>
<ul>
    <li>Manages donations and tracks financial reports.</li>
    <li>Can generate reports for auditing and tracking donations.</li>
</ul>

<h3>Top Management</h3>
<ul>
    <li>Oversees the entire donation platform.</li>
    <li>Can manage users and overall system administration.</li>
</ul>

<h2>Contributing</h2>
<ol>
    <li>Fork the repository.</li>
    <li>Create a new branch (<code>git checkout -b feature-name</code>).</li>
    <li>Commit your changes (<code>git commit -am 'Add new feature'</code>).</li>
    <li>Push to the branch (<code>git push origin feature-name</code>).</li>
    <li>Create a new Pull Request.</li>
</ol>

<h2>License</h2>
<p>This project is implemented by <i>Nowshin Fabiha Ibant</i></p>

</body>
</html>
