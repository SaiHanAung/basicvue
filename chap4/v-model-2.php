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
    <div id="app" class="p-5">
        <spinner v-model="spinValue"></spinner>
        <span>{{spinValue}}</span>
    </div>

    <div class="bg-secondary bg-opacity-10 pt-3" style="border: 1px dashed black">
        <pre>
            &lt;div id="app" class="p-5"&gt;
                &lt;spinner v-model="spinValue"&gt;&lt;/spinner&gt;
                &lt;span&gt;{{spinValue}}&lt;/span&gt;
            &lt;/div&gt;
            <code>
            &lt;script&gt;
                const app = Vue.createApp({
                    data() {
                        return {
                            spinValue: 1,
                        }
                    },
                })

                app.component('spinner', {
                    data() {
                        return {
                            value: 1
                        }
                    },
                    methods: {
                        updateValue(event) {
                            const op = event.target.innerText //เครื่องหมายบนปุ่มที่ถูกคลิก
                            if (this.value == 1 && op == '-') {
                                return
                            }
                            eval(`this.value ${op}= 1`) //เช่น this.value += 1
                        }
                    },
                    template: `
                        &lt;div class="input-group">
                            &lt;button class="btn btn-outline-primary" @click="updateValue($event), $emit('update:modelvalue', value)">-&lt;/button> 
                            &lt;span class="d-flex align-items-center border-top border-bottom border-primary px-3">{{value}}&lt;/span>
                            &lt;button class="btn btn-outline-primary" @click="updateValue($event), $emit('update:modelValue', value)">+&lt;/button>
                        &lt;/div>
                    `
                })
                app.mount('#app')
            &lt;/script&gt;
            </code>
        </pre>
    </div>
    <script>
        const app = Vue.createApp({
            data() {
                return {
                    spinValue: 1,
                }
            },
        })

        app.component('spinner', {
            data() {
                return {
                    value: 1
                }
            },
            methods: {
                updateValue(event) {
                    const op = event.target.innerText //เครื่องหมายบนปุ่มที่ถูกคลิก
                    if (this.value == 1 && op == '-') {
                        return
                    }
                    eval(`this.value ${op}= 1`) //เช่น this.value += 1
                }
            },
            template: `
                <div class="input-group">
                    <button class="btn btn-outline-primary" @click="updateValue($event), $emit('update:modelvalue', value)">-</button> 
                    <span class="d-flex align-items-center border-top border-bottom border-primary px-3">{{value}}</span>
                    <button class="btn btn-outline-primary" @click="updateValue($event), $emit('update:modelValue', value)">+</button>
                </div>
            `
        })
        app.mount('#app')
    </script>
</body>

</html>