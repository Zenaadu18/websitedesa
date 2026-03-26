<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script type="module" src="https://cdn.jsdelivr.net/npm/@webawesome/ui/dist/webawesome.js"></script>
    <title>Desa Camplong 2</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 text-gray-800">

    <x-navbar />

    <main>
        @yield('content')
    </main>

    <x-footer />
<script>
function clock() {
    return {
        time: '',
        date: '',
        startClock() {
            this.updateTime();
            setInterval(() => {
                this.updateTime();
            }, 1000);
        },
        updateTime() {
            let now = new Date();

            this.time = now.toLocaleTimeString('id-ID');

            this.date = now.toLocaleDateString('id-ID', {
                weekday: 'long',
                day: 'numeric',
                month: 'long',
                year: 'numeric'
            });
        }
    }
}
</script>
</body>
</html>