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
    <div class="text-center">
        <div id="app" class="m-4 d-inline-block">
            <div v-show="success" class="alert alert-success">
                <span>ข้อมูลของท่านถูกจัดเก็บแล้ว</span>
            </div>
            <div v-show="error" class="alert alert-danger">
                <span>เกิดข้อผิดพลาด กรุณาลองใหม่อีกครั้ง</span>
            </div>
            <br>
            <button @click="btnSuccess_click" class="btn btn-success me-4">Success</button>
            <button @click="btnError_click" class="btn btn-danger">Error</button><br>
        </div>
    </div>
    
    <div class="bg-secondary bg-opacity-10 pt-3" style="border: 1px dashed black">
        <pre>
            &lt;div class="text-center"&gt;
                &lt;div id="app" class="m-4 d-inline-block"&gt;
                    &lt;div v-show="success" class="alert alert-success"&gt;
                        &lt;span&gt;ข้อมูลของท่านถูกจัดเก็บแล้ว&lt;/span&gt;
                    &lt;/div&gt;
                    &lt;div v-show="error" class="alert alert-danger"&gt;
                        &lt;span&gt;เกิดข้อผิดพลาด กรุณาลองใหม่อีกครั้ง&lt;/span&gt;
                    &lt;/div&gt;
                    &lt;br&gt;
                    &lt;button @click="btnSuccess_click" class="btn btn-success me-4"&gt;Success&lt;/button&gt;
                    &lt;button @click="btnError_click" class="btn btn-danger"&gt;Error&lt;/button&gt;&lt;br&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            <code>
            &lt;script&gt;
                Vue.createApp({
                    data() {
                        return {
                            success: false,
                            error: false
                        }
                    },
                    methods: {
                        btnSuccess_click() {
                            this.success = true
                            this.error = false
                        },
                        btnError_click() {
                            this.success = false
                            this.error = true
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
                    success: false,
                    error: false
                }
            },
            methods: {
                btnSuccess_click() {
                    this.success = true
                    this.error = false
                },
                btnError_click() {
                    this.success = false
                    this.error = true
                }
            }
        }).mount('#app')
    </script>
</body>
</html>