<style>
#panel-content-right {
    float: right;
    direction: rtl;
    width: 500px;
    padding: 20px;
}


#panel-content-left {
    direction: rtl;
    width: 700px;
    float: right;
    padding: 20px;
}

#panel-content-right ul li {
    margin: 10px 0;
    background: aqua;
}

#panel-content-left table {
    float: right;

}

#panel-content-left table tr td {
    border: 1px solid;
}

#top {
    width: 100%;
    height: 200px;
    float: right;
    position: relative;
    margin:20px 0;

}

#top #profile-picture {
    width: 200px;
    height: 200px;
    float: right;
    border: 1px solid;
    border-radius: 50%;
    position: absolute;
    left: 0;
    right: 0;
    margin:auto;
    overflow:hidden;
}

#top #profile-picture img {
    float: right;
    width: 100% ;
    height:100%;
}
#content-bottom{
    width:100%;
    text-align:center;
    float:right
}
#content-bottom ul li{
margin:10px 0;
}
</style>
<div id="panel-content-right">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">List with icon</h4>
            <p class="card-description">پنل کاربری</p>
            <ul class="list-arrow">
                <li>نوبت های من</li>
                <li>مشاهده آگهی های منتشر شده</li>
                <li>مشاهده جزییات</li>
                <li>مشاهد جدول لیست خدمات</li>
                <li>مشاهده لیست خدمات</li>
            </ul>
        </div>
    </div>
</div>