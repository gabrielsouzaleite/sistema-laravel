import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import path from "path";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/css/root.css",
                "resources/css/signin.css",
                "resources/css/alerts.css",
                "resources/js/app.js",
                "node_modules/bootstrap/dist/js/bootstrap.bundle.min.js",
                "node_modules/bootstrap/dist/js/bootstrap.js",
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            "~bootstrap": path.resolve(
                __dirname,
                "node_modules/bootstrap/dist"
            ),
        },
    },
});
