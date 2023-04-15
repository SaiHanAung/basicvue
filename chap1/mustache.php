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
    <div id="app" class="bg-dark bg-opacity-10 m-4 p-3">
        {{ 'Hello ' + 'Vue' }} <br>
        10 + 20 = {{ 10 + 20 }} <br>
        99 เป็นเลข {{ (99 % 2 == 0) ? 'คู่' : 'คี่' }} <br>
        วันนี้ตรงกับวันที่ {{ new Date().getDate() }} 
    </div>
    
    <div class="bg-secondary bg-opacity-10 pt-3" style="border: 1px dashed black">
        <pre>
            &lt;div id="app" class="bg-dark bg-opacity-10 m-4 p-3"&gt;
                {{ 'Hello ' + 'Vue' }} &lt;br&gt;
                10 + 20 = {{ 10 + 20 }} &lt;br&gt;
                99 เป็นเลข {{ (99 % 2 == 0) ? 'คู่' : 'คี่' }} &lt;br&gt;
                วันนี้ตรงกับวันที่ {{ new Date().getDate() }} 
            &lt;/div&gt;
            <code>
            &lt;script&gt;
                Vue.createApp({}).mount('#app')
            &lt;/script&gt;
            </code>
        </pre>
    </div>
    <script>
        Vue.createApp({}).mount('#app')
    </script>
</body>
</html>