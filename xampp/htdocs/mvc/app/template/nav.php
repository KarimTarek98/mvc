<nav class="main_navigation">
    <div class="employee_info">
        <div class="profile_picture">
            <img src="img/user.png" alt="User profile picture">
        </div>
        <span class="name">كريم طارق</span>
        <span class="privilege"><?= $text_app_manager ?></span>
    </div>
    <ul class="app_navigation">
        <li><a href="/"><i class="fa fa-dashboard"></i><?= $text_stats ?></a></li>
        <li><a href="/users"><i class="fa fa-group"></i><?= $text_users ?></a></li>
        <li><a href="/store"><i class="material-icons">store</i><?= $text_store ?></a></li>
        <li><a href="/clients"><i class="material-icons">contacts</i><?= $text_clients ?></a></li>
        <li><a href="/suppliers"><i class="material-icons">group</i><?= $text_suppliers ?></a></li>
        <li><a href="/expenses"><i class="fa fa-money"></i><?= $text_expenses ?></a></li>
        <li><a href="/transactions"><i class="fa fa-credit-card"></i><?= $text_transactions ?></a></li>
        <li><a href="/reports"><i class="fa fa-bar-chart"></i><?= $text_reports ?></a></li>
        <li><a href="/notifications"><i class="fa fa-bell"></i><?= $text_notifications ?></a></li>
    </ul>
</nav>
<div class="action_view">