# EnergiAI Website

Public Laravel website for `energiai.de`.

The application is intentionally small at this stage:

- one public landing page in `resources/views/welcome.blade.php`
- static brand assets in `public/assets`
- SQLite-ready Laravel defaults for simple production hosting

Deployment on `ai` is handled by:

```sh
deploy/energiai/install-energiai-laravel.sh
```

Do not edit the deployed copy directly on the server. Commit and push changes
locally, pull the XvX repository on `ai`, then rerun the deploy script.
