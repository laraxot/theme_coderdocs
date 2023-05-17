<div id="docs-sidebar" class="docs-sidebar">
    <div class="top-search-box d-lg-none p-3">
        <form class="search-form">
            <input type="text" placeholder="Search the docs..." name="search" class="form-control search-input">
            <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
        </form>
    </div>

    <nav id="docs-nav" class="docs-nav navbar">
        <ul class="section-items list-unstyled nav flex-column pb-3">
            @foreach (xotModel('article')->where('parent_id', 0)->get()
    as $article)
                <li class="nav-item section-title">
                    <a class="nav-link " href="{{ Panel::make()->get($article)->url('show') }}">
                        <span class="theme-icon-holder mr-2">
                            <i class="fas fa-map-signs"></i>
                        </span>
                        {{ $article->title }}
                    </a>
                </li>
                @foreach ($article->sons as $sub)
                    <li class="nav-item">
                        <a class="nav-link " href="{{ Panel::make()->get($sub)->url('show') }}">
                            {{ $sub->title }}
                        </a>
                    </li>
                @endforeach
            @endforeach
        </ul>
    </nav>
    <!--//docs-nav-->
</div>
<!--//docs-sidebar-->
