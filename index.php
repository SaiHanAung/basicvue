<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vue - Basic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="./Material.css" rel="stylesheet">
    <script src="./vue.global.js"></script>

    <style>
        [v-cloak] {
            display: none;
        }
    </style>
</head>

<body>
    <div class="row gx-0" id="main-app">
        <div class="border-end col-lg-2 d-none d-lg-block" id="nav-menu">
            <nav class="bg-light px-3 py-3 vh-100">
                <button class="btn px-0 btn-light me-3 d-block d-lg-none" @click="toggleClick">
                    <span class="material-symbols-rounded">menu</span>
                </button>
                <div class="text-center mb-3" id="nav-logo">
                    <a href="/" class="w-100">
                        <picture>
                            <source type="image/webp" srcset="" style="width: 175px;">
                            <img src="" style="width: 175px;" alt="logo">
                        </picture>
                    </a>
                </div>
                <div class="overflow-auto" id="nav-scroll" v-cloak>
                    <div v-for="(topic, topici) in topics">
                        <div class="mb-2">
                            <p class="text-muted m-0 mb-1">{{topic.head}}</p>
                            <span v-for="(list, i) in topic.path">
                                <a href="javascript:void(0)" @click="openIframe(list, topic.head)" class="btn btn-light w-100 text-start d-flex" role="button">{{topic.list[i]}}</a>
                            </span>
                        </div>
                    </div>
                    <hr>
                </div>
            </nav>
        </div>
        <div class="col-lg-10" id="content-section">
            <div class="nav bg-light py-2 py-lg-1 px-4 border-bottom align-items-center" id="top-bar">
                <button class="btn px-0 btn-light me-3" @click="toggleClick">
                    <span class="material-symbols-rounded">menu</span>
                </button>
                <h3 class="fw-bold align-self-center" v-cloak>{{ name }}</h3>
                <div class="ms-auto">By sai ssgm</div>
            </div>
            <div :class="['p-4', {'overflow-auto': viewMode != 'iframe'}]" id="content-placholder">

                <div :class="{'d-none': viewMode == 'iframe'}">
                    <h3>จากพี่ซายเอง นี่เป็นตัวอย่าง Vue แบบพื้นฐาน เลือกดูตัวอย่างโค้ดด้านซ้ายมือได้เลย <span>&#128521;</span></h3>
                    <hr>
                    <p>CDN ที่ใช้ในตัวอย่าง</p>
                    <div class="bg-secondary bg-opacity-10 p-3 rounded-1">
                        <p class="m-0">
                            &lt;!-- ICON --&gt;
                            &lt;link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet"&gt;
                        </p>
                        <p class="m-0">
                            &lt;!-- CSS --&gt;
                            &lt;link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"&gt;
                        </p>
                        <p class="m-0">
                            &lt;!-- JS --&gt;
                            &lt;script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"&gt;&lt;/script&gt;
                        </p>
                        <p class="m-0">
                            &lt;!-- VUE --&gt;
                            &lt;script src="https://unpkg.com/vue@next"&gt;&lt;/script&gt;
                        </p>
                    </div>
                    <hr>
                    <p>
                        ในตัวอย่างนี้จะเขียนบนไฟล์นามสกุล .php ซึ่งตาม Syntax ของการนำตัวแปรมาใช้บน HTML
                        เราจะใช้ <span v-text="mustache" class="bg-secondary bg-opacity-25 p-1 rounded-1"></span>
                        (Mustache) ครอบตัวแปรที่จะนำมาแสดง แต่บน Laravel เราจะเขียนบนไฟล์นามสกุล .blade.php ซึ่งต้องเพิ่ม @ นำหน้า Mustache
                        <label class="bg-secondary bg-opacity-25 p-1 rounded-1">@<span v-text="mustache"></span></label>
                        เพื่อให้ใช้งาน Syntax ตัวนี้ได้ เพราะ Laravel เองก็ใช้ <span v-text="mustache" class="bg-secondary bg-opacity-25 p-1 rounded-1"></span>
                        อยู่แล้ว มันเลยใช้ซ้ำกันไม่ได้
                    </p>
                    <p>
                        ตามโครงสร้างของตัวอย่างในการสร้าง Vue app เนื่องจากถูกอ้างอิงมาจาก CDN ไฟล์ จะเริ่มด้วยคำสั่ง Vue.createApp({}).mount('#ไอดีของ Element ที่จะให้ Vue แสดงผล')
                    </p>
                    <p>
                        แต่ด้วยเว็บไซต์ของเราจะอ้างอิงถึง Module ที่ถูกติดตั้งผ่าน npm จะใช้แค่ createApp({}).mount('#ไอดีของ Element ที่จะให้ Vue แสดงผล') บนไฟล์นามสกุล .js
                    </p>
                    <div class="bg-secondary bg-opacity-10 p-3 rounded-1">
                        <p><u>โครงสร้าง Vue พื้นฐาน</u></p>
                        <pre>
