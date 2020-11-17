# LukasMcD-Me CakePHP

Source code for my personal website.

## Installation

Dependency installation:

```bash
composer install
npm install
```

Asset building:

```bash
npm run build
```

You can now either use your machine's webserver to view the default home page, or start
up the built-in webserver with:

```bash
bin/cake server -p 8765
```

Then visit `http://localhost:8765` to see the welcome page.

## Configuration

Read and edit the environment specific `config/app_local.php` and setup the
`'Datasources'` and any other configuration relevant for your application.
Other environment agnostic settings can be changed in `config/app.php`.
