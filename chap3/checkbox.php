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
    <div id="app" class="p-5">
        <h6>เลือกเพื่อหยิบใส่รถเข็น</h6>
        <!-- ใช้ v-for เพื่อแสดงรายการสินค้าให้เลือก -->
        <!-- ใช้ v-model ร่วมกับพร็อปเพอร์ตี้แบบอาร์เรย์ เพราะเลือกได้หลายรายการ -->
        <!-- ต้อง Binding แอตทริบิวต์ value เพื่อกำหนดค่าที่จะนำไปใช้งาน -->
        <div class="form-check" v-for="(p, i) in products">
            <input type="checkbox" class="form-check-input" :id="'chk'+i" :value="p" v-model="cart">
            <label :for="'chk'+i" class="form-label mb-1">{{ p }}</label>
        </div>

        <button class="btn btn-primary mt-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">
            สำรวจรถเข็น
        </button>

        <!-- แสดงรายการสินค้าในรถเข็นด้วย Offcanvas -->
        <div class="offcanvas offcanvas-end p-3 bg-success bg-opacity-10" tabindex="-1" id="offcanvasRight" data-bs-backdrop="false">
            <div class="offcanvas-header">
                <h5>รายการสินค้าในรถเข็น</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
                <div v-if="cart.length == 0">ไม่มีสินค้าในรถเข็น</div>
                <div v-else>
                    <!-- ถ้ามีสินค้าใน (อาร์เรย์) รถเข็น ให้แสดงรายการแบบลิสต์ -->
                    <ul>
                        <li v-for="item in cart">{{ item }}</li>
                    </ul>

                    <!-- ปุ่มสำหรับยกเลิกสินค้าทั้งหมดในรถเข็น โดยการลบข้อมูลในอาร์เรย์ -->
                    <button class="btn btn-danger d-block my-4" @click="cart = []">
                        ลบทั้งหมด
                    </button>

                    <!-- แนวทางการใช้ Checkbox อันเดียว เพื่อกำหนดสถานะ -->
                    <div class="form-check mb-2">
                        <input type="checkbox" class="form-check-input" id="chkConfirmCart" v-model="confirmCart">
                        <label for="chkConfirmCart" class="form-label mb-1">ยืนยันสินค้าในรถเข็น</label>
                    </div>
                    <button class="btn btn-sm btn-primary" :disabled="!confirmCart">ไปต่อ</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="bg-secondary bg-opacity-10 pt-3" style="border: 1px dashed black">
        <pre>
            &lt;div id="app" class="p-5"&gt;
                &lt;h6>เลือกเพื่อหยิบใส่รถเข็น&lt;/h6&gt;
                &lt;!-- ใช้ v-for เพื่อแสดงรายการสินค้าให้เลือก --&gt;
                &lt;!-- ใช้ v-model ร่วมกับพร็อปเพอร์ตี้แบบอาร์เรย์ เพราะเลือกได้หลายรายการ --&gt;
                &lt;!-- ต้อง Binding แอตทริบิวต์ value เพื่อกำหนดค่าที่จะนำไปใช้งาน --&gt;
                &lt;div class="form-check" v-for="(p, i) in products"&gt;
                    &lt;input type="checkbox" class="form-check-input" :id="'chk'+i" :value="p" v-model="cart"&gt;
                    &lt;label :for="'chk'+i" class="form-label mb-1"&gt;{{ p }}&lt;/label&gt;
                &lt;/div&gt;

                &lt;button class="btn btn-primary mt-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"&gt;
                    สำรวจรถเข็น
                &lt;/button&gt;

                &lt;!-- แสดงรายการสินค้าในรถเข็นด้วย Offcanvas --&gt;
                &lt;div class="offcanvas offcanvas-end p-3 bg-success bg-opacity-10" tabindex="-1" id="offcanvasRight" data-bs-backdrop="false"&gt;
                    &lt;div class="offcanvas-header"&gt;
                        &lt;h5&gt;รายการสินค้าในรถเข็น&lt;/h5&gt;
                        &lt;button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"&gt;&lt;/button&gt;
                    &lt;/div&gt;
                    &lt;div class="offcanvas-body"&gt;
                        &lt;div v-if="cart.length == 0"&gt;ไม่มีสินค้าในรถเข็น&lt;/div&gt;
                        &lt;div v-else&gt;
                            &lt;!-- ถ้ามีสินค้าใน (อาร์เรย์) รถเข็น ให้แสดงรายการแบบลิสต์ --&gt;
                            &lt;ul&gt;
                                &lt;li v-for="item in cart"&gt;{{ item }}&lt;/li&gt;
                            &lt;/ul&gt;

                            &lt;!-- ปุ่มสำหรับยกเลิกสินค้าทั้งหมดในรถเข็น โดยการลบข้อมูลในอาร์เรย์ --&gt;
                            &lt;button class="btn btn-danger d-block my-4" @click="cart = []"&gt;
                                ลบทั้งหมด
                            &lt;/button&gt;

                            &lt;!-- แนวทางการใช้ Checkbox อันเดียว เพื่อกำหนดสถานะ --&gt;
                            &lt;div class="form-check mb-2"&gt;
                                &lt;input type="checkbox" class="form-check-input" id="chkConfirmCart" v-model="confirmCart"&gt;
                                &lt;label for="chkConfirmCart" class="form-label mb-1"&gt;ยืนยันสินค้าในรถเข็น&lt;/label&gt;
                            &lt;/div&gt;
                            &lt;button class="btn btn-sm btn-primary" :disabled="!confirmCart"&gt;ไปต่อ&lt;/button&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            <code>
            &lt;script&gt;
                Vue.createApp({
                    data() {
                        return {

                            products: [ //รายการสินค้าทั้งหมด
                                'iPhone', 'iPad', 'iOS', 'MacBook', 'MacOS', 'Apple'
                            ],
                            cart: [], //ใช้จัดเก็บรายการสินค้าที่หยิบใส่รถเข็น
                            confirmCart: false,
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

                    products: [ //รายการสินค้าทั้งหมด
                        'iPhone', 'iPad', 'iOS', 'MacBook', 'MacOS', 'Apple'
                    ],
                    cart: [], //ใช้จัดเก็บรายการสินค้าที่หยิบใส่รถเข็น
                    confirmCart: false,
                }
            }
        }).mount('#app')
    </script>
</body>

</html>