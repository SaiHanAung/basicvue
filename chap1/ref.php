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
        <form class="row g-3 p-4 mx-auto" style="max-width: 640px;">
            <div class="col-md-6">
                <label for="fn" class="form-label">ชื่อ</label>
                <input type="text" id="fn" class="form-control" ref="fname" @input="previewData">
            </div>
            <div class="col-md-6">
                <label for="ln" class="form-label">นามสกุล</label>
                <input type="text" id="ln" class="form-control" ref="lname" @input="previewData">
            </div>
            <div class="col-12">
                <label for="ad" class="form-label">ที่อยู่</label>
                <textarea rows="2" class="form-control" id="ad" ref="addr" @input="previewData"></textarea>
            </div>
            <div class="col-md-5">
                <label for="pv" class="form-label">จังหวัด</label>
                <select class="form-select" id="pv" ref="province" @change="previewData">
                    <option>กรุงเทพ</option>
                    <option>สมุทรปราการ</option>
                </select>
            </div>
            <div class="col-md-5 ps-4 d-flex align-items-end">
                <div class="form-check">
                    <input type="checkbox" id="ac" class="form-check-input"  ref="accept" @change="onCheckChange">
                    <label for="ac" class="form-check-label">
                        ยอมรับเงื่อนไขและข้อตกลง
                    </label>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary" ref="btnOk" disabled>ตกลง</button>
            </div>

            <div class="col-12">Preview</div>
            <div class="col-12 bg-warning bg-opacity-10 p-2">
                ชื่อ-สกุล: {{firstname}} {{lastname}}<br>
                ที่อยู่: {{address}}<br>
                จังหวัด: {{province}}
            </div> 
        </form>         
    </div>
    
    <div class="bg-secondary bg-opacity-10 pt-3" style="border: 1px dashed black">
        <pre>
            &lt;div id="app"&gt;
                &lt;form class="row g-3 p-4 mx-auto" style="max-width: 640px;"&gt;
                    &lt;div class="col-md-6"&gt;
                        &lt;label for="fn" class="form-label"&gt;ชื่อ&lt;/label&gt;
                        &lt;input type="text" id="fn" class="form-control" ref="fname" @input="previewData"&gt;
                    &lt;/div&gt;
                    &lt;div class="col-md-6"&gt;
                        &lt;label for="ln" class="form-label"&gt;นามสกุล&lt;/label&gt;
                        &lt;input type="text" id="ln" class="form-control" ref="lname" @input="previewData"&gt;
                    &lt;/div&gt;
                    &lt;div class="col-12"&gt;
                        &lt;label for="ad" class="form-label"&gt;ที่อยู่&lt;/label&gt;
                        &lt;textarea rows="2" class="form-control" id="ad" ref="addr" @input="previewData"&gt;&lt;/textarea&gt;
                    &lt;/div&gt;
                    &lt;div class="col-md-5"&gt;
                        &lt;label for="pv" class="form-label"&gt;จังหวัด&lt;/label&gt;
                        &lt;select class="form-select" id="pv" ref="province" @change="previewData"&gt;
                            &lt;option&gt;กรุงเทพ&lt;/option&gt;
                            &lt;option&gt;สมุทรปราการ&lt;/option&gt;
                        &lt;/select&gt;
                    &lt;/div&gt;
                    &lt;div class="col-md-5 ps-4 d-flex align-items-end"&gt;
                        &lt;div class="form-check"&gt;
                            &lt;input type="checkbox" id="ac" class="form-check-input"  ref="accept" @change="onCheckChange"&gt;
                            &lt;label for="ac" class="form-check-label"&gt;
                                ยอมรับเงื่อนไขและข้อตกลง
                            &lt;/label&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class="col-12"&gt;
                        &lt;button type="submit" class="btn btn-primary" ref="btnOk" disabled&gt;ตกลง&lt;/button&gt;
                    &lt;/div&gt;

                    &lt;div class="col-12"&gt;Preview&lt;/div&gt;
                    &lt;div class="col-12 bg-warning bg-opacity-10 p-2"&gt;
                        ชื่อ-สกุล: {{firstname}} {{lastname}}&lt;br&gt;
                        ที่อยู่: {{address}}&lt;br&gt;
                        จังหวัด: {{province}}
                    &lt;/div&gt; 
                &lt;/form&gt;  
            &lt;/div&gt;
            <code>
            &lt;script&gt;
                Vue.createApp({
                    data() {
                        return {
                            firstname: '',
                            lastname: '',
                            address: '',
                            province: ''
                        }
                    },           
                    methods: {
                        previewData() {
                            this.firstname = this.$refs.fname.value
                            this.lastname = this.$refs.lname.value
                            this.address = this.$refs.addr.value
                            this.province = this.$refs.province.value
                        },
                        onCheckChange(event) {
                            this.$refs.btnOk.disabled = !event.target.checked
                            //this.$refs.btnOk.disabled = !this.$refs.accept.checked
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
                    firstname: '',
                    lastname: '',
                    address: '',
                    province: ''
                }
            },           
            methods: {
                previewData() {
                    this.firstname = this.$refs.fname.value
                    this.lastname = this.$refs.lname.value
                    this.address = this.$refs.addr.value
                    this.province = this.$refs.province.value
                },
                onCheckChange(event) {
                    this.$refs.btnOk.disabled = !event.target.checked
                    //this.$refs.btnOk.disabled = !this.$refs.accept.checked
                }
            }
        }).mount('#app')
    </script>
</body>
</html>