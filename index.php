<?php
session_start();
include('includes/header.php');
?>
<section class ="main">
    <section class = "hero" id = "About">
        <section class = "heroText">
            <h2>Oregon’s oldest nonprofit.</h2>
            <p>
                We present Catty, a safe haven for feline friends in need. Our mission is to rescue, care for, and rehome cats of all ages, breeds, 
                and personalities. At Catty, we believe every cat deserves a loving home where they can thrive and feel cherished. Our dedicated team of 
                volunteers works tirelessly to provide medical care, socialization, and a nurturing environment for each cat in our shelter. Whether 
                you're looking to adopt a new furry companion or support our efforts, you're helping us make a difference in the lives of cats. Join us 
                in giving these incredible animals a second chance at happiness!
            </p>
            <a href="#"  class = "whiteButton" >Learn more</a>
        </section>
        <div class = "imageHero"></div>
    </section>

    <section class="adoptions" id = "Adopt">
        <h1>Available cuties</h1>
        <div>
            <a href="#Portland">Portland</a>
            <a href="#Salem">Salem</a>
            <a href="#Hilsboro">Hilsboro</a>
        </div>
        <div class = "gradient">
        <div class="show">
            <div class="belt">
            <div class="belt-item">
                <img src="cat1.png" alt="cat">
                <div class="beltText">
                    <h2>MeiMei</h2>
                    <p>Our cutest specimen indeed, MeiMei also known as sister Mei comes from the distant land of China. We rescued her after one of our fans notified us of her. 
                        Her previous owner was a well known animal abuser so we decided to take her into our hands. She has no teeth but that brings no problem as she is resilient and 
                        strong.</p>
                    <a href="#">Adopt</a>
                </div>
            </div>

            <div class="belt-item">
            <img src="cat2.png" alt="cat">
                <div class="beltText">
                    <h2>Johnny</h2>
                    <p>Johnny is a stray with a brown-gray coat that helps him blend into the shadows. His amber eyes are always alert, 
                        observing everything with quiet curiosity. He moves gracefully, despite his rough fur, which shows signs of his life outdoors. 
                        Johnny often lounges in the sun, enjoying the warmth and rest.</p>
                    <a href="#">Adopt</a>
                </div>
            </div>

            <div class="belt-item">
            <img src="cat3.png" alt="cat">
                <div class="beltText">
                    <h2>Cupcake</h2>
                    <p>Cupcake is a sweet little cat with orange, white, and black fur that resembles swirls of frosting. Her playful yet gentle nature
                         makes her as delightful as her name. She loves chasing ribbons and tilts her head curiously when spoken to, as if she 
                         understands every word. The name suits her perfectly, capturing her charm and irresistible cuteness.</p>
                    <a href="#">Adopt</a>
                </div>
            </div>

            <div class="belt-item">
            <img src="cat4.png" alt="cat">
                <div class="beltText">
                    <h2>Tiny</h2>
                    <p>Tiny is a small, brown-furred cat with a big personality that contrasts her name. Found on the street, she quickly showed she was
                         anything but fragile, her resilience shining through. Her soft, warm coat matches her gentle yet adventurous spirit. Tiny’s name
                          is a sweet nod to her petite size and the way she curled up so snugly the day she was rescued.</p>
                    <a href="#">Adopt</a>
                </div>
            </div>

            <div class="belt-item">
            <img src="cat5.png" alt="cat">
                <div class="beltText">
                    <h2>Skull</h2>
                    <p>Skull is a rugged, cool cat with a name as bold as his appearance. Missing half an ear and one eye, he carries his scars like 
                        badges of honor. His sleek movements and piercing gaze give him an air of mystery and strength. The name Skull fits perfectly, 
                        capturing his fierce, unyielding spirit and unforgettable presence.</p>
                    <a href="#">Adopt</a>
                </div>
            </div>

            <div class="belt-item">
            <img src="cat6.png" alt="cat">
                <div class="beltText">
                    <h2>Fresh cat</h2>
                    <p>Blade is a sleek gray cat who loves to hang out at the barber shop, where his name gets plenty of laughs. 
                        His smooth fur almost looks like it’s been styled, and he sits proudly as if he’s waiting for a fresh fade. Blade’s calm, 
                        confident demeanor and sharp appearance make his name a perfect match. He’s the coolest cat in the room, always stealing the show.</p>
                    <a href="#">Adopt</a>
                </div>
            </div>


            </div>
        </div>
        </div>
        </div>
    </section>


    <section class ="store" id = "Store">
        <h1>Store</h1>
        <div class = "products">
            <div class="product-item">
                <img src="product3.png" alt="clippers">
                <div class="product-item-text">
                    <h3>Tick-away spray</h3>
                    <div class="product-item-text-sub">
                        <h3>$10</h3>
                        <a href="Cart.php?action=add&name=Tick-away+spray&price=10&image=product3.png"  class = "blackButton" >Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="product2.png" alt="kibble">
                <div class="product-item-text">
                    <h3>Kibble 5kg</h3>
                    <div class="product-item-text-sub">
                        <h3>$20</h3>
                        <a href="Cart.php?action=add&name=Kibble+5kg&price=20&image=product2.png"  class = "blackButton" >Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="product1.png" alt="spray">
                <div class="product-item-text">
                    <h3>Nail clippers</h3>
                    <div class="product-item-text-sub">
                        <h3>$40</h3>
                        <a href="Cart.php?action=add&name=Nail+clippers&price=40&image=product1.png"  class = "blackButton" >Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="product6.png" alt="litter">
                <div class="product-item-text">
                    <h3>Kibble bowl</h3>
                    <div class="product-item-text-sub">
                        <h3>$15</h3>
                        <a href="Cart.php?action=add&name=Kibble+bowl&price=15&image=product6.png"  class = "blackButton" >Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="product5.png" alt="play stand">
                <div class="product-item-text">
                    <h3>Play pole</h3>
                    <div class="product-item-text-sub">
                        <h3>$50</h3>
                        <a href="Cart.php?action=add&name=Play+pole&price=50&image=product5.png"  class = "blackButton" >Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="product4.png" alt="bowl">
                <div class="product-item-text">
                    <h3>Kitty litter 10kg</h3>
                    <div class="product-item-text-sub">
                        <h3>$10</h3>
                        <a href="Cart.php?action=add&name=Kitty+liter+10kg&price=10&image=product4.png"  class = "blackButton" >Add to cart</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="Locations">
        <h1>Locations</h1>
        <div class = "locationPlace" id = "Portland">
            <img src="location1.png" alt="Portland">
            <div class = "locationPlaceText">
                <h2>Portland</h2>
                <p>Welcome to Catty Portland, part of a network of shelters dedicated to helping cats find their forever homes. Located in the heart of 
                    Portland, our shelter is a safe haven for abandoned, stray, and neglected cats. At Catty Portland, we’re passionate about giving 
                    every cat the care and attention they need to thrive while waiting for their new families. Whether you're looking for a playful 
                    kitten or a calm adult cat, we have a variety of cats available for adoption, each with their unique personality.  Our adoption 
                    process is straightforward, and our friendly staff is here to guide you in finding the perfect match. In addition to adoption, we 
                    offer grooming services, pet supplies, and educational resources to help new cat owners. We believe in promoting responsible pet 
                    ownership and are committed to ensuring every cat’s well-being.  </p>
                <a href="#Adopt"  class = "whiteButton" >About</a>
            </div>
        </div>
        <div class = "locationPlaceRight" id = "Salem">
            <div class = "locationPlaceTextRight" >
                <h2>Salem</h2>
                <p>Welcome to Catty Salem, a proud part of our network of shelters dedicated to helping cats in need. Located in the
                     heart of Salem, our shelter provides a safe and loving environment for abandoned, stray, and neglected cats. At 
                     Catty Salem, we offer a variety of cats available for adoption, from playful  kittens to calm adult cats, each 
                     looking for their forever home. Our simple adoption process and friendly staff ensure you’ll find the perfect 
                     feline companion.We also offer grooming services, pet supplies, and helpful resources for new cat owners. By 
                     supporting Catty Salem—whether through adoption, donation, or volunteering—you help us continue providing essential
                      care and support to cats in need. Visit us today and meet your new scrumpdidddilylumpsios furry friend at our Salem location!  </p>
                <a href="#Adopt"  class = "whiteButton" >About</a>
            </div>
            <img src="location2.png" alt="Salem">
        </div>
        <div class = "locationPlace" id = "Hilsboro">
            <img src="location3.png" alt="Hilsboro">
            <div class = "locationPlaceText">
                <h2>Hilsboro</h2>
                <p>Welcome to Catty Hillsboro, part of our network of shelters committed to giving cats a second chance. Located in 
                    Hillsboro, our shelter provides a safe space for abandoned, stray, and neglected cats while they wait for their 
                    forever homes. We have a variety of cats available for adoption, from playful kittens to affectionate adults, each 
                    ready to find their perfect match. Our easy adoption process and caring staff are here to help guide you every step
                     of the way.At Catty Hillsboro, we also offer grooming services, pet supplies, and valuable resources for new cat 
                     owners. Your support—whether through adopting, donating, or volunteering—helps us continue our mission to care for
                      cats in need. Stop by our Hillsboro location today and meet your new  feline companion!  </p>
                <a href="#Adopt"  class = "whiteButton" >About</a>
            </div>
        </div>
    </section>

    <section id="Blog">


    
    </section>
    <a href = "#" class = "scrollButton"><img src="scrollUp.png" alt=""></a>

        <section class="Blog" id = "#">
            <h1>Blog</h1>
        <div class = "gradientBlog">
        <div class="showBlog">
            <div class="beltBlog">

            <a href = "https://clickhole.com/tag/cats/"> 
                <div class="belt-itemBlog">
                    <img src="blog1.png" alt="">
                    <h3>Cuddling cats beneficial</h3>
                    <p>A study suggests that cuddling cats could prevent stress in 100% of cases</p>
                </div>
            </a>
            <a href = "https://clickhole.com/softening-their-stance-peta-has-conceded-that-with-everything-going-on-in-the-world-right-now-if-you-want-to-watch-a-cockfight-to-blow-off-some-steam-you-can-go-right-ahead/">
                <div class="belt-itemBlog">
                        <img src="blog2.png" alt="">
                    <h3>Cocks on the rise</h3>
                    <p>I don't mean to scare anyone but they're coming, search your immeadiate location for shelter.</p>
            </div>
            </a>
            <a href= "https://clickhole.com/tag/a-basket-of-chihuahuas-not-pictured-in-this-article-fyi-this-list-features-far-less-pleasant-dogs/">
                <div class="belt-itemBlog">
                    <img src="blog4.png" alt="">
                    <h3>Chihuahua's cute</h3>
                    <p>Chihuahuas' declared legally the cutest out of any of the myriad of dog breeds.</p>
                </div>
            </a>
            <a href= "https://avibirds.com/hawks-in-utah/">
                <div class="belt-itemBlog">
                    <img src="blog3.png" alt="">
                    <h3>Top 10 hawks in Utah</h3>
                    <p>Utah is home to a diverse range of hawk species, making it a prime location for birdwatching enthusiasts</p>
                </div>
            </a>
            <a href = "https://elingua.es/pizza-what-could-go-wrong-right/">
                <div class="belt-itemBlog">
                    <img src="blog5.png" alt="">
                    <h3>This pizza may be delicious</h3>
                    <p>You have to try it though, I'm not able to taste it as I am text. You know that text can't taste food, right?</p>
                </div>
            </a>
            <a href = "https://www.ajodo.org/article/S0889-5406(19)30721-8/fulltext">
                <div class="belt-itemBlog">
                    <img src="blog6.png" alt="">
                    <h3>Wild hyrax frenzy</h3>
                    <p>A wild specimen of procavia capnesis has gone on a rampage and murdered 15 children in nearby village.</p>
                </div>
            </a>

            </div>
        </div>
        </div>
    </section>

</section>
<?php include('includes/footer.php')?>
