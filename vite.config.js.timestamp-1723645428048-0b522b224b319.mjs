// vite.config.js
import { defineConfig } from "file:///C:/Users/Administrateur/Documents/example-app/node_modules/vite/dist/node/index.js";
import laravel from "file:///C:/Users/Administrateur/Documents/example-app/node_modules/laravel-vite-plugin/dist/index.js";
var vite_config_default = defineConfig({
  plugins: [
    laravel([
      "resources/js/app.js",
      
    ])
  ]
});
export {
  vite_config_default as default
};
