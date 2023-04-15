<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/vue@next"></script>
    -->
    <link href="../bootstrap.min.css" rel="stylesheet">
    <script src="../bootstrap.bundle.min.js"></script>
    <script src="../vue.global.js"></script>
</head>

<body>
    <div id="app" class="p-3">
        <span>One</span>
        <hl></hl>

        <span>Two</span>
        <hl></hl>

        <span>Three</span>
        <hl></hl>
    </div>

    <div class="bg-secondary bg-opacity-10 pt-3" style="border: 1px dashed black">
        <pre>
            &lt;div id="app" class="p-3"&gt;
                &lt;span&gt;One&lt;/span&gt;
                &lt;hl&gt;&lt;/hl&gt;

                &lt;span&gt;Two&lt;/span&gt;
                &lt;hl&gt;&lt;/hl&gt;

                &lt;span&gt;Three&lt;/span&gt;
                &lt;hl&gt;&lt;/hl&gt;
            &lt;/div&gt;
            <code>
            &lt;script&gt;
                const app = Vue.createApp({})

                app.component('hl', {
                    template: `
                        &lt;div style="margin: 10px 0 10px; border-top: dashed 1px gray;"&gt;&lt;/div&gt;
                    `
                })

                app.mount('#app')
            &lt;/script&gt;
            </code>
        </pre>
    </div>
    <script>
        const app = Vue.createApp({})

        app.component('hl', {
            template: `
                <div style="margin: 10px 0 10px; border-top: dashed 1px gray;"></div>
            `
        })

        app.mount('#app')
    </script>
</body>

</html>