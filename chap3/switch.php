<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/vue@next"></script>
    -->
    <!-- <link href="../bootstrap-icons-1.5.0/bootstrap-icons.css" rel="stylesheet"> -->
    <link href="../bootstrap.min.css" rel="stylesheet">
    <script src="../bootstrap.bundle.min.js"></script>
    <script src="../vue.global.js"></script>
</head>

<body>
    <div id="app" class="p-4">
        <ul class="list-group mx-auto" style="max-width: 350px;">
            <h6>การตั้งค่า</h6>
            <!-- ใช้ v-for เพื่อสร้างแต่ละรายการ และภายในรายการจะจัดโรงร่างแบบ Flex -->
            <!-- เพื่อจัดแนวของ Item ในรายการให้ชิดขอบแต่ละด้าน -->
            <li v-for="item in list" class="list-group-item d-flex justify-content-between align-items-center">
                <span>
                    <!-- ไอคอน svg ซึ่งจะสลับคลาสให้สัมพันธ์กับสถานะ on/off ของ SWitch -->
                    <i class="lead bi" :class="item.isChecked ? item.on : item.off"></i>
                    <label class="ms-2">{{item.label}}</label>
                </span>
                <div class="form-check form-switch">
                    <input type="checkbox" class="form-check-input" v-model="item.isChecked">
                </div>
            </li>
        </ul>
    </div>

    <div class="bg-secondary bg-opacity-10 pt-3" style="border: 1px dashed black">
        <pre>
            &lt;div id="app" class="p-4"&gt;
                &lt;ul class="list-group mx-auto" style="max-width: 350px;"&gt;
                    &lt;h6&gt;การตั้งค่า &lt;/h6&gt;
                    &lt;!-- ใช้ v-for เพื่อสร้างแต่ละรายการ และภายในรายการจะจัดโรงร่างแบบ Flex --&gt;
                    &lt;!-- เพื่อจัดแนวของ Item ในรายการให้ชิดขอบแต่ละด้าน --&gt;
                    &lt;li v-for="item in list" class="list-group-item d-flex justify-content-between align-items-center"&gt;
                        &lt;span&gt;
                            &lt;!-- ไอคอน svg ซึ่งจะสลับคลาสให้สัมพันธ์กับสถานะ on/off ของ SWitch --&gt;
                            &lt;i class="lead bi" :class="item.isChecked ? item.on : item.off"&gt; &lt;/i&gt;
                            &lt;label class="ms-2"&gt;{{item.label}} &lt;/label&gt;
                        &lt;/span&gt;
                        &lt;div class="form-check form-switch"&gt;
                            &lt;input type="checkbox" class="form-check-input" v-model="item.isChecked"&gt;
                        &lt;/div&gt;
                    &lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
            <code>
            &lt;script&gt;
                Vue.createApp({
                    data() {
                        return {
                            //เนื่องจากแต่ละรายการมีองค์ประกอบปลีกย่อยหลายอย่าง
                            //จึงสร้างในแบบอาร์เรย์ของออบเจ็กต์ (รายการ)
                            list: [{
                                    label: 'เปิดการแจ้งเตือน',
                                    isChecked: true,
                                    off: 'bi-bell text-secondary',
                                    on: 'bi-bell-fill text-primary'
                                },
                                {
                                    label: 'รับข่าวสารทางอีเมล',
                                    isChecked: false,
                                    off: 'bi-envelope text-secondary',
                                    on: 'bi-envelope-fill text-primary'
                                },
                                {
                                    label: 'อนุญาตการเข้าถึงตำแหน่ง',
                                    isChecked: false,
                                    off: 'bi-geo-alt text-secondary',
                                    on: 'bi-geo-alt-fill text-primary'
                                },
                            ]
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
                    //เนื่องจากแต่ละรายการมีองค์ประกอบปลีกย่อยหลายอย่าง
                    //จึงสร้างในแบบอาร์เรย์ของออบเจ็กต์ (รายการ)
                    list: [{
                            label: 'เปิดการแจ้งเตือน',
                            isChecked: true,
                            off: 'bi-bell text-secondary',
                            on: 'bi-bell-fill text-primary'
                        },
                        {
                            label: 'รับข่าวสารทางอีเมล',
                            isChecked: false,
                            off: 'bi-envelope text-secondary',
                            on: 'bi-envelope-fill text-primary'
                        },
                        {
                            label: 'อนุญาตการเข้าถึงตำแหน่ง',
                            isChecked: false,
                            off: 'bi-geo-alt text-secondary',
                            on: 'bi-geo-alt-fill text-primary'
                        },
                    ]
                }
            }
        }).mount('#app')
    </script>
</body>

</html>