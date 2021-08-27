<?php require_once "../dados/array-produtos.php" ;

?>

<head>

</head>
        <section>
            <div class="products-title-section">
                Todos os produtos
            </div>
            <div class="products-section-products">
                <div class="product_header donuts-header">
                    <h1 class="product_title">Donuts</h1>
                </div>                
                    <form action="/Pages/produto.php" method="POST">
                        <div class="owl-carousel">
                        <?php foreach($donuts as $item): ?>
                            <div class="item"> 
                                <div class="product_products">
                                    <button class="product_card">
                                        <div class="card_image" style="background: url('<?= $item['imgPath'] ?>') no-repeat center center/cover;">
                                        </div>
                                        <div class="card_item">
                                            <input type="hidden" name="id" value="<?= $item['id'] ?>">
                                            <input type="hidden" name="array" value="<?= $tablename = '$donuts' ?>">
                                            <div class="card_title">
                                                <h4><?= $item['nome'] ?></h4>
                                                <p>Clássicos</p>
                                            </div>
                                            <div class="card_price donuts">
                                                <p>R$<?= $item['preco']?></p>
                                                <div class="rating">
                                                    <div class="donuts-rating"></div>
                                                    <div class="donuts-rating"></div>
                                                    <div class="donuts-rating"></div>
                                                    <div class="donuts-rating"></div>
                                                </div>
                                            </div>                                
                                        </div>                            
                                    </button>                                    
                                </div>
                            </div>  
                        <?php endforeach; ?>      
                    </div>
                </form>                
            </div>
            <div class="products-section-products">
                <div class="product_header recheados-header">
                    <h1 class="product_title">Recheados</h1>
                </div>                
                    <form name="recheados-forms" action="/Pages/produto.php" method="POST">
                        <div class="owl-carousel">
                        <?php foreach($recheados as $item): ?>
                            <div class="item"> 
                                <div class="product_products">
                                    <div class="product_card">
                                        <div class="card_image" style="background: url('<?= $item['imgPath'] ?>') no-repeat center center/cover;">
                                        </div>
                                        <div class="card_item">
                                            <div class="card_title">
                                            <input type="hidden" name="id" value="<?= $item['id'] ?>">
                                            <input type="hidden" name="array" value="<?= $tablename = '$recheados' ?>">
                                                <h4><?= $item['nome'] ?></h4>
                                                <p>Rechados</p>
                                            </div>
                                            <div class="card_price recheados">
                                                <p>R$<?= $item['preco'] ?></p>
                                                <div class="rating">
                                                    <div class="recheados-rating"></div>
                                                    <div class="recheados-rating"></div>
                                                    <div class="recheados-rating"></div>
                                                    <div class="recheados-rating"></div>
                                                </div>
                                            </div>                                
                                        </div>                            
                                    </div>
                                </div>
                            </div>  
                        <?php endforeach; ?>      
                    </div>
                </form>                
            </div>
            <div class="products-section-products">
                <div class="product_header especiais-header">
                    <h1 class="product_title">Especiais</h1>
                </div>                
                    <form name="especiais-forms" action="/Pages/produto.php" method="POST">
                        <div class="owl-carousel">
                        <?php foreach($especiais as $item): ?>
                            <div class="item"> 
                                <div class="product_products">
                                    <div class="product_card" onClick="document.forms['eespeciais-forms'].submit();">
                                        <div class="card_image" style="background: url('<?= $item['imgPath'] ?>') no-repeat center center/cover;">
                                        </div>
                                        <div class="card_item">
                                            <div class="card_title">
                                                <input type="hidden" name="id" value="<?= $item['id'] ?>">
                                                <input type="hidden" name="array" value="<?= $tablename = '$especiais' ?>">
                                                <h4><?= $item['nome'] ?></h4>
                                                <p>Especiais</p>
                                            </div>
                                            <div class="card_price especiais">
                                                <p name="preco" class="">R$<?= $item['preco'] ?></p>
                                                <div class="rating">
                                                    <div class="especiais-rating"></div>
                                                    <div class="especiais-rating"></div>
                                                    <div class="especiais-rating"></div>
                                                    <div class="especiais-rating"></div>
                                                </div>
                                            </div>                                
                                        </div>                            
                                    </div>
                                </div>
                            </div>  
                        <?php endforeach; ?>      
                    </div>
                </form>                
            </div>
        </section>
        

    <!-- Carousel -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- iconify -->
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>

    <script type="text/javascript">
        
        //Enviar div no Formulario com method POST
  
        //Slider JS
        $('.owl-carousel').owlCarousel({
            loop:false,
            autoWidth:true,
            items:4,
            nav:false,
            margin:10,
            autoHeight:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        });
      </script>  
        




    

        
    
