import { v4wp } from '@kucrut/vite-for-wp';

export default {
    plugins: [
        v4wp( {
            input: 'main.js',
            outDir: 'dist',
        } ),
    ],
};