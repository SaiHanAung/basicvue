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
        <form style="max-width: 680px;">
            <h6>วิธีการชำระเงิน</h6>
            <div v-for="(p, i) in payments" class="form-check form-check-inline">
                <input type="radio" name="payment" class="form-check-input" :id="'p'+i" :value="p" v-model="selectedPayment">
                <label :for="'p'+i" class="form-label">{{p}}</label>
            </div>
            <!-- หากเลือกชำระผ่านธนาคาร จะแสดงรายการตัวเลือกชื่อธนาคาร -->
            <div v-show="selectedPayment == 'ผ่านธนาคาร'" class="bg-info bg-opacity-10 p-3">
                <h6>เลือกธนาคาร</h6>
                <div v-for="(b, i) in banks" class="form-check">
                    <input type="radio" name="bank" class="form-check-input" :id="'b'+i" :value="b" v-model="selectedBank">
                    <label :for="'b'+i" class="form-label">{{b}}</label>
                </div>
            </div>
            <!-- หากเลือกชำระผ่านบัตรเครดิต จะแสดงรายการตัวเลือกชนิดบัตร -->
            <div v-show="selectedPayment == 'บัตรเครดิต'" class="bg-success bg-opacity-10 p-3">
                <h6>เลือกชนิดบัตร</h6>
                <div v-for="c in cards" class="form-check">
                    <input type="radio" name="card" class="form-check-input" :id="c" :value="c" v-model="selectedCard">
                    <label :for="c" class="form-label">{{c}}</label>
                </div>
            </div>

            <div v-show="selectedPayment != ''" class="mt-3">
                วิธีการชำระเงินที่เลือกคือ &raquo;
                <span class="text-danger">{{ getPayment }}</span>
            </div>
        </form>
    </div>
    
    <div class="bg-secondary bg-opacity-10 pt-3" style="border: 1px dashed black">
        <pre>
            &lt;div id="app"&gt;
                &lt;form style="max-width: 680px;"&gt;
                    &lt;h6&gt;วิธีการชำระเงิน&lt;/h6&gt;
                    &lt;div v-for="(p, i) in payments" class="form-check form-check-inline"&gt;
                        &lt;input type="radio" name="payment" class="form-check-input" :id="'p'+i" :value="p" v-model="selectedPayment"&gt;
                        &lt;label :for="'p'+i" class="form-label"&gt;{{p}}&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;!-- หากเลือกชำระผ่านธนาคาร จะแสดงรายการตัวเลือกชื่อธนาคาร --&gt;
                    &lt;div v-show="selectedPayment == 'ผ่านธนาคาร'" class="bg-info bg-opacity-10 p-3"&gt;
                        &lt;h6&gt;เลือกธนาคาร&lt;/h6&gt;
                        &lt;div v-for="(b, i) in banks" class="form-check"&gt;
                            &lt;input type="radio" name="bank" class="form-check-input" :id="'b'+i" :value="b" v-model="selectedBank"&gt;
                            &lt;label :for="'b'+i" class="form-label"&gt;{{b}}&lt;/label&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;!-- หากเลือกชำระผ่านบัตรเครดิต จะแสดงรายการตัวเลือกชนิดบัตร --&gt;
                    &lt;div v-show="selectedPayment == 'บัตรเครดิต'" class="bg-success bg-opacity-10 p-3"&gt;
                        &lt;h6&gt;เลือกชนิดบัตร&lt;/h6&gt;
                        &lt;div v-for="c in cards" class="form-check"&gt;
                            &lt;input type="radio" name="card" class="form-check-input" :id="c" :value="c" v-model="selectedCard"&gt;
                            &lt;label :for="c" class="form-label"&gt;{{c}}&lt;/label&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;

                    &lt;div v-show="selectedPayment != ''" class="mt-3"&gt;
                        วิธีการชำระเงินที่เลือกคือ &raquo;
                        &lt;span class="text-danger"&gt;{{ getPayment }}&lt;/span&gt;
                    &lt;/div&gt;
                &lt;/form&gt;
            &lt;/div&gt;
            <code>
            &lt;script&gt;
                Vue.createApp({
                    data() {
                        return {
                            payments: ['ทางไปรษณีย์', 'ผ่านธนาคาร', 'บัตรเครดิต', 'เก็บเงินปลายทาง'],
                            selectedPayment: '',

                            banks: ['ไทยพาณิชย์', 'กรุงเทพ', 'กสิกรไทย', 'กรุงไทย'],
                            selectedBank: '',

                            cards: ['VISA', 'MasterCard', 'JCB'],
                            selectedCard: '',
                        }
                    },
                    computed: {
                        getPayment() {
                            let str = ''
                            if (this.selectedPayment) {
                                str = this.selectedPayment

                                if (this.selectedPayment == 'ผ่านธนาคาร' && this.selectedBank) {
                                    str += ': ' + this.selectedBank
                                } else if (this.selectedPayment == 'บัตรเครดิต' && this.selectedCard) {
                                    str += ': ' + this.selectedCard
                                }
                            }
                            return str
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
                    payments: ['ทางไปรษณีย์', 'ผ่านธนาคาร', 'บัตรเครดิต', 'เก็บเงินปลายทาง'],
                    selectedPayment: '',

                    banks: ['ไทยพาณิชย์', 'กรุงเทพ', 'กสิกรไทย', 'กรุงไทย'],
                    selectedBank: '',

                    cards: ['VISA', 'MasterCard', 'JCB'],
                    selectedCard: '',
                }
            },
            computed: {
                getPayment() {
                    let str = ''
                    if (this.selectedPayment) {
                        str = this.selectedPayment

                        if (this.selectedPayment == 'ผ่านธนาคาร' && this.selectedBank) {
                            str += ': ' + this.selectedBank
                        } else if (this.selectedPayment == 'บัตรเครดิต' && this.selectedCard) {
                            str += ': ' + this.selectedCard
                        }
                    }
                    return str
                }
            }
        }).mount('#app')
    </script>
</body>

</html>