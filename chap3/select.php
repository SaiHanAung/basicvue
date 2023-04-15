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

<body class="p-4">
    <div id="app" class="mb-3">
        <form class="mx-auto" style="max-width: 300px;">
            <div class="">
                <label for="maptype" class="form-label">ชนิดแผนที่</label>
                <select id="maptype" class="form-select" v-model="selectedMapType">
                    <option v-for="mt in mapTypes">{{mt.text}}</option> <!-- :value="mt.value" -->
                </select>
            </div>
            <!-- รายชื่อภาค -->
            <div class="mt-3">
                <label for="part" class="form-label">ภาค</label>
                <select id="part" class="form-select" v-model="selectedPart">
                    <option v-for="loc in location" :value="loc.part">{{loc.part}}</option>
                </select>
            </div>
            <!-- รายชื่อจังหวัด -->
            <div class="mt-3">
                <label for="province" class="form-label">จังหวัด</label>
                <select id="province" class="form-select" v-model="selectedProvince">
                    <option v-for="pv in getProvinces" :value="pv">{{pv}}</option>
                </select>
            </div>

            <div class="bg-success bg-opacity-10 p-2 mt-4">
                <b>รายการที่เลือก</b> <br>
                ชนิดแผนที่: <span class="text-danger">{{ selectedMapType }}</span> <br>
                ภาค: <span class="text-danger">{{ selectedPart }}</span> <br>
                จังหวัด: <span class="text-danger">{{ selectedProvince }}</span>
            </div>
        </form>
    </div>
    
    <div class="bg-secondary bg-opacity-10 pt-3" style="border: 1px dashed black">
        <pre>
            &lt;div id="app"&gt;
                &lt;form class="mx-auto" style="max-width: 300px;"&gt;
                    &lt;div class=""&gt;
                        &lt;label for="maptype" class="form-label"&gt;ชนิดแผนที่&lt;/label&gt;
                        &lt;select id="maptype" class="form-select" v-model="selectedMapType"&gt;
                            &lt;option v-for="mt in mapTypes"&gt;{{mt.text}}&lt;/option&gt; &lt;!-- :value="mt.value" --&gt;
                        &lt;/select&gt;
                    &lt;/div&gt;
                    &lt;!-- รายชื่อภาค --&gt;
                    &lt;div class="mt-3"&gt;
                        &lt;label for="part" class="form-label"&gt;ภาค&lt;/label&gt;
                        &lt;select id="part" class="form-select" v-model="selectedPart"&gt;
                            &lt;option v-for="loc in location" :value="loc.part"&gt;{{loc.part}}&lt;/option&gt;
                        &lt;/select&gt;
                    &lt;/div&gt;
                    &lt;!-- รายชื่อจังหวัด --&gt;
                    &lt;div class="mt-3"&gt;
                        &lt;label for="province" class="form-label"&gt;จังหวัด&lt;/label&gt;
                        &lt;select id="province" class="form-select" v-model="selectedProvince"&gt;
                            &lt;option v-for="pv in getProvinces" :value="pv"&gt;{{pv}}&lt;/option&gt;
                        &lt;/select&gt;
                    &lt;/div&gt;

                    &lt;div class="bg-success bg-opacity-10 p-2 mt-4"&gt;
                        &lt;b&gt;รายการที่เลือก&lt;/b&gt; &lt;br&gt;
                        ชนิดแผนที่: &lt;span class="text-danger"&gt;{{ selectedMapType }}&lt;/span&gt; &lt;br&gt;
                        ภาค: &lt;span class="text-danger"&gt;{{ selectedPart }}&lt;/span&gt; &lt;br&gt;
                        จังหวัด: &lt;span class="text-danger"&gt;{{ selectedProvince }}&lt;/span&gt;
                    &lt;/div&gt;
                &lt;/form&gt;
            &lt;/div&gt;
            <code>
            &lt;script&gt;
                Vue.createApp({
                    data() {
                        return {
                            mapTypes: [{
                                    text: 'ดาวเทียม',
                                    value: 'Satellite'
                                },
                                {
                                    text: 'ภูมิประเทศ',
                                    value: 'Terrain'
                                },
                                {
                                    text: 'ถนน',
                                    value: 'Roadmap'
                                },
                                //...
                            ],
                            selectedMapType: '',

                            location: [{
                                    part: 'เหนือ',
                                    provinces: ['เชียงใหม่', 'เชียงราย', '...']
                                },
                                {
                                    part: 'กลาง',
                                    provinces: ['กรุงเทพ', 'นนทบุรี', '...']
                                },
                                {
                                    part: 'อีสาน',
                                    provinces: ['โคราช', 'ขอนแก่น', '...']
                                },
                                {
                                    part: 'ใต้',
                                    provinces: ['ภูเก็ต', 'สงขลา', '...']
                                },
                            ],
                            selectedPart: '',
                            selectedProvince: '',
                        }
                    },

                    computed: {
                        getProvinces() {
                            if (this.selectedPart) {
                                //นำชื่อภาคที่เลือก ไปค้นหาออบเจ็กต์ของภาคนั้น
                                //แล้วอ่านรายชื่อจังหวัดจากพร็อปเพอร์ตี้ provinces
                                //ซึ่งจะได้ค่าเป็นอาร์เรย์ เมื่อนำไปใช้กับ v-for 
                                //ก็จะเป็นการอัปเดตตัวเลือกของ Select อันนั้น
                                let locObj = this.location.find(el => el.part == this.selectedPart)
                                //ให้เลือกรายการ (จังหวัด) แรกในอาร์เรย์ไว้ล่วงหน้า
                                this.selectedProvince = locObj.provinces[0]
                                return locObj.provinces
                            }
                            return []
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
                    mapTypes: [{
                            text: 'ดาวเทียม',
                            value: 'Satellite'
                        },
                        {
                            text: 'ภูมิประเทศ',
                            value: 'Terrain'
                        },
                        {
                            text: 'ถนน',
                            value: 'Roadmap'
                        },
                        //...
                    ],
                    selectedMapType: '',

                    location: [{
                            part: 'เหนือ',
                            provinces: ['เชียงใหม่', 'เชียงราย', '...']
                        },
                        {
                            part: 'กลาง',
                            provinces: ['กรุงเทพ', 'นนทบุรี', '...']
                        },
                        {
                            part: 'อีสาน',
                            provinces: ['โคราช', 'ขอนแก่น', '...']
                        },
                        {
                            part: 'ใต้',
                            provinces: ['ภูเก็ต', 'สงขลา', '...']
                        },
                    ],
                    selectedPart: '',
                    selectedProvince: '',
                }
            },

            computed: {
                getProvinces() {
                    if (this.selectedPart) {
                        //นำชื่อภาคที่เลือก ไปค้นหาออบเจ็กต์ของภาคนั้น
                        //แล้วอ่านรายชื่อจังหวัดจากพร็อปเพอร์ตี้ provinces
                        //ซึ่งจะได้ค่าเป็นอาร์เรย์ เมื่อนำไปใช้กับ v-for 
                        //ก็จะเป็นการอัปเดตตัวเลือกของ Select อันนั้น
                        let locObj = this.location.find(el => el.part == this.selectedPart)
                        //ให้เลือกรายการ (จังหวัด) แรกในอาร์เรย์ไว้ล่วงหน้า
                        this.selectedProvince = locObj.provinces[0]
                        return locObj.provinces
                    }
                    return []
                }
            }

        }).mount('#app')
    </script>
</body>

</html>