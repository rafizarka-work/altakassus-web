 <!-- Main Slider Section Starts -->
 <section class="mainslider" id="mainslider">
     <article class="content">
         <div class="rev_slider_wrapper fullscreen-container" data-alias="scroll-effect76"
             style="background-color:#111111;padding:0px;">
             <!-- START REVOLUTION SLIDER 5.0.7 fullscreen mode -->
             <div id="rev_slider_scroll_effects" class="rev_slider fullscreenbanner" style="display:none;"
                 data-version="5.0.7">
                 @php
                     $commonSlides = Lang::get('common.slider.common');
                     $contractingSlides = Lang::get('contracting.slider.items');
                     $hvacSlides = Lang::get('hvac.slider.items');

                     $commonSlides = is_array($commonSlides) ? $commonSlides : [];
                     $contractingSlides = is_array($contractingSlides) ? $contractingSlides : [];
                     $hvacSlides = is_array($hvacSlides) ? $hvacSlides : [];

                     $slides = array_merge($commonSlides, $contractingSlides, $hvacSlides);
                 @endphp

                 <ul>
                     @foreach ($slides as $i => $slide)
                         @php
                             $img = asset($slide['image'] ?? 'img/slider/placeholder.jpg');
                             $title = $slide['title'] ?? '';
                             $sub = $slide['subtitle'] ?? '';
                             $btnTxt = $slide['button_text'] ?? '';
                             $btnUrl = $slide['button_link'] ?? '#';
                             $idx = 300 + $i; // لتوليد IDs فريدة
                         @endphp

                         <!-- SLIDE -->
                         <li data-index="rs-{{ $idx }}" data-transition="slideoverhorizontal"
                             data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut"
                             data-masterspeed="1000" data-thumb="{{ $img }}" data-rotate="0"
                             data-saveperformance="off" data-title="{{ $title }}" data-description="">

                             <!-- MAIN IMAGE -->
                             <img src="{{ $img }}" alt="{{ $title }}" data-bgposition="center center"
                                 data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg"
                                 data-no-retina>

                             <!-- Overlay -->
                             <div class="tp-caption tp-shape tp-shapewrapper rs-parallaxlevel-0"
                                 id="slide-{{ $idx }}-overlay" data-x="['center','center','center','center']"
                                 data-hoffset="['0','0','0','0']" data-y="['bottom','bottom','bottom','bottom']"
                                 data-voffset="['0','0','0','0']" data-width="full"
                                 data-height="['400','400','400','550']"
                                 data-transform_in="opacity:0;s:1500;e:Power2.easeInOut;"
                                 data-transform_out="opacity:0;s:1000;" data-start="0" data-basealign="slide"
                                 data-responsive_offset="off" data-responsive="off"
                                 style="z-index:5;background:linear-gradient(to bottom,rgba(0,0,0,0) 0%,rgba(0,0,0,.45) 100%);">
                             </div>

                             <!-- Title -->
                             @if ($title)
                                 <div class="tp-caption BigBold-Title tp-resizeme"
     id="slide-{{ $idx }}-title"
     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
     data-y="['middle','middle','middle','middle']" data-voffset="['-40','-40','-30','-20']"
     data-fontsize="['64','56','42','32']" data-lineheight="['70','62','48','38']"
     data-whitespace="normal" data-width="['100%','100%','100%','100%']"
     data-transform_in="y:[100%];opacity:0;s:800;e:Power3.easeInOut;"
     data-transform_out="y:[100%];opacity:0;s:600;e:Power2.easeInOut;"
     data-start="500"
     data-textalign="['center','center','center','center']"
     data-responsive_offset="on"
     data-paddingleft="['0','0','0','0']"
     data-paddingright="['0','0','0','0']"
     style="z-index:6; white-space:normal; width:100%; text-align:center !important; padding:0 20px; box-sizing:border-box;">
  {{ $title }}
</div>
                             @endif

                             <!-- Subtitle -->
                             @if ($sub)
                                 {{-- <div class="tp-caption BigBold-SubTitle rs-parallaxlevel-0 scroll-effects-text"
           id="slide-{{ $idx }}-sub"
           data-x="['left','left','left','left']" data-hoffset="['55','55','33','20']"
           data-y="['bottom','bottom','bottom','bottom']" data-voffset="['40','1','74','58']"
           data-fontsize="['15','15','15','13']" data-lineheight="['24','24','24','20']"
           data-transform_in="y:[100%];opacity:0;s:1500;e:Power3.easeInOut;"
           data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;"
           data-start="650" style="z-index:7;white-space:normal;max-width:410px;">
           {{ $sub }}
      </div> --}}
                             @endif

                             <!-- Button -->
                             @if ($btnTxt)
                                 <div class="tp-caption" id="slide-{{ $idx }}-btn"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['middle','middle','middle','middle']" data-voffset="['80','80','80','80']"
                                     data-transform_in="y:[100%];opacity:0;s:1500;e:Power3.easeInOut;"
                                     data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;" data-start="650"
                                     style="z-index:8;">
                                     <a href="{{ url('contractors') }}" class="custom-button slider-button scroll-to-target">
                                         {{ $btnTxt }}
                                     </a>
                                 </div>
                             @endif
                         </li>
                     @endforeach
                 </ul>


                 <div class="tp-static-layers"></div>
                 <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
             </div>
         </div>
         <!-- END REVOLUTION SLIDER -->
         <script type="text/javascript">
             // FORCE center alignment - Override Revolution Slider positioning
             jQuery(document).ready(function($) {
                 function forceCenterSlider() {
                     // Target all title captions
                     $('[id*="slide-"][id*="-title"], .tp-caption.BigBold-Title').each(function() {
                         var $elem = $(this);

                         // Remove any transform that Revolution Slider adds
                         $elem.css({
                             'text-align': 'center',
                             'width': '100%',
                             'left': '0',
                             'right': '0',
                             'margin-left': '0',
                             'margin-right': '0',
                             'transform': 'translateX(0) !important',
                             '-webkit-transform': 'translateX(0) !important',
                             'direction': 'ltr'
                         });

                         // Use setAttribute to force styles
                         var forceStyle = 'text-align: center !important; width: 100% !important; left: 0 !important; right: 0 !important; direction: ltr !important;';
                         this.setAttribute('style', (this.getAttribute('style') || '') + ';' + forceStyle);
                     });
                 }

                 // Execute multiple times to override Revolution Slider
                 forceCenterSlider();
                 setTimeout(forceCenterSlider, 100);
                 setTimeout(forceCenterSlider, 500);
                 setTimeout(forceCenterSlider, 1000);
                 setTimeout(forceCenterSlider, 1500);
                 setTimeout(forceCenterSlider, 2000);
                 setTimeout(forceCenterSlider, 3000);

                 // Keep monitoring and forcing
                 setInterval(forceCenterSlider, 2000);

                 $(window).on('load', forceCenterSlider);
             });
         </script>
     </article>
 </section>
 <!-- Main Slider Section Ends -->
