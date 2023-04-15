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
    <div class="p-4 text-center">
        <div id="app" class="mx-auto" style="max-width: 300px;">
            <div class="row g-3">
                <input type="email" class="form-control" placeholder="อีเมล" v-model.trim="eml">
                <input type="password" class="form-control" placeholder="รหัสผ่าน" v-model.trim="pw1">
                <input type="password" class="form-control" placeholder="ยืนยันรหัสผ่าน" v-model.trim="pw2">
                <button type="button" class="col-6 btn btn-primary mx-auto" @click="btnSignup_click">สมัครสมาชิก</button>
            </div>
        </div>
    </div>

    <div class="bg-secondary bg-opacity-10 pt-3" style="border: 1px dashed black">
        <pre>
            &lt;div class="p-4 text-center"&gt;
                &lt;div id="app" class="mx-auto" style="max-width: 300px;"&gt;
                    &lt;div class="row g-3"&gt;
                        &lt;input type="email" class="form-control" placeholder="อีเมล" v-model.trim="eml"&gt;
                        &lt;input type="password" class="form-control" placeholder="รหัสผ่าน" v-model.trim="pw1"&gt;
                        &lt;input type="password" class="form-control" placeholder="ยืนยันรหัสผ่าน" v-model.trim="pw2"&gt;
                        &lt;button type="button" class="col-6 btn btn-primary mx-auto" @click="btnSignup_click"&gt;สมัครสมาชิก&lt;/button&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            <code>
            &lt;script&gt;
                Vue.createApp({
                    data() {
                        return {
                            eml: '',
                            pw1: '',
                            pw2: ''
                        }
                    },
                    methods: {
                        btnSignup_click() {
                            if (this.eml == '') {
                                alert('กรุณาใส่อีเมล')
                                return
                            }

                            if (this.pw1 == '' || this.pw2 == '') {
                                alert('กรุณาใส่รหัสผ่านทั้ง 2 ช่อง')
                                return
                            } else if (this.pw1 != this.pw2) {
                                alert('รหัสผ่านไม่ตรงกัน')
                                return
                            }

                            alert('OK')
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
                    eml: '',
                    pw1: '',
                    pw2: ''
                }
            },
            methods: {
                btnSignup_click() {
                    if (this.eml == '') {
                        alert('กรุณาใส่อีเมล')
                        return
                    }

                    if (this.pw1 == '' || this.pw2 == '') {
                        alert('กรุณาใส่รหัสผ่านทั้ง 2 ช่อง')
                        return
                    } else if (this.pw1 != this.pw2) {
                        alert('รหัสผ่านไม่ตรงกัน')
                        return
                    }

                    alert('OK')
                }
            }
        }).mount('#app')
    </script>
</body>

</html>