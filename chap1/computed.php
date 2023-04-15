<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/vue@next"></script>
    -->
    <link href="../bootstrap.min.css" rel="stylesheet">
    <script src="../bootstrap.bundle.min.js"></script>
    <script src="../vue.global.js"></script>

    <style>
    </style>
</head>

<body>
    <div id="computed-app" class="fs-5 text-center m-4">
        วันนี้ตรงกับ {{ thaiDate }}
    </div>
    <div class="bg-secondary bg-opacity-10 pt-3" style="border: 1px dashed black">
        <pre>
            &lt;div id="app" class="fs-5 text-center m-4"&gt;
                วันนี้ตรงกับ {{ thaiDate }}
            &lt;/div&gt;
            <code>
            &lt;script&gt;
                Vue.createApp({
                    data() {
                        return {
                            now: new Date()
                        }
                    },
                    computed: {
                        thaiDate() {
                            const m = [
                                'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน',
                                'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'
                            ]
                            d = this.now
                            return `${d.getDate()} ${m[d.getMonth()]} ${d.getFullYear() + 543}`
                        }
                    }
                }).mount('#app')
            &lt;/script&gt;
            </code>
        </pre>
    </div>
    <script>
        Vue.createApp({
            data() {
                return {
                    now: new Date()
                }
            },
            computed: {
                thaiDate() {
                    const m = [
                        'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน',
                        'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'
                    ]
                    d = this.now
                    return `${d.getDate()} ${m[d.getMonth()]} ${d.getFullYear() + 543}`
                }
            }
        }).mount('#computed-app')
    </script>
</body>

</html>