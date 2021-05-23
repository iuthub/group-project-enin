<style>
*{
    font-family: 'Montserrat', sans-serif;
}
</style>
<header class="mb-auto">
    <div>
        <div class="container">
            <header class="nav nav-navbar-2 justify-content-center d-flex flex-auto align-items-center py-3  end-100" style="float: right">
                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 nav-el" style="">
                    <li class="nav-item">
                    <li class="filter-btn nav-item">
                        <div class="block-grid">
                            <div class="search_block">
                               <div class="input">
                                   <form method='GET' >
                                       <input type='text' name="search" placeholder="search..." required/>
                                       <span>
                                <button class="delete delete-btn" style="" type='submit'>
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16" style="margin-bottom: 9px;">
                      <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                                </button>
                                  </span>
                                   </form>
                               </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-filter-square-fill" viewBox="0 0 16 16">
                                    <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm.5 5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1 0-1zM4 8.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm2 3a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5z"/>
                                </svg>
                                <div class="dropdown-list" aria-labelledby="bd-versions">
                                    <a class="dropdown-item" href="#">
                                        {{$sort}}
                                    </a>
                                    <form method="GET">
                                        <input value="0" style="display:none;">
                                        <a class="dropdown-item" href="/board?sort=0">ASC</a>
                                    </form>
                                    <form method="GET">
                                        <input value="1" style="display:none;">
                                        <a class="dropdown-item" href="/board?sort=1">DESC</a>
                                    </form>
                                </div>
                        </div>
                    </li>
                </ul>
            </header>
        </div>
    </div>
</header>
<header class="mb-auto">
    <div>
    </div>
</header>



