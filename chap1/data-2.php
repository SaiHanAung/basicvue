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
    <div id="app" class="m-4">
        <table class="table table-sm table-bordered table-striped">
            <tr class="table-dark">
                <th>สินค้า</th>
                <th>ราคา</th>
                <th>คงเหลือ</th>
            </tr>
            <tr>
                <td>{{ p1[0] }}</td>
                <td>{{ p1[1] }}</td>
                <td>{{ p1[2] }}</td>
            </tr>
            <tr>
                <td>{{ p2[0] }}</td>
                <td>{{ p2[1] }}</td>
                <td>{{ p2[2] }}</td>
            </tr>
            <tr>
                <td>{{ p3[0] }}</td>
                <td>{{ p3[1] }}</td>
                <td>{{ p3[2] }}</td>
            </tr>
        </table>
    </div>

    <div class="bg-secondary bg-opacity-10 pt-3" style="border: 1px dashed black">
        <pre>
            &lt;div id="app" class="m-4"&gt;
                &lt;table class="table table-sm table-bordered table-striped"&gt;
                    &lt;tr class="table-dark"&gt;
                        &lt;th&gt;สินค้า&lt;/th&gt;
                        &lt;th&gt;ราคา&lt;/th&gt;
                        &lt;th&gt;คงเหลือ&lt;/th&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;td&gt;{{ p1[0] }}&lt;/td&gt;
                        &lt;td&gt;{{ p1[1] }}&lt;/td&gt;
                        &lt;td&gt;{{ p1[2] }}&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;td&gt;{{ p2[0] }}&lt;/td&gt;
                        &lt;td&gt;{{ p2[1] }}&lt;/td&gt;
                        &lt;td&gt;{{ p2[2] }}&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;td&gt;{{ p3[0] }}&lt;/td&gt;
                        &lt;td&gt;{{ p3[1] }}&lt;/td&gt;
                        &lt;td&gt;{{ p3[2] }}&lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/table&gt;
            &lt;/div&gt;
            <code>
            &lt;script&gt;
                Vue.createApp({
                    data() {
                        return {
                            p1: ['Angular', 750, 5],
                            p2: ['React', 1000, 1],
                            p3: ['Vue', 500, 3]
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
                    p1: ['Angular', 750, 5],
                    p2: ['React', 1000, 1],
                    p3: ['Vue', 500, 3]
                }
            }
        }).mount('#app')
    </script>
</body>

</html>