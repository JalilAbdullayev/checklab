import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'public/back/node_modules/morrisjs/morris.css',
                'public/back/node_modules/toast-master/css/jquery.toast.css',
                'public/back/dist/css/style.min.css',
                'public/back/dist/css/pages/dashboard1.css',
                'public/front/swiper/swiper.min.css',
                'public/front/bootstrap/css/bootstrap.min.css',
                'public/front/css/reset.css',
                'public/front/css/global.css',
                'public/front/css/main.css',
                'public/front/css/mobile.css',
                'public/back/dist/css/pages/login-register-lock.css'
            ],
            refresh: true,
        }),
    ],
});
