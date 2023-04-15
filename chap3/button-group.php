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
        <div class="vw-100 vh-100 p-4 text-center" :class="getTheme()">
            <div class="mb-2">เลือก Theme:</div>
            <div class="btn-group" role="group">
                <template v-for="th in themes">
                    <input type="radio" :id="th.name" class="btn-check" name="theme" :value="th.name" v-model="currentTheme">
                    <label :for="th.name" class="btn btn-outline-primary">{{th.name}}</label>
                </template>
            </div>
        </div>
    </div>
    
    <div class="bg-secondary bg-opacity-10 pt-3" style="border: 1px dashed black">
        <pre>
            &lt;div id="app"&gt;
                &lt;div class="vw-100 vh-100 p-4 text-center" :class="getTheme()"&gt;
                    &lt;div class="mb-2"&gt;เลือก Theme:&lt;/div&gt;
                    &lt;div class="btn-group" role="group"&gt;
                        &lt;template v-for="th in themes"&gt;
                            &lt;input type="radio" :id="th.name" class="btn-check" name="theme" :value="th.name" v-model="currentTheme"&gt;
                            &lt;label :for="th.name" class="btn btn-outline-primary"&gt;{{th.name}}&lt;/label&gt;
                        &lt;/template&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            <code>
            &lt;script&gt;
                Vue.createApp({
                    data() {
                        return {
                            themes: [{
                                    name: 'Day',
                                    class: 'bg-light text-secondary'
                                },
                                {
                                    name: 'Night',
                                    class: 'bg-dark bg-opacity-75 text-white'
                                },
                                {
                                    name: 'Morning',
                                    class: 'bg-warning bg-opacity-10 text-secondary'
                                },
                                {
                                    name: 'Evening',
                                    class: 'bg-secondary bg-opacity-25 text-success'
                                }
                            ],
                            currentTheme: 'Day',
                        }
                    },
                    methods: {
                        getTheme() {
                            //เมื่อเปลี่ยน Theme เราต้องตรวจสอบคลาสที่ใช้กับ Theme นั้น
                            //แต่เนื่องจากรายการเป็นอาร์เรย์ของออบเจ็กต์ 
                            //จึงต้องค้นหาออบเจ็กต์ของ Theme นั้น ว่าเป็นสมาชิกตัวใดในอาร์เรย์
                            //หลังจากได้ออบเจ็กต์นั้นมา จึงอ่านค่าจากพร็อปเพอร์ตี้ class ของมัน
                            let themeObject = this.themes.find(el => el.name == this.currentTheme)
                            return themeObject.class
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
                    themes: [{
                            name: 'Day',
                            class: 'bg-light text-secondary'
                        },
                        {
                            name: 'Night',
                            class: 'bg-dark bg-opacity-75 text-white'
                        },
                        {
                            name: 'Morning',
                            class: 'bg-warning bg-opacity-10 text-secondary'
                        },
                        {
                            name: 'Evening',
                            class: 'bg-secondary bg-opacity-25 text-success'
                        }
                    ],
                    currentTheme: 'Day',
                }
            },
            methods: {
                getTheme() {
                    //เมื่อเปลี่ยน Theme เราต้องตรวจสอบคลาสที่ใช้กับ Theme นั้น
                    //แต่เนื่องจากรายการเป็นอาร์เรย์ของออบเจ็กต์ 
                    //จึงต้องค้นหาออบเจ็กต์ของ Theme นั้น ว่าเป็นสมาชิกตัวใดในอาร์เรย์
                    //หลังจากได้ออบเจ็กต์นั้นมา จึงอ่านค่าจากพร็อปเพอร์ตี้ class ของมัน
                    let themeObject = this.themes.find(el => el.name == this.currentTheme)
                    return themeObject.class
                }
            }
        }).mount('#app')
    </script>
</body>

</html>