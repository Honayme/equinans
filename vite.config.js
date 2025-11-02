import {
    defineConfig
} from 'vite';
import laravel from 'laravel-vite-plugin';
import inject from '@rollup/plugin-inject';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        inject({
            $: 'jquery',
            jQuery: 'jquery',
            gsap: 'gsap',
            include: ['**/*.js'],
            exclude: ['node_modules/**', '**/*.css'],
        }),
    ],
    server: {
        cors: true,
    },
    optimizeDeps: {
        include: ['jquery', 'waypoints/lib/jquery.waypoints.js'],
    },
    resolve: {
        alias: {
            jquery: 'jquery/dist/jquery.js',
        },
    },
});