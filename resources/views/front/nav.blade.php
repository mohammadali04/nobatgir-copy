<style>
nav {
    background: #1bff6d none repeat scroll 0 0;
    border-radius: 10px;
    display: block;
    float: right;
    height: 50px;
    margin-top: 5px;
    width: 100%;
}

nav a {
    text-decoration: none;
}

nav #first-ul {
    float: right;
    margin: 0;
    padding: 0;

}

nav #first-ul>li {
    float: right;
    margin: 10px;
    padding: 0;
    width: 60px;
    cursor: pointer;
}

nav ul>li.active {
    background: #05a8bc;
}

nav .level2 {
    float: right;
    width: 100px;
}

nav .level2 li {
    float: right;
    width: 400px;
}

nav .level2-divs {
    border-right: 1px solid #cccccc;
    float: right;
    height: 400px;
    width: 267px;
}

nav .total-list {
    background: #64ffa5 none repeat scroll 0 0;
    border-radius: 4px;
    box-shadow: 2px 3px 4px #05a8bc;
    float: right;
    height: 400px;
    left: 368px;
    margin: -3px -59px;
    position: absolute;
    top: 185px;
    width: 1200px;
    display: none;
    z-index: 3
}

#content-meno {
    background: #ccc none repeat scroll 0 0;
    display: none;
    height: 400px;
    position: relative;
    top: 48px;
    width: 1200px;
}
</style>
<nav>
    <ul id="first-ul">
        @php
        use App\Http\Controllers\front\IndexController;
        $category=new IndexController();
        $categories=$category->categories();
        $data_time=1;
        @endphp
        @foreach($categories as $category)
        <li data-time="{{$data_time}}">
            {{$category->title}}
            <ul>

                <li>
                    <a href=""></a>

                    <div class="total-list">
                        <div class="level2-divs">
                            <ul class="level2">
                                @foreach($category->children as $row)
                                <li>                           
                                    <a href="">{{$row->title}}</a>
                                    <ul>
                                        @foreach($row->children as $row2)
                                        <li>
                                            <a href="">{{$row2->title}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="level2-divs"></div>
                        <div class="level2-divs"></div>
                        <div class="level2-divs"></div>
                    </div>
                </li>
            </ul>
        </li>
        @php
        $data_time++;
        @endphp
        @endforeach
        <div id="content-meno">

        </div>
    </ul>
</nav>