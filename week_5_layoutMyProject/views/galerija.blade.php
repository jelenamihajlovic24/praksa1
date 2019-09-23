@extends('layouts.master')
@section('title', 'Galerija')

@section('content')
  <div class="container" style="margin:30px auto">
    <div class="row">
      <!-- Start left section -->
      <div class="col-12">
        <div text-center>
        <h2>Domaći specijaliteti</h2>
        <h5><a targett="_blank" href="https://domacirecepti.net/">Najljepši domaći specijaliteti</a></h5>
        </div>
        
        
            <div class="col-12 slika">
            <div id="slider_main" class="owl-carousel owl-theme">
                <div>
                    <img src="images/jela/slider/01.jpg" alt="specijaliteti" class="img-fluid rounded-circle">
                </div>
                <div>
                    <img src="images/jela/slider/02.jpg" alt="specijaliteti" class="img-fluid rounded-circle">
                </div>
                <div>
                    <img src="images/jela/slider/03.jpg" alt="specijaliteti" class="img-fluid rounded-circle">
                </div>
                <div>
                    <img src="images/jela/slider/04.jpg" alt="specijaliteti" class="img-fluid rounded-circle">
                </div>
                <div>
                    <img src="images/jela/slider/05.jpg" alt="specijaliteti" class="img-fluid rounded-circle">
                </div>
                <div>
                  <img src="images/jela/slider/06.jpg" alt="specijaliteti" class="img-fluid rounded-circle">
                </div>
                <div>
                  <img src="images/jela/slider/07.jpg" alt="specijaliteti" class="img-fluid rounded-circle">
              </div>
        </div><!-- end slider-->
        </div><!-- end col12-->
     
        
    </div><!-- end col4-->

      <script>
			$(document).ready(function(){
			$("#slider_main").owlCarousel({
				items:3,
				loop:true,
				autoplay:true,
				dots:true,
				nav:false,
        margin:15
			});	
			});
		</script><!-- end script -->

      <div class="col-sm-12 text-center">
        <h2>Omiljena jela domaće kuhinje</h2>
        <h5><i>Tajne domaće kuhinje</i></h5>
                    <div class="my-gallery galerija_jela" itemscope itemtype="http://schema.org/ImageGallery">
                    <div class="row">
                        <figure class="col-12 col-sm-6 col-lg-2" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                            <a href="images/jela/jagnjetina.jpg" itemprop="contentUrl" data-size="960x640">
                                <img src="images/jela/jagnjetina_small.jpg" itemprop="thumbnail" alt="Image description" class="img-fluid" />
                            </a>
                            <figcaption itemprop="caption description">Jagnjetina</figcaption>
                        </figure>
                        <figure class="col-12 col-sm-6 col-lg-2" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                            <a href="images/jela/gibanica.jpg" itemprop="contentUrl" data-size="960x640">
                                <img src="images/jela/gibanica_small.jpg" itemprop="thumbnail" alt="Image description" class="img-fluid" />
                            </a>
                            <figcaption itemprop="caption description">Gibanica</figcaption>
                        </figure>
                        <figure class="col-12 col-sm-6 col-lg-2" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                            <a href="images/jela/kiseli-kupus.jpg" itemprop="contentUrl" data-size="960x640">
                                <img src="images/jela/kiseli-kupus_small.jpg" itemprop="thumbnail" alt="Image description" class="img-fluid" />
                            </a>
                            <figcaption itemprop="caption description">Kiseli kupus</figcaption>
                        </figure>
                        <figure class="col-12 col-sm-6 col-lg-2" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                            <a href="images/jela/kupus-sa-sljivama.jpg" itemprop="contentUrl" data-size="960x640">
                                <img src="images/jela/kupus-sa-sljivama_small.jpg" itemprop="thumbnail" alt="Image description" class="img-fluid" />
                            </a>
                            <figcaption itemprop="caption description">Kupus sa šljivama</figcaption>
                        </figure>
                        <figure class="col-12 col-sm-6 col-lg-2" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                            <a href="images/jela/leskovacki-cevap.jpg" itemprop="contentUrl" data-size="960x640">
                                <img src="images/jela/leskovacki-cevap_small.jpg" itemprop="thumbnail" alt="Image description" class="img-fluid" />
                            </a>
                            <figcaption itemprop="caption description">Leskovački ćevap</figcaption>
                        </figure>
                        <figure class="col-12 col-sm-6 col-lg-2" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                            <a href="images/jela/lonac.jpg" itemprop="contentUrl" data-size="960x640">
                                <img src="images/jela/lonac_small.jpg" itemprop="thumbnail" alt="Image description" class="img-fluid" />
                            </a>
                            <figcaption itemprop="caption description">Lonac</figcaption>
                        </figure>
                        <figure class="col-12 col-sm-6 col-lg-2" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                            <a href="images/jela/peka.jpg" itemprop="contentUrl" data-size="960x640">
                                <img src="images/jela/peka_small.jpg" itemprop="thumbnail" alt="Image description" class="img-fluid" />
                            </a>
                            <figcaption itemprop="caption description">Peka</figcaption>
                        </figure>
                        <figure class="col-12 col-sm-6 col-lg-2" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                            <a href="images/jela/pogaca.jpg" itemprop="contentUrl" data-size="960x640">
                                <img src="images/jela/pogaca_small.jpg" itemprop="thumbnail" alt="Image description" class="img-fluid" />
                            </a>
                            <figcaption itemprop="caption description">Pogača</figcaption>
                        </figure>
                        <figure class="col-12 col-sm-6 col-lg-2" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                            <a href="images/jela/prsut.jpg" itemprop="contentUrl" data-size="960x640">
                                <img src="images/jela/prsut_small.jpg" itemprop="thumbnail" alt="Image description" class="img-fluid" />
                            </a>
                            <figcaption itemprop="caption description">Pršut</figcaption>
                        </figure>
                        <figure class="col-12 col-sm-6 col-lg-2" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                            <a href="images/jela/rijecna-riba.jpg" itemprop="contentUrl" data-size="960x640">
                                <img src="images/jela/rijecna-riba_small.jpg" itemprop="thumbnail" alt="Image description" class="img-fluid" />
                            </a>
                            <figcaption itemprop="caption description">Riječna riba</figcaption>
                        </figure>
                        <figure class="col-12 col-sm-6 col-lg-2" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                            <a href="images/jela/stapici.jpg" itemprop="contentUrl" data-size="960x640">
                                <img src="images/jela/stapici_small.jpg" itemprop="thumbnail" alt="Image description" class="img-fluid" />
                            </a>
                            <figcaption itemprop="caption description">Štapići</figcaption>
                        </figure>
                        <figure class="col-12 col-sm-6 col-lg-2" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                            <a href="images/jela/svinjski-file.jpg" itemprop="contentUrl" data-size="960x640">
                                <img src="images/jela/svinjski-file_small.jpg" itemprop="thumbnail" alt="Image description" class="img-fluid" />
                            </a>
                            <figcaption itemprop="caption description">Svinjski file</figcaption>
                        </figure>
                        </div><!-- end row -->
                    </div><!-- end my-gallery -->
      </div><!-- end col8-->
      </div><!-- end row-->
    </div><!-- end container-->

   


  <!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

        <!-- Background of PhotoSwipe. 
             It's a separate element as animating opacity is faster than rgba(). -->
        <div class="pswp__bg"></div>
    
        <!-- Slides wrapper with overflow:hidden. -->
        <div class="pswp__scroll-wrap">
    
            <!-- Container that holds slides. 
                PhotoSwipe keeps only 3 of them in the DOM to save memory.
                Don't modify these 3 pswp__item elements, data is added later on. -->
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
    
            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
            <div class="pswp__ui pswp__ui--hidden">
    
                <div class="pswp__top-bar">
    
                    <!--  Controls are self-explanatory. Order can be changed. -->
    
                    <div class="pswp__counter"></div>
    
                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
    
                    <button class="pswp__button pswp__button--share" title="Share"></button>
    
                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
    
                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
    
                    <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                    <!-- element will get class pswp__preloader--active when preloader is running -->
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                          <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                          </div>
                        </div>
                    </div>
                </div>
    
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div> 
                </div>
    
                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                </button>
    
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                </button>
    
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
    
            </div>
    
        </div>
    
    </div><!-- end root PhotoSwipe -->
@endsection('content')