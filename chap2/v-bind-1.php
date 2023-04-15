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
    <div id="app">
        <div class="vw-100 vh-100 p-4 text-center" :class="{
                'bg-light text-secondary': midday,
                'bg-dark bg-opacity-75 text-white': midnight
            }">
            <div class="mb-2">เลือก Theme:</div>
            <div class="btn-group" role="group">
                <input type="radio" id="md" class="btn-check" name="theme" :checked="midday">
                <label for="md" class="btn btn-outline-primary" @click="btnTheme_click">Midday</label>

                <input type="radio" id="mn" class="btn-check" name="theme" :checked="midnight">
                <label for="mn" class="btn btn-outline-primary" @click="btnTheme_click">Midnight</label>
            </div>

            <hr class="w-75 mx-auto my-4">

            <div class="fs-5 mb-3" :class="{
                    'fw-bold': bold, 
                    'fst-italic': italic, 
                    'text-decoration-underline': underline
                }">
                เลือกการจัดรูปแบบข้อความ
            </div>
            <div v-for="(style, i) in ['bold', 'italic', 'underline']" class="form-check form-check-inline text-start">
                <input type="checkbox" :id="'c'+i" class="form-check-input" :ref="style" @change="check_change">
                <label :for="'c'+i" class="form-check-label">{{style}}</label>
            </div>
            <hr class="w-75 mx-auto my-4">

            <div class="form-input m-auto" style="max-width: 250px;">
                <input type="text" class="form-control d-inline-block" @input="text_change"><br>
                <span class="text-start" :class="{'d-none':valid, 'd-block text-danger':error}">ต้องใส่ข้อมูล</span>
            </div>
        </div>
    </div>

    <div class="bg-secondary bg-opacity-10 pt-3" style="border: 1px dashed black">
        <pre>
            &lt;div id="app"&gt;
                &lt;div class="vw-100 vh-100 p-4 text-center" :class="{
                        'bg-light text-secondary': midday,
                        'bg-dark bg-opacity-75 text-white': midnight
                    }"&gt;
                    &lt;div class="mb-2"&gt;เลือก Theme:&lt;/div&gt;
                    &lt;div class="btn-group" role="group"&gt;
                        &lt;input type="radio" id="md" class="btn-check" name="theme" :checked="midday"&gt;
                        &lt;label for="md" class="btn btn-outline-primary" @click="btnTheme_click"&gt;Midday&lt;/label&gt;

                        &lt;input type="radio" id="mn" class="btn-check" name="theme" :checked="midnight"&gt;
                        &lt;label for="mn" class="btn btn-outline-primary" @click="btnTheme_click"&gt;Midnight&lt;/label&gt;
                    &lt;/div&gt;

                    &lt;hr class="w-75 mx-auto my-4"&gt;

                    &lt;div class="fs-5 mb-3" :class="{
                            'fw-bold': bold, 
                            'fst-italic': italic, 
                            'text-decoration-underline': underline
                        }"&gt;
                        เลือกการจัดรูปแบบข้อความ
                    &lt;/div&gt;
                    &lt;div v-for="(style, i) in ['bold', 'italic', 'underline']" class="form-check form-check-inline text-start"&gt;
                        &lt;input type="checkbox" :id="'c'+i" class="form-check-input" :ref="style" @change="check_change"&gt;
                        &lt;label :for="'c'+i" class="form-check-label"&gt;{{style}}&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;hr class="w-75 mx-auto my-4"&gt;

                    &lt;div class="form-input m-auto" style="max-width: 250px;"&gt;
                        &lt;input type="text" class="form-control d-inline-block" @input="text_change"&gt;&lt;br&gt;
                        &lt;span class="text-start" :class="{'d-none':valid, 'd-block text-danger':error}"&gt;ต้องใส่ข้อมูล&lt;/span&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            <code>
            &lt;script&gt;
                Vue.createApp({
                    data() {
                        return {
                            midday: true,
                            midnight: false,

                            bold: false,
                            italic: false,
                            underline: false,

                            valid: false,
                            error: true
                        }
                    },
                    methods: {
                        btnTheme_click(event) {
                            const isMidday = (event.target.innerText == 'Midday')
                            this.midday = isMidday
                            this.midnight = !isMidday
                        },
                        check_change() {
                            this.bold = this.$refs.bold.checked
                            this.italic = this.$refs.italic.checked
                            this.underline = this.$refs.underline.checked
                        },
                        text_change(event) {
                            const blank = (event.target.value.trim() == '')
                            this.valid = !blank
                            this.error = blank
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
                    midday: true,
                    midnight: false,

                    bold: false,
                    italic: false,
                    underline: false,

                    valid: false,
                    error: true
                }
            },
            methods: {
                btnTheme_click(event) {
                    const isMidday = (event.target.innerText == 'Midday')
                    this.midday = isMidday
                    this.midnight = !isMidday
                },
                check_change() {
                    this.bold = this.$refs.bold.checked
                    this.italic = this.$refs.italic.checked
                    this.underline = this.$refs.underline.checked
                },
                text_change(event) {
                    const blank = (event.target.value.trim() == '')
                    this.valid = !blank
                    this.error = blank
                }
            }
        }).mount('#app')
    </script>
</body>

</html>