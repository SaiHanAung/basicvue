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
            <div v-for="(p, v) in payments" class="form-check form-check-inline">
                <input type="radio" name="payment" class="form-check-input" :id="v.value" :value="p.value" v-model="selectedPayment">
                <label :for="v.value" class="form-label">{{p.text}}</label>
            </div>
            <div v-show="selectedPayment == 'Bank'" class="bg-info bg-opacity-10 p-3">
                <h6>เลือกธนาคาร</h6>
                <div v-for="(b, v) in banks" class="form-check">
                    <input type="radio" name="bank" class="form-check-input" :id="b.value" :value="b.value" v-model="selectedBank">
                    <label :for="v.value" class="form-label">{{b.text}}</label>
                </div>
            </div>
            <div v-show="selectedPayment == 'Creditcard'" class="bg-success bg-opacity-10 p-3">
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
                    &lt;div v-for="(p, v) in payments" class="form-check form-check-inline"&gt;
                        &lt;input type="radio" name="payment" class="form-check-input" :id="v.value" :value="p.value" v-model="selectedPayment"&gt;
                        &lt;label :for="v.value" class="form-label"&gt;{{p.text}}&lt;/label&gt;
                    &lt;/div&gt;
                    &lt;div v-show="selectedPayment == 'Bank'" class="bg-info bg-opacity-10 p-3"&gt;
                        &lt;h6&gt;เลือกธนาคาร&lt;/h6&gt;
                        &lt;div v-for="(b, v) in banks" class="form-check"&gt;
                            &lt;input type="radio" name="bank" class="form-check-input" :id="b.value" :value="b.value" v-model="selectedBank"&gt;
                            &lt;label :for="v.value" class="form-label"&gt;{{b.text}}&lt;/label&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div v-show="selectedPayment == 'Creditcard'" class="bg-success bg-opacity-10 p-3"&gt;
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
                            payments: [{
                                    text: 'ทางไปรษณีย์',
                                    value: 'Postoffice'
                                },
                                {
                                    text: 'ผ่านธนาคาร',
                                    value: 'Bank'
                                },
                                {
                                    text: 'บัตรเครดิต',
                                    value: 'Creditcard'
                                },
                                {
                                    text: 'เก็บเงินปลายทาง',
                                    value: 'COD'
                                },
                                //{text: '', value: ''},
                            ],
                            selectedPayment: '',

                            banks: [{
                                    text: 'ไทยพาณิชย์',
                                    value: 'SCB'
                                },
                                {
                                    text: 'กรุงเทพ',
                                    value: 'Bangkok'
                                },
                                {
                                    text: 'กสิกรไทย',
                                    value: 'Kasikorn'
                                },
                                {
                                    text: 'กรุงไทย',
                                    value: 'KrungThai'
                                },
                                //{text: '', value: ''},
                            ],
                            selectedBank: '',

                            cards: ['VISA', 'MasterCard', 'JCB'],
                            selectedCard: '',
                        }
                    },
                    computed: {
                        getPayment() {
                            let str = ''
                            if (this.selectedPayment) {
                                let p = this.payments.find(el => el.value == this.selectedPayment)
                                str = p.text

                                if (this.selectedPayment == 'Bank' && this.selectedBank) {
                                    let b = this.banks.find(el => el.value == this.selectedBank)
                                    str += ': ' + b.text
                                } else if (this.selectedPayment == 'Creditcard' && this.selectedCard) {
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
                    payments: [{
                            text: 'ทางไปรษณีย์',
                            value: 'Postoffice'
                        },
                        {
                            text: 'ผ่านธนาคาร',
                            value: 'Bank'
                        },
                        {
                            text: 'บัตรเครดิต',
                            value: 'Creditcard'
                        },
                        {
                            text: 'เก็บเงินปลายทาง',
                            value: 'COD'
                        },
                        //{text: '', value: ''},
                    ],
                    selectedPayment: '',

                    banks: [{
                            text: 'ไทยพาณิชย์',
                            value: 'SCB'
                        },
                        {
                            text: 'กรุงเทพ',
                            value: 'Bangkok'
                        },
                        {
                            text: 'กสิกรไทย',
                            value: 'Kasikorn'
                        },
                        {
                            text: 'กรุงไทย',
                            value: 'KrungThai'
                        },
                        //{text: '', value: ''},
                    ],
                    selectedBank: '',

                    cards: ['VISA', 'MasterCard', 'JCB'],
                    selectedCard: '',
                }
            },
            computed: {
                getPayment() {
                    let str = ''
                    if (this.selectedPayment) {
                        let p = this.payments.find(el => el.value == this.selectedPayment)
                        str = p.text

                        if (this.selectedPayment == 'Bank' && this.selectedBank) {
                            let b = this.banks.find(el => el.value == this.selectedBank)
                            str += ': ' + b.text
                        } else if (this.selectedPayment == 'Creditcard' && this.selectedCard) {
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