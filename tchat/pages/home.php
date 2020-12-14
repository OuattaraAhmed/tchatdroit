 <!-- lien bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<h2 class="header">Home</h2>
<!-- <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aspernatur consectetur consequuntur dolores
    ducimus eligendi eveniet expedita facere incidunt natus quam quibusdam quidem, repellat sed sunt tempore voluptatem?
    Eligendi, ipsa!
</div>
<div>Aperiam autem beatae consequuntur cum dicta eligendi eum ex fugiat laboriosam molestiae neque numquam quaerat
    quidem similique sint, sunt, vitae voluptatem! Assumenda earum est eveniet exercitationem facilis iusto recusandae
    voluptas?
</div>
<div>Cupiditate in minus quas quis ut? Commodi consequatur magnam nam quidem sapiente sequi sit veritatis voluptatem!
    Dolore earum inventore nemo quaerat sequi? Doloremque earum ipsam ipsum, quidem ratione sapiente vero!
</div>
<div>A amet aperiam, aspernatur assumenda culpa dolores doloribus eaque esse harum, itaque labore magnam magni minus
    molestias obcaecati optio pariatur, sapiente similique vero voluptates? Ad consectetur illum labore nobis quia.
</div>
<div>Autem consequuntur cupiditate debitis dolore dolorem est, et eveniet exercitationem fugit hic in ipsam labore
    obcaecati omnis, optio praesentium quae quibusdam recusandae reiciendis rem repudiandae sed sequi ut. Ex, expedita!
</div>
<div>Aliquam, architecto aspernatur at cum delectus distinctio doloremque doloribus earum exercitationem facilis fugiat
    ipsa ipsam labore maiores molestias nulla odio porro praesentium reprehenderit repudiandae rerum sunt temporibus
    tenetur, totam ut.
</div>
<div>Ad blanditiis consectetur, dicta distinctio doloremque eaque enim error illum ipsam iure laudantium minima minus
    nesciunt nobis nulla numquam pariatur qui quod repellendus repudiandae sapiente sint, sunt ullam? Aut, quod?
</div>
<div>Aliquid, aspernatur dolorum earum in obcaecati provident sequi veritatis? At dolore doloribus eveniet facere harum
    maiores molestiae nihil perferendis quis quo sint, ullam unde velit voluptas, voluptate. Ab, impedit veritatis.
</div>
<div>Corporis cum fugit magni rem repudiandae velit, voluptates. A accusantium consequuntur debitis dicta eos et
    exercitationem expedita fuga id, in modi molestias, necessitatibus obcaecati pariatur qui quis saepe soluta
    voluptate!
</div>
<div>Animi aperiam at culpa dignissimos distinctio dolor dolore, eveniet facilis ipsam iure laborum libero magnam maxime
    molestiae natus neque nesciunt officia perspiciatis possimus provident quam totam voluptates voluptatibus.
    Assumenda, tenetur?
</div> -->
<body style="background-image:url('../img/droit.jpg');opacity: 0.8">

                <section style="margin: 15%; background-color: white; border-radius: 16px">
                    <div>
                    <?php
            if(isLogged() != 1){
                ?>
                <div class="row">
                    <div class="col" style="margin-right: 3px;padding: 4%;padding-left:20%;background-color: #34495e">
                       <h4><strong><a href="../gestion_rdv.php" style="text-decoration: none; color: white">Admin</a></strong></h4> 
                    </div>

                    <div class="col" style="margin-left: 3px;padding: 4%;padding-left:14%;background-color: #34495e">
                       <h4><strong><a href="index.php?page=signin" class="<?php echo ($page=='signin') ? 'active' : '' ?>" style="text-decoration: none; color: white">Debuter un tchat</a></strong></h4> 
                    </div>
                </div> 
                <?php
            }
        ?>
        </div>
 </section>

</body>