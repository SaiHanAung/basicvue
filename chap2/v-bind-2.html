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
        <ul class="pagination justify-content-center">
            <!-- ถ้าไม่มีหมายเลขเพจก่อนนี้ ให้ซ่อนปุ่ม Prevoius -->
            <li class="page-item" :class="{'d-none': !hasPrevPage}">
                <a class="page-link" href="url+(currentPage-1)" tabindex="-1" @click.prevent="btnPrev_click">&laquo;</a>
            </li>
            <!-- ใช้ v-for เพื่อแสดงหมายเลขเพจทั้งหมดในช่วงนี้ -->
            <!-- ถ้าตรงกับหมายเลขเพจปัจจุบัน ให้อยู่ในสถานะ active -->
            <li v-for="p in pageNums" class="page-item" :class="{'active': (p == currentPage)}">
                <a class="page-link" :href="url+p" tabindex="-1" @click.prevent="currentPage = p">{{p}}</a>
            </li>    
            <!-- ปุ่ม Next ถ้าไม่มีหมายเลขเพจถัดไป ให้ซ่อนปุ่มนี้ -->
            <li class="page-item" :class="{'d-none': !hasNextPage}">
                <a class="page-link" href="url+(currentPage+1)" tabindex="-1" @click.prevent="btnNext_click">&raquo;</a>
            </li>       
        </ul>        
    </div>
    
    <div class="bg-secondary bg-opacity-10 pt-3" style="border: 1px dashed black">
        <pre>
            &lt;div id="app" class="p-5"&gt;
                &lt;ul class="pagination justify-content-center"&gt;
                    &lt;!-- ถ้าไม่มีหมายเลขเพจก่อนนี้ ให้ซ่อนปุ่ม Prevoius --&gt;
                    &lt;li class="page-item" :class="{'d-none': !hasPrevPage}"&gt;
                        &lt;a class="page-link" href="url+(currentPage-1)" tabindex="-1" @click.prevent="btnPrev_click"&gt;&laquo;&lt;/a&gt;
                    &lt;/li&gt;
                    &lt;!-- ใช้ v-for เพื่อแสดงหมายเลขเพจทั้งหมดในช่วงนี้ --&gt;
                    &lt;!-- ถ้าตรงกับหมายเลขเพจปัจจุบัน ให้อยู่ในสถานะ active --&gt;
                    &lt;li v-for="p in pageNums" class="page-item" :class="{'active': (p == currentPage)}"&gt;
                        &lt;a class="page-link" :href="url+p" tabindex="-1" @click.prevent="currentPage = p"&gt;{{p}}&lt;/a&gt;
                    &lt;/li&gt;    
                    &lt;!-- ปุ่ม Next ถ้าไม่มีหมายเลขเพจถัดไป ให้ซ่อนปุ่มนี้ --&gt;
                    &lt;li class="page-item" :class="{'d-none': !hasNextPage}"&gt;
                        &lt;a class="page-link" href="url+(currentPage+1)" tabindex="-1" @click.prevent="btnNext_click"&gt;&raquo;&lt;/a&gt;
                    &lt;/li&gt;       
                &lt;/ul&gt;   
            &lt;/div&gt;
            <code>
            &lt;script&gt;
                Vue.createApp({
                    data() {
                        return {
                            url: 'https://example.com/search?q=vue&p=', //url ของแต่ละเพจ
                            totalPages: 10,         //จำนวนเพจทั้งหมด
                            startPage: 1,           //หมายเลขเพจเริ่มต้น
                            endPage: 5,             //หมายเลขเพจสุดท้าย
                            hasPrevPage: false,     //เลื่อนกลับไปยังเพจก่อนนี้ได้หรือไม่
                            hasNextPage: true,      //เลื่อนไปยังเพจถัดไปได้หรือไม่
                            currentPage: 3,         //หมายเลขเพจปัจจุบัน
                        }                
                    },
                    methods: {
                        btnPrev_click() {
                            /*
                            this.currentPage -= 1
                            this.startPage -= 1
                            this.endPage -= 1
                            this.hasPrevPage = (this.startPage > 1)
                            this.hasNextPage = (this.endPage < this.totalPages)
                            */

                            //ถ้าคลิกปุ่ม Prev ให้ลดค่าหมายเลขเพจที่เกี่ยวข้องลง 1 ค่า
                            this.updatePage('-=')
                        },
                        btnNext_click() {
                            /*
                            this.currentPage += 1
                            this.startPage += 1
                            this.endPage += 1         
                            this.hasPrevPage = (this.startPage > 1)
                            this.hasNextPage = (this.endPage < this.totalPages) 
                            */

                            //ถ้าคลิกปุ่ม Next ให้เพิ่มค่าหมายเลขเพจที่เกี่ยวข้องอีก 1 ค่า
                            this.updatePage('+=')          
                        },
                        updatePage(op) {
                            eval(`
                                this.currentPage ${op} 1
                                this.startPage ${op} 1
                                this.endPage ${op} 1

                                //จะเลื่อนไปยังเพจก่อนนี้ได้ เมื่อเพจเริ่มต้นมากกว่า 1
                                this.hasPrevPage = (this.startPage > 1)

                                //จะเลื่อนไปยังเพจถัดไปได้ เมื่อเพจสุดท้ายน้อยกว่าจำนวนเพจทั้งหมด
                                this.hasNextPage = (this.endPage < this.totalPages)
                            `)
                        }
                    },
                    computed: {
                        //นำช่วงหมายเลขมาสร้างเป็นอาร์เรย์ เพื่อให้ใช้กับ v-for ได้
                        pageNums() {
                            let pages = []
                            for (i = this.startPage; i <= this.endPage; i++) {
                                pages.push(i)
                            }
                            return pages
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
                    url: 'https://example.com/search?q=vue&p=', //url ของแต่ละเพจ
                    totalPages: 10,         //จำนวนเพจทั้งหมด
                    startPage: 1,           //หมายเลขเพจเริ่มต้น
                    endPage: 5,             //หมายเลขเพจสุดท้าย
                    hasPrevPage: false,     //เลื่อนกลับไปยังเพจก่อนนี้ได้หรือไม่
                    hasNextPage: true,      //เลื่อนไปยังเพจถัดไปได้หรือไม่
                    currentPage: 3,         //หมายเลขเพจปัจจุบัน
                }                
            },
            methods: {
                btnPrev_click() {
                    /*
                    this.currentPage -= 1
                    this.startPage -= 1
                    this.endPage -= 1
                    this.hasPrevPage = (this.startPage > 1)
                    this.hasNextPage = (this.endPage < this.totalPages)
                    */

                    //ถ้าคลิกปุ่ม Prev ให้ลดค่าหมายเลขเพจที่เกี่ยวข้องลง 1 ค่า
                    this.updatePage('-=')
                },
                btnNext_click() {
                    /*
                    this.currentPage += 1
                    this.startPage += 1
                    this.endPage += 1         
                    this.hasPrevPage = (this.startPage > 1)
                    this.hasNextPage = (this.endPage < this.totalPages) 
                    */

                    //ถ้าคลิกปุ่ม Next ให้เพิ่มค่าหมายเลขเพจที่เกี่ยวข้องอีก 1 ค่า
                    this.updatePage('+=')          
                },
                updatePage(op) {
                    eval(`
                        this.currentPage ${op} 1
                        this.startPage ${op} 1
                        this.endPage ${op} 1

                        //จะเลื่อนไปยังเพจก่อนนี้ได้ เมื่อเพจเริ่มต้นมากกว่า 1
                        this.hasPrevPage = (this.startPage > 1)

                        //จะเลื่อนไปยังเพจถัดไปได้ เมื่อเพจสุดท้ายน้อยกว่าจำนวนเพจทั้งหมด
                        this.hasNextPage = (this.endPage < this.totalPages)
                    `)
                }
            },
            computed: {
                //นำช่วงหมายเลขมาสร้างเป็นอาร์เรย์ เพื่อให้ใช้กับ v-for ได้
                pageNums() {
                    let pages = []
                    for (i = this.startPage; i <= this.endPage; i++) {
                        pages.push(i)
                    }
                    return pages
                } 
            }
        }).mount('#app')
    </script>
</body>
</html>