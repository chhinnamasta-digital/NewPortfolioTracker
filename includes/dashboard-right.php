<div class="dashboard-right-side-outlet">
    <div class="dashboard-block">
        <div class="user-manage-header">
            <div class="username">
                <h4>Hello, <?=$sessionUserName?></h4>
            </div>
            <div class="user-assets">
                <ul>
                    <li>
                        <a href="<?=$url_?>add-assets.php" class="add-assets-btn">
                            <span>Add assets</span>
                            <object data="<?=$url_?>assets/images/icons/add.svg"" type=""></object>
                        </a>
                    </li>
                    <li>
                        <a href="<?=$url_?>" class="manage-btn">
                            <span>Manage</span>
                            <object data="<?=$url_?>assets/images/icons/manage.svg"" type=""></object>
                        </a>
                    </li>
                    <li>
                        <a href="<?=$url_?>">
                            <span></span>
                            <object data="<?=$url_?>assets/images/icons/notify.svg"" type=""></object>
                        </a>
                    </li>
                    <li>
                        <a href="<?=$url_?>">
                            <span></span>
                            <img src="<?=$url_?>assets/images/user.png"" class="img-fluid" />
                        </a>
                    </li>
                </ul>
            </div>
            <div class="user_add_assets_list_section add-assets-block">
                <div class="assets-list">
                    <ul>
                        <?php
                            $select_assets_list = "SELECT * From assets_list WHERE id != ''";
                            $query_assets_list = mysqli_query($conn, $select_assets_list);
                            while($run_assets_list = mysqli_fetch_array($query_assets_list)){
                                $assets_list_id = $run_assets_list['id'];
                                $assets_name = $run_assets_list['assets_name'];
                                $assets_img = $run_assets_list['assets_img'];
                        ?>
                                <li data-list-id="<?=$assets_list_id?>">
                                    <object data="<?=$url_?>assets/images/icons/<?=$assets_img?>" type=""></object>
                                    <span><?=$assets_name?></span>
                                </li>
                        <?php 
                            }
                        ?>
                    </ul><div class="selectedAssetsForm">
                    <div class="cryptoBlock" id="3">
                        <form action="<?=$_SERVER['PHP_SELF'];?>">
                            <input type="text" class="search-name" placeholder="crypto Search here">
                        </form>
                        <div class="asset-name">
                            <ul id="asset-name-list">                            
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>                    
</div>