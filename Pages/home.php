    <main>
        <div class="main-apresentation">
            <div class="apresentation-text">
                <h1 class="apresentation-title">
                    Transportando Felicidade
                 </h1>
                 <h1 class="apresentation-subtitle">
                     Os melhores Donuts
                 </h1>
                 <h1 class="apresentation-description">
                     variedades em Donuts <br> descubra os mais incriveis sabores.
                 </h1>
            </div>            
            <div class="apresentation-img">
                <img class="img" src="images/home-image.png" alt="">
            </div>
            
        </div>

        <section id="Items">
                <span class="title-items">Nossos Donuts</span>
                <div class="icone-mouse">
                    <span id="icon-mouse" class="iconify" data-inline="false" data-icon="iconoir:mouse-scroll-wheel" style="color: #4d4d4d; font-size: 55px;"></span>   
                </div>
                 
            <div class="item1">
                <img src="images/item1-img.png" alt="">
                <div class="item-text">
                    <h1 class="item-title">
                        Donuts
                    </h1>
                    <h1 class="item-description">
                        Sabores incriveis, com os melhores e confiaveis ingredientes. Conheça esses doces espetaculares...
                    </h1>
                </div>                         
            </div>
               
            <div class="item2">
                <img src="images/item2-img.png" alt="">
                <div class="item-text">
                    <h1 class="item-title">
                        Variedades
                    </h1>
                    <h1 class="item-description">
                        Temos 3 categorias saborosas de Donuts, que são os Clássicos, Recheados e Especiais. Venha conferir ou faça o pedido dos doces mais deliciosos da cidade.
                    </h1>
                </div>                         
            </div>
                          
            </div>
        </section>        
    </main>

   

    <!-- Imports Javascripts -->

    <!-- Carousel -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Iconify -->
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>

    <!-- Animações JS - SmooveJS -->
    <script src="js/jquery.smoove.js" ></script> 

    <script>
        // Reproduzindo a animação
        $(".item1").smoove({
        offset  : '40%',
        moveX   : '200px',
        moveY   : '200px',});

        $(".item2").smoove({
        offset  : '40%',
        moveY   : '100px',
        moveX   : '-100px',});

        $(".item3").smoove({
        offset  : '40%',
        moveY   : '-200px',});
    </script>
    
      
    
</body>
</html>
