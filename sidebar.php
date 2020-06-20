    <div class="card">
        <img class="card-img-top" src="https://miro.medium.com/max/283/1*Cknt3vaBYStpUn-Fo3N8rg.jpeg" alt="Card image" style="width:100%">
        <h4 style="text-align: center;padding:15px 0">
            Jason
        </h4>

        <div class="card-body" style="border-top:0.2px solid #e9e9e9 ;">

            <ul class="list-group">
                <li class="list-group-item <?php if (isset($_GET['my_orders'])) {
                                                echo "active";
                                            } ?>">

                    <a href="account.php?my_orders">

                        <i class="fa fa-list"></i> My Orders

                    </a>

                </li>

                <li class="list-group-item <?php if (isset($_GET['pay_offline'])) {
                                                echo "active";
                                            } ?>">

                    <a href="account.php?details">

                        <i class="fa fa-bolt"></i> My Details

                    </a>

                </li>
                
            </ul>

        </div>
    </div>