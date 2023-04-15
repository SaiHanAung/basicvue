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
</head>
<body>
    <div id="app" class="bg-primary bg-opacity-10 m-4 p-3">
        ปีนี้: {{ currentYear }} <br>
        ปีเกิด: {{ yearBorn }} <br>
        ปีนี้อายุ: {{ age() }} <br>
        ปี 2029 จะมีอายุ: {{ ageByYear(2029) }} <br>
    </div>
    
    <div class="bg-secondary bg-opacity-10 pt-3" style="border: 1px dashed black">
        <pre>
            &lt;div id="app" class="bg-primary bg-opacity-10 m-4 p-3"&gt;
                ปีนี้: {{ currentYear }} &lt;br&gt;
                ปีเกิด: {{ yearBorn }} &lt;br&gt;
                ปีนี้อายุ: {{ age() }} &lt;br&gt;
                ปี 2029 จะมีอายุ: {{ ageByYear(2029) }} &lt;br&gt;
            &lt;/div&gt;
            <code>
            &lt;script&gt;
                Vue.createApp({
                    data() {
                        return {
                            currentYear: new Date().getFullYear(),
                            yearBorn: 2014
                        }
                    },          
                    methods: {
                        age() {
                            return this.currentYear - this.yearBorn
                        },
                        ageByYear(year) {
                            return year - this.yearBorn
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
                    currentYear: new Date().getFullYear(),
                    yearBorn: 2014
                }
            },          
            methods: {
                age() {
                    return this.currentYear - this.yearBorn
                },
                ageByYear(year) {
                    return year - this.yearBorn
                }
            }
        }).mount('#app')
    </script>
</body>
</html>