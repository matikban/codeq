let mix = require("laravel-mix");

mix.sass("src/app.scss", "dist/");

// Full API
mix.options({
  processCssUrls: false,
});