Vue.createApp({
    data() {
        return {
            now: new Date() <-- ตัวแปร ภายใน data() ที่ถูก return นี้จะสามารถนำไปใช้บน HTML หรือนำไปจัดการอะไรบางอย่างในฟังก์ชั่นภายใน methods ได้
                             -- สามารถกำหนดประเภทของข้อมูลได้ทุกรูปแบบไม่ว่าจะเป็น String, Object, Array หรือแม้แต่ Function ก็ได้เช่นกัน
        }
    },          
    methods: {
        thaiDate() { <-- thaiDate() คือชื่อฟังก์ชั่นภายใน Vue นี้
            const m = [
                'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน',
                'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'
            ]
            d = this.now <-- การอ้างอิงถึงตัวแปรที่ถูกกำหนดไว้ใน data() ให้ใช้ keyword (this) นำหน้าเสมอ 
                          -- การอ้างอิงถึงฟังก์ชั่นอื่นภายใน Vue นี้ก็เช่นเดียวกันต้องใช้ this นำหน้าเสมอ
            return `${d.getDate()} ${m[d.getMonth()]} ${d.getFullYear() + 543}`
        }
    }
}).mount(#ไอดีของ Element ที่จะให้ Vue แสดงผล)
                        </pre>
                    </div>
                </div>

                <iframe id="iframe-placeholder" :class="{ 'd-none': viewMode != 'iframe' }" class="w-100 h-100" src="" frameborder="0"></iframe>

            </div>
        </div>
    </div>

    <script type="text/javascript">
        const c = console.log.bind()

        function resizeViewport() {
            let window_height = window.innerHeight
            let topbar_height = document.getElementById('top-bar').offsetHeight
            let nav_logo_height = document.getElementById('nav-logo').offsetHeight

            //NAVBAR
            let navbar = document.getElementById('nav-scroll')
            navbar.style.cssText = 'max-height: ' + (window_height - nav_logo_height - 50) + 'px'

            //CONTENT
            let contentPlaceholer = document.getElementById('content-placholder')
            contentPlaceholer.style.cssText = 'max-height: ' + (window_height - topbar_height) + 'px; height: ' + (
                window_height - topbar_height) + 'px;'
        }
        window.addEventListener('load', resizeViewport());
        window.onresize = resizeViewport

        const mainApp = Vue.createApp({
            data() {
                return {
                    viewMode: "all",
                    mustache: '{{ }}',
                    name: '',
                    topics: [{
                            head: "chap 1",
                            list: ["mustache", "data 1", "data 2", "methods", "computed", "event 1", "event 2", "event 3", "ref"],
                            path: ["chap1/mustache.php", "chap1/data-1.php", "chap1/data-2.php", "chap1/methods.php", "chap1/computed.php", "chap1/event-1.php", "chap1/event-2.php", "chap1/event-3.php", "chap1/ref.php"],
                        },
                        {
                            head: "chap 2",
                            list: ["v-html", "v-show", "v-if", "v-if v-else", "v-if v-else-if", "v-for", "v-for templet", "v-bind 1", "v-bind 2"],
                            path: ["chap2/v-html.php", "chap2/v-show.php", "chap2/v-if.php", "chap2/v-if-else.php", "chap2/v-if-elseif.php", "chap2/v-for.php", "chap2/v-for-template.php", "chap2/v-bind-1.php", "chap2/v-bind-2.php"],
                        },
                        {
                            head: "chap 3",
                            list: ["v-model", "v-bind", "text 1", "text 2", "checkbox", "switch", "radio", "radio 2", "button group", "select", "form validation"],
                            path: ["chap3/v-model.php", "chap3/v-bind.php", "chap3/text-1.php", "chap3/text-2.php", "chap3/checkbox.php", "chap3/switch.php", "chap3/radio.php", "chap3/radio-2.php", "chap3/button-group.php", "chap3/select.php", "chap3/form-validation.php"],
                        },
                        {
                            head: "chap 4",
                            list: ["custom hr", "component options", "props", "custom event", "v-model 1", "v-model 2", "using module"],
                            path: ["chap4/custom-hr.php", "chap4/component-options.php", "chap4/props.php", "chap4/custom-event.php", "chap4/v-model-1.php", "chap4/v-model-2.php", "chap4/using-module.php"],
                        },
                    ]
                }
            },
            methods: {
                openIframe(path, name) {
                    let iframe = document.getElementById("iframe-placeholder"),
                        index = 0
                    this.viewMode = "iframe";
                    iframe.src = path;
                    this.topics.forEach(el => {
                        if (el.path.includes(path)) {
                            index = el.path.indexOf(path)
                            this.name = `${name} - ${el.list[index]}`
                        }
                    })
                },
                toggleMultipleClass(element, class_arr = []) {
                    for (classes of class_arr) {
                        element.classList.toggle(classes)
                    }
                },
                toggleClick() {
                    let navMenu = document.getElementById('nav-menu')
                    let content = document.getElementById('content-section')
                    this.toggleMultipleClass(navMenu, ['d-lg-block', 'd-none', 'd-lg-none'])
                    this.toggleMultipleClass(content, ['col-lg-10', 'col-12', 'd-lg-block', 'd-none'])
                }
            },
        }).mount('#main-app')
    </script>
</body>

</html>