<aside>
    <div class="profile_template">
        <i class="fas fa-user-circle"></i>
        <div class="profile">
            <h3>Lorn Sovannra</h3>
            <p>sovannra.lorn@gmail.com</p>
        </div>
    </div>
    <div class="search_bar">
        <input type="text" placeholder="Search" >
        <i class="fas fa-search"></i>
    </div>
    <div class="nav">
        <a href={{ route("home") }} class="my_day">
            <i class="fas fa-sun"></i>
            <h4>My Day</h4>
        </a>
        <a href={{ route("important") }} class="important">
            <i class="far fa-star"></i>
            <h4>Important</h4>
        </a>
        <a href={{ route("planned") }} class="planned">
            <i class="fas fa-book"></i>
            <h4>Planned</h4>
        </a>
        <a href={{ route("assigned_to_me") }} class="assigned_to_me">
            <i class="fas fa-user-alt"></i>
            <h4>Assigned to me</h4>
        </a>
        <a href={{ route("tasks") }} class="task">
            <i class="fas fa-home"></i>
            <h4>Tasks</h4>
        </a>
    </div>
</aside>