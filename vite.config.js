import {defineConfig} from 'vite'

export default defineConfig({
    server: {
        cors: {
            origin: 'http://localhost',
        },
    },
    build: {
        rollupOptions: {
            input: 'main.js',
            output: {
                entryFileNames: `assets/[name].js`,
                chunkFileNames: `assets/[name].js`,
                assetFileNames: `assets/[name].[ext]`
            }
        },
    },
})