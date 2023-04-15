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
    <style>
        td:first-child {
            width: 130px;
            background-color: #def;
        }
    </style>
</head>

<body>
    <div id="app">
        <form class="row g-3 p-4 mx-auto" style="max-width: 640px;">
            <div class="col-sm-6">
                <label for="fn" class="form-label">ชื่อ</label>
                <input type="text" id="fn" class="form-control" v-model.trim="firstname">
            </div>
            <div class="col-sm-6">
                <label for="ln" class="form-label">นามสกุล</label>
                <input type="text" id="ln" class="form-control" v-model.trim="lastname">
            </div>
            <div class="col-sm-6">
                <label for="bd" class="form-label">วันเกิด</label>
                <input type="date" id="bd" class="form-control" v-model="birthday">
            </div>
            <div class="col-sm-6">
                <label for="sl" class="form-label">เงินเดือน</label>
                <input type="number" id="sl" class="form-control" v-model.number="salary">
            </div>
            <div class="col-12">
                <label for="ad" class="form-label">ที่อยู่</label>
                <textarea rows="2" class="form-control" id="ad" v-model.trim="address"></textarea>
            </div>
            <div class="col-12">
                <table class="table table-bordered">
                    <caption class="caption-top">Preview</caption>
                    <tr>
                        <td>ชื่อ-สกุล:</td>
                        <td>{{firstname}} {{lastname}}</td>
                    </tr>
                    <tr>
                        <td>วันเกิด:</td>
                        <td>{{formatBirthday}}</td>
                    </tr>
                    <tr>
                        <td>เงินเดือน:</td>
                        <td>{{formatSalary}}</td>
                    </tr>
                    <tr>
                        <td>ที่อยู่:</td>
                        <td>{{address}}</td>
                    </tr>
                </table>
            </div>
        </form>
    </div>

    <div class="bg-secondary bg-opacity-10 pt-3" style="border: 1px dashed black">
        <pre>
            &lt;div id="app"&gt;
                &lt;form class="row g-3 p-4 mx-auto" style="max-width: 640px;"&gt;
                    &lt;div class="col-sm-6"&gt;
                        &lt;label for="fn" class="form-label"&gt;ชื่อ&lt;/label&gt;
                        &lt;input type="text" id="fn" class="form-control" v-model.trim="firstname"&gt;
                    &lt;/div&gt;
                    &lt;div class="col-sm-6"&gt;
                        &lt;label for="ln" class="form-label"&gt;นามสกุล&lt;/label&gt;
                        &lt;input type="text" id="ln" class="form-control" v-model.trim="lastname"&gt;
                    &lt;/div&gt;
                    &lt;div class="col-sm-6"&gt;
                        &lt;label for="bd" class="form-label"&gt;วันเกิด&lt;/label&gt;
                        &lt;input type="date" id="bd" class="form-control" v-model="birthday"&gt;
                    &lt;/div&gt;
                    &lt;div class="col-sm-6"&gt;
                        &lt;label for="sl" class="form-label"&gt;เงินเดือน&lt;/label&gt;
                        &lt;input type="number" id="sl" class="form-control" v-model.number="salary"&gt;
                    &lt;/div&gt;
                    &lt;div class="col-12"&gt;
                        &lt;label for="ad" class="form-label"&gt;ที่อยู่&lt;/label&gt;
                        &lt;textarea rows="2" class="form-control" id="ad" v-model.trim="address"&gt;&lt;/textarea&gt;
                    &lt;/div&gt;
                    &lt;div class="col-12"&gt;
                        &lt;table class="table table-bordered"&gt;
                            &lt;caption class="caption-top"&gt;Preview&lt;/caption&gt;
                            &lt;tr&gt;
                                &lt;td&gt;ชื่อ-สกุล:&lt;/td&gt;
                                &lt;td&gt;{{firstname}} {{lastname}}&lt;/td&gt;
                            &lt;/tr&gt;
                            &lt;tr&gt;
                                &lt;td&gt;วันเกิด:&lt;/td&gt;
                                &lt;td&gt;{{formatBirthday}}&lt;/td&gt;
                            &lt;/tr&gt;
                            &lt;tr&gt;
                                &lt;td&gt;เงินเดือน:&lt;/td&gt;
                                &lt;td&gt;{{formatSalary}}&lt;/td&gt;
                            &lt;/tr&gt;
                            &lt;tr&gt;
                                &lt;td&gt;ที่อยู่:&lt;/td&gt;
                                &lt;td&gt;{{address}}&lt;/td&gt;
                            &lt;/tr&gt;
                        &lt;/table&gt;
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
                            birthday: '',
                            salary: ''
                        }
                    },
                    computed: {
                        formatBirthday() {
                            if (!this.birthday) {
                                return this.birthday
                            }
                            let months = [
                                'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน',
                                'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม',
                                'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'
                            ]

                            const dt = new Date(this.birthday)
                            let m = dt.getMonth()
                            return `${dt.getDate()} ${months[m]} ${dt.getFullYear()+543}`
                        },
                        formatSalary() {
                            if (!this.salary) {
                                return this.salary
                            }
                            return new Intl.NumberFormat().format(this.salary)
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
                    birthday: '',
                    salary: ''
                }
            },
            computed: {
                formatBirthday() {
                    if (!this.birthday) {
                        return this.birthday
                    }
                    let months = [
                        'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน',
                        'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม',
                        'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'
                    ]

                    const dt = new Date(this.birthday)
                    let m = dt.getMonth()
                    return `${dt.getDate()} ${months[m]} ${dt.getFullYear()+543}`
                },
                formatSalary() {
                    if (!this.salary) {
                        return this.salary
                    }
                    return new Intl.NumberFormat().format(this.salary)
                }
            }
        }).mount('#app')
    </script>
</body>

</html>