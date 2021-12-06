<?php require_once('header.php') ?>
<?php require_once('sidebar.php') ?>


<style>
    .content {
        width: 1088px;
        height: 500px;
        float: right;
        margin-top: 2px;
    }

    .middle {
        width: 97%;
        height: 0;
        margin: 0 auto;
    }

    .tab-box {
        width: 100%;
        height: auto;
        /*background: orange;*/
        font-size: 13px;

    }

    .title-box {
        font-size: 20px;
        margin: 10px 0;
    }

    .tab-box ul li {
        float: right;
        margin-left: 10px;
        padding: 9px 12px;
        color: #427acc;
    }

    .tab {
        width: 100%;
        height: 42px;
        border-bottom: 1px solid #ddd;
    }

    .active {
        background: #fff !important;
        color: #4d4d4d !important;
        border-right: 1px solid #dfdfdf;
        border-left: 1px solid #ccc;
        border-top: 1px solid #ccc;
        -webkit-border-top-left-radius: 5px;
        -webkit-border-top-right-radius: 5px;
        -moz-border-radius-topleft: 5px;
        -moz-border-radius-topright: 5px;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
    }

    .tab-content {
        width: 100%;
        height: auto;
    }

    .section {
        width: 100%;
        height: auto;
        padding: 30px 30px;
        background: #fff;
        float: right;
        border-right: 1px solid #ddd;
        display: none;
    }

    .block {
        display: block;
    }

    .tab-content .tabel1 tr td {
        float: right;
        padding: 7px 0;
        width: 27%;
    }

    .tab-content .tabel1 tr td:nth-child(even) {
        color: #427acc;
    }

    .table2 {
        text-align: center;
    }

    .table2 td {
        padding: 10px 0;
    }

    .table2 tr:nth-of-type(2n+1) {
        background: #f9f9f9;
        border: 1px solid #ccc !important;
    }
</style>
<div class="content">

    <div class="middle"> <!-- start middle -->
       <h1 class="title-box">داشبورد</h1>
         <div class="tab-box"><!-- start tab-box -->
           <Ul class="tab">
                <li class="active">گزارش وضعیت</li>
                <li>صندوق پیام</li>
                <li>گزارش سیستم</li>
            </Ul>
             <div class="tab-content"> <!-- start tab-content -->
                <section class="section block">
                    <table class="tabel1" width="100%" border="1"><!-- start tabel-1-->
                        <tbody>
                        <tr>
                            <td width="30%">تعداد محصولات</td>
                            <td width="70%">15</td>
                        </tr>
                        <tr>
                            <td width="30%">تعداد سفارشات</td>
                            <td width="70%">9</td>
                        </tr>

                        <tr>
                            <td width="30%">درآمد امروز</td>
                            <td width="70%">8000 تومان</td>
                        </tr>


                        <tr>
                            <td width="30%">بازدید امروز</td>
                            <td width="70%">900</td>
                        </tr>


                        <tr>
                            <td width="30%">بازدید دیروز</td>
                            <td width="70%">1999</td>
                        </tr>


                        <tr>
                            <td width="30%">بازدید کل</td>
                            <td width="70%">12345</td>
                        </tr>


                        </tbody>
                    </table><!-- end tabel-1 -->

                     <div class="chart-dashboard">
                        <img src="images/chart.jpg" alt="">
                    </div>
                </section>
                <section class="section">
                    <table class="table2" width="100%" border="1"><!-- start tabel-2-->
                        <tbody>
                        <tr>
                            <td width="5%">ردیف</td>
                            <td width="30%">موضوع</td>
                            <td width="15%">نام</td>
                            <td width="25%">ایمیل</td>
                            <td width="15%">تاریخ</td>
                            <td width="10%">عملیات</td>
                        </tr>

                        <tr>
                            <td width="5%">1</td>
                            <td width="30%">مشکل در خرید لپتاپ</td>
                            <td width="15%">محمد</td>
                            <td width="25%">mohammad@gmail.com</td>
                            <td width="15%">1396/07/04 19:45</td>
                            <td width="10%">عملیات</td>
                        </tr>
                        <tr>
                            <td width="5%">1</td>
                            <td width="30%">مشکل در خرید لپتاپ</td>
                            <td width="15%">محمد</td>
                            <td width="25%">mohammad@gmail.com</td>
                            <td width="15%">1396/07/04</td>
                            <td width="10%">عملیات</td>
                        </tr>
                        </tbody>
                     </table><!-- end tabel-2-->
                </section>
                <section class="section">3</section>
                <div class="clear"></div>
             </div><!-- end tab-content -->
             <div class="clear"></div>
         </div><!-- end tab-box -->
       <div class="clear"></div>
     </div> <!-- end middle -->
    <div class="clear"></div>
</div>


<?php require_once('footer.php') ?>
