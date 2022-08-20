<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Grupo Palermo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0" style="width: 250px">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="300px" y="150px"
                         viewBox="0 0 1920 1920" style="enable-background:new 0 0 1920 1920;" xml:space="preserve">
                        <style type="text/css">
                            .st0{fill:#20208E;}
                            .st1{fill:#009FDD;}
                            .st2{fill:#FFFFFF;}
                        </style>
                                                <g id="VERSIÓN_POSITIVA">
                                                    <g>
                                                        <g>
                                                            <path class="st0" d="M-4706.93,782.43c0,0,201.55,102.16,224.18,113.6c22.64,11.44,43.27,25.96,43.27,59.85v87.93l-222.87-112.93
                                        c-29.71-15.33-44.58-35.5-44.58-62.13V782.43z"/>
                                                            <path class="st0" d="M-4140.67,984.4v-0.76c0-33.84-23.35-56.28-50.97-56.28s-50.58,22.44-50.58,56.28v0.76
                                        c0,33.84,22.96,56.28,50.58,56.28S-4140.67,1018.62-4140.67,984.4 M-4300.59,908.73c0-15.97,13.23-28.9,29.57-28.9
                                        c16.34,0,29.57,12.93,29.57,28.9v2.67c14.4-19.02,34.24-33.09,64.98-33.09c48.64,0,94.94,37.27,94.94,105.34v0.76
                                        c0,68.06-45.52,105.33-94.94,105.33c-31.52,0-50.97-14.07-64.98-30.42v60.84c0,15.96-13.23,28.9-29.57,28.9
                                        c-16.34,0-29.57-12.93-29.57-28.9V908.73z"/>
                                                            <path class="st0" d="M-3928.92,1014.06v-10.27c-10.12-4.57-23.35-7.6-37.74-7.6c-25.29,0-40.86,9.88-40.86,28.13v0.76
                                        c0,15.59,13.23,24.72,32.29,24.72C-3947.6,1049.8-3928.92,1034.97-3928.92,1014.06 M-4064.71,1027.37v-0.76
                                        c0-44.49,34.62-65.03,84.04-65.03c21.01,0,36.19,3.42,50.97,8.37v-3.42c0-23.95-15.17-37.26-44.74-37.26
                                        c-16.34,0-29.57,2.28-40.86,5.7c-3.5,1.14-5.83,1.52-8.56,1.52c-13.62,0-24.51-10.27-24.51-23.58c0-10.27,6.61-19.02,15.95-22.44
                                        c18.67-6.84,38.91-10.64,66.53-10.64c32.29,0,55.64,8.36,70.43,22.81c15.56,15.21,22.56,37.65,22.56,65.02v92.78
                                        c0,15.59-12.84,27.76-28.79,27.76c-17.12,0-28.4-11.78-28.4-23.95v-0.38c-14.39,15.59-34.24,25.86-63.04,25.86
                                        C-4032.42,1089.73-4064.71,1067.67-4064.71,1027.37"/>
                                                            <path class="st0" d="M-3831.87,834.96c0-15.97,13.23-28.9,29.57-28.9c16.34,0,29.57,12.93,29.57,28.9v224.35
                                        c0,15.97-13.23,28.89-29.57,28.89c-16.34,0-29.57-12.92-29.57-28.89V834.96z"/>
                                                            <path class="st0" d="M-3594.31,968.05c-3.5-25.86-19.07-43.35-43.97-43.35c-24.52,0-40.47,17.12-45.14,43.35H-3594.31z
                                         M-3632.44,1090.49c-62.64,0-108.94-42.97-108.94-105.34v-0.76c0-58.18,42.41-106.09,103.11-106.09
                                        c69.65,0,100.38,55.91,100.38,98.1c0,16.74-12.06,27.76-27.62,27.76h-117.11c5.83,26.23,24.51,39.93,50.97,39.93
                                        c16.34,0,29.96-4.94,42.02-13.69c4.28-3.04,8.18-4.56,14.4-4.56c13.23,0,22.96,9.89,22.96,22.81c0,7.61-3.5,13.31-7.78,17.12
                                        C-3578.36,1080.99-3602.09,1090.49-3632.44,1090.49"/>
                                                            <path class="st0" d="M-3506.88,908.73c0-15.97,13.23-28.9,29.58-28.9c16.34,0,29.56,12.93,29.56,28.9v9.13
                                        c8.57-19.77,22.57-38.03,40.08-38.03c18.29,0,28.79,11.79,28.79,28.14c0,15.21-10.12,24.33-22.18,27
                                        c-29.96,6.84-46.69,29.28-46.69,70.34v54c0,15.97-13.23,28.9-29.56,28.9c-16.34,0-29.58-12.93-29.58-28.9V908.73z"/>
                                                            <path class="st0" d="M-3359.7,908.73c0-15.97,13.23-28.9,29.58-28.9c16.34,0,29.56,12.93,29.56,28.9v2.28
                                        c13.62-17.11,31.52-32.7,61.48-32.7c27.23,0,47.85,11.79,58.75,32.32c18.29-20.91,40.08-32.32,68.48-32.32
                                        c43.96,0,70.42,25.86,70.42,74.91v106.09c0,15.97-13.23,28.9-29.57,28.9c-16.34,0-29.58-12.93-29.58-28.9v-87.08
                                        c0-27.38-12.45-41.45-34.62-41.45c-22.17,0-35.8,14.07-35.8,41.45v87.08c0,15.97-13.23,28.9-29.57,28.9
                                        c-16.34,0-29.57-12.93-29.57-28.9v-87.08c0-27.38-12.45-41.45-34.62-41.45c-22.18,0-35.8,14.07-35.8,41.45v87.08
                                        c0,15.97-13.23,28.9-29.56,28.9c-16.34,0-29.58-12.93-29.58-28.9V908.73z"/>
                                                            <path class="st0" d="M-2845.29,985.16v-0.76c0-30.04-22.18-56.28-54.86-56.28c-33.85,0-54.08,25.48-54.08,55.51v0.76
                                        c0,30.04,22.18,56.28,54.86,56.28C-2865.52,1040.68-2845.29,1015.19-2845.29,985.16 M-3012.6,985.16v-0.76
                                        c0-58.56,48.25-106.09,113.22-106.09c64.59,0,112.44,46.77,112.44,105.33v0.76c0,58.56-48.24,106.09-113.22,106.09
                                        C-2964.74,1090.49-3012.6,1043.71-3012.6,985.16"/>
                                                            <path class="st1" d="M-3356.32,758.59c0-34.46,26.2-56.66,58.8-56.66c21.83,0,36.1,10.2,45.03,22.69l-15.97,9.02
                                        c-6.07-8.22-16.64-14.63-29.06-14.63c-22.21,0-38.67,16.44-38.67,39.58c0,22.83,16.47,39.58,38.67,39.58
                                        c11.42,0,21.47-5.1,26.53-9.85v-16.9h-33.61V754.5h53.12v40.89c-10.95,12-26.74,20.02-46.04,20.02
                                        C-3330.11,815.41-3356.32,792.91-3356.32,758.59"/>
                                                            <path class="st1" d="M-3163.37,737.92c0-10.5-8.08-17.26-19.17-17.26h-27.06v34.83h27.06
                                        C-3171.45,755.48-3163.37,748.56-3163.37,737.92 M-3165.24,813.27l-24.68-40.87h-19.68v40.87h-19.64V703.76h49.23
                                        c22.18,0,36.8,13.95,36.8,34.32c0,19.38-13.1,30.05-26.74,32.18l27.57,43.02H-3165.24z"/>
                                                            <path class="st1" d="M-3124.64,769.93v-66.17h20v65.68c0,17.39,9.91,28.72,28.56,28.72c18.64,0,28.56-11.33,28.56-28.72v-65.68
                                        h20.01v66.17c0,27.09-15.96,45.32-48.56,45.32C-3108.51,815.24-3124.64,797.02-3124.64,769.93"/>
                                                            <path class="st1" d="M-2937.01,738.08c0-10.52-7.89-17.42-19-17.42h-27.02v34.65h27.02
                                        C-2944.9,755.31-2937.01,748.42-2937.01,738.08 M-3002.68,813.27V703.76h49.37c23.52,0,36.47,15.59,36.47,34.32
                                        c0,18.54-13.1,34.15-36.47,34.15h-29.72v41.05H-3002.68z"/>
                                                            <path class="st1" d="M-2810.79,758.59c0-22.66-14.62-39.58-37.15-39.58c-22.68,0-37.13,16.92-37.13,39.58
                                        c0,22.5,14.45,39.58,37.13,39.58C-2825.41,798.17-2810.79,781.09-2810.79,758.59 M-2905.22,758.59
                                        c0-32.67,23.71-56.66,57.28-56.66c33.43,0,57.33,23.98,57.33,56.66c0,32.69-23.9,56.66-57.33,56.66
                                        C-2881.51,815.25-2905.22,791.28-2905.22,758.59"/>
                                                            <path class="st1" d="M-4439.48,956.69c0,0-201.54,102.15-224.18,113.6c-22.63,11.45-43.28,25.96-43.28,59.85v87.93l222.89-112.94
                                        c29.71-15.32,44.57-35.49,44.57-62.11V956.69z"/>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="VERSIÓN_UNA_TINTA_NEGATIVA">
                                                    <rect x="-2356.32" width="1920" height="1920"/>
                                                    <g>
                                                        <g>
                                                            <path class="st2" d="M-2356.32,782.43c0,0,201.55,102.16,224.18,113.6c22.64,11.44,43.27,25.96,43.27,59.85v87.93l-222.87-112.93
                                        c-29.72-15.33-44.58-35.5-44.58-62.13V782.43z"/>
                                                            <path class="st2" d="M-1790.06,984.4v-0.76c0-33.84-23.35-56.28-50.97-56.28s-50.58,22.44-50.58,56.28v0.76
                                        c0,33.84,22.96,56.28,50.58,56.28S-1790.06,1018.62-1790.06,984.4 M-1949.97,908.73c0-15.97,13.23-28.9,29.57-28.9
                                        c16.34,0,29.57,12.93,29.57,28.9v2.67c14.4-19.02,34.24-33.09,64.98-33.09c48.64,0,94.94,37.27,94.94,105.34v0.76
                                        c0,68.06-45.52,105.33-94.94,105.33c-31.52,0-50.97-14.07-64.98-30.42v60.84c0,15.96-13.23,28.9-29.57,28.9
                                        c-16.34,0-29.57-12.93-29.57-28.9V908.73z"/>
                                                            <path class="st2" d="M-1578.31,1014.06v-10.27c-10.12-4.57-23.35-7.6-37.74-7.6c-25.29,0-40.86,9.88-40.86,28.13v0.76
                                        c0,15.59,13.23,24.72,32.29,24.72C-1596.99,1049.8-1578.31,1034.97-1578.31,1014.06 M-1714.1,1027.37v-0.76
                                        c0-44.49,34.62-65.03,84.04-65.03c21.01,0,36.19,3.42,50.97,8.37v-3.42c0-23.95-15.17-37.26-44.74-37.26
                                        c-16.34,0-29.57,2.28-40.86,5.7c-3.5,1.14-5.83,1.52-8.56,1.52c-13.62,0-24.51-10.27-24.51-23.58c0-10.27,6.61-19.02,15.95-22.44
                                        c18.67-6.84,38.91-10.64,66.53-10.64c32.29,0,55.64,8.36,70.43,22.81c15.56,15.21,22.56,37.65,22.56,65.02v92.78
                                        c0,15.59-12.84,27.76-28.79,27.76c-17.12,0-28.4-11.78-28.4-23.95v-0.38c-14.39,15.59-34.24,25.86-63.04,25.86
                                        C-1681.81,1089.73-1714.1,1067.67-1714.1,1027.37"/>
                                                            <path class="st2" d="M-1481.26,834.96c0-15.97,13.23-28.9,29.57-28.9c16.34,0,29.57,12.93,29.57,28.9v224.35
                                        c0,15.97-13.23,28.89-29.57,28.89c-16.34,0-29.57-12.92-29.57-28.89V834.96z"/>
                                                            <path class="st2" d="M-1243.69,968.05c-3.5-25.86-19.07-43.35-43.97-43.35c-24.52,0-40.47,17.12-45.14,43.35H-1243.69z
                                         M-1281.83,1090.49c-62.64,0-108.94-42.97-108.94-105.34v-0.76c0-58.18,42.41-106.09,103.11-106.09
                                        c69.65,0,100.38,55.91,100.38,98.1c0,16.74-12.06,27.76-27.62,27.76h-117.11c5.83,26.23,24.51,39.93,50.97,39.93
                                        c16.34,0,29.96-4.94,42.02-13.69c4.28-3.04,8.18-4.56,14.4-4.56c13.23,0,22.96,9.89,22.96,22.81c0,7.61-3.5,13.31-7.78,17.12
                                        C-1227.74,1080.99-1251.48,1090.49-1281.83,1090.49"/>
                                                            <path class="st2" d="M-1156.26,908.73c0-15.97,13.23-28.9,29.58-28.9c16.34,0,29.56,12.93,29.56,28.9v9.13
                                        c8.57-19.77,22.57-38.03,40.08-38.03c18.29,0,28.79,11.79,28.79,28.14c0,15.21-10.12,24.33-22.18,27
                                        c-29.96,6.84-46.69,29.28-46.69,70.34v54c0,15.97-13.23,28.9-29.56,28.9c-16.34,0-29.58-12.93-29.58-28.9V908.73z"/>
                                                            <path class="st2" d="M-1009.09,908.73c0-15.97,13.23-28.9,29.58-28.9c16.34,0,29.56,12.93,29.56,28.9v2.28
                                        c13.62-17.11,31.52-32.7,61.48-32.7c27.23,0,47.85,11.79,58.75,32.32c18.29-20.91,40.08-32.32,68.48-32.32
                                        c43.96,0,70.42,25.86,70.42,74.91v106.09c0,15.97-13.23,28.9-29.57,28.9c-16.34,0-29.58-12.93-29.58-28.9v-87.08
                                        c0-27.38-12.45-41.45-34.62-41.45c-22.17,0-35.8,14.07-35.8,41.45v87.08c0,15.97-13.23,28.9-29.57,28.9
                                        c-16.34,0-29.57-12.93-29.57-28.9v-87.08c0-27.38-12.45-41.45-34.62-41.45c-22.18,0-35.8,14.07-35.8,41.45v87.08
                                        c0,15.97-13.23,28.9-29.56,28.9c-16.34,0-29.58-12.93-29.58-28.9V908.73z"/>
                                                            <path class="st2" d="M-494.68,985.16v-0.76c0-30.04-22.18-56.28-54.86-56.28c-33.85,0-54.08,25.48-54.08,55.51v0.76
                                        c0,30.04,22.18,56.28,54.86,56.28C-514.91,1040.68-494.68,1015.19-494.68,985.16 M-661.99,985.16v-0.76
                                        c0-58.56,48.25-106.09,113.22-106.09c64.59,0,112.44,46.77,112.44,105.33v0.76c0,58.56-48.24,106.09-113.22,106.09
                                        C-614.13,1090.49-661.99,1043.71-661.99,985.16"/>
                                                            <path class="st2" d="M-1005.7,758.59c0-34.46,26.2-56.66,58.8-56.66c21.84,0,36.1,10.2,45.03,22.69l-15.97,9.02
                                        c-6.07-8.22-16.64-14.63-29.06-14.63c-22.21,0-38.67,16.44-38.67,39.58c0,22.83,16.47,39.58,38.67,39.58
                                        c11.42,0,21.47-5.1,26.53-9.85v-16.9h-33.61V754.5h53.12v40.89c-10.95,12-26.74,20.02-46.04,20.02
                                        C-979.5,815.41-1005.7,792.91-1005.7,758.59"/>
                                                            <path class="st2" d="M-812.76,737.92c0-10.5-8.08-17.26-19.17-17.26h-27.06v34.83h27.06
                                        C-820.84,755.48-812.76,748.56-812.76,737.92 M-814.62,813.27l-24.68-40.87h-19.68v40.87h-19.64V703.76h49.23
                                        c22.18,0,36.8,13.95,36.8,34.32c0,19.38-13.1,30.05-26.74,32.18l27.57,43.02H-814.62z"/>
                                                            <path class="st2" d="M-774.03,769.93v-66.17h20v65.68c0,17.39,9.91,28.72,28.56,28.72c18.64,0,28.56-11.33,28.56-28.72v-65.68
                                        h20.01v66.17c0,27.09-15.96,45.32-48.56,45.32C-757.9,815.24-774.03,797.02-774.03,769.93"/>
                                                            <path class="st2" d="M-586.39,738.08c0-10.52-7.89-17.42-19-17.42h-27.02v34.65h27.02
                                        C-594.29,755.31-586.39,748.42-586.39,738.08 M-652.07,813.27V703.76h49.37c23.52,0,36.47,15.59,36.47,34.32
                                        c0,18.54-13.1,34.15-36.47,34.15h-29.72v41.05H-652.07z"/>
                                                            <path class="st2" d="M-460.18,758.59c0-22.66-14.62-39.58-37.15-39.58c-22.68,0-37.13,16.92-37.13,39.58
                                        c0,22.5,14.45,39.58,37.13,39.58C-474.8,798.17-460.18,781.09-460.18,758.59 M-554.61,758.59c0-32.67,23.71-56.66,57.28-56.66
                                        c33.43,0,57.33,23.98,57.33,56.66c0,32.69-23.9,56.66-57.33,56.66C-530.9,815.25-554.61,791.28-554.61,758.59"/>
                                                            <path class="st2" d="M-2088.86,956.69c0,0-201.54,102.15-224.18,113.6c-22.63,11.45-43.28,25.96-43.28,59.85v87.93l222.89-112.94
                                        c29.71-15.32,44.57-35.49,44.57-62.11V956.69z"/>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="VERSIÓN_UNA_TINTA_NEGRA">
                                                    <g>
                                                        <g>
                                                            <path d="M0,782.43c0,0,201.55,102.16,224.18,113.6c22.64,11.44,43.27,25.96,43.27,59.85v87.93L44.58,930.88
                                        C14.87,915.55,0,895.38,0,868.75V782.43z"/>
                                                            <path d="M566.26,984.4v-0.76c0-33.84-23.35-56.28-50.97-56.28s-50.58,22.44-50.58,56.28v0.76c0,33.84,22.96,56.28,50.58,56.28
                                        S566.26,1018.62,566.26,984.4 M406.34,908.73c0-15.97,13.23-28.9,29.57-28.9c16.34,0,29.57,12.93,29.57,28.9v2.67
                                        c14.4-19.02,34.24-33.09,64.98-33.09c48.64,0,94.94,37.27,94.94,105.34v0.76c0,68.06-45.52,105.33-94.94,105.33
                                        c-31.52,0-50.97-14.07-64.98-30.42v60.84c0,15.96-13.23,28.9-29.57,28.9c-16.34,0-29.57-12.93-29.57-28.9V908.73z"/>
                                                            <path d="M778.01,1014.06v-10.27c-10.12-4.57-23.35-7.6-37.74-7.6c-25.29,0-40.86,9.88-40.86,28.13v0.76
                                        c0,15.59,13.23,24.72,32.29,24.72C759.33,1049.8,778.01,1034.97,778.01,1014.06 M642.22,1027.37v-0.76
                                        c0-44.49,34.62-65.03,84.04-65.03c21.01,0,36.19,3.42,50.97,8.37v-3.42c0-23.95-15.17-37.26-44.74-37.26
                                        c-16.34,0-29.57,2.28-40.86,5.7c-3.5,1.14-5.83,1.52-8.56,1.52c-13.62,0-24.51-10.27-24.51-23.58c0-10.27,6.61-19.02,15.95-22.44
                                        c18.67-6.84,38.91-10.64,66.53-10.64c32.29,0,55.64,8.36,70.43,22.81c15.56,15.21,22.56,37.65,22.56,65.02v92.78
                                        c0,15.59-12.84,27.76-28.79,27.76c-17.12,0-28.4-11.78-28.4-23.95v-0.38c-14.39,15.59-34.24,25.86-63.04,25.86
                                        C674.51,1089.73,642.22,1067.67,642.22,1027.37"/>
                                                            <path d="M875.06,834.96c0-15.97,13.23-28.9,29.57-28.9c16.34,0,29.57,12.93,29.57,28.9v224.35c0,15.97-13.23,28.89-29.57,28.89
                                        c-16.34,0-29.57-12.92-29.57-28.89V834.96z"/>
                                                            <path d="M1112.62,968.05c-3.5-25.86-19.07-43.35-43.97-43.35c-24.52,0-40.47,17.12-45.14,43.35H1112.62z M1074.49,1090.49
                                        c-62.64,0-108.94-42.97-108.94-105.34v-0.76c0-58.18,42.41-106.09,103.11-106.09c69.65,0,100.38,55.91,100.38,98.1
                                        c0,16.74-12.06,27.76-27.62,27.76H1024.3c5.83,26.23,24.51,39.93,50.97,39.93c16.34,0,29.96-4.94,42.02-13.69
                                        c4.28-3.04,8.18-4.56,14.4-4.56c13.23,0,22.96,9.89,22.96,22.81c0,7.61-3.5,13.31-7.78,17.12
                                        C1128.57,1080.99,1104.84,1090.49,1074.49,1090.49"/>
                                                            <path d="M1200.05,908.73c0-15.97,13.23-28.9,29.58-28.9c16.34,0,29.56,12.93,29.56,28.9v9.13c8.57-19.77,22.57-38.03,40.08-38.03
                                        c18.29,0,28.79,11.79,28.79,28.14c0,15.21-10.12,24.33-22.18,27c-29.96,6.84-46.69,29.28-46.69,70.34v54
                                        c0,15.97-13.23,28.9-29.56,28.9c-16.34,0-29.58-12.93-29.58-28.9V908.73z"/>
                                                            <path d="M1347.23,908.73c0-15.97,13.23-28.9,29.58-28.9c16.34,0,29.56,12.93,29.56,28.9v2.28c13.62-17.11,31.52-32.7,61.48-32.7
                                        c27.23,0,47.85,11.79,58.75,32.32c18.29-20.91,40.08-32.32,68.48-32.32c43.96,0,70.42,25.86,70.42,74.91v106.09
                                        c0,15.97-13.23,28.9-29.57,28.9c-16.34,0-29.58-12.93-29.58-28.9v-87.08c0-27.38-12.45-41.45-34.62-41.45
                                        c-22.17,0-35.8,14.07-35.8,41.45v87.08c0,15.97-13.23,28.9-29.57,28.9c-16.34,0-29.57-12.93-29.57-28.9v-87.08
                                        c0-27.38-12.45-41.45-34.62-41.45c-22.18,0-35.8,14.07-35.8,41.45v87.08c0,15.97-13.23,28.9-29.56,28.9
                                        c-16.34,0-29.58-12.93-29.58-28.9V908.73z"/>
                                                            <path d="M1861.64,985.16v-0.76c0-30.04-22.18-56.28-54.86-56.28c-33.85,0-54.08,25.48-54.08,55.51v0.76
                                        c0,30.04,22.18,56.28,54.86,56.28C1841.41,1040.68,1861.64,1015.19,1861.64,985.16 M1694.33,985.16v-0.76
                                        c0-58.56,48.25-106.09,113.22-106.09c64.59,0,112.44,46.77,112.44,105.33v0.76c0,58.56-48.24,106.09-113.22,106.09
                                        C1742.19,1090.49,1694.33,1043.71,1694.33,985.16"/>
                                                            <path d="M1350.61,758.59c0-34.46,26.2-56.66,58.8-56.66c21.84,0,36.1,10.2,45.03,22.69l-15.97,9.02
                                        c-6.07-8.22-16.64-14.63-29.06-14.63c-22.21,0-38.67,16.44-38.67,39.58c0,22.83,16.47,39.58,38.67,39.58
                                        c11.42,0,21.47-5.1,26.53-9.85v-16.9h-33.61V754.5h53.12v40.89c-10.95,12-26.74,20.02-46.04,20.02
                                        C1376.82,815.41,1350.61,792.91,1350.61,758.59"/>
                                                            <path d="M1543.56,737.92c0-10.5-8.08-17.26-19.17-17.26h-27.06v34.83h27.06C1535.48,755.48,1543.56,748.56,1543.56,737.92
                                         M1541.69,813.27l-24.68-40.87h-19.68v40.87h-19.64V703.76h49.23c22.18,0,36.8,13.95,36.8,34.32c0,19.38-13.1,30.05-26.74,32.18
                                        l27.57,43.02H1541.69z"/>
                                                            <path d="M1582.29,769.93v-66.17h20v65.68c0,17.39,9.91,28.72,28.56,28.72c18.64,0,28.56-11.33,28.56-28.72v-65.68h20.01v66.17
                                        c0,27.09-15.96,45.32-48.56,45.32C1598.42,815.24,1582.29,797.02,1582.29,769.93"/>
                                                            <path d="M1769.92,738.08c0-10.52-7.89-17.42-19-17.42h-27.02v34.65h27.02C1762.03,755.31,1769.92,748.42,1769.92,738.08
                                         M1704.25,813.27V703.76h49.37c23.52,0,36.47,15.59,36.47,34.32c0,18.54-13.1,34.15-36.47,34.15h-29.72v41.05H1704.25z"/>
                                                            <path d="M1896.14,758.59c0-22.66-14.62-39.58-37.15-39.58c-22.68,0-37.13,16.92-37.13,39.58c0,22.5,14.45,39.58,37.13,39.58
                                        C1881.52,798.17,1896.14,781.09,1896.14,758.59 M1801.71,758.59c0-32.67,23.71-56.66,57.28-56.66
                                        c33.43,0,57.33,23.98,57.33,56.66c0,32.69-23.9,56.66-57.33,56.66C1825.42,815.25,1801.71,791.28,1801.71,758.59"/>
                                                            <path d="M267.45,956.69c0,0-201.54,102.15-224.18,113.6C20.65,1081.74,0,1096.25,0,1130.13v87.93l222.89-112.94
                                        c29.71-15.32,44.57-35.49,44.57-62.11V956.69z"/>
                                                        </g>
                                                    </g>
                                                </g>
                        </svg>
                </div>
                <h3>Cambio de prueba</h3>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
