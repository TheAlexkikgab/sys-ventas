import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/admin/layout.scss',
                'resources/scss/admin/index.scss'
            ],
            refresh: true,
        }),
    ],
});
